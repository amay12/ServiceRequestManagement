<?php
	defined('BASEPATH') OR  exit('No direct script access allowed');

	class SAU_Controller extends CI_Controller{
	public function __construct()
	{
	parent::__construct();
	$this->load->helper('url');
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
			$this->load->model('SAU_Model');
			$data['list_all']= $this->SAU_Model->select();
			$data['template']='home'; // check this out
			$data['list_all_companies']=$this->SAU_Model->putCompany();
			$this->load->view('SAU_View', $data);

			//$data['list_all_companies']=$this->SAU_Model->putCompany();
	}
		public function submit_form()
		{
			$config = [
					'upload_path'	=>		'/Applications/XAMPP/xamppfiles/htdocs/aptana/application/uploads/',
					'allowed_types'	=>		'jpg|gif|png|jpeg',
			];
			$this->load->library('upload', $config);
			$this->load->library('form_validation');
			if($this->form_validation->run('SAU_rules') && $this->upload->do_upload('image'))
			{	
				
				$fname = $this->input->post('fname');
				$lname = $this->input->post('lname');
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$reenter = $this->input->post('reenter');
				$mobile = $this->input->post('mobile');
				$company = $this->input->post('company');
				$data = $this->upload->data();
				// echo "<pre>";
				// print_r($data); exit;
				$image_path = base_url("uploads/" . $data['raw_name'] . $data['file_ext']);
				//echo $image_path; exit;
				//$post['image_path'] = $image_path;

				$this->load->model('SAU_Model');
				$this->SAU_Model->insert(	$email,
											$password,
											$fname,
											$lname,
											$mobile,
											$image_path,
											$company
										);
			}
			else
			{	$upload_error = $this->upload->display_errors();
				$this->load->helper('form');
				$this->load->helper('url');
				$this->load->model('SAU_Model');
				$data['upload_error'] = $upload_error;
				$data['list_all']= $this->SAU_Model->select();
				$data['template']='home'; // check this out
				$data['list_all_companies']=$this->SAU_Model->putCompany();
				$this->load->view('SAU_View',$data);
			}
		}
		public function edit($id)
		{
						$this->load->helper('form');
						$this->load->helper('url');
						$this->load->model('SAU_Model');
						$var = $this->SAU_Model->find_id($id);
						//echo "<pre>";
						//print_r($var); exit();
						$data['list_all_companies']=$this->SAU_Model->putCompany();
						$data['var']=$var;
						$this->load->view('SAUedit_View',$data);

		}
		public function update($id)
		{

						$this->load->helper('form');
						$this->load->helper('url');
						
						$this->load->library('form_validation');
						if($this->form_validation->run('SAUedit_rules'))
						{		
								$post = $this->input->post();
								unset($post['submit']);
								$this->load->model('SAU_Model');

								if( $this->SAU_Model->update_id($id, $post) )
								{
										$this->session->set_flashdata('SA_data', "Entry Updated Successfully!");
										
								}
								else
								{
										$this->session->set_flashdata('SA_data', "Entry Failed to Update! Please, Try again.");
										
								}
								return redirect('/SAU_Controller');

						}
						else
						{		
								$this->load->helper('form');
								$this->load->helper('url');
								$this->load->model('SAU_Model');
								$var = $this->SAU_Model->find_id($id);
								//echo "<pre>";
								//print_r($var); exit();
								$data['list_all_companies']=$this->SAU_Model->putCompany();
								//$data['var']=$var;
								$this->load->view('SAUedit_View',['var' => $var]);
								}
		}

		public function delete($id)
		{
				 
				//echo $Sno; exit();
				$this->load->model('SAU_Model');
				if( $this->SAU_Model->delete_id($id) )
								{
										$this->session->set_flashdata('SA_data', "Entry Deleted Successfully!");
										
								}
								else
								{
										$this->session->set_flashdata('SA_data', "Entry Failed to Delete! Please, Try again.");
										
								}
								return redirect('/SAU_Controller');

		}
	}
?>