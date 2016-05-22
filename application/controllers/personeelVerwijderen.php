<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name Kalender.php
 * @author Niels Bekkers
 */
class personeelVerwijderen extends CI_Controller{
    function __construct() {
        parent::__construct();
        
        if(empty($this->session->userdata('id_user'))) {
            $this->session->set_flashdata('flash_data', 'You don\'t have access!');
            redirect('login');
        }
        
        $this->load->database();
        $this->load->model('personeel_model');
    }
    public function index(){
        
        $this->deletePersonel();
        
    }
    
    /**
     * functie voor personeel te verwijderen op basis van ID die aan deleteknop zit gekoppeld. 
     */
    public function deletePersonel(){
            
            $data['query'] = $this->personeel_model->get_all()->result();
            $this->load->view("personeelVerwijderen",$data);
        
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $this->personeel_model->row_delete($id);
                redirect('Personeel');
            }
    }
    
}