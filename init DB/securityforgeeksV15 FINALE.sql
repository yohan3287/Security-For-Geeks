-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2019 at 04:35 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `securityforgeeks`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `ChatID` int(11) NOT NULL,
  `ChatText` varchar(10000) NOT NULL,
  `ChatImage` varchar(100) NOT NULL,
  `ChatDatetime` datetime DEFAULT NULL,
  `ForumID` int(11) DEFAULT NULL,
  `CustomerID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`ChatID`, `ChatText`, `ChatImage`, `ChatDatetime`, `ForumID`, `CustomerID`) VALUES
(1, 'https://techdifferences.com/difference-between-steganography-and-cryptography.html', '-', '2019-04-11 11:24:42', 1, 5),
(2, 'http://practicalcryptography.com/ciphers/caesar-cipher/', '-', '2019-05-14 14:34:23', 2, 2),
(3, 'https://trailofbits.github.io/ctf/exploits/binary1.html', '-', '2019-03-13 13:23:56', 3, 1),
(4, 'dunno\r\n', '', '2019-06-22 14:32:45', 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `CourseID` int(11) NOT NULL,
  `CourseName` varchar(100) NOT NULL,
  `CourseDifficulty` varchar(20) NOT NULL,
  `CoursePoint` varchar(5) NOT NULL,
  `CourseCategory` varchar(100) NOT NULL,
  `CourseTrainer` varchar(135) NOT NULL,
  `CourseFlag` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`CourseID`, `CourseName`, `CourseDifficulty`, `CoursePoint`, `CourseCategory`, `CourseTrainer`, `CourseFlag`) VALUES
(1, 'Basic Forensics', 'Beginner', '200', 'Forensic', 'Yohan', 'SFG{This is called Steganography - insertion method}'),
(2, 'File Forensic', 'Beginner', '200', 'Forensic', 'Yohan', 'SFG{file extensions is a lie}'),
(3, 'Crypto Forensics', 'Beginner', '200', 'Forensic', 'Yohan', 'SFG{know_more_crypto_in_forensics}'),
(4, 'Text Forensics', 'Beginner', '200', 'Forensic', 'Yohan', 'SFG{[gibberish_is_simple_to_analyzed]}'),
(5, 'Secure Web Programming', 'Intermediate', '550', 'Web', 'J.Andrew', 'SFG{[gibberish_is_simple_to_analyzed]}'),
(6, 'Intro to Cryptography', 'Beginner', '200', 'Cryptography', 'Yonathan Wieliem', 'SFG{[gibberish_is_simple_to_analyzed]}');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL,
  `CustomerEmail` varchar(135) NOT NULL,
  `CustomerUsername` varchar(135) NOT NULL,
  `CustomerPassword` varchar(30) NOT NULL,
  `CustomerFullname` varchar(135) NOT NULL,
  `CustomerMembership` varchar(100) NOT NULL,
  `CustomerAchievement` varchar(1000) NOT NULL,
  `CustomerScore` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `CustomerEmail`, `CustomerUsername`, `CustomerPassword`, `CustomerFullname`, `CustomerMembership`, `CustomerAchievement`, `CustomerScore`) VALUES
(1, 'Tartarus@protonmail.com', 'Tartarus', 'asdf123', 'Yonathan Wieliem', 'Basic to Expert', 'supreme newbie', '1500'),
(2, 'Hildegard@gmail.com', 'Hildegarde', 'hilda', 'Hildegarde', 'Basic to Intermediate', 'newcomer', '450'),
(3, 'Thanatos@protonmail.com', 'Thanatos', 'akashaa', 'Akasha', 'Basic to Expert', 'supreme newbie', '1000'),
(4, 'Akashiya@yokai.edu', 'Cute Vampire', 'vamp123', 'Akashiya Moka', 'Basic to Intermediate', 'newcomer', '650'),
(5, 'ShuzenKahlua@gmail.com', 'Shuzen', 'Kahlua123', 'Kahlua Shuzen', 'Basic to Expert', 'supreme newbie', '1250'),
(6, 'admin@admin.com', 'admin', 'admin', 'admin', 'not enrolled', 'just an admin', '9999'),
(7, 'shuzenakua@gmail.com', 'ShuzenAkhua', 'asdf', 'Akhua Shuzen', 'Basic to expertise', '', '200');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `ForumID` int(11) NOT NULL,
  `ForumTitle` varchar(1000) NOT NULL,
  `ForumDatetime` datetime DEFAULT NULL,
  `CustomerID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`ForumID`, `ForumTitle`, `ForumDatetime`, `CustomerID`) VALUES
(1, 'What is The difference between cryptography and steganography?', '2019-04-10 14:23:45', 3),
(2, 'How substitution cipher works?', '2019-05-12 20:21:12', 2),
(3, 'What is Binary Exploitation?', '2019-03-12 23:32:43', 1),
(4, 'What is Reverse Engineering ?', '2019-06-22 14:33:59', 7);

-- --------------------------------------------------------

--
-- Table structure for table `learnhistory`
--

CREATE TABLE `learnhistory` (
  `HistoryID` int(11) NOT NULL,
  `CourseStatus` varchar(100) NOT NULL,
  `CourseID` int(11) DEFAULT NULL,
  `CustomerID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `learnhistory`
--

INSERT INTO `learnhistory` (`HistoryID`, `CourseStatus`, `CourseID`, `CustomerID`) VALUES
(1, 'Active', 1, 5),
(2, 'Active', 2, 5),
(3, 'Active', 3, 5),
(4, 'Active', 4, 5),
(5, 'Active', 5, 5),
(6, 'Active', 1, 3),
(7, 'Active', 2, 3),
(8, 'Active', 3, 3),
(9, 'Active', 4, 3),
(10, 'Active', 5, 3),
(11, 'Active', 1, 1),
(12, 'Active', 2, 1),
(13, 'Active', 3, 1),
(14, 'Active', 4, 1),
(15, 'Active', 5, 1),
(16, 'Active', 1, 2),
(17, 'Active', 2, 2),
(18, 'Active', 3, 2),
(19, 'Active', 4, 2),
(20, 'Active', 1, 4),
(21, 'Active', 2, 4),
(22, 'Active', 3, 4),
(23, 'Active', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` int(11) NOT NULL,
  `PaymentDatetime` datetime DEFAULT NULL,
  `PaymentPacket` varchar(100) NOT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `CardNumber` varchar(15) NOT NULL,
  `CardExpiration` varchar(10) NOT NULL,
  `CardCVV` varchar(5) NOT NULL,
  `CardOwner` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PaymentID`, `PaymentDatetime`, `PaymentPacket`, `CustomerID`, `CardNumber`, `CardExpiration`, `CardCVV`, `CardOwner`) VALUES
(1, '2019-02-10 12:56:42', 'Basic to Intermediate', 4, '1234567890', '12/24', '123', 'Akashiya Moka'),
(2, '2019-06-22 14:20:52', 'Basic to expertise', 7, '1336699666', '12/25', '666', 'Shuzen Akhua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`ChatID`),
  ADD KEY `ForumID` (`ForumID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`CourseID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`ForumID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `learnhistory`
--
ALTER TABLE `learnhistory`
  ADD PRIMARY KEY (`HistoryID`),
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `CourseID` (`CourseID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `ChatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `CourseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `ForumID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `learnhistory`
--
ALTER TABLE `learnhistory`
  MODIFY `HistoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PaymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`ForumID`) REFERENCES `forum` (`ForumID`),
  ADD CONSTRAINT `chat_ibfk_2` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`);

--
-- Constraints for table `forum`
--
ALTER TABLE `forum`
  ADD CONSTRAINT `forum_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`);

--
-- Constraints for table `learnhistory`
--
ALTER TABLE `learnhistory`
  ADD CONSTRAINT `learnhistory_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`),
  ADD CONSTRAINT `learnhistory_ibfk_2` FOREIGN KEY (`CourseID`) REFERENCES `course` (`CourseID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
