<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Product;
class UserController extends Controller
{
    public function contact(){
        return view("contact");
    }

    public function handleContact(Request $request){
        $data = $request->all();
        $contact = Contact::create($data);
        return $contact ? redirect("contact"): redirect("/");

    }



    function display(){
        $products=Product::get();
        return view('display',['products'=>$products]);
    }

    function about(){
        return view('about');
    }


    function checkout(){
        return view('checkout');
    }



}

//
