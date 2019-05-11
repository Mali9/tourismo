<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller 
{
    public function show_visit_info($x)
    {
     $this->load->model('Edit');
     $data['tourist']=$this->Edit->edit_visitor($x);
     $this->load->view('edit_visit_prof/edit_visit_prof',$data);   
    }

    public function edit_visit($d)
    {
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'gif|jpg|png|txt';
        $config['max_size'] = 10000;
        $config['max_width'] = 10024;
        $config['max_height'] = 7468;
        $this->load->library('upload');
        $this->upload->initialize($config);
         if(!$this->upload->do_upload('userpic')) 
        {
            $this->upload->display_errors();
            $img=$this->session->userdata('img');
        }
        else
        {
            $img ="images/".$this->upload->data('file_name');
                //$img=array('upload_data' => $this->upload->data());
        }
    
    //else{$img=$this->session->userdata('img');}
        $data=array('username' => $_POST['username'],
            'email' => $_POST['email'],
            'age' => $_POST['age'],
            'country' => $_POST['country'],
            'password' => $_POST['password'],
            'profile_pic' => $img 
        );
        $this->db->where('tourist_id',$d);
        $this->db->update('tourist',$data);

        $data=array('username' => $_POST['username'],
            'email' => $_POST['email'],
            'age' => $_POST['age'],
            'country' => $_POST['country'],
            'password' => $_POST['password'],
            'img' => $img 
        );
        $this->session->set_userdata($data);
        redirect("Update/show_visit_info/$d");     
    }

    public function show_tguide_info($x)
    {

     $this->load->model('Edit');
     $data['tour_guide']=$this->Edit->Edit_tourguide($x);
     $this->load->view('edit_tguide_prof/edit_tguide_prof',$data);   
    }


    public function edit_tguide($d)
    {
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'gif|jpg|png|txt';
        $config['max_size'] = 10000;
        $config['max_width'] = 10024;
        $config['max_height'] = 7468;
        $this->load->library('upload');
        $this->upload->initialize($config);
         if(!$this->upload->do_upload('userpic')) 
        {
            $this->upload->display_errors();
            $img=$this->session->userdata('img');
        }
        else
        {
            $img ="images/".$this->upload->data('file_name');
                //$img=array('upload_data' => $this->upload->data());
        }
    
    //else{$img=$this->session->userdata('img');}
        $data=array('username' => $_POST['username'],
            'email' => $_POST['email'],
            'age' => $_POST['age'],
            'country' => $_POST['country'],
            'password' => $_POST['password'],
            'profile_pic' => $img 
        );
        $this->db->where('tourGuide_id',$d);
        $this->db->update('tour_guide',$data);

        $data=array('username' => $_POST['username'],
            'email' => $_POST['email'],
            'age' => $_POST['age'],
            'country' => $_POST['country'],
            'password' => $_POST['password'],
            'img' => $img 
        );
        $this->session->set_userdata($data);
        redirect("Update/show_tguide_info/$d");     
    }

    public function show_cowner_info($x)
    {

     $this->load->model('Edit');
     $data['car_owner']=$this->Edit->Edit_carowner($x);
     $this->load->view('edit_cowner_prof/edit_cowner_prof',$data);   
    }

        public function edit_cowner($d)
    {
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'gif|jpg|png|txt';
        $config['max_size'] = 10000;
        $config['max_width'] = 10024;
        $config['max_height'] = 7468;
        $this->load->library('upload');
        $this->upload->initialize($config);
         if(!$this->upload->do_upload('userpic')) 
        {
            $this->upload->display_errors();
            $img=$this->session->userdata('img');
        }
        else
        {
            $img ="images/".$this->upload->data('file_name');
                //$img=array('upload_data' => $this->upload->data());
        }
    
    //else{$img=$this->session->userdata('img');}
        $data=array('username' => $_POST['username'],
            'email' => $_POST['email'],
            'age' => $_POST['age'],
            'password' => $_POST['password'],
            'profile_pic' => $img 
        );
        $this->db->where('carOwner_id',$d);
        $this->db->update('car_owner',$data);

        $data=array('username' => $_POST['username'],
            'email' => $_POST['email'],
            'age' => $_POST['age'],
            'country' => $_POST['country'],
            'password' => $_POST['password'],
            'img' => $img 
        );
        $this->session->set_userdata($data);
        redirect("Update/show_cowner_info/$d");     
    }

}
?>