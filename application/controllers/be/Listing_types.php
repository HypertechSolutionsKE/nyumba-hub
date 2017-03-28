<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Listing_types extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');	
		//$this->load->model('be/main_model');
		$this->load->model('be/listing_types_model');
	}
	function index(){
		if($this->session->userdata('nhub_loginstate')) {
			$data['listing_types'] = $this->listing_types_model->get_listing_types_list();
			$data['page_title'] = 'Listing Types | ';
			$data['main_content'] = 'be/listing_types';
			$this->load->view('be/includes/template',$data);
        } 
		else {
            redirect('be/auth');
		}
	}

}