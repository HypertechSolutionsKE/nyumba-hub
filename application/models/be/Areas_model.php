<?php
class Areas_model extends CI_Model {
	
	function get_Areas_list(){
		$this->db->from('areas');
		$this->db->join('cities', 'cities.city_id=areas.city_id');
		$this->db->join('regions', 'regions.region_id=areas.region_id');	
		$this->db->where( array('areas.is_deleted'=>0));
		return $this->db->get()->result();
	}
	function save($data){
		$insert = $this->db->insert('areas', $data);
		if ($insert){
			$arr_return = array('res' => true,'dt' => 'Area added successfully.');
		}else{
			$arr_return = array('res' => false,'dt' => 'Could not add area successfully. Please try again.');
		}
		return $arr_return;
	}
	function area_exists($area_name){
		$this->db->where('area_name',$area_name);
		$this->db->where('is_deleted',0);
		$query = $this->db->get('areas');
		if ($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}

	}
	function get_area($area_id){
		$this->db->from('areas');
		$this->db->where( array('area_id'=>$area_id));
		return $this->db->get()->result_array();
	}
	function area_update_exists($area_id,$area_name){
		$q = $this->db->query("SELECT * FROM areas WHERE area_id != ".$area_id." AND area_name = '$area_name' AND is_deleted = 0");
		if ($q->num_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}	
	function update($data,$area_id){
		$this->db->where(array('area_id'=>$area_id));
		$update = $this->db->update('areas', $data);
		if ($update){
			$arr_return = array('res' => true,'dt' => 'Area updated successfully.');
		}else{
			$arr_return = array('res' => false,'dt' => 'Could not update Area successfully. Please try again.');
		}
		return $arr_return;
	}
	function delete($area_id){
		$data = array(
			'is_deleted'=> 1
		);			
		$this->db->where( array('area_id'=>$area_id));
		$delupdate = $this->db->update('areas', $data);
		
		if ($delupdate){
			$arr_return = array('res' => true,'dt'=>'Area deleted successfully');
		}else{
			$arr_return = array('res' => false,'dt' => 'Error deleting Area');
		}
		return $arr_return;
	}


}