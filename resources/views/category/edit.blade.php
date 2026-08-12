@extends('layout.app')
@section('title', 'edit')
@section('contain')
     <form action="{{route('category.update', $category->id)}}" class="card p-5 shadow-lg" method="POST">
    @csrf
    @method('PUT')
    <h1>Create Category</h1>
        <div class="col-sm-6 mb-3">
             <label for="firstName" class="form-label">Category Name</label>
             <input type="text" class="form-control" name="name" id="name" value="{{$category->name}}">
            </div>
            <div class="col-sm-6 mb-3">
                 <label for="lastName" class="form-label">Description</label>
                 <input type="text" class="form-control" name="description" id="description" value="{{$category->description}}">
            </div>
            <div class="w-100 d-flex gap-3">
                <button  type="submit" class="btn btn-outline-primary w-50">Save</button>
                <a href="{{route('category.index')}}" class="btn btn-outline-secondary w-50">Cancel</a>
            </div>
</form>
@endsection