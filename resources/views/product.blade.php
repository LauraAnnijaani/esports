@extends('partials.layout')
@section('title', $product->name)
@section('content')
    <div>
        <h1>{{$product->name}}</h1>
        @foreach ($product->images as $image)
            <img src="/storage/{{$image}}">
        @endforeach
        <p>{{$product->description}}</p>
        <p>{{$product->sizes}}</p>
        <p>{{$product->colors}}</p>
    </div>
@endsection
