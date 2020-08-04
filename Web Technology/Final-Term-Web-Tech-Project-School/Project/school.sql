-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2019 at 01:54 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Father_Name` varchar(50) NOT NULL,
  `Mother_Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `ContactNo` varchar(15) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `UserType` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `JoinDate` date NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(10) NOT NULL,
  `writerid` varchar(50) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `keywords` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `writerid`, `heading`, `description`, `keywords`) VALUES
(4, '201', 'Binary Search', 'Binary search is an efficient algorithm for finding an item from a sorted list of items. It works by repeatedly dividing in half the portion of the list that could contain ', 'binary search|logn'),
(5, '202', 'Bangladesh', 'The etymology of Bangladesh (Country of Bengal) can be traced to the early 20th century, when Bengali patriotic songs, such as Namo Namo Namo Bangladesh Momo by Kazi Nazrul Islam and Aaji Bangladesher Hridoy by Rabindranath Tagore, used the term.[22] The term Bangladesh was often written as two words, Bangla Desh, in the past. Starting in the 1950s, Bengali nationalists used the term in political rallies in East Pakistan.  ', 'Bangladesh|libaration war'),
(6, '1001', 'USA', 'The earliest known use of the name \"America\" dates to April 25, 1507, when it was applied to the lands of the Western Hemisphere on a world map. The map was created and published by Martin Waldseemüller, a German cartographer in the town of Saint-Dié-des-Vosges, Lorraine, to honor the Italian explorer Amerigo Vespucci (Latin: Americus Vespucius).[', 'usa');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(10) NOT NULL,
  `studentid` varchar(50) NOT NULL,
  `subjectname` varchar(50) NOT NULL,
  `totalclass` int(10) NOT NULL,
  `present` int(10) NOT NULL,
  `absent` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `studentid`, `subjectname`, `totalclass`, `present`, `absent`) VALUES
(1, '1001', 'Algorithm[K]', 60, 45, 15),
(2, '1001', 'Data Structure[F]', 60, 55, 5),
(3, '1002', 'Algorithm[K]', 60, 52, 8),
(4, '1002', 'Data Structure[F]', 60, 51, 9);

-- --------------------------------------------------------

--
-- Table structure for table `finalmarks`
--

CREATE TABLE `finalmarks` (
  `id` int(10) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `studentid` varchar(50) NOT NULL,
  `serialno` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quiz` int(10) NOT NULL,
  `assignment` int(10) NOT NULL,
  `term` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finalmarks`
--

INSERT INTO `finalmarks` (`id`, `subject`, `studentid`, `serialno`, `name`, `quiz`, `assignment`, `term`, `total`) VALUES
(1, 'BAN[F]', '1001', 1, 'Babul', 15, 24, 49, 88),
(2, 'ENG[F]', '1002', 2, 'Abul', 20, 30, 40, 90),
(3, 'MATH[K]', '1001', 1, 'Babul', 15, 25, 45, 85),
(4, 'BAN2[K]', '1002', 2, 'Abul', 17, 27, 50, 94),
(5, 'ICT', '1001', 1, 'Babul', 15, 30, 45, 90),
(6, 'ICT', '1002', 2, 'Abul', 18, 28, 48, 94);

-- --------------------------------------------------------

--
-- Table structure for table `midmarks`
--

CREATE TABLE `midmarks` (
  `id` int(10) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `studentid` varchar(50) NOT NULL,
  `serialno` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quiz` int(10) NOT NULL,
  `assignment` int(10) NOT NULL,
  `term` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `midmarks`
--

INSERT INTO `midmarks` (`id`, `subject`, `studentid`, `serialno`, `name`, `quiz`, `assignment`, `term`, `total`) VALUES
(1, 'BAN[F]', '1001', 1, 'Babul', 18, 30, 45, 93),
(2, 'ENG[F]', '1002', 2, 'Abul', 20, 25, 48, 93),
(3, 'MATH[K]', '1001', 1, 'Babul', 20, 30, 48, 98),
(4, 'BAN2[K]', '1002', 2, 'Abul', 20, 28, 50, 98),
(5, 'ICT', '1001', 1, 'Babul', 20, 30, 49, 99),
(6, 'ICT', '1002', 2, 'Abul', 18, 25, 50, 93);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(10) NOT NULL,
  `subject` varchar(70) NOT NULL,
  `title` varchar(70) NOT NULL,
  `description` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `subject`, `title`, `description`) VALUES
(1, 'English 1st Part[A]', 'Class cancel', 'Today class is canceled, please be informed.'),
(2, 'Admin', 'Urgent Meeting', 'Please attend todays meeting at 05:00 o clock.');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `studentid` varchar(50) NOT NULL,
  `serialno` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mid` int(10) NOT NULL,
  `final` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `position` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `subject`, `studentid`, `serialno`, `name`, `mid`, `final`, `total`, `position`) VALUES
(1, 'Bangla 1st Part[A]', '1001', 1, 'Babul', 0, 0, 0, 0),
(2, 'Bangla 1st Part[A]', '1002', 2, 'Abul', 0, 0, 0, 0),
(3, 'Bangla 2nd Part[B]', '1001', 1, 'Babul', 0, 0, 0, 0),
(4, 'Bangla 2nd Part[B]', '1002', 2, 'Abul', 0, 0, 0, 0),
(5, 'Bangla 2nd Part[B]', '1001', 1, 'Babul', 0, 0, 0, 0),
(6, 'Bangla 2nd Part[B]', '1002', 2, 'Abul', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(10) NOT NULL,
  `teacherid` varchar(50) NOT NULL,
  `teachername` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `academicyear` varchar(50) NOT NULL,
  `room` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `teacherid`, `teachername`, `subject`, `time`, `class`, `academicyear`, `room`) VALUES
(1, '11-*****-3', 'Md. Saifur Rahman', 'English 1st Part[A]', 'Sat11:00-1145 Mon11:00-1145 Wed11:00-1145 ', 'Eight', '2019', ''),
(2, '201', 'Md. Towhid', 'Bangla 1st Part[B]', 'Sat11:00-1145 Mon11:00-1145 ', 'Seven', '2019', '#2101'),
(3, '201', 'Md. Towhid', 'Bangla 1st Part[A]', 'Sun11:00-1145 Tues11:00-1145 ', 'Nine', '2019', '#3102'),
(4, '201', 'Md. Towhid', 'Bangla 2nd Part[B]', 'Wed11:00-1145 Thurs11:00-1145 ', 'Six', '2019', '#4211'),
(5, '202', 'Md. Tareq', 'English 2nd Part[B]', 'Wed12:00-1145 Thurs12:00-1145 ', 'Six', '2019', ''),
(6, '202', 'Md. Tareq', 'English 2nd Part[A]', 'Sun12:00-1145 Tues12:00-1145 ', 'Eight', '2019', '');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Father_Name` varchar(50) NOT NULL,
  `Mother_Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `ContactNo` varchar(15) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `UserType` varchar(15) NOT NULL,
  `DOB` date NOT NULL,
  `JoinDate` date NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Department` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Id`, `Name`, `Father_Name`, `Mother_Name`, `Email`, `ContactNo`, `Gender`, `UserType`, `DOB`, `JoinDate`, `Address`, `Department`) VALUES
(201, 'Md. Towhid', 'Abdul Motin', 'Asma Akter', 'towhid@xyz.edu', '01569 256987', 'Male', '', '0000-00-00', '0000-00-00', 'Dhaka, Dhanmondi', 'Bangla');

-- --------------------------------------------------------

--
-- Table structure for table `userinformation`
--

CREATE TABLE `userinformation` (
  `UId` int(15) NOT NULL,
  `UName` varchar(50) NOT NULL,
  `Father_Name` varchar(50) NOT NULL,
  `Mother_Name` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Contact_No` varchar(15) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `Date_Of_Birth` date NOT NULL,
  `User_Type` varchar(15) NOT NULL,
  `Joining_Date` date DEFAULT NULL,
  `Admission_Date` date DEFAULT NULL,
  `Address` varchar(100) NOT NULL,
  `Department` varchar(15) DEFAULT NULL,
  `Class` varchar(10) DEFAULT NULL,
  `Section` varchar(3) DEFAULT NULL,
  `Roll` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinformation`
--

INSERT INTO `userinformation` (`UId`, `UName`, `Father_Name`, `Mother_Name`, `Password`, `Email`, `Contact_No`, `Gender`, `Date_Of_Birth`, `User_Type`, `Joining_Date`, `Admission_Date`, `Address`, `Department`, `Class`, `Section`, `Roll`) VALUES
(101, 'Tanzin', 'Shariful', 'Tajkeyatun', '7', 'tanzin@gmail.com', '0167', 'Male', '1997-08-08', 'Admin', '2019-01-01', NULL, 'Mohammadpur', NULL, NULL, NULL, NULL),
(102, 'Simi', 'Shariful Islam', 'Tajkeyatun', '102', 'simi@gmail.com', '0191', 'Female', '1987-10-23', 'Admin', '2015-01-01', NULL, 'Shymoli', NULL, NULL, NULL, NULL),
(103, 'Tanvir', 'sdf', 'asdf', 'AAa1', 'tanvir@gmail.com', '017', 'Male', '1996-05-07', 'Admin', '2018-01-08', NULL, 'sadasd', NULL, NULL, NULL, NULL),
(201, 'Asif', 'Saif', 'Ana', '201', 'asif@gmail.com', '0171', 'Male', '1992-11-05', 'Teacher', '2018-01-01', NULL, 'Kuril', 'Math', NULL, NULL, NULL),
(202, 'Anik', 'Arif', 'Sana', '202', 'anik@gmail.com', '0191', 'Male', '1984-11-14', 'Teacher', '2015-03-01', NULL, 'Mirpur', 'Bangla', NULL, NULL, NULL),
(203, 'Taj', 'Sam', 'Jane', '203', 'taj@gmail.com', '0171', 'Male', '1992-10-05', 'Teacher', '2014-01-05', NULL, 'Farmgate', 'Math', NULL, NULL, NULL),
(204, 'Jamal', 'Kamal', 'dana', '204', 'jamal@gmail.com', '0167', 'Male', '1993-11-05', 'Teacher', '2019-11-04', NULL, 'Agargaon', 'English', NULL, NULL, NULL),
(301, 'Rohan', 'Rakib', 'Hanna', '301', 'rohan@gmail.com', '0171', 'Male', '2010-04-03', 'Student', NULL, '2015-01-01', 'Shaymoli', NULL, '4', 'A', 1),
(302, 'Jane', 'Dave', 'Anna', '302', 'jane@gmail.com', '0131', 'Female', '2009-11-04', 'Student', NULL, '2016-02-01', 'Dhanmondi', NULL, '5', 'B', 2),
(303, 'Anny', 'Jhon', 'Daina', '303', 'anny@gmail.com', '0161', 'Female', '2008-11-05', 'Student', NULL, '2012-01-02', 'Mohammadpur', NULL, '6', 'A', 10),
(304, 'Tusk', 'Jhon', 'Mery', '304', 'tusk@gmail.com', '017', 'Male', '2010-11-05', 'Student', NULL, '2017-01-02', 'abc', NULL, '2', 'A', 4),
(1001, 'Rifat', 'F.name', 'G.Begum', '12', 'rifat@gmail.com', '91484574', 'Male', '2019-12-11', 'Student', NULL, '2019-12-31', 'awr', NULL, '4', 'A', 3),
(1002, 'Arafat', 'Abdul Motin', 'a Begum', 'Abul#12', 'arafat@gmail.com', '345677', 'Male', '2019-11-27', 'Student', NULL, '2019-12-19', 'AAAAAXXXXX', NULL, '1', 'A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `Id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Type` varchar(15) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finalmarks`
--
ALTER TABLE `finalmarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `midmarks`
--
ALTER TABLE `midmarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `userinformation`
--
ALTER TABLE `userinformation`
  ADD PRIMARY KEY (`UId`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `finalmarks`
--
ALTER TABLE `finalmarks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `midmarks`
--
ALTER TABLE `midmarks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
