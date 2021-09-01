<input type="checkbox" id="burger-toggle">
<label for="burger-toggle" class="burger-menu">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
</label>
<div class="menu">
    <div class="menu-inner">
        <ul class="menu-nav">
            <li class="menu-nav-item"><a class="menu-nav-link" href="{{ url('/') }}"><span>
                        <div>Home</div>
                    </span></a></li>
            <li class="menu-nav-item"><a class="menu-nav-link" href="{{ route('posts') }}"><span>
                        <div>Comics</div>
                    </span></a></li>
            @guest
                <li class="menu-nav-item"><a class="menu-nav-link" href="{{ route('login') }}"><span>
                            <div>Login</div>
                        </span></a></li>
                @if (Route::has('register'))
                    <li class="menu-nav-item"><a class="menu-nav-link" href="{{ route('register') }}"><span>
                                <div>Register</div>
                            </span></a></li>
                @endif
            @endguest
        </ul>
        <div class="gallery">
            <div class="title">
                <p>Nu Comics</p>
            </div>
        </div>
    </div>
</div>
