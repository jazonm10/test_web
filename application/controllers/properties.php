<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class properties extends CI_Controller {

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
	}	 
	 

	
	public function properties_form()
	{
		$this->data['category'] = $this->manage_product->gategory();
		$this->data['properties_list'] = $this->manage_product->properties_list();
		$this->load->view('manage_products/add_properties',$this->data);
	}
	
	
	
	
	public function edit_properties()
	{
		
		
		
    if(getimagesize($_FILES['image']['tmp_name'])== FALSE)
	{
		$data = array(
		'properties_name' => $this->input->post('properties_name'),
		'properties_contact' => $this->input->post('properties_contact'),
		'properties_address' => $this->input->post('properties_address')
		);
		$this->manage_properties->edit_properties($data);
		
		redirect('properties_form');
	}
	else
	{
		$image = addslashes($_FILES['image']['tmp_name']);
		$image = file_get_contents($image);
		$image = base64_encode($image);
		
		$data = array(
		'properties_name' => $this->input->post('properties_name'),
		'properties_contact' => $this->input->post('properties_contact'),
		'properties_address' => $this->input->post('properties_address'),
		'properties_pic' => $image
		);
		$this->manage_properties->edit_properties_pic($data);
		redirect('properties_form');
	}
		
	}
	
	
	
	

	
	
	
	
	
	
}
