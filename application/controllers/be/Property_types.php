<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Property_types extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');	
		//$this->load->model('be/main_model');
		$this->load->model('be/property_types_model');
	}
	function index(){
		if($this->session->userdata('nhub_loginstate')) {
			$data['property_types'] = $this->property_types_model->get_property_types_list();
			$data['page_title'] = 'Property Types | ';
			$data['main_content'] = 'be/property_types';
			$this->load->view('be/includes/template',$data);
        } 
		else {
            redirect('be/auth');
		}
	}
	function save(){
		$data = array(
			'property_type_name' => $this->input->post('property_type_name'),
			'property_type_description' => $this->input->post('property_type_description')
		);	
		$property_type_name = $this->input->post('property_type_name');
		if($this->property_types_model->property_type_exists($property_type_name) == false){
			$q = $this->property_types_model->save($data);
			if ($q['res'] == true){
				$resp = array('status' => 'SUCCESS','message' => 'Property Type added successfully.');
			}else{
				$resp = array('status' => 'ERR','message' => $q['dt']);
			}
		}else{
			$resp = array('status' => 'ERR','message' => 'This Property Type already exists in the database');
		}
			
		echo json_encode($resp);
	}
	function loadjs(){
		$data['property_types'] = $this->property_types_model->get_property_types_list();
		$this->load->view('be/jsloads/property_types',$data);

	}
	function get_property_type($property_type_id){
		$property_type = $this->property_types_model->get_property_type($property_type_id);
		echo json_encode($property_type);
	}
	function update(){
		$property_type_id = $this->input->post('property_type_id');
		$property_type_name = $this->input->post('property_type_name');
		$data = array(
			'property_type_name' => $this->input->post('property_type_name'),
			'property_type_description' => $this->input->post('property_type_description')
		);	
		if($this->property_types_model->property_type_update_exists($property_type_id,$property_type_name) == false){
			$q = $this->property_types_model->update($data,$property_type_id);
			if ($q['res'] == true){
				$resp = array('status' => 'SUCCESS','message' => 'Property Type updated successfully.');
			}else{
				$resp = array('status' => 'ERR','message' => $q['dt']);
			}
		}else{
			$resp = array('status' => 'ERR','message' => 'This Property Type already exists in the database');
		}
		echo json_encode($resp);
	}
	function delete($property_type_id){
		if($this->session->userdata('nhub_loginstate')){
			$q = $this->property_types_model->delete($property_type_id);
			if($q['res'] == TRUE){
				$resp = array('status' => 'SUCCESS','message' => 'Property Type deleted successfully');			
			}else{					
				$resp = array('status' => 'ERR','message' => $q['dt']);			
			}
		}else{
			$resp = array('status' => 'ERR','message' => 'Your session seems to have expired. Please login again to continue');			
    	}
		echo json_encode($resp);
	}


}