<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	class SA_Model extends CI_Model{
		

		public function selectCompany(){
			//$this->load->database("Internship");
			$query = $this->db->query("SELECT * FROM SACompany WHERE company_mobile !='0'");
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
			$query = $this->db->query("SELECT * FROM login WHERE type='companyadmin'  ");
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
		public function selectFeedback()
		{
			$query = $this->db->query("SELECT * FROM ContactUs WHERE status != 'handled'");
			if($query->num_rows()>0)
			{
				//echo "<pre>";
				//print_r($query->result_array());exit();	
				return $query->result_array();
			}
			else{
				return FALSE;
			}
		}
		public function updateStatus($Sno)
		{				//echo "<pre>"; print_r($article); exit();
						//return $this->db->where('Sno', '$Sno')
						//				->update('SACompany', $article);

						
						

						$query = $this->db->query("UPDATE ContactUs SET status = 'handled'
																		 WHERE Sno = '$Sno'");
						if($query)
						{
										return $query;
						}
						else{
							echo "Data Not Updated";
						}

		}


	}
?>