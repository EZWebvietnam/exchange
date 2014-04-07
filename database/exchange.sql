-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2014 at 12:16 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exchange`
--

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
('05e0019a3051ae05172094aed7cae52d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396865758, ''),
('0bdb63d038a3af8dcbad28d7b181f6c8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396864893, ''),
('0ecdfcb290dba6524ffbebde82bfa31e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396863617, ''),
('10cf3343c199c93647df253d0539e21c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396865720, ''),
('123382d021f8ffee96c7e75f883bdea0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396863431, ''),
('1586b22f3451972b86bcb2076f03f5d8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396863793, ''),
('1b6ac682c98e40c7e02ee7b649e675de', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396865598, ''),
('244a602e8eabe3dc46b1e082cbc7f3ba', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396865178, ''),
('280a17f012a07d91e429d6d2bdd7eec1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396864443, ''),
('31091f168840631af92e6c7a7c2ecdff', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396865743, ''),
('3226c6231b7eb5c475f6c0e896732b11', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396865473, ''),
('34cfc5dd1f9fb01a862258b75f782541', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396865758, ''),
('3a06fffcff2621141415b1ad4acefcba', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396865716, ''),
('3c0f1c958ea746f894e4e740a93c582a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396864907, ''),
('420244143c1684905d0e7f37dec345af', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396864357, ''),
('49aadd272b1f594d30669cadf90723b8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396863800, ''),
('4dd8b0b9ae37e4e69011b86919c5d9b0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396865278, ''),
('4f2c81c0f2b1695ab1fdbdae5d6c959f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396863258, ''),
('542a5e26936ef803cf576d7be728307a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396864886, ''),
('56a8877294fed2360549d12ace34ec58', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396863256, ''),
('574f46cdf9cd20e2c2c30947965b054d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396865423, ''),
('5abd9aca9ba75e30f9e84f60dd8d6b61', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396864497, ''),
('613821604e99c97c48e86be39f673746', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396864714, ''),
('62c0b68a41a0ff7e2ffc5a7f74f02399', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396864917, ''),
('6425d104dfc63ab5872aff68e8db5651', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396863760, ''),
('655e00224d48dd12650ef0f0fcc3cdc8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396865495, ''),
('68fb86fc5793173fe298ab9c42b7c3c4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396863779, ''),
('6960c276375d31c55067aae063d442ef', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396865752, ''),
('6c5ac005b6e37aecb4c5d98020c61c64', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396864481, ''),
('6f7760a90a570384c219ba297b2fb3c8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396864101, ''),
('71029197988873d8d424cb9cda7573fc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396863871, ''),
('750ab30f56296b8e7a2951766e58fadc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396865278, ''),
('75eb196c79f5d3053e2840dbef79549e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396864179, ''),
('77b1fd6f882a8c81eecf9a9f1b23cc20', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396863876, ''),
('787b79c501bd71f717641762971c7864', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396865472, ''),
('78db0769695a73ea379638d1d123e27b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396864459, ''),
('7c32a0cfc9713f389f472a0a547cbd89', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396865392, ''),
('7ca18cc6599b042c503ce92eaf12eedd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396865495, ''),
('8522f53c85d551c74710483a8b084953', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396864521, ''),
('896e9fe64f98d38a75b1974abbfa9a6e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396864207, ''),
('89c6711bb062037678a7ea965929b6a1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396865258, ''),
('903ca0bd16513b43d061e582b79f7b08', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396863875, ''),
('91f7d4897a727f32fa3ffd1e1305f0a1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396864400, ''),
('922eb1ca9ae10ecabcd225b534789e0a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396863423, ''),
('9a18c084c2307f0c9944ce88597146b0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396864905, ''),
('9f382172e75f114deffe48c390d3de17', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396864764, ''),
('a1649d6123a84500a1a0b3bf4159cb8d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396865609, ''),
('a3eec947473e4a3c503f29f33e9dfaab', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396865728, ''),
('a801da9fc34a5dbe1d30a15e970b1b4b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396864735, ''),
('af61df57e35f4762fbbd3f2790087cb8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396864521, ''),
('b357788d90e2ea8dc177f46f55c6d97c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396864439, ''),
('b6c59086b895c3f5ef836a2c7a204533', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396864463, ''),
('b805207caad9bb651b016f1c68bb1123', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396865501, ''),
('bc563999db18c0ad80a3655dd69e5751', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396865541, ''),
('bd08f2b34c5e0aa41d015e6dab6af2d6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396864360, ''),
('bd7408f202e5ce38a578a937ca692275', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396863798, ''),
('c7c510abfb477a428298c329c56603ed', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396864396, ''),
('c8fa2f0d661e4a0c432218b24662a8d7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396863783, ''),
('d009b527662dcb6448a77c99a6f37772', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396864764, ''),
('d42f229384b2a0ae650462e80c741579', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396863723, ''),
('e451348bbb96f4d857eb9143e0513f1f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396864085, ''),
('e6b4ae81167c855216667d000467f139', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396865749, ''),
('ecfedbea2da54a8d668e19acf3981bff', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396865332, ''),
('f046e18b68c16defa1003a3c87373862', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396863247, ''),
('f37a2275abedacd187e94490a4b51922', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396864706, ''),
('f9dbb52f8562b0626966967d06c82740', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396864739, ''),
('fc98b7be52e39105744527de6e16fff2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1396864889, '');

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
-- Table structure for table `teller_log`
--

CREATE TABLE IF NOT EXISTS `teller_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `transaction_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `money` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bank` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bank_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` int(11) NOT NULL,
  `exp_date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `admin_acept` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `teller_log`
--

INSERT INTO `teller_log` (`id`, `id_user`, `transaction_id`, `password`, `money`, `bank`, `bank_id`, `create_date`, `exp_date`, `status`, `admin_acept`) VALUES
(7, 4, 'WP1C5R', '791f686674241e6bc95d042943a964f3', '1000000', 'Vietcombank', '123456', 1396863875, '2014-04-14 11:54:35', 1, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `trans_log`
--

INSERT INTO `trans_log` (`id`, `id_user`, `money`, `transaction_id`, `password`, `account_id`, `create_date`, `exp_date`, `status`) VALUES
(1, 4, 500000, '0', '', '123456', 1394614188, '2014-03-12 09:49:48', 0),
(6, 4, 1000000, 'HKKE4ILV5S', '$2a$08$KGR8WjOosygn2HN29O9IeuV72paT6p/rlS8IV5SFvYD1KdO4t2A4u', '123456', 1394642677, '2014-03-12 05:54:37', 0),
(7, 4, 10000, '0LL0P9504R', '$2a$08$8YrDSQn7TLEnL3SgFupvcOXbifSc9KAk63hAbofP6vP35ttx0CESe', '123456', 1394645825, '2014-03-12 06:47:05', 0),
(8, 4, 1000000, 'E2GML3UH2P', '92f25236666171e4dcd2abd9ce79b92b', '123456', 1394645982, '2014-03-12 06:49:42', 1),
(9, 4, 1000000, 'B8BFIOL1ME', '3e98f65b6322fa040c749b736c72db1a', '123456', 1396863257, '2014-04-07 11:44:17', 0);

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
