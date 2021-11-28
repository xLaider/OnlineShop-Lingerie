<?php

class Cart extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->productModel = $this->model('ProductModel');
    }
    public function index()
    {
        $cartSum=0;
        $cartProducts = [];

        if (isset($_SESSION['cartItemsId'])) {
            $cartItemsId = unserialize($_SESSION['cartItemsId']);
            foreach ($cartItemsId as $cartItemId  => $quantity) {
                $product = $this->productModel->getProductByID($cartItemId);
                if($product){
                    $product->quantity = $quantity;
                    $cartSum+=$product->Price*$quantity;
                    $images = $this->productModel->getImageByID($cartItemId);
                    if (isset($images[0]))
                        $product->imageLink = $images[0]->link;
                    else
                        $product->imageLink = NULL;
                    array_push($cartProducts, $product);
                }
                
            }
        }
        $this->view('cart',array("cartProducts" => $cartProducts,"cartSum"=>$cartSum));
    }

    public function addToCart($itemId,$quantity=1)
    {
        if (isset($_SESSION['cartItemsId'])) {
            $cartItemsId = unserialize($_SESSION['cartItemsId']);
        }
        if (isset($cartItemsId[$itemId]))
            $cartItemsId[$itemId] += $quantity;
        else
            $cartItemsId[$itemId] = $quantity;

        if($cartItemsId[$itemId]<1)
        unset($cartItemsId[$itemId]);

        $_SESSION['cartItemsId'] = serialize($cartItemsId);

        //var_dump(unserialize($_SESSION['cartItemsId']));
        header("Location: ".URLROOT."/cart");
        exit();
    }
}
