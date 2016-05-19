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
        $this->load->model('afspraak_model');
        $this->load->model('personeel_model');
    }
    
    public function index(){
        $id = $this->uri->segment(3);
        
//        $id = $this->session->userdata('usersessie')['id_user'];
        
        $data['behandelingen'] = $this->afspraak_model->toonBehandeling()->result();
        $data['personeel'] = $this->personeel_model->get_all($id)->result();
        
        //alle data in commentaar is om de bestaande afspraken in de 2de tabel te tonen
        
//        $data['afspraakKlant'] = $this->afspraak_model->getKlant($id)->result();
//        $data['afspraakBehandeling'] = $this->afspraak_model->getBehandeling($id)->result();
//        $data['afspraakTijd'] = $this->afspraak_model->getTijd($id)->result();
//        $data['afspraakKapster'] = $this->afspraak_model->getKapster($id)->result();
//        $data['aantal'] = $this->afspraak_model->getAantalAfspraken($id)->result();
        
        if (isset($_POST['btn-afspraak'])){
            
            $dag = $_POST['dagSelect'];
            $uur = $_POST['uurSelect'];
            
            //uur en minuten converteren voor mysql
            $uurArray = explode(":",$uur); //uur en minuten opsplitsen
            $tijd = mktime($uurArray['0'], $uurArray['1'],0,0);
            
            //weekdag naar datum converteren voor mysql
            $datumArray = getdate();
            $dagBerekening = $dag + $datumArray['mday'];
            $datum = mktime(0,0,0,$datumArray['mon'],$dagBerekening,$datumArray['year']);
            
            $afspraak = array(
            'BehandelingID' => $_POST['typeSelect'],
            'KapsterID' => $_POST['persSelect'],
            //'id_user' => $id, -> variabele bovenaan index() omdat id nu ook in model gebruikt zal worden
            'id_user' => $this->session->userdata('usersessie')['id_user'],
            'Tijd' => date("H:i:s",$tijd),
            'AfspraakDag' => date("Y-m-d",$datum),
            );
            $this->afspraak_model->insertAfspraak($afspraak);
            redirect('afspraakUser');
        }else{
            $this->load->view('afspraakUser',$data);
        }
    }
}