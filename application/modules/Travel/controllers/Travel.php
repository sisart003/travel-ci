<?php 

class Travel extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->module('main');
    }

    public function index()
    {   
        // $this->load->view('main/home');
        $this->load->view('travel/index');
    }
}