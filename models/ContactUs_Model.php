<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	class ContactUs_Model extends CI_Model{
		public function insert($email ='',
								$name='',
								$description=''
								 )
		{	$id = $this->session->tempdata('id');
			$uname = $this->session->tempdata('fname');
			$query = $this->db->query("INSERT INTO ContactUs VALUES ('',
																	'$email',
																	'$name',
																	'$description',
																	'$id',
																	'$uname', '')");
			if($query)
			{
				$this->session->set_flashdata('SA_data','Feedback Saved! We will get back to you shortly.');
				return redirect('/ContactUs_Controller','refresh');
				
			}
			else
			{
				echo "Data Not Inserted";
			}
		}
	}
?>