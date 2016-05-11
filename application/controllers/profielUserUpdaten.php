<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name Klanten.php
 * @author Niels Bekkers
 */

class profielUserUpdaten extends CI_Controller{
    function __construct() {
        parent::__construct();
        
//        if(empty($this->session->userdata('id_user'))) {
//            $this->session->set_flashdata('flash_data', 'You don\'t have access!');
//            redirect('login');
//        }
        if(empty($this->session->userdata('usersessie','id_user'))) {
            $this->session->set_flashdata('flash_data', 'You don\'t have access!');
            redirect('login');
        }
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
        
        $this->load->database();
        $this->load->model('profieluser_model');
    }
    public function index(){
        
     $this->klantUpdaten();  
       
     
    }
    
    /**
     * functie voor editteren van klantgegevens
     */
    function klantUpdaten()
    {
        $data3 = $this->session->userdata('usersessie');
        $id = $data3['id_user'];
        $this->form_validation->set_rules('surname', 'Voornaam','trim|required');
        $this->form_validation->set_rules('name', 'Achternaam','trim|required');
        $this->form_validation->set_rules('phone', 'Telefoonnr','trim|required');
        $this->form_validation->set_rules('gender', 'Geslacht','trim|required');
        
        
        //valideer forumier input
        if ($this->form_validation->run() == FALSE)
        {
            // error
            $this->load->view('profieluserupdaten');
        }
        else
        {
            //insert de gebruikersgegevens in de database
            $data = array(
                'Voornaam' => $this->input->post('surname'),
                'Achternaam' => $this->input->post('name'),
                'Telefoonnr' => $this->input->post('phone'),
                'Geslacht' => $this->input->post('gender')
            );
            
           
            
            // insert formulierdata in database
            if ($this->profieluser_model->update_klant($id,$data))
            {
                    //succesvol geregistreerd
                    $this->session->set_flashdata('flashSuccess','<center><br/><img src="https://upload.wikimedia.org/wikipedia/commons/b/b0/Light_green_check.svg" width="30" height="30"/><h1>Proficiat! U bent succesvol geregistreerd</h1><center>');
                    header('Refresh: 5; URL=');
                    redirect('profieluser');
                    

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