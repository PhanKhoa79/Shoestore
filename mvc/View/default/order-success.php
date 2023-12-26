<?php
session_start();
include_once('../../Controller/CartController.php');
if(isset($_POST['order'])) {
    $data = array(
        'idUser' => $_SESSION['login']['id'],
        'fullname' => $_POST['fullName'],
        'phone' => $_POST['phone'],
        'address' => $_POST['address'],
        'total' => $_POST['totalPrice']
    );
    $cartController = new CartController();
    $cartController->addToOrder($data);
}
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
            <div class="order-success">
                <img width="96" height="96" src="https://img.icons8.com/color/96/ok--v1.png" alt="ok--v1"/>
                <span>Đặt hàng thành công</span>
            </div>

            <div class="detail-order"> 
                <h1>Thông tin đơn hàng</h1>
                <div>Họ tên: <span><?php echo $_POST['fullName'] ?></span></div>
                <div>Số điện thoại: <span><?php echo $_POST['phone'] ?></span></div>
                <div>Địa chỉ nhận hàng: <span><?php echo $_POST['address'] ?></span></div>
                <div>Tổng tiền: <span><?php echo number_format($_POST['totalPrice'], 0, '.', '.') ?>₫</span></div>
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
    </body>
</html>