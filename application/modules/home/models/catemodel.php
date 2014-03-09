<?php 
class Catemodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function load_cate()
    {
        $sql ="SELECT * FROM cate_product";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function cate_detail($id)
    {
        $id = intval($id);
        $sql ="SELECT * FROM cate_product WHERE id_cate = $id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>