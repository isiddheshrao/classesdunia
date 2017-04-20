-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2017 at 03:45 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `classid` int(15) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `location` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` decimal(10,0) UNSIGNED NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`classid`, `cname`, `location`, `email`, `phone`, `description`) VALUES
(201, 'Vidyalankar', 'Andheri', 'vidyalankar@class.com', '111111111', 'this is the best classes ever'),
(202, 'RaoIIT', 'Borivali', 'raoiit@class.com', '2222222222', 'I will declare this classes as no.2'),
(203, 'Badhe', 'Vasai', 'badhe@class.com', '3333333333', 'any random shit here'),
(204, 'PaceIIT', 'Bandra', 'paceiit@class.com', '9999999999', 'How come we have not mentioned the money this classes earns'),
(205, 'Vidyasagar', 'Dadar', 'vidyasagar@class.com', '9100000000', 'never heard of this one yet, maybe founders are vidya and sagar'),
(206, 'Bhavani-Classes', 'Nalasopara', 'bhavaniclasses@gmailcom', '9122336474', 'jai bhavani'),
(207, 'Allen', 'Bhayandar', 'alleninstitute@gmailcom', '7506716217', 'We-are-Allen-the-best-IIT-institute-out-their');

-- --------------------------------------------------------

--
-- Table structure for table `class_info`
--

CREATE TABLE `class_info` (
  `class_id` int(15) NOT NULL,
  `logo_url` text,
  `slider_img_1` text,
  `slider_img_2` text,
  `slider_img_3` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `loc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`loc`) VALUES
('Andheri'),
('Bandra'),
('Borivali'),
('Dadar'),
('Dahisar'),
('Goregaon'),
('Mira Road'),
('Nallasopara'),
('Vasai'),
('Virar');

-- --------------------------------------------------------

--
-- Table structure for table `mainstream`
--

CREATE TABLE `mainstream` (
  `msid` int(15) NOT NULL,
  `msname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mainstream`
--

INSERT INTO `mainstream` (`msid`, `msname`) VALUES
(901, 'Engineering'),
(902, 'Medical'),
(903, 'Commerce'),
(904, 'Law'),
(905, 'Arts'),
(906, 'Science'),
(907, 'Design');

-- --------------------------------------------------------

--
-- Table structure for table `map_class_stream`
--

CREATE TABLE `map_class_stream` (
  `class_id` int(15) NOT NULL,
  `stream_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map_class_stream`
--

INSERT INTO `map_class_stream` (`class_id`, `stream_id`) VALUES
(201, 701),
(201, 702),
(201, 703),
(201, 704),
(201, 705),
(201, 706),
(202, 707),
(203, 701),
(203, 702),
(203, 703),
(203, 704),
(203, 705),
(203, 706),
(204, 707),
(205, 701),
(205, 702),
(205, 703),
(205, 704),
(205, 705),
(205, 706),
(206, 713),
(207, 707);

-- --------------------------------------------------------

--
-- Table structure for table `map_class_subject`
--

CREATE TABLE `map_class_subject` (
  `class_id` int(15) NOT NULL,
  `subject_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map_class_subject`
--

INSERT INTO `map_class_subject` (`class_id`, `subject_id`) VALUES
(201, 101),
(201, 102),
(201, 104),
(202, 106),
(203, 102),
(203, 105),
(204, 106),
(205, 101),
(205, 103),
(206, 112),
(207, 106);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subjectid` int(15) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `university` varchar(100) NOT NULL,
  `fstream` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjectid`, `sname`, `semester`, `university`, `fstream`) VALUES
(101, 'Strength-Of-Materials', 'semester-6', 'Mumbai-University', 'Civil'),
(102, 'Structured-Programming-Approach', 'semester-2', 'Mumbai-University', 'Computer'),
(103, 'Thermodynamics', 'semester-5', 'Mumbai-University', 'Mechanical'),
(104, 'Analog-and-Digital-Circuits', 'semester-4', 'Mumbai-University', 'Electronics-and-Telecommunication '),
(105, 'Data-Structures', 'semester-3', 'Mumbai-University', 'Information-Technology'),
(106, 'Physics', 'hsc', 'IITJEE', 'IIT'),
(108, 'Operating-System', 'semester ', 'Mumbai-University', 'Information-Technology'),
(109, 'Big-data-analysis', 'semester ', 'Mumbai-University', 'Information-Technology'),
(110, 'Web-Development', 'semester ', 'Mumbai-University', 'Computer'),
(111, 'Jewelry-Design', 'semester ', 'Raffels', 'CAD-Design'),
(112, 'Cosmetics', 'semester-', 'mumbai-university', 'Fashion-Designing');

-- --------------------------------------------------------

--
-- Table structure for table `substream`
--

CREATE TABLE `substream` (
  `ssid` int(15) NOT NULL,
  `ssname` varchar(100) NOT NULL,
  `msname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `substream`
--

INSERT INTO `substream` (`ssid`, `ssname`, `msname`) VALUES
(701, 'Information-Technology', 'Engineering'),
(702, 'Computer', 'Engineering'),
(703, 'Mechanical', 'Engineering'),
(704, 'Civil', 'Engineering'),
(705, 'Electronics', 'Engineering'),
(706, 'Electronics-and-Telecommunication', 'Engineering'),
(707, 'IIT', 'Science'),
(709, 'Electrical', 'Engineering'),
(710, 'BFM', 'Commerce'),
(711, 'BCom', 'Law'),
(712, 'LLB', 'Law'),
(713, 'Fashion-Designing', 'Arts'),
(715, 'Aeronautical', 'Engineering'),
(718, 'Chemistry', 'Science'),
(719, 'Literature', 'Arts'),
(722, 'BMS', 'Medical'),
(724, 'Deitician', 'Medical'),
(725, 'CA', 'Commerce'),
(726, 'CAD-Design', 'Arts'),
(727, 'Communication-Design', 'Design');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `tag` varchar(100) NOT NULL DEFAULT '' COMMENT 'primary as all tag values are unique and not null'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`tag`) VALUES
('Badhe'),
('Badhe Classes'),
('Engineering Classes'),
('Mahesh Tutorials'),
('Medical Classes'),
('Overseas Education'),
('Semester 1 CIVIL classes'),
('Semester 1 CS classes'),
('Semester 1 Electronics classes'),
('Semester 1 EXTC classes'),
('Semester 1 IT classes'),
('Semester 1 MECH classes'),
('Semester 2 CIVIL classes'),
('Semester 2 CS classes'),
('Semester 2 Electronics classes'),
('Semester 2 EXTC classes'),
('Semester 2 IT classes'),
('Semester 2 MECH classes'),
('Semester 3 CIVIL classes'),
('Semester 3 CS classes'),
('Semester 3 Electronics classes'),
('Semester 3 EXTC classes'),
('Semester 3 IT classes'),
('Semester 3 MECH classes'),
('Semester 4 CIVIL classes'),
('Semester 4 CS classes'),
('Semester 4 Electronics classes'),
('Semester 4 EXTC classes'),
('Semester 4 IT classes'),
('Semester 4 MECH classes'),
('Semester 5 CIVIL classes'),
('Semester 5 CS classes'),
('Semester 5 Electronics classes'),
('Semester 5 EXTC classes'),
('Semester 5 IT classes'),
('Semester 5 MECH classes'),
('Semester 6 CIVIL classes'),
('Semester 6 CS classes'),
('Semester 6 Electronics classes'),
('Semester 6 EXTC classes'),
('Semester 6 IT classes'),
('Semester 6 MECH classes'),
('Semester 7 CIVIL classes'),
('Semester 7 CS classes'),
('Semester 7 Electronics classes'),
('Semester 7 EXTC classes'),
('Semester 7 IT classes'),
('Semester 7 MECH classes'),
('Semester 8 CIVIL classes'),
('Semester 8 CS classes'),
('Semester 8 Electronics classes'),
('Semester 8 EXTC classes'),
('Semester 8 IT classes'),
('Semester 8 MECH classes'),
('VidyaLankar'),
('VidyaLankar Classes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`classid`,`cname`);

--
-- Indexes for table `class_info`
--
ALTER TABLE `class_info`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD UNIQUE KEY `loc` (`loc`);

--
-- Indexes for table `mainstream`
--
ALTER TABLE `mainstream`
  ADD PRIMARY KEY (`msname`),
  ADD UNIQUE KEY `msname` (`msname`),
  ADD UNIQUE KEY `msid` (`msid`);

--
-- Indexes for table `map_class_stream`
--
ALTER TABLE `map_class_stream`
  ADD PRIMARY KEY (`class_id`,`stream_id`),
  ADD KEY `fk_stream_id` (`stream_id`);

--
-- Indexes for table `map_class_subject`
--
ALTER TABLE `map_class_subject`
  ADD PRIMARY KEY (`class_id`,`subject_id`),
  ADD KEY `fk_subject_id` (`subject_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subjectid`,`sname`),
  ADD UNIQUE KEY `sname` (`sname`),
  ADD KEY `fk_stream_subject` (`fstream`);

--
-- Indexes for table `substream`
--
ALTER TABLE `substream`
  ADD PRIMARY KEY (`ssid`),
  ADD UNIQUE KEY `ssname` (`ssname`),
  ADD KEY `msname` (`msname`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tag`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `classid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;
--
-- AUTO_INCREMENT for table `mainstream`
--
ALTER TABLE `mainstream`
  MODIFY `msid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=908;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subjectid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `substream`
--
ALTER TABLE `substream`
  MODIFY `ssid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=728;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `class_info`
--
ALTER TABLE `class_info`
  ADD CONSTRAINT `class_id_more_info` FOREIGN KEY (`class_id`) REFERENCES `classes` (`classid`);

--
-- Constraints for table `map_class_stream`
--
ALTER TABLE `map_class_stream`
  ADD CONSTRAINT `fk_classes_id` FOREIGN KEY (`class_id`) REFERENCES `classes` (`classid`),
  ADD CONSTRAINT `fk_stream_id` FOREIGN KEY (`stream_id`) REFERENCES `substream` (`ssid`);

--
-- Constraints for table `map_class_subject`
--
ALTER TABLE `map_class_subject`
  ADD CONSTRAINT `fk_class_id` FOREIGN KEY (`class_id`) REFERENCES `classes` (`classid`),
  ADD CONSTRAINT `fk_subject_id` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subjectid`);

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `fk_stream_subject` FOREIGN KEY (`fstream`) REFERENCES `substream` (`ssname`);

--
-- Constraints for table `substream`
--
ALTER TABLE `substream`
  ADD CONSTRAINT `fk_mainstream_substream` FOREIGN KEY (`msname`) REFERENCES `mainstream` (`msname`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
