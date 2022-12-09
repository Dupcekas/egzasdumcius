@extends('layouts.nav')

@section('content')

    @foreach($products as $product)

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text">{{ $product->description }}</p>
            <p class="card-text">{{$product->price}}</p>
            <a href="/products/{{$product->id}}" class="btn btn-primary">View</a>
        </div>
    </div>

    @endforeach

@endsection