-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 24, 2018 at 02:19 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `customerid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`customerid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerid`, `email`, `firstname`, `lastname`, `street`, `city`, `state`, `zip`, `phone`, `password`) VALUES
(1, 'namnguyen@gmail.com', 'Nam', 'Nguyen', NULL, 'Ha Noi', NULL, NULL, '0123456789', '123456'),
(2, 'hoangtran@yahoo.com', 'Hoang', 'Tran', NULL, 'Da Nang', NULL, NULL, '0987654321', '123123'),
(3, 'linhle@hotmail.com', 'Linh', 'Le', NULL, 'Ho Chi Minh', NULL, NULL, '0147852369', 'abcabc');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customerid` int(11) NOT NULL,
  `total` decimal(12,2) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`order_id`),
  KEY `customerid` (`customerid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `order_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(10) DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `ship_date` datetime DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`order_detail_id`),
  KEY `order_id` (`order_id`),
  KEY `productid` (`productid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `productid` int(11) NOT NULL AUTO_INCREMENT,
  `productname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `by_user` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productid`, `productname`, `price`, `description`, `image`, `by_user`) VALUES
(1, 'APPLE IPAD AIR 2', '399.99', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Mauris laoreet sollicitudin purus vitae vehicula. Cras malesuada odio eu congue egestas. Nunc quis velit tempus, luctus velit sed, tincidunt risus. In bibendum non augue nec laoreet.', 'https://templates.joomla-monster.com/joomla30/jm-product-catalog/media/djcatalog2/images/item/0/custom/apple-ipad-air-2_255x255-c.jpg', 'admin'),
(2, 'LAWN MOWERS ZIP BLACK + DECKER 1200W', '79.99', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Mauris laoreet sollicitudin purus vitae vehicula. Cras malesuada odio eu congue egestas. Nunc quis velit tempus, luctus velit sed, tincidunt risus. In bibendum non augue nec laoreet.', 'https://templates.joomla-monster.com/joomla30/jm-product-catalog/media/djcatalog2/images/item/0/black-decker-1200w_m.jpg', 'admin'),
(3, 'IRONS TEFAL ULTIMATE ANTI-CALC', '79.99', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Mauris laoreet sollicitudin purus vitae vehicula. Cras malesuada odio eu congue egestas. Nunc quis velit tempus, luctus velit sed, tincidunt risus. In bibendum non augue nec laoreet.', 'https://templates.joomla-monster.com/joomla30/jm-product-catalog/media/djcatalog2/images/item/0/tefal-ultimate-anti-calc_m.jpg', 'admin'),
(4, 'GRILL BARBECUE STAINLESS STEEL GAS GRILL', '179.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Mauris laoreet sollicitudin purus vitae vehicula. Cras malesuada odio eu congue egestas. Nunc quis velit tempus, luctus velit sed, tincidunt risus. In bibendum non augue nec laoreet.', 'https://templates.joomla-monster.com/joomla30/jm-product-catalog/media/djcatalog2/images/item/0/stainless-steel-gas-grill_m.jpg', 'admin'),
(5, 'GRILL BARBECUE KETTLE CHARCOAL BARBECUE', '69.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Mauris laoreet sollicitudin purus vitae vehicula. Cras malesuada odio eu congue egestas. Nunc quis velit tempus, luctus velit sed, tincidunt risus. In bibendum non augue nec laoreet.', 'https://templates.joomla-monster.com/joomla30/jm-product-catalog/media/djcatalog2/images/item/0/kettle-charcoal-barbecue_m.jpg', 'admin'),
(6, 'LAWN MOWERS BOSCH ROTAK 32R ELECTRIC', '59.99', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Mauris laoreet sollicitudin purus vitae vehicula. Cras malesuada odio eu congue egestas. Nunc quis velit tempus, luctus velit sed, tincidunt risus. In bibendum non augue nec laoreet.', 'https://templates.joomla-monster.com/joomla30/jm-product-catalog/media/djcatalog2/images/item/0/bosch-rotak-32r-electric_m.jpg', 'admin'),
(7, 'CHROME FINISHED LIGHT', '299.99', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Mauris laoreet sollicitudin purus vitae vehicula. Cras malesuada odio eu congue egestas. Nunc quis velit tempus, luctus velit sed, tincidunt risus. In bibendum non augue nec laoreet.', 'https://templates.joomla-monster.com/joomla30/jm-product-catalog/media/djcatalog2/images/item/0/chrome-finished-light_m.jpg', 'admin'),
(8, 'DELL VENUE 10 PRO 5055', '199.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Mauris laoreet sollicitudin purus vitae vehicula. Cras malesuada odio eu congue egestas. Nunc quis velit tempus, luctus velit sed, tincidunt risus. In bibendum non augue nec laoreet.', 'https://templates.joomla-monster.com/joomla30/jm-product-catalog/media/djcatalog2/images/item/0/dell-venue-10-pro-5055_m.jpg', 'admin'),
(9, 'PHILIPS AZUR PERFORMER', '49.99', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Mauris laoreet sollicitudin purus vitae vehicula. Cras malesuada odio eu congue egestas. Nunc quis velit tempus, luctus velit sed, tincidunt risus. In bibendum non augue nec laoreet.', 'https://templates.joomla-monster.com/joomla30/jm-product-catalog/media/djcatalog2/images/item/0/philips-azur-performer_m.jpg', 'admin'),
(10, 'LENOVO C20 ALL-IN-ONE DESKTOP', '349.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Mauris laoreet sollicitudin purus vitae vehicula. Cras malesuada odio eu congue egestas. Nunc quis velit tempus, luctus velit sed, tincidunt risus. In bibendum non augue nec laoreet.', 'image/list1.jpg', 'admin');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `customers` (`customerid`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `products` (`productid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
