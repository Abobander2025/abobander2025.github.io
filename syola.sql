-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- المزود: localhost
-- أنشئ في: 16 نوفمبر 2023 الساعة 05:12
-- إصدارة المزود: 5.5.8
--  PHP إصدارة: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- قاعدة البيانات: `syola`
--

-- --------------------------------------------------------

--
-- بنية الجدول `bap`
--

CREATE TABLE IF NOT EXISTS `bap` (
  `full_name` varchar(30) NOT NULL,
  `whats_no` int(14) NOT NULL,
  `whats_pre` int(14) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `bap`
--


-- --------------------------------------------------------

--
-- بنية الجدول `baptizing`
--

CREATE TABLE IF NOT EXISTS `baptizing` (
  `id_name` int(4) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `whats_no` int(14) DEFAULT NULL,
  `whats_pre` int(14) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `bap_intrval` int(5) DEFAULT NULL,
  `bap_mount` int(10) DEFAULT NULL,
  `details` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `bap_hr` text NOT NULL,
  `bap_date` text NOT NULL,
  `countname` varchar(33) NOT NULL,
  `bap_statue` varchar(10) NOT NULL,
  PRIMARY KEY (`id_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- إرجاع أو استيراد بيانات الجدول `baptizing`
--


-- --------------------------------------------------------

--
-- بنية الجدول `counts`
--

CREATE TABLE IF NOT EXISTS `counts` (
  `count_id` int(6) NOT NULL AUTO_INCREMENT,
  `count_user` varchar(30) NOT NULL,
  `count_name` varchar(30) NOT NULL,
  `count_email` varchar(30) NOT NULL,
  `count_telephone` int(15) NOT NULL,
  `count_pass` varchar(20) NOT NULL,
  `count_hr` text NOT NULL,
  `count_date` text NOT NULL,
  PRIMARY KEY (`count_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- إرجاع أو استيراد بيانات الجدول `counts`
--


-- --------------------------------------------------------

--
-- بنية الجدول `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `ms_id` int(5) NOT NULL AUTO_INCREMENT,
  `ms_name` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `ms_obj` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `ms_message` text CHARACTER SET utf8,
  `ms_phon` int(16) DEFAULT NULL,
  `ms_hr` text NOT NULL,
  `ms_date` text NOT NULL,
  `countname` varchar(33) NOT NULL,
  PRIMARY KEY (`ms_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- إرجاع أو استيراد بيانات الجدول `message`
--

