@extends('layout.app')
@section('title', 'Product create')
@section('contain')
 <form action="{{route('product.update', $product->id)}}" class="card p-5 shadow-lg" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <h1>Create Products</h1>
        <div class="col-sm-6 mb-3">
             <label for="firstName" class="form-label">Product Name</label>
             <input type="text" class="form-control" name="name" id="name" placeholder="" value="{{$product->name}}" required="">
            </div>
            <div class="col-sm-6 mb-3">
                 <label for="lastName" class="form-label">Stock</label>
                 <input type="number" class="form-control" name="stock" id="description" placeholder="0" value="{{$product->stock}}">
            </div>
             <div class="col-sm-6 mb-3">
                 <label for="lastName" class="form-label">Price</label>
                 <input type="number" class="form-control" name="price" id="description" placeholder="0" value="{{$product->price}}">
            </div>
             <div class="col-sm-6 mb-3">
                 <label for="lastName" class="form-label">Category</label>
                    <select name="category_id" id="">
                        <option value="">Select Category</option>
                        @foreach ($categories as $cat)
                            <option value="{{$cat->id}}" 
                                {{ old('category_id', $product->category_id ) == $cat->id ? 'selected' : ''}}
                                >
                                {{$cat->name}}
                                </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 border border-3 py-1 px-3">
                    <label class="form-label">Current Image</label>
                    <img src="{{asset('storage/' .$product->image)}}" width="50px" height="50px" alt="" class="object-fit-cover">
                </div>
             <div class="col-sm-6 mb-3">
                 <label for="lastName" class="form-label">Image</label>
                 <input type="file" class="form-control" name="image" id="description" placeholder="ontional" value="">
            </div>
            <div class="w-100 d-flex gap-3">
                <button type="submit" class="btn btn-outline-primary w-50">Save</button>
                <a href="{{route('product.index')}}" class="btn btn-outline-secondary w-50">Cancel</a>
            </div>
</form>
@endsection
