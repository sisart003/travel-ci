<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->module('users');
        $this->load->library('users');
        $this->load->model('users_model');
    }

    // Show login page
    public function index() {
        $this->load->view('login');
    }

    // Handle login request
    public function login() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->users_model->get_user_by_email($email);

        if ($user && password_verify($password, $user->password)) {
            $this->session->set_userdata([
                'user_id' => $user->id,
                'email' => $user->email,
                'logged_in' => TRUE
            ]);

            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid email or password.']);
        }
    }

    // Logout function
    public function logout() {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
