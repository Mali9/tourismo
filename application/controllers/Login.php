<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Register');
    }

    public function index() {
        $this->load->view('register/login');
    }

    public function login() {
        if ($this->input->post('tourist_login')) {
            //tourist login
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $result = $this->Register->login($username, $password, 'tourist');
            if ($result == FALSE) {
                $this->session->set_flashdata('login-failed', 'The email or password is not correct please enter the correct email or password');
                $this->load->view('register/login');
            } else {

                foreach ($result as $value) {
                    $newdata = array(
                        'username' => $value->username,
                        'email' => $value->email,
                        'id' => $value->tourist_id,
                        'img' => $value->profile_pic,
                        'country' => $value->country,
                        'gender' => $value->gender,
                        'age' => $value->age,
                        'date' => $value->date,
                        'type' => 'tourist',
                        'logged_in' => TRUE
                    );

                    $this->session->set_userdata($newdata);
                    $this->session->set_flashdata('login', 'You are logged in now!');

                    redirect('Home');
                }
            }
        } elseif ($this->input->post('car_owner_login')) {

            //car owner login
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $result = $this->Register->login($username, $password, 'car_owner');
            if ($result == FALSE) {
                $this->session->set_flashdata('login-failed', 'The email or password is not correct please enter the correct email or password');
                $this->load->view('register/login');

                            }
                 else {

                foreach ($result as $value) {
                    $newdata = array(
                        'username' => $value->username,
                        'email' => $value->email,
                        'id' => $value->carOwner_id,
                        'img' => $value->profile_pic,
                        'country' => $value->country,
                        'gender' => $value->gender,
                        'age' => $value->age,
                        'date' => $value->date,
                        'type' => 'car_owner',
                        'logged_in' => TRUE
                    );

                    $this->session->set_userdata($newdata);
                    $this->session->set_flashdata('login', 'You are logged in now!');

                    redirect('Home');
                }
            }
        } elseif ($this->input->post('tour_guide_login')) {
            //tour guide login
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $result = $this->Register->login($username, $password, 'tour_guide');
            if ($result == FALSE) {
                $this->session->set_flashdata('login-failed', 'The email or password is not correct please enter the correct email or password');
                $this->load->view('register/login');
            } else {

                foreach ($result as $value) {
                    $newdata = array(
                        'username' => $value->username,
                        'email' => $value->email,
                        'id' => $value->tourGuide_id,
                        'img' => $value->profile_pic,
                        'country' => $value->country,
                        'gender' => $value->gender,
                        'age' => $value->age,
                        'date' => $value->date,
                        'type' => 'tour_guide',
                        'logged_in' => TRUE
                    );

                    $this->session->set_userdata($newdata);
                    $this->session->set_flashdata('login', 'You are logged in now!');

                    redirect('Home');
                }
            }
        }
    }

    public function visitor_register() {
        $this->form_validation->set_message('regex_match', 'The password must contain at least one upper alphapet and number');
        $this->form_validation->set_message('is_unique', 'The name or email is already Exists please try another name or email');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[tourist.username]|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim|is_unique[tourist.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/]');
        $this->form_validation->set_rules('country', 'Country', 'required|trim|min_length[3]');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim|numeric|min_length[7]|max_length[13]');
        $this->form_validation->set_rules('age', 'Age', 'required|trim|numeric');
        $this->form_validation->set_rules('gender', 'Gender', 'required|trim');
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'gif|jpg|png|txt';
        $config['max_size'] = 10000;
        $config['max_width'] = 10024;
        $config['max_height'] = 7468;
        $this->load->library('upload');
        $this->upload->initialize($config);
        if
        (!$this->upload->do_upload('userpic')) {
            $this->upload->display_errors();
        }

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('register/visitorregister');
        } else {
            //`tourist_id`, `username`, `password`, `country`, `email`, `gender`, `age`, `profile_pic`, `tourGuid_id`, `carOwner_id`

            $data['username'] = $this->input->post('username');
            $data['password'] = $this->input->post('password');
            $data['country'] = $this->input->post('country');
            $data['email'] = $this->input->post('email');
            $data['gender'] = $this->input->post('gender');
            $data['age'] = $this->input->post('age');
            $data['tourGuid_id'] = 0;
            $data['carOwner_id'] = 0;
            $data['profile_pic'] = base_url() . $this->upload->data('file_name');
            if ($this->Register->Reg('tourist', $data) == TRUE) {
                $this->session->set_flashdata('register', 'you are register Successfully');
                redirect('Home');
            } else {
                $this->session->set_flashdata('register', 'Failled to Register plz try again');
                redirect('Home');
            }
        }
    }

    public function guide_register() {
        $this->form_validation->set_message('regex_match', 'The password must contain at least one upper alphapet and number');
        $this->form_validation->set_message('is_unique', 'The name or email is already Exists please try another name or email');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[tour_guide.username]|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim|is_unique[tour_guide.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/]');
        $this->form_validation->set_rules('country', 'Country', 'required|trim|min_length[3]');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim|numeric|min_length[7]|max_length[13]');
        $this->form_validation->set_rules('age', 'Age', 'required|trim|numeric');
        $this->form_validation->set_rules('gender', 'Gender', 'required|trim');
        $this->form_validation->set_rules('language', 'Language', 'required|trim|min_length[3]');
        $this->form_validation->set_rules('salary', 'Salary', 'required|trim');
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'gif|jpg|png|txt';
        $config['max_size'] = 10000;
        $config['max_width'] = 10024;
        $config['max_height'] = 7468;
        $this->load->library('upload');
        $this->upload->initialize($config);
        if
        (!$this->upload->do_upload('userpic')) {
            $this->upload->display_errors();
        }

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('register/guideregister');
        } else {
//`tourGuide_id`, `username`, `password`, `age`, `email`, `gender`, `language`, `profile_pic`, `tourist_id`, `hour_salary`
            $data['username'] = $this->input->post('username');
            $data['password'] = $this->input->post('password');
            $data['country'] = $this->input->post('country');
            $data['email'] = $this->input->post('email');
            $data['gender'] = $this->input->post('gender');
            $data['age'] = $this->input->post('age');
            $data['tourist_id'] = 0;
            $data['language'] = $this->input->post('language');
            $data['hour_salary'] = $this->input->post('salary');
            $data['profile_pic'] = base_url() . "images/" . $this->upload->data('file_name');
            if ($this->Register->reg('tour_guide', $data) == TRUE) {
                $this->session->set_flashdata('register', 'you are register Successfully');
                redirect('Home');
            } else {
                $this->session->set_flashdata('register', 'Failled to Register plz try again');
                redirect('Home');
            }
        }
    }

    public function owner_register() {
        $this->form_validation->set_message('regex_match', 'The password must contain at least one upper alphapet and number');
        $this->form_validation->set_message('is_unique', 'The name or email is already Exists please try another name or email');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[car_owner.username]|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim|is_unique[car_owner.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/]');
        $this->form_validation->set_rules('country', 'Country', 'required|trim|min_length[3]');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim|numeric|min_length[7]|max_length[13]');
        $this->form_validation->set_rules('age', 'Age', 'required|trim|numeric');
        $this->form_validation->set_rules('gender', 'Gender', 'required|trim');
        $this->form_validation->set_rules('car_type', 'Car_type', 'required|trim|min_length[3]');
        $this->form_validation->set_rules('salary', 'Salary', 'required|trim');
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'gif|jpg|png|txt';
        $config['max_size'] = 10000;
        $config['max_width'] = 10024;
        $config['max_height'] = 7468;
        $this->load->library('upload');
        $this->upload->initialize($config);
        if
        ($this->upload->do_upload('userpic')) {
            $data['profile_pic'] = base_url() . "upload/car_owner/" . $this->upload->data('file_name');
        } else {
            $this->upload->display_errors();
        }
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'gif|jpg|png|txt';
        $config['max_size'] = 10000;
        $config['max_width'] = 10024;
        $config['max_height'] = 7468;
        $this->load->library('upload');
        $this->upload->initialize($config);
        if
        ($this->upload->do_upload('carpic')) {
            $data['car_pic'] = base_url() . "images/" . $this->upload->data('file_name');
        } else {
            $this->upload->display_errors();
        }

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('register/carregister');
        } else {
//`carOwner_id`, `username`, `password`, `age`, `car_type`, `place`, `car_pic`, `profie_pic`, `tourist_id`, `email`, `hour_salary`

            $data['username'] = $this->input->post('username');
            $data['password'] = $this->input->post('password');
            $data['place'] = $this->input->post('country');
            $data['email'] = $this->input->post('email');
            $data['gender'] = $this->input->post('gender');
            $data['age'] = $this->input->post('age');
            $data['tourist_id'] = 0;
            $data['car_type'] = $this->input->post('car_type');
            $data['hour_salary'] = $this->input->post('salary');

            if ($this->Register->reg('car_owner', $data) == TRUE) {
                $this->session->set_flashdata('register', 'you are register Successfully');
                redirect('Home');
            } else {
                $this->session->set_flashdata('register', 'Failled to Register plz try again');
                redirect('Home');
            }
        }
    }

    public function logout() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        redirect('Home');
    }








    public function api_reg() {
        //$name, $email, $pass, $type
        if (!empty($this->input->post('name')) && !empty($this->input->post('email')) && !empty($this->input->post('password'))) {
            $data1['username'] = $this->input->post('name');
            $data1['email'] = $this->input->post('email');
            $data1['password'] = $this->input->post('password');
            $type = $this->input->post('type');
            if ($this->Register->api_reg($data1, $type) == FALSE) {
                $data['success'] = 'failed';
                $d = json_encode(['result' => $data]);
                // $d = str_replace(array('[', ']'), '', htmlspecialchars(json_encode(['result' => $data]), ENT_NOQUOTES));
                echo $d;
            }
        } 
    }

    public function api_login() {
        if (!empty($this->input->post('email')) && !empty($this->input->post('password'))) {

            $data1['email'] = $this->input->post('email');
            $data1['password'] = $this->input->post('password');
            $a = $this->Register->api_login($data1);
            if (TRUE) {
                $data['tokken'] = rand(15246, 1582151);
                $data['user_id'] = $a['user_id'];
                $data['type'] = $a['type'];
                
                $d = json_encode(['result' => $data]);
                //$d = str_replace(array('[', ']'), '', htmlspecialchars(json_encode(['result' => $data]), ENT_NOQUOTES));
                echo $d;
            } else {
                 echo "not found";
            }
        } else {
            echo 'error';
        }
    }

    public function memory() {
        
        $data1['user_id'] = $this->input->post('user_id');
        $data1['memory'] = $this->input->post('memory');
        $data1['lang'] = $this->input->post('lang');
        $data1['lat'] = $this->input->post('lat');
        if ($this->Register->set_memory($data1)) {
            $data['success'] = 'success';
            $d = json_encode(['result' => $data]);
            // $d = str_replace(array('[', ']'), '', htmlspecialchars(json_encode(['result' => $data]), ENT_NOQUOTES));
            echo $d;
        }
       else{
           $data['failed'] = 'failed';
            $d = json_encode(['result' => $data]);
            }
    }

    public function get_memory() {
     $data = $this->Register->get_memory($this->input->post('user_id'));
        if  ($data == FALSE) {
           
            $d = json_encode(['result' => 'Error']);
            // $d = str_replace(array('[', ']'), '', htmlspecialchars(json_encode(['result' => $data]), ENT_NOQUOTES));
            
        } else {
            $d=json_encode(['result' => $data]);
        }
      echo $d;
    }

    public function cat() {
        echo json_encode(['result' => $this->db->get('categories')->result()]);
    }

    public function cat_by_id() {
        $id=$this->input->post('cat_id');
        $this->db->where('cat_id', $id);
        echo json_encode(['result' => $this->db->get('categories')->result()]);
    }

    public function logout_api() {
        $id=$this->input->post('user_id');
        $this->db->where('user_id', $id);
        if ($this->db->delete('tokken')) {
            $data['success'] = 'success';
        } else {
            $data['fail'] = 'fail';
        }
        $d = json_encode(['result' => $data]);
        echo $d;
    }

    public function tour_guides() {
        echo json_encode(['result' => $this->db->get('tour_guide')->result()]);
    }

    public function car_owners() {
        echo json_encode(['result' => $this->db->get('car_owner')->result()]);
    }

    public function tourists() {
        echo json_encode(['result' => $this->db->get('tourist')->result()]);
    }
    public function get_all_places()
    {
       echo json_encode(['result' => $this->db->get('places')->result()]);
    }
    public function place_by_id()
    {
        $this->db->where('cat_id',$this->input->post("cat_id"));
        echo json_encode(['result' => $this->db->get('places')->result()]);

    }
public function get_user()
 {
    $type=$this->input->post('type');
    $user_id=$this->input->post('user_id');
       if ($type == 'tourist') {
             $this->db->where('tourist_id',$user_id);
           $q=$this->db->get('tourist');
            if ($q->num_rows() > 0)
                {
              echo json_encode(['result' => $q->result()]);
                 }
            else
                {
                    return FALSE;
                }

        } elseif ($type == 'car_owner') {
             $this->db->where('carOwner_id',$user_id);
           $q=$this->db->get('car_owner');
            if ($q->num_rows() > 0)
                {
             echo json_encode(['result' => $q->result()]);
                 }
            else
                {
                    return FALSE;
                } 
                 }elseif ($type == 'tour_guide') {
             $this->db->where('tourGuide_id',$user_id);
           $q=$this->db->get('tour_guide');
            if ($q->num_rows() > 0)
                {
              echo json_encode(['result' => $q->result()]);
                 }
            else
                {
                    return FALSE;
                } 
        }
        else {
            return FALSE;
 }
}
}