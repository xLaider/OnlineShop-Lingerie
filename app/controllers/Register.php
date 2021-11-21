<?php

class Register extends Controller {
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->authorizeModel = $this->model('Authorize');
        $this->view('register');
    }
    public function registerUser(){
        if (!isset($_POST['password']) or !isset($_POST['email']) or !isset($_POST['confirmPassword'])){
            $_SESSION['errorEmptyRegister']="Uzupełnij wszystkie pola!";
        }else{
            unset($_SESSION['errorEmptyRegister']);
            if ($_POST['password']==$_POST['confirmPassword']){
                $result=$this->authorizeModel->getUserByEmail($_POST['email']);
                if ($result==null){
                    $this->userModel->createUser();
                    unset($_SESSION['errorTakenRegister']);
                    header("Location: ".URLROOT."/login");
                    exit();
                }else{
                    $_SESSION['errorTakenRegister']="W bazie danych istnieje już użytkownik o tym samym adresie e-mail";
                }
            }
        }
        header("Location: ".URLROOT."/register");
        exit();
    }
    public function index(){
        
    }
}

?>