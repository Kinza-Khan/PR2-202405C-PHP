-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2025 at 08:07 AM
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
-- Database: `aptech`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(300) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`) VALUES
(1, 'Shoes', 'Khaki Comfy Slip On Sneakers 0120567', 'sh1.webp'),
(2, 'Bags', 'Color-Block Crossbody Bags for Women Leather Cross Body Purses Cute Designer Handbags Shoulder Bag Medium Size', 'bag1.webp'),
(3, 'Watches', 'As the official retailer of branded watches, we offer many top brands, including TAG Heuer, Emporio Armani, Guess and many more. These brands are well known fo', 'w1.webp'),
(5, 'Perfumes', 'Liquid Gold Perfume For Men And Women\r\nDark and alluring; combining exotic fruits and intoxicating blooms with warm labdanum. The opening is a luminous sweet blend of passion fruit, pineapple, and raspberry, which gets mingled with fresh nuances of jasmine. Floral tones deepen at the heart when cinn', 'p1.webp');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `qty` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `qty`, `image`, `c_id`) VALUES
(1, 'Washington | 40MM', 8000, 'Sveston Stylish Washington Is a Gents Stainless Steel Watch having 40mm Dial and comes with luxury watch case', 75, 'w2.webp', 3),
(2, 'Casio MDV106 Series ', 8900, 'Black Dial with date window at 3 O\'clock\r\n', 90, 'w1.jpg', 3),
(3, 'Enigma Perfume For Women', 1200, 'Enigma is a refined fragrance that harmonizes crisp citrus, delicate florals, and soft musk. A luminous blend of freshness and sensuality, it embodies elegance and modern sophistication in every note.', 76, 'p2.webp', 5),
(4, 'High Life Perfume For Women', 1500, 'Absolutely perfect just the way you are. High Life is a fragrance that will inspire you to live your best life with a spray of sparkling juicy grapefruit, a flood of rose, peony and geranium essences, and a spicy anchor of tonka bean and vanilla.', 100, 'p3.webp', 5),
(5, 'Silver Mini Bag IWW-MNB24-010', 20000, 'Shine bright with our metallic mini bag, the perfect statement accessory to elevate any outfit. Its eye-catching metallic finish adds a touch of glam and modern flair,', 75, 'bag1.webp', 2);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`) VALUES
(1, 'admin', 'admin@gmail.com', '123', 1),
(2, 'kinza', 'kinza@gmail.com', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
