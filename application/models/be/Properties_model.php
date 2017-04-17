<?php
class Properties_model extends CI_Model {
	
	function get_properties_list(){
		$this->db->from('properties');
		$this->db->where( array('is_deleted'=>0));
		return $this->db->get()->result();
	}
	function save($data){
		$insert = $this->db->insert('properties', $data);
		if ($insert){
			$arr_return = array('res' => true,'dt' => 'property added successfully.');
		}else{
			$arr_return = array('res' => false,'dt' => 'Could not add property successfully. Please try again.');
		}
		return $arr_return;
	}
	//ADD EXISTS
	function property_exists($country_name,$country_code,$property_name,$property_symbol){
		$err = "";
		$query = $this->db->where(array('country_name'=>$country_name,'is_deleted'=>0))->get('properties');
		if ($query->num_rows() > 0){$err = $err . "The country name you entered already exists for another property.<br />";}
		
		$query = $this->db->where(array('country_code'=>$country_code,'is_deleted'=>0))->get('properties');
		if ($query->num_rows() > 0){$err = $err . "The country code you entered already exists for another property.<br />";}
		
		$query = $this->db->where(array('property_name'=>$property_name,'is_deleted'=>0))->get('properties');
		if ($query->num_rows() > 0){$err = $err . "The property name you entered already exists for another property.<br />";}
		
		$query = $this->db->where(array('property_symbol'=>$property_symbol,'is_deleted'=>0))->get('properties');
		if ($query->num_rows() > 0){$err = $err . "The property symbol you entered already exists for another property.<br />";}
		
		if ($err == ""){
			$arr_return = array('res' => true,'dt' => '');
		}else{
			$arr_return = array('res' => false,'dt' => $err);
		}
		return $arr_return;
	}

	function get_property($property_id){
		$this->db->from('properties');
		$this->db->where( array('property_id'=>$property_id));
		return $this->db->get()->result_array();
	}
	/*function property_update_exists($property_id,$property_name){
		$q = $this->db->query("SELECT * FROM properties WHERE property_id != ".$property_id." AND property_name = '$property_name' AND is_deleted = 0");
		if ($q->num_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}	*/
	function property_update_exists($property_id,$country_name,$country_code,$property_name,$property_symbol){
		$err = "";
		$query = $this->db->where(array('property_id !='=>$property_id,'country_name'=>$country_name,'is_deleted'=>0))->get('properties');
		if ($query->num_rows() > 0){$err = $err . "The country name you entered already exists for another property.<br />";}
		
		$query = $this->db->where(array('property_id !='=>$property_id,'country_code'=>$country_code,'is_deleted'=>0))->get('properties');
		if ($query->num_rows() > 0){$err = $err . "The country code you entered already exists for another property.<br />";}
		
		$query = $this->db->where(array('property_id !='=>$property_id,'property_name'=>$property_name,'is_deleted'=>0))->get('properties');
		if ($query->num_rows() > 0){$err = $err . "The property name you entered already exists for another property.<br />";}
		
		$query = $this->db->where(array('property_id !='=>$property_id,'property_symbol'=>$property_symbol,'is_deleted'=>0))->get('properties');
		if ($query->num_rows() > 0){$err = $err . "The property symbol you entered already exists for another property.<br />";}
		
		if ($err == ""){
			$arr_return = array('res' => true,'dt' => '');
		}else{
			$arr_return = array('res' => false,'dt' => $err);
		}
		return $arr_return;
	}

	function update($data,$property_id){
		$this->db->where(array('property_id'=>$property_id));
		$update = $this->db->update('properties', $data);
		if ($update){
			$arr_return = array('res' => true,'dt' => 'property updated successfully.');
		}else{
			$arr_return = array('res' => false,'dt' => 'Could not update property successfully. Please try again.');
		}
		return $arr_return;
	}
	function delete($property_id){
		$data = array(
			'is_deleted'=> 1
		);			
		$this->db->where( array('property_id'=>$property_id));
		$delupdate = $this->db->update('properties', $data);
		
		if ($delupdate){
			$arr_return = array('res' => true,'dt'=>'property deleted successfully');
		}else{
			$arr_return = array('res' => false,'dt' => 'Error deleting property');
		}
		return $arr_return;
	}


}