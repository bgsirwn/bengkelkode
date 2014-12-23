-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2014 at 09:10 PM
-- Server version: 5.5.40
-- PHP Version: 5.4.34-1+deb.sury.org~precise+1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sahabatkantong`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan`
--

CREATE TABLE IF NOT EXISTS `pemasukan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `amount` int(11) NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pemasukan`
--

INSERT INTO `pemasukan` (`id`, `user_id`, `name`, `amount`, `description`, `date`) VALUES
(1, 1, 'Bulanan', 500000, 'Uang bulanan dari presiden', '2014-11-06 03:31:02'),
(2, 1, 'Pulsa', 100000, 'Pulsa buat nelpon pacar', '2014-11-06 03:55:50'),
(3, 1, 'Tambahan', 50000, 'Bapak sama Ibuk dateng ke Madura, ada mantennya mas Yuda..', '2014-11-10 02:14:57');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE IF NOT EXISTS `pengeluaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `amount` int(11) NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `user_id`, `name`, `amount`, `description`, `date`) VALUES
(1, 1, 'Kendaraan', 50000, 'Bensin 4 kilogram', '2014-11-06 03:53:19'),
(2, 1, 'Kesehatan', 12000, 'Beli Tisu', '2014-11-10 02:15:25'),
(3, 1, 'Pakaian', 500000, 'Beli baju superman, untuk menyelamatkan orang-orang!', '2014-11-11 07:36:13'),
(4, 1, 'Kendaraan', 10000, 'asdasd', '2014-11-13 07:25:19'),
(5, 1, 'Makanan', 1000000, 'Neraktir temen-temen', '2014-11-13 07:25:41'),
(6, 1, 'Keperluan Kuliah', 13241234, 'adf', '2014-11-14 09:48:56');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `username` text NOT NULL,
  `name` text NOT NULL,
  `photo` text NOT NULL,
  `join_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `username`, `name`, `photo`, `join_date`) VALUES
(1, 'hudasanca@gmail.com', '5ba22c5108984359b073ee0f60a57df8', 'hudasanca', 'Nurul Huda', 'media/photos/', '2014-11-06 03:15:08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
