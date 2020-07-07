@include('include.subheader')
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
                        	<h2 class="bradcaump-title">My Account</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.html">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">My Account</span>
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
					{{-- <div class="col-lg-6 col-12 offset-md-3">
						<div class="my__account__wrapper">
							<h3 class="account__title">Register</h3>
							<form action="#">
								<div class="account__form">
									<div class="input__box">
										<label>Name<span>*</span></label>
										<input type="text">
									</div>
									<div class="input__box">
										<label>address <span>*</span></label>
										<input type="text">
									</div>
									<div class="input__box">
										<label>mobile <span>*</span></label>
										<input type="text">
									</div>
									<div class="input__box">
										<label>email <span>*</span></label>
										<input type="email">
									</div>
									<div class="input__box">
										<label>Password<span>*</span></label>
										<input type="password">
									</div>
									<div class="input__box">
										<label>school<span>*</span></label>
										<input type="text">
									</div>
									<div class="form__btn">
										<button><a href="">Register</a></button>
										<button class="pull-right"><a href="login">login</a></button>	
									</div>
								</div>
							</form>
						</div>
					</div> --}}
					
				</div>
			</div>
		</section>
		<!-- End My Account Area -->
		<!-- Footer Area -->
		@include('include.footer')