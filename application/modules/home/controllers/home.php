<?php 
class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        parent::list_cate();
        $this->load->model('productmodel');
    }
    public function index()
    {
        $this->data['clip_top']=$this->productmodel->load_top_clip();
        $this->data['list_clip_right']=$this->productmodel->load_top_right();
        $this->data['list_product']=$this->productmodel->list_product_home();
        $this->data['main_content']='home_view/home';
        $this->load->view('home/layout_home',$this->data);
    }
}
?>