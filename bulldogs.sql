-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2018 at 07:14 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bulldogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `ID` int(11) NOT NULL,
  `blogDate` date NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `blogTitle` varchar(255) DEFAULT NULL,
  `blogText` text NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`ID`, `blogDate`, `author`, `blogTitle`, `blogText`, `comments`) VALUES
(3, '2018-05-15', 'Jack Mapston', 'Bath Spa Bulldogs,<br> 2018/19 - What\'s new?', '     The Bath Spa Bulldogs American Football Team is gearing up to go into a new season. With Pre-Season just around the corner, weâ€™re looking forward to meeting the next year of Rookies, and also looking forward to see what the previous Rookies can do in their second year after a very promising display in 2017/18. <br><br>\r\n\r\n     New faces on the squad will not be the only change, however. <br><br>\r\n\r\n     This year, the Dogs are moving to a new facility, located just outside of Bath Spa University. This is an incredibly promising move, granting us the freedom to host training sessions as well as all future home games on a pitch used exclusively by us. Itâ€™s a clear statement of intent and ambition, and can only serve to help us further develop ourselves as a team. <br><br>\r\n\r\n     On top of this, the Dogs are moving into a new phase in regards to coaching. We sadly say goodbye to our previous Head Coach, Richard Lindsay. We thank him for everything he has done in terms of helping us to try and move forward as a club and wish him the best in any future American Football related endeavours. The new man in the role of Head Coach is Craig Griffiths, who brings with him a wealth of knowledge and experience. We look forward to seeing where we can go playing under him, and are very encouraged from what we see so far that this coming season will be a great one to be a part of. <br><br>\r\n\r\n     Alongside the new recruits, new facility and new coaching comes a new image. The Dogs will be changing features of our kit and logo. While these are not going to be drastic changes, we feel as a team that ensuring we all look like a unit when on the pitch is important. This is something that will be reflected in changes currently being decided upon, and will be announced and seen soon. <br><br>\r\n\r\n     Finally regarding what\'s new, it\'s with great pleasure and enthusiasm that we announce an expansion to what we offer as a team. Beginning in the 2018/19 season will be a Flag Football Team. This is something that Samantha Pratt-Sibanda, the Women\'s Officer on the team committee has been working hard to create. This will be an opportunity for those who want to learn or become invested in the sport of American Football, but without the contact aspect. It offers a different dynamic to regular American Football, with generally smaller sides and less time between downs. Itâ€™s definitely worth coming along to, and players are more than welcome to attend both Flag Football and regular American Football in the upcoming University year. <br><br>\r\n\r\n     Everyone on the team is looking forward to the beginning of the new season - but not before taking on the Old Boys, with the event being held on Saturday 26th May. The current team will be facing up against Bath Spa Graduates that used to belong to the Bath Spa Bulldogs. Itâ€™s got the makings of a great game, and is the last step before going into Summer and onto a productive Pre-Season. <br><br>\r\n\r\n     Everyone on the team is eager to get started, and we look forward to meeting our new teammates come September. <br>', '');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `ID` int(255) NOT NULL,
  `Name` text NOT NULL,
  `Number` int(2) NOT NULL,
  `Position` text NOT NULL,
  `College` text NOT NULL,
  `NFL_Team` text NOT NULL,
  `NFL_Player` text NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`ID`, `Name`, `Number`, `Position`, `College`, `NFL_Team`, `NFL_Player`, `image`) VALUES
(46, 'Howie Squires', 98, 'Cornerback', 'QE Sixth Form', 'Eagles', 'Nick Foles', 'AF_Me.png'),
(47, 'Jonathan Otter', 66, 'Left Tackle', 'Notre Dame Sixth Form', 'Chicago Bears', 'Kyle Long', 'JonnyOtter.jpg'),
(48, 'Christopher Hendrick', 71, 'D&O Lineman', 'Munro College', 'New England Patriots', 'Marcus Mariota', 'unfound.jpg'),
(49, 'Josh Trowern', 30, 'Safety / Wide Receiver', 'Burgate Sixth Form', 'Miami Dolphins', 'Cameron Wake', 'JT.jpg'),
(50, 'Mabel Moeller', 90, 'Wide Receiver', 'International School Hamburg', 'New England Patriots', 'Rob Gronkowski', 'unfound.jpg'),
(51, 'Dominic Royston', 14, 'Linebacker', 'Havant Sixth Form College', 'New England Patriots', 'Dont\'a Hightower', 'DomRoyston.jpg'),
(52, 'Robert Mallett', 83, 'Tight End', 'The Chase Sixth Form', 'Atlanta Falcons', 'Matt Ryan', 'RobMallett.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
