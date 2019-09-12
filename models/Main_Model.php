<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	class Main_Model extends CI_Model{
		
		public function insert(		$main_project='',
									$main_category='',
									$main_subcategory='',
									$main_subject='',
									$main_mobile='',
									$main_desc =''){
			//$this->load->database("Internship");
			$data['companyname']= $this->Main_Model->getCompanyName();
				foreach ($data['companyname'] as $key => $value)
				 {  
                         $company=  $value['company'];
               	 } 
			
		$query = $this->db->query("INSERT INTO main VALUES (	'',
																'$main_project',
																'$main_category',
																'$main_subcategory',
																'$main_subject',
																'$main_mobile',
																'$main_desc ',
																'pending',
																'$company')");
		if($query){
			$this->session->set_flashdata('SA_data','Data Inserted.');
				return redirect('/Main_Controller','refresh');
			//redirect('/SAC_Controller','refresh');
		}
		else{
			echo "Data Not Inserted";
		}
		}

		public function select(){
			//$this->load->database("Internship");
			$query = $this->db->query("SELECT DISTINCT * FROM main ");
			if($query->num_rows()>0)
			{
				//return $query->result();
				return $query->result_array();
			}
			else{
				return FALSE;
			}
		}
		
		public function getCompanyName()
		{	$temp = $this->session->tempdata('id');
			//echo "Hello GetCompanyName here, Temp data: "  ;
			//echo $temp; 
			//exit();
			$query1= $this->db->query("SELECT company FROM login WHERE id= '$temp' ");
			if($query1->num_rows()>0)
			{
				//return $query->result();
				return $query1->result_array();
			}
			else{
				return FALSE;
			}
		}
		public function selectName()
		{
			//$this->load->database("Internship");
			$value= $this->session->userdata('id');
			$query = $this->db->query("SELECT fname FROM login WHERE id = $value");
			if($query->num_rows()>0)
			{
				//return $query->result();
				return $query->result_array();
			}
			else{
				return FALSE;
			}
		}

		public function putProject(){
			$data['companyname']= $this->Main_Model->getCompanyName();
				foreach ($data['companyname'] as $key => $value)
				 {  
                         $company=  $value['company'];
               	 } 
			$query = $this->db->query("SELECT DISTINCT capm_name FROM CAPM WHERE company_name= '$company'");
			if($query->num_rows()>0)
			{
				return $query->result_array();
			}
			else{
				return FALSE;
			}
		}
		public function putCategory(){
			$data['companyname']= $this->Main_Model->getCompanyName();
				foreach ($data['companyname'] as $key => $value)
				 {  
                         $company=  $value['company'];
               	 } 
			$query = $this->db->query("SELECT DISTINCT category FROM Category WHERE company= '$company' ");
			if($query->num_rows()>0)
			{
				return $query->result_array();
			}
			else{
				return FALSE;
			}
		}
			public function putSubcategory(){
				$data['companyname']= $this->Main_Model->getCompanyName();
				foreach ($data['companyname'] as $key => $value)
				 {  
                         $company=  $value['company'];
               	 } 
			$query = $this->db->query("SELECT RCat_subcategory FROM RCat WHERE company_name= '$company'");
			if($query->num_rows()>0)
			{
				return $query->result_array();
			}
			else{
				return FALSE;
			}
		}
		
	}
?>