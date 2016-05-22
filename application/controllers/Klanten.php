<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name Klanten.php
 * @author Niels Bekkers
 */
class Klanten extends CI_Controller{
    function __construct() {
        parent::__construct();
        
        if(empty($this->session->userdata('id_user'))) {
            $this->session->set_flashdata('flash_data', 'You don\'t have access!');
            redirect('login');
        }
        
        $this->load->database();
        $this->load->model('klantadmin_model');
    }
    public function index(){
        
       $this->verwijderKlant();
    }
    
    
    /**
     * functie voor een klant te verwijderen van tblklant en tbllogin
     * haalt alle klanten uit database;
     * als er een ID gekoppeld is, verwijder rij
     */
    public function verwijderKlant()
        {
        $data['query'] = $this->klantadmin_model->get_all()->result();
        $this->load->view('klanten',$data);
        
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $this->klantadmin_model->row_delete_login($id);
            redirect('klanten');
        }
    }
}
