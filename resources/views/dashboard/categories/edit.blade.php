@extends('dashboard.layout')
@section('content')


<div class="container my-5">
    <form action="{{ url('categories/update',$category->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
          <label class="form-label">Category_Name</label>
          <input type="text" name="title" class="form-control" value="{{ $category->name }}">
          @error('name')
          <div class="alert alert-danger my-4">
              <p class="text-center">{{ $message }}</p>
          </div>

          @enderror
      </div>
      <div class="mb-3">
          <label class="form-label">Category_Description</label>
          <textarea type="text" name="content" class="form-control">
              {{ $category->description }}
          </textarea>
          @error('description')
          <div class="alert alert-danger my-4">
              <p class="text-center">{{ $message }}</p>
          </div>
          @enderror
      </div>
      <img src="{{ asset("uploads/$category->image") }}" alt="" style="width:250px">
      <div class="mb-3">
          <label for="formFile" class="form-label">Upload image</label>
          <input class="form-control" type="file" name="img">
      </div>
      <div class="mb-3">
          <button type="submit" class="form-control btn btn-info">Update Category</button>
      </div>
    </form>
 </div>





















@endsection
