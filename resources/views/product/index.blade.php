@extends('layout.app')
@section('title', 'index')
@section('contain')
<div class="d-flex justify-content-between align-items-center">
    <h1>Product List</h1>
    <a href="{{route('product.create')}}"  class="btn btn-primary">Add Product</a>
</div>
@if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle-fill me-2"></i>
        {{ session('message') }}

        <button type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close"></button>
    </div>
@endif
<table class="table table-striped text-center align-middle">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Stock</th>
        <th>Price</th>
        <th>Category</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
    @foreach ($products as $pro)
    <tr>
        <td>{{$pro->id}}</td>
        <td>{{$pro->name}}</td>
        <td>{{$pro->stock}}</td>
        <td>{{$pro->price}}</td>
        <td>{{$pro->category->name}}</td>
        <td><img src="{{asset('storage/' .$pro->image)}}" width="50px" height="50px" alt="" class="object-fit-cover"></td>
        <td>
            <a href="{{route('product.edit', $pro->id)}}" class="btn btn-outline-warning" method="POST">Edit</a>
          <form action="{{route('product.destroy', $pro->id)}}" class="d-inline">
             @csrf
            @method('DELETE')
            <button  class="btn btn-outline-danger"
            onclick="return confirm('Are ypu sure to delete ?')"
            >Delate</button>
          </form>
        </td>
    </tr>        
    @endforeach
</table>
{{$products->links()}}
@endsection