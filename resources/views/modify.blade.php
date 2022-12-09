@extends('layouts.nav')

@section('content')

<form action="/create" method="POST">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example1" name="name" value="{{$product->name}}" class="form-control" />
        <label class="form-label" for="form6Example1">Name</label>
      </div>
    </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" id="form6Example3" name="price" value="{{$product->price}}" class="form-control" />
    <label class="form-label" for="form6Example3">Price</label>
  </div>



  <!-- Checkbox -->
  <div class="form-check d-flex justify-content-center mb-4">
    <textarea class="form-check-input me-2" type="checkbox" value="{{$product->description}}" name="description" id="form6Example8" checked />
    <label class="form-check-label" for="form6Example8"> Description </label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Create</button>
</form>

@endsection