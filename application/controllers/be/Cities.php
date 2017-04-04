<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cities extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');	
		//$this->load->model('be/main_model');
		$this->load->model('be/cities_model');
		$this->load->model('be/regions_model');

	}
	function index(){
		if($this->session->userdata('nhub_loginstate')) {
			$data['cities'] = $this->cities_model->get_cities_list();
			$data['regions'] = $this->regions_model->get_regions_list();
			$data['page_title'] = 'Cities | ';
			$data['main_content'] = 'be/cities';
			$this->load->view('be/includes/template',$data);
        } 
		else {
            redirect('be/auth');
		}
	}
	function save(){
		$data = array(
			'region_id' => $this->input->post('region_id'),
			'city_name' => $this->input->post('city_name'),
			'city_description' => $this->input->post('city_description')
		);	
		$city_name = $this->input->post('city_name');
		if($this->cities_model->city_exists($city_name) == false){
			$q = $this->cities_model->save($data);
			if ($q['res'] == true){
				$resp = array('status' => 'SUCCESS','message' => 'City added successfully.');
			}else{
				$resp = array('status' => 'ERR','message' => $q['dt']);
			}
		}else{
			$resp = array('status' => 'ERR','message' => 'This City already exists in the database');
		}
			
		echo json_encode($resp);
	}
	function loadjs(){
		$data['cities'] = $this->cities_model->get_cities_list();
		$this->load->view('be/jsloads/Cities',$data);

	}
	function get_city($city_id){
		$city = $this->cities_model->get_city($city_id);
		echo json_encode($city);
	}
	function get_cities_by_region($region_id){
		$cities = $this->cities_model->get_cities_by_region($region_id);
		echo json_encode($cities);
	}
	function update(){
		$city_id = $this->input->post('city_id');
		$city_name = $this->input->post('city_name');
		$data = array(
			'region_id' => $this->input->post('region_id'),
			'city_name' => $this->input->post('city_name'),
			'city_description' => $this->input->post('city_description')
		);	
		if($this->cities_model->city_update_exists($city_id,$city_name) == false){
			$q = $this->cities_model->update($data,$city_id);
			if ($q['res'] == true){
				$resp = array('status' => 'SUCCESS','message' => 'City updated successfully.');
			}else{
				$resp = array('status' => 'ERR','message' => $q['dt']);
			}
		}else{
			$resp = array('status' => 'ERR','message' => 'This City already exists in the database');
		}
		echo json_encode($resp);
	}
	function delete($city_id){
		if($this->session->userdata('nhub_loginstate')){
			$q = $this->cities_model->delete($city_id);
			if($q['res'] == TRUE){
				$resp = array('status' => 'SUCCESS','message' => 'City deleted successfully');			
			}else{					
				$resp = array('status' => 'ERR','message' => $q['dt']);			
			}
		}else{
			$resp = array('status' => 'ERR','message' => 'Your session seems to have expired. Please login again to continue');			
    	}
		echo json_encode($resp);
	}


}