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
            VALUES (:email, null, null, null, :password, null, :registerDate, null, NULL);";
            $this->db->query($query);
            $this->db->bind(':email',$_POST['email']);
            $hashedPassword=password_hash($_POST['password'],PASSWORD_DEFAULT);
            $this->db->bind(':password',$hashedPassword);
            $currentDate=date("Y-m-d h:i:s");
            $this->db->bind(':registerDate',$currentDate);
            $this->db->execute();
            //Zbindowac zmienne do zapytania.
        }

    }
?>