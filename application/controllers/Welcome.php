<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends MY_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->data['controller_name'] = "Welcome";
		$this->load->model('Welcome_model');
        // $this->load->model('Common_model');
	}
	public function index(){
		$this->data['list'] = $this->Welcome_model->getCitiesModel();
		$data_encode = json_encode($this->data['list']);
		// $data_encode = json_decode($this->data);

		print_r($data_encode); die;
		// $this->layout('index',$this->data,array('customlayout/select2'));
	}
	public function about(){
		$this->layout('about');
	}
	// public function getCities(){
	// 	echo "data";	
	// }
}
