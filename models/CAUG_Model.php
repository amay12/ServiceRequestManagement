<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	class CAUG_Model extends CI_Model{
		public function putCAUser()
		{		$company=  $this->session->tempdata('company_name');
				$query = $this->db->query("SELECT * FROM login WHERE (type ='user' AND company = '$company') OR 
																	(type ='allocator' AND company = '$company') OR 
																	(type ='resolver1' AND company = '$company') OR 
																	(type ='resolver2' AND company = '$company') OR 
																	(type ='resolver3' AND company = '$company') ");
			if($query->num_rows()>0)
			{	
				return $query->result_array();
			}
			else{
				return FALSE;
			}
		}
		
		public function update($type, $id)
		{	
			$q= $this->db->query("UPDATE login
								SET type='$type'
								WHERE id='$id';");
			if($q)
			{
				 $this->session->set_flashdata('SA_data','Data Inserted.');
					return redirect('/CAUG_Controller','refresh');
				//redirect('/SAC_Controller','refresh');
			}
			else
			{
				echo "Data Not Inserted";
			}
		

		}

		
		

	}
?>