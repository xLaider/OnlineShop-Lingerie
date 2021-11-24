<?php
    class Shipment{
        private $db;
        public function __construct()
        {
            $this->db = new Database;
        }
        public function getUserAddress($AddressId){
            $query='SELECT * FROM address WHERE AddressId = :AddressId';
            $this->db->query($query);
            $this->db->bind(':AddressId',$AddressId);
            $result=$this->db->single();
            return $result;
        }

        public function createAddress($country,$city,$street,$number,$postCode,$email){
            $query="INSERT INTO address (Country,City,Street,`BuildingNumber/ApartmentNumber`,PostCode)
            VALUES (:Country, :City, :Street, :BuildingNumber, :PostCode);";
            $this->db->query($query);
            $this->db->bind(':Country',$country);
            $this->db->bind(':City',$city);
            $this->db->bind(':Street',$street);
            $this->db->bind(':BuildingNumber',$number);
            $this->db->bind(':PostCode',$postCode);
            $this->db->execute();

            //pobieranie id z tego nowo wstawionego i ustawienie w tabeli user pola IdAddress
            
            $lastId=$this->db->lastInsertId();
            

             $query2="UPDATE user SET AddressId=:AddressId WHERE email=:email;";
             $this->db->query($query2);
             $this->db->bind(':AddressId',$lastId);
             $this->db->bind(':email',$email);
             $this->db->execute();

             $_SESSION['userData']->AddressId=$lastId;

        }
        
        public function updateAddress($country,$city,$street,$number,$postCode,$addressId){
            
            //na podstawie $addressId aktualizowanie całego wiersza 
            $query="UPDATE address SET Country=:Country, City = :City,Street=:Street,`BuildingNumber/ApartmentNumber`=:BuildingNumber,PostCode=:PostCode WHERE AddressId=:AddressId;";
            $this->db->query($query);
            $this->db->bind(':Country',$country);
            $this->db->bind(':City',$city);
            $this->db->bind(':Street',$street);
            $this->db->bind(':BuildingNumber',$number);
            $this->db->bind(':PostCode',$postCode);
            $this->db->bind(':AddressId',$addressId);
            $this->db->execute();
        }
    }
?>