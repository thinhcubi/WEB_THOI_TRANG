<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function checkLogin(Request $request)
    {
        $username = $request->email;
        $password = $request->password;

        $data = [
            'email' => $username,
            'password' => $password
        ];
        if (Auth::attempt($data)) {
            if (!Gate::allows('crud-product')) {
                Session::put('isLogin', $data);
                return redirect()->route('shop.home');
            } else{
                Session::put('isLogin', $data);
                return redirect()->route('admin.dashboard');
            }
        } else {
            $message = "Tài khoản hoặc mật khẩu không đúng";
            Session::flash('error', $message);
            return redirect('login');
        }
    }

    public function logOut()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function showFormRegister()
    {
        return view('register');
    }

    public function registerUser(RegisterUserRequest $request)
    {
         $user = new User();
         $user->name = $request->name;
         $user->email = $request->email;
         $user->password = Hash::make($request->password);
         $user->save();
         return redirect()->route('login');
    }

}
