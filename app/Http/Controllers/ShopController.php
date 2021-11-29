<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::paginate(5);
        $categories = Category::all();
        return view('shop.home',compact('products','categories'));
    }
    public function productDetail($id){
     $product = Product::findOrFail($id);
     $categories = Category::all();
     return view('shop.product-detail',compact('product','categories'));
    }

    public function searchProductByCategory($id)
    {
        $products = Product::where('category_id','=',$id)->get();
        $categories = Category::all();
        return view('shop.productList',compact('products','categories'));
    }
    public function showUserProfile()
    {
        $email = \session('isLogin')['email'];
       $users = User::where('email','=',$email)->get();
       return view('shop.user-profile',compact('users'));
    }
    public function updateProfile(Request $request){
         $user = User::findOrFail($request->id);
         $user->name =  $request->name;
         $user->phone = $request->phone;
         $user->address = $request->address;
        $currentImage = $user->image;
        if ($request->hasFile('image')) {
            Storage::delete('/public/' . $currentImage);
            $path = $request->file('image')->store('images', 'public');
            $user->image = $path;
        } else {
            $user->image = $currentImage;
        }
         $user->save();
         return redirect()->route('user.profile');
    }
    public function logOut()
    {
        \session()->forget('isLogin');
        return redirect()->route('login');
    }
    public function updatePasswordForm(){
        return view('shop.update-password');
    }

    public function updatePassword(Request $request)
    {
        $email = \session('isLogin')['email'];
        $users = User::where('email','=',$email)->get();
        $id = $users[0]->id;
        $data = [
           'email' => $email,
           'password' => $request->oldPassword
       ];
        if(Auth::attempt($data)){
            $user = User::findOrFail($id);
            $user->password = Hash::make($request->password);
            $user->save();
            $message = "Cập nhật mật khẩu thành công";
            Session::flash('true',$message);
            return redirect()->route('password.formUpdate');
        } else {
            $message = "Mật khẩu cũ không chính xác";
            Session::flash('errorPassword', $message);
            return redirect()->route('password.formUpdate');
        }
    }

    public function search(Request $request)
    {
        $value = $request->value;
        $products = Product::where('name','LIKE','%'.$value.'%')->get();
        $categories = Category::all();
        return view('shop.home',compact('products','categories'));
    }
}
