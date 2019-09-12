<?php
	defined('BASEPATH') OR  exit('No direct script access allowed');

	class CAPM_Controller extends CI_Controller{
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
			$this->load->model('CAPM_Model');
			$data['list_all']= $this->CAPM_Model->select();
			$data['template']='home'; // check this out
			$data['companyname']=  $this->session->tempdata('company_name');
			$data['fname']=  $this->session->tempdata('fname');
			$data['list_product']= $this->CAPM_Model->selectProduct();	
			$this->load->view('CAPM_View', $data);
		}
		public function submit_form(){
			
			$this->load->library('form_validation');
			if($this->form_validation->run('CAPM_rules'))
			{//echo "if  submit form"; exit();
				$capm_code = $this->input->post('capm_code');
				$capm_name = $this->input->post('capm_name');
				$capm_tech = $this->input->post('capm_tech');
				$capm_desc = $this->input->post('capm_desc');
				
				$this->load->model('CAPM_Model');
				$this->CAPM_Model->insert($capm_code,
										$capm_name,
										$capm_tech,
										$capm_desc );
		}
		else
			{//echo validation_errors(); exit();
				$this->load->helper('form');
				$this->load->helper('url');
				$this->load->model('CAPM_Model');
				$data['list_all']= $this->CAPM_Model->select();
				$data['template']='home'; // check this out
				$data['companyname']=  $this->session->tempdata('company_name');
				$data['fname']=  $this->session->tempdata('fname');
				$this->load->view('CAPM_View', $data);
			}
		}

		public function edit($Sno)
		{
						$this->load->helper('form');
						$this->load->helper('url');
						$this->load->model('CAPM_Model');
						$data['var'] = $this->CAPM_Model->find_sno($Sno);
						//echo "<pre>";
						//print_r($var);
						$data['companyname']=  $this->session->tempdata('company_name');
						$data['fname']=  $this->session->tempdata('fname');	
						$this->load->view('CAPMedit_View',$data);

		}
		public function update($Sno)
		{
						//print_r ($this->input->post());
						$this->load->helper('form');
						$this->load->helper('url');
						
						$this->load->library('form_validation');
						if($this->form_validation->run('CAPM_rules'))
						{		$post = $this->input->post();
								unset($post['submit']);
								$this->load->model('CAPM_Model');

								if( $this->CAPM_Model->update_sno($Sno, $post) )
								{
										$this->session->set_flashdata('SA_data', "Entry Updated Successfully!");
										
								}
								else
								{
										$this->session->set_flashdata('SA_data', "Entry Failed to Update! Please, Try again.");
										
								}
								return redirect('/CAPM_Controller');

						}
						else
						{
								$this->load->helper('form');
								$this->load->helper('url');
								$this->load->model('CAPM_Model');
								$var = $this->CAPM_Model->find_sno($Sno);
								//echo "<pre>";
								//print_r($var);
								$data['var'] = $var;
								$data['companyname']=  $this->session->tempdata('company_name');
								$data['fname']=  $this->session->tempdata('fname');
								$this->load->view('CAPMedit_View',$data);
						}
		}

		public function delete($Sno)
		{
				 
				//echo $Sno; exit();
				$this->load->model('CAPM_Model');
				if( $this->CAPM_Model->delete_sno($Sno) )
								{
										$this->session->set_flashdata('SA_data', "Entry Deleted Successfully!");
										
								}
								else
								{
										$this->session->set_flashdata('SA_data', "Entry Failed to Delete! Please, Try again.");
										
								}
								return redirect('/CAPM_Controller');

		}
	}
?>