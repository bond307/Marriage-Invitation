-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 01, 2021 at 10:40 AM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding_invi`
--

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `counter` int(20) NOT NULL,
  `idd` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invitation_details`
--

CREATE TABLE `invitation_details` (
  `id` int(100) NOT NULL COMMENT 'Id of invitation card ',
  `user_id` varchar(100) NOT NULL COMMENT 'ID of the user',
  `groom_name` varchar(100) NOT NULL COMMENT 'Name of Groom',
  `groom_f_name` varchar(100) NOT NULL COMMENT 'Groom father name',
  `groom_m_name` varchar(100) NOT NULL COMMENT 'Groom mother name',
  `bride_name` varchar(100) NOT NULL COMMENT 'Name of bride',
  `bride_f_name` varchar(100) NOT NULL COMMENT 'Bride father name',
  `bride_m_name` varchar(100) NOT NULL COMMENT 'Bride mother name',
  `photo` varchar(1000) NOT NULL,
  `groom_address` varchar(200) NOT NULL COMMENT 'address of the groom',
  `bride_address` varchar(200) NOT NULL COMMENT 'Address of the bride',
  `mdate` varchar(100) NOT NULL COMMENT 'marriage date',
  `mtime` varchar(100) NOT NULL COMMENT 'marriage time',
  `mvenue` varchar(100) NOT NULL COMMENT 'marriage venue',
  `rdate` varchar(100) NOT NULL COMMENT 'reception date',
  `rtime` varchar(100) NOT NULL COMMENT 'reception time',
  `rvenue` varchar(100) NOT NULL COMMENT 'reception venue',
  `lunch` varchar(100) NOT NULL COMMENT 'Lunch',
  `timess` varchar(100) NOT NULL COMMENT 'Time of lunch',
  `relatives` varchar(100) NOT NULL COMMENT 'With best compliments names',
  `requirements` varchar(100) NOT NULL COMMENT 'Any other requirements they have',
  `permission` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invitation_details`
--

INSERT INTO `invitation_details` (`id`, `user_id`, `groom_name`, `groom_f_name`, `groom_m_name`, `bride_name`, `bride_f_name`, `bride_m_name`, `photo`, `groom_address`, `bride_address`, `mdate`, `mtime`, `mvenue`, `rdate`, `rtime`, `rvenue`, `lunch`, `timess`, `relatives`, `requirements`, `permission`) VALUES
(39, '16', 'test', 'test', 'test', 'test', 'test', 'test', 'Screenshot (1).png,Screenshot (2).png', 'test', 'test', '2021-04-22', '17:27', 'test', '2021-04-22', '17:27', 'test', 'test', '17:29', '', '', 2),
(40, '28', 'groom', 'father', 'mother', 'bride', 'father', 'mother', 'andhrapradesh.gif', 'hyderabad', 'hyderabad', '2021-04-26', '08:30', 'venue', '2021-04-29', '12:49', 'venue', 'lunch', '08:00', 'detaisl', 'detaisl', 1),
(42, '20', 'testing', 'dfndn', 'nfdndfnfd', 'testing', 'ndfnfd', 'fnfdn', '58348-alarm-icon-cartoon-timer-clock-free-photo-png.png,pink-love-heart-png-hd-pink-heart-png-pic-3000.png', 'nfdnfd', 'nndfn', '2021-05-05', '00:18', 'fhf', '2021-05-05', '00:18', 'dhh', 'dhdfhh', '00:18', '', '', 1),
(43, '30', 'Polimati Rakesh venkat', 'P.Babu Rao(Late)', 'P.Kumari', 'Medanki Deepthi', 'M.Pandu ranga rao', 'M.Vijaya kumari', 'rakesh.jpg,rakesh1.jpg,rakesh2.jpg,rakesh3.jpg,rakesh4.jpg', 'Polasanipalli,bhimadole mandal,west godavari,534426', 'kamavarapukota,west godavari', '2021-05-14', '10:00', 'At Home,polasanipalli,bhimadole,west godavri', '2021-05-16', '10:00', 'At Home,polasanipalli,bhimadole,west godavri', 'At Home,polasanipalli,bhimadole,west godavri', '12:00', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL COMMENT 'Name of the user',
  `user_permission` int(10) NOT NULL COMMENT 'If the user order track according to this',
  `demo_name` varchar(50) NOT NULL COMMENT 'Selected demo name',
  `demo` varchar(100) NOT NULL COMMENT 'Selected Demo',
  `demo_url` varchar(100) NOT NULL COMMENT 'Selected Demo Link',
  `amount` double(10,2) NOT NULL COMMENT 'Payed amount',
  `payment_status` int(10) NOT NULL COMMENT 'Status of the payment is it payed or not',
  `invoice_number` varchar(100) NOT NULL,
  `userlink` varchar(100) NOT NULL,
  `order_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`id`, `user_id`, `user_name`, `user_permission`, `demo_name`, `demo`, `demo_url`, `amount`, `payment_status`, `invoice_number`, `userlink`, `order_time`) VALUES
(1102, 16, 'Balu', 4, 'IM 010', 'uploads/20-59-28-WhatsApp Image 2020-11-16 at 11.11.44.jpeg', 'http://mymarriageinvitation.com/wedding/', 299.00, 1, '202123', '', '21-04-2021,18:48:43'),
(1103, 17, 'Sravanthi Pamidikalva', 0, '', '', '', 0.00, 0, '', '', ''),
(1104, 18, 'Sai Dinesh', 0, '', '', '', 0.00, 0, '', '', ''),
(1105, 19, 'Varshini Suda', 0, '', '', '', 0.00, 0, '', '', ''),
(1106, 20, 'phani', 0, 'IM 012', 'uploads/wedding-invitation-friends-demo.png', 'http://www.mymarriageinvitation.com/wedding-template', 399.00, 0, '202143', '', ''),
(1109, 23, 'Lanka surendra Kumar', 0, '', '', '', 0.00, 0, '', '', ''),
(1110, 24, 'Kotipalli Nagajagadeesh', 0, '', '', '', 0.00, 0, '', '', ''),
(1111, 25, 'SHARATH KUMAR KONKATHI', 0, '', '', '', 0.00, 0, '', '', ''),
(1112, 26, 'Mohansai', 0, '', '', '', 0.00, 0, '', '', ''),
(1113, 27, 'Vasuchinnu', 0, '', '', '', 0.00, 0, '', '', ''),
(1114, 28, 'muni', 0, 'IM 010 (Telugu)', 'uploads/im 010.jpg', 'https://mymarriageinvitation.com/telugu_demo/', 299.00, 0, '202128', '', ''),
(1115, 29, 'Bhanu prasad', 0, '', '', '', 0.00, 0, '', '', ''),
(1116, 30, 'Rakesh Kanna', 4, 'IM 010 (English)', 'uploads/demo.jpg', 'https://mymarriageinvitation.com/wedding/', 299.00, 1, '202139', 'rakesh_weds_deepthi', '04-05-2021,18:53:53'),
(1117, 31, 'Rajesh', 0, 'IM 010 (English)', 'uploads/im 010.jpg', 'https://mymarriageinvitation.com/wedding/', 299.00, 0, '202129', '', ''),
(1118, 32, 'ravi', 0, '', '', '', 0.00, 0, '', '', ''),
(1119, 33, 'anu', 0, '', '', '', 0.00, 0, '', '', ''),
(1120, 34, 'Sudha', 4, 'IM 010 (English)', 'uploads/demo.jpg', 'https://mymarriageinvitation.com/wedding/', 299.00, 1, '202144', 'hemakumar_weds_sudha', '18-07-2021,18:59:15'),
(1121, 35, 'nayon', 0, 'IM 010 (Telugu)', 'uploads/im 010.jpg', 'https://mymarriageinvitation.com/telugu_demo/', 299.00, 0, '202146', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(100) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL COMMENT 'Name of user',
  `mobile_no` varchar(50) NOT NULL COMMENT 'mobile no of user',
  `email` varchar(50) NOT NULL COMMENT 'email of user',
  `password` varchar(50) NOT NULL COMMENT 'password of user',
  `confirm_password` varchar(50) NOT NULL COMMENT 'confirm password of user',
  `permission` int(10) NOT NULL COMMENT 'Permission of the user is it admin or not',
  `addinvi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `customer_id`, `name`, `mobile_no`, `email`, `password`, `confirm_password`, `permission`, `addinvi`) VALUES
(1, '1100', 'bhavani', '6309502137', 'mymarriageinvitation.com@gmail.com', 'cf414a477b183215e009258e28a04bb2015a90cf', 'cf414a477b183215e009258e28a04bb2015a90cf', 1, 101),
(16, '1102', 'Balu', '9494998443', 'baluk6644@gmail.com', 'b479eceffda78206cfa0092cee25e4fc2a641bb9', 'b479eceffda78206cfa0092cee25e4fc2a641bb9', 2, 10),
(17, '1103', 'Sravanthi Pamidikalva', '8978953586', 'pamidikalvasravanthi@gmail.com', '6e921fb923880bd54b813b0f8decdaa2f0b562af', '6e921fb923880bd54b813b0f8decdaa2f0b562af', 2, 1),
(18, '1104', 'Sai Dinesh', '6301006627', 'saidinesh10501@gmail.com', 'aebe6dc45bcded21528ee50cda62174e1f453cce', 'aebe6dc45bcded21528ee50cda62174e1f453cce', 2, 1),
(19, '1105', 'Varshini Suda', '8985761442', 'varshinisuda@gmail.com', '57e9618dbda2ebaf5663ed29b846373b0097d66f', '57e9618dbda2ebaf5663ed29b846373b0097d66f', 2, 1),
(20, '1106', 'phani', '8333005848', 'phani.zealster@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2, 10),
(23, '1109', 'Lanka surendra Kumar', '6302442613', 'surendrakumarlanka1999@gmail.com', '1295fdd4695be8372a2a37d262dba44c67ac6e2c', '1295fdd4695be8372a2a37d262dba44c67ac6e2c', 2, 1),
(24, '1110', 'Kotipalli Nagajagadeesh', '9182978754', 'knjagadeesh3@gmail.com', '16c10ba07471e0d285d7c4cca430d9ffda413f23', '16c10ba07471e0d285d7c4cca430d9ffda413f23', 2, 1),
(25, '1111', 'SHARATH KUMAR KONKATHI', '9160925982', 'konkathi95@gmail.com', '1c2a285494e2636d3704cc394194cdf6be4074b8', '1c2a285494e2636d3704cc394194cdf6be4074b8', 2, 1),
(26, '1112', 'Mohansai', '6304742787', 'mohansaimodepal1997@gmail.com', '74a45aab79f49d29c754443db22ed6d419b67735', '74a45aab79f49d29c754443db22ed6d419b67735', 2, 1),
(27, '1113', 'Vasuchinnu', '7993431756', 'vasuchinnu23@gmail.com', 'd67d6e4e680ed36907cf856b6df90db5c259d469', 'd67d6e4e680ed36907cf856b6df90db5c259d469', 2, 1),
(28, '1114', 'muni', '9885245793', 'muni.veeranki@techveerankis.com', '32946eacaab4639ee110c472b165f5f5c4009d60', '32946eacaab4639ee110c472b165f5f5c4009d60', 2, 10),
(29, '1115', 'Bhanu prasad', '9949448058', 'bhanuprasad.mandru25@gmail.com', '6554fa2faec576452d0155dbe5eec25f4af26266', '6554fa2faec576452d0155dbe5eec25f4af26266', 2, 1),
(30, '1116', 'Rakesh Kanna', '9848229432', 'rakeshdreamstrue@gmail.com', '5c49a7187429b2897b8c693cd7a7ac8fcf18c094', '5c49a7187429b2897b8c693cd7a7ac8fcf18c094', 2, 10),
(31, '1117', 'Rajesh', '9573478666', 'rajeshpandu61@gmail.com', '815a570972ee7ccde68e0f737d3148311f2fe38f', '815a570972ee7ccde68e0f737d3148311f2fe38f', 2, 1),
(32, '1118', 'ravi', '9494585961', 'raviprakash5961@gmail.com', 'e3b9abf2cc189c5ac4398963ce6c4e7af33fd1d1', 'e3b9abf2cc189c5ac4398963ce6c4e7af33fd1d1', 2, 1),
(33, '1119', 'anu', '8333005848', 'onlinemarriageinvitation@gmail.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 2, 1),
(34, '1120', 'Sudha', '9849829969', 'nandigamsudha9@gmail.com', '3448c97f6d143cb8dc3687a9aaf2ce9c65acb1e0', '3448c97f6d143cb8dc3687a9aaf2ce9c65acb1e0', 2, 1),
(35, '1121', 'nayon', '1234567890', 'c@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `send`
--

CREATE TABLE `send` (
  `id` int(50) NOT NULL COMMENT 'id of the table',
  `user_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL COMMENT 'name of the receipt',
  `phone` varchar(50) NOT NULL COMMENT 'phone of the receipt'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `send`
--

INSERT INTO `send` (`id`, `user_id`, `name`, `phone`) VALUES
(1, 31, 'Jagedeesh', '9182978154'),
(2, 35, 'nayon', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `product_image` text NOT NULL,
  `url` varchar(100) NOT NULL,
  `actual_price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `name`, `price`, `product_image`, `url`, `actual_price`) VALUES
(1, 'IM 011 (English)', 199.00, 'uploads/demo_1.jpg', 'https://mymarriageinvitation.com/demo_1/', 399),
(3, 'IM 010 (Telugu)', 299.00, 'uploads/im 010.jpg', 'https://mymarriageinvitation.com/telugu_demo/', 499),
(4, 'IM 010 (English)', 299.00, 'uploads/demo.jpg', 'https://mymarriageinvitation.com/wedding/', 499),
(5, 'IM 012', 399.00, 'uploads/wedding-invitation-friends-demo.png', 'http://www.mymarriageinvitation.com/wedding-template', 599);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`idd`);

--
-- Indexes for table `invitation_details`
--
ALTER TABLE `invitation_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send`
--
ALTER TABLE `send`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invitation_details`
--
ALTER TABLE `invitation_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT COMMENT 'Id of invitation card ', AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `send`
--
ALTER TABLE `send`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT COMMENT 'id of the table', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
