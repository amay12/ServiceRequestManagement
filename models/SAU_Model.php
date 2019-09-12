<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	class SAU_Model extends CI_Model{
		public function insert(	$email='',	
								$password='',
								$fname='',
								$lname='',
								$mobile='',
								$image_path='',
								$company='')
		{
			
			

				$query = $this->db->query("INSERT INTO login VALUES (	'',
																		'$email',
																		'$password',
																		'$fname',
																		'$lname',
																		'$mobile',
																		'$image_path',
																		'$company',
																		'companyadmin'
																		)");
				if($query)
				{
					$this->session->set_flashdata('SA_data','Data Inserted.');
						return redirect('/SAU_Controller','refresh');
				}
				else
				{
					echo "Data Not Inserted";
				}
		}

		public function select(){
			//$this->load->database("Internship");
			$query = $this->db->query("SELECT * FROM login WHERE type ='companyadmin' ");
			if($query->num_rows()>0)
			{
				//return $query->result();
				return $query->result_array();
			}
			else{
				return FALSE;
			}
		}

		public function putCompany(){
			$query = $this->db->query("SELECT company_name FROM SACompany WHERE company_name != ' '");
			if($query->num_rows()>0)
			{
				return $query->result_array();
			}
			else{
				return FALSE;
			}
		}

		public function find_id($id)
		{
						$q= $this->db->select()
									->where('id', $id)
									->get('login');
						return $q->row();
		}
		public function update_id($id, Array $article)
		{				//echo "<pre>"; print_r($article); exit();
						//return $this->db->where('Sno', '$Sno')
						//				->update('SACompany', $article);

						$fname = $article['fname'];	
						$lname = $article['lname'];	
						$email = $article['email'];	
						$mobile = $article['mobile'];	
						$company = $article['company'];				

						$query = $this->db->query("UPDATE login SET fname = '$fname', 
																		lname = '$lname',
																		email = '$email',
																		mobile = '$mobile',
																		company = '$company' WHERE id = '$id'");
						if($query)
						{
										return $query;
						}
						else{
							echo "Data Not Inserted";
						}

		}
		public function delete_sno($id)
		{
			$query = $this->db->query("DELETE FROM login WHERE id ='$id' ;");
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