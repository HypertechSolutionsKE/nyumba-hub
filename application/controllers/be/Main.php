<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		//$this->load->model('be/main_model');
	}

	function index(){
		if($this->session->userdata('nhub_loginstate')) {
			//$data['total_loan_applications'] = $this->main_model->get_total_loan_applications();
			//$data['total_pending'] = $this->main_model->get_total_pending();
			//$data['total_accepted'] = $this->main_model->get_total_accepted();
			//$data['total_rejected'] = $this->main_model->get_total_rejected();
			
			$data['page_title'] = 'Dashboard | ';
			$data['main_content'] = 'be/dashboard';
			$this->load->view('be/includes/template',$data);
        } 
		else {
            redirect('be/auth');
		}
	}
}

