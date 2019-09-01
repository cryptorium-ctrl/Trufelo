<link rel="stylesheet" href="styles.css">

<div id="home">
{{--    <div class="scrollify">--}}
<!--- Navigation -->
    <nav class="navbar navbar-expand-md fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="custom-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="#navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index')}}">Home</a>
                    </li>
                    <div class="dropdown-snd">
                        <button class="dropbtn-snd">Products</button>
                        <div class="dropdown-content-snd">
                            <a href="{{route('shop.allfresh')}}">FRESH PRODUCTS</a>
                            <a href="{{route('shop.truffled-products')}}">TRUFFLE PRODUCTS</a>
                            <a href="{{route('shop.truffle-packages')}}">TRUFFLE PACKAGES</a>
                        </div>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('recipes.allrecipes')}}">Truffle Recipes</a>
                    </li>
                    <a class="navbar-brand blur" href="{{route('index')}}"><img src="{{asset('assets/img/logo/logo.png')}}" alt=""></a>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index')}}">About Truffles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index')}}">Contacts</a>
                    </li>
                </ul>
            </div>
    </nav>

    <div class="navbar-top navbar-expand-md fixed-top d-flex justify-content-end mr-5 mt-3" style="height:1rem;">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link-second" href="{{route('cart.index')}}">
                                <span class="cart-count" >
                            <i class="fas fa-shopping-bag"></i><p style="height: 1.3rem; width: 1.3rem; background-color: #c7ad86; border-radius: 50%;
                             display: inline-block; color: #fff; text-decoration: none; text-align: center; position:absolute ;z-index: 9999; margin: 1rem -0.5rem;"></p>
                             <p style="margin-top: -0.9rem; margin-left: 1.3rem; position: relative; z-index: 9999; color: #fff; text-decoration: none;">{{Cart::instance('default')->count()}}</p>
                                </span>
                </a>
            </li>
            <li class="nav-item">
                @guest
                    <a class="nav-link-second" href="{{route('register')}}" style="text-transform: uppercase; text-decoration: none; color:#fff;"></a>
                    <a class="nav-link-second" href="{{route('login')}}" style="text-transform: uppercase; text-decoration: none; color:#fff;"><i class="fas fa-user"></i></a>
                    @else
                    <a class="nav-link-second" href="{{route('logout')}}" style="text-transform: uppercase; text-decoration: none; color:#fff;">Log Out</a>
                    @endguest
            </li>
        </ul>
    </div>
</div>
