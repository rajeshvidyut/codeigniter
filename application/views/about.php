<div class="main-container container">
    <h4 class="main-heading-1 text-xs-center text-sm-center text-md-left">
       Restaurant Information  - <b><?php echo $list['name']; ?></b>
    </h4>
    <div class="row">
        <div class="col-md-9 col-sm-12">
			<div class="menu-tabs-wrap">
				<ul class="nav nav-tabs nav-menu-tabs text-xs-center text-sm-center text-md-left">
					<li class="nav-item"><a href="#menu" class="nav-link active" data-toggle="tab">Menu</a></li>
					<li class="nav-item"><a href="#reviews" class="nav-link" data-toggle="tab">Reviews</a></li>
					<li class="nav-item"><a href="#reachus" class="nav-link" data-toggle="tab">Reach Us</a></li>
				</ul>
				<div class="tab-content">
					<div id="menu" class="tab-pane fade show active">
						<div class="row">
						<!-- Left Column Starts -->
							<div class="col-md-4 col-sm-12">
								<div class="side-block-1">
									<br>
									<h4>Delivery Menu</h4><hr>
									<ul class="list-unstyled list-style-2">
										<li>Switch to order menu :<?php echo $list['switch_to_order_menu']?></li>
										<li>Cuisines :<?php echo $list['cuisines']?></li>
										<li>Average cost for two :<?php echo $list['average_cost_for_two']?></li>
										<li>Price range :<?php echo $list['price_range']?></li>
										<li>Currency :<?php echo $list['currency']?></li>
										<li>Opentable Support :<?php echo $list['opentable_support']?></li>
										<li>Is zomato booking restaurant :<?php echo $list['is_zomato_book_res']?></li>
									</ul>
								</div>
							</div>
							<div class="col-md-8 col-sm-12">
								<div class="order-menu-tab-pane text-xs-center text-sm-center text-md-left">
									<p class="text-center">
									<h5>Dish</h5>
									<p class="text-center"><img src="<?php echo $list['featured_image']?>" alt="Banner" class="img-fluid"></p>
									<div class="spacer"></div>
									<div class="order-menu-item clearfix">
										<div class="float-left">
											<h6>Food Style</h6>
											<p><?php echo $list['cuisines']?></p>
											<i class="fa fa-dot-circle-o veg"></i>
										</div>
										<div class="float-right">
											<?php 
												$divided = ($list['average_cost_for_two']/2);
											 ?>
											<a href="#" class="btn btn-danger">Average Cost
												<span class="price-new"><?php echo $divided; ?>/-</span>
												</span><i class="fa fa-plus-circle"></i></a>
											</a>
										</div>
									</div>
								</div>
								<!-- Pagination Starts -->
								<!-- <div class="pagination-block clearfix">
									<ul class="pagination animation float-lg-right">
										<li class="page-item"><a href="food-details.html#" class="page-link">«</a></li>
										<li class="page-item active"><a href="food-details.html#" class="page-link">1</a></li>
										<li class="page-item"><a href="food-details.html#" class="page-link">2</a></li>
										<li class="page-item"><a href="food-details.html#" class="page-link">3</a></li>
										<li class="page-item"><a href="food-details.html#" class="page-link">»</a></li>
									</ul>
								</div> -->
							</div>
						</div>
					</div>
					<div id="reviews" class="tab-pane fade">
						<div class="row">
							<div class="col-md-8 col-sm-12">
								<div class="reviews-tab-pane">
									<div class="reviews-form-box">
										<h6>Write a Review</h6>
										<form>
											<textarea class="form-control" rows="4" placeholder="Message should be atleast 130 charecters"></textarea>
											<div class="clearfix">
												<br />
												<span id="business_list"></span>
												<br />
												<br />
												<a href="#" class="btn btn-black animation text-uppercase float-right">Submit</a>
											</div>
										</form>
									</div>
									<div class="reviews-box">
										<div class="review-list">
											<div class="clearfix">
												<div class="float-left">
													<h6><i class="fa fa-calendar"></i> Mar 10, 2016</h6>
													<h6>By Sainath Chillapuram</h6>
													<ul class="list-unstyled list-inline rating-star-list">
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
											</div>
											<div class="review-list-content">
												<p>The delivery guy said he will be back in 10 mins with the missing items, but never came back. when I called the restaurant, they took another 30 mins to deliver.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="reachus" class="tab-pane fade">
						<div class="col-md-8 col-sm-12">
							<div class="reachus-tab-pane">
								<div class="address-block">
									<h6><i class="fa fa-tag"></i> Address</h6>
									<ul class="list-unstyled">
										<li> # 201, Plot No. 39, Abids Road, Near Chirag Ali Lane,</li>
										<li>Hyderabad - 500 001 , Telangana, India.</li>
									</ul>
									<h6><i class="fa fa-phone"></i> Phone Numbers</h6>
									<ul class="list-unstyled">
										<li>040-80180280, 040-22113366</li>
									</ul>
									<h6><i class="fa fa-mobile"></i> Can be in touch with Watsapp</h6>
									<ul class="list-unstyled">
										<li>+21 998 909 9999</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
		<div class="col-md-3 col-sm-12">
            <div class="spacer-1 medium d-xs-block d-sm-block d-md-none"></div>
            <div class="side-block-order border-radius-4">
                <h6 class="text-center"><i class="fa fa-shopping-basket"></i> Your Orders</h6>
                <div class="side-block-order-content">
                    <ul class="list-unstyled order-item-list">
                        <li class="clearfix">
                            <span class="float-left">Miryala Rasam</span>
                            <span class="float-right text-spl-color">$7.99</span>
                        </li>
                        <li class="clearfix">
                            <span class="float-left">Mokkajonna Shorba</span>
                            <span class="float-right text-spl-color">$8.45</span>
                        </li>
                        <li class="clearfix">
                            <span class="float-left">Miryala Rasam</span>
                            <span class="float-right text-spl-color">$7.99</span>
                        </li>
                        <li class="clearfix">
                            <span class="float-left">Mokkajonna Shorba</span>
                            <span class="float-right text-spl-color">$8.45</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		LoadRatingData();
	 	function LoadRatingData(){
			$.ajax({
				url    : "<?php echo URL.$controller_name; ?>/getRestaurants",
				method : "POST",
				success: function(data){
					$('#business_list').html(data);
				}
			});
		}
		$(document).on('mouseenter', '.rating', function(){
			var index 		 = $(this).data("index");
			var restaurantId = $(this).data('business_id');
			RemoveBackground(restaurantId);
			for(var count = 1; count<=index; count++){
				$('#'+restaurantId+'-'+count).css('color', '#ffcc00');
			}
		});
		function RemoveBackground(restaurantId){
			for(var count = 1; count <= 5; count++){
				$('#'+restaurantId+'-'+count).css('color', '#ccc');
			}
		}
		$(document).on('click', '.rating', function(){
			var index 		 = $(this).data("index");
			var restaurantId = $(this).data('business_id');
			$.ajax({
				url 	: "<?php echo URL.$controller_name; ?>/sendRating",
				method  : "POST",
				data 	: { index:index, restaurantId:restaurantId },
				success : function(data){
					if(data == $.trim('done')){
			 			LoadRatingData();
			 			alert("You have rate "+index +" out of 5");
					}else{
			 			alert("There is some problem in System");
					}
				}
		 	});
		});	
	});
</script>