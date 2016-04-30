<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name ProfielUser.php
 * @author Niels Bekkers
 */
class ProfielUser extends CI_Controller{
    function __construct() {
        parent::__construct();
        
        if(empty($this->session->userdata('usersessie','id_user'))) {
            $this->session->set_flashdata('flash_data', 'You don\'t have access!');
            redirect('login');
        }
        
        $this->load->database();
        $this->load->model('profieluser_model');
    }
    public function index(){
        //stopt alle gegevens in dataUser['users']
        $this->dataUser['users'] = $this->profieluser_model->get_all();
        $this->load->view("profielUser",$this->dataUser);
    }
}