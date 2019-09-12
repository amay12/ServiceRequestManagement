<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	class CAAllocate_Model extends CI_Model{
		
		public function select()
		{
				
				$company=  $this->session->tempdata('company_name');	
				$query = $this->db->query("SELECT * FROM main where status='pending' AND company_name= '$company'");
				if($query->num_rows()>0)
				{
					return $query->result_array();
				}
				else
				{
					return FALSE;
				}
		}
		public function selectsno()
		{		
				$main_sno = $this->session->tempdata('main_sno'); 	
				$query = $this->db->query("SELECT * FROM main where main_sno = '$main_sno'");
				if($query->num_rows()>0)
				{
					//return $query->result();
					return $query->result_array();
				}
				else
				{
					return FALSE;
				}
		}
		public function selectResolver1()
		{
						
						$company=  $this->session->tempdata('company_name');
						$query = $this->db->query("SELECT * FROM login WHERE company= '$company' AND type = 'resolver1'");
						if($query->num_rows()>0)
						{
							 // echo "<pre>";
                            //print_r($query->result_array()); exit();
							return $query->result_array();
						}
						else{
							return FALSE;
						}
		}
		public function selectResolver2()
		{
						
						$company=  $this->session->tempdata('company_name');
						$query = $this->db->query("SELECT * FROM login WHERE company= '$company' AND type = 'resolver2'");
						if($query->num_rows()>0)
						{
							 // echo "<pre>";
                            //print_r($query->result_array()); exit();
							return $query->result_array();
						}
						else{
							return FALSE;
						}
		}
		public function selectResolver3()
		{
						
						$company=  $this->session->tempdata('company_name');
						$query = $this->db->query("SELECT * FROM login WHERE company= '$company' AND type = 'resolver3'");
						if($query->num_rows()>0)
						{
							 // echo "<pre>";
                            //print_r($query->result_array()); exit();
							return $query->result_array();
						}
						else{
							return FALSE;
						}
		}

		public function insert($product_name = '',
								$category = '',
								$sub_category = '',
								$subject = '',
								$mobile = '',
								$description = '',
								$status = '',
								$type = '',
								$time = '',
								$resolver_id = '',
								$main_sno = '',
								$user_fname = '',
								$user_lname = '')
		{
				//$this->load->database("Internship");
				$company=  $this->session->tempdata('company_name');	

				$query = $this->db->query("INSERT INTO Resolver VALUES ('',
																		'$product_name',
																		'$category',
																		'$sub_category',
																		'$subject',
																		'$mobile',
																		'$description',
																		'$status',
																		'$company',
																		'$type',
																		'$time',
																		'$resolver_id',
																		'$main_sno',
																		'$user_fname',
																		'$user_lname')");
				if($query){
					 $this->session->set_flashdata('SA_data','Data Inserted.');
						return redirect('/CAAllocate_Controller','refresh');
						
				}
				else{
					echo "Data Not Inserted";
				}
		}
		public function selectType($resolver_id)
		{
						
						
						$query = $this->db->query("SELECT type FROM login WHERE id = '$resolver_id'");
						if($query->num_rows()>0)
						{
							 //echo "<pre>";
                           	 //print_r($query->result()); exit();
							 return $query->result_array();
						}
						else{
							echo "error in type "; exit(); return FALSE;
						}
		}
		
		
		

	}
?>