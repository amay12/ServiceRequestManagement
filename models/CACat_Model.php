<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	class CACat_Model extends CI_Model{
		public function insert($RCat_category ='',
								$RCat_subcategory='',
								$company='' )
		{

			$query = $this->db->query("INSERT INTO RCat VALUES ('',
																	'$RCat_category',
																	'$RCat_subcategory',
																	'$company')");
			if($query)
			{
			  	$this->session->set_flashdata('SA_data','Data Inserted.');
				return redirect('/CACat_Controller','refresh');
				
			}
			else
			{
					echo "Data Not Inserted";
			}
		}

		public function select()
		{
			$company=  $this->session->tempdata('company_name');
			$query = $this->db->query("SELECT * FROM RCat WHERE company_name= '$company'");
			if($query->num_rows()>0)
			{
				return $query->result_array();
			}
			else
			{
				return FALSE;
			}
		}
		public function selectCategory()
		{
			
			$company=  $this->session->tempdata('company_name');
			$query = $this->db->query("SELECT * FROM Category WHERE company= '$company'");
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