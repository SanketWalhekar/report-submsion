-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 11:25 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_report`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `First_Name` varchar(15) NOT NULL,
  `Last_Name` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Project_Title` varchar(100) NOT NULL,
  `Introduction` varchar(1000) NOT NULL,
  `pdf` varchar(1000) NOT NULL,
  `ppt` varchar(1000) DEFAULT NULL,
  `github` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`First_Name`, `Last_Name`, `Email`, `Project_Title`, `Introduction`, `pdf`, `ppt`, `github`) VALUES
('sanket', 'Walhekar', 'saketwalhekar83@gmail.com', 'galaxy', 'electronics', 'image/file (1).pdf', 'image/Bayes Belief network Algorithm.pdf', 'http://localhost/Project_Report/project.php'),
('Aniket', 'Metkari', 'AniketMetkari@gmail.com', 'Galaxy Electronics', 'Galaxy Electronic project', 'image/47e15fb5-1b39-4224-a6f7-bf174c20f109.pdf', 'image/Adhar Card_.pdf', 'http://localhost/Project_Report/project.php?');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
