<?php

use App\Mail\ContactUs;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('index');
});

Route::get('/products', function () {
    $products = Product::all();
    return view('products', compact('products'));
});

Route::get('/products/{product}', function (Product $product) {
    return view('product', compact('product'));
});

Route::get('/contact', function (){
    return view('contact');
});

Route::post('/contact', function (Request $request){
    Mail::send(new ContactUs($request->input('email'), $request->input('subject'), $request->input('message')));
    return redirect('/contact')->with('status', 'Email sent!');
});
