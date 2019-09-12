<?php
	
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	class Login_Modell extends CI_Model{

		public function insert(	$email='',
								$password='')
		{
			$q= $this->db->where(['email'=> $email, 'password'=> $password])
					 ->get('login');

		 	if($q->num_rows())
		 	{
		 		return TRUE;
		 	}
		 	else
		 	{ 
		 		return FALSE;
		 	}
		
			

		}
	}
?>