<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    protected function json($data, int $code = 200)
    {
        return response()->json($data, $code);
    }

    protected function success(string $message, array $data =  [], int $code = 200)
    {
        return response()->json([
            'status'=>true,
            'message'=>$message,
            'data'=>$data
        ], $code);
    }

    protected function error(string $message, array $data =  [], int $code = 200)
    {
        return response()->json([
            'status'=>false,
            'message'=>$message,
            'data'=>$data
        ], $code);
    }
}
