-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2022 at 03:02 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d0l310_aepdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `aep_alient_pres_emp_tbl`
--

CREATE TABLE `aep_alient_pres_emp_tbl` (
  `ape_id` int(11) NOT NULL,
  `aada_reg_no` varchar(150) NOT NULL,
  `ape_pos` varchar(150) NOT NULL,
  `ape_job_desc` text NOT NULL,
  `ape_base_qualif` varchar(100) NOT NULL,
  `ape_wp_st` varchar(100) NOT NULL,
  `ape_wp_muni` varchar(100) NOT NULL,
  `ape_wp_prov` varchar(100) NOT NULL,
  `ape_company` varchar(50) NOT NULL,
  `ape_comp_add` varchar(255) NOT NULL,
  `ape_comp_cn` varchar(50) NOT NULL,
  `ape_comp_email` varchar(150) NOT NULL,
  `ape_nob` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `aep_alien_details_a_tbl`
--

CREATE TABLE `aep_alien_details_a_tbl` (
  `aada_id` int(11) NOT NULL,
  `aada_reg_no` varchar(150) NOT NULL,
  `acd_reg_no` varchar(150) NOT NULL,
  `aada_fname` varchar(150) NOT NULL,
  `aada_mname` varchar(150) NOT NULL,
  `aada_lname` varchar(150) NOT NULL,
  `aada_extn` varchar(15) NOT NULL,
  `aada_nationality` varchar(255) NOT NULL,
  `aada_gender` varchar(50) NOT NULL,
  `aada_civ_status` varchar(50) NOT NULL,
  `aada_tin` varchar(50) NOT NULL,
  `aada_dob` varchar(150) NOT NULL,
  `aada_place_dob` varchar(255) NOT NULL,
  `aada_app_type` varchar(150) NOT NULL,
  `aada_app_status` varchar(150) NOT NULL,
  `aada_date_approve` varchar(150) NOT NULL,
  `aada_exp_date` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `aep_alien_details_b_tbl`
--

CREATE TABLE `aep_alien_details_b_tbl` (
  `aadb_id` int(150) NOT NULL,
  `aada_reg_no` varchar(150) NOT NULL,
  `aadb_pport` varchar(150) NOT NULL,
  `aadb_issuance` varchar(150) NOT NULL,
  `aadb_pport_exp` varchar(150) NOT NULL,
  `aadb_vs_type` varchar(150) NOT NULL,
  `aadb_valid_until` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `aep_alien_details_c_tbl`
--

CREATE TABLE `aep_alien_details_c_tbl` (
  `aadc_id` int(11) NOT NULL,
  `aada_reg_no` varchar(150) NOT NULL,
  `aadc_edu` varchar(150) NOT NULL,
  `aadc_course` varchar(150) NOT NULL,
  `aadc_grad_year` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `aep_alien_details_d_tbl`
--

CREATE TABLE `aep_alien_details_d_tbl` (
  `aadd_id` int(11) NOT NULL,
  `aada_reg_no` varchar(150) NOT NULL,
  `aadd_alien_cn` varchar(150) NOT NULL,
  `aadd_alien_email` varchar(150) NOT NULL,
  `aadd_address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `aep_comp_account_tbl`
--

CREATE TABLE `aep_comp_account_tbl` (
  `aca_id` int(11) NOT NULL,
  `aca_reg_no` varchar(255) NOT NULL,
  `aca_email` varchar(150) NOT NULL,
  `aca_pw` varchar(150) NOT NULL,
  `aca_date_reg` varchar(150) NOT NULL,
  `aca_is_validated` varchar(150) NOT NULL,
  `aca_1020_ein` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aep_comp_account_tbl`
--

INSERT INTO `aep_comp_account_tbl` (`aca_id`, `aca_reg_no`, `aca_email`, `aca_pw`, `aca_date_reg`, `aca_is_validated`, `aca_1020_ein`) VALUES
(5, 'AEPCOMPANY-220308736Z', 'dole10.czarbobinzambrano@gmail.com', 'braindead2014', '2022-03-08', 'NOT VALIDATED', '1020EIN-LDN540');

-- --------------------------------------------------------

--
-- Table structure for table `aep_comp_details_tbl`
--

CREATE TABLE `aep_comp_details_tbl` (
  `acd_id` int(11) NOT NULL,
  `aca_reg_no` varchar(255) NOT NULL,
  `acd_reg_no` varchar(255) NOT NULL,
  `acd_comp_name` varchar(255) NOT NULL,
  `acd_st` varchar(150) NOT NULL,
  `acd_prov` varchar(150) NOT NULL,
  `acd_muni` varchar(150) NOT NULL,
  `acd_owner` varchar(255) NOT NULL,
  `acd_position` varchar(150) NOT NULL,
  `acd_contact_no` varchar(50) NOT NULL,
  `acd_email` varchar(150) NOT NULL,
  `acd_nob` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aep_comp_details_tbl`
--

INSERT INTO `aep_comp_details_tbl` (`acd_id`, `aca_reg_no`, `acd_reg_no`, `acd_comp_name`, `acd_st`, `acd_prov`, `acd_muni`, `acd_owner`, `acd_position`, `acd_contact_no`, `acd_email`, `acd_nob`) VALUES
(1, 'AEPCOMPANY-220308736Z', 'AEPCOMP-REG-NO-220308289R', 'SAMPLE COMPANY', '123 STREET, JEJU SUBDIVISION, BULUA', 'Cagayan de Oro City Field Office', 'Cagayan De Oro', 'JOHAN GAT', 'Owner', '09155574082', 'dole10.czarbobinzambrano@gmail.com', 'Accomodation and food services');

-- --------------------------------------------------------

--
-- Table structure for table `aep_office_accounts_tbl`
--

CREATE TABLE `aep_office_accounts_tbl` (
  `aoa_id` int(11) NOT NULL,
  `aoa_un` varchar(150) NOT NULL,
  `aoa_pw` varchar(150) NOT NULL,
  `aoa_pfo` varchar(150) NOT NULL,
  `aoa_head` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aep_alient_pres_emp_tbl`
--
ALTER TABLE `aep_alient_pres_emp_tbl`
  ADD PRIMARY KEY (`ape_id`);

--
-- Indexes for table `aep_alien_details_a_tbl`
--
ALTER TABLE `aep_alien_details_a_tbl`
  ADD PRIMARY KEY (`aada_id`);

--
-- Indexes for table `aep_alien_details_b_tbl`
--
ALTER TABLE `aep_alien_details_b_tbl`
  ADD PRIMARY KEY (`aadb_id`);

--
-- Indexes for table `aep_alien_details_c_tbl`
--
ALTER TABLE `aep_alien_details_c_tbl`
  ADD PRIMARY KEY (`aadc_id`);

--
-- Indexes for table `aep_alien_details_d_tbl`
--
ALTER TABLE `aep_alien_details_d_tbl`
  ADD PRIMARY KEY (`aadd_id`);

--
-- Indexes for table `aep_comp_account_tbl`
--
ALTER TABLE `aep_comp_account_tbl`
  ADD PRIMARY KEY (`aca_id`);

--
-- Indexes for table `aep_comp_details_tbl`
--
ALTER TABLE `aep_comp_details_tbl`
  ADD PRIMARY KEY (`acd_id`);

--
-- Indexes for table `aep_office_accounts_tbl`
--
ALTER TABLE `aep_office_accounts_tbl`
  ADD PRIMARY KEY (`aoa_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aep_alient_pres_emp_tbl`
--
ALTER TABLE `aep_alient_pres_emp_tbl`
  MODIFY `ape_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aep_alien_details_a_tbl`
--
ALTER TABLE `aep_alien_details_a_tbl`
  MODIFY `aada_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aep_alien_details_b_tbl`
--
ALTER TABLE `aep_alien_details_b_tbl`
  MODIFY `aadb_id` int(150) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aep_alien_details_c_tbl`
--
ALTER TABLE `aep_alien_details_c_tbl`
  MODIFY `aadc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aep_alien_details_d_tbl`
--
ALTER TABLE `aep_alien_details_d_tbl`
  MODIFY `aadd_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aep_comp_account_tbl`
--
ALTER TABLE `aep_comp_account_tbl`
  MODIFY `aca_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `aep_comp_details_tbl`
--
ALTER TABLE `aep_comp_details_tbl`
  MODIFY `acd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aep_office_accounts_tbl`
--
ALTER TABLE `aep_office_accounts_tbl`
  MODIFY `aoa_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
