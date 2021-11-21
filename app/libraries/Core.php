<?php
    //Core App Class
    class Core{
        protected $currentController = 'Index';
        protected $currentMethod = 'index';
        protected $params = [];

        public function __construct()
        {
            $url = $this->getUrl();
            //ucwords capitalizes first letter
            if ($url!=null){
                if (file_exists('../app/controllers/' . ucwords($url[0]).'.php')){
                    $this->currentController=ucwords(($url[0]));  
                    unset($url[0]);   
                }
            }
            //Require the controller
            require_once '../app/controllers/'.$this->currentController.'.php';
            $this->currentController = new $this->currentController;
            //Check for the second part of the URL
            if (isset($url[1])){
                if (method_exists($this->currentController, $url[1])){
                    $this->currentMethod = $url[1];
                    unset($url[1]);
                }
            }

            //Get parameters
            $this->params = $url ? array_values($url) : [];

            //Call a callback with aray of params
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
        }
        public function getUrl(){
            if(isset($_GET['url'])){
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/',$url);
                return $url;
            }
        }
    }