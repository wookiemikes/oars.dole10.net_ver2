-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2020 at 03:03 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d0l310_aep`
--

-- --------------------------------------------------------

--
-- Table structure for table `aep_admin`
--

CREATE TABLE `aep_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_pwd` varchar(255) NOT NULL,
  `name_of_personnel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aep_admin`
--

INSERT INTO `aep_admin` (`admin_id`, `admin_username`, `admin_pwd`, `name_of_personnel`) VALUES
(1, 'aep_admin1', 'a3p_4dm;n1', 'Perks');

-- --------------------------------------------------------

--
-- Table structure for table `aep_company`
--

CREATE TABLE `aep_company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `nature_of_business` varchar(255) NOT NULL,
  `company_contact` varchar(50) NOT NULL,
  `company_person` varchar(100) NOT NULL,
  `company_email` varchar(50) NOT NULL,
  `date_registered` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `aep_company_accounts`
--

CREATE TABLE `aep_company_accounts` (
  `comp_acc_id` int(11) NOT NULL,
  `company_email` varchar(100) NOT NULL,
  `company_pwd` varchar(100) NOT NULL,
  `date_created` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `aep_user_accounts`
--

CREATE TABLE `aep_user_accounts` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aep_user_accounts`
--

INSERT INTO `aep_user_accounts` (`user_id`, `user_name`, `password`, `date_created`) VALUES
(4, 'oiuytre', 'braindead2014', ''),
(5, '', '', ''),
(6, '', '', ''),
(7, '', '', ''),
(8, '4645461321', '1234', ''),
(9, 'poiuytr', '1231231323', ''),
(10, 'tomoyasai', 'braindead2014', ''),
(11, 'michael', 'braindead2014', '');

-- --------------------------------------------------------

--
-- Table structure for table `aep_user_details`
--

CREATE TABLE `aep_user_details` (
  `user_det_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `tin` varchar(255) NOT NULL,
  `b_date` varchar(255) NOT NULL,
  `place_of_birth` varchar(255) NOT NULL,
  `application_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aep_user_details`
--

INSERT INTO `aep_user_details` (`user_det_id`, `user_name`, `fname`, `mname`, `lname`, `nationality`, `gender`, `marital_status`, `tin`, `b_date`, `place_of_birth`, `application_type`) VALUES
(10, 'tomoyasai', 'Mikhael', 'Cruz', 'Fostgate', 'algerian', 'MALE', 'SINGLE', '102-654-6626', '2020-06-09', 'Dublin, Ireland', 'RENEWAL'),
(11, 'michael', 'Santa', 'JAmes', 'Clause', 'american', 'MALE', 'MARRIED', '465484321', '2020-07-16', 'Dublin, Ireland', 'NEw');

-- --------------------------------------------------------

--
-- Table structure for table `aep_user_details_2`
--

CREATE TABLE `aep_user_details_2` (
  `user_det2_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `passport_no` varchar(255) NOT NULL,
  `place_issuance` varchar(255) NOT NULL,
  `date_issuance` varchar(255) NOT NULL,
  `expiration_date` varchar(255) NOT NULL,
  `visa` varchar(255) NOT NULL,
  `visa_validity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aep_user_details_2`
--

INSERT INTO `aep_user_details_2` (`user_det2_id`, `user_name`, `passport_no`, `place_issuance`, `date_issuance`, `expiration_date`, `visa`, `visa_validity`) VALUES
(5, 'tomoyasai', '12345678910', 'Dublin, Ireland', '2020-07-13', '2020-06-30', '9a', '2020-06-30'),
(6, 'michael', '68578764154', 'Dublin, Ireland', '2019-12-12', '2022-06-24', '9a', '2020-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `aep_user_details_3`
--

CREATE TABLE `aep_user_details_3` (
  `user_det3_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `highest_educ` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `address_ph` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `email_add` varchar(255) NOT NULL,
  `permanent_add_abroad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aep_user_details_3`
--

INSERT INTO `aep_user_details_3` (`user_det3_id`, `user_name`, `highest_educ`, `course`, `address_ph`, `contact_no`, `email_add`, `permanent_add_abroad`) VALUES
(2, 'tomoyasai', 'INTERMEDIATE', 'Bachelor Of Science in Information Technolgy', 'Cagayan de Oro City', '09156821839', 'mikefostgate@gmail.com', 'cupboard-upon-water, Dublin, Ireland'),
(3, 'michael', 'INTERMEDIATE', 'Bachelor Of Science in Information Technolgy', 'Cagayan de Oro City', '09156821839', 'santacalsue@gmail.com', 'Berlin, Germany');

-- --------------------------------------------------------

--
-- Table structure for table `aep_user_dp`
--

CREATE TABLE `aep_user_dp` (
  `user_dp_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `date_uploaded` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `aep_user_employment`
--

CREATE TABLE `aep_user_employment` (
  `user_emp_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `assignment` varchar(255) NOT NULL,
  `name_of_company` varchar(255) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `company_contact` varchar(2522) NOT NULL,
  `company_email` varchar(255) NOT NULL,
  `nature` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aep_user_employment`
--

INSERT INTO `aep_user_employment` (`user_emp_id`, `user_name`, `position`, `assignment`, `name_of_company`, `company_address`, `company_contact`, `company_email`, `nature`) VALUES
(14, 'tomoyasai', 'Manager', 'Cagayan de Oro City, Misamis Oriental', '3exe Techno Services', 'Carmen, Cagayan de Oro City, Misamis Oriental', '09162558329', 'hr.3xtechnoservices@gmail.com', 'Techno Services'),
(15, 'michael', 'Manager', 'Cagayan de Oro City, Misamis Oriental', '3exe Techno Services', 'Carmen, Cagayan de Oro City, Misamis Oriental', '09162558329', 'hr.3xtechnoservices@gmail.com', 'Techno Services');

-- --------------------------------------------------------

--
-- Table structure for table `aep_user_files`
--

CREATE TABLE `aep_user_files` (
  `aep_file_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `date_uploaded` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aep_user_files`
--

INSERT INTO `aep_user_files` (`aep_file_id`, `user_name`, `file_name`, `date_uploaded`) VALUES
(4, 'tomoyasai', 'fwdformerspesbeneficiarynowaschooldirector.zip', '2020-07-14');

-- --------------------------------------------------------

--
-- Table structure for table `aep_user_status`
--

CREATE TABLE `aep_user_status` (
  `status_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `aep_number` varchar(255) NOT NULL,
  `user_status` varchar(255) NOT NULL,
  `remarks` text NOT NULL,
  `date_created` varchar(255) NOT NULL,
  `date_approved` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aep_user_status`
--

INSERT INTO `aep_user_status` (`status_id`, `user_name`, `aep_number`, `user_status`, `remarks`, `date_created`, `date_approved`) VALUES
(14, 'tomoyasai', '123123123123', 'FOR EVALUATION', 'adasdadasdadasdasd', '2020-07-03', '2020-07-14 08:54:53am'),
(15, 'michael', 'NOT AVAILABLE', 'DENIED', 'asdasdasdadasd', '2020-07-08', '2020-07-14 10:02:05am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aep_admin`
--
ALTER TABLE `aep_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `aep_company`
--
ALTER TABLE `aep_company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `aep_company_accounts`
--
ALTER TABLE `aep_company_accounts`
  ADD PRIMARY KEY (`comp_acc_id`);

--
-- Indexes for table `aep_user_accounts`
--
ALTER TABLE `aep_user_accounts`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `aep_user_details`
--
ALTER TABLE `aep_user_details`
  ADD PRIMARY KEY (`user_det_id`);

--
-- Indexes for table `aep_user_details_2`
--
ALTER TABLE `aep_user_details_2`
  ADD PRIMARY KEY (`user_det2_id`);

--
-- Indexes for table `aep_user_details_3`
--
ALTER TABLE `aep_user_details_3`
  ADD PRIMARY KEY (`user_det3_id`);

--
-- Indexes for table `aep_user_dp`
--
ALTER TABLE `aep_user_dp`
  ADD PRIMARY KEY (`user_dp_id`);

--
-- Indexes for table `aep_user_employment`
--
ALTER TABLE `aep_user_employment`
  ADD PRIMARY KEY (`user_emp_id`);

--
-- Indexes for table `aep_user_files`
--
ALTER TABLE `aep_user_files`
  ADD PRIMARY KEY (`aep_file_id`);

--
-- Indexes for table `aep_user_status`
--
ALTER TABLE `aep_user_status`
  ADD PRIMARY KEY (`status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aep_admin`
--
ALTER TABLE `aep_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aep_company`
--
ALTER TABLE `aep_company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aep_company_accounts`
--
ALTER TABLE `aep_company_accounts`
  MODIFY `comp_acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `aep_user_accounts`
--
ALTER TABLE `aep_user_accounts`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `aep_user_details`
--
ALTER TABLE `aep_user_details`
  MODIFY `user_det_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `aep_user_details_2`
--
ALTER TABLE `aep_user_details_2`
  MODIFY `user_det2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `aep_user_details_3`
--
ALTER TABLE `aep_user_details_3`
  MODIFY `user_det3_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `aep_user_dp`
--
ALTER TABLE `aep_user_dp`
  MODIFY `user_dp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aep_user_employment`
--
ALTER TABLE `aep_user_employment`
  MODIFY `user_emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `aep_user_files`
--
ALTER TABLE `aep_user_files`
  MODIFY `aep_file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `aep_user_status`
--
ALTER TABLE `aep_user_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
