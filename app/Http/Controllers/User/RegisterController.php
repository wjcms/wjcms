<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __invoke(Request $request, User $user)
    {
        $post = $request->validate([
            'email'=>['sometimes','email'],
            'name'=>['required','min:3','max:50'],
            'password'=>['required','min:6','max:16','confirmed']
        ], ['name.required'=>'昵称不能为空']);
        $user->password = $request->password;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return $user;
    }
}
