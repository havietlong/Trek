-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2023 at 06:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trek`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `password_customer` varchar(255) DEFAULT NULL,
  `name_customer` varchar(255) DEFAULT NULL,
  `phoneNumber_customer` varchar(255) DEFAULT NULL,
  `address_customer` varchar(255) DEFAULT NULL,
  `email_customer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `id_description` int(11) NOT NULL,
  `name_description` varchar(255) DEFAULT NULL,
  `content_description` varchar(255) DEFAULT NULL,
  `id_staff` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`id_description`, `name_description`, `content_description`, `id_staff`) VALUES
(6, 'Hi', '\n      Hi ', NULL),
(7, '', '\n      ', NULL),
(8, 'h', '\n<b>      Hello my friend</b>', NULL),
(15, 'Trek 1', 'Trek 1 ', NULL),
(16, 'Hello', '\n      asdasdasdadasdasdasdasdasdasdasdasdasda', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `invoiceitem`
--

CREATE TABLE `invoiceitem` (
  `quantity_product` int(11) DEFAULT NULL,
  `price_product` decimal(10,2) DEFAULT NULL,
  `id_invoiceUser` int(11) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoiceuser`
--

CREATE TABLE `invoiceuser` (
  `id_invoiceUser` int(11) NOT NULL,
  `data_invoiceUser` datetime DEFAULT NULL,
  `totalPrice_invoiceUser` decimal(10,2) DEFAULT NULL,
  `id_customer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `id_type` int(11) DEFAULT NULL,
  `id_description` int(11) DEFAULT NULL,
  `time_product` timestamp NULL DEFAULT current_timestamp(),
  `picture_product` varchar(255) DEFAULT NULL,
  `picture_product2` varchar(3000) DEFAULT NULL,
  `picture_product3` varchar(3000) DEFAULT NULL,
  `picture_product4` varchar(3000) DEFAULT NULL,
  `quantity_product` int(11) DEFAULT NULL,
  `price_product` int(255) DEFAULT NULL,
  `name_product` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `id_type`, `id_description`, `time_product`, `picture_product`, `picture_product2`, `picture_product3`, `picture_product4`, `quantity_product`, `price_product`, `name_product`) VALUES
(14, 1, 6, '2023-04-19 04:01:16', 'https://i.ibb.co/kHnvwQD/Marlin8-23-GREY-Primary.jpg', 'https://i.ibb.co/1nqvMTy/Marlin8-23-GREY-ALT4.jpg', 'https://i.ibb.co/n7NPwdv/Marlin8-23-GREY-ALT3.jpg', 'https://i.ibb.co/TMJPCz8/Marlin8-23-GREY-ALT1.jpg', 15, NULL, 'Trek Marlin 8 23'),
(15, 1, 6, '2023-04-19 13:04:50', 'https://i.ibb.co/nj7F6yS/Marlin8-23-GREY-Primary.jpg', 'https://i.ibb.co/xC3Y7C8/Marlin8-23-GREY-ALT4.jpg', 'https://i.ibb.co/hLSN0DY/Marlin8-23-GREY-ALT3.jpg', 'https://i.ibb.co/gVWNHJx/Marlin8-23-GREY-ALT1.jpg', 15, NULL, 'Trek Marlin 9 23'),
(19, 1, 6, '2023-04-19 13:05:24', 'https://i.ibb.co/nj7F6yS/Marlin8-23-GREY-Primary.jpg', 'https://i.ibb.co/xC3Y7C8/Marlin8-23-GREY-ALT4.jpg', 'https://i.ibb.co/hLSN0DY/Marlin8-23-GREY-ALT3.jpg', 'https://i.ibb.co/gVWNHJx/Marlin8-23-GREY-ALT1.jpg', 15, NULL, 'Trek Marlin 10 23'),
(21, NULL, 15, '2023-04-19 22:50:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `name_role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_staff`
--

CREATE TABLE `role_staff` (
  `id_role` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(11) NOT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `password_staff` varchar(255) DEFAULT NULL,
  `name_staff` varchar(255) DEFAULT NULL,
  `phoneNumber_staff` varchar(255) DEFAULT NULL,
  `address_staff` varchar(255) DEFAULT NULL,
  `email_staff` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id_staff`, `id_customer`, `password_staff`, `name_staff`, `phoneNumber_staff`, `address_staff`, `email_staff`) VALUES
(1, NULL, 'staff', 'Long', NULL, NULL, 'staff@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `name_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `name_type`) VALUES
(1, 'Dual Sport'),
(2, 'Domane'),
(3, 'Émonda'),
(4, 'Slash'),
(5, '520'),
(6, '820');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`id_description`),
  ADD KEY `id_staff` (`id_staff`);

--
-- Indexes for table `invoiceitem`
--
ALTER TABLE `invoiceitem`
  ADD PRIMARY KEY (`id_invoiceUser`,`id_product`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `invoiceuser`
--
ALTER TABLE `invoiceuser`
  ADD PRIMARY KEY (`id_invoiceUser`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_type` (`id_type`),
  ADD KEY `id_description` (`id_description`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `role_staff`
--
ALTER TABLE `role_staff`
  ADD PRIMARY KEY (`id_role`,`staff_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `description`
--
ALTER TABLE `description`
  MODIFY `id_description` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `invoiceuser`
--
ALTER TABLE `invoiceuser`
  MODIFY `id_invoiceUser` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `description`
--
ALTER TABLE `description`
  ADD CONSTRAINT `description_ibfk_1` FOREIGN KEY (`id_staff`) REFERENCES `staff` (`id_staff`);

--
-- Constraints for table `invoiceitem`
--
ALTER TABLE `invoiceitem`
  ADD CONSTRAINT `invoiceitem_ibfk_1` FOREIGN KEY (`id_invoiceUser`) REFERENCES `invoiceuser` (`id_invoiceUser`),
  ADD CONSTRAINT `invoiceitem_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Constraints for table `invoiceuser`
--
ALTER TABLE `invoiceuser`
  ADD CONSTRAINT `invoiceuser_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`id_description`) REFERENCES `description` (`id_description`);

--
-- Constraints for table `role_staff`
--
ALTER TABLE `role_staff`
  ADD CONSTRAINT `role_staff_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`),
  ADD CONSTRAINT `role_staff_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id_staff`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
