@extends('layouts.app')

@section('content')
<form method="POST" action="{{ url('product/'.$product->id) }}">
@csrf
@method('PUT')
  <fieldset>
    <legend>Edit Product: {{ $product->name }}</legend>
    
    <div class="form-group">
      <label for="productName">Product Name</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $product->name }}" name="name" id="productName">
      @error('name') 
         <small class="form-text text-danger">Product Name is required</small>
      @enderror
    </div>
    <div class="form-group">
      <label for="Category">Category</label>
      <input type="text" class="form-control @error('category') is-invalid @enderror" value="{{ $product->category }}" name="category" id="Category">
      @error('name') 
         <small class="form-text text-danger">Product Name is required</small>
      @enderror
    </div>
    
    <div class="form-group">
      <label for="exampleTextarea">Product Description</label>
      <textarea class="form-control @error('detail') is-invalid @enderror" name="detail" id="exampleTextarea" rows="3">{{ $product->detail }}</textarea>
      @error('name') 
         <small class="form-text text-danger">Product Name is required</small>
      @enderror
    </div>
    </fieldset>
    <button type="submit" class="btn btn-primary">Update</button>
  </fieldset>
</form>
@endsection