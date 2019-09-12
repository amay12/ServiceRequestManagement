<?php
	defined('BASEPATH') OR  exit('No direct script access allowed');

	class CAUG_Controller extends CI_Controller{
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
			$this->session->sess_destroy();
			return redirect('/Login_Controller');
	}

	public function index()
	{
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->model('CAUG_Model');
			$data['list_user']= $this->CAUG_Model->putCAUser();
			
			$data['template']='home'; // check this out
			$data['company']=  $this->session->tempdata('company_name');
			$data['fname']=  $this->session->tempdata('fname');
			//$data['list_all']= $this->CACP_Model->select();
			$this->load->view('CAUG_View', $data);
	}
	public function newt()
	{
			$id= $this->input->post('radio1');
			$type= $this->input->post('radio2');
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->model('CAUG_Model');
			$this->CAUG_Model->update($type, $id);
						
						
	}
	
}
?>