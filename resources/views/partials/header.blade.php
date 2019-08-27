<div id="home">
{{--    <div class="scrollify">--}}
<!--- Navigation -->
    <nav class="navbar navbar-expand-md fixed-top">

        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" >
                <span class="custom-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index')}}">Home</a>
                    </li>
{{--                    <div class="dropdown">--}}
{{--                        <button class="dropbtn" href="{{route('shop.allfresh')}}">Shop Online</button>--}}
{{--                        <div class="dropdown-content">--}}
{{--                            <a  href="#">FRESH TRUFFLES</a>--}}
{{--                            <a  href="#">TRUFFLED PRODUCTS</a>--}}
{{--                            <a  href="#">TRUFFLE PACKAGES</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="dropdown">
                        <button class="dropbtn">Dropdown
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('recipes.allrecipes')}}">Truffle Recipes</a>
                    </li>
                    <a class="navbar-brand blur" href="{{route('index')}}"><img src="{{asset('../public/assets/img/logo/logo.png')}}" alt=""></a>
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
                <a class="nav-link-second" href="{{route('login')}}" style="text-transform: uppercase; text-decoration: none; color:#fff;"><img
                        src="../public/images/black-male-user-symbol.svg" alt="" style="height: 1.8rem"></a>
{{--                <a class="nav-link-second" href="{{route('register')}}" style="text-transform: uppercase; text-decoration: none; color:#fff;">Register</a>--}}
                    @else
                    <a class="nav-link-second" href="{{route('logout')}}" style="text-transform: uppercase; text-decoration: none; color:#fff;">Log Out</a>
                    @endguest
            </li>
        </ul>
    </div>
</div>
