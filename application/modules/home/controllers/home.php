<?php
    class Home extends MY_Controller
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
        }
        public function index()
        {

            if ($this->tank_auth->is_logged_in()) {                                    // logged in
                redirect('/thanh-vien');
            }
            else {
                $this->data['login_by_username'] = ($this->config->item('login_by_username', 'tank_auth') AND
                    $this->config->item('use_username', 'tank_auth'));
                $this->data['login_by_email'] = $this->config->item('login_by_email', 'tank_auth');
                $this->form_validation->set_rules('username', 'Login', 'trim|required|xss_clean');
                $this->form_validation->set_rules('pwd', 'Password', 'trim|required|xss_clean');
                // Get login for counting attempts to login
                if ($this->config->item('login_count_attempts', 'tank_auth') AND
                    ($login = $this->input->post('login'))) {
                    $login = $this->security->xss_clean($login);
                } else {
                    $login = '';
                }



                $this->data['errors'] = array();

                if ($this->form_validation->run()) {                                // validation ok
                    if ($this->tank_auth->login(
                        $this->form_validation->set_value('username'),
                        $this->form_validation->set_value('pwd'),
                        0,
                        $this->data['login_by_username'],
                        $this->data['login_by_email'])) {                                // success
                        redirect('/thanh-vien');

                    } else {
                        $errors = $this->tank_auth->get_error_message();
                        if (isset($errors['banned'])) {                                // banned user
                            $this->_show_message($this->lang->line('auth_message_banned').' '.$errors['banned']);

                        } else {                                                    // fail
                            foreach ($errors as $k => $v)    $data['errors'][$k] = $this->lang->line($v);
                        }

                    }
                }
                $this->load->view('home/layout_home', $this->data);
            }
        }
        public function register()
        {
            if($this->tank_auth->is_logged_in())
            {
                redirect('/');
            }
            else if (!$this->config->item('allow_registration', 'tank_auth')) {    // registration is off
                $this->_show_message($this->lang->line('auth_message_registration_disabled'));

            } else {
                $use_username = $this->config->item('use_username', 'tank_auth');
                if ($use_username) {
                    $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length['.$this->config->item('username_min_length', 'tank_auth').']|max_length['.$this->config->item('username_max_length', 'tank_auth').']|alpha_dash');
                }
                $this->form_validation->set_rules('sEmail', 'Email', 'trim|required|xss_clean|valid_email');
                $this->form_validation->set_rules('displayname', 'Display Name','trim|required|xss_clean');
                $this->form_validation->set_rules('sPassWord1', 'Password', 'trim|required|xss_clean|min_length['.$this->config->item('password_min_length', 'tank_auth').']|max_length['.$this->config->item('password_max_length', 'tank_auth').']|alpha_dash');
                $this->form_validation->set_rules('sConfirm_PassWord1', 'Confirm Password', 'trim|required|xss_clean|matches[sPassWord1]');
                $this->data['errors'] = array();
                $account_number = rand_account_number(13);
                $email_activation = $this->config->item('email_activation', 'tank_auth');
                if ($this->form_validation->run()) { 

                    if (!is_null($data = $this->tank_auth->create_user(
                        $use_username ? $this->form_validation->set_value('username') : '',
                        $this->form_validation->set_value('sEmail'),
                        $this->form_validation->set_value('sPassWord1'),
                        $email_activation,'2'))) {                                    // success

                        $data['site_name'] = $this->config->item('website_name', 'tank_auth');

                        if ($email_activation) {                                    // send "activate" email
                            $data['activation_period'] = $this->config->item('email_activation_expire', 'tank_auth') / 3600;
                            $this->_send_email('activate',$this->form_validation->set_value('sEmail'),$data['email'], $data,'Đăng Ký Tài Khoản Thành Công');
                            unset($data['password']); // Clear password (just for any case)

                            $this->_show_message($this->lang->line('auth_message_registration_completed_1'));

                        } else {
                            if ($this->config->item('email_account_details', 'tank_auth')) {    // send "welcome" email
                                $this->_send_email('welcome', $data['email'], $data);
                            }
                            unset($this->data['password']); // Clear password (just for any case)

                            $this->_show_message($this->lang->line('auth_message_registration_completed_2').' '.anchor('/auth/login/', 'Login'));
                        }
                    } else {
                        $this->data['error_form_mess'] = 1;
                        $errors = $this->tank_auth->get_error_message();
                        foreach ($errors as $k => $v)    $this->data['errors'][$k] = $this->lang->line($v);
                    }
                }

                $this->data['use_username'] = $use_username;
                $this->load->view('home/layout_register', $this->data);
            }
        }
        public function login()
        {
            if ($this->tank_auth->is_logged_in()) {                                    // logged in
                redirect('/');

            }
            else {
                $this->data['login_by_username'] = ($this->config->item('login_by_username', 'tank_auth') AND
                    $this->config->item('use_username', 'tank_auth'));
                $this->data['login_by_email'] = $this->config->item('login_by_email', 'tank_auth');
                $this->form_validation->set_rules('login', 'Login', 'trim|required|xss_clean');
                $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
                $this->form_validation->set_rules('remember', 'Remember me', 'integer');

                // Get login for counting attempts to login
                if ($this->config->item('login_count_attempts', 'tank_auth') AND
                    ($login = $this->input->post('login'))) {
                    $login = $this->security->xss_clean($login);
                } else {
                    $login = '';
                }



                $this->data['errors'] = array();

                if ($this->form_validation->run()) {                                // validation ok
                    if ($this->tank_auth->login(
                        $this->form_validation->set_value('login'),
                        $this->form_validation->set_value('password'),
                        $this->form_validation->set_value('remember'),
                        $this->data['login_by_username'],
                        $this->data['login_by_email'])) {                                // success
                        redirect('/');

                    } else {
                        $errors = $this->tank_auth->get_error_message();
                        if (isset($errors['banned'])) {                                // banned user
                            $this->_show_message($this->lang->line('auth_message_banned').' '.$errors['banned']);

                        } else {                                                    // fail
                            foreach ($errors as $k => $v)    $this->data['errors'][$k] = $this->lang->line($v);
                        }

                    }
                }
                $this->load->view('home_layout/member/login_layout', $this->data);
            }
        }
        function activate()
        {
            $user_id        = $this->uri->segment(2);
            $user_id = addslashes($user_id);
            $user_id =  intval($user_id);
            $new_email_key    = $this->uri->segment(3);
            $new_email_key = addslashes($new_email_key);
            // Activate user
            if ($this->tank_auth->activate_user($user_id, $new_email_key)) {
                if($this->tank_auth->is_logged_in())
                {
                    $this->tank_auth->logout();
                }
                $this->_show_message($this->lang->line('auth_message_activation_completed').' '.anchor('/home/auth/login/', 'Login'));
            } else {                                                                // fail
                $this->_show_message($this->lang->line('auth_message_activation_failed'));
            }
        }
        public function logout()
        {
            $this->tank_auth->logout();
            $this->session->sess_create();
            $this->_show_message($this->lang->line('auth_message_logged_out')); 
        }
        function _send_email($type, $to,$email, &$data,$title)
        {
            $this->load->library('email');
            $this->load->library('maillinux');
            $from = 'nguyentruonggiang91@gmail.com';
            $subject = $title;
            $messsage = $this->load->view('email/'.$type.'-html', $data, TRUE);
            $this->maillinux->SendMail($from,$email,$subject,$messsage);

        }
        public function change_pass()
        {
            if($this->input->post())
            {
                $this->form_validation->set_rules('old_password', 'Old Password', 'trim|required|xss_clean');
                $this->form_validation->set_rules('new_password', 'New Password', 'trim|required|xss_clean|min_length['.$this->config->item('password_min_length', 'tank_auth').']|max_length['.$this->config->item('password_max_length', 'tank_auth').']|alpha_dash');
                $this->form_validation->set_rules('confirm_new_password', 'Confirm new Password', 'trim|required|xss_clean|matches[new_password]');
                $this->data['errors'] = array();
                if ($this->form_validation->run()) {
                    $catpcha = $this->input->post('sVerifyCode');
                    
                    if($this->check_captcha($catpcha)==TRUE)
                    {                                // validation ok
                        if ($this->tank_auth->change_password(
                            $this->form_validation->set_value('old_password'),
                            $this->form_validation->set_value('new_password'))) {    // success
                            $message = 'Thay đổi password thành công';
                            $this->_show_message($message);
                            $this->session->set_flashdata('message','Thay đổi password thành công');
                            redirect('/thanh-vien');
                        } else {                                                        // fail
                            $errors = $this->tank_auth->get_error_message();
                            foreach ($errors as $k => $v)    $this->data['errors'][$k] = $this->lang->line($v);
                        }
                    }
                    else
                    {
                           $this->data['errors']['captcha'] = 'Wrong captcha code';
                    }
                }
                $this->data['image'] = $this->_create_captcha();
                $this->load->view('home/layout_changepass', $this->data);
            }
            else
            {
                $this->data['image'] = $this->_create_captcha();
                $this->load->view('home/layout_changepass', $this->data);
            }
        }
        function _show_message($message)
        {
            $this->session->set_flashdata('message', $message);
            redirect('/');
        }
        private function _create_captcha()
        {
            // we will first load the helper. We will not be using autoload because we only need it here
            $this->load->helper('captcha');
            // we will set all the variables needed to create the captcha image
            $options = array('img_path'=>$_SERVER['DOCUMENT_ROOT'].ROT_DIR.'/captcha/','img_url'=>base_url()."captcha/",'img_width'=>'150','img_height'=>'40','expiration'=>7200);
            //now we will create the captcha by using the helper function create_captcha()
            $cap = create_captcha($options);
            
            // we will store the image html code in a variable
            $image = $cap['image'];

            // ...and store the captcha word in a session
            $this->session->set_userdata('captchaword', $cap['word']);
            // we will return the image html code
            return $image;
        }
        public function check_captcha($string)
        {
            
            if($string==$this->session->userdata('captchaword'))
            {
                return TRUE;
            }
            else
            {
                $this->form_validation->set_message('check_captcha', 'Wrong captcha code');
                return FALSE;
            }
        }
    }
?>
