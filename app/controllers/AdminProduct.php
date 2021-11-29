

<?php

class AdminProduct extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->productModel = $this->model('ProductModel');
        $this->adminModel = $this->model('AdminModel');
    }
    public function index()
    {

        $products=$this->adminModel->getAllProducts();
        $this->view('adminProduct',array('products'=> $products));
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
