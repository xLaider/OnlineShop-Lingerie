<?php

class Index extends Controller {
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->productModel = $this->model('ProductModel');
    }
    public function index(){
        if(isset($_GET['group'])){
            $products=$this->productModel->getGroupedProducts($_GET['group']);
        }else{
            $products=$this->productModel->getAllProducts();
        }
        $group = $this->getGroup();
        $this->view('index',compact('products','group'));

    }

    public function getGroup(){
        if(isset($_GET['group']))
        switch ($_GET['group']){
            case "Woman":
                return "Kobieta";
            case "Man":
                return "Mezczyzna";
            case "Kids":
                return "Dzieci";
            default:
                return "Wszystko";
        }else return "Wszystko";
    }

    public function logout(){
        session_unset();
        header("Location: ".URLROOT);
        exit();
    }

}
?>