

{{--<div class="scrollify">--}}
<!--- Start Home section -->
<div id="home">

    <!--- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">

        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" >
                <span class="custom-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#shop-online">Shop Online</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#recipes">Truffle Recipes</a>
                    </li>
                    <a class="navbar-brand" href="#"><img src="assets/img/logo/Truffle-oil-logo (3).png" alt=""></a>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-truffles">About Truffles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('cart.index')}}">
                                <span class="cart-count">
                            <i class="fas fa-shopping-bag" {{Cart::instance('default')->count()}}></i>
                                </span>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
</div>
<!--- End Navigation -->