<div id="home">
{{--    <div class="scrollify">--}}
<!--- Navigation -->
    <nav class="navbar navbar-expand-md fixed-top">

        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" >
                <span class="custom-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item mt-4" style="height: 6.3rem;">
                        <a class="nav-link" href="{{route('index')}}">Home</a>
                    </li>
                    <div class="dropdown text-center"  style="width: 11.6rem;">
                        <a class="dropbtn" href="#">Shop Online</a>
                        <li class="dropdown-content text-center ml-1 pr-0">
                        <a href="{{route('shop.allfresh')}}">Fresh Truffles</a>
                        </li>
                        <li class="dropdown-content text-center ml-1 pr-0">
                            <a href="{{route('shop.truffled-products')}}">Truffle Products</a>
                        </li>
                        <li class="dropdown-content text-center ml-1 pr-0">
                            <a href="#">Truffle Packages</a>
                        </li>
                    </div>
                    <li class="nav-item mt-4 " style="height: 6.3rem;">
                        <a class="nav-link" href="{{route('recipes.allrecipes')}}">Truffle Recipes</a>
                    </li>
                    <a class="navbar-brand" href="{{route('index')}}"><img src="{{asset('assets/img/logo/Truffle-oil-logo (3).png')}}" alt=""></a>
                    <li class="nav-item mt-4" style="height: 6.3rem;">
                        <a class="nav-link" href="{{route('index')}}">About Truffles</a>
                    </li>
                    <li class="nav-item mt-4" style="height: 6.3rem;">
                        <a class="nav-link" href="{{route('index')}}">About Us</a>
                    </li>
                    <li class="nav-item mt-4" style="height: 6.3rem;">
                        <a class="nav-link" href="{{route('index')}}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="navbar-top navbar-expand-md fixed-top d-flex justify-content-end mr-5 mt-3">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link-second" href="{{route('cart.index')}}">
                                <span class="cart-count">
                            <i class="fas fa-shopping-bag"></i><p id="cart-counter">{{Cart::instance('default')->count()}}</p>
                                </span>
                </a>
            </li>
            @if(!auth()->user())
            <li class="nav-item">
                <a class="nav-link-second" href="{{url('login')}}">Log in</a>
            </li>
                @else
             <li class="nav-item">
                    <a class="nav-link-second" href="{{ url('/logout') }}">Logout</a>
             </li>
                @endif
        </ul>
    </div>
</div>