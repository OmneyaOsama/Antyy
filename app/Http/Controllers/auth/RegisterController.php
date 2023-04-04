<?php

namespace App\Http\Controllers\auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
        public function register(){
            return view('auth.register');
        }

        public function handleRegister(Request $request ){
            $data = $request->all();
            $data['password'] = \Hash::make($data['password']);
            $user = User::create($data);
            return $user ? redirect("login"): redirect("register");
        }

}
