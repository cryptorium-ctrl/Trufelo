<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')s</title>
    @yield('styles')

    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/icofont.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="css/arrow.css">
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="css/waypoints.css">
    {{--<link rel="stylesheet" href="css/styles.css">--}}


</head>

<body data-spy="scroll" data-target="#navbarResponsive">
@include('partials.header')

@yield('content')

<!--- Start Landing Page Image -->


<div class="landing">
    <div class="home-wrap">
        <div class="home-inner">
        </div>
    </div>
</div>
<!--- End Landing Page Image -->

<!--- Start Landing Page Caption -->
<div class="caption text-center">


    <div class="os-animation" data-animation="bounceInUp" data-delay="1s">
        <a class="btn btn-outline-light btn-lg" href="#features" id="shop-now-button">SHOP NOW</a>
    </div>

</div>
<!--- End Landing Page Caption -->

<!--- Bouncing Down Arrow -->
<a class="down-arrow" href="#features">
    <div class="arrow bounce d-none d-md-block">
        <i class="fas fa-angle-down" aria-hidden="true"></i>
    </div>
</a>
</div>
</div>

<!--- End Home Section -->


<!--- End Fixed Background IMG Dark -->

</div>
</div>
<!--- End of Features Section -->

<!--- Start Shop Online Section -->

<div id="shop-online" class="offset">
    <div class="scrollify">
        <div class="col-12 os-animation" data-animation="fadeInUp">
            <h3 class="heading" style="padding-top: 7rem;">SHOP ONLINE</h3>
            <div class="heading-underline"></div>
        </div>
        <!--- End Row -->

        <!--- Start Shop Online Grid -->

        <div class="row">

            <div class="col-md-4">
                <div class="hovereffect">
                    <img class="img-responsive" src="../public/assets/img/fresh-truffles/3480_2_.jpg" alt=""
                         style="height: 40rem; width: 40rem;">
                    <div class="overlay">
                        <h2>fresh truffles</h2>
                        <a class="btn btn-outline-light btn-sm" href="allfresh" id="shop-online-button">buy now</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="hovereffect">
                    <img class="img-responsive" src="../public/assets/img/oil/white-truffle-oil.jpg" alt=""
                         style="height: 40rem; width: 40rem;">
                    <div class="overlay">
                        <h2>TRUFFLED PRODUCTS</h2>
                        <a class="btn btn-outline-light btn-sm" href="#" id="shop-online-button">buy now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="hovereffect">
                    <img class="img-responsive" src="../public/assets/img/packages/oil-package.jpg" alt=""
                         style="height: 40rem; width: 40rem;">
                    <div class="overlay">
                        <h2>truffle packages</h2>
                        <a class="btn btn-outline-light btn-sm" href="#" id="shop-online-button">buy now</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div> <!-- End Row of Categories -->

<!--- End Container -->


<!--- Start Truffle Recipes Section -->

<div id="recipes" class="offset">
    <div class="scrollify">
        <!--- Start Jumbotron -->
        <div class="jumbotron">
            <div class="narrow">

                <div class="os-animation" data-animation="fadeInUp">
                    <h3 class="heading">Truffle Recipes</h3>
                    <div class="heading-underline"></div>
                </div>

                <!--- Start Recipes Columns -->
                <div class="row justify-content-md-center">

                    <div class="col-md-6 col-lg-4">
                        <div class="os-animation" data-animation="fadeInLeft">
                            <div class="pricing-column text-center">
                                <img class="recipes-image"
                                     src="assets/img/recipes/Lifestyle-White-250ml-1-500x500.jpg" alt="">
                                <h3>Truffle Oil Recipes</h3>
                                <p>
                                </p>
                                <div class="pricing-features">
                                    <h4><span class="item">Domain Names</span>: 1</h4>

                                </div>

                                <a class="btn btn-secondary btn-sm" href="#contact">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="os-animation" data-animation="fadeInUp">
                            <div class="pricing-column text-center">

                                <img class="recipes-image" src="assets/img/recipes/Black-Truffle-Pasta3.jpg"
                                     alt="">
                                <h3>Fresh Truffle Recipes</h3>
                                <p>The Pro Plan, the best overall value you can get.</p>
                                <div class="pricing-features">
                                    <h4><span class="item">Domain Names</span>: 5</h4>

                                </div>

                                <a class="btn btn-turquoise btn-sm" href="#contact">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="os-animation" data-animation="fadeInRight">
                            <div class="pricing-column text-center">
                                <img class="recipes-image" src="assets/img/recipes/glazedham-500x500.jpg"
                                     alt="">
                                <h3>Truffle Pasta Recipes</h3>
                                <p>Go Premium if you need a little extra space.</p>
                                <div class="pricing-features">
                                    <h4><span class="item">Domain Names</span>: 10</h4>
                                </div>

                                <a class="btn btn-secondary btn-sm" href="#contact">Buy Now</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div> <!--- End Pricing Columns -->
        </div>

    </div> <!--- End Narrow -->

</div> <!--- End Jumbotron -->

<!--- End of Pricing Section -->

<!-- Start of About Truffles Section -->

<div id="about-truffles" class="offset">
    <div class="scrollify">
        <div class="fixed-background" id="about-fixed">
            <div class="row dark">

            </div>
        </div>
    </div>
</div>


<!--- Start About Us Section -->

<div id="about-us" class="offset">
    <div class="scrollify">
        <div class="col-12 os-animation" data-animation="fadeInUp">
            <h3 class="heading" id="about-us-heading">About Us</h3>
            <div class="heading-underline"></div>
        </div>

        <div class="col-md-12">
            <div class="os-animation" data-animation="fadeInUp">
                <div id="team-slider" class="owl-carousel owl-theme">

                    <div class="card text-center">
                        <img class="card-img-top" src="assets/img/aboutus/bella.jpg" alt="">
                        <div class="card-body">
                            <h4>Bella</h4>
                            <h5>CEO</h5>
                            <p>John is an entrepreneur with almost 20 years of experience.</p>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="card text-center">
                        <img class="card-img-top" src="assets/img/aboutus/Leo.jpg" alt="">
                        <div class="card-body">
                            <h4>Leo</h4>
                            <h5>President</h5>
                            <p>John has over 10 years of experience in a technology role.</p>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="card text-center">
                        <img class="card-img-top" src="assets/img/aboutus/Paffi.jpg" alt="">
                        <div class="card-body">
                            <h4>Paffi</h4>
                            <h5>Vice President</h5>
                            <p>Charles went to business school and worked his way up the ladder.</p>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="card text-center">
                        <img class="card-img-top" src="assets/img/aboutus/" alt="">
                        <div class="card-body">
                            <h4>Cindy Wilson</h4>
                            <h5>CFO</h5>
                            <p>Cindy has an established financial operations background.</p>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>

                </div>
                <!--- End Team Slider -->
            </div>
            <!--- End Animation -->
        </div>
        <!--- End col-md-12 -->
    </div>
</div>
</div>
</div>
</div>


<!--- Start Contact Section -->
<div id="contact" class="offset">
    <div class="scrollify">
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
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-reddit-square"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
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
</footer>
<!--- End of Footer -->

</div>

<!--- End Contact Section -->

<!--- Top Scroll -->
<a href="#home" class="top-scroll">
    <i class="fas fa-angle-up"></i>
</a>
<!--- End of Top Scroll -->

<!--- Script Source Files -->


<script src="js/jquery-3.3.1.min.js"></script>
<script src="node_modules/jquery-scrollify/jquery.scrollify.js"></script>
<script type="text/javascript" src="{{ URL::asset('../node_modules/jquery-scrollify/jquery.scrollify.js') }}"></script>
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
{{--<script src="https://use.fontawesome.com/releases/v5.8.1/js/all.js"></script>--}}
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
@yield('scripts')
</body>

</html>