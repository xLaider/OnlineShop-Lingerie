<?php

class Order extends Controller {
    public function __construct()
    {
        $this->orderModel = $this->model('OrderModel');
        $this->userModel=$this->model('User');
    }
    public function index(){
        if (!isset($_POST['price'])){
            header("Location: " . URLROOT . "/cart");
            exit();
        }
        $this->ifLoggedInGetData();
        $this->view('order');
    }
    public function addOrder(){
        $this->orderModel->addOrder();
    }
    public function ifLoggedInGetData(){
        if (isset($_SESSION['userData']->AddressId)){
            $addressInfo=$this->userModel->getUserAddress();
            $this->view('order',compact('addressInfo'));
        }
    }
}