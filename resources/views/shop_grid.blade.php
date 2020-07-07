
@include('include.header')

<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-image--6">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bradcaump__inner text-center">
					<h2 class="bradcaump-title">Shop Grid</h2>
					<nav class="bradcaump-content">
						<a class="breadcrumb_item" href="index.html">Home</a>
						<span class="brd-separetor">/</span>
						<span class="breadcrumb_item active">Shop Grid</span>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Bradcaump area -->
<!-- Start Shop Page -->
<div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
				<div class="shop__sidebar">
					<aside class="wedget__categories poroduct--cat">
						<h3 class="wedget__title">Classes</h3>
						<ul>
							<li><a href="#">STD 10 </a></li>
							<li><a href="#">STD 12 </a></li>

						</ul>
					</aside>



				</div>
			</div>
			<div class="col-lg-9 col-12 order-1 order-lg-2">
				<div class="row">
					<div class="col-lg-12">
						<div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
							<div class="shop__list nav justify-content-center" role="tablist">
								<a class="nav-item nav-link active" data-toggle="tab" href="#nav-grid" role="tab"><i class="fa fa-th"></i></a>
								<a class="nav-item nav-link" data-toggle="tab" href="#nav-list" role="tab"><i class="fa fa-list"></i></a>
							</div>


						</div>
					</div>
				</div>
				<div class="tab__container">
					<div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
						<div class="row">
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
						<ul class="wn__pagination">
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
						</ul>
					</div>
					<div class="shop-grid tab-pane fade" id="nav-list" role="tabpanel">
						<div class="list__view__wrapper">
							<!-- Start Single Product -->
							<div class="list__view">
								<div class="thumb">
									<a class="first__img" href="single-product.html"><img src="images/product/1.jpg" alt="product images"></a>
									<a class="second__img animation1" href="single-product.html"><img src="images/product/2.jpg" alt="product images"></a>
								</div>
								<div class="content">
									<h2><a href="single-product.html">Ali Smith</a></h2>
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
									<ul class="prize__box">
										<li>$111.00</li>
										<li class="old__prize">$220.00</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
									<ul class="cart__action d-flex">
										<li class="cart"><a href="cart.html">Add to cart</a></li>
										<li class="wishlist"><a href="cart.html"></a></li>
										<li class="compare"><a href="cart.html"></a></li>
									</ul>

								</div>
							</div>

							<!-- End Single Product -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Shop Page -->
<!-- Footer Area -->
<!-- <script type="text/javascript">
	$(document).ready(function(){
		$("#addCart").click(function(){
			alert();
		});
	});
</script> -->
@include('include.footer')