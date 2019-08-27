<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="../../bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/icofont.min.css">
    <link rel="stylesheet" href="../css/styles.css">

</head>

@include('partials.header')

<body>

@foreach($recipes as $recipe)
<div class="container">
{{--        {{dd($recipe->image)}}--}}
    <div class="row">
        <div class="col-md-12" style="margin-top:7.6rem;">

            <img class="thumbnail img-fluid" src="{{asset('storage/' .$recipe->image)}}" alt="image" style="max-height:45rem;">
            <h3 style="text-transform: uppercase; text-align: center; text-shadow: .5px .5px #000;">{{$recipe->name}}</h3>
            <h5 class="heading-underline"></h5>
            <p>{!!$recipe->description!!}</p>

            <div id="printableArea">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-start">
                        <i class="far fa-clock fa-lg" style="color:#f2a949;"></i>
                        <p style="margin-left:.1rem;">Preparation: {{$recipe->preparationTime}} minutes</p>
                        <i class="far fa-clock fa-lg" style="margin-left:.5rem; color:#f2a949";></i>
                        <p style="margin-left:.1rem;">Cooking: {{$recipe->cookingTime}} minutes</p>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <button class="btn btn-outline-none" onclick="printDiv('printableArea')"
                                style="margin-top: -.5rem;">
                            <i class="fas fa-print fa-lg"></i>
                            PRINT RECIPE
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-md-6 w-auto">
                            <h4>INGREDIENTS:</h4>
                            {!!$recipe->ingredients!!}
                        </div>
                        <div class="col-md-6">
                            <h4>METHOD:</h4>
                            <p>{!!$recipe->method!!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>



@include('partials.second-footer')

<script src="{{asset('../js/jquery-3.3.1.min.js') }}"></script>
<script src="../../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.8.1/js/all.js"></script>
<script src="../../js/main.min.js"></script>
<script src="../../js/script.js"></script>
{{--<script src="simpleParallax.js"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@4.2.1/dist/simpleParallax.min.js"></script>
<script>
    let image = document.getElementsByClassName('thumbnail');
    new simpleParallax(image, {
        scale: 1.5
    });
</script>
<script>function printDiv(divName) { //Print Button Function
        let printContents = document.getElementById(divName).innerHTML;
        let originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }</script>

</body>

</html>
