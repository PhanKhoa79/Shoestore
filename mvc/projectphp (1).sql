-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3310
-- Thời gian đã tạo: Th10 17, 2023 lúc 03:43 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `projectphp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`cart_id`, `ID`) VALUES
(2, 28);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_detail`
--

CREATE TABLE `cart_detail` (
  `id_detail` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `IdProduct` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart_detail`
--

INSERT INTO `cart_detail` (`id_detail`, `cart_id`, `IdProduct`, `quantity`, `created_at`) VALUES
(1, 2, 'FLS02', 2, '2023-10-16 20:32:31'),
(2, 2, 'ADS10', 2, '2023-10-16 20:33:11'),
(3, 2, 'CV4', 6, '2023-10-16 20:33:42'),
(11, 2, 'LV8', 3, '2023-10-17 00:24:14'),
(12, 2, 'MLB1', 2, '2023-10-17 00:41:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_product`
--

CREATE TABLE `category_product` (
  `id_category` varchar(20) NOT NULL,
  `name_category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_product`
--

INSERT INTO `category_product` (`id_category`, `name_category`) VALUES
('ADS', 'Giày Adidas'),
('CV', 'Giày Converse'),
('JORDAN', 'Giày Jordan'),
('LV', 'Giày LV Tranner'),
('MLB', 'Giày MLB'),
('NB', 'Giày New Balance'),
('NIKE', 'Giày Nike'),
('SALE', 'Flash Sale');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `full_name` varchar(100) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `total_amount` int(11) DEFAULT NULL,
  `shipping_address` varchar(200) DEFAULT NULL,
  `order_status` enum('Chờ','Đang xác nhận','Vận chuyển','Đã giao') NOT NULL,
  `payment_method` enum('COD','Banking') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `prodcut`
--

CREATE TABLE `prodcut` (
  `IdProduct` varchar(50) NOT NULL,
  `NameProduct` varchar(100) NOT NULL,
  `QuantityProduct` int(11) DEFAULT NULL,
  `DesProduct` varchar(200) DEFAULT NULL,
  `ImageProduct` varchar(100) DEFAULT NULL,
  `Size` varchar(50) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `ProvideProducts` varchar(100) DEFAULT NULL,
  `id_category` varchar(20) DEFAULT NULL,
  `id_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `prodcut`
--

INSERT INTO `prodcut` (`IdProduct`, `NameProduct`, `QuantityProduct`, `DesProduct`, `ImageProduct`, `Size`, `Price`, `Status`, `ProvideProducts`, `id_category`, `id_type`) VALUES
('ADS1', 'Giày Adidas Ultra Boost 6.0 Black white Rep 1:1', 132, '', 'UB1.jpeg', '36', 920000, 'Còn hàng', 'NH', 'ADS', 10),
('ADS10', 'Giày Adidas Alphabounce Magma Grey', 168, '', 'UB10.jpeg', '36', 880000, 'Còn hàng', 'NH', 'ADS', 10),
('ADS11', 'Giày Adidas Superstar Adifom Đen Siêu Cấp', 132, '', 'SS1.jpeg', '36', 920000, 'Còn hàng', 'NH', 'ADS', 11),
('ADS12', 'Giày Adidas Superstar Adifom Trắng Siêu Cấp', 300, '', 'SS2.jpeg', '36', 920000, 'Còn hàng', 'NH', 'ADS', 11),
('ADS13', 'Giày Adidas Superstar André Saraiva Chalk White Black – Sò XO', 252, '', 'SS3.jpg', '36', 920000, 'Còn hàng', 'NH', 'ADS', 11),
('ADS14', 'Giày Adidas Originals Superstar Cappuccino Full White', 269, '', 'SS4.jpg', '36', 1350000, 'Còn hàng', 'NH', 'ADS', 11),
('ADS15', 'Giày Adidas Superstar Cappuccino Green Sò Chảy Xanh', 369, '', 'SS5.jpeg', '36', 1350000, 'Còn hàng', 'NH', 'ADS', 11),
('ADS16', 'Giày Adidas Superstar Cappuccino Sò Chảy Hồng Kem', 450, '', 'SS6.jpeg', '36', 850000, 'Còn hàng', 'NH', 'ADS', 11),
('ADS17', 'Giày Adidas Superstar Gold Stamp Sò Trắng', 698, '', 'SS7.jpg', '36', 920000, 'Còn hàng', 'NH', 'ADS', 11),
('ADS18', 'Giày Chạy Bộ Adidas EQT Bost 2023 Đỏ Đen LikeAuth', 555, '', 'SS8.jpeg', '36', 920000, 'Còn hàng', 'NH', 'ADS', 11),
('ADS19', 'Giày Chạy Bộ Adidas EQT Bost 2023 Xám Trắng LikeAuth', 234, '', 'SS9.jpg', '36', 1030000, 'Còn hàng', 'NH', 'ADS', 11),
('ADS2', 'Giày Adidas Ultra Boost 20 Dash Grey Rep 1:1', 300, '', 'UB2.jpg', '36', 920000, 'Còn hàng', 'NH', 'ADS', 10),
('ADS20', 'Giày Chạy Bộ Adidas EQT Bost 2023  Cam Trắng LikeAuth', 168, '', 'SS10.jpg', '36', 880000, 'Còn hàng', 'NH', 'ADS', 11),
('ADS3', 'Giày Adidas Ultra Boost 6.0 Blue White', 252, '', 'UB3.jpg', '36', 920000, 'Còn hàng', 'NH', 'ADS', 10),
('ADS4', 'Giày Adidas Ultra Boost 6.0 Triple Black Đen Full', 269, '', 'UB4.jpg', '36', 1350000, 'Còn hàng', 'NH', 'ADS', 10),
('ADS41', 'Giày MLB Liner Mid Denim Boston Siêu Cấp', 10000, '', 'AF9.png', '36, 37, 38', 100000, 'Còn hàng', 'NH', 'CV', NULL),
('ADS5', 'Giày Adidas ULTRABOOST 4.0 xám', 369, '', 'UB5.jpeg', '36', 1350000, 'Còn hàng', 'NH', 'ADS', 10),
('ADS6', 'Giày Adidas ULTRABOOST 4.0 trắng', 450, '', 'UB6.jpeg', '36', 850000, 'Còn hàng', 'NH', 'ADS', 10),
('ADS7', 'Giày Adidas ULTRABOOST 4.0 đen', 698, '', 'UB7.jpg', '36', 920000, 'Còn hàng', 'NH', 'ADS', 10),
('ADS8', 'Giày Adidas Ultra Boost 20 Triple White', 555, '', 'UB8.jpg', '36', 920000, 'Còn hàng', 'NH', 'ADS', 10),
('ADS9', 'Giày Adidas Ultra Boost 20 Consortium Core Black rep 1:1', 234, '', 'UB9.jpeg', '36', 1030000, 'Còn hàng', 'NH', 'ADS', 10),
('CV1', 'Giày Converse Run Star Hike Hi JW Anderson Black', 132, '', 'CV1.jpg', '36', 920000, 'Còn hàng', 'NH', 'CV', NULL),
('CV10', 'GIÀY CONVERSE RUNSTAR MOTION LIGHT TWIN SC', 168, '', 'CV10.jpg', '36', 880000, 'Còn hàng', 'NH', 'CV', NULL),
('CV2', 'Giày Converse Chuck Taylor All Star 1970s White – High Trắng Cổ Cao', 300, '', 'CV2.jpg', '36', 920000, 'Còn hàng', 'NH', 'CV', NULL),
('CV3', 'Giày Converse Chuck Taylor 1970 Parchment Low Top Rep 1:1', 252, '', 'CV3.jpg', '36', 920000, 'Còn hàng', 'NH', 'CV', NULL),
('CV4', 'Giày Converse Chuck Taylor All Star 1970s Hi Top Rep 1:1', 269, '', 'CV4.jpg', '36', 1350000, 'Còn hàng', 'NH', 'CV', NULL),
('CV5', 'Giày Converse Run Star Motion – 171545C Rep 1:1', 369, '', 'CV5.jpeg', '36', 1350000, 'Còn hàng', 'NH', 'CV', NULL),
('CV6', 'GIÀY CONVERSE RUNSTAR MOTION LIGHT TWIN SC', 450, '', 'CV6.jpg', '36', 850000, 'Còn hàng', 'NH', 'CV', NULL),
('CV7', 'Giày Converse Chuck Taylor All Star 1970s Low Top Siêu Cấp', 698, '', 'CV7.png', '36', 920000, 'Còn hàng', 'NH', 'CV', NULL),
('CV8', 'Giày Converse Run Star Motion', 555, '', 'CV8.jpg', '36', 920000, 'Còn hàng', 'NH', 'CV', NULL),
('CV9', 'Giày Converse sục nữ đạp gót đen', 234, '', 'CV9.jpg', '36', 1030000, 'Còn hàng', 'NH', 'CV', NULL),
('FLS01', 'Giày MLB Liner Mid Monogram NY', 384, '', 'FLS01.jpeg', '36', 830000, 'Còn hàng', 'NH', 'SALE', NULL),
('FLS02', 'Giày Nike Air Jordan 1 Low ‘True Blue Cement’ Like Auth', 223, '', 'FLS02.jpg', '36', 920000, 'Còn hàng', 'NH', 'SALE', NULL),
('FLS03', 'Giày Nike Air Jordan 1 Low GS ‘White Gym Red’ 553560-118 Like Auth’ Like Auth', 318, '', 'FLS03.jpg', '36', 880000, 'Còn hàng', 'NH', 'SALE', NULL),
('FLS04', 'Giày Nike Air Jordan 1 Low ‘Aluminum’ Ice Blue Like Auth', 481, '', 'FLS04.jpg', '36', 840000, 'Còn hàng', 'NH', 'SALE', NULL),
('FLS05', 'Giày Nike Air Jordan 1 Low Panda Like Auth', 986, '', 'FLS05.jpg', '36', 850000, 'Còn hàng', 'NH', 'SALE', NULL),
('FLS06', 'Giày MLB Liner High NY ‘White Black’ (QUAI DÁN)', 132, '', 'FLS06.jpg', '36', 860000, 'Còn hàng', 'NH', 'SALE', NULL),
('FLS07', 'Giày Nike Air Jordan 1 Low Triple White 2022 Likeauth', 198, '', 'FLS07.png', '36', 800000, 'Còn hàng', 'NH', 'SALE', NULL),
('FLS08', 'Giày Jd1 Paris Bản Trung Cực Nét 1:1', 587, '', 'FLS08.jpeg', '36', 650000, 'Còn hàng', 'NH', 'SALE', NULL),
('FLS09', 'Giày Air Force One All White Like Auth 2023', 223, '', 'FLS09.jpg', '36', 850000, 'Còn hàng', 'NH', 'SALE', NULL),
('FLS10', 'Giày Louis Vuitton LV Trainer Full Trắng Siêu Cấp', 398, '', 'FLS10.jpeg', '36', 920000, 'Còn hàng', 'NH', 'SALE', NULL),
('FLS11', 'Giày Jordan 1 Low Wolf Grey', 463, '', 'FLS11.jpg', '36', 850000, 'Còn hàng', 'NH', 'SALE', NULL),
('FLS12', 'Giày Nike Air Force 1 ‘White Black’', 274, '', 'FLS12.jpg', '36', 750000, 'Còn hàng', 'NH', 'SALE', NULL),
('FLS13', 'Nike Air Force One Superme Siêu Cấp', 269, '', 'FLS13.jpg', '36', 820000, 'Còn hàng', 'NH', 'SALE', NULL),
('FLS14', 'Giày Louis Vuitton LV Trainer Monogram Denim White Blue Siêu Cấp', 312, '', 'FLS14.jpg', '36', 920000, 'Còn hàng', 'NH', 'SALE', NULL),
('FLS15', 'Giày Louis Vuitton LV Trainer White Black Đen Trắng', 98, '', 'FLS15.jpg', '36', 850000, 'Còn hàng', 'NH', 'SALE', NULL),
('FLS16', 'Giày Nike Jordan Panda Cổ Cao', 342, '', 'FLS16.jpg', '36', 750000, 'Còn hàng', 'NH', 'SALE', NULL),
('FLS17', 'Giày Nike Air Force 1 Low Brooklyn Cream', 79, '', 'FLS17.jpeg', '36', 670000, 'Còn hàng', 'NH', 'SALE', NULL),
('FLS18', 'Giày Adidas Originals Superstar Cappuccino Full White', 157, '', 'FLS18.jpg', '36', 600000, 'Còn hàng', 'NH', 'SALE', NULL),
('FLS19', 'Giày Air Force 1 Low White Brown Móc Nâu', 247, '', 'FLS19.jpeg', '36', 550000, 'Còn hàng', 'NH', 'SALE', NULL),
('FLS20', 'Giày Nike Air Force One All White Like Auth', 672, '', 'FLS20.png', '36', 700000, 'Còn hàng', 'NH', 'SALE', NULL),
('FLS21', 'Giày Vans Vault Knu Skool VR3 LX Imran Potatop Like Auth', 245, '', 'FLS21.jpg', '36', 820000, 'Còn hàng', 'PK', 'SALE', NULL),
('FLS40', 'Giày MLB Liner Mid Denim Boston Siêu Cấp', 10000, '', 'AF6.jpeg', '36, 37, 38', 100000, 'Còn hàng', 'NH', 'SALE', NULL),
('JD01', 'Giày Jordan 1 Retro Low Dior CN8608-002 Like Auth', 132, '', 'JD1_1.jpg', '36', 3200000, 'Còn hàng', 'NH', 'JORDAN', 14),
('JD02', 'Giày Nike Air Jordan 1 Low ‘White Metallic Gold’ CZ4776-100 Like Auth', 232, '', 'JD1_2.jpg', '36', 880000, 'Còn hàng', 'NH', 'JORDAN', 14),
('JD03', 'Giày Nike Air Jordan 1 Low GS ‘Shattered Backboard’ Like Auth', 300, '', 'JD1_3.jpg', '36', 870000, 'Còn hàng', 'NH', 'JORDAN', 14),
('JD04', 'Giày Nike Air Jordan 1 Low SE Reverse Ice Blue (W) Like Auth', 389, '', 'JD1_4.jpg', '36', 840000, 'Còn hàng', 'NH', 'JORDAN', 14),
('JD05', 'Giày Nike Air Jordan 1 Retro High OG Dark Mocha Like Auth', 400, '', 'JD1_5.jpg', '36', 1200000, 'Còn hàng', 'NH', 'JORDAN', 14),
('JD06', 'Giày Nike Air Jordan 1 Retro High Bred Toe Like Auth', 250, '', 'JD1_6.jpg', '36', 1200000, 'Còn hàng', 'NH', 'JORDAN', 14),
('JD07', 'Giày Nike Air Jordan 1 High Zoom Racer Blue Like Auth', 299, '', 'JD1_7.jpg', '36', 980000, 'Còn hàng', 'NH', 'JORDAN', 14),
('JD08', 'Giày Jordan 1 Retro Low OG Zion Williamson Voodoo', 868, '', 'JD1_8.jpg', '36', 880000, 'Còn hàng', 'NH', 'JORDAN', 14),
('JD09', 'Giày Nike Air Jordan 1 High Switch ‘Light Smoke Grey’ Like Auth', 111, '', 'JD1_9.jpg', '36', 840000, 'Còn hàng', 'NH', 'JORDAN', 14),
('JD10', 'Giày Nike Jordan 1 Low ‘Cardinal Red’ Like Auth', 668, '', 'JD1_10.jpg', '36', 1100000, 'Còn hàng', 'NH', 'JORDAN', 14),
('JD11', 'Giày Nike Air Jordan 4 Snorlax Like Auth', 132, '', 'JD4_1.png', '36', 920000, 'Còn hàng', 'NH', 'JORDAN', 15),
('JD12', 'Giày Jordan 4 Retro SE Craft Photon Dust DV3742-021 Like Auth', 300, '', 'JD4_2.jpg', '36', 920000, 'Còn hàng', 'NH', 'JORDAN', 15),
('JD13', 'Giày Nike Air Jordan 4 Retro ‘Pine Green’ Like Auth', 252, '', 'JD4_3.jpg', '36', 920000, 'Còn hàng', 'NH', 'JORDAN', 15),
('JD14', 'Giày Nike Air Jordan 4 Retro ‘Black Cat’ 2020 Like Auth', 269, '', 'JD4_4.jpg', '36', 1350000, 'Còn hàng', 'NH', 'JORDAN', 15),
('JD15', 'Giày Nike Air Jordan 4 Retro ‘Military Black’', 369, '', 'JD4_5.jpg', '36', 1350000, 'Còn hàng', 'NH', 'JORDAN', 15),
('JD16', 'Giày Nike J4 University Blue Xanh Dương', 450, '', 'JD4_6.jpg', '36', 850000, 'Còn hàng', 'NH', 'JORDAN', 15),
('JD17', 'Nike Jordan 4 Red Cement', 698, '', 'JD4_7.jpg', '36', 920000, 'Còn hàng', 'NH', 'JORDAN', 15),
('JD18', 'Nike Jordan 4 White Cement', 555, '', 'JD4_8.jpg', '36', 920000, 'Còn hàng', 'NH', 'JORDAN', 15),
('JD19', 'Giày Nike Air Jordan 4 Retro Off-White Sail', 234, '', 'JD4_9.jpeg', '36', 1030000, 'Còn hàng', 'NH', 'JORDAN', 15),
('JD20', 'Nike JD3 Kaw Xám', 168, '', 'JD4_10.jpg', '36', 880000, 'Còn hàng', 'NH', 'JORDAN', 15),
('LV1', 'Giày Sneaker LV X YAYOI KUSAMA 2023 Auth Tuồng', 132, '', 'LV1.jpeg', '36', 920000, 'Còn hàng', 'NH', 'LV', NULL),
('LV10', 'Giày LV Trainer #54 Full Trắng 2023 Chuẩn Auth 99.99%', 168, '', 'LV10.jpeg', '36', 880000, 'Còn hàng', 'NH', 'LV', NULL),
('LV2', 'Giày LV Trainer #54 New York Navy Auth Tuồng', 300, '', 'LV2.jpeg', '36', 920000, 'Còn hàng', 'NH', 'LV', NULL),
('LV3', 'Giày LV Trainer #54 White Red Auth Tuồng', 252, '', 'LV3.jpeg', '36', 920000, 'Còn hàng', 'NH', 'LV', NULL),
('LV4', 'Giày LV Trainer #54 Signature Green White Auth Tuồng', 269, '', 'LV4.jpeg', '36', 1350000, 'Còn hàng', 'NH', 'LV', NULL),
('LV5', 'Giày Louis Vuitton LV Trainer Maxi Trắng Auth Tuồng', 369, '', 'LV5.jpeg', '36', 1350000, 'Còn hàng', 'NH', 'LV', NULL),
('LV6', 'Giày LV Trainer #54 Trắng Đen Auth Tuồng', 450, '', 'LV6.jpeg', '36', 850000, 'Còn hàng', 'NH', 'LV', NULL),
('LV7', 'Giày LV Trainer #54 Damier Ebene Multi Auth Tuồng', 698, '', 'LV7.jpg', '36', 920000, 'Còn hàng', 'NH', 'LV', NULL),
('LV8', 'Giày Louis Vuitton LV Trainer Monogram Black Auth Tuồng', 555, '', 'LV8.jpg', '36', 920000, 'Còn hàng', 'NH', 'LV', NULL),
('LV9', 'Giày LV Trainer #54 Trắng Hoa Like Auth 99.99%', 234, '', 'LV9.jpeg', '36', 1030000, 'Còn hàng', 'NH', 'LV', NULL),
('MLB1', 'Giày MLB Liner Mid Monogram NY', 132, '', 'MLB1.jpeg', '36', 920000, 'Còn hàng', 'NH', 'MLB', NULL),
('MLB10', 'Giày MLB Chunky Liner Boston Red Sox Beige Cao Cấp', 168, '', 'MLB10.jpg', '36', 880000, 'Còn hàng', 'NH', 'MLB', NULL),
('MLB2', 'Giày MLB Chunky Liner Mid Monogram Boston', 300, '', 'MLB2.jpeg', '36', 920000, 'Còn hàng', 'NH', 'MLB', NULL),
('MLB3', 'Giày MLB Liner Mid Denim Boston Siêu Cấp', 252, '', 'MLB3.jpeg', '36', 920000, 'Còn hàng', 'NH', 'MLB', NULL),
('MLB4', 'Giày MLB Big Ball Chunky Mask Los Angeles Dogers Like Auth', 269, '', 'MLB4.jpeg', '36', 1350000, 'Còn hàng', 'NH', 'MLB', NULL),
('MLB5', 'Giày MLB Liner High NY ‘White Black’ (QUAI DÁN)', 369, '', 'MLB5.jpeg', '36', 1350000, 'Còn hàng', 'NH', 'MLB', NULL),
('MLB6', 'Giày MLB Chunky Liner High LA Dodgers Siêu Cấp', 450, '', 'MLB6.jpeg', '36', 850000, 'Còn hàng', 'NH', 'MLB', NULL),
('MLB7', 'Giày MLB Bigball Chunky Monogram', 698, '', 'MLB7.jpeg', '36', 920000, 'Còn hàng', 'NH', 'MLB', NULL),
('MLB8', 'Giày MLB Chunky Liner Low LA Dodgers ‘White Blue’ Cao Cấp', 555, '', 'MLB8.jpeg', '36', 920000, 'Còn hàng', 'NH', 'MLB', NULL),
('MLB9', 'Giày MLB Chunky Liner Boston Red Sox Beige Cao Cấp', 234, '', 'MLB9.jpg', '36', 1030000, 'Còn hàng', 'NH', 'MLB', NULL),
('NB1', 'Giày New Balance 550 Aimé Leon Dore x Natural Green Cao Cấp', 132, '', 'NB550_1.jpg', '36', 920000, 'Còn hàng', 'NH', 'NB', 8),
('NB10', 'GIÀY NB 574 HỒNG CAM REP 1:1', 168, '', 'NB550_10.jpg', '36', 880000, 'Còn hàng', 'NH', 'NB', 8),
('NB11', 'Giày New Balance 550 Aimé Leon Dore x Natural Green Cao Cấp', 132, '', 'NB300_1.jpeg', '36', 920000, 'Còn hàng', 'NH', 'NB', 9),
('NB12', 'Giày New Balance 550 White Green Cao Cấp', 300, '', 'NB300_2.jpg', '36', 920000, 'Còn hàng', 'NH', 'NB', 9),
('NB13', 'Giày New Balance 550 White Full Cao Cấp', 252, '', 'NB300_3.jpg', '36', 920000, 'Còn hàng', 'NH', 'NB', 9),
('NB14', 'Giày New Balance 550 White Black Cao Cấp', 269, '', 'NB300_4.jpg', '36', 1350000, 'Còn hàng', 'NH', 'NB', 9),
('NB15', 'Giày New Balance 550 White Navy Cao Cấp', 369, '', 'NB300_5.jpg', '36', 1350000, 'Còn hàng', 'NH', 'NB', 9),
('NB16', 'Giày New Balance 550 Aimé Leon Dore x White Navy Cao Cấp', 450, '', 'NB300_6.jpg', '36', 850000, 'Còn hàng', 'NH', 'NB', 9),
('NB17', 'Giày New Balance 550 ‘UNC White University Blue’ Cao Cấp', 698, '', 'NB300_7.jpg', '36', 920000, 'Còn hàng', 'NH', 'NB', 9),
('NB18', 'Giày New Balance 550 Aime Leon Dore White Navy Siêu Cấp', 555, '', 'NB300_8.jpg', '36', 920000, 'Còn hàng', 'NH', 'NB', 9),
('NB19', 'Giày New Balance 574 ‘Grey Nimbus Cloud’', 234, '', 'NB300_9.jpeg', '36', 1030000, 'Còn hàng', 'NH', 'NB', 9),
('NB2', 'Giày New Balance 550 White Green Cao Cấp', 300, '', 'NB550_2.jpg', '36', 920000, 'Còn hàng', 'NH', 'NB', 8),
('NB20', 'GIÀY NB 574 HỒNG CAM REP 1:1', 168, '', 'NB300_10.png', '36', 880000, 'Còn hàng', 'NH', 'NB', 9),
('NB3', 'Giày New Balance 550 White Full Cao Cấp', 252, '', 'NB550_3.jpg', '36', 920000, 'Còn hàng', 'NH', 'NB', 8),
('NB4', 'Giày New Balance 550 White Black Cao Cấp', 269, '', 'NB550_4.jpg', '36', 1350000, 'Còn hàng', 'NH', 'NB', 8),
('NB5', 'Giày New Balance 550 White Navy Cao Cấp', 369, '', 'NB550_5.jpg', '36', 1350000, 'Còn hàng', 'NH', 'NB', 8),
('NB6', 'Giày New Balance 550 Aimé Leon Dore x White Navy Cao Cấp', 450, '', 'NB550_6.jpg', '36', 850000, 'Còn hàng', 'NH', 'NB', 8),
('NB7', 'Giày New Balance 550 ‘UNC White University Blue’ Cao Cấp', 698, '', 'NB550_7.jpg', '36', 920000, 'Còn hàng', 'NH', 'NB', 8),
('NB8', 'Giày New Balance 550 Aime Leon Dore White Navy Siêu Cấp', 555, '', 'NB550_8.jpg', '36', 920000, 'Còn hàng', 'NH', 'NB', 8),
('NB9', 'Giày New Balance 574 ‘Grey Nimbus Cloud’', 234, '', 'NB550_9.jpg', '36', 1030000, 'Còn hàng', 'NH', 'NB', 8),
('NIKE1', 'Giày Nike Air Force 1 Low Tiffany & Co. 1837 Like Auth', 132, '', 'AF1.jpg', '36', 920000, 'Còn hàng', 'NH', 'NIKE', 12),
('NIKE10', 'Giày Nike Air Force 1 07 Low Rice White Dark Grey Like Auth', 168, '', 'AF10.jpg', '36', 880000, 'Còn hàng', 'NH', 'NIKE', 12),
('NIKE11', 'Giày Nike Wmns Dunk Low Teddy Bear Light Soft Pink', 132, '', 'SB1.jpg', '36', 920000, 'Còn hàng', 'NH', 'NIKE', 13),
('NIKE12', 'Giày Nike SB Dunk Low Reverse Panda Siêu Cấp', 300, '', 'SB2.jpg', '36', 920000, 'Còn hàng', 'NH', 'NIKE', 13),
('NIKE13', 'Giày Nike SB Dunk Low Kobe White Yellow Green Black', 252, '', 'SB3.jpeg', '36', 920000, 'Còn hàng', 'NH', 'NIKE', 13),
('NIKE14', 'Giày Nike SB Dunk Low Otomo Katsuhiro Steamboy Like Auth', 269, '', 'SB4.jpeg', '36', 1350000, 'Còn hàng', 'NH', 'NIKE', 13),
('NIKE15', 'Giày Nike SB Dunk Low Panda LikeAuth', 369, '', 'SB5.jpeg', '36', 1350000, 'Còn hàng', 'NH', 'NIKE', 13),
('NIKE16', 'Giày Nike SB Dunk Low x Otomo Katsuhiro ‘Steamboy OST’ White Black', 450, '', 'SB6.jpg', '36', 850000, 'Còn hàng', 'NH', 'NIKE', 13),
('NIKE17', 'Giày Nike SB Dunk Low x Otomo Katsuhiro ‘Steamboy OST’ Green', 698, '', 'SB7.jpg', '36', 920000, 'Còn hàng', 'NH', 'NIKE', 13),
('NIKE18', 'Giày Nike SB Dunk Otomo Steamboy Grey Green', 555, '', 'SB8.jpg', '36', 920000, 'Còn hàng', 'NH', 'NIKE', 13),
('NIKE19', 'Giày Nike Wmns Air Jordan 1 Low SE ‘Mighty Swooshers’', 234, '', 'SB9.jpg', '36', 1030000, 'Còn hàng', 'NH', 'NIKE', 13),
('NIKE2', 'Giày Nike Air Force 1 Low ’07 What The NYC 2019', 300, '', 'AF2.jpg', '36', 920000, 'Còn hàng', 'NH', 'NIKE', 12),
('NIKE20', 'Giày Nike Dunk Low Disrupt 2 Panda Siêu Cấp', 168, '', 'SB10.jpg', '36', 880000, 'Còn hàng', 'NH', 'NIKE', 13),
('NIKE3', 'Giày Nike Air Force 1 Low Wolf Grey/Anthracite Like Auth', 252, '', 'AF3.jpg', '36', 920000, 'Còn hàng', 'NH', 'NIKE', 12),
('NIKE4', 'Giày Nike Air Force 1 LV8 ‘Fruit Basket’ DQ5085-111', 269, '', 'AF4.jpg', '36', 1350000, 'Còn hàng', 'NH', 'NIKE', 12),
('NIKE5', 'Giày Nike Wmns Air Force 1 High LX Have A Good Game', 369, '', 'AF5.jpg', '36', 1350000, 'Còn hàng', 'NH', 'NIKE', 12),
('NIKE6', 'Giày Nike Air Force 1 Low Time Capsule Pack Men’s', 450, '', 'AF6.jpeg', '36', 850000, 'Còn hàng', 'NH', 'NIKE', 12),
('NIKE7', 'Giày Nike Air Force 1 Low X Travis Scott Grey Like Auth', 698, '', 'AF7.jpg', '36', 920000, 'Còn hàng', 'NH', 'NIKE', 12),
('NIKE8', 'Giày Travis Scott x Nike Air Force 1 Low Cactus Jack Like Auth', 555, '', 'AF8.jpg', '36', 920000, 'Còn hàng', 'NH', 'NIKE', 12),
('NIKE9', 'Giày Nike Air Force 1 Low ‘Farmer’s Market Designed’ Like Auth', 234, '', 'AF9.png', '36', 1030000, 'Còn hàng', 'NH', 'NIKE', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_product`
--

CREATE TABLE `type_product` (
  `id_type` int(11) NOT NULL,
  `name_type` varchar(50) DEFAULT NULL,
  `id_category` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_product`
--

INSERT INTO `type_product` (`id_type`, `name_type`, `id_category`) VALUES
(8, 'NB550', 'NB'),
(9, 'NB300', 'NB'),
(10, 'ULTRA BOOST', 'ADS'),
(11, 'SUPER START', 'ADS'),
(12, 'AIR FORCE 1', 'NIKE'),
(13, 'SB DUNK', 'NIKE'),
(14, 'JORDAN 1', 'JORDAN'),
(15, 'JORDAN 4', 'JORDAN');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `PassWord` varchar(50) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `Avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` varchar(10) DEFAULT NULL,
  `FullName` varchar(50) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`ID`, `UserName`, `PassWord`, `Email`, `role`, `Avatar`, `Phone`, `FullName`, `Address`) VALUES
(18, 'khoahihi79', '12345678', 'admin@gmail.com', 1, NULL, NULL, NULL, NULL),
(19, 'khanhehe79', '12345678', 'khanhhehe@gmail.com', 0, '../assets/img/avatar.png', '0395343789', 'PHAN MINH KHOA', 'Xom Cho Thon Da Phuc Xa Sai Son'),
(20, 'khoahaha79', '12345678', 'khoahaha@gmail.com', 0, NULL, '0395343789', 'PHAN KHOA', 'Sai Son Quoc Oai Ha Noi'),
(28, 'khoahjhj79', '12345678', 'khoahjhj@gmail.com', 0, NULL, NULL, NULL, NULL);

--
-- Bẫy `user`
--
DELIMITER $$
CREATE TRIGGER `CreateCartAfterUserInsert` AFTER INSERT ON `user` FOR EACH ROW BEGIN
  INSERT INTO cart (ID) VALUES (NEW.ID);
END
$$
DELIMITER ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `ID` (`ID`);

--
-- Chỉ mục cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `IdProduct` (`IdProduct`);

--
-- Chỉ mục cho bảng `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `prodcut`
--
ALTER TABLE `prodcut`
  ADD PRIMARY KEY (`IdProduct`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_type` (`id_type`);

--
-- Chỉ mục cho bảng `type_product`
--
ALTER TABLE `type_product`
  ADD PRIMARY KEY (`id_type`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `type_product`
--
ALTER TABLE `type_product`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `user` (`ID`);

--
-- Các ràng buộc cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD CONSTRAINT `cart_detail_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`),
  ADD CONSTRAINT `cart_detail_ibfk_2` FOREIGN KEY (`IdProduct`) REFERENCES `prodcut` (`IdProduct`);

--
-- Các ràng buộc cho bảng `prodcut`
--
ALTER TABLE `prodcut`
  ADD CONSTRAINT `prodcut_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category_product` (`id_category`),
  ADD CONSTRAINT `prodcut_ibfk_2` FOREIGN KEY (`id_type`) REFERENCES `type_product` (`id_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
