<?php

class OrderInProgress extends Controller {
    public function __construct()
    {
        $this->orderModel = $this->model('OrderModel');
    }
    public function index(){
        if (isset($_GET['orderID'])){
            $order=$this->orderModel->getOrderProductsByOderNumber($_GET['orderID']);
            $this->view('orderInProgress',compact('order'),$order);
        }else{
            $this->view('Error');
        }
        
    }
}