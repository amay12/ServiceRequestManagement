<?php
	defined('BASEPATH') OR  exit('No direct script access allowed');

	class CA_Controller extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			if(! $this->session->userdata('id'))
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
		{		if($this->session->userdata('type')== 'companyadmin')
			{
				$this->load->helper('form');
				$this->load->helper('url');
				$this->load->model('CA_Model');
				$data['list_all_client']= $this->CA_Model->selectClient();
				$data['list_all_product']= $this->CA_Model->selectProduct();
				$data['list_all_category']= $this->CA_Model->selectCategory();
				$data['list_all_user']= $this->CA_Model->selectUser();
				$data['list_all_name']= $this->CA_Model->selectName();
				$data['template']='home'; // check this out
				$data['companyname']= $this->CA_Model->getCompanyName();
				$data['fname']=  $this->session->tempdata('fname');
				foreach ($data['companyname'] as $key => $value)
				 {  
                         $company=  $value['company'];
               	 } 
				$this->session->set_tempdata('company_name',$company , 100000);
				
				$this->load->view('CA_View', $data);
}
else
			{
				return redirect('/Login_Controller');
			}

				
				
		}
}
?>