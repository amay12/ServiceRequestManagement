<?php
	defined('BASEPATH') OR  exit('No direct script access allowed');

	class R_Controller extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('form');
			if(! $this->session->userdata('id') ||( !$this->session->userdata('type')== 'resolver1' && !$this->session->userdata('type')== 'resolver2' && !$this->session->userdata('type')== 'resolver3' ))
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
				
				$data['companyname']=  $this->session->tempdata('company_name');
				$data['fname']=  $this->session->tempdata('fname');	
				$this->load->model('R_Model');
				$data['list_inprocess']= $this->R_Model->selectinprocess();
				$data['list_resolved']= $this->R_Model->selectresolved();
				$data['list']= $this->R_Model->select();
				$data['list_all']= $this->R_Model->selectAll();		
				$this->load->view('R_View', $data);
				

		}
		public function edit($Sno)
		{
						$this->load->helper('form');
						$this->load->helper('url');
						$this->load->model('R_Model');
						if( $this->R_Model->updateStatus($Sno) )
								{
										$this->session->set_flashdata('SA_data', "Complaint in Process!");
										
								}
								else
								{
										$this->session->set_flashdata('SA_data', "Complaint failed to reach! Please, Try again.");
										
								}
								return redirect('/R_Controller');
						$data['companyname']=  $this->session->tempdata('company_name');
						$data['fname']=  $this->session->tempdata('fname');	
						$this->load->view('R_View',$data);

		}
		public function inprocess($Sno)
		{
						$this->load->helper('form');
						$this->load->helper('url');
						$this->load->model('R_Model');
						$data['var'] = $this->R_Model->find_sno($Sno);
						//echo "<pre>"; 
						//print_r($data['var']); exit();
						$data['companyname']=  $this->session->tempdata('company_name');
						$data['fname']=  $this->session->tempdata('fname');
						$this->load->view('RIP_View',$data);

		}
		public function resolve($Sno)
		{
			//echo $Sno;
			//echo "This is sno of table row!";
			$this->load->helper('form');
						$this->load->helper('url');
						$this->load->model('R_Model');
						if( $this->R_Model->updateResolve($Sno))
								{
										$this->session->set_flashdata('SA_data', "Complaint Resolve!");
										
								}
								else
								{
										$this->session->set_flashdata('SA_data', "Complaint failed to resolve! Please, Try again.");
										
								}
								return redirect('/R_Controller');
						$data['companyname']=  $this->session->tempdata('company_name');
						$data['fname']=  $this->session->tempdata('fname');	
						$this->load->view('R_View',$data);
		}
		public function hold($Sno)
		{
			//echo $Sno;
			//echo "This is sno of table row!";
			$this->load->helper('form');
						$this->load->helper('url');
						$this->load->model('R_Model');
						if( $this->R_Model->updateHold($Sno))
								{
										$this->session->set_flashdata('SA_data', "Complaint on Hold!");
										
								}
								else
								{
										$this->session->set_flashdata('SA_data', "Complaint failed to hold! Please, Try again.");
										
								}
								return redirect('/R_Controller');
						$data['companyname']=  $this->session->tempdata('company_name');
						$data['fname']=  $this->session->tempdata('fname');	
						$this->load->view('R_View',$data);
		}
		public function escalate($Sno)
		{	  $this->session->set_tempdata('escalate_Sno',$Sno , 100000);
			//echo $Sno;
			//echo "This is sno of table row!";
			$data['companyname']=  $this->session->tempdata('company_name');
			$data['fname']=  $this->session->tempdata('fname');	
			$this->load->view('RE_View',$data);
		}
		public function escalate2()
		{	$e_sno =  $this->session->tempdata('escalate_Sno');	
			$var = $this->input->post('group'); 
			$this->load->model('R_Model');
						if( $this->R_Model->escalate($e_sno, $var))
								{
										$this->session->set_flashdata('SA_data', "Complaint Escalated!");
										
								}
								else
								{
										$this->session->set_flashdata('SA_data', "Complaint failed to escalate! Please, Try again.");
										
								}
			return redirect('/R_Controller');
		}
}
?>