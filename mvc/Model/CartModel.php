<?php 
include_once('DBConfig.php');

class CartModel {
    public static function addToCart($data) {
        try {
            $conn = connectDB();

            $query = "INSERT INTO cart_detail (cart_id, IdProduct, quantity) VALUES (:idCart, :idProduct, :quantity)";
            $stmt = $conn->prepare($query);

            $stmt->bindParam(':idCart',  $data['idCart']);
            $stmt->bindParam(':idProduct', $data['idProduct']);
            $stmt->bindParam(':quantity', $data['quantity']);
    
            $stmt->execute();

            return true;
        } catch(PDOException $e) {
            return false;
        }
    }

    public static function addToOrder($data) {
        try {
            $conn = connectDB();

            $query = "INSERT INTO orders (id_user, full_name, phone, shipping_address, total_amount) VALUES (:idUser, :fullName, :phone, :address, :total)";
            $stmt = $conn->prepare($query);

            $stmt->bindParam(':idUser',  $data['idUser']);
            $stmt->bindParam(':fullName', $data['fullname']);
            $stmt->bindParam(':phone', $data['phone']);
            $stmt->bindParam(':address', $data['address']);
            $stmt->bindParam(':total', $data['total']);

            $stmt->execute();

            return true;
        } catch(PDOException $e) {
            return false;
        }
    }

    public static function getProductInCart($idCart) {
        try {
            $conn = connectDB();

            $query = "SELECT prodcut.IdProduct, prodcut.NameProduct, prodcut.ImageProduct, prodcut.Price, cart_detail.quantity
                        FROM cart_detail
                        INNER JOIN prodcut ON cart_detail.IdProduct = prodcut.IdProduct
                        WHERE cart_detail.cart_id = :cart_id;";
            $stmt = $conn->prepare($query);

            $stmt->bindParam(':cart_id', $idCart);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch(PDOException $e) {
            return false;
        }
    }

    public static function updateQuantity($productId, $quantity) {
        try {
            $conn = connectDB();
    
            $query = "UPDATE cart_detail SET quantity = :quantity WHERE IdProduct = :idProduct";
    
            $stmt = $conn->prepare($query);
    
            $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
            $stmt->bindParam(':idProduct', $productId, PDO::PARAM_STR);
            
            $stmt->execute();
    
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
    
}

?>