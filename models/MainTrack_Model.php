<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	class MainTrack_Model extends CI_Model{
		
		

		public function select()
		{
			$uid = $this->session->tempdata('id');
			$query = $this->db->query("SELECT DISTINCT * FROM Resolver WHERE user_id = '$uid' ");
			if($query->num_rows()>0)
			{
				//echo "<pre>"; print_r($query->result_array());exit();
				//return $query->result();
				return $query->result_array();
			}
			else{
				return FALSE;
			}
		}
		
		

		
		
	}
?>