<?php
  class Blance extends CI_Model
  {
      public function __construct()
      {
          parent::__construct();
          $this->load->database();
      }
      public function get_blance_user($id_user)
      {
          $id_user = intval($id_user);
          $this->db->select();
          $this->db->where('id_user',$id_user);
          $query = $this->db->get('user_blance');
          return $query->result_array();
      }
      public function update_blance($id_user,array $data)
      {
           $id_user = intval($id_user);
           $this->db->where('id_user',$id_user);
           $this->db->update('user_blance',$data);
      }
      public function insert_trans_log(array $data)
      {
          $this->db->insert('transfer_log',$data);
      }                          
  }
?>
