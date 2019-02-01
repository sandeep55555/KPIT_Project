-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 20, 2013 at 02:19 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `phonebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `phoneauthuser`
--

CREATE TABLE IF NOT EXISTS `phoneauthuser` (
  `Phone_no` bigint(10) NOT NULL,
  `Password` varchar(50) default NULL,
  PRIMARY KEY  (`Phone_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phoneauthuser`
--

INSERT INTO `phoneauthuser` (`Phone_no`, `Password`) VALUES
(9860424120, '827ccb0eea8a706c4c34a16891f84e7b'),
(12345, '827ccb0eea8a706c4c34a16891f84e7b'),
(123456, 'e10adc3949ba59abbe56e057f20f883e'),
(9970292567, '6332546f04186d5ca48665c9f72eba65');

-- --------------------------------------------------------

--
-- Table structure for table `phoneinfo`
--

CREATE TABLE IF NOT EXISTS `phoneinfo` (
  `First_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Phone_no` bigint(12) NOT NULL,
  KEY `Phone_no` (`Phone_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phoneinfo`
--

INSERT INTO `phoneinfo` (`First_name`, `Last_name`, `Phone_no`) VALUES
('Mayur', 'Kale', 9860424120),
('Smita ', 'Jain', 123456),
('Amit ', 'Patange', 9970292567);
