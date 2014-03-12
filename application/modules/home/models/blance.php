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
          $this->db->insert('trans_log',$data);
          return $this->db->insert_id();
      }
      public function get_transaction_log($transaction_log)
      {
          $sql="SELECT * FROM trans_log INNER JOIN users ON users.account_number = trans_log.account_id";
      }
  }
?>
