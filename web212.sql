-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 01:58 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web212`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Trái cây'),
(2, 'Thịt'),
(3, 'Rau củ quả'),
(4, 'Thủy hải sản');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`) VALUES
(101, 'PHAN NGỌC YẾN NHI'),
(102, 'NGUYỄN TRẦN MINH HUỆ '),
(103, 'LÊ HOÀNG NAM'),
(104, 'LÊ THỊ TẾT'),
(105, 'LÊ THỊ NGỌC THANH'),
(106, 'NGUYỄN THỊ THÚY LOAN'),
(107, 'NGUYỄN THỊ KIM HOÀNG'),
(108, 'NGUYỄN THỊ KIM YẾN'),
(109, 'HUỲNH VĂN ẢNH'),
(110, 'NGUYỄN TẤN DƯƠNG'),
(111, 'LÊ VẠN PHƯỚC'),
(112, 'NGUYỄN THANH TÀI'),
(113, 'LÊ NGỌC LỜI'),
(114, 'LÊ NGUYỄN HÙNG PHONG'),
(115, 'NGUYỄN THANH YẾN VY'),
(116, 'HUỲNH VĂN CHÍNH'),
(117, 'PHẠM MỸ XƯƠNG'),
(118, 'VĂN CÔNG ĐỂ'),
(119, 'HUỲNH THỊ THANH GIẶP'),
(120, 'HUỲNH CÔNG LIÊM'),
(121, 'ĐĂNG NGỌC THANH TÂM'),
(122, 'CAO THỊ NGUYỆT'),
(123, 'PHẠM THỊ ÁNH LOAN'),
(124, 'ĐẶNG LỆ HÀ'),
(125, 'GIANG HÙNG ĐẠT'),
(126, 'PHAN THỊ HỒNG PHƯỢNG'),
(127, 'NGUYỄN HOÀNG GIANG'),
(128, 'ĐẶNG QUỐC TOÀN'),
(129, ' HỒ THỊ CẢNH'),
(130, 'TRƯƠNG THỊ AN'),
(131, 'ĐỖ THỊ THÚY KIỀU'),
(132, 'NGUYỄN THANH QUỐC HƯNG'),
(133, 'HUỲNH THỊ ÚT'),
(134, 'NGUYỄN HOÀ̀NG KHÁNH DUY'),
(135, 'NGUYỄN THỊ BẢY'),
(136, 'HUỲNH NGỌC HƯNG'),
(137, 'TRƯƠNG HOÀNG THÁI'),
(138, 'NGUYỄN THỊ BÍCH DU'),
(139, 'LÊ VÕ TUẤN AN'),
(140, 'PHẠM VĂN HỌC'),
(141, 'VÕ THỊ PHƯƠNG NAM'),
(142, 'LÊ NGỌ̣C THƯƠNG'),
(143, 'HUỲNH TẤN KHƯƠNG'),
(144, 'VÕ THỊ HOÀNG'),
(145, 'NGUYỄN VÕ HOÀNG PHÚC'),
(146, 'NGUYỄN THỊ THANH'),
(147, 'NGUYỄN THỊ TÁM'),
(148, 'NGUYỄN VĂM MƯỜI'),
(149, 'VÕ NGUYỄN BẢO NGỌC'),
(150, 'VÕ VĂN TRƯỜNG');

-- --------------------------------------------------------

--
-- Table structure for table `orderr`
--

CREATE TABLE `orderr` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `intro` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `quantity`, `price`, `avatar`, `category_id`, `intro`) VALUES
(11, 'Dưa lưới vỏ xanh', 10, 45000, '/products/11.png', 1, 'Quả tròn, thịt màu cam, rất thơm và ngọt, độ đường 14 - 15%, trái nặng 1,3 - 1,5 kg.'),
(12, 'Dưa hoàng kim', 20, 40000, '/products/12.png', 1, 'Dưa Vàng Kim Hoàng Hậu. Trọng lượng quả 1,8kg/quả. Độ Brix >= 14.'),
(13, 'Nho xanh không hạt', 25, 250000, '/products/13.png', 1, 'Nho xanh Úc là một trong những giống nho phổ biến và được yêu thích nhất hiện nay, phần vỏ màu xanh lá cây khi chín ngả sang màu vàng, quả hình bầu dục, thịt dày chắc ngọt, nhiều nước và không có hạt.'),
(14, 'Kiwi vàng Úc', 30, 250000, '/products/14.png', 1, 'Kiwi vàng có thịt quả màu vàng trong rất đẹp mắt, với nhiều hạt đen tạo thành 1 vòng tròn xung quanh trục dọc của quả. Kiwi vàng có vị ngọt thanh mát rất đặc trưng.'),
(21, 'Thịt lợn mán', 10, 160000, '/products/21.png', 2, 'Thịt lợn sạch, được cho ăn thức ăn thiên nhiên.'),
(22, 'Sụn Úc', 20, 75000, '/products/22.png', 2, 'Sụn nhập từ Úc, bảo quản qua quy trình chuyên nghiệp.'),
(23, 'Sườn già', 30, 60000, '/products/23.png', 2, 'Sườn già tươi mổ trong ngày.'),
(24, 'Ba chỉ bò Mỹ', 40, 160000, '/products/24.png', 2, 'Ba chỉ bò Mỹ thái cuộn.'),
(31, 'Bí xanh', 10, 10000, '/products/31.png', 3, 'Bí sạch không thuốc trừ sâu.'),
(32, 'Rau cải kale', 20, 25000, '/products/32.png', 3, 'Rau sạch không thuốc trừ sâu.'),
(33, 'Bắp cải Sapa', 30, 45000, '/products/33.png', 3, 'Bắp cải sạch không thuốc trừ sâu.'),
(34, 'Rau cải mèo', 40, 55000, '/products/34.png', 3, 'Rau cải sạch không thuốc trừ sâu.'),
(41, 'Ốc giác', 10, 185000, '/products/41.png', 4, 'Ốc tươi mới đánh bắt.'),
(42, 'Cua Cà Mau', 20, 339000, '/products/42.png', 4, 'Cua tươi mới đánh bắt.'),
(43, 'Râu bạch tuộc', 30, 50000, '/products/43.png', 4, 'Bạch tuộc tươi mới đánh bắt.'),
(44, 'Tôm sú', 40, 45000, '/products/44.png', 4, 'Tôm sú mới đánh bắt.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('customer','admin') DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `phone`, `password`, `role`) VALUES
(3, 'Customer', 'customer@gmail.com', '0123156789', '123456', 'customer');

INSERT INTO `user` (`user_id`, `user_name`, `email`, `phone`, `password`, `role`) VALUES
(2, 'Lam', 'lmtran29@gmail.com', '0123456789', '123456', 'admin');

INSERT INTO `user` (`user_id`, `user_name`, `email`, `phone`, `password`, `role`) VALUES
(1, 'Hoa', 'hoatran@gmail.com', '0123456789', '123456', 'admin');

INSERT INTO `user` (`user_id`, `user_name`, `email`, `phone`, `password`, `role`) VALUES
(4, 'Phong', 'phongnguyen@gmail.com', '0123456789', '123456', 'admin');

INSERT INTO `user` (`user_id`, `user_name`, `email`, `phone`, `password`, `role`) VALUES
(5, 'Hoan', 'hoanphan@gmail.com', '0123456789', '123456', 'admin');


--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `after_insert_user` AFTER INSERT ON `user` FOR EACH ROW IF new.role ="customer" 
THEN 
  INSERT INTO customer VALUES(new.user_id, new.user_name); 
END IF
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `_comment`
--

CREATE TABLE `_comment` (
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `cmt_time` datetime DEFAULT NULL,
  `cmt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_comment`
--

INSERT INTO `_comment` (`product_id`, `customer_id`, `cmt_time`, `cmt`) VALUES
(11, 101, '2020-07-12 04:57:30', 'mọi người nên mua thử, tôi thấy rất rẻ mà chất lượng ok lắm'),
(11, 126, '2020-06-22 08:51:13', 'người việt ủng hộ hàng việt'),
(11, 102, '2019-02-26 16:37:32', 'trái cây có mùi thơm nhẹ nhàng dễ chịu'),
(12, 127, '2021-02-15 03:20:30', 'đóng gói đẹp lắm'),
(12, 103, '2021-08-08 23:50:08', 'nhìn sản phẩm khá bắt mắt, tôi rất thích'),
(12, 128, '2020-01-17 03:12:41', 'sản phẩm khá tốt'),
(13, 104, '2021-04-23 02:27:38', 'đóng gói đẹp lắm'),
(13, 129, '2021-02-14 05:55:57', 'trái cây có mùi thơm nhẹ nhàng dễ chịu'),
(13, 105, '2019-06-24 20:35:09', 'trái cây có mùi thơm nhẹ nhàng dễ chịu'),
(14, 130, '2020-01-26 13:40:09', 'sản phẩm khá tốt'),
(14, 106, '2019-09-09 05:42:52', 'nhìn sản phẩm khá bắt mắt, tôi rất thích'),
(14, 131, '2020-07-24 03:08:12', 'tôi thích đóng gói của sản phẩm này nhìn xinh lắm'),
(21, 107, '2021-12-23 23:15:15', 'sản phẩm này tốt'),
(21, 132, '2021-11-23 08:32:28', 'người việt ủng hộ hàng việt'),
(21, 108, '2020-02-21 06:56:53', 'tôi thích đóng gói của sản phẩm này nhìn xinh lắm'),
(22, 133, '2020-03-24 06:59:01', 'người việt ủng hộ hàng việt'),
(22, 109, '2020-07-25 23:36:37', 'người việt ủng hộ hàng việt'),
(22, 134, '2021-06-03 03:02:16', 'sản phẩm tươi ngon nên mẹ tôi rất thích'),
(23, 110, '2021-11-11 03:16:49', 'sản phẩm này tốt'),
(23, 135, '2021-05-08 06:25:41', 'nhìn sản phẩm khá cao cấp, tôi rất thích'),
(23, 111, '2020-07-18 09:49:32', 'đóng gói đẹp lắm'),
(24, 136, '2019-02-14 00:43:01', 'nhìn sản phẩm khá cao cấp, tôi rất thích'),
(24, 112, '2019-05-04 21:34:14', 'mọi người nên mua thử, tôi thấy rất rẻ mà chất lượng ok lắm'),
(24, 137, '2020-10-15 00:43:48', 'tôi thích đóng gói của sản phẩm này nhìn xinh lắm'),
(31, 113, '2021-09-04 20:28:18', 'sản phẩm khá tốt'),
(31, 138, '2021-07-04 09:31:29', 'ăn rất vừa miệng, sản phẩm tươi ngon'),
(31, 114, '2019-12-21 17:14:13', 'tôi thích cách nhãn hàng bảo vệ môi trường bằng cách không dùng seal nilon'),
(32, 139, '2019-05-03 08:39:14', 'sản phẩm tươi ngon nên mẹ tôi rất thích'),
(32, 115, '2021-12-14 04:32:55', 'sản phẩm tươi ngon nên mẹ tôi rất thích'),
(32, 140, '2020-11-11 21:43:44', 'người việt ủng hộ hàng việt'),
(33, 116, '2020-04-04 05:57:24', 'nhìn sản phẩm khá cao cấp, tôi rất thích'),
(33, 141, '2019-06-08 13:36:11', 'đóng gói rất chắc chắn'),
(33, 117, '2021-12-16 15:19:01', 'người việt ủng hộ hàng việt'),
(34, 142, '2021-06-04 12:19:23', 'nhìn sản phẩm khá cao cấp, tôi rất thích'),
(34, 118, '2020-06-04 15:00:22', 'sản phẩm tươi ngon nên mẹ tôi rất thích'),
(34, 143, '2021-04-26 19:04:47', 'sản phẩm xài khá tốt'),
(41, 119, '2019-01-09 11:25:56', 'đóng gói rất chắc chắn'),
(41, 144, '2020-03-04 23:52:26', 'sản phẩm xài khá tốt'),
(41, 120, '2021-11-08 02:56:21', 'tôi thích cách nhãn hàng bảo vệ môi trường bằng cách không dùng seal nilon'),
(42, 145, '2019-12-19 21:08:02', 'nhìn sản phẩm khá cao cấp, tôi rất thích'),
(42, 121, '2021-10-26 23:46:51', 'sản phẩm tươi ngon nên mẹ tôi rất thích'),
(42, 146, '2020-11-28 03:32:22', 'người việt ủng hộ hàng việt'),
(43, 122, '2021-05-08 02:35:44', 'đóng gói đẹp lắm'),
(43, 147, '2021-11-20 22:19:24', 'sản phẩm này tốt'),
(43, 123, '2019-06-20 12:21:30', 'tôi thích cách nhãn hàng bảo vệ môi trường bằng cách không dùng seal nilon'),
(44, 148, '2020-09-04 15:19:51', 'ăn rất vừa miệng, sản phẩm tươi ngon'),
(44, 124, '2019-09-17 06:17:42', 'nhìn sản phẩm khá cao cấp, tôi rất thích'),
(44, 149, '2021-03-18 05:21:46', 'ăn rất vừa miệng, sản phẩm tươi ngon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orderr`
--
ALTER TABLE `orderr`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`product_id`,`order_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `_comment`
--
ALTER TABLE `_comment`
  ADD PRIMARY KEY (`product_id`,`customer_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderr`
--
ALTER TABLE `orderr`
  ADD CONSTRAINT `orderr_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_product_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orderr` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `_comment`
--
ALTER TABLE `_comment`
  ADD CONSTRAINT `_comment_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `_comment_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
