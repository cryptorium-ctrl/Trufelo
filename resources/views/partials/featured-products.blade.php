<section class="featured-products">
    <div class="section"></div>
    <div class="row justify-content-center">
        <span class="featured-products__overline"></span>
            <h3 class="featured-products__header"> Sign up and receive discount codes, free samples and many promotions! <a href="#" class="hvr-shutter-out-vertical ml-5">SIGNUP</a></h3>
        <span class="featured-products__underline"></span>
    </div>
        <div class="row justify-content-center">
            <div>
                    <h2 class="heading">Featured Products</h2>
                <div class="heading-underline"></div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($products->shuffle()->take(4) as $product)
                <div class="featured-products__carousel col col-md-3 d-flex mb-2">
                    <div class="card">
                        <a href="{{route($product->webPath)}}">
                            <img class="featured-products__img card-img-top img-fluid border-bottom" src="{{asset('storage/' .$product->image)}}" alt="Card image cap" id="featured-img">
                        </a>

                        <div class="card-body">
                            <h3 class="card-title text-center align-items-center" id="might-like-card">{{$product->name}}</h3>

                        </div>
                        <p class="featured-products__card-text">50</p>
                    </div>
                </div>
            @endforeach
        </div>
</section>

