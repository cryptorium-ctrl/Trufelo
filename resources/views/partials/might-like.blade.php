<section class="py-3">
    <div class="container">
        <p style="font-size: 1.5rem; text-transform: uppercase;"><strong>You Might Also Like</strong></p>
        <div class="row">
            @foreach($products->shuffle()->take(4) as $product)
            <div class="col col-md-3 d-flex mb-2" id="hovereffect-might-like">
                <div class="card">
                    <a href="{{route($product->webPath)}}">
                    <img class="card-img-top img-fluid border-bottom" src="{{asset('storage/' .$product->image)}}" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
