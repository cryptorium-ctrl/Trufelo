<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    @yield('styles')

    @yield('')
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="css/arrow.css">
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="css/waypoints.css">
    <link rel="stylesheet" href="css/styles.css">


</head>

<body data-spy="scroll" data-target="#navbarResponsive" style="">
@include('partials.header')

@yield('content')



<div class="row" style="padding-top: 10rem;">

        <div class="col-4-md">
            @if (session()->has('success_message'))
                <div class="alert alert-success" id="alert-message">
                    {{session()->get('success_message')}}
                </div>
            @endif

            @if(count($errors) > 0 )
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>

    </div>
    @endif
</div>
</div>
</div>
</div>
<!-- Check if cart is empty -->

@if(Cart::count() > 0)

    @foreach (Cart::content() as $item)

        <script src="https://use.fontawesome.com/c560c025cf.js"></script>
        <h2 id="alert-message">
            {{ Cart::count() }}
            @if(Cart::count() == 1)
                item
            @else
                items
            @endif
            </h2>
        <div class="container">
            <div class="">
                <div class="card-header bg-dark text-light">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    Shopping cart
                    <a href="{{route('shop.fresh-summer')}}" class="btn btn-outline-light btn-sm pull-right">Continue shopping</a>
                    <div class="clearfix"></div>
                </div>
                <div class="card-body">
                    <!-- PRODUCT -->
                    <div class="row shopping-cart">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                            <a href="{{route('shop.fresh-summer')}}">
                                <img src="{{asset('../public/assets/img/fresh-truffles/summer_4oz_1.png')}}" alt="" ></a>
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                                                <h4 class="product-name"><strong>{{$item->model->name}}</strong></h4>
                            <h4>
                                <small>Product description</small>
                            </h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                                        <h6><strong>Price: {{$item->model->price}}<span class="text-muted">€</span></strong></h6>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">
                            <div>
                                <select class="quantity" data-id="{{$item->rowId}}">
                                    @for($i = 1; $i < 5 + 1; $i++)
                                        <option {{$item->qty == $i ? 'selected' : ''}}>{{$i}}</option>
                                        @endfor
                                </select>
                            </div>
                        </div>
                        <div class="col-2 col-sm-2 col-md-2 text-right">
                            <form action="{{route('cart.destroy', $item->rowId)}}" method="POST">
                                                            {{csrf_field()}}
                                                            {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-dark btn-xs">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- END PRODUCT -->
            </div>
                <div class="">
                    <a href="{{route('shop.checkout')}}" class="btn btn-turquoise pull-right" id="shopping-cart-checkout">Checkout</a>
                    <div class="pull-right" id="total-price">
                        Total price: <b>{{Cart::subtotal()}}€</b>
                    </div>
                </div>
            </div>
        </div>
        </div>



    @endforeach
@else

    <h3 id="alert-message">No Items In Cart</h3>
    <a href="{{route('shop.fresh-summer')}}" class="btn btn-turquoise" id="alert-message">Continue Shopping</a>
@endif  <!-- End of Check if Cart is Empty -->


<!--- Top Scroll -->
<a href="#home" class="top-scroll">
    <i class="fas fa-angle-up"></i>
</a>
<!--- End of Top Scroll -->

<!--- Script Source Files -->




<script src="js/jquery-3.3.1.min.js"></script>
{{--<script src="node_modules/jquery-scrollify/jquery.scrollify.js"></script>--}}
{{--<script type="text/javascript" src="{{ URL::asset('../node_modules/jquery-scrollify/jquery.scrollify.js') }}"></script>--}}
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.8.1/js/all.js"></script>
<script src="js/custom.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/waypoints.js"></script>
{{--<script src="js/lightbox.js"></script>--}}
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.counterup.js"></script>
<script src="js/validator.js"></script>
<script src="js/contact.js"></script>
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

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
{{--<script src="{{asset('js/app.js')}}"></script>--}}
<script>
    (function () {
        const classname = document.querySelectorAll('.quantity')

        Array.from(classname).forEach(function(element) {
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


<!--- End of Script Source Files -->

</body>

</html>