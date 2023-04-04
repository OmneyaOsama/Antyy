<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Cart;


class CartController extends Controller
{
    public function create($product_id, Request $request)
    {
       // dd($request);
        $user_id = Auth::user()->id;
        $cart = Cart::whereUserId(Auth::user()->id)->whereProductId($product_id)->first();
        if ($cart) {
            // do something
            $cart->update([
                'quantity' => $cart->quantity + 1
            ]);
        } else {
            $cart = new Cart();
            $cart->create([
                'product_id' => $product_id,
                'user_id' => $user_id,
                'quantity' => $request->quant,
            ]);
        }
        return redirect()->back();
    }

    function index()
    {

         $cart = Cart::whereUserId(Auth::user()->id)->with('product')->get();
        $totprice = 0;


        foreach($cart as $item){
            // dd($item) ;
            $totprice += $item->quantity * $item->product->price;
        }

        return view("cart.showCart", ['cart' =>  $cart , 'totprice'=>$totprice]);
    }


function delete($identifer)
    {
        $cart = Cart::find($identifer);
        //  dd($cart);
        $cart->delete();
        return redirect()->back();
    }


}
