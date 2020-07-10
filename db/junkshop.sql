-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2020 at 08:59 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `junkshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `firstname`, `middlename`, `lastname`) VALUES
(2, 'administry', 'admin', 'Ad', 'L', 'Lamas');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(11) NOT NULL,
  `jk_no` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `contact` text NOT NULL,
  `servtype` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `tdate` date NOT NULL,
  `dtime` varchar(40) NOT NULL,
  `status` enum('pending','accept','done') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `jk_no`, `firstname`, `lastname`, `contact`, `servtype`, `image`, `tdate`, `dtime`, `status`) VALUES
(2, 3, 'Bitakbitak', 'Suko', '09462886584', 'Copper Tubling/Flashing Php30.00/kilo', '5508-aluminumcopper.jpg', '2020-01-29', '10:30 PM', 'done'),
(4, 3, 'Bitakbitak', 'Suko', '09462886584', 'Washers(Tingga)Php5.00/kilo.', '9604-scrapmetal.jpg', '2020-01-29', '10:45 PM', 'done'),
(10, 11, 'alvin', 'gumatay', '09462886584', 'Copper Tubling/Flashing Php30.00/kilo', '1023-403509.jpg', '2020-04-07', '11:00 AM', 'pending'),
(12, 11, 'alvin', 'gumatay', '09462886584', 'Copper Tubling/Flashing Php30.00/kilo', '7058-Dolby.png', '2020-04-07', '9:45 PM', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `jk`
--

CREATE TABLE `jk` (
  `jk_no` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `birthdate` varchar(255) DEFAULT NULL,
  `age` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jk`
--

INSERT INTO `jk` (`jk_no`, `email`, `password`, `firstname`, `middlename`, `lastname`, `birthdate`, `age`, `address`, `contact`) VALUES
(3, 'bataknagoku@gmail.com', '12345678', 'Bitakbitak', 'S', 'Suko', '06/10/1993', '27', '#24 Jeans st., UP city', '09462886584'),
(4, 'jusa@gmail.com', '123', 'jusa', 's', 'sebastian', '01/02/1992', '28', '4#gina St., Mandaluyong City', '09462886584'),
(5, 'husay@gmail.com', '123', 'judres', 'j', 'jusau', '02/03/2000', '20', '47 Santan II Baragay Fortune', '09462886584'),
(6, 'Michael.see31@yahoo.com', '123', 'miguak', 's', 'doy', '05/11/2000', '20', '#24 Jeans st., UP city', '0908345874'),
(7, 'kumaider@gmail.com', '123', 'jc', 'j', 'hugas', '07/04/1992', '28', 'carlma antipolo city', '09462886584'),
(8, 'vjohnhector9@gmail.com', 'SHAWARMA', 'John Hector', 'R', 'Vale', '10/11/1998', '10', '47 Santan II Baragay Fortune', '09979463215'),
(9, 'josemanlibot@gmail.com', '123', 'jose', 'm', 'manlibot', '03/14/1994', '25', '#2 Kalansi St., Concepcion I., Marikina City', '09462886584'),
(10, 'jiiseh13@gmail.com', 'jiiseh13', 'john carlo', 'pascual', 'satiada', '04/13/1996', '23', '#2 Prince Str, Victory Hills Subd, Brgy Fortune, Marikina City', '09998587056'),
(11, 'alvingumatay@gmail.com', '12345678', 'alvin', 't', 'gumatay', '02/13/1992', '27', '2 Kalamansi st., concepcion I, Marikina City, 10 H', '09462886584'),
(12, 'micosee@yahoo.com', 'micosee2', 'Michael', 'alvarez', 'see', '03/14/1997', '22', 'Sa may ilog', '09991231234'),
(13, 'jessestocada@gmail.com', 'jess09063215402', 'jess', 'estocada', 'Mendoza', '10/18/1998', '21', '#di makulangan kukulang kulang st.', '09090372376'),
(14, 'betlover@yahoo.com', 'betlogs', 'Betty', '', 'Loger', '03/14/1997', '22', 'Barbara, San Mateo', '09394297579'),
(15, 'josemarichan@gmail.com', '123', 'jose', 'l', 'marichan', '02/12/1992', '27', '#45 Deralno St., Colpity Vill., Lansones City', '09462886584');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `jk`
--
ALTER TABLE `jk`
  ADD PRIMARY KEY (`jk_no`),
  ADD UNIQUE KEY `jk_no` (`jk_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jk`
--
ALTER TABLE `jk`
  MODIFY `jk_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
