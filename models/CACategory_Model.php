<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	class CACategory_Model extends CI_Model{
		public function insert($RCat_category ='' ){
			//$this->load->database("Internship");
			$company=  $this->session->tempdata('company_name');

		$query = $this->db->query("INSERT INTO Category VALUES ('',
																'$RCat_category',
																'$company')");
		if($query){
			 $this->session->set_flashdata('SA_data','Data Inserted.');
				return redirect('/CACategory_Controller','refresh');
			//redirect('/SAC_Controller','refresh');
		}
		else{
			echo "Data Not Inserted";
		}
		}

		public function select(){
			//$this->load->database("Internship");
			$company=  $this->session->tempdata('company_name');

			$query = $this->db->query("SELECT * FROM Category WHERE company = '$company'");
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