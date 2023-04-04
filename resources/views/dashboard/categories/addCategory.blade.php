@extends('dashboard.layout')

@section('content')


<form method="POST" action="/categories/addCategory" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Category Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
    </div>

    <div class="form-group">
        <label for="image">Category Image:</label>
        <input type="file" class="form-control-file" id="image" name="image" required>
    </div>

    <button type="submit" class="btn btn-primary">Add Category</button>



</form>









@endsection
