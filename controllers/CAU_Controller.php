<?php
	defined('BASEPATH') OR  exit('No direct script access allowed');

	class CAU_Controller extends CI_Controller{
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
			$this->load->model('CAU_Model');
			$data['list_all']= $this->CAU_Model->select();
			$data['template']='home'; // check this out
			$data['companyname']=  $this->session->tempdata('company_name');
			$data['fname']=  $this->session->tempdata('fname');
			
			$this->load->view('CAU_View', $data);

			//$data['list_all_companies']=$this->CAU_Model->putCompany();
	}

	public function submit_form()
	{

				$config = [
						'upload_path'	=>		'/Applications/XAMPP/xamppfiles/htdocs/aptana/application/uploads/',
						'allowed_types'	=>		'jpg|gif|png|jpeg',
				];
				$this->load->library('upload', $config);
				$this->load->library('form_validation');
				if($this->form_validation->run('CAU_rules') && $this->upload->do_upload('image'))
				{
				$fname = $this->input->post('fname');
				$lname = $this->input->post('lname');
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$reenter = $this->input->post('reenter');
				$mobile = $this->input->post('mobile');
				//$user_time = date('Y-m-d H:i:s');
				$data = $this->upload->data();
				// echo "<pre>";
				// print_r($data); exit;
				$image_path = base_url("uploads/" . $data['raw_name'] . $data['file_ext']);
				// echo $image_path; exit;
				//$post['image_path'] = $image_path;

				$this->load->model('CAU_Model');
				$this->CAU_Model->insert($email,
										$password,
										$fname,
										$lname,
										$mobile,
										$image_path);
			}
			else
			{	$upload_error = $this->upload->display_errors();
				$this->load->helper('form');
				$this->load->helper('url');
				$this->load->model('CAU_Model');
				$data['upload_error'] = $upload_error;
				$data['list_all']= $this->CAU_Model->select();
				$data['company']=  $this->session->tempdata('company_name');
				$data['fname']=  $this->session->tempdata('fname');
				$this->load->view('CAU_View', $data);
			}
	}


		public function edit($id)
		{
						$this->load->helper('form');
						$this->load->helper('url');
						$this->load->model('CAU_Model');
						$var = $this->CAU_Model->find_id($id);
						//echo "<pre>";
						//print_r($var); exit();
						$data['company']=  $this->session->tempdata('company_name');
						$data['var']=$var;
						$data['company']=  $this->session->tempdata('company_name');
						$data['fname']=  $this->session->tempdata('fname');
						$this->load->view('CAUedit_View',$data);

		}

		public function update($id)
		{
						
						$this->load->helper('form');
						$this->load->helper('url');
						
						$this->load->library('form_validation');
						if($this->form_validation->run('CAUedit_rules'))
						{		
								$post = $this->input->post();
								unset($post['submit']);
								$this->load->model('CAU_Model');

								if( $this->CAU_Model->update_id($id, $post) )
								{
										$this->session->set_flashdata('SA_data', "Entry Updated Successfully!");
										
								}
								else
								{
										$this->session->set_flashdata('SA_data', "Entry Failed to Update! Please, Try again.");
										
								}
								return redirect('/CAU_Controller');

						}
						else
						{		
								$this->load->helper('form');
								$this->load->helper('url');
								$this->load->model('CAU_Model');
								$var = $this->CAU_Model->find_id($id);
								//echo "<pre>";
								//print_r($var); exit();
								$data['var']=$var;
								$data['company']=  $this->session->tempdata('company_name');
								$data['fname']=  $this->session->tempdata('fname');
								$this->load->view('CAUedit_View',$data);
								}
		}

		public function delete($id)
		{
				 
				//echo $Sno; exit();
				$this->load->model('CAU_Model');
				if( $this->CAU_Model->delete_id($id) )
								{
										$this->session->set_flashdata('SA_data', "Entry Deleted Successfully!");
										
								}
								else
								{
										$this->session->set_flashdata('SA_data', "Entry Failed to Delete! Please, Try again.");
										
								}
								return redirect('/CAU_Controller');

		}
	}
?>