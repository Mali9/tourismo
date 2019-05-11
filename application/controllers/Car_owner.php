<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car_owner extends CI_Controller
{

    public function index()
    {
        $this->load->model('C_owner');
        $data['users']=$this->C_owner->sel_c_owner();
        $this->load->view('Car_owner/car_owner',$data);
        
    }
    public function prof()
    {
        $this->load->model('C_owner');
        $data['users']=$this->C_owner->car_owner_info($_GET['sub']);
        $this->load->model("Count_visit");
        $data['c']=$this->Count_visit->get_cowner_num_hire($_GET['sub']);
        $this->load->view('car_owner_profile/car_owner_profile',$data);
    }
    

}
