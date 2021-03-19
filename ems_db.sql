-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 19, 2021 at 01:25 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 1),
(2, 'amit', 'amit@gmail.com', 'amit', 2);

-- --------------------------------------------------------

--
-- Table structure for table `bidder_table`
--

CREATE TABLE `bidder_table` (
  `id` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bidding_dep`
--

CREATE TABLE `bidding_dep` (
  `id` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `bidding_dep` varchar(255) NOT NULL,
  `bidder_name` varchar(255) NOT NULL,
  `department_id` int(10) NOT NULL,
  `emp_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bid_dep`
--

CREATE TABLE `bid_dep` (
  `id` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `bidder_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bid_department`
--

CREATE TABLE `bid_department` (
  `id` int(10) NOT NULL,
  `department` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bid_department`
--

INSERT INTO `bid_department` (`id`, `department`, `name`) VALUES
(1, 'BIDDING', 'Gurjit'),
(5, 'BIDDING', 'Karan Nadda');

-- --------------------------------------------------------

--
-- Table structure for table `client_table`
--

CREATE TABLE `client_table` (
  `id` int(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `joining_date` varchar(255) NOT NULL,
  `age_name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_table`
--

INSERT INTO `client_table` (`id`, `first_name`, `last_name`, `joining_date`, `age_name`, `contact`, `department`, `country`, `email`) VALUES
(16, 'David', 'watson', '2021-03-13', 'Flipkart', '12365214520', 'Php', 'UK', 'david@gmail.com'),
(18, 'Shubham', 'Kumar', '2021-03-21', '23423', '9450546542', 'BIDDING PHP', 'india', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `department_table`
--

CREATE TABLE `department_table` (
  `id` int(11) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department_table`
--

INSERT INTO `department_table` (`id`, `department`) VALUES
(34, 'PHP'),
(36, 'SEO'),
(41, 'BIDDING PHP'),
(45, 'BIDDING SEO');

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `id` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `joining_date` varchar(255) NOT NULL,
  `emp_id` int(10) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password1` varchar(255) NOT NULL,
  `password2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`id`, `firstname`, `lastname`, `joining_date`, `emp_id`, `dob`, `department`, `role`, `email`, `password1`, `password2`) VALUES
(112, 'Sarita', 'Sharma', '2021-03-12', 1, '1986-06-13', 'PHP', 'PROJECT MANAGER PHP', 'sarita@gmail.com', '$2y$10$R93cq5JMFkPDomHapVxPBO8y9DehZP8tZ5BEZWtIdOqSXmutLD0Gu', '$2y$10$/EHc3uFCOYTvlm2QvlELFO2qDX8GvbHmmThtLmZvGgWz3yw6iKf5q'),
(115, 'Amandeep', 'Bhogal', '2021-03-12', 4, '1992-06-12', 'PHP', 'TEAM LEADER PHP', 'amandeep@gmail.com', '$2y$10$ds0.DO6IR9e0.vf4NBoNVepNqND1d2svBbu.weV91xTc6qT4rbWgu', '$2y$10$2b4QGSULWUBhucVRntSdLuXcRAmXULU8yu9hq9.pgDuYHFN/c9kJu'),
(116, 'Gaurav', 'Thakur', '2021-03-12', 5, '1994-06-12', 'PHP', 'TEAM LEADER PHP', 'gaurav@gmail.com', '$2y$10$CoJ.Xn.5.qZlMSi7atb3qOILt1529.uCqS3nIl8hTOadWoL82HtUm', '$2y$10$6LCbinHPUkxWwtmLrLPapeW.Bv1OL0GcS0friCANVD2bpLVfqwcP2'),
(117, 'Sumit', 'Manchanda', '1986-10-12', 6, '1993-06-12', 'PHP', 'PROJECT MANAGER PHP', 'sumit@gmail.com', '$2y$10$6D2EptnDhx6zFUfdspsswuNUxazHd3jFVa0FTCeXOG1hF47Prwkfu', '$2y$10$1po7jGcOPOa58jV24UTyv.oJgreRMPYS/MogRjUOVJoc66t.QFOD6'),
(118, 'Mohit', 'Verma', '2021-03-12', 7, '1988-03-12', 'SEO', 'PROJECT MANAGER SEO', 'mohit@gmail.com', '$2y$10$.hnPbif9j9Ao3bZfUb8h8ePVih5G3biDpTIaOeFodJyhuYKCFdnci', '$2y$10$KexrpPOb064id9sUklidc.7KV0sG0ii.74Bt0PrQPnCmj.kSfagYe'),
(119, 'Amit', 'Sarma', '2021-03-12', 8, '1994-11-12', 'SEO', 'TEAM LEADER SEO', 'amit@gmail.com', '$2y$10$pXP3wfnGKjlG1iviNrWtD.Sf16fGail4AA8kED2GeSL94dlxYpjH6', '$2y$10$vZgnLLGe0aS5HQnKL6ZycOVSeYSDA3UExpcvcLDEIth1zNXcTvPYG'),
(122, 'Amit', 'Kumar', '2021-03-17', 9, '2021-03-20', 'BIDDING SEO', 'BIDDER SEO', 'kumar123@gmail.com', '$2y$10$j.8EA/xWbG7uRcp3rjQk7.2DQE1sn1cDiLMsbo/99qeanixrQGTU2', '$2y$10$51y1tjrMdaDRw74ciEa0Ue4HlNtxOHQ4n4gYBuLwZaQdTUH2RxxB6'),
(124, 'Gurjit', 'Singh', '2021-03-18', 9, '1998-01-08', 'BIDDING PHP', 'BIDDER PHP', 'gurjit@gmail.com', '$2y$10$mKTjXfZEWUS/R0l4vwncKOrKhrTvPEOYh/DKQpzc7Z5raefzqirXK', '$2y$10$/7R9BaBIYStjVW1XPsiPZuQDpVe4T8/BmPSAaLO91cYn2XEKPBArm');

-- --------------------------------------------------------

--
-- Table structure for table `project_table`
--

CREATE TABLE `project_table` (
  `id` int(10) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `upwork_id` varchar(255) NOT NULL,
  `hired_by` varchar(255) NOT NULL,
  `bid_dep` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `project_manager` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `team_leder` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_table`
--

INSERT INTO `project_table` (`id`, `project_title`, `client_name`, `start_date`, `upwork_id`, `hired_by`, `bid_dep`, `country`, `project_manager`, `status`, `team_leder`, `url`, `file`) VALUES
(59, 'Tour and Travel', 'David', '2021-03-07', '12', '118', 'SEO', 'sdjhsdf', 'Sumit', 'Active', 'Gaurav', 'www.pointhub.com', 'uploads/nature2.jpg,uploads/nature.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `role_table`
--

CREATE TABLE `role_table` (
  `id` int(10) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role_table`
--

INSERT INTO `role_table` (`id`, `role`) VALUES
(36, 'TEAM LEADER PHP'),
(37, 'PROJECT MANAGER PHP'),
(38, 'PROJECT MANAGER SEO'),
(40, 'BIDDER PHP'),
(41, 'TEAM LEADER SEO'),
(43, 'BIDDER SEO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bidder_table`
--
ALTER TABLE `bidder_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bidding_dep`
--
ALTER TABLE `bidding_dep`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `bid_dep`
--
ALTER TABLE `bid_dep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bid_department`
--
ALTER TABLE `bid_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_table`
--
ALTER TABLE `client_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_table`
--
ALTER TABLE `department_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_table`
--
ALTER TABLE `project_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_table`
--
ALTER TABLE `role_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bidder_table`
--
ALTER TABLE `bidder_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bidding_dep`
--
ALTER TABLE `bidding_dep`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bid_dep`
--
ALTER TABLE `bid_dep`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bid_department`
--
ALTER TABLE `bid_department`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `client_table`
--
ALTER TABLE `client_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `department_table`
--
ALTER TABLE `department_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `project_table`
--
ALTER TABLE `project_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `role_table`
--
ALTER TABLE `role_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bidding_dep`
--
ALTER TABLE `bidding_dep`
  ADD CONSTRAINT `department_id` FOREIGN KEY (`department_id`) REFERENCES `bidder_table` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
