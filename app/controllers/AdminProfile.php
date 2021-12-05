

<?php

class AdminProfile extends Controller
{
    public function __construct()
    {
        $this->productModel = $this->model('ProductModel');
    }
    public function index()
    {
        $this->view('adminProfile');
    }
  
}