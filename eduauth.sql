-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2024 at 08:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eduauth`
--

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `file_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `file` varchar(500) NOT NULL,
  `StudentClass` varchar(200) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`file_id`, `name`, `file`, `StudentClass`, `Message`) VALUES
(1, 'Labels', 'files/Labels.pdf', '2', ''),
(2, 'English', 'files/Esorun Catalog 2024 S (1).pdf', '4', 'Do it by tomorrow');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Mayuri K', 'mayurik', 9090909090, 'mayuri.infospace@gmail.com', 'cd92a26534dba48cd785cdcc0b3e6bd1', '2023-02-12 04:36:52');

-- --------------------------------------------------------

--
-- Table structure for table `tblclass`
--

CREATE TABLE `tblclass` (
  `ID` int(5) NOT NULL,
  `ClassName` varchar(50) DEFAULT NULL,
  `Section` varchar(20) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblclass`
--

INSERT INTO `tblclass` (`ID`, `ClassName`, `Section`, `CreationDate`) VALUES
(1, 'First Standard', 'A', '2023-02-12 09:47:47'),
(2, 'Second Standard', 'A', '2023-02-12 09:48:29'),
(3, 'Third Standard', 'A', '2023-02-12 09:49:06'),
(4, 'Class 8', 'A', '2024-11-24 06:34:23');

-- --------------------------------------------------------

--
-- Table structure for table `tblnotice`
--

CREATE TABLE `tblnotice` (
  `ID` int(5) NOT NULL,
  `NoticeTitle` mediumtext DEFAULT NULL,
  `ClassId` int(10) DEFAULT NULL,
  `NoticeMsg` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblnotice`
--

INSERT INTO `tblnotice` (`ID`, `NoticeTitle`, `ClassId`, `NoticeMsg`, `CreationDate`) VALUES
(1, 'Notice regarding Christmas Holiday', 1, '<p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Roboto; font-size: 15px; line-height: 26px; color: rgb(68, 68, 68);\">Dear Parent<br style=\"box-sizing: inherit;\">The classes will remain off on 25.12.20(Friday) on account of Christmas and on 26.12.20(Saturday) on account of fourth Saturday.<br style=\"box-sizing: inherit;\">However, the office will remain open on 26.12.20(Saturday) between 10:00am t0 2:00pm.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Roboto; font-size: 15px; line-height: 26px; color: rgb(68, 68, 68);\">Note: All fee related /other issues can be addressed between the given timings.</p>', '2023-02-12 10:04:05');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblpublicnotice`
--

CREATE TABLE `tblpublicnotice` (
  `ID` int(5) NOT NULL,
  `NoticeTitle` varchar(200) DEFAULT NULL,
  `NoticeMessage` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpublicnotice`
--

INSERT INTO `tblpublicnotice` (`ID`, `NoticeTitle`, `NoticeMessage`, `CreationDate`) VALUES
(1, 'water supply unviability ', '<b style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif;\">municipal corporation has temporarily ceased the water supply due to some repair works.</b><br>', '2023-02-12 10:27:07');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `ID` int(10) NOT NULL,
  `StudentName` varchar(200) DEFAULT NULL,
  `StudentEmail` varchar(200) DEFAULT NULL,
  `StudentClass` varchar(100) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `StuID` varchar(200) DEFAULT NULL,
  `FatherName` mediumtext DEFAULT NULL,
  `MotherName` mediumtext DEFAULT NULL,
  `ContactNumber` bigint(10) DEFAULT NULL,
  `AltenateNumber` bigint(10) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `UserName` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `Image` varchar(200) DEFAULT NULL,
  `DateofAdmission` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`ID`, `StudentName`, `StudentEmail`, `StudentClass`, `Gender`, `DOB`, `StuID`, `FatherName`, `MotherName`, `ContactNumber`, `AltenateNumber`, `Address`, `UserName`, `Password`, `Image`, `DateofAdmission`) VALUES
(1, 'Raghav Jain', 'raghav@gmail.com', '1', 'Male', '2023-02-12', 'FSA-1001', 'Shantilal', 'Jiya', 9090909090, 8080808080, 'Cinemax Theater, nashik road&nbsp;', 'raghav@gmail.com', 'raghav', '10c4a583ccb72d42c58230673f5923571676196769.jpg', '2023-02-12 10:12:49'),
(2, 'Abbas', 'abbas@gmail.com', '8', 'Male', '2014-10-01', 'rollno1', 'Zafar', 'Kaneez', 3001231234, NULL, 'Islamabad', 'abbas@gmail.com', 'abbas', NULL, '2024-10-24 01:44:10'),
(3, 'Neelam', 'neelam@gmail.com', '3', 'Female', '2002-09-30', 'rollno2', 'Zafar', 'Kaneez', 300123123, 300000123, '<br>', 'neelam@gmail.com', '4a7ff8af51c6b95a9900937643db1f95', '999cbdcf44e88123a52bf8bb64a19d331729734555.png', '2024-10-24 01:49:15'),
(4, 'Abbas', 'abbas@gmail.com', '4', 'Male', '2011-09-15', '1', 'Zafar Hussain', 'Kaneez Fatima', 300123123, 300321321, '<br>', 'Abbas', 'b612ddffd7ba6671ded55e3c554a7234', '8d9340646d3689aaa237dedbeefab3c31732430705.png', '2024-11-24 06:45:05');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubject`
--

CREATE TABLE `tblsubject` (
  `ID` int(10) NOT NULL,
  `SubjectName` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `StudentClass` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblsubject`
--

INSERT INTO `tblsubject` (`ID`, `SubjectName`, `StudentClass`) VALUES
(4, 'new sub', '1'),
(5, 'test new 2', '1'),
(6, 'English', '4'),
(7, 'English', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tblteacher`
--

CREATE TABLE `tblteacher` (
  `ID` int(10) NOT NULL,
  `TeacherName` varchar(200) DEFAULT NULL,
  `TeacherEmail` varchar(200) DEFAULT NULL,
  `TeacherClass` varchar(100) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `TchID` varchar(200) DEFAULT NULL,
  `FatherName` mediumtext DEFAULT NULL,
  `MotherName` mediumtext DEFAULT NULL,
  `ContactNumber` bigint(10) DEFAULT NULL,
  `AltenateNumber` bigint(10) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `UserName` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `Image` varchar(200) DEFAULT NULL,
  `DateofAdmission` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblteacher`
--

INSERT INTO `tblteacher` (`ID`, `TeacherName`, `TeacherEmail`, `TeacherClass`, `Gender`, `DOB`, `TchID`, `FatherName`, `MotherName`, `ContactNumber`, `AltenateNumber`, `Address`, `UserName`, `Password`, `Image`, `DateofAdmission`) VALUES
(1, 'Zahra', 'zahra@gmail.com', '1', 'Female', '1990-10-10', '1', 'Murad', 'Mureed', 300122313, 300133441, '<br>', 'zahra', '01e50c681c0b05ff22686b3e0f7290d3', '8f6e310ae9cfa038d14ed595189c04341732448443.png', '2024-11-24 11:40:43'),
(2, 'Ayra', 'ayr@2gmail.com', '4', 'Female', '2024-11-11', '5', 'Zafar', 'Kaneez', 3001234152, 300012312, 'Isb', 'ayra', '9b6e97d2c52910f737056e5fbaa5785a', '6765ca011cb3b6fe3dd061900cd8d5a21733156573.png', '2024-12-02 16:22:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblclass`
--
ALTER TABLE `tblclass`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblnotice`
--
ALTER TABLE `tblnotice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpublicnotice`
--
ALTER TABLE `tblpublicnotice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblsubject`
--
ALTER TABLE `tblsubject`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblteacher`
--
ALTER TABLE `tblteacher`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblclass`
--
ALTER TABLE `tblclass`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblnotice`
--
ALTER TABLE `tblnotice`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblpublicnotice`
--
ALTER TABLE `tblpublicnotice`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblsubject`
--
ALTER TABLE `tblsubject`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblteacher`
--
ALTER TABLE `tblteacher`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
