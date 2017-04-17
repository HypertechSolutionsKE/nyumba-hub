<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Properties extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');	
		$this->load->model('be/properties_model');
		$this->load->model('be/property_types_model');
		$this->load->model('be/regions_model');
		$this->load->model('be/currencies_model');
		$this->load->model('be/listing_types_model');

	}
	function index(){
		if($this->session->userdata('nhub_loginstate')) {
			$data['page_title'] = 'Properties Listing | ';
			$data['main_content'] = 'be/properties';
			$this->load->view('be/includes/template',$data);
        } 
		else {
            redirect('be/auth');
		}
	}
	function add_start(){
		if($this->session->userdata('nhub_loginstate')) {
			$data['listing_types'] = $this->listing_types_model->get_listing_types_list();
			$data['currencies'] = $this->currencies_model->get_currencies_list();			
			$data['regions'] = $this->regions_model->get_regions_list();
			$data['property_types'] = $this->property_types_model->get_property_types_list();
			$data['page_title'] = 'Start - New Property | ';
			$data['main_content'] = 'be/add_start';
			$this->load->view('be/includes/template',$data);
        } 
		else {
            redirect('be/auth');
		}
	}
	function save_start(){
		
	}
	function save(){
		$country_name = $this->input->post('country_name');
		$country_code = $this->input->post('country_code');
		$property_name = $this->input->post('property_name');
		$property_symbol = $this->input->post('property_symbol');
		
		$e = $this->properties_model->property_exists($country_name,$country_code,$property_name,$property_symbol);

		if($e['res'] == true){
			$data = array(
				'country_name' => $country_name,
				'country_code' => $country_code,
				'property_name' => $property_name,
				'property_symbol' => $property_symbol			
			);
			$q = $this->properties_model->save($data);
			if ($q['res'] == true){
				$resp = array('status' => 'SUCCESS','message' => 'property added successfully.');
			}else{
				$resp = array('status' => 'ERR','message' => $q['dt']);
			}
		}else{
			$resp = array('status' => 'ERR','message' => $e['dt']);
		}
			
		echo json_encode($resp);
	}
	function loadjs(){
		$data['properties'] = $this->properties_model->get_properties_list();
		$this->load->view('be/jsloads/properties',$data);

	}
	function get_property($property_id){
		$property = $this->properties_model->get_property($property_id);
		echo json_encode($property);
	}
	function update(){
		$property_id = $this->input->post('property_id');
		$country_name = $this->input->post('country_name');
		$country_code = $this->input->post('country_code');
		$property_name = $this->input->post('property_name');
		$property_symbol = $this->input->post('property_symbol');

		$e = $this->properties_model->property_update_exists($property_id,$country_name,$country_code,$property_name,$property_symbol);

		if($e['res'] == true){
			$data = array(
				'country_name' => $country_name,
				'country_code' => $country_code,
				'property_name' => $property_name,
				'property_symbol' => $property_symbol			
			);

			$q = $this->properties_model->update($data,$property_id);
			if ($q['res'] == true){
				$resp = array('status' => 'SUCCESS','message' => 'property updated successfully.');
			}else{
				$resp = array('status' => 'ERR','message' => $q['dt']);
			}
		}else{
			$resp = array('status' => 'ERR','message' => $e['dt']);
		}
		echo json_encode($resp);
	}
	function delete($property_id){
		if($this->session->userdata('nhub_loginstate')){
			$q = $this->properties_model->delete($property_id);
			if($q['res'] == TRUE){
				$resp = array('status' => 'SUCCESS','message' => 'property deleted successfully');			
			}else{					
				$resp = array('status' => 'ERR','message' => $q['dt']);			
			}
		}else{
			$resp = array('status' => 'ERR','message' => 'Your session seems to have expired. Please login again to continue');			
    	}
		echo json_encode($resp);
	}

}