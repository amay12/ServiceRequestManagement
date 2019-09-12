<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	class CAPC_Model extends CI_Model{
		public function putCACategory(){
			$company=  $this->session->tempdata('company_name');
			$query = $this->db->query("SELECT * FROM RCat WHERE company_name='$company'");
			if($query->num_rows()>0)
			{
				return $query->result_array();
			}
			else{
				return FALSE;
			}
		}
		public function putCAProduct(){
			$company=  $this->session->tempdata('company_name');
			$query = $this->db->query("SELECT * FROM CAPM WHERE company_name='$company'");
			if($query->num_rows()>0)
			{
				return $query->result_array();
			}
			else{
				return FALSE;
			}
		}
		public function insert($c_id ='',
								$p_id='')
		{
				$query = $this->db->query("INSERT INTO CAPC VALUES ('',
																	'$p_id',
																	'$c_id' )");
				if($query)
				{
						
						$this->session->set_flashdata('SA_data','Data Linked!');
						return redirect('/CAPC_Controller','refresh');
						//redirect('/SAC_Controller','refresh');
				}
				else
				{
						echo "Data Not Inserted";
				}
		}
		public function select()
		{
				//$this->load->database("Internship");
				$company=  $this->session->tempdata('company_name');
				$query = $this->db->query("SELECT CAPM.capm_name as CAPM, RCat.RCat_category, RCat.RCat_subcategory as 																									RCat 
											FROM CAPC 
											    INNER JOIN CAPM 
											        ON CAPC.P_id = CAPM.Sno
										        INNER JOIN RCat
											        ON CAPC.C_id = RCat.RCat_Sno
											    
											WHERE RCat.company_name = '$company' ");
				if($query->num_rows()>0)
				{	//echo "<pre>"; print_r($query->result_array()); exit();
					//return $query->result();
					return $query->result_array();
				}
				else
				{
					return FALSE;
				}
		}

		public function delete_sno($Sno)
		{
			$query = $this->db->query("DELETE FROM CAPC WHERE Sno ='$Sno' ;");
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