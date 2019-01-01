-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2019 at 11:25 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `mytable`
--

CREATE TABLE `mytable` (
  `ID` int(11) NOT NULL,
  `Type` varchar(6) NOT NULL,
  `SKU` varchar(20) NOT NULL,
  `Name` varchar(68) NOT NULL,
  `Published` bit(1) NOT NULL,
  `Is_featured` bit(1) NOT NULL,
  `Visibility_in_catalog` varchar(7) NOT NULL,
  `Short_description` varchar(1458) NOT NULL,
  `Description` varchar(30) DEFAULT NULL,
  `Date_sale_price_starts` varchar(30) DEFAULT NULL,
  `Date_sale_price_ends` varchar(30) DEFAULT NULL,
  `Tax_status` varchar(7) NOT NULL,
  `Tax_class` varchar(30) DEFAULT NULL,
  `In_stock` bit(1) NOT NULL,
  `Stock` varchar(30) DEFAULT NULL,
  `Low_stock_amount` varchar(30) DEFAULT NULL,
  `Backorders_allowed` bit(1) NOT NULL,
  `Sold_individually` bit(1) NOT NULL,
  `Weight_kg` bit(1) DEFAULT NULL,
  `Length_cm` varchar(30) DEFAULT NULL,
  `Width_cm` varchar(30) DEFAULT NULL,
  `Height_cm` varchar(30) DEFAULT NULL,
  `Allow_customer_reviews` bit(1) NOT NULL,
  `Purchase_note` varchar(30) DEFAULT NULL,
  `Sale_price` varchar(30) DEFAULT NULL,
  `Regular_price` int(11) NOT NULL,
  `Categories` varchar(255) NOT NULL,
  `Tags` varchar(30) DEFAULT NULL,
  `Shipping_class` varchar(30) DEFAULT NULL,
  `Images` varchar(123) DEFAULT NULL,
  `Download_limit` varchar(30) DEFAULT NULL,
  `Download_expiry_days` varchar(30) DEFAULT NULL,
  `Parent` varchar(30) DEFAULT NULL,
  `Grouped_products` varchar(30) DEFAULT NULL,
  `Upsells` varchar(30) DEFAULT NULL,
  `Crosssells` varchar(30) DEFAULT NULL,
  `External_URL` varchar(30) DEFAULT NULL,
  `Button_text` varchar(30) DEFAULT NULL,
  `Position` bit(1) NOT NULL,
  `Attribute_1_name` varchar(13) NOT NULL,
  `Attribute_1_values` varchar(255) DEFAULT NULL,
  `Attribute_1_visible` bit(1) DEFAULT NULL,
  `Attribute_1_global` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table2`
--

CREATE TABLE `table2` (
  `ID` int(11) NOT NULL,
  `Type` varchar(6) NOT NULL,
  `SKU` varchar(11) DEFAULT NULL,
  `Name` varchar(76) NOT NULL,
  `Published` bit(1) NOT NULL,
  `Is_featured` bit(1) NOT NULL,
  `Visibility_in_catalog` varchar(7) NOT NULL,
  `Short_description` varchar(696) NOT NULL,
  `Description` varchar(30) DEFAULT NULL,
  `Date_sale_price_starts` varchar(30) DEFAULT NULL,
  `Date_sale_price_ends` varchar(30) DEFAULT NULL,
  `Tax_status` varchar(7) NOT NULL,
  `Tax_class` varchar(30) DEFAULT NULL,
  `In_stock` bit(1) NOT NULL,
  `Stock` varchar(30) DEFAULT NULL,
  `Low_stock_amount` varchar(30) DEFAULT NULL,
  `Backorders_allowed` bit(1) NOT NULL,
  `Sold_individually` bit(1) NOT NULL,
  `Weight_kg` int(11) DEFAULT NULL,
  `Length_cm` int(11) DEFAULT NULL,
  `Width_cm` decimal(3,1) DEFAULT NULL,
  `Height_cm` int(11) DEFAULT NULL,
  `Allow_customer_reviews` bit(1) NOT NULL,
  `Purchase_note` varchar(30) DEFAULT NULL,
  `Sale_price` varchar(30) DEFAULT NULL,
  `Regular_price` int(11) NOT NULL,
  `Categories` varchar(14) NOT NULL,
  `Tags` varchar(30) DEFAULT NULL,
  `Shipping_class` varchar(30) DEFAULT NULL,
  `Images` varchar(113) DEFAULT NULL,
  `Download_limit` varchar(30) DEFAULT NULL,
  `Download_expiry_days` varchar(30) DEFAULT NULL,
  `Parent` varchar(30) DEFAULT NULL,
  `Grouped_products` varchar(30) DEFAULT NULL,
  `Upsells` varchar(30) DEFAULT NULL,
  `Crosssells` varchar(30) DEFAULT NULL,
  `External_URL` varchar(30) DEFAULT NULL,
  `Button_text` varchar(30) DEFAULT NULL,
  `Position` bit(1) NOT NULL,
  `Attribute_1_name` varchar(13) DEFAULT NULL,
  `Attribute_1_values` varchar(115) DEFAULT NULL,
  `Attribute_1_visible` bit(1) DEFAULT NULL,
  `Attribute_1_global` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mytable`
--
ALTER TABLE `mytable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `table2`
--
ALTER TABLE `table2`
  ADD PRIMARY KEY (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
