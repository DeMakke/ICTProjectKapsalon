<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name Login.php
 * @author Niels Bekkers
 */
class Login extends CI_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->model("login_model", "login");
        if(!empty($_SESSION['id_user']))
            redirect('home');
    }

    public function index() {
        if($_POST) {
            $result = $this->login->validate_user($_POST);
            if(!empty($result)) {
                $data = [
                    'id_user' => $result->id_user,
                    'username' => $result->username,
                    'user_email' => $result->email
                ];
       
                //Controleer wie toegang heeft tot het admingedeelte/usergedeelte
                $user = $result->username;
                $idUser = $result->id_user;
                
                if($user == 'admin'&&$idUser == '1'){
                   $this->session->set_userdata($data);         //Sessie gebruikt in controller Home.php
                   redirect('home');            //adminpagina
                }
                else{
                   $this->session->set_userdata('usersessie',$data);         //Sessie gebruikt in controller HomeUser.php
                   redirect('homeUser');        //userpagina
                }

            } else {
                $this->session->set_flashdata('flash_data', '<script>$(document).ready(function(){$("#loginModal").modal("show");});</script>');
                redirect('login');    
            }
        }

        $this->load->view("login");
    }
}
