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

<body>

@include('partials.header')

<div class="row justify-content-center" style="margin-top: 8rem;">
        <div class="col-md-6">
             <h1 class="text-center">FRESH TRUFFLES</h1>
                <p style="text-align: center;"> Savour this culinary treasure at its best moment and enjoy the flavour of the most delicious recently harvested truffles.
                It has never been this easy to be able to enjoy the Magnatum truffle, the Melanosporum truffle, the Aestivum truffle and the Australian black truffle (Tuber Melanosporum).
                All our products have quality certificates and their harvest is respectful of the environment.</p>
        </div>
</div>
<div class="row">
    @foreach($products as $product)
        @if($product->category == "fresh-truffles")
            <div class="col-md-4" style="height: 38rem;">
                <a href="{{route($product->webPath)}}">
                    <img class="img-fluid mx-auto d-block h-75" src="{{asset('storage/' .$product->image)}}" alt="">
                </a>
                <h4 style="text-transform: uppercase; font-weight: 700; text-align: center;">{{$product->name}}</h4>
            </div>
        @endif
    @endforeach
</div>



@include('partials.second-footer')
@include('scripts.scripts')
@section('allfresh/truffled-products')
@stop
</body>

</html>
