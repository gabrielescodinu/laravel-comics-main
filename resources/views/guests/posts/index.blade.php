@extends('layouts.app')

@section('content')
<head>
    <link href="{{ asset('css/game-animation.css') }}" rel="stylesheet">
</head>



<div class="hero-container">
    @foreach ($posts as $post)
        <div class="main-container">
            <div class="poster-container">
                <a href="#"><img src="{{ asset('storage/' .$post->cover ) }}" class="poster" /></a>
            </div>
            <div class="ticket-container">
                <div class="ticket__content">
                    <h4 class="ticket__movie-title">{{ $post->title}}</h4>
                    <p class="ticket__movie-slogan">
                        {{ $post->body }}
                    </p>
                    <p class="ticket__current-price">${{ $post->price }}</p>
                    <p class="ticket__old-price">$44.99</p>
                    <button class="ticket__buy-btn">Buy now</button>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection