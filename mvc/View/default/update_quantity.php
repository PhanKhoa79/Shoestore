<?php
include_once('../../Controller/CartController.php');
if (isset($_POST['productId']) && isset($_POST['quantity'])) {
    // Kết nối CSDL và cập nhật giá trị quantity trong bảng category_detail
    $productId = $_POST['productId'];
    $newQuantity = $_POST['quantity'];
    
    $cartController = new CartController();
    $result = $cartController->updateQuantity($productId, $newQuantity);

    
}
?>





