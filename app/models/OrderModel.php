<?php
    class OrderModel{
        private $db;
        public function __construct()
        {
            $this->db = new Database;
        }
        //
        public function getUserOrders($email){
            $query='SELECT * FROM orders WHERE email = :email';
            $this->db->query($query);
            $this->db->bind(':email',$email);
            $result=$this->db->resultSet();
            return $result;
        }

       public function getOrderProductsByOrderNumber($OrderNumber)
       {
            $query='SELECT * FROM orderproduct WHERE OrderNumber = :OrderNumber';
            $this->db->query($query);
            $this->db->bind(':OrderNumber',$OrderNumber);
            $result=$this->db->resultSet();
            return $result;
       }

    }
?>