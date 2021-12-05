<?php

class Profile extends Controller {
    public function __construct()
    {
        $this->productModel = $this->model('ProductModel');
        $this->orderModel = $this->model('OrderModel');
    }
    public function index()
    {
        if (isset($_SESSION['userData']->email)) 
        {
            $orders = $this->orderModel->getUserOrders($_SESSION['userData']->email);
            foreach ($orders as $order) 
            {
                $order->OrderAmount=0;
                $orderProducts=$this->orderModel->getOrderProductsByOrderNumber($order->OrderNumber);
                foreach ($orderProducts as $orderProduct) {
                    $orderProductPrice=$this->productModel->getProductByID($orderProduct->ProductId)->Price;
                    $order->OrderAmount+=$orderProduct->Quantity*$orderProductPrice;
                }
                          
            }
                         
        }
        else
        {
            header("Location: " . URLROOT . "/login");
            exit();
        }
       
        $this->view('profile',array("orders" => $orders));
    }

}