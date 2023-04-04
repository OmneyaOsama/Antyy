<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    //
    public function create($product_id){

       $user_id = \Auth::user()->id;
        $favorite = new Favorite();
        $favorite->create([
            'product_id'=>$product_id,
            'user_id'=>$user_id

        ]);

        return redirect()->back();
    }
}
