<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class activity extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 
    function __construct()
	{
		parent::__construct();
		$this->load->model('manage_product'); 
		$this->load->model('manage_properties');
		$this->load->model('manage_activity');
	}	 
	 

	
	public function activity_form()
	{	
		$this->data['category'] = $this->manage_product->gategory();
		$this->data['properties_list'] = $this->manage_product->properties_list();
		$this->load->view('manage_products/add_activity',$this->data);
	}
	
	public function add_activity()
	{	
	
	
	
   if(getimagesize($_FILES['image']['tmp_name'])== FALSE)
	{
		echo "Please Select an image!";
	}
	else
	{
		
		$image = addslashes($_FILES['image']['tmp_name']);
		$image = file_get_contents($image);
		$image = base64_encode($image);
		
		
		
	}
			
	
		$data = array(
		
		'activity_name' => $this->input->post('activity_name'),
		'activity_content' => $this->input->post('activity_content'),
		'activity_pic' => $image
		);
		
		$this->manage_activity->add_activity($data);
		
		
		redirect(activity_form);
		
	}
	

	
	
	

	
	
	
	
	
	
}
