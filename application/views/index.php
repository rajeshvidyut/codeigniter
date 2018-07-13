<!-- Search Section Starts -->
<section class="search-area parallax">
	<div class="container">
		 <div class="row">
		    <div class="col-xs-12">
		      	<div class="col-sm-3">
	        		<input type="text" class="form-control" id="SelectCountry" placeholder="Search Cities here" value="" />
	                <span id="SelectCountryList"></span>
	                <input type="hidden" id="CityId"/>
	                <input type="hidden" id="CountryId"/>
	                <input type="hidden" id="CtryName"/>
	                <input type="hidden" id="Latitude"/>
	                <input type="hidden" id="Longitude"/>
	          	</div>
	          	<div class="col-sm-7">
	                <input type="text" class="form-control" id="SelectRestaurant" placeholder="Search restaurant here"
	                onkeyup="SelectRestaurents()"/>
	                <span id="SelectRestaurentList"></span>
	                <input type="hidden" id="RestaurantId"/>
	                <input type="hidden" id="RestaurantAddr"/>
	                <input type="hidden" id="RestaurantLoca"/>
	                <input type="hidden" id="RestaurantLocaVer"/>
	                <input type="hidden" id="RestaurantAggRating"/>
	                <input type="hidden" id="RestaurantRatingText"/>
	                <input type="hidden" id="RestaurantRatingColor"/>
	                <input type="hidden" id="RestaurantVotes"/>
	          	</div>
	           	<div class="col-sm-2">
	           	    <button type="button" class="btn btn-danger">Search</button>
	           	</div>
		    </div>
		</div>
	</div>
</section>
<!-- Search Section Ends -->
<!-- Intro Section Starts -->
	<section class="intro-section">
		<div class="container text-center">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<i class="fa fa-flash circle"></i>
					<h6>Lightning Fast Delivery</h6>
				</div>
				<div class="col-md-3 col-sm-6">
					<i class="fa fa fa-cube circle"></i>
					<h6>No Minimum Order</h6>
				</div>
				<div class="clearfix d-xs-block d-sm-block d-md-none"><p>&nbsp;</p></div>
				<div class="col-md-3 col-sm-6">
					<i class="fa fa-credit-card circle"></i>
					<h6>Pay via Card/Cash</h6>
				</div>
				<div class="col-md-3 col-sm-6">
					<i class="fa fa-dollar circle"></i>
					<h6>Deals Discounts</h6>
				</div>
			</div>
		</div>
	</section>
<!-- Intro Section Ends -->
<!-- Welcome Section Starts -->
	<section class="welcome section">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-6 col-sm-12">
					<div class="welcome-box text-center">
						<h1 class="text-weight-light">Welcome <br>To Restaurant!</h1>
						<p class="spl text-weight-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<p>
							It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less.
						</p>
						<a href="#" class="btn btn-prime text-weight-bold text-uppercase animation">More Info</a>
					</div>
				</div>
				<div class="col-lg-7 col-md-6 col-sm-12">
					<img src="Assets/Images/welcome-img1.jpg" alt="Welcome" class="img-fluid img-center">
				</div>
			</div>
			<div class="food-menu-grid row text-center">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="hover-content">
						<img src="Assets/Images/chinese-menu.jpg" alt="chinese" class="img-fluid animation">
						<div class="overlay animation">
							<h4 class="text-uppercase">Chinese</h4>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="hover-content">
						<img src="Assets/Images/indian-menu.jpg" alt="Indian" class="img-fluid animation">
						<div class="overlay animation">
							<h4 class="text-uppercase">Indian</h4>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="hover-content">
						<img src="Assets/Images/italian-menu.jpg" alt="italian" class="img-fluid animation">
						<div class="overlay animation">
							<h4 class="text-uppercase">Italian</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- Welcome Section Ends -->
	<script type="text/javascript">
	$(document).ready(function(){
		$("#SelectCountry").keyup(function(){
	        var SelectCountry = $("#SelectCountry").val();
            $.ajax({
                url 	: "<?php echo URL.$controller_name; ?>/getCities",
                type 	: "POST",
                data 	: {SelectCountry:SelectCountry},
                success : function(data) {
                	$("#SelectCountryList").show();
                    $("#SelectCountryList").html(data);
                }
            });
	    });
	});
    function SelectCities(CityId,CityName,CountryId,CountryName,Latitude,Longitude) {
    	$("#SelectCountry").val(CityName);
        $("#CityId").val(CityId);
        $("#CountryId").val(CountryId);
        $("#CtryName").val(CountryName);
        $("#Latitude").val(Latitude);
        $("#Longitude").val(Longitude);
        $("#SelectCountryList").hide();
        function SelectRestaurents(){
        	var Lat  	= document.getElementById("Latitude").value
        	var Long    = document.getElementById("Longitude").value
			$.ajax({
				type 	: "POST",
				url 	: "<?php echo URL.$controller_name; ?>/getRestaurents",
				data 	: {Lat: Lat,Long: Long},
				success : function (data) {
				 	$("#SelectRestaurentList").show();
                 	$("#SelectRestaurentList").html(data);
				}
			});
		}
		return SelectRestaurents();
	}
	function SelectRestaurent(RestaurantId,RestaurantName,RestaurantAddr,RestaurantLoca,RestaurantLocaVer,RestaurantAggRating,RestaurantRatingText,RestaurantRatingColor,RestaurantVotes){
    	$("#SelectRestaurentList").val(RestaurantName);
    	$("#RestaurantId").val(RestaurantId);
        $("#RestaurantAddr").val(RestaurantAddr);
        $("#RestaurantLoca").val(RestaurantLoca);
        $("#RestaurantLocaVer").val(RestaurantLocaVer);
        $("#RestaurantAggRating").val(RestaurantAggRating);
        $("#RestaurantRatingText").val(RestaurantRatingText);
        $("#RestaurantRatingColor").val(RestaurantRatingColor);
        $("#RestaurantVotes").val(RestaurantVotes);
	}
</script>