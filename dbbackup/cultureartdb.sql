-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2022 at 09:11 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cultureartdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addcategory`
--

CREATE TABLE `tbl_addcategory` (
  `catid` int(11) NOT NULL,
  `categoryname` varchar(255) NOT NULL,
  `addeddate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_addcategory`
--

INSERT INTO `tbl_addcategory` (`catid`, `categoryname`, `addeddate`) VALUES
(1, 'Mehandi', '2022-08-10'),
(2, 'Painting', '2022-08-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addsubcategory`
--

CREATE TABLE `tbl_addsubcategory` (
  `subcatid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `subcategoryname` varchar(255) NOT NULL,
  `addeddate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_addsubcategory`
--

INSERT INTO `tbl_addsubcategory` (`subcatid`, `catid`, `subcategoryname`, `addeddate`) VALUES
(1, 1, 'Exclusive bridal mehandi', '2022-08-10'),
(2, 1, 'Wedding  mehandi', '2022-08-10'),
(4, 1, 'Sider mehandi', '2022-08-31'),
(5, 1, 'Party mehandi', '2022-08-31'),
(6, 2, 'Baby arrival set', '2022-08-31'),
(7, 2, 'Haldi kurta painting', '2022-08-31'),
(8, 2, 'clothes painting', '2022-08-31'),
(9, 2, 'Mask painting', '2022-08-31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `aid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`aid`, `email`, `password`) VALUES
(1, 'cultureadmin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `added_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartid`, `rid`, `pid`, `pname`, `price`, `added_date`) VALUES
(1, 3, 2, 'Wedding bride meadi', 250, '08/09/2022'),
(3, 5, 1, 'Bridal mendi', 199, '09/09/2022 11:52:34 am'),
(4, 5, 6, 'wedding mendi', 203, '09/09/2022 11:52:49 am');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `ctid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `ctname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`ctid`, `sid`, `ctname`) VALUES
(1, 1, 'Rajkot'),
(2, 1, 'Ahemdabad'),
(3, 1, 'Surat'),
(4, 2, 'Varansi'),
(5, 2, 'Noida'),
(6, 2, 'Gaziabad'),
(7, 3, 'Navada');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contactid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contactid`, `name`, `email`, `phone`, `message`) VALUES
(1, 'aman', 'aman@gmail.com', 9998003879, 'hi i just contact'),
(2, 'Name', 'Email', 0, 'Message...'),
(3, 'aman', 'brijesh1990@gmail.com', 9998003879, 'sdfsfdsfdsf'),
(4, 'ankita', 'ankita@gmail.com', 9173357217, 'hi ankita'),
(5, 'brijesh', 'bkpandey.pandey@gmail.com', 9998003879, 'hi i am brijesh ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE `tbl_country` (
  `cid` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`cid`, `cname`) VALUES
(1, 'india'),
(2, 'usa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `pid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `subcatid` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `oldprice` int(11) NOT NULL,
  `offerprice` int(11) NOT NULL,
  `added_date` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`pid`, `catid`, `subcatid`, `pname`, `pimage`, `oldprice`, `offerprice`, `added_date`, `description`) VALUES
(1, 1, 1, 'Bridal mendi', 'uploads/products/p1.jpg', 250, 199, '2022-08-15', 'good'),
(2, 1, 1, 'Wedding bride meadi', 'uploads/products/g1.jpg', 350, 250, '2022-08-15', 'hi'),
(3, 1, 1, 'Bridal mendi', 'uploads/products/g1.jpg', 450, 250, '2022-08-31', 'fg'),
(4, 1, 1, 'Bridal mendi', 'uploads/products/t3.jpg', 250, 199, '2022-08-31', 'sad'),
(5, 1, 2, 'wedding mendi', 'uploads/products/t2.jpg', 255, 155, '2022-08-31', 'gg'),
(6, 1, 2, 'wedding mendi', 'uploads/products/team1.jpg', 255, 203, '2022-08-31', 'adaa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `rid` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `cid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `ctid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`rid`, `photo`, `firstname`, `lastname`, `email`, `mobile`, `gender`, `password`, `address`, `cid`, `sid`, `ctid`) VALUES
(1, 'uploads/customer/t1.jpg', 'aman', 'pandya', 'aman@gmail.com', 9998003879, 'male', 'MTIzNDU2', '150 feet ring road rajkot', 1, 1, 1),
(3, 'uploads/customer/1.jpeg', 'krupanshi', 'faldu', 'krupanshifaldu@gmail.com', 9173357217, 'male', 'MTIzNDU2', '150 feet ring road rajkot', 1, 1, 1),
(5, 'uploads/customer/7.webp', 'brijesh', 'pandey', 'bkpandey.pandey@gmail.com', 9998003879, 'male', 'MTIzNDU2', '150 feet ring road rajkot', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`sid`, `cid`, `sname`) VALUES
(1, 1, 'gujrat'),
(2, 1, 'Uttar pradesh'),
(3, 2, 'California');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_addcategory`
--
ALTER TABLE `tbl_addcategory`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `tbl_addsubcategory`
--
ALTER TABLE `tbl_addsubcategory`
  ADD PRIMARY KEY (`subcatid`),
  ADD KEY `catid` (`catid`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `rid` (`rid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`ctid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `tbl_country`
--
ALTER TABLE `tbl_country`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `catid` (`catid`),
  ADD KEY `subcatid` (`subcatid`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `sid` (`sid`),
  ADD KEY `ctid` (`ctid`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `cid` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_addcategory`
--
ALTER TABLE `tbl_addcategory`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_addsubcategory`
--
ALTER TABLE `tbl_addsubcategory`
  MODIFY `subcatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `ctid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_country`
--
ALTER TABLE `tbl_country`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
