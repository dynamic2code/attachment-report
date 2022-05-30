-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 14, 2022 at 08:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MyApp`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `user_name` varchar(12) NOT NULL,
  `password` int(12) NOT NULL,
  `admin_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`user_name`, `password`, `admin_id`) VALUES
('admin', 12236475, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Carowner`
--

CREATE TABLE `Carowner` (
  `firstname` varchar(90) NOT NULL,
  `secondname` varchar(23) NOT NULL,
  `password` int(12) NOT NULL,
  `email` varchar(90) NOT NULL,
  `car_owners_id` int(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Carowner`
--

INSERT INTO `Carowner` (`firstname`, `secondname`, `password`, `email`, `car_owners_id`) VALUES
('wertyu', 'dfghj', 12236475, 'admin@we', 3),
('marul', 'e5rt', 12236475, 'ad@min', 4),
('tydltut', 'iuug/kiu', 1234345, 'admin@swerd', 5),
('uftyf', 'thsrth', 12236475, 'admin@ffd', 6),
('htdtyhtdg', 'iuoli', 12236475, 'admin@rdtd', 7),
('tyyy', 'yuy', 12236475, 'admin@yuiy', 8),
('tyyy', 'yuy', 12236475, 'admin@yuiy', 9),
('iuuj', 'huuu', 12236475, 'admin@dsds', 10),
('jyyh', 'iki', 12236475, 'admin@6uy6', 11),
('jyyh', 'iki', 12236475, 'admin@6uy6', 12);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `name` varchar(40) NOT NULL,
  `makename` varchar(40) NOT NULL,
  `yearofmodel` int(5) NOT NULL,
  `timeofrent` int(40) DEFAULT NULL,
  `car_owners_id` int(90) NOT NULL,
  `car_id` int(90) NOT NULL,
  `imagename` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`name`, `makename`, `yearofmodel`, `timeofrent`, `car_owners_id`, `car_id`, `imagename`, `location`) VALUES
('ertyu', 'oiu', 0, 0, 0, 7, '', 't4w5'),
('ertyu', 'oiu', 0, 0, 0, 8, '', 't4w5'),
('ertyu', 'oiu', 0, 0, 0, 9, '', 't4w5'),
('ertyu', 'oiu', 0, 0, 0, 10, '', 't4w5'),
('ertyu', 'oiu', 0, 0, 0, 11, '', 't4w5'),
('rgarg', 'rgaer', 0, 0, 0, 12, '', 'agrg'),
('rgarg', 'rgaer', 0, 0, 0, 13, '', 'agrg'),
('r', '23r', 32, 0, 0, 14, '', 'ewerfq'),
('e75jy', 'tyjeyj', 0, 5000000, 0, 15, '', '56u5'),
('e75jy', 'tyjeyj', 0, 5000000, 0, 16, '', '56u5'),
('rhw', 'sthh', 0, 0, 0, 17, '', 'swthh'),
('rhw', 'sthh', 0, 0, 0, 18, '', 'swthh'),
('rhw', 'sthh', 0, 0, 0, 19, '', 'swthh'),
('e75jy', 'tyjeyj', 0, 5000000, 0, 20, '', '56u5'),
('gqrgpg', 'rgq55', 5, 12, 0, 21, '', '4t'),
('gqrgpg', 'rgq55', 5, 12, 0, 22, '', '4t'),
('gqrgpg', 'rgq55', 5, 12, 0, 23, '', '4t'),
('gewrg', '45yq145y', 0, 0, 0, 24, '', 'trwtrhj'),
('gewrg', '45yq145y', 0, 0, 0, 25, '', 'trwtrhj'),
('46y6', 'wq45', 0, 0, 0, 26, '', 'wy6y'),
('46y6', 'wq45', 0, 0, 0, 27, '', 'wy6y'),
('gewrg', '45yq145y', 0, 0, 0, 28, '', 'trwtrhj'),
('rg5', 't3q4t', 0, 0, 0, 29, '', '12'),
('weee', 'efwf', 0, 0, 0, 30, '', 'efef'),
('uoefwh', 'efewf', 0, 0, 0, 31, '', 'RHTTHR'),
('pior', 'AEG', 0, 0, 0, 32, '', '243'),
('fwaf', 'aweew', 0, 343, 0, 33, '', 'resrhqh'),
('pior', 'AEG', 0, 0, 0, 34, '', '243'),
('errre', 'erea', 0, 23, 0, 35, '', 'aaeh'),
('errre', 'erea', 0, 23, 0, 36, '', 'aaeh'),
('dyjjy', 'djyj', 0, 555, 0, 37, '', 'dsdhdg'),
('jyejte', 'djj', 0, 0, 0, 38, '', 'djyjj'),
('wt44', 'sdsrt', 0, 0, 0, 39, '', '33'),
('wt44', 'sdsrt', 0, 0, 0, 40, '', '33'),
(' bbb', 'swsdrj', 2008, 23, 0, 41, '', 'hts'),
('gfbrg', 'thtr', 0, 0, 0, 42, '', 'eryh'),
('gfbrg', 'thtr', 0, 0, 0, 43, '', 'eryh'),
('utdkku', 'dkyuk', 0, 0, 0, 44, '', 'kdku');

-- --------------------------------------------------------

--
-- Table structure for table `Car_owner`
--

CREATE TABLE `Car_owner` (
  `user_name` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `location` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `firstname` varchar(64) NOT NULL,
  `secondname` varchar(16) NOT NULL,
  `password` int(12) NOT NULL,
  `email` varchar(90) NOT NULL,
  `customer_id` int(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`firstname`, `secondname`, `password`, `email`, `customer_id`) VALUES
('wert', 'wert', 12345, 'asd@asdf', 3),
('wert', 'wert', 12345, 'asd@asdf', 4),
('hgfds', 'sdfgh', 12236475, 'admin@w', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `Carowner`
--
ALTER TABLE `Carowner`
  ADD PRIMARY KEY (`car_owners_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `admin_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Carowner`
--
ALTER TABLE `Carowner`
  MODIFY `car_owners_id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `customer_id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
