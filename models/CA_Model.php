<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	class CA_Model extends CI_Model{
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
		

		public function selectClient(){
			//$this->load->database("Internship");
			$data['companyname']= $this->CA_Model->getCompanyName();
				foreach ($data['companyname'] as $key => $value)
				 {  
                         $company=  $value['company'];
               	 } 
			$query = $this->db->query("SELECT * FROM CACM WHERE company_name= '$company'");
			if($query->num_rows()>0)
			{
				//return $query->result();
				return $query->num_rows();
			}
			else{
				return FALSE;
			}
		}
		public function selectProduct(){
			//$this->load->database("Internship");
			$data['companyname']= $this->CA_Model->getCompanyName();
				foreach ($data['companyname'] as $key => $value)
				 {  
                         $company=  $value['company'];
               	 } 
			$query = $this->db->query("SELECT * FROM CAPM WHERE company_name ='$company' ");
			if($query->num_rows()>0)
			{
				//return $query->result();
				return $query->num_rows();
			}
			else{
				return FALSE;
			}
		}
		public function selectCategory(){
			//$this->load->database("Internship");
			$data['companyname']= $this->CA_Model->getCompanyName();
				foreach ($data['companyname'] as $key => $value)
				 {  
                         $company=  $value['company'];
               	 } 
			$query = $this->db->query("SELECT * FROM RCat WHERE company_name = '$company' ");
			if($query->num_rows()>0)
			{
				//return $query->result();
				return $query->num_rows();
			}
			else{
				return FALSE;
			}
		}
		public function selectUser(){
			//$this->load->database("Internship");
			$query = $this->db->query("SELECT * FROM login WHERE type = 'user' OR type = 'resolver1' OR type = 'resolver2' OR type = 'resolver3' ");
			if($query->num_rows()>0)
			{
				//return $query->result();
				return $query->num_rows();
			}
			else{
				return FALSE;
			}
		}
		public function selectName(){
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


	}
?>