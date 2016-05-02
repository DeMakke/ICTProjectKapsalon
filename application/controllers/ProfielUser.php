<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name ProfielUser.php
 * @author Niels Bekkers
 */
class ProfielUser extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
        
        if(empty($this->session->userdata('usersessie','id_user'))) {
            $this->session->set_flashdata('flash_data', 'You don\'t have access!');
            redirect('login');
        }
        
        $this->load->database();
        $this->load->model('profieluser_model');
        $this->load->model('usertotblklant_model');
    }
    public function index(){
        //stopt alle gegevens in dataUser['users']
        
        $this->dataUser['users'] = $this->profieluser_model->get_all();
        
        if (!empty($this->dataUser['users'])) {
            $this->load->view("profielUser",$this->dataUser);
        }
        else
        {
         $this->registreettotblklant();   
        }
        
    }
    
    function registreettotblklant()
    {
        $data = $this->session->userdata['usersessie'];
        
        $this->form_validation->set_rules('surname', 'Voornaam');
        $this->form_validation->set_rules('name', 'Achternaam');
        $this->form_validation->set_rules('phone', 'Telefoonnr');
        $this->form_validation->set_rules('gender', 'Geslacht');
        
        
        //valideer forumier input
        if ($this->form_validation->run() == FALSE)
        {
            // error
            $this->load->view('profieluserregistreer');
        }
        else
        {
            //insert de gebruikersgegevens in de database
            $data2 = array(
                'id_user' => $data['id_user'],
                'username' => $data['username'],
                'Voornaam' => $this->input->post('surname'),
                'Achternaam' => $this->input->post('name'),
                'Telefoonnr' => $this->input->post('phone'),
                'Geslacht' => $this->input->post('gender')
            );
            
           
            
            // insert formulierdata in database
            if ($this->usertotblklant_model->insertUserTotblklant($data2))
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