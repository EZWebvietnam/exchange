-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2014 at 05:28 PM
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
('00d3840c36253bea6e700677dd15bb00', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394554001, ''),
('016d77ffa14f6e8270d0132821a3f334', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549729, ''),
('034c6f81f0e96636459e7addd5725e54', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548865, ''),
('074abc4f8fa9ecf02517be406badaf25', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548657, ''),
('08bc207075e140d082c672e8698ac0d5', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394553308, ''),
('0d5a5aeb785d8bf0fcdbe0515f654795', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548359, ''),
('0f0d33cfa407e3f22d4e6e1dabc3382a', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394547877, ''),
('1001cabc4901c12852d60120bc13d2e3', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549739, ''),
('1340e2fbe9f0fe2b9e2e748ba2d72e43', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394553354, ''),
('14d563222d3606aa99521a01c0e0ce99', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394554949, ''),
('15ed9a73618d89f399fc720af062ca90', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549713, ''),
('181a9f9ae4aed4ecdbf01ee1472479e6', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394554626, ''),
('1b1dfb8dfc566641a8ed1c33ced7d6f2', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549462, ''),
('1b45dcbe39fec478eb2134cb4f895f25', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394547958, ''),
('1cad17bb7b6435c51fe3093e3e3b465c', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394547848, ''),
('223f1277cb1767c56c9eb92890385ba2', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548485, ''),
('25f16a28b1fee775d0714506f09b7e3e', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548765, ''),
('319493b079f7cee1b1752a6c7c392ef3', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548491, ''),
('393fc8b0f5a9f57424ec028f14196485', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394554509, ''),
('3a426af68268b43942537bf47c3146c1', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549336, ''),
('3b0d197872f38c0430d6b8440b4dafd9', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548929, ''),
('3d43175d9ecad99aa33e91ac20d92875', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548044, ''),
('3fdcf3f8211fd7c11ec1f7c5b57fa15c', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394553688, ''),
('41078b7a687d37d07ac61aee54b4e53c', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549049, ''),
('44dfeb2faff5dab06a427b06879bf011', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548823, ''),
('4820eab39880a9bbd5c4edf609fb4c48', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549732, ''),
('4d30c0ba7b0a5c907304e85ef9eac3c2', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394547992, ''),
('4da6dd2f44a131ea775d48819089814c', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548239, ''),
('4f3fcdcbbff4fb6b6e66526db42f1234', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549258, ''),
('4fb70456702b4aec25748f35c59519d4', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548433, ''),
('526c72ed813871372cdf217d11ebffff', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549143, ''),
('52d55590ad75137ea5a84bede1ed9fce', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549745, ''),
('541ad796aa712738df4c3cafd9a52bba', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549467, ''),
('54f703a5bc1c9f9a4a367d1b84703b0d', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394547911, ''),
('589f69774aaecca797724a6d0a98e40c', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549646, ''),
('5be1f4f3e5e94a15f8deaa3b3921a322', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548218, ''),
('5f14274368061d36c071deb85228eae3', '66.249.76.190', 'DoCoMo/2.0 N905i(c100;TB;W24H16) (compatible; Goog', 1394548007, ''),
('632fdec47e4550afe9e968cd63909fc4', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549586, ''),
('65f9c0fb9b69594bd7eae313eead1205', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549062, ''),
('672a955b7f6ed26f55766cc09199f8ce', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394554301, ''),
('67edadc3568e14b18d3a0836d2dadb25', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548769, ''),
('69598e33a702a2e6a45973503a24cc0c', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394554743, ''),
('69cb22379d8fddf0a9d9775c75ee2bca', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394547753, ''),
('6aed2d5a3fa0eeabf0b75ca526118812', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548265, ''),
('6b17cecf09e5bd4a618163051a57a7da', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549092, ''),
('6c628a962cee2207afae210269dbab42', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394554487, ''),
('6c88b338fd0c1e416b43b2496bafa1d4', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549721, ''),
('6ced75b203e5bae927e0d3f66c685c93', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549072, ''),
('6e16cd574c07b200a36c5cba0efc5da4', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548169, ''),
('6fa4694c20b14c2b8d65d68fd81587a0', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548380, ''),
('71f67d3086e41921f38fe8a427fc1de1', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394551994, ''),
('807c1f9808e96b1a933e4d0f75af86f7', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394553976, ''),
('84968982d515460e92e627185aad043c', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548377, ''),
('865c10feec47eb59c6f5174089962a8e', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548565, ''),
('878ba2f440b132d2b24e4eae30c258a4', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394547913, ''),
('883fd75794b389cf74f0f50edabb81ed', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548681, ''),
('891bf59063dd9a91635c3f22db2ed62f', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394554006, ''),
('91d5195b4ad3e2d8cbb505cd73fa7fbf', '66.249.76.83', 'DoCoMo/2.0 N905i(c100;TB;W24H16) (compatible; Goog', 1394549780, ''),
('936056097080abf560eef3f615ac9e17', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549098, ''),
('9585fa5102260a59f736edb379d55477', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394547902, ''),
('958a76cc753c918b53bd6dccef56a4a6', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394551985, ''),
('99e80268827d2ed2c97b46ac31a124eb', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394547797, ''),
('9a6fd07d319f6c78b1063407ada662aa', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394551994, ''),
('a2e400b9fa3f49a2cc65927d8f765128', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394554210, ''),
('a46a7624268f2a1073fdaf011f45cec8', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394547984, ''),
('a4c1795ae416c4317dc0d1937df36c6e', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549387, ''),
('a70cf9d2d553dd70bf0ccb6d5d528786', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548818, ''),
('a71946c60340fe89c14047893a6fd312', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548180, ''),
('ac6cdddce98b38df2a870c8236babd2f', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394554569, ''),
('adbaf9ba98faa37bb534b6b843994aa6', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394547800, ''),
('af6531f56087ca9cc536c898d4be94c9', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549087, ''),
('afa3076cc6339b4528004fe96d5e5778', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394554385, ''),
('b147035717435dd00a54f400420a1b9d', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549535, ''),
('b31e49cada43ff1c7c5987efa6dc610d', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394554395, ''),
('b38b0aa0cb204ff78e7350245b6255d8', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548033, ''),
('b4f6f14e2e25496b88cad92419e7e967', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549714, ''),
('b55f598bfb92ef7d8c32eb311b133898', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549145, ''),
('b7dce5c533ce60bfc6a3ce9fa464f492', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549744, ''),
('b93bba6d6f809d8691118876258ff6c0', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394547825, ''),
('b975a93e67b782d568e0c380d9b2f9f1', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549213, ''),
('ba235fac48bbca5fe252e9e06363ee93', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394547825, ''),
('bb500e828f2ef842ce23f57b75c37b23', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548246, ''),
('bb5182cb9a34dfb4d2e050d08945507d', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549729, ''),
('bd1d7589037b3ef7eb7669478a4c1618', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394553608, ''),
('bebb825d269090b86b253ef6fca8540a', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394547843, ''),
('c15b933e531f31143a76c2fafc1db4b9', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549302, ''),
('c4138b7f0feb89e462ed98f647b10f72', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394553336, ''),
('cd03ddb90782b2cc190df8da0b316d50', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394547791, ''),
('d0a78b8e2c7030478ccfe05de1989e5d', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548907, ''),
('d356bfc0757d479ffbfd56d21e6908ba', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394554294, ''),
('d610415d12e25377286a56786c63fe18', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549565, ''),
('d8fcc51bd49b18daf895bf31964dae6b', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394554470, ''),
('dc0380a9ec389908f6b1369352edbab5', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548196, ''),
('e1d517949ef7649a7f2dbf3e938e1d6d', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549092, ''),
('e1e1f3b8289ecd0c19fdbc62b07c5f52', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548924, ''),
('e2b65fe9f431c067e71ccce7e932d27d', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394554963, ''),
('e4aa7edec6562aac86e153eeb312d43e', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394554952, ''),
('e7d5935730a976755bd58a7a2193074d', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394554848, ''),
('ecd9625b38da75558127668c8cfd7fa7', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394552003, ''),
('efa5f80a3bac732533fce2d8cb870540', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548570, ''),
('f2a3dfeb3cec948a8d7c73ace466acfb', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548215, ''),
('f2f815ca64454510ee3a677d2685dbb0', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548789, ''),
('f3620430fe8fd5827c9f463f1472a772', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394554858, ''),
('f395f40c09b07ab5fff57ba9d7338e87', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394554635, ''),
('f3fe6687edbdd1192ab4c253f0dfe8a9', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549054, ''),
('f4f231e68f709d74f347b8bfd58b438a', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549721, ''),
('f755dbb7451ca61dae24c3b9bfd63c44', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394547806, ''),
('f9067ab2df24523df359bb3c02323ce8', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549465, ''),
('f909d07067075a5dd4727b6c06d99944', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549088, ''),
('faae2f67194aa667802a830ddca89427', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394548258, ''),
('fb33ab2072e01468fc2ff6867e84ab08', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549646, ''),
('fc36461679389282a1b30cdf698e9a14', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394554734, ''),
('fd03c002dd3bfee43e16a21e8fee2046', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394553275, ''),
('fd14a3ca895c1ea0b27cc7153ab5c344', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1394549587, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `transfer_log`
--

CREATE TABLE IF NOT EXISTS `transfer_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `money` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `phone`, `address`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`, `birthday`, `img`, `role`, `login_id`, `total_like`, `account_number`) VALUES
(4, 'GiangBeo', '', '', '', '$P$BGW8ACcSBDoEXjNEYjL6C9VUYqh91I0', 'nguyentruonggiang91@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2014-03-11 16:33:14', '2014-03-10 08:23:33', '2014-03-11 15:33:14', '', '', 2, '', 0, '0'),
(5, 'BeoBeBoi', '', '', '', '$P$BHbKmcRavvLHdIa/HqRuvZBuRfiaib1', 'giangbeoit@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '113.161.85.214', '2014-03-11 21:55:29', '2014-03-11 21:53:06', '2014-03-11 14:55:29', '', '', 2, '', 0, '4276346783122');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_blance`
--

INSERT INTO `user_blance` (`id`, `id_user`, `blance`) VALUES
(1, 4, 3000000);

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
(3, 5, NULL, NULL);

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
