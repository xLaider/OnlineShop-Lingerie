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