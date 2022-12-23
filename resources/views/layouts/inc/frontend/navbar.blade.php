<style>
    .nav-item{
        border-radius: 10px;
        height: 46px;
        display: flex;
        align-items: center;
        font-size: 12px;
        line-height: 18px;
    }
    .nav-item:hover {
        background: hsla(0,0%,100%,.2);
    }
    .bg-hsla{
        background: hsla(0,0%,100%,.2);
    }
    .cart-icon{
        position: relative;
    }
    .cart-icon_count{
        position: absolute;
        left: 27%;
        top: 50%;
        transform: translateY(-50%);
        font-size: 12px;
    }
    .heart-icon{
        position: absolute;
        left: 21%;
        top: 50%;
        transform: translateY(-50%);
        font-size: 12px;
    }
</style>

<div class="main-navbar shadow-sm sticky-top">
    <div class="top-navbar d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-2 my-auto d-none d-sm-none d-md-block d-lg-block">
                    <a href="/" class="text-decoration-none">
                        <h5 class="brand-name">{{ $appSetting->wedsite_name ?? 'wedsite name' }}</h5>
                    </a>
                </div>
                <div class="col-md-5 my-auto">
                    <form role="search" action="{{ url('search') }}" method="GET">
                        <div class="input-group">
                            <input type="search" name="search" value="{{ Request::get('search') }}"
                                placeholder="Search your product" class="form-control" />
                            <button class="btn bg-white" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 my-auto">
                    <ul class="nav justify-content-end align-items-center">
                        <li class="nav-item">
                            <a class="nav-link cart-icon" href="{{ url('cart') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.95 35.07" width="20">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: none;
                                                stroke: #fff;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                                stroke-width: 1.8px;
                                            }
                                        </style>
                                    </defs>
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <path
                                                d="M10,10.54V5.35A4.44,4.44,0,0,1,14.47.9h0a4.45,4.45,0,0,1,4.45,4.45v5.19"
                                                class="cls-1"></path>
                                            <path
                                                d="M23.47,34.17h-18A4.58,4.58,0,0,1,.91,29.24L2.5,8.78A1.44,1.44,0,0,1,3.94,7.46H25a1.43,1.43,0,0,1,1.43,1.32L28,29.24A4.57,4.57,0,0,1,23.47,34.17Z"
                                                class="cls-1"></path>
                                        </g>
                                    </g>
                                </svg>
                                Cart 
                                <span class="cart-icon_count"><livewire:frontend.cart.cart-count /></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cart-icon" href="{{ url('wishlist') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                  </svg>
                                Wishlist 
                                <span class="heart-icon"><livewire:frontend.wishlist-count /></span>
                                
                            </a>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link d-flex flex-column justify-content-center align-items-center" href="{{ route('login') }}">
                                        <svg id="icon-smember" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 560 560"
                                            width="20">
                                            <defs>
                                                <style>
                                                    #icon-smember .cls-1 {
                                                        fill: none;
                                                        stroke: #fff;
                                                        stroke-width: 30px;
                                                    }
                                                </style>
                                            </defs>
                                            <title>Smember</title>
                                            <g id="Layer_2" data-name="Layer 2">
                                                <g id="Layer_1-2" data-name="Layer 1">
                                                    <circle cx="280" cy="280" r="265" class="cls-1">
                                                    </circle>
                                                    <circle cx="280" cy="210" r="115" class="cls-1">
                                                    </circle>
                                                    <path
                                                        d="M86.82,461.4C124.71,354.71,241.91,298.93,348.6,336.82A205,205,0,0,1,473.18,461.4"
                                                        class="cls-1"></path>
                                                </g>
                                            </g>
                                        </svg>
                                        {{ __('Login') }}
                                    </a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link d-flex flex-column justify-content-center align-items-center" href="{{ route('register') }}"><i class="fa-solid fa-user-plus"></i>{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
                            <li class="nav-item dropdown bg-hsla">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="cart-svg ">
                                        <svg id="icon-smember" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 560 560"
                                            width="20">
                                            <defs>
                                                <style>
                                                    #icon-smember .cls-1 {
                                                        fill: none;
                                                        stroke: #fff;
                                                        stroke-width: 30px;
                                                    }
                                                </style>
                                            </defs>
                                            <title>Smember</title>
                                            <g id="Layer_2" data-name="Layer 2">
                                                <g id="Layer_1-2" data-name="Layer 1">
                                                    <circle cx="280" cy="280" r="265" class="cls-1">
                                                    </circle>
                                                    <circle cx="280" cy="210" r="115" class="cls-1">
                                                    </circle>
                                                    <path
                                                        d="M86.82,461.4C124.71,354.71,241.91,298.93,348.6,336.82A205,205,0,0,1,473.18,461.4"
                                                        class="cls-1"></path>
                                                </g>
                                            </g>
                                        </svg>
                                       {{-- <span style="font-size: 12px"> MINH</span> --}}
                                    </div>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ url('profile') }}">
                                            <i class="fa fa-user"></i>
                                            Profile</a></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out"></i> {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand d-block d-sm-block d-md-none d-lg-none" href="/">
                {{ $appSetting->wedsite_name ?? 'wedsite name' }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/collections" class="nav-link">All Categories</a>
                    </li>
                    <li class="nav-item">
                        <a href="/new-arrivals" class="nav-link">New Arrivals</a>
                    </li>
                    <li class="nav-item">
                        <a href="/featured-products" class="nav-link">Featured Products</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

{{-- {{ Auth::user()->name }} --}}
