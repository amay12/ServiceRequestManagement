<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	class CACP_Model extends CI_Model{
		public function putCACompany()
		{		$company=  $this->session->tempdata('company_name');
				$query = $this->db->query("SELECT * FROM CACM WHERE company_name='$company'");
				if($query->num_rows()>0)
				{
					return $query->result_array();
				}
				else
				{
					return FALSE;
				}
		}
		public function putCAProduct()
		{		$company=  $this->session->tempdata('company_name');
				$query = $this->db->query("SELECT * FROM CAPM WHERE company_name='$company' ");
				if($query->num_rows()>0)
				{
					return $query->result_array();
				}
				else
				{
					return FALSE;
				}
		}
		public function insert($client_id ='',
								$product_id='')
		{
				$query = $this->db->query("INSERT INTO CACP VALUES ('',
																	'$client_id',
																	'$product_id' )");
				if($query)
				{
						
						$this->session->set_flashdata('SA_data','Data Linked!');
						return redirect('/CACP_Controller','refresh');
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
				$company = $this->session->tempdata('company_name');
				$query = $this->db->query("SELECT CACM.client_name as CACM, CAPM.capm_name as CAPM
											FROM CACP 
											    INNER JOIN CACM
											        ON CACP.client_id = CACM.Sno
											    INNER JOIN CAPM 
											        ON CACP.product_id = CAPM.Sno
											WHERE CACM.company_name = '$company' ");
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
			$query = $this->db->query("DELETE FROM CACP WHERE Sno ='$Sno' ;");
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