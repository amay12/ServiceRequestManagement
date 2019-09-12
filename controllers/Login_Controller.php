<?php 

Class Login_Controller extends CI_Controller{
	public function __construct()
	{	parent::__construct();
		$this->load->library('session');
		//$this->session->keep_flashdata('login_failed');
	}

	public function index()
	{	
		$this->load->helper('form');
		$this->load->view('Login_View');
	}

	public function submit_form()
	{
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'E-mail', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run())
		{
			//Success
			$email= $this->input->post('email');
			$password= $this->input->post('password');
			

			$this->load->model('Login_Model');
			$data['login_credentials']= $this->Login_Model->login_valid($email, $password);
			//echo "<pre>";
			//print_r($data['login_credentials']); exit();
			if($data['login_credentials'])
			{
				//Credentials valid.
				//echo "success";

				
				$this->session->set_userdata('id',$data['login_credentials']->id);
				$this->session->set_flashdata('sid',$data['login_credentials']->id);
				$this->session->set_tempdata('id',$data['login_credentials']->id , 100000);
				$this->session->set_tempdata('fname',$data['login_credentials']->fname , 100000);
				$this->session->set_tempdata('type',$data['login_credentials']->type , 100000);
				$this->session->keep_flashdata('sid');
				$this->session->set_tempdata('company_name',$data['login_credentials']->company , 100000);
				$this->session->set_userdata('type',$data['login_credentials']->type);
				  
                   	 if($data['login_credentials']->type == "superadmin")
                   	 {		$this->session->set_flashdata('login_successful','Congrats! You are logged in.');
                       	 	redirect('/SA_Controller');
                   	 }
                   	 if($data['login_credentials']->type == "companyadmin")
                   	 {		$this->session->set_flashdata('login_successful','Congrats! You are logged in.');
                       	 	redirect('/CA_Controller');
                   	 }
                   	 if($data['login_credentials']->type == "user")
                   	 {		$this->session->set_flashdata('login_successful','Congrats! You are logged in.');
                       	 	redirect('/Main_Controller');
                   	 }
                   	 if($data['login_credentials']->type == "resolver1" || $data['login_credentials']->type == "resolver2" || $data['login_credentials']->type == "resolver3")
                   	 {
                   	 	$this->session->set_flashdata('login_successful','Congrats! You are logged in.');
                       	 	redirect('/R_Controller');
                   	 }
        		
        	}	
			else{
				//authentication failed. 
				//echo "failed!!!!!";
				$this->session->set_flashdata('login_failed','Invalid Username/Password.');
				return redirect('Login_Controller','refresh');
			}
		}
		else
		{
			//Failed
			$this->load->view('Login_View');
			//echo validation_errors();
		}

	}
}
?>