<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @yield('style.blade.php')
    @include('styles.style')
    @section('truffle-style')
    @stop


</head>

<body>

@include('partials.header')

<div class="col-md-6" style="margin: 10% auto;">
    <h4 class="text-center">Thank You For Your Order</h4>
</div>
<div class="col-md-6" style="margin-left: 46%;">
    <a href="{{route('index')}}" class="btn btn-turquoise">Back To Home</a>
</div>


<div style="margin-top: 41vh; width: 100%;">
@include('partials.second-footer')
</div>
@include('scripts.scripts')
@section('truffle-scripts')
@stop

</body>

</html>
