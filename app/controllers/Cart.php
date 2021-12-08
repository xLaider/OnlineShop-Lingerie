<?php

class Cart extends Controller
{
    public function __construct()
    {
        $this->productModel = $this->model('ProductModel');
    }
    public function index()
    {
        $cartSum = 0;
        $cartProducts = [];

        if (isset($_SESSION['cartItems'])) {
            $cartItems = unserialize($_SESSION['cartItems']);
            foreach ($cartItems as $cartItem) {

                $product = $this->productModel->getProductByID($cartItem->id);
                if ($product) {
                    $product->quantity = $cartItem->quantity;
                    $cartSum += $product->Price * $cartItem->quantity;
                    $product->Sizes = $cartItem->size;
                    $images = $this->productModel->getImageByID($cartItem->id);
                    if (isset($images[0]))
                        $product->imageLink = $images[0]->link;
                    else
                        $product->imageLink = NULL;
                    array_push($cartProducts, $product);
                }
            }
        }

        $this->view('cart', array("cartProducts" => $cartProducts, "cartSum" => $cartSum));
    }

    public function addToCart($itemId, $quantity = 1)
    {
        $cartItems = array();

        if (isset($_SESSION['cartItems'])) {
            $cartItems = unserialize($_SESSION['cartItems']);

            $same = false;
            foreach ($cartItems as $item) {
                if ($item->id == $itemId and $item->size == $_GET['size']) {
                    $same = true;
                    $item->quantity += 1;
                }
            }
            if (!$same) {
                $cartItem = new stdClass();
                $cartItem->id = $itemId;
                $cartItem->quantity = $quantity;
                $cartItem->size = $_GET['size'];
                array_push($cartItems, $cartItem);
            }
        } else {
            $cartItem = new stdClass();
            $cartItem->id = $itemId;
            $cartItem->quantity = $quantity;
            $cartItem->size = $_GET['size'];
            array_push($cartItems, $cartItem);
        }
        $_SESSION['cartItems'] = serialize($cartItems);


        header("Location: " . URLROOT . "/cart");
        exit();
    }
    //TODO podpiac i poprawic usuwanie
    public function deleteItemFromCart()
    {
        $cartItems = unserialize($_SESSION['cartItems']);
        foreach ($cartItems as $itemKey => $item) {
            foreach ($item as $valueKey => $value) {
                if ($valueKey == "id" && $value == $_GET['id']) {
                    unset($cartItems[$itemKey]);
                }
            }
        }
        $_SESSION['cartItems'] = serialize($cartItems);
        header("Location: " . URLROOT . "/cart");
        exit();
    }
    public function updateCart()
    {
        //TODO znalezc blad kasujacy koszyk
        $cartItems = unserialize($_SESSION['cartItems']);

        foreach ($cartItems as $itemKey => $item) {
            if (((int)($item->id)) == $_GET['id'] and $item->size == $_GET['size']) {

                $item->quantity += $_GET['quantity'];
            }
            foreach ($item as $valueKey => $value) {
                if ($valueKey == "quantity" && $value < 1) {
                    unset($cartItems[$itemKey]);
                }
            }
        }
        $_SESSION['cartItems'] = serialize($cartItems);
        header("Location: " . URLROOT . "/cart");
        exit();
    }
}
