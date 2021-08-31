@extends('layouts.app')

@section('content')
    <div class="social-side">
        <a href=""><i class="fab fa-facebook-f"></i></a>
        <a href=""><i class="fab fa-twitter"></i></a>
        <a href=""><i class="fab fa-pinterest"></i></a>
        <a href=""><i class="fas fa-plus"></i></a>
    </div>
 
    <div class="show">
        <img width="350px" src="{{ asset('storage/' .$post->cover ) }}" alt="">
        <div class="show-info">            
            <h1>{{ $post->title }}</h1>
            <h3> <span>U.S. Price: <span id="price">${{ $post->price }}</span></span> <a href="" class="buy-now"><span>BUY NOW</span></a></h3>
            <p>{{ $post->body }}</p>
            <h2>Release:</h2><span>{{ $post->created_at }}</span>
        </div>       
    </div>
    <div class="must-reads">
        <h1>Must Reads</h1>
        <div class="must-reads-container">
            <div>
                <a href=""><img src="../img/cover1.jpg" alt=""></a>
                <h6>GET THE INSIDE TRACK ON ALL THINGS DC</h6>
                <h3>DC CONNECT</h3>
                <p>The monthly, downloadable catalog of DC's comics, graphic novels, collectibles and more!</p> 
            </div> 
            <div>
                <a href=""><img src="../img/cover2.jpg" alt=""></a>
                <h6>GET THE INSIDE TRACK ON ALL THINGS DC</h6>
                <h3>DC CONNECT</h3>
                <p>The monthly, downloadable catalog of DC's comics, graphic novels, collectibles and more!</p> 
            </div>  
            <div>
                <a href=""><img src="../img/cover3.jpg" alt=""></a>
                <h6>GET THE INSIDE TRACK ON ALL THINGS DC</h6>
                <h3>DC CONNECT</h3>
                <p>The monthly, downloadable catalog of DC's comics, graphic novels, collectibles and more!</p> 
            </div>  
        </div>
    </div>
@endsection