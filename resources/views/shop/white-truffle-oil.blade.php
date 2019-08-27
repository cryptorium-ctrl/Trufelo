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

@include('partials.header')

<body data-spy="scroll" data-target="#navbarResponsive">

@yield('content')
@foreach($products as $product)
    @if($product->name == 'White Truffle Oil')

        <div class="row justify-content-center align-items-center"> <!-- Heading -->
            {{--    <div class="scrollify">--}}
            <div id="shop-online" class="offset">
                <div class="animated fadeInUp slow">
                    <h3 class="heading" style="padding-top: 8rem;">{{$product->name}}</h3>
                    <div class="heading-underline"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center"> <!-- Product Description -->
            <div class="col-md-4">
                <img class="img-fluid" src="{{asset('storage/' .$product->image)}}" alt="">
            </div>
            <div class="col-md-4" style="z-index: 9999; top: 2rem;">
                <h4>BOTTLE OF 500<span style="font-size: .8rem; font-weight: 700">ML</span> FOR €100</h4>
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
                    <button type="submit" class="btn btn-turquoise" id="shopping-cart-add"> ADD TO CART </button>
                </form>

                <p style="text-align: justify-all">{!!$product->description!!}</p>
                <div class="col-1 hidden-xs col-centered container-chevron">
                    <div class="chevron"></div>
                    <div class="chevron"></div>
                    <div class="chevron"></div>
                </div>
            </div>
        </div>


    @endif
@endforeach

<div class="row justify-content-center align-items-center" style="margin-top: 17rem;">
    {{--    <div class="scrollify"></div>--}}
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>RELATED RECIPES</h2>
        </div>
        <div class="heading-underline"></div>
    </div>
    <div class="container-fluid" style="margin-top: 1.5rem;">

        <div class="row justify-content-center align-items-center" id="related-recipes">
            <div class="col-md-3 no-padding">
                <a href="{{route('recipes.minced-turkey')}}">
                    <img class="img-fluid" src="{{asset('assets/img/recipes/Thanksgiving-Email-Header-1-500x500.jpg')}}"
                         alt="Responsive image">
                </a>
            </div>
            <div class="col-md-3 no-padding">
                <a href="{{route('recipes.egg-toeast-with-truffles')}}">
                    <img class="img-fluid" src="{{asset('assets/img/recipes/Truffled-Egg-Toast-500x500.jpg')}}"
                         alt="Responsive image">
                </a>
            </div>
            <div class="col-md-3 no-padding">
                <a href="{{route('recipes.truffle-potatoes')}}">
                    <img class="img-fluid"
                         src="{{asset('assets/img/recipes/Truffle-Leek-and-Bacon-Potato-Skins-1-500x500.jpg')}}"
                         alt="Responsive image">
                </a>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-5 no-padding">
                <a href="{{route('recipes.ribeye-with-truffle')}}">
                    <img class="img-fluid"
                         src="{{asset('assets/img/recipes/EW20180829_Truffle_Hunter_Autumn_Shoot-3-500x1000.jpg')}}"
                         alt="" style="width:100%; padding-left: 10%; height: 23rem;">
                </a>
            </div>
            <div class="col-md-5 no-padding">
                <a href="{{route('recipes.ribeye-with-truffle')}}">
                    <img class="img-fluid"
                         src="{{asset('assets/img/recipes/EW20181015_TruffleHunter_Thanksgiving-15-1000x500.jpg')}}"
                         alt="" style="width:100%; padding-right: 10%; height: 23rem;">
                </a>
            </div>
        </div>
    </div>
</div>


@include('partials.might-like')
@include('partials.second-footer')
@include('scripts.scripts')
@section('truffle-scripts')
@stop
<script src="../js/jquery.waypoints.min.js"></script>
<script src="../js/waypoints.js"></script>
</body>

</html>
