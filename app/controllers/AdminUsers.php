<?php

class adminUsers extends Controller
{
    public function __construct()
    {
        $this->adminModel = $this->model('AdminModel');
    }
    public function index()
    {
        if (!isset($_SESSION['userData']->Permission)||($_SESSION['userData']->Permission!="admin")) 
        {
            header("Location: " . URLROOT );
            exit();
        }
        $users=$this->adminModel->getAllUsers();
        $this->view('adminUsers',compact('users', $users));
    }
    public function updatePermission()
    {
        $permission=$_POST['permission'];
        $email=$_POST['email'];
        $this->adminModel->updatePermission($permission,$email);
        header("Location: ".URLROOT."/adminUsers");
        exit();
    }
}
