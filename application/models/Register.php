<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Model {

    public function reg($table, $data) {
        if ($this->db->insert($table, $data)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function login($username, $password, $table) {
        //$this->db->where('email',$username);
        //$this->db->where('password',$password);
        //$q=$this->db->get($table);
        //mysql injection to prevent the query from hacking
        $q = $this->db->query("SELECT * FROM $table WHERE email = ? and password = ?", array($username, $password));
        if ($q->num_rows() > 0) {
            return $q->result();
        } else {
            return FALSE;
        }
    }

public function api_reg($data, $type) {
  
          if ($type == 'tourist') {
           $q=$this->db->insert('tourist', $data);
            if ($this->db->affected_rows() > 0)
                {
              $d1['success'] = 'success';
            $d = json_encode(['result' => $d1]);
           
            echo $d;
                 }
            else
                {
                    echo "Error ";
                }
        } elseif ($type == 'car_owner') {
             $q=$this->db->insert('car_owner', $data);
            if ($this->db->affected_rows() > 0)
               {
                $d1['success'] = 'success';
            $d = json_encode(['result' => $d1]);
            
            echo $d;
        }
            else{
                 echo "Error ";
        }
        } elseif ($type == 'tour_guide') {
          $q=$this->db->insert('tour_guide', $data);
            if ($this->db->affected_rows() > 0)
              {
            $d1['success'] = 'success';
            $d = json_encode(['result' => $d1]);
           
            echo $d;
                }
            else
                {
                    echo "Error";
                }
        } else {
            echo "Error ";
        }
         
    }
    public function api_login($data) {
        $arr=array();
        $user_id = 0;
        $flag = TRUE;
        $this->db->where('email', $data['email']);
        $this->db->where('password', $data['password']);
        $query = $this->db->get('tourist');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $value) {
                $arr['user_id'] = $value->tourist_id;
                $arr['type']='tourist';
            }
            return $arr;
        } else {
            $flag = FALSE;
        }
        $this->db->where('email', $data['email']);
        $this->db->where('password', $data['password']);
        $q1 = $this->db->get('car_owner');
        if ($q1->num_rows() > 0) {
            foreach ($q1->result() as $value) {
                $arr['user_id'] = $value->carOwner_id;
                $arr['type']='carOwner';
              
            }
              return $arr;
        } else {
            $flag = FALSE;
        }
        $this->db->where('email', $data['email']);
        $this->db->where('password', $data['password']);
        $q2 = $this->db->get('tour_guide');
        if ($q2->num_rows() > 0) {
            foreach ($q2->result() as $value) {
                $arr['user_id'] = $value->tourGuide_id;
                 $arr['type']='tourGuide';
            }
              return $arr;
        } else {
            $flag = FALSE;
        }
        if ($flag == FALSE) {
             return FALSE;  
        } 
    }
    public function set_memory($data) {
        if($this->db->insert('memory',$data))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    public function get_memory($id) {
        $this->db->where('user_id',$id);
        if($this->db->get('memory')->num_rows() > 0)
        {
            return  $this->db->get('memory')->result();
        }
        else
        {
            return FALSE;
        }
    }

}