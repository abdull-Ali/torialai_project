<?php 
class Loginmodel extends CI_Model{

    function isvalidate($usernsame,$password){

        
       $q= $this->db->where(['username'=>$usernsame,'password'=>$password])
                  ->get('users');
                  
        if($q->num_rows()){
            return $q->row()->id;
        }
        else{
            return false;
        }

    }

    /*function articlelist(){
        $id=$this->session->userdata('id');
      
        $q= $this->db->where(['id'=>$id])
                     ->get('articles');
        print_r($q->result());
            exit;
    }*/
}
?>