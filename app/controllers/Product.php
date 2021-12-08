<?php

class Product extends Controller {
    public function __construct()
    {
        $this->productModel = $this->model('ProductModel');
    }
    public function index(){
        $product = $this->productModel->getProductByID($_GET['productID']);
        $images = $this->productModel->getImageByID($_GET['productID']);
        $arr=array();
        foreach ($images as $image){
            array_push($arr,$image->link);
        }
        $_SESSION['imageArray']=$arr;
        $sizes=array();
        $sizes=explode(",",$product->Sizes);
        $this->view('product',compact('product',$product,'images',$images,'sizes'));
    }
    public function addToCart(){
        if (isset($_SESSION['cartItems'])){
            $arr=array();
            $_SESSION['cartItems']=$arr;
        }
        array_push($_SESSION['cartItems'],$_SESSION['currentProduct']);     
    }
}