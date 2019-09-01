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

@include('partials.header')

<body>

<div class="row-recipes">
    <div class="column-recipes" > <!--- First Column --->
        @foreach($recipes->slice(0, 3) as $recipe)
         <a href="{{route($recipe->webPath)}}" class="recipes">
                <img src="{{asset('storage/' .$recipe->thumbImagePath)}}">
             <h4 class="text-recipes">{{$recipe->name}}</h4>
          </a>
        @endforeach
    </div>

    <div class="column-recipes">  <!--- Second Column --->
        @foreach($recipes->slice(3, 5) as $recipe)
            <a href="{{route($recipe->webPath)}}" class="recipes">
                <img src="{{asset('storage/' .$recipe->thumbImagePath)}}">
                <h4 class="text-recipes">{{$recipe->name}}</h4>
            </a>
        @endforeach
    </div>

    <div class="column-recipes">  <!--- Third Column --->
        @foreach($recipes->slice(8, 2) as $recipe)
            <a href="{{route($recipe->webPath)}}" class="recipes">
                <img src="{{asset('storage/' .$recipe->thumbImagePath)}}">
                <h4 class="text-recipes">{{$recipe->name}}</h4>
            </a>
        @endforeach
    </div>
    <div class="column-recipes">  <!--- Fourth Column --->
        @foreach($recipes->slice(10, 3) as $recipe)
            <a href="{{route($recipe->webPath)}}" class="recipes">
                <img src="{{asset('storage/' .$recipe->thumbImagePath)}}">
                <h4 class="text-recipes">{{$recipe->name}}</h4>
            </a>
        @endforeach
    </div>
</div>


@include('partials.second-footer')
@yield('scripts')

@include('scripts.scripts')
@section('truffle-scripts')
@stop

</body>

</html>
