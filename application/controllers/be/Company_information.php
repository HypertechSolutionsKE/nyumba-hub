<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company_information extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');	
		//$this->load->model('be/main_model');
		$this->load->model('be/company_information_model');
	}
	function index(){
		if($this->session->userdata('nhub_loginstate')) {
			//$data['company_information'] = $this->company_information_model->get_company_information_list();
			$data['page_title'] = 'Company Information | ';
			$data['main_content'] = 'be/company_information';
			$this->load->view('be/includes/template',$data);
        } 
		else {
            redirect('be/auth');
		}
	}
	function save(){
		$data = array(
			'company_name' => $this->input->post('company_name'),
			'company_description' => $this->input->post('company_description')
		);	
		$company_name = $this->input->post('company_name');
		if($this->company_information_model->company_exists($company_name) == false){
			$q = $this->company_information_model->save($data);
			if ($q['res'] == true){
				$resp = array('status' => 'SUCCESS','message' => 'company added successfully.');
			}else{
				$resp = array('status' => 'ERR','message' => $q['dt']);
			}
		}else{
			$resp = array('status' => 'ERR','message' => 'This company already exists in the database');
		}
			
		echo json_encode($resp);
	}
	function loadjs(){
		$data['company_information'] = $this->company_information_model->get_company_information_list();
		$this->load->view('be/jsloads/company_information',$data);

	}
	function get_company($company_id){
		$company = $this->company_information_model->get_company($company_id);
		echo json_encode($company);
	}
	function update(){
		$company_id = $this->input->post('company_id');
		$company_name = $this->input->post('company_name');
		$data = array(
			'company_name' => $this->input->post('company_name'),
			'company_description' => $this->input->post('company_description')
		);	
		if($this->company_information_model->company_update_exists($company_id,$company_name) == false){
			$q = $this->company_information_model->update($data,$company_id);
			if ($q['res'] == true){
				$resp = array('status' => 'SUCCESS','message' => 'company updated successfully.');
			}else{
				$resp = array('status' => 'ERR','message' => $q['dt']);
			}
		}else{
			$resp = array('status' => 'ERR','message' => 'This company already exists in the database');
		}
		echo json_encode($resp);
	}
	function delete($company_id){
		if($this->session->userdata('nhub_loginstate')){
			$q = $this->company_information_model->delete($company_id);
			if($q['res'] == TRUE){
				$resp = array('status' => 'SUCCESS','message' => 'company deleted successfully');			
			}else{					
				$resp = array('status' => 'ERR','message' => $q['dt']);			
			}
		}else{
			$resp = array('status' => 'ERR','message' => 'Your session seems to have expired. Please login again to continue');			
    	}
		echo json_encode($resp);
	}


}