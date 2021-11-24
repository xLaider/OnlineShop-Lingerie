<?php

class Index extends Controller {
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->productModel = $this->model('ProductModel');
    }
    public function index(){
        
        $products=$this->productModel->getAllProducts();
        $arrayOfProducts=array();
        foreach($products as $product){
            array_push($arrayOfProducts,serialize($product));
        }
        $_SESSION['products']=$arrayOfProducts;
        $this->view('index');

    }
    public function logout(){
        unset($_SESSION['userData']);
        header("Location: ".URLROOT);
        exit();
    }
}
?>