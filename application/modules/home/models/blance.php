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
      public function insert_blance(array $data)
      {
          $this->db->insert('user_blance',$data);
          return $this->db->insert_id();
      }
      public function insert_trans_log(array $data)
      {
          $this->db->insert('trans_log',$data);
          return $this->db->insert_id();
      }
      public function get_transaction_log($transaction_log)
      {
          $sql="SELECT *,trans_log.id as transaction_id_user,users.id as id_trans,trans_log.password as pass_trans FROM trans_log INNER JOIN users ON users.account_number = trans_log.account_id WHERE trans_log.transaction_id = '$transaction_log' AND trans_log.status = 0 AND trans_log.exp_date >=now();";
          
          $query = $this->db->query($sql);
          return $query->result_array();
      }
      public function update_trans_log($id,array $data)
      {
          $this->db->where('id',$id);
          $this->db->update('trans_log',$data);
      }
      public function load_transaction_history($id_user,$number,$offset)
      {
          $id_user = intval($id_user);
          $number = intval($number);
          $offset = intval($offset);
          $sql="SELECT * FROM trans_log INNER JOIN users ON users.account_number = trans_log.account_id WHERE trans_log.id_user = $id_user LIMIT $offset,$number";
          $query = $this->db->query($sql);
          return $query->result_array();
      }
      public function count_transaction_history($id_user)
      {
          $id_user = intval($id_user);
          $sql="SELECT * FROM trans_log INNER JOIN users ON users.account_number = trans_log.account_id WHERE trans_log.id_user = $id_user";
          $query = $this->db->query($sql);
          return count($query->result_array());
      }
      public function load_card_history($id_user,$number,$offset)
      {
          $id_user = intval($id_user);
          $number = intval($number);
          $offset = intval($offset);
          $sql="SELECT * FROM card_log INNER JOIN card ON card.id = card_log.id_card WHERE card_log.id_user = $id_user LIMIT $offset,$number";
          $query = $this->db->query($sql);
          return $query->result_array();
      }
      public function count_card_history($id_user)
      {
          $id_user = intval($id_user);
          $sql="SELECT * FROM card_log INNER JOIN card ON card.id = card_log.id_card  WHERE card_log.id_user = $id_user";
          $query = $this->db->query($sql);
          return count($query->result_array());
      }
      public function load_transfer_system($id_user,$number,$offset)
      {
          $id_user = intval($id_user);
          $number = intval($number);
          $offset = intval($offset);
          $sql="SELECT * FROM log_system WHERE log_system.id_user = $id_user LIMIT $offset,$number";
          $query = $this->db->query($sql);
          return $query->result_array();
      }
      public function count_transfer_system($id_user)
      {
          $id_user = intval($id_user);
          $sql="SELECT * FROM log_system  WHERE log_system.id_user = $id_user";
          $query = $this->db->query($sql);
          return count($query->result_array());
      }
      public function insert_log_system(array $data)
      {
          $this->db->insert('log_system',$data);
      }
  }
?>
