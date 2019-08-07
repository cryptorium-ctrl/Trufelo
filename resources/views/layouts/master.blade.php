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
            <img
                class="header__logo header__logo--glowEffect"
                src="../public/assets/img/logo/logo.png"
                alt="header__logo"
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
                        <a href="#">Truffle Packages</a>
                    </div>
                </div>
            </li>
            <li class="navigation__item">
                <a href="#" class="navigation__link">RECIPES</a>
            </li>
            <li class="navigation__item">
                <a href="#" class="navigation__link">ABOUT US</a>
            </li>
            <li class="navigation__item">
                <a href="#" class="navigation__link">ABOUT TRUFFLES</a>
            </li>
            <li class="navigation__item">
                <a href="#" class="navigation__link">CONTACT</a>
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
    <section class="index__products">
        <div class="row">
            <div class="col-1-of-3">
                <!--First Card-->
                <div class="card">
                    <div class="card__side card__side--front">
                        <div class="card__picture card__picture--1">
                            &nbsp
                        </div>
                        <h4 class="card__heading">
                  <span class="card__heading-span--1">
                    Fresh &nbsp &nbsp &nbsp Truffles</span
                  >
                        </h4>
                        <div class="card__details">
                            <ul>
                                <li>Winter Truffles</li>
                                <li>Summer Truffles</li>
                                <li>White Truffles</li>
                                <li class="card__details-animation">
                      <span class="card__details-arrow"
                      ><img
                              class="card__details-arrow-pic"
                              src="../public/assets/img/logo/curve-arrow.png"
                              alt=""
                          /></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card__side card__side--back card__side--back-1">
                        <div
                            class="corner-ribbon corner-ribbon__sticky corner-ribbon__top-right corner-ribbon__red corner-ribbon__shadow"
                        >
                            Best Quality
                        </div>
                        <div class="card__side--back--button-box">
                            <a href="#" class="btn btn--white btn--animated">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1-of-3">
                <!--Second Card-->
                <div class="card">
                    <div class="card__side card__side--front">
                        <div class="card__picture card__picture--2">
                            &nbsp
                        </div>
                        <h4 class="card__heading">
                            <span class="card__heading-span--2">Truffled Products</span>
                        </h4>
                        <div class="card__details">
                            <ul>
                                <li>
                                    Truffle Oil & Vinegar
                                </li>
                                <li>
                                    Truffle Cavair
                                </li>
                                <li>
                                    Truffle Condiments
                                </li>
                                <li class="card__details-animation">
                      <span class="card__details-arrow"
                      ><img
                              class="card__details-arrow-pic"
                              src="../public/assets/img/logo/curve-arrow.png"
                              alt=""
                          /></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card__side card__side--back card__side--back-2">
                        <div
                            class="corner-ribbon corner-ribbon__sticky corner-ribbon__top-right corner-ribbon__red corner-ribbon__shadow"
                        >
                            Best Price
                        </div>
                        <div class="card__side--back--button-box">
                            <a href="#" class="btn btn--white btn--animated">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1-of-3">
                <!--Third Card-->
                <div class="card">
                    <div class="card__side card__side--front">
                        <div class="card__picture card__picture--3">
                            &nbsp
                        </div>
                        <h4 class="card__heading">
                            <span class="card__heading-span--3">Truffle Packages</span>
                        </h4>
                        <div class="card__details">
                            <ul>
                                <li>1</li>
                                <li>2</li>
                                <li>3</li>
                                <li class="card__details-animation">
                      <span class="card__details-arrow"
                      ><img
                              class="card__details-arrow-pic"
                              src="../public/assets/img/logo/curve-arrow.png"
                              alt=""
                          /></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card__side card__side--back card__side--back-3">
                        <div
                            class="corner-ribbon corner-ribbon__sticky corner-ribbon__top-right corner-ribbon__red corner-ribbon__shadow"
                        >
                            Best Quality
                        </div>
                        <div class="card__side--back--button-box">
                            <a href="#" class="btn btn--white btn--animated">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="down-arrow" href="#features">
            <div class="arrow bounce d-none d-md-block">
                <i class="fas fa-angle-down" aria-hidden="true"></i>
            </div>
        </a>
    </section>
</main>



@include('partials.second-footer')
@include('scripts.scripts')
@section('truffle-scripts')
@stop
<script src="{{asset('node_modules/jquery-scrollify/jquery.scrollify.js')}}"></script>
<script>
    $(function () {
        $.scrollify({
            section: ".scrollify",
        });
    });
</script>
</body>

</html>
