<?php

class Index extends Controller {
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->view('index');
        
    }
    public function index(){

    }
}