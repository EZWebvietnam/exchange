<?php
    class Member extends MY_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
            $this->load->library('session');
            $this->load->library('form_validation');
            $this->load->library('security');
            $this->load->library('tank_auth');
            $this->lang->load('tank_auth');
            if(!$this->tank_auth->is_logged_in())
            {
                redirect('/');
            }
            parent::blance_of_user($this->session->userdata('user_id'));
        }
        public function index()
        {
            //$account_blance = $this->userblancemodel->get_info($this->session->userdata('user_id'));
            $this->load->view('home/layout_member',$this->data);

        }
        
    }
?>
