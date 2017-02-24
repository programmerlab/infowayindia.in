-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2016 at 08:06 PM
-- Server version: 5.6.16-1~exp1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `SB`
--

-- --------------------------------------------------------

--
-- Table structure for table `darshan`
--

CREATE TABLE IF NOT EXISTS `darshan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `darshan` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `no_of_people` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `id_proof` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `darshan`
--

INSERT INTO `darshan` (`id`, `email`, `darshan`, `type`, `time`, 
`no_of_people`, `amount`, `id_proof`, `created_date`) VALUES
(1, 'kroy.iips@gmail.com', 'darshan', 'darshan at 6:45 AM', '6:45AM', 
'2', '200', 'apoper54', '2016-05-30 11:36:00'),
(2, 'kroy.iips@gmail.com', 'darshan', 'darshan at 6:45 AM', '6:45AM', 
'2', '200', 'apoper54', '2016-05-30 11:36:19');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE IF NOT EXISTS `donation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(255) NOT NULL,
  `donation_category` varchar(255) NOT NULL,
  `donation_type` varchar(255) NOT NULL,
  `PAN` varchar(255) NOT NULL,
  `amount` float(10,2) NOT NULL,
  `remarks` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `user_email`, `donation_category`, 
`donation_type`, `PAN`, `amount`, `remarks`, `created_date`) VALUES
(1, 'kroy.iips@gmail.com', 'charity', 'direct', 'PAOPR4512H', 10000.00, 
'thank you', '2016-05-30 14:24:42');

-- --------------------------------------------------------

--
-- Table structure for table `free_prasad`
--

CREATE TABLE IF NOT EXISTS `free_prasad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `remark` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `free_prasad`
--

INSERT INTO `free_prasad` (`id`, `date`, `amount`, `remark`, 
`created_date`) VALUES
(1, '30-5-2016', '100', 'hii', '2016-05-30 14:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `saileela_membership`
--

CREATE TABLE IF NOT EXISTS `saileela_membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `membership_amount` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `saileela_membership`
--

INSERT INTO `saileela_membership` (`id`, `name`, `phone`, `dob`, 
`gender`, `membership_amount`, `created_date`) VALUES
(1, 'kundan', '4567165', '25-12-1988', 'male', '500', '2016-05-30 
14:18:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, 
`address`, `created_date`) VALUES
(9, 'kundan', 'kroy.iips@gmail.com', '12345', '4854555', 'indore', 
'2016-05-30 10:30:01'),
(10, 'kundan', 'kroy.iips2@gmail.com', '12345', '4854555', 'indore', 
'2016-05-30 10:46:12'),
(11, 'kundan', 'kroy.iips3@gmail.com', '12345', '4854555', 'indore', 
'2016-05-30 10:47:59');

