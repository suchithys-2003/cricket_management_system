-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2018 at 04:25 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10
 CREATE DATABASE cricket;
use cricket;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cricket`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `stadium` ()  NO SQL
select * from stadiums$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cricket_boards`
--

CREATE TABLE `cricket_boards` (
  `board_name` varchar(20) NOT NULL,
  `chairman` varchar(20) NOT NULL,
  `team` varchar(10) NOT NULL,
  `DOA` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cricket_boards`
--

INSERT INTO `cricket_boards` (`board_name`, `chairman`, `team`, `DOA`) VALUES
('BCCI', 'Roger Binny', 'India', '1928-12-01'),
('CA', 'Dr Lachlan Henderson', 'Australia', '1935-04-12'),
('PCB', 'Syed Mohsin Raza naqvi', 'Pakistan', '1999-06-11'),
('CSA', 'Lowson Naidoo', 'South Africa', '1991-10-11'),
('NZC', 'David White', 'New Zealand', '1990-06-03');


-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('user', '123');

-- --------------------------------------------------------

--
-- Table structure for table `played_in`
--

CREATE TABLE `played_in` (
  `stadium_name` varchar(50) NOT NULL,
  `board_name` varchar(20) NOT NULL,
  `team` varchar(10) NOT NULL,
  `team1` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `team2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `played_in`
--

INSERT INTO `played_in` (`stadium_name`, `board_name`,`team`, `team1`, `date`, `team2`) VALUES
('Narendra Modi Stadium', 'BCCI', 'India','India', '2023-12-27', 'Pakistan'),
('Melbourne Cricket Ground',  'CA', 'Australia','South Africa', '2018-02-20', 'New Zealand'),
('Eden Gardens Kolkata', 'PCB', 'Pakistan', 'Pakistan', '2000-12-1', 'South Africa'),
('The Oval', 'CSA','South Africa',  'New Zealand', '1999-05-26', 'Australia'),
('Seddon Park', 'NZC','New Zealand',  'India', '2011-7-30', 'Australia'),




-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `cap_no` decimal(4,0) NOT NULL,
  `age` decimal(4,0) NOT NULL,
  `dob` date NOT NULL,
  `runs` decimal(7,0) NOT NULL,
  `wickets` decimal(8,0) NOT NULL,
  `type` varchar(20) NOT NULL,
  `no_of_matches` decimal(7,0) NOT NULL,
  `rank` decimal(7,0) NOT NULL,
  `batting_best` varchar(10) NOT NULL,
  `bowling_best` varchar(10) NOT NULL,
  `playername` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`cap_no`, `age`, `dob`, `runs`, `wickets`, `type`, `no_of_matches`, `rank`, `batting_best`, `bowling_best`, `playername`, `image`, `name`) VALUES
('1', '29', '1985-11-05', '4008', '125', 'batsman', '163', '2', '113*', '18/2', 'viratkohli', 'img/kholi.jpg', 'India'),
('2', '29', '1993-08-19', '125', '45', 'batsman', '144', '19', '88', '25/1', 'Rohit Sharma', 'img/ro.jpg', 'India'),
('3', '35', '1982-01-24', '3452', '24', 'batsman', '145', '5', '71*', '14/8', 'M S Dhoni', 'img/ms.jpg', 'India'),
('4', '26', '1985-11-06', '1298', '54', 'batsman', '89', '15', '65', '25/2', 'kl rahul', 'img/kl.jpg', 'India'),
('5', '24', '1982-01-06', '1245', '87', 'batsman', '44', '16', '58', '4/6', 'Jasprit Bumrah', 'img/bum.jpg', 'India'),
('6', '22', '1975-01-08', '1789', '41', 'bowler', '45', '7', '40', '18/3', 'Hardhik Pandhya', 'img/pandya.jpg', 'India'),
('7', '34', '1978-01-01', '1203', '58', 'bowler', '98', '5', '95', '23/4', 'Mohammad Siraj', 'img/siraj.jpg', 'India'),
('8', '35', '1978-07-08', '2512', '55', 'batsman', '85', '11', '88', '24/8', 'yuvaraj singh', 'img/yuv.jpg', 'India'),
('9', '26', '1978-06-04', '1256', '58', 'Allrounder', '44', '10', '42', '26/4', 'Axar Patel', 'img/axar.jpg', 'India'),
('10', '33', '1997-02-04', '3542', '22', 'batsman', '113', '19', '115*', '18/9', 'Suresh Raina', 'img/raina.jpg', 'India'),
('11', '26', '1995-06-24', '2800', '25', 'batsman', '84', '6', '85', '29/1', 'shikkar dhawan', 'img/loc.jpg', 'India'), 
('12', '29', '1985-11-14', '2565', '45', 'batsman', '54', '8', '75', '25/3', 'david warner', 'img/war.jpg', 'Australia'),
('13', '29', '1986-06-05', '152', '75', 'bowler', '78', '3', '40', '25/4', 'Travis Head', 'img/head.jpg', 'Australia'),
('14', '32', '1976-02-28', '4007', '100', 'allrounder', '141', '1', '133*', '18/2', 'Glenn Maxwell', 'img/max.jpg', 'Australia'),
('15', '34', '1978-03-28', '3007', '89', 'batsman', '140', '5', '103*', '30/2', 'Steve Smith', 'img/stev.jpg', 'Australia'),
('16', '34', '1976-02-20', '2307', '100', 'allrounder', '141', '1', '133*', '18/2', 'Mitchell Marsh', 'img/mars.jpg', 'Australia'),
('17', '32', '1972-12-30', '4007', '100', 'allrounder', '111', '7', '89*', '12/2', 'Cameron Green', 'img/mars.jpg', 'Australia'),
('18', '32', '1969-05-20', '4000', '93', 'allrounder', '101', '3', '133*', '45/5', 'Pat Cummins', 'img/.jpg', 'Australia'),
('19', '29', '1985-11-14', '2565', '45', 'batsman', '43', '12', '45*', '25/3', 'Josh Hazlewood', 'img/war.jpg', 'Australia'),
('20', '29', '1985-11-14', '2565', '45', 'batsman', '54', '8', '75', '25/3', 'Cameron Green', 'img/war.jpg', 'Australia'),
('21', '29', '1986-06-05', '152', '75', 'bowler', '78', '3', '40', '25/4', 'Marcus Stoinis', 'img/head.jpg', 'Australia'),
('22', '32', '1976-02-28', '2007', '100', 'allrounder', '141', '1', '133*', '18/2', 'Adam Zampa', 'img/max.jpg', 'Australia'), 
('23', '29', '1985-11-14', '2565', '45', 'batsman', '54', '7', '75', '25/3', 'Kane williamson', 'img/kane.jpg', 'New Zealand'),
('24', '25', '1975-01-12', '2345', '123', 'batsman', '123', '2', '43', '21/1', 'Tom Latham', 'img/kane.jpg', 'New Zealand'),
('25', '21', '1988-07-07', '4321', '211', 'batsman', '100', '2', '175', '13/0', 'Devon Conway', 'img/kane.jpg', 'New Zealand'),
('26', '30', '1990-11-30', '890', '78', 'batsman', '78', '1', '22', '2/1', 'Will Young', 'img/kane.jpg', 'New Zealand'),
('27', '29', '1985-11-14', '2565', '45', 'allrounder', '54', '7', '75', '25/3', 'Daryl Mitchell', 'img/kane.jpg', 'New Zealand'),
('28', '25', '1975-01-12', '2345', '123', 'allrounder', '123', '2', '43', '21/1', 'Glenn Phillips', 'img/kane.jpg', 'New Zealand'),
('29', '21', '1988-07-07', '4321', '211', 'bowler', '100', '2', '175', '13/0', 'Rachin Ravindra', 'img/kane.jpg', 'New Zealand'),
('30', '30', '1990-11-30', '890', '78', 'bowler', '78', '1', '22', '2/1', 'Mitchell Santner', 'img/kane.jpg', 'New Zealand'),
('31', '21', '1988-07-07', '4321', '211', 'batsman', '100', '2', '175', '13/0', 'Trent Boult', 'img/kane.jpg', 'New Zealand'),
('32', '30', '1990-11-30', '890', '78', 'batsman', '78', '1', '22', '2/1', 'Lockie Ferguson', 'img/kane.jpg', 'New Zealand'),
('33', '29', '1985-11-14', '2565', '45', 'allrounder', '54', '7', '75', '25/3', 'Tim Southee', 'img/kane.jpg', 'New Zealand'),
('34', '19', '1995-03-14', '1298', '24', 'Allrounder', '91', '11', '17', '2/3', 'Faf du Plessis', 'img/faf.jpg', 'South Africa'),
('35', '32', '1976-02-28', '4007', '100', 'batsman', '141', '3', '133*', '18/2', 'AB De villiers', 'img/abd.jpg', 'South Africa'),
('36', '23', '1996-11-04', '2458', '50', 'bowler', '85', '6', '77', '17/2', 'Quinton de Kock', 'img/decock.jpg', 'South Africa'),
('37', '19', '1976-01-09', '250', '7', 'Allrounder', '45', '19', '95', '22/2', 'Aiden Markam', 'img/mark.jpg', 'South Africa'),
('38', '26', '1985-11-06', '1298', '54', 'batsman', '89', '15', '65', '25/2', 'Temba Bavuma', 'img/kl.jpg', 'South Africa'),
('39', '24', '1982-01-06', '1245', '87', 'batsman', '44', '16', '58', '4/6', 'Klaasen', 'img/bum.jpg', 'South Africa'),
('40', '22', '1975-01-08', '1789', '41', 'bowler', '45', '7', '40', '18/3', 'David Miller', 'img/pandya.jpg', 'South Africa'),
('41', '34', '1978-01-01', '1203', '58', 'bowler', '98', '5', '95', '23/4', 'Rassien van', 'img/siraj.jpg', 'South Africa'),
('42', '35', '1978-07-08', '2512', '55', 'batsman', '85', '11', '88', '24/8', 'Keshav Maharaj', 'img/yuv.jpg', 'South Africa'),
('43', '26', '1978-06-04', '1256', '58', 'Allrounder', '44', '10', '42', '26/4', 'Rabada', 'img/axar.jpg', 'South Africa'),
('44', '33', '1997-02-04', '3542', '22', 'batsman', '113', '19', '115*', '18/9', 'Marco Jansen', 'img/raina.jpg', 'South Africa'),
('45', '22', '1995-03-14', '1298', '24', 'Allrounder', '91', '11', '17', '2/3', 'Babar Azam', 'img/babar.jpg', 'Pakistan'),
('46', '29', '1985-11-14', '2565', '45', 'batsman', '54', '8', '75', '25/3', 'Safaraz Ahmed', 'img/war.jpg', 'Pakistan'),
('47', '29', '1986-06-05', '152', '75', 'bowler', '78', '3', '40', '25/4', 'Asif Ali', 'img/head.jpg', 'Pakistan'),
('48', '32', '1976-02-28', '4007', '100', 'allrounder', '141', '1', '133*', '18/2', 'Fakhar Zaman', 'img/max.jpg', 'Pakistan'),
('49', '34', '1978-03-28', '3007', '89', 'batsman', '140', '5', '103*', '30/2', 'Imam-ul-haq', 'img/max.jpg', 'Pakistan'),
('50', '34', '1976-02-20', '2307', '100', 'allrounder', '141', '1', '133*', '18/2', 'Imad Wasim', 'img/max.jpg', 'Pakistan'),
('51', '32', '1972-12-30', '4007', '100', 'allrounder', '111', '7', '89*', '12/2', 'Shadab khan', 'img/max.jpg', 'Pakistan'),
('52', '32', '1969-05-20', '4000', '93', 'allrounder', '101', '3', '133*', '45/5', 'Hasan ali', 'img/max.jpg', 'Pakistan'),
('53', '29', '1985-11-14', '2565', '45', 'batsman', '43', '12', '45*', '25/3', 'Mohammad', 'img/war.jpg', 'Pakistan'),
('54', '29', '1985-11-14', '2565', '45', 'batsman', '54', '8', '75', '25/3', 'Afridi', 'img/war.jpg', 'Pakistan'),
('55', '29', '1986-06-05', '152', '75', 'bowler', '78', '3', '40', '25/4', 'Riaz', 'img/head.jpg', 'Pakistan');


-- create view

CREATE VIEW top_players AS
SELECT playername,runs,wickets,name
FROM player
WHERE runs>5000 OR wickets>100



DELIMITER $$
CREATE TRIGGER `update` BEFORE UPDATE ON `player` FOR EACH ROW
BEGIN
    IF (new.runs < old.runs) THEN 
        SET new.runs = old.runs;
    ELSEIF (new.wickets < old.wickets) THEN 
        SET new.wickets = old.wickets;
    ELSEIF (new.no_of_matches < old.no_of_matches) THEN 
        SET new.no_of_matches = old.no_of_matches;
    END IF;
END
DELIMITER ;

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `team1` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `match_no` decimal(3,0) NOT NULL,
  `team2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`

--

INSERT INTO `schedules` (`team1`, `date`, `match_no`, `team2`) VALUES
('India', '2023-12-27', '1', 'Pakistan'),
('South Africa', '2018-02-20', '2', 'New Zealand'),
('Pakistan', '2000-12-01', '5', 'South Africa'),
('New Zealand', '1999-05-26', '3', 'Australia'),
('India', '2011-07-30', '4', 'Australia');

--
 --------------------------------------------------------

--
-- 
--

CREATE TABLE `selected_for` (
  `position` varchar(20) NOT NULL,
  `cap_no` decimal(4,0) NOT NULL,
  `name` varchar(30) NOT NULL,
  `team1` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `team2` varchar(20) NOT NULL 
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 


-- Dumping data for table `selected_for`
--

INSERT INTO `selected_for` (`position`, `cap_no`, `name`, `team1`, `date`, `team2`) VALUES
('CAPTAIN', '1', 'India', 'India', '2023-12-27', 'Pakistan'),
('VICE-CAPTAIN', '2', 'India', 'India', '2023-12-27', 'Pakistan'),
('CAPTAIN', '1', 'India', 'South Africa', '2018-02-20', 'New Zealand'),
('VICE-CAPTAIN', '2', 'India', 'South Africa', '2018-02-20', 'New Zealand'),
('CAPTAIN', '1', 'India', 'Pakistan', '2000-12-1', 'South Africa'),
('VICE-CAPTAIN', '2', 'India', 'Pakistan', '2000-12-1', 'South Africa'),
('CAPTAIN', '1', 'India', 'New Zealand', '1999-05-26', 'Australia' ),
('VICE-CAPTAIN', '2', 'India', 'New Zealand', '1999-05-26', 'Australia' ),
('CAPTAIN', '1', 'India',  'India', '2011-7-30', 'Australia'),
('VICE-CAPTAIN', '2',  'India','India', '2011-7-30', 'Australia'),
('CAPTAIN', '12', 'Australia', 'India', '2023-12-27', 'Pakistan'),
('VICE-CAPTAIN', '13', 'Australia', 'India', '2023-12-27', 'Pakistan'),
('CAPTAIN', '12', 'Australia', 'South Africa', '2018-02-20', 'New Zealand'),
('VICE-CAPTAIN', '13', 'Australia', 'South Africa', '2018-02-20', 'New Zealand'),
('CAPTAIN', '12', 'Australia', 'Pakistan', '2000-12-1', 'South Africa'),
('VICE-CAPTAIN', '13', 'Australia', 'Pakistan', '2000-12-1', 'South Africa'),
('CAPTAIN', '12', 'Australia', 'New Zealand', '1999-05-26', 'Australia' ),
('VICE-CAPTAIN', '13', 'Australia', 'New Zealand', '1999-05-26', 'Australia' ),
('CAPTAIN', '12', 'Australia',  'India', '2011-7-30', 'Australia'),
('VICE-CAPTAIN', '13',  'Australia', 'India','2011-7-30', 'Australia'),
('CAPTAIN', '23', 'New Zealand', 'India', '2023-12-27', 'Pakistan'),
('VICE-CAPTAIN', '24', 'New Zealand', 'India', '2023-12-27', 'Pakistan'),
('CAPTAIN', '23', 'New Zealand', 'South Africa', '2018-02-20', 'New Zealand'),
('VICE-CAPTAIN', '24', 'New Zealand', 'South Africa', '2018-02-20', 'New Zealand'),
('CAPTAIN', '23', 'New Zealand', 'Pakistan', '2000-12-1', 'South Africa'),
('VICE-CAPTAIN', '24', 'New Zealand', 'Pakistan', '2000-12-1', 'South Africa'),
('CAPTAIN', '23', 'New Zealand', 'New Zealand', '1999-05-26', 'Australia' ),
('VICE-CAPTAIN', '24', 'New Zealand', 'New Zealand', '1999-05-26', 'Australia' ),
('CAPTAIN', '23', 'New Zealand',  'India', '2011-7-30', 'Australia'),
('VICE-CAPTAIN', '24',  'New Zealand','India', '2011-7-30', 'Australia'),
('CAPTAIN', '34', 'South Africa', 'India', '2023-12-27', 'Pakistan'),
('VICE-CAPTAIN', '35', 'South Africa', 'India', '2023-12-27', 'Pakistan'),
('CAPTAIN', '34', 'South Africa', 'South Africa', '2018-02-20', 'New Zealand'),
('VICE-CAPTAIN', '35', 'South Africa', 'South Africa', '2018-02-20', 'New Zealand'),
('CAPTAIN', '34', 'South Africa', 'Pakistan', '2000-12-1', 'South Africa'),
('VICE-CAPTAIN', '35', 'South Africa', 'Pakistan', '2000-12-1', 'South Africa'),
('CAPTAIN', '34', 'South Africa', 'New Zealand', '1999-05-26', 'Australia' ),
('VICE-CAPTAIN', '35', 'South Africa', 'New Zealand', '1999-05-26', 'Australia' ),
('CAPTAIN', '34', 'South Africa',  'India', '2011-7-30', 'Australia'),
('VICE-CAPTAIN', '35',  'South Africa','India', '2011-7-30', 'Australia'),
('CAPTAIN', '45', 'Pakistan', 'India', '2023-12-27', 'Pakistan'),
('VICE-CAPTAIN', '46', 'Pakistan', 'India', '2023-12-27', 'Pakistan'),
('CAPTAIN', '45', 'Pakistan', 'South Africa', '2018-02-20', 'New Zealand'),
('VICE-CAPTAIN', '46', 'Pakistan', 'South Africa', '2018-02-20', 'New Zealand'),
('CAPTAIN', '45', 'Pakistan', 'Pakistan', '2000-12-1', 'South Africa'),
('VICE-CAPTAIN', '46', 'Pakistan', 'Pakistan', '2000-12-1', 'South Africa'),
('CAPTAIN', '45', 'Pakistan', 'New Zealand', '1999-05-26', 'Australia' ),
('VICE-CAPTAIN', '46', 'Pakistan', 'New Zealand', '1999-05-26', 'Australia' ),
('CAPTAIN', '45', 'Pakistan',  'India', '2011-7-30', 'Australia'),
('VICE-CAPTAIN', '46',  'Pakistan','India', '2011-7-30', 'Australia');
-- 

-- --------------------------------------------------------

--
-- Table structure for table `stadiums`
--
use cricket;

CREATE TABLE `stadiums` (
  `stadium_name` varchar(50) NOT NULL,
  `capacity` decimal(6,0) NOT NULL,
  `DOI` date NOT NULL,
  `board_name` varchar(20) NOT NULL,
  `team` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stadiums`
--

INSERT INTO `stadiums` (`stadium_name`, `capacity`, `DOI`, `board_name`, `team`) VALUES
('Narendra Modi Stadium', '84000', '1985-05-11', 'BCCI', 'India'),
('Melbourne Cricket Ground', '41000', '1996-11-20', 'CA', 'Australia'),
('Eden Gardens Kolkata', '25000', '1974-12-28', 'PCB', 'Pakistan'),
('The Oval', '65000', '1976-11-25', 'CSA', 'South Africa'),
('Seddon Park','100000','1986-1-1', 'NZC','New Zealand');



--

-- Triggers `stadiums`
--
DELIMITER $$
CREATE TRIGGER `default_date` BEFORE INSERT ON `stadiums` FOR EACH ROW
BEGIN
    SET NEW.DOI = CURRENT_DATE();
END$$
DELIMITER ;


-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `rank` decimal(5,0) NOT NULL,
  `rating` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`rank`, `rating`, `name`) VALUES
('5', 119, 'Pakistan'),
('4', 116, 'Australia'),
('1', 130, 'India'),
('3', 125, 'South Africa'),
('2', 123, 'New Zealand');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `cricket_boards`
--
ALTER TABLE `cricket_boards`
  ADD PRIMARY KEY (`board_name`,`team`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `played_in`
--
ALTER TABLE `played_in`
  ADD PRIMARY KEY (`stadium_name`,`board_name`,`team`,`team1`,`date`,`team2`),
  ADD KEY `team1` (`team1`,`date`,`team2`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`cap_no`,`name`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`team1`,`date`,`team2`);

--
-- Indexes for table `selected_for`
--
ALTER TABLE `selected_for`
  ADD PRIMARY KEY (`cap_no`,`name`,`team1`,`date`,`team2`),
  ADD KEY `team1` (`team1`,`date`,`team2`);

--
-- Indexes for table `stadiums`
--
ALTER TABLE `stadiums`
  ADD PRIMARY KEY (`stadium_name`,`board_name`,`team`),
  ADD KEY `board_name` (`board_name`,`team`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`name`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `played_in`
--
ALTER TABLE `played_in`
  ADD CONSTRAINT `played_in_ibfk_1` FOREIGN KEY (`stadium_name`,`board_name`,`team`) REFERENCES `stadiums` (`stadium_name`, `board_name`, `team`),
  ADD CONSTRAINT `played_in_ibfk_2` FOREIGN KEY (`team1`,`date`,`team2`) REFERENCES `schedules` (`team1`, `date`, `team2`);

--
-- Constraints for table `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player_ibfk_1` FOREIGN KEY (`name`) REFERENCES `team` (`name`) ON DELETE CASCADE;

--
-- Constraints for table `selected_for`
--
ALTER TABLE `selected_for`
  ADD CONSTRAINT `selected_for_ibfk_1` FOREIGN KEY (`cap_no`,`name`) REFERENCES `player` (`cap_no`, `name`),
  ADD CONSTRAINT `selected_for_ibfk_2` FOREIGN KEY (`team1`,`date`,`team2`) REFERENCES `schedules` (`team1`, `date`, `team2`) ON DELETE CASCADE;

--
-- Constraints for table `stadiums`
--
ALTER TABLE `stadiums`
  ADD CONSTRAINT `stadiums_ibfk_1` FOREIGN KEY (`board_name`,`team`) REFERENCES `cricket_boards` (`board_name`, `team`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
