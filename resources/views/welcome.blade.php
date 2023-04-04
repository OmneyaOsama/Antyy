@extends('layouts.layout')
@section('title') Home @endsection
@section('content')



    <section id="carouselExampleInterval" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-inner py-5">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="{{ asset('images/asset2.png') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="{{ asset('images/asset3.png') }}" class="d-block w-100" alt="...">
          </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </section>


          <section class="container py-5">
                 <div class="top text-center">
                    <h2> OUR TOP COLLECTION </h2>
                 </div>
          </section>

                <section class="container py-5">
                       <div class="row g-3">
@php

   $products =\App\Models\Product::latest()->take(6)->get();
@endphp

                        @foreach ($products as $product )

                        <div class="col-md-4">
                            <div class="img-wrapper d-flex">
                                <img class="img" src="{{ asset('/uploads/'. $product->image) }}" alt="{{ $product->name }}">
                                {{--  <button class='btn float-end fa heart-icon '  >
                                    <i onclick="handleClick(e)" class='fa-regular fa-heart heart-icon'></i>
                                </button>  --}}
                                <div class="middle">
                                    <div class="text1">
                                       {{--  <a href="{{ url('/cart/create',$product->id) }}"><button class="rounded-button">Add To Cart</button></a>  --}}
                                       <form action="{{ url('/cart/create/'.$product->id) }}" method="post">
                                        @csrf
                                   <button type="submit"  class='btn btn-light mb-3'>Add to card</button>
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
                                                     <span class="pluss glyphicon glyphicon-plus fs-3">+</span>
                                                 </button>
                                             </span>
                                         </div>
                                   </div>
                                   </form>


                                    </div>
                                  </div>
                            </div>
                            <div class="text2 d-flex justify-content-between ">
                                <h6>{{ $product->name }}</h6>
                                <span> EGP {{ $product->price }}</span>
                            </div>
                        </div>

                        @endforeach

                        {{--  <div class="card" style="width: 20rem;">
                            <img class="card-img-top" src="{{ asset('images/y.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                              <h6 class="card-title">Card title</h6>
                              <p class="card-text">Some quick example .</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>  --}}

                       </div>
                </section>



                <section class="container py-5">
                       <div class="banner py-5">
                        <img  class="imagee " src="{{ asset('images/asset4.png') }}" alt="">
                        <div class="text " >
                            <img class="imgy" src="{{ asset('images/capture.png') }}" alt="">

                            <h4>Stay ahead of the game with these trendy tops</h4>
                            <a href="{{ url('products/display') }}"><button class="round-button ">SHOP WOMENs TOPS</button></a>

                        </div><br>
                       </div>
                </section>

                <section class="container py-5">
                    <div class="top text-center">
                       <h2> PRODUCTS </h2>
                    </div>
             </section>

               <section class="container py-5">
                        <div class="row g-3">
                            @foreach ($categories as $category)


                            <div class="col-md-3">
                                <a href="{{ url('/',$category->name) }}"><img src="{{  asset('/uploads/' . $category->image)  }}" alt="{{ $category->name }}" style="width: 300px" >
                                </a>
                                 <div class=" text-center py-3">
                                    <h4> {{ $category->name }} </h4>
                                 </div>


                            </div>
                            @endforeach



                        </div>


               </section>

































@endsection

