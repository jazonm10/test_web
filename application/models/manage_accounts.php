<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class manage_accounts extends CI_Model {




	//create
	
	public function add_account($data) {
		
		$sql = "CALL ADD_ACCOUNT(?, ?, ?)";
		return $this->db->query($sql, $data);
	
	}	

	public function update_account($data) {
		
		$sql = "CALL EDIT_ACCOUNT(?, ?, ?)";
		return $this->db->query($sql, $data);

		
		
	
	}		
	
	public function deactivated_account($data) {
		
		$sql = "CALL DEACTIVATED_ACCOUNT(?, ?, ?)";
		return $this->db->query($sql, $data);

		
		
	
	}		
	
	public function account_list($data) {
		
		$result  = $this->db->query("Call ACCOUNT_LIST()"); //Stored Procedure
		return $result->result_array();

		
		
	
	}		
	
	
	public function update_method($value='') {
		echo 'class : '.$this->uri->segment(1) .' <br>method : '. $this->uri->segment(2) .' <br>id : '. $this->uri->segment(3);
	}
	public function delete_method($value='') {
		echo 'class : '.$this->uri->segment(1) .' <br>method : '. $this->uri->segment(2) .' <br>id : '. $this->uri->segment(3);
	}
	
	
	
	
}
