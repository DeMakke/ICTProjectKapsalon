<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name AfspraakUser.php
 * @author Niels Bekkers
 */
class AfspraakUser extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
        
        if(empty($this->session->userdata('usersessie','id_user'))) {
            $this->session->set_flashdata('flash_data', 'You don\'t have access!');
        
        }
        $this->load->database();
        $this->load->model('afspraakUser_model');
        $this->load->model('personeel_model');
        
    }
    
    public function index(){
        $id = $this->uri->segment(3);
        
        $data['behandelingen'] = $this->afspraakUser_model->toonBehandeling($id)->result();
        $data['personeel'] = $this->personeel_model->get_all($id)->result();
        
        if (isset($_POST['btn-afspraak'])){
            
            $dag = $_POST['dagSelect'];
            $uur = $_POST['tijdSelect'];
        
            $dateArray = getdate($uur);  
            $dateArray['hours'];
            $dateArray['minutes'];  
        
            $tijdstip = date("Y-m-d H:i:s",mktime($dateArray['hours'],$dateArray['minutes'], 0, 0,$dag));
            
            $afspraak = array(
            'BehandelingID' => $_POST['typeSelect'],
            'KapsterID' => $_POST['persSelect'],
            'id_user' => $this->session->userdata('usersessie')['id_user'],
            'Tijd' => $tijdstip,
            );
            $this->afspraakUser_model->insertAfspraak($afspraak);
            redirect('homeUser');
        }else{
            $this->load->view('afspraakUser',$data);
        }
        
    }
    

    

}