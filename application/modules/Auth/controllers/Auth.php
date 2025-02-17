<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            redirect('dashboard');
        }
        $this->load->view('login_view');
    }

    public function login_process() {
        // Set form validation rules
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('auth'); // Reload login page with errors
        } else {
            $email = $this->input->post('email');
            $password = md5($this->input->post('password')); // Hashing password using MD5

            // Check user in the database
            $user = $this->Auth_model->check_login($email, $password);

            if ($user) {
                // Set session data
                $session_data = array(
                    'user_id' => $user->id,
                    'email' => $user->email,
                    'username' => $user->username,
                    'image' => $user->image,
                    'is_admin' => $user->is_admin,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($session_data);

                redirect('dashboard'); // Redirect to dashboard
            } else {
                $this->session->set_flashdata('error', 'Invalid email or password!');
                redirect('auth'); // Reload login page with error message
            }
        }
    }

    public function logout() {
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->sess_destroy();
        redirect('auth');
    }

    public function register() {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('register_view');
        } else {
            // File Upload Configuration
            $config['upload_path'] = './assets/uploads/users/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048;
            $config['file_name'] = time() . '_' . $_FILES['user_image']['name'];
    
            $this->load->library('upload', $config);
    
            if ($this->upload->do_upload('user_image')) {
                $image_data = $this->upload->data();
                $image_name = $image_data['file_name'];
            } else {
                $image_name = 'default.jpg'; // Default image
            }
    
            $data = [
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'image' => $image_name
            ];
    
            $this->Auth_model->register_user($data);
            $this->session->set_flashdata('success', 'Registration successful! You can now login.');
            redirect('auth');
        }
    }

    // Edit user
    // public function edit_user($id) {
    //     $user = $this->Auth_model->get_user_by_id($id);
    //     echo json_encode($user);
    // }

    // Update user
    // public function update_user($id) {
    //     $id = $this->input->post('id');
    
    //     $data = array(
    //         'email' => $this->input->post('email')
    //     );
    
    //     $this->Auth_model->update_user($id, $data);
    // }

    // Delete user
    public function delete_user($id) {
        $this->Auth_model->delete_user($id);
        redirect('dashboard');
    }

    // Upload Image
    private function upload_image() {
        if (!empty($_FILES['image']['name'])) {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name'] = time() . '_' . $_FILES['image']['name'];

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                return $this->upload->data('file_name');
            }
        }
        return NULL;
    }

    public function get_user($id) {
        $user = $this->Auth_model->get_user_by_id($id);
        echo json_encode($user);
    }

    public function update_user_ajax() {
        $id = $this->input->post('id');
    
        $data = array(
            'email' => $this->input->post('email')
        );

        // Handle image upload
        if (!empty($_FILES['image']['name'])) {
            $data['image'] = $this->upload_image();
        }
    
        $this->Auth_model->update_user($id, $data);

        
    }
    
    
}
