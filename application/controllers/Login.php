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
                    'username' => $result->username
                ];
                //Controleer wie toegang heeft tot het admingedeelte
                $user = $result->username;
                if($user == 'admin'){
                   $this->session->set_userdata($data);
                   redirect('home');        //adminpagina
                }
                else{
                   redirect('test');        //userpagina
                }

            } else {
                $this->session->set_flashdata('flash_data', 'Username or password is wrong!');
                redirect('login');
            }
        }

        $this->load->view("login");
    }
}
