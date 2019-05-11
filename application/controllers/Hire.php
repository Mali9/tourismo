<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hire extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('HireModel');
    }

    public function rentedTourGuide($id) {
        //`tourGuide_id`, `tourist_id`, `num_of_rent`, `notification`
        $data['tourGuide_id'] = $id;
        $data['tourist_id'] = $this->session->userdata("id");
        $data['notification'] = 1;
        if ($this->HireModel->tour_guide($data)) {
            $this->session->set_flashdata('hired', 'Hiring Successfuly');
            redirect("tour_guide/profile/?sub=$id");
        } else {
            $this->session->set_flashdata('hired', 'You Already hired it !');
            redirect("tour_guide/profile/?sub=$id");
        }
    }

    public function rentedCarOwner($id) {
        $data['carOwner_id'] = $id;
        $data['tourist_id'] = $this->session->userdata("id");
        $data['notification'] = 1;
        if ($this->HireModel->car_owner($data)) {
            $this->session->set_flashdata('hired', 'Hiring Successfuly');
            redirect("car_owner/prof/?sub=$id");
        } else {
            $this->session->set_flashdata('hired', 'You Already hired it !');
            redirect("car_owner/prof/?sub=$id");
        }
    }
    public function car_notification($id)
    {
        $q1=$this->db->query("UPDATE rented_driver SET notification = 0 WHERE carOwner_id =$id;");
        $arr=array();
        $this->db->where('carOwner_id',$id);

       $sql= $this->db->get('rented_driver');
       foreach ($sql->result() as $value)
    {
          $this->db->where('tourist_id',$value->tourist_id); 
          $query= $this->db->get('tourist');
          if($query->num_rows() > 0)
          {
          foreach ($query->result() as $v )
              {
              $arr["names"][] = $v->username;
              $arr["emails"][] = $v->email;
              $arr["time"][] = $value->time;
              $arr["readed"][] = $value->readed;
              $arr["id"][] = $value->id;
              }
          }
        } 
         $data["result"]=$arr;
         $this->load->view("rented_carOwner_view",$data);

        
    

   }
    public function tour_notification($id)
    {
         $q1=$this->db->query("UPDATE rented_tourguide SET notification = 0 WHERE tourGuide_id =$id;");
        $arr=array();
        $this->db->where('tourGuide_id',$id);

       $sql= $this->db->get('rented_tourguide');
       foreach ($sql->result() as $value)
    {
          $this->db->where('tourist_id',$value->tourist_id); 
          $query= $this->db->get('tourist');
          if($query->num_rows() > 0)
          {
          foreach ($query->result() as $v )
              {
              $arr["names"][] = $v->username;
              $arr["emails"][] = $v->email;
              $arr["time"][] = $value->time;
              $arr["readed"][] = $value->readed;
              $arr["id"][] = $value->id;
              }
          }
        } 
         $data["result"]=$arr;

         $this->load->view("rented_tourGuide_view",$data);
       
    }
    public function delete_car($id)
    {
      $c_id=$this->session->userdata('id');
      $this->db->where('id', $id);
      $this->db->delete('rented_driver');
      $this->session->set_flashdata('c_deleted', 'Your Message Deleted successfuly  !');
      redirect("Hire/car_notification/$c_id");

    }
    public function delete_tour($id)
    {
      $c_id=$this->session->userdata('id');
      $this->db->where('id', $id);
      $this->db->delete('rented_tourguide');
      $this->session->set_flashdata('c_deleted', 'Your Message Deleted successfuly  !');
      redirect("Hire/tour_notification/$c_id");

    }
    public function read_car($id)
    {
      $c_id=$this->session->userdata('id');
    $q1=$this->db->query("UPDATE rented_driver SET readed = 1 WHERE id =$id;");

    redirect("Hire/car_notification/$c_id");

    }
      public function read_tour($id)
    {
      $c_id=$this->session->userdata('id');
    $q1=$this->db->query("UPDATE rented_tourguide SET readed = 1 WHERE id =$id;");

    redirect("Hire/tour_notification/$c_id");

    }


}
