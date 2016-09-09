<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class manage_activity extends CI_Model {








	
	
	

	//create
	
	
	public function add_activity($data) {
		
		//$this->db->insert('db_test', $data);
		$sql = "CALL ADD_ACTIVITY(?, ?, ?)";
		return $this->db->query($sql, $data);
	
	}

	
	//ACTIVITY_LIST
	

	
	
	public function update_method($value='') {
		echo 'class : '.$this->uri->segment(1) .' <br>method : '. $this->uri->segment(2) .' <br>id : '. $this->uri->segment(3);
	}
	public function delete_method($value='') {
		echo 'class : '.$this->uri->segment(1) .' <br>method : '. $this->uri->segment(2) .' <br>id : '. $this->uri->segment(3);
	}
	
	
	
	
}
