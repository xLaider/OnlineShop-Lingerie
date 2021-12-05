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
        if(isset($_SESSION['userData']))
        {
            $address = $this->shipmentModel->getUserAddress($_SESSION['userData']->AddressId);
            $_SESSION['address'] = $address;
            $this->view('address');
        }
        else
        {
            header("Location: " . URLROOT . "/login");
            exit();
        }
        
    }

    public function addressHandler()
    {

            //pobranie z bazy adresu po id address z tabeli users
            $address = $this->shipmentModel->getUserAddress($_SESSION['userData']->AddressId);
           
            if ($address == null) {//jeśli adresu nie ma to utworzenie go
                $this->shipmentModel->createAddress($_POST['country'], $_POST['city'], $_POST['street'], $_POST['number'], $_POST['postCode'], $_SESSION['userData']->email);

            } else {
                //jak jest to go updateuje
                $this->shipmentModel->updateAddress($_POST['country'], $_POST['city'], $_POST['street'], $_POST['number'], $_POST['postCode'], $_SESSION['userData']->AddressId);
                unset($_SESSION['errorUser']);
                //else czyli jeśli znalazł to ma być wypełnione wierszami z bazy
           
               
                //w ulicy chociaż filtr alfanumeryczny
                //ikonka profilu na stronie głównej
                
                //chyba nie powinno sie dac zalogowac bedac zalogowanym
                //gdzie ma być zamknięcie sesji , wydaje mi sie ze bylo w wylogowaniu a nie ma nigdzie
    
            }
            $address = $this->shipmentModel->getUserAddress($_SESSION['userData']->AddressId);
            $_SESSION['address'] = $address;
            header("Location: " . URLROOT . "/profile");
    }
}
