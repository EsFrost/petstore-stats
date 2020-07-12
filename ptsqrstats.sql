-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 23, 2017 at 05:54 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptsqrstats`
--

-- --------------------------------------------------------

--
-- Table structure for table `gata`
--

DROP TABLE IF EXISTS `gata`;
CREATE TABLE IF NOT EXISTS `gata` (
  `G_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Etos` int(11) NOT NULL,
  `Minas` int(11) NOT NULL,
  `Trofes` int(11) NOT NULL DEFAULT '0',
  `Accessories` int(11) NOT NULL DEFAULT '0',
  `Farmaka` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`G_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `poulia`
--

DROP TABLE IF EXISTS `poulia`;
CREATE TABLE IF NOT EXISTS `poulia` (
  `P_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Etos` int(11) NOT NULL,
  `Minas` int(11) NOT NULL,
  `Trofes` int(11) NOT NULL DEFAULT '0',
  `Accessories` int(11) NOT NULL DEFAULT '0',
  `Farmaka` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`P_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `psaria`
--

DROP TABLE IF EXISTS `psaria`;
CREATE TABLE IF NOT EXISTS `psaria` (
  `Ps_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Etos` int(11) NOT NULL,
  `Minas` int(11) NOT NULL,
  `Trofes` int(11) NOT NULL DEFAULT '0',
  `Accessories` int(11) NOT NULL DEFAULT '0',
  `Farmaka` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Ps_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `skilos`
--

DROP TABLE IF EXISTS `skilos`;
CREATE TABLE IF NOT EXISTS `skilos` (
  `Sk_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Etos` int(11) NOT NULL,
  `Minas` int(11) NOT NULL,
  `Trofes` int(11) NOT NULL DEFAULT '0',
  `Accessories` int(11) NOT NULL DEFAULT '0',
  `Farmaka` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Sk_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `trofes_gatas`
--

DROP TABLE IF EXISTS `trofes_gatas`;
CREATE TABLE IF NOT EXISTS `trofes_gatas` (
  `tr_g_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_g` int(11) NOT NULL,
  `etos` int(11) NOT NULL,
  `minas` int(11) NOT NULL,
  `posotita` int(11) NOT NULL,
  `apli` int(11) NOT NULL DEFAULT '0',
  `prem` int(11) NOT NULL DEFAULT '0',
  `super_prem` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tr_g_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `trofes_skilou`
--

DROP TABLE IF EXISTS `trofes_skilou`;
CREATE TABLE IF NOT EXISTS `trofes_skilou` (
  `tr_sk_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sk` int(11) NOT NULL,
  `etos` int(11) NOT NULL,
  `minas` int(11) NOT NULL,
  `posotita` int(11) NOT NULL,
  `apli` int(11) NOT NULL DEFAULT '0',
  `prem` int(11) NOT NULL DEFAULT '0',
  `super_prem` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tr_sk_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `troktika`
--

DROP TABLE IF EXISTS `troktika`;
CREATE TABLE IF NOT EXISTS `troktika` (
  `Tr_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Etos` int(11) NOT NULL,
  `Minas` int(11) NOT NULL,
  `Trofes` int(11) NOT NULL DEFAULT '0',
  `Accessories` int(11) NOT NULL DEFAULT '0',
  `Farmaka` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Tr_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
