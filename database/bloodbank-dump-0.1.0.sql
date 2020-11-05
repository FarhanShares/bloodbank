-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for bloodbank
CREATE DATABASE IF NOT EXISTS `bloodbank` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `bloodbank`;

-- Dumping structure for table bloodbank.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(21) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `age` int(5) DEFAULT NULL,
  `sex` int(2) DEFAULT NULL,
  `registered_at` datetime DEFAULT NULL,
  `blood_group` int(2) DEFAULT NULL,
  `donation_availability` int(2) DEFAULT NULL,
  `donation_total_count` int(10) DEFAULT NULL,
  `donation_last_date` datetime DEFAULT NULL,
  `location_union` varchar(50) DEFAULT NULL,
  `location_upozila` varchar(50) DEFAULT NULL,
  `location_thana` varchar(50) DEFAULT NULL,
  `location_district` varchar(50) DEFAULT NULL,
  `location_division` varchar(50) DEFAULT NULL,
  `contact_phone` int(11) DEFAULT NULL,
  `contact_email` int(11) DEFAULT NULL,
  `contact_facebook` int(11) DEFAULT NULL,
  `contact_twitter` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table bloodbank.users: ~8 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT IGNORE INTO `users` (`id`, `email`, `password`, `full_name`, `age`, `sex`, `registered_at`, `blood_group`, `donation_availability`, `donation_total_count`, `donation_last_date`, `location_union`, `location_upozila`, `location_thana`, `location_district`, `location_division`, `contact_phone`, `contact_email`, `contact_facebook`, `contact_twitter`) VALUES
	(1, 'user@user.com', 'password', 'User 01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(2, 'asdf@amf.com', 'asdf', 'adsf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(3, 'hello@hello.com', 'password', 'Hello', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(4, 'admin@admin.com', 'password', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(5, 'sdkjfhkjsd2kjsn@sdf.co', 'kjdasf', 'hell', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(6, 'asd@asj.com', 'asdf', 'asdfjh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(7, 'ishraaq21@gmail.com', '', 'Farhan Israq', 23, 1, NULL, NULL, NULL, NULL, NULL, 'asdfasd', 'dsafasdf', 'sdafasd', 'asdfas', 'sdf', 1717700433, NULL, 0, 0),
	(8, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
