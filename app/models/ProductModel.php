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
            $query='SELECT product.productID, Name, Price, image FROM product LEFT JOIN images ON product.productID=images.productID GROUP BY product.productID';
            $this->db->query($query);
            $result=$this->db->resultSet();
            return $result;
        }

        public function getGroupedProducts($group){
            $query=
                ($group=="Kids")
                ?'SELECT product.productID, Name, Price, image FROM product LEFT JOIN images ON product.productID=images.productID WHERE ProductGroup LIKE :group GROUP BY product.productID'
                :'SELECT product.productID, Name, Price, image FROM product LEFT JOIN images ON product.productID=images.productID WHERE ProductGroup LIKE :group OR ProductGroup LIKE "Unisex" GROUP BY product.productID';
                $this->db->query($query);
                    $this->db->bind(':group',$group);
            $result=$this->db->resultSet();
            return $result;
        }

        public function addImageByID($image,$productID){
            $query='INSERT INTO images( image, ProductID) VALUES (:image,:productID)';
            $this->db->query($query);
            $this->db->bind(':image',$image);
            $this->db->bind(':productID',$productID);
            $this->db->execute();
        }
    }
?>