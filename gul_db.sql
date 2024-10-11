-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2024 at 12:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gul_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `amount`
--

CREATE TABLE `amount` (
  `id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `amount`
--

INSERT INTO `amount` (`id`, `amount`) VALUES
(1, 10000),
(2, 20000),
(3, 30000),
(4, 40000),
(5, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'skin&care'),
(2, 'sports'),
(3, 'fruits'),
(4, 'vegetables'),
(5, 'jewellery'),
(6, 'electronics');

-- --------------------------------------------------------

--
-- Table structure for table `costumer_form`
--

CREATE TABLE `costumer_form` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `costumer_form`
--

INSERT INTO `costumer_form` (`id`, `category`, `name`, `email`, `phone`, `date_of_birth`, `gender`, `address1`, `address2`, `city`, `payment`) VALUES
(3, 'jewellery', 'tehreem', 'gul@gmail.com', 354645365, '4102003', '', 'phuleli', 'phuleli', '', ''),
(4, 'cosmetics', 'ali', 'ali@gmail.com', 684239846, '4102003', 'female', 'phuleli', 'phuleli', 'karachi', 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `name`) VALUES
(1, 'gul@gmail.com', 'tehreem', 'gul');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `products` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `products`, `description`, `price`, `image`) VALUES
(1, 'cleanser', 'Common ingredients include surfactants (such as sodium lauryl sulfate or sodium cocoyl isethionate) that help remove oil and dirt,', 1500, 'imageskincare.jpg'),
(2, 'ball', 'A typical soccer ball is spherical and usually made of leather or synthetic material. It has a circumference of about 68-70 cm (27-28 inches) and weighs between 410-450 grams (14-16 ounces). ', 4000, 'imageball.jfif'),
(6, 'earbuds', 'Earbuds typically consist of small, lightweight units that fit snugly inside the ear canal. They are designed to be compact and portable, making them ideal for use during activities like commuting, exercising, or working', 1000, 'imageearbuds.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `products_cart`
--

CREATE TABLE `products_cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_cart`
--

INSERT INTO `products_cart` (`id`, `product_name`, `quantity`, `price`) VALUES
(11, 'eye-liner', 2, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `passowrd` varchar(255) DEFAULT NULL,
  `amount_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `passowrd`, `amount_id`) VALUES
(1, 'tehreemgul', 'gul@gmail.com', '202cb962ac59075b964b07152d234b70', 2),
(2, 'danish', 'danish123@gmail.com', '698d51a19d8a121ce581499d7b701668', 5);

-- --------------------------------------------------------

--
-- Table structure for table `register_page`
--

CREATE TABLE `register_page` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_page`
--

INSERT INTO `register_page` (`id`, `name`, `email`, `password`) VALUES
(1, 'ali', 'ali@gmail.com', '86318e52f5ed4801abe1d13d509443de'),
(2, 'aiman', 'aiman@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'mahikhan', 'mahikhanwd1020@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'danish', 'danish123@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `shop_reg`
--

CREATE TABLE `shop_reg` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `passowrd` varchar(255) DEFAULT NULL,
  `Shop_name` varchar(255) DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `CNIC_no` int(11) DEFAULT NULL,
  `Phone_no` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop_reg`
--

INSERT INTO `shop_reg` (`id`, `Name`, `Email`, `passowrd`, `Shop_name`, `Location`, `CNIC_no`, `Phone_no`, `image`) VALUES
(1, 'Tehreemgul', 'gul@gmail.com', '698d51a19d8a121ce581499d7b701668', 'Cosmetics', 'Heerabad', 335734, 231245, 'imageskincare.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `std_form`
--

CREATE TABLE `std_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amount`
--
ALTER TABLE `amount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `costumer_form`
--
ALTER TABLE `costumer_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_cart`
--
ALTER TABLE `products_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD KEY `amount_id` (`amount_id`);

--
-- Indexes for table `register_page`
--
ALTER TABLE `register_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_reg`
--
ALTER TABLE `shop_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `std_form`
--
ALTER TABLE `std_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amount`
--
ALTER TABLE `amount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `costumer_form`
--
ALTER TABLE `costumer_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products_cart`
--
ALTER TABLE `products_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register_page`
--
ALTER TABLE `register_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shop_reg`
--
ALTER TABLE `shop_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `std_form`
--
ALTER TABLE `std_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk` FOREIGN KEY (`id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `register_ibfk_1` FOREIGN KEY (`amount_id`) REFERENCES `amount` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
