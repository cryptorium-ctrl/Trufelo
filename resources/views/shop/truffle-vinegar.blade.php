<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    {{--    @yield('style.blade.php')--}}


    @include('styles.style')
    @section('truffle-style')
    @stop

</head>

<body data-spy="scroll" data-target="#navbarResponsive">

@include('partials.header')

@yield('content')
@foreach($products as $product)
    @if($product->name == 'Truffle Vinegar')

        <div class="row justify-content-center align-items-center"> <!-- Heading -->
            {{--    <div class="scrollify">--}}
            <div id="shop-online" class="offset">
                <div class="animated fadeInUp slow">
                    <h3 class="heading" style="padding-top: 7rem;">{{$product->name}}</h3>
                    <div class="heading-underline"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center"> <!-- Product Description -->
            <div class="col-md-4">
                <img class="img-fluid" src="{{asset('storage/' .$product->image)}}" alt=""  id="summer-truffle">
            </div>

            <div class="product-section-images">

            </div>

            <div class="col-md-4" id="description-row">
                <h4>BOTTLE OF 500<span style="font-size: .8rem; font-weight: 700">ML</span> FOR €40</h4>
                <form action="{{route('cart.store')}}" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$product->id}}">
                    <input type="hidden" name="name" value="{{$product->name}}">
                    <input type="hidden" name="price" value="{{$product->price}}">
                    <input type="hidden" name="weight" value="{{$product->weight}}">
                    <button type="submit" class="btn btn-turquoise" id="shopping-cart-add"> ADD TO CART </button>
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
<script src="../js/jquery.waypoints.min.js"></script>
<script src="../js/waypoints.js"></script>
</body>

</html>
