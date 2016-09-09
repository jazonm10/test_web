<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class banner extends CI_Controller {

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
		$this->load->model('manage_banner');

		$this->load->model('manage_properties');		
		
	}	



	public function banner_form()
	{
		$this->data['category'] = $this->manage_product->gategory();
		$this->data['banner_list'] = $this->manage_banner->banner_list();
		$this->data['properties_list'] = $this->manage_properties->properties_list();
		$this->load->view('manage_products/add_banner',$this->data);
	}	
	 
	
	
	
	

	
	
	public function add_banner()
	{
		

		
    if(getimagesize($_FILES['image']['tmp_name'])== FALSE)
	{
		
		$data = array(
		'banner_id' => $this->input->post('banner_id'),
		'banner_name' => $this->input->post('banner_name'),
		'banner_desc' => $this->input->post('banner_desc')
		
		);
		
		$this->manage_banner->edit_banner($data);
		
		redirect('banner_form');
	}
	else
	{
		
		$image = addslashes($_FILES['image']['tmp_name']);
		$image = file_get_contents($image);
		$image = base64_encode($image);
		
	    $data = array(
		
		'banner_id' => $this->input->post('banner_id'),
		'banner_name' => $this->input->post('banner_name'),
		'banner_desc' => $this->input->post('banner_desc'),
		'banner_pic' => $image
		
		);
		
		$this->manage_banner->edit_banner_pic($data);
		redirect('banner_form');
		
	}
		

		
	}	

	
	
	
	
	

	
	
	
	
	
	
}
