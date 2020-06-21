<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Auth;

class LoginController extends ApiController
{
    public function __invoke(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return Auth::user()->createToken('auth')->plainTextToken;
        }
        return $this->error('帐号或密码错误');
    }
}
