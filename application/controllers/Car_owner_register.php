<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car_owner_register extends CI_Controller
{

    public function index() {
        $this->load->view('register/carregister');
        
    }

}
