-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 08, 2024 at 01:14 PM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20280008_chalet`
--
CREATE DATABASE IF NOT EXISTS `id20280008_chalet` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id20280008_chalet`;

-- --------------------------------------------------------

--
-- Table structure for table `adds`
--

CREATE TABLE `adds` (
  `name1` varchar(20) NOT NULL,
  `name2` varchar(20) NOT NULL,
  `name3` varchar(20) NOT NULL,
  `Images1` text NOT NULL,
  `Images2` text NOT NULL,
  `Images3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `adds`
--

INSERT INTO `adds` (`name1`, `name2`, `name3`, `Images1`, `Images2`, `Images3`) VALUES
('casa_azul', 'mlita_village1', 'safina_1', 'slide1-1.jpg/slide1-2.jpg/slide1-3.jpg', 'slide2-1.jpg/slide2-2.jpg/slide2-3.jpg', 'slide3-1.jpg/slide3-2.jpg/slide3-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `beity`
--

CREATE TABLE `beity` (
  `id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `Customer_Name` varchar(50) NOT NULL,
  `Mobile_Number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `beity`
--

INSERT INTO `beity` (`id`, `booking_date`, `Customer_Name`, `Mobile_Number`) VALUES
(1, '2020-01-01', 'riham', '71302733'),
(2, '2023-02-01', 'riham', '71302733'),
(3, '2023-02-09', 'riham', '71302733');

-- --------------------------------------------------------

--
-- Table structure for table `beit_ward`
--

CREATE TABLE `beit_ward` (
  `id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `Customer_Name` varchar(50) NOT NULL,
  `Mobile_Number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `beit_ward`
--

INSERT INTO `beit_ward` (`id`, `booking_date`, `Customer_Name`, `Mobile_Number`) VALUES
(1, '2023-01-01', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `casa_azul`
--

CREATE TABLE `casa_azul` (
  `id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `Customer_Name` varchar(50) NOT NULL,
  `Mobile_Number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `casa_azul`
--

INSERT INTO `casa_azul` (`id`, `booking_date`, `Customer_Name`, `Mobile_Number`) VALUES
(1, '2020-01-01', 'riham', '71302733');

-- --------------------------------------------------------

--
-- Table structure for table `ebn_albalad`
--

CREATE TABLE `ebn_albalad` (
  `id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `Customer_Name` varchar(50) NOT NULL,
  `Mobile_Number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guesthouse`
--

CREATE TABLE `guesthouse` (
  `id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `Customer_Name` varchar(50) NOT NULL,
  `Mobile_Number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `julie`
--

CREATE TABLE `julie` (
  `id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `Customer_Name` varchar(50) NOT NULL,
  `Mobile_Number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ChaletName` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ChaletName`, `user`, `pass`) VALUES
('beity', 'beity', 'Bder6803'),
('beit_ward', 'beit_ward', 'BWjbaa054'),
('guesthouse', 'guesthouse', 'GHbaskin9550'),
('julie', 'julie', 'Jkfar11619'),
('ebn_albalad', 'ebn_albalad', 'EbJ@318!'),
('rayan', 'rayan', 'RKhi9303'),
('casa_azul', 'casa_azul', 'caKh7775'),
('safina_1', 'safina', 'Sjs@1188'),
('safina_2', 'safina', 'Sjs@1188'),
('mlita_village1', 'mlita_village', 'MAb@14248@'),
('mlita_village2', 'mlita_village', 'MAb@14248@'),
('mlita_village3', 'mlita_village', 'MAb@14248@');

-- --------------------------------------------------------

--
-- Table structure for table `mlita_village1`
--

CREATE TABLE `mlita_village1` (
  `id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `Customer_Name` varchar(50) NOT NULL,
  `Mobile_Number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mlita_village2`
--

CREATE TABLE `mlita_village2` (
  `id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `Customer_Name` varchar(50) NOT NULL,
  `Mobile_Number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mlita_village3`
--

CREATE TABLE `mlita_village3` (
  `id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `Customer_Name` varchar(50) NOT NULL,
  `Mobile_Number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rayan`
--

CREATE TABLE `rayan` (
  `id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `Customer_Name` varchar(50) NOT NULL,
  `Mobile_Number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `safina_1`
--

CREATE TABLE `safina_1` (
  `id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `Customer_Name` varchar(50) NOT NULL,
  `Mobile_Number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `safina_2`
--

CREATE TABLE `safina_2` (
  `id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `Customer_Name` varchar(50) NOT NULL,
  `Mobile_Number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `ChaletName` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `village` varchar(50) NOT NULL,
  `season` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `wprice` int(11) NOT NULL,
  `ChaletImageName` varchar(50) NOT NULL,
  `Details` text NOT NULL,
  `equipments` text NOT NULL,
  `Map` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `SlideImages` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`ChaletName`, `place`, `village`, `season`, `price`, `wprice`, `ChaletImageName`, `Details`, `equipments`, `Map`, `Phone`, `SlideImages`) VALUES
('beity', 'Nabatieh', 'Deir el zahrani', 'Winter/Summer', 80, 100, 'beity.jpg', 'livingroom:1/bedroom:1/bathroom:1/pool:1', 'tv/ac/fireplace/jacuzzi', '', '70686403', 'beity1.JPG/beity2.JPG/beity3.JPG/beity4.JPG/beity5.JPG'),
('beit_ward', 'Nabatieh', 'Jbaa', 'Winter/Summer', 40, 45, 'beitward.jpg', 'livingroom:1/bedroom:1/kitchen:1/bathroom:1', 'wifi/ac/tv/fireplace/fridge/oven/heater', '', '70226748', 'beitward.jpg/beitward1.jpg/beitward2.jpg/beitward3.JPG/beitward4.jpg'),
('guesthouse', 'Matn', 'Beskinta', 'Winter/Summer', 80, 100, 'guesthouseDB.JPG', 'livingroom:1/bedroom:1/kitchen:1/bathroom:1/pool:1', 'wifi/fridge/oven/fireplace/tv', '', '71950500', 'guesthouseDB.JPG/guesthouseDB1.JPG/guesthouseDB2.JPG/guesthouseDB3.jpg/guesthouseDB4.jpg'),
('julie', 'Nabatieh', 'Kfarsir', 'Winter/Summer', 80, 100, 'julie.PNG', 'livingroom:1/bedroom:2/bathroom:2/pool:1', 'tv/fridge/ac/jacuzzi/fireplace/bbq', '', '78811619', 'julie.PNG/julie1.PNG/julie2.jpg/julie3.jpg/julie4.jpg'),
('ebn_albalad', 'Nabatieh', 'Jbaa', 'Winter/Summer', 70, 80, 'ibnlbalad.jpg', 'livingroom:1/bedroom:1/bathroom:1', 'wifi/fireplace/tv/oven/fridge/bbq', '', '03813364', 'ibnlbalad.jpg/ibnlbalad1.PNG/ibnlbalad2.PNG/ibnlbalad3.jpg/ibnlbalad4.PNG'),
('rayan', 'Marjaayoun', 'Khiam', 'Summer', 120, 150, 'rayan.jpg', 'livingroom:1/bedroom:2/bathroom:3/kitchen:1/pool:1', 'wifi/tv/bbq/fridge/oven', '', '79309300', 'rayan1.jpg/rayan2.jpg/rayan3.jpg/rayan4.jpg/rayan5.jpg'),
('casa_azul', 'Marjaayoun', 'Khiam', 'Winter/Summer', 160, 200, 'casaazul.jpg', 'livingroom:1/bedroom:3/bathroom:3/kitchen:1/terrace:3/pool:2', 'wifi/tv/jacuzzi/fireplace/bbq/fridge/oven', '', '76977785', 'casa1.jpg/casa2.jpg/casa3.jpg/casa4.jpg/casa5.jpg'),
('safina_1', 'Nabatieh', 'Safi', 'Winter/Summer', 150, 170, 'safina.jpg', 'livingroom:1/bedroom:2/kitchen:1/bathroom:2/pool:1', 'wifi/tv/fridge/oven/fireplace', '', '76881102', 'safina1.jpg/safina2.jpg/safina3.jpg/safina4.jpg/safina5.jpg'),
('safina_2', 'Nabatieh', 'Safi', 'Winter/Summer', 100, 120, 'safinab.jpg', 'livingroom:1/bedroom:1/kitchen:1/bathroom:1', 'wifi/tv/fridge/oven/fireplace/jacuzzi', '', '76881102', 'safinab1.jpg/safinab2.jpg/safinab3.jpg/safinab4.jpg/safinab5.jpg'),
('mlita_village1', 'Nabatieh', 'Ain_Bouswar', 'Winter/Summer', 180, 190, 'mlita.JPG', 'livingroom:1/bedroom:2/kitchen:1/bathroom:1/pool:1/terrace:1', 'wifi/tv/ac/fridge/oven/fireplace', '', '71422448', 'mlita1.jpg/mlita2.jpg/mlita3.jpg/mlita4.jpg/mlita5.jpg/'),
('mlita_village2', 'Nabatieh', 'Ain_Bouswar', 'Winter/Summer', 120, 130, 'mlita.JPG', 'livingroom:1/bedroom:1/kitchen:1/bathroom:1/terrace:1', 'wifi/tv/ac/fridge/oven/fireplace/jacuzzi', '', '71422448', 'mlita1.jpg/mlita2.jpg/mlita3.jpg/mlita4.jpg/mlita5.jpg/'),
('mlita_village3', 'Nabatieh', 'Ain_Bouswar', 'Winter/Summer', 170, 180, 'mlita.JPG', 'livingroom:1/bedroom:1/kitchen:1/bathroom:1/pool:1/terrace:1', 'wifi/tv/ac/fridge/oven/fireplace', '', '71422448', 'mlita1.jpg/mlita2.jpg/mlita3.jpg/mlita4.jpg/mlita5.jpg/');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
