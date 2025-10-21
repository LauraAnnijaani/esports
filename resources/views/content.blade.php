@extends('partials.layout')
@section('title', 'Content')
@section('content')
    <h1>Contact us</h1>
    @if(session('status'))
        <h3>{{ session('status') }}</h3>
    @endif
    <form method="POST">
        @csrf
        <input name="enmail" type="email" placeholder="Your email">
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" placeholder="Message"></textarea>
        <button>Send</button>
    </form>
@endsection
