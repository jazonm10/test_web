<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class manage_banner extends CI_Model {




	//create
	
	
	public function add_banner($data) {
		
		$sql = "CALL ADD_BANNER(?, ?, ?)";
		return $this->db->query($sql, $data);

		
		
	
	}

	public function edit_banner($data) {
		
		$sql = "CALL UPDATE_BANNER(?, ?, ?)";
		return $this->db->query($sql, $data);

		
		
	
	}
	
	public function edit_banner_pic($data) {
		
		$sql = "CALL UPDATE_BANNER_PIC(?, ?, ?, ?)";
		return $this->db->query($sql, $data);

		
		
	
	}	
	

	public function deactivated_banner($data) {
		
		$sql = "CALL DEACTIVATED_BANNER(?, ?, ?)";
		return $this->db->query($sql, $data);

		
		
	
	}	
	
	public function banner_list() {
	

		$result  = $this->db->query("Call BANNER_LIST()"); //Stored Procedure
		return $result->result_array();
		
		
	
	}
	
	
	
	
	public function update_method($value='') {
		echo 'class : '.$this->uri->segment(1) .' <br>method : '. $this->uri->segment(2) .' <br>id : '. $this->uri->segment(3);
	}
	public function delete_method($value='') {
		echo 'class : '.$this->uri->segment(1) .' <br>method : '. $this->uri->segment(2) .' <br>id : '. $this->uri->segment(3);
	}
	
	
	
	
}
