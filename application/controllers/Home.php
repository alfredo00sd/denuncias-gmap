<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('home/dashboard');
    }


    public function maps()
    {
        $this->load->view('home/maps');    
    }
    
}

/* End of file Controllername.php */
