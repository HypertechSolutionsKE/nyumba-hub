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
			$data['page_title'] = 'Properties Listing | ';
			$data['main_content'] = 'be/properties';
			$this->load->view('be/includes/template',$data);
        } 
		else {
            redirect('be/auth');
		}
	}
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

	function save_attachments_and_publish(){
		if($this->session->userdata('nhub_loginstate')) {
			if($this->session->userdata('property_title') && $this->session->userdata('property_type_id')) {
				if($this->session->userdata('description')) {
					if($this->session->userdata('full_name') && $this->session->userdata('email_address')) {
						
						$save_data = array(
							'application_date' => date('Y-m-d'),
							'loan_reference_id' => $loan_reference_id,
							'client_name' => $this->input->post('client_name'),
							'phone_number' => $this->input->post('phone_number'),
							'email_address' => $this->input->post('email_address'),
							'id_number' => $this->input->post('id_number'),
							'employer_name' => $this->input->post('employer_name'),
							'nature_of_business' => $this->input->post('nature_of_business'),
							'next_of_kin_name' => $this->input->post('next_of_kin_name'),
							'next_of_kin_phone' => $this->input->post('next_of_kin_phone'),
							'relationship' => $this->input->post('relationship'),
							'loan_amount' => $this->input->post('loan_amount'),
							'repayment_period' => $this->input->post('repayment_period'),
							'loan_purpose' => $this->input->post('loan_purpose'),
							'introduced_by_name' => $this->input->post('introduced_by_name'),
							'introduced_by_phone' => $this->input->post('introduced_by_phone')	
						);				








						//$data['page_title'] = 'Add Attachments - New Property | ';
						//$data['main_content'] = 'be/add_attachments';
						//$this->load->view('be/includes/template',$data);

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





	function save(){
		$country_name = $this->input->post('country_name');
		$country_code = $this->input->post('country_code');
		$property_name = $this->input->post('property_name');
		$property_symbol = $this->input->post('property_symbol');
		
		$e = $this->properties_model->property_exists($country_name,$country_code,$property_name,$property_symbol);

		if($e['res'] == true){
			$data = array(
				'country_name' => $country_name,
				'country_code' => $country_code,
				'property_name' => $property_name,
				'property_symbol' => $property_symbol			
			);
			$q = $this->properties_model->save($data);
			if ($q['res'] == true){
				$resp = array('status' => 'SUCCESS','message' => 'property added successfully.');
			}else{
				$resp = array('status' => 'ERR','message' => $q['dt']);
			}
		}else{
			$resp = array('status' => 'ERR','message' => $e['dt']);
		}
			
		echo json_encode($resp);
	}
	function loadjs(){
		$data['properties'] = $this->properties_model->get_properties_list();
		$this->load->view('be/jsloads/properties',$data);

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
				$resp = array('status' => 'SUCCESS','message' => 'property deleted successfully');			
			}else{					
				$resp = array('status' => 'ERR','message' => $q['dt']);			
			}
		}else{
			$resp = array('status' => 'ERR','message' => 'Your session seems to have expired. Please login again to continue');			
    	}
		echo json_encode($resp);
	}

}