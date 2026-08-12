@extends('layout.app')
@section('title', 'index')
@section('contain')
<div class="d-flex justify-content-between align-items-center">
    <h1>Category List</h1>
    <a href="{{route('category.create')}}" class="btn btn-primary">+ Category</a>
</div>
<table class="table table-striped text-center align-middle">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Decription</th>
        <th>Action</th>
    </tr>
    @foreach ($categories as $cat)
    <tr>
        <td>{{$cat->id}}</td>
        <td>{{$cat->name}}</td>
        <td>{{$cat->description}}</td>
        <td>
            <a href="{{route('category.edit',$cat->id)}}" class="btn btn-outline-warning" method="POST">Edit</a>
          <form action="{{route('category.destroy', $cat->id)}}"  class="d-inline">
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
{{$categories->links()}}
@endsection