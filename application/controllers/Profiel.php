<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name Profiel.php
 * @author Niels Bekkers
 */
class Profiel extends CI_Controller{
    function __construct() {
        parent::__construct();
        
        if(empty($this->session->userdata('id_user'))) {
            $this->session->set_flashdata('flash_data', 'You don\'t have access!');
            redirect('login');
        }
    }
    public function index(){
        $this->load->view("profiel");
    }
}
