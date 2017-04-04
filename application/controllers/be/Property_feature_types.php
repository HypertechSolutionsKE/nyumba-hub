<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Property_feature_types extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');	
		//$this->load->model('be/main_model');
		$this->load->model('be/property_feature_types_model');
	}
	function index(){
		if($this->session->userdata('nhub_loginstate')) {
			$data['property_feature_types'] = $this->property_feature_types_model->get_property_feature_types_list();
<<<<<<< HEAD
			$data['page_title'] = 'Property Feature Types | ';
=======
			$data['page_title'] = 'Property Types | ';
>>>>>>> 27bf1c4fd9a97f52140856f6a41481f7c8ae7efe
			$data['main_content'] = 'be/property_feature_types';
			$this->load->view('be/includes/template',$data);
        } 
		else {
            redirect('be/auth');
		}
	}
	function save(){
		$data = array(
			'property_feature_type_name' => $this->input->post('property_feature_type_name'),
			'property_feature_type_description' => $this->input->post('property_feature_type_description')
		);	
		$property_feature_type_name = $this->input->post('property_feature_type_name');
<<<<<<< HEAD
		if($this->property_feature_types_model->property_feature_type_exists($property_feature_type_name) == false){
			$q = $this->property_feature_types_model->save($data);
			if ($q['res'] == true){
				$resp = array('status' => 'SUCCESS','message' => 'Property Feature Type added successfully.');
=======
		if($this->Property_feature_types_model->property_feature_type_exists($property_feature_type_name) == false){
			$q = $this->Property_feature_types_model->save($data);
			if ($q['res'] == true){
				$resp = array('status' => 'SUCCESS','message' => 'Property Type added successfully.');
>>>>>>> 27bf1c4fd9a97f52140856f6a41481f7c8ae7efe
			}else{
				$resp = array('status' => 'ERR','message' => $q['dt']);
			}
		}else{
<<<<<<< HEAD
			$resp = array('status' => 'ERR','message' => 'This Property Feature Type already exists in the database');
=======
			$resp = array('status' => 'ERR','message' => 'This Property Type already exists in the database');
>>>>>>> 27bf1c4fd9a97f52140856f6a41481f7c8ae7efe
		}
			
		echo json_encode($resp);
	}
	function loadjs(){
<<<<<<< HEAD
		$data['property_feature_types'] = $this->property_feature_types_model->get_property_feature_types_list();
=======
		$data['property_feature_types'] = $this->Property_feature_types_model->get_property_feature_types_list();
>>>>>>> 27bf1c4fd9a97f52140856f6a41481f7c8ae7efe
		$this->load->view('be/jsloads/property_feature_types',$data);

	}
	function get_property_feature_type($property_feature_type_id){
<<<<<<< HEAD
		$property_feature_type = $this->property_feature_types_model->get_property_feature_type($property_feature_type_id);
=======
		$property_feature_type = $this->Property_feature_types_model->get_property_feature_type($property_feature_type_id);
>>>>>>> 27bf1c4fd9a97f52140856f6a41481f7c8ae7efe
		echo json_encode($property_feature_type);
	}
	function update(){
		$property_feature_type_id = $this->input->post('property_feature_type_id');
		$property_feature_type_name = $this->input->post('property_feature_type_name');
		$data = array(
			'property_feature_type_name' => $this->input->post('property_feature_type_name'),
			'property_feature_type_description' => $this->input->post('property_feature_type_description')
		);	
<<<<<<< HEAD
		if($this->property_feature_types_model->property_feature_type_update_exists($property_feature_type_id,$property_feature_type_name) == false){
			$q = $this->property_feature_types_model->update($data,$property_feature_type_id);
			if ($q['res'] == true){
				$resp = array('status' => 'SUCCESS','message' => 'Property Feature Type updated successfully.');
=======
		if($this->Property_feature_types_model->property_feature_type_update_exists($property_feature_type_id,$property_feature_type_name) == false){
			$q = $this->Property_feature_types_model->update($data,$property_feature_type_id);
			if ($q['res'] == true){
				$resp = array('status' => 'SUCCESS','message' => 'Property Type updated successfully.');
>>>>>>> 27bf1c4fd9a97f52140856f6a41481f7c8ae7efe
			}else{
				$resp = array('status' => 'ERR','message' => $q['dt']);
			}
		}else{
<<<<<<< HEAD
			$resp = array('status' => 'ERR','message' => 'This Property Feature Type already exists in the database');
=======
			$resp = array('status' => 'ERR','message' => 'This Property Type already exists in the database');
>>>>>>> 27bf1c4fd9a97f52140856f6a41481f7c8ae7efe
		}
		echo json_encode($resp);
	}
	function delete($property_feature_type_id){
		if($this->session->userdata('nhub_loginstate')){
<<<<<<< HEAD
			$q = $this->property_feature_types_model->delete($property_feature_type_id);
			if($q['res'] == TRUE){
				$resp = array('status' => 'SUCCESS','message' => 'Property Feature Type deleted successfully');			
=======
			$q = $this->Property_feature_types_model->delete($property_feature_type_id);
			if($q['res'] == TRUE){
				$resp = array('status' => 'SUCCESS','message' => 'Property Type deleted successfully');			
>>>>>>> 27bf1c4fd9a97f52140856f6a41481f7c8ae7efe
			}else{					
				$resp = array('status' => 'ERR','message' => $q['dt']);			
			}
		}else{
			$resp = array('status' => 'ERR','message' => 'Your session seems to have expired. Please login again to continue');			
    	}
		echo json_encode($resp);
	}


}