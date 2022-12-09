@extends('layouts.nav')


@section('content')

<div>
    <h1>{{$product->name}}</h1>
    <h3>{{$product->price}}</h3>
    <h5>{{$product->description}}</h5>

    @can('modify', $product)
        <a href="/products/modify/{{ $product->id }}">Modify</a>
    @endcan
</div>

@endsection