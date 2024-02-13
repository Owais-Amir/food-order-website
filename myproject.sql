-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2024 at 12:55 PM
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
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmincreate`
--

CREATE TABLE `tbladmincreate` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `passwords` varchar(30) NOT NULL,
  `userType` int(11) NOT NULL,
  `profilepicture` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbladmincreate`
--

INSERT INTO `tbladmincreate` (`id`, `name`, `email`, `passwords`, `userType`, `profilepicture`) VALUES
(2, 'shayan', 'shayan@gmail.com', '232', 0, 'Screenshot (56).png'),
(13, 'kainat', 'kainat@gmail.com', '999', 1, 'Screenshot (56).png'),
(15, 'hamza', 'hamza@gmail.com', '333', 1, 'Screenshot (49).png'),
(16, 'sana', 'sana@gmail.com', '444', 1, 'Screenshot (157).png');

-- --------------------------------------------------------

--
-- Table structure for table `tbluersdata`
--

CREATE TABLE `tbluersdata` (
  `caption` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `postPicture` varchar(20) NOT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluersdata`
--

INSERT INTO `tbluersdata` (`caption`, `description`, `postPicture`, `id`) VALUES
(' your screenshot.', 'Press Windows logo key + Shift + S. The desktop wi', 'Screenshot (47).png', 6),
('For example', 'For example, the first value has index 0, and the ', 'Screenshot (54).png', NULL),
('sjudc', 'jdncndikwodjefncxvjif', 'img2.jpg', NULL),
('wertyy', 'yhjhukk', 'Screenshot (47).png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `passwords` varchar(30) NOT NULL,
  `profilepicture` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `name`, `email`, `passwords`, `profilepicture`) VALUES
(1, 'ali', 'ali@gmail.com', '123', 'img1.jpg'),
(2, 'fahad', 'fahad@gmail.com', '1234', 'Screenshot (63).png'),
(3, 'test', 'test223@gmail.com', '223', 'Screenshot (56).png'),
(4, 'asad', 'asad@gamil.com', '454', 'Screenshot (147).png'),
(5, 'fiza', 'fiza@gmail.com', '1212', 'Screenshot (62).png'),
(6, 'Atqan', 'Atqan@gmail.com', '909', 'Screenshot (58).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmincreate`
--
ALTER TABLE `tbladmincreate`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbluersdata`
--
ALTER TABLE `tbluersdata`
  ADD UNIQUE KEY `caption` (`caption`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmincreate`
--
ALTER TABLE `tbladmincreate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbluersdata`
--
ALTER TABLE `tbluersdata`
  ADD CONSTRAINT `tbluersdata_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tblusers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
