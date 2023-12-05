<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
}

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (!isset($credentials['email']) || !isset($credentials['password'])) {
            return response()->json(['error' => 'Email and password are required'], 422);
    }
}
}