<section class="py-3">
    <div class="container">
        <p class="might-like">You Might Also Like</p>
        <div class="row">
            @foreach($products->shuffle()->take(4) as $product)
            <div class="col col-md-3 d-flex mb-2" id="hovereffect-might-like">
                <div class="card">
                    <a href="{{route($product->webPath)}}">
                    <img class="card-img-top img-fluid border-bottom" src="{{asset('storage/' .$product->image)}}" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-center" id="might-like-card">{{$product->name}}</h5>
                        <p class="card-text">
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
