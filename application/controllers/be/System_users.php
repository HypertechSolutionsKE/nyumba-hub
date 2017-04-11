<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class System_users extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');	
		$this->load->model('be/system_users_model');
		$this->load->model('be/departments_model');
		$this->load->model('be/access_levels_model');
		
	}
	function index(){
		if($this->session->userdata('nhub_loginstate')) {
			$data['system_users'] = $this->system_users_model->get_system_users_list();
			$data['departments'] = $this->departments_model->get_departments_list();
			$data['access_levels'] = $this->access_levels_model->get_access_levels_list();

			$data['page_title'] = 'System Users | ';
			$data['main_content'] = 'be/system_users';
			$this->load->view('be/includes/template',$data);
        } 
		else {
            redirect('be/auth');
		}
	}
	function save(){
		$data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'phone_number' => $this->input->post('phone_number'),
			'user_password' => md5($this->input->post('user_password')),
			'email_address' => $this->input->post('email_address'),
			'gender' => $this->input->post('gender'),
			'department_id' => $this->input->post('department_id'),
			'access_level_id' => $this->input->post('access_level_id')
		);	
		$email_address = $this->input->post('email_address');
		if($this->system_users_model->system_user_exists($email_address) == false){
			$q = $this->system_users_model->save($data);
			if ($q['res'] == true){
				$resp = array('status' => 'SUCCESS','message' => 'System User added successfully.');
			}else{
				$resp = array('status' => 'ERR','message' => $q['dt']);
			}
		}else{
			$resp = array('status' => 'ERR','message' => 'This System User already exists in the database');
		}
			
		echo json_encode($resp);
	}
	function loadjs(){
		$data['system_users'] = $this->system_users_model->get_system_users_list();
		$this->load->view('be/jsloads/system_users',$data);

	}
	function get_system_user($user_id){
		$system_user = $this->system_users_model->get_system_user($user_id);
		echo json_encode($system_user);
	}
	function update(){
		$user_id = $this->input->post('user_id');
		$email_address = $this->input->post('
		$email_address');
		$data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'phone_number' => $this->input->post('phone_number'),
			'email_address' => $this->input->post('email_address'),
			'gender' => $this->input->post('gender'),
			'department_id' => $this->input->post('department_id'),
			'access_level_id' => $this->input->post('access_level_id')
		);	
		if($this->system_users_model->system_user_update_exists($user_id,$email_address) == false){
			$q = $this->system_users_model->update($data,$user_id);
			if ($q['res'] == true){
				$resp = array('status' => 'SUCCESS','message' => 'System User updated successfully.');
			}else{
				$resp = array('status' => 'ERR','message' => $q['dt']);
			}
		}else{
			$resp = array('status' => 'ERR','message' => 'This System User already exists in the database');
		}
		echo json_encode($resp);
	}
	function delete($system_user_id){
		if($this->session->userdata('nhub_loginstate')){
			$q = $this->system_users_model->delete($system_user_id);
			if($q['res'] == TRUE){
				$resp = array('status' => 'SUCCESS','message' => 'System User deleted successfully');			
			}else{					
				$resp = array('status' => 'ERR','message' => $q['dt']);			
			}
		}else{
			$resp = array('status' => 'ERR','message' => 'Your session seems to have expired. Please login again to continue');			
    	}
		echo json_encode($resp);
	}


}