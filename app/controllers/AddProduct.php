<?php

class AddProduct extends Controller {
    public function __construct()
    {
        $this->productModel = $this->model('ProductModel');
        $this->adminModel = $this->model('AdminModel');
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
    public function AddProduct($productID)
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

        if(isset($_POST['Category']))
        {
            $frProduct->Category=$_POST['Category'];
        }
        else
        {
            $blad=true;
            $frProduct->Category="";
        }

        if(isset($_FILES['1Img']))
        {
            $uploads_dir = './assets/images';
            $tmp_name = $_FILES["1Img"]["tmp_name"];
		    $name = basename($_FILES["1Img"]["name"]);
		    move_uploaded_file($tmp_name,  "$uploads_dir/$name");
            $link="./assets/images/$name";
            $this->productModel->addImageByID($link,$productID);
        }
        else
        {
            $blad=true;
        }
        if(isset($_FILES['2Img']))
        {
            $tmp_name = $_FILES["2Img"]["tmp_name"];
		    $name = basename($_FILES["2Img"]["name"]);
		    move_uploaded_file($tmp_name,  "./assets/images/$name");
        }
        
        if(isset($_FILES['3Img']))
        {
            $tmp_name = $_FILES["3Img"]["tmp_name"];
		    $name = basename($_FILES["3Img"]["name"]);
		    move_uploaded_file($tmp_name,  "./assets/images/$name");
        }
        
        if(isset($_FILES['4Img']))
        {
            $tmp_name = $_FILES["4Img"]["tmp_name"];
		    $name = basename($_FILES["4Img"]["name"]);
		    move_uploaded_file($tmp_name,  "./assets/images/$name");
        }
        
        if(isset($_FILES['5Img']))
        {
            $tmp_name = $_FILES["5Img"]["tmp_name"];
		    $name = basename($_FILES["5Img"]["name"]);
		    move_uploaded_file($tmp_name,  "./assets/images/$name");
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


        $this->view('adminProduct' );
    }
    
}