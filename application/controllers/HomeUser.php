<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name HomeUser.php
 * @author Niels Bekkers
 */
class HomeUser extends CI_Controller
{

    function __construct() {
        parent::__construct();

        if(empty($this->session->userdata('id_user'))) {
            $this->session->set_flashdata('flash_data', 'You don\'t have access!');
            redirect('login');  
        }
    }

    public function index() {
        $this->load->view('homeUser');
    }

    public function logout() {
        $data = ['id_user', 'username'];
        $this->session->unset_userdata($data);

        redirect('login');
    }
}