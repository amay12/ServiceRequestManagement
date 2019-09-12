<?php
	defined('BASEPATH') OR  exit('No direct script access allowed');

	class SA_Controller extends CI_Controller{
		public function index()
		{	if($this->session->userdata('type')== 'superadmin')
			{	
				
				$this->load->helper('form');
				$this->load->helper('url');
				$this->load->model('SA_Model');
				$data['list_all_company']= $this->SA_Model->selectCompany();
				$data['list_all_user']= $this->SA_Model->selectUser();
				$data['list_all_name']= $this->SA_Model->selectName();
				$data['list_all_feedback']= $this->SA_Model->selectFeedback();
				$data['template']='home'; // check this out
				$this->load->view('SA_View', $data);
			}
			else
			{
				return redirect('/Login_Controller');
			}
	
			
			
		}

public function __construct()
{
	parent::__construct();
	$this->load->helper('url');
	//if($this->session->userdata('type')== 'superadmin')
	//		{	
//				return redirect('/Login_Controller');
//			}

	}


public function logout(){
	$this->session->unset_userdata('id');
	$this->session->sess_destroy();
	return redirect('/Login_Controller');
}
public function edit($Sno)
		{
						$this->load->helper('form');
						$this->load->helper('url');
						$this->load->model('SA_Model');
						if( $this->SA_Model->updateStatus($Sno) )
								{
										$this->session->set_flashdata('SA_data', "Feedbacks Updated!");
										
								}
								else
								{
										$this->session->set_flashdata('SA_data', "Feedback failed to reach! Please, Try again.");
										
								}
								//return redirect('/ContactUs_Controller');
								$data['list_all_company']= $this->SA_Model->selectCompany();
								$data['list_all_user']= $this->SA_Model->selectUser();
								$data['list_all_name']= $this->SA_Model->selectName();
								$data['list_all_feedback']= $this->SA_Model->selectFeedback();
								$data['template']='home'; // check this out
								$this->load->view('SA_View', $data);
		}
}
?>