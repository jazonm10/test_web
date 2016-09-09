<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->model('manage_activity');
		
	}	 
	 
	public function index()
	{
	
	$this->data['category'] = $this->manage_product->gategory();
	$this->data['new_products'] = $this->manage_product->new_product();
	$this->data['banner_list'] = $this->manage_banner->banner_list();
	$this->data['properties_list'] = $this->manage_product->properties_list();
    $this->load->view('home', $this->data);
	

	}

	


	public function about()
	{
		$this->data['products'] = $this->manage_product->gategory_list();
		$this->data['properties_list'] = $this->manage_product->properties_list();
		$this->load->view('about', $this->data);
	}
	public function delivery()
	{
		$this->data['activity_list'] = $this->manage_product->activity_list();
		$this->data['properties_list'] = $this->manage_product->properties_list();
		$this->load->view('delivery', $this->data);
	}
	public function news()
	{
		$this->data['products'] = $this->manage_product->gategory_list();
		$this->data['properties_list'] = $this->manage_product->properties_list();
		$this->load->view('news', $this->data);
	}
    public function preview()
	{
		$this->data['products'] = $this->manage_product->gategory_list();
		$this->data['properties_list'] = $this->manage_product->properties_list();
		$this->load->view('preview', $this->data);
	}
	public function contact()
	{
		$this->data['products'] = $this->manage_product->gategory_list();
		$this->data['properties_list'] = $this->manage_product->properties_list();
		$this->load->view('contact', $this->data);
	}
	
	public function product_form()
	{
		$this->data['category'] = $this->manage_product->gategory();
		$this->data['properties_list'] = $this->manage_product->properties_list();
		$this->load->view('manage_products/add_products',$this->data);
	}
	
	public function banner_form()
	{
		$this->data['category'] = $this->manage_product->gategory();
		$this->data['properties_list'] = $this->manage_product->properties_list();
		$this->load->view('manage_products/add_banner',$this->data);
	}	
	
	public function properties_form()
	{
		$this->data['category'] = $this->manage_product->gategory();
		$this->data['properties_list'] = $this->manage_product->properties_list();
		$this->load->view('manage_products/add_properties',$this->data);
	}	
	
	
	
	
	
	

	

	
	
	
}
