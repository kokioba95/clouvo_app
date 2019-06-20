<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Http\Requests\EditProfile;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function edit($id)
    {
        $user = User::find($id);
        return view('profile_edit', compact('user'));
    }
    public function update(EditProfile $request, $id)
    {
        $user = User::find($id);
        $user->group_name = $request->input('group_name');
        $user->email = $request->input('email');
        $user->password =  Hash::make($request->input('password'));
        $user->save();
        return redirect('/my_profile');
    }
}