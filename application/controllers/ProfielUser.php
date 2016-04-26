<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name ProfielUser.php
 * @author Niels Bekkers
 */
class ProfielUser extends CI_Controller{
    function __construct() {
        parent::__construct();
    }
    public function index(){
        $this->load->view("profielUser");
    }
}