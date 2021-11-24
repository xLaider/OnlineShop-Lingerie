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

        var_dump($_SESSION['cartItemsId']);
        $cartProducts = [];
        if (isset($_SESSION['cartItemsId'])) {
            foreach ($_SESSION['cartItemsId'] as $cartItemId) {
                var_dump($cartItemId);
                $product = $this->productModel->getProductByID($cartItemId);
                var_dump($product);
                $images = $this->productModel->getImageByID($cartItemId);
                if (isset($images[0]))
                    $product->image = $images[0];
                else
                    $product->image = NULL;
                array_push($cartProducts, $product);
            }
        }
        $this->view('cart');
    }

    public function addToCart($args)
    {
        $cartItemsId = [];
        if (isset($_SESSION['cartItemsId'])) {
            $cartItemsId = unserialize($_SESSION['cartItemsId']);
        }
        $cartItemsId[$args] = 1;
        $_SESSION['cartItemsId'] = serialize($cartItemsId);
    }
}
