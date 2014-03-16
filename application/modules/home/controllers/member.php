<?php

class Member extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->library('security');
        $this->load->library('tank_auth');
        $this->lang->load('tank_auth');
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/');
        }
        parent::blance_of_user($this->session->userdata('user_id'));
    }

    public function index() {
        //$account_blance = $this->userblancemodel->get_info($this->session->userdata('user_id'));
        $this->load->view('home/layout_member', $this->data);
    }

    public function card() {
        if ($this->input->post()) {
            $this->form_validation->set_rules('card', 'Card', 'trim|xss_clean|callback_check_card[card]');
            $this->form_validation->set_rules('sVerifyCode', 'sVerifyCode', 'trim|xss_clean|callback_check_captcha[sVerifyCode]');
            if ($this->form_validation->run()) {
                $this->load->model('card');
                $this->load->model('blance');
                $card_detail = $this->card->check_card($this->form_validation->set_value('card'));
                if (empty($card_detail)) {
                    redirect('/thanh-vien/card');
                } else {
                    $price = $card_detail[0]['price'];
                    $money = $price + $this->data['blance_user'][0]['blance'];
                    $data_blance = array('blance' => $money);
                    $this->blance->update_blance($this->session->userdata('user_id'), $data_blance);
                    $data_card_log = array('id_user' => $this->session->userdata('user_id'), 'id_card' => $card_detail[0]['id'], 'create_date' => strtotime('now'));
                    $this->card->insert_log($data_card_log);
                    $card_data = array('status' => 1);
                    $this->card->update_card($card_detail[0]['id'], $card_data);
                    redirect('/thanh-vien');
                }
            } else {

                $this->data['main_content'] = 'card_view';
                $this->data['image'] = $this->_create_captcha();
                $this->load->view('home/layout_changepass', $this->data);
            }
        } else {
            $this->data['main_content'] = 'card_view';
            $this->data['image'] = $this->_create_captcha();
            $this->load->view('home/layout_changepass', $this->data);
        }
    }

    public function check_card($card) {
        $this->load->model('card');
        $card_detail = $this->card->check_card($card);
        if (!empty($card_detail)) {
            return $card;
        } else {
            $this->form_validation->set_message('check_card', 'Card not exists');
            return FALSE;
        }
    }

    private function _create_captcha() {
        $this->load->helper('captcha');
        $options = array('img_path' => $_SERVER['DOCUMENT_ROOT'] . ROT_DIR . '/captcha/', 'img_url' => base_url() . "captcha/", 'img_width' => '150', 'img_height' => '40', 'expiration' => 7200);
        $cap = create_captcha($options);
        $image = $cap['image'];
        $this->session->set_userdata('captchaword', $cap['word']);
        return $image;
    }

    public function check_captcha($string) {

        if ($string == $this->session->userdata('captchaword')) {
            return TRUE;
        } else {
            $this->form_validation->set_message('check_captcha', 'Wrong captcha code');
            return FALSE;
        }
    }

    public function transfer_money() {
        if ($this->input->post()) {
            $this->form_validation->set_rules('account_number', 'Card', 'trim|xss_clean|callback_check_account[account_number]');
            $this->form_validation->set_rules('money', 'Card', 'trim|xss_clean|callback_check_money[money]');
            if ($this->form_validation->run()) {
                $id_user = $this->session->userdata('user_id');
                $this->load->model('users');
                $user_detail = $this->users->get_user_by_id($id_user, 1);

                $transaction_id = rand_string(10);
                $account_id = $this->form_validation->set_value('account_number');
                $money = $this->form_validation->set_value('money');
                $create_date = strtotime('now');
                $status = 0;
                $newtimestamp = strtotime('now + 10 minute');
                $password = rand_string(6);
                $data_log_save = array(
                    'id_user' => $id_user,
                    'money' => $money,
                    'transaction_id' => $transaction_id,
                    'account_id' => $account_id,
                    'create_date' => $create_date,
                    'status' => $status,
                    'exp_date' => date('Y-m-d h:i:s', $newtimestamp),
                    'password' => $this->tank_auth->has_password($password)
                );
                $id_sert = $this->blance->insert_trans_log($data_log_save);
                if ($id_sert > 0) {
                    $data_mail = array('user' => $this->session->userdata('username'), 'password' => $password, 'transaction_code' => $transaction_id, 'money' => $money);
                    $this->_send_email('transfer', $user_detail->email, $user_detail->email, $data_mail, 'Mật khẩu xác nhận giao dịch');
                    redirect('/thanh-vien/chuyen-tien/login/' . $transaction_id);
                }
            } else {
                $this->data['main_content'] = 'chuyen_tien_view';
                $this->load->view('home/layout_changepass', $this->data);
            }
        } else {
            $this->data['main_content'] = 'chuyen_tien_view';
            $this->load->view('home/layout_changepass', $this->data);
        }
    }

    public function confirm_transfer() {
        $transaction_id = $this->uri->segment(4);
        if(empty($transaction_id))
        {
            show_404();
            exit;
        }
        $transaction_id = addslashes($transaction_id);
        $this->data['transaction_id'] = $transaction_id;
        $this->form_validation->set_rules('transaction_id','transaction', 'trim|xss_clean');
        $this->form_validation->set_rules('pass_access','pass', 'trim|xss_clean|callback_check_pass_access['.$transaction_id.']');
        if($this->form_validation->run())
        {
            redirect('/thanh-vien/chuyen-tien/cofirm/'.$transaction_id);
        }
        $this->data['main_content'] = 'login_chuyen_tien_view';
        $this->load->view('home/layout_changepass',$this->data);
    }
    public function confirm_trans()
    {
        $transaction_id = $this->uri->segment(4);
        if(empty($transaction_id))
        {
            show_404();
            exit;
        }
        $transaction_id = addslashes($transaction_id);
        $this->load->model('blance');
        $account_detail = $this->blance->get_transaction_log($transaction_id);
        if($this->input->post())
        {
            $id_user = $account_detail[0]['transaction_id_user'];
            $money = $account_detail[0]['money'];
            $id_trans_log = $account_detail[0]['transaction_id'];
            $data_trans = array('status'=>1);
            $this->blance->update_trans_log($id_trans_log,$data_trans);
            $detail_user_1 = $this->blance->get_blance_user($this->session->userdata('user_id'));
            if($detail_user_1[0]['blance'] == 0 || $detail_user_1[0]['blance']<$money)
            {
                $this->session->set_flashdata('error_trans', 'Số tiền trong tài khoản không đủ để thực hiện giao dịch');
                redirect('/thanh-vien/chuyen-tien/cofirm/'.$id_trans_log);
            }
            $money_1 = $detail_user_1[0]['blance'] - $money;
            $data_1 = array('blance'=>$money_1);
            $this->blance->update_blance($this->session->userdata('user_id'),$data_1);
            $detail_user_2 = $this->blance->get_blance_user($id_user);
            if(empty($detail_user_2))
            {
                $data_3 = array('id_user'=>$id_user,'blance'=>$money);
                $this->blance->insert_blance($data_3);
            }
            else
            {
                $money_2 = $detail_user_2[0]['blance']+$money;
                $data_2 = array('blance'=>$money_2);
                $this->blance->update_blance($id_user,$data_2);
            }
            redirect('/thanh-vien');
        }
        else
        {
            if(empty($account_detail))
            {
                $this->session->set_flashdata('error_trans', 'Giao dịch không tồn tại hoặc vượt quá thời gian chờ, vui lòng thực hiện lại');
                redirect('/thanh-vien/chuyen-tien');
            }
            else
            {
                $this->data['trans_detail']=$account_detail;
                $this->data['main_content']='confirm_trans_view';
                $this->load->view('home/layout_changepass',$this->data);
            }
        }
        
    }
    public function check_account($account_number) {
        $this->load->model('users');
        $account_detail = $this->users->get_user_by_account_number($account_number);
        if (empty($account_detail)) {
            $this->form_validation->set_message('check_account', 'Account not exists');
            return FALSE;
        } else {
            return $account_detail[0]['account_number'];
        }
    }
    public function check_pass_access($pass) {
       $transaction_id = $this->uri->segment(4);
       $transaction_id = addslashes($transaction_id);
        if ($this->tank_auth->check_password_trans($pass, $transaction_id)==FALSE) {
            $this->form_validation->set_message('check_pass_access', 'Pass Incorrect');
            return FALSE;
        } else {
            return $transaction_id;
        }
    }
    public function check_money($money) {
        $this->load->model('blance');
        $detail = $this->blance->get_blance_user($this->session->userdata('user_id'));
        if (empty($detail) || $detail[0]['blance'] < $money) {
            $this->form_validation->set_message('check_money', 'Money not enough');
            RETURN FALSE;
        } else {

            return TRUE;
        }
    }

    function _send_email($type, $to, $email, &$data, $title) {
        $this->load->library('email');
        $this->load->library('maillinux');
        $from = 'nguyentruonggiang91@gmail.com';
        $subject = $title;
        $messsage = $this->load->view('email/' . $type . '-html', $data, TRUE);
        $this->maillinux->SendMail($from, $email, $subject, $messsage);
    }
    public function history_log()
    {
        $id_user = $this->session->userdata('user_id');
        $this->load->model('blance');
        $this->load->helper('url');
        $this->load->library('pagination');
        $config['uri_segment'] = 5;
        if ($this->uri->segment(4)) {
            $page = $this->uri->segment(4);
        } else {
            $page = 1;
        }
        $config['per_page'] = 10;
        $config['total_rows'] = $this->blance->count_transaction_history($id_user);
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
        $num_pages = ceil($config['total_rows'] / $config['per_page']);
        $array_sv = $this->blance->load_transaction_history($id_user,$config['per_page'], $page1);
        $this->data['total_page'] = $num_pages;
        $this->data['offset'] = $page1;
        $this->data['page'] = $page;
        $this->data['total'] = $config['total_rows'];
        $this->data['list_transaction'] = $array_sv;
        $this->data['main_content']='transfer_log_view';
        $this->load->view('home/layout_history_transfer',$this->data);
    }
    public function card_log()
    {
        $id_user = $this->session->userdata('user_id');
        $this->load->model('blance');
        $this->load->helper('url');
        $this->load->library('pagination');
        $config['uri_segment'] = 5;
        if ($this->uri->segment(4)) {
            $page = $this->uri->segment(4);
        } else {
            $page = 1;
        }
        $config['per_page'] = 10;
        $config['total_rows'] = $this->blance->count_card_history($id_user);
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
        $num_pages = ceil($config['total_rows'] / $config['per_page']);
        $array_sv = $this->blance->load_card_history($id_user,$config['per_page'], $page1);
        $this->data['total_page'] = $num_pages;
        $this->data['offset'] = $page1;
        $this->data['page'] = $page;
        $this->data['total'] = $config['total_rows'];
        $this->data['list_transaction'] = $array_sv;
        $this->data['main_content']='card_log_view';
        $this->load->view('home/layout_history_transfer',$this->data);
    }
    public function transfer_system_log()
    {
       $id_user = $this->session->userdata('user_id');
        $this->load->model('blance');
        $this->load->helper('url');
        $this->load->library('pagination');
        $config['uri_segment'] = 5;
        if ($this->uri->segment(4)) {
            $page = $this->uri->segment(4);
        } else {
            $page = 1;
        }
        $config['per_page'] = 10;
        $config['total_rows'] = $this->blance->count_transfer_system($id_user);
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
        $num_pages = ceil($config['total_rows'] / $config['per_page']);
        $array_sv = $this->blance->load_transfer_system($id_user,$config['per_page'], $page1);
        $this->data['total_page'] = $num_pages;
        $this->data['offset'] = $page1;
        $this->data['page'] = $page;
        $this->data['total'] = $config['total_rows'];
        $this->data['list_transaction'] = $array_sv;
        $this->data['main_content']='transfer_system_log';
        $this->load->view('home/layout_history_transfer',$this->data); 
    }

}

?>
