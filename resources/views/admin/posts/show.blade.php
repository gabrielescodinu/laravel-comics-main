@extends('layouts.app')

@section('content')
    <div class="show">
        <img width="350px" src="{{ asset('storage/' .$post->cover ) }}" alt="">
        <div class="show-info">            
            <h1>{{ $post->title }}</h1>
            <h3> <span>U.S. Price: ${{ $post->price }}</span> <a href="" class="buy-now"><span>BUY NOW</span></a></h3>
            <p>{{ $post->body }}</p>
            <h2>Release:</h2><span>{{ $post->created_at }}</span>
        </div>       
    </div>
@endsection