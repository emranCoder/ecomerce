-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2024 at 01:51 PM
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
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Jamdani saree'),
(2, 'Muslin saree'),
(3, 'Varanasi saree'),
(4, 'Nakshishari'),
(5, 'Andy Silk Saree'),
(6, 'Banglar_Rong'),
(7, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'saree'),
(2, 'panjabi'),
(3, 'T-shirt');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `jobTitle` text NOT NULL,
  `jobDesc` longtext NOT NULL,
  `contactInfo` longtext NOT NULL,
  `timtestemp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `jobTitle`, `jobDesc`, `contactInfo`, `timtestemp`) VALUES
(1, 'Lorem Ipsum', 'olor sed viverra ipsum nunc. Enim nunc faucibus a pellentesque sit. Vitae tortor condimentum lacinia quis vel eros donec ac. Gravida neque convallis a cras semper auctor neque vitae tempus.olor sed viverra ipsum nunc. Enim nunc faucibus a pellentesque sit. Vitae tortor condimentum lacinia quis vel eros donec ac. Gravida neque convallis a cras semper auctor neque vitae tempus.olor sed viverra ipsum nunc. Enim nunc faucibus a pellentesque sit. Vitae tortor condimentum lacinia quis vel eros donec ac. Gravida neque convallis a cras semper auctor neque vitae tempus.olor sed viverra ipsum nunc. Enim nunc faucibus a pellentesque sit. Vitae tortor condimentum lacinia quis vel eros donec ac. Gravida neque convallis a cras semper auctor neque vitae tempus.olor sed viverra ipsum nunc. Enim nunc faucibus a pellentesque sit. Vitae tortor condimentum lacinia quis vel eros donec ac. Gravida neque convallis a cras semper auctor neque vitae tempus.olor sed viverra ipsum nunc. Enim nunc faucibus a pellentesque sit. Vitae tortor condimentum lacinia quis vel eros donec ac. Gravida neque convallis a cras semper auctor neque vitae tempus.olor sed viverra ipsum nunc. Enim nunc faucibus a pellentesque sit. Vitae tortor condimentum lacinia quis vel eros donec ac. Gravida neque convallis a cras semper auctor neque vitae tempus.', '\r\nLorem Ipsum Generator\r\n\r\nGenerate Lorem Ipsum placeholder text. Select the number of characters, words, sentences or paragraphs, and hit generate!\r\n', '2024-01-07 11:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `OrderNumber` text NOT NULL,
  `userID` int(11) NOT NULL,
  `orderStatus` tinyint(1) NOT NULL,
  `addr` text NOT NULL,
  `paymentMethod` text NOT NULL,
  `productID` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `paymentStatus` tinyint(1) NOT NULL,
  `product_title` int(11) NOT NULL,
  `order_price` text NOT NULL,
  `offer_rate` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `delibariedDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `OrderNumber`, `userID`, `orderStatus`, `addr`, `paymentMethod`, `productID`, `timestamp`, `paymentStatus`, `product_title`, `order_price`, `offer_rate`, `quantity`, `delibariedDate`) VALUES
(1, 'Z4N0ZOMXtxhMFbzimuWO', 12, 0, 'Sylhet', 'bkash', '7', '2024-01-07 12:42:38', 0, 0, '1960', 2, 2, NULL),
(2, 'Z4N0ZOMXtxhMFbzimuWO', 12, 0, 'Sylhet', 'bkash', '8', '2024-01-07 12:42:38', 0, 0, '8000', 0, 1, NULL),
(3, 'Z4N0ZOMXtxhMFbzimuWO', 12, 0, 'Sylhet', 'bkash', '11', '2024-01-07 12:42:38', 0, 0, '800', 0, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `specialOffers` tinyint(1) NOT NULL,
  `offerRate` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `specialOffers`, `offerRate`, `date`, `status`) VALUES
(6, 'Jamdani_Saree', 'Elevate your elegance with our exquisite sarees. Handcrafted with love, these timeless pieces showcase the beauty of Bangladeshi  tradition. Embrace style and tradition effortlessly.', 'Minakari Soft jamdani Saree in maroon and white,black,yellow', 1, 1, 'jamdani saree.jpg', 'jamdani saree1.jpg', 'jamdani saree2.jpg', '10000', 1, 5, '2024-01-07 11:28:10', 'true'),
(7, 'Panjabi', 'Experience the charm of Punjab with our stunning Punjabi suits. Crafted with precision, these outfits celebrate the rich cultural heritage and contemporary fashion, making you stand out with grace.', 'Lvory and Brown Embroidered cotton panjabi', 2, 6, 'Panjabi.jpg', 'Panjabi1.jpg', 'Panjabi2.jpg', '2000', 1, 2, '2024-01-07 11:28:13', 'true'),
(8, 'Jamdani_saree', 'Elevate your elegance with our exquisite sarees. Handcrafted with love, these timeless pieces showcase the beauty of Bangladeshi  tradition. Embrace style and tradition effortlessly.', 'Karomi Handloom masterpiece jamdani saree', 1, 1, 'jamdani saree4.jpg', 'jamdani saree5.jpg', 'jamdani saree6.jpg', '8000', 0, 0, '2023-11-09 08:54:15', 'true'),
(9, 'T-shart', 'Introducing our premium T-shirt, the epitome of style and comfort. Crafted with the finest materials, its a must-have for your wardrobe. Elevate your fashion game today', 'all color available', 3, 6, 'T-shart.jpg', 'T-shart1.jpg', 'T-shart2.jpg', '700', 0, 0, '2023-11-09 08:57:21', 'true'),
(10, 'Panjabi', 'Experience the charm of Punjab with our stunning Punjabi suits. Crafted with precision, these outfits celebrate the rich cultural heritage and contemporary fashion, making you stand out with grace.', 'White Embroidered slim fit cotton panjabi.', 2, 6, 'Panjabi4.jpg', 'Panjabi3.jpg', 'Panjabi2.jpg', '4000', 0, 0, '2023-11-09 08:59:23', 'true'),
(11, 'T-shart', 'Introducing our premium T-shirt, the epitome of style and comfort. Crafted with the finest materials, its a must-have for your wardrobe. Elevate your fashion game today', 'all color available', 3, 6, 'T-shart2.jpg', 'T-shart1.jpg', 'T-shart3.jpg', '800', 0, 0, '2023-11-09 09:01:24', 'true'),
(12, 'Jamdani_saree', 'Elevate your elegance with our exquisite sarees. Handcrafted with love, these timeless pieces showcase the beauty of Bangladeshi tradition. Embrace style and tradition effortlessly.', 'Minakari Soft jamdani Saree in maroon and white', 1, 1, 'jamdani saree3.jpg', 'jamdani saree2.jpg', 'jamdani saree5.jpg', '8000', 0, 0, '2023-11-09 09:04:14', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(120) NOT NULL,
  `fname` varchar(150) DEFAULT NULL,
  `lname` varchar(150) DEFAULT NULL,
  `username` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `verify` tinyint(1) NOT NULL,
  `verify_code` text NOT NULL,
  `date` date DEFAULT NULL,
  `phone_no` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `password`, `verify`, `verify_code`, `date`, `phone_no`, `address`) VALUES
(1, 'naeem', 'khan', 'naeemkhan75', 'naeemkhannak32@gmail.com', '$2y$04$qU7TdGqIcY/1o/n5unff8.lzMUwBY3w/eQBsz/dlcafNyTbi2zHKe', 0, '', '2022-06-23', '', ''),
(2, 'alok kanti', 'Acharjye', 'alok75', 'acharjye@gmail.com', '$2y$04$Iu/.Ygdln21VScsm0uVg4.0cGMaEJyNtOWLBSQ5El1eni6ZwIWiSK', 0, '', '2023-07-23', '', ''),
(3, 'naeem', 'khan', 'naeem', 'naeemkhan@gmail.com', '$2y$04$ajOgz1NjQqlJGO9.5heYgu/VfQvFk1.hTJjAEWYnas1QiDuOn.WSS', 0, '', '2023-07-23', '', ''),
(4, 'naeem', 'khan', 'naeem105', 'nk@gmail.com', '$2y$04$Ty8FTLryzG6b98HauzDFGORQNT1fbiMCVRvPld/hhOyj8hRg3odUO', 0, '', '2003-08-23', '', ''),
(5, 'akash', 'shaa', 'akash12', 'sa@gmail.com', '$2y$04$EJlnXUwrGETWc/8/h97J/OPcQl5ka0ob/cwObcbJR/k24YXPHWw/y', 0, '', '2005-08-23', '', ''),
(6, 'aziz', 'islam', 'aziz12', 'aziz@gmail.com', '$2y$04$X33kFegNO7c14wTVNvy9L.zlZjQNiw8GNjKkMkvlEl1GZlPbxPAQK', 0, '', '2005-08-23', '', ''),
(7, 'sadia', 'rashida', 'sadia12', 's@gmail.com', '$2y$04$lXQQkKPuQQ9wwBjTUfGWl.MhNHXnDOm1SrH.bM3p/dKLe7nUsP596', 0, '', '2006-08-23', '', ''),
(8, 'leo', 'taha', 'taha10', 'taha@gmail.com', '$2y$04$f2L8p/jQsecdWEn1OhGbVOZBflDJAzhTIpNfoWtwh73CAXl8szXiC', 0, '', '2006-08-23', '', ''),
(9, 'naeem', 'khannk', 'naeem123', 'naeem123@gmail', '$2y$04$.i3uR1uuzRtY/SuphUvLrujZp.r.cYgINxNymCemUNSa2Q4nC9zAW', 0, '', '2007-08-23', '', ''),
(10, 'alok', 'naeem', 'alok111', 'alok111@gmai.com', '$2y$04$lP35wSo.r689TznU2XZqa.Qh6sXmtiZ0j1IEhvQyoKKODNMlNdOxO', 0, '', '2009-11-23', '', ''),
(12, 'jhon', 'davide', 'jhon', 'emranalam645@gmail.com', '$2y$04$jeDR6y5.eKMWUc9iuv3W2eUL0ULVQQ.wL48KQlM.qKFgNAxXgeiWy', 1, '711879', '2007-01-24', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
