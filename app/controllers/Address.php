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
        $this->view('address');
    }

    public function addressHandler()
    {
        print_r($_POST);
        if (!isset($_POST['country']) || !isset($_POST['city']) || !isset($_POST['street']) || !isset($_POST['number']) || !isset($_POST['postCode']) || strlen($_POST['country']) == 0 || strlen($_POST['city']) == 0 || strlen($_POST['street']) == 0 || strlen($_POST['number']) == 0 || strlen($_POST['postCode']) == 0) {

            $_SESSION['errorEmptyAddress'] = "Uzupełnij wszystkie pola1!";
            header("Location: " . URLROOT . "/address");
            exit();
        } else {


            unset($_SESSION['errorEmptyAddress']);
            print_r($_SESSION);

            //pobranie z bazy adresu po id address z tabeli users
            $addressId = $this->shipmentModel->getUserAddress($_SESSION['userData']->AddressId);
            if ($addressId == null) {//nie ma adresu
                $this->shipmentModel->createAddress($_POST['country'], $_POST['city'], $_POST['street'], $_POST['number'], $_POST['postCode'], $_SESSION['userData']->email);
                echo "sds";
            } else {
                //jak jest to go updateuje
                //...UpdateAddress($_POST['country'], $_POST['city'], $_POST['street'], $_POST['number'], $_POST['postCode'], $addressId)
                unset($_SESSION['errorUser']);
                echo "dsd";
                exit();
                //else czyli jeśli znalazł to ma być wypełnione wierszami z bazy
                // header("Location: ".URLROOT."/login");
                // exit();
            }
        }
        // header("Location: ".URLROOT."/register");
        // exit();
    }
}
