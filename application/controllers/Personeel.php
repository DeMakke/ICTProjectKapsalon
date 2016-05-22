<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name Personeel.php
 * @author Niels Bekkers
 */
class Personeel extends CI_Controller{
    function __construct() {
        parent::__construct();
        
        if(empty($this->session->userdata('id_user'))) {
            $this->session->set_flashdata('flash_data', 'You don\'t have access!');
            redirect('login');
        }
        
        $this->load->database();
        $this->load->model('personeel_model');
    }

    public function index(){
        
        $this->toonPersoneel();
    }
    
    /**
     * Toont alle personeelgegevens
     */
    function toonPersoneel(){
        $data['query'] = $this->personeel_model->get_all()->result();
        $this->load->view("personeel",$data);
    }
}

