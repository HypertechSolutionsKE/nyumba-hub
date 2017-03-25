<?php
class Access_levels_model extends CI_Model {
	
	function get_access_levels_list(){
		$this->db->from('access_levels');
		$this->db->where( array('is_deleted'=>0));
		return $this->db->get()->result();
	}
	
	function save_access_level(){	
		$new_insert_data = array(
			'access_level_name' => $this->input->post('access_level_name'),
			'access_level_description' => $this->input->post('access_level_description')
		);		
		$insert = $this->db->insert('access_levels', $new_insert_data);
		return $insert;
	}	
	function access_level_exists(){
		$this->db->where('access_level_name',$this->input->post('access_level_name'));
		$this->db->where('is_deleted',0);
		$query = $this->db->get('access_levels');
		if ($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	function get_access_level($access_level_id){
		$this->db->from('access_levels');
		$this->db->where( array('access_level_id'=>$access_level_id));
		$results = $this->db->get();
		return $results->result();
	}	
	function access_level_update_exists($access_level_id){
		$accesslevelname = $this->input->post('access_level_name');
		$q = $this->db->query("SELECT * FROM access_levels WHERE access_level_id != ".$access_level_id." AND access_level_name = '$accesslevelname' AND is_deleted = 0");
		if ($q->num_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}	
	function update_access_level($access_level_id){
		$data = array(
			'access_level_name' => $this->input->post('access_level_name'),
			'access_level_description' => $this->input->post('access_level_description')
		);			
		$this->db->where( array('access_level_id'=>$access_level_id));
		$catup = $this->db->update('access_levels', $data);
		
		
		if ($catup == TRUE){
			return true;
		}else{
			return false;
		}
	}
	
	function delete_access_level($access_level_id){
		$data = array(
			'is_deleted'=> 1
		);			
		$this->db->where( array('access_level_id'=>$access_level_id));
		$catup = $this->db->update('access_levels', $data);
		
		if ($catup == TRUE){
			$arr_return = array('res' => TRUE);
			return $arr_return;
		}else{
			$arr_return = array('res' => FALSE,'dt' => 'Error deleting access level');
			return $arr_return;
		}
	}
	
}