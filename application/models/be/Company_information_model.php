<?php
class Company_information_model extends CI_Model {
	
	/*function get_company_information_list(){
		$this->db->from('company_information');
		$this->db->where( array('is_deleted'=>0));
		return $this->db->get()->result();
	}*/
	function save($data){
		$insert = $this->db->insert('company_information', $data);
		if ($insert){
			$arr_return = array('res' => true,'dt' => 'Company added successfully.');
		}else{
			$arr_return = array('res' => false,'dt' => 'Could not add company successfully. Please try again.');
		}
		return $arr_return;
	}
	/*function company_exists($company_name){
		$this->db->where('company_name',$company_name);
		$this->db->where('is_deleted',0);
		$query = $this->db->get('company_information');
		if ($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}

	}
	function get_company($company_id){
		$this->db->from('company_information');
		$this->db->where( array('company_id'=>$company_id));
		return $this->db->get()->result_array();
	}
	function company_update_exists($company_id,$company_name){
		$q = $this->db->query("SELECT * FROM company_information WHERE company_id != ".$company_id." AND company_name = '$company_name' AND is_deleted = 0");
		if ($q->num_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}*/
	function update($data,$company_id){
		$this->db->where(array('company_id'=>$company_id));
		$update = $this->db->update('company_information', $data);
		if ($update){
			$arr_return = array('res' => true,'dt' => 'Company updated successfully.');
		}else{
			$arr_return = array('res' => false,'dt' => 'Could not update company successfully. Please try again.');
		}
		return $arr_return;
	}
	/*function delete($company_id){
		$data = array(
			'is_deleted'=> 1
		);			
		$this->db->where( array('company_id'=>$company_id));
		$delupdate = $this->db->update('company_information', $data);
		
		if ($delupdate){
			$arr_return = array('res' => true,'dt'=>'company deleted successfully');
		}else{
			$arr_return = array('res' => false,'dt' => 'Error deleting company');
		}
		return $arr_return;
	}*/


}