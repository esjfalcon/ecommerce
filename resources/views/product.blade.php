@include('header')
    

<div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">

 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories
                        
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @foreach($categories as $cat)
                    <li><a href="{{ URL('/phones/'.$cat->id) }}">{{$cat->name}}</a></li>
                         </li>
                         <!-- <form method="get" action="">
                             <input type="hidden" name="query">
                         </form> -->
                         @endforeach
                     </ul>

                 </li></ul></div>
    <div class="slider-area">
          <!-- Slider -->
      <div class="block-slider block-slider4">
        <ul class="" id="bxslider-home4">
         
         @foreach($products as $item)

          <li>

            <img src="{{$item['gallery']}}" alt="Slide">
            <div class="caption-group">
              <h2 class="caption title">
                {{$item['name']}} <span class="primary"> <p>only with</p>    <strong>{{$item['price']}} $</strong></span>
              </h2>
              <h4 class="caption subtitle">{{$item['description']}}</h4>
              <a class="caption button-radius" href="/cart"><span class="icon"></span>Shop now</a>
            </div>
          </li>

          @endforeach
         
        </ul>
      </div>
      <!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel">


                          <!-- loop over all product -->
                          @foreach($products as $item)
                            <div class="single-product">
                                
                                    <form method="POST" action="/add_to_cart">
                                            {{ csrf_field()}}

                                             <!-- <a href="" class="add-to-cart-link" name="{{$item['product_id']}}" > Add to cart</a> -->
                                            <input class="form-control mr-sm-2 search-bx" name="query" value="{{ $item['id']}}" type="hidden">
                                            <a href=""><button type="submit" class="add-to-cart-link">Add to cart<i class="fa fa-shopping-cart"></i></button></a>
                                        </form>
                                        <div class="product-f-image">
                                    <img src="{{ $item['gallery'] }}" alt="">
                                    <div class="product-hover">
                                       

                                        

                                        <a href="{{ url('/detail/'.$item->id) }}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html">{{ $item['name'] }}</a></h2>
                                <h2><a href="">{{ $item->category->name }}</a></h2>
                                <div class="product-carousel-price">
                                    <ins>{{ $item->price }}</ins> <del></del>
                                </div> 
                            </div>


                           @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="img/brand1.png" alt="">
                            <img src="img/brand2.png" alt="">
                            <img src="img/brand3.png" alt="">
                            <img src="img/brand4.png" alt="">
                            <img src="img/brand5.png" alt="">
                            <img src="img/brand6.png" alt="">
                            <img src="img/brand1.png" alt="">
                            <img src="img/brand2.png" alt="">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Sellers</h2>
                        <a href="" class="wid-view-more">View All</a>

                        @foreach($products as $item)

                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="{{ $item['gallery'] }}" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">{{ $item['name'] }}</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>{{ $item['price'] }}</ins> <del>$425.00</del>
                            </div>                            
                        </div>


                        @endforeach
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Recently Viewed</h2>
                        <a href="#" class="wid-view-more">View All</a>


                        @foreach($products as $item)

                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="{{ $item['gallery'] }}" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">{{ $item['name'] }}</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>{{ $item['price'] }}</ins> <del>$425.00</del>
                            </div>                            
                        </div>


                        @endforeach
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top New</h2>
                        <a href="#" class="wid-view-more">View All</a>


                        @foreach($last_pro as $item)

                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="{{ $item['gallery'] }}" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">{{ $item['name'] }}</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>{{ $item['price'] }}</ins> <del>$425.00</del>
                            </div>                            
                        </div>


                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
    
    
   @include('footer')