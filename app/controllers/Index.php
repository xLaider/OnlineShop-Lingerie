<?php

class Index extends Controller {
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->productModel = $this->model('ProductModel');
    }
    public function index(){
        
        $products=$this->productModel->getAllProducts();
        
        $this->view('index',compact('products', $products));

    }
    public function logout(){
        unset($_SESSION['userData']);
        header("Location: ".URLROOT);
        exit();
    }

}
?>