<?php
	defined('BASEPATH') OR  exit('No direct script access allowed');

	class CACat_Controller extends CI_Controller{
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
		public function index(){
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->model('CACat_Model');
			$data['list_all']= $this->CACat_Model->select();
			$data['companyname']= $this->session->tempdata('company_name');
			$data['list_category']= $this->CACat_Model->selectCategory();
			$data['companyname']=  $this->session->tempdata('company_name');
			$data['fname']=  $this->session->tempdata('fname');
			$this->load->view('CACat_View', $data);
		}
		public function submit_form(){
			
			
			$RCat_category = $this->input->post('RCat_category');
			$RCat_subcategory = $this->input->post('RCat_subcategory');
			
			$company= $this->session->tempdata('company_name');
			$this->load->model('CACat_Model');
			$this->CACat_Model->insert($RCat_category,
									$RCat_subcategory,$company
									);
		}
	}
?>