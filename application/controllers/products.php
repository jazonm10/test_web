<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class products extends CI_Controller {

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
		$this->load->model('manage_banner'); 
	}	 
	 

	
	public function product_view()
	{	
		$id = $this->uri->segment(3);
		$this->data['category'] = $this->manage_product->gategory();
		$this->data['properties_list'] = $this->manage_product->properties_list();
		$this->data['banner_list'] = $this->manage_banner->banner_list();
		$this->data['related_product'] = $this->manage_product->related_product($id);
		$this->data['result_category'] = $this->manage_product->product_view($id);
		$this->load->view('result_category', $this->data);
	}
	
	public function select_product()
	{	
		$id = $this->uri->segment(3);
		$this->data['category'] = $this->manage_product->gategory();
		$this->data['properties_list'] = $this->manage_product->properties_list();
		$this->data['products'] = $this->manage_product->gategory_list();
		$this->data['select_product'] = $this->manage_product->select_product($id);
		$this->load->view('preview', $this->data);
	}
	

	
	public function add_products()
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
		
		'category_id' => $this->input->post('category'),
		'product_name' => $this->input->post('product_name'),
		'product_interest	' => $this->input->post('product_interest'),
		'product_guide	' => $this->input->post('product_guide'),
		'product_desc' => $this->input->post('product_desc'),
		'product_pic' => $image
		);
		
		$this->manage_product->add_products($data);
		
		
		redirect(product_form);
		
	}
	

	
	
	
	
	
	
}
