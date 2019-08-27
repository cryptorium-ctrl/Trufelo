<section class="featured-recipes">
  <div class="row justify-content-center">
      <span class="featured-recipes__overline"></span>
        <h3 class="featured-recipes__header"> Are you hungry? Take a look at our suggestions <a href="{{route('recipes.allrecipes')}}" class="hvr-shutter-out-vertical ml-5">RECIPES</a></h3>
      <span class="featured-recipes__underline"></span>
  </div>
    <div class="row justify-content-center align-content-center no-gutters">
        <div>
            <h2 class="heading">Latest Recipes</h2>
        <div class="heading-underline"></div>
        </div>
    </div>
    <div class="row-recipes">
        <div class="column-recipes">
            @foreach($recipes as $recipe)
                @if($recipe->name ==  'Seared Scallops')
                <a href="{{route($recipe->webPath)}}" class="featured-recipes">
                    <img src="{{asset('storage/' .$recipe->thumbImagePath)}}" alt="">
                    <h4 class="featured-text-recipes">{{$recipe->name}}</h4>
                </a>
                @endif

                @if($recipe->name ==  'Truffle Gravy')
                        <a href="{{route($recipe->webPath)}}" class="recipes">
                            <img src="{{asset('storage/' .$recipe->thumbImagePath)}}" alt="">
                            <h4 class="featured-text-recipes">{{$recipe->name}}</h4>
                        </a>
                @endif
            @endforeach
        </div>

        <div class="column-recipes align-content-center">
            @foreach($recipes as $recipe)
                @if($recipe->name ==  'Kale With Truffle')
                    <a href="{{route($recipe->webPath)}}" class="recipes">
                        <img src="{{asset('storage/' .$recipe->thumbImagePath)}}" alt="" style="height: 98.5%">
                        <h4 class="featured-text-recipes">{{$recipe->name}}</h4>
                    </a>
                @endif
            @endforeach
        </div>

        <div class="column-recipes">
            @foreach($recipes as $recipe)
                @if($recipe->name ==  'Minced Turkey')
                    <a href="{{route($recipe->webPath)}}" class="recipes">
                        <img src="{{asset('storage/' .$recipe->thumbImagePath)}}" alt="" style="height: 98.5%">
                        <h4 class="featured-text-recipes">{{$recipe->name}}</h4>
                    </a>
                @endif
            @endforeach
        </div>

        <div class="column-recipes">
            @foreach($recipes as $recipe)
                @if($recipe->name ==  'Truffle Eggs')
                    <a href="{{route($recipe->webPath)}}" class="recipes">
                        <img src="{{asset('storage/' .$recipe->thumbImagePath)}}" alt="">
                        <h4 class="featured-text-recipes">{{$recipe->name}}</h4>
                    </a>
                @endif
                @if($recipe->name ==  'Truffle Sausages')
                    <a href="{{route($recipe->webPath)}}" class="recipes">
                        <img src="{{asset('storage/' .$recipe->thumbImagePath)}}" alt="">
                        <h4 class="featured-text-recipes">{{$recipe->name}}</h4>
                    </a>
                @endif
            @endforeach
        </div>
    </div>
</section>
