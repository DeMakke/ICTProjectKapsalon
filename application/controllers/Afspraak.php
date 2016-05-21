<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name Afspraak.php
 * @author Niels Bekkers
 */
class Afspraak extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
        
        if(empty($this->session->userdata('id_user'))) {
            $this->session->set_flashdata('flash_data', 'You don\'t have access!');
            redirect('login');
        }
        $this->load->database();
        $this->load->model('afspraak_model');
    }
    public function index(){
        $data['afspraak'] = $this->afspraak_model->getAlleAfspraken()->result();
        
        $this->load->view("afspraak",$data);       
    }
}

