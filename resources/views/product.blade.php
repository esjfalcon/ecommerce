@include('header')
    




    <div class="slider-area">
          <!-- Slider -->
      <div class="block-slider block-slider4">
        <ul class="" id="bxslider-home4">
          <li>
            <img src="https://images.frandroid.com/wp-content/uploads/2020/10/iphone-12-pro-max-frandroid-2020.png" alt="Slide">
            <div class="caption-group">
              <h2 class="caption title">
                iPhone <span class="primary">6 <strong>Plus</strong></span>
              </h2>
              <h4 class="caption subtitle">Dual SIM</h4>
              <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
            </div>
          </li>
          <li><img src="https://images.frandroid.com/wp-content/uploads/2020/10/iphone-12-pro-max-frandroid-2020.png" alt="Slide">
            <div class="caption-group">
              <h2 class="caption title">
                by one, get one <span class="primary">50% <strong>off</strong></span>
              </h2>
              <h4 class="caption subtitle">school supplies & backpacks.*</h4>
              <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
            </div>
          </li>
          <li><img src="https://images.frandroid.com/wp-content/uploads/2020/10/iphone-12-pro-max-frandroid-2020.png" alt="Slide">
            <div class="caption-group">
              <h2 class="caption title">
                Apple <span class="primary">Store <strong>Ipod</strong></span>
              </h2>
              <h4 class="caption subtitle">Select Item</h4>
              <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
            </div>
          </li>
          <li><img src="https://images.frandroid.com/wp-content/uploads/2020/10/iphone-12-pro-max-frandroid-2020.png" alt="Slide">
            <div class="caption-group">
              <h2 class="caption title">
                Apple <span class="primary">Store <strong>Ipod</strong></span>
              </h2>
              <h4 class="caption subtitle">& Phone</h4>
              <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
            </div>
          </li>
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
            </div>
        </div>
    </div> <!-- End product widget area -->
    
    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>u<span>Stora</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Order history</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Vendor contact</a></li>
                            <li><a href="#">Front page</a></li>
                        </ul>                        
                    </div>
                </div>


                
                        

                    


                
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2015 uCommerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src={{ asset('js/owl.carousel.min.js') }}></script>
    <script src={{ asset('js/jquery.sticky.js') }}></script>
    
    <!-- jQuery easing -->
    <script src={{ asset('js/jquery.easing.1.3.min.js') }}></script>
    
    <!-- Main Script -->
    <script src={{ asset('js/main.js') }}></script>
    
    <!-- Slider -->
    <script type="text/javascript" src={{ asset('js/bxslider.min.js') }}></script>
  <script type="text/javascript" src={{ asset('js/script.slider.js') }}></script>
  </body>
</html>