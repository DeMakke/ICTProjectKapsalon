<?php
/**
 * @name UploadFile.php
 * @author Niels Bekkers
 */

class UploadFile extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    //index functie
    function index()
    {
        //laad view
        $this->load->view('profielUser');
    }

    //upload functie
    function upload()
    {
        $data = $this->session->userdata('usersessie');
        //stel instellingen in
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'png';
        $config['max_size']    = '100';
        $config['file_name'] = $data['username'];

        //laad de upload library in
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('filename'))
        {
            //mislukt
            $upload_error = array('error' => $this->upload->display_errors());
            $this->load->view('profielUser', $upload_error);
            //redirect('profielUser');
        }
        else
        {
            //slaagt
            $upload_data = $this->upload->data();
            $data['success_msg'] = '<div class="alert alert-success text-center">Je bestand <strong>' . $upload_data['file_name'] . '</strong> is succesvol geupload!</div>';
            $this->load->view('profielUser');
            redirect('profielUser');
        }
    }
}
?>
