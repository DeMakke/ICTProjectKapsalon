<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name Klanten.php
 * @author Niels Bekkers
 */
class Klanten extends CI_Controller{
    function __construct() {
        parent::__construct();
        
        if(empty($this->session->userdata('id_user'))) {
            $this->session->set_flashdata('flash_data', 'You don\'t have access!');
            redirect('login');
        }
        
        $this->load->database();
        $this->load->model('klantadmin_model');
    }
    public function index(){
        
        $this->dataUser['users'] = $this->klantadmin_model->get_all();
        $this->load->view("klanten",$this->dataUser);
    }
}
