<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    {{--    @yield('styles')--}}

    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/icofont.min.css">
{{--    <link rel="stylesheet" href="../css/style.css">--}}
    <link rel="stylesheet" href="../css/animate.css">
    {{--    <link rel="stylesheet" href="css/lightbox.css">--}}
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/owl.theme.default.css">
    <link rel="stylesheet" href="../css/arrow.css">
    <link rel="stylesheet" href="../css/fixed.css">
    <link rel="stylesheet" href="../css/waypoints.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

@include('partials.second-header')

<body data-spy="scroll" data-target="#navbarResponsive">


@foreach($products as $product)

    @if($product->name == "White Truffle")

        <div class="row justify-content-center align-items-center"> <!-- Heading -->
            {{--    <div class="scrollify">--}}
            <div id="shop-online" class="offset">
                <div class="col-md-4 os-animation" data-animation="fadeInUp">
                    <h3 class="heading" style="padding-top: 7rem;">{{$product->name}}</h3>
                    <div class="heading-underline"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center"> <!-- Product Description -->
            <div class="col-md-4">
                <img class="img-fluid" src="{{asset('storage/' .$product->image)}}" alt=""  id="summer-truffle">
            </div>
            <div class="col-md-4" id="description-row">

                <h4>Price for 100 grams:</h4>
                <h4>{{$product->price}}€</h4>

                <form action="{{route('cart.store')}}" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$product->id}}">
                    <input type="hidden" name="name" value="{{$product->name}}">
                    <input type="hidden" name="price" value="{{$product->price}}">
                    <input type="hidden" name="weight" value="{{$product->weight}}">
                    <button type="submit" class="btn btn-turquoise" id="shopping-cart-add"> ADD TO CART </button>
                </form>

                <p>{!!$product->description!!}</p>
                <div class="container">
                    <div class="chevron"></div>
                    <div class="chevron"></div>
                    <div class="chevron"></div>
                </div>
            </div>
        </div>
        </div>
        </div>

@endif
@endforeach


<div class="row justify-content-center align-items-center" style="padding-top: 11rem;">
    {{--<div class="scrollify">--}}
    <div class="row">
        <div class="col-md-12">
            <h2>RELATED RECIPES</h2>
        </div>
    </div>
    <div class="container-fluid" style="margin-top: -1.5rem;">
        <div class="col-md-12">
            <div class="row justify-content-center align-items-center" id="related-recipes">
                <div class="col-md-3 no-padding">
                    <a href="">
                        <img class="img-fluid" src="{{asset('assets/img/recipes/Thanksgiving-Email-Header-1-500x500.jpg')}}" alt="Responsive image">
                    </a>
                </div>
                <div class="col-md-3 no-padding">
                    <a href="">
                        <img class="img-fluid" src="{{asset('assets/img/recipes/Truffled-Egg-Toast-500x500.jpg')}}" alt="Responsive image">
                    </a>
                </div>
                <div class="col-md-3 no-padding">
                    <a href="">
                        <img class="img-fluid" src="{{asset('assets/img/recipes/Truffle-Leek-and-Bacon-Potato-Skins-1-500x500.jpg')}}" alt="Responsive image">
                    </a>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-xs-8 no-padding" style="margin-left: -6.7rem; margin-top: -1.95rem">
                    <a href="">
                        <img class="img-fluid" src="{{asset('assets/img/recipes/Lifestyle-Porcini-1-500x933 - 2.jpg')}}" alt="" style="width: 59.1rem; height: 26rem;">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


@include('partials.might-like')

@include('partials.second-footer')


<script src="../js/jquery-3.3.1.min.js"></script>
<script src="{{ URL::asset('../node_modules/jquery-scrollify/jquery.scrollify.js') }}"></script>
<script src="../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.8.1/js/all.js"></script>
<script src="../js/custom.js"></script>
<script src="../js/jquery.waypoints.min.js"></script>
<script src="../js/waypoints.js"></script>
<script src="../js/lightbox.js"></script>
<script src="../js/owl.carousel.js"></script>
<script src="../js/jquery.counterup.js"></script>
<script src="../js/validator.js"></script>
<script src="../js/contact.js"></script>
<script src="../js/main.min.js"></script>
<script src="../js/script.js"></script>

<script>
    $(function () {
        $.scrollify({
            section: ".scrollify",
        });
    });
</script>
<script>
    lightbox.option({
        'albumLabel': "",
        'positionFromTop': 150,
        'wrapAround': true
    })
</script>
<script>
    $(document).ready(function () {
        $('.group').hide();
        $('#option1').show();
        $('#selectMe').change(function () {
            $('.group').hide();
            $('#'+$(this).val()).show();
        })
    });
</script>

<!--- End of Script Source Files -->
{{--@yield('scripts')--}}
</body>

</html>