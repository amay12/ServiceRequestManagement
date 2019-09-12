<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	class CACM_Model extends CI_Model{
		public function insert($client_code ='',
								$client_name='',
								$client_city='',
								$client_mobile='',
								$client_email='',
								$client_time='',
								$company_name='' ){
			//$this->load->database("Internship");


		$query = $this->db->query("INSERT INTO CACM VALUES ('',
																'$client_code',
																'$client_name',
																'$client_city',
																'$client_mobile',
																'$client_email',
																'$client_time',
																'$company_name' )");
		if($query){
			$this->session->set_flashdata('SA_data','Data Inserted.');
				return redirect('/CACM_Controller','refresh');
			//redirect('/SAC_Controller','refresh');
		}
		else{
			echo "Data Not Inserted";
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

		public function select()
		{
			//$this->load->database("Internship");
			$this->load->model('CACM_Model');
				$data['companyname']= $this->CACM_Model->getCompanyName();
				foreach ($data['companyname'] as $key => $value)
				 {  
                         $company=  $value['company'];
               	 } 
			$query = $this->db->query("SELECT * FROM CACM WHERE company_name= '$company'");
			if($query->num_rows()>0)
			{
				//return $query->result();
				return $query->result_array();
			}
			else{
				return FALSE;
			}
		}

		public function find_sno($Sno)
		{
						$q= $this->db->select()
									->where('Sno', $Sno)
									->get('CACM');
						return $q->row();
		}
		public function update_sno($Sno, Array $article)
		{				//echo "<pre>"; print_r($article); exit();
						//return $this->db->where('Sno', '$Sno')
						//				->update('SACompany', $article);

						$client_code = $article['client_code'];	
						$client_name = $article['client_name'];	
						$client_city = $article['client_city'];	
						$client_mobile = $article['client_mobile'];	
						$client_email = $article['client_email'];				

						$query = $this->db->query("UPDATE CACM SET client_code = '$client_code', 
																		client_name = '$client_name',
																		client_city = '$client_city',
																		client_mobile = '$client_mobile',
																		client_email = '$client_email' WHERE Sno = '$Sno'");
						if($query)
						{
										return $query;
						}
						else{
							echo "Data Not Updated";
						}

		}
		public function delete_sno($Sno)
		{
			$query = $this->db->query("DELETE FROM CACM WHERE Sno ='$Sno' ;");
						if($query)
						{
										return $query;
						}
						else{
							echo "Data Not Deleted";
						}
		}

	}
?>