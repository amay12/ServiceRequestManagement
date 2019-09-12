<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	class CAPM_Model extends CI_Model{

		



		public function insert($capm_code ='',
								$capm_name='',
								$capm_tech='',
								$capm_desc='' )
		{
				//$this->load->database("Internship");
				$company=  $this->session->tempdata('company_name');	

				$query = $this->db->query("INSERT INTO CAPM VALUES ('',
																		'$capm_code',
																		'$capm_name',
																		'$capm_tech',
																		'$capm_desc',
																		'$company')");
				if($query){
					 $this->session->set_flashdata('SA_data','Data Inserted.');
						return redirect('/CAPM_Controller','refresh');
					//redirect('/SAC_Controller','refresh');
				}
				else{
					echo "Data Not Inserted";
				}
		}

		public function select(){
			//$this->load->database("Internship");
			$company=  $this->session->tempdata('company_name');
			$query = $this->db->query("SELECT * FROM CAPM WHERE company_name= '$company'");
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
									->get('CAPM');
						return $q->row();
		}
		public function update_sno($Sno, Array $article)
		{				//echo "<pre>"; print_r($article); exit();
						//return $this->db->where('Sno', '$Sno')
						//				->update('SACompany', $article);

						$capm_code = $article['capm_code'];	
						$capm_name = $article['capm_name'];	
						$capm_tech = $article['capm_tech'];	
						$capm_desc = $article['capm_desc'];	
						

						$query = $this->db->query("UPDATE CAPM SET capm_code = '$capm_code', 
																		capm_name  = '$capm_name',
																		capm_tech = '$capm_tech',
																		capm_desc = '$capm_desc'
																		 WHERE Sno = '$Sno'");
						if($query)
						{
										return $query;
						}
						else{
							echo "Data Not Updated";
						}

		}
		public function selectProduct()
		{
						
						$company=  $this->session->tempdata('company_name');
						$query = $this->db->query("SELECT * FROM Product WHERE company= '$company'");
						if($query->num_rows()>0)
						{
							
							return $query->result_array();
						}
						else{
							return FALSE;
						}
		}
		public function delete_sno($Sno)
		{
						$query = $this->db->query("DELETE FROM CAPM WHERE Sno ='$Sno' ;");
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