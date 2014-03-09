<?php
    class Home extends MY_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->library('tank_auth');
        }
        public function index()
        {
            $this->load->view('home/layout_home');
        }
        public function register()
        {
            $this->load->view('home/layout_register');
        }
    }
?>
