@include('header')


@foreach($categories as $cat)


<div class="container">

					<div class="single-wid-product">
                            <a href="single-product.html"><img src="{{ $cat->gallery }}" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">{{ $cat->name }}</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>{{ $cat->price }}</ins> <del>$425.00</del>
                            </div>
                            <form method="POST" action="/add_to_cart">
                                            {{ csrf_field()}}

                                            
                                            <input class="form-control mr-sm-2 search-bx" name="query" value="{{ $cat->id}}" type="hidden">
                                            <a href=""><button type="submit" class="add-to-cart-link">Add to cart<i class="fa fa-shopping-cart"></i></button></a>
                                        </form>                        
                        </div>


</div>
@endforeach
