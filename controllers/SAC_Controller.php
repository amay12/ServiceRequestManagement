<?php
	defined('BASEPATH') OR  exit('No direct script access allowed');

	class SAC_Controller extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('form');
			
			if(! $this->session->userdata('id') || !$this->session->userdata('type')== 'superadmin')
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
				$this->load->model('SAC_Model');
				$data['list_all']= $this->SAC_Model->select();
				$data['template']='home'; // check this out
				$this->load->view('SAC_View', $data);
		}

		public function submit_form()
		{	
			$this->load->library('form_validation');
			if($this->form_validation->run('SAC_rules'))
			{
			$company_code = $this->input->post('company_code');
			$company_name = $this->input->post('company_name');
			$company_city = $this->input->post('company_city');
			$company_mobile = $this->input->post('company_mobile');
			$company_email = $this->input->post('company_email');
			$company_time = date('Y-m-d H:i:s');

			$this->load->model('SAC_Model');
			$this->SAC_Model->insert($company_code,
									$company_name,
									$company_city,
									$company_mobile,
									$company_email,
									$company_time );
			}
			else
			{
				$this->load->helper('form');
				$this->load->helper('url');
				$this->load->model('SAC_Model');
				$data['list_all']= $this->SAC_Model->select();
				$data['template']='home'; // check this out
				$this->load->view('SAC_View', $data);
			}
		}
		public function edit($Sno)
		{
						$this->load->helper('form');
						$this->load->helper('url');
						$this->load->model('SAC_Model');
						$var = $this->SAC_Model->find_sno($Sno);
						//echo "<pre>";
						//print_r($var);
						$this->load->view('SACedit_View',['var' => $var]);

		}
		public function update($Sno)
		{
						//print_r ($this->input->post());
						$this->load->helper('form');
						$this->load->helper('url');
						
						$this->load->library('form_validation');
						if($this->form_validation->run('SAC_rules'))
						{		$post = $this->input->post();
								unset($post['submit']);
								$this->load->model('SAC_Model');

								if( $this->SAC_Model->update_sno($Sno, $post) )
								{
										$this->session->set_flashdata('SA_data', "Entry Updated Successfully!");
										
								}
								else
								{
										$this->session->set_flashdata('SA_data', "Entry Failed to Update! Please, Try again.");
										
								}
								return redirect('/SAC_Controller');

						}
						else
						{
								$this->load->helper('form');
								$this->load->helper('url');
								$this->load->model('SAC_Model');
								$var = $this->SAC_Model->find_sno($Sno);
								//echo "<pre>";
								//print_r($var);
								$this->load->view('SACedit_View',['var' => $var]);
						}
		}

		public function delete($Sno)
		{
				 
				//echo $Sno; exit();
				$this->load->model('SAC_Model');
				if( $this->SAC_Model->delete_sno($Sno) )
								{
										$this->session->set_flashdata('SA_data', "Entry Deleted Successfully!");
										
								}
								else
								{
										$this->session->set_flashdata('SA_data', "Entry Failed to Delete! Please, Try again.");
										
								}
								return redirect('/SAC_Controller');

		}
}
?>











