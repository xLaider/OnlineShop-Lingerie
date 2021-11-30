

<?php

class AdminOrders extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->productModel = $this->model('ProductModel');
        $this->adminModel = $this->model('AdminModel');
    }
    public function index()
    {
        $orders=$this->adminModel->getAllOrders();
        $this->view('adminOrders',compact('orders', $orders));
    }
    public function updateStatus()
    {
        $status=$_POST['status'];
        $OrderNumber=$_POST['OrderNumber'];
        var_dump($status);
        var_dump($OrderNumber);
        $this->adminModel->updateStatus($status,$OrderNumber);
        header("Location: ".URLROOT."/adminOrders");
        exit();
    }
}
