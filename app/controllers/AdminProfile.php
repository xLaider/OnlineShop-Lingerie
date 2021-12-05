

<?php

class AdminProfile extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION['userData']->Permission)||($_SESSION['userData']->Permission!="admin")) 
        {
            header("Location: " . URLROOT );
            exit();
        }
        $this->productModel = $this->model('ProductModel');
    }
    public function index()
    {
        $this->view('adminProfile');
    }
  
}