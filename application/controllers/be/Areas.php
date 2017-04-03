<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Areas extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');	
		//$this->load->model('be/main_model');
		$this->load->model('be/areas_model');
		$this->load->model('be/cities_model');		
		$this->load->model('be/regions_model');

	}
	function index(){
		if($this->session->userdata('nhub_loginstate')) {
			$data['areas'] = $this->areas_model->get_areas_list();
			$data['cities'] = $this->cities_model->get_cities_list();			
			$data['regions'] = $this->regions_model->get_regions_list();
			$data['page_title'] = 'Areas/Localities | ';
			$data['main_content'] = 'be/areas';
			$this->load->view('be/includes/template',$data);
        } 
		else {
            redirect('be/auth');
		}
	}
	function save(){
		$data = array(
			'region_id' => $this->input->post('region_id'),
			'city_id' => $this->input->post('city_id'),			
			'area_name' => $this->input->post('area_name'),
			'area_description' => $this->input->post('area_description')
		);	
		$area_name = $this->input->post('area_name');
		if($this->areas_model->area_exists($area_name) == false){
			$q = $this->areas_model->save($data);
			if ($q['res'] == true){
				$resp = array('status' => 'SUCCESS','message' => 'Area added successfully.');
			}else{
				$resp = array('status' => 'ERR','message' => $q['dt']);
			}
		}else{
			$resp = array('status' => 'ERR','message' => 'This Area already exists in the database');
		}
			
		echo json_encode($resp);
	}
	function loadjs(){
		$data['areas'] = $this->areas_model->get_areas_list();
		$this->load->view('be/jsloads/areas',$data);

	}
	function get_area($area_id){
		$area = $this->areas_model->get_area($area_id);
		echo json_encode($area);
	}
	function update(){
		$area_id = $this->input->post('area_id');
		$area_name = $this->input->post('area_name');
		$data = array(
			'region_id' => $this->input->post('region_id'),
			'city_id' => $this->input->post('city_id'),			
			'area_name' => $this->input->post('area_name'),
			'area_description' => $this->input->post('area_description')
		);	
		if($this->areas_model->area_update_exists($area_id,$area_name) == false){
			$q = $this->areas_model->update($data,$area_id);
			if ($q['res'] == true){
				$resp = array('status' => 'SUCCESS','message' => 'Area updated successfully.');
			}else{
				$resp = array('status' => 'ERR','message' => $q['dt']);
			}
		}else{
			$resp = array('status' => 'ERR','message' => 'This Area already exists in the database');
		}
		echo json_encode($resp);
	}
	function delete($area_id){
		if($this->session->userdata('nhub_loginstate')){
			$q = $this->areas_model->delete($area_id);
			if($q['res'] == TRUE){
				$resp = array('status' => 'SUCCESS','message' => 'Area deleted successfully');			
			}else{					
				$resp = array('status' => 'ERR','message' => $q['dt']);			
			}
		}else{
			$resp = array('status' => 'ERR','message' => 'Your session seems to have expired. Please login again to continue');			
    	}
		echo json_encode($resp);
	}


}