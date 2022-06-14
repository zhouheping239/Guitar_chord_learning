-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 10:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bgldatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `singer`
--

CREATE TABLE `singer` (
  `SingerID` int(11) NOT NULL,
  `SingerName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `singer`
--

INSERT INTO `singer` (`SingerID`, `SingerName`) VALUES
(101, 'Daniel Caesar'),
(102, 'Harry Styles'),
(103, 'Lewis Capaldi'),
(104, 'Ben E. King'),
(105, 'Adam Levine');

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `SongID` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Tuning` varchar(20) NOT NULL DEFAULT 'EADGBE',
  `Capo` varchar(8) NOT NULL DEFAULT 'None',
  `GuitarKey` text NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Feature` varchar(11) NOT NULL,
  `Top5` int(11) NOT NULL,
  `SingerID` int(11) NOT NULL,
  `Lyrics` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`SongID`, `Title`, `Tuning`, `Capo`, `GuitarKey`, `Image`, `Feature`, `Top5`, `SingerID`, `Lyrics`) VALUES
(1, 'Best Part', 'EADGBE', 'None', 'D', './images/bestpart.jpg', '1', 1, 101, './Lyrics/Best_Part.jpg\r\n\r\n'),
(2, 'As It Was', 'EADGBE', '2nd fret', 'A', '', '', 1, 102, './Lyrics/As_It_Was.jpg'),
(3, 'Someone You Loved', 'EADGBE', '1st fret', 'C#', '', '', 0, 103, './Lyrics/Someone_You_Loved.jpg'),
(4, 'Stand By Me', 'EADGBE', '2nd fret', 'A', '', '', 1, 104, './Lyrics/Stand_By_Me.jpg'),
(5, 'Watermelon Sugar', 'EADGBE', 'None', 'C', './images/watermelonsugar.jpg', '1', 1, 102, './Lyrics/Watermelon_Sugar.jpg'),
(6, 'Lost Stars', 'EADGBE', 'None', 'F', './images/loststars.jpg', '1', 1, 105, './Lyrics/Lost_Stars.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `singer`
--
ALTER TABLE `singer`
  ADD PRIMARY KEY (`SingerID`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`SongID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `singer`
--
ALTER TABLE `singer`
  MODIFY `SingerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `SongID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
