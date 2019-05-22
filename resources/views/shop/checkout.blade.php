<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @yield('styles')

    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
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

<body>
<div class="loader"></div>
<main id="main" role="main">
    <section id="checkout-banner">
        <div class="container py-5 text-center">
            <i class="fa fa-credit-card fa-3x text-light"></i>
            <h2 class="my-3">Checkout form</h2>
            <p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation
                state that can be triggered by attempting to submit the form without completing it.</p>
        </div>
    </section>

    <section id="checkout-container">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your cart</span>
                        {{Cart::instance('default')->count()}}
                        <span class="badge badge-secondary badge-pill"></span>
                    </h4>

                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">

                            <div>
                                @foreach(Cart::content() as $item)
                                    <h6 class="my-0">{{$item->model->name}}</h6>
                                @endforeach
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">{{$item->model->price}}</span>
                        </li>


                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                                <h6 class="my-0">Promo code</h6>
                                <small>EXAMPLECODE</small>
                            </div>
                            <span class="text-success">-$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total Price</span>
                            <strong>{{Cart::subtotal()}}</strong>
                        </li>
                    </ul>
                    <form class="card p-2">
                        {{--                        {{csrf_field()}}--}}
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promo code">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">Redeem</button>
                            </div>
                        </div>
                    </form>
                    <div class="payment-methods">
                        <p class="pt-4 mb-2">Payment Options</p>
                        <hr>
                        <ul class="list-inline d-flex">
                            <li class="mx-1 text-info">
                                <i class="fa-2x fa fa-cc-visa"></i>
                            </li>
                            <li class="mx-1 text-info">
                                <i class="fa-2x fa fa-cc-stripe"></i>
                            </li>
                            <li class="mx-1 text-info">
                                <i class="fa-2x fa fa-cc-paypal"></i>
                            </li>
                            <li class="mx-1 text-info">
                                <i class="fa-2x fa fa-cc-jcb"></i>
                            </li>
                            <li class="mx-1 text-info">
                                <i class="fa-2x fa fa-cc-discover"></i>
                            </li>
                            <li class="mx-1 text-info">
                                <i class="fa-2x fa fa-cc-amex"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Billing address</h4>
                    <form class="needs-validation" novalidate id="payment-form" action="{{route('shop.store')}}" method="POST">
                        {{--                        {{csrf_field()}}--}}
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">First name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Last name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="username">Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="text" class="form-control" id="username" placeholder="Username" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Your username is required.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email">Email
                                <span class="text-muted">(Optional)</span>
                            </label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address2">Address 2
                                <span class="text-muted">(Optional)</span>
                            </label>
                            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                        </div>

                        <hr class="mb-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="same-address">
                            <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="save-info">
                            <label class="custom-control-label" for="save-info">Save this information for next time</label>
                        </div>
                        <hr class="mb-4">

                        <h4 class="mb-3">Payment</h4>

                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                <label class="custom-control-label" for="credit">Credit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                                <label class="custom-control-label" for="debit">Debit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                                <label class="custom-control-label" for="paypal">Paypal</label>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Name on card</label>
                            <input type="text" class="form-control" id="cc-name" placeholder="" required>
                            <small class="text-muted">Full name as displayed on card</small>
                            <div class="invalid-feedback">
                                Name on card is required
                            </div>

                            <div class="form-group">
                                <label for="card-element">
                                    Credit or debit card
                                </label>
                                <div id="card-element">
                                    <!-- A Stripe Element will be inserted here. -->
                                </div>

                                <!-- Used to display form errors. -->
                                <div id="card-errors" role="alert"></div>

                                <hr class="mb-4">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">
                                    <i class="fa fa-credit-card"></i> Complete Order</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="py-3" id="suggested-items">
        <div class="container">
            <div class="p-3 mb-2 bg-dark text-white">You May Also Like</div>
            <div class="row">
                <div class="col col-md-3 d-flex mb-2">
                    <div class="card">
                        <img class="card-img-top img-fluid border-bottom" src="img/item-1.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Ladies Sandal</h5>
                            <p class="card-text">Exhibit a great fashion sense wearing these heels from the house of O.T. Collection.
                            </p>
                            <a href="#" class="btn btn-success">$23.99</a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 d-flex mb-2">
                    <div class="card">
                        <img class="card-img-top img-fluid border-bottom" src="img/item-2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Gents Shoes</h5>
                            <p class="card-text">Make the rest look at you in admiration as you make your way by wearing these van sneakers
                                from ASB.</p>
                            <a href="#" class="btn btn-success">$45.50</a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 d-flex mb-2">
                    <div class="card">
                        <img class="card-img-top img-fluid border-bottom" src="img/item-3.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Ladies Sandal</h5>
                            <p class="card-text">Exhibit a great fashion sense wearing these heels from the house of O.T. Collection.
                            </p>
                            <a href="#" class="btn btn-success">$53.99</a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 d-flex mb-2">
                    <div class="card">
                        <img class="card-img-top img-fluid border-bottom" src="img/item-4.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Gents Shoes</h5>
                            <p class="card-text">Make the rest look at you in admiration as you make your way by wearing these van sneakers
                                from ASB.</p>
                            <a href="#" class="btn btn-success">$95.50</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a href="#" class="btn btn-primary scrollUp">
        <i class="fa fa-arrow-circle-o-up"></i>
    </a>
</main>
<!-- Footer -->
<footer id="footer">
    <p class="copyright">Made with
        <i class="fa fa-heart"></i> By
        <a target="_blank" title="Orbit Themes" href="http://www.orbitthemes.com">Orbit Themes</a> &copy;
        <span id="currentYear"></span> All Rights Reserved.
    </p>
    <div class="social">
        <a traget="_blank" href="https://facebook.com/orbitthemes" title="facebook">
            <i class="fa fa-facebook"></i>
        </a>
        <a traget="_blank" href="https://twitter.com/orbitthemes" title="twitter">
            <i class="fa fa-twitter"></i>
        </a>
        <a traget="_blank" href="https://plus.google.com/+orbitthemes" title="Google+" target="_blank">
            <i class="fa fa-google-plus"></i>
        </a>
        <a traget="_blank" href="https://github.com/orbitthemes" title="github" target="_blank">
            <i class="fa fa-github"></i>
        </a>
        <a traget="_blank" href="https://www.behance.net/orbitthemes" title="Behance" target="_blank">
            <i class="fa fa-behance"></i>
        </a>
        <a traget="_blank" href="https://dribbble.com/orbitthemes" title="Dribbble" target="_blank">
            <i class="fa fa-dribbble"></i>
        </a>
        <a traget="_blank" href="https://www.pinterest.com/orbitThemes/" title="Pinterest" target="_blank">
            <i class="fa fa-pinterest"></i>
        </a>
        <a traget="_blank" href="https://www.reddit.com/user/orbitthemes" title="Reddit" target="_blank">
            <i class="fa fa-reddit"></i>
        </a>
        <a traget="_blank" href="https://orbitthemes.com/blog/" title="RSS" target="_blank">
            <i class="fa fa-rss"></i>
        </a>
    </div>
</footer>

@yield('scripts')
<script src="https://js.stripe.com/v3/"></script>
<script>
    (function(){
        // Create a Stripe client.
        var stripe = Stripe('pk_test_TYooMQauvdEDq54NiTphI7jx');

// Create an instance of Elements.
        var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

// Create an instance of the card Element.
        var card = elements.create('card', {
            style: style,
            hidePostalCode: true
        });

// Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

// Handle real-time validation errors from the card Element.
        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

// Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            var options = {
                name: document.getElementById('name_on_card').value,
                address_line1: document.getElementById('address').value,
                address_city: document.getElementById('city').value,
                address_state: document.getElementById('province').value,
                address_zip: document.getElementById('postalcode').value
            }

            stripe.createToken(card, options).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });

// Submit the form with the token ID.
        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }
    })();
</script>
</body>

</html>