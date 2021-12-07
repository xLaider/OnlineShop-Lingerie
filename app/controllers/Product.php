<?php

class Product extends Controller {
    public function __construct()
    {
        $this->productModel = $this->model('ProductModel');
    }
    public function index(){
        $product = $this->productModel->getProductByID($_GET['productID']);
        $images = $this->productModel->getImageByID($_GET['productID']);
        $arr = array();

        $this->view('product',compact('product',$product,'images',$images));
    }
    public function initProduct(){
        $product = $this->productModel->getProductByID($_GET['productID']);
        $images = $this->productModel->getImageByID($_GET['productID']);
        $arr=array();
        $_SESSION['currentProduct']=serialize($product);
        foreach ($images as $image){
            array_push($arr,$image->image);
        }
        $_SESSION['imageArray']=$arr;
        
        echo $_SESSION['imageArray'][0];
        header("Location: ".URLROOT."/product");
                exit();
    }
    public function addToCart(){
        if (isset($_SESSION['cartItems'])){
            $arr=array();
            $_SESSION['cartItems']=$arr;
        }
        
        array_push($_SESSION['cartItems'],$_SESSION['currentProduct']);
        
    }
}