<?php
	defined('BASEPATH') OR  exit('No direct script access allowed');

	class CACP_Controller extends CI_Controller{
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
			$this->load->model('CACP_Model');
			$data['CAC']= $this->CACP_Model->putCACompany();
			$data['CAP']= $this->CACP_Model->putCAProduct();
			$data['template']='home'; // check this out
			
			$data['list_all']= $this->CACP_Model->select();
			$data['companyname']=  $this->session->tempdata('company_name');
			$data['fname']=  $this->session->tempdata('fname');
			//echo "<pre>";
			//print_r($data['list_all']); exit();
			$this->load->view('CACP_View', $data);
	}
	public function newt()
	{
			$client_id= $this->input->post('radio1');
			$product_id= $this->input->post('radio2');
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->model('CACP_Model');
			$this->CACP_Model->insert($client_id, $product_id);
						
						
	}
	public function delete($Sno)
	{
				 
				//echo $Sno; exit();
				$this->load->model('CACP_Model');
				if( $this->CACP_Model->delete_sno($Sno) )
								{
										$this->session->set_flashdata('SA_data', "Entry Deleted Successfully!");
										
								}
								else
								{
										$this->session->set_flashdata('SA_data', "Entry Failed to Delete! Please, Try again.");
										
								}
								return redirect('/CACP_Controller');

	}
}
?>