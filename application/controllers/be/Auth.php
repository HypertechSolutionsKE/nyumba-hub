<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('be/login_model');
	}
	
	function index(){
		if($this->session->userdata('nhub_loginstate')){
            redirect('be');
        } 
		else{
			if ($this->login_model->check_super_admin() == false){
				$this->load->view('be/register');
			}else{
				$this->load->view('be/login');
			}
		}
	}
	function register(){
		/*if($this->session->userdata('nhub_loginstate')){
            redirect('be');
        } 
		else{
			$this->load->view('be/register');
		}*/
	}
	function login(){		
		$query = $this->login_model->validate();
		
		if($query['res'] == true){			
			$this->session->set_userdata('nhub_loginstate', TRUE);
			$this->session->set_userdata('user_id', $query['user_id']);
			$this->session->set_userdata('user_email', $this->input->post('email_address'));
						
			redirect('be');
		}		
		else{
			$data['incorrect'] = 'Invalid credentials';
			$data['nhub_loginstate'] = FALSE;
			$this->load->view('be/login',$data);		
		}
	}
	
	function logout(){
		$this->session->sess_destroy();
		$this->index();
	}
	
	function pswupdate(){
		$this->load->model('be/login_model');
		$this->login_model->pswupdate();
		$this->index();
	}
}
