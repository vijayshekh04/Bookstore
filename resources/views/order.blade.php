@include('include.header')
    <!-- End Search Popup -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                          <h2 class="bradcaump-title">Order Form</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.html">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Order Form</span>
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
                                            <th class="product-price">Seller contact</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                       @foreach($orderdata as $order)
                                        
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="{{asset('/'.$order->cart['book_image'])}}" alt="product img" style="width:70%;"></a></td>
                                            <td class="product-name"><a href="#">{{$order->cart['sub_name']}}</a></td>
                                            <td class="product-price"><span class="amount">{{$order->cart['book_price']}}</span></td>
                                            <td class="product-price"><input type="amount" value="1" readonly></td>
                                            <td class="product-price"><span class="amount">{{$selluser['sellername']}} : {{$selluser['mobile']}}</span></td>

                                           
                                        </tr>
                                        
                                        
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </form> 
                        
                    </div>
                </div>
                
            </div>  
        </div>
       
<?php
   



$fields = array(
    "sender_id" => "FSTSMS",
    "message" => $buyuser['name']." want to purchesh ".$selluser['bookname']." book"." "."contact:".$buyuser['mobile'],
    "language" => "english",
    "route" => "p",
   // "numbers" => $selluser['mobile'],
    //"flash" => "1",
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: x6V5NqcLJ87UKR09iFlgPQASZnMe1IOhEatu4pbWwdHXkmfjvCq7zM6fenJ4c2KlvrhjTkaWN1ISyQGY",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  //echo $response;
}

?>
<?php
          

$fields = array(
    "sender_id" => "FSTSMS",
    "message" => "Your Order is successfully Created",
    "language" => "english",
    "route" => "p",
   // "numbers" => $buyuser['mobile'],
    //"flash" => "1",
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: x6V5NqcLJ87UKR09iFlgPQASZnMe1IOhEatu4pbWwdHXkmfjvCq7zM6fenJ4c2KlvrhjTkaWN1ISyQGY",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

?>
        
        <!-- cart-main-area end -->
    <!-- Footer Area -->
    @include('include.footer')