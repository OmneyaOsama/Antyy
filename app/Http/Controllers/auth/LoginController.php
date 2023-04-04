<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }


    public function handleLogin(Request $req){

        $userCred = \Auth::attempt(['email' => $req->email, 'password' => $req->password]);
        if($userCred){
            // dd($req->all());
            if(Auth::user()->role=='admin'){
                return redirect("dashboard/users");
            }else{
                return redirect("/");
            }

        }else{
            return redirect()->back();
        }



    }
    function logout(){
        Auth::logout(); //destroy session
        return redirect("/");
    }



}
