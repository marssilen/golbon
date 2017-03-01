-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2017 at 03:49 PM
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
(5, 1, 'Ø±Ø§Ù…ÛŒÙ† Ø±Ø¶Ø§ÛŒÛŒ', 2147483647, 938254406, 1, 1, 1234567890, 'somewhere');

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
(1, 'Ù…ÙˆØ¨Ø§ÛŒÙ„', '0'),
(74, 'ØªØ¨Ù„Øª', '0'),
(97, 'Ù„Ù¾ ØªØ§Ù¾', '0'),
(98, 'Ù…Ø­ØµÙˆÙ„Ø§Øª Ú©Ù†Ø¬Ø¯ÛŒ', '0');

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
  `factor_price` int(11) NOT NULL,
  `address` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `factors`
--

INSERT INTO `factors` (`id`, `factor_id`, `user_id`, `status`, `date`, `factor_price`, `address`) VALUES
(1, 0, 1, 0, '0000-00-00', 0, 0),
(2, 0, 2, 0, '0000-00-00', 0, 0);

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
(2, 2, 3),
(3, 1, 41),
(4, 1, 40),
(5, 1, 3),
(6, 1, 39),
(7, 1, 10),
(8, 1, 1),
(9, 1, 2);

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
(1, 98, 'Ú©Ù†Ø¬Ø¯', '["a_49.jpg","a_50.jpg"]', 'a_2.png', '220', '150', NULL, NULL, '<p>Ú©Ù†Ø¬Ø¯ Ø¯Ø§Ù†Ù‡ Ø§ÛŒØ³Øª Ø±ÙˆØºÙ†ÛŒ Ø¨Ø§ Ø®ÙˆØ§Øµ ÙØ±Ø§ÙˆØ§Ù† Ø§Ø³Øª.</p>\r\n', '{Ø±ÙˆØºÙ†}'),
(2, 98, 'Ø±ÙˆØºÙ† Ø§Ø±Ø¯Ù‡ Ú©Ù†Ø¬Ø¯ 700 Ú¯Ø±Ù…ÛŒ', NULL, 'a_51.jpg', '1000', '1100', NULL, NULL, '<p>Ø±ÙˆØºÙ† Ø§Ø±Ø¯Ù‡ Ú©Ù†Ø¬Ø¯ 700 Ú¯Ø±Ù…ÛŒ</p>\r\n\r\n<p style="text-align:justify">Ø±ÙˆØºÙ† Ø§Ø±Ø¯Ù‡ Ø¨Ù‡ Ø¯Ù„ÛŒÙ„ Ø§ÛŒÙ†Ú©Ù‡ Ø·Ø¨Ø¹ Ú¯Ø±Ù…&zwnj;ØªØ±ÛŒ Ø¯Ø§Ø±Ø¯ØŒ Ø¢Ù„ÙˆØ¯Ú¯ÛŒ&zwnj;Ø§Ø´ Ú©Ù…ØªØ± Ø§Ø³Øª Ùˆ Ù…Ø¯Øª Ø²Ù…Ø§Ù†&zwnj; Ø¨ÛŒØ´ØªØ±ÛŒ Ù…ÛŒ&zwnj;ØªÙˆØ§Ù† Ø¢Ù† Ø±Ø§ Ù†Ú¯Ù‡ Ø¯Ø§Ø´Øª.Ø§Ù…Ø§ Ù‡ÛŒÚ†&zwnj;Ú©Ø¯Ø§Ù… Ø§Ø² Ø±ÙˆØºÙ†&zwnj;Ù‡Ø§ÛŒ Ú©Ù†Ø¬Ø¯ Ø¨Ø±Ø§ÛŒ Ø³Ø±Ø® Ú©Ø±Ø¯Ù† Ø·ÙˆÙ„Ø§Ù†ÛŒ Ù…Ù†Ø§Ø³Ø¨ Ù†ÛŒØ³ØªÙ†Ø¯ØŒ</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify">Ø²ÛŒØ±Ø§ Ù†Ù…ÛŒ&zwnj;ØªÙˆØ§Ù†Ù†Ø¯ Ø­Ø±Ø§Ø±Øª Ø¨Ø§Ù„Ø§ Ø±Ø§ ØªØ­Ù…Ù„ Ú©Ù†Ù†Ø¯. Ù‡Ø± Ø¯Ùˆ Ù…ÛŒ&zwnj;ØªÙˆØ§Ù†Ù†Ø¯ Ù†Ù‡Ø§ÛŒØªØ§ ØªØ§ 220Ø¯Ø±Ø¬Ù‡ Ø³Ø§Ù†ØªÛŒ&zwnj;Ú¯Ø±Ø§Ø¯ Ø­Ø±Ø§Ø±Øª Ø±Ø§ ØªØ­Ù…Ù„ Ú©Ù†Ù†Ø¯. Ø¯Ø± Ù†ØªÛŒØ¬Ù‡ Ø¯Ø± Ø­Ø±Ø§Ø±Øª&zwnj;Ù‡Ø§ÛŒ Ø®ÛŒÙ„ÛŒ Ø¨Ø§Ù„Ø§ Ø¯ÙˆØ¯ Ù…ÛŒ&zwnj;Ú©Ù†Ù†Ø¯</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify">Ùˆ Ù†Ù‡&zwnj;ØªÙ†Ù‡Ø§ Ø®Ø§ØµÛŒØª Ù†Ø¯Ø§Ø±Ù†Ø¯ØŒ Ø¨Ù„Ú©Ù‡ Ú©Ø§Ù…Ù„Ø§ Ø¨Ø±Ø§ÛŒ Ø¨Ø¯Ù† Ù…Ø¶Ø± Ù…ÛŒ&zwnj;Ø´ÙˆÙ†Ø¯ØŒ Ø¨Ù†Ø§Ø¨Ø±Ø§ÛŒÙ† ØªÙˆØµÛŒÙ‡ Ù…ÛŒ&zwnj;Ø´ÙˆØ¯ØŒ Ø§Ø² Ø§ÛŒÙ† 2 Ø±ÙˆØºÙ† ÙÙ‚Ø· Ø¨Ø±Ø§ÛŒ ØªÙØª Ø¯Ø§Ø¯Ù† Ú©ÙˆØªØ§Ù‡ Ø§Ø³ØªÙØ§Ø¯Ù‡ Ú©Ù†ÛŒØ¯.</p>\r\n', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu` text COLLATE utf8_persian_ci NOT NULL,
  `href` text COLLATE utf8_persian_ci NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu`, `href`, `parent`) VALUES
(3, 'Ù…ÙˆØ¨Ø§ÛŒÙ„', '', 0),
(4, 'ØªØ¨Ù„Øª', 'tablet', 0),
(7, 'Ø±ÙˆØºÙ†', '', 0),
(8, 'Ø³ÙˆÙ†ÛŒ', '', 3),
(9, 'Ø§Ù¾Ù„', '', 3),
(10, 'HTC', '', 3);

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
(1, 1, 1, 1, 220),
(2, 2, 1, 7, 1000);

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
(5, 'ramin2', 'fd8297a66b9552623d7882a978ca4d1fd48093bf', '', '', '241654', 1, 'some@dsad', '8e6092d8bcd6a26acdea82a5e47d49ad', 0, 'user');

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
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `server_message`
--
ALTER TABLE `server_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `userlist`
--
ALTER TABLE `userlist`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
