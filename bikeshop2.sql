-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 06, 2021 lúc 05:46 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bikeshop2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2021_11_16_100822_create_tbl_admin_table', 1),
(14, '2021_11_16_101351_create_password_reset_table', 1),
(15, '2021_11_16_122922_create_tbl_category_product', 2),
(16, '2021_11_16_160736_create_tbl_brand_product', 3),
(17, '2021_11_17_061825_create_tbl_product', 4),
(18, '2021_11_19_125104_tbl_customer', 5),
(19, '2021_11_19_152203_tbl_shipping', 6),
(20, '2021_11_20_034939_tbl_payment', 7),
(21, '2021_11_20_035122_tbl_order', 7),
(22, '2021_11_20_035202_tbl_order_details', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset`
--

CREATE TABLE `password_reset` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '3565a16f61bdcef7e662adce00725190', 'Quân Ngô', '0902062052', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `brand_desc`, `brand_status`, `created_at`, `updated_at`) VALUES
(1, 'Honda', 'Một thương hiệu sản xuất xe máy nổi tiếng', 1, NULL, NULL),
(2, 'Yamaha', 'Một thương hiệu sản xuất xe máy nổi tiếng', 1, NULL, NULL),
(3, 'Suzuki', 'Một thương hiệu sản xuất xe máy nổi tiếng', 1, NULL, NULL),
(4, 'Napoli', 'Các sản phẩm nón bảo hiểm đến từ hãng Napoli', 1, NULL, NULL),
(5, 'Royal', 'Các sản phẩm nón bảo hiểm đến từ hãng Royal', 1, NULL, NULL),
(6, 'Pole Racing', 'Các sản phẩm phụ kiện đến từ hãng Pole Racing', 1, NULL, NULL),
(7, 'Mad', 'Các sản phẩm phụ kiện đến từ hãng Mad', 1, NULL, NULL),
(8, 'Monster', 'Các sản phẩm phụ kiện đến từ hãng Monster', 1, NULL, NULL),
(9, 'Scoyco', 'Các sản phẩm phụ kiện đến từ hãng Scoyco', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_post`
--

CREATE TABLE `tbl_category_post` (
  `cate_post_id` int(11) UNSIGNED NOT NULL,
  `cate_post_name` tinytext NOT NULL,
  `cate_post_desc` varchar(255) NOT NULL,
  `cate_post_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_post`
--

INSERT INTO `tbl_category_post` (`cate_post_id`, `cate_post_name`, `cate_post_desc`, `cate_post_status`) VALUES
(1, 'Công nghệ', 'Tin tức công nghệ', 1),
(3, 'Xã hội', 'Tin tức về xã hội', 1),
(4, 'Xe máy', 'Tin tức về xe máy', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_id`, `category_name`, `category_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(1, 'Xe máy', 'Bao gồm các loại xe máy đến từ các Hãng', 1, NULL, NULL),
(2, 'Nón bảo hiểm', 'Bao gồm các loại nón bảo hiểm đến từ các Hãng', 1, NULL, NULL),
(3, 'Phụ kiện', 'Bao gồm các loại phụ kiện hỗ trợ cho người dùng đến từ các Hãng', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_coupon`
--

CREATE TABLE `tbl_coupon` (
  `coupon_id` int(11) NOT NULL,
  `coupon_name` varchar(255) NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `coupon_qty` int(50) NOT NULL,
  `coupon_type` int(11) NOT NULL,
  `coupon_value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_coupon`
--

INSERT INTO `tbl_coupon` (`coupon_id`, `coupon_name`, `coupon_code`, `coupon_qty`, `coupon_type`, `coupon_value`) VALUES
(1, 'Mã giảm giá giáng sinh', 'MERRYCHRISMAS', 10, 1, 10),
(2, 'Mã giảm giá mừng khai trương', 'NEWOPENSHOP', 10, 2, 100000),
(3, 'Mã giảm giá khách hàng mới', 'NEWCUSTOMER', 10, 1, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_phone`, `created_at`, `updated_at`) VALUES
(1, 'Tạ Ngô Quốc Quân', 'user@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0902062052', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) UNSIGNED NOT NULL,
  `customer_id` int(11) UNSIGNED NOT NULL,
  `shipping_id` int(11) UNSIGNED NOT NULL,
  `payment_id` int(11) UNSIGNED NOT NULL,
  `order_total` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '51,689,000.00', 'Đang chờ xử lý', NULL, NULL),
(2, 1, 2, 2, '258,445,000.00', 'Đang chờ xử lý', NULL, NULL),
(4, 1, 3, 4, '516,890,000.00', 'Đang chờ xử lý', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sales_qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sales_qty`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Winner X', '46990000', 1, NULL, NULL),
(2, 2, 2, 'Exciter', '46990000', 5, NULL, NULL),
(3, 4, 2, 'Exciter', '46990000', 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(11) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(50) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Đang chờ xử lý', NULL, NULL),
(2, '1', 'Đang chờ xử lý', NULL, NULL),
(3, '1', 'Đang chờ xử lý', NULL, NULL),
(4, '1', 'Đang chờ xử lý', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `post_title` tinytext NOT NULL,
  `post_desc` text NOT NULL,
  `post_content` text NOT NULL,
  `post_status` int(11) NOT NULL,
  `post_image` varchar(200) NOT NULL,
  `cate_post_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_posts`
--

INSERT INTO `tbl_posts` (`post_id`, `post_title`, `post_desc`, `post_content`, `post_status`, `post_image`, `cate_post_id`) VALUES
(1, 'Cảm biến camera có kích thước bằng hạt muối, tuy nhỏ mà có võ, cho ra hình ảnh sắc nét và đầy màu sắc, bạn chấm mấy điểm?', '<p>Một nh&oacute;m c&aacute;c nh&agrave; nghi&ecirc;n cứu khoa học đến từ Đại học Princeton v&agrave; Đại học Washington ở Mỹ đ&atilde; ph&aacute;t triển một cảm biến camera mới c&oacute; k&iacute;ch thước nhỏ chỉ bằng một hạt muối.</p>', '<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:http://localhost/caeefc53-036c-4904-bb32-bd8a6869fa1a\" width=\"800\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:http://localhost/73c7e05b-c9e3-42c0-837c-9b4028786b96\" width=\"800\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>Một nh&oacute;m c&aacute;c nh&agrave; nghi&ecirc;n cứu khoa học đến từ Đại học Princeton v&agrave; Đại học Washington ở Mỹ đ&atilde; ph&aacute;t triển một cảm biến camera mới c&oacute; k&iacute;ch thước nhỏ chỉ bằng một hạt muối. Chất lượng h&igrave;nh ảnh được n&acirc;ng cấp đ&aacute;ng kể so với c&aacute;c cảm biến camera vi m&ocirc; trước đ&acirc;y.</p>\r\n\r\n<p>C&aacute;c nh&agrave; nghi&ecirc;n cứu gọi đ&acirc;y l&agrave; cảm biến quang học nano, thiết bị sở hữu 1.6 triệu cột h&igrave;nh trụ k&iacute;ch thước nano được đặt tr&ecirc;n si&ecirc;u bề mặt (metasurface) v&agrave; hoạt động như một chiếc m&aacute;y ảnh thực thụ cho ra những bức h&igrave;nh chất lượng cao.</p>\r\n\r\n<p><img alt=\"Hình ảnh được chụp bởi cảm biến nano (bên trái)\" src=\"https://cdn.tgdd.vn/Files/2021/12/03/1402099/hinh-1-nano-camera_1280x720-800-resize.jpg\" title=\"Hình ảnh được chụp bởi cảm biến nano (bên trái)\" /></p>\r\n\r\n<p>H&igrave;nh ảnh được chụp bởi cảm biến nano (b&ecirc;n tr&aacute;i)(Nguồn: Techradar)</p>\r\n\r\n<p>Mỗi cột h&igrave;nh trụ nhỏ n&agrave;y hoạt động như một ăng-ten quang học, c&oacute; nhiệm vụ bắt &aacute;nh s&aacute;ng. Sau đ&oacute; cảm biến sẽ sử dụng c&aacute;c thuật to&aacute;n tr&iacute; tuệ nh&acirc;n tạo (AI) để tạo ra h&igrave;nh ảnh chất lượng cao với đầy đủ m&agrave;u sắc.</p>\r\n\r\n<p>Ngo&agrave;i k&iacute;ch thước, sự kh&aacute;c biệt ch&iacute;nh giữa c&aacute;c cảm biến n&agrave;y so với cảm biến camera truyền thống đ&oacute; ch&iacute;nh l&agrave; bề mặt tiếp nhận &aacute;nh s&aacute;ng. Trong khi c&aacute;c cảm biến m&aacute;y ảnh truyền thống phải kết hợp thấu k&iacute;nh nhựa hoặc thủy tinh để thu thập &aacute;nh s&aacute;ng, th&igrave; cảm biến nano n&agrave;y sử dụng c&aacute;i được gọi l&agrave; si&ecirc;u bề mặt (metasurface).</p>\r\n\r\n<p>Theo tạp ch&iacute; khoa học Nature: &quot;Cảm biến camera quang học nano c&oacute; thể ứng dụng trong c&aacute;c lĩnh vực kh&aacute;c nhau, từ robot đến y học. Thiết bị khắc phục được hạn chế của những thiết kế camera k&iacute;ch thước vi m&ocirc; tương tự trước đ&acirc;y, thường cho ra bức ảnh m&eacute;o v&agrave; mờ với tầm nh&igrave;n rất hạn chế&nbsp;bị giới hạn bởi khẩu độ v&agrave; tần số f thấp,...&quot;.</p>\r\n\r\n<p><img alt=\"Hình ảnh được chụp bởi cảm biến nano (bên phải)\" src=\"https://cdn.tgdd.vn/Files/2021/12/03/1402099/hinh-2-nano-camera_1280x720-800-resize.jpg\" title=\"Hình ảnh được chụp bởi cảm biến nano (bên phải)\" /></p>\r\n\r\n<p>H&igrave;nh ảnh được chụp bởi cảm biến nano (b&ecirc;n phải)(Nguồn: Techradar)</p>\r\n\r\n<p>Si&ecirc;u bề mặt được l&agrave;m bằng silicon nitride, đ&acirc;y l&agrave; vật liệu dễ t&igrave;m kiếm v&agrave; c&oacute; thể cung cấp sản xuất c&aacute;c cảm biến nano n&agrave;y ở quy m&ocirc; lớn. Đ&acirc;y l&agrave; giải ph&aacute;p mới dựa tr&ecirc;n si&ecirc;u bề mặt, n&oacute;i ngắn gọn l&agrave; một m&agrave;ng mỏng với c&aacute;c phần tử thu nhỏ ri&ecirc;ng lẻ được ph&aacute;t triển để kh&uacute;c xạ &aacute;nh s&aacute;ng theo bất kỳ hướng mong muốn n&agrave;o.</p>\r\n\r\n<p>&Yacute; tưởng ban đầu của việc ph&aacute;t triển cảm biến camera n&agrave;y kh&ocirc;ng phải d&agrave;nh cho&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\" title=\"smartphone\" type=\"smartphone\">smartphone</a>. Thay v&agrave;o đ&oacute;, thiết bị n&agrave;y sẽ được t&iacute;ch hợp d&agrave;nh cho robot, đặc biệt l&agrave; sử dụng để hỗ trợ thực hiện c&aacute;c ca phẫu thuật v&agrave; ứng dụng v&agrave;o lĩnh vực y học kh&aacute;c trong tương thời gian tới.</p>\r\n\r\n<p>Cảm biến camera n&agrave;y tuy nhỏ nhưng m&agrave; thực sự lợi hại phải kh&ocirc;ng n&agrave;o? Hiện tại&nbsp;<a href=\"https://www.thegioididong.com/\" target=\"_blank\" title=\"Thế Giới Di Động\" type=\"Thế Giới Di Động\">Thế Giới Di Động</a>&nbsp;cũng đang b&agrave;y b&aacute;n c&aacute;c loại&nbsp;<a href=\"https://www.thegioididong.com/camera-giam-sat\" target=\"_blank\" title=\"camera\" type=\"camera\">camera</a>&nbsp;ch&iacute;nh h&atilde;ng, đi k&egrave;m nhiều ưu đ&atilde;i hấp dẫn gi&uacute;p bạn c&oacute; thể t&iacute;ch hợp v&agrave;o&nbsp;<a href=\"https://www.thegioididong.com/may-tinh-de-ban\" target=\"_blank\" title=\"PC\" type=\"PC\">PC</a>,&nbsp;<a href=\"https://www.thegioididong.com/laptop\" target=\"_blank\" title=\"laptop\" type=\"laptop\">laptop</a>&nbsp;để thực hiện c&aacute;c cuộc gọi video một c&aacute;ch thuận tiện hơn, gh&eacute; xem ngay bạn nh&eacute;!</p>', 1, 'camera-very-small-tgdd-thumb_1280x720-300x2001638525649.jpg', 1),
(4, '2022 Benelli Leoncino 125 trình làng, hút dân tập chơi', '<p>Thương hiệu xe m&aacute;y &Yacute; Benelli vừa ch&iacute;nh thức c&ocirc;ng bố ấn phẩm mới 2022 Leoncino 125 ra thị trường với thiết kế v&agrave; trang bị cực chất.</p>', '<p>Leoncino 125, d&ograve;ng xe scrambler nhỏ nhất từ thương hiệu xe m&aacute;y &Yacute; Benelli, đ&atilde; ch&iacute;nh thức được giới thiệu ra thị trường. Mẫu xe n&agrave;y được thiết kế để c&oacute; khả năng cạnh tranh với những mẫu m&ocirc; t&ocirc; cỡ nhỏ đến từ KTM l&agrave; ch&iacute;nh.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"2022 Benelli Leoncino 125 trình làng, hút dân tập chơi - 1\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02/2022-Benelli-Leoncino-125-trinh-lang-hut-dan-tap-choi-ben1-1638435541-380-width660height440.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"2022 Benelli Leoncino 125 trình làng, hút dân tập chơi - 3\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02/2022-Benelli-Leoncino-125-trinh-lang-hut-dan-tap-choi-ben5-1638435541-639-width660height465.jpg\" /></p>\r\n\r\n<p>Về diện mạo, Benelli Leoncino 125 mới nh&igrave;n giống với đ&agrave;n anh Leoncino 500, c&oacute; huy hiệu h&igrave;nh con sư tử đặt ở tr&ecirc;n tấm chắn b&ugrave;n trước. Xe c&oacute; đ&egrave;n pha thiết kế h&igrave;nh oval kh&aacute;c bbiệt, được đặt tr&ecirc;n một bộ khung gầm th&acirc;n xe nhỏ. Mẫu xe n&agrave;y cũng c&oacute; y&ecirc;n ngồi đơn khối, v&agrave;nh b&aacute;nh xe phong c&aacute;ch v&agrave; ống xả treo b&ecirc;n.</p>\r\n\r\n<p><img alt=\"2022 Benelli Leoncino 125 trình làng, hút dân tập chơi - 4\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02/2022-Benelli-Leoncino-125-trinh-lang-hut-dan-tap-choi-ben2-1638435541-464-width660height495.jpg\" /></p>\r\n\r\n<p>Ở kh&iacute;a cạnh sức mạnh, Benelli Leoncino 125 mới trang bị động cơ đơn xy lanh, dung t&iacute;ch 125cc, l&agrave;m m&aacute;t bằng chất lỏng, c&oacute; khả năng sản sinh c&ocirc;ng suất tối đa 12,8 m&atilde; lực v&agrave; m&ocirc;-men xoắn cực đại 10 Nm, đi k&egrave;m với hộp số 6 cấp.</p>\r\n\r\n<p><img alt=\"2022 Benelli Leoncino 125 trình làng, hút dân tập chơi - 5\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02/2022-Benelli-Leoncino-125-trinh-lang-hut-dan-tap-choi-ben3-1638435541-54-width660height423.jpg\" /></p>\r\n\r\n<p><img alt=\"2022 Benelli Leoncino 125 trình làng, hút dân tập chơi - 6\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02/2022-Benelli-Leoncino-125-trinh-lang-hut-dan-tap-choi-ben4-1638435541-134-width660height418.jpg\" /></p>\r\n\r\n<p>Hệ thống treo tr&ecirc;n xe gồm bộ phuộc đảo chiều ở ph&iacute;a trước v&agrave; giảm x&oacute;c đơn ở ph&iacute;a sau. H&atilde;m tốc cho xe l&agrave; bộ phanh đĩa được trang bị cho cả hai b&aacute;nh xe. Về tổng thể, c&oacute; thể n&oacute;i 2022 Benelli Leoncino 125 l&agrave; một mẫu m&ocirc; t&ocirc; cỡ nhỏ chất lượng, ph&ugrave; hợp với d&acirc;n tập chơi.</p>', 1, 'ben1-1--1638435700-573-width640height4801638526685.jpg', 4),
(5, 'Honda Wave 100 mới đẹp lung linh, giá chỉ 25 triệu đồng', '<p>Mẫu xe số mới được giới thiệu tại thị trường Campuchia g&acirc;y ấn tượng với ngo&agrave;i h&igrave;nh hiện đại.</p>', '<p>L&agrave; d&ograve;ng xe số với thiết kế nhỏ gọn tiện lợi n&ecirc;n kh&ocirc;ng lạ khi Honda b&aacute;n Wave tại nhiều thị trường kh&aacute;c nhau của m&igrave;nh. Tại Campuchia, Honda hoạt động dưới t&ecirc;n c&ocirc;ng ty N.C.X., Co., Ltd v&agrave; đ&atilde; đưa tới thị trường quốc gia Đ&ocirc;ng Nam &Aacute; n&agrave;y kh&aacute; nhiều c&aacute;c d&ograve;ng sản phẩm kh&aacute;c nhau, trong đ&oacute; c&oacute;&nbsp;<a href=\"https://www.24h.com.vn/honda-wave-c748e5715.html\" title=\"Honda Wave\">Honda Wave</a>&nbsp;100.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Honda Wave 100 mới đẹp lung linh, giá chỉ 25 triệu đồng - 1\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02/wave-100-3-1638429733-574-width660height635.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Phi&ecirc;n bản mới nhất được cập nhật gần đ&acirc;y của Honda Wave 100 c&oacute; slogan &quot;My Strength. My Luck.&quot; vẫn giữ được sự nhỏ gọn đặc trưng của d&ograve;ng Wave. Xe được trang bị đ&egrave;n pha halogen tr&ecirc;n đầu xe c&ugrave;ng với đ&egrave;n xi nhanh t&aacute;ch ngay hai b&ecirc;n đền pha, điều n&agrave;y mang tới sự linh hoạt khi di chuyển trong điều kiện thiếu s&aacute;ng.&nbsp;</p>\r\n\r\n<p><img alt=\"Honda Wave 100 mới đẹp lung linh, giá chỉ 25 triệu đồng - 3\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02/wave-6-1638429759-290-width660height395.jpg\" /></p>\r\n\r\n<p>Mặc d&ugrave; vẫn sử dụng cụm đồng hồ analog nhưng giao diện tr&ecirc;n Wave thế hệ mới n&agrave;y đ&atilde; được l&agrave;m lại gi&uacute;p n&oacute; c&oacute; được sự cao cấp v&agrave; dễ nh&igrave;n hơn. C&ugrave;ng với đ&oacute; th&igrave; tem tr&ecirc;n xe cũng được thiết kế lại với bề ngo&agrave;i thể thao v&agrave; hiện đại hơn.&nbsp;</p>\r\n\r\n<p><img alt=\"Honda Wave 100 mới đẹp lung linh, giá chỉ 25 triệu đồng - 4\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02/wave-4-1638429776-541-width660height396.jpg\" /></p>\r\n\r\n<p>NCX Wave 100 vẫn được trang bị phanh tang trống trước sau v&agrave; sử dụng v&agrave;nh căm đường k&iacute;nh 17 inch đi c&ugrave;ng lốp c&oacute; săm để mang tới sự ổn định v&agrave; dễ sửa chữa hơn. Xe cũng được t&iacute;ch hợp phuộc lồng trước, l&ograve; xo đ&ocirc;i sau đảm bảo &ecirc;m &aacute;i khi di chuyển tr&ecirc;n c&aacute;c cung đường kh&aacute;c nhau. Với k&iacute;ch thước tổng thể l&agrave; 699 X 1,908 X 1,067 mm c&ugrave;ng khối lượng 97kg, chiều cao y&ecirc;n 760mm, Wave 100 kh&ocirc;ng chỉ nhỏ m&agrave; c&ograve;n ph&ugrave; hợp với nhiều đối tượng người sử dụng kh&aacute;c nhau.&nbsp;</p>\r\n\r\n<p><img alt=\"Honda Wave 100 mới đẹp lung linh, giá chỉ 25 triệu đồng - 5\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02/wave-5-1638429789-994-width660height396.jpg\" /></p>\r\n\r\n<p>Về sức mạnh, Wave 100 được trang bị động cơ 4 th&igrave;, xy lanh đơn dung t&iacute;ch 99.7cc mang tới sức mạnh đủ đ&aacute;p ứng nhu cầu đi lại ở đường phố. Xe được trang bị bộ khởi động điện, l&agrave;m m&aacute;t bằng kh&ocirc;ng kh&iacute; v&agrave; truyền động bởi hộp số tr&ograve;n 4 cấp mang tới sự linh hoạt khi sử dụng. Đương nhi&ecirc;n, xe cũng thuộc h&agrave;ng những xe số tiết kiệm xăng tr&ecirc;n thị trường hiện nay.&nbsp;</p>\r\n\r\n<p><img alt=\"Honda Wave 100 mới đẹp lung linh, giá chỉ 25 triệu đồng - 6\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02/wave-8-1638429805-228-width660height395.jpg\" /></p>\r\n\r\n<p><img alt=\"Honda Wave 100 mới đẹp lung linh, giá chỉ 25 triệu đồng - 7\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02/wave-100-1-1638429821-458-width660height635.jpg\" /></p>\r\n\r\n<p><img alt=\"Honda Wave 100 mới đẹp lung linh, giá chỉ 25 triệu đồng - 8\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02/wave-100-2-1638429867-594-width660height635.jpg\" /></p>\r\n\r\n<p>C&oacute; 3 t&ugrave;y chọn m&agrave;u cho người sử dụng v&agrave; m&agrave;u n&agrave;o cũng hết sức ấn tượng, c&ugrave;ng mức gi&aacute; b&aacute;n khoảng 24.7 triệu đồng khi quy đổi ra tiền Việt.</p>', 1, 'wave-100-1-1638430377-941-width640height4801638529012.jpg', 4),
(6, 'R15 V4 bán ra tại Indonesia với giá chỉ từ 59,2 triệu đồng, chờ ngày về Việt Nam', '<p>Việc b&aacute;n ra tại Indonesia cho thấy chắc chắn ng&agrave;y fan tại Việt Nam mua được R15 V4 sẽ kh&ocirc;ng c&ograve;n xa nữa.</p>', '<p>Sau khi tr&igrave;nh l&agrave;ng ng&agrave;y 22/9/2021 tại Ấn Độ th&igrave; Yamaha đ&atilde; lần lượt b&aacute;n ra YZF R15 thế hệ mới (thường gọi l&agrave; R15 V4) tại một số thị trường v&agrave; mới đ&acirc;y nhất, h&atilde;ng xe Nhật đ&atilde; b&aacute;n chiếc sportbike n&agrave;y tại thị trường Indonesia.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"R15 V4 bán ra tại Indonesia với giá chỉ từ 59,2 triệu đồng, chờ ngày về Việt Nam - 1\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-03/yamaha-r15-1-1638496425-59-width660height460.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Cụ thể, tại thị trường quốc gia Đ&ocirc;ng Nam &Aacute; n&agrave;y th&igrave; R15 V4 c&oacute; 3 lựa chọn với mức gi&aacute; tương ứng khi quy đổi ra tiền Việt theo tỷ gi&aacute; hiện tại như sau:</p>\r\n\r\n<p>- R15 V4 bản ti&ecirc;u chuẩn: gi&aacute; 59,2 triệu đồng</p>\r\n\r\n<p>- R15 V4 phi&ecirc;n bản Monster Energy: gi&aacute; 59,6 triệu đồng</p>\r\n\r\n<p>- R15 V4 phi&ecirc;n bản Connected: gi&aacute; 61,5 triệu đồng</p>\r\n\r\n<p>- R15M Connected ABS: gi&aacute; 68,8 triệu đồng</p>\r\n\r\n<p>- R15M Connected ABS bản kỷ niệm 60 năm: gi&aacute; 69,8 triệu đồng</p>\r\n\r\n<p><img alt=\"R15 V4 bán ra tại Indonesia với giá chỉ từ 59,2 triệu đồng, chờ ngày về Việt Nam - 3\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-03/yamaha-r15-2-1638496454-685-width660height460.jpg\" /></p>\r\n\r\n<p>Trong đ&oacute; c&aacute;c phi&ecirc;n bản R15 V4 bản ti&ecirc;u chuẩn v&agrave; Monster Energy chỉ kh&aacute;c nhau về m&agrave;u sắc v&agrave; họa tiết. Phi&ecirc;n bản R15 V4 bản Connected c&oacute; t&iacute;ch hợp chức năng kết nối đồng hồ với smartphone. C&ograve;n phi&ecirc;n bả R15M b&ecirc;n cạnh việc bổ sung phanh ABS so với bản ti&ecirc;u chuẩn th&igrave; cũng c&oacute; t&iacute;nh năng Quick Shiffter gi&uacute;p hỗ trợ sang số nhanh.</p>\r\n\r\n<p><img alt=\"R15 V4 bán ra tại Indonesia với giá chỉ từ 59,2 triệu đồng, chờ ngày về Việt Nam - 4\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-03/yamaha-r15-3-1638496472-958-width660height460.jpg\" /></p>\r\n\r\n<p>Việc được b&aacute;n ra tại thị trường Indonesia l&agrave; dấu hiệu cho thấy R15 V4 cũng sắp sửa được b&aacute;n tại thị trường Việt Nam, &iacute;t nhất l&agrave; th&ocirc;ng qua c&aacute;c nh&agrave; nhập khẩu tư nh&acirc;n v&igrave; hầu hết c&aacute;c mẫu xe ph&acirc;n khối lớn của Yamaha tại Việt Nam được nhập khẩu từ thị trường n&agrave;y v&agrave; Indonesia.</p>\r\n\r\n<p><img alt=\"R15 V4 bán ra tại Indonesia với giá chỉ từ 59,2 triệu đồng, chờ ngày về Việt Nam - 5\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-03/yamaha-r15-4-1638496486-474-width660height460.jpg\" /></p>\r\n\r\n<p>R15 V4 l&agrave; phi&ecirc;n bản mới nhất của d&ograve;ng sportbike cỡ nhỏ được nhiều người ưa chuộng từ thương hiệu Yamaha. D&ograve;ng xe mang ng&ocirc;n ngữ thiết kế mới với nhiều điểm giống đ&agrave;n anh R6 phi&ecirc;n bản mới nhất. Ngo&agrave;i ra, động cơ cũng điều tạo kh&aacute;c biệt giữa R15 V4 với những người tiền nhiệm. Cụ thể, Yamaha trang bị&nbsp;cho xe khối động cơ 155cc, l&agrave;m m&aacute;t bằng dung dịch sản sinh c&ocirc;ng suất tối đa 18.6 m&atilde; lực tại 10,000 v&ograve;ng/ph&uacute;t v&agrave; m&ocirc;-men xoắn cực đại l&agrave; 14.1 Nm tại 8500 v&ograve;ng/ph&uacute;t.</p>\r\n\r\n<p><img alt=\"R15 V4 bán ra tại Indonesia với giá chỉ từ 59,2 triệu đồng, chờ ngày về Việt Nam - 6\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-03/yamaha-r15-6-1638496500-997-width660height495.jpg\" /></p>\r\n\r\n<p>Ngo&agrave;i ra, xe cũng được trang bị hệ thống Slipper Clutch gi&uacute;p hỗ trợ sang số dễ d&agrave;ng, c&ugrave;ng c&aacute;c trang bị hệ thống giảm x&oacute;c ngược ph&iacute;a trước v&agrave;&nbsp;phanh ABS. Ri&ecirc;ng phi&ecirc;n bản R15M c&oacute; th&ecirc;m hệ thống Quick Shifter, c&ugrave;ng hệ thống chống quay b&aacute;nh tự do để hỗ trợ an to&agrave;n to&agrave;n diện cho xe.&nbsp;</p>', 1, 'yamaha-r15-6-1638496758-43-width640height4801638678382.jpg', 4),
(7, 'Honda trình làng bộ đôi \"siêu phẩm\" mới tại Thái Lan', '<p>C&ugrave;ng thiết kế ấn tượng th&igrave; bộ đ&ocirc;i m&ocirc; t&ocirc; n&agrave;y cũng sỏ hữu loạt trang bị ấn tượng.</p>', '<p>Triển l&atilde;m Motor Expo 2021 đang diễn ra tại Th&aacute;i Lan l&agrave; nơi hội tụ của h&agrave;ng loạt c&aacute;c thương hiệu lớn, v&agrave; đ&acirc;y cũng l&agrave; dịp m&agrave; c&aacute;c h&atilde;ng giới thiệu c&aacute;c sản phẩm mới của m&igrave;nh v&agrave; Honda cũng kh&ocirc;ng phải l&agrave; ngoại lệ. H&atilde;ng xe Nhật đ&atilde; giới thiệu hai mẫu xe ph&acirc;n khối lớn của m&igrave;nh tại thị trường Đ&ocirc;ng Nam &Aacute; n&agrave;y gồm NC750X ho&agrave;n to&agrave;n mới v&agrave; CB1000R Black Edition.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Honda trình làng bộ đôi &amp;#34;siêu phẩm&amp;#34; mới tại Thái Lan - 1\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02/honda-3-1638414421-64-width660height476.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Honda NC750X 2022</strong></p>\r\n\r\n<p>Vẫn giữ ADN đặc trưng của người tiền nhiệm, thế hệ NC750X 2022 với slogan &quot;Endless Route Await&quot; mang tới cho người sử dụng một chiếc m&ocirc; t&ocirc; với những đường n&eacute;t v&agrave; ngoại h&igrave;nh b&oacute;ng bẩy. To&agrave;n bộ hệ thống chiếu s&aacute;ng tr&ecirc;n xe đ&atilde; sử dụng c&ocirc;ng nghệ LED hiện đại v&agrave; đồng hồ điều khiển l&agrave; LCD to&agrave;n phần hiển thị đầy đủ c&aacute;c th&ocirc;ng số.&nbsp;</p>\r\n\r\n<p><img alt=\"Honda trình làng bộ đôi &amp;#34;siêu phẩm&amp;#34; mới tại Thái Lan - 3\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02/honda-1-1638414447-279-width660height440.jpg\" /></p>\r\n\r\n<p>C&ugrave;ng với y&ecirc;n xe chỉ 800mm NC750X 2022 mang tới chiếc xe ph&ugrave; hợp với thể trạng của nhiều người điều khiển. Để &nbsp;phục cụ cho nhu cầu chứa đồ, NC750X 2022 c&oacute; th&ecirc;m t&ugrave;y chọn cốp h&agrave;nh l&yacute; với dung t&iacute;ch 23 l&iacute;t. Trong khi tổng thể thiết kế của xe vẫn to&aacute;t l&ecirc;n sự linh hoạt v&agrave; đa dụng cho mọi địa h&igrave;nh.&nbsp;</p>\r\n\r\n<p><img alt=\"Honda trình làng bộ đôi &amp;#34;siêu phẩm&amp;#34; mới tại Thái Lan - 4\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02/honda-6-1638414462-439-width660height513.jpg\" /></p>\r\n\r\n<p>Về sức mạnh, NC750X 2022 được trang bị khối động cơ 2 xy lanh loại SOHC với 8 van v&agrave; tổng dung t&iacute;ch xy lanh l&agrave; 745cc. Xe được trang bị phun xăng điện tử PGM-FI, l&agrave;m m&aacute;t bằng dung dịch, truyền động bởi hệ thống DCT - Dual Clutch Transmission của Honda. Người sử dụng c&oacute; thể lựa chọn tay ga hoặc số tự động để điều khiển t&ugrave;y h&agrave;nh tr&igrave;nh, c&ugrave;ng với đ&oacute; 4 chế độ l&aacute;i kh&aacute;c nhau bao gồm: Sport, Standard, Rain v&agrave; User gi&uacute;p người sử dụng c&oacute; thể t&ugrave;y chọn dựa v&agrave;o địa h&igrave;nh vận h&agrave;nh. NC750X 2022 cũng được trang bị bướm ga điện Throttle by Wire v&agrave; HSTC gi&uacute;p đảm bảo an to&agrave;n hơn cho c&aacute;c h&agrave;nh tr&igrave;nh.&nbsp;</p>\r\n\r\n<p><strong>Honda CB1000R Black Edition&nbsp;</strong></p>\r\n\r\n<p>Chiếc naked-bike hạng nặng từ Honda dường như ấn tượng hơn hẳn nhờ phủ sơn đen tr&ecirc;n to&agrave;n th&acirc;n xe, bao gồm cả phuộc lẫn chắn b&ugrave;n, v&agrave;nh xe. Với slogan &quot;Engineering with a Soud&quot;, r&otilde; r&agrave;ng thế hệ n&agrave;y được nhất mạnh về động cơ.&nbsp;</p>\r\n\r\n<p><img alt=\"Honda trình làng bộ đôi &amp;#34;siêu phẩm&amp;#34; mới tại Thái Lan - 5\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02/honda-4-1638414482-618-width660height463.jpg\" /></p>\r\n\r\n<p>Cụ thể, CB1000R Black Edition được trang bị khối động cơ 4 xy lanh thẳng h&agrave;ng với tổng dung t&iacute;c 998cc, loại DOHC, phun xăng PGM-DSFI, l&agrave;m m&aacute;t bằng nước. Xe được truyền động bằng hộp số 6 cấp, c&oacute; trang bị bước ga điện Throttle by Wire, với 4 chế độ l&aacute;i kh&aacute;c nhau gồm: Sport, Standard, Rain v&agrave; User. Ngo&agrave;i ra, xe cũng được trang bị hệ thống hỗ trợ sang số nhanh Quick Shifter v&agrave; hệ thống HSTC gi&uacute;p mang tới trải nghiệm đi xe th&uacute; vị v&agrave; an to&agrave;n hơn.&nbsp;</p>\r\n\r\n<p><img alt=\"Honda trình làng bộ đôi &amp;#34;siêu phẩm&amp;#34; mới tại Thái Lan - 6\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02/honda-5-1638414496-115-width660height513.jpg\" /></p>\r\n\r\n<p>Bộ đ&ocirc;i CB1000R Black Edition v&agrave; NC750X 2022 đều được Honda t&iacute;ch hợp c&ocirc;ng nghệ điều khiển bằng giọng n&oacute;i Honda Smartphone Voice Control System, c&ugrave;ng khả năng kết nối đồng hồ với smartphone th&ocirc;ng qua Honda RoadSyns cho ph&eacute;p người sử dụng c&oacute; thể dễ d&agrave;ng điều khiển bằng giọng n&oacute;i c&aacute;c chức năng nghe nhạc, định vị, k&iacute;ch hoạt cuộc gọi hoặc nhận cuộc gọi, gửi v&agrave; nhận tin nhắn...C&aacute;c xe cũng đều c&oacute; k&egrave;m cổng sạc USB Type C gi&uacute;p sạc smartphone trong những trường hợp cần.&nbsp;</p>\r\n\r\n<p>Cả CB1000R Black Edition v&agrave; NC750X 2022 sẽ lập tức được b&aacute;n tại c&aacute;c đại l&yacute; Honda BigWing tại Th&aacute;i Lan với gi&aacute; b&aacute;n lần lượt l&agrave; 365,000 baht (khoảng 245 triệu đồng) v&agrave; 599,000 baht (khoảng 402 triệu đồng).&nbsp;</p>', 1, 'honda-2-1638414686-796-width640height4801638678520.jpg', 4),
(8, 'KTM trình làng bộ đôi quái thú \"hăm dọa\" đối thủ trong cùng phân khúc', '<p>Bộ đ&ocirc;i 1290 Super Duke R 2022 v&agrave; 1290 Super Duke R EVO 2022 đ&atilde; ch&iacute;nh thức tr&igrave;nh l&agrave;ng tại EICMA.</p>', '<p>Triễn l&atilde;m EICMA 2021 l&agrave; dịp để c&aacute;c h&atilde;ng ph&ocirc; trương sức mạnh của m&igrave;nh với những d&ograve;ng sản phẩm mới, v&agrave; KTM cũng kh&ocirc;ng nằm ngo&agrave;i xu hướng khi chọn đ&acirc;y l&agrave; nơi để giới thiệu 1290 Super Duke R 2022 v&agrave; 1290 Super Duke R EVO 2022.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"KTM trình làng bộ đôi quái thú &amp;#34;hăm dọa&amp;#34; đối thủ - 1\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02/ktm-1-1638417998-645-width660height440.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Để cho những ai chưa r&otilde; th&igrave; cả hai si&ecirc;u xe n&agrave;y đều c&oacute; thiết kế bề ngo&agrave;i tương tự nhau v&agrave; khối động cơ giống nhau. Điểm khiến phi&ecirc;n bản 1290 Super Duke R EVO kh&aacute;c với bản ti&ecirc;u chuẩn l&agrave; việc n&oacute; được trang bị hệ thống giảm x&oacute;c trước WP APEX Semi Active, tức l&agrave; c&oacute; thể điều chỉnh điện với 3 chế độ kh&aacute;c nhau. Ngo&agrave;i ra để c&oacute; thể tối ưu h&oacute;a trải nghiệm th&igrave; người sử dụng c&oacute; thể mua th&ecirc;m g&oacute;i Suspension Pro cho ph&eacute;p điều chỉnh tự động cả giảm s&oacute;c trước v&agrave; sau ngay trong qu&aacute; tr&igrave;nh vận h&agrave;nh.&nbsp;</p>\r\n\r\n<p><img alt=\"KTM trình làng bộ đôi quái thú &amp;#34;hăm dọa&amp;#34; đối thủ - 3\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02/ktm-2-1638418033-508-width660height440.jpg\" /></p>\r\n\r\n<p>Bộ đ&ocirc;i &quot;qu&aacute;i th&uacute;&quot; nh&agrave; KTM c&oacute; thiết kết kh&ocirc;ng kh&aacute;c biệt so với người tiền nhiệm tuy nhi&ecirc;n c&aacute;ch phối m&agrave;u c&oacute; phần hơi kh&aacute;c. Cụ thể, sẽ c&oacute; 2 phi&ecirc;n bản m&agrave;u mới l&agrave; xanh - cam v&agrave; cam - trắng, tuy nhi&ecirc;n v&agrave;nh xe thay v&igrave; m&agrave;u đen đ&atilde; được sơn cam nổi bật, c&ugrave;ng với c&aacute;c mảng m&agrave;u tr&ecirc;n th&acirc;n xe đ&atilde; được thay đổi gi&uacute;p xe tr&ocirc;ng nổi bật như một t&aacute;c phẩm nghệ thuật. Xe vẫn sử dụng đ&egrave;n pha k&eacute;p b&oacute;ng LED với họng h&uacute;t gi&oacute; nổi bật. Khung xe sử dụng ống th&eacute;p bản lớn trong khi khung phu đ&atilde; l&agrave; dạng hợp kim th&eacute;p ốp v&agrave;p đu&ocirc;i xe tạo tổng thể cực kỳ ấn tượng.&nbsp;</p>\r\n\r\n<p><img alt=\"KTM trình làng bộ đôi quái thú &amp;#34;hăm dọa&amp;#34; đối thủ - 4\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02/ktm-3-1638418071-87-width660height440.jpg\" /></p>\r\n\r\n<p>Về sức mạnh, cả hai chiếc 1290 Super Duke R 2022 đều được t&iacute;ch hợp động cơ V-Twin 75 độ với tổng dung t&iacute;ch xy lanh l&agrave; 1304cc sản sinh c&ocirc;ng suất tối đa tới 179,47 m&atilde; lực - đ&acirc;y l&agrave; khối động cơ mạnh nhất trong ph&acirc;n kh&uacute;c naked-bike tr&ecirc;n thị trường hiện nay. Ngo&agrave;i ra, si&ecirc;u m&ocirc; t&ocirc; cũng được trang bị bướm ga điện, c&ugrave;ng 3 chế độ l&aacute;i kh&aacute;c nhau gi&uacute;p người sử dụng t&ugrave;y chỉnh cho ph&ugrave; hợp với địa h&igrave;nh vận h&agrave;nh.&nbsp;</p>\r\n\r\n<p><img alt=\"KTM trình làng bộ đôi quái thú &amp;#34;hăm dọa&amp;#34; đối thủ - 5\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02/ktm-4-1638418088-547-width660height440.jpg\" /></p>\r\n\r\n<p><img alt=\"KTM trình làng bộ đôi quái thú &amp;#34;hăm dọa&amp;#34; đối thủ - 6\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02/ktm-5-1638418098-655-width660height440.jpg\" /></p>\r\n\r\n<p><img alt=\"KTM trình làng bộ đôi quái thú &amp;#34;hăm dọa&amp;#34; đối thủ - 7\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02/ktm-6-1638418108-839-width660height440.jpg\" /></p>\r\n\r\n<p><img alt=\"KTM trình làng bộ đôi quái thú &amp;#34;hăm dọa&amp;#34; đối thủ - 8\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02/ktm-7-1638418117-461-width660height440.jpg\" /></p>\r\n\r\n<p>Hiện tại, h&atilde;ng xe &Aacute;o chưa tiết lộ gi&aacute; b&aacute;n cũng như thời điểm b&aacute;n cụ thể, tuy nhi&ecirc;n dự kiến trong th&aacute;ng 1/2022 th&igrave; 1290 Super Duke R 2022 &nbsp;sẽ sẵn c&oacute; tại c&aacute;c showroom KTM ở ch&acirc;u &Acirc;u. C&ograve;n phi&ecirc;n bản 1290 Super Duke R EVO 2022 sẽ c&oacute; thể tới giữa năm 2022 mới được b&aacute;n ra.&nbsp;</p>', 1, 'ktm-3-1638418398-352-width640height4801638678570.jpg', 4),
(9, 'Cận cảnh mô tô cổ điển Royal Enfield Classic 350 2022, giá từ 94 triệu đồng', '<p>M&ocirc; t&ocirc; cổ điển Royal Enfield Classic 350 2022 ch&iacute;nh thức ra mắt tại Th&aacute;i Lan c&oacute; gi&aacute; khởi điểm từ 139.900 baht (khoảng 94,1 triệu đồng).</p>', '<p>Royal Enfield Classic 350 l&agrave; một mẫu m&ocirc; t&ocirc; hạng trung của Royal vẫn trang bị khung gầm cổ điển nhưng thiết kế ho&agrave;n to&agrave;n mới, mạnh mẽ v&agrave; linh hoạt hơn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Cận cảnh mô tô cổ điển Royal Enfield Classic 350 2022, giá từ 94 triệu đồng - 1\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02//1638413268-img-bgt-2021-20-royal-enfield-classic-350-launches-in-thailand-1638265525-width1280height720-width700height393.jpeg\" width=\"660\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Royal Enfield Classic 350 2022 ra mắt tại Th&aacute;i Lan với 4 phi&ecirc;n bản</p>\r\n\r\n<p>C&aacute;c trang bị ti&ecirc;u chuẩn tr&ecirc;n xe bao gồm: đ&egrave;n pha halogen truyền thống, khung gầm ống đ&ocirc;i, b&igrave;nh xăng h&igrave;nh giọt nước mắt rất cuốn h&uacute;t, thanh tay l&aacute;i rộng hơn, thanh tay vịn sau cứng c&aacute;p.</p>\r\n\r\n<p><img alt=\"Cận cảnh mô tô cổ điển Royal Enfield Classic 350 2022, giá từ 94 triệu đồng - 3\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02//1638413268-img-bgt-2021-13-royal-enfield-classic-350-launches-in-thailand-1638265555-width1280height720-width700height393.jpeg\" width=\"660\" /></p>\r\n\r\n<p>Đ&aacute;ng ch&uacute; &yacute;,&nbsp;<a href=\"https://www.24h.com.vn/royal-enfield-c748e6339.html\" title=\"Royal Enfield\">Royal Enfield</a>&nbsp;Classic 350 2022 trang bị cụm đồng hồ analogue mới kết hợp với m&agrave;n h&igrave;nh LCD v&agrave; c&oacute; một ổ sạc USB tiện lợi dưới cần ga.</p>\r\n\r\n<p><img alt=\"Cận cảnh mô tô cổ điển Royal Enfield Classic 350 2022, giá từ 94 triệu đồng - 4\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02//1638413268-img-bgt-2021-15-royal-enfield-classic-350-launches-in-thailand-1638265570-width1280height720-width700height393.jpeg\" width=\"660\" /></p>\r\n\r\n<p>Trọng lượng của Royal Enfield Classic 350 2022 l&agrave; 195 kg trong khi b&igrave;nh xăng c&oacute; dung t&iacute;ch 13 l&iacute;t.</p>\r\n\r\n<p><img alt=\"Cận cảnh mô tô cổ điển Royal Enfield Classic 350 2022, giá từ 94 triệu đồng - 5\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02//1638413268-img-bgt-2021-17-royal-enfield-classic-350-launches-in-thailand-1638265585-width1280height720-width700height393.jpeg\" width=\"660\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sức mạnh xe đến từ loại động cơ đơn xy lanh, dung t&iacute;ch 349cc, cho c&ocirc;ng suất tối đa 20,2 m&atilde; lực tại 6.100 v&ograve;ng/ph&uacute;t v&agrave; m&ocirc;-men xoắn cực đại 27 Nm tại 4.000 v&ograve;ng/ph&uacute;t, đi k&egrave;m với hộp số 5 cấp, tương tự như bản tại Ấn Độ.</p>\r\n\r\n<p><img alt=\"Cận cảnh mô tô cổ điển Royal Enfield Classic 350 2022, giá từ 94 triệu đồng - 6\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02//1638413268-img-bgt-2021-21-royal-enfield-classic-350-launches-in-thailand-1638265603-width1280height720-width700height393.jpeg\" width=\"660\" /></p>\r\n\r\n<p>Royal Enfield Classic 350 2022 c&oacute; 4 phi&ecirc;n bản gồm: Hasion, Classic, Dark v&agrave; Chrome.</p>\r\n\r\n<p><img alt=\"Cận cảnh mô tô cổ điển Royal Enfield Classic 350 2022, giá từ 94 triệu đồng - 7\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02//1638413268-img-bgt-2021-26-royal-enfield-classic-350-launches-in-thailand-1638265618-width1280height720-width700height393.jpeg\" width=\"660\" /></p>\r\n\r\n<p>Trong đ&oacute;, phi&ecirc;n bản Hasion c&oacute; gi&aacute; b&aacute;n 139.900 baht (khoảng 94,1 triệu đồng), phi&ecirc;n bản Classic c&oacute; gi&aacute; 147.000 baht (khoảng 98,9 triệu đồng).</p>\r\n\r\n<p><img alt=\"Cận cảnh mô tô cổ điển Royal Enfield Classic 350 2022, giá từ 94 triệu đồng - 8\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02//1638413268-img-bgt-2021-32-royal-enfield-classic-350-launches-in-thailand-1638265643-width1280height720-width700height393.jpeg\" width=\"660\" /></p>\r\n\r\n<p>Phi&ecirc;n bản Dark c&oacute; gi&aacute; 154.000 baht (khoảng 103,6 triệu đồng) v&agrave; cao cấp nhất l&agrave; phi&ecirc;n bản Chrome c&oacute; gi&aacute; 155.000 baht (khoảng 104, 3 triệu đồng).</p>\r\n\r\n<p>Xem th&ecirc;m một số h&igrave;nh ảnh của Royal Enfield Classic 350 2022 tại Th&aacute;i Lan:</p>\r\n\r\n<p><img alt=\"Cận cảnh mô tô cổ điển Royal Enfield Classic 350 2022, giá từ 94 triệu đồng - 9\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02//1638413269-img-bgt-2021-27-royal-enfield-classic-350-launches-in-thailand-1638265811-width1259height763-width700height424.jpeg\" width=\"660\" /></p>\r\n\r\n<p><img alt=\"Cận cảnh mô tô cổ điển Royal Enfield Classic 350 2022, giá từ 94 triệu đồng - 10\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02//1638413269-img-bgt-2021-28-royal-enfield-classic-350-launches-in-thailand-1638265811-width1259height839-width700height466.jpeg\" width=\"660\" /></p>\r\n\r\n<p><img alt=\"Cận cảnh mô tô cổ điển Royal Enfield Classic 350 2022, giá từ 94 triệu đồng - 11\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02//1638413269-img-bgt-2021-29-royal-enfield-classic-350-launches-in-thailand-1638265811-width1259height983-width700height546.jpeg\" width=\"660\" /></p>\r\n\r\n<p><img alt=\"Cận cảnh mô tô cổ điển Royal Enfield Classic 350 2022, giá từ 94 triệu đồng - 12\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02//1638413269-img-bgt-2021-30-royal-enfield-classic-350-launches-in-thailand-1638265811-width1259height800-width700height444.jpeg\" width=\"660\" /></p>\r\n\r\n<p><img alt=\"Cận cảnh mô tô cổ điển Royal Enfield Classic 350 2022, giá từ 94 triệu đồng - 13\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02//1638413269-img-bgt-2021-31-royal-enfield-classic-350-launches-in-thailand-1638265811-width1259height1079-width700height599.jpeg\" width=\"660\" /></p>\r\n\r\n<p><img alt=\"Cận cảnh mô tô cổ điển Royal Enfield Classic 350 2022, giá từ 94 triệu đồng - 14\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02//1638413269-img-bgt-2021-33-royal-enfield-classic-350-launches-in-thailand-1638265811-width1259height973-width700height540.jpeg\" width=\"660\" /></p>\r\n\r\n<p><img alt=\"Cận cảnh mô tô cổ điển Royal Enfield Classic 350 2022, giá từ 94 triệu đồng - 15\" src=\"https://cdn.24h.com.vn/upload/4-2021/images/2021-12-02//1638413269-img-bgt-2021-34-royal-enfield-classic-350-launches-in-thailand-1638265811-width1259height718-width700height399.jpeg\" width=\"660\" /></p>', 1, 'adt1638413267-img-bgt-2021-img-bgt-2021-img-bgt-201638678613.jpeg', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) UNSIGNED NOT NULL,
  `brand_id` int(11) UNSIGNED NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `category_id`, `brand_id`, `product_desc`, `product_content`, `product_price`, `product_image`, `product_color`, `product_status`, `created_at`, `updated_at`) VALUES
(1, 'Winner X', 1, 1, '<p>Một sản phẩm của h&atilde;ng Honda</p>', '<table class=\"Table\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Khối lượng bản th&acirc;n</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Phi&ecirc;n bản phanh thường: 123kg Phi&ecirc;n bản phanh ABS: 124kg</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">D&agrave;i x Rộng x Cao&nbsp;</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">2.019 x 727 x 1.088 mm</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Khoảng c&aacute;ch trục b&aacute;nh xe</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">1.278 mm</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Độ cao y&ecirc;n</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">795 mm</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Khoảng s&aacute;ng gầm xe</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">150 mm</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Dung t&iacute;ch b&igrave;nh xăng</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">4,5 lít</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">K&iacute;ch cỡ lớp trước/ sau</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Trước: 90/80-17M/C 46P Sau: 120/70-17M/C 58P</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Phuộc trước</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&Ocirc;́ng l&ocirc;̀ng, giảm chấn thủy lực</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Phuộc sau</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">L&ograve; xo trụ đơn</span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Loại động cơ</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">PGM-FI, 4 kỳ, DOHC, xy-lanh đơn, c&ocirc;n 6 số, l&agrave;m m&aacute;t bằng dung dịch</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">C&ocirc;ng suất tối đa</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">11,5kW/9.000 vòng/phút</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Dung t&iacute;ch nhớt m&aacute;y</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">1,1 l&iacute;t khi thay nhớt 1,3 l&iacute;t khi r&atilde; m&aacute;y</span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Mức ti&ecirc;u thụ nhi&ecirc;n liệu</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">1,70 l&iacute;t/100km</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Loại truyền động</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">C&ocirc;n tay 6 số</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Hệ thống khởi động</span></span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Điện</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Moment cực đại</span></span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">13,5Nm/6.500 vòng/phút</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Dung t&iacute;ch xy-lanh</span></strong> </span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">149,1 cm3</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Đường k&iacute;nh x H&agrave;nh tr&igrave;nh p&iacute;t t&ocirc;ng</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">57,3 mm x 57,8 mm</span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Tỷ số n&eacute;n</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">11,3:1</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '46990000', 'product-winner1638258287.jpg', 'Đỏ đen', 1, NULL, NULL),
(2, 'Exciter', 1, 2, '<p>Một sản phẩm của h&atilde;ng Yamaha</p>', '<p>Một sản phẩm của h&atilde;ng Yamaha</p>', '46990000', 'product-exciter1638258396.jpg', 'Đen', 1, NULL, NULL),
(3, 'MT-05', 1, 2, '<p>Một sản phẩm của h&atilde;ng Yamaha</p>', '<p>Một sản phẩm của h&atilde;ng Yamaha</p>', '70000000', 'product-mt-151638258736.jpg', 'Xanh', 1, NULL, NULL),
(4, 'Winner X', 1, 1, '<p>Một sản phẩm của h&atilde;ng Honda</p>', '<table class=\"Table\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Khối lượng bản th&acirc;n</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Phi&ecirc;n bản phanh thường: 123kg Phi&ecirc;n bản phanh ABS: 124kg</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">D&agrave;i x Rộng x Cao&nbsp;</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">2.019 x 727 x 1.088 mm</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Khoảng c&aacute;ch trục b&aacute;nh xe</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">1.278 mm</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Độ cao y&ecirc;n</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">795 mm</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Khoảng s&aacute;ng gầm xe</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">150 mm</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Dung t&iacute;ch b&igrave;nh xăng</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">4,5 lít</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">K&iacute;ch cỡ lớp trước/ sau</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Trước: 90/80-17M/C 46P Sau: 120/70-17M/C 58P</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Phuộc trước</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&Ocirc;́ng l&ocirc;̀ng, giảm chấn thủy lực</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Phuộc sau</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">L&ograve; xo trụ đơn</span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Loại động cơ</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">PGM-FI, 4 kỳ, DOHC, xy-lanh đơn, c&ocirc;n 6 số, l&agrave;m m&aacute;t bằng dung dịch</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">C&ocirc;ng suất tối đa</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">11,5kW/9.000 vòng/phút</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Dung t&iacute;ch nhớt m&aacute;y</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">1,1 l&iacute;t khi thay nhớt 1,3 l&iacute;t khi r&atilde; m&aacute;y</span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Mức ti&ecirc;u thụ nhi&ecirc;n liệu</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">1,70 l&iacute;t/100km</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Loại truyền động</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">C&ocirc;n tay 6 số</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Hệ thống khởi động</span></span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Điện</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Moment cực đại</span></span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">13,5Nm/6.500 vòng/phút</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Dung t&iacute;ch xy-lanh</span></strong> </span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">149,1 cm3</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Đường k&iacute;nh x H&agrave;nh tr&igrave;nh p&iacute;t t&ocirc;ng</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">57,3 mm x 57,8 mm</span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Tỷ số n&eacute;n</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">11,3:1</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '46990000', 'product-winner1638258287.jpg', 'Đỏ đen', 1, NULL, NULL),
(5, 'Exciter', 1, 2, '<p>Một sản phẩm của h&atilde;ng Yamaha</p>', '<p>Một sản phẩm của h&atilde;ng Yamaha</p>', '46990000', 'product-exciter1638258396.jpg', 'Đen', 1, NULL, NULL),
(6, 'MT-05', 1, 2, '<p>Một sản phẩm của h&atilde;ng Yamaha</p>', '<p>Một sản phẩm của h&atilde;ng Yamaha</p>', '70000000', 'product-mt-151638258736.jpg', 'Xanh', 1, NULL, NULL),
(7, 'Winner X', 1, 1, '<p>Một sản phẩm của h&atilde;ng Honda</p>', '<table class=\"Table\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Khối lượng bản th&acirc;n</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Phi&ecirc;n bản phanh thường: 123kg Phi&ecirc;n bản phanh ABS: 124kg</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">D&agrave;i x Rộng x Cao&nbsp;</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">2.019 x 727 x 1.088 mm</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Khoảng c&aacute;ch trục b&aacute;nh xe</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">1.278 mm</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Độ cao y&ecirc;n</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">795 mm</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Khoảng s&aacute;ng gầm xe</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">150 mm</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Dung t&iacute;ch b&igrave;nh xăng</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">4,5 lít</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">K&iacute;ch cỡ lớp trước/ sau</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Trước: 90/80-17M/C 46P Sau: 120/70-17M/C 58P</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Phuộc trước</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&Ocirc;́ng l&ocirc;̀ng, giảm chấn thủy lực</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Phuộc sau</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">L&ograve; xo trụ đơn</span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Loại động cơ</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">PGM-FI, 4 kỳ, DOHC, xy-lanh đơn, c&ocirc;n 6 số, l&agrave;m m&aacute;t bằng dung dịch</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">C&ocirc;ng suất tối đa</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">11,5kW/9.000 vòng/phút</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Dung t&iacute;ch nhớt m&aacute;y</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">1,1 l&iacute;t khi thay nhớt 1,3 l&iacute;t khi r&atilde; m&aacute;y</span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Mức ti&ecirc;u thụ nhi&ecirc;n liệu</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">1,70 l&iacute;t/100km</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Loại truyền động</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">C&ocirc;n tay 6 số</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Hệ thống khởi động</span></span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Điện</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Moment cực đại</span></span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">13,5Nm/6.500 vòng/phút</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Dung t&iacute;ch xy-lanh</span></strong> </span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">149,1 cm3</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Đường k&iacute;nh x H&agrave;nh tr&igrave;nh p&iacute;t t&ocirc;ng</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">57,3 mm x 57,8 mm</span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\">Tỷ số n&eacute;n</span></strong></span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">11,3:1</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '46990000', 'product-winner1638258287.jpg', 'Đỏ đen', 1, NULL, NULL),
(8, 'Exciter', 1, 2, '<p>Một sản phẩm của h&atilde;ng Yamaha</p>', '<p>Một sản phẩm của h&atilde;ng Yamaha</p>', '46990000', 'product-exciter1638258396.jpg', 'Đen', 1, NULL, NULL),
(9, 'MT-05', 1, 2, '<p>Một sản phẩm của h&atilde;ng Yamaha</p>', '<p>Một sản phẩm của h&atilde;ng Yamaha</p>', '70000000', 'product-mt-151638258736.jpg', 'Xanh', 1, NULL, NULL),
(10, 'Napoli - Nón Bảo Hiểm 3/4 Napoli Vàng Nhám Nâu', 2, 4, '<p>Một sản phẩm của h&atilde;ng Napoli</p>', '<p><strong>TH&Ocirc;NG SỐ KỸ THUẬT&nbsp; :</strong></p>\r\n\r\n<p>H&atilde;ng : Napoli ( S&oacute;ng H&ugrave;ng )</p>\r\n\r\n<p>Chất liệu : Nhựa ABS</p>\r\n\r\n<p>C&acirc;n nặng : 950 gr</p>\r\n\r\n<p>Ti&ecirc;u chuẩn : QUATEST III</p>\r\n\r\n<p>Thiết kế : Trẻ trung năng động</p>\r\n\r\n<p>Size :&nbsp; Free Size ( 54-59cm )</p>', '279000', 'product-napolivang1638762877.jpg', 'Vàng nhám Nâu', 1, NULL, NULL),
(11, 'Napoli - Nón Bảo Hiểm 3/4 Napoli 039A Xanh Rêu', 2, 4, '<p>Một sản phẩm của h&atilde;ng Napoli</p>', '<p><strong>Th&ocirc;ng số kỹ thuật :</strong></p>\r\n\r\n<p>&ndash; Kiểu: Mũ 3/4 1 K&iacute;nh</p>\r\n\r\n<p>&ndash; K&iacute;ch cỡ: 56cm- 59cm ( Size L )</p>\r\n\r\n<p>&ndash; Trọng lượng: 950g</p>\r\n\r\n<p>&ndash; Vật liệu: Nhựa tổng hợp ABS</p>\r\n\r\n<p>&ndash; M&agrave;u sắc : Đen nh&aacute;m c&oacute; k&iacute;nh</p>\r\n\r\n<p>N&oacute;n bảo hiểm 3/4 Napoli 039A l&agrave; d&ograve;ng mũ Napoli cao cấp được sản xuất v&agrave;o đầu năm 2021 c&oacute; nhiều t&iacute;nh năng th&acirc;n thiện với người d&ugrave;ng như: l&oacute;p l&oacute;t n&oacute;n tho&aacute;ng kh&iacute;, kho&aacute;ng khuẩn, k&iacute;nh chắn gi&oacute; c&oacute; t&aacute;c dụng chống bụi, chống tia UV, c&oacute; hệ thống th&ocirc;ng kh&iacute;.</p>', '350000', 'product-napoli039Axanhreu1638763076.jpg', 'Xanh rêu', 1, NULL, NULL),
(12, 'Royal - Nón bảo hiểm fullface Royal M02 đen đỏ', 2, 5, '<p>Một sản phẩm của h&atilde;ng Royal</p>', '<p>- Vỏ bằng nhựa ABS nguy&ecirc;n sinh<br />\r\n- Trọng lượng: 1500g &plusmn; 50g<br />\r\n- Size: XL (57-59cm)</p>\r\n\r\n<p><strong>Mũ&nbsp;bảo hiểm Royal M02&nbsp;</strong>do c&ocirc;ng ty Mafa sản xuất.&nbsp;</p>\r\n\r\n<p><strong>ĐẶC ĐIỂM&nbsp;ROYAL M02:</strong></p>\r\n\r\n<ul>\r\n	<li>Vỏ bằng nhựa ABS nguy&ecirc;n sinh - l&agrave; loại nhựa tinh khiết chưa qua sử dụng, được sử dụng cho c&aacute;c sản phẩm ti&ecirc;u chuẩn an to&agrave;n cao vỏ thiết bị y tế, dược phẩm, vỏ m&aacute;y bay.... c&oacute; độ bền cao v&agrave; chịu va đập tốt.</li>\r\n	<li>Phần đệm l&oacute;t b&ecirc;n trong&nbsp;n&oacute;n c&ograve;n c&oacute; lớp vải kh&aacute;ng khuẩn, chống ẩm, rất tốt cho việc bảo vệ chiếc n&oacute;n khỏi m&ugrave;i h&ocirc;i, ẩm mốc</li>\r\n	<li>Vẻ đẹp huyền b&iacute;, sang trọng với những hoạ tiết độc đ&aacute;o, thiết kế nắp chụp mới lạ</li>\r\n</ul>\r\n\r\n<p><strong>ROYAL HELMET - ĐẲNG CẤP - SANG TRỌNG - AN TO&Agrave;N</strong></p>', '560000', 'product-royalM02dendo1638763144.jpg', 'Đen Đỏ', 1, NULL, NULL),
(13, 'Royal - Nón bảo hiểm fullface Royal M141', 2, 5, '<p>Một sản phẩm của h&atilde;ng Royal</p>', '<p>- Vỏ bằng nhựa ABS nguy&ecirc;n sinh &nbsp;<br />\r\n- Trọng lượng: 1200g &plusmn; 50g<br />\r\n- size L: 56 - 57cm &nbsp;- size XL: 58 - 59cm</p>\r\n\r\n<p><strong>N&oacute;n bảo hiểm Royal M141&nbsp;</strong>do c&ocirc;ng ty Mafa sản xuất. Thương hiệu n&oacute;n Royal ra đời năm 2008 do &ocirc;ng Mai Văn Thuận s&aacute;ng lập. Với mục ti&ecirc;u sản xuất ra những chiếc n&oacute;n chất lượng nhất, đ&aacute;p ứng nhu cầu ng&agrave;y c&agrave;ng cao kh&ocirc;ng chỉ của người d&ugrave;ng ở Việt Nam v&agrave; cả ở thị trường thế giới.</p>\r\n\r\n<p><strong>ĐẶC ĐIỂM&nbsp;ROYAL M141:</strong></p>\r\n\r\n<ul>\r\n	<li>Vỏ bằng nhựa ABS nguy&ecirc;n sinh - l&agrave; loại nhựa tinh khiết chưa qua sử dụng, được sử dụng cho c&aacute;c sản phẩm ti&ecirc;u chuẩn an to&agrave;n cao vỏ thiết bị y tế, dược phẩm, vỏ m&aacute;y bay.... c&oacute; độ bền cao v&agrave; chịu va đập tốt.</li>\r\n	<li>Phần đệm l&oacute;t b&ecirc;n trong&nbsp;n&oacute;n c&ograve;n c&oacute; lớp vải kh&aacute;ng khuẩn, chống ẩm, rất tốt cho việc bảo vệ chiếc n&oacute;n khỏi m&ugrave;i h&ocirc;i, ẩm mốc</li>\r\n	<li>Vẻ đẹp huyền b&iacute;, sang trọng với những hoạ tiết độc đ&aacute;o.&nbsp;</li>\r\n	<li>Trọng lượng: 1200g &plusmn; 50g&nbsp;- size L: 56 - 57cm&nbsp;&nbsp;- size XL: 58 - 59cm&nbsp;</li>\r\n</ul>\r\n\r\n<p><em><strong>ROYAL HELMET - ĐẲNG CẤP - SANG TRỌNG V&Agrave; AN TO&Agrave;N</strong></em></p>', '1085000', 'product-royalM1411638763189.jpg', 'Đen nhám', 1, NULL, NULL),
(14, 'Pole Racing - Áo mua bộ Pole Racing – AR801', 3, 6, '<p>Một sản phẩm của Pole Racing</p>', '<p>&ndash; Thương hiệu: Pole<br />\r\n&ndash; Model: Pole Racing 801<br />\r\n&ndash; Xuất xứ: H&agrave;n Quốc<br />\r\n&ndash; Sản xuất: Trung Quốc<br />\r\n&ndash; Chất liệu: 100% Polyester + 100% PVC + 100% PU<br />\r\n&ndash; Cấu tạo: 3 lớp chống thấm<br />\r\n&ndash; Thấm nước: 5000mm / 24h</p>', '750000', 'product-poleracingar8011638763280.jpg', 'Đen + Xanh phản quang', 1, NULL, NULL),
(15, 'Pole Racing - Áo mưa bộ Pole Racing – AR820', 3, 6, '<p>Một sản phẩm của h&atilde;ng Pole Racing</p>', '<p>&ndash; Thương hiệu: Pole<br />\r\n&ndash; Model: Pole Racing AR820<br />\r\n&ndash; Xuất xứ: H&agrave;n Quốc<br />\r\n&ndash; Sản xuất: Trung Quốc<br />\r\n&ndash; Chất liệu: 100% Polyester + 100% PVC + 100% PU (210T Polyester) &ndash; Si&ecirc;u mỏng<br />\r\n&ndash; Cấu tạo: 1 lớp chống thấm<br />\r\n&ndash; Thấm nước: 5000mm / 24h</p>', '1090000', 'product-poleracingar8201638763331.jpg', 'Đen + Xanh phản quang', 1, NULL, NULL),
(16, 'Mad- Găng tay cụt ngón Mad 06h', 3, 7, '<p>Một sản phẩm của h&atilde;ng Mad</p>', '<p>abc</p>', '310000', 'product-mad06h1638763391.jpg', 'Đen', 1, NULL, NULL),
(17, 'Mad - Găng tay cụt ngón Mad SK-05', 3, 7, '<p>Một sản phẩm của h&atilde;ng Mad</p>', '<p>abc</p>', '260000', 'product-madsk051638763445.jpg', 'Xám Trắng', 1, NULL, NULL),
(18, 'Mad - Găng tay cụt ngón Mad SK-06', 3, 7, '<p>Một sản phẩm của h&atilde;ng Mad</p>', '<p>abc</p>', '190000', 'product-madsk061638763479.jpg', 'Đen', 1, NULL, NULL),
(19, 'Mad - Găng tay cụt ngón Mad-10cs', 3, 7, '<p>Một sản phẩm của h&atilde;ng Mad</p>', '<p>abc</p>', '220000', 'product-mad10cs1638763524.jpg', 'Đen', 1, NULL, NULL),
(20, 'Monter - Găng tay cụt ngón Monter', 3, 8, '<p>Một sản phẩm của h&atilde;ng Monster</p>', '<p>abc</p>', '130000', 'product-monter1638763571.jpg', 'Đen Xanh', 1, NULL, NULL),
(21, 'Scoyco  - Găng tay cụt ngón Scoyco MC24D', 3, 9, '<p>Một sản phẩm của h&atilde;ng Scoyco</p>', '<p>&ndash; Thương hiệu: Scoyco<br />\r\n&ndash; Xuất xứ: Trung Quốc<br />\r\n&ndash; Model: MC24D<br />\r\n&ndash; Chất liệu: Nylon, Polyeste<br />\r\n&ndash; Trọng lượng: 200g<br />\r\n&nbsp;</p>', '240000', 'product-ScoycoMC24D1638763630.jpg', 'Đen', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `shipping_name`, `shipping_address`, `shipping_phone`, `shipping_email`, `shipping_notes`, `created_at`, `updated_at`) VALUES
(1, 'Tạ Ngô Quốc Quân', 'TP.Quy Nhơn', '0902062052', 'quanta23122@gmail.com', 'Hàng dễ vỡ', NULL, NULL),
(2, 'Tạ Ngô Quốc Quân', 'TP.Quy Nhơn', '0902062052', 'quanta23122@gmail.com', 'hàng dễ vỡ', NULL, NULL),
(3, 'Tạ Ngô Quốc Quân', 'TP.Quy Nhơn', '0902062052', 'quanta23122@gmail.com', 'dễ vỡ 2', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_name` varchar(255) NOT NULL,
  `slider_status` int(11) NOT NULL,
  `slider_image` varchar(100) NOT NULL,
  `slider_desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_name`, `slider_status`, `slider_image`, `slider_desc`) VALUES
(2, 'winnerx', 1, 'sld11638006627.jpg', 'Một sản phẩm của hãng Honda'),
(3, 'Exciter', 1, 'sld61638183615.jpg', 'Một sản phẩm của hãng Yamaha'),
(4, 'MT-05', 1, 'sld71638183648.jpg', 'Một sản phẩm của hãng Yamaha');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_category_post`
--
ALTER TABLE `tbl_category_post`
  ADD PRIMARY KEY (`cate_post_id`);

--
-- Chỉ mục cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Chỉ mục cho bảng `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`,`shipping_id`,`payment_id`),
  ADD KEY `shipping_id` (`shipping_id`),
  ADD KEY `payment_id` (`payment_id`);

--
-- Chỉ mục cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`),
  ADD KEY `order_id` (`order_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Chỉ mục cho bảng `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `cate_post_id` (`cate_post_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`,`brand_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Chỉ mục cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_category_post`
--
ALTER TABLE `tbl_category_post`
  MODIFY `cate_post_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_order_ibfk_2` FOREIGN KEY (`shipping_id`) REFERENCES `tbl_shipping` (`shipping_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_order_ibfk_3` FOREIGN KEY (`payment_id`) REFERENCES `tbl_payment` (`payment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD CONSTRAINT `tbl_order_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_order_details_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `tbl_order` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD CONSTRAINT `tbl_posts_ibfk_1` FOREIGN KEY (`cate_post_id`) REFERENCES `tbl_category_post` (`cate_post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tbl_category_product` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_product_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `tbl_brand` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
