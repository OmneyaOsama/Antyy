
@extends('dashboard.layout')

@section('content')


<section class="container ">
       <div>
        <img src="{{ asset('uploads/' . $category->image) }}" alt="{{ $category->name }}" style="width:250px">

       </div>
       <div>
        <h3>{{ $category->name }}</h3>
        <p>{{ $category->description }}</p>
       </div>
       <button type="submit" class="btn btn-success">Edit</button>



</section>










@endsection
