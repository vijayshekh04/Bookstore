@include('include.header')
		<!-- //Header -->
		<!-- Start Search Popup -->
		<div class="box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Sell Book</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.html">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Sell Book</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
		<!-- Start My Account Area -->
		<section class="my_account_area pt--80 pb--55 bg--white">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12 offset-md-3">
						<div class="my__account__wrapper">
							@if(Session::has('success'))
							<script type="text/javascript">
								$(document).ready(function() {

									swal("Good job!", "You clicked the button!", "success");	
								});
							</script>
							@endif

							<h3 class="account__title">Sell Book</h3>
							

							<form action="sell_book" method="post" enctype="multipart/form-data">
							@csrf

								

								<div class="account__form">
									<div class="input__box">
										<div class="input__box">
										<label for="std">Std<span>*</span></label>
										<select name="std" class="form-control">
											<option value="">select</option>
											<option>10</option>
										</select>

										@error('std')
    									<div class="alert alert-danger">{{ $message }}</div>
    									
										@enderror

									</div>
										<label for="sub_name">Book Name<span>*</span></label>
										<select name="sub_name" class="form-control">
											<option value="">select</option>
											<option>Gujarati</option>
											<option>Social Science</option>
											<option>Science Technology</option>
											<option>Mathematics</option>
											<option>English</option>
											<option>Sanskrit</option>
											<option>Computer</option>
											
										</select>
										@error('sub_name')
    									<div class="alert alert-danger">{{ $message }}</div>
    									
										@enderror
									</div>
									
									<div class="input__box">
										<label for="book_price">Book Price <span>*</span></label>
										<input type="text" name="book_price">
										@error('book_price')
    									<div class="alert alert-danger">{{ $message }}</div>
    									
										@enderror
									</div>
									
									<div class="input__box">
										<label for="book_photo">Book Image<span>*</span></label>
									<input type="file" name="book_photo">
									@error('book_photo')
									<div class="alert alert-danger">{{$message}}</div>
									@enderror

									</div>
									<input type="hidden" name="user_id" value="{{$userdata->id}}">
																		 
									
									<div class="form__btn">
										<button type="submit">Sell Book</button>
										
									</div>
								</div>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		
		<!-- End My Account Area -->
		<!-- Footer Area -->
		@include('include.footer')