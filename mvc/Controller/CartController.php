<?php
include_once(__DIR__ . '/../Model/CartModel.php');

class CartController {
    public function addToCart($data) {
    
        $cartModel = new CartModel();
        $result = $cartModel->addToCart($data);
        if ($result) {
            return true;
        }
    }

    public function addToOrder($data) {
    
        $cartModel = new CartModel();
        $result = $cartModel->addToOrder($data);
        if ($result) {
            return true;
        }
    }

    public function getProductInCart($idCart) {
        $cartModel = New CartModel();
        return $cartModel->getProductInCart($idCart);
    }

    public function updateQuantity($productId, $quantity) {
        $cartModel = new CartModel();
        $result = $cartModel->updateQuantity($productId, $quantity);
        
        if ($result) {
            return true;
        }
    }
}

?>