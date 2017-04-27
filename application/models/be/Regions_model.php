<?php
class Regions_model extends CI_Model {
	
	function get_regions_list(){
		$this->db->from('regions');
		$this->db->where( array('is_deleted'=>0));
		return $this->db->get()->result();
	}
	function save($data){
		$insert = $this->db->insert('regions', $data);
		if ($insert){
			$arr_return = array('res' => true,'dt' => 'Region added successfully.');
		}else{
			$arr_return = array('res' => false,'dt' => 'Could not add Region successfully. Please try again.');
		}
		return $arr_return;
	}
	function region_exists($region_name){
		$this->db->where('region_name',$region_name);
		$this->db->where('is_deleted',0);
		$query = $this->db->get('regions');
		if ($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}

	}
	function get_region($region_id){
		$this->db->from('regions');
		$this->db->where( array('region_id'=>$region_id));
		return $this->db->get()->result_array();
	}
	function region_update_exists($region_id,$region_name){
		$q = $this->db->query("SELECT * FROM regions WHERE region_id != ".$region_id." AND region_name = '$region_name' AND is_deleted = 0");
		if ($q->num_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}	
	function update($data,$region_id){
		$this->db->where(array('region_id'=>$region_id));
		$update = $this->db->update('regions', $data);
		if ($update){
			$arr_return = array('res' => true,'dt' => 'Region updated successfully.');
		}else{
			$arr_return = array('res' => false,'dt' => 'Could not update Region successfully. Please try again.');
		}
		return $arr_return;
	}
	function delete($region_id){
		$data = array(
			'is_deleted'=> 1
		);			
		$this->db->where( array('region_id'=>$region_id));
		$delupdate = $this->db->update('regions', $data);
		
		if ($delupdate){
			$arr_return = array('res' => true,'dt'=>'Region deleted successfully');
		}else{
			$arr_return = array('res' => false,'dt' => 'Error deleting Region');
		}
		return $arr_return;
	}


}