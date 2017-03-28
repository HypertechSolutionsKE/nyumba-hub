<?php
class Listing_types_model extends CI_Model {
	
	function get_listing_types_list(){
		$this->db->from('listing_types');
		$this->db->where( array('is_deleted'=>0));
		return $this->db->get()->result();
	}


}