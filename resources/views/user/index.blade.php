@extends('layout.app')
@section('title', 'index')
@section('contain')
    <div class="d-flex justify-content-between align-items-center">
        <h1>User List</h1>
        <a href="" class="btn btn-primary">+Add User</a>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <p>ID</p>
                    <p>Name :</p>
                    <p>Gender</p>
                    <p>Age</p>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
