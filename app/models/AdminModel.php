<?php
    class AdminModel{
        private $db;
        public function __construct()
        {
            $this->db = new Database;
        }
      
        public function getAllProducts($sortType="productID"){
            // var_dump($sortType);
            //bindowanie sortType 
            $query='SELECT * FROM product ORDER BY :sortType';
            $this->db->query($query);
            $this->db->bind(':sortType',$sortType);
            $result=$this->db->resultSet();
            return $result;
        }

        public function saveProduct($product)
        {
            $query="INSERT INTO product (Name,Price,Sizes,Description,Category)
            VALUES (:Name, :Price, :Sizes, :Description, :Category);";
            $this->db->query($query);
            $this->db->bind(':Name',$product->Name);
            $this->db->bind(':Price',$product->Price);
            $this->db->bind(':Sizes',$product->Sizes);
            $this->db->bind(':Description',$product->Description);
            $this->db->bind(':Category',$product->Category);
            $this->db->execute();
        }

        public function updateProduct($product){
             
            $query="UPDATE product SET Name=:Name,Price=:Price,Sizes=:Sizes,Description=:Description,Category=:Category WHERE productID=:ProductID;";
            $this->db->query($query);
            $this->db->bind(':Name',$product->Name);
            $this->db->bind(':Price',$product->Price);
            $this->db->bind(':Sizes',$product->Sizes);
            $this->db->bind(':Description',$product->Description);
            $this->db->bind(':Category',$product->Category);
            $this->db->bind(':ProductID',$product->productID);
            $this->db->execute();
        }
        public function getAllUsers(){
            $query='SELECT * FROM user ';
            $this->db->query($query);
            $result=$this->db->resultSet();
            return $result;
        }
        public function getAllOrders(){
            $query='SELECT user.PhoneNumber, orders.OrderNumber, orders.DateOfOrder, orders.Status, orders.email 
            FROM orders INNER JOIN user
            ON orders.email=user.email';
            $this->db->query($query);
            $result=$this->db->resultSet();
            return $result;
        }
        public function updatePermission($permission, $email){
            $query="UPDATE user SET permission='$permission' WHERE email='$email'";
            $this->db->query($query);
            $this->db->execute();
        }
        public function updateStatus($status, $OrderNumber){
            $query="UPDATE orders SET Status='$status' WHERE OrderNumber=$OrderNumber";
            $this->db->query($query);
            $this->db->execute();
        }
    }
?>