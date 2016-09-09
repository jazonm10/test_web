<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class account extends CI_Controller {

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
		$this->load->model('manage_accounts');
		$this->load->model('manage_properties');		
		
	}	



	public function accounts_form()
	{
		$this->data['category'] = $this->manage_product->gategory();
		$this->data['banner_list'] = $this->manage_banner->banner_list();
		$this->data['properties_list'] = $this->manage_properties->properties_list();
		$this->load->view('manage_products/add_accounts',$this->data);
	}	
	 
	
	
	
	

	
	
	public function add_accounts()
	{
		

		
  
	
	    $data = array(
		
		'banner_id' => $this->input->post('account_name'),
		'banner_name' => $this->input->post('account_user'),
		'banner_desc' => base64_encode($this->input->post('account_pass'))
		
		);
		
		$this->manage_accounts->add_account($data);
		redirect('accounts_form');
	

		
	}	

	
	
	
	
	

	
	
	
	
	
	
}
