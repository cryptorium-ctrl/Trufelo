<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
{{--    @yield('styles')--}}


    <link rel="stylesheet" href="css/icofont.min.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="css/arrow.css">
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="css/waypoints.css">

</head>

<body data-spy="scroll" data-target="#navbarResponsive">


@yield('content')


<!--- Start Landing Page Image -->
{{--<div class="scrollify">--}}


    <!--- Bouncing Down Arrow -->
    <a class="down-arrow" href="#features">
        <div class="arrow bounce d-none d-md-block">
            <i class="fas fa-angle-down" aria-hidden="true"></i>
        </div>
    </a>


<div class="navigation">
    <input type="checkbox" class="navigation__checkbox" id="navi-toggle" />

    <label for="navi-toggle" class="navigation__button">
        <div class="header__logo-box">
            <img
                    class="header__logo header__logo--glowEffect"
                    src="img/logo.png"
                    alt="header__logo"
            />
        </div></label>

    <div class="navigation__background">&nbsp;</div>

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
                        <a href="#">Truffled Products</a>
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
                                  src="img/curve-arrow.png"
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
                                  src="img/curve-arrow.png"
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
                                  src="img/curve-arrow.png"
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
    </section>
    <section class="section__about-us" style="margin-top: 50rem;">
        <div class="row">
            <div class="col-1-of-2">
                <img
                        src="img/about2.jpg"
                        alt=""
                        class="about-us__img"
                        style="width: 80rem; margin-left: -40rem;"
                />
            </div>
            <div class="col-1-of-2">
                <p class="about-us__p" style="width: 90rem; margin-top: 20rem;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut,
                    eveniet ullam dolores rem delectus amet non libero debitis
                    temporibus fugit alias maxime voluptate expedita eos iure eligendi
                    ducimus est voluptatibus. Lorem ipsum dolor sit, amet consectetur
                    adipisicing elit. Quam architecto necessitatibus illo temporibus
                    aut? Cupiditate voluptates sapiente, at fugit unde, nesciunt qui
                    rem vel debitis adipisci saepe nisi, delectus libero. Lorem ipsum
                    dolor sit amet consectetur adipisicing elit. Aperiam consequatur
                    nam quis voluptate doloribus, numquam possimus deserunt rerum
                    minus dicta! Delectus porro rerum atque maxime, magnam id ut
                    accusantium quod! Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Facilis, quibusdam quam. Eum laboriosam omnis
                    distinctio ducimus pariatur nulla eos ab vero mollitia
                    accusantium, corrupti velit accusamus, tempora odio nobis nisi!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Blanditiis esse impedit officia ea placeat, sed autem nesciunt
                    atque distinctio velit ad eum laudantium ab suscipit quas maiores!
                    Aspernatur, neque magnam.
                </p>
            </div>
        </div>
    </section>
</main>

<!--- Start Contact Section -->
<div id="contact" class="offset">
    {{--    <div class="scrollify">--}}
    <footer>
        <div class="row" id="contacts-row">
            <div class="col-md-5">
                <img src="assets/img/logo/Truffle-oil-logo (3).png" alt="">
                <p>At our core is a collection of design and development solutions that represent everything
                    your business needs to compete in the modern marketplace.</p>
                <strong>Our Location</strong>
                <p>100 Street Name<br>Our City, AA 10000</p>
                <strong>Contact Info</strong>
                <p>(888) 888-8888<br>email@nuno.com</p>
            </div>

            <div class="col-md-7">
                <h3>Contact Us</h3>

                <form id="contact-form" method="post" action="contact.php">

                    <div class="messages"></div>
                    <div class="controls">

                        <div class="form-group">
                            <input id="form_name" type="text" name="name" class="form-control"
                                   placeholder="Enter your name." required="required">
                        </div>

                        <div class="form-group">
                            <input id="form_email" type="email" name="email" class="form-control"
                                   placeholder="Enter your email." required="required">
                        </div>

                        <div class="form-group">
								<textarea id="form_message" name="message" class="form-control"
                                          placeholder="Add your message." rows="4" required="required"></textarea>
                        </div>

                        <input type="submit" class="btn btn-outline-light btn-sm" value="Send message">

                    </div>

                </form>

            </div>
            <hr class="socket">
            &copy; Trufelo.
        </div>
    </footer>
</div>
</div>

</div>
<!--- End of Row -->


</div>

<!--- End Contact Section -->

<!--- Top Scroll -->
<a href="#home" class="top-scroll">
    <i class="fas fa-angle-up"></i>
</a>
<!--- End of Top Scroll -->

<!--- Script Source Files -->


<script src="js/jquery-3.3.1.min.js"></script>
<script src="{{ URL::asset('../node_modules/jquery-scrollify/jquery.scrollify.js') }}"></script>
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.8.1/js/all.js"></script>
<script src="js/custom.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/waypoints.js"></script>
<script src="js/lightbox.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.counterup.js"></script>
<script src="js/validator.js"></script>
<script src="js/contact.js"></script>
<script src="js/main.min.js"></script>
<script src="js/script.js"></script>
<script>
    $(function () {
        $.scrollify({
            section: ".scrollify",
        });
    });
</script>
<script>
    lightbox.option({
        'albumLabel': "",
        'positionFromTop': 150,
        'wrapAround': true
    })
</script>


<!--- End of Script Source Files -->
{{--@yield('scripts')--}}
</body>

</html>
