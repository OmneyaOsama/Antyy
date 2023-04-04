@extends('layouts.layout')
@section('title')Products @endsection
@section('content')


<section class="container py-5">
    <div class="row py-5">

        @foreach ( $products as $product)


       <div class="col-md-4">

                       <div class="card" style="width: 20rem;">
                           <img class="card-img-top" src="{{ asset('/uploads/' . $product->image) }}"  alt="Card image cap">
                           <div class="card-body">
                             <h6 class="card-title">{{ $product->name }}</h6>
                             <p class="card-text">{{ $product->price }}</p>
                             <form action="{{ url('/cart/create/'.$product->id) }}" method="post">
                                @csrf
                                <div class="center pb-2">
                               <div class="input-group">
                                     <span class="input-group-btn">
                                         <button type="button" class="minus btn btn-danger btn-number"  data-type="minus" data-field="quant">
                                           <span class=" minuss glyphicon glyphicon-minus fs-1">-</span>
                                         </button>
                                     </span>
                                     <input type="text" name="quant" class="form-control input-number" value="1" min="1" max="{{ $product->quantity }}">
                                     <span class="input-group-btn">
                                         <button type="button" class="plus btn btn-success btn-number" data-type="plus" data-field="quant">
                                             <span class="pluss glyphicon glyphicon-plus fs-3 ">+</span>
                                         </button>
                                     </span>
                                 </div>
                           </div>
                           <button type="submit"  class='btn btn-secondary mb-3 w-100'>Add to card</button>

                           </form>

                           </div>
                       </div>



       </div>
       @endforeach
    </div>
</section>

@endsection
