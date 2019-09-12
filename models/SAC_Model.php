<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	class SAC_Model extends CI_Model{
		public function insert($company_code ='',
								$company_name='',
								$company_city='',
								$company_mobile='',
								$company_email='',
								$company_time='' )
		{
							//$this->load->database("Internship");


						$query = $this->db->query("INSERT INTO SACompany VALUES ('',
																				'$company_code',
																				'$company_name',
																				'$company_city',
																				'$company_mobile',
																				'$company_email',
																				'$company_time' )");
						if($query){
							$this->session->set_flashdata('SA_data','Data Inserted.');
								return redirect('/SAC_Controller/','refresh');
						}
						else{
							echo "Data Not Inserted";
						}
		}

		public function select()
		{
						//$this->load->database("Internship");
						$query = $this->db->query("SELECT * FROM SACompany WHERE company_mobile !='0'");
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
									->get('SACompany');
						return $q->row();
		}
		public function update_sno($Sno, Array $article)
		{				//echo "<pre>"; print_r($article); exit();
						//return $this->db->where('Sno', '$Sno')
						//				->update('SACompany', $article);

						$company_code = $article['company_code'];	
						$company_name = $article['company_name'];	
						$company_city = $article['company_city'];	
						$company_mobile = $article['company_mobile'];	
						$company_email = $article['company_email'];				

						$query = $this->db->query("UPDATE SACompany SET company_code = '$company_code', 
																		company_name = '$company_name',
																		company_city = '$company_city',
																		company_mobile = '$company_mobile',
																		company_email = '$company_email' WHERE Sno = '$Sno'");
						if($query)
						{
										return $query;
						}
						else{
							echo "Data Not Deleted";
						}

		}
		public function delete_sno($Sno)
		{
			$query = $this->db->query("DELETE FROM SACompany WHERE Sno ='$Sno' ;");
						if($query)
						{
										return $query;
						}
						else{
							echo "Data Not Deleted!";
						}
		}

	}
?>









