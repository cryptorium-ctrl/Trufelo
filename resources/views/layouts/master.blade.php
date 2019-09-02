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
    <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

    <label for="navi-toggle" class="navigation__button">
        <div class="header__logo-box">
            <img class="header__logo header__logo--glowEffect"
                 src="{{asset('../storage/app/public/logo/logo.svg')}}"
                 alt="header__logo" id="logo"
                 />
        </div>
    </label>
    <div class="navigation__background">&nbsp;</div>


    <nav class="navigation__nav">
        <ul class="navigation__list">
            <li class="navigation__item">
                <a href="#" class="navigation__link">01 HOME</a>
            </li>
            <li class="navigation__item">
                <a href="{{route('shop.allfresh')}}" class="navigation__link">02 PRODUCTS</a>
            </li>
            <li class="navigation__item">
                <a href="{{route('shop.allfresh')}}" class="navigation__link"
                   style="font-size: 2rem; margin-left: 15rem;">2.1 FRESH TRUFFLES</a>
            </li>
            <li class="navigation__item">
                <a href="{{route('shop.truffled-products')}}" class="navigation__link"
                   style="font-size: 2rem; margin-left: 15rem;">2.2 TRUFFLED PRODUCTS</a>
            </li>
            <li class="navigation__item">
                <a href="{{route('shop.truffle-packages')}}" class="navigation__link"
                   style="font-size: 2rem; margin-left: 15rem;">2.3 TRUFFLE PACKAGES</a>
            </li>
            <li class="navigation__item">
                <a href="{{route('recipes.allrecipes')}}" class="navigation__link">03 RECIPES</a>
            </li>
            <li class="navigation__item">
                <a href="#" class="navigation__link">04 ABOUT US</a>
            </li>
            <li class="navigation__item">
                <a href="#" class="navigation__link">05 CONTACT</a>
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
        <a href="#" onclick="myFunction()" class="btn btn--white btn--animated">DISCOVER US</a>
    </div>
</header>

<main>

{{--    @include('partials.index-products')--}}

{{--    @include('partials.featured-products')--}}

{{--    @include('partials.featured-recipes')--}}

{{--    @include('partials.our-details')--}}


</main>

{{--@include('partials.second-footer')--}}

@include('scripts.scripts')
@section('truffle-scripts')
@stop
<script>
    function myFunction() {
        document.getElementById("navi-toggle").click();
    }
</script>
</body>

</html>
