-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2015 at 11:38 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `amit2`
--

-- --------------------------------------------------------

--
-- Table structure for table `articlehom`
--

CREATE TABLE IF NOT EXISTS `articlehom` (
  `nam` varchar(250) DEFAULT NULL,
  `ema` varchar(250) DEFAULT NULL,
  `non` varchar(250) DEFAULT NULL,
  `quantity` varchar(250) DEFAULT NULL,
  `flag1` varchar(250) DEFAULT NULL,
  `article` varchar(250) DEFAULT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `typeofwork` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articlehom`
--

INSERT INTO `articlehom` (`nam`, `ema`, `non`, `quantity`, `flag1`, `article`, `address`, `city`, `mobile`, `typeofwork`) VALUES
('a', 'amitsachdeva@gmail.com', 'on', '1', '1', '', '', '', '', ''),
('a', 'amitsachdeva@gmail.com', 'on', '2', '1', '', '', '', '', ''),
('Amit Sachdeva', 'amitsachdeva@gmail.com', 'on', '2', '1', '', '', '', '', ''),
('Amit Sachdeva', 'amitsachdeva@gmail.com', 'on', '1', '1', '', '', '', '', ''),
('gaga', 'sachdeva@gmail.com', 'Akash Foundation', '2', '1', '', '', '', '', ''),
('gaga', 'sachdeva@gmail.com', 'Amit Foundation', '2', '1', '', '', '', '', ''),
('hello', 'hello@gmail.com', 'Akash Foundation', '3', '1', 'as', '', '', '', ''),
('hello', 'hello@gmail.com', 'Amit Foundation', '3', '1', 'a', '', '', '', ''),
('hello', 'hello@gmail.com', 'Appa Foundation', '3', '1', 's', '', '', '', ''),
('hello', 'hello@gmail.com', 'Baba Foundation', '3', '1', 'd', '', '', '', ''),
('gaga', 'snfedsasachdeva@gmail.com', 'Akash Foundation', '2', '1', 'kjhg', 'f', 'd', '9815888556', 'dtn'),
('gaga', 'snfedsasachdeva@gmail.com', 'Amit Foundation', '3', '1', 'bnbfd', 'f', 'd', '9815888556', 'dtn'),
('AKITIT', 'anuj@gmail.com', '', '5', '0', 'a', 'ngt je', 'Faridkot', '9765143212', 'adv'),
('chirag', 'chirag@female.com', 'Akash Foundation', '2', '1', 'adfd', 'chirag', 'chirag', '9815888556', 'dtn'),
('chirag', 'chirag@female.com', 'Amit Foundation', '3', '1', 'hgfd', 'chirag', 'chirag', '9815888556', 'dtn'),
('chirag', 'chirag@female.com', 'Appa Foundation', '5', '1', 'sdfgh', 'chirag', 'chirag', '9815888556', 'dtn');

-- --------------------------------------------------------

--
-- Table structure for table `colourcode`
--

CREATE TABLE IF NOT EXISTS `colourcode` (
  `cnt` int(11) DEFAULT NULL,
  `cc` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colourcode`
--

INSERT INTO `colourcode` (`cnt`, `cc`) VALUES
(2, '#FF0000'),
(3, '#00FF00'),
(4, '#0000FF'),
(5, '#FFFF00'),
(6, '#00FFFF'),
(7, '#FF00FF'),
(8, '#C0C0C0'),
(9, '#808080'),
(10, '#800000'),
(11, '#808000'),
(12, '#008000'),
(13, '#800080'),
(14, '#008080'),
(15, '#000080'),
(16, '#000000'),
(17, '#FFFFFF'),
(18, '#FF0000'),
(19, '#00FF00'),
(20, '#0000FF'),
(21, '#FFFF00'),
(22, '#00FFFF'),
(23, '#FF00FF'),
(24, '#C0C0C0'),
(25, '#808080'),
(26, '#800000'),
(27, '#808000'),
(28, '#008000'),
(29, '#800080'),
(30, '#008080'),
(31, '#000080'),
(0, '#900'),
(1, '#00C');

-- --------------------------------------------------------

--
-- Table structure for table `donationaccept`
--

CREATE TABLE IF NOT EXISTS `donationaccept` (
  `ngoemail` varchar(200) DEFAULT NULL,
  `manemail` varchar(200) DEFAULT NULL,
  `typeofdon` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `mobile` varchar(200) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `thing` varchar(100) DEFAULT NULL,
  `quantity` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donationaccept`
--

INSERT INTO `donationaccept` (`ngoemail`, `manemail`, `typeofdon`, `name`, `mobile`, `address`, `thing`, `quantity`) VALUES
('amitfoundation@gmail.com', 'amitsachdeva@gmail.com', 'money', 'Amit Sachdeva', '8447136634', 'Valmiki Chownk,Near Civil Dispensary,Surgapuri', '200000', ''),
('amitfoundation@gmail.com', 'burhan@gmail.com', 'money', 'Burhan', '9815888556', 'Burhan plaza,national highway', '9000', ''),
('amitfoundation@gmail.com', 'chawd@gmail.com', 'article', 'Rohit', '9765143212', 'Gaferi House,1233 Area', 'Washing Machine', '3'),
('appafoundation@gmail.com', 'anubhav@gmail.com', 'money', 'Anubhav Keshav', '9765143212', 'Juagar Showroom,1234 Appartment', '8977', ''),
('sadlkmsldks@gmail.com', 'prince@gmail.com', 'money', 'Prince Tripathi', '8989123213', 'Heran Road,123 House,Near GB plaza', '40000', ''),
('sadlkmsldks@gmail.com', 'Aggarwal@gmail.com', 'article', 'Anuj', '8769123144', 'Indirapuram,Kala Pathar', 'Opera', '1'),
('smilefoundation@gmail.com', 'sachdeva@gmail.com', 'article', 'Paras Sachdeva', '7812354642', 'Hetyam buglow', 'Car', '2'),
('akashfoundation@gmail.com', 'saxena@yahoo.com', 'article', 'Anirudh', '9023646561', 'Saxena House of Dreams', 'plane', '1'),
('akashfoundation@gmail.com', 'anuj@gmail.com', 'article', 'AKITIT', '9765143212', 'ngt je', 'a', '5'),
('appafoundation@gmail.com', 'anuj@gmail.com', 'article', 'AKITIT', '9765143212', 'ngt je', 'a', '5');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `nam` varchar(200) DEFAULT NULL,
  `ema` varchar(300) DEFAULT NULL,
  `suggest` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`nam`, `ema`, `suggest`) VALUES
('Amit Sachdeva', 'amitsachdeva@gmail.com', 'THANKS FOR BEING HERE'),
('amit', 'smilefoundation@gmail.com', 'jhkhk');

-- --------------------------------------------------------

--
-- Table structure for table `importantdate1`
--

CREATE TABLE IF NOT EXISTS `importantdate1` (
  `date1` date DEFAULT NULL,
  `event` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `importantdate1`
--

INSERT INTO `importantdate1` (`date1`, `event`) VALUES
('2015-10-01', 'International day of the Older person'),
('2015-10-02', 'International day of the Older person'),
('2015-10-03', 'World Habitat Day World nature day'),
('2015-10-04', 'World Animal Welfare Day'),
('2015-10-05', 'World Teachers day,Indian Air Force Day'),
('2015-10-08', 'World Post Office day'),
('2015-10-09', 'National Post Day'),
('2015-10-10', 'International girl child day'),
('2015-10-11', 'World Arthritis day'),
('2015-10-12', 'UN International Day for National disaster reduction'),
('2015-11-12', 'Jawaharlal Nehru birthday'),
('2015-12-10', 'Human Right Day'),
('2015-10-13', 'World Standards Day'),
('2015-10-14', 'World White Cane Day'),
('2015-10-15', 'World Food Day'),
('2015-10-16', 'International day for the eradication of poverty'),
('2015-10-17', 'World statistics day'),
('2015-10-20', 'UN Day, World development information Day'),
('2015-10-24', 'World Thrift Day'),
('2015-11-01', 'World vegan day'),
('2015-11-05', 'World Radiography day'),
('2015-11-09', 'World services day'),
('2015-11-14', 'Children Day in India'),
('2015-11-16', 'International day for Endurance'),
('2015-11-17', 'World Student day'),
('2015-11-18', 'World Adult day'),
('2015-11-19', 'World Citizen day'),
('2015-11-20', 'Universal children day'),
('2015-11-29', 'International Day of Solidarity with Palestinian People'),
('2015-12-01', 'World Aids Day'),
('2015-12-02', 'International day of abolition of slavery'),
('2015-12-03', 'International day of People with disabilities'),
('2015-12-05', 'International volunteer day for economic and social development'),
('2015-12-07', 'International civil aviation day'),
('2015-12-09', 'The International day against corruption'),
('2015-12-14', 'International Energy day'),
('2015-12-18', 'International Migrants day'),
('2015-12-23', 'Kisan Divas Farmer Day'),
('2015-12-29', 'International Bio-diversity day');

-- --------------------------------------------------------

--
-- Table structure for table `makeevent1`
--

CREATE TABLE IF NOT EXISTS `makeevent1` (
  `ema` varchar(300) DEFAULT NULL,
  `topic` varchar(300) DEFAULT NULL,
  `dateofevent` date DEFAULT NULL,
  `address` varchar(3000) DEFAULT NULL,
  `mobile` varchar(300) DEFAULT NULL,
  `descript` varchar(3000) DEFAULT NULL,
  `non` varchar(300) DEFAULT NULL,
  `fileimage1` varchar(3000) DEFAULT NULL,
  `mobile2` varchar(20) DEFAULT NULL,
  `city2` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makeevent1`
--

INSERT INTO `makeevent1` (`ema`, `topic`, `dateofevent`, `address`, `mobile`, `descript`, `non`, `fileimage1`, `mobile2`, `city2`) VALUES
('amitfoundation@gmail.com', 'Donate Money', '2015-11-21', 'chandi Chownk', '9814937684', 'Come please', 'Amit Foundation', '', '8522222222', 'Delhi'),
('amitfoundation@gmail.com', 'Dream Day', '2015-12-26', 'Dream city', '8447136634', 'Come  here', 'Amit Foundation', 'chiraggf.jpg', '9871231231', 'Noida'),
('amitfoundation@gmail.com', 'asw', '2015-11-24', 'asw', '9814937684', 'asw', 'Amit Foundation', '24.jpg', '9871231231', 'asw'),
('akashfoundation@gmail.com', 'akash', '2015-11-26', 'ghazibad', '9890921123', 'ahhs', 'Akash Foundation', '240_1 (2).jpg', '9871231231', 'up'),
('appafoundation@gmail.com', 'hahah', '2015-11-21', 'ngfvdm', '9814937684', 'fgdksl', 'Appa Foundation', 'reach.jpg', '9871231231', 'hbgfvd'),
('appafoundation@gmail.com', 'hello', '2015-11-28', 'gfds', '8527784457', 'gfd', 'Appa Foundation', 'register.jpg', '8522222222', 'hgfds');

-- --------------------------------------------------------

--
-- Table structure for table `makefile1`
--

CREATE TABLE IF NOT EXISTS `makefile1` (
  `ema` varchar(400) DEFAULT NULL,
  `non` varchar(400) DEFAULT NULL,
  `filefield1` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makefile1`
--

INSERT INTO `makefile1` (`ema`, `non`, `filefield1`) VALUES
('amitfoundation@gmail.com', 'Amit Foundation', 'abstract-459-wallpapers-part-21.jpg'),
('smilefoundation@gmail.com', 'Smile Foundation', '11393098_1653825014848224_5725076862823291441_n.jpg'),
('smilefoundation@gmail.com', 'Smile Foundation', '22_1 - Copy - Copy - Copy.jpg'),
('smilefoundation@gmail.com', 'Smile Foundation', '24.jpg'),
('appafoundation@gmail.com', 'Appa Foundation', '13 - Copy.jpg'),
('appafoundation@gmail.com', 'Appa Foundation', '240_2.jpg'),
('appafoundation@gmail.com', 'Appa Foundation', '11937947_901986763223220_1930774800_n.jpg'),
('appafoundation@gmail.com', 'Appa Foundation', 'reach.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `makevideo1`
--

CREATE TABLE IF NOT EXISTS `makevideo1` (
  `ema` varchar(400) DEFAULT NULL,
  `non` varchar(400) DEFAULT NULL,
  `fileToUpload1` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makevideo1`
--

INSERT INTO `makevideo1` (`ema`, `non`, `fileToUpload1`) VALUES
('amitfoundation@gmail.com', 'Amit Foundation', 'temp (360p).mp4');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `ngoname` varchar(250) DEFAULT NULL,
  `ngotype` varchar(250) DEFAULT NULL,
  `otherngo` varchar(250) DEFAULT NULL,
  `message` varchar(4000) DEFAULT NULL,
  `fileimage1` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`ngoname`, `ngotype`, `otherngo`, `message`, `fileimage1`) VALUES
('Smile Foundation', 'single', 'Akash Foundation', 'HELLO EVERYONE', '11937947_901986763223220_1930774800_n.jpg'),
('Smile Foundation', 'single', 'Amit Foundation', 'HELLO MGKMF', '12-fb_blooddonate.jpg'),
('Smile Foundation', 'single', 'Appa Foundation', 'hnfscmkx', '11940372_901986329889930_325121626_n.jpg'),
('Smile Foundation', 'single', 'Appa Foundation', 'hnfscmkx', '11940372_901986329889930_325121626_n.jpg'),
('Smile Foundation', 'group', 'Akash Foundation', 'HELLO PARAS', 'aboutus.jpg'),
('Smile Foundation', 'group', 'Amit Foundation', 'HELLO PARAS', 'aboutus.jpg'),
('Smile Foundation', 'group', 'Akash Foundation', 'HEELO H', ''),
('Smile Foundation', 'group', 'Amit Foundation', 'HEELO H', ''),
('Smile Foundation', 'group', 'Appa Foundation', 'HEELO H', ''),
('Smile Foundation', 'single', 'Akash Foundation', 'jgjnvjfdn', ''),
('Smile Foundation', 'single', 'Akash Foundation', 'jgjnvjfdn', '');

-- --------------------------------------------------------

--
-- Table structure for table `moneyhom`
--

CREATE TABLE IF NOT EXISTS `moneyhom` (
  `email` varchar(300) DEFAULT NULL,
  `name` varchar(300) DEFAULT NULL,
  `address` varchar(3000) DEFAULT NULL,
  `city` varchar(300) DEFAULT NULL,
  `mobile` varchar(300) DEFAULT NULL,
  `money1` varchar(300) DEFAULT NULL,
  `flag1` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moneyhom`
--

INSERT INTO `moneyhom` (`email`, `name`, `address`, `city`, `mobile`, `money1`, `flag1`) VALUES
('amitsachdeva@gmail.com', 'Amit Sachdeva', 'Valmiki Chownk,Near Civil Dispensary,Surgapuri', 'Kotkapura', '8447136634', '200000', 0),
('burhan@gmail.com', 'Burhan', 'Burhan plaza,national highway', 'Indore', '9815888556', '9000', 0),
('anubhav@gmail.com', 'Anubhav Keshav', 'Juagar Showroom,1234 Appartment', 'Lucknow', '9765143212', '8977', 0),
('prince@gmail.com', 'Prince Tripathi', 'Heran Road,123 House,Near GB plaza', 'Haridwar', '8989123213', '40000', 0),
('prince@gmail.com', 'Prince Tripathi', 'Heran Road,123 House,Near GB plaza', 'Haridwar', '8989123213', '40000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ngodonation`
--

CREATE TABLE IF NOT EXISTS `ngodonation` (
  `ngoname` varchar(250) NOT NULL,
  `dontype` varchar(250) NOT NULL,
  `otherngo` varchar(250) NOT NULL,
  `articlename` varchar(250) NOT NULL,
  `quantity` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngodonation`
--

INSERT INTO `ngodonation` (`ngoname`, `dontype`, `otherngo`, `articlename`, `quantity`) VALUES
('Smile Foundation', 'dtn', 'Akash Foundation', 'gfd', '2'),
('Smile Foundation', 'dtn', 'Amit Foundation', 'sdf', '3'),
('Smile Foundation', 'dtn', 'Appa Foundation', 'gfd', '4'),
('Smile Foundation', 'adv', '', 'fad', '34'),
('Appa Foundation', 'adv', '', 'amit', '20');

-- --------------------------------------------------------

--
-- Table structure for table `ngosign`
--

CREATE TABLE IF NOT EXISTS `ngosign` (
  `non` varchar(300) NOT NULL,
  `ema` varchar(300) NOT NULL,
  `pswd` varchar(300) NOT NULL,
  `conpswd` varchar(300) NOT NULL,
  `address` varchar(3000) NOT NULL,
  `city` varchar(300) NOT NULL,
  `pin` varchar(12) NOT NULL,
  `state` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `renu` varchar(40) DEFAULT NULL,
  `secret5` varchar(200) DEFAULT NULL,
  `date5` varchar(200) DEFAULT NULL,
  `member1` varchar(200) DEFAULT NULL,
  `mobile1` varchar(200) DEFAULT NULL,
  `member2` varchar(200) DEFAULT NULL,
  `mobile2` varchar(200) DEFAULT NULL,
  `member3` varchar(200) DEFAULT NULL,
  `mobile3` varchar(200) DEFAULT NULL,
  `obj` varchar(4000) DEFAULT NULL,
  `date1` varchar(200) DEFAULT NULL,
  `poe1` varchar(200) DEFAULT NULL,
  `obj1` varchar(4000) DEFAULT NULL,
  `date2` varchar(200) DEFAULT NULL,
  `poe2` varchar(200) DEFAULT NULL,
  `obj2` varchar(4000) DEFAULT NULL,
  `date3` varchar(200) DEFAULT NULL,
  `poe3` varchar(200) DEFAULT NULL,
  `obj3` varchar(4000) DEFAULT NULL,
  `website` varchar(600) DEFAULT NULL,
  PRIMARY KEY (`ema`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngosign`
--

INSERT INTO `ngosign` (`non`, `ema`, `pswd`, `conpswd`, `address`, `city`, `pin`, `state`, `mobile`, `renu`, `secret5`, `date5`, `member1`, `mobile1`, `member2`, `mobile2`, `member3`, `mobile3`, `obj`, `date1`, `poe1`, `obj1`, `date2`, `poe2`, `obj2`, `date3`, `poe3`, `obj3`, `website`) VALUES
('Akash Foundation', 'akashfoundation@gmail.com', 'akash', 'akash', 'Akash', 'akash', '121092', 'up', '9814937633', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', ''),
('Amit Foundation', 'amitfoundation@gmail.com', 'amithello', 'amithello', 'Near Civil Dispensary,Surgapuri,Muktsar Road,Valmiki Chownk', 'Kotkapura', '151204', 'Punjab', '9417029231', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', ''),
('Appa Foundation', 'appafoundation@gmail.com', 'appahello', 'appahello', 'Kok Highway,Over bridge,Yewden Chownk', 'Sirsa', '302451', 'Haryana', '8765651242', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', ''),
('Baba Foundation', 'babafoundation@gmail.com', 'babahello', 'babahello', 'Jalandhar', 'Jalandhar', '123112', 'Punjab', '8447136634', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', ''),
('Burhan Foundation', 'burhanfoundation@gmail.com', 'burhanhello', 'burhanhello', 'F-21,Gargie Road,Jawahar Chowk,Near Adesh Hospital', 'Indore', '231341', 'Madhya Pradesh', '9357588556', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', ''),
('Chirag Foundation', 'chiragfoundation@gmail.com', 'chiraghello', 'chiraghello', 'Koka Road,Giok Lane,Overflow, Near Bus Stand', 'Zira', '762123', 'Punjab', '8800662000', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', ''),
('child', 'sadlkmsldks@gmail.com', 'honey', 'honey', 'abc', 'lsklsad', '142047', 'punjab', '8527784457', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', ''),
('Smile Foundation', 'smilefoundation@gmail.com', 'smilehello', 'smilehello', 'Dehradun', 'Dehardun', '121220', 'Uttrakhand', '9815888556', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `partarticle`
--

CREATE TABLE IF NOT EXISTS `partarticle` (
  `nam` varchar(250) DEFAULT NULL,
  `ema` varchar(250) DEFAULT NULL,
  `non` varchar(250) DEFAULT NULL,
  `quantity` varchar(250) DEFAULT NULL,
  `flag1` varchar(250) DEFAULT NULL,
  `article` varchar(250) DEFAULT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `typeofwork` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partarticle`
--

INSERT INTO `partarticle` (`nam`, `ema`, `non`, `quantity`, `flag1`, `article`, `address`, `city`, `mobile`, `typeofwork`) VALUES
('a', 'amitsachdeva@gmail.com', 'on', '1', '1', '', '', '', '', ''),
('a', 'amitsachdeva@gmail.com', 'on', '2', '1', '', '', '', '', ''),
('Amit Sachdeva', 'amitsachdeva@gmail.com', 'on', '2', '1', '', '', '', '', ''),
('Amit Sachdeva', 'amitsachdeva@gmail.com', 'on', '1', '1', '', '', '', '', ''),
('gaga', 'sachdeva@gmail.com', 'Akash Foundation', '2', '1', '', '', '', '', ''),
('gaga', 'sachdeva@gmail.com', 'Amit Foundation', '2', '1', '', '', '', '', ''),
('hello', 'hello@gmail.com', 'Akash Foundation', '3', '1', 'as', '', '', '', ''),
('hello', 'hello@gmail.com', 'Amit Foundation', '3', '1', 'a', '', '', '', ''),
('hello', 'hello@gmail.com', 'Appa Foundation', '3', '1', 's', '', '', '', ''),
('hello', 'hello@gmail.com', 'Baba Foundation', '3', '1', 'd', '', '', '', ''),
('gaga', 'snfedsasachdeva@gmail.com', 'Akash Foundation', '2', '1', 'kjhg', 'f', 'd', '9815888556', 'dtn'),
('gaga', 'snfedsasachdeva@gmail.com', 'Amit Foundation', '3', '1', 'bnbfd', 'f', 'd', '9815888556', 'dtn'),
('AKITIT', 'anuj@gmail.com', '', '5', '1', 'a', 'ngt je', 'Faridkot', '9765143212', 'adv'),
('chirag', 'chirag@female.com', 'Akash Foundation', '2', '1', ' nvrjc', 'chirag', 'chirag', '9815888556', 'dtn'),
('chirag', 'chirag@female.com', 'Amit Foundation', '3', '1', 'jhgf', 'chirag', 'chirag', '9815888556', 'dtn'),
('chirag', 'chirag@female.com', 'Appa Foundation', '4', '1', 'jhgf', 'chirag', 'chirag', '9815888556', 'dtn');

-- --------------------------------------------------------

--
-- Table structure for table `partvolunteer`
--

CREATE TABLE IF NOT EXISTS `partvolunteer` (
  `nam` varchar(250) NOT NULL,
  `ema` varchar(250) NOT NULL,
  `non` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `city` varchar(250) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `non2` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partvolunteer`
--

INSERT INTO `partvolunteer` (`nam`, `ema`, `non`, `mobile`, `address`, `city`, `gender`, `non2`) VALUES
('Amit Sachdeva', 'amit@gmial.com', 'Akash Foundation', '9814937684', 'a', 'a', 'Female', 'ch'),
('Amit Sachdeva', 'amit@gmial.com', 'Amit Foundation', '9814937684', 'a', 'a', 'Female', 'ch'),
('Amit Sachdeva', 'amit@gmial.com', 'Appa Foundation', '9814937684', 'a', 'a', 'Female', 'ch'),
('AHAHASachdeva', 'amit@gmial.com', '', '9814937684', 'a', 'a', 'Male', 'adv');

-- --------------------------------------------------------

--
-- Table structure for table `php_interview_question`
--

CREATE TABLE IF NOT EXISTS `php_interview_question` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `php_interview_question`
--

INSERT INTO `php_interview_question` (`id`, `question`, `answer`) VALUES
(2, 'While trying to learn the American manual alphabet I discovered a computer method to read text as if it were being finger spelled. All one needs is a Windows word-processor (or something equivalent) and a sign-language font.\nI''m quite happy with the result and think it will interest any persons who are learning the American manual alphabet themselves. The method should also work for other manual alphabets (such as the two-handed alphabet used in the UK) should fonts ever be made for them.', 'The process is illustrated below using the Gallaudet font. You can download the Gallaudet font from the Yamada Language Center at the University of Oregon.'),
(3, 'While trying to learn the American manual alphabet I discovered a computer method to read text as if it were being finger spelled. All one needs is a Windows word-processor (or something equivalent) and a sign-language font.\nI''m quite happy with the result and think it will interest any persons who are learning the American manual alphabet themselves. The method should also work for other manual alphabets (such as the two-handed alphabet used in the UK) should fonts ever be made for them.', 'The process is illustrated below using the Gallaudet font. You can download the Gallaudet font from the Yamada Language Center at the University of Oregon.'),
(4, 'While trying to learn the American manual alphabet I discovered a computer method to read text as if it were being finger spelled. All one needs is a Windows word-processor (or something equivalent) and a sign-language font.\nI''m quite happy with the result and think it will interest any persons who are learning the American manual alphabet themselves. The method should also work for other manual alphabets (such as the two-handed alphabet used in the UK) should fonts ever be made for them.', 'The process is illustrated below using the Gallaudet font. You can download the Gallaudet font from the Yamada Language Center at the University of Oregon.'),
(5, 'While trying to learn the American manual alphabet I discovered a computer method to read text as if it were being finger spelled. All one needs is a Windows word-processor (or something equivalent) and a sign-language font.\nI''m quite happy with the result and think it will interest any persons who are learning the American manual alphabet themselves. The method should also work for other manual alphabets (such as the two-handed alphabet used in the UK) should fonts ever be made for them.', 'The process is illustrated below using the Gallaudet font. You can download the Gallaudet font from the Yamada Language Center at the University of Oregon.'),
(6, 'While trying to learn the American manual alphabet I discovered a computer method to read text as if it were being finger spelled. All one needs is a Windows word-processor (or something equivalent) and a sign-language font.\nI''m quite happy with the result and think it will interest any persons who are learning the American manual alphabet themselves. The method should also work for other manual alphabets (such as the two-handed alphabet used in the UK) should fonts ever be made for them.', 'The process is illustrated below using the Gallaudet font. You can download the Gallaudet font from the Yamada Language Center at the University of Oregon.'),
(7, 'While trying to learn the American manual alphabet I discovered a computer method to read text as if it were being finger spelled. All one needs is a Windows word-processor (or something equivalent) and a sign-language font.\nI''m quite happy with the result and think it will interest any persons who are learning the American manual alphabet themselves. The method should also work for other manual alphabets (such as the two-handed alphabet used in the UK) should fonts ever be made for them.', 'The process is illustrated below using the Gallaudet font. You can download the Gallaudet font from the Yamada Language Center at the University of Oregon.'),
(8, 'While trying to learn the American manual alphabet I discovered a computer method to read text as if it were being finger spelled. All one needs is a Windows word-processor (or something equivalent) and a sign-language font.\nI''m quite happy with the result and think it will interest any persons who are learning the American manual alphabet themselves. The method should also work for other manual alphabets (such as the two-handed alphabet used in the UK) should fonts ever be made for them.', 'The process is illustrated below using the Gallaudet font. You can download the Gallaudet font from the Yamada Language Center at the University of Oregon.'),
(9, 'While trying to learn the American manual alphabet I discovered a computer method to read text as if it were being finger spelled. All one needs is a Windows word-processor (or something equivalent) and a sign-language font.\nI''m quite happy with the result and think it will interest any persons who are learning the American manual alphabet themselves. The method should also work for other manual alphabets (such as the two-handed alphabet used in the UK) should fonts ever be made for them.', 'The process is illustrated below using the Gallaudet font. You can download the Gallaudet font from the Yamada Language Center at the University of Oregon.'),
(10, 'While trying to learn the American manual alphabet I discovered a computer method to read text as if it were being finger spelled. All one needs is a Windows word-processor (or something equivalent) and a sign-language font.\nI''m quite happy with the result and think it will interest any persons who are learning the American manual alphabet themselves. The method should also work for other manual alphabets (such as the two-handed alphabet used in the UK) should fonts ever be made for them.', 'The process is illustrated below using the Gallaudet font. You can download the Gallaudet font from the Yamada Language Center at the University of Oregon.'),
(11, 'While trying to learn the American manual alphabet I discovered a computer method to read text as if it were being finger spelled. All one needs is a Windows word-processor (or something equivalent) and a sign-language font.\nI''m quite happy with the result and think it will interest any persons who are learning the American manual alphabet themselves. The method should also work for other manual alphabets (such as the two-handed alphabet used in the UK) should fonts ever be made for them.', 'The process is illustrated below using the Gallaudet font. You can download the Gallaudet font from the Yamada Language Center at the University of Oregon.'),
(12, 'While trying to learn the American manual alphabet I discovered a computer method to read text as if it were being finger spelled. All one needs is a Windows word-processor (or something equivalent) and a sign-language font.\nI''m quite happy with the result and think it will interest any persons who are learning the American manual alphabet themselves. The method should also work for other manual alphabets (such as the two-handed alphabet used in the UK) should fonts ever be made for them.', 'The process is illustrated below using the Gallaudet font. You can download the Gallaudet font from the Yamada Language Center at the University of Oregon.'),
(13, 'While trying to learn the American manual alphabet I discovered a computer method to read text as if it were being finger spelled. All one needs is a Windows word-processor (or something equivalent) and a sign-language font.\nI''m quite happy with the result and think it will interest any persons who are learning the American manual alphabet themselves. The method should also work for other manual alphabets (such as the two-handed alphabet used in the UK) should fonts ever be made for them.', 'The process is illustrated below using the Gallaudet font. You can download the Gallaudet font from the Yamada Language Center at the University of Oregon.'),
(14, 'While trying to learn the American manual alphabet I discovered a computer method to read text as if it were being finger spelled. All one needs is a Windows word-processor (or something equivalent) and a sign-language font.\nI''m quite happy with the result and think it will interest any persons who are learning the American manual alphabet themselves. The method should also work for other manual alphabets (such as the two-handed alphabet used in the UK) should fonts ever be made for them.', 'The process is illustrated below using the Gallaudet font. You can download the Gallaudet font from the Yamada Language Center at the University of Oregon.'),
(15, 'While trying to learn the American manual alphabet I discovered a computer method to read text as if it were being finger spelled. All one needs is a Windows word-processor (or something equivalent) and a sign-language font.\nI''m quite happy with the result and think it will interest any persons who are learning the American manual alphabet themselves. The method should also work for other manual alphabets (such as the two-handed alphabet used in the UK) should fonts ever be made for them.', 'The process is illustrated below using the Gallaudet font. You can download the Gallaudet font from the Yamada Language Center at the University of Oregon.'),
(16, 'While trying to learn the American manual alphabet I discovered a computer method to read text as if it were being finger spelled. All one needs is a Windows word-processor (or something equivalent) and a sign-language font.\nI''m quite happy with the result and think it will interest any persons who are learning the American manual alphabet themselves. The method should also work for other manual alphabets (such as the two-handed alphabet used in the UK) should fonts ever be made for them.', 'The process is illustrated below using the Gallaudet font. You can download the Gallaudet font from the Yamada Language Center at the University of Oregon.');

-- --------------------------------------------------------

--
-- Table structure for table `requestevent1`
--

CREATE TABLE IF NOT EXISTS `requestevent1` (
  `eventnumber` varchar(250) DEFAULT NULL,
  `ema` varchar(300) DEFAULT NULL,
  `topic` varchar(300) DEFAULT NULL,
  `dateofevent` date DEFAULT NULL,
  `address` varchar(3000) DEFAULT NULL,
  `mobile` varchar(300) DEFAULT NULL,
  `descript` varchar(3000) DEFAULT NULL,
  `non` varchar(300) DEFAULT NULL,
  `fileimage1` varchar(3000) DEFAULT NULL,
  `mobile2` varchar(20) DEFAULT NULL,
  `city2` varchar(200) DEFAULT NULL,
  `ngoname` varchar(250) DEFAULT NULL,
  `flag1` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestevent1`
--

INSERT INTO `requestevent1` (`eventnumber`, `ema`, `topic`, `dateofevent`, `address`, `mobile`, `descript`, `non`, `fileimage1`, `mobile2`, `city2`, `ngoname`, `flag1`) VALUES
('Eve1', 'appafoundation@gmail.com', 'jhgvfcd', '2015-11-05', 'gvrfcedx', '9814937684', 'gh', 'Appa Foundation', '', '', 'gtrvfed', 'Akash Foundation', '1'),
('Eve1', 'appafoundation@gmail.com', 'jhgvfcd', '2015-11-05', 'gvrfcedx', '9814937684', 'gh', 'Appa Foundation', '', '', 'gtrvfed', 'Amit Foundation', '1'),
('Eve1', 'appafoundation@gmail.com', 'jhgvfcd', '2015-11-05', 'gvrfcedx', '9814937684', 'gh', 'Appa Foundation', '', '', 'gtrvfed', 'Appa Foundation', '1'),
('Eve4', 'appafoundation@gmail.com', 'COME', '2015-11-15', 'COMe', '9814937684', 'COME COME', 'Appa Foundation', 'search.jpg', '8522222344', 'cOME', 'Appa Foundation', '1'),
('Eve5', 'appafoundation@gmail.com', 'EVERY', '2015-11-28', 'EVERY EVERY EVERY EVERY EVERY EVERY EVERY EVERY EVERY ', '9814937684', 'HAHA HAHA HAHA HAHA HAHA HAHA', 'Appa Foundation', 'urgent.jpg', '8509422344', 'EVERY', 'Appa Foundation', '1'),
('Eve5', 'appafoundation@gmail.com', 'EVERY', '2015-11-28', 'EVERY EVERY EVERY EVERY EVERY EVERY EVERY EVERY EVERY ', '9814937684', 'HAHA HAHA HAHA HAHA HAHA HAHA', 'Appa Foundation', 'urgent.jpg', '8509422344', 'EVERY', 'Baba Foundation', '1'),
('Eve5', 'appafoundation@gmail.com', 'EVERY', '2015-11-28', 'EVERY EVERY EVERY EVERY EVERY EVERY EVERY EVERY EVERY ', '9814937684', 'HAHA HAHA HAHA HAHA HAHA HAHA', 'Appa Foundation', 'urgent.jpg', '8509422344', 'EVERY', 'Smile Foundation', '1'),
('Eve8', 'smilefoundation@gmail.com', 'JAI MATA DI', '2015-11-22', 'JAI MATA DI JAI MATA DI', '9814937684', 'WHAT WHAT WHAT WHAT WHAT WHAT ', 'Smile Foundation', 'front.jpg', '7123454321', 'JAI MATA DI', 'Akash Foundation', '1'),
('Eve8', 'smilefoundation@gmail.com', 'JAI MATA DI', '2015-11-22', 'JAI MATA DI JAI MATA DI', '9814937684', 'WHAT WHAT WHAT WHAT WHAT WHAT ', 'Smile Foundation', 'front.jpg', '7123454321', 'JAI MATA DI', 'Amit Foundation', '1'),
('Eve8', 'smilefoundation@gmail.com', 'JAI MATA DI', '2015-11-22', 'JAI MATA DI JAI MATA DI', '9814937684', 'WHAT WHAT WHAT WHAT WHAT WHAT ', 'Smile Foundation', 'front.jpg', '7123454321', 'JAI MATA DI', 'Appa Foundation', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) DEFAULT NULL,
  `name1` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name1`) VALUES
(9, NULL),
(3, 'kui');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE IF NOT EXISTS `volunteer` (
  `nam` varchar(250) NOT NULL,
  `ema` varchar(250) NOT NULL,
  `non` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `city` varchar(250) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `non2` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`nam`, `ema`, `non`, `mobile`, `address`, `city`, `gender`, `non2`) VALUES
('Amit Sachdeva', 'amit@gmial.com', 'Akash Foundation', '9814937684', 'a', 'a', 'Female', 'ch'),
('Amit Sachdeva', 'amit@gmial.com', 'Amit Foundation', '9814937684', 'a', 'a', 'Female', 'ch'),
('Amit Sachdeva', 'amit@gmial.com', 'Appa Foundation', '9814937684', 'a', 'a', 'Female', 'ch'),
('AHAHASachdeva', 'amit@gmial.com', '', '9814937684', 'a', 'a', 'Male', 'adv');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
