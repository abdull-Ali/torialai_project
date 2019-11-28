<?php
class Users extends MY_Controller{
    function index(){
     echo "users controller";
     $this->load->view('users/articlelist');
     
    }
}
?>