-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2014 at 07:32 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exchange`
--
CREATE DATABASE IF NOT EXISTS `exchange` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `exchange`;

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE IF NOT EXISTS `card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `exp_date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `code`, `price`, `exp_date`, `status`) VALUES
(1, 'XXZ123456', 1000000, '2014-03-12 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `card_log`
--

CREATE TABLE IF NOT EXISTS `card_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_card` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('0318233b179aaceb3ea19ecc4d06d524', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394951127, ''),
('033f767449f978a8e4c9cd0453a45caf', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947533, ''),
('0db9a2448fbcec04f96347f2cf2d4178', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394951181, ''),
('0f10be04899314128a35f1da379d4276', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394949409, ''),
('11049b9ea3e7c9fe8b47802eef1027e0', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394949083, ''),
('110e6c9c5b57eeef8e78987384bdc3c5', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950850, ''),
('112e7d41e29fc6867882879edf25d7f5', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950395, ''),
('1178051d4363a3afb13effd536f01bc1', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394948914, ''),
('14e1bc3a08ca89051a43d68bd4c81d40', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947729, ''),
('14ee2412d2145a8c1e8ca421c7901d95', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950805, ''),
('15a1ed162c3a787a0548cc1c9de2ec49', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394949788, ''),
('1619d5ecc4a9fd5bc35b043d193391b3', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950816, ''),
('170fce3caa8fa894a8ee4e653e7254a3', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394951328, ''),
('18739c694b14baa1060dea0c64bd1cfc', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947657, ''),
('19ecba99ebec60231ec7a245d65d15e5', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947621, ''),
('1fbcdd6d9551b6b2a3ba8738b3e6ab75', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394949031, ''),
('2027fe1956bd3e63df6aa4efaa710e41', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394948863, ''),
('21835f0df50f8bc9ca7f4ce282895f19', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950005, ''),
('227416284120f94011c3563642f5ed97', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947500, ''),
('23201a376cc99bdcd4bb9141977a1994', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394949154, ''),
('2727265481440a6cf9f449da4f1fa3bf', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394951320, ''),
('276df791738f9b361fcf1bb62528a58f', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394948887, ''),
('29dafe2353931f6a573bd9233abe84c8', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950191, ''),
('2df1877f20ebb8ae8814700fb7e209f8', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947898, ''),
('2eedd2a597ab76d2d2c834abfb900b8a', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394948976, ''),
('2ff0755c9f73beb9265a1fa0302c362a', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947629, ''),
('3103fdf249f9b66fe570bc197e62f679', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394949743, ''),
('349f910943ac8f0e337ab9db8b21623c', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947535, ''),
('35fd2be95870f15333dd9ded4edf8eb4', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394951030, ''),
('38849b29ce69b9acf50f23ad87ca2a10', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950413, ''),
('3b7a37aef0414c1be353c55f45ea4d73', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947890, ''),
('3bc98609e65dcc9167f08bb4b32b99b9', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950418, ''),
('3cba9f7e9c61f686a57bb3ad1a43e1be', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950152, ''),
('421f5d8fb6231cb1a9b796e7b1e85b02', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394949289, ''),
('49839296534035bfed1a2409d0650c17', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394948045, ''),
('4a8b370753e1d61717ca5547109e4f95', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394949310, ''),
('4abae39dec5a8eb7612027578384cc39', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947499, ''),
('4b9823ff66144733324df83a1dabb429', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947499, ''),
('4c0b1a26a2163a3a9aaf9f104030f8eb', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950082, ''),
('4d9ac093fc3bb1163d1bb144f77ae741', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947805, ''),
('4df54938039c0803fa1b56c769ff4ef3', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947620, ''),
('537b31bde873a9372838ccc1fa079da4', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947681, ''),
('53e788192920676e1468a874a9d845e2', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394949331, ''),
('54bbe4e919ffef9da2640c3ddb443974', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394948663, ''),
('5659da533b5a6f027e4c621ff9652485', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950330, ''),
('5788bf9fe4d77a01a81e50498d8c4e25', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947680, ''),
('5b1e8e1b47f83202c3cd35754845e26b', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394951225, ''),
('5cf4ddbb697f4873ed9e12a85245ce85', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394949265, ''),
('5d69fe08a7ecf23aa8f900a7886533b9', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950810, ''),
('63df6ffadee83adf6128489b66ba3c75', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950419, ''),
('66660c7802ffcc1ae0c71edc7a80e716', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394951331, ''),
('66662100445196c8a58dc30d5bed3742', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950356, ''),
('678fc35c15a7b2db996a2574f8fd11f1', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947630, ''),
('687165790a1bb7b34f7fcd822506c077', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947771, ''),
('6c776515acf88c47e43c60a9f9c4dab9', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950059, ''),
('6d2d2a1a91f30d908010830c1d62a9f8', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394948840, ''),
('6de6057404a22a60f1cefc882e24681c', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950034, ''),
('6eee1b53bc08f1b46b111941d21ce4e8', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947534, ''),
('74cdb2128dc660849c46440bc0dc80a1', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950329, ''),
('79d9119abc4ac57a0bbcfa5c5d430098', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950094, ''),
('82107c143b7205790152313291a6d335', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394948105, ''),
('84e1d21e7ff3b7b9a25256b21ba9049b', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394949665, ''),
('8739e4c20785e3f10224115bb5dfcafd', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394949405, ''),
('88a27611a1abcbe2d5460428286b39db', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947926, ''),
('8cdf368921c01100a46964052769f199', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394951035, ''),
('8d30dd36b11884aac38ab8e8b6b0d3b2', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394949135, ''),
('9107e4f5e63581212c8e8941c525afc5', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947499, ''),
('91344c9a6c44ee66f4f4d404247ebb42', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950858, ''),
('91580c00f4bb04d86435e45981b65b53', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947657, ''),
('9578ea08544cc4522cd21da4ad450de0', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947681, ''),
('95f316e3a96b25ae7c63e868c5679e81', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950045, ''),
('964bb29f414f37b285676178926f2ced', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947630, ''),
('972061ad43a0b69416c9659eddc50dfb', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950183, ''),
('985a3b558f0ace340b4a03044f1fc458', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394951164, ''),
('9a12b0a993d7a1ae6fc0db8a61e81689', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947656, ''),
('9e6fa97b548de39728d09a7c725bba40', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950391, ''),
('a04a6dc72b00a133f67d11fbc5bd541d', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947729, ''),
('a110622e01670023cbd5fc50bb785930', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950808, ''),
('a16fbcd4ddd58bf9ab5087e3d769efa8', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947729, ''),
('a38d373fcc1586806458b95ca1a3b838', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950858, ''),
('a56dbbe008e63b57300a6639c66e77d5', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394951190, ''),
('a84efa4588cd7f57a361c6d68433516c', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950370, ''),
('aa749ec6f9a1aeb02b15c631b02cd1db', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947771, ''),
('ab61f86d0041c7f11e77b69c4634636b', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394949252, ''),
('ad13b2a06e655aa380bc7f995f121893', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950200, ''),
('b371486d860525a0ac376e3e3dc54019', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950816, ''),
('c59a06ed8cd1669427dc2be290cff906', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950090, ''),
('c7cc98d0f85d10e358e7840227c6b12e', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394949857, ''),
('c882e96fde403e18110225b191278a50', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947491, ''),
('c973b525bfdc99426dc67226bdc77861', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394951260, ''),
('caebab80628e8d77c0df949c02d8fa61', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950324, ''),
('cb1cff382f683cb270e4d3975ecc723e', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947484, ''),
('cb70f4a281ca642847ecd5ee5d95bca8', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394948700, ''),
('cbe071570c263173d298ab7d37913d48', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394948999, ''),
('cdffe2bdbdb6b52aeb4ef6038eaa667f', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394948892, ''),
('d0e0f4fba5bfff8966917a63e60eebf5', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394951216, ''),
('d144e0e71dba9670f746725a4bf717c6', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394951229, ''),
('d2b234889263eb902972959671ba4f7a', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950851, ''),
('d452229d964b943570e4f0530947206b', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394949360, ''),
('d575d27c868ea021c1c9f3ca32022339', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947491, ''),
('d78cfea8895bc4b3eb2ae7d0b54f533f', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950424, ''),
('dc4c77754598e829cbf633872e36181c', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947536, ''),
('dca9a26c0ec50b542925fd7160194c48', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394951214, ''),
('e161f0df99bfca94e6f597e60d8659eb', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394951225, ''),
('e5af3ce865252f9c9d7da8b6ed749d1b', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950324, ''),
('e6487f60016000e673212eed79ddb714', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394951322, ''),
('e69918eff007e73b29a874ab33273335', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947920, ''),
('e7921614746cfb3f9d28a682b1821c84', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394948937, ''),
('eb3360f1f6c41d8a27f3f3f20da2ea04', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950373, ''),
('eca16f53e17029fdb4fa6cc5a9fc8011', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394948955, ''),
('ed039f909a5d7020cde34ad9cbf2d415', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394947621, ''),
('f73f5229a2050d18161633f6328046ae', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950082, ''),
('fa8f16d2b429f1685926c208f4324d56', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950398, ''),
('fcd3692e8a260de6f8bea2b06e8d7cd1', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950085, ''),
('fdb6815b413feda8a6c5cbef76cf4a9a', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394948439, ''),
('fe3598844ae0d6d80c40b736082ca090', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394950202, ''),
('fed181812e48ca3bc6a68a66f5323b37', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394951218, '');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `log_system`
--

CREATE TABLE IF NOT EXISTS `log_system` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `money` int(11) NOT NULL,
  `action` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `log_system`
--

INSERT INTO `log_system` (`id`, `id_user`, `money`, `action`, `create_date`) VALUES
(1, 4, 100000000, 0, 1394950816),
(2, 4, 20000000, 1, 1394950858),
(3, 4, 120000000, 0, 1394951225);

-- --------------------------------------------------------

--
-- Table structure for table `trans_log`
--

CREATE TABLE IF NOT EXISTS `trans_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `money` int(11) NOT NULL,
  `transaction_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `account_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` int(11) NOT NULL,
  `exp_date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `trans_log`
--

INSERT INTO `trans_log` (`id`, `id_user`, `money`, `transaction_id`, `password`, `account_id`, `create_date`, `exp_date`, `status`) VALUES
(1, 4, 500000, '0', '', '123456', 1394614188, '2014-03-12 09:49:48', 0),
(6, 4, 1000000, 'HKKE4ILV5S', '$2a$08$KGR8WjOosygn2HN29O9IeuV72paT6p/rlS8IV5SFvYD1KdO4t2A4u', '123456', 1394642677, '2014-03-12 05:54:37', 0),
(7, 4, 10000, '0LL0P9504R', '$2a$08$8YrDSQn7TLEnL3SgFupvcOXbifSc9KAk63hAbofP6vP35ttx0CESe', '123456', 1394645825, '2014-03-12 06:47:05', 0),
(8, 4, 1000000, 'E2GML3UH2P', '92f25236666171e4dcd2abd9ce79b92b', '123456', 1394645982, '2014-03-12 06:49:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `full_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_bin NOT NULL,
  `address` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `birthday` varchar(255) COLLATE utf8_bin NOT NULL,
  `img` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT '3',
  `login_id` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `total_like` int(11) NOT NULL,
  `account_number` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `phone`, `address`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`, `birthday`, `img`, `role`, `login_id`, `total_like`, `account_number`) VALUES
(4, 'GiangBeo', '', '', '', '$2a$08$YrmDT.HFRN8WdTUYzaFPg.BLW4iJa7caEUHlkyAmK1KdQ/jyZzURG', 'nguyentruonggiang91@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2014-03-16 07:12:10', '2014-03-10 08:23:33', '2014-03-16 06:12:10', '', '', 2, '', 0, '123456'),
(12, 'BeoBeBoi', '', '', '', '$2a$08$ZIfSIMdoasUj2qvnKoY7.OnL13Uh0omde.8It3yyeSd8wYr/MR7lS', 'giangbeoit@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-03-13 17:13:47', '2014-03-13 16:13:59', '', '', 2, '', 0, '3168954377894');

-- --------------------------------------------------------

--
-- Table structure for table `user_autologin`
--

CREATE TABLE IF NOT EXISTS `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`key_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_blance`
--

CREATE TABLE IF NOT EXISTS `user_blance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `blance` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_blance`
--

INSERT INTO `user_blance` (`id`, `id_user`, `blance`) VALUES
(1, 4, 256000000),
(2, 12, 12000000);

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE IF NOT EXISTS `user_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `country`, `website`) VALUES
(2, 4, NULL, NULL),
(3, 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_staff` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `name`, `is_staff`) VALUES
(1, 'Administrator', 1),
(2, 'Staff', 1),
(3, 'Member', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
