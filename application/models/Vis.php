<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vis extends CI_Model
{
    public function get_visits()
    {
        $query="select country,count(*) as cunt from tourist group by(country) order by(country)  limit 5 ";
        return $this->db->query($query);
    }
    public function get_place()
    {
        $query="select place,count(*) as cunt from search_result group by(place) order by(cunt) desc limit 4 ";
        return $this->db->query($query);
    }

    public function get_option_pos($id)
    {
        $query="select count(*) as cont_pos from places_rate where rate=1 and place_id=".$id;
        return $this->db->query($query);
    }
    public function get_option_neg($id)
    {
        $query="select count(*) as cont_neg from places_rate where rate=0 and place_id=".$id;
        return $this->db->query($query);
    }

}

