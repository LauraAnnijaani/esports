@extends('partials.layout')
@section('title', 'Home')
@section('content')
@foreach ($products as $product)
    <div>
        <h1>{{$product->name}}</h1>
        @foreach ($product->images as $image)
            <img src="/storage/{{$image}}">
        @endforeach
        <p>{{$product->description}}</p>
        <p>{{$product->sizes}}</p>
        <p>{{$product->colors}}</p>
        <a href="/products/{{$product->id}}">Details</a>
    </div>
    @endforeach
@endsection
