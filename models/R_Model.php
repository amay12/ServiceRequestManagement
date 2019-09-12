<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	class R_Model extends CI_Model{
		public function selectinprocess(){
			//$this->load->database("Internship");
			$type=  $this->session->tempdata('type');
			if($type == 'resolver1')
			{
				$var = "7777";
			}
			elseif($type == 'resolver2')
			{
				$var = "8888";
			}
			elseif($type == 'resolver3')
			{
				$var = "9999";
			}
			$id=  $this->session->tempdata('id');
			$query = $this->db->query("SELECT * FROM Resolver WHERE (resolver_id ='$id' OR resolver_id ='$var')  AND status = 'inprocess'");
			if($query->num_rows()>0)
			{
				//echo "<pre>";
				//print_r($query->result_array());exit();	
				return $query->result_array();
			}
			else{
				return FALSE;
			}
		}
		public function selectresolved(){
			//$this->load->database("Internship");
			$type=  $this->session->tempdata('type');
			if($type == 'resolver1')
			{
				$var = "7777";
			}
			elseif($type == 'resolver2')
			{
				$var = "8888";
			}
			elseif($type == 'resolver3')
			{
				$var = "9999";
			}
			$id=  $this->session->tempdata('id');
			$query = $this->db->query("SELECT * FROM Resolver WHERE (resolver_id ='$id' OR resolver_id ='$var')  AND status = 'resolved'");
			if($query->num_rows()>0)
			{
				//echo "<pre>";
				//print_r($query->result_array());exit();	
				return $query->result_array();
			}
			else{
				return FALSE;
			}
		}
		



		

		public function select(){
			//$this->load->database("Internship");
			$id=  $this->session->tempdata('id');
			$query = $this->db->query("SELECT * FROM Resolver WHERE resolver_id ='$id' AND (status = 'pending' OR status = 'hold' )");
			if($query->num_rows()>0)
			{
				//echo "<pre>";
				//print_r($query->result_array());exit();	
				return $query->result_array();
			}
			else{
				return FALSE;
			}
		}
		public function selectAll(){
			//$this->load->database("Internship");
			$type=  $this->session->tempdata('type');
			if($type == 'resolver1')
			{
				$var = "7777";
			}
			elseif($type == 'resolver2')
			{
				$var = "8888";
			}
			elseif($type == 'resolver3')
			{
				$var = "9999";
			}
			$query = $this->db->query("SELECT * FROM Resolver WHERE resolver_id ='$var' AND (status = 'pending' OR status = 'hold' OR status = 'escalated')");
			if($query->num_rows()>0)
			{
				//echo "<pre>";
				//print_r($query->result_array());exit();	
				return $query->result_array();
			}
			else{
				return FALSE;
			}
		}
		public function updateStatus($Sno)
		{				//echo "<pre>"; print_r($article); exit();
						//return $this->db->where('Sno', '$Sno')
						//				->update('SACompany', $article);

						
						

						$query = $this->db->query("UPDATE Resolver SET status = 'inprocess'
																		 WHERE Sno = '$Sno'");
						if($query)
						{
										return $query;
						}
						else{
							echo "Data Not Updated";
						}

		}
		public function updateResolve($Sno)
		{				//echo "<pre>"; print_r($article); exit();
						//return $this->db->where('Sno', '$Sno')
						//				->update('SACompany', $article);

						
						

						$query = $this->db->query("UPDATE Resolver SET status = 'resolved'
																		 WHERE Sno = '$Sno'");
						if($query)
						{
										return $query;
						}
						else{
							echo "Data Not Updated";
						}

		}
		public function updateHold($Sno)
		{				//echo "<pre>"; print_r($article); exit();
						//return $this->db->where('Sno', '$Sno')
						//				->update('SACompany', $article);

						
						

						$query = $this->db->query("UPDATE Resolver SET status = 'hold'
																		 WHERE Sno = '$Sno'");
						if($query)
						{
										return $query;
						}
						else{
							echo "Data Not Updated";
						}

		}

		public function find_sno($Sno)
		{
						$q= $this->db->select()
									->where('Sno', $Sno)
									->get('Resolver');
						return $q->result_array();
		}
		public function escalate($Sno, $var)
		{				if($var == "7777")
						{
							$type = "resolver1";
						}
						elseif($var == "8888")
						{
							$type = "resolver2";
						}
						elseif($var == "9999")
						{
							$type = "resolver3";
						}
							
						

						$query = $this->db->query("UPDATE Resolver SET status = 'escalated', type = '$type', resolver_id 						= '$var'
												   WHERE Sno = '$Sno'");
						if($query)
						{
										return $query;
						}
						else{
							echo "Data Not Escalated";
						}

		}
	
	}
?>