-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 30, 2017 at 11:02 
-- Server version: 5.7.13
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `year` year(4) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `budget` int(11) DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `genre` varchar(128) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `name`, `year`, `rating`, `budget`, `release_date`, `genre`) VALUES
(3, 'Dunkirk', 2017, 8.6, 100000000, '2017-07-20', 'Военный'),
(4, 'War for the Planet of the Apes', 2017, 8, 150000000, '2017-07-13', 'Фантастика'),
(5, 'Despicable Me 3', 2017, 6.4, 80000000, '2017-06-29', 'Приключения'),
(6, 'Spider-Man: Homecoming', 2017, 8, 175000000, '2017-07-06', 'Фантастика'),
(7, 'Transformers: The Last Knight', 2017, 5.3, NULL, '2017-06-22', 'Фантастика');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
