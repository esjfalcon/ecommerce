@include('header')


   
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Your search</h2>
                        <div class="product-carousel">

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
                                
                                <h2><a href="single-product.html">Name : {{ $item['name'] }}</a></h2>
                                <h2><a href="">Category : {{ $item->category->name }}</a></h2>
                                <div class="product-carousel-price">
                                    <ins>Price : {{ $item->price }}</ins> <del>{{ $item->price +137}}</del>
                                </div> 
                            </div>
@endforeach

</div></div></div></div></div></div>





@include('footer')