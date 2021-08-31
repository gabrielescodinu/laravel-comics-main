<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DC Comics</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/homepage.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="img/DCUniverse.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pricing.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" >
    <link href="{{ asset('css/game-animation.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
</head>
<body>
{{-- navbar --}}
<input type="checkbox" id="burger-toggle">
<label for="burger-toggle" class="burger-menu">
  <div class="line"></div>
  <div class="line"></div>
  <div class="line"></div>
</label>
<div class="menu">
  <div class="menu-inner">
    <ul class="menu-nav">
      <li class="menu-nav-item"><a class="menu-nav-link" href="#"><span>
            <div>Home</div>
          </span></a></li>
      <li class="menu-nav-item"><a class="menu-nav-link" href="#"><span>
            <div>About</div>
          </span></a></li>
      <li class="menu-nav-item"><a class="menu-nav-link" href="#"><span>
            <div>Service</div>
          </span></a></li>
      <li class="menu-nav-item"><a class="menu-nav-link" href="#"><span>
            <div>Team</div>
          </span></a></li>
    </ul>
    <div class="gallery">
      <div class="title">
        <p>Nu Comics</p>
      </div>
    </div>
  </div>
</div>


    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
