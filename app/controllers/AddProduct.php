<?php

class AddProduct extends Controller {
    public function __construct()
    {
        $this->productModel = $this->model('ProductModel');
    }
    public function index(){
        if($_GET['productID']!=null){
        $product = $this->productModel->getProductByID($_GET['productID']);
        $images = $this->productModel->getImageByID($_GET['productID']);
        $arr = array();

        $this->view('addProduct',compact('product',$product,'images',$images));
        }else
        $this->view('addProduct');
    }
    public function AddProduct($productID=null)
    {
        $blad=false;

        //isset dla selecta
        
        $frProduct=new stdClass;
        if(isset($_POST['Name']))
        {
            $frProduct->Name=$_POST['Name'];
        }
        else
        {
            $blad=true;
            $frProduct->Name="";
        }

        if(isset($_POST['Price']))
        {
            $frProduct->Price=$_POST['Price'];
        }
        else
        {
            $blad=true;
            $frProduct->Price="";
        }

        if(isset($_POST['Sizes']))
        {
            $frProduct->Sizes=$_POST['Sizes'];
        }
        else
        {
            $blad=true;
            $frProduct->Sizes="";
        }

        if(isset($_POST['Description']))
        {
            $frProduct->Description=$_POST['Description'];
        }
        else
        {
            $blad=true;
            $frProduct->Description="";
        }
    
        if(isset($_POST['Category']))
        {
            $frProduct->Category=$_POST['Category'];
        }
        else
        {
            $blad=true;
            $frProduct->Category="";
        }

        if(!$blad)//ustawiono wszystkie pola
        {
           
            if($productID==null)
            {
               
                $this->adminModel->saveProduct($frProduct);
            }
            else
            {
                $frProduct->productID=$productID;
                $this->adminModel->updateProduct($frProduct);
                echo "update wykonany";
            }
            $product=$this->productModel->getProductByID($productID);
        }
        else //blad w jakims polu
        {
            $product=$frProduct;
        }


        $this->view('addProduct',array('product'=>$product,'blad'=>$blad));
    }
    
}