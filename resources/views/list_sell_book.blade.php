@include('include.header')
		<!-- End Search Popup -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">List Sell Book</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="/">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">List Sell Book</span>
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
                                            <th class="product-name">Sr. No.</th>
                                            <th class="product-thumbnail">Image</th>
                                            <th class="product-name">Book Name</th>
                                            <th class="product-name">STD</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-remove">Edit</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                           $i=1;
                                         ?>
                                       @foreach($bookdata as $book)
                                        
                                        <tr>
                                            <td class="product-name"><a href="#">{{$i}}</a></td>
                                            <td class="product-thumbnail"><a href="#"><img src="{{asset('/'.$book->book_image)}}" alt="product img" style="width:70%;"></a></td>
                                            <td class="product-name"><a href="#">{{$book->sub_name}}</a></td>
                                             <td class="product-name"><a href="#">{{$book->std}}</a></td>
                                              
                                             <td class="product-name"><a href="#">{{$book->book_price}}</a></td>
                                            

                                            <td class="product-price"><a type="button" class="btn btn-warning" href="sell_book/{{$book->id}}/edit">Edit</a></td>
                                            
                                           
                                            
                                        </tr>
                                        
                                        <?php
                                            $i++;
                                                
                                        ?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </form> 
                        
                    </div>
                </div>
                
            </div>  
        </div>
       


        
        <!-- cart-main-area end -->
		<!-- Footer Area -->
		@include('include.footer')