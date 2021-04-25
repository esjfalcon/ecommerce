

@include('header')



<div class="container">
  <div class="row">
  




<table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    @if(session('cart'))

                                        @foreach(session('cart') as $id => $details)

                                
                                    <tbody>
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a title="Remove this item" class="remove" href="#">{{$details['name']}}</a> 
                                            </td>

                                            <td class="product-thumbnail">
                                                <a href="single-product.html"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="{{$details['image']}}"></a>
                                            </td>

                                            <td class="product-name">
                                                <a href="single-product.html">Ship Your Idea</a> 
                                            </td>

                                            <td class="product-price">
                                                <span class="amount">{{ $details['price'] }}</span> 
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">
                                                    
                                                    <h4>{{ $details['quantity'] }}</h4>
                                                    <form method="POST" action="/add_to_cart">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="query" value="{{ $details['p_id'] }}">
                                                        <button type="submit" class="btn btn-success">+</button>
                                                    </form>
                                                </div>
                                            </td>

                                            <td class="product-subtotal">
                                                <?php $total = $details['quantity']*$details['price']; ?>
                                                <span class="amount"><?php echo $total; ?></span> 
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                        <tr>
                                            <td class="actions" colspan="6">
                                                
                                                
                                                <input type="submit" value="Checkout" name="proceed" class="checkout-button button alt wc-forward">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                           
