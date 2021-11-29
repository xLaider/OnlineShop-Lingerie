<?php
    class AdminModel{
        private $db;
        public function __construct()
        {
            $this->db = new Database;
        }
      
        public function getAllProducts(){
            $query='SELECT * FROM product ';
            $this->db->query($query);
            $result=$this->db->resultSet();
            return $result;
        }
    }
?>