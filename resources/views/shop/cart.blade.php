<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    @include('styles.style')
    @section('truffle-style')
    @stop


</head>

<body data-spy="scroll" data-target="#navbarResponsive">

@include('partials.header')


<div class="row justify-content-center align-items-center" style="padding-top: 10rem;">
    <div class="col-md-4">
        @if (session()->has('success_message'))
            <div class="alert alert-success" id="alert">
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
                                <img class="img-fluid mt-1" src="{{asset('storage/' .$item->model->image)}}"></a>
                        </div>
                        <div class="col-md-2">
                            <h4 class="product-name text-center"><strong>{{$item->model->name}}</strong></h4>
                            <h4 class="text-center">
                                <small>{{$item->model->short_description}}</small>
                            </h4>
                        </div>
                        <div class="col-md-2 pl-5 mb-5">
                                <h6 class="text-center">Price:<strong> €{{$item->model->price}}</strong><span class="text-muted"></span>
                                </h6>
                        </div>
                        <div class="col-md-2 mb-4 text-center">
                            <h6 class="">Quantity</h6>
                            <hr>
                                    <select class="quantity" data-id="{{$item->rowId}}">
                                        @for($i = 1; $i < 5 + 1; $i++)
                                            <option {{$item->qty == $i ? 'selected' : ''}}>{{$i}}</option>
                                        @endfor
                                    </select>
                        </div>
                        <div class="col-md-2 mb-5 pl-5">
                            <h6 class="text-center">Total Price: <strong>€{{($item->model->price)*$item->qty}}</strong></h6>
                        </div>
                            <div class="col-md-2 mb-5 pl-5 text-center">
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


<div class="row justify-content-end align-items-center" style="padding-top: 8rem;">
    <div class="col-md-4 text-center">
        Cart Total price: <b>€{{Cart::subtotal()}}</b>
    </div>
</div>

<div class="row justify-content-end">
    <div class="col-md-5 text-center">
        <a href="{{route('index')}}" class="btn btn-turquoise ml-0" id="shopping-cart-checkout">Continue shopping</a>
        <a href="{{route('shop.checkout.index')}}" class="btn btn-turquoise ml-0" id="shopping-cart-checkout">Proceed To Checkout</a>
    </div>
</div>

<div class="col-md-12 pt-5">
@include('partials.might-like')
</div>

@else

<div class="col-md-12">
    <h3 style="text-align: center">YOUR SHOPPING CART IS EMPTY</h3>
</div>


<div class="col-md-1" style="margin-top: 20vh; margin-bottom: 42vh;">
    <a href="{{route('shop.index')}}" class="btn btn-turquoise" style="width: 10rem;">TO THE ONLINE STORE</a>
</div>

@endif  <!-- End of Check if Cart is Empty -->

@include('partials.second-footer')
@include('scripts.scripts')
@section('truffle-scripts')
@stop

</body>

</html>
