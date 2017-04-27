<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Properties extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');	
		$this->load->model('be/properties_model');
		$this->load->model('be/property_types_model');
		$this->load->model('be/regions_model');
		$this->load->model('be/currencies_model');
		$this->load->model('be/listing_types_model');
		$this->load->model('be/property_feature_types_model');
		$this->load->model('be/property_features_model');
	}
	function index(){
		if($this->session->userdata('nhub_loginstate')) {
			$data['listing_types'] = $this->listing_types_model->get_listing_types_list();
			$data['currencies'] = $this->currencies_model->get_currencies_list();			
			$data['regions'] = $this->regions_model->get_regions_list();
			$data['property_types'] = $this->property_types_model->get_property_types_list();

			$data['properties'] = $this->properties_model->get_properties_list();
			$data['page_title'] = 'Properties Listing | ';
			$data['main_content'] = 'be/properties_list';
			$this->load->view('be/includes/template',$data);
        } 
		else {
            redirect('be/auth');
		}
	}
	function loadjs(){
		$data['properties'] = $this->properties_model->get_properties_list();
		$this->load->view('be/jsloads/properties_list',$data);
	}
	function loadjs_filtered(){
		$data['properties'] = $this->properties_model->get_properties_filtered_list();
		$this->load->view('be/jsloads/properties_list',$data);		
	}
	//ADD PROPERTY LISTING
	function add_start(){
		if($this->session->userdata('nhub_loginstate')) {
			$data['listing_types'] = $this->listing_types_model->get_listing_types_list();
			$data['currencies'] = $this->currencies_model->get_currencies_list();			
			$data['regions'] = $this->regions_model->get_regions_list();
			$data['property_types'] = $this->property_types_model->get_property_types_list();
			$data['page_title'] = 'Start - New Property | ';
			$data['main_content'] = 'be/add_start';
			$this->load->view('be/includes/template',$data);
        } 
		else {
            redirect('be/auth');
		}
	}
	function save_start(){
		$this->session->set_userdata(array(
			'listing_type_id'			=> $this->input->post('listing_type_id'),
            'property_title'			=> $this->input->post('property_title'),
            'property_type_id'			=> $this->input->post('property_type_id'),
            'property_subcategory_id'	=> $this->input->post('property_subcategory_id'),
            'region_id'					=> $this->input->post('region_id'),
            'city_id'					=> $this->input->post('city_id'),
            'area_id'					=> $this->input->post('area_id'),
            'physical_address'			=> $this->input->post('physical_address'),
            'longitude'					=> $this->input->post('longitude'),
            'latitude'					=> $this->input->post('latitude'),
            'price'						=> $this->input->post('price'),
            'currency_id'				=> $this->input->post('currency_id')
       	));
		
		$resp = array('status' => 'SUCCESS','message' => '');
		echo json_encode($resp);
	}

	function add_features(){
		if($this->session->userdata('nhub_loginstate')) {
			if($this->session->userdata('property_title') && $this->session->userdata('property_type_id')) {
				$data['property_type'] = $this->property_types_model->get_property_type2($this->session->userdata('property_type_id'));
				$data['property_feature_types'] = $this->property_feature_types_model->get_property_feature_types_list2();
				$data['property_features'] = $this->property_features_model->get_property_features_list();

				$data['page_title'] = 'Features - New Property | ';
				$data['main_content'] = 'be/add_features';
				$this->load->view('be/includes/template',$data);			
			}else{
				redirect('be/properties/add_start');
			}
		}else {
            redirect('be/auth');
		}			
	}
	function save_features(){
		if (isset($_POST['bedrooms'])){$bedrooms = $this->input->post('bedrooms');}else{$bedrooms = '';}
		if (isset($_POST['bathrooms'])){$bathrooms = $this->input->post('bathrooms');}else{$bathrooms = '';}
		if (isset($_POST['total_rooms'])){$total_rooms = $this->input->post('total_rooms');}else{$total_rooms = '';}
		if (isset($_POST['living_area'])){$living_area = $this->input->post('living_area');}else{$living_area = '';}
		if (isset($_POST['floor'])){$floor = $this->input->post('floor');}else{$floor = '';}
		if (isset($_POST['total_floors'])){$total_floors = $this->input->post('total_floors');}else{$total_floors = '';}
		if (isset($_POST['building_size'])){$building_size = $this->input->post('building_size');}else{$building_size = '';}
		if (isset($_POST['land_size'])){$land_size = $this->input->post('land_size');}else{$land_size = '';}
		if (isset($_POST['property_feature_id'])){$property_feature_id = $this->input->post('property_feature_id');}else{$property_feature_id = '';}
		
		$this->session->set_userdata(array(
			'bedrooms'					=> $bedrooms,
            'bathrooms'					=> $bathrooms,
            'total_rooms'				=> $total_rooms,
            'living_area'				=> $living_area,
            'floor'						=> $floor,
            'total_floors'				=> $total_floors,
            'building_size'				=> $building_size,
            'land_size'					=> $land_size,
            'description'				=> $this->input->post('description'),
            'available_from'			=> $this->input->post('available_from'),
            'build_year'				=> $this->input->post('build_year'),
            'car_spaces'				=> $this->input->post('car_spaces'),
            'fully_furnished'			=> $this->input->post('fully_furnished'),
            'property_feature_id'		=> $property_feature_id
       	));
		
		$resp = array('status' => 'SUCCESS','message' => '');
		echo json_encode($resp);
	}
	function add_contacts(){
		if($this->session->userdata('nhub_loginstate')) {
			if($this->session->userdata('property_title') && $this->session->userdata('property_type_id')) {
				if($this->session->userdata('description')) {

					$data['page_title'] = 'Contacts - New Property | ';
					$data['main_content'] = 'be/add_contacts';
					$this->load->view('be/includes/template',$data);
				}else{
					redirect('be/properties/add_features');
				}
			}else{
				redirect('be/properties/add_start');
			}
		}else {
            redirect('be/auth');
		}			
	}
	function save_contacts(){
		$this->session->set_userdata(array(
			'full_name'			=> $this->input->post('full_name'),
            'email_address'		=> $this->input->post('email_address'),
            'mobile_phone'		=> $this->input->post('mobile_phone'),
            'office_phone'		=> $this->input->post('office_phone'),
            'home_phone'		=> $this->input->post('home_phone')
       	));
		
		$resp = array('status' => 'SUCCESS','message' => '');
		echo json_encode($resp);
	}
	function add_attachments(){
		if($this->session->userdata('nhub_loginstate')) {
			if($this->session->userdata('property_title') && $this->session->userdata('property_type_id')) {
				if($this->session->userdata('description')) {
					if($this->session->userdata('full_name') && $this->session->userdata('email_address')) {
						$data['page_title'] = 'Add Attachments - New Property | ';
						$data['main_content'] = 'be/add_attachments';
						$this->load->view('be/includes/template',$data);

					}else{
						redirect('be/properties/add_contacts');
					}
				}else{
					redirect('be/properties/add_features');
				}
			}else{
				redirect('be/properties/add_start');
			}
		}else {
            redirect('be/auth');
		}			
	}

	function unset_variables(){
		$this->session->unset_userdata('listing_type_id');
		$this->session->unset_userdata('property_title');
		$this->session->unset_userdata('property_type_id');
		$this->session->unset_userdata('property_subcategory_id');
		$this->session->unset_userdata('region_id');
		$this->session->unset_userdata('city_id');
		$this->session->unset_userdata('area_id');
		$this->session->unset_userdata('physical_address');
		$this->session->unset_userdata('longitude');
		$this->session->unset_userdata('latitude');
		$this->session->unset_userdata('price');
		$this->session->unset_userdata('currency_id');
		$this->session->unset_userdata('bedrooms');
		$this->session->unset_userdata('bathrooms');
		$this->session->unset_userdata('total_rooms');
		$this->session->unset_userdata('living_area');
		$this->session->unset_userdata('floor');
		$this->session->unset_userdata('total_floors');
		$this->session->unset_userdata('building_size');
		$this->session->unset_userdata('land_size');
		$this->session->unset_userdata('description');
		$this->session->unset_userdata('available_from');
		$this->session->unset_userdata('build_year');
		$this->session->unset_userdata('car_spaces');
		$this->session->unset_userdata('fully_furnished');
		$this->session->unset_userdata('property_feature_id');		
		$this->session->unset_userdata('full_name');
		$this->session->unset_userdata('email_address');
		$this->session->unset_userdata('mobile_phone');
		$this->session->unset_userdata('home_phone');
		$this->session->unset_userdata('office_phone');
	}

	function save_attachments_and_publish(){
		if($this->session->userdata('nhub_loginstate')) {
			if($this->session->userdata('property_title') && $this->session->userdata('property_type_id')) {
				if($this->session->userdata('description')) {
					if($this->session->userdata('full_name') && $this->session->userdata('email_address')) {

						$property_sku = $this->properties_model->get_property_sku();
						$property_reference_id = url_title($this->session->userdata('property_title'),'-',TRUE) . '-' . strtolower($property_sku);
		
						$save_data = array(
							'property_reference_id' => $property_reference_id,
							'property_sku' => $property_sku,
							'listing_type_id' => $this->session->userdata('listing_type_id'),
							'property_title' => $this->session->userdata('property_title'),
							'property_type_id' => $this->session->userdata('property_type_id'),
							'property_subcategory_id' => $this->session->userdata('property_subcategory_id'),
							'region_id' => $this->session->userdata('region_id'),
							'city_id' => $this->session->userdata('city_id'),
							'area_id' => $this->session->userdata('area_id'),
							'physical_address' => $this->session->userdata('physical_address'),
							'longitude' => $this->session->userdata('longitude'),
							'latitude' => $this->session->userdata('latitude'),
							'price' => $this->session->userdata('price'),
							'currency_id' => $this->session->userdata('currency_id'),
							'bedrooms' => $this->session->userdata('bedrooms'),
							'bathrooms' => $this->session->userdata('bathrooms'),
							'total_rooms' => $this->session->userdata('total_rooms'),
							'living_area' => $this->session->userdata('living_area'),
							'floor' => $this->session->userdata('floor'),
							'total_floors' => $this->session->userdata('total_floors'),
							'building_size' => $this->session->userdata('building_size'),
							'land_size' => $this->session->userdata('land_size'),
							'description' => $this->session->userdata('description'),
							'available_from' => $this->session->userdata('available_from'),
							'build_year' => $this->session->userdata('build_year'),
							'car_spaces' => $this->session->userdata('car_spaces'),
							'fully_furnished' => $this->session->userdata('fully_furnished'),
							'full_name' => $this->session->userdata('full_name'),
							'email_address' => $this->session->userdata('email_address'),
							'mobile_phone' => $this->session->userdata('mobile_phone'),
							'home_phone' => $this->session->userdata('home_phone'),
							'office_phone' => $this->session->userdata('office_phone'),
							'publish_status' => $this->input->post('publish_status'),
							'featured' => $this->input->post('featured')
						);			


						$q = $this->properties_model->save_property($save_data);
						if ($q['res'] == true){
							$this->unset_variables();
							$this->session->set_flashdata('success',$q['dt']);

							$resp = array('status' => 'SUCCESS','message' => $q['dt']);
						}else{
							$resp = array('status' => 'ERR','message' => '<strong>'. $q['dt'] .'</strong>');
						}
						echo json_encode($resp);



					}else{
						redirect('be/properties/add_contacts');
					}
				}else{
					redirect('be/properties/add_features');
				}
			}else{
				redirect('be/properties/add_start');
			}
		}else {
            redirect('be/auth');
		}

	}
	function upload_main_image(){
		$property_id = $this->input->post('property_main_image_id');		
		$q = $this->properties_model->upload_main_image2($property_id);
		if ($q['res'] == true){
			$resp = array('status' => 'SUCCESS','message' => 'Main Image uploaded successfully.');
		}else{
			$resp = array('status' => 'ERR','message' => $q['dt']);
		}
		echo json_encode($resp);
	}
	function upload_other_image($imageid){
		$property_id = $this->input->post('property_other_image_'.$imageid.'_id');		
		$q = $this->properties_model->upload_other_image2($property_id,$imageid);
		if ($q['res'] == true){
			$resp = array('status' => 'SUCCESS','message' => 'Other image uploaded successfully.');
		}else{
			$resp = array('status' => 'ERR','message' => $q['dt']);
		}
		echo json_encode($resp);
	}

	//EDIT PROPERTY LISTING
	function edit_start($property_id){
		if($this->session->userdata('nhub_loginstate')) {
			$data['property'] = $this->properties_model->get_property2($property_id);
			$data['listing_types'] = $this->listing_types_model->get_listing_types_list();
			$data['currencies'] = $this->currencies_model->get_currencies_list();			
			$data['regions'] = $this->regions_model->get_regions_list();
			$data['property_types'] = $this->property_types_model->get_property_types_list();
			$data['page_title'] = 'Edit Property - Start | ';
			$data['main_content'] = 'be/add_start';
			$this->load->view('be/includes/template',$data);
        }else{
            redirect('be/auth');
		}
	}
	function update_start(){
		$property_id = $this->input->post('property_id');
		$data = array(
			'listing_type_id'			=> $this->input->post('listing_type_id'),
            'property_title'			=> $this->input->post('property_title'),
            'property_type_id'			=> $this->input->post('property_type_id'),
            'property_subcategory_id'	=> $this->input->post('property_subcategory_id'),
            'region_id'					=> $this->input->post('region_id'),
            'city_id'					=> $this->input->post('city_id'),
            'area_id'					=> $this->input->post('area_id'),
            'physical_address'			=> $this->input->post('physical_address'),
            'longitude'					=> $this->input->post('longitude'),
            'latitude'					=> $this->input->post('latitude'),
            'price'						=> $this->input->post('price'),
            'currency_id'				=> $this->input->post('currency_id')
       	);		
		$q = $this->properties_model->update_start($data,$property_id);		
		if ($q['res'] == true){
			$resp = array('status' => 'SUCCESS','message' => $q['dt']);
		}else{
			$resp = array('status' => 'ERR','message' => $q['dt']);
		}
		echo json_encode($resp);
	}
	function edit_features($property_id){
		if($this->session->userdata('nhub_loginstate')) {
			$data['property'] = $this->properties_model->get_property2($property_id);
			$data['property_listing_features'] = $this->properties_model->get_property_listing_features($property_id);

			$property_type_id = $this->properties_model->get_property_type_id($property_id);
			$data['property_type'] = $this->property_types_model->get_property_type2($property_type_id);
			$data['property_feature_types'] = $this->property_feature_types_model->get_property_feature_types_list2();
			$data['property_features'] = $this->property_features_model->get_property_features_list();

			$data['page_title'] = 'Edit Property - Features | ';
			$data['main_content'] = 'be/add_features';
			$this->load->view('be/includes/template',$data);			
		}else {
            redirect('be/auth');
		}			
	}
	function update_features(){
		$property_id = $this->input->post('property_id');

		if (isset($_POST['bedrooms'])){$bedrooms = $this->input->post('bedrooms');}else{$bedrooms = '';}
		if (isset($_POST['bathrooms'])){$bathrooms = $this->input->post('bathrooms');}else{$bathrooms = '';}
		if (isset($_POST['total_rooms'])){$total_rooms = $this->input->post('total_rooms');}else{$total_rooms = '';}
		if (isset($_POST['living_area'])){$living_area = $this->input->post('living_area');}else{$living_area = '';}
		if (isset($_POST['floor'])){$floor = $this->input->post('floor');}else{$floor = '';}
		if (isset($_POST['total_floors'])){$total_floors = $this->input->post('total_floors');}else{$total_floors = '';}
		if (isset($_POST['building_size'])){$building_size = $this->input->post('building_size');}else{$building_size = '';}
		if (isset($_POST['land_size'])){$land_size = $this->input->post('land_size');}else{$land_size = '';}
		if (isset($_POST['property_feature_id'])){$property_feature_id = $this->input->post('property_feature_id');}else{$property_feature_id = '';}
		
		$data = array(
			'bedrooms'					=> $bedrooms,
            'bathrooms'					=> $bathrooms,
            'total_rooms'				=> $total_rooms,
            'living_area'				=> $living_area,
            'floor'						=> $floor,
            'total_floors'				=> $total_floors,
            'building_size'				=> $building_size,
            'land_size'					=> $land_size,
            'description'				=> $this->input->post('description'),
            'available_from'			=> $this->input->post('available_from'),
            'build_year'				=> $this->input->post('build_year'),
            'car_spaces'				=> $this->input->post('car_spaces'),
            'fully_furnished'			=> $this->input->post('fully_furnished')
       	);
		
		$q = $this->properties_model->update_features($data,$property_id,$property_feature_id);		
		if ($q['res'] == true){
			$resp = array('status' => 'SUCCESS','message' => $q['dt']);
		}else{
			$resp = array('status' => 'ERR','message' => $q['dt']);
		}
		echo json_encode($resp);
	}
	function edit_contacts($property_id){
		if($this->session->userdata('nhub_loginstate')) {
			$data['property'] = $this->properties_model->get_property2($property_id);
			$data['page_title'] = 'Edit Property - Contacts | ';
			$data['main_content'] = 'be/add_contacts';
			$this->load->view('be/includes/template',$data);
		}else {
            redirect('be/auth');
		}			
	}
	function update_contacts(){
		$property_id = $this->input->post('property_id');

		$data = array(
			'full_name'			=> $this->input->post('full_name'),
            'email_address'		=> $this->input->post('email_address'),
            'mobile_phone'		=> $this->input->post('mobile_phone'),
            'office_phone'		=> $this->input->post('office_phone'),
            'home_phone'		=> $this->input->post('home_phone')
       	);
		$q = $this->properties_model->update_contacts($data,$property_id);		
		if ($q['res'] == true){
			$resp = array('status' => 'SUCCESS','message' => $q['dt']);
		}else{
			$resp = array('status' => 'ERR','message' => $q['dt']);
		}
		echo json_encode($resp);
	}

	function edit_attachments($property_id){
		if($this->session->userdata('nhub_loginstate')) {
			$data['property'] = $this->properties_model->get_property2($property_id);
			$data['page_title'] = 'Edit Property - Attachments | ';
			$data['main_content'] = 'be/add_attachments';
			$this->load->view('be/includes/template',$data);
		}else {
            redirect('be/auth');
		}			
	}
	function update_attachments(){
		$property_id = $this->input->post('property_id');

		$data = array(
			'publish_status'=> $this->input->post('publish_status'),
            'featured'		=> $this->input->post('featured')
       	);
		$q = $this->properties_model->update_attachments($data,$property_id);		
		if ($q['res'] == true){
			$this->session->set_flashdata('success',$q['dt']);
			$resp = array('status' => 'SUCCESS','message' => $q['dt']);
		}else{
			$resp = array('status' => 'ERR','message' => $q['dt']);
		}
		echo json_encode($resp);
	}


	function get_property($property_id){
		$property = $this->properties_model->get_property($property_id);
		echo json_encode($property);
	}
	function update(){
		$property_id = $this->input->post('property_id');
		$country_name = $this->input->post('country_name');
		$country_code = $this->input->post('country_code');
		$property_name = $this->input->post('property_name');
		$property_symbol = $this->input->post('property_symbol');

		$e = $this->properties_model->property_update_exists($property_id,$country_name,$country_code,$property_name,$property_symbol);

		if($e['res'] == true){
			$data = array(
				'country_name' => $country_name,
				'country_code' => $country_code,
				'property_name' => $property_name,
				'property_symbol' => $property_symbol			
			);

			$q = $this->properties_model->update($data,$property_id);
			if ($q['res'] == true){
				$resp = array('status' => 'SUCCESS','message' => 'property updated successfully.');
			}else{
				$resp = array('status' => 'ERR','message' => $q['dt']);
			}
		}else{
			$resp = array('status' => 'ERR','message' => $e['dt']);
		}
		echo json_encode($resp);
	}
	function delete($property_id){
		if($this->session->userdata('nhub_loginstate')){
			$q = $this->properties_model->delete($property_id);
			if($q['res'] == TRUE){
				$resp = array('status' => 'SUCCESS','message' => 'Property deleted successfully');			
			}else{					
				$resp = array('status' => 'ERR','message' => $q['dt']);			
			}
		}else{
			$resp = array('status' => 'ERR','message' => 'Your session seems to have expired. Please login again to continue');			
    	}
		echo json_encode($resp);
	}
	function set_online($property_id){
		if($this->session->userdata('nhub_loginstate')){
			$q = $this->properties_model->set_online($property_id);
			if($q['res'] == TRUE){
				$resp = array('status' => 'SUCCESS','message' => $q['dt']);			
			}else{					
				$resp = array('status' => 'ERR','message' => $q['dt']);			
			}
		}else{
			$resp = array('status' => 'ERR','message' => 'Your session seems to have expired. Please login again to continue');			
    	}
		echo json_encode($resp);
	}
	function set_offline($property_id){
		if($this->session->userdata('nhub_loginstate')){
			$q = $this->properties_model->set_offline($property_id);
			if($q['res'] == TRUE){
				$resp = array('status' => 'SUCCESS','message' => $q['dt']);			
			}else{					
				$resp = array('status' => 'ERR','message' => $q['dt']);			
			}
		}else{
			$resp = array('status' => 'ERR','message' => 'Your session seems to have expired. Please login again to continue');			
    	}
		echo json_encode($resp);
	}
	function set_featured($property_id){
		if($this->session->userdata('nhub_loginstate')){
			$q = $this->properties_model->set_featured($property_id);
			if($q['res'] == TRUE){
				$resp = array('status' => 'SUCCESS','message' => $q['dt']);			
			}else{					
				$resp = array('status' => 'ERR','message' => $q['dt']);			
			}
		}else{
			$resp = array('status' => 'ERR','message' => 'Your session seems to have expired. Please login again to continue');			
    	}
		echo json_encode($resp);
	}
	function unset_featured($property_id){
		if($this->session->userdata('nhub_loginstate')){
			$q = $this->properties_model->unset_featured($property_id);
			if($q['res'] == TRUE){
				$resp = array('status' => 'SUCCESS','message' => $q['dt']);			
			}else{					
				$resp = array('status' => 'ERR','message' => $q['dt']);			
			}
		}else{
			$resp = array('status' => 'ERR','message' => 'Your session seems to have expired. Please login again to continue');			
    	}
		echo json_encode($resp);
	}


}