<?php
class Usermodel extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }
    public function load_user($number,$offset)
    {
        $sql="SELECT * FROM users LIMIT $offset,$number";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_user()
    {
        $sql="SELECT * FROM users";
        $query = $this->db->query($sql);
        return count($query->result_array());
    }
    public function delete($id_user = null)
    {
        $id_user = intval($id_user);
        $this->db->delete('users',array('id'=>$id_user));
    }
}
?>
