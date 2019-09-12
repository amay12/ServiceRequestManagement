<?php
	defined('BASEPATH') OR  exit('No direct script access allowed');

	class CAProduct_Controller extends CI_Controller{
		public function __construct()
{
	parent::__construct();
	$this->load->helper('url');
	if(! $this->session->userdata('id') || !$this->session->userdata('type')== 'companyadmin')
			{
				return redirect('/Login_Controller');
			}

}
	public function logout(){
	$this->session->unset_userdata('id');
	$this->session->sess_destroy();
	return redirect('/Login_Controller');
	}
	public function index()
	{
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->model('CAProduct_Model');
			$data['list_all']= $this->CAProduct_Model->select();
			$data['companyname']= $this->session->tempdata('company_name');
			$data['fname']=  $this->session->tempdata('fname');
			$this->load->view('CAProduct_View', $data);
	}
	public function submit_form()
	{
			
			
			$product = $this->input->post('product');
			

			$this->load->model('CAProduct_Model');
			$this->CAProduct_Model->insert($product);
		}
	}
?>