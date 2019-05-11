<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Visitor extends CI_Controller {

    public function index() {
        $this->load->view('register/visitorregister');
    }

    public function my_profile() {
        if ($this->session->userdata('logged_in'))
        {
            if($this->session->userdata('type') == 'tourist')
            {
                $this->load->model('Count_visit');
                $tt['dat']=$this->Count_visit->get_visitor_num_hire($this->session->userdata('id'));
                $tt['took']=$this->Count_visit->get_took_car($this->session->userdata('id'));
                $this->load->view('visitor_profile/visitor_profile',$tt);
            }
            if($this->session->userdata('type') == 'car_owner')
            {

                $id=$this->session->userdata('id');
                
                $sql=$this->db->query("select * from rented_driver where carOwner_id= $id order by id DESC limit 1");
                
                if($sql->num_rows() > 0){
                foreach ($sql->result() as $value) {
                    $not=$value->notification;
                }
               
                }
                 else
                {
                    $not=0;
                }
                $data['note']=$not;
                $this->load->model('C_owner');
                $data['users']=$this->C_owner->car_owner_info($this->session->userdata('id'));
                $this->load->view('car_owner_profile/car_owner_profile',$data);
            }
            if($this->session->userdata('type') == 'tour_guide')
            {
                $id=$this->session->userdata('id');
                
                $sql=$this->db->query("select * from rented_tourguide where tourGuide_id= $id order by id DESC limit 1");
                
                if($sql->num_rows() > 0){
                foreach ($sql->result() as $value) {
                    $not=$value->notification;
                }
               
                }
                 else
                {
                    $not=0;
                }
                $data['note']=$not;
                $this->load->model('Tguide');
                $data['users']=$this->Tguide->guide_info($this->session->userdata('id'));
                $this->load->view('tour_guide_profile/tour_guide_profile',$data);
            }
        }
        else
        {
            redirect("Home"); 
        }
    }

}
