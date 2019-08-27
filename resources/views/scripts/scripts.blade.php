
@yield('truffle-scripts')
<script src="{{URL::to('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{URL::to('node_modules/jquery-scrollify/jquery.scrollify.js') }}"></script>
<script src="{{URL::to('bootstrap-4.3.1-dist/js/bootstrap.min.js')}}"></script>
{{--<script src="{{URL::to('js/custom.js')}}"></script>--}}
<script src="{{URL::to('https://use.fontawesome.com/releases/v5.8.1/js/all.js')}}"></script>

{{--<script>--}}
{{--    $(function () {--}}
{{--        $.scrollify({--}}
{{--            section: ".scrollify",--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
{{--<script>--}}
{{--    lightbox.option({--}}
{{--        'albumLabel': "",--}}
{{--        'positionFromTop': 150,--}}
{{--        'wrapAround': true--}}
{{--    })--}}
{{--</script>--}}
{{--<script>--}}
{{--    $(document).ready(function () {--}}
{{--        $('.group').hide();--}}
{{--        $('#option1').show();--}}
{{--        $('#selectMe').change(function () {--}}
{{--            $('.group').hide();--}}
{{--            $('#'+$(this).val()).show();--}}
{{--        })--}}
{{--    });--}}
{{--</script>--}}
{{--<script>--}}
{{--    function myFunction() {--}}
{{--        let x = document.getElementById("mySelect").value;--}}
{{--        document.getElementById("demo").innerHTML = "Price:" + "€" + x;--}}
{{--    }--}}
{{--</script>--}}
@yield('cart-scripts')
<script src="{{URL::to('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{URL::to('bootstrap-4.3.1-dist/js/bootstrap.min.js')}}"></script>

<!-- Add To Cart Script -->
<script>
    (function () {
        const classname = document.querySelectorAll('.mySelect')

        Array.from(classname).forEach(function (element) {
            element.addEventListener('change', function () {
                const id = element.getAttribute('data-id')
                axios.patch(`cart/${id}`, {
                    quantity: this.value,

                })
                    .then(function (response) {
                        window.location.href = '{{route('shop.fresh-summer')}}'

                    })
                    .catch(function (error) {
                        console.log(error);
                        window.location.href = '{{route('shop.fresh-summer')}}'
                    });
            })
        })
    })();
</script>


<!-- Truffled Products Scripts -->
@yield('allfresh/truffled-products')

<script src="{{URL::asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{URL::asset('bootstrap-4.3.1-dist/js/bootstrap.min.js')}}"></script>

<!-- Cart Scripts -->
@yield('cart')

<script src="{{URL::asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{URL::asset('bootstrap-4.3.1-dist/js/bootstrap.min.js')}}"></script>
<script src="{{URL('https://use.fontawesome.com/releases/v5.8.1/js/all.js')}}"></script>
<script src="{{URL('https://unpkg.com/axios/dist/axios.min.js')}}"></script>

<script> //Popup Window Delay
    $(".alert").delay(5000).slideUp(500, function () {
        $(this).alert('close');
    });</script>
<script>
    (function () {
        const classname = document.querySelectorAll('.quantity')

        Array.from(classname).forEach(function (element) {
            element.addEventListener('change', function () {
                const id = element.getAttribute('data-id')
                axios.patch(`cart/${id}`, {
                    quantity: this.value,

                })
                    .then(function (response) {
                        window.location.href = '{{route('cart.index')}}'

                    })
                    .catch(function (error) {
                        console.log(error);
                        window.location.href = '{{route('cart.index')}}'
                    });
            })
        })
    })();
</script>

<!-- Stripe Scripts -->
@yield('stripe')

<!--Need Stripe Client Account to function-->

{{--<script src="https://js.stripe.com/v3/"></script>--}}
{{--<script>--}}
{{--    (function(){--}}
{{--        // Create a Stripe client.--}}
{{--        let stripe = Stripe('pk_test_TYooMQauvdEDq54NiTphI7jx');--}}

{{--// Create an instance of Elements.--}}
{{--        let elements = stripe.elements();--}}

{{--// Custom styling can be passed to options when creating an Element.--}}
{{--// (Note that this demo uses a wider set of style.blade.php than the guide below.)--}}
{{--        let style = {--}}
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
{{--        let card = elements.create('card', {--}}
{{--            style: style,--}}
{{--            hidePostalCode: true--}}
{{--        });--}}

{{--// Add an instance of the card Element into the `card-element` <div>.--}}
{{--        card.mount('#card-element');--}}

{{--// Handle real-time validation errors from the card Element.--}}
{{--        card.addEventListener('change', function(event) {--}}
{{--            let displayError = document.getElementById('card-errors');--}}
{{--            if (event.error) {--}}
{{--                displayError.textContent = event.error.message;--}}
{{--            } else {--}}
{{--                displayError.textContent = '';--}}
{{--            }--}}
{{--        });--}}

{{--// Handle form submission.--}}
{{--        let form = document.getElementById('payment-form');--}}
{{--        form.addEventListener('submit', function(event) {--}}
{{--            event.preventDefault();--}}

{{--            let options = {--}}
{{--                name: document.getElementById('name_on_card').value,--}}
{{--                address_line1: document.getElementById('address').value,--}}
{{--                address_city: document.getElementById('city').value,--}}
{{--                address_state: document.getElementById('province').value,--}}
{{--                address_zip: document.getElementById('postalcode').value--}}
{{--            }--}}

{{--            stripe.createToken(card, options).then(function(result) {--}}
{{--                if (result.error) {--}}
{{--                    // Inform the user if there was an error.--}}
{{--                    let errorElement = document.getElementById('card-errors');--}}
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
{{--            let form = document.getElementById('payment-form');--}}
{{--            let hiddenInput = document.createElement('input');--}}
{{--            hiddenInput.setAttribute('type', 'hidden');--}}
{{--            hiddenInput.setAttribute('name', 'stripeToken');--}}
{{--            hiddenInput.setAttribute('value', token.id);--}}
{{--            form.appendChild(hiddenInput);--}}

{{--            // Submit the form--}}
{{--            form.submit();--}}
{{--        }--}}
{{--    })();--}}
{{--</script>--}}
