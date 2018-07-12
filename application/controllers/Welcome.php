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
	public function about(){
		$this->layout('about');
	}
	public function getCities(){
		$SelectCountry = $this->input->post('SelectCountry');
		$this->data['list'] 	  = json_decode($this->Welcome_model->getCitiesModel($SelectCountry), TRUE);
		// pr($this->data['list']['location_suggestions']); die;
		$LocationCount = count($this->data['list']['location_suggestions']);
		$list 		   = "";
		for ($i=0; $i < $LocationCount; $i++) { 
			$CityId		 = $this->data['list']['location_suggestions'][$i]['city_id'];
			$CityName 	 = $this->data['list']['location_suggestions'][$i]['city_name'];
			$CountryId 	 = $this->data['list']['location_suggestions'][$i]['country_id'];
			$CountryName = $this->data['list']['location_suggestions'][$i]['country_name'];
			$Latitude 	 = $this->data['list']['location_suggestions'][$i]['latitude'];
			$Longitude 	 = $this->data['list']['location_suggestions'][$i]['longitude'];
			$onclick     = "onclick=SelectCities('$CityId','$CityName','$CountryId','$CountryName','$Latitude','$Longitude')";
			$list 		.= "<li style='padding:4px 0px;border-bottom:1px solid #CCCCCC;cursor:pointer;' $onclick>$CityName, <b>$CountryName</b></li>";
		}
		echo"<ul id='list' style='list-style-type: none;padding-left: 5px;background-color: #FFFFFF!important; margin: 0px; color: #333; font-size:14px;
			width:246px;border-radius:5px' >
                $list
            </u/>";
		// $this->layout('index',$this->data,array('customlayout/select2'));
	}

}
