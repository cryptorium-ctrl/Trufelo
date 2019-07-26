<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
        @yield('styles')

    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/icofont.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="css/arrow.css">
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="css/waypoints.css">

</head>

@include('partials.second-header')

<body>



<div class="row-recipes"> <!--- First Column --->
    <div class="column-recipes" >
        @foreach($recipes->slice(0, 3) as $recipe)
         <a href="{{$recipe->webPath}}">
                <img src="{{asset('storage/' .$recipe->thumbImagePath)}}">
            </a>
        <h2 class="text-recipes">Minced Turkey With Black Truffle</h2>
        @endforeach
    </div>

    <div class="column-recipes">  <!--- Second Column --->
        @foreach($recipes->slice(3, 5) as $recipe)
            <a href="{{$recipe->webPath}}">
                <img src="{{asset('storage/' .$recipe->thumbImagePath)}}">
            </a>
        @endforeach
    </div>

    <div class="column-recipes">  <!--- Third Column --->
        @foreach($recipes->slice(8, 2) as $recipe)
            <a href="{{$recipe->webPath}}">
                <img src="{{asset('storage/' .$recipe->thumbImagePath)}}">
            </a>
        @endforeach
    </div>
    <div class="column-recipes">  <!--- Fourth Column --->
        @foreach($recipes->slice(10, 3) as $recipe)
            <a href="{{$recipe->webPath}}">
                <img src="{{asset('storage/' .$recipe->thumbImagePath)}}">
            </a>
        @endforeach
    </div>
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

</body>

</html>