<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Access_levels extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');	
		//$this->load->model('be/main_model');
		$this->load->model('be/access_levels_model');
	}

	function index(){
		if($this->session->userdata('nhub_loginstate')) {
			$data['access_levels'] = $this->access_levels_model->get_access_levels_list();
			$data['page_title'] = 'Access Levels | ';
			$data['main_content'] = 'be/access_levels';
			$this->load->view('be/includes/template',$data);
        } 
		else {
            redirect('be/auth');
		}
	}
	function save(){
		$this->form_validation->set_rules('access_level_name', 'Access Level Name', 'trim|required');
		$this->form_validation->set_rules('access_level_description', 'Access Level Description', 'trim');
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			if($this->access_levels_model->access_level_exists() == false){
				if($this->access_levels_model->save_access_level()){
					$data['success'] = 'Access Level added successfully';
					$data['access_levels'] = $this->access_levels_model->get_access_levels_list();
					$data['page_title'] = 'Access Levels | ';
					$data['main_content'] = 'be/access_levels';
					$this->load->view('be/includes/template',$data);
				}else{					
					$data['error'] = 'There was an error saving the Access Level';
					$data['access_levels'] = $this->access_levels_model->get_access_levels_list();
					$data['page_title'] = 'Access Levels | ';
					$data['main_content'] = 'be/access_levels';
					$this->load->view('be/includes/template',$data);
				}
			}else{					
				$data['error'] = 'This Access Level already exists';
				$data['access_levels'] = $this->access_levels_model->get_access_levels_list();
				$data['page_title'] = 'Access Levels | ';
				$data['main_content'] = 'be/access_levels';
				$this->load->view('be/includes/template',$data);
			}
		}
		
	}
	function edit($access_level_id){
		if($this->session->userdata('nhub_loginstate')){
			$data['access_level'] = $this->access_levels_model->get_access_level($access_level_id);
			$data['access_levels'] = $this->access_levels_model->get_access_levels_list();
			$data['page_title'] = 'Access Levels | ';
			$data['main_content'] = 'be/access_levels';
			$this->load->view('be/includes/template',$data);
		}else{
            redirect('be/auth');
		}
	}
	function update($access_level_id){
		$this->form_validation->set_rules('access_level_name', 'Access Level Name', 'trim|required');
		$this->form_validation->set_rules('access_level_description', 'Access Level Description', 'trim');
		if($this->form_validation->run() == FALSE){
			$this->edit($access_level_id);
		}else{
			if($this->access_levels_model->access_level_update_exists($access_level_id) == false){
				$q = $this->access_levels_model->update_access_level($access_level_id);
				if($q){
					$data['success'] = 'Access Level updated successfully';
					$data['access_level'] = $this->access_levels_model->get_access_level($access_level_id);
					$data['access_levels'] = $this->access_levels_model->get_access_levels_list();
					$data['page_title'] = 'Access Levels | ';
					$data['main_content'] = 'be/access_levels';
					$this->load->view('be/includes/template',$data);
				}else{					
					$data['error'] = 'An error was encountered while tring to update this Access Level.';
					$data['access_level'] = $this->access_levels_model->get_access_level($access_level_id);
					$data['access_levels'] = $this->access_levels_model->get_access_levels_list();
					$data['page_title'] = 'Access Levels | ';
					$data['main_content'] = 'be/access_levels';
					$this->load->view('be/includes/template',$data);
				}
			}
			else{					
				$data['error'] = 'This Access Level already exists';
				$data['access_level'] = $this->access_levels_model->get_access_level($access_level_id);
				$data['access_levels'] = $this->access_levels_model->get_access_levels_list();
				$data['page_title'] = 'Access Levels | ';
				$data['main_content'] = 'be/access_levels';
				$this->load->view('be/includes/template',$data);
			}
		}			
	}
	function delete($access_level_id){
		if($this->session->userdata('nhub_loginstate')){
			$q = $this->access_levels_model->delete_access_level($access_level_id);
			if($q['res'] == TRUE){
				$this->index();
			}else{					
				$this->index();			
			}
		}else{
            redirect('be/auth');
		}
	}
}

