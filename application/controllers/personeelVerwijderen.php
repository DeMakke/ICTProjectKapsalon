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
        
        //$id = $this->uri->segment(3);
        //$data['query'] = $this->personeel_model->get_all($id)->result();
        $this->deleteclient();
        
    }
    
    public function deleteclient(){
            $id = $this->uri->segment(3);
            $data['query'] = $this->personeel_model->get_all($id)->result();
            $this->load->view("personeelVerwijderen",$data);
        
            if(isset($_GET['id'])){
            $id=$_GET['id'];
            $this->load->model('personeel_model');
            $this->personeel_model->row_delete($id);
            redirect('Personeel');
        }
    }
    
}