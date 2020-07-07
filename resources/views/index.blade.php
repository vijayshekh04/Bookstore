		
		@include('include.header')
        <!-- Start Slider area -->
        <div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
        	<!-- Start Single Slide -->
	        <div class="slide animation__style10 bg-image--8 fullscreen align__center--left">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-lg-12">
	            			<div class="slider__content">
		            			<div class="contentbox">
		            				<h2>Buy <span>your </span></h2>
		            				<h2>favourite <span>Book </span></h2>
		            				<h2>from <span>Here </span></h2>
				                   	<a class="shopbtn" href="#">shop now</a>
		            			</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
            </div>
            @if(Session::has('success'))
							<script type="text/javascript">
								$(document).ready(function() {

									swal("Good job!", "You clicked the button!", "success");	
								});
							</script>
			@endif
            <!-- End Single Slide -->
        	<!-- Start Single Slide -->
	        <div class="slide animation__style10 bg-image--1 fullscreen align__center--left">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-lg-12">
	            			<div class="slider__content">
		            			<div class="contentbox">
		            				<h2>Buy <span>your </span></h2>
		            				<h2>favourite <span>Book </span></h2>
		            				<h2>from <span>Here </span></h2>
				                   	<a class="shopbtn" href="#">shop now</a>
		            			</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
            </div>
            <!-- End Single Slide -->
        </div>
        <!-- End Slider area -->
		<!-- Start BEst Seller Area -->
		<section class="wn__product__area brown--color pt--80  pb--30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">New <span class="color--theme">Products</span></h2>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
						</div>
					</div>
				</div>
				<br>
				<div class="row" style="text-align: center">
							<!-- Start Single Product -->
							@foreach($bookdata as $book)
						

									<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="product__thumb" >
											<a class="first__img" href="single-product.html"><img src="{{asset('/'.$book->book_image)}}" alt="product image" style="width:250px;height:250px;"></a>
											<a class="second__img animation1" href="single-product.html"><img src="{{asset('/'.$book->book_image)}}" alt="product image" style="width:250px;height:250px;"></a>
											
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product.html">{{$book->sub_name}}</a></h4>
											<h4><a href="single-product.html">Sell by {{$book->user->name}}</a></h4>
											<h4><a href="single-product.html">School {{$book->user->school}}</a></h4>
											<ul class="prize d-flex">
												<li>Rs.{{$book->book_price}}.00</li>
												<!-- <li class="old_prize">$35.00</li> -->
											</ul>
											<div class="action">
											<div class="actions_inner">
											<ul class="add_to_links">
												<li><a class="cart" href="cart/{{$book->id}}"><i class="bi bi-shopping-bag4"></i></a></li>
													
											</ul>
											</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
									

								
							@endforeach

						
							<!-- End Single Product -->
						</div>
			</div>
		</section>
		
		<!-- Footer Area -->
		@include('include.footer')