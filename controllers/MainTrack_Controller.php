<?php
	defined('BASEPATH') OR  exit('No direct script access allowed');

	class MainTrack_Controller extends CI_Controller{
	public function __construct()
	{
			parent::__construct();
			$this->load->helper('url');
			if(! $this->session->userdata('id') || !$this->session->userdata('type')== 'companyadmin')
		            {
		                return redirect('/Login_Controller');
		            }

	}
	public function logout()
	{
			$this->session->unset_userdata('id');
			return redirect('/Login_Controller');
	}
	public function index()
	{
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->model('MainTrack_Model');
			$data['list_all']= $this->MainTrack_Model->select();
			$data['companyname']=  $this->session->tempdata('company_name');
			$data['fname']=  $this->session->tempdata('fname');
			
			$this->load->view('MainTrack_View', $data);

			//$data['list_all_companies']=$this->Main_Model->putCompany();
	}
	
}
?>