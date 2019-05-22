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
    {{--<link rel="stylesheet" href="css/styles.css">--}}

</head>

<body data-spy="scroll" data-target="#navbarResponsive">
@include('partials.header')

@yield('content')
@foreach($products as $product)
    <div id="shop-online" class="offset">
        <div class="col-12 os-animation" data-animation="fadeInUp">
            <h3 class="heading" style="padding-top: 7rem;">{{$product->name}}</h3>
            <div class="heading-underline"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <img class="img-responsive" src="{{$product->imagePath}}" alt=""  id="summer-truffle">
        </div>

        <div class="col-md-4" id="description-row">

            <p>Select weight:</p>

            <select id="selectMe">
                @foreach($products as $product)
                    <option value="option1">{{$product->weight}}</option>
                @endforeach
            </select>

            <div id="option1" class="group">{{$product->price}}</div>




            @foreach($products as $product)
                <form action="{{route('cart.store')}}" method="POST">
                                {{csrf_field()}}

                    <input type="hidden" name="id" value="{{$product->id}}">
                    <input type="hidden" name="name" value="{{$product->name}}">
                    <input type="hidden" name="price" value="{{$product->price}}">
                    <input type="hidden" name="weight" value="{{$product->weight}}">

                    <button type="submit" class="btn btn-turquoise"> ADD TO CART </button>
                </form>
            @endforeach

            <p id="bold">*To offer the best quality we send extra truffles, in any case we send pieces or truffles.</p>

            <p id="bold"> *All prices are inclusive of VAT. </p>

            <p id="bold"> *It is shipped with a porexpan packaging designed to guarantee maximum quality, aroma and freshness, without
                breaking the cold chain during the entire shipping process. </p>

            <p> The summer truffle is the ideal accompaniment for meat, fish and pasta dishes. It gives a delicate flavour
                and aroma, milder than the Perigord truffle.

                This true delicacy is collected in the summer period, at between 200 and 1000 metres above sea level. Its
                outer form is similar to the Melanosporum truffle, but it has a more pronounced pyramidal skin. Its flesh is
                cream coloured with hazel tones.

                At Laumont Shop we have selected the finest specimens to create our products and take them to your table.
                Now, for a limited period, we have fresh summer truffle, in airtight packaging, thereby maintaining all its
                properties. Only available between May and August, the fresh summer truffle is an opportunity to seduce even
                the most discerning palate.</p>
        </div>
    </div>
    </div>

@endforeach
<div class="row" style="padding-top: 11rem;">
    <div class="col-md-12">
        <h2 class="heading-recipes">RELATED RECIPES</h2>
        <div class="row no-padding2">
            <div class="col-md-4">
                <a href="">
                    <img src="../public/assets/img/recipes/Thanksgiving-Email-Header-1-500x500.jpg" alt="" id="related-recipes">
                </a>
            </div>
            <div class="col-md-4">
                <a href="">
                    <img src="../public/assets/img/recipes/Truffled-Egg-Toast-500x500.jpg" alt="" id="related-recipes">
                </a>
            </div>
            <div class="col-md-4">
                <a href="">
                    <img src="../public/assets/img/recipes/Truffle-Leek-and-Bacon-Potato-Skins-1-500x500.jpg" alt="" id="related-recipes">
                </a>
            </div>
        </div>
        <div class="row no-padding2" style="margin-top: -2rem;">
            <div class="col-md-12">
                <a href="">
                    <img src="../public/assets/img/recipes/Lifestyle-Porcini-1-500x933.jpg" alt="" id="related-recipes2">
                </a>
            </div>
        </div>
    </div>
</div>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="node_modules/jquery-scrollify/jquery.scrollify.js"></script>
<script type="text/javascript" src="{{ URL::asset('../node_modules/jquery-scrollify/jquery.scrollify.js') }}"></script>
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.8.1/js/all.js"></script>
<script src="js/custom.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/waypoints.js"></script>
<script src="js/lightbox.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.counterup.js"></script>
<script src="js/validator.js"></script>
<script src="js/contact.js"></script>
{{--<script>--}}
{{--    $(function () {--}}
{{--        $.scrollify({--}}
{{--            section: ".scrollify",--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
{{--<script>--}}
{{--    lightbox.option({--}}
{{--        'albumLabel': "",--}}
{{--        'positionFromTop': 150,--}}
{{--        'wrapAround': true--}}
{{--    })--}}
{{--</script>--}}
{{--<script>--}}
{{--    $(document).ready(function () {--}}
{{--        $('.group').hide();--}}
{{--        $('#option1').show();--}}
{{--        $('#selectMe').change(function () {--}}
{{--            $('.group').hide();--}}
{{--            $('#'+$(this).val()).show();--}}
{{--        })--}}
{{--    });--}}
{{--</script>--}}

<!--- End of Script Source Files -->
{{--@yield('scripts')--}}
</body>

</html>