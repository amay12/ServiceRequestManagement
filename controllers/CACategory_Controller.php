<?php
	defined('BASEPATH') OR  exit('No direct script access allowed');

	class CACategory_Controller extends CI_Controller{
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
			$this->load->model('CACategory_Model');
			$data['list_all']= $this->CACategory_Model->select();
			$data['companyname']= $this->session->tempdata('company_name');
			$data['fname']=  $this->session->tempdata('fname');
			$this->load->view('CACategory_View', $data);
	}
	public function submit_form()
	{
			
			
			$RCat_category = $this->input->post('RCat_category');
			

			$this->load->model('CACategory_Model');
			$this->CACategory_Model->insert($RCat_category);
		}
	}
?>