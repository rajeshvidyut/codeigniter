<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class Welcome_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        // $this->load->database();
    }  
	public function getCitiesModel($data) {
	   	return self::commonCurl("https://developers.zomato.com/api/v2.1/locations?query=".$data);
	}
	public function getRestaurentsModel($lat,$long) {
	   	return self::commonCurl("https://developers.zomato.com/api/v2.1/search?lat=".$lat."&lon=".$long);
	}
	public function getRestaurentModel($restaurantId) {
		return self::commonCurl("https://developers.zomato.com/api/v2.1/restaurant?res_id=".$restaurantId);
	}
	public function commonCurl($url){
		$ch 	 = curl_init();
	    curl_setopt($ch, CURLOPT_URL,$url);
	    curl_setopt($ch, CURLOPT_POST, 1);
	    curl_setopt($ch, CURLOPT_POSTFIELDS,true);  //Post Fields
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    $headers = [
	        // 'user-key: f48512f2c2fcf05250f6b1e93d4d1e26',
	        'user-key: 8ba0e36fa376e3e9964ffa1fcd333c80',
	    ];
	    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	    $server_output = curl_exec ($ch);
	    curl_close ($ch);
	    return $server_output ;
	}
}
?>