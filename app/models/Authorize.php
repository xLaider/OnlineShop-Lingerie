<?php
    class Authorize{
        private $db;
        public function __construct()
        {
            $this->db = new Database;
        }
        public function getUserByEmail($email){
            $query='SELECT * FROM user WHERE email = :email';
            $this->db->query($query);
            $this->db->bind(':email',$email);
            $result=$this->db->single();
            return $result;
        }
    }
?>