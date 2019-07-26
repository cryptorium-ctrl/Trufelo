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
        <link rel="stylesheet" href="css/styles.css">


</head>

<body data-spy="scroll" data-target="#navbarResponsive">
{{--@include('partials.second-header')--}}


<div class="row justify-content-center align-items-center" style="padding-top: 10rem;">
    <div class="col-md-4">
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

<!-- Check if cart is empty -->

@if(Cart::count() > 0)
<div class="row w-75">
    <div class="container">
            <div class="text-dark h-75">
                <div class="float-left">
               <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <b>YOUR SHOPPING CART</b>
                </div>
                <div class="clearfix"></div>
            </div>
    </div>
</div>
            <div class="card-body">
                @foreach (Cart::content() as $item)

                    <!-- PRODUCT -->
                    <div class="container w-100">
                    <div class="row shopping-cart align-items-center">
                        <div class="col-md-2">
                            <a href="{{route($item->model->webPath)}}">
                                <img class="" src="{{asset('storage/' .$item->model->image)}}"></a>
                        </div>
                        <div class="col-md-2">
                            <h4 class="product-name"><strong>{{$item->model->name}}</strong></h4>
                            <h4>
                                <small>{{$item->model->short_description}}</small>
                            </h4>
                        </div>
                        <div class="col-md-2 pl-5 mb-5">
                                <h6>Price:<strong> €{{$item->model->price}}</strong><span class="text-muted"></span>
                                </h6>
                        </div>
                        <div class="col-md-2 mb-4 pl-5">
                            <h6>Quantity</h6>
                                    <select class="quantity" data-id="{{$item->rowId}}">
                                        @for($i = 1; $i < 5 + 1; $i++)
                                            <option {{$item->qty == $i ? 'selected' : ''}}>{{$i}}</option>
                                        @endfor
                                    </select>
                        </div>
                        <div class="col-md-2 mb-5 pl-5">
                            <h6>Total Price: <strong>€{{($item->model->price)*$item->qty}}</strong></h6>
                        </div>
                            <div class="col-md-1 mb-5 pl-5">
                                <form action="{{route('cart.destroy', $item->rowId)}}" method="POST">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn" id="trash-btn">
                                        <i class="far fa-times-circle"></i>
                                    </button>
                                </form>
                            </div>
                    </div>
                    <hr>
                    </div>
            @endforeach
    </div>
</div>


<div class="row justify-content-end align-items-center" style="padding-top: 10rem;">
    <div class="col-md-4">
        Cart Total price: <b>€{{Cart::subtotal()}}</b>
    </div>
</div>

<div class="row justify-content-end">
    <div class="col-md-5">
        <a href="{{route('shop.allfresh')}}" class="btn btn-turquoise ml-0" id="shopping-cart-checkout">Continue shopping</a>
        <a href="{{route('shop.checkout.index')}}" class="btn btn-turquoise ml-0" id="shopping-cart-checkout">Proceed To Checkout</a>
    </div>
</div>

<div class="col-md-12 pt-5">
@include('partials.might-like')
</div>

@else


<div class="container">
    <div class="row">
        <h3 id="alert-message">Your Shopping Cart Is Empty</h3>
    </div>
    <div class="row">
        <a href="{{route('shop.allfresh')}}" class="btn btn-turquoise" id="shopping-cart-checkout">Proceed To Online Store</a>
    </div>
</div>

@endif  <!-- End of Check if Cart is Empty -->

<div style="bottom: 0; width: 100%;">
@include('partials.second-footer')
</div>
<!--- Script Source Files -->

<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.8.1/js/all.js"></script>
{{--<script>{{URL::asset('js/app.js')}}</script>--}}
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
{{--<script src="{{asset('js/app.js')}}"></script>--}}
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


<!--- End of Script Source Files -->

</body>

</html>