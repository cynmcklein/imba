-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 07:54 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `components`
--

CREATE TABLE `components` (
  `id` int(255) NOT NULL,
  `itemcode` varchar(255) NOT NULL,
  `itemname` varchar(255) NOT NULL,
  `itemtype` varchar(255) NOT NULL,
  `suppliername` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `components`
--

INSERT INTO `components` (`id`, `itemcode`, `itemname`, `itemtype`, `suppliername`, `quantity`) VALUES
(2, 'C-432', 'Cylinder Wide', 'Big Apple', 'mark corpuz', '1325'),
(7, '4321', 'Screen Printer', 'Big Apple', 'Allia Necio', '574');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(20) NOT NULL,
  `company` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `conperson` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `agent_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `company`, `email`, `contact`, `conperson`, `address`, `agent_name`) VALUES
(145, 'Bokbok Sisig Bagnet', 'sample@sample.com', '09875345623', 'Jason Alvarez', 'San Pedro Laguna', 'Carl Castro'),
(147, 'Zues Manifacturing', 'sample@sample', '09123456789', 'Juan Cruz', 'GMA Cavite', 'Tin Galang'),
(148, 'Adidas', 'Sample@sample', '09123456789', '09099292905', 'Bacoor Cavite', 'Ana Tan'),
(149, 'Mitsu Tech', 'sampleemail@s', '09092152315', 'Kurt Tan', 'Muntinlupa', 'Adrian Yu'),
(150, 'Kinspec', 'email@sample', '09325326432', 'Arvin Austria', 'GMA Cavite', 'Joy Chua'),
(152, 'sample', 'sample@smple', '0945737453453', 'Cyan', 'Caavite', ''),
(153, 'asdsd', 'sdsd@sdsd', 'sdsd', 'asds', 'asdsda', ''),
(154, 'sadasad', 'dasdas@sdas', 'asdasd', 'sdasd', 'asdasd', ''),
(159, 'sdasda', 'sdasds@sdasdas', 'sdads', 'asdasd', 'asdasda', ''),
(160, 'sdasd', 'sdasd@sdas', 'asdasd', 'sadasd', 'asdasd', ''),
(161, 'asdsa', 'sdasd@sda', '231231', 'asdas', 'adasd', 'adsasad');

-- --------------------------------------------------------

--
-- Table structure for table `customerinfo`
--

CREATE TABLE `customerinfo` (
  `ID` int(20) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `ConPerson` varchar(15) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerinfo`
--

INSERT INTO `customerinfo` (`ID`, `Company`, `Email`, `Contact`, `ConPerson`, `Address`, `City`) VALUES
(1, 'Mang Inasal', 'manginasalporkisisig.com', '639099292908', '09675428976', 'San Pedro Laguna', 'Laguna');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'admin', '1234', 'admin'),
(2, 'prod', '4321', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `order_history`
--

CREATE TABLE `order_history` (
  `id` int(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `plastic_type` varchar(100) NOT NULL,
  `number_colors` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `customer_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_history`
--

INSERT INTO `order_history` (`id`, `product_name`, `plastic_type`, `number_colors`, `qty`, `customer_id`) VALUES
(3, 'qwerty saaf', 'Open this select menu', '231', '1231', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `itemcode` varchar(255) NOT NULL,
  `itemname` varchar(255) NOT NULL,
  `itemtype` varchar(255) NOT NULL,
  `customername` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `itemcode`, `itemname`, `itemtype`, `customername`, `quantity`) VALUES
(1, '5432', 'Milktea Carier', 'Big Apple', 'Jasper Alpa', '200'),
(2, '4231', 'Table Wrapper', 'PP', 'Kwinie Sampang', '500'),
(3, 'B150', 'BigApple cup', 'Big Apple', 'Jane Ubana', '400'),
(5, '5654', 'Trashbag', 'Big Apple', 'Lucky Dumaguin', '1000'),
(7, '8765', 'Seedling Bags', 'Big Apple', 'Arthur Nunez', '550');

-- --------------------------------------------------------

--
-- Table structure for table `purchasecomponents`
--

CREATE TABLE `purchasecomponents` (
  `id` int(100) NOT NULL,
  `requestor` varchar(100) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  `PO#` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `po_date` varchar(100) NOT NULL,
  `order_date` varchar(100) NOT NULL,
  `recieve_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchasecomponents`
--

INSERT INTO `purchasecomponents` (`id`, `requestor`, `vendor`, `PO#`, `description`, `po_date`, `order_date`, `recieve_date`) VALUES
(1, 'sample', 'sample', '12345', 'sample', 'sample', 'sample', 'sample'),
(2, 'cyan', 'cyan', '12345', 'cyan', '2022-02-05', '2022-02-19', '2022-02-19'),
(6, 'dasdsa', 'dsadasd', '12313', 'dasda', '2022-03-12', '2022-03-26', '2022-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `purchaserawmaterials`
--

CREATE TABLE `purchaserawmaterials` (
  `id` int(100) NOT NULL,
  `Requestor` varchar(100) NOT NULL,
  `Vendor` varchar(100) NOT NULL,
  `PO#` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `PO_Date` varchar(100) NOT NULL,
  `Order_Date` varchar(100) NOT NULL,
  `Recieve_Date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchaserawmaterials`
--

INSERT INTO `purchaserawmaterials` (`id`, `Requestor`, `Vendor`, `PO#`, `Description`, `PO_Date`, `Order_Date`, `Recieve_Date`) VALUES
(1, 'Mr. Pereyra', 'Apple', '13252', 'Adding another item', '2022-02-03', '2022-02-10', '2022-02-18'),
(23, 'BigApple', 'Arlene Pereyra', '12345678', 'Adding Material', '2022-03-03', '2022-03-23', '2022-03-04'),
(24, 'Chris Tan', 'Ashley', '4121', 'Material', '2022-03-16', '2022-03-15', '2022-03-13'),
(26, 'Mike Tiu', 'De Guzman', '523262', 'Item Add', '2022-03-03', '2022-03-04', '2022-03-05');

-- --------------------------------------------------------

--
-- Table structure for table `rawmaterials`
--

CREATE TABLE `rawmaterials` (
  `id` int(255) NOT NULL,
  `itemcode` varchar(255) NOT NULL,
  `itemname` varchar(255) NOT NULL,
  `itemtype` varchar(255) NOT NULL,
  `suppliername` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rawmaterials`
--

INSERT INTO `rawmaterials` (`id`, `itemcode`, `itemname`, `itemtype`, `suppliername`, `quantity`) VALUES
(2, '1235', 'OBM White', 'Pelletized PE', 'Carl', 421),
(12, 'PE-2A', 'HD Green', 'Pelletized HD', 'Cyan', 126),
(13, 'B432', 'PE Printed', 'LDPE', 'Arvin Austria', 123),
(15, 'P3-3A', 'White Gray', 'LDPE', '123', 123),
(16, 'PE-32', 'PE Printed', 'Pelletized PE', 'Adrian salas', 532),
(18, '6543', 'Qamar', 'LLDPE', 'Harvey Ulavia', 645),
(19, '31251', 'Sample', 'Pelletized HD', 'cyan', 31),
(20, '1312', 'Item sample', 'Pelletized HD', 'han', 321);

-- --------------------------------------------------------

--
-- Table structure for table `rfiddb`
--

CREATE TABLE `rfiddb` (
  `id` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_type` varchar(100) NOT NULL,
  `supplier_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rfiddb`
--

INSERT INTO `rfiddb` (`id`, `code`, `item_name`, `item_type`, `supplier_name`) VALUES
('', '', '', 'Open this select menu', ''),
('1', '46543654651', 'OBM White', 'PE', 'agdasgfafas'),
('13942490', '664272', 'PE', 'Open this select menu', 'afasdfsad'),
('23123', 'asdsd', 'adsda', 'LDPE', 'sddsd'),
('CA0AFF80', '68736435', 'HDPE', 'HDPE', 'sfasgdhwwea'),
('F3485790', '51252141', 'PP', 'PP', 'sdhwqwras');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(50) NOT NULL,
  `company` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `company`, `email`, `contact`, `address`) VALUES
(9, 'Kuntucky Corp', 'sample@sample.com', '09837562637', 'Alabang'),
(10, 'Tattoo Dave', 'sample@sample.com', '09872647173', 'General Trias Cavite'),
(23, 'Uratan Inc', 'sample@email', '09123456789', 'San Pablo Laguna'),
(24, 'Unilever', 'email@sam', '091234576543', 'Muntinlupa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group_name` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT 'no_image.jpg',
  `status` int(1) NOT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `group_name`, `image`, `status`, `last_login`) VALUES
(43, 'Cyan', 'Admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin', '797y2ilu43.jpg', 1, '2022-07-18 05:46:36'),
(44, 'Cyan Pereyra', 'Prod', 'f6c433acac2a27cc06a0625896fe3e540a275ac9', 'Production', '3s33yatr44.jpg', 1, '2022-07-16 09:53:06'),
(45, 'Cyan Pereyra', 'Cyan', '97bfc067fcea5dde150d9c32fcea1c53c951883d', 'Admin', 'syjpmjk245.jpg', 1, '2022-03-15 20:46:28'),
(46, 'Allen Macin', 'Allen', 'a4aed34f4966dc8688b8e67046bf8b276626e284', 'Admin', 'y5kcc5nc46.jpg', 1, '2022-03-15 20:09:19'),
(47, 'Arlene Pangilinan', 'Arlene', '616e262a0de67378046be3a5b05580b565ffddaa', 'Admin', 'no_image.jpg', 1, '2022-03-15 11:21:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `components`
--
ALTER TABLE `components`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerinfo`
--
ALTER TABLE `customerinfo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_history`
--
ALTER TABLE `order_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchasecomponents`
--
ALTER TABLE `purchasecomponents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchaserawmaterials`
--
ALTER TABLE `purchaserawmaterials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rawmaterials`
--
ALTER TABLE `rawmaterials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rfiddb`
--
ALTER TABLE `rfiddb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `components`
--
ALTER TABLE `components`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `customerinfo`
--
ALTER TABLE `customerinfo`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_history`
--
ALTER TABLE `order_history`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `purchasecomponents`
--
ALTER TABLE `purchasecomponents`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `purchaserawmaterials`
--
ALTER TABLE `purchaserawmaterials`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `rawmaterials`
--
ALTER TABLE `rawmaterials`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
