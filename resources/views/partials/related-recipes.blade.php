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
                    <img class="img-fluid" src="{{asset('assets/img/recipes/minced-turkey-500x500.jpg')}}"
                         alt="Responsive image">
                </a>
            </div>
            <div class="col-md-3 no-padding">
                <a href="{{route('recipes.egg-toeast-with-truffles')}}">
                    <img class="img-fluid" src="{{asset('assets/img/recipes/truffle-egg-toast-500x500.jpg')}}"
                         alt="Responsive image">
                </a>
            </div>
            <div class="col-md-3 no-padding">
                <a href="{{route('recipes.truffle-potatoes')}}">
                    <img class="img-fluid"
                         src="{{asset('assets/img/recipes/truffle-potatoes-500x500.jpg')}}"
                         alt="Responsive image">
                </a>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-5 no-padding">
                <a href="{{route('recipes.ribeye-with-truffle')}}">
                    <img class="img-fluid"
                         src="{{asset('assets/img/recipes/french-fries-500x1000.jpg')}}"
                         alt="" style="width:100%; padding-left: 10%; height: 23rem;">
                </a>
            </div>
            <div class="col-md-5 no-padding">
                <a href="{{route('recipes.ribeye-with-truffle')}}">
                    <img class="img-fluid"
                         src="{{asset('assets/img/recipes/truffle-eggs-1000x500.jpg')}}"
                         alt="" style="width:100%; padding-right: 10%; height: 23rem;">
                </a>
            </div>
        </div>
    </div>
</div>
