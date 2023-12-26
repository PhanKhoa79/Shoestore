<?php
session_start();
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

        <script src="https://cdn.tailwindcss.com"></script>
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
                    if($_SESSION['login']['user']) {
                        if(isset($_GET['act'])) {
                            $action = $_GET['act'];
                            switch($action) {
                                case 'product':
                                    include_once '../default/product.php';
                                    break;
                                case 'category':
                                    include_once '../default/manage-category.php';
                                    break;
                                default:
                                    include_once '../admin/hello.php';
                                    break;
                            }
                        } else {
                            include_once '../admin/hello.php';
                        }
                    } else {
                        header('location: ../admin/index.php');
                    }
                 ?> 
            </div>

            
        </div>
        
        
        <script src="../../assets/main.js"></script>
        <script src="../../assets/script.js"></script>
       

    </body>
</html>