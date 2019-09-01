<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    @include('styles.style')
    @section('fresh-truffle-style')
    @stop
</head>

@include('partials.header')

<body data-spy="scroll" data-target="#navbarResponsive">
@foreach($products as $product)

    @if($product->name == "Preserved Truffle Package")
        <div class="row justify-content-center align-items-center"> <!-- Heading -->
            {{--    <div class="scrollify">--}}
            <div id="shop-online" class="offset">
                <div class="animated fadeInUp slow">
                    <h3 class="heading">{{$product->name}}</h3>
                    <div class="heading-underline"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center"> <!-- Product Description -->
            <div class="col-md-4">
                <img class="img-fluid" src="{{asset('storage/' .$product->image)}}" alt="">

            </div>
            <div class="col-md-4" style="z-index: 9999; top: 2rem;" id="description-row">
                <h4>PACKAGE OF 200G FOR €{{$product->price}}</h4>
                {{--                <h4>SELECT SIZE</h4>--}}
                {{--                <select class="mySelect" id="mySelect" onchange="myFunction()" data-id="{{$product->rowId}}">--}}
                {{--                    <option value=""></option>--}}
                {{--                    <option value="50">100ml</option>--}}
                {{--                    <option value="100">250ml</option>--}}
                {{--                    <option value="300">500ml</option>--}}
                {{--                    <option value="500">1000ml</option>--}}
                {{--                </select>--}}
                {{--                <h4><p id="demo"></p></h4>--}}

                <form action="{{route('cart.store')}}" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$product->id}}">
                    <input type="hidden" name="name" value="{{$product->name}}">
                    <input type="hidden" name="price" value="{{$product->price}}">
                    <input type="hidden" name="weight" value="{{$product->weight}}">
                    <button type="submit" class="btn btn-turquoise" id="shopping-cart-add"> ADD TO CART</button>
                </form>

                <p>{!!$product->description!!}</p>


                <div class="col-1 hidden-xs col-centered container-chevron">
                    <div class="chevron"></div>
                    <div class="chevron"></div>
                    <div class="chevron"></div>
                </div>

            </div>
        </div>



    @endif
@endforeach

@include('partials.related-recipes')

@include('partials.might-like')
@include('partials.second-footer')
@include('scripts.scripts')
@section('truffle-scripts')
@stop

</body>

</html>
