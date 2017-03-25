<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Departments extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');	
		//$this->load->model('be/main_model');
		$this->load->model('be/departments_model');
	}

	function index(){
		if($this->session->userdata('nhub_loginstate')) {
			$data['departments'] = $this->departments_model->get_departments_list();
			$data['page_title'] = 'Departments | ';
			$data['main_content'] = 'be/departments';
			$this->load->view('be/includes/template',$data);
        } 
		else {
            redirect('be/auth');
		}
	}
	function save(){
		$this->form_validation->set_rules('department_name', 'Department Name', 'trim|required');
		$this->form_validation->set_rules('department_description', 'Department Description', 'trim');
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			if($this->departments_model->Department_exists() == false){
				if($this->departments_model->save_Department()){
					$data['success'] = 'Department added successfully';
					$data['departments'] = $this->departments_model->get_departments_list();
					$data['page_title'] = 'Departments | ';
					$data['main_content'] = 'be/departments';
					$this->load->view('be/includes/template',$data);
				}else{					
					$data['error'] = 'There was an error saving the Department';
					$data['departments'] = $this->departments_model->get_departments_list();
					$data['page_title'] = 'Departments | ';
					$data['main_content'] = 'be/departments';
					$this->load->view('be/includes/template',$data);
				}
			}else{					
				$data['error'] = 'This Department already exists';
				$data['departments'] = $this->departments_model->get_departments_list();
				$data['page_title'] = 'Departments | ';
				$data['main_content'] = 'be/departments';
				$this->load->view('be/includes/template',$data);
			}
		}
		
	}
	function edit($Department_id){
		if($this->session->userdata('nhub_loginstate')){
			$data['Department'] = $this->departments_model->get_Department($Department_id);
			$data['departments'] = $this->departments_model->get_departments_list();
			$data['page_title'] = 'Departments | ';
			$data['main_content'] = 'be/departments';
			$this->load->view('be/includes/template',$data);
		}else{
            redirect('be/auth');
		}
	}
	function update($Department_id){
		$this->form_validation->set_rules('department_name', 'Department Name', 'trim|required');
		$this->form_validation->set_rules('department_description', 'Department Description', 'trim');
		if($this->form_validation->run() == FALSE){
			$this->edit($Department_id);
		}else{
			if($this->departments_model->Department_update_exists($Department_id) == false){
				$q = $this->departments_model->update_Department($Department_id);
				if($q){
					$data['success'] = 'Department updated successfully';
					$data['Department'] = $this->departments_model->get_Department($Department_id);
					$data['departments'] = $this->departments_model->get_departments_list();
					$data['page_title'] = 'Departments | ';
					$data['main_content'] = 'be/departments';
					$this->load->view('be/includes/template',$data);
				}else{					
					$data['error'] = 'An error was encountered while tring to update this Department.';
					$data['Department'] = $this->departments_model->get_Department($Department_id);
					$data['departments'] = $this->departments_model->get_departments_list();
					$data['page_title'] = 'Departments | ';
					$data['main_content'] = 'be/departments';
					$this->load->view('be/includes/template',$data);
				}
			}
			else{					
				$data['error'] = 'This Department already exists';
				$data['Department'] = $this->departments_model->get_Department($Department_id);
				$data['departments'] = $this->departments_model->get_departments_list();
				$data['page_title'] = 'Departments | ';
				$data['main_content'] = 'be/departments';
				$this->load->view('be/includes/template',$data);
			}
		}			
	}
	function delete($Department_id){
		if($this->session->userdata('nhub_loginstate')){
			$q = $this->departments_model->delete_Department($Department_id);
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

