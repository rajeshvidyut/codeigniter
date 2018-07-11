<?php
    if (!defined('BASEPATH'))
    exit('No direct script access allowed');
    class MY_Controller extends CI_Controller {
        //Set the class variable.
        var $template = array();
        var $data = array();
        //Load layout    
        public function layout($page, $data="", $customlayout = array()) {
            $this->template['header'] = $this->load->view('layout/header', $this->data, true);
            $this->template['footer'] = $this->load->view('layout/footer', $this->data, true);
            $this->template['content'] = $this->load->view($page, $data, true);
            $this->template['customlayout']= "";
            foreach($customlayout as $layout){
                $this->template['customlayout'] .=  $this->load->view($layout, $this->data, true);  
            }
            $this->load->view('layout/template', $this->template);
        }
    }
