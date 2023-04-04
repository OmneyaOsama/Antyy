@extends('layouts.layout')
@section('content')



<section class="container py-5">
    <header >
        <h1>Shopping Cart</h1>
    </header>
    <table>
        <thead>
            <tr>
                <th></th>

                <th>ITEM</th>
                <th>QUANTITY</th>
                <th>PRICE</th>
                <th>TOTAL PRICE</th>
                <th></th>

            </tr>
        </thead>
        <tbody>
            @foreach ( $cart as $cart )


            <tr>
                <td><img src="{{ asset('/uploads/' . $cart->product->image ) }}" alt="{{$cart->product->name }}" style="width:100px"></td>
                <td>{{ $cart->product->name }}</td>
                <td>{{ $cart->quantity }}</td>
                <td>EGP {{ $cart->product->price }}</td>
                <td>EGP {{ $totprice }} </td>
                <td><a href="{{ url("carts/delete" ,$cart->id) }}"><i class="fa-sharp fa-solid fa-trash"></i></a></td>

                {{--  <td><img src="{{ asset('' ) }}" alt="" style="width:100px"></td>
                <td></td>
                <td></td>
                <td>EGP </td>
                <td>EGP </td>
                <td><a href="{{ url("carts/delete" ,$cart->id) }}"><i class="fa-sharp fa-solid fa-trash"></i></a></td>
  --}}

            </tr>


            @endforeach

        </tbody>
    </table>
    <div class="buttons">
       <a href="{{ url('cart/checkout') }}"> <button class="checkout-btn">PROCEED TO CHECKOUT</button></a>
       <a href="/"> <button class="continue-btn">CONTINUE SHOPPING</button></a>
    </div>


</section>
@endsection
