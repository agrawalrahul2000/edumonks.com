-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 01, 2014 at 06:46 PM
-- Server version: 5.5.33
-- PHP Version: 5.4.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thismayh_edumonks`
--

-- --------------------------------------------------------

--
-- Table structure for table `scholarships`
--
CREATE TABLE IF NOT EXISTS `scholarships` (
  `scholarship_id` int(32) NOT NULL AUTO_INCREMENT,
  `title` mediumtext NOT NULL,
  `applicable_for` mediumtext NOT NULL,
  `application_deadline` datetime NOT NULL,
  `benifits_summary` mediumtext NOT NULL,
  `scholarships_number` int(11) NOT NULL,
  `purpose` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `award_type` mediumtext NOT NULL,
  `award_purpose` mediumtext NOT NULL,
  `benifit_summary` mediumtext NOT NULL,
  `best_prize` mediumtext NOT NULL,
  `awards_number` varchar(255) NOT NULL,
  `award_duration` varchar(255) NOT NULL,
  `education_level` mediumtext NOT NULL,
  `academic_performance` mediumtext NOT NULL,
  `qualification_level` varchar(60) NOT NULL,
  `Discipline` mediumtext NOT NULL,
  `application_method` mediumtext NOT NULL,
  `selection_criteria` int(11) NOT NULL,
  `mode_of_selection` mediumtext NOT NULL,
  `application_form` varchar(255) NOT NULL,
  `enabled_flg` tinyint(1) NOT NULL,
  `insert_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `operator` varchar(255) NOT NULL,
  PRIMARY KEY (`scholarship_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `scholarships`
--

INSERT INTO `scholarships` (`scholarship_id`, `title`, `applicable_for`, `application_deadline`, `benifits_summary`, `scholarships_number`, `purpose`, `description`, `award_type`, `award_purpose`, `benifit_summary`, `best_prize`, `awards_number`, `award_duration`, `education_level`, `academic_performance`, `qualification_level`, `Discipline`, `application_method`, `selection_criteria`, `mode_of_selection`, `application_form`, `enabled_flg`, `insert_datetime`, `update_datetime`, `operator`) VALUES
(7, 'Kaus Hostgator test ', 'Kaus hostgator test ', '0000-00-00 00:00:00', 'Kaus hostgator test ', 0, 'Kaus hostgator test ', 'Kaus hostgator test ', 'Kaus hostgator test ', 'Kaus hostgator test ', 'Kaus hostgator test ', 'Kaus hostgator test ', 'Kaus hostgator test ', 'Kaus hostgator test Kaus Hostgator test ', 'Kaus hostgator test ', 'Kaus hostgator test ', 'Kaus hostgator test ', 'Kaus hostgator test ', 'Kaus hostgator test ', 0, '', '', 1, '2014-05-20 20:33:30', '2014-05-20 15:03:30', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
