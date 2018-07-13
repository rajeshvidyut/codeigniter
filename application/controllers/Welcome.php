<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->data['controller_name'] = "Welcome";
		$this->load->model('Welcome_model');
        // $this->load->model('Common_model');
	}
	public function index(){
		$SelectCountry 			  = $this->input->post('SelectCountry');
		$this->data['list'] 	  = json_decode($this->Welcome_model->getCitiesModel($SelectCountry), TRUE);
		$this->layout('index',$this->data,array('customlayout/select2'));
	}
	public function about($param){
		$DecryptResId 			  = HASH::decrypt($param);
		$this->data['list'] 	  = json_decode($this->Welcome_model->getRestaurentModel($DecryptResId), TRUE);
		$this->layout('about',$this->data);
	}
	public function getCities(){
		$SelectCountry 			  = $this->input->post('SelectCountry');
		$this->data['list'] 	  = json_decode($this->Welcome_model->getCitiesModel($SelectCountry), TRUE);
		$LocationCount 			  = count($this->data['list']['location_suggestions']);
		$location_suggestions     = $this->data['list']['location_suggestions'];
		$list 		   = "";
		for ($i=0; $i < $LocationCount; $i++) { 
			$CityId		 = $location_suggestions[$i]['city_id'];
			$CityName 	 = $this->data['list']['location_suggestions'][$i]['city_name'];
			$CountryId 	 = $this->data['list']['location_suggestions'][$i]['country_id'];
			$CountryName = $this->data['list']['location_suggestions'][$i]['country_name'];
			$Latitude 	 = $this->data['list']['location_suggestions'][$i]['latitude'];
			$Longitude 	 = $this->data['list']['location_suggestions'][$i]['longitude'];
			$onclick     = "onclick=SelectCities('$CityId','$CityName','$CountryId','$CountryName','$Latitude','$Longitude')";
			$list 		.= "<li style='padding:4px 0px;border-bottom:1px solid #CCCCCC;cursor:pointer;'$onclick>$CityName, <b>$CountryName</b></li>";
		}
		echo"<ul id='list' style='list-style-type: none;padding-left: 5px;background-color: #FFFFFF!important; margin: 0px; color: #333; font-size:14px;
			width:246px;border-radius:5px' >
                $list
            </u/>";
		// $this->layout('index',$this->data,array('customlayout/select2'));
	}
	public function getRestaurents(){
		$Lat 						=	$this->input->post('Lat');
		$Long 						= 	$this->input->post('Long');
		$this->data['list'] 	  	= 	json_decode($this->Welcome_model->getRestaurentsModel($Lat,$Long), TRUE);
		$RestaurantCount 			= 	count($this->data['list']['restaurants']);
		$list 		   				= 	"";
		for ($i=0; $i < $RestaurantCount; $i++) { 
			$RestaurantId			=	$this->data['list']['restaurants'][$i]['restaurant']['R']['res_id'];
			$RestaurantName			=	addslashes($this->data['list']['restaurants'][$i]['restaurant']['name']);
			$RestaurantAddr			=	$this->data['list']['restaurants'][$i]['restaurant']['location']['address'];
			$RestaurantLoca			=	$this->data['list']['restaurants'][$i]['restaurant']['location']['locality'];
			$RestaurantLocaVer		=	$this->data['list']['restaurants'][$i]['restaurant']['location']['locality_verbose'];
			$RestaurantAggRating	=	$this->data['list']['restaurants'][$i]['restaurant']['user_rating']['aggregate_rating'];
			$RestaurantRatingText	=	$this->data['list']['restaurants'][$i]['restaurant']['user_rating']['rating_text'];
			$RestaurantRatingColor	=	$this->data['list']['restaurants'][$i]['restaurant']['user_rating']['rating_color'];
			$RestaurantVotes		=	$this->data['list']['restaurants'][$i]['restaurant']['user_rating']['votes'];
			$EncryptResId 			=   HASH::encrypt($RestaurantId);
			$onclick    			= 	'onclick="SelectRestaurent('.$RestaurantId.','."'$RestaurantName'".','."'$RestaurantAddr'".','."'$RestaurantLoca'".','."'$RestaurantLocaVer'".','."'$RestaurantAggRating'".','."'$RestaurantRatingText'".','."'$RestaurantRatingColor'".','."'$RestaurantVotes'".')"';
			$list 				   .= 	"<li style='padding:4px 0px;border-bottom:1px solid #CCCCCC;cursor:pointer;' $onclick><a href='".URL."welcome/about/".$EncryptResId."' style='color:#333;text-decoration: none;'>$RestaurantName</a></li>";
		}
		echo"<ul id='list' style='list-style-type: none;padding-left: 5px;background-color: #FFFFFF!important; margin: 0px; color: #333; font-size:14px;
			width:619px;border-radius:5px' >
                $list
            </u/>";
	}
	public function getRestaurent(){
		$ResId 						=	$this->input->post('RestaurantId');
		$this->data['list'] 	  	= 	json_decode($this->Welcome_model->getRestaurentModel($ResId), TRUE);
		echo $this->layout('about',$this->data, TRUE);
	}
}
