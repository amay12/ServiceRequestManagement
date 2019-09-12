<?php
	defined('BASEPATH') OR  exit('No direct script access allowed');

	class CAPC_Controller extends CI_Controller{
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
			$this->load->model('CAPC_Model');
			$data['CAP']= $this->CAPC_Model->putCAProduct();
			$data['CAC']= $this->CAPC_Model->putCACategory();
			$data['template']='home'; // check this out

			$data['list_all']= $this->CAPC_Model->select();
			$data['companyname']=  $this->session->tempdata('company_name');
			$data['fname']=  $this->session->tempdata('fname');
			//echo "<pre>";
			//print_r($data['list_all']); exit();
			$this->load->view('CAPC_View', $data);
		}
		public function newt()
		{
			$p_id= $this->input->post('radio1');
			$c_id= $this->input->post('radio2');
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->model('CAPC_Model');
			$this->CAPC_Model->insert($c_id, $p_id);
						
						
		}
		public function delete($Sno)
		{
				 
				//echo $Sno; exit();
				$this->load->model('CAPC_Model');
				if( $this->CAPC_Model->delete_sno($Sno) )
								{
										$this->session->set_flashdata('SA_data', "Entry Deleted Successfully!");
										
								}
								else
								{
										$this->session->set_flashdata('SA_data', "Entry Failed to Delete! Please, Try again.");
										
								}
								return redirect('/CAPC_Controller');

		}


		
	}
?>