<?php
    class Card extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        public function check_card($card)
        {
            $card = addslashes($card);
            $sql_check = "SELECT * FROM card WHERE code = '$card' AND status = 0 AND exp_date >=now();";
            $query = $this->db->query($sql_check);
            return $query->result_array();
        }
        public function insert_log(array $data)
        {
            $this->db->insert('card_log',$data);
        }
        public function update_card($id_card,array $data)
        {
            $this->db->where('id',$id_card);
            $this->db->update('card',$data);
        }
    }
?>
