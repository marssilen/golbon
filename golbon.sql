-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2017 at 02:28 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `golbon`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `s_phone` int(11) NOT NULL,
  `c_phone` int(11) NOT NULL,
  `province` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `user_id`, `name`, `s_phone`, `c_phone`, `province`, `city`, `postal_code`, `address`) VALUES
(1, 0, 'ramin rezaei', 0, 0, 0, 0, 0, ''),
(2, 0, 'ramin rezaei', 0, 12, 0, 0, 0, ''),
(3, 1, 'hamid', 456486789, 91546, 1, 1, 215487, 'dsadas'),
(4, 1, 'elham', 32154, 322, 3, 0, 2, 'das'),
(5, 2, 'ra', 321, 3212, 1, 0, 321331, '3231'),
(6, 2, 'ra', 321, 3212, 1, 0, 321331, '3231'),
(7, 2, 'ramin', 0, 0, 1, 0, 321, 'dsa'),
(8, 2, 'ramin', 0, 0, 1, 0, 321, 'dsa');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `pa_cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat`, `pa_cat`) VALUES
(1, 'mobile', '0'),
(74, 'tablet', '0'),
(76, 'Apple', '1'),
(77, 'Samsung', '1'),
(78, 'LG', '1'),
(79, 'HTC', '1'),
(80, 'SONY', '1'),
(81, 'Apple', '74'),
(82, 'Samsung', '74'),
(83, 'Microsoft', '74'),
(84, 'Asus', '74'),
(87, 'xx', '86'),
(88, 'c', '84'),
(89, 'd', '84'),
(90, '/', '84'),
(92, 'vv', '83'),
(95, 'dasda', '77'),
(97, 'laptop', '0');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `pa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `pa`) VALUES
(1, 'azar1', 1),
(2, 'orumie', 1),
(3, 'ahar', 1),
(4, 'tabriz', 2),
(5, 'heran', 2),
(6, 'ard2', 3),
(7, 'ardebil', 3),
(8, 'ard1', 2),
(9, 'karaj', 5),
(10, 'ilam', 6);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `item_id`, `comment`, `date`) VALUES
(1, 2, 2, 'the best laptob ever', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `factors`
--

CREATE TABLE `factors` (
  `id` int(11) NOT NULL,
  `factor_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date` date NOT NULL,
  `factor_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `factors`
--

INSERT INTO `factors` (`id`, `factor_id`, `user_id`, `status`, `date`, `factor_price`) VALUES
(1, 0, 1, 1, '0000-00-00', 67),
(2, 0, 1, 1, '0000-00-00', 11),
(3, 0, 1, 0, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `user_id`, `item_id`) VALUES
(1, 2, 1),
(2, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `cat` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `card_image` varchar(50) NOT NULL,
  `price` varchar(20) DEFAULT NULL,
  `old_price` varchar(20) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `short_description` text,
  `long_description` text,
  `tag` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `cat`, `name`, `image`, `card_image`, `price`, `old_price`, `link`, `short_description`, `long_description`, `tag`) VALUES
(1, 1, 'sony', '', 'a_49.jpg', '50', '100', '', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n  \r\n<div class="w3-card-2">\r\n<h4><p>are</p></h4>\r\n\r\n  <table class="table">\r\n      <tbody><tr>\r\n        <td><p>1</p></td>\r\n        <td><p>yak</p></td>\r\n      </tr>\r\n  </tbody></table>\r\n</div>\r\n\r\n\r\n\r\n\r\n  \r\n<div class="w3-card-2">\r\n<h4><p>na</p></h4>\r\n\r\n  <table class="table">\r\n      <tbody><tr>\r\n        <td><p>2</p></td>\r\n        <td><p>do</p></td>\r\n      </tr>\r\n  <tr><td><p>kheili</p></td><td><p>bihtar</p></td></tr></tbody></table>\r\n</div>\r\n\r\n\r\n\r\n\r\n  ', '<p>xperia</p>\r\n', ''),
(2, 1, 'z', '', 'a_43.jpg', '33', '44', '', '\r\n\r\n\r\n\r\n\r\n\r\n  \r\n<div class="w3-card-2">\r\n<h4><p>Ù…Ø´Ø®ØµØ§Øª Ú©Ù„ÛŒ</p></h4>\r\n\r\n  <table class="w3-table w3-border w3-striped">\r\n      <tbody><tr>\r\n        <td><p>Ø¯Ùˆ Ø³ÛŒÙ… Ú©Ø§Ø±ØªÙ‡</p></td>\r\n        <td><p>ØªØ¹Ø¯Ø§Ø¯ Ø³ÛŒÙ… Ú©Ø§Ø±Øª</p></td>\r\n      </tr>\r\n  <tr><td><p>Ø³Ø§ÛŒØ² Ù…ÛŒÚ©Ø±Ùˆ (12 Ã— 15 Ù…ÛŒÙ„ÛŒâ€ŒÙ…ØªØ±) , Ø³Ø§ÛŒØ² Ù†Ø§Ù†Ùˆ (8.8 Ã— 12.3 Ù…ÛŒÙ„ÛŒâ€ŒÙ…ØªØ±)</p></td><td><p>Ù‚Ø·Ø¹ Ø³ÛŒÙ… Ú©Ø§Ø±Øª</p></td></tr><tr><td><p>7.8 Ã— 71.2 Ã— 141.6 Ù…ÛŒÙ„ÛŒâ€ŒÙ…ØªØ±</p></td><td><p>Ø§Ø¨Ø¹Ø§Ø¯</p></td></tr><tr><td><p>160 Ú¯Ø±Ù…</p></td><td><p>ÙˆØ²Ù†</p></td></tr><tr><td><p>Ù¾Ù„Ø§Ø³ØªÛŒÚ©</p></td><td><p>Ø³Ø§Ø®ØªØ§Ø± Ø¨Ø¯Ù†Ù‡</p></td></tr></tbody></table>\r\n</div>\r\n\r\n<div class="w3-card-2">\r\n<h4><p> Ù¾Ø±Ø¯Ø§Ø²Ù†Ø¯Ù‡</p></h4>\r\n\r\n  <table class="w3-table w3-border w3-striped">\r\n      <tbody><tr>\r\n        <td><p>Qualcomm Snapdragon 616 Chipset</p></td>\r\n        <td><p>ØªØ±Ø§Ø´Ù‡</p></td>\r\n      </tr>\r\n  <tr><td><p>Quad-core Cortex-A53 + Quad-core Cortex-A53</p></td><td><p>Ù¾Ø±Ø¯Ø§Ø²Ù†Ø¯Ù‡ â€ŒÛŒ Ù…Ø±Ú©Ø²ÛŒ</p></td></tr><tr><td><p>64 Ø¨ÛŒØª</p></td><td><p>Ù†ÙˆØ¹ Ù¾Ø±Ø¯Ø§Ø²Ù†Ø¯Ù‡</p></td></tr><tr><td><p>1.7 Ùˆ 1.2 Ú¯ÛŒÚ¯Ø§Ù‡Ø±ØªØ²</p></td><td><p>ÙØ±Ú©Ø§Ù†Ø³ Ù¾Ø±Ø¯Ø§Ø²Ù†Ø¯Ù‡ â€ŒÛŒ Ù…Ø±Ú©Ø²ÛŒ</p></td></tr><tr><td><p>Adreno 405</p></td><td><p>Ù¾Ø±Ø¯Ø§Ø²Ù†Ø¯Ù‡ â€ŒÛŒ Ú¯Ø±Ø§ÙÛŒÚ©ÛŒ</p></td></tr></tbody></table>\r\n</div>\r\n\r\n<div class="w3-card-2">\r\n<h4><p>Ø­Ø§ÙØ¸Ù‡</p></h4>\r\n\r\n  <table class="w3-table w3-border w3-striped">\r\n      <tbody><tr>\r\n        <td><p>16 Ú¯ÛŒÚ¯Ø§Ø¨Ø§ÛŒØª</p></td>\r\n        <td><p>Ø­Ø§ÙØ¸Ù‡ Ø¯Ø§Ø®Ù„ÛŒ</p></td>\r\n      </tr>\r\n  <tr><td><p>2 Ú¯ÛŒÚ¯Ø§Ø¨Ø§ÛŒØª</p></td><td><p>Ù…Ù‚Ø¯Ø§Ø± RAM</p></td></tr><tr><td><p>microSD</p></td><td><p>Ù¾Ø´ØªÛŒØ¨Ø§Ù†ÛŒ Ø§Ø² Ú©Ø§Ø±Øª Ø­Ø§ÙØ¸Ù‡ Ø¬Ø§Ù†Ø¨ÛŒ</p></td></tr><tr><td><p>128 Ú¯ÛŒÚ¯Ø§Ø¨Ø§ÛŒØª</p></td><td><p>Ø­Ø¯Ø§Ú©Ø«Ø± Ø¸Ø±ÙÛŒØª Ú©Ø§Ø±Øª Ø­Ø§ÙØ¸Ù‡</p></td></tr></tbody></table>\r\n</div>\r\n\r\n\r\n\r\n\r\n  \r\n<div class="w3-card-2">\r\n<h4><p></p></h4>\r\n\r\n  <table class="w3-table w3-border w3-striped">\r\n      <tbody><tr>\r\n        <td><p>Ø³Ø§ÛŒØ² Ù…ÛŒÚ©Ø±Ùˆ (12 Ã— 15 Ù…ÛŒÙ„ÛŒâ€ŒÙ…ØªØ±) , Ø³Ø§ÛŒØ² Ù†Ø§Ù†Ùˆ (8.8 Ã— 12.3 Ù…ÛŒÙ„ÛŒâ€ŒÙ…ØªØ±)</p></td>\r\n        <td><p>Ù‚Ø·Ø¹ Ø³ÛŒÙ… Ú©Ø§Ø±Øª</p></td>\r\n      </tr>\r\n  </tbody></table>\r\n</div>\r\n', '<p>z</p>\r\n', ''),
(3, 1, 'z1', '', 'a_44.jpg', '11', '22', '', '', '<p>z1</p>\r\n', ''),
(4, 1, 'z2', ',a.jpg,a_1.jpg,a_2.jpg,a_3.jpg,a_4.jpg,a_5.jpg,a_6.jpg', 'a_45.jpg', '34', '55', '', '', '<p style="text-align:center"><span style="font-size:20px"><strong>The Xperia Z2 makes the moment unforgettable</strong></span></p>\r\n\r\n<p style="text-align:center"><img alt="" class="image" src="http://localhost/mvc/public/upload/a_4.jpg" style="height:225px; width:400px" /></p>\r\n\r\n<p dir="ltr" style="text-align:center">Meet Xperia Z2. An Android phone that allows you to take photos and videos like never before. For moments you&rsquo;ll keep looking back on forever.</p>\r\n\r\n<p style="text-align:center"><img alt="" src="http://localhost/mvc/public/upload/a_5.jpg" style="float:left; height:310px; width:340px" /><img alt="" src="http://localhost/mvc/public/upload/a_6.jpg" style="float:right; height:309px; width:340px" /></p>\r\n\r\n<br>\r\n<p>\r\n\r\n<h3 style="text-align:left">A large sensor for amazing results.</h3>\r\n\r\nWith a megapixel count of 20.7 and a large sensor, the Xperia Z2 Android&trade; phone is on a par with our compact digital cameras. The results are super crisp and super sharp images.</p>\r\n', ''),
(5, 1, 'z3', '', 'a_46.jpg', '11', '12', '', '', '<p>z3</p>\r\n', ''),
(6, 1, 'z4', '', 'a_47.jpg', '7', '11', '', '', '<p>z4</p>\r\n', ''),
(7, 1, 'z5', '', 'a_48.jpg', '2', '4', '', '\r\n\r\n\r\n\r\n\r\n  \r\n<div class="w3-card-2">\r\n<h4><p>ramin</p></h4>\r\n\r\n  <table class="table">\r\n      <tbody><tr>\r\n        <td><p>ss</p></td>\r\n        <td><p>aa</p></td>\r\n      </tr>\r\n  <tr><td><p>mm</p></td><td><p>cc</p></td></tr><tr><td><p>ff</p></td><td><p>xx</p></td></tr></tbody></table>\r\n</div>\r\n', '<p>z5</p>\r\n', ''),
(8, 1, 'z8', '', 'a.png', '', '', '', '', '', ''),
(9, 1, 'z9', '', 'a_1.png', '15', '', '', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n  \r\n<div class="w3-card-2">\r\n<h4><p>fetures</p></h4>\r\n\r\n  <table class="table">\r\n      <tbody><tr>\r\n        <td><p>cpu</p></td>\r\n        <td><p>2.2 ghz</p></td>\r\n      </tr>\r\n  <tr><td><p>fff</p></td><td><p>aa</p></td></tr></tbody></table>\r\n</div>\r\n\r\n\r\n\r\n\r\n  \r\n\r\n\r\n\r\n  ', '', ''),
(10, 0, '...', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 0, 'Ø¢Ø°Ø±Ø¨Ø§ÛŒØ¬Ø§Ù† Ø´Ø±Ù‚ÛŒ', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 0, 'Ø¢Ø°Ø±Ø¨Ø§ÛŒØ¬Ø§Ù† ØºØ±Ø¨ÛŒ', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 0, 'Ø§Ø±Ø¯Ø¨ÛŒÙ„', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 0, 'Ø§ØµÙÙ‡Ø§Ù†', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 0, 'Ø§Ù„Ø¨Ø±Ø²', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 0, 'Ø§ÛŒÙ„Ø§Ù…', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 0, 'Ø¨ÙˆØ´Ù‡Ø±', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 0, 'ØªÙ‡Ø±Ø§Ù†', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 0, 'Ú†Ù‡Ø§Ø±Ù…Ø­Ø§Ù„ Ùˆ Ø¨Ø®ØªÛŒØ§Ø±ÛŒ', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 0, 'Ø®Ø±Ø§Ø³Ø§Ù† Ø¬Ù†ÙˆØ¨ÛŒ', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 0, 'Ø®Ø±Ø§Ø³Ø§Ù† Ø±Ø¶ÙˆÛŒ', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 0, 'Ø®Ø±Ø§Ø³Ø§Ù† Ø´Ù…Ø§Ù„ÛŒ', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 0, 'Ø®ÙˆØ²Ø³ØªØ§Ù†', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 0, 'Ø²Ù†Ø¬Ø§Ù†', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 0, 'Ø³Ù…Ù†Ø§Ù†', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 0, 'Ø³ÛŒØ³ØªØ§Ù† Ùˆ Ø¨Ù„ÙˆÚ†Ø³ØªØ§Ù†', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 0, 'ÙØ§Ø±Ø³', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 0, 'Ù‚Ø²ÙˆÛŒÙ†', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 0, 'Ù‚Ù…', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 0, 'Ú©Ø±Ø¯Ø³ØªØ§Ù†', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 0, 'Ú©Ø±Ù…Ø§Ù†', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 0, 'Ú©Ø±Ù…Ø§Ù†Ø´Ø§Ù‡', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 0, 'Ú©Ù‡Ú¯ÛŒÙ„ÙˆÛŒÙ‡ Ùˆ Ø¨ÙˆÛŒØ±Ø§Ø­Ù…Ø¯', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 0, 'Ú¯Ù„Ø³ØªØ§Ù†', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(35, 0, 'Ú¯ÛŒÙ„Ø§Ù†', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 0, 'Ù„Ø±Ø³ØªØ§Ù†', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(37, 0, 'Ù…Ø§Ø²Ù†Ø¯Ø±Ø§Ù†', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(38, 0, 'Ù…Ø±Ú©Ø²ÛŒ', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(39, 0, 'Ù‡Ø±Ù…Ø²Ú¯Ø§Ù†', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(40, 0, 'Ø±ÙˆØºÙ† Ø§Ø±Ø¯Ù‡ Ú©Ù†Ø¬Ø¯ 700 Ú¯Ø±Ù…ÛŒ', '["a_44.jpg","a_45.jpg"]', 'a_1.png', '1600', '1500', NULL, '\r\n\r\n\r\n\r\n\r\n\r\n  \r\n<div class="w3-card-2">\r\n<h4><p>ÙˆÛŒÚ˜Ú¯ÛŒ Ù‡Ø§</p></h4>\r\n\r\n  <table class="w3-table w3-border w3-striped">\r\n      <tbody><tr>\r\n        <td><p>700 Ú¯Ø±Ù…</p></td>\r\n        <td><p>Ø¸Ø±ÙÛŒØª</p></td>\r\n      </tr>\r\n  <tr><td><p>Ø¨Ù„Ù‡</p></td><td><p>Ù…Ù†Ø§Ø³Ø¨ Ø¨Ø±Ø§ÛŒ Ù¾Ø®Øª Ùˆ Ù¾Ø²</p></td></tr><tr><td><p>Ø®ÛŒØ±</p></td><td><p>Ù…Ù†Ø§Ø³Ø¨ Ø¨Ø±Ø§ÛŒ Ø³Ø±Ø® Ú©Ø±Ø¯Ù†</p></td></tr></tbody></table>\r\n</div>\r\n\r\n\r\n\r\n\r\n  \r\n<div class="w3-card-2">\r\n<h4><p>Ø®ÙˆØ§Øµ Ø±ÙˆØºÙ† Ú©Ù†Ø¬Ø¯</p></h4>\r\n\r\n  <table class="w3-table w3-border w3-striped">\r\n      <tbody><tr>\r\n        <td><p></p></td>\r\n        <td><p>Ú©Ø§Ù‡Ø´ Ø¯Ù‡Ù†Ø¯Ù‡ Ø³Ø·Ø­ Ú©Ù„Ø³ØªØ±ÙˆÙ„ Ø¨Ø¯ Ø®ÙˆÙ†(LDL) Ùˆ Ø§ÙØ²Ø§ÛŒØ´ Ø¬Ø°Ø¨ Ú©Ù„Ø³ØªØ±ÙˆÙ„ Ø®ÙˆØ¨(HDL)</p></td>\r\n      </tr>\r\n  <tr><td><p></p></td><td><p> Ú©Ø§Ù‡Ø´ ÙØ´Ø§Ø±Ø®ÙˆÙ† Ø¯Ø± Ø§ÙØ±Ø§Ø¯ Ù…Ø¨ØªÙ„Ø§ Ø¨Ù‡ ÙØ´Ø§Ø± Ø®ÙˆÙ† Ø¨Ø§Ù„Ø§</p></td></tr><tr><td><p></p></td><td><p>Ø¬Ù„ÙˆÚ¯ÛŒØ±ÛŒ Ø§Ø² Ø³Ø±Ø·Ø§Ù†â€ŒÙ‡Ø§ÛŒ Ø³ÛŒÙ†Ù‡ØŒ Ù¾Ø±ÙˆØ³ØªØ§Øª Ùˆ Ø³Ø±Ø·Ø§Ù†â€ŒÙ‡Ø§ÛŒ Ø¯Ø³ØªÚ¯Ø§Ù‡ Ú¯ÙˆØ§Ø±Ø´</p></td></tr></tbody></table>\r\n</div>\r\n', '<p>Ø±ÙˆØºÙ† Ú©Ù†Ø¬Ø¯ Ø¯Ø± Ø¨ÛŒÙ† Ø±ÙˆØºÙ†&zwnj;Ù‡Ø§ÛŒ Ø®ÙˆØ±Ø§Ú©ÛŒ Ø¨Ù‡ Ù…Ù„Ú©Ù‡&zwnj;ÛŒ Ø±ÙˆØºÙ†&zwnj;Ù‡Ø§ Ù…Ø´Ù‡ÙˆØ± Ø§Ø³Øª. Ø¯Ø§Ù†Ù‡ Ú©Ù†Ø¬Ø¯ Ø¨ÛŒØ´ØªØ±ÛŒÙ† Ù…ÛŒØ²Ø§Ù† Ø±ÙˆØºÙ† Ø±Ø§ Ø¯Ø± Ø¨ÛŒÙ† Ø¯Ø§Ù†Ù‡&zwnj;Ù‡Ø§ÛŒ Ø±ÙˆØºÙ†ÛŒ Ø¯ÛŒÚ¯Ø± Ø¯Ø§Ø±Ø§Ø³Øª Ø§Ù…Ø§ Ø¨Ø§ ÙˆØ¬ÙˆØ¯ Ø§ÛŒÙ† ØªÙˆÙ„ÛŒØ¯ Ø¢Ù† Ø¨Ø³ÛŒØ§Ø± Ú©Ù…ØªØ± Ø§Ø² Ø¯Ø§Ù†Ù‡&zwnj;Ù‡Ø§ÛŒ Ø¯ÛŒÚ¯Ø± Ù†Ø¸ÛŒØ± Ø³ÙˆÛŒØ§ØŒ Ø¢ÙØªØ§Ø¨Ú¯Ø±Ø¯Ø§Ù† Ùˆ Ú¯Ù„Ø±Ù†Ú¯ Ø§Ø³Øª.</p>\r\n\r\n<p>Ø±ÙˆØºÙ† Ú©Ù†Ø¬Ø¯ Ø¨Ù‡ Ø¹Ù†ÙˆØ§Ù† ÛŒÚ© Ø±ÙˆØºÙ† Ø¨Ø§ Ù‚ÛŒÙ…Øª Ùˆ Ú©ÛŒÙÛŒØª Ø¨Ø§Ù„Ø§ Ø´Ù†Ø§Ø®ØªÙ‡ Ù…ÛŒ&zwnj;Ø´ÙˆØ¯. Ø§ÛŒÙ† Ø±ÙˆØºÙ† Ø¨ÛŒØ´ØªØ±ÛŒÙ† Ù…Ù‚Ø§ÙˆÙ…Øª Ùˆ Ù…Ø§Ù†Ø¯Ú¯Ø§Ø±ÛŒ Ø±Ø§ Ø¯Ø± Ø¨ÛŒÙ† Ø±ÙˆØºÙ†&zwnj;Ù‡Ø§ÛŒ Ø®ÙˆØ±Ø§Ú©ÛŒ Ø¨Ø§ Ø¯Ø±ØµØ¯ Ø¨Ø§Ù„Ø§ÛŒ Ú†Ø±Ø¨ÛŒ ØºÛŒØ±Ø§Ø´Ø¨Ø§Ø¹ Ø¯Ø§Ø±Ø¯. Ù†ÙˆØ¹ Ù„ÛŒÚ¯Ù†Ø§Ù† Ùˆ Ø¢Ù†ØªÛŒ Ø§Ú©Ø³ÛŒØ¯Ø§Ù†&zwnj;Ù‡Ø§ÛŒ Ø·Ø¨ÛŒØ¹ÛŒ Ù…ÙˆØ¬ÙˆØ¯ Ø¯Ø± Ø§ÛŒÙ† Ø±ÙˆØºÙ† Ø¨Ø§Ø¹Ø« Ø¨Ø±ÙˆØ² Ù…Ù‚Ø§ÙˆÙ…Øª Ø¨Ø³ÛŒØ§Ø± Ø¨Ø§Ù„Ø§ Ø¯Ø± Ø¨Ø±Ø§Ø¨Ø± Ø§Ú©Ø³ÛŒØ¯Ø§Ø³ÛŒÙˆÙ† Ùˆ Ø®ÙˆØ§Øµ ÙÛŒØ²ÛŒÙˆÙ„ÙˆÚ˜ÛŒÚ©ÛŒ Ø§Ø±Ø²Ø´Ù…Ù†Ø¯ Ø±ÙˆØºÙ† Ú©Ù†Ø¬Ø¯ Ø´Ø¯Ù‡ Ø§Ø³Øª.</p>\r\n\r\n<p>ØªØ±Ú©ÛŒØ¨ Ø§Ø³ÛŒØ¯Ù‡Ø§ÛŒ Ú†Ø±Ø¨ Ø±ÙˆØºÙ† Ú©Ù†Ø¬Ø¯ Ø¨Ù‡ Ú¯ÙˆÙ†Ù‡&zwnj;Ø§ÛŒ Ø§Ø³Øª Ú©Ù‡ Ø¨Ø±Ø§ÛŒ Ù‡Ø± Ø³Ù‡ Ù…ØµØ±Ù Ø³Ø±Ø® Ú©Ø±Ø¯Ù†ØŒ Ù¾Ø®Øª Ùˆ Ù¾Ø² Ùˆ Ø³Ø§Ù„Ø§Ø¯ Ù‚Ø§Ø¨Ù„ Ø§Ø³ØªÙØ§Ø¯Ù‡ Ø§Ø³Øª.</p>\r\n', '{Ø±ÙˆØºÙ† Ú©Ù†Ø¬Ø¯ Ø§Ø¹Ù„Ø§ Ø¨Ú©Ø±}'),
(41, 0, 'ÛŒØ²Ø¯', 'a_1.jpg,a_5.jpg', 'a_1.jpg', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `national_code` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `cell_phone` varchar(20) NOT NULL,
  `birth_date` int(11) NOT NULL,
  `gender` enum('male','female','','') NOT NULL DEFAULT 'male',
  `get_news` tinyint(1) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `name`, `national_code`, `phone`, `cell_phone`, `birth_date`, `gender`, `get_news`, `address`) VALUES
(1, 1, '????? ?????', '4440081002', '03137433503', '09382540963', 1374, 'male', 0, '??????\r\n????????'),
(2, 2, '???? ??? ?????', '4440066038', '03137433503', '09137807694', 1372, 'male', 1, '??????');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id`, `name`) VALUES
(1, 'Ø¢Ø°Ø±Ø¨Ø§ÛŒØ¬Ø§Ù† Ø´Ø±Ù‚ÛŒ'),
(2, 'Ø¢Ø°Ø±Ø¨Ø§ÛŒØ¬Ø§Ù† ØºØ±Ø¨ÛŒ'),
(3, 'Ø§Ø±Ø¯Ø¨ÛŒÙ„'),
(4, 'Ø§ØµÙÙ‡Ø§Ù†'),
(5, 'Ø§Ù„Ø¨Ø±Ø²'),
(6, 'Ø§ÛŒÙ„Ø§Ù…'),
(7, 'Ø¨ÙˆØ´Ù‡Ø±'),
(8, 'ØªÙ‡Ø±Ø§Ù†'),
(9, 'Ú†Ù‡Ø§Ø±Ù…Ø­Ø§Ù„ Ùˆ Ø¨Ø®ØªÛŒØ§Ø±'),
(10, 'Ø®Ø±Ø§Ø³Ø§Ù† Ø¬Ù†ÙˆØ¨ÛŒ'),
(11, 'Ø®Ø±Ø§Ø³Ø§Ù† Ø±Ø¶ÙˆÛŒ'),
(12, 'Ø®Ø±Ø§Ø³Ø§Ù† Ø´Ù…Ø§Ù„ÛŒ'),
(13, 'Ø®ÙˆØ²Ø³ØªØ§Ù†'),
(14, 'Ø²Ù†Ø¬Ø§Ù†'),
(15, 'Ø³Ù…Ù†Ø§Ù†'),
(16, 'Ø³ÛŒØ³ØªØ§Ù† Ùˆ Ø¨Ù„ÙˆÚ†Ø³ØªØ§Ù†'),
(17, 'ÙØ§Ø±Ø³'),
(18, 'Ù‚Ø²ÙˆÛŒÙ†'),
(19, 'Ù‚Ù…'),
(20, 'Ú©Ø±Ø¯Ø³ØªØ§Ù†'),
(21, 'Ú©Ø±Ù…Ø§Ù†'),
(22, 'Ú©Ø±Ù…Ø§Ù†Ø´Ø§Ù‡'),
(23, 'Ú©Ù‡Ú¯ÛŒÙ„ÙˆÛŒÙ‡ Ùˆ Ø¨ÙˆÛŒØ±Ø§Ø­'),
(24, 'Ú¯Ù„Ø³ØªØ§Ù†'),
(25, 'Ú¯ÛŒÙ„Ø§Ù†'),
(26, 'Ù„Ø±Ø³ØªØ§Ù†'),
(27, 'Ù…Ø§Ø²Ù†Ø¯Ø±Ø§Ù†'),
(28, 'Ù…Ø±Ú©Ø²ÛŒ'),
(29, 'Ù‡Ø±Ù…Ø²Ú¯Ø§Ù†'),
(30, 'Ù‡Ù…Ø¯Ø§Ù†'),
(31, 'ÛŒØ²Ø¯');

-- --------------------------------------------------------

--
-- Table structure for table `purchased`
--

CREATE TABLE `purchased` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `factor_id` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchased`
--

INSERT INTO `purchased` (`id`, `item_id`, `factor_id`, `num`, `price`) VALUES
(1, 8, 3, 2, 0),
(2, 9, 3, 9, 15),
(3, 5, 3, 20, 11),
(4, 7, 3, 15, 2);

-- --------------------------------------------------------

--
-- Table structure for table `server_message`
--

CREATE TABLE `server_message` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userlist`
--

CREATE TABLE `userlist` (
  `id` int(22) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fav` text NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(13) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(128) NOT NULL,
  `ac_url` varchar(128) NOT NULL,
  `block` tinyint(1) NOT NULL DEFAULT '0',
  `role` enum('admin','user','','') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlist`
--

INSERT INTO `userlist` (`id`, `username`, `password`, `fav`, `address`, `phone`, `active`, `email`, `ac_url`, `block`, `role`) VALUES
(1, 'admin', 'fd8297a66b9552623d7882a978ca4d1fd48093bf', '', '', '09382540963', 1, 'marssilen5@gmail.com', '', 0, 'admin'),
(2, 'ramin', 'fd8297a66b9552623d7882a978ca4d1fd48093bf', '', 'iran', '09382540963', 1, 'missa@chmail.ir', 'f50dc14dba96651dd70720c775260216', 0, 'user'),
(3, '<b>ramin</b>salam', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', 'dasd', 'dasd', 1, 'sa@dsa', 'eb62f6717c3dfea612be3b212b3ad6b5', 0, 'user'),
(4, '<script>alert("ramin");</scrip', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '3211', '32131', 1, 'e@e', '8d3ef2b7919b2c827eb71c1296b7d854', 0, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factors`
--
ALTER TABLE `factors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchased`
--
ALTER TABLE `purchased`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `server_message`
--
ALTER TABLE `server_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlist`
--
ALTER TABLE `userlist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `factors`
--
ALTER TABLE `factors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `purchased`
--
ALTER TABLE `purchased`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `server_message`
--
ALTER TABLE `server_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `userlist`
--
ALTER TABLE `userlist`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
