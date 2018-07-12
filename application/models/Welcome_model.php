<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Welcome_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        // $this->load->database();
    }  
	public function getCitiesModel() {
		$ch = curl_init();
	    curl_setopt($ch, CURLOPT_URL,"https://developers.zomato.com/api/v2.1/search?sort=rating&order=asc");
	    curl_setopt($ch, CURLOPT_POST, 1);
	    curl_setopt($ch, CURLOPT_POSTFIELDS,$vars);  //Post Fields
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    $headers = [
	        'user-key: f48512f2c2fcf05250f6b1e93d4d1e26',
	    ];
	    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	    $server_output = curl_exec ($ch);
	    curl_close ($ch);
	    return $server_output ;
	}
}

?>