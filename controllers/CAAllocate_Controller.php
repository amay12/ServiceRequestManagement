<?php
    defined('BASEPATH') OR  exit('No direct script access allowed');

    class CAAllocate_Controller extends CI_Controller
{
        public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        if(! $this->session->userdata('id') || !$this->session->userdata('type')== 'companyadmin')
                {
                    return redirect('/Login_Controller');
                }

    }   
    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->sess_destroy();
        return redirect('/Login_Controller');
    }
    public function index()
    {
            $this->load->helper('form');
            $this->load->helper('url');
            $this->load->model('CAAllocate_Model');
            $data['list_all']= $this->CAAllocate_Model->select();
            $data['list_resolver1']= $this->CAAllocate_Model->selectResolver1();
            $data['list_resolver2']= $this->CAAllocate_Model->selectResolver2();
            $data['list_resolver3']= $this->CAAllocate_Model->selectResolver3();

            $data['template']='home'; // check this out
            $data['company']=  $this->session->tempdata('company_name');    
            $data['fname']=  $this->session->tempdata('fname');
            $this->load->view('CAAllocate_View1', $data);
    }
    public function submit_form()
    {
            
                //$product_name = $this->input->post('product_name');
                //$category = $this->input->post('category');
                //$sub_category = $this->input->post('sub_category');
                //$subject = $this->input->post('subject');
                //$mobile = $this->input->post('mobile');
                //$description = $this->input->post('description');
                //$status = $this->input->post('status');
                $this->load->model('CAAllocate_Model');
                $data['list_main'] = $this->CAAllocate_Model->selectsno();
               // echo "<pre>";
                //print_r($data['list_main']); 
                foreach ($data['list_main'] as $key => $value)
                     {  
                            $product_name = $value['main_project'];
                            $category = $value['main_cat'];
                            $sub_category = $value['main_subc'];
                            $subject = $value['main_subject'];
                            $mobile = $value['main_mobile'];
                            $description = $value['main_desc'];
                            $status = $value['status'];
                            $user_fname= $value['user_fname'];
                            $user_lname= $value['user_lname'];
                            $main_sno =  $this->session->tempdata('main_sno');
                     } 

               
                $time = date('Y-m-d H:i:s');
                echo $resolver_id =$this->input->post('radio1');                 
                if($resolver_id == '7777') //7777= resolver1 selectall
                    {$type= "resolver1";}
                else if ($resolver_id =='8888')//8888= resolver2 selectall
                     {$type= "resolver2";}
                 else if ($resolver_id == '9999')// 9999= resolver3 selectall
                    {$type= "resolver3";}
                else
                {    $this->load->model('CAAllocate_Model');
                    $data['type']= $this->CAAllocate_Model->selectType($resolver_id);
                    foreach ($data['type'] as $key => $value)
                     {  
                             $type=  $value['type'];
                     } 
                }
                $this->CAAllocate_Model->insert($product_name,
                                                $category,
                                                $sub_category,
                                                $subject,
                                                $mobile,
                                                $description,
                                                $status,
                                                $type,
                                                $time,
                                                $resolver_id,
                                                $main_sno,
                                                $user_fname,
                                                $user_lname );

    }
    public function submit()
    {
                 $main_sno = $this->input->post('btn');// set as tempdata to access it in submit_form()
                 $this->session->set_tempdata('main_sno',$main_sno , 100000);
               // echo $btn; exit();

            $this->load->helper('form');
            $this->load->helper('url');
            $this->load->model('CAAllocate_Model');
            $data['list_all']= $this->CAAllocate_Model->select();
            $data['list_resolver1']= $this->CAAllocate_Model->selectResolver1();
            $data['list_resolver2']= $this->CAAllocate_Model->selectResolver2();
            $data['list_resolver3']= $this->CAAllocate_Model->selectResolver3();

            $data['template']='home'; // check this out
            $data['company']=  $this->session->tempdata('company_name');    
            $data['fname']=  $this->session->tempdata('fname');
            $this->load->view('CAAllocate_View', $data);
                
    }

    /*    public function edit($Sno)
        {
                        $this->load->helper('form');
                        $this->load->helper('url');
                        $this->load->model('CACM_Model');
                        $data['var'] = $this->CACM_Model->find_sno($Sno);
                        //echo "<pre>"; 
                        //print_r($var); exit();
                        $this->load->model('CACM_Model');
                        $data['companyname']= $this->CACM_Model->getCompanyName();
                        $this->load->view('CACMedit_View',$data);

        }
        public function update($Sno)
        {
                        //print_r ($this->input->post());
                        $this->load->helper('form');
                        $this->load->helper('url');
                        
                        $this->load->library('form_validation');
                        if($this->form_validation->run('CACM_rules'))
                        {       $post = $this->input->post();
                                unset($post['submit']);
                                $this->load->model('CACM_Model');

                                if( $this->CACM_Model->update_sno($Sno, $post) )
                                {
                                        $this->session->set_flashdata('SA_data', "Entry Updated Successfully!");
                                        
                                }
                                else
                                {
                                        $this->session->set_flashdata('SA_data', "Entry Failed to Update! Please, Try again.");
                                        
                                }
                                return redirect('/CACM_Controller');

                        }
                        else
                        {
                                $this->load->helper('form');
                                $this->load->helper('url');
                                $this->load->model('CACM_Model');
                                $var = $this->SAC_Model->find_sno($Sno);
                                //echo "<pre>";
                                //print_r($var);
                                $this->load->view('CACMedit_View',['var' => $var]);
                        }
        }

        public function delete($Sno)
        {
                 
                //echo $Sno; exit();
                $this->load->model('CACM_Model');
                if( $this->CACM_Model->delete_sno($Sno) )
                                {
                                        $this->session->set_flashdata('SA_data', "Entry Deleted Successfully!");
                                        
                                }
                                else
                                {
                                        $this->session->set_flashdata('SA_data', "Entry Failed to Delete! Please, Try again.");
                                        
                                }
                                return redirect('/CACM_Controller');

        }*/
}

?>