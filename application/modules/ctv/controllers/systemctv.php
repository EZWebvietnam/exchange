<?php

class Systemctv extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('usermodel');
        $this->load->library('tank_auth');
        $this->lang->load('tank_auth');
        $this->load->library('form_validation');
    }

    public function index() {
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/quan-tri/login');
        } else {
            $this->load->view('ctv/index_layout_ctv');
        }
    }

    public function ajax_get_product() {
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        if ($this->input->post('page_no')) {
            $page = $this->input->post('page_no');
        } else {
            $page = 1;
        }
        $config['per_page'] = 10;
        $config['total_rows'] = $this->usermodel->count_user();
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
        $num_pages = ceil($config['total_rows'] / $config['per_page']);
        $array_sv = $this->usermodel->load_user($config['per_page'], $page1);
        $this->data['total_page'] = $num_pages;
        $this->data['offset'] = $page1;
        $this->data['page'] = $page;
        $this->data['total'] = $config['total_rows'];
        $this->data['list_product_ref'] = $array_sv;
        $this->load->view('ajax_get_product', $this->data);
    }

    public function delete($id) {
        $this->usermodel->delete($id);
        $array = array('error' => 0, 'msg' => "Xóa thành công");
        echo json_encode($array);
    }

    public function deletes() {

        $array = $this->input->post('ar_id');
        foreach ($array as $k => $v) {
            $this->usermodel->delete($v);
        }
        $array = array('error' => 0, 'msg' => "Xóa thành công");
        echo json_encode($array);
    }

    public function add_product() {
        if ($this->input->post('bt_submit')) {
            $this->form_validation->set_rules('username', 'username', 'trim|xss_clean');
            $this->form_validation->set_rules('displayname', 'displayname', 'trim|xss_clean');
            $this->form_validation->set_rules('sPassWord1', 'Password', 'trim|xss_clean');
            $this->form_validation->set_rules('sEmail', 'Email', 'trim|xss_clean');
            $account_number = rand_account_number(13);
            $email_activation = $this->config->item('email_activation', 'tank_auth');
            $use_username = $this->config->item('use_username', 'tank_auth');
            if ($this->form_validation->run()) {
                if (!is_null($data = $this->tank_auth->create_user(
                                $use_username ? $this->form_validation->set_value('username') : '', $this->form_validation->set_value('sEmail'), $this->form_validation->set_value('sPassWord1'), $email_activation, '2', $account_number))) {                                    // success
                    $data['site_name'] = $this->config->item('website_name', 'tank_auth');

                    if ($email_activation) {                                    // send "activate" email
                        $data['activation_period'] = $this->config->item('email_activation_expire', 'tank_auth') / 3600;
                        $this->_send_email('activate', $this->form_validation->set_value('sEmail'), $data['email'], $data, 'Đăng Ký Tài Khoản Thành Công');
                        unset($data['password']); // Clear password (just for any case)
                    } else {
                        if ($this->config->item('email_account_details', 'tank_auth')) {    // send "welcome" email
                            $this->_send_email('welcome', $data['email'], $data);
                        }
                        unset($this->data['password']); // Clear password (just for any case)
                    }
                    $data = array('error' => '0', 'msg' => 'Thêm thành công');
                    echo json_encode($data);
                } else {
                    $this->data['error_form_mess'] = 1;
                    $errors = $this->tank_auth->get_error_message();
                    foreach ($errors as $k => $v) {
                        $this->data['errors'][$k] = $this->lang->line($v);
                    }
                    $data = array('error' => '1', 'msg' => 'Thêm không thành công');
                    echo json_encode($data);
                }
            } else {
                $data = array('error' => '1', 'msg' => 'Thêm không thành công');
                echo json_encode($data);
            }
        } else {
            $this->load->view('ajax_add_product', $this->data);
        }
    }

    public function account($id_account = null) {
        if ($this->input->post()) {
            $this->load->model('home/blance');
            $detail = $this->blance->get_blance_user($id_account);
            $money = $this->input->post('money');
            $action = $this->input->post('action');
            if (!isset($detail[0]['blance'])) {
                $detail[0]['blance'] = 0;
            }
            switch ($action) {
                case 1: {
                        $money_sum = $money + $detail[0]['blance'];
                        $action = 0;
                        break;
                    }
                case 0: {
                        if ($detail[0]['blance'] != 0 && $detail[0]['blance'] >= $money) {
                            $money_sum = $detail[0]['blance'] - $money;
                        } else {
                            $money_sum = $detail[0]['blance'];
                        }
                        $action = 1;
                        break;
                    }
            }

            if (!empty($detail[0]['id_user'])) {
                $data_update = array('blance' => $money_sum);
                $this->blance->update_blance($id_account, $data_update);
            } else {
                $data_update = array('id_user' => $id_account, 'blance' => $money_sum);
                $this->blance->insert_blance($data_update);
            }
            $data_log = array('id_user' => $id_account, 'money' => $money, 'action' => $action, 'create_date' => strtotime('now'));
            $this->blance->insert_log_system($data_log);
            echo json_encode(array('error' => 0, 'msg' => 'Thành công'));
        } else {
            $this->data['id_account'] = $id_account;
            $this->load->view('ajax_account', $this->data);
        }
    }

    public function check_account($username) {
        $this->load->model('users');
        $user = $this->users->get_user_by_username($username);
        if (empty($user)) {
            RETURN $username;
        } else {
            $this->form_validation->set_message('check_account', 'Account Exists');
            RETURN FALSE;
        }
    }

    public function check_account_ajax() {
        $username = $this->input->post('username');

        $this->load->model('users');
        $user = $this->users->get_user_by_username($username);
        if (empty($user)) {
            echo json_encode(array('error' => '0', 'msg' => '<font color="green">Chưa tồn tại</font>'));
        } else {
            echo json_encode(array('error' => '1', 'msg' => '<font color="red">Username đã tồn tại trong hệ thống</font>'));
        }
    }

    public function check_email_ajax() {
        $email = $this->input->post('email');

        $this->load->model('users');
        $user = $this->users->get_user_by_email($email);
        if (empty($user)) {
            echo json_encode(array('error' => '0', 'msg' => '<font color="green">Chưa tồn tại</font>'));
        } else {
            echo json_encode(array('error' => '1', 'msg' => '<font color="red">Email đã tồn tại trong hệ thống</font>'));
        }
    }

    public function check_email($email) {
        $this->load->model('users');
        $user = $this->users->get_user_by_email($email);
        if (empty($user)) {
            RETURN $username;
        } else {
            $this->form_validation->set_message('check_email', 'Email Exists');
            RETURN FALSE;
        }
    }

    public function ajax_get_customer() {
        $id_user = $this->session->userdata('user_id');
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        if ($this->input->post('page_no')) {
            $page = $this->input->post('page_no');
        } else {
            $page = 1;
        }
        $config['per_page'] = 10;
        $config['total_rows'] = $this->productctvmodel->count_list_customer($id_user);
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
        $num_pages = ceil($config['total_rows'] / $config['per_page']);
        $array_sv = $this->productctvmodel->list_customer($id_user, $config['per_page'], $page1);
        $this->data['total_page'] = $num_pages;
        $this->data['offset'] = $page1;
        $this->data['page'] = $page;
        $this->data['total'] = $config['total_rows'];
        $this->data['list_customer'] = $array_sv;
        $this->load->view('ajax_get_customer', $this->data);
    }

    public function ajax_thu_nhap() {
        $id_user = $this->session->userdata('user_id');
        $da_linh = $this->productctvmodel->da_linh($id_user);
        if (empty($da_linh)) {
            $tien_linh = 0;
        } else {
            foreach ($da_linh as $linh) {
                $tien_linh +=$linh['commissions'];
            }
        }
        $chua_linh = $this->productctvmodel->chua_linh($id_user);
        $tien_chua_linh = 0;
        if (empty($chua_linh)) {
            $tien_chua_linh = 0;
        } else {
            foreach ($chua_linh as $linh_) {
                $tien_chua_linh +=$linh_['commissions'];
            }
        }
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        if ($this->input->post('page_no')) {
            $page = $this->input->post('page_no');
        } else {
            $page = 1;
        }
        $config['per_page'] = 10;
        $config['total_rows'] = $this->productctvmodel->count_list_thu_nhap($id_user);
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
        $num_pages = ceil($config['total_rows'] / $config['per_page']);
        $array_sv = $this->productctvmodel->list_thu_nhap($id_user, $config['per_page'], $page1);
        $this->data['total_page'] = $num_pages;
        $this->data['offset'] = $page1;
        $this->data['page'] = $page;
        $this->data['total'] = $config['total_rows'];
        $this->data['list_tn'] = $array_sv;
        $this->data['tien_linh'] = $tien_linh;
        $this->data['tien_chua_linh'] = $tien_chua_linh;
        $this->load->view('ajax_get_tn', $this->data);
    }

    function _send_email($type, $to, $email, &$data, $title) {
        $this->load->library('email');
        $this->load->library('maillinux');
        $from = 'nguyentruonggiang91@gmail.com';
        $subject = $title;
        $messsage = $this->load->view('email/' . $type . '-html', $data, TRUE);
        $this->maillinux->SendMail($from, $email, $subject, $messsage);
    }

}

?>