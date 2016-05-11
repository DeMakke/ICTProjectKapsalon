<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name AfspraakUser.php
 * @author Niels Bekkers
 */
class AfspraakUser extends CI_Controller{
    function __construct() {
        parent::__construct();
        
        if(empty($this->session->userdata('usersessie','id_user'))) {
            $this->session->set_flashdata('flash_data', 'You don\'t have access!');
            redirect('login');
        }
        $this->load->database();
        $this->load->model('afspraakUser_model');
    }
    
    public function index(){
        $data = array();
          
        $data['behandeling'] = $this->afspraakUser_model->toonBehandeling();
        $data['personeel'] = $this->afspraakUser_model->toonPersoneel();
        $data['maand'] = $this->afspraakUser_model->toonMaand();

        $this->load->view('afspraakUser', $data);
    }
}
