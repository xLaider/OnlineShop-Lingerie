

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
    }
    public function index()
    {
        $this->view('adminProfile');
    }
  
}