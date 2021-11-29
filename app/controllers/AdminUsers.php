<?php

class adminUsers extends Controller
{
    public function __construct()
    {
        $this->adminModel = $this->model('AdminModel');
    }
    public function index()
    {

        $users=$this->adminModel->getAllUsers();
        $this->view('adminUsers',compact('users', $users));
    }
    public function updatePermission()
    {
        $permission=$_POST['permission'];
        $email=$_POST['email'];
        var_dump($_POST);
        $this->adminModel->updatePermission($permission,$email);
        header("Location: ".URLROOT."/adminUsers");
        exit();
    }
}
