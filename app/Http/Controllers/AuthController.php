<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signup(SignupRequest $request): void
    {
        
    }

    public function login(LoginRequest $request): void
    {

    }
    public function logout(Request $request): void
    {

    }
}
