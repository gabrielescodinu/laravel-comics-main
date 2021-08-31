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
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
</head>
<body>
    <div class="pie pie1" onclick="document.body.classList.remove('active')">
        @guest
            @if (Route::has('register'))
                <div class="pie-color pie-color1">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}
                        <i class="card fas fa-home"></i>
                    </a>
                </div>
            @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
        @endguest
    </div>
      <div class="pie pie2" onclick="document.body.classList.remove('active')">
        <div class="pie-color pie-color2">
            <a class="nav-link" href="">
                <i class="discount fas fa-dice-d20"></i>
            </a>
        </div>
      </div>
      <div class="pie pie3" onclick="document.body.classList.remove('active')">
        <div class="pie-color pie-color3">
          <svg class="cart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100">
                <path
                  d="M98.993 14.537c-.816-.966-2.018-1.503-3.263-1.503H25.698c-.064 0-.107.022-.172.022l-9.36-9.404c-.816-.794-1.91-1.245-3.05-1.245H4.295C1.932 2.407 0 4.34 0 6.7c0 2.363 1.932 4.295 4.294 4.295h7.063l7.73 7.728 9.574 56.893c.344 2.06 2.148 3.585 4.23 3.585h50.388c2.36 0 4.293-1.93 4.293-4.293 0-2.36-1.93-4.293-4.292-4.293h-46.76l-1.588-9.447h54.423c2.104 0 3.908-1.524 4.23-3.606l6.354-39.545c.215-1.267-.128-2.533-.944-3.478zm-60.177 38.02H33.49L31.56 41.03h7.256zm0-20.115H30.1L28.273 21.6h10.542zm16.38 20.116h-7.793V41.03h7.793zm0-20.116h-7.793V21.6h7.793zm16.38 20.116h-7.792V41.03h7.793zm0-20.116h-7.792V21.6h7.793zm14.128 20.116h-5.54V41.03h7.386zm3.22-20.116h-8.78V21.6h10.52zm-47.618 50.13c-4.143 0-7.514 3.37-7.514 7.514 0 4.143 3.37 7.514 7.514 7.514s7.514-3.37 7.514-7.514-3.37-7.514-7.514-7.514zm34.758 0c-4.143 0-7.514 3.37-7.514 7.514 0 4.143 3.37 7.514 7.514 7.514 4.165 0 7.514-3.37 7.514-7.514s-3.35-7.514-7.514-7.514z"
                />
              </svg>
        </div>
      </div>
      <div class="menu" onclick="document.body.classList.toggle('active')">
        <svg class="hamburger" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
              <g
                fill="none"
                stroke="#000"
                stroke-width="7.999"
                stroke-linecap="round"
              >
                <path d="M 55,26.000284 L 24.056276,25.999716" />
                <path d="M 24.056276,49.999716 L 75.943724,50.000284" />
                <path d="M 45,73.999716 L 75.943724,74.000284" />
                <path d="M 75.943724,26.000284 L 45,25.999716" />
                <path d="M 24.056276,73.999716 L 55,74.000284" />
              </g>
            </svg>
      </div>


    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
