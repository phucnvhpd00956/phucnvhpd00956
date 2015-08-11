-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2015 at 05:45 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `liptonshop`
--
CREATE DATABASE IF NOT EXISTS `liptonshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `liptonshop`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminID` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `discountPercent` int(11) NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `password`, `name`, `address`, `email`, `discountPercent`) VALUES
('admin', 'admin', 'Nguy?n V?n Hoï¿½ng Phï¿½c', '83 Nui Thanh', 'phucnvh@fpt.edu.vn', 10);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `categoryID` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customerID` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `phone` int(12) NOT NULL,
  `age` int(3) NOT NULL,
  PRIMARY KEY (`customerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `email`, `password`, `name`, `address`, `phone`, `age`) VALUES
('001', 'phucnvh@gmail.com', 'tandaica123', 'phucnvh', '83 nui thanh', 935536547, 18);

-- --------------------------------------------------------

--
-- Table structure for table `orderitem`
--

CREATE TABLE IF NOT EXISTS `orderitem` (
  `itemID` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  PRIMARY KEY (`itemID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderitem`
--

INSERT INTO `orderitem` (`itemID`, `orderID`, `productID`, `price`, `number`) VALUES
(0, 41, 4, 0, 90);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `orderID` int(11) NOT NULL,
  `customerID` varchar(200) NOT NULL,
  `dayOrder` date NOT NULL,
  `dayDelivery` int(11) NOT NULL,
  `orderAddress` text NOT NULL,
  `Phone` int(12) NOT NULL,
  PRIMARY KEY (`orderID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `customerID`, `dayOrder`, `dayDelivery`, `orderAddress`, `Phone`) VALUES
(0, 'nguyá»…n vÄƒn hoÃ ng phÃºc', '2015-03-06', 2015, 'phucnvhcntt@gmail.com', 93556479);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `productID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `infomation` text NOT NULL,
  `images` varchar(200) NOT NULL,
  `discountPercent` decimal(10,0) NOT NULL,
  PRIMARY KEY (`productID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `categoryID`, `name`, `price`, `infomation`, `images`, `discountPercent`) VALUES
(1, 1, 'LipTon nhan vang', 34000, 'Cong d?ng: Giï¿½p cho tinh th?n b?n tr? lï¿½n th? gi?n vï¿½ t?ng s? t?nh tï¿½o, ?em l?i hi?u qu? cao trong cï¿½ng vi?c.<br/> Cï¿½ch pha ch?: - Cho tï¿½i trï¿½ Lipton vï¿½o tï¿½ch, ?? n??c sï¿½i vï¿½o vï¿½ ??i 2 - 3 phï¿½t - Trong lï¿½c ch? ??i, hï¿½t th?t sau vï¿½ g?p tay l?i ?? t?o thï¿½nh hï¿½nh ch? L- Gi? ? v? ?ï¿½, ??a ??u g?i trï¿½i lï¿½n tr?m vï¿½o khu?u tay ph?i r?i ??u g?i ph?i ch?m khu?u tay trï¿½i. Lï¿½m nh? v?y 10 l?n.- Nhï¿½ng tï¿½i trï¿½ 5 l?n r?i l?y ra, ?ï¿½m ???ng, chanh ho?c s?a tu? ï¿½. Th??ng th?c trï¿½.- Khi th??ng th?c h??ng v? trï¿½ Lipton, b?n s? nhï¿½n th? gi?i theo 1 cï¿½ch m?i.', '3.png', '5'),
(2, 2, 'Tra LipTon bat giac', 41000, 'Thï¿½ng s? v? s?n ph?m:C?p nh?t: 25/02/2015 - 09:12	Tï¿½nh tr?ng: M?iB?o hï¿½nh: Khï¿½ng cï¿½ 	Xu?t x?: Chï¿½nh hï¿½ngHï¿½ng s?n xu?t: Lipto	Lo?i trï¿½: Trï¿½ vï¿½ng?ang c?p nh?tD?ng thï¿½nh ph?m: Trï¿½ qua ch? bi?nH?p gi?y	Xu?t x?: Vi?t Nam', '15.JPG', '11'),
(3, 3, 'TrÃ  chai', 30000, 'cÃ²n hÃ ng', '5.png', '10'),
(6, 7, 'TrÃ  Nature 100%', 50000, 'cÃ²n hÃ ng', '17.png', '11');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
