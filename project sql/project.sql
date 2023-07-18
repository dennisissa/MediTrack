-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2023 at 10:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `username`, `password`, `id`) VALUES
('Dennis', 'admin1', 'password', 1),
('Jane', 'admin2', 'password', 2),
('Admin', 'admin3', 'password', 3);

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `id` varchar(36) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `start` int(15) DEFAULT NULL,
  `duration` int(2) DEFAULT NULL,
  `title` varchar(40) DEFAULT NULL,
  `content` varchar(40) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`id`, `email`, `start`, `duration`, `title`, `content`, `category`) VALUES
('473bae3c-bfab-43ab-939a-28674cb103f4', 'dennis.onyango23@gmail.com', 1689408000, 1, 'Syrup', 'Take two cups', 'Medicine'),
('b46d7c57-4f1f-45a3-8370-5bf389944f7d', 'dennis.onyango23@gmail.com', 1689224400, 1, 'Medical Check', 'Is the panadol working?', 'Appointment Mwangi');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `prescription` varchar(40) NOT NULL,
  `instruction` varchar(255) NOT NULL,
  `dosage` varchar(40) NOT NULL,
  `patient` varchar(40) NOT NULL,
  `patientFname` varchar(40) NOT NULL,
  `patientLname` varchar(40) NOT NULL,
  `doctor` varchar(40) NOT NULL,
  `doctorLname` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`prescription`, `instruction`, `dosage`, `patient`, `patientFname`, `patientLname`, `doctor`, `doctorLname`) VALUES
('Calpol', 'Drink daily', '2 cups', 'mb@gmail.com', 'Mary', 'Beth', 'jane.mwangi@strathmore.edu', 'Mwangi'),
('Panadol', 'One morning, one night time\n30 days', '2', 'dennis.onyango23@gmail.com', 'Dennis', 'Onyango', 'jane.mwangi@strathmore.edu', 'Mwangi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(40) NOT NULL,
  `password` varchar(60) DEFAULT NULL,
  `firstName` varchar(20) DEFAULT NULL,
  `lastName` varchar(20) DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `isDoc` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `firstName`, `lastName`, `phone`, `isDoc`) VALUES
('ak@gmail.com', '$2y$10$IDbDq20PduTy/yJPyyjoi.BLtEyobz23tUdYZKY9qCSGqFwnRrt8u', 'Alex ', 'Kamau', 712345678, 1),
('bw@gmail.com', '$2y$10$h84OOqMaGTLc4DwI.ya2QeC1ujjoVmqXqJrPS5hHcEE6BfxST1VXK', 'Belmont', 'Water', 721123456, 0),
('dd@gmail.com', '$2y$10$/ZnJyJ0b0H/u0Q2zXS9bR.yVloGHZZDpXjN9T.dBqjQZNJBjwo35G', 'Deon', 'Doe', 711123456, 1),
('dennis.onyango23@gmail.com', '$2y$10$oXtcYKgP39c2pJHc2QtFVOnEQwHymAx211KfuxwfE1D0ciq40qp.S', 'Dennis', 'Onyango', 790468554, 0),
('ick@gmail.com', '$2y$10$nI2Lfj2TEK4gKy9l4zdUq.B.Dp4gmCwVS7pDydlorSDW5L8mCX816', 'Ichigo', 'Kurosaki', 721123458, 0),
('jane.mwangi@strathmore.edu', '$2y$10$1pRUX.OjouD6WVL6WXpMLOBHbOxnoV0kKYdHWDqls2EStTHRo1nIe', 'Jane', 'Mwangi', 722000000, 1),
('jd@gmail.com', '$2y$10$s221.hg7i65bGyk5irxSnegc7M02EibeyeMe7L.WLNlOj5pVv0UGu', 'John', 'Doe', 722123456, 0),
('maria@gmail.com', '$2y$10$n2wLyBWMlCmTrsaxpJC2aenYEgwLcuomdLGHy8DDzbdrkj34Cf.py', 'Maria', 'Marua', 722123457, 0),
('mb@gmail.com', '$2y$10$as6/rLM3oXGWNvXiTFxcQuJw57TBtclxCqkF6yn4dfc98LPmL5h4C', 'Mary', 'Beth', 722123459, 0),
('ml@gmail.com', '$2y$10$3bwzWmJfFKhK0xUadVZVjOIFPAE1ghfaVypQeJcKSFMuFPlNG0AL2', 'Maya', 'Linda', 2147483647, 0),
('op@gmail.com', '$2y$10$NMVFj0J/SkPtO4dFrNCtx.h4Hc5fehhPKoxxs1b1VFfDMDQkmuh5m', 'Ola', 'Presto', 722123451, 0),
('tt@gmail.com', '$2y$10$EcTQeGoY4.7MtkhbesCGseEvhIex99qSwG0lYpdvgtbUNssXL6QV6', 'They', 'Them', 722123458, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`prescription`,`patient`,`doctor`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `calendar`
--
ALTER TABLE `calendar`
  ADD CONSTRAINT `calendar_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
