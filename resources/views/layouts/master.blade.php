<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    @include('styles.style')
    @section('fresh-truffle-style')
    @stop

    <link rel="stylesheet" href="{{URL::to('css/app.css')}}">
</head>

@yield('content')

<body>
<div class="navigation">
    <input type="checkbox" class="navigation__checkbox" id="navi-toggle" />

    <label for="navi-toggle" class="navigation__button">
        <div class="header__logo-box">
            <img class="header__logo header__logo--glowEffect"
                src="{{asset('../storage/app/public/logo/logo.svg')}}"
                alt="header__logo" id="logo"
            />
        </div>
    </label>

    <nav class="navigation__nav">
        <ul class="navigation__list">
            <li class="navigation__item">
                <a href="#" class="navigation__link">HOME</a>
            </li>
            <li class="navigation__item navigation__item-dropdown">
                <div class="dropdown">
                    <button class="dropbtn">PRODUCTS</button>
                    <div class="dropdown-content">
                        <a href="{{route('shop.allfresh')}}">Fresh Truffles</a>
                        <a href="{{route('shop.truffled-products')}}">Truffled Products</a>
                        <a href="{{route('shop.truffle-packages')}}">Truffle Packages</a>
                    </div>
                </div>
            </li>
            <li class="navigation__item">
                <a href="{{route('recipes.allrecipes')}}" class="navigation__link">RECIPES</a>
            </li>
            <li class="navigation__item">
                <a href="#" class="navigation__link">ABOUT US</a>
            </li>
            <li class="navigation__item">
                <a href="#" class="navigation__link">ABOUT TRUFFLES</a>
            </li>
            <li class="navigation__item">
                <a href="#" class="navigation__link">CONTACTS</a>
            </li>
        </ul>
    </nav>
</div>

<header class="header">

    <div class="header__text-box">
        <h1 class="heading-primary">
            <span class="heading-primary--main">TRUFELO</span>
            <span class="heading-primary--sub">ONLY THE FINEST TRUFFLES</span>
        </h1>
        <a href="#" class="btn btn--white btn--animated">DISCOVER US</a>
    </div>
</header>

<main>

@include('partials.index-products')
@include('partials.featured-products')
@include('partials.featured-recipes')
@include('partials.our-details')

</main>

@include('partials.second-footer')

@include('scripts.scripts')
@section('truffle-scripts')
@stop
<script src="{{URL::to('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{URL::to('node_modules/jquery-scrollify/jquery.scrollify.js') }}"></script>
<script>
    window.onscroll = function() {myFunction()};

    function myFunction() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            document.getElementById("glowEffect").className = "glowEffect-after";
        } else {
            document.getElementById("glowEffect").className = "";
        }
    }
</script>
<script>
    $(function () {
        $.scrollify({
            section: ".scrollify"
        });
    });
</script>
</body>

</html>
