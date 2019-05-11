<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tguide extends CI_Model
{
    public function sel_guide()
    {
        $query=$this->db->get("tour_guide");
        return $query->result();
    }
    public function guide_info($id)
    {
        $this->db->where('tourGuide_id',$id);
        $q=$this->db->get("tour_guide");
        return $q->result();
    }
}
