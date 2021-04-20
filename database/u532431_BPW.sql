-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 20, 2021 at 07:44 AM
-- Server version: 5.5.14
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u532431_BPW`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345'),
(3, 'admin12345', 'admin12345'),
(5, 'test', '$2y$10$NnUt0OfPrTlBSLb6ulRe8O2YaCCLCircaGGEpfGSqS0Wuaj0MNQ1G');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `gender` int(1) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `middleName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `street` varchar(125) NOT NULL,
  `houseNumber` int(5) NOT NULL,
  `houseNumber_addon` varchar(10) NOT NULL,
  `zipCode` varchar(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `emailadres` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `newsletter_subscription` tinyint(1) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `gender`, `firstName`, `middleName`, `lastName`, `street`, `houseNumber`, `houseNumber_addon`, `zipCode`, `city`, `phone`, `emailadres`, `password`, `newsletter_subscription`, `country`) VALUES
(5, 1, 'Bram', '', 'Eichelsheim', 'Dwarsweg', 5, 'R78', '3959 AC', 'Overberg', '0683909677', 'BramIngmarEichelsheim@gmail.com', 'Admin123', 1, 'Nederland'),
(9, 1, 'Bram', '', 'Eichelsheim', 'Dwarsweg', 5, 'Dwarsweg', '3959 AC', 'Overberg', '0683909677', 'diederik@gmail.com', '$2y$10$jjXfx6IZypQL/tIEi0dLjuGI4U8o8.GFOvoDX2tXaep6U6V/WfgAq', 2, 'Nederland');

-- --------------------------------------------------------

--
-- Table structure for table `producten`
--

CREATE TABLE `producten` (
  `id` int(11) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `url` varchar(125) NOT NULL,
  `beschikbaar` text NOT NULL,
  `prijs` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producten`
--

INSERT INTO `producten` (`id`, `titel`, `url`, `beschikbaar`, `prijs`) VALUES
(9, 'Portfolio titel', 'http://google.com/', 'Korte beschrijving van je portfolio', '0000-00-00'),
(10, 'Portfolio titel', 'https://google.com', 'Korte beschrijving van je portfolio', '2021-03-16'),
(12, 'Portfolio titel', 'https://google.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In blandit ligula eu dolor consectetur semper. Maecenas tincidunt metus lorem, nec pulvinar libero viverra nec. Mauris dictum sodales lorem, non cursus quam semper ut. Fusce fermentum tortor laoreet pellentesque facilisis. Mauris vel odio eget leo gravida efficitur accumsan eu sapien. Aenean id condimentum nunc, eu faucibus neque. Vivamus ac venenatis libero, sit amet tempus mi.', '2021-03-16'),
(13, 'My little pony portfolio', 'https://google.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2021-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `birthDate` date NOT NULL,
  `emailadres` varchar(320) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `middleName`, `lastName`, `birthDate`, `emailadres`, `password`) VALUES
(1, 'Bram', 'Ingmar', 'Eichelsheim', '2002-12-07', 'BramIngmarEichelsheim@gmail.com', 'BramAdmin'),
(2, 'Thomas', '', 'Thijs', '0000-00-00', 'ttijs@glu.nl', '12345'),
(4, 'TryAndError', 'TryAndError', 'TryAndError', '0000-00-00', 'TryAndError@TryAndError.TryAndError', 'TryAndError'),
(5, 'Bram', '', 'Eichelsheim', '2002-12-07', 'BramEichelsheim@gmail.com', 'Admin123'),
(6, 'test', 'test', 'test', '2020-03-10', 'test@test.nl', '$2y$10$1ZTI.I3h6mwMvO/CsIE68ONtwep4K.qDp/6UigWA9xle1NQ6/aGLu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `e-mailadres` (`emailadres`);

--
-- Indexes for table `producten`
--
ALTER TABLE `producten`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `producten`
--
ALTER TABLE `producten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
