-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2021 at 10:43 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duanmau_ph12714`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'giải trí14'),
(26, 'Áo Phông'),
(29, 'Đồ thể thao'),
(30, 'giải trí');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `cmt_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `cmt_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`cmt_id`, `content`, `cmt_time`, `product_id`, `user_id`) VALUES
(1, 'ừa', '2021-02-25 04:13:08', 8, 1),
(2, 'dep', '2021-02-25 04:13:15', 8, 1),
(3, 'dep', '2021-02-25 04:14:08', 8, 1),
(4, 'ÁO đẹp lắm', '2021-02-25 04:14:21', 8, 1),
(5, 'Áo xấu\r\n', '2021-02-25 08:28:28', 8, 1),
(6, 'Áo xấu\r\n', '2021-02-25 08:28:36', 8, 1),
(7, 'Áo xấu\r\n', '2021-02-25 08:29:46', 8, 1),
(8, 'Áo xấu\r\n', '2021-02-25 08:30:01', 8, 1),
(9, 'Áo xấu\r\n', '2021-02-25 08:31:33', 8, 1),
(10, 'Áo xấu\r\n', '2021-02-25 08:34:08', 8, 1),
(11, 'ao sieu xau', '2021-02-25 08:34:23', 8, 1),
(12, 'ao aoa oaó', '2021-02-25 08:34:48', 8, 1),
(13, 'ao aoa oaó', '2021-02-25 08:35:01', 8, 1),
(14, 'xấu\r\n', '2021-02-27 13:39:46', 9, 1),
(15, 'tạm\r\n', '2021-02-27 13:39:53', 9, 1),
(16, 'tạm\r\n', '2021-02-27 13:40:00', 9, 1),
(17, 'asc', '2021-03-12 10:23:20', 10, 1),
(18, 'asc', '2021-03-12 10:23:24', 10, 1),
(20, 'hung', '2021-03-12 10:27:40', 10, 12),
(21, 'abcfawf', '2021-03-12 10:28:21', 10, 12);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avata` varchar(255) NOT NULL,
  `loai_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `user_name`, `user_pass`, `name`, `phone`, `email`, `avata`, `loai_user`) VALUES
(1, 'hung', '123', 'Hà mạnh hùng', '0399958700', 'Manhhung1762001@gmail.com', '1 vợ.jpg', 'admin'),
(2, 'abc', '1', 'HÙng', '123443542', 'sjb@sàa', '2 con.jpg', 'khach'),
(3, 'hung1', '123', 'haf hungf', '0399958700', 'hung@ee', '', 'khach'),
(4, 'hung123', '123', 'mạnh hùng', '0399958700', 'hung@gmail.com', 'avt.jpg', 'admin'),
(5, 'hung2', '123', 'hùng ', '0399958700', 'hung@gmail.com', '', 'admin'),
(11, 'hung3', '123', 'haf hungf', '0399958700', 'hung@ee', '', 'admin'),
(12, 'maimai', '123', 'Co mai', '0399958700', 'hung@gmail.com', '', 'khach');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_price` float NOT NULL,
  `product_sale` float NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_detail` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_sale`, `product_image`, `product_time`, `product_detail`, `category_id`, `product_view`) VALUES
(8, 'áo phông', 3254460, 12333, '2 con.jpg', '2021-06-12 15:40:35', 'qewuuquuu', 1, 86),
(9, 'sp14', 3, 2343, 'binh-luan-ve-cach-an-mac-cua-gioi-tre-hien-nay.jpg', '2021-06-12 12:10:03', '2r3wuuuuuq', 1, 2),
(10, 'ÁP POLO THỂ THAO NAM', 499000, 450000, 'W77TP20251.jpg', '2021-03-17 03:14:37', 'MÔ TẢ CHUNG\r\n\"Năng động và phóng khoáng\" là những gì mà sản phẩm áo polo thể thao của ONOFF mang đến cho người mặc. Sản phẩm được thiết kế phù hợp với những hoạt động thường ngày và hoạt động thể thao tạo sự thoải mái tối đa.\r\n\r\nCHẤT LIỆU\r\n95% Polyester, 5% spandexu', 26, 12),
(11, '', 0, 0, '', '2021-03-04 06:13:08', '', 1, 0),
(12, 'ÁO T SHIRT NAM CỔ TRÒN COTTON', 500000, 450000, 'H17TS20137.jpg', '2021-03-15 04:10:34', 'MÔ TẢ CHUNG\r\nChất liệu Cotton tự nhiên mềm mại, thấm hút mồ hôi và thoáng khí mang lang lại cảm giác thoải mái, dễ chịu mỗi ngày.\r\nThiết kế ngắn tay, cổ tròn, kiểu dáng regular dễ dàng kết hợp với các trang phục khác.\r\n\r\nCHẤT LIỆU\r\n100% Cotton', 26, 9),
(13, 'ÁO ACTIVE DRI-BALANCE NAM', 300000, 270000, 'H17TS19015-01.jpg', '2021-03-04 06:25:28', 'Áo Active công nghệ thấm hút một chiều thiết kế kẻ ngang trẻ trung.\r\nDệt vải 2 mặt: Cotton và sợi tổng hợp cao cấp\r\n- Thoát ẩm 1 chiều, ngăn mồ hôi thấm ngược\r\n- Co giãn, đàn hồi tốt\r\nSản phẩm này phù hợp khi tham gia hoạt động vận động ngoài trời.\r\n\r\nCHẤT LIỆU\r\n62% Cotton 33% Polyester 5% Lycra', 26, 0),
(14, 'ÁO LÓT NAM CỘC TAY CỔ TRÒN', 170000, 150000, 'H17TS17024-SR01.jpg', '2021-03-04 06:27:00', 'Thiết kế đơn giản\r\nÔm chạm nhẹ cơ thể\r\nChất liệu cotton mềm mại, thấm hút mồ hôi, thoáng khí\r\nPha spandex giúp co dãn, đàn hồi tốt hỗ trợ vận động thoải mái\r\n\r\nCHẤT LIỆU\r\n95% Cotton Compact 5% Spandex', 26, 0),
(15, 'ÁO PHÔNG NAM DÀI TAY CỔ TRÒN', 23000, 200000, 'H17TL17004.jpg', '2021-03-04 06:29:35', 'Áo dài tay active nam cổ tròn thiết kế phù hợp với các vận động hàng ngày, mang lại sự thoải mái, năng động. Chất liệu COTTON USA mềm mại, thấm hút mồ hôi vượt trội, kết hợp sợi spandex đàn hồi tốt, tạo cảm giác thoải mái, dễ chịu khi vận động. Phom dáng đơn giản với hình in trẻ trung, mang lại sự tự tin, khỏe khoắn.\r\nCHẤT LIỆU\r\n 95% Cotton USA 5% Spandex u', 26, 0),
(16, 'ÁO NAM DÀI TAY CỔ CAO', 290000, 230000, 'H17TL20095-MK01.jpg', '2021-03-04 06:29:20', 'Áo dài tay active nam cổ tròn thiết kế phù hợp với các vận động hàng ngày, mang lại sự thoải mái, năng động. Chất liệu COTTON USA mềm mại, thấm hút mồ hôi vượt trội, kết hợp sợi spandex đàn hồi tốt, tạo cảm giác thoải mái, dễ chịu khi vận động. Phom dáng đơn giản với hình in trẻ trung, mang lại sự tự tin, khỏe khoắn.\r\nCHẤT LIỆU\r\n 95% Cotton USA 5% Spandex ', 26, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cmt_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `cmt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `login` (`user_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
