

<?php

class AdminProduct extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->productModel = $this->model('ProductModel');
        $this->adminModel = $this->model('AdminModel');
    }
    public function index()
    {
        if (!isset($_SESSION['userData']->Permission)||($_SESSION['userData']->Permission!="admin")) 
        {
            header("Location: " . URLROOT );
            exit();
        }
        if(isset($_GET['sortType']))
        {
            $sortType=$_GET['sortType'];
        }
        else
        {
            $sortType="productID";
        }
        $products=$this->adminModel->getAllProducts($sortType);
        $this->view('adminProduct',array('products'=> $products));
    }


    
}
