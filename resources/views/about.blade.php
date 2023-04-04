@extends('layouts.layout')
@section('title') About @endsection
@section('content')

<section class=" m-100">
    <div class="container mt-5 py-5">
    <h3 class=' m-auto text-dark mb-5 text-center '>ABOUT US</h3>
      <div class="row g-5">
     <div class="col-md-6 ">
     <img  src="{{ asset('images/asset 15.png') }}" alt="" style="width: 40rem"/>
     </div>
        <div class="col-md-6 justify-content-center text-align-center">
        <p class='aboutP '>
          We, Mirror, understand the ever-changing mind of a woman and thus aim at providing a satisfactory and fully clothed closet that suits the unique styles of each woman. We sell clothes at , that are a part of the current fashion trends and turn every woman into a fashionista. Our motto is to make all the women feel like a diva when they are dressed from head to toe in our eye -catching apparel.
       </p>
        </div>
      </div>
    </div>
  </section>



@endsection
