<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Property_types extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');	
		$this->load->model('be/property_feature_types_model');
		$this->load->model('be/property_features_model');		
		$this->load->model('be/property_types_model');
	}
	function index(){
		if($this->session->userdata('nhub_loginstate')) {
			$data['property_types'] = $this->property_types_model->get_property_types_list();
			$data['property_feature_types'] = $this->property_feature_types_model->get_property_feature_types_list2();
			$data['property_features'] = $this->property_features_model->get_property_features_list();

			$data['page_title'] = 'Property Types | ';
			$data['main_content'] = 'be/property_types';
			$this->load->view('be/includes/template',$data);
        } 
		else {
            redirect('be/auth');
		}
	}
	function save(){
		$bedrooms = $this->input->post('bedrooms');
		if($bedrooms == 'on'){$bedrooms = 1;}else{$bedrooms = 0;}

		$bathrooms = $this->input->post('bathrooms');
		if($bathrooms == 'on'){$bathrooms = 1;}else{$bathrooms = 0;}

		$total_rooms = $this->input->post('total_rooms');
		if($total_rooms == 'on'){$total_rooms = 1;}else{$total_rooms = 0;}

		$living_area = $this->input->post('living_area');
		if($living_area == 'on'){$living_area = 1;}else{$living_area = 0;}

		$floor = $this->input->post('floor');
		if($floor == 'on'){$floor = 1;}else{$floor = 0;}

		$total_floors = $this->input->post('total_floors');
		if($total_floors == 'on'){$total_floors = 1;}else{$total_floors = 0;}

		$land_size = $this->input->post('land_size');
		if($land_size == 'on'){$land_size = 1;}else{$land_size = 0;}

		$building_size = $this->input->post('building_size');
		if($building_size == 'on'){$building_size = 1;}else{$building_size = 0;}

		$data = array(
			'property_type_name' => $this->input->post('property_type_name'),
			'property_type_description' => $this->input->post('property_type_description'),
			'bedrooms' => $bedrooms,
			'bathrooms' => $bathrooms,
			'total_rooms' => $total_rooms,
			'living_area' => $living_area,
			'floor' => $floor,
			'total_floors' => $total_floors,
			'land_size' => $land_size,
			'building_size' => $building_size
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
		$bedrooms = $this->input->post('bedrooms');
		if($bedrooms == 'on'){$bedrooms = 1;}else{$bedrooms = 0;}

		$bathrooms = $this->input->post('bathrooms');
		if($bathrooms == 'on'){$bathrooms = 1;}else{$bathrooms = 0;}

		$total_rooms = $this->input->post('total_rooms');
		if($total_rooms == 'on'){$total_rooms = 1;}else{$total_rooms = 0;}

		$living_area = $this->input->post('living_area');
		if($living_area == 'on'){$living_area = 1;}else{$living_area = 0;}

		$floor = $this->input->post('floor');
		if($floor == 'on'){$floor = 1;}else{$floor = 0;}

		$total_floors = $this->input->post('total_floors');
		if($total_floors == 'on'){$total_floors = 1;}else{$total_floors = 0;}

		$land_size = $this->input->post('land_size');
		if($land_size == 'on'){$land_size = 1;}else{$land_size = 0;}

		$building_size = $this->input->post('building_size');
		if($building_size == 'on'){$building_size = 1;}else{$building_size = 0;}

		$property_type_id = $this->input->post('property_type_id');
		$property_type_name = $this->input->post('property_type_name');

		$data = array(
			'property_type_name' => $this->input->post('property_type_name'),
			'property_type_description' => $this->input->post('property_type_description'),
			'bedrooms' => $bedrooms,
			'bathrooms' => $bathrooms,
			'total_rooms' => $total_rooms,
			'living_area' => $living_area,
			'floor' => $floor,
			'total_floors' => $total_floors,
			'land_size' => $land_size,
			'building_size' => $building_size
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