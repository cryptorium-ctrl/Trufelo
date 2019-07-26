<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @yield('styles')

    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
{{--    <link rel="stylesheet" href="css/style.css">--}}
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="css/arrow.css">
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="css/waypoints.css">
    <link rel="stylesheet" href="css/styles.css">


</head>

<body>


<div class="row justify-content-center align-items-center">
<div class="loader"></div>
<main id="main" role="main">
    <section id="checkout-banner">
        <div class="container py-5 text-center">
            <i class="fa fa-credit-card fa-3x text-light"></i>
        </div>
    </section>

    <section id="checkout-container">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-4 order-md-2">
                    <h4 class="d-flex justify-content-between align-items-center">
                        <span class="text-muted">Your cart</span>
                        {{Cart::instance('default')->count()}}
                        @if(Cart::count() == 1)
                        item
                            @else
                        items
                           @endif
                        <span class="badge badge-secondary badge-pill"></span>
                    </h4>

                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">

                            <div>
                                @foreach(Cart::content() as $item)
                                    <h6 class="my-0">{{$item->model->name}}</h6>
                                    <input type="hidden" {{$item->id}}>
                                    <input type="hidden" {{$item->qty}}>
{{--                                    {{dd($item->qty)}}--}}
                                @endforeach
                            </div>
                            <span class="text-muted">{{$item->model->price}}</span>
                        </li>


                        <li class="list-group-item d-flex justify-content-between bg-light" name="coupon_code">
                            <div class="text-success">
                                <h6 class="my-0">Promo code</h6>
                                <small>{{session()->get('coupon')['name']}}</small>
                            </div>
                            <span class="text-success">{{session()->get('coupon')['discount']}}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between" id="total" name="total">
                            <span>Total Price</span>
                            <strong>{{Cart::subtotal() - session()->get('coupon')['discount']}}</strong>
                        </li>
                    </ul>

                    <form class="card p-2" action="{{route('coupon.store')}}" method="POST">
                                                {{csrf_field()}}
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promo code" name="coupon_code" id="coupon_code">
                        <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary" id="myBtn">Redeem</button>
                            </div>
                        </div>
                    </form>
                    <div>
                        @if (session()->has('success_message'))
                            <div class="alert alert-success" id="alert-message">
                                {{session()->get('success_message')}}
                            </div>
                        @endif

                        @if(count($errors) > 0 )
                            <div class="alert alert-danger" id="alert-message">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="payment-methods">
                        <p class="pt-4 mb-2">Payment Options</p>
                        <hr>
                        <ul class="list-inline d-flex">
                            <li class="mx-1 text-info">
                                <i class="fa-2x fab fa-cc-visa"></i>
                            </li>
                            <li class="mx-1 text-info">
                                <i class="fa-2x fab fa-stripe"></i>
                            </li>
                            <li class="mx-1 text-info">
                                <i class="fa-2x fab fa-cc-paypal"></i>
                            </li>
                            <li class="mx-1 text-info">
                                <i class="fa-2x fab fa-cc-jcb"></i>
                            </li>
                            <li class="mx-1 text-info">
                                <i class="fa-2x fab fa-cc-discover"></i>
                            </li>
                            <li class="mx-1 text-info">
                                <i class="fa-2x fab fa-cc-amex"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">CUSTOMER INFORMATION</h4>
                    <form class="needs-validation" novalidate id="payment-form" action="{{route('shop.checkout.store')}}" method="POST">
                                                {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="first_name">First name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter Your First Name" required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="last_name">Last name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Your Last Name" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            @if(auth()->user())
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" value="{{ auth()->user()->email }}" readonly>
                            @else
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" value="{{ old('email') }}" required>
                            @endif
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" id="country" name="country" placeholder="Enter Your Country" required>
                            <div class="invalid-feedback">
                                Please enter your country.
                            </div>
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" id="city" name="city" placeholder="Enter Your City">
                            <div class="invalid-feedback">
                                Please enter your city.
                            </div>
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Your Address">
                            <div class="invalid-feedback">
                                Please enter your address.
                            </div>
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                            <div class="invalid-feedback">
                                Please enter your phone number.
                            </div>
                        </div>

                        <div class="mb-3">
                                <span class="text">Required</span>

                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Provide any notes if you have for your order">
                        </div>

                        <hr class="mb-4">
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
                            <input type="text" class="form-control" id="name_on_card" name="name_on_card"
                                   placeholder="" required>
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
                                <button type="submit" class="button-primary full-width">Complete Order</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
</div>
@include('partials.second-footer') <!-- Footer -->



@yield('scripts')
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



{{--<script src="https://js.stripe.com/v3/"></script>--}}
{{--<script>--}}
{{--    (function(){--}}
{{--        // Create a Stripe client.--}}
{{--        var stripe = Stripe('pk_test_TYooMQauvdEDq54NiTphI7jx');--}}

{{--// Create an instance of Elements.--}}
{{--        var elements = stripe.elements();--}}

{{--// Custom styling can be passed to options when creating an Element.--}}
{{--// (Note that this demo uses a wider set of styles than the guide below.)--}}
{{--        var style = {--}}
{{--            base: {--}}
{{--                color: '#32325d',--}}
{{--                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',--}}
{{--                fontSmoothing: 'antialiased',--}}
{{--                fontSize: '16px',--}}
{{--                '::placeholder': {--}}
{{--                    color: '#aab7c4'--}}
{{--                }--}}
{{--            },--}}
{{--            invalid: {--}}
{{--                color: '#fa755a',--}}
{{--                iconColor: '#fa755a'--}}
{{--            }--}}
{{--        };--}}

{{--// Create an instance of the card Element.--}}
{{--        var card = elements.create('card', {--}}
{{--            style: style,--}}
{{--            hidePostalCode: true--}}
{{--        });--}}

{{--// Add an instance of the card Element into the `card-element` <div>.--}}
{{--        card.mount('#card-element');--}}

{{--// Handle real-time validation errors from the card Element.--}}
{{--        card.addEventListener('change', function(event) {--}}
{{--            var displayError = document.getElementById('card-errors');--}}
{{--            if (event.error) {--}}
{{--                displayError.textContent = event.error.message;--}}
{{--            } else {--}}
{{--                displayError.textContent = '';--}}
{{--            }--}}
{{--        });--}}

{{--// Handle form submission.--}}
{{--        var form = document.getElementById('payment-form');--}}
{{--        form.addEventListener('submit', function(event) {--}}
{{--            event.preventDefault();--}}

{{--            var options = {--}}
{{--                name: document.getElementById('name_on_card').value,--}}
{{--                address_line1: document.getElementById('address').value,--}}
{{--                address_city: document.getElementById('city').value,--}}
{{--                address_state: document.getElementById('province').value,--}}
{{--                address_zip: document.getElementById('postalcode').value--}}
{{--            }--}}

{{--            stripe.createToken(card, options).then(function(result) {--}}
{{--                if (result.error) {--}}
{{--                    // Inform the user if there was an error.--}}
{{--                    var errorElement = document.getElementById('card-errors');--}}
{{--                    errorElement.textContent = result.error.message;--}}
{{--                } else {--}}
{{--                    // Send the token to your server.--}}
{{--                    stripeTokenHandler(result.token);--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}

{{--// Submit the form with the token ID.--}}
{{--        function stripeTokenHandler(token) {--}}
{{--            // Insert the token ID into the form so it gets submitted to the server--}}
{{--            var form = document.getElementById('payment-form');--}}
{{--            var hiddenInput = document.createElement('input');--}}
{{--            hiddenInput.setAttribute('type', 'hidden');--}}
{{--            hiddenInput.setAttribute('name', 'stripeToken');--}}
{{--            hiddenInput.setAttribute('value', token.id);--}}
{{--            form.appendChild(hiddenInput);--}}

{{--            // Submit the form--}}
{{--            form.submit();--}}
{{--        }--}}
{{--    })();--}}
{{--</script>--}}
</body>

</html>