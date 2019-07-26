<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    {{--    @yield('styles')--}}

    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/icofont.min.css">
{{--    <link rel="stylesheet" href="css/style.css">--}}
    <link rel="stylesheet" href="css/animate.css">
    {{--    <link rel="stylesheet" href="css/lightbox.css">--}}
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="css/arrow.css">
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="css/waypoints.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

@include('partials.second-header')

<body>


    <div class="row justify-content-center" style="margin-top: 7rem;">
        <div class="col-md-6">
            <h1 class="text-center">TRUFFLED PRODUCTS</h1>
            <p> Savour this culinary treasure at its best moment and enjoy the flavour of the most delicious recently harvested truffles.
                It has never been this easy to be able to enjoy the Magnatum truffle, the Melanosporum truffle, the Aestivum truffle and the Australian black truffle (Tuber Melanosporum).
                All our products have quality certificates and their harvest is respectful of the environment.</p>
        </div>
    </div>
    <div class="row" style="width: 100%;">
        @foreach($products as $product)
            @if($product->category == "truffled-products")
                <div class="col-md-4 hovereffect">
                    <a href="{{route($product->webPath)}}">
                        <img class="img-fluid" src="{{$product->imagePath}}" alt="">
                    </a>
                    <h4 style="text-transform: uppercase; font-weight: 700;">{{$product->name}}</h4>
                </div>
            @endif
        @endforeach
    </div>



@include('partials.second-footer')


<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.8.1/js/all.js"></script>
<script src="js/custom.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/waypoints.js"></script>
<script src="js/jquery.counterup.js"></script>
<script src="js/main.min.js"></script>
<script src="js/script.js"></script>
