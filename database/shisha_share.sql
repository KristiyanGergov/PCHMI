-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 30 май 2020 в 15:54
-- Версия на сървъра: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shisha_share`
--

-- --------------------------------------------------------

--
-- Структура на таблица `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(63) DEFAULT NULL,
  `description` text,
  `price` float DEFAULT NULL,
  `available` tinyint(1) DEFAULT NULL,
  `type` varchar(63) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `image` varchar(63) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `price`, `available`, `type`, `user`, `image`) VALUES
(4, 'Ocean Kaif S', 'Small portable hookah by Ocean', 20, 1, 'shisha', 1, 'pictures/dcdc507fa130d83466c0c069d641509b1590842213'),
(6, 'Werkbund ZEUS', 'Hookah bowl by Werkbund', 5, 1, 'bowl', 1, 'pictures/8380dbcc25ec9933c8555b42f9569b121590844104'),
(8, 'Carbon Hose', 'Carbon Hookah Hose by Aeon ', 5, 1, 'consumable', 1, 'pictures/68a0c6fafe17717935c55051518ac9fe1590844380'),
(9, 'Solaris Mercury Bowl', 'Hookah bowl by Solaris', 6, 1, 'bowl', 1, 'pictures/c3820750ee758b6f65c7b22cf3277b601590844448'),
(10, 'Kaloud Lotus 2', 'Heat management device by Kaloud', 5, 1, 'consumable', 1, 'pictures/ec38023df89862463e5c6a06c31fc0581590844592'),
(11, 'Charcoal tongs', 'Tongs for charcoal by Aeon', 2, 1, 'consumable', 1, 'pictures/ede21c5d1f219e63fea92f1a404ee4061590844757'),
(12, 'Alpaca Suri', 'Hookah bowl by Alpaca', 8, 1, 'bowl', 1, 'pictures/826d062998b7cf5468e0328d33f527f41590844824'),
(13, 'Shisha bowl preparation', 'Tobacco preparation from enthusiast Emil Zhivkov', 6, 1, 'service', 1, 'pictures/53800bb73a50028aae79adeee6d905621590845313'),
(14, 'Shisha bowl preparation', 'Tobacco preparation by beginner Kristiyan Gergov', 4, 1, 'service', 1, 'pictures/dd6bac8e44e85dc9b32375013a1479451590845383'),
(15, 'Kaloud Lotus 1 Niris', 'Heat management device by Kaloud', 9, 1, 'consumable', 1, 'pictures/d9f26431ea05d133cb497df26d20d3071590845492'),
(16, 'Aeon Shisha Vase', 'Hookah Vase by Aeon', 15, 1, 'consumable', 1, 'pictures/0770bbcca7b86747b4e18666c25260fb1590845579'),
(17, 'Aeon Vyro 1', 'Small portable hookah by Aeon', 20, 1, 'shisha', 1, 'pictures/e57d60dbc1b9645ba62027161e003ce91590845630'),
(18, 'Ocean Mundstuck', 'Hookah mundstuck by Ocean', 7, 1, 'consumable', 1, 'pictures/b827004b146c74b104a403fb59e788ba1590845808'),
(19, 'Tobacco Fork', 'Tobacco fork by Werkbund', 4, 1, 'consumable', 1, 'pictures/ee4f86517df128c3d1afc7ef0455cded1590845859'),
(20, 'Aeon Mini Lounge 4', 'Small portable hookah by Aeon', 20, 1, 'shisha', 1, 'pictures/0868e8a1d1e23664b30b7a5c175ac3f91590845907'),
(21, 'Alpaca Predator', 'Premium hookah bowl by Alpaca', 10, 1, 'bowl', 1, 'pictures/3a4c436735b8780ddd007955bde29acb1590845966'),
(22, 'Professional bowl preparation', 'Tobacco preparation from hookah master Viktor Mirev', 20, 1, 'service', 1, 'pictures/3f68fae0eed3316bea6656d9d1487f161590846131'),
(23, 'Oblako Killer Bowl', 'Hookah bowl by Oblako', 10, 1, 'bowl', 1, 'pictures/2fb0950e791f2c8026609b81511ceeb61590846198'),
(24, 'Ocean Kaif M', 'Premium medium shisha by Ocean', 30, 1, 'shisha', 1, 'pictures/0dee92fc3b012566e0b1d15fbe95a1e81590846311'),
(25, 'Aeon Lounge 4 Blizzard', 'Premium medium shisha by Aeon', 35, 1, 'shisha', 1, 'pictures/e491c4283c04a5662aa8e27c807c47211590846351'),
(26, 'Shisha bowl preparation', 'Tobacco preparation by hookah fan Sophie Peneva', 40, 1, 'service', 1, 'pictures/b4388ad0580bfd9efdfc94ee49b02bb21590846676');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(63) DEFAULT NULL,
  `username` varchar(63) DEFAULT NULL,
  `contact` varchar(63) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `contact`, `pass`) VALUES
(1, 'admin@email.com', 'admin', NULL, '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
