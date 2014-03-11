<?php

class MY_Controller extends CI_Controller
{
    protected $data;
    public function __construct()
    {
        parent::__construct();
        $this->data = array();

    }
    public function blance_of_user($id_user)
    {
        $this->load->model('blance');
        $data = $this->blance->get_blance_user($id_user);
        $this->data['blance_user'] =  $data;
    }
}
?>