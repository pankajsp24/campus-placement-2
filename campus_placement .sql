-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 12, 2021 at 12:05 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `campus_placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_name` varchar(500) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`admin_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `student_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob_no` varchar(20) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `message` varchar(700) NOT NULL,
  PRIMARY KEY (`student_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`student_name`, `email`, `mob_no`, `subject`, `message`) VALUES
('Hina Decosta', 'hina@gmail.com', '8742546273', 'Ui of web', 'its good but need to improve'),
('Ramesh Singh', 'ramesh@gmail.com', '9454625632', 'Inquiry about vaccancies for Chemistry students', 'Sir/mam is their any job role for Chemistry students ?');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `job_id` int(100) NOT NULL AUTO_INCREMENT,
  `job_desg` varchar(300) NOT NULL,
  `company_name` varchar(300) NOT NULL,
  `post_date` varchar(300) NOT NULL,
  `interview_date` varchar(300) NOT NULL,
  `stream` varchar(100) NOT NULL,
  `qualification` varchar(300) NOT NULL,
  `other_req` varchar(300) NOT NULL,
  `sal_package` varchar(100) NOT NULL,
  `job_place` varchar(300) NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_desg`, `company_name`, `post_date`, `interview_date`, `stream`, `qualification`, `other_req`, `sal_package`, `job_place`) VALUES
(5, 'java developer', 'wipro', '2020-12-22', '2020-12-27', 'computer science', 'graduate', 'should know basics', '200000 per year', 'Pune'),
(6, 'UI/UX Designer', 'TCS', '2020-12-22', '2020-12-25', 'Computer Application,Computer Science', 'BCA,BCS,MCS,MCA', 'Basic UI/UX design', '3 lac per year', 'pune,Mumbai'),
(7, 'Backend Developer', 'Cognizent', '2020-12-10', '2021-01-01', 'Compter Science', 'MCS,MCA,BCA,BCS', 'none', 'not mentioned', 'Pune');

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE IF NOT EXISTS `job_applications` (
  `job_appl_id` int(100) NOT NULL AUTO_INCREMENT,
  `job_desg` varchar(300) NOT NULL,
  `company_name` varchar(300) NOT NULL,
  `interview_date` varchar(300) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `PRN` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob_no` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `job_experience` varchar(100) NOT NULL,
  `dept_name` varchar(100) NOT NULL,
  `CV` varchar(500) NOT NULL,
  PRIMARY KEY (`job_appl_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`job_appl_id`, `job_desg`, `company_name`, `interview_date`, `student_name`, `PRN`, `email`, `mob_no`, `address`, `DOB`, `class`, `job_experience`, `dept_name`, `CV`) VALUES
(9, 'UI/UX Designer', 'TCS', '2020-12-25', 'john Grey', '9011', 'john@gmail.com', '9754436483', 'Captowm', '2020-12-25', 'FY MSC', '2 years', 'computer science', 'MyCv.txt'),
(11, 'UI/UX Designer', 'TCS', '2020-12-25', 'Hina Decosta', '9012', 'hina@gmail.com', '8742546273', 'washington', '2020-12-24', 'FY MSC', 'none', 'computer science', 'MyCv.txt');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `result_id` int(100) NOT NULL AUTO_INCREMENT,
  `job_appl_id` int(100) NOT NULL,
  `job_desg` varchar(300) NOT NULL,
  `company_name` varchar(300) NOT NULL,
  `interview_date` varchar(300) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `PRN` varchar(500) NOT NULL,
  `dept_name` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  PRIMARY KEY (`result_id`),
  KEY `job_appl_id` (`job_appl_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`result_id`, `job_appl_id`, `job_desg`, `company_name`, `interview_date`, `student_name`, `PRN`, `dept_name`, `class`, `remarks`) VALUES
(4, 8, 'Backend Developer', 'Cognizent', '2021-01-01', 'john Grey', '9011', 'computer science', 'FY MSC', 'Selected for the interview'),
(5, 10, 'java developer', 'wipro', '2020-12-27', 'Hina Decosta', '9012', 'computer science', 'FY MSC', 'Selected for the interview');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `dept_name` varchar(100) NOT NULL,
  `staff_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob_no` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`dept_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`dept_name`, `staff_name`, `email`, `mob_no`, `address`, `password`) VALUES
('computer science', 'Mr. Kumar', 'kumar@gmail.com', '9812734510', 'sangvi', '12345'),
('Computer Application', 'Mr.Kamlesh Rao', 'kamlesh@gmail.com', '856532312101', 'mumbai', '12345'),
('Chemistry Department', 'Miss. Shital kale', 'shital@gmail.com', '7596352634', 'Pune', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `PRN` varchar(500) NOT NULL,
  `dept_name` varchar(100) NOT NULL,
  `experience` int(11) NOT NULL COMMENT 'experience',
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`PRN`),
  KEY `dept_name` (`dept_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`PRN`, `dept_name`, `experience`, `password`) VALUES
('9011', 'computer science', 0, '12345'),
('9012', 'computer science', 2, '12345'),
('9013', 'Chemistry Department', 1, '12345'),
('9014', 'Chemistry Department', 3, '12345'),
('1234', 'computer science', 0, '12345'),
('1122', 'computer science', 1, '12345');

-- --------------------------------------------------------

--
-- Table structure for table `student_profile`
--

CREATE TABLE IF NOT EXISTS `student_profile` (
  `student_name` varchar(100) NOT NULL,
  `PRN` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob_no` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `adhar` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `job_experience` varchar(100) NOT NULL,
  `dept_name` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  PRIMARY KEY (`student_name`),
  KEY `PRN` (`PRN`),
  KEY `dept_name` (`dept_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_profile`
--

INSERT INTO `student_profile` (`student_name`, `PRN`, `email`, `mob_no`, `address`, `DOB`, `adhar`, `class`, `job_experience`, `dept_name`, `image`) VALUES
('john Grey', '9011', 'john@gmail.com', '9754436483', 'Captowm', '2020-12-25', '823426378234', 'FY MSC', '2', 'computer science', 'jd-chow-gutlccGLXKI-unsplash.jpg'),
('Hina Decosta', '9012', 'hina@gmail.com', '8742546273', 'washington', '2020-12-24', '986334232323', 'FY MSC', '0', 'computer science', 'fineas-gavre-G1FfdCpgo4A-unsplash.jpg'),
('Ramesh Singh', '9013', 'ramesh@gmail.com', '9445142536', 'Nashik', '1997-01-02', '7895646525', 'FYBSC (Chem)', '0', 'Chemistry Department', 'ben-parker-OhKElOkQ3RE-unsplash.jpg'),
('Om Das', '9014', 'om@gmail.com', '9785652524', 'Buldhana', '0995-12-02', '589656985663', 'MSc(chem)', '3', 'Chemistry Department', 'jd-chow-gutlccGLXKI-unsplash.jpg'),
('ram shete', '1234', 'ram@gmail.com', '1234567890', 'sangamner', '2021-08-02', '212441465356565', 'TYBCS', '4', 'computer science', 'ben-parker-OhKElOkQ3RE-unsplash.jpg'),
('shiv kadam', '1122', 'shiv@gmail.com', '58265325512', 'sangamner', '2021-08-10', '4587825412', 'SYBCS', '1', 'computer science', 'jd-chow-gutlccGLXKI-unsplash.jpg');
