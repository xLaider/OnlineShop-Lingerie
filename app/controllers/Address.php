<?php

class Address extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->shipmentModel = $this->model('Shipment');
    }
    public function index()
    {
        $address = $this->shipmentModel->getUserAddress($_SESSION['userData']->AddressId);
        $_SESSION['address'] = $address;
        $this->view('address');
        
    }

    public function addressHandler()
    {
        if (!isset($_POST['country']) || !isset($_POST['city']) || !isset($_POST['street']) || !isset($_POST['number']) || !isset($_POST['postCode']) || strlen($_POST['country']) == 0 || strlen($_POST['city']) == 0 || strlen($_POST['street']) == 0 || strlen($_POST['number']) == 0 || strlen($_POST['postCode']) == 0) {

            $_SESSION['errorEmptyAddress'] = "Uzupełnij wszystkie pola1!";
            header("Location: " . URLROOT . "/address");
            exit();

        } else {
            unset($_SESSION['errorEmptyAddress']);

            //pobranie z bazy adresu po id address z tabeli users
            $address = $this->shipmentModel->getUserAddress($_SESSION['userData']->AddressId);
           
            if ($address == null) {//jeśli adresu nie ma to utworzenie go
                $this->shipmentModel->createAddress($_POST['country'], $_POST['city'], $_POST['street'], $_POST['number'], $_POST['postCode'], $_SESSION['userData']->email);
                $_SESSION['updateAddress']="Poprawnie zmieniono dane adresowe";
                header("Location: " . URLROOT . "/address");
                exit();

            } else {
                //jak jest to go updateuje

                
                $this->shipmentModel->updateAddress($_POST['country'], $_POST['city'], $_POST['street'], $_POST['number'], $_POST['postCode'], $_SESSION['userData']->AddressId);
                unset($_SESSION['errorUser']);
                exit();
                //else czyli jeśli znalazł to ma być wypełnione wierszami z bazy
           
               
                //w ulicy chociaż filtr alfanumeryczny
                //ikonka profilu na stronie głównej
                
                //chyba nie powinno sie dac zalogowac bedac zalogowanym
                //gdzie ma być zamknięcie sesji , wydaje mi sie ze bylo w wylogowaniu a nie ma nigdzie
                // header("Location: ".URLROOT."/login");
                // exit();
            }
        }
        // header("Location: ".URLROOT."/register");
        // exit();
    }
}
