@extends('dashboard.layout')
@section('content')
<section class="container p-5">
<form method="POST" action="/products/addProduct" enctype="multipart/form-data">
    @csrf
    <div class="form-group  ">
        <label for="name">Product Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
    </div>

    <div class="form-group">
        <label for="price">Price (USD):</label>
        <input type="number" step="0.01" min="0" class="form-control" id="price" name="price" required>
    </div>
    <div class="form-group">
        <label for="quantity">Quantity:</label>
        <input type="number" min="0" class="form-control" id="quantity" name="quantity" required>
    </div>



    <div class="mb-3">
        <label class="form-label ">Category</label>
        {{--  <input type="text" name="category_id" class="form-control">  --}}
        <select name="category_id" class="form-select">
            <option value="0" selected disabled>Please Select Your Category</option>
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>



    <div class="form-group">
        <label for="discount">Discount (%):</label>
        <input type="number" min="0" max="100" class="form-control" id="discount" name="discount" required>
    </div>


    <div class="form-group d-flex">
        <label for="size-selector">Select a size:</label>
        <select id="size-selector" name="size">
          <option >select</option>
          <option value="small">Small</option>
          <option value="medium">Medium</option>
          <option value="large">Large</option>
        </select>

    </div>

    <div class="form-group d-flex ">
        <label for="color-picker">color :  </label>
        <input type="text" id="color-picker" name="color-picker">



    </div>
    <div class="form-group">
        <label for="image">Product Image:</label>
        <input type="file" class="form-control-file" id="image" name="image" required>
    </div>
    <button type="submit" class="btn btn-primary">Add Product</button>
</form>
</section>




































@endsection
