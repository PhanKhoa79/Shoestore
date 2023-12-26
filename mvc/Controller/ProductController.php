<?php
include_once(__DIR__ . '/../Model/ProductModel.php');

class ProductController {
    public function addProduct($data) {
    
        $productModel = new ProductModel();
        $result = $productModel->addProduct($data);
        if ($result) {
            return true;
        }
    }

    public function getAllProducts() {
        $productModel = new ProductModel();
        return $productModel->getAllProducts();     
    }

    public function getAllProduct() {
        $productModel = new ProductModel();
        return $productModel->getAllProduct();     
    }

    public function getAllProductsByCategory($category) {
        $productModel = new ProductModel();
        return $productModel->getAllProductsByCategory($category);     
    }

    public function getAllProductsByBrand($brand) {
        $productModel = new ProductModel();
        return $productModel->getAllProductsByBrand($brand);     
    }

    public function getProductById($productId) {
        $productModel = new ProductModel();
        return $productModel->getProductById($productId);     
    }

    public function deleteProduct($productId) {
        $productModel = new ProductModel();
        $result = $productModel->deleteProduct($productId);
        return $result;
    }

    public function countProduct() {
        $productModel = new ProductModel();
        $rowCount = $productModel->countProduct();
         return $rowCount;
    }

    public function updateProduct($data) {
        $productModel = new ProductModel();
        $success = $productModel->updateProduct($data);
        
        if ($success) {
            return true;
        }
    }
}
?>