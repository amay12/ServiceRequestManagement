<?php

class Login_Model extends CI_Model{

	public function login_valid($email, $password)
	{	
		
		$q= $this->db->where(['email'=> $email, 'password'=> $password])
					 ->get('login');

		 if($q->num_rows())
		 {
		 	return $q->row();
		 }
		 else
		 { 
		 	return FALSE;
		 }
		
	}
}