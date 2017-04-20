<?php
class Properties_model extends CI_Model {
	
	function get_properties_list(){
		$this->db->from('properties');
		$this->db->where( array('is_deleted'=>0));
		return $this->db->get()->result();
	}

	function generate_property_sku($length = 7) {
    	$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    	$randomString = '';
    	for ($i = 0; $i < $length; $i++) {
       	$randomString .= $characters[rand(0, strlen($characters) - 1)];
    	}
    	return $randomString;
	}
	
	function get_property_sku(){
		$property_sku = $this->generate_property_sku();
		$checktrue = $this->check_sku_exists($property_sku);
		while ($checktrue == true){
			$property_sku = $this->generate_property_sku();
			$checktrue = $this->check_sku_exists($property_sku);
		}
		return $property_sku;
	}
	function check_sku_exists($sku){
		$this->db->from('properties');
		$this->db->where( array('property_sku'=>$sku));
		$numrows = $this->db->get()->num_rows();
		if ($numrows > 0){
			return true;
		}else{
			return false;
		}
	}

	function save_property($save_data){
		$err = '';
		$insert = $this->db->insert('properties', $save_data);
		$insert_id = $this->db->insert_id();
		if ($insert){
			if ($this->session->userdata('property_feature_id')){
				if ($this->session->userdata('property_feature_id') != ''){
					$this->save_property_features($insert_id);
				}
			}
			
			/*//Main Image
			$q = $this->upload_main_image($insert_id);
			if ($q['res'] == false){ $err = $err . '<br />' . $q['dt']; }
			//Other Image 1
			$q = $this->upload_other_images($insert_id);
			if ($q['res'] == false){ $err = $err . '<br />' . $q['dt']; }*/
						
		}else{
			$err = 'Could not publish the property successfully. Please try again.';
		}

		if ($err == ''){
			$arr_return = array('res' => true,'dt' => 'Property published successfully');
		}else{
			$arr_return = array('res' => false,'dt' => $err);
		}
		return $arr_return;

	}
	function save_property_features($property_id){
		$property_feature_id = $this->session->userdata('property_feature_id');		
		foreach ($property_feature_id as $temp_id){
			//$parent_cat_id = $this->get_parent_cat_id($temp_cat_id);
			$new_feature_data = array(
				'property_id' => $property_id,
				'property_feature_id' => $temp_id
			);
			$insert = $this->db->insert('property_listing_features', $new_feature_data);
		}				
	}

	//UPLOAD MAIN IMAGE
	function upload_main_image($property_id){
		if(basename($_FILES['main_image']['name'])!=''){
			
			$upload_config['upload_path'] = './uploads/property_images/';
			$upload_config['allowed_types'] = 'gif|jpg|jpeg|png';
			//$upload_config['file_name'] = $imagefilename;
			$upload_config['max_size']	= '0';
			$upload_config['max_width']  = '0';
			$upload_config['max_height']  = '0';
			
			$this->load->library('upload');
			$this->upload->initialize($upload_config);
			
			$q = $this->upload->do_upload('main_image');
		
			if($q){				
				$det = $this->upload->data();					
				$this->db->where(array('property_id'=>$property_id));
				$this->db->update('properties', array('main_image' => $det['file_name']));
				$arr_return = array('res' => true,'dt' => 'Main image uploaded successfully');
			}else{
				$arr_return = array('res' => false,'dt' => $this->upload->display_errors());
			}
		}else{
			$arr_return = array('res' => true,'dt' => 'Main image uploaded successfully');
		}
		return $arr_return;
	}

	//UPLOAD MAIN IMAGE
	function upload_other_images($property_id){
		for ($i = 1; $i <= 5; $i++) {
			if(basename($_FILES['other_image_'.$i]['name'])!=''){
				
				$upload_config['upload_path'] = './uploads/property_images/';
				$upload_config['allowed_types'] = 'gif|jpg|jpeg|png';
				//$upload_config['file_name'] = $imagefilename;
				$upload_config['max_size']	= '0';
				$upload_config['max_width']  = '0';
				$upload_config['max_height']  = '0';
				
				$this->load->library('upload');
				$this->upload->initialize($upload_config);
				
				$q = $this->upload->do_upload('other_image_'.$i);
			
				if($q){				
					$det = $this->upload->data();					
					$this->db->where(array('property_id'=>$property_id));
					$this->db->update('properties', array('other_image_'.$i => $det['file_name']));
					$arr_return = array('res' => true,'dt' => 'Image $i uploaded successfully');
				}else{
					$arr_return = array('res' => false,'dt' => 'Image $i :' . $this->upload->display_errors());
				}
			}else{
				$arr_return = array('res' => true,'dt' => 'Image $i uploaded successfully');
			}    		
		} 

		return $arr_return;
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