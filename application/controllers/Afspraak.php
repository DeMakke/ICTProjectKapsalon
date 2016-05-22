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
        
        if(isset($_POST['delete'])){
            
            $deleteData = $_POST['delete'];
            $Delete = explode('/', $deleteData);
            
            $KapsterID = $Delete[0];
            $AfspraakDag = $Delete[1];
            $Tijd = $Delete[2];
            
            $this->afspraak_model->row_delete($KapsterID,$AfspraakDag,$Tijd);
            redirect('afspraak');
        }
        
               
    }
}

