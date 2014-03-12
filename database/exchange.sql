-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2014 at 07:50 PM
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
('04e29cfdc54d7b4473e5c8a595cf645c', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645854, ''),
('0617836be0735088947812992bea84c3', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645514, ''),
('08dcc03d281ea0307206a8e8483d6c3f', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394644642, ''),
('0928c9ad6abe1990741e0b4f539cb964', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645490, ''),
('0c327cd060d95904cfc7ee67fdbebd4b', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645336, ''),
('0d14691163c8345db2aa1d0d9cab8f42', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645844, ''),
('0e44b9f67d0c74fe93d4caa043151be6', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394643189, ''),
('0ec7847c50d0da16486d56bf6ec5eca0', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645646, ''),
('12b2efa8aab2d5ad69c98ed39fe678c1', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645982, ''),
('13c30e7f9193dc54a02ceafd1c6b47fb', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645143, ''),
('14a28a76d48e1e9230b08c6d675e41d1', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394644968, ''),
('1822f3d37b01dc5493e7e324d5219b90', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394646457, ''),
('18ad9f0e29c9c2c800c33d0b58fc9c78', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645675, ''),
('24a61ae83073623a2c601fcca41176f5', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394644819, ''),
('26ee6b6ecfc59cb42e3b7636762ae8f2', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645277, ''),
('27e81b5eb57944cfbc70d3e89ea25c19', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645038, ''),
('2af56dee2f1dbb2b9242014bf673011e', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645558, ''),
('2e39453872ad7062d28137a8b3c9c749', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394642488, ''),
('2e9c178f644ff640d0830a7f5cb7e176', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394646481, ''),
('315345cbbffe2210a9fb6e18e7f56b67', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394642515, ''),
('3551a0897927e0c4cf0d107f0bb78230', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394643243, ''),
('366863023f07f0fc30eee4c0245ab815', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645744, ''),
('36be3ee85776f0fdf971cc8262c1940c', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645715, ''),
('380fc83544e6f6d11d2f7b7dac2577c1', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394647186, ''),
('3c3313195f0112163d685a9e1e374b84', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394642498, ''),
('42a8fc8a6f213564dc592d53ef8a9110', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394647546, ''),
('434d66e0b2e2557bc1238a3bca5ebcd6', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394647952, ''),
('45f0d49c1d7ef7cb6e54630afe73a1b3', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394643766, ''),
('464d5647c51621bae4668372bb89113c', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394647207, ''),
('4b050678755298363f959497bf19844f', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645106, ''),
('4efd94ef0bc059d76bb4ac9adb27762e', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394644486, ''),
('4f0a4ccb248a4fdd150aa8823f696a12', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645982, ''),
('537f1b8641312e69f5bdaa094750bf77', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394642487, ''),
('54dc33cf2d4154aa49436df582d43a9a', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394647566, ''),
('583e3fbe883f4c613353b5a500b0c7c8', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645180, ''),
('58d97f07bf33f55277789172bc944417', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394647559, ''),
('5a191cf87571bb987c801b66b4c3b86f', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394644909, ''),
('5b1b1a156c14c8b2022418108a529f90', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645774, ''),
('5d7e9fe06760cd6aa82ebb910194083c', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394647952, ''),
('5f4ccfd8eba9326651f97b113773c3f4', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645027, ''),
('662f43943c2eb70408f85058abc90b21', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394644914, ''),
('66b3e1e6c52fd9b452eac4c9ad9045ff', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394646117, ''),
('67fdb17f6f297d8a2a8a0d1a48fd0a69', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645307, ''),
('6b12449e2a115974eec4c49cd4f55fcd', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645062, ''),
('6bd4bcb168bdceb01612a0d34e63927c', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645651, ''),
('6c84f12a61baceb4482485a4761945e6', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394647546, ''),
('6fe00ae318dc495d63475eb2b0936c56', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394646011, ''),
('701688208186c5273dfbea285a778617', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394647564, ''),
('70d18897c4a6ca8bcc9dbd2998f19b57', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394646454, ''),
('77e905811e100db61863b2499c5ba02c', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394642491, ''),
('78c8f17c31c5468abeebe0547d1006cb', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645697, ''),
('7a51f4ea4a6cc723bb38a471265ce6be', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394644667, ''),
('7aad5044781c234992ed865a548ccdf2', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645825, ''),
('7c390c4890029d6cbf6b92a23cfddde8', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645688, ''),
('7ce144f48ed25c38797cdc7819827443', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645267, ''),
('7d0e30fbd71967d5414ac076d64fcb21', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645859, ''),
('7d3a1edd94795bab9a973cd8b55f9b10', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394646749, ''),
('7fb0fc153394fe67e9f32f34b3b4fc4b', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394644663, ''),
('89ba55345f04e87bed99b19f64070e36', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645280, ''),
('8a498d5ad95a49001b65aee4ef0f2cea', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394642677, ''),
('8a515375f892055d91276fe6f6e6232f', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394644898, ''),
('8aafbd72a7037c3049a97d237a65dbb4', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394646437, ''),
('8de3de04fadd10f67dc9868b79d3c303', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645495, ''),
('91975f89dae92cedb115466bf2414eb2', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394647183, ''),
('9291f8611f1d2d49a7c74b11bdf12406', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394647525, ''),
('933197636de821853a281340660ca9e3', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645817, ''),
('938023a7c7e6563a82911720e5faeb15', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645691, ''),
('9499f3bb3daaf72d5a329654569ed964', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394646128, ''),
('9509cc87c96e9c863a3b140b6a64b306', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394646629, ''),
('97bc09eefce478f350ce65fa9c7e6de1', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645531, ''),
('9bc55bd074ecac8f0f778f2b5981bd73', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394646041, ''),
('9e9be21cce45b45d8ad5b3527da54bdc', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645516, ''),
('abeccc05635999b444635e1677fad4ef', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394644362, ''),
('b0e5bd037fdaf324a1adf129a9561065', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645282, ''),
('b3db556b2387892ff468ae06ad1b8e19', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394642669, ''),
('b477e0a1ce582dcc7ebd10082aee9632', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394646105, ''),
('b53148e268b1638e3d67dbf0e4456f23', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394644839, ''),
('b546221a93c535dda7db42282d5d6b19', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645072, ''),
('b551af2de797ad9f9777a52b3b24bebc', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394647556, ''),
('b67b94ade331fc8b7c61315880694e33', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394647406, ''),
('b9cd3e794355cccacdda339345051af1', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394644376, ''),
('bb2e49a77f20b61c3f5a855f304ff6f7', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394646503, ''),
('bf3c6e6e4e7b7e4493b365109a471b06', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645671, ''),
('bf8653a0b2535ab3e1e7b17b5cd85276', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394644452, ''),
('bff3fa1f2f8b2ee5383b7deb30c5757b', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394646532, ''),
('c11b0c3331fa81d165f6bafc516aa690', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394646023, ''),
('c18446241b283fdae5563b52a56c9d73', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645309, ''),
('c1c6436a9e1ee2de2c50c1935f290dd4', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645030, ''),
('c21ff6a8daa83c7c9ea4fdf9c1320bbb', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394647342, ''),
('c2e47835426ab059371f0a072391fa6b', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645809, ''),
('c59530658439c4d4d6b83f9ce35e56b0', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645971, ''),
('c5cb973b50872d6f09a26af9ef53e7f2', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394643225, ''),
('c6811e505ce9b250c115150779c2be36', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645334, ''),
('c8cd054d8122ae2d1d4fef912de56e4b', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394647241, ''),
('caccc977f1e1abd24ed71d9dac14fb5b', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394647556, ''),
('cb11403f26bb3b84955be23d683f121e', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645040, ''),
('cf3baa5e0108e977d122b399e9646f71', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645244, ''),
('cfc2223ce559f3f31d103bd83a0247ba', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394647559, ''),
('d0f97b340d046071257f84d662bffd00', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394643798, ''),
('d1c58b158d251364e3a21ba907dfbe9d', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394644949, ''),
('d244ffcb351f11b5b0464d7d6ec96086', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394643091, ''),
('d3ff6b0780f36a1cde53bae5706ea705', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645648, ''),
('d6775a78b4d425d521c8e575933c71d1', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394644841, ''),
('d808edb7db334c46675f8ec4771445d3', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394647343, ''),
('d9b54abc2f383e26153db132215941e9', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645340, ''),
('dd311da5b4120da92218484f58c0a9e8', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394647527, ''),
('ddafe57c4f875707ef10620de0e3c5cf', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645721, ''),
('de453bf512d0c7d5ef3b42d8ce41b069', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645213, ''),
('deda058c3c8f86f97dd62dbb14df6890', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645530, ''),
('df631427355080b3aebdb3078731d250', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645315, ''),
('dfb21ff658666b831b21bfc02c765580', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645561, ''),
('e023d6b1ffb4714b38930c6b8d4ac2bd', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645226, ''),
('e3a3b9e7ec4c1effc507e3623b1d1dcd', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394642477, ''),
('e4a1c5c0d968526391022c92e4910611', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645535, ''),
('e4a2d78109c80ceb7cfe29f19392caf6', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394647307, ''),
('e77339a7edc414959b5562e3126e1779', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645723, ''),
('e8eba0c3c6e8bbebc13a86efe73e36bb', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394643136, ''),
('f2749676f9de924eb01a87904278629c', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394643104, ''),
('f5901f38e57cf8a76cc0f62ff6ddd4b9', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394644726, ''),
('f73aa1f92588b60420ec89e8cd074343', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645825, ''),
('f7827b06595bdc0701d939f423181320', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394644722, ''),
('f7bd6c8c963e9ee038c58c956adc4faa', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645265, ''),
('f86d9d75903cc97af0ac54ee7b5b0f62', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645969, ''),
('f8d80d61495351444dae18eb7ce9280a', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394644814, ''),
('ff44aab168457c81f0be843c098dd037', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1394645077, '');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `phone`, `address`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`, `birthday`, `img`, `role`, `login_id`, `total_like`, `account_number`) VALUES
(4, 'GiangBeo', '', '', '', '$2a$08$YrmDT.HFRN8WdTUYzaFPg.BLW4iJa7caEUHlkyAmK1KdQ/jyZzURG', 'nguyentruonggiang91@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2014-03-12 19:12:32', '2014-03-10 08:23:33', '2014-03-12 18:12:32', '', '', 2, '', 0, '123456');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `country`, `website`) VALUES
(2, 4, NULL, NULL);

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
