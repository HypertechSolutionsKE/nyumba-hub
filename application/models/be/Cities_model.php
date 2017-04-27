<?php
class Cities_model extends CI_Model {
	
	function get_cities_list(){
		$this->db->from('cities');
		$this->db->join('regions', 'regions.region_id=cities.region_id');
		$this->db->where( array('cities.is_deleted'=>0));
		return $this->db->get()->result();
	}
	function get_cities_by_region($region_id){
		$query = $this->db->query("select city_id, city_name from cities where region_id = $region_id and is_deleted = 0"); ;
		//$this->db->from('cities');
		//$this->db->join('regions', 'regions.region_id=cities.region_id');
		//$this->db->where(array('cities.region_id'=>$region_id,'cities.is_deleted'=>0));
		return $query->result();

	}
	function save($data){
		$insert = $this->db->insert('cities', $data);
		if ($insert){
			$arr_return = array('res' => true,'dt' => 'City added successfully.');
		}else{
			$arr_return = array('res' => false,'dt' => 'Could not add City successfully. Please try again.');
		}
		return $arr_return;
	}
	function city_exists($city_name){
		$this->db->where('city_name',$city_name);
		$this->db->where('is_deleted',0);
		$query = $this->db->get('cities');
		if ($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}

	}
	function get_city($city_id){
		$this->db->from('cities');
		$this->db->where( array('city_id'=>$city_id));
		return $this->db->get()->result_array();
	}
	function city_update_exists($city_id,$city_name){
		$q = $this->db->query("SELECT * FROM cities WHERE city_id != ".$city_id." AND city_name = '$city_name' AND is_deleted = 0");
		if ($q->num_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}	
	function update($data,$city_id){
		$this->db->where(array('city_id'=>$city_id));
		$update = $this->db->update('cities', $data);
		if ($update){
			$arr_return = array('res' => true,'dt' => 'City updated successfully.');
		}else{
			$arr_return = array('res' => false,'dt' => 'Could not update City successfully. Please try again.');
		}
		return $arr_return;
	}
	function delete($city_id){
		$data = array(
			'is_deleted'=> 1
		);			
		$this->db->where( array('city_id'=>$city_id));
		$delupdate = $this->db->update('cities', $data);
		
		if ($delupdate){
			$arr_return = array('res' => true,'dt'=>'City deleted successfully');
		}else{
			$arr_return = array('res' => false,'dt' => 'Error deleting City');
		}
		return $arr_return;
	}


}