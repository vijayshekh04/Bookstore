@include('include.header')
		<!-- End Search Popup -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Shopping Cart</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.html">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Shopping Cart</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if(Session::has('danger'))
        <script type="text/javascript">
        $(document).ready(function() {

            swal("Good job!", "Deleted successfully!", "success");    
        });
        </script>
         @endif
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="cart-main-area section-padding--lg bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ol-lg-12">
                        <form action="#">               
                            <div class="table-content wnro__table table-responsive">
                                <table>
                                    <thead>
                                        <tr class="title-top">
                                            <th class="product-thumbnail">Image</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-price">Quantity</th>
                                            <th class="product-remove">Buy</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $CartItem=0; 
                                            $total=0;
                                         ?>
                                       @foreach($cartdata as $cart)
                                        
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="{{asset('/'.$cart->book_image)}}" alt="product img" style="width:70%;"></a></td>
                                            <td class="product-name"><a href="#">{{$cart->sub_name}}</a></td>
                                            <td class="product-price"><span class="amount">{{$cart->book_price}}</span></td>
                                            <td class="product-price"><input type="amount" value="1" readonly></td>

                                            <td class="product-price"><a type="button" class="btn btn-warning buy" href="setOrder/{{$cart->id}}">Buy</a></td>
                                            
                                            
                                        
                                        <?php $CartItem++;
                                                $total=$total+$cart->book_price;
                                        ?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </form> 
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="cartbox__total__area">
                            <div class="cartbox-total d-flex justify-content-between">
                                <ul class="cart__total__list">
                                    <li>Cart total Items</li>
                                    
                                </ul>
                                <ul class="cart__total__tk">
                                    <li><?php echo $CartItem; ?></li>
                                    
                                </ul>
                            </div>
                            <div class="cart__total__amount">
                                <span>Grand Total</span>
                                <span><?php echo $total; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
       


        
        <!-- cart-main-area end -->
		<!-- Footer Area -->
		@include('include.footer')