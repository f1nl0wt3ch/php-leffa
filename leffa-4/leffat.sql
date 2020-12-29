-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2014 at 08:15 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `leffat`
--

-- --------------------------------------------------------

create database leffat;
use leffat;
--
-- Table structure for table `leffa`
--

CREATE TABLE IF NOT EXISTS `leffa` (
`id` int(10) unsigned NOT NULL,
  `nimi` varchar(50) NOT NULL,
  `ohjaaja` varchar(50) NOT NULL,
  `vuosi` year(4) NOT NULL,
  `kesto` varchar(5) NOT NULL,
  `kuvaus` varchar(500) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `leffa`
--

INSERT INTO `leffa` (`id`, `nimi`, `ohjaaja`, `vuosi`, `kesto`, `kuvaus`) VALUES
(1, 'Muumit Rivieralla', 'Xavier Picard', 2014, '1:16', 'Niiskuneiti on haikaillut p‰‰sev‰ns‰ matkoille, niinp‰ Muumit, Niiskuneiti ja Pikku Myy p‰‰tt‰v‰t l‰hte‰ seikkailulle merelle. Henke‰salpaavan myrskyn j‰lkeen heid‰n veneens‰ p‰‰tyy Rivieralle, miss‰ he majoittuvat Le Grandin kuninkaalliseen sviittiin.'),
(2, 'Noah 3D', 'Darren Aronofsky', 2014, '2:14', 'Noah on eeppinen tarina rohkeudesta, uhrauksesta ja toivosta. Elokuvan p‰‰osassa n‰hd‰‰n Russell Crowe, ja sen ohjaa vision‰‰ri Darren Aronofsky.'),
(3, 'Mahtava Oz 3D', 'Sam Raimi', 2013, '2:10', 'Disneyn suuri seikkailu Mahtava Oz, jonka ohjauksesta vastaa Sam Raimi, kertoo siit‰, miten Ozin velho - tuo L. Frank Baumin rakastettu hahmo - oikein p‰‰tyik‰‰n Ihmemaahan.Kun arveluttavan moraalin omaava sirkuksen tusinataikuri Oscar Diggs (James Franco) tempautuu tomuisesta Kansasista v‰rikk‰‰seen Ozin ihmemaahan, h‰n ajattelee j‰ttipotin osuneen kohdalleen - maine ja mammona vain odottavat ottajaansa - kunnes h‰n tapaa kolme noitaa nimelt‰‰n Theodora (Mila Kunis), Evanora'),
(4, 'The Avengers 3D', 'Joss Whedon', 2012, '2:22', 'Marvel Studios esitt‰‰ elokuvan The Avengers, jonka kaikkien aikojen supersankarikaartissa ovat mukana Marvelin supersuositut sankarit Iron Man, Hulk, Thor, Captain America, Hawkeye ja Black Widow.'),
(5, 'Iron Sky', 'Timo Vuorensola', 2012, '1:33', 'Toinen maailmansota ei p‰‰ttynyt natsien t‰ysmittaiseen tappioon - pieni valiojoukko onnistui pakenemaan Kuuhun huippusalaisen antigravitaatioteknologian avulla. Kuun pime‰lle puolelle rakennetussa tukikohdassaan he ovat valmistelleet Nelj‰nnen Valtakunnan paluuta Maahan jo 70 vuoden ajan.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leffa`
--
ALTER TABLE `leffa`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leffa`
--
ALTER TABLE `leffa`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
