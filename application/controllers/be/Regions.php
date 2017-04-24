<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Regions extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');	
		//$this->load->model('be/main_model');
		$this->load->model('be/regions_model');
	}

	function index(){
		if($this->session->userdata('nhub_loginstate')) {
			$data['regions'] = $this->regions_model->get_Regions_list();
			$data['page_title'] = 'Regions | ';
			$data['main_content'] = 'be/regions';
			$this->load->view('be/includes/template',$data);
        } 
		else {
            redirect('be/auth');
		}
	}

	function save(){
		$data = array(
			'region_name' => $this->input->post('region_name'),
			'region_description' => $this->input->post('region_description')
		);	
		$region_name = $this->input->post('region_name');
		if($this->regions_model->region_exists($region_name) == false){
			$q = $this->regions_model->save($data);
			if ($q['res'] == true){
				$resp = array('status' => 'SUCCESS','message' => 'Region added successfully.');
			}else{
				$resp = array('status' => 'ERR','message' => $q['dt']);
			}
		}else{
			$resp = array('status' => 'ERR','message' => 'This Region already exists in the database');
		}
			
		echo json_encode($resp);
	}
	function loadjs(){
		$data['regions'] = $this->regions_model->get_regions_list();
		$this->load->view('be/jsloads/regions',$data);

	}
	function get_region($region_id){
		$region = $this->regions_model->get_region($region_id);
		echo json_encode($region);
	}
	function update(){
		$region_id = $this->input->post('region_id');
		$region_name = $this->input->post('region_name');
		$data = array(
			'region_name' => $this->input->post('region_name'),
			'region_description' => $this->input->post('region_description')
		);	
		if($this->regions_model->region_update_exists($region_id,$region_name) == false){
			$q = $this->regions_model->update($data,$region_id);
			if ($q['res'] == true){
				$resp = array('status' => 'SUCCESS','message' => 'Region updated successfully.');
			}else{
				$resp = array('status' => 'ERR','message' => $q['dt']);
			}
		}else{
			$resp = array('status' => 'ERR','message' => 'This Region already exists in the database');
		}
		echo json_encode($resp);
	}
	function delete($region_id){
		if($this->session->userdata('nhub_loginstate')){
			$q = $this->regions_model->delete($region_id);
			if($q['res'] == TRUE){
				$resp = array('status' => 'SUCCESS','message' => 'Region deleted successfully');			
			}else{					
				$resp = array('status' => 'ERR','message' => $q['dt']);			
			}
		}else{
			$resp = array('status' => 'ERR','message' => 'Your session seems to have expired. Please login again to continue');			
    	}
		echo json_encode($resp);
	}

}