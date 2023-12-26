<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once('../../Controller/ProductController.php');
include_once('../../Controller/UserController.php');
include_once('../../Controller/CartController.php');

if(isset($_POST['addCart'])) {
    if(!$_SESSION['login']['user']) {
        if(isset($_GET['id'])) {
        echo '<script>alert("Vui lòng đăng nhập");</script>';
        $newURL = 'detail-product.php?id=' . urlencode($_GET['id']);
        echo "<script>window.location.href = '$newURL';</script>";
        }
    } else {
            $data = array(
                'idCart' => $_POST['idCart'],
                'idProduct' => $_POST['idShoe'],
                'quantity' => $_POST['quantity']
            );
            $cartController = new CartController();
            $cart = $cartController->addToCart($data);
    }
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

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <link href="../../assets/base.css" rel="stylesheet">
        <link href="../../assets/style2.css" rel="stylesheet">
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
            <div class="title-category">
                <div class="title-category__left">
                    <a href="home.php">Trang chủ</a>
                    <span> » </span>
                    <span id="category-path">Shop</span>
                </div>
            </div>
            <div class="detail-shoes">
                <div class="detail-shoes__right">
                    <?php 
                        if(isset($_GET['id'])) {
                            $idProduct = $_GET['id'];
                            $productController = new ProductController();
                            $product = $productController->getProductById($idProduct);
                    ?>
                    <div class="col content-slider__item">
                        <div class="box-image">
                            <div class="banner-sale">
                                <span class="onsale">-35%</span>
                            </div>
                            <a href="">
                                <img class="img_shoes" width="387" height="387" src="../../assets/img/<?php echo $product['ImageProduct'] ?>" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="detail-info__shoe">
                        <h1><?php echo $product['NameProduct'] ?></h1>
                        <div class="rating" style="display:flex;">
                            <span style="margin-right:4px">5.00</span>
                            <?php
                                for ($i = 0; $i < 5; $i++) {
                                    echo '<img width="18" height="18" src="https://img.icons8.com/color/48/filled-star--v1.png" alt="filled-star--v1"/>';
                                }
                                ?>    
                            <span style="margin-left:4px; color:#189eff">(999 đánh giá)</span>                        
                        </div>
                        <div style="display:flex; justify-content:space-between">
                            <span>Mã sản phẩm: <?php echo $product['IdProduct'] ?></span>
                            <span>Đã bán: <?php echo $product['QuantityProduct'] ?></span>
                        </div>
                        <span>Tình trạng: <span style="color: #008d60;"><?php echo $product['Status'] ?></span></span>
                        <div class="fs-row">
                            <div class="shoes-price">
                                <div class="fs-price">
                                    Giá sale: 
                                    <span><?php echo number_format($product['Price'], 0, '.', '.') ?>đ</span>
                                </div>
                                <div class="fs-regular-price">
                                    Giá gốc:
                                    <span>1.400.000đ</span>
                                </div>
                            </div>
                            <div class="fs-coutdown">
                                <span style="display:flex; align-items:center; font-size:13px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16" style="margin-right: 4px">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                    </svg>
                                    Flash sale kết thúc sau
                                </span>
                                <span id="timer" style="font-weight:700">
                                    <span style="margin-right:4px"><span id="days"></span>Ngày</span>
                                    <span style="margin-right:4px"><span id="hours"></span>Giờ</span>
                                    <span style="margin-right:4px"><span id="minutes"></span>Phút</span>
                                    <span style="margin-right:4px"><span id="seconds"></span>Giây</span>
                                </span>
                                <div class="fs-sold" style="display:flex; align-items:center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-tag-fill" viewBox="0 0 16 16">
                                    <path d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                    </svg>         
                                    Đã bán:                                 
                                    <strong style="color: #fdfd00;">10</strong>
                                    /15
                                </div>
                            </div>
                        </div>

                        <div class="zna-box-sale">
                            <div class="zna-segment">
                                <div class="zna-icon" style="padding:10px">
                                    <img width="58" height="58" src="../../assets/img/icon-discount-bag-v2.svg">
                                </div>
                                <div class="zna-text" style="padding-left:10px">
                                    <b>Mua càng nhiều, ưu đãi càng lớn</b>
                                    <br>
                                    <em style="font-size:13px">(Ưu đãi có thể kết thúc sớm hơn)</em>
                                </div>
                            </div>
                            <div class="zna-list-value">
                                <span>
                                    <img src="../../assets/img/check-i.svg">
                                    Freeship khi mua 2 đôi
                                </span>
                                <span>
                                    <img src="../../assets/img/check-i.svg">
                                    Tặng tất theo sản phẩm(Tùy đôi)
                                </span>
                                <span>
                                    <img src="../../assets/img/check-i.svg">
                                    Mua 5 đôi tặng 1 đôi
                                </span>
                            </div>
                        </div>

                        <div class="zuna-detail-coupon">
                            <div class="zn-coupon-icon" style="margin-right:12px">
                                <img width="32" height="32" src="../../assets/img/coupon.png">
                            </div>
                            <div class="zn-coupon-content">
                                <span>Giảm 30K - Nhập mã giảm giá VKHA Store - Áp dụng cho đơn hàng lần 2.</span>
                                <br>
                            </div>      
                        </div>             
                        <form class="form_cart" action="" method="post" enctype="multipart/form-data">
                            <?php
                                $productSize = $product['Size'];
                                $sizeArray = explode(", ", $productSize); 
                            ?>
                                <select name="size" style="display:none">
                                <?php foreach ($sizeArray as $size): ?>
                                    <option value="<?php echo $size ?>"><?php echo $size ?></option>
                                <?php endforeach; ?>
                                </select>
                                <div class="size-selector">
                                    <span style="font-weight:700">Size</span>
                                    <?php foreach ($sizeArray as $size): ?>
                                        <div class="ux-swatch" data-size="<?php echo $size ?>">
                                            <span class="ux-swatch-text"><?php echo $size ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                                <div class="quantity-shoe" style="display: flex;">
                                    <label for="quantity_selected" style="margin-right: 24px">Chọn số lượng: </label>
                                    <div style="border: 1px solid #ddd; padding: 4px 10px">
                                        <input type="button" value="-" class="minus_quantity quantity-form">
                                        <input type="number" class="input_quantity quantity-form" id="quantity_selected" step="1" min="1" max name="quantity" value="1" size="4" inputmode="numeric">
                                        <input type="button" value="+" class="plus_quantity quantity-form">
                                    </div>
                                </div>
                                <input type="hidden" name="idShoe" value="<?php echo $product['IdProduct']?>">
                                <input type="hidden" name="idCart" value="<?php $cartString = implode(', ', $_SESSION['login']['cart']); echo $cartString; ?>">
                                <button type="submit" name="addCart" class="add_cart" style="background: -webkit-linear-gradient(top,#f59000,#fd6e1d); font-weight:700; font-size:20px">Đặt mua ngay</button>
                        </form>
                    </div>
                    <?php } ?>
                </div>

                <div class="main-category__left" style="margin-bottom:30px; margin-right:24px">  
                    <aside class="main-category__left custom-policy" style="border: 1px transparent rgb(0,0,0); border-radius: 10px; box-shadow:rgb(242 242 242) 1px 1px 0 0 inset, rgb(242 242 242) -1px -1px 0 0 inset">
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

                    <aside class="main-category__left contact-order" style="border: 1px transparent rgb(0,0,0); border-radius: 10px; box-shadow:rgb(242 242 242) 1px 1px 0 0 inset, rgb(242 242 242) -1px -1px 0 0 inset">
                        <span>Hotline đặt hàng</span>
                        <strong>039.342.6897</strong>
                        <small>(Zalo, 7h00 - 23h cả T7, CN)</small>
                    </aside>
                </div> 
            </div>

            <div class="des-content">
                <div class="des-left">
                    <div class="info-shoe">
                        <span>THÔNG SỐ SẢN PHẨM</span>
                        <div class="shop-attributes">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Size</th>
                                        <?php if(isset($_GET['id'])) {
                                        $idProduct = $_GET['id'];
                                        $productController = new ProductController();
                                        $product = $productController->getProductById($idProduct);?>
                                        <td><p><?php echo $product['Size']?></p></td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <th>Quà tặng</th>
                                        <td><p>Full box + tax bill, Tặng tất</p></td>
                                    </tr>
                                    <tr>
                                        <th>Loại hàng</th>
                                        <td><p>Like auth</p></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="des-shoe">
                        <span>MÔ TẢ SẢN PHẨM</span>
                        <div class="des-attributes">
                            <p>Giày Nike Air Jordan 1 Low ‘True Blue Cement’ với thiết kế đẹp, tinh tế & màu sắc vô cùng dễ phối đồ. Vậy nên đôi giày này trở nên phổ biến, mang tính biểu tượng và được rất nhiều giới trẻ yêu thích.</p>
                            <p>Và nếu bạn cũng là một người đam mê dòng sneaker dễ mang, dễ phố đồ thì không nên bỏ qua mẫu giày siêu phẩm này đâu nhé! Dưới đây là một số hình ảnh của đôi Giày Nike Air Jordan 1 Low ‘True Blue Cement’ Like Auth tại TyHi Sneaker (hàng chuẩn Like Auth bản xịn nhất thị trường).</p>
                            <img width="800" height="800" src="../../assets/img/des-shoe.jpeg">
                            <span id="dots">...</span>
                            <div id="more" style="display:none">
                                <p>Giày Nike Dunk Low Disrupt 2 ‘Pale Ivory’ là một tác phẩm nghệ thuật thể hiện sự phá cách độc đáo và phong cách thời thượng. Với thiết kế hiện đại và màu sắc tinh tế ‘Pale Ivory’, đôi giày này mang đến sự tự tin và nổi bật cho người mang. Bài viết dưới đây sẽ giới thiệu chi tiết về Giày Nike Dunk Low Disrupt 2 ‘Pale Ivory’ và nhấn mạnh những điểm nổi bật của đôi giày này.</p>
                                <img width="800" height="800" src="../../assets/img/des-shoe2.jpeg">
                                <p>Giày Nike Air Jordan 1 Low ‘True Blue Cement’ mang đến sự kết hợp hoàn hảo giữa phong cách thể thao và phá cách hiện đại. Thiết kế với màu sắc ‘True Blue Cement’ tinh tế và logo Jordan đặc trưng, đôi giày này là biểu tượng của sự kiêu hãnh và đam mê thể thao. Đế giày đệm êm ái và chất liệu cao cấp đảm bảo sự thoải mái và độ bền. Với sự phá cách và tính ứng dụng, Giày Nike Air Jordan 1 Low ‘True Blue Cement’ là lựa chọn lý tưởng cho những ai yêu thích phong cách cá nhân và muốn tự tin thể hiện cá tính. Hãy sắm ngay cho mình đôi giày này và tỏa sáng trong mọi hoạt động và dạo phố.</p>
                            </div>
                            <button onclick="Readmore()" id="btnReadMore">
                                <i class='bx bx-chevrons-down bx-sm'></i>
                                Xem thêm
                            </button>
                        </div>
                    </div> 
                </div>
                
                <div class="des-right">
                <span style="margin-bottom: 10px">THÔNG TIN HỮU ÍCH</span>
                <div class="content-des__right">
                        <a href="" class="item-content-blog__left">
                            <img src="../../assets/img/blog4.jpg" alt="">
                            <div class="text-item">
                                <span>Phối đồ với giày Converse Run Star Hike...</span>
                                <span>19/03/2021</span>
                            </div>
                        </a>
                        <a href="" class="item-content-blog__left">
                            <img src="../../assets/img/adv2.jpeg" alt="">
                            <div class="text-item">
                                <span>Đánh giá giày Jordan 1 Zoom...</span>
                                <span>12/04/2021</span>
                            </div>
                        </a>
                        <a href="" class="item-content-blog__left">
                            <img src="../../assets/img/blog2.png" alt="">
                            <div class="text-item">
                                <span>Top 10+ Ảnh Phối đồ phong cách cổ điển...</span>
                                <span>14/03/2021</span>
                            </div>
                        </a>
                        <a href="" class="item-content-blog__left">
                            <img src="../../assets/img/adv4.jpeg" alt="">
                            <div class="text-item">
                                <span>Giày Adidas Prophere có giá bao nhiêu...</span>
                                <span>13/03/2021</span>
                            </div>
                        </a>
                        <a href="" class="item-content-blog__left">
                            <img src="../../assets/img/blog3.jpg" alt="">
                            <div class="text-item">
                                <span>Xu hướng giày sneaker 2023...</span>
                                <span>11/03/2021</span>
                            </div>
                        </a>
                    </div>
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
        

        <script src="../../assets/main.js"></script>
        <script src="../../assets/script.js"></script>
        
    </body>
</html>