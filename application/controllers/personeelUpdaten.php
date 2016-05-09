<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name Klanten.php
 * @author Niels Bekkers
 */
//class personeelUpdaten extends CI_Controller{
//    function __construct() {
//        parent::__construct();
//        
//        if(empty($this->session->userdata('id_user'))) {
//            $this->session->set_flashdata('flash_data', 'You don\'t have access!');
//            redirect('login');
//        }
//        
//        $this->load->database();
//        $this->load->model('personeel_model');
//    }
//    public function index(){
//       $this->update_student_id();
//    }
//    
//    public function show_student_id2(){
//        $id = $this->uri->segment(3);
//        $data['query'] = $this->personeel_model->get_all($id)->result();
//        $data['Personeels'] = $this->personeel_model->show_student_id($id);
//        $this->load->view("personeelUpdaten",$data);
//    }
//    
//    public function update_student_id(){
//        $id=$this->input->post('did');
//        $data = array(
//            'Voornaam' => $this->input->post('surname'),
//        );
//        $this->personeel_model->update_student_id1($id,$data);
//        $this->show_student_id2();
//    }
//        
//}
class PersoneelUpdaten extends CI_Controller{
    function __construct() {
        parent::__construct();
        
        if(empty($this->session->userdata('id_user'))) {
            $this->session->set_flashdata('flash_data', 'You don\'t have access!');
            redirect('login');
        }
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
        
        $this->load->database();
        $this->load->model('personeel_model');
    }
    public function index(){
     $this->toevoegen();  
     
    }
    
    function toevoegen()
    {
        $id = $this->uri->segment(3);
        $personeel['query'] = $this->personeel_model->get_all($id)->result();
        //validatie regels
        $this->form_validation->set_rules('name', 'Voornaam');
        $this->form_validation->set_rules('surname', 'Achternaam');
        $this->form_validation->set_rules('street', 'straat');
        $this->form_validation->set_rules('nr', 'nr');
        $this->form_validation->set_rules('city', 'plaats');
        $this->form_validation->set_rules('zipcode', 'postcode');
        $this->form_validation->set_rules('phone', 'Telefoonnr');
        $this->form_validation->set_rules('cellphone', 'Gsmnr');
        $this->form_validation->set_rules('email', 'email');
        $this->form_validation->set_rules('dob', 'Geboortedatum');
        $this->form_validation->set_rules('gender', 'Geslacht');
        
        //valideer formulier input
        
        if ($this->form_validation->run() == FALSE){
            $this->load->view('personeelUpdaten',$personeel);
        }
        else{
            $data = array(
                
                'Voornaam' => $this->input->post('name'),
                'Achternaam' => $this->input->post('surname'),
                'straat' => $this->input->post('street'),
                'nr' => $this->input->post('nr'),
                'plaats' => $this->input->post('city'),
                'postcode' => $this->input->post('zipcode'),
                'Telefoonnr' => $this->input->post('phone'),
                'Gsmnr' => $this->input->post('cellphone'),
                'email' => $this->input->post('email'),
                'Geboortedatum' => $this->input->post('dob'),
                'Geslacht' => $this->input->post('gender'),
            );
            
            if ($this->personeel_model->update_personel($id,$data)) {
                $this->session->set_flashdata('flashSuccess','<center><br/><img src="https://upload.wikimedia.org/wikipedia/commons/b/b0/Light_green_check.svg" width="30" height="30"/><h1>Proficiat! U bent succesvol geregistreerd</h1><center>');
                    header('Refresh: 5; URL=');
                    redirect('Personeel');
            }
            else
            {
                 //error
               $this->session->set_flashdata('Oops! er is iets misgegaan, probeer nogmaals!');
                redirect('');
            }
        }
        
    }
}