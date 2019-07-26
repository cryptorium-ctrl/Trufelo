<div id="home">
{{--    <div class="scrollify">--}}
<!--- Navigation -->
    <nav class="navbar navbar-expand-md fixed-top">

        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" >
                <span class="custom-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('shop.allfresh')}}">Shop Online</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('recipes.allrecipes')}}">Truffle Recipes</a>
                    </li>
                    <a class="navbar-brand" href="{{route('index')}}"><img src="{{asset('assets/img/logo/Truffle-oil-logo (3).png')}}" alt=""></a>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index')}}">About Truffles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index')}}">About Us</a>
                    </li>
                    <li class="nav-item">
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
            <li class="nav-item">
                <a class="nav-link-second" href="#">Log in</a>
            </li>
        </ul>
    </div>
</div>