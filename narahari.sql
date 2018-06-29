-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 28, 2018 at 12:14 AM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `narahari`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_checkout`
--

CREATE TABLE IF NOT EXISTS `tbl_checkout` (
  `checkout_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `order_date` datetime NOT NULL,
  PRIMARY KEY (`checkout_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_checkout`
--

INSERT INTO `tbl_checkout` (`checkout_id`, `firstname`, `lastname`, `address1`, `address2`, `phone`, `email`, `city`, `country`, `order_date`) VALUES
(1, 'fdgdf', 'dfgdf', 'fdgdf', 'sdfsd', '1234567890', 'test@g.com', 'sdffsdf', 'dsfsd', '2017-10-30 12:32:47'),
(2, 'Malini', 'Subramaniam', 'L7360 Jalan Rubi', 'Taman Setia', '0165507947', 'hema@gmail.com.my', 'Kuala Lumpur', 'Malaysia', '2018-03-27 04:22:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE IF NOT EXISTS `tbl_order_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(15) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `qty` int(15) DEFAULT NULL,
  `checkout_id` int(15) DEFAULT NULL,
  `status` varchar(100) DEFAULT 'PROCESSING',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`id`, `product_id`, `product_name`, `qty`, `checkout_id`, `status`) VALUES
(1, 2, 'Product 2', 3, 1, 'PROCESSING'),
(2, 4, 'Product 4', 2, 1, 'PROCESSING'),
(3, 4, '150gwt filled concept', 1, 2, 'PROCESSING');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) DEFAULT NULL,
  `product_desc` text,
  `product_qty` int(15) DEFAULT NULL,
  `product_img` text,
  `created_date` datetime NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `product_name`, `product_desc`, `product_qty`, `product_img`, `created_date`, `created_by`) VALUES
(1, '200gwt PP bottle', 'Tablets packing type ...200gwt in PP bottle', 5, '200gwt.png', '2017-10-30 05:37:19', '1'),
(2, '400gwt  PP bottle', 'Tablets packing type ...400gwt in PP bottle', 4, '400gwt.png', '2017-10-30 05:37:48', '1'),
(3, '800gwt PP bottle', 'Tablets packing type ...800gwt in PP bottle', 10, '800gwt.png', '2017-10-30 05:38:22', '1'),
(4, '150gwt filled concept', 'Tablets packing in box 150gwt filled concept', 7, '150gwt-filled-concept.png', '2017-10-30 05:38:47', '1'),
(5, '1kg bulk concept', 'Tablets packing in 1kg bulk concept', 5, '1kg-bulk-concept.png', '2017-10-30 05:39:22', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE IF NOT EXISTS `tbl_slider` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `slider` text,
  `status` int(15) DEFAULT '1',
  `created_date` datetime NOT NULL,
  `data-transition` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `slider`, `status`, `created_date`, `data-transition`) VALUES
(1, 'Slider_1.jpg', 0, '2017-11-03 06:09:10', 'rs-20'),
(2, 'Slider_3.jpg', 1, '2017-11-22 16:59:50', 'fade');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `logged_in` varchar(255) NOT NULL,
  `last_login` datetime NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `emp_no` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `password`, `user_type`, `email`, `logged_in`, `last_login`, `first_name`, `middle_name`, `last_name`, `emp_no`, `created`, `modified`) VALUES
(1, '1234', 'ADMIN', 'admin@gmail.com', 'TRUE', '2017-11-22 17:28:14', 'Narahari', '', '', 0, '2017-10-27 20:48:33', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
