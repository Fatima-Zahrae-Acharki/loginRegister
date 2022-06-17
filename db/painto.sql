-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 04:38 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `painto`
--

-- --------------------------------------------------------

--
-- Table structure for table `artwork`
--

CREATE TABLE `artwork` (
  `artworkId` int(11) NOT NULL,
  `picture` varchar(254) DEFAULT NULL,
  `title` varchar(254) DEFAULT NULL,
  `description` varchar(254) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artwork`
--

INSERT INTO `artwork` (`artworkId`, `picture`, `title`, `description`, `date`) VALUES
(1, ' Peinture multisupport TOLLENS By Paola Navone bleu manufacture n°91 mat 2 l.jpeg', 'matte painting', 'simple wall painting with unique matte color', '2021-03-13 23:00:00'),
(2, '10 Painted Walls That Will Inspire Your Next Room Makeover - Wonder Forest.jpeg', 'creative design', 'creative design avec des couleurs pastelles', '2022-06-04 23:00:00'),
(3, 'Bunny Laundry Wallpaper Mural - 360 cm x 240 cm _ Heavyweight.jpeg', 'kids room', 'cute design for kids room', '2022-06-09 23:00:00'),
(4, 'This Is the Perfect Floral Wallpaper for People Who Hate Florals.jpeg', 'floral wallpaper', 'cute simple flower wallpaper high quality ', '2021-09-10 23:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_ID` int(4) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `email` varchar(256) NOT NULL,
  `message` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `painter`
--

CREATE TABLE `painter` (
  `painterId` int(11) NOT NULL,
  `reservationId` int(11) NOT NULL,
  `serviceId` int(11) NOT NULL,
  `firstName` varchar(254) DEFAULT NULL,
  `lastName` varchar(254) DEFAULT NULL,
  `picture` varchar(254) DEFAULT NULL,
  `description` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `painter`
--

INSERT INTO `painter` (`painterId`, `reservationId`, `serviceId`, `firstName`, `lastName`, `picture`, `description`) VALUES
(1, 0, 0, 'kohli', 'mamado', 'slave 1.jpg', 'he will do any order u ask for and he has the ability to fly with his ears and also he can paint a house within 2 min'),
(2, 0, 0, '3yono ', 'kissan', 'k.png', 'he also will do anything you order'),
(4, 0, 0, 'nami', 'swaan', ' Premium Photo _ Engineer holding hard hat construction worker professional safety work industry building person manager service.jpeg', 'hi i am a painter that works for painto website ');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservationId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `reservationDate` timestamp NULL DEFAULT NULL,
  `ladder` smallint(6) DEFAULT NULL,
  `description` varchar(254) DEFAULT NULL,
  `startDate` timestamp NULL DEFAULT NULL,
  `endDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `serviceId` int(11) NOT NULL,
  `artworkId` int(11) NOT NULL,
  `name` varchar(254) DEFAULT NULL,
  `description` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_ID` int(4) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `adress` varchar(300) NOT NULL,
  `passwordu` varchar(30) NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_ID`, `first_name`, `last_name`, `phone`, `adress`, `passwordu`, `email`) VALUES
(1, 'fhhf', 'soli', 'xxx', 'kkjk', '1111', 'fati14ac@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artwork`
--
ALTER TABLE `artwork`
  ADD PRIMARY KEY (`artworkId`);

--
-- Indexes for table `painter`
--
ALTER TABLE `painter`
  ADD PRIMARY KEY (`painterId`),
  ADD KEY `ASSOCIATION2_FK` (`reservationId`),
  ADD KEY `ASSOCIATION4_FK` (`serviceId`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservationId`),
  ADD KEY `ASSOCIATION1_FK` (`userId`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`serviceId`),
  ADD KEY `ASSOCIATION3_FK` (`artworkId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artwork`
--
ALTER TABLE `artwork`
  MODIFY `artworkId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `painter`
--
ALTER TABLE `painter`
  MODIFY `painterId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservationId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `serviceId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
