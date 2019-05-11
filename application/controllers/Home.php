<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {

        parent::__construct();
        if ($this->session->userdata('id')) {
        $this->load->model('Ads');
        $cat_id=$this->Ads->get_cat();
        $d['adds']=$this->Ads->get_ads($cat_id);
        }
        
        if ($this->db->get('visitors')->num_rows() > 0) {
            $this->db->query("UPDATE  visitors SET visited = visited +1 WHERE id = 95");
         
        } else {
            $d = array();
            $data['visited'] = 1;
            $this->db->insert('visitors', $data);
        }
        $sql = $this->db->get('visitors');
        foreach ($sql->result() as $value) {
            $d['counter'] = $value->visited;
        }
        $this->load->model('Vis');
        $d['vis']=$this->Vis->get_visits()->result();
        $d['place']=$this->Vis->get_place()->result();
        $this->load->view('Home/home', $d);
    }

    public function index() 
    {
    }

    public function hi($v) {
        echo $v;
    }

    public function send_mail() {


        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        //should register with asite gmail
        $config['smtp_user'] = "tourismosite00@gmail.com";
        $config['smtp_pass'] = "Tourismo123";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        $this->email->initialize($config);
        $name = $this->db->escape($this->input->post('name'));
        $email = $this->db->escape($this->input->post('email'));
        $subject = $this->db->escape($this->input->post('subject'));
        $message = $this->db->escape($this->input->post('message'));
        $this->email->from($email, $name);
        $this->email->to('tourismosite00@gmail.com');
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
            $this->session->set_flashdata('send', '<div style="color:green;position:relative;top:40px;left:300px;">The message is sent successfuly</div>');
            redirect('Home');
        } else {
            $this->session->set_flashdata('send', show_error($this->email->print_debugger()));
            redirect('Home');
        }
    }

}
