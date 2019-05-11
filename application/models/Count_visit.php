<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Count_visit extends CI_Model
{
    public function get_tguide_num_hire($id)
    {
        $qry="select count(*) as ct from rented_tourguide where tourGuide_id=".$id;
        return $this->db->query($qry);
    }

    public function get_cowner_num_hire($id)
    {
        $qry="select count(*) as ct from rented_driver where carOwner_id=".$id;
        return $this->db->query($qry);
    }

    public function get_visitor_num_hire($id)
    {
        $qry="select count(*) as ct from rented_driver where tourist_id=".$id;
        $qry2="select count(*) as ct2 from rented_tourguide where tourist_id=".$id;
        $t1=$this->db->query($qry);
        $tt1=$t1->result();

        $t2=$this->db->query($qry2);
        $tt2=$t2->result();

        foreach($tt1 as $d)
        {
            $c1=$d->ct;
        }

        foreach($tt2 as $d1)
        {
            $c2=$d1->ct2;
        }
        return $c1+$c2;
    }
    public function get_took_car($id)
    {
        $qry="select count(*) as ct from rented_driver where tourist_id=".$id;
        return $this->db->query($qry);
    }
}

