<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    //

    function orders(){
        $orders=Order::get();
        return view('dashboard.orders.orders',['orders' =>   $orders]);
    }


    function showDetails($identifier){

        $order=Order::where('id',$identifier)->first();
        return view('dashboard.orders.details',['order'=>$order]);
    }


    function delete($identifier){
        $order = Order::find($identifier);

        $order->delete();
        return redirect("dashboard/orders");
    }




}
