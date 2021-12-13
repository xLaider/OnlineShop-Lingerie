<?php

class Index extends Controller {
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->productModel = $this->model('ProductModel');
    }
    public function index(){
        
        $products=$this->productModel->getAllProducts();
        
        $this->view('index',compact('products', $products));

    }
    public function logout(){
        session_unset();
        header("Location: ".URLROOT);
        exit();
    }
    public function applyFilter(){
        $products=$this->productModel->getAllProducts();
        if (isset($_SESSION['filterSizes'])){
            unset($_SESSION['filterSizes']);
        }
        $_SESSION['filterSizes']=array();
        if (isset($_POST['XS'])){
            array_push($_SESSION['filterSizes'],'XS');
        }if (isset($_POST['S'])){
            array_push($_SESSION['filterSizes'],'S');
        }if (isset($_POST['M'])){
            array_push($_SESSION['filterSizes'],'M');
        }if (isset($_POST['L'])){
            array_push($_SESSION['filterSizes'],'L');
        }if (isset($_POST['XL'])){
            array_push($_SESSION['filterSizes'],'XL');
        }
        $_SESSION['filterTypes']=array();
        if (isset($_POST['Biustonosze'])){
            array_push($_SESSION['filterTypes'],'Biustonosze');
        }if (isset($_POST['Majtki'])){
            array_push($_SESSION['filterTypes'],'Majtki');
        }if (isset($_POST['Bokserki'])){
            array_push($_SESSION['filterTypes'],'Bokserki');
        }if (isset($_POST['Piżamy'])){
            array_push($_SESSION['filterTypes'],'Piżamy');
        }
        if (isset($_POST['maxPrice'])){
            if ((int)$_POST['maxPrice']==0){
                unset($_POST['maxPrice']);
                if (isset($_SESSION['filterMaxPrice'])){
                    unset($_SESSION['filterMaxPrice']);
                }
            }else{
                $_SESSION['filterMaxPrice']=$_POST['maxPrice'];
            }
            
        }if (isset($_POST['minPrice'])){
            if ((int)$_POST['minPrice']==0){
                unset($_POST['minPrice']);
                if (isset($_SESSION['filterMinPrice'])){
                    unset($_SESSION['filterMinPrice']);
                }
            }else{
                $_SESSION['filterMinPrice']=$_POST['minPrice'];
            }
        }
        
        $filteredProducts = array();
       
        foreach($products as $product){
            $sizeRight = false;
            $minPricePass=false;
            $maxPricePass=false;
            $typeRight = false;
            $sizes=explode(",",$product->Sizes);
            if (!empty($_SESSION['filterSizes'])){
                foreach($_SESSION['filterSizes'] as $filterSize){
                    if (in_array($filterSize, $sizes)){
                        $sizeRight=true;
                    }
                }
            }else{
                $sizeRight=true;
            }
            
            if (isset($_POST['minPrice'])){
                if ($product->Price>$_POST['minPrice']){
                    $minPricePass=true;
                }
            }else{
                $minPricePass=true;
            }
            if (isset($_POST['maxPrice'])){
                if ($product->Price<$_POST['maxPrice']){
                    $maxPricePass=true;
                    
                }
            }else{
                $maxPricePass=true;
            }
            if (!empty($_SESSION['filterTypes'])){

                foreach($_SESSION['filterTypes'] as $filterType){
                    if ($filterType==$product->Category){
                        $typeRight=true;
                    }
                }
            }else{
                $typeRight=true;
            }

            if ($typeRight AND $minPricePass AND $maxPricePass AND $sizeRight){
                array_push($filteredProducts, $product);
            }

            
        }

        $this->view('index',compact('filteredProducts', $filteredProducts));
    }

}
?>