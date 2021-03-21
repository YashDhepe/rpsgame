-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2021 at 06:59 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game`
--

-- --------------------------------------------------------

--
-- Table structure for table `playerchoice`
--

CREATE TABLE `playerchoice` (
  `round` int(11) NOT NULL,
  `player1_choice` varchar(255) NOT NULL,
  `player2_choice` varchar(255) NOT NULL,
  `player3_choice` varchar(255) NOT NULL,
  `player4_choice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playerchoice`
--

INSERT INTO `playerchoice` (`round`, `player1_choice`, `player2_choice`, `player3_choice`, `player4_choice`) VALUES
(1, 'paper', 'paper', 'scissors', 'rock'),
(2, 'rock', 'paper', 'rock', 'rock'),
(3, 'paper', 'paper', 'scissors', 'scissors'),
(4, 'paper', 'paper', 'paper', 'scissors'),
(5, 'scissors', 'paper', 'paper', 'paper'),
(6, 'paper', 'scissors', 'rock', 'rock'),
(7, 'paper', 'scissors', 'scissors', 'paper'),
(8, 'rock', 'scissors', 'rock', 'rock'),
(9, 'scissors', 'paper', 'scissors', 'rock'),
(10, 'rock', 'paper', 'scissors', 'rock'),
(11, 'scissors', 'rock', 'paper', 'rock');

-- --------------------------------------------------------

--
-- Table structure for table `playervs`
--

CREATE TABLE `playervs` (
  `round` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `player1` varchar(255) NOT NULL,
  `player2` varchar(255) NOT NULL,
  `player3` varchar(255) NOT NULL,
  `player4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playervs`
--

INSERT INTO `playervs` (`round`, `name`, `player1`, `player2`, `player3`, `player4`) VALUES
(1, 'Player 1', '-', '0', '0', '1'),
(2, 'Player 2', '0', '-', '0', '1'),
(3, 'Player 3', '1', '1', '-', '0'),
(4, 'Player 4', '0', '0', '1', '-'),
(5, 'Player 1', '-', '0', '0', '0'),
(6, 'Player 2', '1', '-', '1', '1'),
(7, 'Player 3', '0', '0', '-', '0'),
(8, 'Player 4', '0', '0', '0', '-'),
(9, 'Player 1', '-', '0', '0', '0'),
(10, 'Player 2', '0', '-', '0', '0'),
(11, 'Player 3', '1', '1', '-', '0'),
(12, 'Player 4', '1', '1', '0', '-'),
(13, 'Player 1', '-', '0', '0', '0'),
(14, 'Player 2', '0', '-', '0', '0'),
(15, 'Player 3', '0', '0', '-', '0'),
(16, 'Player 4', '1', '1', '1', '-'),
(17, 'Player 1', '-', '1', '1', '1'),
(18, 'Player 2', '0', '-', '0', '0'),
(19, 'Player 3', '0', '0', '-', '0'),
(20, 'Player 4', '0', '0', '0', '-'),
(21, 'Player 1', '-', '0', '1', '1'),
(22, 'Player 2', '1', '-', '0', '0'),
(23, 'Player 3', '0', '1', '-', '0'),
(24, 'Player 4', '0', '1', '0', '-'),
(25, 'Player 1', '-', '0', '0', '0'),
(26, 'Player 2', '1', '-', '0', '1'),
(27, 'Player 3', '1', '0', '-', '1'),
(28, 'Player 4', '0', '0', '0', '-'),
(29, 'Player 1', '-', '1', '0', '0'),
(30, 'Player 2', '0', '-', '0', '0'),
(31, 'Player 3', '0', '1', '-', '0'),
(32, 'Player 4', '0', '1', '0', '-'),
(33, 'Player 1', '-', '1', '0', '0'),
(34, 'Player 2', '0', '-', '0', '1'),
(35, 'Player 3', '0', '1', '-', '0'),
(36, 'Player 4', '1', '0', '1', '-'),
(37, 'Player 1', '-', '0', '1', '0'),
(38, 'Player 2', '1', '-', '0', '1'),
(39, 'Player 3', '0', '1', '-', '0'),
(40, 'Player 4', '0', '0', '1', '-'),
(41, 'Player 1', '-', '0', '1', '0'),
(42, 'Player 2', '1', '-', '0', '0'),
(43, 'Player 3', '0', '1', '-', '1'),
(44, 'Player 4', '1', '0', '0', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `playerchoice`
--
ALTER TABLE `playerchoice`
  ADD PRIMARY KEY (`round`);

--
-- Indexes for table `playervs`
--
ALTER TABLE `playervs`
  ADD PRIMARY KEY (`round`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `playerchoice`
--
ALTER TABLE `playerchoice`
  MODIFY `round` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `playervs`
--
ALTER TABLE `playervs`
  MODIFY `round` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
