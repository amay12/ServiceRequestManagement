<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	class CAProduct_Model extends CI_Model{
		public function insert($product ='' )
				{
					//$this->load->database("Internship");
					$company=  $this->session->tempdata('company_name');

				$query = $this->db->query("INSERT INTO Product VALUES ('',
																		'$product',
																		'$company')");
				if($query)
				{
					 $this->session->set_flashdata('SA_data','Data Inserted.');
						return redirect('/CAProduct_Controller','refresh');
					//redirect('/SAC_Controller','refresh');
				}
				else
				{
					echo "Data Not Inserted";
				}
		}

		public function select(){
			//$this->load->database("Internship");
			$company=  $this->session->tempdata('company_name');

			$query = $this->db->query("SELECT * FROM Product WHERE company = '$company'");
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