-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2018 at 10:58 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `email` varchar(256) NOT NULL,
  `faculty` varchar(256) NOT NULL,
  `award` varchar(256) NOT NULL,
  `awarding_agency` varchar(256) NOT NULL,
  `incentive_details` varchar(256) NOT NULL,
  `award_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bos_boe`
--

CREATE TABLE `bos_boe` (
  `email` varchar(256) NOT NULL,
  `bosboe_upload` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

CREATE TABLE `committee` (
  `email` varchar(256) NOT NULL,
  `faculty_name` varchar(256) NOT NULL,
  `committee_name` varchar(256) NOT NULL,
  `academic_council` varchar(256) NOT NULL,
  `certificate_upload` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `consultancy`
--

CREATE TABLE `consultancy` (
  `email` varchar(256) NOT NULL,
  `Academic` varchar(256) NOT NULL,
  `consultancy` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `provided_to` varchar(256) NOT NULL,
  `date` date NOT NULL,
  `paid_status` varchar(256) NOT NULL,
  `on_site` varchar(256) NOT NULL,
  `consultancy_upload` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detailed_qualification`
--

CREATE TABLE `detailed_qualification` (
  `email` varchar(256) NOT NULL,
  `select_degree` varchar(256) NOT NULL,
  `marks` varchar(256) NOT NULL,
  `grade` varchar(256) NOT NULL,
  `board` varchar(256) NOT NULL,
  `college` varchar(256) NOT NULL,
  `degree_name` varchar(256) NOT NULL,
  `specialization` varchar(256) NOT NULL,
  `year_of_passing` varchar(256) NOT NULL,
  `division` varchar(256) NOT NULL,
  `marksheet` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `development_program`
--

CREATE TABLE `development_program` (
  `email` varchar(256) NOT NULL,
  `program` varchar(256) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `organized_by` varchar(256) NOT NULL,
  `sponser` varchar(256) NOT NULL,
  `university` varchar(256) NOT NULL,
  `orientation_program` varchar(256) NOT NULL,
  `level` varchar(256) NOT NULL,
  `dev_upload` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `email` varchar(256) NOT NULL,
  `pan` varchar(256) NOT NULL,
  `aadhar` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `email` varchar(256) NOT NULL,
  `teaching` varchar(256) NOT NULL,
  `industrial` varchar(256) NOT NULL,
  `research` varchar(256) NOT NULL,
  `uni_exam_evaluator` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guest_lecture`
--

CREATE TABLE `guest_lecture` (
  `email` varchar(256) NOT NULL,
  `guest_lecture` varchar(256) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(256) NOT NULL,
  `organized_by` varchar(256) NOT NULL,
  `direct_status` varchar(256) NOT NULL,
  `ICT` varchar(256) NOT NULL,
  `resource_person` varchar(256) NOT NULL,
  `guest_upload` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `live_projects`
--

CREATE TABLE `live_projects` (
  `email` varchar(256) NOT NULL,
  `date` date NOT NULL,
  `live_project` varchar(256) NOT NULL,
  `desciption` varchar(256) NOT NULL,
  `on_site_status` varchar(256) NOT NULL,
  `liveproject_upload` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('admin@test.com', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE `master` (
  `department` varchar(1000) NOT NULL,
  `stream` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ood_details`
--

CREATE TABLE `ood_details` (
  `email` varchar(256) NOT NULL,
  `start_date` date NOT NULL,
  `no_of_days` varchar(256) NOT NULL,
  `purpose` varchar(256) NOT NULL,
  `venue` varchar(256) NOT NULL,
  `OOD_upload` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `other_info`
--

CREATE TABLE `other_info` (
  `email` varchar(256) NOT NULL,
  `gender` varchar(256) NOT NULL,
  `Telephone` varchar(10) NOT NULL,
  `date_of_joining` decimal(10,0) NOT NULL,
  `per_address` varchar(256) NOT NULL,
  `religion` varchar(256) NOT NULL,
  `city` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `persnol_details`
--

CREATE TABLE `persnol_details` (
  `email` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `designation` varchar(256) NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `postal_code` varchar(6) NOT NULL,
  `appointment` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE `project_details` (
  `email` varchar(256) NOT NULL,
  `project_name` varchar(256) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `internal` varchar(256) NOT NULL,
  `patent` varchar(256) NOT NULL,
  `agency` varchar(256) NOT NULL,
  `grant_no` varchar(256) NOT NULL,
  `major` varchar(256) NOT NULL,
  `completion_status` varchar(256) NOT NULL,
  `government` varchar(256) NOT NULL,
  `project_upload` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `publication_detail`
--

CREATE TABLE `publication_detail` (
  `email` varchar(256) NOT NULL,
  `publication_title` varchar(256) NOT NULL,
  `publication_name` varchar(256) NOT NULL,
  `publisher` varchar(256) NOT NULL,
  `conference_name` varchar(256) NOT NULL,
  `ISBN` varchar(256) NOT NULL,
  `co_author` varchar(256) NOT NULL,
  `peer_preview` varchar(256) NOT NULL,
  `is_main_author` varchar(256) NOT NULL,
  `ISBN_status` varchar(256) NOT NULL,
  `book_sole_author` varchar(256) NOT NULL,
  `book_level` varchar(256) NOT NULL,
  `yop` varchar(256) NOT NULL,
  `affiliating_institute` varchar(256) NOT NULL,
  `publication_upload` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `email` varchar(256) NOT NULL,
  `qualification_1` varchar(256) NOT NULL,
  `qualification_2` varchar(256) NOT NULL,
  `qualification_3` varchar(256) NOT NULL,
  `phd_status` varchar(256) NOT NULL,
  `completed` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seminar_workshop`
--

CREATE TABLE `seminar_workshop` (
  `email` varchar(256) NOT NULL,
  `seminar_type` varchar(256) NOT NULL,
  `seminar_name` varchar(256) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `seminar_level` varchar(256) NOT NULL,
  `venue` varchar(256) NOT NULL,
  `sponser` varchar(256) NOT NULL,
  `resource_person` varchar(256) NOT NULL,
  `certificate_upload` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teaching_method`
--

CREATE TABLE `teaching_method` (
  `email` varchar(256) NOT NULL,
  `method_name` varchar(256) NOT NULL,
  `PO` varchar(256) NOT NULL,
  `organized_by` varchar(256) NOT NULL,
  `date` date NOT NULL,
  `direct` varchar(256) NOT NULL,
  `ICT` varchar(256) NOT NULL,
  `teaching_upload` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `bos_boe`
--
ALTER TABLE `bos_boe`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `committee`
--
ALTER TABLE `committee`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `consultancy`
--
ALTER TABLE `consultancy`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `detailed_qualification`
--
ALTER TABLE `detailed_qualification`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `development_program`
--
ALTER TABLE `development_program`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `guest_lecture`
--
ALTER TABLE `guest_lecture`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `live_projects`
--
ALTER TABLE `live_projects`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `ood_details`
--
ALTER TABLE `ood_details`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `other_info`
--
ALTER TABLE `other_info`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `persnol_details`
--
ALTER TABLE `persnol_details`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `project_details`
--
ALTER TABLE `project_details`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `publication_detail`
--
ALTER TABLE `publication_detail`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `seminar_workshop`
--
ALTER TABLE `seminar_workshop`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `teaching_method`
--
ALTER TABLE `teaching_method`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
