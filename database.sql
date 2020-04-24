-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2019 at 09:21 AM
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
-- Database: `se_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `Account_Id` int(11) NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `AccountStatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Account_Id`, `Email`, `Password`, `ID`, `AccountStatus`) VALUES
(1, 'Kanittha@ku.th', '472b07b9fcf2c2451e8781e944bf5f77cd8457c8', '5930300011', 1),
(2, 'Kun@ku.th', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', '5930300054', 1),
(3, 'Chakkapong@ku.th', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', '5930300119', 1),
(4, 'Jetsada@ku.th', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', '5930300178', 1),
(5, 'Natthawut@ku.th', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', '5930300267', 1),
(6, 'Tiva@ku.th', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', '5930300283', 1),
(7, 'Narawit@ku.th', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', '5930300372', 1),
(8, 'Pattawe@ku.th', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', '5930300429', 1),
(9, 'Poramat@ku.th', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', '5930300437', 1),
(10, 'Pichayapha@ku.th', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', '5930300534', 1),
(11, 'Pornshuda@ku.th', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', '5930300542', 1),
(12, 'Pornpat@ku.th', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', '5930300551', 1),
(13, 'Poowakorn@ku.th', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', '5930300631', 1),
(14, 'Rutthaphol@ku.th', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', '5930300691', 1),
(15, 'Luksika@ku.th', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', '5930300712', 1),
(16, 'Wannaporn@ku.th', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', '5930300721', 1),
(17, 'Sawanya@ku.th', '0716d9708d321ffb6a00818614779e779925365c', '5930300836', 1),
(18, 'Saharat@ku.th', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', '5930300844', 1),
(19, 'Suriya@ku.th', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', '5930300950', 1),
(20, 'Intouch@ku.th', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', '5930300992', 1),
(21, 'Prawit@ku.th', '472b07b9fcf2c2451e8781e944bf5f77cd8457c8', 'A01', 2),
(22, 'Anan@ku.th', '12c6fc06c99a462375eeb3f43dfd832b08ca9e17', 'A02', 2),
(23, 'Kulwadee@ku.th', 'd435a6cdd786300dff204ee7c2ef942d3e9034e2', 'A03', 2),
(24, 'Penpun@ku.th', '4d134bc072212ace2df385dae143139da74ec0ef', 'A04', 2),
(25, 'Nanta@ku.th', 'f6e1126cedebf23e1463aee73f9df08783640400', 'A05', 2),
(26, 'Kanjana@ku.th', '887309d048beef83ad3eabf2a79a64a389ab1c9f', 'A06', 2),
(27, 'Jirawat@ku.th', 'bc33ea4e26e5e1af1408321416956113a4658763', 'A07', 2),
(28, 'Adisak@ku.th', '0a57cb53ba59c46fc4b692527a38a87c78d84028', 'A08', 2),
(29, 'Natthapon@ku.th', '7719a1c782a1ba91c031a682a0a2f8658209adbf', 'A09', 2),
(30, 'Korawit@ku.th', '22d200f8670dbdb3e253a90eee5098477c95c23d', 'A10', 2),
(31, 'Tanic@ku.th', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `creategroup`
--

CREATE TABLE `creategroup` (
  `Group_Id` int(11) NOT NULL,
  `Group_Topic` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Student_Id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Teacher_Id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Teacher_Score` int(11) NOT NULL,
  `Committee1_Id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Committee1_Score` int(11) NOT NULL,
  `Committee2_Id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Committee2_Score` int(11) NOT NULL,
  `Group_Status` int(11) NOT NULL,
  `Group_Year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `creategroup`
--

INSERT INTO `creategroup` (`Group_Id`, `Group_Topic`, `Student_Id`, `Teacher_Id`, `Teacher_Score`, `Committee1_Id`, `Committee1_Score`, `Committee2_Id`, `Committee2_Score`, `Group_Status`, `Group_Year`) VALUES
(0, '0', '0', '0', 0, '', 0, '', 0, 0, 0),
(1, 'Drone', '5930300011', 'A01', 37, '', 0, '', 0, 1, 2562),
(1, 'Drone', '5930300054', 'A01', 0, '', 0, '', 0, 1, 2562),
(2, 'Drone 2 by prawit', '5930300119', 'A01', 0, '', 0, '', 0, 1, 2562),
(2, 'Drone 2 by prawit', '5930300178', 'A01', 0, '', 0, '', 0, 1, 2562),
(2, 'Drone 2 by prawit', '5930300267', 'A01', 0, '', 0, '', 0, 1, 2562),
(3, 'AI 1 by anan', '5930300283', 'A02', 0, '', 0, '', 0, 1, 2562),
(3, 'AI 1 by anan', '5930300372', 'A02', 0, '', 0, '', 0, 1, 2562),
(3, 'AI 1 by anan', '5930300429', 'A02', 0, '', 0, '', 0, 1, 2562),
(4, 'AI 2 by anan', '5930300437', 'A02', 0, '', 0, '', 0, 1, 2562),
(5, 'IR 1 by kul', '5930300534', 'A03', 0, '', 0, '', 0, 1, 2562),
(8, 'Image 1 by noi', '5930300542', 'A04', 37, 'A10', 18, 'A01', 18, 1, 2562),
(8, 'Image 1 by noi', '5930300551', 'A04', 0, 'A10', 0, 'A01', 0, 1, 2562),
(8, 'Image 1 by noi', '5930300631', 'A04', 0, 'A10', 0, 'A01', 0, 1, 2562),
(9, 'Image 2 by noi', '5930300691', 'A04', 0, 'A08', 0, 'A05', 0, 1, 2562),
(9, 'Image 2 by noi', '5930300712', 'A04', 0, 'A08', 0, 'A05', 0, 1, 2562),
(9, 'Image 2 by noi', '5930300721', 'A04', 0, 'A08', 0, 'A05', 0, 1, 2562),
(10, 'Image 3 by noi', '5930300836', 'A04', 0, 'A01', 0, 'A02', 0, 1, 2562),
(10, 'Image 3 by noi', '5930300844', 'A04', 0, 'A01', 0, 'A02', 0, 1, 2562),
(7, 'IR 3 by kul', '5930300950', 'A03', 0, '', 0, '', 0, 1, 2562),
(6, 'IR 2 by kul', '5930300992', 'A03', 0, '', 0, '', 0, 1, 2562);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `Evaluation_Id` int(11) NOT NULL,
  `Title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`Evaluation_Id`, `Title`, `Score`) VALUES
(9, 'นำเสนอ', 10),
(10, 'ความรู้', 50),
(11, 'ความสมบูรณ์ชิ้นงาน', 40);

-- --------------------------------------------------------

--
-- Table structure for table `gradetable`
--

CREATE TABLE `gradetable` (
  `No` int(11) NOT NULL,
  `student_id` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `subject_A` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `value_A` float NOT NULL,
  `credit_A` int(11) NOT NULL,
  `subject_B` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `value_B` float NOT NULL,
  `credit_B` int(11) NOT NULL,
  `subject_C` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `value_C` float NOT NULL,
  `credit_C` int(11) NOT NULL,
  `subject_D` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `value_D` float NOT NULL,
  `credit_D` int(11) NOT NULL,
  `sum_subject` float NOT NULL,
  `sum_credit` int(11) NOT NULL,
  `grade` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gradetable`
--

INSERT INTO `gradetable` (`No`, `student_id`, `subject_A`, `value_A`, `credit_A`, `subject_B`, `value_B`, `credit_B`, `subject_C`, `value_C`, `credit_C`, `subject_D`, `value_D`, `credit_D`, `sum_subject`, `sum_credit`, `grade`) VALUES
(1, '5930300011', 'A', 12, 3, 'A', 9, 3, 'B+', 10.5, 3, 'C', 6, 3, 25.5, 12, 2.13),
(2, '5930300054', 'W', 0, 3, 'B', 0, 3, 'A', 12, 3, 'C+', 7.5, 3, 28.5, 12, 2.38),
(3, '5930300119', 'B', 9, 3, 'F', 0, 3, 'D', 3, 3, 'A', 12, 3, 25.5, 12, 2.13),
(4, '5930300178', 'B+', 10.5, 3, 'W', 12, 3, 'C', 6, 3, 'D', 3, 3, 28.5, 12, 2.38),
(5, '5930300267', 'C+', 7.5, 3, 'A', 12, 3, 'B+', 10.5, 3, 'D+', 4.5, 3, 33, 12, 2.75),
(6, '5930300283', 'C', 6, 3, 'A', 10.5, 3, 'B', 9, 3, 'B', 9, 3, 31.5, 12, 2.63),
(7, '5930300372', 'D', 3, 3, 'B+', 3, 3, 'B', 9, 3, 'B', 9, 3, 25.5, 12, 2.13),
(8, '5930300429', 'D+', 4.5, 3, 'D', 4.5, 3, 'B', 9, 3, 'B', 9, 3, 28.5, 12, 2.38),
(9, '5930300437', 'C', 6, 3, 'D+', 7.5, 3, 'A', 12, 3, 'C', 6, 3, 37.5, 12, 3.13),
(10, '5930300534', 'A', 12, 3, 'C+', 7.5, 3, 'D+', 4.5, 3, 'A', 12, 3, 24, 12, 2),
(11, '5930300542', 'w', 0, 3, 'C+', 6, 3, 'C+', 7.5, 3, 'A', 12, 3, 37.5, 12, 3.13),
(12, '5930300551', 'A', 12, 3, 'C', 6, 3, 'C', 6, 3, 'A', 12, 3, 36, 12, 3),
(13, '5930300631', 'A', 12, 3, 'C', 10.5, 3, 'A', 12, 3, 'B', 9, 3, 42, 12, 3.5),
(14, '5930300691', 'B+', 10.5, 3, 'B+', 9, 3, 'F', 0, 3, 'C', 6, 3, 24, 12, 2),
(15, '5930300712', 'B', 9, 3, 'B', 12, 3, 'A', 12, 3, 'D', 3, 3, 33, 12, 2.75),
(16, '5930300721', 'C', 6, 3, 'A', 3, 3, 'A', 12, 3, 'D', 3, 3, 25.5, 12, 2.13),
(17, '5930300836', 'C+', 7.5, 3, 'D', 12, 3, 'B', 9, 3, 'D+', 4.5, 3, 30, 12, 2.5),
(18, '5930300844', 'D+', 4.5, 3, 'A', 12, 3, 'C', 6, 3, 'A', 12, 3, 30, 12, 2.5),
(19, '5930300950', 'W', 0, 3, 'A', 0, 3, 'B', 9, 3, 'A', 12, 3, 33, 12, 2.75),
(20, '5930300992', 'A', 12, 3, 'W', 0, 3, 'B', 9, 3, 'A', 12, 3, 33, 12, 2.75);

-- --------------------------------------------------------

--
-- Table structure for table `history_choose`
--

CREATE TABLE `history_choose` (
  `no` int(11) NOT NULL,
  `s_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `before_c_id` int(11) NOT NULL,
  `after_c_id` int(11) NOT NULL,
  `reason` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `history_choose`
--

INSERT INTO `history_choose` (`no`, `s_id`, `before_c_id`, `after_c_id`, `reason`, `date`) VALUES
(2, '5930300691', 7, 11, '', '2019-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Priority` int(11) NOT NULL,
  `User_Id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Course` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Priority`, `User_Id`, `Course`) VALUES
(1, '5930300011', 7),
(1, '5930300691', 7),
(2, '5930300011', 8),
(2, '5930300691', 11),
(3, '5930300011', 11),
(3, '5930300691', 10),
(4, '5930300011', 10),
(4, '5930300691', 8);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `No` int(11) NOT NULL,
  `Student_Id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Tname_Th` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Fname_Th` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Lname_Th` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Tname_En` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Fname_En` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Lname_En` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Faculty` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `Branch` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `Year` int(11) NOT NULL,
  `Academic_Year` int(11) NOT NULL,
  `Student_Status` int(11) NOT NULL,
  `Status_Year` int(11) NOT NULL,
  `Student_Subject` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`No`, `Student_Id`, `Tname_Th`, `Fname_Th`, `Lname_Th`, `Tname_En`, `Fname_En`, `Lname_En`, `Faculty`, `Branch`, `Year`, `Academic_Year`, `Student_Status`, `Status_Year`, `Student_Subject`) VALUES
(22, '5930300011', 'นางสาว', 'กนิษฐา', 'พุ่มผล', 'Miss', 'Kaniitha', 'PUMOHOL', 'วิศวกรรมศาสตร์ศรีราชา', 'วิศวกรรมคอมพิวเตอร์และสารสนเทศศาสตร์ (T12)', 2, 2562, 1, 1, 7),
(23, '5930300054', 'นาย', 'กัญจน์', 'สุวรรณประทีป', 'Mr.', 'Kun  ', 'SUWANPRAEEEP', 'วิศวกรรมศาสตร์ศรีราชา', 'วิศวกรรมคอมพิวเตอร์และสารสนเทศศาสตร์ (T12)', 2, 2562, 1, 1, 0),
(24, '5930300119', 'นาย', 'จักรพงศ์', 'รัตนสุข', 'Mr.', 'Chakkapong', 'RTTTANASUK', 'วิศวกรรมศาสตร์ศรีราชา', 'วิศวกรรมคอมพิวเตอร์และสารสนเทศศาสตร์ (T12)', 2, 2562, 1, 1, 0),
(25, '5930300178', 'นาย', 'เจษฎา ', 'ประมวลทรัพย์', 'Mr.', 'Jetsada', 'PRAMLALSAP', 'วิศวกรรมศาสตร์ศรีราชา', 'วิศวกรรมคอมพิวเตอร์และสารสนเทศศาสตร์ (T12)', 2, 2562, 1, 1, 0),
(26, '5930300267', 'นาย', 'ณัฐวุฒิ ', 'แสงเงิน', 'Mr.', 'Natthawut', 'SAGNG-NGOEN', 'วิศวกรรมศาสตร์ศรีราชา', 'วิศวกรรมคอมพิวเตอร์และสารสนเทศศาสตร์ (T12)', 2, 2562, 1, 1, 0),
(27, '5930300283', 'นาย', 'ทิวา ', 'วงศ์รัตน์กตัญญู', 'Mr.', 'Tiva', 'WONGRATKATANYOO', 'วิศวกรรมศาสตร์ศรีราชา', 'วิศวกรรมคอมพิวเตอร์และสารสนเทศศาสตร์ (T12)', 2, 2562, 1, 1, 0),
(28, '5930300372', 'นาย', 'นราวิชญ์ ', 'ธนะไพศาลกีรติ', 'Mr.', 'Narawit', 'TANASISANKIRATI', 'วิศวกรรมศาสตร์ศรีราชา', 'วิศวกรรมคอมพิวเตอร์และสารสนเทศศาสตร์ (T12)', 2, 2562, 1, 1, 0),
(29, '5930300429', 'นาย', 'ปฐวี', 'ชีวศุภกร', 'Mr.', 'Patttae', 'CHEWUSUPAKRON', 'วิศวกรรมศาสตร์ศรีราชา', 'วิศวกรรมคอมพิวเตอร์และสารสนเทศศาสตร์ (T12)', 2, 2562, 1, 1, 0),
(30, '5930300437', 'นาย', 'ปรมัตถ์', 'ภูมมะ', 'Mr.', 'Poraamt', 'POOMMA', 'วิศวกรรมศาสตร์ศรีราชา', 'วิศวกรรมคอมพิวเตอร์และสารสนเทศศาสตร์ (T12)', 2, 2562, 1, 1, 0),
(31, '5930300534', 'นางสาว', 'พิชญาภา ', 'สุดเสน่หา', 'Miss', 'Pichayapha', 'SSDSANAEHA', 'วิศวกรรมศาสตร์ศรีราชา', 'วิศวกรรมคอมพิวเตอร์และสารสนเทศศาสตร์ (T12)', 2, 2562, 1, 1, 0),
(32, '5930300542', 'นางสาว', 'ภรณ์ชุดา', 'ทิสยากร', 'Miss', 'Pornshuda', 'TIYAYAKORN', 'วิศวกรรมศาสตร์ศรีราชา', 'วิศวกรรมคอมพิวเตอร์และสารสนเทศศาสตร์ (T12)', 2, 2562, 1, 1, 0),
(33, '5930300551', 'นางสาว', 'ภรณ์ภัทร ', 'ธรรมครองอาตม์', 'Miss', 'Pornnpt', 'THAMORONGART', 'วิศวกรรมศาสตร์ศรีราชา', 'วิศวกรรมคอมพิวเตอร์และสารสนเทศศาสตร์ (T12)', 2, 2562, 1, 1, 0),
(34, '5930300631', 'นาย', 'ภูวกร', 'อ่อนผิว', 'Mr.', 'Poowakorn', 'ONEIEW', 'วิศวกรรมศาสตร์ศรีราชา', 'วิศวกรรมคอมพิวเตอร์และสารสนเทศศาสตร์ (T12)', 2, 2562, 1, 1, 0),
(35, '5930300691', 'นาย', 'รัฐพล', 'สัมพันธ์สุวรรณ', 'Mr.', 'Rutthaphol', 'SPMPANSUWAN', 'วิศวกรรมศาสตร์ศรีราชา', 'วิศวกรรมคอมพิวเตอร์และสารสนเทศศาสตร์ (T12)', 2, 2562, 1, 1, 7),
(36, '5930300712', 'นางสาว', 'ลักษิกา', 'แสงเวช', 'Miss', 'Lukssia', 'SANGTATE', 'วิศวกรรมศาสตร์ศรีราชา', 'วิศวกรรมคอมพิวเตอร์และสารสนเทศศาสตร์ (T12)', 2, 2562, 1, 1, 0),
(37, '5930300721', 'นางสาว', 'วรรณพร ', 'เบ็ญจพร', 'Miss', 'Wannaporn', 'BEAJAPORN', 'วิศวกรรมศาสตร์ศรีราชา', 'วิศวกรรมคอมพิวเตอร์และสารสนเทศศาสตร์ (T12)', 2, 2562, 1, 1, 0),
(38, '5930300836', 'นางสาว', 'สวรรยา ', 'แสงบัวเผื่อน', 'Miss', 'Sawanya', 'SAENGBUAPHUEN', 'วิศวกรรมศาสตร์ศรีราชา', 'วิศวกรรมคอมพิวเตอร์และสารสนเทศศาสตร์ (T12)', 2, 2562, 1, 1, 0),
(39, '5930300844', 'นาย', 'สหรัฐ', 'ลิมป์ปิยพันธ์', 'Mr.', 'Saharat', 'LIMPAYAPHAN', 'วิศวกรรมศาสตร์ศรีราชา', 'วิศวกรรมคอมพิวเตอร์และสารสนเทศศาสตร์ (T12)', 2, 2562, 1, 1, 0),
(40, '5930300950', 'นาย', 'สุริยะ', 'ดีงาม', 'Mr.', 'Suriya', 'DEENGAM', 'วิศวกรรมศาสตร์ศรีราชา', 'วิศวกรรมคอมพิวเตอร์และสารสนเทศศาสตร์ (T12)', 2, 2562, 1, 1, 0),
(41, '5930300992', 'นาย', 'อินทัช ', 'ทวีปัญญาภรณ์', 'Mr.', 'Intouch', 'TAWEAPANYAPORN', 'วิศวกรรมศาสตร์ศรีราชา', 'วิศวกรรมคอมพิวเตอร์และสารสนเทศศาสตร์ (T12)', 2, 2562, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `Subject_Id` int(11) NOT NULL,
  `Subject_Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Subject_Num` int(11) NOT NULL,
  `Student_Num` int(11) NOT NULL,
  `Subject_Status` int(11) NOT NULL,
  `Subject_Year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`Subject_Id`, `Subject_Name`, `Subject_Num`, `Student_Num`, `Subject_Status`, `Subject_Year`) VALUES
(7, 'Data Sci', 1, 0, 1, 0),
(8, 'Image', 2, 0, 1, 0),
(9, 'HW', 50, 0, 0, 0),
(10, 'Embed', 40, 1, 1, 0),
(11, 'Yellow Line', 0, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Teacher_Id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Teacher_Name` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `Teacher_Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Teacher_Id`, `Teacher_Name`, `Teacher_Status`) VALUES
('A01', 'ผศ.ดร.ประวิทย์ ชุมชู', 0),
('A02', 'ผศ.ดร.อนันต์ บรรหารสกุล', 0),
('A03', 'ผศ.ดร.กุลวดี สมบูรณ์วิวัฒน์', 0),
('A04', 'ผศ.เพ็ญพรรณ ใช้ฮวดเจริญ', 0),
('A05', 'ดร.นันทา จันทร์พิทักษ์', 0),
('A06', 'อ.กาญจนา เอี่ยมสอาด', 0),
('A07', 'อ.จิรวัฒน์ จิตประสูตรวิทย์', 0),
('A08', 'ดร.อดิศักดิ์ สุภีสุน', 0),
('A09', 'ดร.ณัฐพล พันนุรัตน์', 0),
('A10', 'ดร.กรวิทย์ ออกผล', 0),
('A11', 'อ.ธรรมนุวัฒน์ วาลีประโคน', 0),
('A12', 'อ.ประสิทธิชัย ประ', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Account_Id`,`ID`);

--
-- Indexes for table `creategroup`
--
ALTER TABLE `creategroup`
  ADD PRIMARY KEY (`Student_Id`,`Group_Topic`) USING BTREE;

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`Evaluation_Id`);

--
-- Indexes for table `gradetable`
--
ALTER TABLE `gradetable`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `history_choose`
--
ALTER TABLE `history_choose`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Priority`,`User_Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`No`,`Student_Id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`Subject_Id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Teacher_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `Account_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `Evaluation_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `history_choose`
--
ALTER TABLE `history_choose`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `Subject_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
