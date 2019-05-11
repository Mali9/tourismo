<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Model
{
    public function Edit_visitor($id)
    {
        $this->db->where('tourist_id',$id);
        $q=$this->db->get('tourist');
        return $q->result();
    }
    public function Edit_tourguide($id)
    {
        $this->db->where('tourGuide_id',$id);
        $q=$this->db->get('tour_guide');
        return $q->result();
    }
    public function Edit_carowner($id)
    {
        $this->db->where('carOwner_id',$id);
        $q=$this->db->get('car_owner');
        return $q->result();
    }
}