<?php

class S extends CI_Controller { 
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
	}
	public function index()
	{
		echo "Student Controller running!";
		
	}
	public function add_student(){
		$this->load->model(Stud_Model);
		$data= array(
				'roll'=> $this->input->post('roll'),
				'name'=> $this->input->post('name')
			);
		   $this->Stud_Model->insert($data); 
   
        // $query = $this->db->get("stud"); 
         //$data['records'] = $query->result(); 
         //$this->load->view('Stud_view',$data); 
	}
	public function add_student_view(){

		$this->load->helper('form');
		$this->load->view('stu_addview');
	}
};
?>