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
        
        $images = $this->productModel->getImageByID($productID);
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
            $sizes="";
            foreach ($_POST['Sizes'] as $selectedOption)
            $sizes.=$selectedOption.",";
            $frProduct->Sizes= rtrim($sizes,',');
            
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
    
        if(isset($_POST['Group']))
        {
            $frProduct->Group=$_POST['Group'];
        }
        else
        {
            $blad=true;
            $frProduct->Group="";
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
            if($productID==0)
            {
                $productID=$this->adminModel->saveProduct($frProduct);
                echo "dodano produkt";
            }
            else
            {
                $frProduct->productID=$productID;
                $this->adminModel->updateProduct($frProduct);
                echo "update wykonany";
            }
            $product=$this->productModel->getProductByID($productID);
        }
        
        $i=0;
        while(isset($_FILES['File_'.$i])){
            $image = $_FILES["File_".$i]["tmp_name"];
            if($image){
            $imgContent = file_get_contents($image); 
            $this->productModel->addImageByID($imgContent,$productID,$images[$i-1]->ImageID??null);
            }
            $i++;
        }
      header('location:'.URLROOT.'/adminProduct' );
    }

    public function DeleteImage($productID,$imageID){
        $images = $this->productModel->getImageByID($productID);
        $this->productModel->deleteImageByID($images[$imageID-1]);
        echo "usunieto";
    }
    
}