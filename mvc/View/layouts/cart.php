<?php 
session_start(); 
include_once('../../Controller/ProductController.php');
include_once('../../Controller/CartController.php');
  ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>500+ Mẫu Giày Rep Tại Shop Giày Replica - VKHA STORE</title>

        <link rel="icon" type="image/x-icon" href="../../assets/img/logo.png">
               
        <!-- slick slide -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
        
        <link href="../../assets/base.css" rel="stylesheet">
        <link href="../../assets/style.css" rel="stylesheet">
        <link href="../../assets/modal.css" rel="stylesheet">

        <link rel="stylesheet"
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;400;600&family=Poppins:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

    </head>

    <body>

        <?php
            include("../default/header.php");
        ?>
        <div class="content">
            <div class="cart_top_action">
                <a href="category-product.php">
                    <i class='bx bx-chevron-left bx-sm'></i>
                     Mua thêm sản phẩm khác
                </a>
                <span>Giỏ hàng của bạn</span>
            </div>
            <div class="col-inner">
                <form action="../default/order-success.php" method="post" class="form-cart">
                <?php
                    $totalPrice = 0;
                    $cartString = implode(', ', $_SESSION['login']['cart']);
                    $cartController = new CartController();
                    $carts = $cartController->getProductInCart($cartString);
                    foreach ($carts as $cart) {
                        $productPrice = $cart['Price'] * $cart['quantity'];
                        $totalPrice += $productPrice;
                ?>
                    <div class="shoe-info">
                        <div class="image-shoe">
                            <img width="90" heigh="90" src="../../assets/img/<?php echo $cart['ImageProduct']?>">
                            <a href="">
                                <i class='bx bx-trash'></i>
                            </a>
                        </div>
                        <div class="information-shoe">
                            <span><?php echo $cart['NameProduct']?></span>
                            <span>Size: 39</span>
                        </div>
                        <div class="price-shoe">
                            <span style="margin-left: 10px; margin-bottom: 4px" class="product-price" data-product-id="<?php echo $cart['IdProduct']; ?>" data-product-price="<?php echo $cart['Price']; ?>"><?php echo number_format($cart['Price']*$cart['quantity'], 0, '.', '.')?>₫</span>
                            <div style="border: 1px solid #ddd; padding: 4px 10px">
                            <input type="button" value="-" class="minus_quantity quantity-form" data-product-id="<?php echo $cart['IdProduct'] ?>">
                            <input type="number" class="input_quantity quantity-form" id="quantity_selected_<?php echo $cart['IdProduct'] ?>" step="1" min="1" value="<?php echo $cart['quantity'] ?>" size="4" inputmode="numeric">
                            <input type="button" value="+" class="plus_quantity quantity-form" data-product-id="<?php echo $cart['IdProduct'] ?>">
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                    <div class="total_price">
                        <span>
                            <img width="24" height="24" src="https://img.icons8.com/color/48/000000/discount--v1.png" alt="discount--v1" style="margin-right:4px"/>
                            Sử dụng mã giảm giá
                        </span>
                        <div class="provisional">
                            <span>Tạm tính (3 sản phẩm)</span>
                            <span><?php echo number_format($totalPrice, 0, '.', '.')?>₫</span>
                        </div> 
                    </div>
                    <div class="pay-delivery">
                        <span>THANH TOÁN VÀ GIAO HÀNG</span>
                        <label for="fullName">Họ tên</label>
                        <input type="text" id="fullName" name="fullName" placeholder="Họ tên của bạn">
                        <label for="phone">Số điện thoại</label>
                        <input type="text" id="phone" name="phone" placeholder="Số điện thoại của bạn">
                        <label for="phone">Địa chỉ</label>
                        <input type="text" id="addres" name="address" placeholder="Ví dụ: Số 20, ngõ 90">
                    </div>

                    <div class="pay-bill">
                        <div>
                            <span>Tạm tính (3 sản phẩm)</span>
                            <span><?php echo number_format($totalPrice, 0, '.', '.')?>₫</span>
                        </div>
                        <div>
                            <span>Giao hàng</span>
                            <span>Giao hàng miễn phí</span>
                        </div>
                        <div>
                            <span>Tổng</span>
                            <span><?php echo number_format($totalPrice, 0, '.', '.')?>₫</span>
                        </div>
                    </div>
                    <input type="hidden" name="totalPrice" value="<?php echo $totalPrice ?>">
                    <button type="submit" name="order" class="btn_order" style="background: linear-gradient(180deg, #F79429 0%, #38312d 100%)">ĐẶT HÀNG</button>
                </form>
            </div>
        </div>

        <?php
            include("../default/footer.php");
        ?>

        <?php
            include("../default/contact.php");
        ?>
    
        <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>

        <script src="https://cdn.tailwindcss.com"></script>

        <!-- slick slide -->
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        
        <script type="text/javascript" src="../../assets/script.js"></script>
        <script type="text/javascript" src="../../assets/main.js"></script>

    </body>
</html>