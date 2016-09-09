<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class manage_properties extends CI_Model {








	
	
	

	//create
	
	
	public function add_account($data) {
		
		//$this->db->insert('db_test', $data);
		$sql = "CALL INSERT_ACCOUNT(?, ?, ?, ?, ?, ?, ?)";
		return $this->db->query($sql, $data);

		
		
	
	}
	
	//read
	
	public function gategory_list() {
		

		//$this->db->select('*');
		//$result = $this->db->get('db_test');
		$result  = $this->db->query("Call PRODUCT_LIST()"); //Stored Procedure
		return $result->result_array();
	
	
	
	}
	
	public function gategory() {
		

		//$this->db->select('*');
		//$result = $this->db->get('db_test');
		$result  = $this->db->query("Call CATEGORY_LIST()"); //Stored Procedure
		return $result->result_array();
	
	
	
	}	
	
	public function new_product() {
	

		$result  = $this->db->query("Call PRODUCT_NEW()"); //Stored Procedure
		return $result->result_array();
		
		//return $result->result_array();
		
	
	}
	
	public function banner_list() {
	

		$result  = $this->db->query("Call BANNER_LIST()"); //Stored Procedure
		return $result->result_array();
		
		//return $result->result_array();
		
	
	}
	
	public function properties_list() {
	

		$result  = $this->db->query("Call PROPERTIES_LIST()"); //Stored Procedure
		return $result->result_array();
		
		//return $result->result_array();
		
	
	}
	
	
	
	
	
	public function add_banner($data) {
		
		$sql = "CALL ADD_BANNER(?, ?, ?)";
		return $this->db->query($sql, $data);

		
		
	
	}
	
	public function add_products($data) {
		
		$sql = "CALL ADD_PRODUCT(?, ?, ?, ?, ?)";
		return $this->db->query($sql, $data);

	
	}	
	
	public function add_properties($data) {
		
		$sql = "CALL ADD_PROPERTIES(?, ?, ?, ?)";
		return $this->db->query($sql, $data);

		
		
	
	}
	
	public function edit_properties($data) {
		
		$sql = "CALL UPDATE_PROPERTIES(?, ?, ?)";
		return $this->db->query($sql, $data);

		
		
	
	}
	
	public function edit_properties_pic($data) {
		
		$sql = "CALL UPDATE_PROPERTIES_PIC(?, ?, ?. ?)";
		return $this->db->query($sql, $data);

		
		
	
	}	
	
	
	
	public function update_method($value='') {
		echo 'class : '.$this->uri->segment(1) .' <br>method : '. $this->uri->segment(2) .' <br>id : '. $this->uri->segment(3);
	}
	public function delete_method($value='') {
		echo 'class : '.$this->uri->segment(1) .' <br>method : '. $this->uri->segment(2) .' <br>id : '. $this->uri->segment(3);
	}
	
	
	
	
}
