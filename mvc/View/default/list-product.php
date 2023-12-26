<div class="content">
    <div class="banner">
        <div class="mySlides fade banner1">
            <img src="../../assets/img/banner1.jpg">
        </div>
        <div class="mySlides fade banner1">
            <img src="../../assets/img/banner2.png">
        </div>
        <div class="mySlides fade banner1">
            <img src="../../assets/img/banner3.jpg">
        </div>
        <div class="mySlides fade banner1">
            <img src="../../assets/img/banner4.png">
        </div> 
        <div class="mySlides fade banner1">
            <img src="../../assets/img/banner5.png">
        </div>  
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
    </div>

    <div class="banner-item">
        <a href="category-product.php?category=SALE" onclick="updateCategoryPath('Flash Sale')" class="item">
            <img src="../../assets/img/item1.png">
            <b>Sales sốc</b>
        </a>
        <a href="category-product.php?category=NIKE" onclick="updateCategoryPath('Giày Nike')" class="item">
            <img src="../../assets/img/item2.png">
            Giày Nike
        </a>
        <a href="category-product.php?category=ADS" onclick="updateCategoryPath('Giày Adidas')" class="item">
            <img src="../../assets/img/item3.png">
            Giày Adidas
        </a>
        <a href="category-product.php?category=MLB" onclick="updateCategoryPath('Giày MLB')" class="item">
            <img src="../../assets/img/item4.png">
            Giày MLB
        </a>
        <a href="category-product.php?category=JORDAN" onclick="updateCategoryPath('Giày Jordan')" class="item">
            <img src="../../assets/img/item5.png">
            Giày Jordan
        </a>
        <a href="category-product.php?category=CV" onclick="updateCategoryPath('Giày Converse')" class="item">
            <img src="../../assets/img/item6.png">
            Giày Converse
        </a>
        <a href="category-product.php?category=LV" onclick="updateCategoryPath('Giày LV Trainer')" class="item">
            <img src="../../assets/img/item7.png">
            Giày LV
        </a>
    </div>

    <div class="slider">
        <div class="slider-header__main">
            <div class="slider-header__left">
                <img src="../../assets/img/giasoc.svg" width="89" height="28">
                <img src="../../assets/img/dealFlashIcon.svg" class="flash" width="21" height="28">
                <img src="../../assets/img/homnay.svg" width="113" height="28">
            </div>

            <div class="slider-header__right">
                    Áp dụng còn:
                <span id="timer">
                    <span><span id="days"></span>Ngày</span>
                    <span><span id="hours"></span>Giờ</span>
                    <span><span id="minutes"></span>Phút</span>
                    <span><span id="seconds"></span>Giây</span>
                </span>
            </div>
        </div>    
        <div class="content-slider__main" style="margin-left:-10px">
            <div class="content-slider__list filtering">
                <?php 
                    $productController = new ProductController();
                    $products = $productController->getAllProductsByCategory('SALE');
                    foreach ($products as $product) {
                ?>
                <div class="col content-slider__item">
                    <div class="box-image">
                        <div class="banner-sale">
                            <span class="onsale">-35%</span>
                        </div>
                        <a href="detail-product.php?id=<?php echo $product['IdProduct']?>">
                            <img width="235" height="235" src="../../assets/img/<?php echo $product['ImageProduct'] ?>" alt="">
                        </a>
                    </div>
                    <div class="box-text">
                        <div class="tilte-wrapper">
                            <p class="name-product">
                                <a href="detail-product.php?id=<?php echo $product['IdProduct']?>"><?php echo $product['NameProduct']?></a>
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
                                            1.200.000
                                            <span>₫</span>
                                        </bdi>
                                    </span>
                                </del>

                                <ins>
                                    <span class="new-price">
                                        <bdi>
                                            <?php echo number_format($product['Price'], 0, '.', '.')?>
                                            <span>₫</span>
                                        </bdi>
                                    </span>
                                </ins>
                            </span>

                            <div class="vote-sold">
                                <div>Đã bán: <?php echo $product['QuantityProduct']?></div>
                            </div>

                            <div class="flash-sale-progress-bar">
                                <div class="flash-sale-progress-bar__text">
                                    Đã bán
                                    <strong>3/5</strong>
                                </div>
                                <div class="flash-sale-progress-bar_complement-wrapper">
                                    <div class="flash-sale-progress-bar__complement-sizer" style="width:40%">
                                        <div class="flash-sale-progress-bar__complement-color"></div>
                                    </div>
                                </div>
                                <div class="flash-sale-progress-bar__fire"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="slider">
        <div class="slider-header">
            <span>Giày Jordan</span> 

            <a href="category-product.php?category=JORDAN" onclick="updateCategoryPath('Giày Jordan')">
                Xem tất cả
                <i class='bx bx-chevron-right'></i>
            </a>
        </div>    

        <div class="content-slider__main" style="margin-left:-8px">
            <div class="nav-content-slider">
                <ul class="list-nav-content-slider">
                    <span class="tab">
                        <input onclick="openPanel('jordan1')" type="radio" class="tab-radio" name="tab-panel" id="tab1" checked>
                        <p class="title-tab-one">Jordan 1</p>
                    </span>

                    <span class="tab">
                        <input onclick="openPanel('jordan4')" type="radio" class="tab-radio" name="tab-panel" id="tab2">
                        <p class="title-tab-two">Jordan 4</p>
                    </span>
                </ul>
            </div>

            <div class="content-slider__list">
                <div id="jordan1" class="tab-panel jordan-tab-panel tab-jordan1 filtering">
                    <?php 
                        $productController = new ProductController();
                        $products = $productController->getAllProductsByBrand(14);
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
                    <?php } ?>
                </div>

                <div id="jordan4" class="tab-panel jordan-tab-panel tab-jordan4 filtering" style="display: none;">
                    <?php 
                        $productController = new ProductController();
                        $products = $productController->getAllProductsByBrand(15);
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
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <div class="slider">
        <div class="slider-header">
            <span>Giày Nike</span> 

            <a href="category-product.php?category=NIKE" onclick="updateCategoryPath('Giày Nike')">
                Xem tất cả
                <i class='bx bx-chevron-right'></i>
            </a>
        </div>    

        <div class="content-slider__main" style="margin-left:-8px">

            <div class="nav-content-slider">
                <ul class="list-nav-content-slider">
                    <span class="tab">
                        <input onclick="openPanel2('af1')" type="radio" class="tab-radio" name="tab-panel" id="tab1" checked>
                        <p class="title-tab-one">AIR FORCE 1</p>
                    </span>

                    <span class="tab">
                        <input onclick="openPanel2('sb')" type="radio" class="tab-radio" name="tab-panel" id="tab2">
                        <p class="title-tab-two">SB DUNK</p>
                    </span>
                </ul>
            </div>

            <div class="content-slider__list">
                <div id="af1" class="tab-panel af-tab-panel tab-af1 filtering">
                    <?php 
                        $productController = new ProductController();
                        $products = $productController->getAllProductsByBrand(12);
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
                    <?php } ?>
                </div>
                <div id="sb" class="tab-panel af-tab-panel tab-sb filtering" style="display: none;">
                    <?php 
                        $productController = new ProductController();
                        $products = $productController->getAllProductsByBrand(13);
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
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
        
    <div class="slider">
        <div class="slider-header">
            <span>Giày MLB</span> 

            <a href="category-product.php?category=MLB" onclick="updateCategoryPath('Giày MLB')">
                Xem tất cả
                <i class='bx bx-chevron-right'></i>
            </a>
        </div>    

        <div class="content-slider__main" style="margin-left:-8px">
            <div class="content-slider__list filtering">
                <?php 
                    $productController = new ProductController();
                    $products = $productController->getAllProductsByCategory('MLB');
                    foreach ($products as $product) {
                ?>
                <div class="col content-slider__item">
                    <div class="box-image">
                        <div class="banner-sale">
                            <span class="onsale">-35%</span>
                        </div>
                        <a href="detail-product.php?id=<?php echo $product['IdProduct']?>">
                            <img width="235" height="235" src="../../assets/img/<?php echo $product['ImageProduct'] ?>" alt="">
                        </a>
                    </div>
                    <div class="box-text">
                        <div class="tilte-wrapper">
                            <p class="name-product">
                                <a href="detail-product.php?id=<?php echo $product['IdProduct']?>"><?php echo $product['NameProduct']?></a>
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
                                            1.200.000
                                            <span>₫</span>
                                        </bdi>
                                    </span>
                                </del>

                                <ins>
                                    <span class="new-price">
                                        <bdi>
                                            <?php echo number_format($product['Price'], 0, '.', '.')?>
                                            <span>₫</span>
                                        </bdi>
                                    </span>
                                </ins>
                            </span>

                            <div class="vote-sold">
                                <div>Đã bán: <?php echo $product['QuantityProduct']?></div>
                            </div>

                            <div class="flash-sale-progress-bar">
                                <div class="flash-sale-progress-bar__text">
                                    Đã bán
                                    <strong>3/5</strong>
                                </div>
                                <div class="flash-sale-progress-bar_complement-wrapper">
                                    <div class="flash-sale-progress-bar__complement-sizer" style="width:40%">
                                        <div class="flash-sale-progress-bar__complement-color"></div>
                                    </div>
                                </div>
                                <div class="flash-sale-progress-bar__fire"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="slider">
        <div class="slider-header">
            <span>Giày LV Tranner</span> 

            <a href="category-product.php?category=LV" onclick="updateCategoryPath('Giày LV Trainer')">
                Xem tất cả
                <i class='bx bx-chevron-right'></i>
            </a>
        </div>    

        <div class="content-slider__main" style="margin-left:-8px">
            <div class="content-slider__list filtering">
                <?php 
                    $productController = new ProductController();
                    $products = $productController->getAllProductsByCategory('LV');
                    foreach ($products as $product) {
                ?>
                <div class="col content-slider__item">
                    <div class="box-image">
                        <div class="banner-sale">
                            <span class="onsale">-35%</span>
                        </div>
                        <a href="detail-product.php?id=<?php echo $product['IdProduct']?>">
                            <img width="235" height="235" src="../../assets/img/<?php echo $product['ImageProduct'] ?>" alt="">
                        </a>
                    </div>
                    <div class="box-text">
                        <div class="tilte-wrapper">
                            <p class="name-product">
                                <a href="detail-product.php?id=<?php echo $product['IdProduct']?>"><?php echo $product['NameProduct']?></a>
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
                                            1.200.000
                                            <span>₫</span>
                                        </bdi>
                                    </span>
                                </del>

                                <ins>
                                    <span class="new-price">
                                        <bdi>
                                            <?php echo number_format($product['Price'], 0, '.', '.')?>
                                            <span>₫</span>
                                        </bdi>
                                    </span>
                                </ins>
                            </span>

                            <div class="vote-sold">
                                <div>Đã bán: <?php echo $product['QuantityProduct']?></div>
                            </div>

                            <div class="flash-sale-progress-bar">
                                <div class="flash-sale-progress-bar__text">
                                    Đã bán
                                    <strong>3/5</strong>
                                </div>
                                <div class="flash-sale-progress-bar_complement-wrapper">
                                    <div class="flash-sale-progress-bar__complement-sizer" style="width:40%">
                                        <div class="flash-sale-progress-bar__complement-color"></div>
                                    </div>
                                </div>
                                <div class="flash-sale-progress-bar__fire"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="slider">
        <div class="slider-header" >
            <span>Giày Adidas</span> 

            <a href="category-product.php?category=ADS" onclick="updateCategoryPath('Giày Adidas')">
                Xem tất cả
                <i class='bx bx-chevron-right'></i>
            </a>
        </div>    

        <div class="content-slider__main" style="margin-left:-8px">
            <div class="nav-content-slider">
                <ul class="list-nav-content-slider">
                    <span class="tab">
                        <input onclick="openPanel3('ub')" type="radio" class="tab-radio" name="tab-panel" id="tab1" checked>
                        <p class="title-tab-one">ULTRA BOOST</p>
                    </span>

                    <span class="tab">
                        <input onclick="openPanel3('ss')" type="radio" class="tab-radio" name="tab-panel" id="tab2">
                        <p class="title-tab-two">SUPERSTAR</p>
                    </span>
                </ul>
            </div>

            <div class="content-slider__list">
                <div id="ub" class="tab-panel ads-tab-panel tab-ub filtering">
                    <?php 
                        $productController = new ProductController();
                        $products = $productController->getAllProductsByBrand(10);
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
                    <?php } ?>
                </div>

                <div id="ss" class="tab-panel ads-tab-panel tab-ss filtering" style="display: none;">
                    <?php 
                        $productController = new ProductController();
                        $products = $productController->getAllProductsByBrand(11);
                        foreach ($products as $product) {
                    ?>
                    <div class="col content-slider__item">
                        <div class="box-image">
                            <div class="banner-sale">
                                <span class="onsale">-51%</span>
                            </div>
                            <a href="">
                                <img width="235" height="235" src="../../assets/img/<?php echo $product['ImageProduct'] ?>" alt="">
                            </a>
                        </div>
                        <div class="box-text">
                            <div class="tilte-wrapper">
                                <p class="name-product">
                                    <a href=""><?php echo $product['NameProduct'] ?></a>
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
                    <?php } ?>
                </div>
            </div>
        </div>
        
    </div>

    <div class="slider">
        <div class="slider-header">
            <span>Giày New Blance</span> 

            <a href="category-product.php?category=NB" onclick="updateCategoryPath('Giày NB')">
                Xem tất cả
                <i class='bx bx-chevron-right'></i>
            </a>
        </div>    

        <div class="content-slider__main" style="margin-left:-8px">
            <div class="nav-content-slider">
                <ul class="list-nav-content-slider">
                    <span class="tab">
                        <input onclick="openPanel4('nb550')" type="radio" class="tab-radio" name="tab-panel" id="tab1" checked>
                        <p class="title-tab-one">NB550</p>
                    </span>

                    <span class="tab">
                        <input onclick="openPanel4('nb300')" type="radio" class="tab-radio" name="tab-panel" id="tab2">
                        <p class="title-tab-two">NB300</p>
                    </span>
                </ul>
            </div>

            <div class="content-slider__list">
                <div id="nb550" class="tab-panel nb-tab-panel tab-nb550 filtering">
                    <?php 
                        $productController = new ProductController();
                        $products = $productController->getAllProductsByBrand(8);
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
                    <?php } ?>
                </div>

                <div id="nb300" class="tab-panel nb-tab-panel tab-nb300 filtering" style="display: none;">
                    <?php 
                        $productController = new ProductController();
                        $products = $productController->getAllProductsByBrand(9);
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
                    <?php } ?>
                </div>
            </div>
        </div>
        
    </div>

    <div class="slider">
        <div class="slider-header">
            <span>Giày Converse</span> 

            <a href="category-product.php?category=CV" onclick="updateCategoryPath('Giày Converse')">
                Xem tất cả
                <i class='bx bx-chevron-right'></i>
            </a>
        </div>    

        <div class="content-slider__main" style="margin-left:-8px">
            <div class="content-slider__list filtering">
                <?php 
                    $productController = new ProductController();
                    $products = $productController->getAllProductsByCategory('CV');
                    foreach ($products as $product) {
                ?>
                <div class="col content-slider__item">
                    <div class="box-image">
                        <div class="banner-sale">
                            <span class="onsale">-35%</span>
                        </div>
                        <a href="detail-product.php?id=<?php echo $product['IdProduct']?>">
                            <img width="235" height="235" src="../../assets/img/<?php echo $product['ImageProduct'] ?>" alt="">
                        </a>
                    </div>
                    <div class="box-text">
                        <div class="tilte-wrapper">
                            <p class="name-product">
                                <a href="detail-product.php?id=<?php echo $product['IdProduct']?>"><?php echo $product['NameProduct']?></a>
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
                                            1.200.000
                                            <span>₫</span>
                                        </bdi>
                                    </span>
                                </del>

                                <ins>
                                    <span class="new-price">
                                        <bdi>
                                            <?php echo number_format($product['Price'], 0, '.', '.')?>
                                            <span>₫</span>
                                        </bdi>
                                    </span>
                                </ins>
                            </span>

                            <div class="vote-sold">
                                <div>Đã bán: <?php echo $product['QuantityProduct']?></div>
                            </div>

                            <div class="flash-sale-progress-bar">
                                <div class="flash-sale-progress-bar__text">
                                    Đã bán
                                    <strong>3/5</strong>
                                </div>
                                <div class="flash-sale-progress-bar_complement-wrapper">
                                    <div class="flash-sale-progress-bar__complement-sizer" style="width:40%">
                                        <div class="flash-sale-progress-bar__complement-color"></div>
                                    </div>
                                </div>
                                <div class="flash-sale-progress-bar__fire"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        
    </div>

    <div class="slider">
        <div class="slider-header">
            <span style="text-transform: uppercase">Tư Vấn Chọn Mua</span> 

            <a href="">
                Xem thêm
                <i class='bx bx-chevron-right'></i>
            </a>
        </div> 

        <div class="content-slider__main" style="margin-left:-10px">
            <div class="content-slider__list">
                <div class="col content-slider__item" style="align-items:center">
                    <div class="box-image">
                        <a href="" >
                            <img src="../../assets/img/adv1.png" alt="" style="border-radius:5%; width:279px; height:182px; object-fit:cover">
                        </a>
                    </div>
                    <div class="box-text" style="background-color:#fff; text-align:center">
                        <a href="">
                            <span style="font-size:15px; font-weight:600">
                                Phối đồ với Giày Nike Air Force 1 Low Brooklyn Cream – Giày Nike âm Dương
                            </span>
                        </a>
                    </div>
                </div>

                <div class="col content-slider__item" style="align-items:center">
                    <div class="box-image">
                        <a href="" >
                            <img src="../../assets/img/adv2.jpeg" alt="" style="border-radius:5%; width:279px; height:182px; object-fit:cover">
                        </a>
                    </div>
                    <div class="box-text" style="background-color:#fff; text-align:center">
                        <a href="">
                            <span style="font-size:15px; font-weight:600">
                                Đánh giá giày Jordan 1 Zoom Air PSG Paris Saint                                   
                            </span>
                        </a>
                    </div>
                </div>

                <div class="col content-slider__item" style="align-items:center">
                    <div class="box-image">
                        <a href="" >
                            <img src="../../assets/img/adv3.jpeg" alt="" style="border-radius:5%; width:279px; height:182px; object-fit:cover">
                        </a>
                    </div>
                    <div class="box-text" style="background-color:#fff; text-align:center">
                        <a href="">
                            <span style="font-size:15px; font-weight:600">
                                Phối đồ với giày Converse Run Star Hike cá tính phong cách thời trang
                            </span>
                        </a>
                    </div>
                </div>

                <div class="col content-slider__item" style="align-items:center">
                    <div class="box-image">
                        <a href="" >
                            <img src="../../assets/img/adv4.jpeg" alt="" style="border-radius:5%; width:279px; height:182px; object-fit:cover">
                        </a>
                    </div>
                    <div class="box-text" style="background-color:#fff; text-align:center">
                        <a href="">
                            <span style="font-size:15px; font-weight:600">
                                Top 10+ Ảnh Phối đồ phong cách cổ điển với Giày Jordan 1 low Paris
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="slider-about-me">   
        <div class="content-left">
            <div class="header-content-left">
                <span>Về chúng tôi</span> 
            </div>

            <div class="title-content-left">
                <h3>
                    <strong>
                        VKHA Store - 
                        <a href="" id="replica">Shop giày Replica</a>
                    </strong>
                </h3>
            </div>

            <div class="main-content-left" style="line-height: 1.6">
                <p>Cung cấp hơn 500 đôi giày replica 1:1, sneaker nam, nữ của các thương hiệu như Adidas, Nike, Jordan, Yeezy, Balenciaga, Gucci, MLB,… Hàng chuẩn, Like Auth, Giày rep 1:1 với chất lượng tốt nhất, giá rẻ nhất thị trường hiện nay. Giao hàng nhanh toàn quốc, chính sách đổi trả và chính sách bảo hành linh hoạt.</p>
                <p >Nếu bạn không đủ tài chính để mua một đôi giày chính hãng hoặc gặp khó khăn về việc đặt hàng và size giày, VKHA sẽ giúp bạn chọn một đôi giày rep 1:1 hợp với đôi chân của bạn. Chúng tôi cung cấp các mẫu giày sneaker replica chất lượng với chi tiết chuẩn hàng Auth. Chúng tôi đa dạng về mẫu mã và luôn có sẵn hàng.</p>
                <p>Hãy đến với VKHA Store - Shop Giày Replica để trải nghiệm sự khác biệt về chất lượng và dịch vụ. Chúng tôi sẵn lòng phục vụ bạn và đem đến cho bạn những đôi giày sneaker tuyệt vời mà bạn đang tìm kiếm.</p>
            </div>
        </div>

        <div class="content-right">
            <img width="572" height="429" src="../../assets/img/aboutme.jpg">
        </div>
    </div>

    <div class="policy">
        <div class="item-policy">
            <img src="../../assets/img/payment.png" alt="">
            <p class="text-item-policy">
                <b>THANH TOÁN TIỆN LỢI</b>
                <span>Trả tiền mặt, chuyển khoản, chả góp 0%</span>
            </p>
        </div>
        <div class="item-policy">
            <img src="../../assets/img/delivery-truck.png" alt="">
            <p class="text-item-policy">
                <b>SHIP TOÀN QUỐC</b>
                <span>Giao hàng trước trả tiền sau COD</span>
            </p>
        </div>
        <div class="item-policy">
            <img src="../../assets/img/customer-service.png" alt="">
            <p class="text-item-policy">
                <b>HỖ TRỢ NHIỆT TÌNH</b>
                <span>Tổng đài tư vấn miễn phí 039.342.6897</span>
            </p>
        </div>
        <div class="item-policy">
            <img src="../../assets/img/trading.png" alt="">
            <p class="text-item-policy">
                <b>ĐỔI TRẢ DỄ DÀNG</b>
                <span>Đổi mới trong 30 ngày đầu</span>
            </p>
        </div>
    </div>
</div>