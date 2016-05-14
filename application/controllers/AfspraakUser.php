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
            redirect('login');
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
            $afspraak = array(
            'BehandelingID' => $_POST['typeSelect'],
            'KapsterID' => $_POST['persSelect'],
            'id_user' => $this->session->userdata('usersessie')['id_user']
            );
            $this->afspraakUser_model->insertAfspraak($afspraak);
            redirect('profielUser');
        }else{
            $this->load->view('afspraakUser',$data);
        }
        
    }
    
    public function berekenTijd(){
        
        $dag = $_POST['dagSelect'];
        
    }
    
    
//    public function toevoegen($data){
//        $toevoegen = array(
//                'Type' => $data['behandeling'],
//                'Voornaam' => $data['personeel'],
//                //'tijd' => $this->input->post('tijdSelect'),
//            );
//        
//        if ($this->afspraakUser_model->insertAfspraak($toevoegen)) {
//                $this->session->set_flashdata('flashSuccess','<center><br/><img src="https://upload.wikimedia.org/wikipedia/commons/b/b0/Light_green_check.svg" width="30" height="30"/><h1>Uw afspraak is aangemaakt!</h1><center>');
//                    header('Refresh: 5; URL=');
//                    redirect('afspraakUser');
//            }
//            else
//            {
//                 //error
//               $this->session->set_flashdata('Oops! er is iets misgegaan, probeer nogmaals!');
//                redirect('');
//            }
//    }
}