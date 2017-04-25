	<?php
class Properties_model extends CI_Model {
	
	function get_properties_list(){
		$this->db->from('properties');
		$this->db->join('listing_types', 'listing_types.listing_type_id=properties.listing_type_id', 'left outer');
		$this->db->join('property_types', 'property_types.property_type_id=properties.property_type_id', 'left outer');
		$this->db->join('property_subcategories', 'property_subcategories.property_subcategory_id=properties.property_subcategory_id', 'left outer');
		$this->db->join('regions', 'regions.region_id=properties.region_id', 'left outer');
		$this->db->join('cities', 'cities.city_id=properties.city_id', 'left outer');
		$this->db->join('areas', 'areas.area_id=properties.area_id', 'left outer');
		$this->db->where( array('properties.is_deleted'=>0));
		return $this->db->get()->result();
	}

	function get_properties_filtered_list(){
		$listing_type_id = $this->input->post('pl_listing_type_id');
		$property_type_id = $this->input->post('pl_property_type_id');
		$property_subcategory_id = $this->input->post('pl_property_subcategory_id');
		$region_id = $this->input->post('pl_region_id');
		$city_id = $this->input->post('pl_city_id');
		$area_id = $this->input->post('pl_area_id');
		$date_from = $this->input->post('pl_date_from');
		$date_to = $this->input->post('pl_date_to');
		$featured = $this->input->post('pl_featured');
		$publish_status = $this->input->post('pl_publish_status');

		$this->db->from('properties');
		$this->db->join('listing_types', 'listing_types.listing_type_id=properties.listing_type_id', 'left outer');
		$this->db->join('property_types', 'property_types.property_type_id=properties.property_type_id', 'left outer');
		$this->db->join('property_subcategories', 'property_subcategories.property_subcategory_id=properties.property_subcategory_id', 'left outer');
		$this->db->join('regions', 'regions.region_id=properties.region_id', 'left outer');
		$this->db->join('cities', 'cities.city_id=properties.city_id', 'left outer');
		$this->db->join('areas', 'areas.area_id=properties.area_id', 'left outer');

		if ($listing_type_id != ''){$this->db->where( array('properties.listing_type_id'=>$listing_type_id));}
		if ($property_type_id != ''){$this->db->where( array('properties.property_type_id'=>$property_type_id));}
		if ($property_subcategory_id != ''){$this->db->where( array('properties.property_subcategory_id'=>$property_subcategory_id));}
		if ($region_id != ''){$this->db->where( array('properties.region_id'=>$region_id));}
		if ($city_id != ''){$this->db->where( array('properties.city_id'=>$city_id));}
		if ($area_id != ''){$this->db->where( array('properties.area_id'=>$area_id));}
		if ($date_from != '' && $date_to != ''){
			$this->db->where('properties.created_on >= ',date('Y-m-d', strtotime($date_from)));
			$this->db->where('properties.created_on <= ',date('Y-m-d', strtotime($date_to)));
		}
		if ($featured != 'All' && $featured != ''){$this->db->where( array('properties.featured'=>$featured));}
		if ($publish_status != 'All' && $publish_status != ''){$this->db->where( array('properties.publish_status'=>$publish_status));}


		$this->db->where( array('properties.is_deleted'=>0));
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
		$err2 = '';
		$insert = $this->db->insert('properties', $save_data);
		$insert_id = $this->db->insert_id();
		if ($insert){
			if ($this->session->userdata('property_feature_id')){
				if ($this->session->userdata('property_feature_id') != ''){
					$this->save_property_features($insert_id);
				}
			}
			
			//Main Image
			$q = $this->upload_main_image($insert_id);
			if ($q['res'] == false){ $err2 = $err2 . '<br />' . $q['dt']; }
			//Other Image 1
			$q = $this->upload_other_images($insert_id);
			if ($q['res'] == false){ $err2 = $err2 . '<br />' . $q['dt']; }
						
		}else{
			$err = 'Could not publish the property successfully. Please try again.';
		}

		if ($err == ''){
			if ($err2 == ''){
				$arr_return = array('res' => true,'dt' => 'Property published successfully');
			}else{
				$arr_return = array('res' => true,'dt' => 'Property published successfully' . $err2);
			}
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
		$this->db->where(array('property_id'=>$property_id));
		return $this->db->get()->result_array();
	}


	function get_property2($property_id){
		$this->db->from('properties');
		$this->db->where(array('property_id'=>$property_id));
		return $this->db->get()->result();
	}

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
		$data = array('is_deleted'=> 1);			
		$this->db->where( array('property_id'=>$property_id));
		$delupdate = $this->db->update('properties', $data);
		
		if ($delupdate){
			$arr_return = array('res' => true,'dt'=>'Property deleted successfully');
		}else{
			$arr_return = array('res' => false,'dt' => 'Error deleting property');
		}
		return $arr_return;
	}
	function set_online($property_id){
		$data = array('publish_status'=> 'Online');			
		$this->db->where(array('property_id'=>$property_id));
		$res = $this->db->update('properties', $data);
		
		if ($res){
			$arr_return = array('res' => true,'dt'=>'Property publish status changed successfully');
		}else{
			$arr_return = array('res' => false,'dt' => 'Error changing property publish status');
		}
		return $arr_return;
	}
	function set_offline($property_id){
		$data = array('publish_status'=> 'Offline');			
		$this->db->where(array('property_id'=>$property_id));
		$res = $this->db->update('properties', $data);
		
		if ($res){
			$arr_return = array('res' => true,'dt'=>'Property publish status changed successfully');
		}else{
			$arr_return = array('res' => false,'dt' => 'Error changing property publish status');
		}
		return $arr_return;
	}
	function set_featured($property_id){
		$data = array('featured'=> 'Yes');			
		$this->db->where(array('property_id'=>$property_id));
		$res = $this->db->update('properties', $data);
		
		if ($res){
			$arr_return = array('res' => true,'dt'=>'Property featured status changed successfully');
		}else{
			$arr_return = array('res' => false,'dt' => 'Error changing property featured status');
		}
		return $arr_return;
	}
	function unset_featured($property_id){
		$data = array('featured'=> 'No');			
		$this->db->where( array('property_id'=>$property_id));
		$res = $this->db->update('properties', $data);
		
		if ($res){
			$arr_return = array('res' => true,'dt'=>'Property featured status changed successfully');
		}else{
			$arr_return = array('res' => false,'dt' => 'Error changing property featured status');
		}
		return $arr_return;
	}


}