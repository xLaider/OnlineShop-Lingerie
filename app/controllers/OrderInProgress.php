<?php

class OrderInProgress extends Controller {
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }
    public function index(){
        $this->view('orderInProgress');
    }
}