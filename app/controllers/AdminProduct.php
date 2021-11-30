

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

        $products=$this->adminModel->getAllProducts();
        $this->view('adminProduct',array('products'=> $products));
    }

    
}
