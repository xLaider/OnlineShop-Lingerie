<?php
    class ProductModel{
        private $db;
        public function __construct()
        {
            $this->db = new Database;
        }

        public function getProductByID($productID){
            $query='SELECT * FROM product WHERE productID = :productID';
            $this->db->query($query);
            $this->db->bind(':productID',$productID);
            $result=$this->db->single();
            return $result;
        }
        public function getImageByID($productID){
            $query='SELECT * FROM images WHERE ProductID = :productID';
            $this->db->query($query);
            $this->db->bind(':productID',$productID);
            $result=$this->db->resultSet();
            return $result;
        }

        public function getAllProducts(){
            $query='SELECT productID, Name, Price FROM product';
            $this->db->query($query);
            $result=$this->db->resultSet();
            return $result;
        }
    }
?>