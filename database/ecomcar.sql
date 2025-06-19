-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 15, 2025 at 10:12 AM
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
-- Database: `ecomcar`
--

-- --------------------------------------------------------

--
-- Table structure for table `bestseller`
--

CREATE TABLE `bestseller` (
  `id` int(11) NOT NULL,
  `proname` varchar(50) NOT NULL,
  `procat` varchar(50) NOT NULL,
  `proprice` float NOT NULL,
  `prodis` float NOT NULL,
  `proavg` varchar(500) NOT NULL,
  `proquant` int(30) NOT NULL,
  `prodesc` varchar(500) NOT NULL,
  `proimg` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bestseller`
--

INSERT INTO `bestseller` (`id`, `proname`, `procat`, `proprice`, `prodis`, `proavg`, `proquant`, `prodesc`, `proimg`, `created_at`) VALUES
(4, 'Honda Venue', 'hondacars', 13.73, 12.36, '  16-17 kmpl | 112 bhp', 70, '		It is a subcompact SUV with a 1.2-liter naturally aspirated petrol engine, a 1.0-liter turbocharged petrol engine, and a 1.5-liter diesel engine options', 'hvenue.jpg', '2025-04-28 20:52:48'),
(5, ' Maruti Dzire', 'marutisuzuki', 6.73, 6.06, ' 10-12 kmpl | 109 bhp', 70, '		It is offered with a 1.2-liter petrol engine, available in manual or automatic (AMT) transmission, and a 1.2-liter petrol + CNG version.', 'dzire.jpg', '2025-04-28 21:01:40'),
(6, 'Mahindra Marazzo ', 'mahindracars', 11.73, 10.56, ' 13-14 kmpl | 100 bhp', 30, '	The Mahindra Marazzo is a compact MPV that offers seating for seven or eight passengers and is powered by a 1.5-liter diesel engine.', 'marazzo.jpg', '2025-04-28 21:04:16'),
(7, 'Toyota-Innova-Crysta', 'toyotacars', 10.73, 9.66, ' 15-17 kmpl | 102 bhp', 30, '	The Toyota Innova Crysta is a popular MPV known for its spacious interior, comfort, and reliability, making it a good choice for families and businesses. ', 'Toyota-Innova-Crysta.jpg', '2025-04-28 21:10:12');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `proname` varchar(50) NOT NULL,
  `proprice` int(50) NOT NULL,
  `prodis` int(10) NOT NULL,
  `proimg` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `total_price` int(50) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `catname` varchar(50) NOT NULL,
  `catslug` varchar(255) NOT NULL,
  `catdes` varchar(500) NOT NULL,
  `catimg` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `catname`, `catslug`, `catdes`, `catimg`, `created_at`) VALUES
(6, 'Honda Cars', 'hondacars', 'Honda Motor Company, Ltd. is a leading Japanese manufacturer of motorcycles and a major producer of automobiles for the world market.', 'mahindra xuv700.jpg', '2025-04-25 13:11:37'),
(7, 'Maruti Suzuki Cars', 'marutisuzuki', 'Maruti Suzuki India Limited is a publicly listed Indian subsidiary of Japanese automaker Suzuki Motor Corporation. ', 'mcelerio.jpg', '2025-04-25 13:15:20'),
(8, 'Mahindra Cars', 'mahindracars', 'Mahindra & Mahindra is an Indian automobile manufacturing company headquartered in Mumbai, Maharashtra.', 'mahindra-bolero-1.jpg', '2025-04-25 13:21:00'),
(9, 'Toyota Cars', 'toyotacars', 'Toyota Motor Corporation is a Japanese multinational automotive manufacturer, renowned for its reliability and innovation, particularly in hybrid technology.', 'Toyota Rumion.jpg', '2025-04-25 13:22:33');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`) VALUES
(1, 'sayali', 'sayalishinde@123gmail.com', '8976765656', 'dxfghj', 'dgfhj', '2025-05-06 05:55:46'),
(2, 'sayali', 'sayalishinde@123gmail.com', '8976765656', 'kk', 'hii', '2025-05-06 06:07:41'),
(3, 'sayali', 'sanmati@123gamil.com', '8976765656', 'jdfghj', 'cvnb', '2025-05-07 06:43:27');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `payment_mode` varchar(50) NOT NULL,
  `products` varchar(50) NOT NULL,
  `pro_id` varchar(255) NOT NULL,
  `paid_amount` int(30) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `name`, `email`, `phone`, `address`, `payment_mode`, `products`, `pro_id`, `paid_amount`, `created_at`) VALUES
(2, 'sayali', 'sayalishinde@123gmail.com', '2147483647', 'aw', 'Cash On Delivery', 'Honda Amaze(1),Honda Brio(1)', '1, 3', 10, '2025-05-09 11:17:00'),
(4, 'sayali1', 'sayalishinde@123gmail.com', '2147483647', 'ffdf', 'Cash On Delivery', 'Honda Amaze(1),Maruti AltoK10(1),Honda Brio(1)', '1, 7, 3', 19, '2025-05-09 11:19:26'),
(5, 'sanmati22', 'sayalishinde@123gmail.com', '8976765656', 'wwwww', 'Cash On Delivery', 'Honda Brio(1)', '3', 3, '2025-05-10 09:14:17'),
(6, 'sayali66', 'sanmati@123gamil.com', '8976765656', 'nnn', 'Cash On Delivery', 'Honda Amaze(1)', '1', 7, '2025-05-10 12:34:10'),
(12, 'bjh', 'sayalishinde@123gmail.com', '8976765656', 'bmn', 'Cash On Delivery', 'Maruti AltoK10(14)', '7', 126, '2025-05-10 13:39:27'),
(14, 'sayali', 'sayalishinde@123gmail.com', '8976765656', 'sdsd', 'Cash On Delivery', 'Mahindra Scorpio (1),Honda Amaze(1)', '14, 1', 18, '2025-05-12 09:48:24');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `proname` varchar(50) NOT NULL,
  `procat` varchar(50) NOT NULL,
  `proprice` float NOT NULL,
  `prodis` float NOT NULL,
  `proavg` varchar(20) NOT NULL,
  `proquant` int(30) NOT NULL,
  `prodesc` varchar(500) NOT NULL,
  `proimg` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `proname`, `procat`, `proprice`, `prodis`, `proavg`, `proquant`, `prodesc`, `proimg`, `created_at`) VALUES
(1, 'Honda Amaze', 'hondacars', 8.14, 7.33, '18-19 kmpl | 89 bhp', 10, '			The Honda Amaze is a compact sedan known for its fuel efficiency and advanced safety features, particularly its ADAS suite, which includes automatic emergency', 'hamaze5.avif', '2025-04-26 13:36:08'),
(2, 'Honda Elevate', 'hondacars', 11.73, 10.56, '15-16 kmpl | 119 bhp', 12, '			 It is known for its comfortable cabin, spaciousness, quality, and safety features, powered by a 1.5-liter naturally aspirated petrol engine.', 'helevate.avif', '2025-04-26 13:38:55'),
(3, 'Honda Brio', 'hondacars', 3.79, 3.41, '12-14 kmpl | 90 bhp', 20, '			The Honda Brio is a compact hatchback with a 1198 cc petrol engine offering a choice of manual and automatic transmissions.', 'hbrio2.jpg', '2025-04-26 13:42:43'),
(4, 'Honda Kia', 'hondacars', 11.73, 10.56, '13-14 kmpl | 100 bhp', 30, '		Kia has made significant strides in the Indian market since its entry, while Honda has a long-standing presence and a strong reputation.', 'kia.avif', '2025-04-26 13:50:22'),
(5, 'Honda Venue', 'hondacars', 13.73, 12.36, '16-17 kmpl | 112 bhp', 20, '	 It is a subcompact SUV with a 1.2-liter naturally aspirated petrol engine, a 1.0-liter turbocharged petrol engine, and a 1.5-liter diesel engine options.', 'hvenue.jpg', '2025-04-26 13:52:06'),
(6, 'Honda Jazz', 'hondacars', 5.73, 5.16, '10-12 kmpl | 109 bhp', 40, '	 It offers a 5-seater capacity, 5-door layout, and a spacious boot. The 2014-2020 models have a 1199 cc petrol engine and a 1498 cc diesel engine.', 'hjazz.avif', '2025-04-26 13:53:46'),
(7, 'Maruti AltoK10', 'marutisuzuki', 10.14, 9.13, '18-19 kmpl | 89 bhp', 70, '	 It features a 998cc engine, available with manual or automatic transmissions, and is a popular choice for city driving and commuting.', 'alto.jpg', '2025-04-26 13:56:54'),
(8, 'Maruti Brezza', 'marutisuzuki', 13.73, 12.36, '15-16 kmpl | 113 bhp', 20, '	The Maruti Brezza is a compact SUV offered in petrol and CNG variants, with both manual and automatic transmission options. \r\n', 'benzza.png', '2025-04-26 13:58:34'),
(9, 'Maruti Swift   ', 'marutisuzuki', 6.79, 6.11, ' 12-14 kmpl | 90 bhp', 30, '		 It is powered by a 1.2-liter petrol engine, available with manual or AMT transmissions, and also comes in a CNG variant. ', 'swift.jpg', '2025-04-26 14:01:13'),
(10, 'Maruti Ertiga ', 'marutisuzuki', 12.73, 11.46, ' 14-15 kmpl | 100 bh', 70, '		The Maruti Ertiga is a 7-seater MPV known for its spaciousness and practicality. It comes with a 1.5-liter K15C Smart Hybrid petrol engine, offering a claimed mileage of 20.51 kmpl.', 'ertiga-1.jpg', '2025-04-26 14:03:06'),
(11, 'Maruti Baleno  ', 'marutisuzuki', 13.73, 12.36, '13-14 kmpl | 112 bhp', 50, '		\r\nThe Maruti Baleno is a premium hatchback available in both petrol and CNG fuel options, offering manual and automatic transmissions.', 'baleno.jpg', '2025-04-26 14:10:20'),
(12, 'Maruti Dzire  ', 'marutisuzuki', 6.73, 6.06, '10-12 kmpl | 109 bhp', 20, '				It is offered with a 1.2-liter petrol engine, available in manual or automatic (AMT) transmission, and a 1.2-liter petrol + CNG version.', 'dzire.jpg', '2025-04-26 14:22:23'),
(13, 'Mahindra Bolero  ', 'mahindracars', 8.14, 7.33, '18-19 kmpl | 89 bhp ', 30, '	The Mahindra Bolero is a rugged, dependable SUV known for its affordability and ability to tackle various terrains. ', 'mahindra-bolero-1.jpg', '2025-04-26 14:24:26'),
(14, 'Mahindra Scorpio ', 'mahindracars', 11.73, 10.56, ' 15-16 kmpl | 119 bh', 80, '	The Scorpio N, the latest iteration, is a 7-seater SUV with a modern design and a range of features', 'scorpio.jpg', '2025-04-26 14:26:10'),
(15, 'Mahindra Thar ', 'mahindracars', 10.79, 9.71, '  12-14 kmpl | 90 bh', 50, '	 The 4x4 model offers both engines with automatic transmission, while the RWD model has a manual transmission for diesel and automatic for petrol.', 'thar.jpg', '2025-04-26 14:28:16'),
(16, 'Mahindra Marazzo  ', 'mahindracars', 11.73, 10.56, ' 13-14 kmpl | 100 bh', 40, '	The Mahindra Marazzo is a compact MPV that offers seating for seven or eight passengers and is powered by a 1.5-liter diesel engine. ', 'marazzo.jpg', '2025-04-26 14:30:03'),
(17, 'Mahindra xev 9e ', 'mahindracars', 13.73, 12.36, ' 16-17 kmpl | 112 bh', 80, '	It features a 3-screen dashboard, a 16-speaker audio system, and an augmented reality heads-up display.', 'xev 9e.jpeg', '2025-04-26 14:32:08'),
(18, 'Mahindra xuv700 ', 'mahindracars', 5.73, 5.16, ' 10-12 kmpl | 109 bh', 50, '	 It boasts a modern interior with features like a panoramic sunroof, advanced driver assistance systems (ADAS), and a 10.25-inch touchscreen with wireless Android Auto.', 'mahindra xuv700.jpg', '2025-04-26 14:33:50'),
(19, 'Toyota Fortuner', 'toyotacars', 9.14, 8.23, '   15-16 kmpl | 104 ', 90, '	 It comes in both petrol and diesel engine variants. The diesel engine, a 2.8-liter unit, produces 201 bhp and 500 Nm of torque.', 'toyota fortuner.jpg', '2025-04-26 14:35:49'),
(20, 'Toyota Glanza ', 'toyotacars', 14.73, 13.26, ' 13-15 kmpl | 106 bh', 30, '	 It is powered by a 1.2-liter petrol engine with a mild-hybrid system and comes with both manual and automatic (AMT) transmission options, as well as a CNG variant. ', 'Toyota Glanza.jpg', '2025-04-26 14:37:39'),
(21, 'Toyota Innova Hycross ', 'toyotacars', 6.79, 6.11, '12-13 kmpl | 100 bhp', 10, '	The HyCross offers a balance of performance, efficiency, and practicality, making it suitable for families and those needing a versatile vehicle.', 'Toyota Innova Hycross.png', '2025-04-26 14:39:24'),
(22, 'Toyota Rumion ', 'toyotacars', 13.73, 12.36, ' 12-14 kmpl | 140 bh', 30, '	 It features a 1.5-liter engine, offering either a 5-speed manual or 6-speed automatic transmission.', 'Toyota Rumion.jpg', '2025-04-26 14:40:56'),
(23, 'Toyota-Innova-Crysta ', 'toyotacars', 10.73, 9.66, '15-17 kmpl | 102 bhp', 30, '	The Toyota Innova Crysta is a popular MPV known for its spacious interior, comfort, and reliability, making it a good choice for families and businesses. ', 'Toyota-Innova-Crysta.jpg', '2025-04-26 14:52:29'),
(24, 'Toyota Urban Cruiser ', 'toyotacars', 6.73, 6.06, '10-11 kmpl | 110 bhp', 40, '	The Toyota Urban Cruiser is a subcompact SUV available in both petrol and hybrid petrol options, offering a range of features and specifications.', 'Toyota-Urban-Cruiser.jpg', '2025-04-26 14:54:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'sayali', 'bc9ad59da78fac1f5bc82a328b1c30b1', '2025-04-24 13:09:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bestseller`
--
ALTER TABLE `bestseller`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `proname` (`proname`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD UNIQUE KEY `proname` (`proname`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `catname` (`catname`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `name` (`name`) USING BTREE;

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `proname` (`proname`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bestseller`
--
ALTER TABLE `bestseller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
