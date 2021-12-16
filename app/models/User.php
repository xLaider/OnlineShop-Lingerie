<?php
    class User{
        private $db;
        public function __construct()
        {
            $this->db = new Database;
        }
        public function getUsers(){
            $this->db->query("SELECT * FROM user");
            $result = $this->db->resultSet();
            return $result;
        }
        public function createUser(){
            $query="INSERT INTO user (email, FirstName, LastName, PhoneNumber, Password, DateOfBirth, DateOfRegistration, DateOfLastLogin, AddressId) 
            VALUES (:email, null, null, null, :password, null, :registerDate, null,null);";
            $this->db->query($query);
            $this->db->bind(':email',$_POST['email']);
            $hashedPassword=password_hash($_POST['password'],PASSWORD_DEFAULT);
            $this->db->bind(':password',$hashedPassword);
            $currentDate=date("Y-m-d h:i:s");
            $this->db->bind(':registerDate',$currentDate);
            $this->db->execute();
            //Zbindowac zmienne do zapytania.
        }
        public function getUserAddress(){
            $query="SELECT Country, City, Street, BuildingNumberApartmentNumber, PostCode, FirstName, LastName, PhoneNumber, FirstName, LastName, email, PhoneNumber
            FROM user u INNER JOIN address a ON a.AddressId=u.AddressId WHERE u.AddressId=:AddressId";
            $this->db->query($query);
            $this->db->bind(':AddressId',$_SESSION['userData']->AddressId);
            return $result=$this->db->single();
        }

    }
?>