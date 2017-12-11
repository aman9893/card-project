-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2017 at 10:44 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userID` int(11) NOT NULL,
  `family_members` varchar(255) NOT NULL,
  `family_member1` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `groomname` varchar(255) NOT NULL,
  `bride_name` varchar(255) NOT NULL,
  `bride_photo` varchar(255) NOT NULL,
  `bridefather_Name` varchar(255) NOT NULL,
  `bridemother_name` varchar(255) NOT NULL,
  `bridegrand_fathername` varchar(255) NOT NULL,
  `bridegrand_mothername` varchar(255) NOT NULL,
  `bride_from` varchar(255) NOT NULL,
  `groom_name` varchar(255) NOT NULL,
  `groom_photo` varchar(255) NOT NULL,
  `groomfather_name` varchar(255) NOT NULL,
  `groommother_name` varchar(255) NOT NULL,
  `grand_fathername` varchar(255) NOT NULL,
  `groomgrand_mothername` varchar(255) NOT NULL,
  `groom_from` varchar(255) NOT NULL,
  `banner_message` text NOT NULL,
  `god_title` varchar(255) NOT NULL,
  `parent_message` text NOT NULL,
  `invitation_message` text NOT NULL,
  `marriage_place` varchar(255) NOT NULL,
  `marriage_placeaddress` varchar(255) NOT NULL,
  `phone_one` varchar(255) NOT NULL,
  `phone_two` varchar(255) NOT NULL,
  `card_upload` varchar(255) NOT NULL,
  `function_photo` varchar(255) NOT NULL,
  `function_title` varchar(255) NOT NULL,
  `day_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `time` varchar(255) NOT NULL,
  `function_address` varchar(255) NOT NULL,
  `home_address` varchar(255) NOT NULL,
  `familymember_title` varchar(255) NOT NULL,
  `family_members2` varchar(255) NOT NULL,
  `family_members3` varchar(255) NOT NULL,
  `family_members4` varchar(255) NOT NULL,
  `family_members5` varchar(255) NOT NULL,
  `familymember6` varchar(255) NOT NULL,
  `function2` varchar(255) NOT NULL,
  `function3` varchar(255) NOT NULL,
  `function4` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userID`, `family_members`, `family_member1`, `email`, `groomname`, `bride_name`, `bride_photo`, `bridefather_Name`, `bridemother_name`, `bridegrand_fathername`, `bridegrand_mothername`, `bride_from`, `groom_name`, `groom_photo`, `groomfather_name`, `groommother_name`, `grand_fathername`, `groomgrand_mothername`, `groom_from`, `banner_message`, `god_title`, `parent_message`, `invitation_message`, `marriage_place`, `marriage_placeaddress`, `phone_one`, `phone_two`, `card_upload`, `function_photo`, `function_title`, `day_date`, `time`, `function_address`, `home_address`, `familymember_title`, `family_members2`, `family_members3`, `family_members4`, `family_members5`, `familymember6`, `function2`, `function3`, `function4`) VALUES
(1, '', '', 'Aamn9893jain@gmail.com', '', 'AKSHRA', '', '', '', '', '', '', 'AMAN JAIN', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-11-30 09:26:28', '1 November, 2017', '', '', '', '', '', '', '', ' ', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `created`, `modified`, `status`) VALUES
(1, 'aman', 'jain', 'aman9893jain@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '9806701954', '2017-11-29 07:44:58', '2017-11-29 07:44:58', '1'),
(6, 'aman', 'jain', 'aman.nims@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1234444', '2017-11-30 10:28:40', '2017-11-30 10:28:40', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
