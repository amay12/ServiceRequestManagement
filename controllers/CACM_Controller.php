<?php
	defined('BASEPATH') OR  exit('No direct script access allowed');

	class CACM_Controller extends CI_Controller{
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
			$this->load->model('CACM_Model');
			$data['list_all']= $this->CACM_Model->select();
			$data['template']='home'; // check this out
			$data['companyname']=  $this->session->tempdata('company_name');
			$data['fname']=  $this->session->tempdata('fname');
			$this->load->view('CACM_View', $data);
		}
		public function submit_form(){
			$this->load->library('form_validation');
			if($this->form_validation->run('CACM_rules'))
			{
				$client_code = $this->input->post('client_code');
				$client_name = $this->input->post('client_name');
				$client_city = $this->input->post('client_city');
				$client_mobile = $this->input->post('client_mobile');
				$client_email = $this->input->post('client_email');
				$client_time = date('Y-m-d H:i:s');

				$this->load->model('CACM_Model');
				$data['companyname']= $this->CACM_Model->getCompanyName();
				foreach ($data['companyname'] as $key => $value)
				 {  
                         $company=  $value['company'];
               	 } 
				
				$this->CACM_Model->insert($client_code,
										$client_name,
										$client_city,
										$client_mobile,
										$client_email,
										$client_time,
										$company);
			}
			else
			{
				$this->load->helper('form');
				$this->load->helper('url');
				$this->load->model('CACM_Model');
				$data['list_all']= $this->CACM_Model->select();
				$data['template']='home'; // check this out
				$data['companyname']=  $this->session->tempdata('company_name');
				$data['fname']=  $this->session->tempdata('fname');
				$this->load->view('CACM_View', $data);
			}
		}

		public function edit($Sno)
		{
						$this->load->helper('form');
						$this->load->helper('url');
						$this->load->model('CACM_Model');
						$data['var'] = $this->CACM_Model->find_sno($Sno);
						//echo "<pre>"; 
						//print_r($var); exit();
						$this->load->model('CACM_Model');
						$data['companyname']=  $this->session->tempdata('company_name');
						$data['fname']=  $this->session->tempdata('fname');
						$this->load->view('CACMedit_View',$data);

		}
		public function update($Sno)
		{
						//print_r ($this->input->post());
						$this->load->helper('form');
						$this->load->helper('url');
						
						$this->load->library('form_validation');
						if($this->form_validation->run('CACM_rules'))
						{		$post = $this->input->post();
								unset($post['submit']);
								$this->load->model('CACM_Model');

								if( $this->CACM_Model->update_sno($Sno, $post) )
								{
										$this->session->set_flashdata('SA_data', "Entry Updated Successfully!");
										
								}
								else
								{
										$this->session->set_flashdata('SA_data', "Entry Failed to Update! Please, Try again.");
										
								}
								return redirect('/CACM_Controller');

						}
						else
						{
								$this->load->helper('form');
								$this->load->helper('url');
								$this->load->model('CACM_Model');
								$var = $this->SAC_Model->find_sno($Sno);
								//echo "<pre>";
								//print_r($var);
								$data['var'] = $var;
								$data['fname']=  $this->session->tempdata('fname');
								$data['companyname']=  $this->session->tempdata('company_name');
								$this->load->view('CACMedit_View',$data);
						}
		}

		public function delete($Sno)
		{
				 
				//echo $Sno; exit();
				$this->load->model('CACM_Model');
				if( $this->CACM_Model->delete_sno($Sno) )
								{
										$this->session->set_flashdata('SA_data', "Entry Deleted Successfully!");
										
								}
								else
								{
										$this->session->set_flashdata('SA_data', "Entry Failed to Delete! Please, Try again.");
										
								}
								return redirect('/CACM_Controller');

		}
	}
?>