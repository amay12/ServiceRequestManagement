<?php
	defined('BASEPATH') OR  exit('No direct script access allowed');

	class ContactUs_Controller extends CI_Controller{
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
			$data['companyname']=  $this->session->tempdata('company_name');
			$data['fname']=  $this->session->tempdata('fname');
			$this->load->view('ContactUs_View', $data);
		}
		public function submit_form(){
			$this->load->library('form_validation');
			if($this->form_validation->run('ContactUs_rules'))
			{
				$email = $this->input->post('email');
				$name = $this->input->post('name');
				$description = $this->input->post('description');
				
				
				$this->load->model('ContactUs_Model');
				
				
				$this->ContactUs_Model->insert($email, $name, $description);
			}
			else
			{
				$this->load->helper('form');
				$this->load->helper('url');
				$data['companyname']=  $this->session->tempdata('company_name');
				$data['fname']=  $this->session->tempdata('fname');
				$this->load->view('ContactUs_View', $data);
			}
		}
		
		

		
	}
?>