-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2023 at 12:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
--
-- Database: `proforma`
--
-- --------------------------------------------------------
--
-- Table structure for table `pofoma1`
--

CREATE TABLE `pofoma1` (
  `pofoma1ID` int(6) UNSIGNED NOT NULL,
  `Dedutrustname` enum('A.P.J. Abdul Kalam Centrey','Adhya Educational Society','Agaram Foundation','Agastya International Foundation','Ahmedabad Education Society','Akanksha Foundation','Akshaya Patra Foundation','Al-Ameen Educational Society','All Bengal Teachers Association','All India Society for Electronics and Computer Technology','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50','51','52','53','54','55','56','57','58','59','60','61','62','63','64','65','66','67','68','69','70','71','72','73','74','75','76','77','78','79','80','81','82','83','84','85','86','87','88','89','90','91','92','93','94','95','96','97','98','99','100','101','102','103','104','105','106','107','108','109','110','111','112','113','114','115','116','117','118','119','120','121','122','123','124','125','126','127','128','129','130','131','132','133','134','135','136','137','138','139','140','141','142','143','144','145','146','147','148','149','150','151','152','153','154','155','156','157','158') NOT NULL,
  `educationalname` text NOT NULL,
  `educationaladdress` text NOT NULL,
  `location` int(50) NOT NULL,
  `educationalcontact` bigint(20) DEFAULT NULL,
  `educationalmobile` bigint(20) DEFAULT NULL,
  `educationalemail` varchar(255) NOT NULL,
  `presidentname` text NOT NULL,
  `presidentcontact` bigint(20) DEFAULT NULL,
  `Presidentmobile` bigint(20) NOT NULL,
  `presidentemail` varchar(255) NOT NULL,
  `secretaryname` text NOT NULL,
  `secretarycontact` bigint(20) NOT NULL,
  `secretarymobile` bigint(20) NOT NULL,
  `secretaryemail` varchar(255) NOT NULL,
  `coordinatorname` text NOT NULL,
  `coordinatorcontact` bigint(20) NOT NULL,
  `coordinatormobile` bigint(20) NOT NULL,
  `coordinatoremail` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
--
-- Dumping data for table `pofoma1`
--
INSERT INTO `pofoma1` (`pofoma1ID`, `Dedutrustname`, `educationalname`, `educationaladdress`, `location`, `educationalcontact`, `educationalmobile`, `educationalemail`, `presidentname`, `presidentcontact`, `Presidentmobile`, `presidentemail`, `secretaryname`, `secretarycontact`, `secretarymobile`, `secretaryemail`, `coordinatorname`, `coordinatorcontact`, `coordinatormobile`, `coordinatoremail`, `date`) VALUES
(2, '6', '', 'fgjgf', 19, 9875465454, 8798798798, 'sjkdbg@gmail.com', 'ajjvfhjkf', 8795645465, 8798798795, 'skjdbv@gmail.com', 'skdhgbjbgkasjdh', 8795454654, 8787987954, 'asjvg@gmail.com', 'ksdjbvgksdj', 8797546546, 8798798795, 'skdjbgsdjb@gmail.com', '2023-06-06 15:42:00');
-- --------------------------------------------------------
--
-- Table structure for table `pofoma2`
--
CREATE TABLE `pofoma2` (
  `pofoma2ID` int(6) UNSIGNED NOT NULL,
  `schooljr` text NOT NULL,
  `school` enum('primary','high','jr') NOT NULL,
  `Instructionname` text NOT NULL,
  `primaryname` text NOT NULL,
  `adid` enum('aided','unaided') NOT NULL,
  `strength` blob NOT NULL,
  `teachingstaff` blob NOT NULL,
  `secondaryschool` text NOT NULL,
  `adid2` enum('aided','unaided') NOT NULL,
  `secstrength` blob NOT NULL,
  `secteachingstaffsec` blob NOT NULL,
  `jrschool` text NOT NULL,
  `adid3` enum('aided','unaided') NOT NULL,
  `jrstrength` blob NOT NULL,
  `jrteachingstaff` blob NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
--
-- Dumping data for table `pofoma2`
--
INSERT INTO `pofoma2` (`pofoma2ID`, `schooljr`, `school`, `Instructionname`, `primaryname`, `adid`, `strength`, `teachingstaff`, `secondaryschool`, `adid2`, `secstrength`, `secteachingstaffsec`, `jrschool`, `adid3`, `jrstrength`, `jrteachingstaff`, `date`) VALUES
(9, '', '', '', '', '', 0x20, '', ' ', '', 0x20, 0x20, '', '', 0x20, 0x20, '0000-00-00 00:00:00');
-- --------------------------------------------------------
--
-- Table structure for table `pofoma3`
--
CREATE TABLE `pofoma3` (
  `pofoma3ID` int(50) UNSIGNED NOT NULL,
  `computerlab` varchar(255) NOT NULL,
  `computerdetailsname` varchar(255) NOT NULL,
  `intenet` varchar(255) NOT NULL,
  `connectivity` varchar(255) NOT NULL,
  `electricity` varchar(255) NOT NULL,
  `upsbattery` varchar(255) NOT NULL,
  `upscapacity` varchar(255) NOT NULL,
  `compteachtable` varchar(255) NOT NULL,
  `copyoftimetable` blob NOT NULL,
  `yesno` enum('yes','no') NOT NULL,
  `compcourse` enum('mscit','ccc') NOT NULL,
  `exampass` enum('dca','bca','bsc') NOT NULL,
  `equivalentto` varchar(255) NOT NULL,
  `teacherisnotavailable` varchar(255) NOT NULL,
  `hallforcomputerlab` varchar(255) NOT NULL,
  `sizeofhall` varchar(255) NOT NULL,
  `hallsecured` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
--
-- Indexes for dumped tables
--
--
-- Indexes for table `pofoma1`
--
ALTER TABLE `pofoma1`
  ADD PRIMARY KEY (`pofoma1ID`),
  ADD KEY `pofoma1ID` (`pofoma1ID`);
--
-- Indexes for table `pofoma2`
--
ALTER TABLE `pofoma2`
  ADD PRIMARY KEY (`pofoma2ID`);
--
-- Indexes for table `pofoma3`
--
ALTER TABLE `pofoma3`
  ADD PRIMARY KEY (`pofoma3ID`);
--
-- AUTO_INCREMENT for dumped tables
--
-- AUTO_INCREMENT for table `pofoma1`
--
ALTER TABLE `pofoma1`
  MODIFY `pofoma1ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pofoma2`
--
ALTER TABLE `pofoma2`
  MODIFY `pofoma2ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pofoma3`
--
ALTER TABLE `pofoma3`
  MODIFY `pofoma3ID` int(50) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;