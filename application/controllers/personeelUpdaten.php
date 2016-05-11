<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name Klanten.php
 * @author Niels Bekkers
 */

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
     $this->editPersonel();  
     
    }
    /**
     * functie voor personeel te editteren
     */
    function editPersonel()
    {
        $id = $this->uri->segment(3);
        //validatie regels
        $this->form_validation->set_rules('name', 'Voornaam','trim|required');
        $this->form_validation->set_rules('surname', 'Achternaam','trim|required');
        $this->form_validation->set_rules('street', 'straat','trim|required');
        $this->form_validation->set_rules('nr', 'nr','trim|required');
        $this->form_validation->set_rules('city', 'plaats','trim|required');
        $this->form_validation->set_rules('zipcode', 'postcode','trim|required');
        $this->form_validation->set_rules('phone', 'Telefoonnr','trim|required');
        $this->form_validation->set_rules('cellphone', 'Gsmnr','trim|required');
        $this->form_validation->set_rules('email', 'email','trim|required');
        $this->form_validation->set_rules('dob', 'Geboortedatum','trim|required');
        $this->form_validation->set_rules('gender', 'Geslacht','trim|required');
        
        //valideer formulier input
        
        if ($this->form_validation->run() == FALSE){
            $this->load->view('personeelUpdaten');
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