@include('header')

 

<!-- End mainmenu area -->
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="/search">
                            {{ csrf_field() }}
                                
                                <input type="text" name="query" placeholder="Search">
                                <button type="submit"> search</button>
                            </form>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Products</h2>
                        


                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="">{{ $productt->name }}</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$ {{ $productt->price }}</ins> <del>$ {{ $productt->price +148}}</del>
                            </div>                             
                        </div>

                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="">{{ $productt->name }}</a></h2>
                            <div class="product-sidebar-price">
                                <ins>{{ $productt->price }} dh</ins>
                            </div>                             
                        </div>
                        
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Recent Posts</h2>
                        <ul>
                            @foreach($last_pro as $product)
                            <li><a href="">{{ $product['name'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="">Home</a>
                            <a href="{{ URL('/phones/'.$categories->id) }}">{{ $categories['name'] }}</a>
                            <a href="">{{ $product->name }}</a>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="{{ $productt->gallery }}" alt="">
                                    </div>
                                    
                                    <div class="product-gallery">
                                        <img src="img/product-thumb-1.jpg" alt="">
                                        <img src="img/product-thumb-2.jpg" alt="">
                                        <img src="img/product-thumb-3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name">{{ $productt->name }}</h2>
                                    <div class="product-inner-price">
                                        <ins>{{ $productt->price }}</ins> <del>$100.00</del>
                                    </div>    
                                    
                                    <form method="POST" action="/add_to_cart">
                                            {{ csrf_field()}}
                                            <input class="form-control mr-sm-2 search-bx" name="query" value="{{ $productt->id }}" type="hidden">
                                            <a href=""><button type="submit" class="add-to-cart-link">Add to cart<i class="fa fa-shopping-cart"></i></button></a>
                                        </form>   
                                    
                                    <div class="product-inner-category">
                                        <p>Category: <a href="{{ URL('/phones/'.$categories->id) }}">{{ $categories['name'] }}</a>. </p>
                                    </div> 
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Product Description</h2>  
                                                <p>{{ $product->description }}.</p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Your rating</p>

                                                        <div class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input type="submit" value="Submit"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Related Products</h2>
                            <div class="related-products-carousel">


                                @foreach($related_products as $product)
                                <div class="single-product">
                                    
                                    <div class="product-f-image">
                                        <img src="{{ $product->gallery }}" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="{{ url('/detail/'.$product->id) }}">{{ $product['name'] }}</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>{{ $product['price'] }}</ins> <del>${{ $product['price'] +137 }}</del>
                                    </div> 
                                </div>
                                @endforeach
                                                                    
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

@include('footer')