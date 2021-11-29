<?php

namespace App\Http\Controllers;

use App\Models\Producer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProfileController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.profile',compact('users'));
    }

    public function delete($id)
    {
        if (!Gate::allows('crud-product')) {
            abort(403);
        }
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.list');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit',compact('user'));
    }
}
