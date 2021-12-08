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
       public function addOrder()
        {
            $query="INSERT INTO address (Country, City, Street, BuildingNumber, PostCode)
            VALUES (:Country, :City, :Street, :BuildingNumber, :PostCode)";
            $this->db->query($query);
            $this->db->bind(':Country',$_POST['Country']);
            $this->db->bind(':City',$_POST['City']);
            $this->db->bind(':Street',$_POST['Street']);
            $this->db->bind(':BuildingNumber',$_POST['Number']);
            $this->db->bind(':PostCode',$_POST['PostCode']);
            $this->db->execute();
            
            $id=$this->db->lastInsertId();

            $query="INSERT INTO orders (addressID, DateOfOrder, Status, email)
            VALUES (:addressID, :DateOfOrder, :Status, :email)";
            $today = date("m.d.y"); 
            $this->db->query($query);
            $this->db->bind(':addressID',$id);
            $this->db->bind(':DateOfOrder',$today);
            $this->db->bind(':Status',0);
            $this->db->bind(':email',$_POST['Email']);
            $this->db->execute();
            
            $cartItems=unserialize($_SESSION['cartItems']);

            $id=$this->db->lastInsertId();
            var_dump($id);
            foreach ($cartItems as $item ){
                $query="INSERT INTO orderproduct (Quantity, Size, ProductId, OrderNumber)
                VALUES (:Quantity, :Size, :ProductId, :OrderNumber);";
                $this->db->query($query);
                $this->db->bind(':Quantity',$item->quantity);
                $this->db->bind(':Size',$item->size);
                $this->db->bind(':ProductId',$item->id);
                $this->db->bind(':OrderNumber',$id);
                $this->db->execute();
            }
            header("Location: ".URLROOT);
            exit();
        }
    }
?>