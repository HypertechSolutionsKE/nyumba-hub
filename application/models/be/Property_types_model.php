<?php
class Property_types_model extends CI_Model {
	
	function get_property_types_list(){
		$this->db->from('property_types');
		$this->db->where( array('is_deleted'=>0));
		return $this->db->get()->result();
	}
	function save($data){
		$insert = $this->db->insert('property_types', $data);
		if ($insert){
			$arr_return = array('res' => true,'dt' => 'Property Type added successfully.');
		}else{
			$arr_return = array('res' => false,'dt' => 'Could not add Property Type successfully. Please try again.');
		}
		return $arr_return;
	}
	function property_type_exists($property_type_name){
		$this->db->where('property_type_name',$property_type_name);
		$this->db->where('is_deleted',0);
		$query = $this->db->get('property_types');
		if ($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}

	}
	function get_property_type($property_type_id){
		$this->db->from('property_types');
		$this->db->where( array('property_type_id'=>$property_type_id));
		return $this->db->get()->result_array();
	}
	function property_type_update_exists($property_type_id,$property_type_name){
		$q = $this->db->query("SELECT * FROM property_types WHERE property_type_id != ".$property_type_id." AND property_type_name = '$property_type_name' AND is_deleted = 0");
		if ($q->num_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}	
	function update($data,$property_type_id){
		$this->db->where(array('property_type_id'=>$property_type_id));
		$update = $this->db->update('property_types', $data);
		if ($update){
			$arr_return = array('res' => true,'dt' => 'Property Type updated successfully.');
		}else{
			$arr_return = array('res' => false,'dt' => 'Could not update Property Type successfully. Please try again.');
		}
		return $arr_return;
	}
	function delete($property_type_id){
		$data = array(
			'is_deleted'=> 1
		);			
		$this->db->where( array('property_type_id'=>$property_type_id));
		$delupdate = $this->db->update('property_types', $data);
		
		if ($delupdate){
			$arr_return = array('res' => true,'dt'=>'Property Type deleted successfully');
		}else{
			$arr_return = array('res' => false,'dt' => 'Error deleting Property Type');
		}
		return $arr_return;
	}


}