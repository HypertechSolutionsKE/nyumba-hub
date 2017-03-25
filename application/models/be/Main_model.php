<?php
class Main_model extends CI_Model {
	
	function get_all_loan_applications(){
		$this->db->select('*');
		$this->db->from('loan_applications');
		//$this->db->join('loan_products', 'loan_products.loan_product_id=loan_applications.loan_product_id');
		//$this->db->where( array('loan_application_id'=>$loan_application_id));
		return $this->db->get()->result();
	}
	function get_pending_loan_applications(){
		$this->db->select('*');
		$this->db->from('loan_applications');
		//$this->db->join('loan_products', 'loan_products.loan_product_id=loan_applications.loan_product_id');
		$this->db->where( array('loan_status'=>0));
		return $this->db->get()->result();
	}
	function get_accepted_loan_applications(){
		$this->db->select('*');
		$this->db->from('loan_applications');
		//$this->db->join('loan_products', 'loan_products.loan_product_id=loan_applications.loan_product_id');
		$this->db->where( array('loan_status'=>1));
		return $this->db->get()->result();
	}
	function get_rejected_loan_applications(){
		$this->db->select('*');
		$this->db->from('loan_applications');
		//$this->db->join('loan_products', 'loan_products.loan_product_id=loan_applications.loan_product_id');
		$this->db->where( array('loan_status'=>2));
		return $this->db->get()->result();
	}
	
	
	function get_loan_application($loan_application_id){
		$this->db->select('*');
		$this->db->from('loan_applications');
		//$this->db->join('loan_products', 'loan_products.loan_product_id=loan_applications.loan_product_id');
		$this->db->where( array('loan_application_id'=>$loan_application_id));
		return $this->db->get()->result();
	}
	
	function mark_pending($loan_application_id){
		$data = array(
			'loan_status' => 0
		);
		$this->db->where( array('loan_application_id' => $loan_application_id));
		$this->db->update('loan_applications', $data);
	}
	function mark_accepted($loan_application_id){
		$data = array(
			'loan_status' => 1
		);
		$this->db->where( array('loan_application_id' => $loan_application_id));
		$this->db->update('loan_applications', $data);
	}
	function mark_rejected($loan_application_id){
		$data = array(
			'loan_status' => 2
		);
		$this->db->where( array('loan_application_id' => $loan_application_id));
		$this->db->update('loan_applications', $data);
	}
	
	function get_total_pending(){
		$this->db->select('*');
		$this->db->from('loan_applications');
		$this->db->where( array('loan_status'=>0));
		return $this->db->count_all_results();
	}
	function get_total_accepted(){
		$this->db->select('*');
		$this->db->from('loan_applications');
		$this->db->where( array('loan_status'=>1));
		return $this->db->count_all_results();
	}
	function get_total_rejected(){
		$this->db->select('*');
		$this->db->from('loan_applications');
		$this->db->where( array('loan_status'=>2));
		return $this->db->count_all_results();
	}
	function get_total_loan_applications(){
		$this->db->select('*');
		$this->db->from('loan_applications');
		return $this->db->count_all_results();
	}
	

}