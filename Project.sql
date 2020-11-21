-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2018 at 06:49 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zonel`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminuploadeddocuments`
--

CREATE TABLE `adminuploadeddocuments` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminuploadeddocuments`
--

INSERT INTO `adminuploadeddocuments` (`id`, `name`) VALUES
(1, 'Operating Systems Stallings 4ed solutions manual.pdf'),
(2, 'Operating Systems Stallings 4ed solutions manual.pdf'),
(7, 'Activity 01.pdf'),
(8, 'Activity 05.pdf'),
(9, '03_Dynamic_programming.pdf'),
(12, 'UWU_CST_15_058.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `heading` varchar(30) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `name`, `heading`, `description`) VALUES
(1, 'Bandaranayaka M M V', 'Need English Teacher', ' when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries'),
(4, 'Rathnawali College', 'Need Play Ground', 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text'),
(5, 'DS Senanayaka M M V', 'Class rooms are not available', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour'),
(6, 'Royal College', 'Chess Championship', 'making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words'),
(7, 'DSSenanayaka National School', 'Need Money to repair ', ' All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.');

-- --------------------------------------------------------

--
-- Table structure for table `directormsg`
--

CREATE TABLE `directormsg` (
  `id` int(11) NOT NULL,
  `heading` varchar(50) DEFAULT NULL,
  `message` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `directormsg`
--

INSERT INTO `directormsg` (`id`, `heading`, `message`) VALUES
(1, 'Teachers are needed!', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using .Content here.');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `name`) VALUES
(19, '1.jpg'),
(20, '2.jpg'),
(21, '3.jpg'),
(22, '4.jpg'),
(23, '01.jpg'),
(25, '04.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`) VALUES
(1, 'UWU_CST_15_011.pdf'),
(2, 'PROJECT PROPOSAL.pdf'),
(3, 'PROJECT PROPOSAL.pdf'),
(4, 'PROJECT PROPOSAL.pdf'),
(5, 'Project-I_ProposalGuidelines.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `heading` varchar(30) DEFAULT NULL,
  `description` text,
  `username` varchar(30) DEFAULT NULL,
  `imgName` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `heading`, `description`, `username`, `imgName`) VALUES
(1, 'SAITAM', 'GEYAKsdasdas sdfasdasdcd\r\n asdasdasc ', 'ruwan', '1.jpg'),
(2, 'simply dummy', 'survived not only five centuries, but also the leap into electronic typesetting,', 'ruwan', '2.jpg'),
(3, ' long established', 'It is a long established fact that a reader will be distracted by the readable content of a page whe', 'ruwan', '3.jpg'),
(4, 'Contrary to popular', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', 'ruwan', '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `principal`
--

CREATE TABLE `principal` (
  `principalId` varchar(100) NOT NULL,
  `SchoolName` varchar(200) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `SchoolType` varchar(20) DEFAULT NULL,
  `Principal` varchar(100) DEFAULT NULL,
  `Telephone` varchar(10) DEFAULT NULL,
  `division` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `principal`
--

INSERT INTO `principal` (`principalId`, `SchoolName`, `Address`, `SchoolType`, `Principal`, `Telephone`, `division`) VALUES
('2', ' Ba/Soranathota Central College', 'Soranathota                                ', '1C', 'S.G.Abeykoon', '0777406423', 'Soranathota'),
('1', ' Ba/Kandegedara National College', 'Kandegedara                                ', '1AB', 'R.M.I.P.Rathnayake', '0716008063', 'Soranathota'),
('3', ' Ba/Egodawela Maha Vidyalaya', 'Agodawela                              ', '1C', 'M.L.P.Liyange', '0723329172', 'Soranathota'),
('4', ' Ba/Kirioruwa Primary School', 'Kirioruwa, Kandegedara                              ', 'Type 03', 'A.M.S.Aththanayake', '0716519200', 'Soranathota'),
('5', ' Ba/Kuttiyagolla Maha Vidyalaya', 'Kuttiyagolla                            ', '1C', 'D.M.W.Jayantha Dissanayake', '0767833732', 'Soranathota'),
('6', ' Ba/Kosgolla Maha Vidyalaya', 'Thibirigaspitiya                           ', '1C', 'P.G.Wasantha Priyadarshani', '0777194535', 'Soranathota'),
('7', ' Ba/kohana Primary School', 'Pathanawaththe,Kandegedara \r\n                         ', 'Type 03', 'E.D.Chandrasena', '0712194662', 'Soranathota'),
('8', ' Ba/Gannilegama Primary School', 'Gannilegama,Thannepanguwa \r\n                         ', 'Type 03', 'G.H.Dharmawathie', '0717488623', 'Soranathota'),
('9', '  Ba/Pussellakanda Maha Vidyalaya', 'Pthanawaththe,Haliela                             ', 'Type 02', 'R.M.Rathanapala', '0723815250', 'Soranathota'),
('10', ' Ba/Pussellawa Maha Vidyalaya', 'Thaldena\r\n                         ', 'Type 02', 'R.M.Premadase', '0770395252', 'Soranathota'),
('12', 'Meegahakiwla', 'Bathalawatte,Thaldena                         ', '1AB', 'R.M.Wimalasiri', '0716202369', ''),
('11', ' Ba/Pitamaruwa Maha Vidyalaya', 'Pitamaruwa,Passara\r\n                         ', '1c', 'I.S.K.Perera', '0779760197', 'Meegahakiwla'),
('13', ' Ba/Bathalawatthe Primary School', '  Bathalewaththe,Thaldena                              ', 'Type 03', 'S.J.M.Karunadase', '0774417497', 'Meegahakiwla'),
('14', ' Ba/Kalugahakadura Maha Vidyalaya', 'Kalugahakadura                             ', '1C', 'D.M.Jinadase', '0774417497', 'Meegahakiwla'),
('15', ' Ba/Meegahakiwla National College', 'Meegahakiwla                            ', '1C', 'H.M.Senarath Bandara', '0712336939', 'Meegahakiwla'),
('16', ' Ba/Morahela Maha Vidyalaya', 'Katawaththe                        ', '1C', 'R.M.Wijwsundara', '0729303422', 'Meegahakiwla'),
('17', ' Ba/Karadamahakada Maha Vidyalaya', 'Arawa,Badulla                              ', 'Type 02', 'D.H.Jayasundara', '0778427616', 'Meegahakiwla'),
('18', ' BA/Polhagaarawa Maha Vidyalaya', 'Awara,Badulla                                ', 'Type 02', 'W.M.Karunarathne', '0711483232', 'Meegahakiwla'),
('19', ' BA/Balagolla Maha Vidyalaya', 'Balagolla,Meegahakiwla                              ', 'Type 02', 'Athula Premarathna Yapa', '0777885863', 'Meegahakiwla'),
('20', ' BA/Wiyaluwa Allanda Primary School ', 'Kalugahadura,Badulla                           ', 'Type 03', 'W.M.A.S.Udayakanthe', '0777885863', 'Meegahakiwla'),
('22', ' Ba/Godunna Maha Vidyalaya', 'Godunna,Haliela                                ', '1C', 'D.M.Piyasiri', '0717754606', 'Kandakatiya'),
('21', ' Ba/Galauda Central College', ' Gauda,Haliela                               ', '1AB', 'A.Amarawathie', '0767039020', 'Kandakatiya'),
('23', ' Ba/Bopitiya Primary School', 'Thannepanguwa,Kandegedara                              ', '1C', 'Sameera Rajapakse', '0772670021', 'Kandakatiya'),
('24', ' Ba/BEramada Maha Vidyalaya', 'Beramada,Haliela                             ', 'Type 02', 'R.M.Appuhami Thilaka', '0728280445', 'Kandakatiya'),
(' 21089', ' Ba/Bopitiya Primary School', 'Thannepanguwa,Kandegedara                                ', 'Type 02', 'H.M.Dissanayake', '0728150440', 'Kandakatiya'),
('26', ' Ba/Wasanagama Primary School', 'Beramada,Haliela                          ', 'Type 03', 'M.P.Chandrapala', '0775843755', 'Kandakatiya'),
('27', ' Ba/Hapathgamuwa Primary School ', 'Godunna,Haliela                          ', 'Type 03', 'B.M.Jayathilake', '0776512255', 'Kandakatiya'),
('28', ' Ba/Labugasthalawa Maha Vidyalaya ', 'Galauda,Haliela                          ', 'Type 02', 'R.M.Jayathilake', '0776374765', 'Kandakatiya'),
('29', ' Ba/Wiyaluwa D.S.Senanayake National College', 'Kandakatiya                        ', '1C', 'W.M.R.M.Weerasinghe', '0725150712', 'Kandakatiya'),
('30', ' Ba/Kandakapuu Ulpatha MahaVidyalaya', 'BaduluOya,Badulla                      ', '1AB', 'A.T.Pathmasiri', '0766573770', 'Kandakatiya'),
('  ', ' Ba/Kandakapuu Ulpatha MahaVidyalaya', 'BaduluOya,Badulla                      ', '1AB', 'A.T.Pathmasiriya', '0766573770', 'Kandakatiya'),
('  456', ' fjf', 'hdh                                ', 'fjfj', 'gjgj', 'ffjf', 'Meegahakiwla'),
(' fjj', ' g', 'jg                                ', 'jgj', 'hg', '0778248615', 'Kandakatiya'),
('  789', ' eyeye', ' fhfh                               ', 'ff', 'itirii', '0789088072', 'Soranathota'),
('  31', ' Ba/KiwlegedaraMohottala Maha Vidyalaya', 'KiwlegedaraMohottala, Kandegedara                                ', '1C', 'D.M.Sumanasena', '0772512255', 'Meegahakiwla'),
(' 33', ' Ba/Wallewathanna Maha Vidyalaya', 'Baduluoya                                ', 'Type 02', 'V.P.S.Bandara', '0779361747', 'Kandakatiya'),
('  38', ' Vishaka Vidyalaya', ' Baduluoya                               ', 'Type 02', 'W.A.S.E.Perera', '0711483232', 'Meegahakiwla'),
('  45', ' Wickramashila M M V', 'Giriulla.                               ', '1c', 'Siripala', '0336584715', 'Soranathota');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `schoolId` varchar(8) NOT NULL,
  `schoolName` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `studentCount` int(10) NOT NULL,
  `principalId` varchar(10) NOT NULL,
  `principalName` varchar(30) NOT NULL,
  `telNo` int(10) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `schoolId`, `schoolName`, `Address`, `studentCount`, `principalId`, `principalName`, `telNo`, `email`) VALUES
(9, '21077', 'Ba/Agodawela Maha Vidyalaya', 'Agodawela                                ', 1200, 'p003', 'M.L.P.Liyanage                ', 553329172, 'AgodawelaMaha@gmail.com'),
(35, 'sch001', 'DSSenanayaka', 'mirigama', 2000, 'p001', 'H.thilakawardhana', 332258745, 'thilakawardhana@gmail.com'),
(8, '21076', 'Ba/Soranathota central College', 'Soranathota                                ', 3000, 'p002', 'S.G.Abeykoon                  ', 557406423, 'soranathotaCentral@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `schoold`
--

CREATE TABLE `schoold` (
  `schoolId` varchar(8) NOT NULL,
  `schoolName` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `studentCount` int(10) NOT NULL,
  `principalId` varchar(10) NOT NULL,
  `principalName` varchar(30) NOT NULL,
  `telNo` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `division` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoold`
--

INSERT INTO `schoold` (`schoolId`, `schoolName`, `Address`, `studentCount`, `principalId`, `principalName`, `telNo`, `email`, `division`) VALUES
('21077', 'Ba/Agodawela Maha Vidyalaya', 'Agodawela                                ', 1200, '3', 'M.L.P.Liyanage                ', 553329172, 'AgodawelaMaha@gmail.com', 'Soranathota'),
('21076', 'Ba/Soranathota central College', 'Soranathota                                ', 3000, '2', 'S.G.Abeykoon                  ', 557406451, 'soranathotaCentral@gmail.com', 'Soranathota'),
('21494', 'Ba/Sarniya Tamil Maha Vidyalaya', 'Kandegedara                                ', 569, '36', 'A.Ravichandran                ', 554944410, 'SarniyaTamil@gmail.com', 'Soranathota'),
('21078', 'Ba/Kirioruwa Primary School', 'Kirioruwa,Kandegedara                             ', 500, '4', 'A.M.S.Aththanayake            ', 556519200, 'KirioruwaPrimary@gmail.com', 'Soranathota'),
('21080', 'Ba/Kuttiyagolla Maha Vidyalaya', 'Kuttiyagolla                                ', 900, '5', 'D.M.W.Jayantha Disanayake     ', 557833732, 'KuttiyagollaMaha@gmail.com', 'Soranathota'),
('21081', 'Kosgolla Maha Vidyalaya', 'Thibirigaspitiya                                ', 1200, '6', 'G.G.Wasantha Priyadarshani    ', 557194535, 'KosgollaMaha@gmail.com', 'Soranathota'),
('21082', 'Ba/Kohana Primary School', 'PathanaWaththa Kandegedara                        ', 560, '7', 'E.D.Chandrasena               ', 552194662, 'KohanaPrimary@gmail.com', 'Soranathota'),
('21083', 'Ba/Gannilegama primary School', 'Gannilegama, Thannepanguwa                        ', 600, '8', 'G.H.Dharmawathie              ', 557488623, 'Gannilegamaprimary@gmail.com', 'Soranathota'),
('21085', 'Ba/Sussellakanda Maha Vidyalaya', 'Pathanawaththa, Haliella                          ', 682, '9', 'R.M. Rathanapala              ', 553815123, 'SussellakandaMaha@gmail.com', 'Soranathota'),
('21086', 'Ba/ Pussellawa maha Vidyalaya', 'Thaldena                                ', 960, '10', 'R.M.Premadasa                 ', 550395252, 'Pussellawamaha@gmail.com', 'Soranathota'),
('21111', 'Ba/Balagolla Maha Vidyalaya', 'Balagolla Meegahakiwla                            ', 785, '19', 'Athula Premarathne Yapa       ', 557885863, 'BalagollaMaha@gmail.com', 'Meegahakiwla'),
('21110', 'Ba/Polgahaarawa Maha Vidyalaya', 'Arawa,Badulla                                ', 742, '18', 'W.M.Karunarathne              ', 559088072, 'Polgahaarawa Maha@gmail.com', 'Meegahakiwla'),
('21107', 'Ba/Karadagahamada Maha Vidyalaya', 'Arawa,Badulla                                ', 742, '17', ' D.H.Jayasundara              ', 558427616, 'KaradagahamadaMaha@gmail.com', 'Meegahakiwla'),
('21075', 'Ba/ Pitamaruwa maha Vidyalaya', 'Pitamaruwa,Passara                               ', 975, '11', 'I.S.K.Perera', 559760197, 'Pitamaruwamaha@gmail.com', 'Meegahakiwla'),
('21087', 'Ba/Thaldena Maha Vidyalaya', 'Thaldena,Badulla                                ', 980, '12', 'R.M.Wimalasiri                ', 556202369, 'ThaldenaMaha@gmail.com', 'Meegahakiwla'),
('21100', 'Ba/Bathalawaththe Primary School', 'Bathalawaththe ,Thaldena                          ', 852, '13', 'S.J.M.Karunadasa              ', 554417497, 'BathalawaththePri@gmail.com', 'Meegahakiwla'),
('21104', 'Ba/Kalugahakadhura Maha Vidyalaya', 'Kalugahakadhura                                ', 789, '14', 'D.M.Jinadase                  ', 551594180, 'Kalugahakadhuramaha@gmail.com', 'Meegahakiwla'),
('21105', 'Ba/Meegahakiwla National College', 'Meegahakiwla                             ', 456, '15', 'H.M.Senerathbanda             ', 552336939, 'MeegahakiwlaNational@gmail.com', 'Meegahakiwla'),
('21106', 'Ba/Morahela Maha Vidyalaya', 'Katawaththe                             ', 752, '16', 'R.M.Wijesundara               ', 559303422, 'MorahelaMaha@gmail.com', 'Meegahakiwla'),
('21115', 'Ba/Viyaluwa Allalanda Primary Vidyalaya', 'Kalugahakadura ,Badulla                           ', 785, '20', 'W.M.A.S.Udayakantha           ', 558858957, 'ViyaluwaAllalanda@gmail.com', 'Meegahakiwla'),
('21072', 'Ba/GalaUda Central College', 'GalaUda ,Haliela                                ', 854, '21', 'A.Amarawathie                 ', 557039030, 'GalaUdaCentral@gmail.com ', 'Kandakatiya'),
('21074', 'Ba/Viyaluwa Maha Vidyalaya', 'ThannePanguwa,Kandegedara                         ', 985, '23', 'Sameera Rajapakse             ', 552670021, 'ViyaluwaMaha@gmail.com', 'Kandakatiya'),
('21088', 'Ba/Beramada Maha Vidyalaya', 'Beramada,Haliella                               ', 650, '24', 'R.M.Appuhami                  ', 558280445, 'BeramadaMaha@gmail.com', 'Kandakatiya'),
('21089', 'Ba/Bopiyiya Primery School', 'Thannepanguwa,Kandegedara                         ', 650, '25', 'H.M.Dissanayake               ', 558150440, 'BeramadaMaha@gmail.com', 'Kandakatiya'),
('21095', 'Ba/Wasanagama Primsry School', 'Beramada,Haliella                               ', 500, '26', 'M.P.Chandrapala               ', 555843755, 'WasanagamaPrimary@gmail.com', 'Kandakatiya'),
('21097', 'Ba/Hapathgamuwa Primary School', 'Godunna,Haliella                               ', 550, '27', 'B.M.Jayathilake               ', 553611884, 'HapathgamuwaPrimary@gmail.com', 'Kandakatiya'),
('21101', 'Ba/Babugasthalawa Maha Vidyalaya', 'Galauda,Haliella                               ', 452, '28', 'R.M.Jayathilake               ', 556374765, 'Babugasthalawa Maha@gmail.com', 'Kandakatiya'),
('21102', 'Ba/Wialuwa D.S.Senanayaka National Vidyalaya', 'Kandakatiya                              ', 693, '29', 'W.M.R.M.Weerasinghe           ', 555150712, 'WialuwaDSSena@gmail.com', 'Kandakatiya'),
('21103', 'Ba/KanndakapuUlpatha Maha Vidyalaya', 'Baduluoya,Badulla                             ', 742, '30', 'A.T.Pathmasiri                ', 550850373, 'KanndakapuUlpath@gmail.com', 'Kandakatiya'),
('21073', 'Badulu Oya Central College', 'Badulla                                ', 785, '40', 'A.K.Premarathne               ', 702613075, 'BaduluOya@gmail.com', 'Soranathota');

-- --------------------------------------------------------

--
-- Table structure for table `schooluploadeddocuments`
--

CREATE TABLE `schooluploadeddocuments` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schooluploadeddocuments`
--

INSERT INTO `schooluploadeddocuments` (`id`, `name`) VALUES
(6, 'PROJECT PROPOSAL.pdf'),
(7, 'distance_vector.pdf'),
(8, '15 routing.pdf'),
(14, 'V4I9201563.pdf'),
(17, 'Activity 03.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userCategory` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `userName`, `password`, `userCategory`) VALUES
(37, 'officer1', '924f3c3abf5ef717b020d5a8c5c9267f', 2),
(35, 'school1', '053d322e4d371b6d79ee54b863095e05', 3),
(34, 'thulki', 'be21af6bcc167d5818c7f5f95d9e0362', 2),
(33, 'admin', '7247b093a984832c430197426eaee1e9', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zonelofficestaff`
--

CREATE TABLE `zonelofficestaff` (
  `id` int(11) NOT NULL,
  `staffName` varchar(30) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `NIC` varchar(10) NOT NULL,
  `telNo` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `position` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zonelofficestaff`
--

INSERT INTO `zonelofficestaff` (`id`, `staffName`, `address`, `NIC`, `telNo`, `email`, `position`) VALUES
(37, 'Imthath', 'sdaasdasd', '964521458v', 332547852, 'ruwan.wedisa0150@gmai.com', 'Teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminuploadeddocuments`
--
ALTER TABLE `adminuploadeddocuments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `directormsg`
--
ALTER TABLE `directormsg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `principal`
--
ALTER TABLE `principal`
  ADD PRIMARY KEY (`principalId`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`schoolId`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `principalId` (`principalId`);

--
-- Indexes for table `schoold`
--
ALTER TABLE `schoold`
  ADD PRIMARY KEY (`schoolId`);

--
-- Indexes for table `schooluploadeddocuments`
--
ALTER TABLE `schooluploadeddocuments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`userName`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `zonelofficestaff`
--
ALTER TABLE `zonelofficestaff`
  ADD PRIMARY KEY (`NIC`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminuploadeddocuments`
--
ALTER TABLE `adminuploadeddocuments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `schooluploadeddocuments`
--
ALTER TABLE `schooluploadeddocuments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
