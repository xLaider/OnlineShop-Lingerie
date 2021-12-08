<?php

class Order extends Controller {
    public function __construct()
    {
        $this->orderModel = $this->model('OrderModel');
    }
    public function index(){
        $this->view('order');
    }
    public function addOrder(){
        $this->orderModel->addOrder();
    }
}