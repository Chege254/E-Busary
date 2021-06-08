-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2020 at 11:19 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

--
-- author: frankline_bwire 
--  @knightlypro 
--  @notchcom_solutions
--
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibursary`
--
CREATE DATABASE IF NOT EXISTS `ibursary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ibursary`;

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

DROP TABLE IF EXISTS `applications`;
CREATE TABLE `applications` (
  `userlog` varchar(50) NOT NULL,
  `application_id` varchar(50) NOT NULL,
  `applicant_name` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `birth_date` varchar(20) NOT NULL,
  `id_number` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `guardian_name` varchar(50) NOT NULL,
  `guardian_id` varchar(20) NOT NULL,
  `guardian_phone` varchar(20) NOT NULL,
  `guardian_relationship` varchar(20) NOT NULL,
  `university_name` varchar(50) NOT NULL,
  `university_email` varchar(50) NOT NULL,
  `university_box` varchar(20) NOT NULL,
  `university_phone` varchar(20) NOT NULL,
  `admission_year` varchar(5) NOT NULL,
  `admission_number` varchar(20) NOT NULL,
  `year_of_study` varchar(20) NOT NULL,
  `university_category` varchar(10) NOT NULL,
  `fee_payable` varchar(20) NOT NULL,
  `fee_paid` varchar(20) NOT NULL,
  `fee_balance` varchar(20) NOT NULL,
  `helb` varchar(20) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `bank_branch` varchar(20) NOT NULL,
  `bank_account` varchar(30) NOT NULL,
  `application_date` date NOT NULL,
  `application_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(20) NOT NULL,
  `status_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`userlog`, `application_id`, `applicant_name`, `sex`, `birth_date`, `id_number`, `email`, `phone_number`, `guardian_name`, `guardian_id`, `guardian_phone`, `guardian_relationship`, `university_name`, `university_email`, `university_box`, `university_phone`, `admission_year`, `admission_number`, `year_of_study`, `university_category`, `fee_payable`, `fee_paid`, `fee_balance`, `helb`, `bank_name`, `bank_branch`, `bank_account`, `application_date`, `application_time`, `status`, `status_date`) VALUES
('user@users.com', 'i123593', 'KNIGHTLY PRO', 'Male', '2020-03-01', '12345', 'pro@email.com', '54321', 'Knights', '6789', '9876', 'Plg', 'Arkham', 'ark@email.com', '789 - 56777', '345876', '3040', 'sct 898989', 'year 3', 'Public', '1000', '0', '1000', '1000000', 'GOTHAM NATIONAL', 'NY', '987766', '2020-03-17', '2020-03-17 19:47:34', 'REJECTED', '2020-03-17 22:47:34'),
('doe@email.com', 'i596482', 'ANOTHER DEMO USER', 'Female', '2020-03-21', '678678678', 'another@email.com', '7888788', 'user g', '898989898', '65432345', 'mother', 'University Bay', 'unibay@email.com', '789 - 20100', '783999', '4040', 'sct 890009', 'year 2', 'Private', '100000', '10000', '90000', '800000', 'BACLAYS', 'AFRICA', '123456789', '2020-03-17', '2020-03-17 19:47:28', 'APPROVED', '2020-03-17 22:47:28'),
('doe@email.com', 'i829350', 'APPLICATION APPS', 'Female', '1997-04-09', '345310', 'app@email.com', '8989898', 'apps guard', '8989898', '099980932321', 'spouse', 'uni guard', 'unig@email.com', '789 - 8990', '123432', '2020', 'sct - 789223', 'year 4', 'Public', '7890000', '78000', '7889000', '789999', 'BANK APP', 'BRANCH', '1234565432', '2020-03-17', '2020-03-18 09:07:13', 'APPROVED', '2020-03-18 12:07:13');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `type`, `registration_date`) VALUES
('admin@email.com', 'admin', 'admin', '2020-03-16 18:08:00'),
('doe@email.com', 'doe', 'student', '2020-03-17 09:16:42'),
('email@email.com', 'secret', 'student', '2020-03-17 08:09:21'),
('student@email.com', 'password', 'student', '2020-03-16 18:08:39'),
('user@users.com', 'bwire', 'student', '2020-03-17 08:29:41');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `application_id` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(150) NOT NULL,
  `message_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`application_id`, `email`, `message`, `message_date`) VALUES
('i123593', 'pro@email.com', 'Unfortunately, your bursary application for KNIGHTLY PRO to Arkham university/college has been REJECTED', '2020-03-17 19:47:34'),
('i596482', 'another@email.com', 'Congratulations, your bursary application for ANOTHER DEMO USER to University Bay university/college has been APPROVED', '2020-03-17 19:47:28'),
('i829350', 'app@email.com', 'Congratulations, your bursary application for APPLICATION APPS to uni guard university/college has been APPROVED', '2020-03-18 09:07:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`application_id`),
  ADD UNIQUE KEY `application_id` (`application_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD UNIQUE KEY `application_id` (`application_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`application_id`) REFERENCES `applications` (`application_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
