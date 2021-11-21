<?php

class Index extends Controller {
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }
    public function index(){
        $this->view('index');
    }
    public function logout(){
        unset($_SESSION['userData']);
        header("Location: ".URLROOT);
        exit();
    }
}
?>