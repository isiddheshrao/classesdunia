-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 08:12 PM
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
  `logourl` text,
  `pageurl` text,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`classid`, `cname`, `location`, `email`, `phone`, `logourl`, `pageurl`, `description`) VALUES
(208, 'Rao-IIT-Academy', 'Andheri', 'contactus@raoiit.com', '3245345345', 'raoiit.png', 'post-raoiit.html', 'Rao-IIT-does-not-belong-to-Siddesh-Rao'),
(209, 'Resonance', 'Borivali', 'contactus@resonance.com', '1234123498', 'resonance.png', 'post-resonance.html', 'Resonance-is-the-IIT-coaching-ever'),
(211, 'Ace-Coaching', 'Nalasopara', 'contactus@ace.com', '1212121211', 'ace.png', 'post-ace.html', 'I-dont-where-is-this'),
(212, 'CET-King', 'Virar', 'contactus@cetking.com', '1321223232', 'cetking.png', 'post-cetking.html', 'We-need-a-entrance-exam-section-for-each-of-the-streams'),
(213, 'The-Gate-Academy', 'Bandra', 'contactus@gateacademy.com', '7737377373', 'gateacademy.png', 'post-gateacademy.html', 'the-gate-academy-provides-gate-preparation-for-IT-and-Mechanical'),
(214, 'Progate-Coaching', 'Dadar', 'contactus@progatecoaching.com', '7362361717', 'progate.png', 'post-progate.html', 'progate-coaching-provides-gate-preparation-for-computer-and-civil'),
(215, 'Ideal-st-Century', 'Mira-Road', 'contactus@idealcentury.com', '7432892428', 'ideal.png', 'post-ideal.html', 'this-one-offers-subjects-Accountancy-and-Book-Keeping-in-BFM'),
(216, 'Lokayan', 'Dahisar', 'contactus@lokayan.com', '3242434354', 'lokayan.png', 'post-lokayan.html', 'Lokayan-Provides-Preparation-for-Government-Exams'),
(217, 'Focus-Competition', 'Goregaon', 'contactus@focuscompetition.com', '6726262676', 'focuscompetition.png', 'post-focuscompetition.html', 'Focus-Competition-provides-preparation-for-Entrance-Exams-such-as-SBI-PO-and-Civil-Services'),
(218, 'Rao-IIT-Academy', 'Kandivali', 'contactus@raoiit.com', '3245345345', 'raoiit.png', 'post-raoiit.html', 'Rao-IIT-does-not-belong-to-Siddesh-Rao');

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
('Nalasopara'),
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
(208, 707),
(209, 707),
(211, 701),
(211, 702),
(212, 707),
(213, 701),
(213, 703),
(214, 702),
(214, 704),
(215, 710),
(216, 728),
(217, 728),
(218, 702);

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
(208, 106),
(208, 113),
(208, 114),
(209, 106),
(209, 113),
(209, 114),
(211, 102),
(211, 105),
(211, 108),
(211, 110),
(212, 106),
(212, 113),
(212, 114),
(213, 103),
(213, 108),
(213, 109),
(214, 101),
(214, 110),
(215, 115),
(215, 116),
(216, 117),
(216, 118),
(216, 119),
(217, 117),
(217, 119),
(218, 102);

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
(112, 'Cosmetics', 'semester', 'mumbai-university', 'Fashion-Designing'),
(113, 'Chemistry', 'hsc', 'IITJEE', 'IIT'),
(114, 'Mathematics', 'hsc', 'IITJEE', 'IIT'),
(115, 'Accountancy', 'Semester-', 'Pune-University', 'BFM'),
(116, 'Book-Keeping', 'semester-', 'Pune-University', 'BFM'),
(117, 'SBI-PO', 'GRADUATE', 'SBI', 'Entrance'),
(118, 'Staff-Selection-Commission', 'GRADUATE', 'Government', 'Entrance'),
(119, 'Civil-Services', 'GRADUATE', 'Government', 'Entrance');

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
(719, 'Literature', 'Arts'),
(722, 'BMS', 'Medical'),
(724, 'Deitician', 'Medical'),
(725, 'CA', 'Commerce'),
(726, 'CAD-Design', 'Arts'),
(727, 'Communication-Design', 'Design'),
(728, 'Entrance', 'Engineering');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `classid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;
--
-- AUTO_INCREMENT for table `mainstream`
--
ALTER TABLE `mainstream`
  MODIFY `msid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=908;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subjectid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
--
-- AUTO_INCREMENT for table `substream`
--
ALTER TABLE `substream`
  MODIFY `ssid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=729;
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
