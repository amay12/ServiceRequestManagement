<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	class CAU_Model extends CI_Model{
		public function insert(		$email='',
									$password='',
									$fname='',
									$lname='',
									$mobile='',
									$image_path=''
									){
			//$this->load->database("Internship");
			$company=  $this->session->tempdata('company_name');
			$type = 'user';

		$query = $this->db->query("INSERT INTO login VALUES (	'','$email',
																'$password',
																'$fname',
																'$lname',
																'$mobile',
																'$image_path',
																'$company',
																'$type')");
		if($query){
			 $this->session->set_flashdata('SA_data','Data Inserted.');
				return redirect('/CAU_Controller','refresh');
			//redirect('/SAC_Controller','refresh');
		}
		else{
			echo "Data Not Inserted";
		}
		}

		public function select(){

			$causer_company=  $this->session->tempdata('company_name');
			$query = $this->db->query("SELECT * FROM login WHERE (type ='user' OR type ='allocator' OR type ='resolver1' OR type ='resolver2' OR type ='resolver3') AND company = '$causer_company'");
			if($query->num_rows()>0)
			{
				//return $query->result();
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
						$id1= $id;
						$query = $this->db->query("UPDATE login SET 		email = '$email',
																		fname = '$fname', 
																		lname = '$lname',
																		mobile = '$mobile'
																	 WHERE id = '$id1'");
						if($query)
						{
										return $query;
						}
						else{
							echo "Data Not Inserted";
						}

		}
		public function delete_id($id)
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