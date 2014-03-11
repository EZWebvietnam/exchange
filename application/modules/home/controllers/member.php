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
        public function card()
        {
            if($this->input->post())
            {
                $this->form_validation->set_rules('card','Card','trim|xss_clean|callback_check_card[card]');
                $this->form_validation->set_rules('sVerifyCode','sVerifyCode','trim|xss_clean|callback_check_captcha[sVerifyCode]');
                if($this->form_validation->run())
                {
                        $this->load->model('card');
                        $this->load->model('blance');
                        $card_detail = $this->card->check_card($this->form_validation->set_value('card'));
                        if(empty($card_detail))
                        {
                            redirect('/thanh-vien/card');
                        }
                        else
                        {
                              $price = $card_detail[0]['price'];
                              $money  = $price + $this->data['blance_user'][0]['blance'];
                              $data_blance = array('blance'=>$money);
                              $this->blance->update_blance($this->session->userdata('user_id'),$data_blance);
                              $data_card_log = array('id_user'=>$this->session->userdata('user_id'),'id_card'=>$card_detail[0]['id'],'create_date'=>strtotime('now'));
                              $this->card->insert_log($data_card_log);
                              $card_data = array('status'=>1);
                              $this->card->update_card($card_detail[0]['id'],$card_data);
                              redirect('/thanh-vien');
                        }
                }
                else
                {
                    
                    $this->data['main_content']='card_view';
                    $this->data['image'] = $this->_create_captcha();
                    $this->load->view('home/layout_changepass', $this->data);
                }
            }
            else
            {
                $this->data['main_content']='card_view';
                $this->data['image'] = $this->_create_captcha();
                $this->load->view('home/layout_changepass', $this->data);
            }
        }
        public function check_card($card)
        {
            $this->load->model('card');
            $card_detail = $this->card->check_card($card);
            if(!empty($card_detail))
            {
                return $card;
            }
            else
            {
                $this->form_validation->set_message('check_card', 'Card not exists');
                return FALSE;
            }
        }
        private function _create_captcha()
        {
            $this->load->helper('captcha');
            $options = array('img_path'=>$_SERVER['DOCUMENT_ROOT'].ROT_DIR.'/captcha/','img_url'=>base_url()."captcha/",'img_width'=>'150','img_height'=>'40','expiration'=>7200);
            $cap = create_captcha($options);
            $image = $cap['image'];
            $this->session->set_userdata('captchaword', $cap['word']);
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
