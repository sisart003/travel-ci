<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

    // public function __construct() {
    //     parent::__construct();
    //     if (!$this->session->userdata('logged_in')) {
    //         redirect('auth');
    //     }
    // }

    // public function index() {
    //     $this->load->model('Auth_model');
    //     $data['users'] = $this->Auth_model->get_users();
    //     $this->load->view('dashboard_view', $data);
    // }

    public function __construct() {
        parent::__construct();
        $this->load->model('auth/Auth_model'); // Load Auth library
        
        // Check if user is logged in
        if (!$this->session->userdata('logged_in')) {
            redirect('auth'); // Redirect to login if not logged in
        }
    }

    public function index() {
        // Fetch users and load the dashboard
        // Load Users module and call get_all_users()

        $data['uusers'] = $this->Auth_model->get_all_users();
        $this->load->view('dashboard_view', $data); // Load dashboard page
    }


    
}
