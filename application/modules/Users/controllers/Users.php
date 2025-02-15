<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->library(['form_validation', 'upload']);
        $this->load->helper(['url', 'form']);
        $this->load->database();
    }

    public function index() {
        $this->load->view('index');
    }

    public function get_users() {
        $users = $this->users_model->get_all_users();
        echo json_encode(["data" => $users]);
    }
    
    public function create() {
        if ($this->input->is_ajax_request()) {
            $this->form_validation->set_rules('firstname', 'First Name', 'required|min_length[2]|max_length[50]');
            $this->form_validation->set_rules('lastname', 'Last Name', 'required|min_length[2]|max_length[50]');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
            $this->form_validation->set_rules('conf_password', 'Password Confirmation', 'required|matches[password]');

            if ($this->form_validation->run() == FALSE) {
                echo json_encode(['status' => 'error', 'errors' => validation_errors()]);
            } else {
                // Handle Image Upload
                $image_name = $this->_upload_image();
    
                $user_data = [
                    'firstname' => $this->input->post('firstname'),
                    'lastname'  => $this->input->post('lastname'),
                    'email'      => $this->input->post('email'),
                    'password'   => $this->input->post('password'),
                    'image'      => $image_name
                ];
    
                $this->users_model->insert_user($user_data);
                echo json_encode(['status' => 'success', 'message' => 'User added successfully']);
            }
        } else {
            show_404();
        }
    }
    

    public function edit($id) {
        $user = $this->users_model->get_user_by_id($id);
        echo json_encode($user);
    }

    public function update() {
        $id = $this->input->post('id');
    
        // Validate form input
        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    
        if ($this->form_validation->run() === FALSE) {
            echo json_encode(['status' => 'error', 'errors' => validation_errors()]);
            return;
        }
    
        $data = [
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
        ];
    
        // Handle Image Upload
        if (!empty($_FILES['image']['name'])) {
            $config['upload_path'] = './uploads/users/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048;
            $config['file_name'] = time() . '_' . $_FILES['image']['name'];
    
            $this->load->library('upload', $config);
    
            if ($this->upload->do_upload('image')) {
                $uploadData = $this->upload->data();
                $data['image'] = $uploadData['file_name'];
            }
        }
    
        // Update user data
        $this->users_model->update_user($id, $data);
        echo json_encode(['status' => 'success']);
    }
    

    public function delete($id) {
        $this->users_model->delete_user($id);
        redirect('users');
    }

    // Handle Image Upload
    private function _upload_image() {
        if (!empty($_FILES['image']['name'])) {
            $config['upload_path']   = './uploads/users';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size']      = 2048;
            $config['file_name']     = time();
    
            $this->upload->initialize($config);
    
            if ($this->upload->do_upload('image')) {
                return $this->upload->data('file_name');
            } else {
                return 'default.jpg';
            }
        }
        return 'default.jpg';
    }
}
