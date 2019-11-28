<?php
class Admin extends MY_Controller{
    function login(){
    echo "admin controller </br>";
    $this->load->library('form_validation');
    $this->form_validation->set_rules('uname','User Name','required|alpha');
    $this->form_validation->set_rules('pass','Password','required');  
    $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
    if($this->form_validation->run()){
        $uname=$this->input->post('uname');
        $pass=$this->input->post('pass');
        $this->load->model('loginmodel');
        $login_id=$this->loginmodel->isvalidate($uname,$pass);
        if($login_id){
            echo "details matched</br>";
            $this->load->library('session');
            $this->session->set_userdata('id',$login_id);
            return redirect('admin/welcome');
        }
        else{
            echo"details not matched";
        }
    }
    else{
         $this->load->view('admin/login'); 
    }     
    
 }


  /* function welcome(){ 

    $this->load->model('loginmodel','ar');
    $articles=$this->ar->articlelist();
    $this->load->view('admin/dashboard',['art'=>$articles]);
 }*/
}
?>