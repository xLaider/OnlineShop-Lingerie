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

        public function createAddress($country,$city,$street,$number,$postCode){
            $query="INSERT INTO address (Country,City,Street,`BuildingNumber/ApartmentNumber`,PostCode)
            VALUES (:Country, :City, :Street, :BuildingNumber, :PostCode);";
            $this->db->query($query);
            $this->db->bind(':Country',$country);
            $this->db->bind(':City',$city);
            $this->db->bind(':Street',$street);
            $this->db->bind(':BuildingNumber',$number);
            $this->db->bind(':PostCode',$postCode);
            $this->db->execute();

            
        }
    }
?>