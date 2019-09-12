<?php
	defined('BASEPATH') OR  exit('No direct script access allowed');

	class Main_Controller extends CI_Controller{
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
			$this->load->model('Main_Model');
			$data['list_all']= $this->Main_Model->select();
			$data['companyname']= $this->Main_Model->getCompanyName();
			$data['list_all_projects']=$this->Main_Model->putProject();
			$data['list_all_categories']=$this->Main_Model->putCategory();
			$data['list_all_subcategories']=$this->Main_Model->putSubcategory();
			
			
			$data['companyname']=  $this->session->tempdata('company_name');
			$data['fname']=  $this->session->tempdata('fname');
			
			$this->load->view('Main_View', $data);

			//$data['list_all_companies']=$this->Main_Model->putCompany();
	}
	public function submit_form()
	{
		
			$this->load->library('form_validation');
			if($this->form_validation->run('Main_rules'))
			{
				$main_project= $this->input->post('main_project');
				$main_category= $this->input->post('main_category');
				$main_subcategory= $this->input->post('main_subcategory');
				$main_subject = $this->input->post('main_subject');
				$main_mobile= $this->input->post('main_mobile');
				$main_desc = $this->input->post('main_desc');
				
				//$user_time = date('Y-m-d H:i:s');

				$this->load->model('Main_Model');
				$this->Main_Model->insert($main_project,
										$main_category,
										$main_subcategory,
										$main_subject,
										$main_mobile,
										$main_desc);
			}
			else
			{
				$this->load->view('Main_View');
			}
	}
}
?>