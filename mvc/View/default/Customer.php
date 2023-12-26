<?php
session_start();
ob_start();
include_once('../../Controller/UserController.php');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <link href="../../assets/admin.css" rel="stylesheet">

        <script src="../../ckeditor/ckeditor.js"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body onload="displayCurrentTime()">
        <div class="wrapper">
            <?php include_once('../admin/slider_bar.php') ?>

            <div class="main">
                <header class="header">
                    <span>Xin chào <?php echo $_SESSION['login']['user']?></span>
                    <a href="../default/logOut.php" title="Log out">
                        <i class="bx bx-log-out bx-rotate-180 bx-sm"></i>
                    </a>
                </header>
                <?php 
                ?>
                <div class="content">
                    <div class="title-content">
                        <ul class="list-select">
                                <a href="#">Danh sách khách hàng</a>
                            </li>
                        </ul>
                        <span id="current-time"></span>
                    </div>

                    <div class="main-content">

                        <div class="list-product">
                            <div class="nav-product">
                                <div class="quantity-product">
                                    <span>Hiện
                                        <select style="background:rgb(241, 241, 241); border:1px solid rgb(218, 218, 218); border-radius:4px; padding: 4px 4px">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                        Khách hàng
                                    </span>
                                </div>
                                <div class="search-product">
                                    <button type="submit" name="submit" id="btn-search">Tìm kiếm: </button>
                                    <input type="search" name="search" id="search">
                                </div>
                            </div> 

                            <div class="item-product">
                                <table class="table">
                                    <thead>
                                        <tr class="title-table">
                                            <th width="20">#</th>
                                            <th style="width: 200px;">Họ tên</th>
                                            <th style="width: 100px;">Số điện thoại</th>
                                            <th style="width: 250px;">Địa chỉ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $userController = new UserController();
                                        $users = $userController->getAllUser();
                                        $index = 1;
                                        foreach ($users as $user) {
                                    ?> 
                                            <tr>
                                                <td><?php echo $index ?></td>
                                                <td> <?php echo $user['FullName'] ?> </td>
                                                <td> <?php echo $user['Phone'] ?> </td>
                                                <td> <?php echo $user['Address'] ?> </td>
                                            </tr>
                                       <?php 
                                            $index++;
                                        } 
                                        ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>                            
        
        <script src="../../assets/main.js"></script>
        <script src="../../assets/script.js"></script>

                                       
    </body>
</html>
                                    