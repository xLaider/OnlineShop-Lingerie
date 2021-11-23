<?php

class Product extends Controller {
    public function __construct()
    {
        $this->productModel = $this->model('ProductModel');
    }
    public function index(){
        $this->view('product');
    }
    public function initProduct(){
        $product = $this->productModel->getProductByID($_GET['productID']);
        $images = $this->productModel->getImageByID($_GET['productID']);
        $arr=array();
        $_SESSION['currentProduct']=serialize($product);
        foreach ($images as $image){
            array_push($arr,$image->link);
        }
        $_SESSION['imageArray']=$arr;

        echo $_SESSION['imageArray'][0];
        header("Location: ".URLROOT."/product");
                exit();
    }
}