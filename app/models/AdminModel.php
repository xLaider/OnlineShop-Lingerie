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
        public function getAllUsers(){
            $query='SELECT * FROM user ';
            $this->db->query($query);
            $result=$this->db->resultSet();
            return $result;
        }
        public function updatePermission($permission, $email){
            $query="UPDATE user SET permission='$permission' WHERE email='$email'";
            $this->db->query($query);
            $this->db->execute();
        }
    }
?>