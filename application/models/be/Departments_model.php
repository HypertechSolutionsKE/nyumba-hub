<?php
class Departments_model extends CI_Model {
	
	function get_departments_list(){
		$this->db->from('departments');
		$this->db->where( array('is_deleted'=>0));
		return $this->db->get()->result();
	}
	
	function save_department(){	
		$new_insert_data = array(
			'department_name' => $this->input->post('department_name'),
			'department_description' => $this->input->post('department_description')
		);		
		$insert = $this->db->insert('departments', $new_insert_data);
		return $insert;
	}	
	function department_exists(){
		$this->db->where('department_name',$this->input->post('department_name'));
		$this->db->where('is_deleted',0);
		$query = $this->db->get('departments');
		if ($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	function get_department($department_id){
		$this->db->from('departments');
		$this->db->where( array('department_id'=>$department_id));
		$results = $this->db->get();
		return $results->result();
	}	
	function department_update_exists($department_id){
		$departmentname = $this->input->post('department_name');
		$q = $this->db->query("SELECT * FROM departments WHERE department_id != ".$department_id." AND department_name = '$departmentname' AND is_deleted = 0");
		if ($q->num_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}	
	function update_department($department_id){
		$data = array(
			'department_name' => $this->input->post('department_name'),
			'department_description' => $this->input->post('department_description')
		);			
		$this->db->where( array('department_id'=>$department_id));
		$catup = $this->db->update('departments', $data);
		
		
		if ($catup == TRUE){
			return true;
		}else{
			return false;
		}
	}
	
	function delete_department($department_id){
		$data = array(
			'is_deleted'=> 1
		);			
		$this->db->where( array('department_id'=>$department_id));
		$catup = $this->db->update('departments', $data);
		
		if ($catup == TRUE){
			$arr_return = array('res' => TRUE);
			return $arr_return;
		}else{
			$arr_return = array('res' => FALSE,'dt' => 'Error deleting department');
			return $arr_return;
		}
	}
	
}