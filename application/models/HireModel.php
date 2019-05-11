<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class HireModel extends CI_Model {

    public function tour_guide($data) {
        //`tourGuide_id`, `tourist_id`, `num_of_rent`, `notification`

        $id = $data['tourGuide_id'];
        $this->db->where('tourGuide_id', $id);
        $q = $this->db->get('rented_tourguide');
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $value) {
                $not = $value->notification;
            }
            $not += 1;
            $data['notification'] = $not;
            $this->db->where('tourGuide_id', $id);
            $this->db->where('notification !=', 0);
            $this->db->where('tourist_id',$this->session->userdata("id"));
            $q1 = $this->db->get('rented_tourguide');
            if($q1->num_rows() > 0) {
                return FALSE;
            } else {
            if($this->db->insert("rented_tourguide", $data)) {
                return TRUE;
            } else {
                return false;
            }
            }
        }
         else {
            if ($this->db->insert("rented_tourguide", $data)) {
                return TRUE;
            } else {
                return false;
            }
        }
        }
           public function car_owner($data) {
        //`carOwner_id`, `tourist_id`, `notification`

        $id = $data['carOwner_id'];
        $this->db->where('carOwner_id', $id);
        $q = $this->db->get('rented_driver');
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $value) {
                $not = $value->notification;
            }
            $not += 1;
            $data['notification'] = $not;
            $this->db->where('carOwner_id', $id);
            $this->db->where('notification !=', 0);
            $this->db->where('tourist_id',$this->session->userdata("id"));
            $q1 = $this->db->get('rented_driver');
            if($q1->num_rows() > 0) {
                return FALSE;
            } else {
            if($this->db->insert("rented_driver", $data)) {
                return TRUE;
            } else {
                return false;
            }
            }
        }
         else {
            if ($this->db->insert("rented_driver", $data)) {
                return TRUE;
            } else {
                return false;
            }
        }
        }
        


}
