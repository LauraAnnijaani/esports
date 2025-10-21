<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($products as $product)
    <div>
        <h1>{{$product->name}}</h1>
        @foreach ($product->images as $image)
            <img src="/storage/{{$image}}">
        @endforeach
        <p>{{$product->description}}</p>
        <p>{{$product->sizes}}</p>
        <p>{{$product->colors}}</p>
    </div>
    @endforeach

</body>
</html>
