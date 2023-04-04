<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    function index(){
        return view('dashboard.dashboard');
    }

    function users(){
        $users=User::get();
        return view('dashboard.users',['users' =>  $users]);
    }
    function userDetails($id){
        $user=User::where('id' , $id)->first();
        return view('dashboard.userDetails',['user' => $user]);
    }

    function deleteUser($id){

            $user = User::find($id);
            $user->delete();
            return redirect("dashboard/users");

    }

}
