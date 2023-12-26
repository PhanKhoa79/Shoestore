<?php
include_once('../../Controller/ProductController.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>500+ Mẫu Giày Rep Tại Shop Giày Replica - VKHA STORE</title>

        <link rel="icon" type="image/x-icon" href="../../assets/img/logo.png">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link href="../../assets/base.css" rel="stylesheet">
        <link href="../../assets/style.css" rel="stylesheet">
        <link href="../../assets/style2.css" rel="stylesheet">
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
            <div class="title-category">
                <div class="title-category__left">
                    <a href="home.php">Trang chủ</a>
                    <span> » </span>
                    <span id="category-path">Shop</span>
                </div>
                <div class="title-category__right">
                    <span>Hiện thị 1-12 của 345 kết quả</span>
                    <form method="get">
                        <select>
                            <option value="">Theo đánh giá</option>
                            <option value="">Giá thấp đến cao</option>
                            <option value="">Giá cao đến thấp</option>
                        </select>
                    </form>
                </div>
            </div>

            <div class="main-category">
                <div class="main-category__left">
                    <aside class="main-category__left side-bar__one">
                        <span>DANH MỤC SẢN PHẨM</span>
                        <i class="bx bx-minus bx-md"></i>
                        <ul class="product-categories">
                            <li><a href="category-product.php" onclick="updateCategoryPath('All')">Tất cả sản phẩm</a></li>
                            <li><a href="category-product.php?category=SALE" onclick="updateCategoryPath('Flash Sale')">Flash Sale</a></li>
                            <li>
                                <div class="parent-category">
                                    <a href="category-product.php?category=ADS" onclick="updateCategoryPath('Giày Adidas')">Giày Adidas</a>
                                    <button class="btn_category" onclick="toggleChildCategory(this)">
                                        <i class='bx bx-chevron-down bx-sm initial-icon'></i>
                                    </button>
                                </div>
                                <div class="child-category" style="display:none">
                                    <ul class="product-categories child-categories">
                                        <li><a href="category-product.php?brand=10" onclick="updateCategoryPath('Giày Adidas » Ultra Boost')">Ultra Boost</a></li>
                                        <li><a href="category-product.php?brand=11" onclick="updateCategoryPath('Giày Adidas » Superstart')">Superstar</a></li>
                                    </ul>
                                </div>  
                            </li>
                            <li><a href="category-product.php?category=CV" onclick="updateCategoryPath('Giày Converse')">Giày Converse</a></li>
                            <li>
                                <div class="parent-category">
                                    <a href="category-product.php?category=JORDAN" onclick="updateCategoryPath('Giày Jordan')">Giày Jordan</a>
                                    <button class="btn_category" onclick="toggleChildCategory(this)">
                                        <i class='bx bx-chevron-down bx-sm initial-icon'></i>
                                    </button>
                                </div>
                                <div class="child-category" style="display:none">
                                    <ul class="product-categories child-categories">
                                        <li><a href="category-product.php?brand=14" onclick="updateCategoryPath('Giày Jordan » Jordan 1')">Jordan 1</a></li>
                                        <li><a href="category-product.php?brand=15" onclick="updateCategoryPath('Giày Jordan » Jordan 4')">Jordan 4</a></li>
                                    </ul>
                                </div>  
                            </li>
                            <li><a href="category-product.php?category=LV" onclick="updateCategoryPath('Giày Lv Trainer')">LV Trainer</a></li>
                            <!--<li>
                                <div class="parent-category">
                                    <a href="">Giày Luxury</a>
                                    <button class="btn_category" onclick="toggleChildCategory(this)">
                                        <i class='bx bx-chevron-down bx-sm initial-icon'></i>
                                    </button>
                                </div>
                                <div class="child-category" style="display:none">
                                    <ul class="product-categories child-categories">
                                        <li><a href="">Giày Dior</a></li>
                                        <li><a href="">Giày Gucci</a></li>
                                        <li><a href="">LV</a></li>
                                    </ul>
                                </div>  
                            </li>-->
                            <li><a href="category-product.php?category=MLB" onclick="updateCategoryPath('Giày MLB')">Giày MLB</a></li>
                            <li>
                                <div class="parent-category">
                                    <a href="category-product.php?category=NIKE" onclick="updateCategoryPath('Giày Nike')">Giày Nike</a>
                                    <button class="btn_category" onclick="toggleChildCategory(this)">
                                        <i class='bx bx-chevron-down bx-sm initial-icon'></i>
                                    </button>
                                </div>
                                <div class="child-category" style="display:none">
                                    <ul class="product-categories child-categories">
                                        <li><a href="category-product.php?brand=12" onclick="updateCategoryPath('Giày Nike » Air Force 1')">Air Force 1</a></li>
                                        <li><a href="category-product.php?brand=13" onclick="updateCategoryPath('Giày Nike » SB Dunk')">SB Dunk</a></li>
                                    </ul>
                                </div>  
                            </li>
                            <li>
                                <div class="parent-category">
                                    <a href="category-product.php?category=NB" onclick="updateCategoryPath('Giày NB')">Giày New Balance</a>
                                    <button class="btn_category" onclick="toggleChildCategory(this)">
                                        <i class='bx bx-chevron-down bx-sm initial-icon'></i>
                                    </button>
                                </div>
                                <div class="child-category" style="display:none">
                                    <ul class="product-categories child-categories">
                                        <li><a href="category-product.php?brand=8" onclick="updateCategoryPath('Giày NB » NB300')">NB300</a></li>
                                        <li><a href="category-product.php?brand=9" onclick="updateCategoryPath('Giày NB » NB550')">NB550</a></li>
                                    </ul>
                                </div>  
                            </li>
                        </ul>
                    </aside>

                    <aside class="main-category__left side-bar__two">
                        <span>LỌC THEO GIÁ</span>
                        <i class="bx bx-minus bx-md"></i>
                        <form method="get">
                            <div class="slider-product">
                                <div class="progress"></div>
                            </div>
                            <div class="range-input">
                                <input type="range" class="range-min" min="0" max="1100000" value="0" step="10000">
                                <input type="range" class="range-max" min="0" max="1100000" value="1100000" step="10000">
                            </div>
                            <div class="price-input" style="display:none">
                                <div class="field">
                                    <input type="text" class="input-min" value="0" placeholder="Giá thấp nhất">
                                </div>
                                <div class="field">
                                    <input type="text" class="input-max" value="1100000" placeholder="Giá cao nhất">
                                </div>
                            </div>
                            <div class="wrapper-price-filter">
                                <button type="submit" class="btn_filter">Lọc</button>
                                <div class="price-filter">
                                    Giá
                                    <span class="from-price">0</span><strong>₫</strong>
                                     -
                                    <span class="to-price">1.100.000</span><strong>₫</strong>
                                </div>
                            </div>
                        </form>
                    </aside>
                    
                    <aside class="main-category__left custom-policy">
                        <div class="seller-info">
                            <img width="50" height="50" src="../../assets/img/logo.png" alt="">
                            <div class="seller-name">
                                <span>VKHA STORE</span>
                                <img width="74" height="18" src="../../assets/img/offcial-i.png" alt="">
                            </div>
                        </div>
                        <div class="list-policy">
                            <div class="item-policy-two">
                                <img width="32" height="32" src="../../assets/img/hoan-tien.png" alt="">
                                <span>
                                    Hoàn tiền<br>
                                    <b>100%</b><br>
                                    nếu hàng không chuẩn
                                </span>
                            </div>
                            <div class="item-policy-two">
                                <img width="32" height="32" src="../../assets/img/unbox.png" alt="">
                                <span>
                                    Nhận hàng<br>
                                    Kiểm tra hàng<br>
                                    Thoải mái
                                </span>
                            </div>
                            <div class="item-policy-two">
                                <img width="32" height="32" src="../../assets/img/doi-tra.png" alt="">
                                <span>
                                    Đổi trả trong<br>
                                    <b>30 ngày</b><br>
                                    nếu sản phẩm lỗi
                                </span>
                            </div>
                        </div>
                    </aside>

                    <aside class="main-category__left contact-order">
                        <span>Hotline đặt hàng</span>
                        <strong>039.342.6897</strong>
                        <small>(Zalo, 7h00 - 23h cả T7, CN)</small>
                    </aside>
                </div>

                <div class="main-category__right">
                    <?php
                        if(isset($_GET['category'])) {
                            $category = $_GET['category'];
                            $productController = new ProductController();
                            $products = $productController->getAllProductsByCategory($category);
                            foreach ($products as $product) { 
                    ?>
                            <div class="col content-slider__item">
                            <div class="box-image">
                                <div class="banner-sale">
                                    <span class="onsale">-51%</span>
                                </div>
                                <a href="detail-product.php?id=<?php echo $product['IdProduct']?>">
                                    <img width="235" height="235" src="../../assets/img/<?php echo $product['ImageProduct'] ?>" alt="">
                                </a>
                            </div>
                            <div class="box-text">
                                <div class="tilte-wrapper">
                                    <p class="name-product">
                                        <a href="detail-product.php?id=<?php echo $product['IdProduct']?>"><?php echo $product['NameProduct'] ?></a>
                                    </p>
                                </div>

                                <div class="price-wrapper">
                                    <div class="style-product">
                                        <span>
                                            <img width="20" height="20" src="../../assets/img/kich-thuoc-ms.svg">
                                            Like auth
                                        </span>
                                    </div>

                                    <span class="price">
                                        <del>
                                            <span class="old-price">
                                                <bdi>
                                                    1.700.000
                                                    <span>₫</span>
                                                </bdi>
                                            </span>
                                        </del>

                                        <ins>
                                            <span class="new-price">
                                                <bdi>
                                                    <?php echo number_format($product['Price'], 0, '.', '.') ?>
                                                    <span>₫</span>
                                                </bdi>
                                            </span>
                                        </ins>
                                    </span>

                                    <div class="vote-sold">
                                        <div>Đã bán: <?php echo $product['QuantityProduct'] ?></div>
                                    </div>

                                    <div class="flash-sale-progress-bar">
                                        <div class="flash-sale-progress-bar__text">
                                            Đã bán
                                            <strong>3/7</strong>
                                        </div>
                                        <div class="flash-sale-progress-bar_complement-wrapper">
                                            <div class="flash-sale-progress-bar__complement-sizer" style="width:58%">
                                                <div class="flash-sale-progress-bar__complement-color"></div>
                                            </div>
                                        </div>
                                        <div class="flash-sale-progress-bar__fire"></div>
                                    </div>
                                </div>
                            </div>
                            </div>
                    <?php 
                            }
                        } else if(isset($_GET['brand'])) {
                            $brand = $_GET['brand'];
                            $productController = new ProductController();
                            $products = $productController->getAllProductsByBrand($brand);
                            foreach ($products as $product) { 
                    ?>
                            <div class="col content-slider__item">
                            <div class="box-image">
                                <div class="banner-sale">
                                    <span class="onsale">-51%</span>
                                </div>
                                <a href="detail-product.php?id=<?php echo $product['IdProduct']?>">
                                    <img width="235" height="235" src="../../assets/img/<?php echo $product['ImageProduct'] ?>" alt="">
                                </a>
                            </div>
                            <div class="box-text">
                                <div class="tilte-wrapper">
                                    <p class="name-product">
                                        <a href="detail-product.php?id=<?php echo $product['IdProduct']?>"><?php echo $product['NameProduct'] ?></a>
                                    </p>
                                </div>

                                <div class="price-wrapper">
                                    <div class="style-product">
                                        <span>
                                            <img width="20" height="20" src="../../assets/img/kich-thuoc-ms.svg">
                                            Like auth
                                        </span>
                                    </div>

                                    <span class="price">
                                        <del>
                                            <span class="old-price">
                                                <bdi>
                                                    1.700.000
                                                    <span>₫</span>
                                                </bdi>
                                            </span>
                                        </del>

                                        <ins>
                                            <span class="new-price">
                                                <bdi>
                                                    <?php echo number_format($product['Price'], 0, '.', '.') ?>
                                                    <span>₫</span>
                                                </bdi>
                                            </span>
                                        </ins>
                                    </span>

                                    <div class="vote-sold">
                                        <div>Đã bán: <?php echo $product['QuantityProduct'] ?></div>
                                    </div>

                                    <div class="flash-sale-progress-bar">
                                        <div class="flash-sale-progress-bar__text">
                                            Đã bán
                                            <strong>3/7</strong>
                                        </div>
                                        <div class="flash-sale-progress-bar_complement-wrapper">
                                            <div class="flash-sale-progress-bar__complement-sizer" style="width:58%">
                                                <div class="flash-sale-progress-bar__complement-color"></div>
                                            </div>
                                        </div>
                                        <div class="flash-sale-progress-bar__fire"></div>
                                    </div>
                                </div>
                            </div>
                            </div>
                    <?php
                            }
                        } else {
                            $productController = new ProductController();
                            $products = $productController->getAllProduct();
                            foreach ($products as $product) { 
                    ?>
                            <div class="col content-slider__item">
                            <div class="box-image">
                                <div class="banner-sale">
                                    <span class="onsale">-51%</span>
                                </div>
                                <a href="detail-product.php?id=<?php echo $product['IdProduct']?>">
                                    <img width="235" height="235" src="../../assets/img/<?php echo $product['ImageProduct'] ?>" alt="">
                                </a>
                            </div>
                            <div class="box-text">
                                <div class="tilte-wrapper">
                                    <p class="name-product">
                                        <a href="detail-product.php?id=<?php echo $product['IdProduct']?>"><?php echo $product['NameProduct'] ?></a>
                                    </p>
                                </div>

                                <div class="price-wrapper">
                                    <div class="style-product">
                                        <span>
                                            <img width="20" height="20" src="../../assets/img/kich-thuoc-ms.svg">
                                            Like auth
                                        </span>
                                    </div>

                                    <span class="price">
                                        <del>
                                            <span class="old-price">
                                                <bdi>
                                                    1.700.000
                                                    <span>₫</span>
                                                </bdi>
                                            </span>
                                        </del>

                                        <ins>
                                            <span class="new-price">
                                                <bdi>
                                                    <?php echo number_format($product['Price'], 0, '.', '.') ?>
                                                    <span>₫</span>
                                                </bdi>
                                            </span>
                                        </ins>
                                    </span>

                                    <div class="vote-sold">
                                        <div>Đã bán: <?php echo $product['QuantityProduct'] ?></div>
                                    </div>

                                    <div class="flash-sale-progress-bar">
                                        <div class="flash-sale-progress-bar__text">
                                            Đã bán
                                            <strong>3/7</strong>
                                        </div>
                                        <div class="flash-sale-progress-bar_complement-wrapper">
                                            <div class="flash-sale-progress-bar__complement-sizer" style="width:58%">
                                                <div class="flash-sale-progress-bar__complement-color"></div>
                                            </div>
                                        </div>
                                        <div class="flash-sale-progress-bar__fire"></div>
                                    </div>
                                </div>
                            </div>
                            </div>
                    <?php 
                        }
                    } 
                    ?>
                </div>
            </div>
        </div>

        <?php
            include("../default/footer.php");
        ?>

        <?php
            include("../default/contact.php");
        ?>

        <script src="https://cdn.tailwindcss.com"></script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script src="../../assets/script.js"></script>
        <script src="../../assets/main.js"></script>
    </body>
</html>