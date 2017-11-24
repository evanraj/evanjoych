-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2017 at 07:06 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chaosentertainment`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_cf7dbplugin_st`
--

CREATE TABLE `wp_cf7dbplugin_st` (
  `submit_time` decimal(16,4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_cf7dbplugin_st`
--

INSERT INTO `wp_cf7dbplugin_st` (`submit_time`) VALUES
('1481117406.5013'),
('1494064317.1530'),
('1494064440.3758'),
('1494064440.9125'),
('1494064441.7070'),
('1494064442.7198'),
('1494656054.4949'),
('1494656057.9241'),
('1495620354.7817'),
('1495620358.8325'),
('1495620372.8324'),
('1495640849.8655'),
('1495640853.9386'),
('1495640854.7572'),
('1495640856.3327'),
('1496705978.3277'),
('1496705992.1454'),
('1497179406.8508'),
('1497521084.5933'),
('1497521091.6623'),
('1498676511.6294'),
('1498676515.6319'),
('1498676518.6492'),
('1498676577.1460'),
('1498676632.6299'),
('1500684171.0951'),
('1500684176.6267'),
('1503294513.7619'),
('1503294521.6531'),
('1503294529.2349'),
('1503635688.2687'),
('1503635690.3366'),
('1503635696.3877'),
('1503635697.2344'),
('1505399813.7625'),
('1506447925.9318'),
('1507173183.8920'),
('1507173201.1104'),
('1507173219.0489'),
('1507326746.1444'),
('1507326754.9426'),
('1507326773.3313'),
('1507965011.3886'),
('1507965015.9330'),
('1507965018.7319'),
('1507965021.1251'),
('1507965021.8594'),
('1508172074.4040'),
('1508172086.3635'),
('1508172155.3595'),
('1508227334.9291'),
('1508227337.4769'),
('1508227338.3539'),
('1508227344.5230'),
('1508227348.2479'),
('1509427452.9694'),
('1509427459.2035'),
('1509427460.2591'),
('1509427472.5149'),
('1509554829.9554'),
('1509554873.0818'),
('1509554873.6888'),
('1509554874.0022'),
('1509554874.6391'),
('1509554875.4996'),
('1509554876.1174'),
('1509554876.9383'),
('1509943146.3680'),
('1509943151.0777'),
('1509943210.2068'),
('1509943235.1755'),
('1509943236.0028'),
('1510205192.9157'),
('1510205197.3594'),
('1510844271.6412'),
('1510844289.5496');

-- --------------------------------------------------------

--
-- Table structure for table `wp_cf7dbplugin_submits`
--

CREATE TABLE `wp_cf7dbplugin_submits` (
  `submit_time` decimal(16,4) NOT NULL,
  `form_name` varchar(127) CHARACTER SET utf8 DEFAULT NULL,
  `field_name` varchar(127) CHARACTER SET utf8 DEFAULT NULL,
  `field_value` longtext CHARACTER SET utf8,
  `field_order` int(11) DEFAULT NULL,
  `file` longblob
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_cf7dbplugin_submits`
--

INSERT INTO `wp_cf7dbplugin_submits` (`submit_time`, `form_name`, `field_name`, `field_value`, `field_order`, `file`) VALUES
('1481117406.5013', 'Contact Chaos', 'your-name', 'fdgf', 0, NULL),
('1481117406.5013', 'Contact Chaos', 'your-email', 'joy@joy.com', 1, NULL),
('1481117406.5013', 'Contact Chaos', 'your-number', '999999', 2, NULL),
('1481117406.5013', 'Contact Chaos', 'Submitted Login', 'admin', 9999, NULL),
('1481117406.5013', 'Contact Chaos', 'Submitted From', '49.206.125.182', 10000, NULL),
('1494064317.1530', 'Contact Chaos', 'your-name', 'Rohit prasad', 0, NULL),
('1494064317.1530', 'Contact Chaos', 'your-email', 'rohitguruprasad@gmail.com', 1, NULL),
('1494064317.1530', 'Contact Chaos', 'your-number', '7299078703', 2, NULL),
('1494064317.1530', 'Contact Chaos', 'Submitted From', '182.65.67.216', 10000, NULL),
('1494064440.3758', 'Contact Chaos', 'your-name', 'Rohit prasad', 0, NULL),
('1494064440.3758', 'Contact Chaos', 'your-email', 'rohitguruprasad@gmail.com', 1, NULL),
('1494064440.3758', 'Contact Chaos', 'your-number', '7299078703', 2, NULL),
('1494064440.3758', 'Contact Chaos', 'Submitted From', '182.65.67.216', 10000, NULL),
('1494064440.9125', 'Contact Chaos', 'your-name', 'Rohit prasad', 0, NULL),
('1494064440.9125', 'Contact Chaos', 'your-email', 'rohitguruprasad@gmail.com', 1, NULL),
('1494064440.9125', 'Contact Chaos', 'your-number', '7299078703', 2, NULL),
('1494064440.9125', 'Contact Chaos', 'Submitted From', '182.65.67.216', 10000, NULL),
('1494064441.7070', 'Contact Chaos', 'your-name', 'Rohit prasad', 0, NULL),
('1494064441.7070', 'Contact Chaos', 'your-email', 'rohitguruprasad@gmail.com', 1, NULL),
('1494064441.7070', 'Contact Chaos', 'your-number', '7299078703', 2, NULL),
('1494064441.7070', 'Contact Chaos', 'Submitted From', '182.65.67.216', 10000, NULL),
('1494064442.7198', 'Contact Chaos', 'your-name', 'Rohit prasad', 0, NULL),
('1494064442.7198', 'Contact Chaos', 'your-email', 'rohitguruprasad@gmail.com', 1, NULL),
('1494064442.7198', 'Contact Chaos', 'your-number', '7299078703', 2, NULL),
('1494064442.7198', 'Contact Chaos', 'Submitted From', '182.65.67.216', 10000, NULL),
('1494656054.4949', 'Contact Chaos', 'your-name', 'Haritha Naushad ', 0, NULL),
('1494656054.4949', 'Contact Chaos', 'your-email', 'haritha.naushad@gmail.com', 1, NULL),
('1494656054.4949', 'Contact Chaos', 'your-number', '9790831296', 2, NULL),
('1494656054.4949', 'Contact Chaos', 'Submitted From', '49.207.176.56', 10000, NULL),
('1494656057.9241', 'Contact Chaos', 'your-name', 'Haritha Naushad ', 0, NULL),
('1494656057.9241', 'Contact Chaos', 'your-email', 'haritha.naushad@gmail.com', 1, NULL),
('1494656057.9241', 'Contact Chaos', 'your-number', '9790831296', 2, NULL),
('1494656057.9241', 'Contact Chaos', 'Submitted From', '49.207.176.56', 10000, NULL),
('1495620354.7817', 'Contact Chaos', 'your-name', 'Jayashree', 0, NULL),
('1495620354.7817', 'Contact Chaos', 'your-email', 'jaya26.angel@gmail.com', 1, NULL),
('1495620354.7817', 'Contact Chaos', 'your-number', '09444601900', 2, NULL),
('1495620354.7817', 'Contact Chaos', 'Submitted From', '14.139.160.248', 10000, NULL),
('1495620358.8325', 'Contact Chaos', 'your-name', 'Jayashree', 0, NULL),
('1495620358.8325', 'Contact Chaos', 'your-email', 'jaya26.angel@gmail.com', 1, NULL),
('1495620358.8325', 'Contact Chaos', 'your-number', '09444601900', 2, NULL),
('1495620358.8325', 'Contact Chaos', 'Submitted From', '14.139.160.248', 10000, NULL),
('1495620372.8324', 'Contact Chaos', 'your-name', 'Jayashree', 0, NULL),
('1495620372.8324', 'Contact Chaos', 'your-email', 'ar.jaya2602@gmail.com', 1, NULL),
('1495620372.8324', 'Contact Chaos', 'your-number', '09444601900', 2, NULL),
('1495620372.8324', 'Contact Chaos', 'Submitted From', '14.139.160.248', 10000, NULL),
('1495640849.8655', 'Contact Chaos', 'your-name', 'Srikanth', 0, NULL),
('1495640849.8655', 'Contact Chaos', 'your-email', 'srikantheminem@gmail.com', 1, NULL),
('1495640849.8655', 'Contact Chaos', 'your-number', '9445099154', 2, NULL),
('1495640849.8655', 'Contact Chaos', 'Submitted From', '106.51.154.52', 10000, NULL),
('1495640853.9386', 'Contact Chaos', 'your-name', 'Srikanth', 0, NULL),
('1495640853.9386', 'Contact Chaos', 'your-email', 'srikantheminem@gmail.com', 1, NULL),
('1495640853.9386', 'Contact Chaos', 'your-number', '9445099154', 2, NULL),
('1495640853.9386', 'Contact Chaos', 'Submitted From', '106.51.154.52', 10000, NULL),
('1495640854.7572', 'Contact Chaos', 'your-name', 'Srikanth', 0, NULL),
('1495640854.7572', 'Contact Chaos', 'your-email', 'srikantheminem@gmail.com', 1, NULL),
('1495640854.7572', 'Contact Chaos', 'your-number', '9445099154', 2, NULL),
('1495640854.7572', 'Contact Chaos', 'Submitted From', '106.51.154.52', 10000, NULL),
('1495640856.3327', 'Contact Chaos', 'your-name', 'Srikanth', 0, NULL),
('1495640856.3327', 'Contact Chaos', 'your-email', 'srikantheminem@gmail.com', 1, NULL),
('1495640856.3327', 'Contact Chaos', 'your-number', '9445099154', 2, NULL),
('1495640856.3327', 'Contact Chaos', 'Submitted From', '106.51.154.52', 10000, NULL),
('1496705978.3277', 'Contact Chaos', 'your-name', 'Mohamed thaslir', 0, NULL),
('1496705978.3277', 'Contact Chaos', 'your-email', 'mthaslir3@gmail.com', 1, NULL),
('1496705978.3277', 'Contact Chaos', 'your-number', '9176737318', 2, NULL),
('1496705978.3277', 'Contact Chaos', 'Submitted From', '182.65.20.160', 10000, NULL),
('1496705992.1454', 'Contact Chaos', 'your-name', 'Mohamed thaslir', 0, NULL),
('1496705992.1454', 'Contact Chaos', 'your-email', 'mthaslir3@gmail.com', 1, NULL),
('1496705992.1454', 'Contact Chaos', 'your-number', '9176737318', 2, NULL),
('1496705992.1454', 'Contact Chaos', 'Submitted From', '182.65.20.160', 10000, NULL),
('1497179406.8508', 'Contact Chaos', 'your-name', 'rohan shah', 0, NULL),
('1497179406.8508', 'Contact Chaos', 'your-email', 'rohan97shah27@gmail.com', 1, NULL),
('1497179406.8508', 'Contact Chaos', 'your-number', '9962253077', 2, NULL),
('1497179406.8508', 'Contact Chaos', 'Submitted From', '47.247.12.66', 10000, NULL),
('1497521084.5933', 'Contact Chaos', 'your-name', 'Arjun', 0, NULL),
('1497521084.5933', 'Contact Chaos', 'your-email', 'arjundevakumar29@gmail.com', 1, NULL),
('1497521084.5933', 'Contact Chaos', 'your-number', '9566210298', 2, NULL),
('1497521084.5933', 'Contact Chaos', 'Submitted From', '182.65.10.211', 10000, NULL),
('1497521091.6623', 'Contact Chaos', 'your-name', 'Arjun', 0, NULL),
('1497521091.6623', 'Contact Chaos', 'your-email', 'arjundevakumar29@gmail.com', 1, NULL),
('1497521091.6623', 'Contact Chaos', 'your-number', '9566210298', 2, NULL),
('1497521091.6623', 'Contact Chaos', 'Submitted From', '182.65.10.211', 10000, NULL),
('1498676511.6294', 'Contact Chaos', 'your-name', 'Rahul', 0, NULL),
('1498676511.6294', 'Contact Chaos', 'your-email', 'rahulhb140195@gmail.com', 1, NULL),
('1498676511.6294', 'Contact Chaos', 'your-number', '9962154145', 2, NULL),
('1498676511.6294', 'Contact Chaos', 'Submitted From', '42.111.132.105', 10000, NULL),
('1498676515.6319', 'Contact Chaos', 'your-name', 'Rahul', 0, NULL),
('1498676515.6319', 'Contact Chaos', 'your-email', 'rahulhb140195@gmail.com', 1, NULL),
('1498676515.6319', 'Contact Chaos', 'your-number', '9962154145', 2, NULL),
('1498676515.6319', 'Contact Chaos', 'Submitted From', '42.111.132.105', 10000, NULL),
('1498676518.6492', 'Contact Chaos', 'your-name', 'Rahul', 0, NULL),
('1498676518.6492', 'Contact Chaos', 'your-email', 'rahulhb140195@gmail.com', 1, NULL),
('1498676518.6492', 'Contact Chaos', 'your-number', '9962154145', 2, NULL),
('1498676518.6492', 'Contact Chaos', 'Submitted From', '42.111.132.105', 10000, NULL),
('1498676577.1460', 'Contact Chaos', 'your-name', 'Rahul', 0, NULL),
('1498676577.1460', 'Contact Chaos', 'your-email', 'rahulhb140195@gmail.com', 1, NULL),
('1498676577.1460', 'Contact Chaos', 'your-number', '9962154145', 2, NULL),
('1498676577.1460', 'Contact Chaos', 'Submitted From', '42.111.132.105', 10000, NULL),
('1498676632.6299', 'Contact Chaos', 'your-name', 'Rahul', 0, NULL),
('1498676632.6299', 'Contact Chaos', 'your-email', 'rahulhb140195@gmail.com', 1, NULL),
('1498676632.6299', 'Contact Chaos', 'your-number', '9962154145', 2, NULL),
('1498676632.6299', 'Contact Chaos', 'Submitted From', '42.111.132.105', 10000, NULL),
('1500684171.0951', 'Contact Chaos', 'your-name', 'Albert Martin', 0, NULL),
('1500684171.0951', 'Contact Chaos', 'your-email', 'albertmartin96.am@gmail.com', 1, NULL),
('1500684171.0951', 'Contact Chaos', 'your-number', '8939677078', 2, NULL),
('1500684171.0951', 'Contact Chaos', 'Submitted From', '182.65.223.242', 10000, NULL),
('1500684176.6267', 'Contact Chaos', 'your-name', 'Albert Martin', 0, NULL),
('1500684176.6267', 'Contact Chaos', 'your-email', 'albertmartin96.am@gmail.com', 1, NULL),
('1500684176.6267', 'Contact Chaos', 'your-number', '8939677078', 2, NULL),
('1500684176.6267', 'Contact Chaos', 'Submitted From', '182.65.223.242', 10000, NULL),
('1503294513.7619', 'Contact Chaos', 'your-name', 'Dikshit', 0, NULL),
('1503294513.7619', 'Contact Chaos', 'your-email', 'rocklotumd@gmail.com', 1, NULL),
('1503294513.7619', 'Contact Chaos', 'your-number', '9176724545', 2, NULL),
('1503294513.7619', 'Contact Chaos', 'Submitted From', '45.125.116.165', 10000, NULL),
('1503294521.6531', 'Contact Chaos', 'your-name', 'Dikshit', 0, NULL),
('1503294521.6531', 'Contact Chaos', 'your-email', 'rocklotumd@gmail.com', 1, NULL),
('1503294521.6531', 'Contact Chaos', 'your-number', '9176724545', 2, NULL),
('1503294521.6531', 'Contact Chaos', 'Submitted From', '45.125.116.165', 10000, NULL),
('1503294529.2349', 'Contact Chaos', 'your-name', 'Dikshit', 0, NULL),
('1503294529.2349', 'Contact Chaos', 'your-email', 'rocklotumd@gmail.com', 1, NULL),
('1503294529.2349', 'Contact Chaos', 'your-number', '9176724545', 2, NULL),
('1503294529.2349', 'Contact Chaos', 'Submitted From', '45.125.116.165', 10000, NULL),
('1503635688.2687', 'Contact Chaos', 'your-name', 'Praghalad', 0, NULL),
('1503635688.2687', 'Contact Chaos', 'your-email', 'aek2001@gmail.com', 1, NULL),
('1503635688.2687', 'Contact Chaos', 'your-number', '8939273787', 2, NULL),
('1503635688.2687', 'Contact Chaos', 'Submitted From', '49.206.120.231', 10000, NULL),
('1503635690.3366', 'Contact Chaos', 'your-name', 'Praghalad', 0, NULL),
('1503635690.3366', 'Contact Chaos', 'your-email', 'aek2001@gmail.com', 1, NULL),
('1503635690.3366', 'Contact Chaos', 'your-number', '8939273787', 2, NULL),
('1503635690.3366', 'Contact Chaos', 'Submitted From', '49.206.120.231', 10000, NULL),
('1503635696.3877', 'Contact Chaos', 'your-name', 'Praghalad', 0, NULL),
('1503635696.3877', 'Contact Chaos', 'your-email', 'aek2001@gmail.com', 1, NULL),
('1503635696.3877', 'Contact Chaos', 'your-number', '8939273787', 2, NULL),
('1503635696.3877', 'Contact Chaos', 'Submitted From', '49.206.120.231', 10000, NULL),
('1503635697.2344', 'Contact Chaos', 'your-name', 'Praghalad', 0, NULL),
('1503635697.2344', 'Contact Chaos', 'your-email', 'aek2001@gmail.com', 1, NULL),
('1503635697.2344', 'Contact Chaos', 'your-number', '8939273787', 2, NULL),
('1503635697.2344', 'Contact Chaos', 'Submitted From', '49.206.120.231', 10000, NULL),
('1505399813.7625', 'Contact Chaos', 'your-name', 'vasanth', 0, NULL),
('1505399813.7625', 'Contact Chaos', 'your-email', 'vasanth.kummar@gmail.com', 1, NULL),
('1505399813.7625', 'Contact Chaos', 'your-number', '9944312551', 2, NULL),
('1505399813.7625', 'Contact Chaos', 'Submitted From', '111.93.236.116', 10000, NULL),
('1506447925.9318', 'Contact Chaos', 'your-name', 'ARATI', 0, NULL),
('1506447925.9318', 'Contact Chaos', 'your-email', 'aratichari@gmail.com', 1, NULL),
('1506447925.9318', 'Contact Chaos', 'your-number', '9444383457', 2, NULL),
('1506447925.9318', 'Contact Chaos', 'Submitted From', '122.164.184.185', 10000, NULL),
('1507173183.8920', 'Contact Chaos', 'your-name', 'Rajat Singla ', 0, NULL),
('1507173183.8920', 'Contact Chaos', 'your-email', 'rajatsingladevice@gmail.com', 1, NULL),
('1507173183.8920', 'Contact Chaos', 'your-number', '8939525800 ', 2, NULL),
('1507173183.8920', 'Contact Chaos', 'Submitted From', '106.51.154.34', 10000, NULL),
('1507173201.1104', 'Contact Chaos', 'your-name', 'Rajat Singla ', 0, NULL),
('1507173201.1104', 'Contact Chaos', 'your-email', 'rajatsingladevice@gmail.com', 1, NULL),
('1507173201.1104', 'Contact Chaos', 'your-number', '8939525800', 2, NULL),
('1507173201.1104', 'Contact Chaos', 'Submitted From', '106.51.154.34', 10000, NULL),
('1507173219.0489', 'Contact Chaos', 'your-name', 'Rajat Singla ', 0, NULL),
('1507173219.0489', 'Contact Chaos', 'your-email', 'rajatsingladevice@gmail.com', 1, NULL),
('1507173219.0489', 'Contact Chaos', 'your-number', '8939525800', 2, NULL),
('1507173219.0489', 'Contact Chaos', 'Submitted From', '106.51.154.34', 10000, NULL),
('1507326746.1444', 'Contact Chaos', 'your-name', 'Alan Beski', 0, NULL),
('1507326746.1444', 'Contact Chaos', 'your-email', 'alanchristopher14@gmail.com', 1, NULL),
('1507326746.1444', 'Contact Chaos', 'your-number', '8056174453', 2, NULL),
('1507326746.1444', 'Contact Chaos', 'Submitted From', '157.50.14.43', 10000, NULL),
('1507326754.9426', 'Contact Chaos', 'your-name', 'Alan Beski', 0, NULL),
('1507326754.9426', 'Contact Chaos', 'your-email', 'alanchristopher14@gmail.com', 1, NULL),
('1507326754.9426', 'Contact Chaos', 'your-number', '8056174453', 2, NULL),
('1507326754.9426', 'Contact Chaos', 'Submitted From', '157.50.14.43', 10000, NULL),
('1507326773.3313', 'Contact Chaos', 'your-name', 'Alan Beski', 0, NULL),
('1507326773.3313', 'Contact Chaos', 'your-email', 'alanchristopher14@gmail.com', 1, NULL),
('1507326773.3313', 'Contact Chaos', 'your-number', '00918056174453', 2, NULL),
('1507326773.3313', 'Contact Chaos', 'Submitted From', '157.50.14.43', 10000, NULL),
('1507965011.3886', 'Contact Chaos', 'your-name', 'Yeongwu son', 0, NULL),
('1507965011.3886', 'Contact Chaos', 'your-email', 'son2570@gmail.com', 1, NULL),
('1507965011.3886', 'Contact Chaos', 'your-number', '9094181175', 2, NULL),
('1507965011.3886', 'Contact Chaos', 'Submitted From', '106.203.120.104', 10000, NULL),
('1507965015.9330', 'Contact Chaos', 'your-name', 'Yeongwu son', 0, NULL),
('1507965015.9330', 'Contact Chaos', 'your-email', 'son2570@gmail.com', 1, NULL),
('1507965015.9330', 'Contact Chaos', 'your-number', '9094181175', 2, NULL),
('1507965015.9330', 'Contact Chaos', 'Submitted From', '106.203.120.104', 10000, NULL),
('1507965018.7319', 'Contact Chaos', 'your-name', 'Yeongwu son', 0, NULL),
('1507965018.7319', 'Contact Chaos', 'your-email', 'son2570@gmail.com', 1, NULL),
('1507965018.7319', 'Contact Chaos', 'your-number', '9094181175', 2, NULL),
('1507965018.7319', 'Contact Chaos', 'Submitted From', '106.203.120.104', 10000, NULL),
('1507965021.1251', 'Contact Chaos', 'your-name', 'Yeongwu son', 0, NULL),
('1507965021.1251', 'Contact Chaos', 'your-email', 'son2570@gmail.com', 1, NULL),
('1507965021.1251', 'Contact Chaos', 'your-number', '9094181175', 2, NULL),
('1507965021.1251', 'Contact Chaos', 'Submitted From', '106.203.120.104', 10000, NULL),
('1507965021.8594', 'Contact Chaos', 'your-name', 'Yeongwu son', 0, NULL),
('1507965021.8594', 'Contact Chaos', 'your-email', 'son2570@gmail.com', 1, NULL),
('1507965021.8594', 'Contact Chaos', 'your-number', '9094181175', 2, NULL),
('1507965021.8594', 'Contact Chaos', 'Submitted From', '106.203.120.104', 10000, NULL),
('1508172074.4040', 'Contact Chaos', 'your-name', 'Nripesh', 0, NULL),
('1508172074.4040', 'Contact Chaos', 'your-email', 'nripeshsen@gmail.com', 1, NULL),
('1508172074.4040', 'Contact Chaos', 'your-number', '9500025719', 2, NULL),
('1508172074.4040', 'Contact Chaos', 'Submitted From', '210.18.145.151', 10000, NULL),
('1508172086.3635', 'Contact Chaos', 'your-name', 'Nripesh', 0, NULL),
('1508172086.3635', 'Contact Chaos', 'your-email', 'nripeshsen@gmail.com', 1, NULL),
('1508172086.3635', 'Contact Chaos', 'your-number', '9500025719', 2, NULL),
('1508172086.3635', 'Contact Chaos', 'Submitted From', '210.18.145.151', 10000, NULL),
('1508172155.3595', 'Contact Chaos', 'your-name', 'Nripesh', 0, NULL),
('1508172155.3595', 'Contact Chaos', 'your-email', 'nripeshsen@gmail.com', 1, NULL),
('1508172155.3595', 'Contact Chaos', 'your-number', '9500025719', 2, NULL),
('1508172155.3595', 'Contact Chaos', 'Submitted From', '210.18.145.151', 10000, NULL),
('1508227334.9291', 'Contact Chaos', 'your-name', 'Navin Haridoss', 0, NULL),
('1508227334.9291', 'Contact Chaos', 'your-email', 'haridossnavin@gmail.com', 1, NULL),
('1508227334.9291', 'Contact Chaos', 'your-number', '8939999077', 2, NULL),
('1508227334.9291', 'Contact Chaos', 'Submitted From', '157.50.11.155', 10000, NULL),
('1508227337.4769', 'Contact Chaos', 'your-name', 'Navin Haridoss', 0, NULL),
('1508227337.4769', 'Contact Chaos', 'your-email', 'haridossnavin@gmail.com', 1, NULL),
('1508227337.4769', 'Contact Chaos', 'your-number', '8939999077', 2, NULL),
('1508227337.4769', 'Contact Chaos', 'Submitted From', '157.50.11.155', 10000, NULL),
('1508227338.3539', 'Contact Chaos', 'your-name', 'Navin Haridoss', 0, NULL),
('1508227338.3539', 'Contact Chaos', 'your-email', 'haridossnavin@gmail.com', 1, NULL),
('1508227338.3539', 'Contact Chaos', 'your-number', '8939999077', 2, NULL),
('1508227338.3539', 'Contact Chaos', 'Submitted From', '157.50.11.155', 10000, NULL),
('1508227344.5230', 'Contact Chaos', 'your-name', 'Navin Haridoss', 0, NULL),
('1508227344.5230', 'Contact Chaos', 'your-email', 'haridossnavin@gmail.com', 1, NULL),
('1508227344.5230', 'Contact Chaos', 'your-number', '8939999077', 2, NULL),
('1508227344.5230', 'Contact Chaos', 'Submitted From', '157.50.11.155', 10000, NULL),
('1508227348.2479', 'Contact Chaos', 'your-name', 'Navin Haridoss', 0, NULL),
('1508227348.2479', 'Contact Chaos', 'your-email', 'haridossnavin@gmail.com', 1, NULL),
('1508227348.2479', 'Contact Chaos', 'your-number', '8939999077', 2, NULL),
('1508227348.2479', 'Contact Chaos', 'Submitted From', '157.50.11.155', 10000, NULL),
('1509427452.9694', 'Contact Chaos', 'your-name', 'Viraj', 0, NULL),
('1509427452.9694', 'Contact Chaos', 'your-email', 'virajsachinsehwag@gmail.com', 1, NULL),
('1509427452.9694', 'Contact Chaos', 'your-number', '7824040360', 2, NULL),
('1509427452.9694', 'Contact Chaos', 'Submitted From', '182.65.217.118', 10000, NULL),
('1509427459.2035', 'Contact Chaos', 'your-name', 'Viraj', 0, NULL),
('1509427459.2035', 'Contact Chaos', 'your-email', 'virajsachinsehwag@gmail.com', 1, NULL),
('1509427459.2035', 'Contact Chaos', 'your-number', '7824040360', 2, NULL),
('1509427459.2035', 'Contact Chaos', 'Submitted From', '182.65.217.118', 10000, NULL),
('1509427460.2591', 'Contact Chaos', 'your-name', 'Viraj', 0, NULL),
('1509427460.2591', 'Contact Chaos', 'your-email', 'virajsachinsehwag@gmail.com', 1, NULL),
('1509427460.2591', 'Contact Chaos', 'your-number', '7824040360', 2, NULL),
('1509427460.2591', 'Contact Chaos', 'Submitted From', '182.65.217.118', 10000, NULL),
('1509427472.5149', 'Contact Chaos', 'your-name', 'Viraj', 0, NULL),
('1509427472.5149', 'Contact Chaos', 'your-email', 'virajsachinsehwag@gmail.com', 1, NULL),
('1509427472.5149', 'Contact Chaos', 'your-number', '7200845868', 2, NULL),
('1509427472.5149', 'Contact Chaos', 'Submitted From', '182.65.217.118', 10000, NULL),
('1509554829.9554', 'Contact Chaos', 'your-name', 'Paulraj Madasamy', 0, NULL),
('1509554829.9554', 'Contact Chaos', 'your-email', 'paulrajmail@gmail.com', 1, NULL),
('1509554829.9554', 'Contact Chaos', 'your-number', '917200002229', 2, NULL),
('1509554829.9554', 'Contact Chaos', 'Submitted From', '157.50.9.26', 10000, NULL),
('1509554873.0818', 'Contact Chaos', 'your-name', 'Paulraj Madasamy', 0, NULL),
('1509554873.0818', 'Contact Chaos', 'your-email', 'paulrajmail@gmail.com', 1, NULL),
('1509554873.0818', 'Contact Chaos', 'your-number', '917200002229', 2, NULL),
('1509554873.0818', 'Contact Chaos', 'Submitted From', '157.50.9.26', 10000, NULL),
('1509554873.6888', 'Contact Chaos', 'your-name', 'Paulraj Madasamy', 0, NULL),
('1509554873.6888', 'Contact Chaos', 'your-email', 'paulrajmail@gmail.com', 1, NULL),
('1509554873.6888', 'Contact Chaos', 'your-number', '917200002229', 2, NULL),
('1509554873.6888', 'Contact Chaos', 'Submitted From', '157.50.9.26', 10000, NULL),
('1509554874.0022', 'Contact Chaos', 'your-name', 'Paulraj Madasamy', 0, NULL),
('1509554874.0022', 'Contact Chaos', 'your-email', 'paulrajmail@gmail.com', 1, NULL),
('1509554874.0022', 'Contact Chaos', 'your-number', '917200002229', 2, NULL),
('1509554874.0022', 'Contact Chaos', 'Submitted From', '157.50.9.26', 10000, NULL),
('1509554874.6391', 'Contact Chaos', 'your-name', 'Paulraj Madasamy', 0, NULL),
('1509554874.6391', 'Contact Chaos', 'your-email', 'paulrajmail@gmail.com', 1, NULL),
('1509554874.6391', 'Contact Chaos', 'your-number', '917200002229', 2, NULL),
('1509554874.6391', 'Contact Chaos', 'Submitted From', '157.50.9.26', 10000, NULL),
('1509554875.4996', 'Contact Chaos', 'your-name', 'Paulraj Madasamy', 0, NULL),
('1509554875.4996', 'Contact Chaos', 'your-email', 'paulrajmail@gmail.com', 1, NULL),
('1509554875.4996', 'Contact Chaos', 'your-number', '917200002229', 2, NULL),
('1509554875.4996', 'Contact Chaos', 'Submitted From', '157.50.9.26', 10000, NULL),
('1509554876.1174', 'Contact Chaos', 'your-name', 'Paulraj Madasamy', 0, NULL),
('1509554876.1174', 'Contact Chaos', 'your-email', 'paulrajmail@gmail.com', 1, NULL),
('1509554876.1174', 'Contact Chaos', 'your-number', '917200002229', 2, NULL),
('1509554876.1174', 'Contact Chaos', 'Submitted From', '157.50.9.26', 10000, NULL),
('1509554876.9383', 'Contact Chaos', 'your-name', 'Paulraj Madasamy', 0, NULL),
('1509554876.9383', 'Contact Chaos', 'your-email', 'paulrajmail@gmail.com', 1, NULL),
('1509554876.9383', 'Contact Chaos', 'your-number', '917200002229', 2, NULL),
('1509554876.9383', 'Contact Chaos', 'Submitted From', '157.50.9.26', 10000, NULL),
('1509943146.3680', 'Contact Chaos', 'your-name', 'Aruneswer', 0, NULL),
('1509943146.3680', 'Contact Chaos', 'your-email', 'aruneswer02@gmail.com', 1, NULL),
('1509943146.3680', 'Contact Chaos', 'your-number', '8610917950', 2, NULL),
('1509943146.3680', 'Contact Chaos', 'Submitted From', '49.206.116.139', 10000, NULL),
('1509943151.0777', 'Contact Chaos', 'your-name', 'Aruneswer', 0, NULL),
('1509943151.0777', 'Contact Chaos', 'your-email', 'aruneswer02@gmail.com', 1, NULL),
('1509943151.0777', 'Contact Chaos', 'your-number', '8610917950', 2, NULL),
('1509943151.0777', 'Contact Chaos', 'Submitted From', '49.206.116.139', 10000, NULL),
('1509943210.2068', 'Contact Chaos', 'your-name', 'Aruneswer', 0, NULL),
('1509943210.2068', 'Contact Chaos', 'your-email', 'aruneswer02@gmail.com', 1, NULL),
('1509943210.2068', 'Contact Chaos', 'your-number', '8610917950', 2, NULL),
('1509943210.2068', 'Contact Chaos', 'Submitted From', '49.206.116.139', 10000, NULL),
('1509943235.1755', 'Contact Chaos', 'your-name', 'Aruneswer', 0, NULL),
('1509943235.1755', 'Contact Chaos', 'your-email', 'aruneswer02@gmail.com', 1, NULL),
('1509943235.1755', 'Contact Chaos', 'your-number', '8610917950', 2, NULL),
('1509943235.1755', 'Contact Chaos', 'Submitted From', '49.206.116.139', 10000, NULL),
('1509943236.0028', 'Contact Chaos', 'your-name', 'Aruneswer', 0, NULL),
('1509943236.0028', 'Contact Chaos', 'your-email', 'aruneswer02@gmail.com', 1, NULL),
('1509943236.0028', 'Contact Chaos', 'your-number', '8610917950', 2, NULL),
('1509943236.0028', 'Contact Chaos', 'Submitted From', '49.206.116.139', 10000, NULL),
('1510205192.9157', 'Contact Chaos', 'your-name', 'Sandeep Murali', 0, NULL),
('1510205192.9157', 'Contact Chaos', 'your-email', 'surgeonsan@gmail.com', 1, NULL),
('1510205192.9157', 'Contact Chaos', 'your-number', '9840061740', 2, NULL),
('1510205192.9157', 'Contact Chaos', 'Submitted From', '49.206.112.46', 10000, NULL),
('1510205197.3594', 'Contact Chaos', 'your-name', 'Sandeep Murali', 0, NULL),
('1510205197.3594', 'Contact Chaos', 'your-email', 'surgeonsan@gmail.com', 1, NULL),
('1510205197.3594', 'Contact Chaos', 'your-number', '9840061740', 2, NULL),
('1510205197.3594', 'Contact Chaos', 'Submitted From', '49.206.112.46', 10000, NULL),
('1510844271.6412', 'Contact Chaos', 'your-name', 'Rameez', 0, NULL),
('1510844271.6412', 'Contact Chaos', 'your-email', 'md.rameez6@gmail.com', 1, NULL),
('1510844271.6412', 'Contact Chaos', 'your-number', '9791963625', 2, NULL),
('1510844271.6412', 'Contact Chaos', 'Submitted From', '103.95.36.1', 10000, NULL),
('1510844289.5496', 'Contact Chaos', 'your-name', 'Rameez', 0, NULL),
('1510844289.5496', 'Contact Chaos', 'your-email', 'md.rameez6@gmail.com', 1, NULL),
('1510844289.5496', 'Contact Chaos', 'your-number', '9791963625', 2, NULL),
('1510844289.5496', 'Contact Chaos', 'Submitted From', '103.95.36.1', 10000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wp_chaos_bill_princing`
--

CREATE TABLE `wp_chaos_bill_princing` (
  `id` int(11) NOT NULL,
  `p_football_hour_week` decimal(9,2) NOT NULL,
  `p_football_hour_weekend` decimal(9,2) NOT NULL,
  `p_lasertag_head_week` decimal(9,2) NOT NULL,
  `p_lasertag_head_weekend` decimal(9,2) NOT NULL,
  `p_lasertag_hour_week` decimal(9,2) NOT NULL,
  `p_lasertag_hour_weekend` decimal(9,2) NOT NULL,
  `p_lasertag_happyhours_week` decimal(9,2) NOT NULL,
  `p_lasertag_happyhours_weekend` decimal(9,2) NOT NULL,
  `p_gaming_hour_week` decimal(9,2) NOT NULL,
  `p_gaming_hour_weekend` decimal(9,2) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_chaos_bill_princing`
--

INSERT INTO `wp_chaos_bill_princing` (`id`, `p_football_hour_week`, `p_football_hour_weekend`, `p_lasertag_head_week`, `p_lasertag_head_weekend`, `p_lasertag_hour_week`, `p_lasertag_hour_weekend`, `p_lasertag_happyhours_week`, `p_lasertag_happyhours_weekend`, `p_gaming_hour_week`, `p_gaming_hour_weekend`, `created_at`, `modified_at`, `active`) VALUES
(1, '2500.00', '2500.00', '250.00', '250.00', '5000.00', '5000.00', '175.00', '175.00', '75.00', '75.00', '2017-03-10 14:31:35', '2017-03-10 14:31:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_chaos_credits`
--

CREATE TABLE `wp_chaos_credits` (
  `id` int(11) NOT NULL,
  `member_id` int(100) NOT NULL,
  `bill_id` varchar(100) NOT NULL,
  `game_name` varchar(125) NOT NULL,
  `amount` decimal(9,2) NOT NULL,
  `credit_points` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_chaos_credits`
--

INSERT INTO `wp_chaos_credits` (`id`, `member_id`, `bill_id`, `game_name`, `amount`, `credit_points`, `created_at`, `modified_at`, `active`) VALUES
(1, 3, 'INV48', 'football', '10000.00', 400, '2017-11-21 18:12:35', '2017-11-21 18:12:35', 1),
(2, 3, 'INV23', 'lazertag', '15600.00', 624, '2017-11-21 18:13:38', '2017-11-21 18:13:38', 1),
(3, 1, 'INV49', 'football', '4000.00', 160, '2017-11-24 11:19:38', '2017-11-24 11:19:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_chaos_credits_points`
--

CREATE TABLE `wp_chaos_credits_points` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `credit_points` int(11) NOT NULL,
  `key_value` varchar(100) NOT NULL,
  `key_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wp_chaos_credit_notes`
--

CREATE TABLE `wp_chaos_credit_notes` (
  `id` int(11) NOT NULL,
  `member_id` varchar(100) NOT NULL,
  `credit_points` int(11) NOT NULL DEFAULT '0',
  `details` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wp_chaos_debit_notes`
--

CREATE TABLE `wp_chaos_debit_notes` (
  `id` int(11) NOT NULL,
  `member_id` varchar(100) NOT NULL,
  `debit_points` int(11) NOT NULL DEFAULT '0',
  `details` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wp_chaos_football_billing`
--

CREATE TABLE `wp_chaos_football_billing` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `ft_bill_no` varchar(100) NOT NULL,
  `ft_bill_date` date NOT NULL,
  `ft_bill_time` time NOT NULL,
  `ft_member_name` varchar(100) NOT NULL,
  `ft_member_phone_number` varchar(20) NOT NULL,
  `ft_membership_no` varchar(100) NOT NULL,
  `ft_date` datetime NOT NULL,
  `ft_no_of_hours` int(11) NOT NULL,
  `ft_no_of_member` varchar(100) NOT NULL,
  `ft_amount_value` decimal(9,2) NOT NULL,
  `ft_total` decimal(9,2) NOT NULL,
  `ft_vat` decimal(9,2) NOT NULL,
  `ft_vat_value` decimal(9,2) NOT NULL,
  `ft_member_discount` decimal(9,2) NOT NULL,
  `ft_member_discount_value` decimal(9,2) NOT NULL,
  `ft_discount` decimal(9,2) NOT NULL,
  `ft_discount_value` decimal(9,2) NOT NULL,
  `ft_football_bill` decimal(9,2) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `was_bulid` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_chaos_football_billing`
--

INSERT INTO `wp_chaos_football_billing` (`id`, `member_id`, `ft_bill_no`, `ft_bill_date`, `ft_bill_time`, `ft_member_name`, `ft_member_phone_number`, `ft_membership_no`, `ft_date`, `ft_no_of_hours`, `ft_no_of_member`, `ft_amount_value`, `ft_total`, `ft_vat`, `ft_vat_value`, `ft_member_discount`, `ft_member_discount_value`, `ft_discount`, `ft_discount_value`, `ft_football_bill`, `created_at`, `modified_at`, `was_bulid`, `active`) VALUES
(1, 0, 'INV1', '0000-00-00', '00:00:00', 'Mohan', '5t65646', '', '2017-03-07 00:00:00', 7, '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '17500.00', '2017-03-07 16:04:29', '2017-03-09 14:45:27', 1, 0),
(2, 0, 'INV2', '0000-00-00', '00:00:00', 'Sample', '66666666', '', '2017-03-07 00:00:00', 6, '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '15000.00', '2017-03-07 16:20:08', '2017-03-09 14:28:53', 1, 1),
(3, 3, 'INV3', '0000-00-00', '00:00:00', '', '564645', '', '2017-03-07 00:00:00', 5, '', '0.00', '0.00', '0.00', '0.00', '1250.00', '0.00', '0.00', '0.00', '11250.00', '2017-03-07 16:27:19', '2017-03-07 16:27:31', 1, 1),
(4, 0, 'INV4', '0000-00-00', '00:00:00', 'erer', '453543534', '0', '2017-03-07 00:00:00', 1, '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2500.00', '2017-03-07 16:32:01', '2017-03-07 16:32:08', 1, 1),
(5, 2, 'INV5', '0000-00-00', '00:00:00', '', '4564545', 'ASA2323', '2017-03-07 00:00:00', 5, '', '0.00', '0.00', '0.00', '0.00', '1250.00', '0.00', '0.00', '0.00', '11250.00', '2017-03-07 16:32:21', '2017-03-07 16:32:26', 1, 1),
(6, 2, 'INV6', '0000-00-00', '00:00:00', '', '4564545', 'ASA2323', '2017-03-07 00:00:00', 5, '', '0.00', '0.00', '0.00', '0.00', '1250.00', '0.00', '0.00', '0.00', '11250.00', '2017-03-07 16:34:00', '2017-03-07 16:34:10', 1, 1),
(7, 2, 'INV7', '0000-00-00', '00:00:00', '', '4564545', 'ASA2323', '2017-03-07 00:00:00', 4, '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '10000.00', '2017-03-07 16:36:24', '2017-03-07 16:38:06', 1, 1),
(8, 2, 'INV8', '0000-00-00', '00:00:00', 'Evan', '4564545', '', '2017-03-07 00:00:00', 7, '', '0.00', '0.00', '0.00', '0.00', '10.00', '0.00', '0.00', '0.00', '15750.00', '2017-03-07 16:39:00', '2017-03-08 17:13:12', 1, 1),
(9, 2, 'INV9', '0000-00-00', '00:00:00', 'Evan', '4564545', 'ASA2323', '2017-03-07 00:00:00', 1, '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2500.00', '2017-03-07 16:39:55', '2017-03-07 16:42:53', 1, 1),
(10, 2, 'INV10', '0000-00-00', '00:00:00', 'evan', '456454587', '', '2017-03-11 00:00:00', 7, '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '17500.00', '2017-03-07 16:43:28', '2017-03-07 18:25:10', 1, 1),
(11, 1, 'INV11', '0000-00-00', '00:00:00', '1', '56564646346', '34343', '2017-03-07 00:00:00', 5, '', '0.00', '0.00', '0.00', '0.00', '9999999.99', '0.00', '0.00', '0.00', '-9999999.99', '2017-03-07 16:45:25', '2017-03-07 16:48:51', 1, 1),
(12, 1, 'INV12', '0000-00-00', '00:00:00', 'sdsds', '56564646346', '', '2017-03-05 00:00:00', 4, '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '10000.00', '2017-03-07 16:49:16', '2017-03-07 18:34:19', 1, 1),
(13, 0, 'INV13', '0000-00-00', '00:00:00', 'seegan', '65646', '', '2017-03-07 00:00:00', 8, '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '20000.00', '2017-03-07 16:50:19', '2017-04-10 10:15:00', 1, 1),
(14, 3, 'INV14', '0000-00-00', '00:00:00', 'TEST Name', '564645', '', '2017-03-07 00:00:00', 1, '', '0.00', '0.00', '0.00', '0.00', '10.00', '0.00', '0.00', '0.00', '2250.00', '2017-03-07 17:21:41', '2017-03-08 09:57:46', 1, 1),
(15, 0, 'INV15', '0000-00-00', '00:00:00', 'test', '6567767', '', '0000-00-00 00:00:00', 78, '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '195000.00', '2017-03-07 18:32:07', '2017-03-07 18:34:48', 1, 1),
(16, 0, 'INV16', '0000-00-00', '00:00:00', 'Test444', '723294729', '0', '2017-03-09 00:00:00', 5, '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '12500.00', '2017-03-08 10:18:54', '2017-03-08 10:19:29', 1, 1),
(17, 0, 'INV17', '0000-00-00', '00:00:00', 'Testtttt56', '647547383', '0', '2017-03-08 00:00:00', 6, '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '15000.00', '2017-03-08 11:17:22', '2017-03-08 11:18:32', 1, 1),
(18, 1, 'INV18', '0000-00-00', '00:00:00', 'sdsds', '56564646346', '34343', '2017-03-08 00:00:00', 6, '', '0.00', '0.00', '0.00', '0.00', '10.00', '0.00', '0.00', '0.00', '13500.00', '2017-03-08 12:57:28', '2017-03-08 12:57:37', 1, 1),
(19, 0, 'INV19', '0000-00-00', '00:00:00', 'sowmi', '354353454', '', '2017-03-08 00:00:00', 1, '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2500.00', '2017-03-08 14:11:40', '2017-03-08 17:22:49', 1, 1),
(20, 2, 'INV20', '0000-00-00', '00:00:00', 'Evan', '4564545', 'ASA2323', '2017-03-08 00:00:00', 5, '', '0.00', '0.00', '0.00', '0.00', '10.00', '0.00', '0.00', '0.00', '11250.00', '2017-03-08 14:17:12', '2017-03-08 17:14:57', 1, 1),
(21, 1, 'INV21', '0000-00-00', '00:00:00', 'sdsds', '56564646346', '34343', '2017-03-08 00:00:00', 6, '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '13500.00', '2017-03-08 17:20:43', '2017-03-08 17:21:14', 1, 1),
(22, 1, 'INV22', '0000-00-00', '00:00:00', 'sdsds', '56564646346', '', '2017-03-08 00:00:00', 5, '', '0.00', '0.00', '0.00', '0.00', '1250.00', '0.00', '0.00', '0.00', '11250.00', '2017-03-08 17:22:03', '2017-03-08 17:22:35', 1, 1),
(23, 1, 'INV23', '0000-00-00', '00:00:00', '', '56564646346', '0', '2017-03-10 00:00:00', 4, '', '0.00', '10000.00', '0.00', '0.00', '1000.00', '0.00', '0.00', '0.00', '9000.00', '2017-03-08 18:36:16', '2017-03-10 10:14:24', 1, 1),
(24, 1, 'INV24', '0000-00-00', '00:00:00', 'sowmiya', '56564646346', '', '2017-03-10 00:00:00', 6, '', '0.00', '15000.00', '0.00', '0.00', '1500.00', '0.00', '0.00', '0.00', '13500.00', '2017-03-10 10:16:52', '2017-03-10 10:22:00', 1, 1),
(25, 3, 'INV25', '0000-00-00', '00:00:00', 'TEST Name', '564645', '3434FGRFG', '2017-03-14 00:00:00', 4, '', '0.00', '10000.00', '0.00', '0.00', '1000.00', '0.00', '0.00', '0.00', '9000.00', '2017-03-14 11:48:18', '2017-03-14 11:48:35', 1, 1),
(26, 2, 'INV26', '0000-00-00', '00:00:00', 'Evan', '4564545', '', '2017-03-14 00:00:00', 2, '', '0.00', '5000.00', '0.00', '0.00', '500.00', '0.00', '0.00', '0.00', '4500.00', '2017-03-14 12:42:54', '2017-03-14 12:44:31', 1, 1),
(27, 3, 'INV27', '0000-00-00', '00:00:00', 'TEST Name', '564645', '', '2017-03-14 00:00:00', 6, '', '0.00', '15000.00', '0.00', '0.00', '1500.00', '0.00', '0.00', '0.00', '13500.00', '2017-03-14 12:56:42', '2017-04-05 16:12:39', 1, 1),
(28, 0, 'INV28', '0000-00-00', '00:00:00', 'ret', '66565', '', '2017-04-05 00:00:00', 5, '', '0.00', '12500.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '12500.00', '2017-04-05 14:48:33', '2017-04-05 16:12:14', 1, 1),
(29, 0, 'INV29', '0000-00-00', '00:00:00', 'test', 'eer', '0', '2017-04-05 00:00:00', 3, '', '0.00', '7500.00', '0.00', '0.00', '750.00', '0.00', '0.00', '0.00', '6750.00', '2017-04-05 15:58:37', '2017-04-05 18:59:28', 1, 1),
(30, 3, 'INV30', '0000-00-00', '00:00:00', 'TEST Name', '564645', '3434FGRFG', '2017-04-05 00:00:00', 1, '', '0.00', '2500.00', '0.00', '0.00', '250.00', '0.00', '0.00', '0.00', '2250.00', '2017-04-05 19:05:11', '2017-04-05 19:05:25', 1, 1),
(31, 3, 'INV31', '0000-00-00', '00:00:00', 'TEST Name', '564645', '3434FGRFG', '2017-04-05 00:00:00', 2, '', '0.00', '5000.00', '0.00', '0.00', '500.00', '0.00', '0.00', '0.00', '4500.00', '2017-04-05 19:05:41', '2017-04-05 19:07:18', 1, 1),
(32, 0, 'INV32', '0000-00-00', '00:00:00', 'New User', '2356283232', '', '2017-04-08 00:00:00', 5, '4', '6000.00', '30000.00', '0.00', '0.00', '0.00', '0.00', '10.00', '3000.00', '27000.00', '2017-04-07 17:41:21', '2017-04-17 12:41:44', 1, 1),
(33, 0, 'INV33', '2017-04-11', '10:57:00', 'new user 1', '3243432', '', '2017-04-11 00:00:00', 6, '', '5000.00', '30000.00', '0.00', '0.00', '0.00', '0.00', '2.00', '600.00', '29400.00', '2017-04-10 10:08:20', '2017-04-11 10:58:09', 1, 1),
(34, 2, 'INV34', '2017-04-13', '17:46:00', 'Evan', '4564545', 'ASA2323', '2017-04-13 00:00:00', 4, '', '5000.00', '20000.00', '0.00', '0.00', '10.00', '0.00', '20.00', '4000.00', '16000.00', '2017-04-13 17:46:39', '2017-04-13 17:47:17', 1, 1),
(35, 0, 'INV35', '2017-04-17', '10:41:00', 'Football', '54454545', '0', '2017-04-17 00:00:00', 1, '', '5000.00', '5000.00', '12.50', '625.00', '0.00', '0.00', '10.00', '562.50', '5062.50', '2017-04-13 18:12:49', '2017-04-17 10:49:06', 1, 1),
(36, 5, 'INV36', '2017-04-17', '12:45:00', 'eewwe', '', 'gghgh', '0000-00-00 00:00:00', 3, '1', '5000.00', '15000.00', '12.50', '1875.00', '10.00', '0.00', '10.00', '1687.50', '15187.50', '2017-04-17 12:45:40', '2017-04-17 12:47:18', 1, 1),
(37, 3, 'INV37', '2017-04-17', '12:48:00', 'TEST Name', '564645', '3434FGRFG', '0000-00-00 00:00:00', 1, '1', '5000.00', '5000.00', '12.50', '625.00', '10.00', '0.00', '12.00', '675.00', '4950.00', '2017-04-17 12:49:11', '2017-04-17 12:49:59', 1, 1),
(38, 5, 'INV38', '2017-04-17', '12:53:00', 'eewwe', '45454545', '', '2017-04-17 12:53:22', 1, '1', '5000.00', '5000.00', '12.50', '625.00', '10.00', '0.00', '12.00', '675.00', '4950.00', '2017-04-17 12:50:43', '2017-04-17 13:05:51', 1, 1),
(39, 5, 'INV39', '2017-04-18', '10:46:00', 'eewwe', '5656867853', 'gghgh', '2017-04-18 10:46:47', 2, '1', '5000.00', '10000.00', '2.00', '200.00', '10.00', '1020.00', '0.00', '0.00', '9180.00', '2017-04-18 10:37:05', '2017-04-18 10:48:16', 1, 1),
(40, 0, 'INV40', '2017-04-18', '12:05:00', 'test', '4545454', '', '2017-04-18 12:05:08', 1, '4', '5000.00', '5000.00', '2.00', '100.00', '10.00', '0.00', '10.00', '510.00', '4590.00', '2017-04-18 11:41:19', '2017-04-18 12:21:12', 1, 1),
(41, 0, 'INV41', '2017-04-22', '14:29:00', 'marykamalam', '5454545', '0', '2017-04-22 14:29:34', 2, '2', '6000.00', '12000.00', '2.00', '240.00', '0.00', '0.00', '10.00', '1224.00', '11016.00', '2017-04-18 12:08:52', '2017-04-22 14:30:13', 1, 1),
(42, 5, 'INV42', '2017-04-20', '11:20:00', 'eewwe', '55656565', '', '2017-04-20 11:20:11', 4, '1', '5000.00', '20000.00', '2.00', '400.00', '10.00', '0.00', '10.00', '2040.00', '18360.00', '2017-04-20 10:41:35', '2017-04-20 11:23:21', 1, 1),
(43, 0, 'INV43', '2017-04-20', '11:29:00', 'yuyuyu', '89898', '0', '2017-04-20 11:29:20', 1, '1', '5000.00', '5000.00', '2.00', '100.00', '0.00', '0.00', '0.00', '0.00', '5100.00', '2017-04-20 11:24:31', '2017-04-20 11:29:30', 1, 1),
(44, 5, 'INV44', '2017-04-20', '11:29:00', 'eewwe', '-', '', '2017-04-20 11:29:50', 3, '15', '5000.00', '15000.00', '2.00', '300.00', '10.00', '1530.00', '0.00', '0.00', '13770.00', '2017-04-20 11:29:57', '2017-04-20 11:31:53', 1, 1),
(45, 8, 'INV45', '2017-04-20', '11:33:00', 'joy', 'joy', '', '2017-04-20 11:33:28', 1, '1', '5000.00', '5000.00', '2.00', '100.00', '10.00', '510.00', '0.00', '0.00', '4590.00', '2017-04-20 11:32:09', '2017-04-20 11:35:03', 1, 1),
(46, 5, 'INV46', '2017-04-20', '11:49:00', 'eewwe', '9898989', '', '2017-04-20 11:49:06', 1, '1', '5000.00', '5000.00', '2.00', '100.00', '10.00', '510.00', '0.00', '0.00', '4590.00', '2017-04-20 11:39:05', '2017-04-20 11:49:55', 1, 1),
(47, 2, 'INV47', '2017-04-20', '11:54:00', 'Evan', '4564545', '', '2017-04-20 11:54:46', 2, '1', '5000.00', '10000.00', '2.00', '200.00', '10.00', '1020.00', '0.00', '0.00', '9180.00', '2017-04-20 11:50:37', '2017-04-20 11:57:10', 1, 1),
(48, 3, 'INV48', '2017-11-21', '18:12:00', 'TEST Name', '564645', '3434FGRFG', '2017-11-21 18:12:07', 2, '13', '5000.00', '10000.00', '2.00', '200.00', '10.00', '0.00', '1.00', '102.00', '10098.00', '2017-11-21 17:31:25', '2017-11-21 18:12:35', 1, 1),
(49, 1, 'INV49', '0000-00-00', '00:00:00', 'sowmiya', '7777777777', 'CH172147484848', '2017-11-24 11:19:17', 0, '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2017-11-23 15:07:17', '2017-11-24 11:19:24', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_chaos_football_team`
--

CREATE TABLE `wp_chaos_football_team` (
  `id` int(15) NOT NULL,
  `team_name` varchar(65) NOT NULL,
  `team_image` text NOT NULL,
  `active` int(2) NOT NULL DEFAULT '1',
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedat` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_chaos_football_team`
--

INSERT INTO `wp_chaos_football_team` (`id`, `team_name`, `team_image`, `active`, `createdat`, `modifiedat`) VALUES
(1, 'is good all the time f', '', 1, '2017-02-17 17:57:09', '2017-02-17 17:58:20'),
(2, 'Evan', '', 0, '2017-02-17 18:00:40', '2017-02-28 18:29:14'),
(3, 'Ranga', '', 1, '2017-02-17 18:00:47', '0000-00-00 00:00:00'),
(4, 'Vivek', '', 1, '2017-02-17 18:00:54', '0000-00-00 00:00:00'),
(5, 'Rajesh', '', 1, '2017-02-17 18:01:00', '0000-00-00 00:00:00'),
(6, 'Seega', '', 1, '2017-02-17 18:01:50', '0000-00-00 00:00:00'),
(7, 'Evan Raj', '', 1, '2017-02-17 18:02:01', '0000-00-00 00:00:00'),
(8, 'Sowmiya', '', 1, '2017-02-17 18:02:13', '0000-00-00 00:00:00'),
(9, 'Aravind', '', 1, '2017-02-17 18:02:22', '0000-00-00 00:00:00'),
(10, 'Nadeem', '', 1, '2017-02-17 18:02:29', '0000-00-00 00:00:00'),
(11, 'Joy', '', 1, '2017-02-17 18:02:49', '0000-00-00 00:00:00'),
(12, 'tytyt', '', 1, '2017-02-20 14:30:13', '0000-00-00 00:00:00'),
(13, 'hjhgj', '', 1, '2017-02-20 14:40:45', '0000-00-00 00:00:00'),
(14, 'ghh', '', 1, '2017-02-20 14:44:37', '0000-00-00 00:00:00'),
(15, 'tyuytu', '', 1, '2017-02-20 14:50:47', '0000-00-00 00:00:00'),
(16, 'team 2', '', 1, '2017-02-20 15:05:31', '0000-00-00 00:00:00'),
(17, 'joy team', '', 1, '2017-02-23 10:52:35', '0000-00-00 00:00:00'),
(18, 'Team India', '', 1, '2017-02-23 10:58:56', '0000-00-00 00:00:00'),
(19, 'Joy New Team', '', 1, '2017-02-23 11:01:14', '0000-00-00 00:00:00'),
(20, 'Go', '', 1, '2017-02-25 15:56:42', '0000-00-00 00:00:00'),
(21, 'test seegan team', '', 1, '2017-02-28 14:19:01', '0000-00-00 00:00:00'),
(22, 'New Team2', '', 1, '2017-03-01 11:59:20', '2017-03-02 13:16:01'),
(23, 'team test', '', 1, '2017-03-02 17:21:18', '0000-00-00 00:00:00'),
(24, 'Team 1', '', 1, '2017-03-09 18:42:08', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `wp_chaos_football_team_relation`
--

CREATE TABLE `wp_chaos_football_team_relation` (
  `id` int(11) NOT NULL,
  `team_id` int(10) NOT NULL,
  `member_id` int(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_chaos_football_team_relation`
--

INSERT INTO `wp_chaos_football_team_relation` (`id`, `team_id`, `member_id`, `created_at`, `modified_at`, `active`) VALUES
(1, 15, 1, '2017-02-20 14:50:47', '2017-02-20 14:50:47', 1),
(2, 16, 1, '2017-02-20 15:05:31', '2017-02-28 18:33:37', 1),
(3, 16, 3, '2017-02-20 15:05:31', '2017-02-20 15:05:31', 1),
(4, 19, 2, '2017-02-23 11:01:14', '2017-02-23 11:01:14', 1),
(5, 19, 1, '2017-02-23 11:01:14', '2017-02-23 11:01:14', 1),
(6, 20, 2, '2017-02-25 15:56:42', '2017-02-25 15:56:42', 1),
(7, 21, 1, '2017-02-28 14:19:01', '2017-02-28 14:19:01', 1),
(8, 21, 9, '2017-02-28 14:19:01', '2017-02-28 14:19:01', 1),
(9, 22, 1, '2017-03-01 11:59:20', '2017-03-02 13:14:43', 0),
(10, 22, 6, '2017-03-01 11:59:20', '2017-03-02 13:14:43', 0),
(11, 22, 8, '2017-03-01 11:59:20', '2017-03-02 13:14:43', 0),
(12, 22, 9, '2017-03-01 11:59:20', '2017-03-02 13:14:43', 0),
(13, 22, 1, '2017-03-02 12:48:40', '2017-03-02 13:14:43', 0),
(14, 22, 6, '2017-03-02 12:48:40', '2017-03-02 13:14:43', 0),
(15, 22, 8, '2017-03-02 12:48:40', '2017-03-02 13:14:43', 0),
(16, 22, 9, '2017-03-02 12:48:40', '2017-03-02 13:14:43', 0),
(17, 22, 1, '2017-03-02 12:48:46', '2017-03-02 13:14:43', 0),
(18, 22, 6, '2017-03-02 12:48:46', '2017-03-02 13:14:43', 0),
(19, 22, 8, '2017-03-02 12:48:46', '2017-03-02 13:14:43', 0),
(20, 22, 9, '2017-03-02 12:48:46', '2017-03-02 13:14:43', 0),
(21, 22, 1, '2017-03-02 12:48:46', '2017-03-02 13:14:43', 0),
(22, 22, 6, '2017-03-02 12:48:46', '2017-03-02 13:14:43', 0),
(23, 22, 8, '2017-03-02 12:48:46', '2017-03-02 13:14:43', 0),
(24, 22, 9, '2017-03-02 12:48:46', '2017-03-02 13:14:43', 0),
(25, 22, 1, '2017-03-02 13:14:43', '2017-03-02 13:14:46', 0),
(26, 22, 6, '2017-03-02 13:14:43', '2017-03-02 13:14:46', 0),
(27, 22, 8, '2017-03-02 13:14:43', '2017-03-02 13:14:46', 0),
(28, 22, 1, '2017-03-02 13:14:46', '2017-03-02 13:16:01', 0),
(29, 22, 6, '2017-03-02 13:14:46', '2017-03-02 13:16:01', 0),
(30, 22, 8, '2017-03-02 13:14:46', '2017-03-02 13:16:01', 0),
(31, 22, 1, '2017-03-02 13:16:01', '2017-03-02 13:16:20', 0),
(32, 22, 6, '2017-03-02 13:16:01', '2017-03-02 13:16:20', 0),
(33, 22, 8, '2017-03-02 13:16:01', '2017-03-02 13:16:20', 0),
(34, 22, 1, '2017-03-02 13:16:20', '2017-03-02 13:21:01', 0),
(35, 22, 2, '2017-03-02 13:16:20', '2017-03-02 13:21:01', 0),
(36, 22, 8, '2017-03-02 13:16:20', '2017-03-02 13:21:01', 0),
(37, 22, 1, '2017-03-02 13:21:01', '2017-03-02 13:21:01', 1),
(38, 22, 2, '2017-03-02 13:21:01', '2017-03-02 13:21:01', 1),
(39, 22, 8, '2017-03-02 13:21:01', '2017-03-02 13:21:01', 1),
(40, 22, 5, '2017-03-02 13:21:01', '2017-03-02 13:21:01', 1),
(41, 22, 7, '2017-03-02 13:21:01', '2017-03-02 13:21:01', 1),
(42, 23, 1, '2017-03-02 17:21:18', '2017-03-02 17:21:18', 1),
(43, 24, 1, '2017-03-09 18:42:08', '2017-03-09 18:42:08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_chaos_gaming_billing`
--

CREATE TABLE `wp_chaos_gaming_billing` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `gaming_bill_no` varchar(50) NOT NULL,
  `game_date` date NOT NULL,
  `game_time` time NOT NULL,
  `gaming_member_name` varchar(100) NOT NULL,
  `gaming_member_phone_number` varchar(20) NOT NULL,
  `gaming_membership_no` varchar(100) NOT NULL,
  `gaming_date` datetime NOT NULL,
  `gaming_sub_total` decimal(9,2) NOT NULL,
  `gaming_vat` varchar(100) NOT NULL,
  `gaming_vat_val` decimal(9,2) NOT NULL,
  `gaming_member_discount` decimal(9,2) NOT NULL,
  `gaming_member_discount_value` decimal(9,2) NOT NULL,
  `gaming_discount` decimal(9,2) NOT NULL,
  `gaming_discount_value` decimal(9,2) NOT NULL,
  `gaming_bill` decimal(9,2) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `was_bulid` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_chaos_gaming_billing`
--

INSERT INTO `wp_chaos_gaming_billing` (`id`, `member_id`, `gaming_bill_no`, `game_date`, `game_time`, `gaming_member_name`, `gaming_member_phone_number`, `gaming_membership_no`, `gaming_date`, `gaming_sub_total`, `gaming_vat`, `gaming_vat_val`, `gaming_member_discount`, `gaming_member_discount_value`, `gaming_discount`, `gaming_discount_value`, `gaming_bill`, `created_at`, `modified_at`, `was_bulid`, `active`) VALUES
(1, 3, 'INV1', '0000-00-00', '00:00:00', '', '564645', '0', '2017-03-10 00:00:00', '0.00', '', '0.00', '0.00', '0.00', '10.00', '0.00', '0.00', '2017-03-08 15:07:38', '2017-03-09 14:48:02', 1, 0),
(2, 0, 'INV2', '0000-00-00', '00:00:00', 'trrtr', '654656546', '', '2017-03-09 00:00:00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2017-03-08 15:07:55', '2017-03-09 18:13:22', 1, 0),
(3, 0, 'INV3', '0000-00-00', '00:00:00', 'rerrtre', '564645', '', '2017-03-10 00:00:00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '675.00', '2017-03-09 10:42:23', '2017-04-05 19:02:07', 1, 0),
(4, 0, 'INV4', '0000-00-00', '00:00:00', '', '6565656', '', '2017-03-09 00:00:00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '2250.00', '2017-03-09 10:44:53', '2017-04-05 19:02:16', 1, 0),
(5, 0, 'INV5', '0000-00-00', '00:00:00', '', '7787876', '', '2017-03-09 00:00:00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '4725.00', '2017-03-09 10:47:43', '2017-03-09 10:48:34', 1, 1),
(6, 1, 'INV6', '0000-00-00', '00:00:00', '', '56564646346', '0', '2017-03-09 00:00:00', '0.00', '', '0.00', '0.00', '0.00', '7.50', '0.00', '67.50', '2017-03-09 10:51:24', '2017-03-09 10:51:40', 1, 1),
(7, 0, 'INV7', '0000-00-00', '00:00:00', 'sample2', '75754747', '', '2017-03-09 00:00:00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2017-03-09 10:52:09', '2017-03-09 15:38:40', 1, 1),
(8, 0, 'INV8', '0000-00-00', '00:00:00', 'SSSS', '555555555', '0', '2017-03-09 00:00:00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '75.00', '2017-03-09 10:56:16', '2017-03-09 11:02:25', 1, 1),
(9, 3, 'INV9', '0000-00-00', '00:00:00', 'TEST Name1', '564645', '', '2017-03-09 00:00:00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2017-03-09 11:02:42', '2017-03-09 14:50:52', 1, 1),
(10, 3, 'INV10', '0000-00-00', '00:00:00', 'TEST Name', '564645', '3434FGRFG', '2017-03-09 00:00:00', '0.00', '', '0.00', '0.00', '0.00', '90.00', '0.00', '810.00', '2017-03-09 11:05:25', '2017-03-09 12:47:45', 1, 1),
(11, 0, 'INV11', '0000-00-00', '00:00:00', 'Test65', '5477467', '', '2017-03-09 00:00:00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '975.00', '2017-03-09 15:20:29', '2017-03-09 18:12:48', 1, 1),
(12, 2, 'INV12', '0000-00-00', '00:00:00', 'Evan', '4564545', '', '2017-03-09 00:00:00', '0.00', '', '0.00', '0.00', '0.00', '97.50', '0.00', '877.50', '2017-03-09 16:08:04', '2017-03-09 18:11:55', 1, 1),
(13, 3, 'INV13', '0000-00-00', '00:00:00', 'TEST Name', '564645', '3434FGRFG', '2017-03-09 00:00:00', '0.00', '', '0.00', '0.00', '0.00', '52.50', '0.00', '472.50', '2017-03-09 17:41:46', '2017-03-09 17:42:02', 1, 1),
(14, 1, 'INV14', '0000-00-00', '00:00:00', 'sdsds', '56564646346', '34343', '2017-03-09 00:00:00', '0.00', '', '0.00', '0.00', '0.00', '315.00', '0.00', '2835.00', '2017-03-09 17:49:10', '2017-03-09 17:49:54', 1, 1),
(15, 3, 'INV15', '0000-00-00', '00:00:00', 'TEST Name', '564645', '3434FGRFG', '2017-03-09 00:00:00', '0.00', '', '0.00', '0.00', '0.00', '60.00', '0.00', '540.00', '2017-03-09 17:53:40', '2017-03-09 17:54:25', 1, 1),
(16, 1, 'INV16', '0000-00-00', '00:00:00', 'sdsds', '56564646346', '34343', '2017-03-14 00:00:00', '0.00', '', '0.00', '0.00', '0.00', '615.00', '0.00', '5535.00', '2017-03-09 19:13:05', '2017-03-14 11:47:43', 1, 1),
(17, 2, 'INV17', '0000-00-00', '00:00:00', 'Evan', '4564545', '', '2017-03-14 00:00:00', '0.00', '', '0.00', '0.00', '0.00', '90.00', '0.00', '0.00', '2017-03-14 12:46:12', '2017-03-14 12:54:16', 1, 1),
(18, 3, 'INV18', '0000-00-00', '00:00:00', 'TEST Name', '564645', '', '2017-03-14 00:00:00', '0.00', '', '0.00', '0.00', '0.00', '105.00', '0.00', '945.00', '2017-03-14 13:00:03', '2017-03-14 13:00:59', 1, 1),
(19, 3, 'INV19', '0000-00-00', '00:00:00', 'TEST Name', '564645', '3434FGRFG', '2017-04-05 00:00:00', '0.00', '', '0.00', '0.00', '0.00', '420.00', '0.00', '3780.00', '2017-04-05 19:00:40', '2017-04-05 19:01:13', 1, 1),
(20, 0, 'INV20', '2017-04-12', '16:10:00', 'test', '3434343', '0', '2017-04-12 00:00:00', '975.00', '', '0.00', '0.00', '0.00', '20.00', '195.00', '780.00', '2017-04-11 14:54:19', '2017-04-12 16:35:40', 1, 1),
(21, 0, 'INV21', '2017-04-12', '16:43:00', 'finerer', '6546547647', '0', '2017-04-12 00:00:00', '2925.00', '', '0.00', '0.00', '0.00', '10.00', '292.50', '2632.50', '2017-04-12 16:36:11', '2017-04-12 16:43:19', 1, 1),
(22, 0, 'INV22', '2017-04-12', '16:43:00', 'finerer', '6546547647', '0', '2017-04-12 00:00:00', '2925.00', '', '0.00', '0.00', '0.00', '10.00', '292.50', '2632.50', '2017-04-12 16:43:38', '2017-04-12 16:44:14', 1, 1),
(23, 0, 'INV23', '2017-04-12', '16:45:00', 'neewew', '5454', '0', '2017-04-12 00:00:00', '450.00', '', '0.00', '0.00', '0.00', '1.00', '4.50', '445.50', '2017-04-12 16:45:41', '2017-04-12 16:45:49', 1, 1),
(24, 0, 'INV24', '2017-04-12', '16:46:00', 'findfeerte4', '5454', '0', '2017-04-12 00:00:00', '6300.00', '', '0.00', '0.00', '0.00', '10.00', '630.00', '5670.00', '2017-04-12 16:46:46', '2017-04-12 16:46:54', 1, 1),
(25, 0, 'INV25', '2017-04-12', '16:47:00', 'fetret', '54655', '0', '2017-04-12 00:00:00', '6075.00', '', '0.00', '0.00', '0.00', '10.00', '607.50', '5467.50', '2017-04-12 16:47:18', '2017-04-12 16:47:33', 1, 1),
(26, 0, 'INV26', '2017-04-12', '16:48:00', 'fineeee', '75767675', '0', '2017-04-12 00:00:00', '3600.00', '', '0.00', '0.00', '0.00', '20.00', '720.00', '2880.00', '2017-04-12 16:48:10', '2017-04-12 16:48:33', 1, 1),
(27, 0, 'INV27', '0000-00-00', '00:00:00', 'Final bill new', '6273911', '0', '0000-00-00 00:00:00', '11175.00', '', '0.00', '0.00', '0.00', '10.00', '1117.50', '10057.50', '2017-04-13 09:59:57', '2017-04-13 10:39:09', 1, 1),
(28, 0, 'INV28', '0000-00-00', '00:00:00', 'ghdfgyfruyurer', '56565655', '0', '0000-00-00 00:00:00', '6000.00', '', '0.00', '0.00', '0.00', '10.00', '600.00', '5400.00', '2017-04-13 10:45:59', '2017-04-13 10:46:20', 1, 1),
(29, 0, 'INV29', '0000-00-00', '10:46:00', '65656', '65656', '0', '2017-04-13 10:46:20', '4275.00', '', '0.00', '0.00', '0.00', '10.00', '427.50', '3847.50', '2017-04-13 10:47:38', '2017-04-13 10:48:23', 1, 1),
(30, 0, 'INV30', '0000-00-00', '10:48:00', '111111111111', '55555555555', '0', '2017-04-13 10:48:23', '4275.00', '', '0.00', '0.00', '0.00', '1.00', '42.75', '4232.25', '2017-04-13 10:50:28', '2017-04-13 10:51:06', 1, 1),
(31, 0, 'INV31', '2017-04-13', '11:00:00', 'rty6u7u7u7', '666666677777', '0', '2017-04-13 11:00:38', '4350.00', '', '0.00', '0.00', '0.00', '1.00', '43.50', '4306.50', '2017-04-13 10:59:36', '2017-04-13 11:01:48', 1, 1),
(32, 0, 'INV32', '2017-04-13', '11:02:00', '5ttyyyt', '566666665555', '0', '2017-04-13 11:02:40', '4350.00', '', '0.00', '0.00', '0.00', '2.00', '87.00', '4263.00', '2017-04-13 11:02:58', '2017-04-13 11:05:05', 1, 1),
(33, 0, 'INV33', '2017-04-13', '11:05:00', '5445', '545', '0', '2017-04-13 11:05:05', '1800.00', '', '0.00', '0.00', '0.00', '3.00', '54.00', '1746.00', '2017-04-13 11:05:33', '2017-04-13 11:05:36', 1, 1),
(34, 0, 'INV34', '2017-04-13', '11:05:00', '323', '3232', '0', '2017-04-13 11:05:37', '1800.00', '', '0.00', '0.00', '0.00', '2.00', '36.00', '1764.00', '2017-04-13 11:08:00', '2017-04-13 11:08:03', 1, 1),
(35, 0, 'INV35', '2017-04-13', '11:08:00', 'Oldddddd', '75867565695', '0', '2017-04-13 11:08:22', '7800.00', '', '0.00', '0.00', '0.00', '10.00', '780.00', '7020.00', '2017-04-13 11:12:53', '2017-04-13 11:13:09', 1, 1),
(36, 0, 'INV36', '2017-04-13', '14:06:00', '656565656', '5656565', '0', '2017-04-13 14:06:57', '450.00', '', '0.00', '0.00', '0.00', '1.00', '4.50', '445.50', '2017-04-13 14:07:15', '2017-04-13 14:07:26', 1, 1),
(37, 0, 'INV37', '2017-04-13', '14:09:00', 'fted', '77676767', '0', '2017-04-13 14:09:34', '450.00', '', '0.00', '0.00', '0.00', '12.00', '54.00', '396.00', '2017-04-13 14:09:36', '2017-04-13 14:09:50', 1, 1),
(38, 0, 'INV38', '2017-04-13', '14:14:00', 'hth', 'ujyu', '0', '2017-04-13 14:14:34', '75.00', '', '0.00', '0.00', '0.00', '7.00', '5.25', '69.75', '2017-04-13 14:10:26', '2017-04-13 14:14:43', 1, 1),
(39, 0, 'INV39', '2017-04-13', '14:17:00', '76767', '676767', '0', '2017-04-13 14:17:25', '75.00', '', '0.00', '0.00', '0.00', '6.00', '4.50', '70.50', '2017-04-13 14:19:14', '2017-04-13 14:19:32', 1, 1),
(40, 2, 'INV40', '2017-04-13', '14:20:00', 'Evan', '4564545', 'ASA2323', '2017-04-13 14:20:04', '150.00', '', '0.00', '10.00', '15.00', '0.00', '0.00', '135.00', '2017-04-13 14:20:17', '2017-04-13 14:20:30', 1, 1),
(41, 0, 'INV41', '2017-04-13', '14:23:00', 'false', '65656', '0', '2017-04-13 14:23:42', '75.00', '', '0.00', '0.00', '0.00', '10.00', '7.50', '67.50', '2017-04-13 14:22:52', '2017-04-13 14:24:53', 1, 1),
(42, 0, 'INV42', '2017-04-13', '15:50:00', 'tyyyyy', 'tyyyyyyyy', '', '2017-04-13 14:27:42', '75.00', '', '0.00', '0.00', '0.00', '12.00', '9.00', '66.00', '2017-04-13 14:27:47', '2017-04-13 15:51:08', 1, 1),
(43, 2, 'INV43', '2017-04-13', '15:47:00', 'dummy name', '4564545', '', '0000-00-00 00:00:00', '975.00', '', '0.00', '10.00', '97.50', '0.00', '0.00', '877.50', '2017-04-13 14:29:12', '2017-04-13 15:48:24', 1, 1),
(44, 0, 'INV44', '2017-04-13', '15:35:00', '', '78888888', '', '0000-00-00 00:00:00', '150.00', '', '0.00', '0.00', '0.00', '5.00', '7.50', '142.50', '2017-04-13 14:29:49', '2017-04-13 15:37:04', 1, 0),
(45, 2, 'INV45', '2017-04-13', '18:26:00', 'Evan', '4564545', 'ASA2323', '2017-04-13 18:26:44', '450.00', '', '0.00', '10.00', '45.00', '0.00', '0.00', '405.00', '2017-04-13 15:57:05', '2017-04-13 18:28:47', 1, 1),
(46, 0, 'INV46', '2017-04-17', '17:56:00', 'nerererefsd', '34324', '', '2017-04-17 16:42:00', '2025.00', '10', '202.50', '0.00', '0.00', '10.00', '222.75', '2005.00', '2017-04-17 16:42:07', '2017-04-17 17:56:22', 1, 1),
(47, 0, 'INV47', '2017-04-18', '11:16:00', 'sowmi', '7964', '0', '2017-04-18 11:16:10', '75.00', '2', '1.50', '0.00', '0.00', '0.00', '0.00', '77.00', '2017-04-18 11:16:16', '2017-04-18 11:16:26', 1, 1),
(48, 0, 'INV48', '2017-04-18', '11:16:00', 'sowmi', '9874164561', '0', '2017-04-18 11:16:35', '1425.00', '2', '28.50', '0.00', '0.00', '5.00', '72.68', '1381.00', '2017-04-18 11:16:38', '2017-04-18 11:18:48', 1, 1),
(49, 3, 'INV49', '2017-04-20', '12:19:00', 'TEST Name', '564645', '3434FGRFG', '2017-04-20 12:11:00', '3600.00', '2', '72.00', '10.00', '367.20', '0.00', '0.00', '3305.00', '2017-04-18 11:42:09', '2017-04-20 12:20:19', 1, 1),
(50, 1, 'INV50', '2017-04-20', '12:54:00', 'sdsds', '323222', '34343', '2017-04-20 12:32:43', '12225.00', '2', '244.50', '10.00', '1246.95', '0.00', '0.00', '11223.00', '2017-04-20 12:24:34', '2017-04-20 12:54:24', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_chaos_gaming_billing_relation`
--

CREATE TABLE `wp_chaos_gaming_billing_relation` (
  `id` int(11) NOT NULL,
  `gaming_id` int(11) NOT NULL,
  `gaming_pc_id` int(11) NOT NULL,
  `gaming_actual_played_hours` varchar(100) NOT NULL,
  `gaming_hours` int(11) NOT NULL,
  `gaming_amount` decimal(9,2) NOT NULL,
  `gaming_total` float(9,2) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_chaos_gaming_billing_relation`
--

INSERT INTO `wp_chaos_gaming_billing_relation` (`id`, `gaming_id`, `gaming_pc_id`, `gaming_actual_played_hours`, `gaming_hours`, `gaming_amount`, `gaming_total`, `created_at`, `modified_at`, `active`) VALUES
(1, 5, 7, '', 9, '0.00', 0.00, '2017-03-09 10:48:34', '2017-03-09 10:48:34', 1),
(2, 6, 1, '', 1, '0.00', 0.00, '2017-03-09 10:51:40', '2017-03-09 10:51:40', 1),
(3, 7, 1, '', 1, '0.00', 0.00, '2017-03-09 10:52:36', '2017-03-09 15:28:08', 0),
(4, 8, 1, '', 1, '0.00', 0.00, '2017-03-09 11:02:25', '2017-03-09 11:02:25', 1),
(5, 9, 2, '', 1, '0.00', 0.00, '2017-03-09 11:02:59', '2017-03-09 14:50:52', 0),
(6, 9, 3, '', 4, '0.00', 0.00, '2017-03-09 11:02:59', '2017-03-09 14:50:52', 0),
(7, 9, 7, '', 7, '0.00', 0.00, '2017-03-09 11:02:59', '2017-03-09 14:50:52', 0),
(8, 10, 3, '', 4, '0.00', 0.00, '2017-03-09 12:47:45', '2017-03-09 12:47:45', 1),
(9, 3, 4, '', 5, '0.00', 0.00, '2017-03-09 14:48:37', '2017-03-09 16:14:55', 0),
(10, 3, 6, '', 5, '0.00', 0.00, '2017-03-09 14:48:37', '2017-03-09 16:14:55', 0),
(11, 3, 1, '', 1, '0.00', 0.00, '2017-03-09 14:48:37', '2017-03-09 16:14:55', 0),
(12, 2, 2, '', 4, '0.00', 0.00, '2017-03-09 14:49:49', '2017-03-09 14:50:00', 0),
(13, 2, 2, '', 4, '0.00', 0.00, '2017-03-09 14:50:00', '2017-03-09 14:50:06', 0),
(14, 2, 6, '', 1, '0.00', 0.00, '2017-03-09 14:50:00', '2017-03-09 14:50:06', 0),
(15, 2, 2, '', 4, '0.00', 0.00, '2017-03-09 14:50:06', '2017-03-09 14:50:06', 1),
(16, 2, 6, '', 1, '0.00', 0.00, '2017-03-09 14:50:06', '2017-03-09 14:50:06', 1),
(17, 2, 4, '', 5, '0.00', 0.00, '2017-03-09 14:50:06', '2017-03-09 14:50:06', 1),
(18, 9, 2, '', 1, '0.00', 0.00, '2017-03-09 14:50:52', '2017-03-09 14:50:52', 1),
(19, 9, 3, '', 4, '0.00', 0.00, '2017-03-09 14:50:52', '2017-03-09 14:50:52', 1),
(20, 9, 7, '', 7, '0.00', 0.00, '2017-03-09 14:50:52', '2017-03-09 14:50:52', 1),
(21, 11, 4, '', 5, '0.00', 0.00, '2017-03-09 15:20:47', '2017-03-09 18:12:48', 0),
(22, 7, 1, '', 1, '0.00', 0.00, '2017-03-09 15:28:08', '2017-03-09 15:38:40', 0),
(23, 7, 1, '', 1, '0.00', 0.00, '2017-03-09 15:38:40', '2017-03-09 15:38:40', 1),
(24, 3, 9, '', 1, '0.00', 0.00, '2017-03-09 16:14:55', '2017-03-09 16:15:17', 0),
(25, 3, 9, '', 1, '0.00', 0.00, '2017-03-09 16:15:17', '2017-03-09 16:16:39', 0),
(26, 3, 9, '', 1, '0.00', 0.00, '2017-03-09 16:16:39', '2017-03-09 16:16:39', 1),
(27, 12, 1, '', 1, '0.00', 0.00, '2017-03-09 17:21:35', '2017-03-09 18:11:55', 0),
(28, 13, 1, '', 2, '0.00', 0.00, '2017-03-09 17:42:02', '2017-03-09 17:42:02', 1),
(29, 14, 4, '', 5, '0.00', 0.00, '2017-03-09 17:49:54', '2017-03-09 17:49:54', 1),
(30, 14, 1, '', 2, '0.00', 0.00, '2017-03-09 17:49:54', '2017-03-09 17:49:54', 1),
(31, 14, 4, '', 5, '0.00', 0.00, '2017-03-09 17:49:54', '2017-03-09 17:49:54', 1),
(32, 14, 0, '', 0, '0.00', 0.00, '2017-03-09 17:49:54', '2017-03-09 17:49:54', 1),
(33, 15, 2, '', 1, '0.00', 150.00, '2017-03-09 17:54:25', '2017-03-09 17:54:25', 1),
(34, 15, 1, '', 1, '0.00', 75.00, '2017-03-09 17:54:25', '2017-03-09 17:54:25', 1),
(35, 15, 2, '', 2, '0.00', 300.00, '2017-03-09 17:54:25', '2017-03-09 17:54:25', 1),
(36, 15, 1, '', 1, '0.00', 75.00, '2017-03-09 17:54:25', '2017-03-09 17:54:25', 1),
(37, 12, 1, '', 4, '0.00', 300.00, '2017-03-09 18:11:55', '2017-03-09 18:11:55', 1),
(38, 12, 3, '', 3, '0.00', 675.00, '2017-03-09 18:11:55', '2017-03-09 18:11:55', 1),
(39, 11, 1, '', 1, '0.00', 75.00, '2017-03-09 18:12:48', '2017-03-09 18:12:48', 1),
(40, 11, 3, '', 4, '0.00', 900.00, '2017-03-09 18:12:48', '2017-03-09 18:12:48', 1),
(41, 16, 9, '', 9, '0.00', 6075.00, '2017-03-14 11:47:43', '2017-03-14 11:47:43', 1),
(42, 16, 1, '', 1, '0.00', 75.00, '2017-03-14 11:47:43', '2017-03-14 11:47:43', 1),
(43, 17, 2, '', 1, '0.00', 150.00, '2017-03-14 12:46:28', '2017-03-14 12:47:03', 0),
(44, 17, 3, '', 1, '0.00', 225.00, '2017-03-14 12:46:28', '2017-03-14 12:47:03', 0),
(45, 17, 2, '', 1, '0.00', 150.00, '2017-03-14 12:47:03', '2017-03-14 12:54:16', 0),
(46, 17, 3, '', 3, '0.00', 675.00, '2017-03-14 12:47:03', '2017-03-14 12:54:16', 0),
(47, 17, 1, '', 1, '0.00', 75.00, '2017-03-14 12:47:03', '2017-03-14 12:54:16', 0),
(48, 17, 2, '', 1, '0.00', 150.00, '2017-03-14 12:54:16', '2017-03-14 12:54:16', 1),
(49, 17, 3, '', 3, '0.00', 675.00, '2017-03-14 12:54:16', '2017-03-14 12:54:16', 1),
(50, 17, 1, '', 1, '0.00', 75.00, '2017-03-14 12:54:16', '2017-03-14 12:54:16', 1),
(51, 18, 4, '', 3, '0.00', 900.00, '2017-03-14 13:00:25', '2017-03-14 13:00:59', 0),
(52, 18, 1, '', 1, '0.00', 75.00, '2017-03-14 13:00:25', '2017-03-14 13:00:59', 0),
(53, 18, 4, '', 4, '0.00', 1200.00, '2017-03-14 13:00:25', '2017-03-14 13:00:59', 0),
(54, 18, 4, '', 3, '0.00', 900.00, '2017-03-14 13:00:59', '2017-03-14 13:00:59', 1),
(55, 18, 1, '', 1, '0.00', 75.00, '2017-03-14 13:00:59', '2017-03-14 13:00:59', 1),
(56, 18, 1, '', 1, '0.00', 75.00, '2017-03-14 13:00:59', '2017-03-14 13:00:59', 1),
(57, 19, 1, '', 2, '0.00', 150.00, '2017-04-05 19:01:13', '2017-04-05 19:01:13', 1),
(58, 19, 2, '', 4, '0.00', 600.00, '2017-04-05 19:01:13', '2017-04-05 19:01:13', 1),
(59, 19, 23, '', 2, '0.00', 3450.00, '2017-04-05 19:01:13', '2017-04-05 19:01:13', 1),
(60, 25, 3, '38 : 56', 39, '75.00', 2925.00, '2017-04-12 16:47:33', '2017-04-12 16:47:33', 1),
(61, 26, 3, '38 : 57', 39, '75.00', 2925.00, '2017-04-12 16:48:33', '2017-04-12 16:48:33', 1),
(62, 26, 8, '02 : 23', 3, '0.00', 225.00, '2017-04-12 16:48:34', '2017-04-12 16:48:34', 1),
(63, 26, 7, '05 : 51', 6, '0.00', 450.00, '2017-04-12 16:48:34', '2017-04-12 16:48:34', 1),
(64, 27, 8, '20 : 12', 21, '75.00', 1575.00, '2017-04-13 10:39:09', '2017-04-13 10:39:09', 1),
(65, 27, 5, '23 : 42', 24, '0.00', 1800.00, '2017-04-13 10:39:09', '2017-04-13 10:39:09', 1),
(66, 27, 3, '56 : 47', 57, '0.00', 4275.00, '2017-04-13 10:39:09', '2017-04-13 10:39:09', 1),
(67, 27, 4, '22 : 42', 23, '0.00', 1725.00, '2017-04-13 10:39:09', '2017-04-13 10:39:09', 1),
(68, 27, 7, '23 : 42', 24, '0.00', 1800.00, '2017-04-13 10:39:09', '2017-04-13 10:39:09', 1),
(69, 27, 0, '', 0, '0.00', 0.00, '2017-04-13 10:39:09', '2017-04-13 10:39:09', 1),
(70, 28, 3, '56 : 55', 57, '75.00', 4275.00, '2017-04-13 10:46:20', '2017-04-13 10:46:20', 1),
(71, 28, 4, '22 : 50', 23, '0.00', 1725.00, '2017-04-13 10:46:20', '2017-04-13 10:46:20', 1),
(72, 29, 3, '56 : 57', 57, '75.00', 4275.00, '2017-04-13 10:48:23', '2017-04-13 10:48:23', 1),
(73, 30, 3, '57 : 00', 57, '75.00', 4275.00, '2017-04-13 10:51:06', '2017-04-13 10:51:06', 1),
(74, 31, 3, '57 : 11', 58, '75.00', 4350.00, '2017-04-13 11:01:48', '2017-04-13 11:01:48', 1),
(75, 32, 3, '57 : 12', 58, '75.00', 4350.00, '2017-04-13 11:05:05', '2017-04-13 11:05:05', 1),
(76, 33, 4, '23 : 09', 24, '75.00', 1800.00, '2017-04-13 11:05:37', '2017-04-13 11:05:37', 1),
(77, 34, 4, '23 : 12', 24, '75.00', 1800.00, '2017-04-13 11:08:03', '2017-04-13 11:08:03', 1),
(78, 35, 5, '24 : 16', 25, '75.00', 1875.00, '2017-04-13 11:13:09', '2017-04-13 11:13:09', 1),
(79, 35, 8, '20 : 47', 21, '0.00', 1575.00, '2017-04-13 11:13:09', '2017-04-13 11:13:09', 1),
(80, 35, 3, '57 : 21', 58, '0.00', 4350.00, '2017-04-13 11:13:10', '2017-04-13 11:13:10', 1),
(82, 39, 14, '00 : 07', 1, '75.00', 75.00, '2017-04-13 14:19:32', '2017-04-13 14:19:32', 1),
(83, 40, 16, '00 : 08', 1, '75.00', 75.00, '2017-04-13 14:20:30', '2017-04-13 14:20:30', 1),
(84, 40, 17, '00 : 08', 1, '75.00', 75.00, '2017-04-13 14:20:30', '2017-04-13 14:20:30', 1),
(85, 41, 20, '00 : 03', 1, '75.00', 75.00, '2017-04-13 14:24:53', '2017-04-13 14:24:53', 1),
(86, 42, 12, '03 : 13', 4, '75.00', 300.00, '2017-04-13 14:27:58', '2017-04-13 15:51:08', 0),
(87, 42, 21, '00 : 06', 1, '75.00', 75.00, '2017-04-13 14:27:58', '2017-04-13 15:51:08', 0),
(88, 43, 19, '00 : 07', 1, '75.00', 75.00, '2017-04-13 14:29:35', '2017-04-13 15:48:24', 0),
(89, 43, 18, '00 : 07', 1, '75.00', 75.00, '2017-04-13 14:29:35', '2017-04-13 15:48:24', 0),
(90, 44, 20, '00 : 08', 1, '75.00', 75.00, '2017-04-13 14:29:59', '2017-04-13 15:41:14', 1),
(91, 43, 19, '00 : 07', 6, '75.00', 450.00, '2017-04-13 15:48:24', '2017-04-13 15:48:24', 1),
(92, 43, 18, '00 : 07', 7, '75.00', 525.00, '2017-04-13 15:48:24', '2017-04-13 15:48:24', 1),
(93, 42, 12, '03 : 13', 1, '75.00', 75.00, '2017-04-13 15:51:08', '2017-04-13 15:51:08', 1),
(94, 42, 21, '00 : 06', 0, '75.00', 0.00, '2017-04-13 15:51:08', '2017-04-13 15:51:08', 1),
(95, 45, 28, '00 : 01', 1, '75.00', 75.00, '2017-04-13 18:28:47', '2017-04-13 18:28:47', 1),
(96, 45, 23, '03 : 45', 4, '75.00', 300.00, '2017-04-13 18:28:47', '2017-04-13 18:28:47', 1),
(97, 45, 26, '00 : 06', 1, '75.00', 75.00, '2017-04-13 18:28:47', '2017-04-13 18:28:47', 1),
(98, 46, 25, '98 : 00', 98, '75.00', 7350.00, '2017-04-17 16:42:21', '2017-04-17 17:47:22', 0),
(99, 46, 25, '98 : 00', 98, '75.00', 7350.00, '2017-04-17 17:47:22', '2017-04-17 17:56:22', 0),
(100, 46, 25, '98 : 00', 27, '75.00', 2025.00, '2017-04-17 17:56:22', '2017-04-17 17:56:22', 1),
(101, 47, 0, '1', 1, '75.00', 75.00, '2017-04-18 11:16:26', '2017-04-18 11:16:26', 1),
(102, 48, 31, '00 : 04', 1, '75.00', 75.00, '2017-04-18 11:18:48', '2017-04-18 11:18:48', 1),
(103, 48, 29, '17 : 28', 18, '75.00', 1350.00, '2017-04-18 11:18:48', '2017-04-18 11:18:48', 1),
(104, 49, 37, '47 : 09', 48, '75.00', 3600.00, '2017-04-20 12:18:31', '2017-04-20 12:20:19', 0),
(105, 49, 37, '47 : 09', 48, '75.00', 3600.00, '2017-04-20 12:20:19', '2017-04-20 12:20:19', 1),
(106, 50, 27, '162 : 06', 163, '75.00', 12225.00, '2017-04-20 12:37:35', '2017-04-20 12:49:28', 0),
(107, 50, 27, '162 : 06', 165, '75.00', 12375.00, '2017-04-20 12:49:28', '2017-04-20 12:51:53', 0),
(108, 50, 27, '162 : 06', 100, '75.00', 7500.00, '2017-04-20 12:51:53', '2017-04-20 12:53:12', 0),
(109, 50, 27, '162 : 06', 163, '75.00', 12225.00, '2017-04-20 12:53:13', '2017-04-20 12:53:20', 0),
(110, 50, 27, '162 : 06', 163, '75.00', 12225.00, '2017-04-20 12:53:20', '2017-04-20 12:54:24', 0),
(111, 50, 27, '162 : 06', 163, '75.00', 12225.00, '2017-04-20 12:54:24', '2017-04-20 12:54:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_chaos_lazertag_billing`
--

CREATE TABLE `wp_chaos_lazertag_billing` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `lazertag_bill_no` varchar(100) NOT NULL,
  `lazer_date` date NOT NULL,
  `lazertag_member_name` varchar(100) NOT NULL,
  `lazertag_member_phone_number` varchar(20) NOT NULL,
  `lazertag_membership_no` varchar(100) NOT NULL,
  `lazertag_date` datetime NOT NULL,
  `lazer_time` time NOT NULL,
  `gametype` varchar(20) NOT NULL,
  `lazertag_players` decimal(9,0) NOT NULL,
  `lazertag_hours` decimal(9,0) NOT NULL,
  `lazertag_amount` decimal(9,2) NOT NULL,
  `lazertag_total` decimal(9,2) NOT NULL,
  `lazertag_vat` varchar(100) NOT NULL,
  `lazertag_vat_value` decimal(9,2) NOT NULL,
  `lazertag_member_discount` decimal(9,2) NOT NULL,
  `lazertag_member_discount_value` decimal(9,2) NOT NULL,
  `lazertag_discount` decimal(9,2) NOT NULL,
  `lazertag_discount_value` decimal(9,2) NOT NULL,
  `lazertag_bill` decimal(9,2) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `was_bulid` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_chaos_lazertag_billing`
--

INSERT INTO `wp_chaos_lazertag_billing` (`id`, `member_id`, `lazertag_bill_no`, `lazer_date`, `lazertag_member_name`, `lazertag_member_phone_number`, `lazertag_membership_no`, `lazertag_date`, `lazer_time`, `gametype`, `lazertag_players`, `lazertag_hours`, `lazertag_amount`, `lazertag_total`, `lazertag_vat`, `lazertag_vat_value`, `lazertag_member_discount`, `lazertag_member_discount_value`, `lazertag_discount`, `lazertag_discount_value`, `lazertag_bill`, `created_at`, `modified_at`, `was_bulid`, `active`) VALUES
(1, 1, 'INV1', '0000-00-00', 'sdsds', '56564646346', '', '2017-03-10 00:00:00', '00:00:00', 'hours', '0', '2', '0.00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '9000.00', '2017-03-09 18:51:17', '2017-03-14 11:58:23', 1, 1),
(2, 0, 'INV2', '0000-00-00', 'test3', '3454535', '0', '2017-03-10 00:00:00', '00:00:00', 'slot', '1', '1', '1.00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '175.00', '2017-03-10 15:59:32', '2017-03-14 11:58:46', 1, 1),
(3, 1, 'INV3', '0000-00-00', 'sdsds', '56564646346', '34343', '2017-03-10 00:00:00', '00:00:00', 'slot', '1', '1', '1.00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '157.50', '2017-03-10 16:01:42', '2017-03-14 12:00:14', 1, 1),
(4, 2, 'INV4', '0000-00-00', 'Evan', '4564545', '', '2017-03-10 00:00:00', '00:00:00', 'slot', '1', '1', '0.00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '225.00', '2017-03-10 16:02:05', '2017-03-14 11:58:36', 1, 1),
(5, 0, 'INV5', '0000-00-00', 'uyteiy', '6546456', '0', '2017-03-10 00:00:00', '00:00:00', 'slot', '1', '2', '1.00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '350.00', '2017-03-10 16:03:11', '2017-03-14 11:58:38', 1, 1),
(6, 3, 'INV6', '0000-00-00', 'TEST Name', '564645', '', '2017-03-10 00:00:00', '00:00:00', 'hours', '0', '6', '0.00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '27000.00', '2017-03-10 16:04:00', '2017-03-14 11:59:13', 1, 1),
(7, 0, 'INV7', '0000-00-00', 'sample', '5465465', '', '2017-03-10 00:00:00', '00:00:00', 'slot', '5', '5', '1.00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '4375.00', '2017-03-10 16:04:08', '2017-03-14 11:58:55', 1, 1),
(8, 0, 'INV8', '0000-00-00', 'rerew', '434324', '', '2017-03-10 00:00:00', '00:00:00', 'slot', '1', '5', '1.00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '875.00', '2017-03-10 18:00:59', '2017-03-14 11:59:32', 1, 1),
(9, 3, 'INV9', '0000-00-00', 'TEST Name', '564645', '3434FGRFG', '2017-03-10 00:00:00', '00:00:00', 'hours', '0', '5', '0.00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '22500.00', '2017-03-10 18:13:21', '2017-03-14 11:59:05', 1, 1),
(10, 0, 'INV10', '0000-00-00', 'Sample2', '758588594', '', '2017-03-14 00:00:00', '00:00:00', 'slot', '1', '4', '1.00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '700.00', '2017-03-14 09:59:17', '2017-03-14 11:30:14', 1, 1),
(11, 1, 'INV11', '0000-00-00', 'sdsds', '56564646346', '', '2017-03-14 00:00:00', '00:00:00', 'hours', '0', '3', '0.00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '13500.00', '2017-03-14 11:41:08', '2017-03-14 11:46:38', 1, 1),
(12, 3, 'INV12', '0000-00-00', 'TEST Name', '564645', '3434FGRFG', '2017-03-14 00:00:00', '00:00:00', 'slot', '2', '1', '1.00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '315.00', '2017-03-14 12:32:38', '2017-03-14 12:32:57', 1, 1),
(13, 2, 'INV13', '0000-00-00', 'Evan', '4564545', '', '2017-03-14 00:00:00', '00:00:00', 'slot', '1', '6', '1.00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '945.00', '2017-03-14 12:44:43', '2017-03-14 12:45:53', 1, 1),
(14, 3, 'INV14', '0000-00-00', 'TEST Name', '564645', '', '2017-03-14 00:00:00', '00:00:00', 'slot', '1', '7', '1.00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '1102.50', '2017-03-14 12:59:01', '2017-03-14 12:59:51', 1, 1),
(15, 3, 'INV15', '0000-00-00', 'TEST Name', '564645', '', '2017-04-05 00:00:00', '00:00:00', 'slot', '1', '4', '175.00', '700.00', '', '0.00', '0.00', '0.00', '10.00', '70.00', '630.00', '2017-04-05 18:59:59', '2017-04-10 15:37:36', 1, 1),
(16, 2, 'INV16', '0000-00-00', 'Evan', '4564545', '', '2017-04-10 00:00:00', '00:00:00', 'slot', '1', '2', '175.00', '350.00', '', '0.00', '0.00', '0.00', '10.00', '35.00', '315.00', '2017-04-08 17:16:52', '2017-04-10 15:40:44', 1, 1),
(17, 0, 'INV17', '0000-00-00', 'New User', '9809786768', '', '2017-04-10 00:00:00', '00:00:00', 'hours', '1', '4', '5000.00', '20000.00', '', '0.00', '0.00', '0.00', '12.50', '2500.00', '17500.00', '2017-04-10 14:20:54', '2017-04-10 15:41:47', 1, 1),
(18, 0, 'INV18', '0000-00-00', 'Newwww', '3433535', '0', '2017-04-10 00:00:00', '00:00:00', 'hours', '1', '45', '5000.00', '225000.00', '', '0.00', '0.00', '0.00', '10.00', '22500.00', '202500.00', '2017-04-10 15:43:03', '2017-04-10 15:43:14', 1, 1),
(19, 0, 'INV19', '2017-04-17', 'trt', 'rtrtrt', '', '2017-04-17 15:10:32', '14:45:00', 'hours', '1', '1', '5000.00', '5000.00', '10', '500.00', '0.00', '0.00', '2.00', '110.00', '5390.00', '2017-04-13 17:50:53', '2017-04-17 15:54:28', 1, 1),
(20, 0, 'INV20', '2017-04-18', 'mary', '3567611616', '0', '2017-04-18 11:05:14', '11:05:00', 'slot', '1', '3', '250.00', '750.00', '2', '15.00', '0.00', '0.00', '0.00', '0.00', '765.00', '2017-04-18 11:04:37', '2017-04-18 11:06:24', 1, 1),
(21, 3, 'INV21', '2017-04-20', 'TEST Name', '564645', '', '2017-04-20 14:55:30', '14:55:00', 'hours', '1', '3', '5000.00', '15000.00', '2', '300.00', '10.00', '1530.00', '0.00', '0.00', '13770.00', '2017-04-18 11:11:22', '2017-04-20 15:12:38', 1, 1),
(22, 3, 'INV22', '2017-04-20', 'TEST Name', '564645', '', '2017-04-20 15:01:13', '15:01:00', 'slot', '4', '4', '250.00', '4000.00', '2', '80.00', '10.00', '408.00', '0.00', '0.00', '3672.00', '2017-04-20 15:01:15', '2017-04-20 15:12:08', 1, 1),
(23, 3, 'INV23', '2017-11-21', 'TEST Name', '564645', '3434FGRFG', '2017-11-21 18:13:11', '18:13:00', 'slot', '13', '4', '300.00', '15600.00', '2', '312.00', '10.00', '1591.20', '0.00', '0.00', '14321.00', '2017-11-21 18:13:16', '2017-11-21 18:13:38', 1, 1),
(24, 1, 'INV24', '0000-00-00', 'sowmiya', '7777777777', 'CH172147484848', '2017-11-23 18:02:12', '00:00:00', '', '0', '0', '0.00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2017-11-23 16:07:55', '2017-11-23 18:02:22', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_chaos_members`
--

CREATE TABLE `wp_chaos_members` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `membership_no` varchar(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `earned_points` int(11) NOT NULL DEFAULT '0',
  `redeem_points` int(11) NOT NULL DEFAULT '0',
  `balance_points` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_chaos_members`
--

INSERT INTO `wp_chaos_members` (`id`, `user_id`, `membership_no`, `first_name`, `phone`, `earned_points`, `redeem_points`, `balance_points`, `created_at`, `modified_at`, `active`) VALUES
(1, 2, 'CH172147484848', 'Sowmiya', '7777777777', 160, 0, 160, '2017-11-23 15:44:20', '2017-11-24 11:19:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_chaos_setting`
--

CREATE TABLE `wp_chaos_setting` (
  `id` int(11) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `value` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_chaos_setting`
--

INSERT INTO `wp_chaos_setting` (`id`, `keyword`, `value`, `created_at`, `modified_at`, `active`) VALUES
(1, 'football_hour_week', '4000', '2017-04-08 10:44:47', '2017-11-21 18:12:47', 1),
(2, 'football_hour_weekend', '6000', '2017-04-08 10:44:47', '2017-04-08 11:34:26', 1),
(3, 'football_session_logic', '0', '2017-04-08 10:44:47', '2017-04-18 10:44:49', 1),
(4, 'football_session_pricing', '01:30-02:30-4000', '2017-04-08 10:46:09', '2017-04-08 11:06:08', 0),
(5, 'lazertag_head_week', '300', '2017-04-08 10:51:03', '2017-11-21 18:13:00', 1),
(6, 'lazertag_head_weekend', '250', '2017-04-08 10:51:03', '2017-04-11 10:18:46', 1),
(7, 'lazertag_hour_week', '5000', '2017-04-08 10:51:03', '2017-04-13 17:50:47', 1),
(8, 'lazertag_hour_weekend', '5000', '2017-04-08 10:51:03', '2017-04-08 10:51:03', 1),
(9, 'lazertag_happayhours', '1', '2017-04-08 10:51:03', '2017-04-13 17:50:33', 1),
(13, 'lazertag_happyhours_pricing', '00:00-03:00-5000', '2017-04-08 11:01:50', '2017-04-08 11:02:37', 0),
(14, 'lazertag_happyhours_pricing', '00:00-03:00-5000', '2017-04-08 11:02:37', '2017-04-08 11:03:19', 0),
(15, 'lazertag_happyhours_pricing', '--', '2017-04-08 11:03:19', '2017-04-08 11:05:05', 0),
(16, 'lazertag_happyhours_pricing', '12:00-03:00-5000', '2017-04-08 11:05:05', '2017-04-08 11:05:36', 0),
(17, 'lazertag_happyhours_pricing', '--', '2017-04-08 11:05:36', '2017-04-08 11:08:04', 0),
(18, 'football_session_pricing', '12:05-03:20-5000', '2017-04-08 11:06:08', '2017-04-08 11:06:13', 0),
(19, 'football_session_pricing', '01:30-02:30-4000', '2017-04-08 11:06:13', '2017-04-08 11:24:10', 0),
(20, 'lazertag_happyhours_pricing', '12:00-03:00-175', '2017-04-08 11:12:48', '2017-04-08 17:33:38', 0),
(21, 'football_session_pricing', '--', '2017-04-08 11:24:10', '2017-04-08 11:40:15', 0),
(22, 'football_session_pricing', '11:00-12:00-4000', '2017-04-08 11:40:16', '2017-04-08 11:47:10', 0),
(23, 'football_session_pricing', '11:00-12:00-4000', '2017-04-08 11:47:10', '2017-04-08 12:01:57', 0),
(24, 'football_session_pricing', '14:00-16:00-3500', '2017-04-08 11:47:11', '2017-04-08 12:01:57', 0),
(25, 'football_session_pricing', '11:00-12:30-4000', '2017-04-08 12:01:57', '2017-04-08 12:05:22', 0),
(26, 'football_session_pricing', '14:00-16:00-3500', '2017-04-08 12:01:57', '2017-04-08 12:05:22', 0),
(27, 'football_session_pricing', '11:00-11:59-4000', '2017-04-08 12:05:22', '2017-04-08 12:06:16', 0),
(28, 'football_session_pricing', '14:00-16:00-3500', '2017-04-08 12:05:22', '2017-04-08 12:06:16', 0),
(29, 'football_session_pricing', '11:00-14:15-4000', '2017-04-08 12:06:16', '2017-04-11 10:17:58', 0),
(30, 'lazertag_happyhours_pricing', '12:00-03:00-175', '2017-04-08 17:33:38', '2017-04-08 14:59:18', 0),
(31, 'lazertag_happyhours_pricing', '12:00-15:00-175', '2017-04-08 14:59:18', '2017-04-08 18:17:43', 0),
(32, 'lazertag_happyhours_pricing', '01:00-02:00-175', '2017-04-08 18:17:43', '2017-04-08 18:18:33', 0),
(33, 'lazertag_happyhours_pricing', '01:00-16:00-175', '2017-04-08 18:18:33', '2017-04-08 18:47:55', 0),
(34, 'lazertag_happyhours_pricing', '01:00-19:00-175', '2017-04-08 18:47:55', '2017-04-10 15:42:31', 0),
(35, 'lazertag_happyhours_pricing', '01:00-02:00-175', '2017-04-10 15:42:31', '2017-04-10 15:42:38', 0),
(36, 'lazertag_happyhours_pricing', '01:00-02:00-175', '2017-04-10 15:42:38', '2017-04-11 10:18:46', 0),
(37, 'gaming_head_week', '75', '2017-04-10 16:03:33', '2017-04-11 15:40:47', 1),
(38, 'gaming_head_weekend', '75', '2017-04-10 16:03:33', '2017-04-11 15:41:07', 1),
(39, 'football_session_pricing', '12:00-15:00-4000', '2017-04-11 10:17:58', '2017-04-13 17:45:03', 0),
(40, 'lazertag_happyhours_pricing', '12:00-03:00-175', '2017-04-11 10:18:46', '2017-04-13 17:50:33', 0),
(41, 'football_session_pricing', '01:00-05:00-2000', '2017-04-13 17:45:03', '2017-04-13 17:45:31', 0),
(42, 'football_session_pricing', '01:00-05:00-2000', '2017-04-13 17:45:31', '2017-04-18 10:41:59', 0),
(43, 'lazertag_happyhours_pricing', '12:00-03:00-175', '2017-04-13 17:50:33', '2017-04-13 17:50:40', 0),
(44, 'lazertag_happyhours_pricing', '12:00-03:00-175', '2017-04-13 17:50:40', '2017-04-13 17:50:47', 0),
(45, 'lazertag_happyhours_pricing', '12:00-03:00-175', '2017-04-13 17:50:47', '2017-04-13 18:11:19', 0),
(46, 'football_vat_cst', '2', '2017-04-13 18:11:03', '2017-04-17 17:21:53', 1),
(47, 'lazertag_vat_cst', '2', '2017-04-13 18:11:19', '2017-04-17 17:22:02', 1),
(48, 'lazertag_happyhours_pricing', '12:00-03:00-175', '2017-04-13 18:11:19', '2017-04-17 14:33:26', 0),
(49, 'gaming_vat_cst', '2', '2017-04-13 18:11:31', '2017-04-17 17:22:12', 1),
(50, 'lazertag_happyhours_pricing', '12:00-03:00-175', '2017-04-17 14:33:26', '2017-04-17 17:22:02', 0),
(51, 'lazertag_happyhours_pricing', '12:00-03:00-175', '2017-04-17 17:22:02', '2017-04-18 11:04:23', 0),
(52, 'football_session_pricing', '10:00-13:00-2000', '2017-04-18 10:41:59', '2017-04-18 10:43:39', 0),
(53, 'football_session_pricing', '10:00-13:00-2000', '2017-04-18 10:43:39', '2017-04-18 10:43:39', 1),
(54, 'lazertag_happyhours_pricing', '12:00-15:00-175', '2017-04-18 11:04:23', '2017-11-21 18:13:00', 0),
(55, 'lazertag_happyhours_pricing', '12:00-15:00-175', '2017-11-21 18:13:00', '2017-11-21 18:13:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_chaos_system`
--

CREATE TABLE `wp_chaos_system` (
  `id` int(11) NOT NULL,
  `pc_name` varchar(100) NOT NULL,
  `pc_category` varchar(3) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_chaos_system`
--

INSERT INTO `wp_chaos_system` (`id`, `pc_name`, `pc_category`, `created_at`, `modified_at`, `active`) VALUES
(1, 'Pc1', '1', '2017-04-10 16:59:03', '2017-04-10 17:35:43', 1),
(2, 'Ps4 system', '3', '2017-04-10 16:59:03', '2017-04-10 17:01:08', 1),
(3, 'xbox system', '2', '2017-04-10 16:59:03', '2017-04-10 17:01:10', 1),
(4, 'pc sample', '1', '2017-04-10 17:15:04', '2017-04-10 17:15:04', 1),
(5, 'sample pc2', '1', '2017-04-10 17:15:39', '2017-04-10 17:15:39', 1),
(6, 'sample PC4', '1', '2017-04-10 17:15:39', '2017-04-13 11:10:07', 1),
(7, 'Test Ps4', '3', '2017-04-10 17:15:39', '2017-04-10 17:15:39', 1),
(8, 'sample PC4', '2', '2017-04-10 17:38:23', '2017-04-10 17:38:23', 1),
(9, 'new', '1', '2017-04-11 10:19:02', '2017-04-11 10:19:02', 1),
(10, 'Testtttt', '2', '2017-04-11 14:49:38', '2017-04-11 14:49:38', 1),
(11, 'pc1', '2', '2017-04-13 18:20:43', '2017-04-13 18:20:43', 1),
(12, 'pc_name1', '3', '2017-04-13 18:25:11', '2017-04-13 18:25:11', 1),
(13, 'xbox2', '2', '2017-04-18 11:12:48', '2017-04-18 11:12:48', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_chaos_system_allocate`
--

CREATE TABLE `wp_chaos_system_allocate` (
  `id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `system_id` int(11) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `allocate` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_chaos_system_allocate`
--

INSERT INTO `wp_chaos_system_allocate` (`id`, `bill_id`, `system_id`, `start_time`, `end_time`, `allocate`, `created_at`, `modified_at`, `active`) VALUES
(1, 0, 10, '2017-04-12 10:54:25', '2017-04-12 10:55:32', 0, '2017-04-12 10:54:25', '2017-04-12 10:55:32', 1),
(2, 0, 9, '2017-04-12 10:54:26', '2017-04-12 11:02:33', 0, '2017-04-12 10:54:26', '2017-04-12 11:02:33', 1),
(3, 0, 10, '2017-04-11 01:50:33', '2017-04-13 11:08:22', 0, '2017-04-12 10:55:33', '2017-04-13 11:13:10', 1),
(4, 0, 5, '2017-04-12 11:55:52', '2017-04-13 11:05:37', 0, '2017-04-12 10:55:52', '2017-04-13 11:08:03', 1),
(5, 0, 1, '2017-04-12 10:55:56', '2017-11-23 17:26:32', 0, '2017-04-12 10:55:56', '2017-11-23 17:26:32', 1),
(6, 0, 3, '2017-04-12 10:55:58', '2017-11-23 17:26:31', 0, '2017-04-12 10:55:58', '2017-11-23 17:26:31', 1),
(7, 0, 3, '2017-04-12 10:56:18', '2017-11-23 17:26:31', 0, '2017-04-12 10:56:18', '2017-11-23 17:26:31', 1),
(8, 0, 9, '2017-04-12 14:25:00', '2017-04-13 11:08:22', 0, '2017-04-12 14:25:00', '2017-04-13 11:13:09', 1),
(9, 0, 10, '2017-04-13 11:14:16', '2017-04-13 14:25:50', 0, '2017-04-13 11:14:16', '2017-04-13 14:26:07', 1),
(10, 0, 8, '2017-04-13 11:14:18', '2017-04-13 14:25:50', 0, '2017-04-13 11:14:18', '2017-04-13 14:26:07', 1),
(11, 0, 3, '2017-04-13 11:14:23', '2017-11-23 17:26:31', 0, '2017-04-13 11:14:23', '2017-11-23 17:26:31', 1),
(12, 42, 1, '2017-04-13 11:14:24', '2017-11-23 17:26:32', 0, '2017-04-13 11:14:24', '2017-11-23 17:26:32', 1),
(13, 0, 10, '2017-04-13 14:11:28', '2017-04-13 14:14:59', 0, '2017-04-13 14:11:28', '2017-04-13 14:15:15', 1),
(14, 0, 8, '2017-04-13 14:11:28', '2017-04-13 14:17:25', 0, '2017-04-13 14:11:28', '2017-04-13 14:19:32', 1),
(15, 0, 5, '2017-04-13 14:11:31', '2017-04-13 14:14:59', 0, '2017-04-13 14:11:31', '2017-04-13 14:15:15', 1),
(16, 0, 4, '2017-04-13 14:11:31', '2017-04-13 14:20:04', 0, '2017-04-13 14:11:31', '2017-04-13 14:20:30', 1),
(17, 0, 3, '2017-04-13 14:11:32', '2017-11-23 17:26:31', 0, '2017-04-13 14:11:32', '2017-11-23 17:26:31', 1),
(18, 43, 5, '2017-04-13 14:21:09', '0000-00-00 00:00:00', 0, '2017-04-13 14:21:09', '2017-04-13 15:48:24', 1),
(19, 43, 6, '2017-04-13 14:21:16', '0000-00-00 00:00:00', 0, '2017-04-13 14:21:16', '2017-04-13 15:48:24', 1),
(20, 44, 3, '2017-04-13 14:21:20', '2017-11-23 17:26:31', 0, '2017-04-13 14:21:20', '2017-11-23 17:26:31', 1),
(21, 42, 9, '2017-04-13 14:21:23', '2017-04-13 14:27:42', 0, '2017-04-13 14:21:23', '2017-04-13 15:51:08', 1),
(22, 0, 5, '2017-04-13 14:41:58', '2017-04-17 16:35:32', 0, '2017-04-13 14:41:58', '2017-04-17 16:41:54', 1),
(23, 45, 1, '2017-04-13 14:41:58', '2017-11-23 17:26:32', 0, '2017-04-13 14:41:58', '2017-11-23 17:26:32', 1),
(24, 0, 8, '2017-04-13 14:42:01', '2017-04-17 16:35:32', 0, '2017-04-13 14:42:01', '2017-04-17 16:41:54', 1),
(25, 46, 6, '2017-04-13 14:42:02', '2017-04-17 16:42:00', 0, '2017-04-13 14:42:02', '2017-04-17 16:42:21', 1),
(26, 45, 10, '2017-04-13 18:21:06', '2017-04-13 18:26:44', 0, '2017-04-13 18:21:06', '2017-04-13 18:28:47', 1),
(27, 50, 12, '2017-04-13 18:26:24', '2017-04-20 12:32:43', 0, '2017-04-13 18:26:24', '2017-04-20 12:37:35', 1),
(28, 45, 2, '2017-04-13 18:26:32', '2017-04-13 18:26:44', 0, '2017-04-13 18:26:32', '2017-04-13 18:28:47', 1),
(29, 48, 2, '2017-04-17 17:49:44', '2017-04-18 11:16:35', 0, '2017-04-17 17:49:44', '2017-04-18 11:18:48', 1),
(30, 0, 1, '2017-04-17 17:49:45', '2017-11-23 17:26:32', 0, '2017-04-17 17:49:45', '2017-11-23 17:26:32', 1),
(31, 48, 13, '2017-04-18 11:13:14', '2017-11-23 17:26:23', 0, '2017-04-18 11:13:14', '2017-11-23 17:26:23', 1),
(32, 0, 3, '2017-04-18 11:15:13', '2017-11-23 17:26:31', 0, '2017-04-18 11:15:13', '2017-11-23 17:26:31', 1),
(33, 0, 3, '2017-04-18 11:15:14', '2017-11-23 17:26:31', 0, '2017-04-18 11:15:14', '2017-11-23 17:26:31', 1),
(34, 0, 7, '2017-04-18 11:15:17', '2017-11-23 17:26:27', 0, '2017-04-18 11:15:17', '2017-11-23 17:26:27', 1),
(35, 0, 11, '2017-04-18 13:01:40', '2017-11-23 17:26:24', 0, '2017-04-18 13:01:40', '2017-11-23 17:26:24', 1),
(36, 0, 13, '2017-04-18 13:01:41', '2017-11-23 17:26:23', 0, '2017-04-18 13:01:41', '2017-11-23 17:26:23', 1),
(37, 49, 9, '2017-04-18 13:01:42', '2017-04-20 12:11:00', 0, '2017-04-18 13:01:42', '2017-04-20 12:18:31', 1),
(38, 0, 1, '2017-06-03 10:20:13', '2017-11-23 17:26:32', 0, '2017-06-03 10:20:13', '2017-11-23 17:26:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_chaos_tournaments`
--

CREATE TABLE `wp_chaos_tournaments` (
  `id` int(11) NOT NULL,
  `tournament_name` varchar(250) NOT NULL,
  `tournament_start` datetime NOT NULL,
  `tournament_end` datetime NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_chaos_tournaments`
--

INSERT INTO `wp_chaos_tournaments` (`id`, `tournament_name`, `tournament_start`, `tournament_end`, `created_at`, `modified_at`, `active`) VALUES
(1, '2017 Football', '2017-05-01 00:00:00', '2017-05-31 00:00:00', '2017-04-13 19:47:23', '2017-04-13 19:47:23', 1),
(2, '2017 Tournament', '2017-05-01 00:00:00', '2017-05-31 00:00:00', '2017-04-19 12:57:31', '2017-04-19 12:57:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_chaos_tournament_player_goal`
--

CREATE TABLE `wp_chaos_tournament_player_goal` (
  `id` int(11) NOT NULL,
  `match_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `goals` int(11) NOT NULL,
  `own_goals` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `active` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_chaos_tournament_player_goal`
--

INSERT INTO `wp_chaos_tournament_player_goal` (`id`, `match_id`, `team_id`, `player_id`, `goals`, `own_goals`, `created_at`, `modified_at`, `active`) VALUES
(1, 1, 1, 7, 0, 0, '2017-04-13 20:14:34', '2017-04-14 10:08:44', 0),
(2, 1, 1, 9, 1, 0, '2017-04-13 20:14:34', '2017-04-14 10:08:44', 0),
(3, 1, 1, 10, 0, 0, '2017-04-13 20:14:34', '2017-04-14 10:08:44', 0),
(4, 1, 1, 6, 0, 0, '2017-04-13 20:14:34', '2017-04-14 10:08:44', 0),
(5, 1, 1, 8, 0, 0, '2017-04-13 20:14:34', '2017-04-14 10:08:44', 0),
(6, 1, 2, 13, 0, 0, '2017-04-13 20:14:34', '2017-04-14 10:08:44', 0),
(7, 1, 2, 14, 0, 0, '2017-04-13 20:14:34', '2017-04-14 10:08:44', 0),
(8, 1, 2, 12, 0, 0, '2017-04-13 20:14:34', '2017-04-14 10:08:44', 0),
(9, 1, 2, 11, 1, 0, '2017-04-13 20:14:35', '2017-04-14 10:08:44', 0),
(10, 1, 1, 7, 0, 0, '2017-04-14 10:08:44', '2017-04-14 10:08:51', 0),
(11, 1, 1, 9, 1, 0, '2017-04-14 10:08:44', '2017-04-14 10:08:51', 0),
(12, 1, 1, 10, 0, 0, '2017-04-14 10:08:44', '2017-04-14 10:08:51', 0),
(13, 1, 1, 6, 0, 0, '2017-04-14 10:08:45', '2017-04-14 10:08:51', 0),
(14, 1, 1, 8, 0, 0, '2017-04-14 10:08:45', '2017-04-14 10:08:51', 0),
(15, 1, 2, 13, 0, 0, '2017-04-14 10:08:45', '2017-04-14 10:08:51', 0),
(16, 1, 2, 14, 0, 0, '2017-04-14 10:08:45', '2017-04-14 10:08:51', 0),
(17, 1, 2, 12, 0, 0, '2017-04-14 10:08:45', '2017-04-14 10:08:51', 0),
(18, 1, 2, 11, 1, 0, '2017-04-14 10:08:45', '2017-04-14 10:08:51', 0),
(19, 1, 1, 7, 0, 0, '2017-04-14 10:08:51', '2017-04-14 13:32:49', 0),
(20, 1, 1, 9, 1, 0, '2017-04-14 10:08:51', '2017-04-14 13:32:49', 0),
(21, 1, 1, 10, 0, 0, '2017-04-14 10:08:51', '2017-04-14 13:32:49', 0),
(22, 1, 1, 6, 0, 0, '2017-04-14 10:08:51', '2017-04-14 13:32:49', 0),
(23, 1, 1, 8, 0, 0, '2017-04-14 10:08:51', '2017-04-14 13:32:49', 0),
(24, 1, 2, 13, 0, 0, '2017-04-14 10:08:51', '2017-04-14 13:32:49', 0),
(25, 1, 2, 14, 0, 0, '2017-04-14 10:08:51', '2017-04-14 13:32:49', 0),
(26, 1, 2, 12, 0, 0, '2017-04-14 10:08:51', '2017-04-14 13:32:49', 0),
(27, 1, 2, 11, 1, 0, '2017-04-14 10:08:51', '2017-04-14 13:32:49', 0),
(28, 1, 1, 7, 0, 0, '2017-04-14 13:32:49', '2017-04-14 13:33:13', 0),
(29, 1, 1, 9, 1, 0, '2017-04-14 13:32:49', '2017-04-14 13:33:13', 0),
(30, 1, 1, 10, 0, 0, '2017-04-14 13:32:49', '2017-04-14 13:33:13', 0),
(31, 1, 1, 6, 0, 0, '2017-04-14 13:32:49', '2017-04-14 13:33:13', 0),
(32, 1, 1, 8, 0, 0, '2017-04-14 13:32:49', '2017-04-14 13:33:13', 0),
(33, 1, 2, 13, 0, 0, '2017-04-14 13:32:49', '2017-04-14 13:33:13', 0),
(34, 1, 2, 14, 0, 0, '2017-04-14 13:32:49', '2017-04-14 13:33:13', 0),
(35, 1, 2, 12, 0, 0, '2017-04-14 13:32:49', '2017-04-14 13:33:13', 0),
(36, 1, 2, 11, 1, 0, '2017-04-14 13:32:49', '2017-04-14 13:33:13', 0),
(37, 1, 1, 7, 0, 0, '2017-04-14 13:33:13', '2017-04-14 13:33:36', 0),
(38, 1, 1, 9, 1, 0, '2017-04-14 13:33:13', '2017-04-14 13:33:36', 0),
(39, 1, 1, 10, 0, 0, '2017-04-14 13:33:14', '2017-04-14 13:33:36', 0),
(40, 1, 1, 6, 0, 0, '2017-04-14 13:33:14', '2017-04-14 13:33:36', 0),
(41, 1, 1, 8, 0, 0, '2017-04-14 13:33:14', '2017-04-14 13:33:36', 0),
(42, 1, 2, 13, 0, 0, '2017-04-14 13:33:14', '2017-04-14 13:33:36', 0),
(43, 1, 2, 14, 0, 0, '2017-04-14 13:33:14', '2017-04-14 13:33:36', 0),
(44, 1, 2, 12, 0, 0, '2017-04-14 13:33:14', '2017-04-14 13:33:36', 0),
(45, 1, 2, 11, 1, 0, '2017-04-14 13:33:14', '2017-04-14 13:33:36', 0),
(46, 1, 1, 7, 0, 0, '2017-04-14 13:33:36', '2017-04-14 13:35:54', 0),
(47, 1, 1, 9, 1, 0, '2017-04-14 13:33:36', '2017-04-14 13:35:54', 0),
(48, 1, 1, 10, 0, 0, '2017-04-14 13:33:36', '2017-04-14 13:35:54', 0),
(49, 1, 1, 6, 0, 0, '2017-04-14 13:33:36', '2017-04-14 13:35:54', 0),
(50, 1, 1, 8, 0, 0, '2017-04-14 13:33:36', '2017-04-14 13:35:54', 0),
(51, 1, 2, 13, 0, 0, '2017-04-14 13:33:36', '2017-04-14 13:35:54', 0),
(52, 1, 2, 14, 0, 0, '2017-04-14 13:33:36', '2017-04-14 13:35:54', 0),
(53, 1, 2, 12, 0, 0, '2017-04-14 13:33:36', '2017-04-14 13:35:54', 0),
(54, 1, 2, 11, 1, 0, '2017-04-14 13:33:36', '2017-04-14 13:35:54', 0),
(55, 1, 1, 7, 0, 0, '2017-04-14 13:35:54', '2017-04-14 13:36:01', 0),
(56, 1, 1, 9, 1, 0, '2017-04-14 13:35:54', '2017-04-14 13:36:01', 0),
(57, 1, 1, 10, 0, 0, '2017-04-14 13:35:55', '2017-04-14 13:36:01', 0),
(58, 1, 1, 6, 0, 0, '2017-04-14 13:35:55', '2017-04-14 13:36:01', 0),
(59, 1, 1, 8, 0, 0, '2017-04-14 13:35:55', '2017-04-14 13:36:01', 0),
(60, 1, 2, 13, 0, 0, '2017-04-14 13:35:55', '2017-04-14 13:36:01', 0),
(61, 1, 2, 14, 0, 0, '2017-04-14 13:35:55', '2017-04-14 13:36:01', 0),
(62, 1, 2, 12, 0, 0, '2017-04-14 13:35:55', '2017-04-14 13:36:01', 0),
(63, 1, 2, 11, 1, 0, '2017-04-14 13:35:55', '2017-04-14 13:36:01', 0),
(64, 1, 1, 7, 0, 0, '2017-04-14 13:36:01', '2017-04-14 13:36:25', 0),
(65, 1, 1, 9, 1, 0, '2017-04-14 13:36:02', '2017-04-14 13:36:25', 0),
(66, 1, 1, 10, 0, 0, '2017-04-14 13:36:02', '2017-04-14 13:36:25', 0),
(67, 1, 1, 6, 0, 0, '2017-04-14 13:36:02', '2017-04-14 13:36:25', 0),
(68, 1, 1, 8, 0, 0, '2017-04-14 13:36:02', '2017-04-14 13:36:25', 0),
(69, 1, 2, 13, 0, 0, '2017-04-14 13:36:02', '2017-04-14 13:36:25', 0),
(70, 1, 2, 14, 0, 0, '2017-04-14 13:36:02', '2017-04-14 13:36:25', 0),
(71, 1, 2, 12, 0, 0, '2017-04-14 13:36:02', '2017-04-14 13:36:25', 0),
(72, 1, 2, 11, 1, 0, '2017-04-14 13:36:02', '2017-04-14 13:36:25', 0),
(73, 1, 1, 7, 0, 0, '2017-04-14 13:36:25', '2017-04-14 13:36:32', 0),
(74, 1, 1, 9, 1, 0, '2017-04-14 13:36:25', '2017-04-14 13:36:32', 0),
(75, 1, 1, 10, 0, 0, '2017-04-14 13:36:25', '2017-04-14 13:36:32', 0),
(76, 1, 1, 6, 0, 0, '2017-04-14 13:36:25', '2017-04-14 13:36:32', 0),
(77, 1, 1, 8, 0, 0, '2017-04-14 13:36:25', '2017-04-14 13:36:32', 0),
(78, 1, 2, 13, 0, 0, '2017-04-14 13:36:25', '2017-04-14 13:36:32', 0),
(79, 1, 2, 14, 0, 0, '2017-04-14 13:36:25', '2017-04-14 13:36:32', 0),
(80, 1, 2, 12, 0, 0, '2017-04-14 13:36:25', '2017-04-14 13:36:32', 0),
(81, 1, 2, 11, 1, 0, '2017-04-14 13:36:25', '2017-04-14 13:36:32', 0),
(82, 1, 1, 7, 0, 0, '2017-04-14 13:36:32', '2017-04-14 13:56:54', 0),
(83, 1, 1, 9, 1, 0, '2017-04-14 13:36:32', '2017-04-14 13:56:54', 0),
(84, 1, 1, 10, 0, 0, '2017-04-14 13:36:32', '2017-04-14 13:56:54', 0),
(85, 1, 1, 6, 0, 0, '2017-04-14 13:36:32', '2017-04-14 13:56:54', 0),
(86, 1, 1, 8, 0, 0, '2017-04-14 13:36:32', '2017-04-14 13:56:54', 0),
(87, 1, 2, 13, 0, 0, '2017-04-14 13:36:33', '2017-04-14 13:56:54', 0),
(88, 1, 2, 14, 0, 0, '2017-04-14 13:36:33', '2017-04-14 13:56:54', 0),
(89, 1, 2, 12, 0, 0, '2017-04-14 13:36:33', '2017-04-14 13:56:54', 0),
(90, 1, 2, 11, 1, 0, '2017-04-14 13:36:33', '2017-04-14 13:56:54', 0),
(91, 1, 1, 7, 0, 0, '2017-04-14 13:56:54', '2017-04-14 13:57:02', 0),
(92, 1, 1, 9, 1, 0, '2017-04-14 13:56:54', '2017-04-14 13:57:02', 0),
(93, 1, 1, 10, 0, 0, '2017-04-14 13:56:54', '2017-04-14 13:57:02', 0),
(94, 1, 1, 6, 0, 0, '2017-04-14 13:56:54', '2017-04-14 13:57:02', 0),
(95, 1, 1, 8, 0, 0, '2017-04-14 13:56:54', '2017-04-14 13:57:02', 0),
(96, 1, 2, 13, 0, 0, '2017-04-14 13:56:54', '2017-04-14 13:57:02', 0),
(97, 1, 2, 14, 0, 0, '2017-04-14 13:56:54', '2017-04-14 13:57:02', 0),
(98, 1, 2, 12, 0, 0, '2017-04-14 13:56:54', '2017-04-14 13:57:02', 0),
(99, 1, 2, 11, 1, 0, '2017-04-14 13:56:54', '2017-04-14 13:57:02', 0),
(100, 1, 1, 7, 0, 0, '2017-04-14 13:57:02', '2017-04-14 13:57:25', 0),
(101, 1, 1, 9, 1, 0, '2017-04-14 13:57:02', '2017-04-14 13:57:25', 0),
(102, 1, 1, 10, 0, 0, '2017-04-14 13:57:03', '2017-04-14 13:57:25', 0),
(103, 1, 1, 6, 0, 0, '2017-04-14 13:57:03', '2017-04-14 13:57:25', 0),
(104, 1, 1, 8, 0, 0, '2017-04-14 13:57:03', '2017-04-14 13:57:25', 0),
(105, 1, 2, 13, 0, 0, '2017-04-14 13:57:03', '2017-04-14 13:57:25', 0),
(106, 1, 2, 14, 0, 0, '2017-04-14 13:57:03', '2017-04-14 13:57:25', 0),
(107, 1, 2, 12, 0, 0, '2017-04-14 13:57:03', '2017-04-14 13:57:25', 0),
(108, 1, 2, 11, 1, 0, '2017-04-14 13:57:03', '2017-04-14 13:57:25', 0),
(109, 1, 1, 7, 0, 0, '2017-04-14 13:57:25', '2017-04-14 14:18:53', 0),
(110, 1, 1, 9, 1, 0, '2017-04-14 13:57:25', '2017-04-14 14:18:53', 0),
(111, 1, 1, 10, 0, 0, '2017-04-14 13:57:25', '2017-04-14 14:18:53', 0),
(112, 1, 1, 6, 0, 0, '2017-04-14 13:57:25', '2017-04-14 14:18:53', 0),
(113, 1, 1, 8, 0, 0, '2017-04-14 13:57:25', '2017-04-14 14:18:53', 0),
(114, 1, 2, 13, 0, 0, '2017-04-14 13:57:25', '2017-04-14 14:18:53', 0),
(115, 1, 2, 14, 0, 1, '2017-04-14 13:57:25', '2017-04-14 14:18:53', 0),
(116, 1, 2, 12, 0, 0, '2017-04-14 13:57:25', '2017-04-14 14:18:53', 0),
(117, 1, 2, 11, 1, 0, '2017-04-14 13:57:25', '2017-04-14 14:18:53', 0),
(118, 1, 1, 7, 0, 0, '2017-04-14 14:18:54', '2017-04-14 14:19:01', 0),
(119, 1, 1, 9, 1, 0, '2017-04-14 14:18:54', '2017-04-14 14:19:01', 0),
(120, 1, 1, 10, 0, 0, '2017-04-14 14:18:54', '2017-04-14 14:19:01', 0),
(121, 1, 1, 6, 0, 0, '2017-04-14 14:18:54', '2017-04-14 14:19:01', 0),
(122, 1, 1, 8, 0, 0, '2017-04-14 14:18:54', '2017-04-14 14:19:01', 0),
(123, 1, 2, 13, 0, 0, '2017-04-14 14:18:54', '2017-04-14 14:19:01', 0),
(124, 1, 2, 14, 0, 1, '2017-04-14 14:18:54', '2017-04-14 14:19:01', 0),
(125, 1, 2, 12, 0, 0, '2017-04-14 14:18:54', '2017-04-14 14:19:01', 0),
(126, 1, 2, 11, 1, 0, '2017-04-14 14:18:54', '2017-04-14 14:19:01', 0),
(127, 1, 1, 7, 0, 0, '2017-04-14 14:19:01', '0000-00-00 00:00:00', 1),
(128, 1, 1, 9, 1, 0, '2017-04-14 14:19:01', '0000-00-00 00:00:00', 1),
(129, 1, 1, 10, 0, 0, '2017-04-14 14:19:01', '0000-00-00 00:00:00', 1),
(130, 1, 1, 6, 0, 0, '2017-04-14 14:19:01', '0000-00-00 00:00:00', 1),
(131, 1, 1, 8, 0, 0, '2017-04-14 14:19:01', '0000-00-00 00:00:00', 1),
(132, 1, 2, 13, 0, 0, '2017-04-14 14:19:01', '0000-00-00 00:00:00', 1),
(133, 1, 2, 14, 0, 1, '2017-04-14 14:19:01', '0000-00-00 00:00:00', 1),
(134, 1, 2, 12, 0, 0, '2017-04-14 14:19:01', '0000-00-00 00:00:00', 1),
(135, 1, 2, 11, 1, 0, '2017-04-14 14:19:01', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_chaos_tournament_points`
--

CREATE TABLE `wp_chaos_tournament_points` (
  `id` int(11) NOT NULL,
  `match_id` int(10) NOT NULL,
  `team_id` int(10) NOT NULL,
  `points` int(10) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_chaos_tournament_points`
--

INSERT INTO `wp_chaos_tournament_points` (`id`, `match_id`, `team_id`, `points`, `active`) VALUES
(1, 1, 1, 1, 0),
(2, 1, 2, 1, 0),
(3, 1, 1, 1, 0),
(4, 1, 2, 1, 0),
(5, 1, 1, 2, 0),
(6, 1, 2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_chaos_tournament_schedule`
--

CREATE TABLE `wp_chaos_tournament_schedule` (
  `id` int(11) NOT NULL,
  `tournament_id` int(11) NOT NULL,
  `match_order` int(11) NOT NULL,
  `team1` int(11) NOT NULL,
  `team2` int(11) NOT NULL,
  `score_team1` int(11) NOT NULL DEFAULT '0',
  `score_team2` int(11) NOT NULL DEFAULT '0',
  `match_date` datetime NOT NULL,
  `played` int(2) NOT NULL DEFAULT '0',
  `winner` int(11) NOT NULL DEFAULT '0',
  `loser` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_chaos_tournament_schedule`
--

INSERT INTO `wp_chaos_tournament_schedule` (`id`, `tournament_id`, `match_order`, `team1`, `team2`, `score_team1`, `score_team2`, `match_date`, `played`, `winner`, `loser`, `created_at`, `modified_at`, `active`) VALUES
(1, 1, 1, 1, 2, 2, 1, '2017-05-01 00:00:00', 1, 0, 0, '2017-04-13 19:47:24', '2017-04-14 14:57:50', 1),
(2, 1, 2, 3, 1, 0, 0, '2017-05-02 00:00:00', 0, 0, 0, '2017-04-13 19:47:24', '2017-04-14 14:57:50', 1),
(3, 1, 3, 2, 3, 0, 0, '2017-05-03 00:00:00', 0, 0, 0, '2017-04-13 19:47:24', '2017-04-14 14:57:50', 1),
(4, 2, 1, 25, 26, 0, 0, '2017-05-01 00:00:00', 0, 0, 0, '2017-04-19 12:57:31', '2017-04-19 12:57:31', 1),
(5, 2, 2, 26, 25, 0, 0, '2017-05-02 00:00:00', 0, 0, 0, '2017-04-19 12:57:31', '2017-04-19 12:57:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_chaos_tournament_teams`
--

CREATE TABLE `wp_chaos_tournament_teams` (
  `id` int(11) NOT NULL,
  `tournament_id` int(10) NOT NULL,
  `team_id` int(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_chaos_tournament_teams`
--

INSERT INTO `wp_chaos_tournament_teams` (`id`, `tournament_id`, `team_id`, `created_at`, `modified_at`, `active`) VALUES
(1, 1, 1, '2017-04-13 19:47:23', '2017-04-14 14:57:49', 1),
(2, 1, 2, '2017-04-14 14:57:49', '2017-04-14 14:57:49', 1),
(3, 1, 3, '2017-04-14 14:57:49', '2017-04-14 14:57:49', 1),
(4, 2, 25, '2017-04-19 12:57:31', '2017-04-19 12:57:31', 1),
(5, 2, 26, '2017-04-19 12:57:31', '2017-04-19 12:57:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_chaos_utility`
--

CREATE TABLE `wp_chaos_utility` (
  `id` int(10) NOT NULL,
  `ut_name` varchar(100) NOT NULL,
  `ut_emailid` varchar(100) NOT NULL,
  `ut_secondery_email` varchar(100) NOT NULL,
  `ut_utility_status` varchar(10) NOT NULL,
  `ut_postponed_days` datetime NOT NULL,
  `ut_periods` varchar(20) NOT NULL,
  `ut_duration` varchar(20) NOT NULL,
  `ut_utillity_date` date NOT NULL,
  `ut_alert_days` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_chaos_utility`
--

INSERT INTO `wp_chaos_utility` (`id`, `ut_name`, `ut_emailid`, `ut_secondery_email`, `ut_utility_status`, `ut_postponed_days`, `ut_periods`, `ut_duration`, `ut_utillity_date`, `ut_alert_days`, `created_at`, `modified_at`, `active`) VALUES
(1, 'Bill1', 'sample@gmail.com', 'sa@gmail.com', 'postponed', '2017-03-01 00:00:00', 'w', '1', '2017-03-05', '2', '2017-03-02 10:46:32', '2017-03-07 14:41:51', 0),
(2, 'bill2', 'anu@gmail.com', 'anu1@gmail.com', 'cancelled', '0000-00-00 00:00:00', 'w', '1', '2017-03-31', '2', '2017-03-02 10:47:02', '2017-04-18 11:43:48', 1),
(3, 'Current bill', 'gayu@gmail.com', 'gayu1@gmail.com', 'postponed', '2017-05-12 00:00:00', 'm', '2', '2017-03-03', '6', '2017-03-02 10:47:46', '2017-03-14 13:23:13', 1),
(4, 'water bill', 'dharu@gmail.com', 'dharu11@gmail.com', 'postponed', '2017-03-24 00:00:00', 'm', '6', '2016-09-02', '3', '2017-03-02 10:49:42', '2017-03-03 10:44:16', 0),
(5, 'bill4', 'test@gmail.com', 'test1@gmail.com', 'done', '0000-00-00 00:00:00', 'm', '1', '2017-04-05', '5', '2017-03-02 10:50:54', '2017-04-05 15:51:42', 1),
(6, 'bill6767', 'mohan@gmail.com', 'mohan1@gmail.com', 'done', '0000-00-00 00:00:00', 'm', '1', '2017-03-07', '5', '2017-03-02 10:51:50', '2017-04-06 12:11:17', 1),
(7, 'bill6', 'ksd@gmail.com', 'fgsdgds@gmail.com', 'cancelled', '0000-00-00 00:00:00', 'w', '2', '2017-04-20', '7', '2017-03-02 10:52:44', '2017-04-18 11:46:15', 1),
(8, 'bill8', 'sowmiya@gmail.com', 'sowmiya11@gmail.com', 'cancelled', '0000-00-00 00:00:00', 'w', '12', '2017-03-03', '5', '2017-03-02 14:07:46', '2017-03-02 17:51:27', 1),
(9, 'bill678', 'sdsd@gmail.com', 'sa6364743@gmail.com', 'done', '0000-00-00 00:00:00', 'm', '7', '2017-03-03', '7', '2017-03-02 15:57:10', '2017-03-04 10:27:40', 0),
(10, 'billnew', 'sowmiya@ajnainfotech.com', '', 'cancelled', '0000-00-00 00:00:00', 'w', '2', '2017-03-24', '56', '2017-03-02 17:09:49', '2017-04-18 11:43:40', 1),
(11, 'bill555', 'sowmiya3110@gmail.com', 'sowmiya311034@gmail.com', '', '0000-00-00 00:00:00', 'm', '1', '2017-03-04', '6', '2017-03-04 10:58:17', '2017-03-04 10:58:17', 1),
(12, 'Current Bill', 'see.gan21@gmail.com', 'see.gan21@gmail.com', 'cancelled', '0000-00-00 00:00:00', 'w', '1', '2017-04-25', '2', '2017-04-05 15:44:13', '2017-04-18 11:23:41', 1),
(13, 'water bill', 'fdgfd@hhh.com', 'ddsd@hh.com', '', '0000-00-00 00:00:00', 'm', '1', '2017-04-05', '2', '2017-04-05 19:33:16', '2017-04-05 19:33:16', 1),
(14, 'Net Bill', 'sample@gmail.com', 'fdfd@gmail.com', '', '0000-00-00 00:00:00', 'w', '3', '2017-04-13', '2', '2017-04-13 17:33:43', '2017-04-13 17:42:50', 1),
(15, 'Water bill', 'sample@gmail.com', 'tye@gmail.com', 'done', '0000-00-00 00:00:00', 'm', '1', '2017-04-13', '3', '2017-04-13 18:31:19', '2017-04-18 11:44:06', 1),
(16, 'current', 'sample@gmail.com', 'test@gmail.com', 'done', '0000-00-00 00:00:00', 'm', '2', '2017-04-18', '3', '2017-04-18 11:21:46', '2017-04-18 11:22:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_chaos_utility_details`
--

CREATE TABLE `wp_chaos_utility_details` (
  `id` int(11) NOT NULL,
  `utility_id` int(50) NOT NULL,
  `ut_utility_status` varchar(40) NOT NULL,
  `ut_postponed_days` datetime NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_chaos_utility_details`
--

INSERT INTO `wp_chaos_utility_details` (`id`, `utility_id`, `ut_utility_status`, `ut_postponed_days`, `created_at`, `modified_at`, `active`) VALUES
(1, 10, 'postponed', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(2, 10, 'postponed', '2017-03-03 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(3, 10, 'done', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(4, 8, 'cancelled', '0000-00-00 00:00:00', '2017-03-02 17:51:27', '2017-03-02 17:51:27', 1),
(5, 10, 'postponed', '0000-00-00 00:00:00', '2017-03-02 17:53:08', '2017-03-02 17:53:08', 1),
(6, 10, 'postponed', '2017-03-09 00:00:00', '2017-03-02 17:53:09', '2017-03-02 17:53:09', 1),
(7, 10, 'cancelled', '0000-00-00 00:00:00', '2017-03-02 17:59:33', '2017-03-02 17:59:33', 1),
(8, 10, 'postponed', '2017-03-17 00:00:00', '2017-03-02 17:59:40', '2017-03-02 17:59:40', 1),
(9, 10, 'postponed', '2017-03-02 00:00:00', '2017-03-03 10:09:42', '2017-03-03 10:09:42', 1),
(10, 9, 'cancelled', '0000-00-00 00:00:00', '2017-03-03 10:09:45', '2017-03-03 10:09:45', 1),
(11, 10, 'cancelled', '0000-00-00 00:00:00', '2017-03-03 10:10:48', '2017-03-03 10:10:48', 1),
(12, 9, 'cancelled', '0000-00-00 00:00:00', '2017-03-03 10:11:17', '2017-03-03 10:11:17', 1),
(13, 9, 'done', '0000-00-00 00:00:00', '2017-03-03 10:11:18', '2017-03-03 10:11:18', 1),
(14, 3, 'postponed', '2017-03-04 00:00:00', '2017-03-03 12:28:29', '2017-03-03 12:28:29', 1),
(15, 3, 'postponed', '2017-03-01 00:00:00', '2017-03-03 12:28:35', '2017-03-03 12:28:35', 1),
(16, 2, 'cancelled', '0000-00-00 00:00:00', '2017-03-03 13:37:48', '2017-03-03 13:37:48', 1),
(17, 2, 'done', '0000-00-00 00:00:00', '2017-03-03 13:37:57', '2017-03-03 13:37:57', 1),
(18, 2, 'cancelled', '0000-00-00 00:00:00', '2017-03-03 13:38:38', '2017-03-03 13:38:38', 1),
(19, 2, 'done', '0000-00-00 00:00:00', '2017-03-03 13:38:39', '2017-03-03 13:38:39', 1),
(20, 2, 'cancelled', '0000-00-00 00:00:00', '2017-03-03 14:48:38', '2017-03-03 14:48:38', 1),
(21, 2, 'cancelled', '0000-00-00 00:00:00', '2017-03-03 15:13:22', '2017-03-03 15:13:22', 1),
(22, 2, 'cancelled', '0000-00-00 00:00:00', '2017-03-03 15:18:42', '2017-03-03 15:18:42', 1),
(23, 7, 'done', '0000-00-00 00:00:00', '2017-03-03 15:38:46', '2017-03-03 15:38:46', 1),
(24, 7, 'cancelled', '0000-00-00 00:00:00', '2017-03-03 15:58:46', '2017-03-03 15:58:46', 1),
(25, 7, 'cancelled', '0000-00-00 00:00:00', '2017-03-03 15:58:58', '2017-03-03 15:58:58', 1),
(26, 2, 'cancelled', '0000-00-00 00:00:00', '2017-03-03 16:10:56', '2017-03-03 16:10:56', 1),
(27, 1, 'done', '0000-00-00 00:00:00', '2017-03-03 16:11:03', '2017-03-03 16:11:03', 1),
(28, 7, 'done', '0000-00-00 00:00:00', '2017-03-03 16:31:03', '2017-03-03 16:31:03', 1),
(29, 2, 'postponed', '2017-03-04 00:00:00', '2017-03-03 16:31:18', '2017-03-03 16:31:18', 1),
(30, 2, 'postponed', '2017-03-11 00:00:00', '2017-03-03 16:31:46', '2017-03-03 16:31:46', 1),
(31, 5, 'postponed', '2017-05-05 00:00:00', '2017-03-03 16:32:27', '2017-03-03 16:32:27', 1),
(32, 1, 'postponed', '2017-03-01 00:00:00', '2017-03-03 17:33:03', '2017-03-03 17:33:03', 1),
(33, 10, 'postponed', '2017-03-01 00:00:00', '2017-03-14 13:22:34', '2017-03-14 13:22:34', 1),
(34, 3, 'postponed', '2017-05-12 00:00:00', '2017-03-14 13:23:13', '2017-03-14 13:23:13', 1),
(35, 5, 'postponed', '2017-03-08 00:00:00', '2017-03-14 13:32:48', '2017-03-14 13:32:48', 1),
(36, 5, 'done', '0000-00-00 00:00:00', '2017-03-14 13:36:41', '2017-03-14 13:36:41', 1),
(37, 12, 'postponed', '2017-04-07 00:00:00', '2017-04-05 15:50:12', '2017-04-05 15:50:12', 1),
(38, 12, 'postponed', '2017-04-06 00:00:00', '2017-04-05 15:50:51', '2017-04-05 15:50:51', 1),
(39, 12, 'cancelled', '0000-00-00 00:00:00', '2017-04-05 15:51:00', '2017-04-05 15:51:00', 1),
(40, 12, 'cancelled', '0000-00-00 00:00:00', '2017-04-05 15:51:59', '2017-04-05 15:51:59', 1),
(41, 7, 'cancelled', '0000-00-00 00:00:00', '2017-04-06 12:09:56', '2017-04-06 12:09:56', 1),
(42, 7, 'postponed', '2017-04-06 00:00:00', '2017-04-06 12:10:07', '2017-04-06 12:10:07', 1),
(43, 6, 'done', '0000-00-00 00:00:00', '2017-04-06 12:10:23', '2017-04-06 12:10:23', 1),
(44, 6, 'done', '0000-00-00 00:00:00', '2017-04-06 12:10:40', '2017-04-06 12:10:40', 1),
(45, 7, 'done', '0000-00-00 00:00:00', '2017-04-06 12:11:47', '2017-04-06 12:11:47', 1),
(46, 16, 'done', '0000-00-00 00:00:00', '2017-04-18 11:22:29', '2017-04-18 11:22:29', 1),
(47, 12, 'postponed', '2017-04-28 00:00:00', '2017-04-18 11:23:25', '2017-04-18 11:23:25', 1),
(48, 12, 'cancelled', '0000-00-00 00:00:00', '2017-04-18 11:23:41', '2017-04-18 11:23:41', 1),
(49, 10, 'cancelled', '0000-00-00 00:00:00', '2017-04-18 11:43:40', '2017-04-18 11:43:40', 1),
(50, 2, 'cancelled', '0000-00-00 00:00:00', '2017-04-18 11:43:48', '2017-04-18 11:43:48', 1),
(51, 15, 'done', '0000-00-00 00:00:00', '2017-04-18 11:44:06', '2017-04-18 11:44:06', 1),
(52, 7, 'cancelled', '0000-00-00 00:00:00', '2017-04-18 11:46:16', '2017-04-18 11:46:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_chaos_utility_setting`
--

CREATE TABLE `wp_chaos_utility_setting` (
  `id` int(11) NOT NULL,
  `utility_name` varchar(100) NOT NULL,
  `utility_email_id` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_chaos_utility_setting`
--

INSERT INTO `wp_chaos_utility_setting` (`id`, `utility_name`, `utility_email_id`, `created_at`, `modified_at`, `active`) VALUES
(1, 'Current Bill', 'sample@gmail.com', '2017-04-13 16:40:44', '2017-04-13 16:42:50', 1),
(2, 'Net Bill', 'sample@gmail.com', '2017-04-13 16:43:22', '2017-04-13 16:43:22', 1),
(3, 'Packing Charge1', '', '2017-04-13 16:43:57', '2017-04-13 17:05:23', 1),
(4, 'TEST2', 'sample@gmail.com', '2017-04-13 17:06:06', '2017-04-13 17:06:12', 1),
(5, 'test4', 'sample@gmail.com', '2017-04-13 17:06:25', '2017-04-13 17:06:25', 1),
(6, 'test5', 'sample@gmail.com', '2017-04-13 17:06:30', '2017-04-13 17:07:29', 0),
(7, 'Water bill', 'sample@gmail.com', '2017-04-13 18:30:16', '2017-04-13 18:30:16', 1),
(8, 'current', 'sample@gmail.com', '2017-04-18 11:19:56', '2017-04-18 11:19:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_commentmeta`
--

CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_comments`
--

CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) UNSIGNED NOT NULL,
  `comment_post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `comment_author` tinytext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_comments`
--

INSERT INTO `wp_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'A WordPress Commenter', 'wapuu@wordpress.example', 'https://wordpress.org/', '', '2016-11-25 10:48:45', '2016-11-25 10:48:45', 'Hi, this is a comment.\nTo get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard.\nCommenter avatars come from <a href="https://gravatar.com">Gravatar</a>.', 0, '1', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_links`
--

CREATE TABLE `wp_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_options`
--

CREATE TABLE `wp_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'yes'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_options`
--

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://localhost/chaosentertainment', 'yes'),
(2, 'home', 'http://localhost/chaosentertainment', 'yes'),
(3, 'blogname', 'Chaos Entertainment', 'yes'),
(4, 'blogdescription', 'Just another WordPress site', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'info@chaosentertainment.in', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '1', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'jS F Y', 'yes'),
(24, 'time_format', 'g:i a', 'yes'),
(25, 'links_updated_date_format', 'jS F Y g:i a', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%postname%/', 'yes'),
(29, 'rewrite_rules', 'a:87:{s:11:"^wp-json/?$";s:22:"index.php?rest_route=/";s:14:"^wp-json/(.*)?";s:33:"index.php?rest_route=/$matches[1]";s:21:"^index.php/wp-json/?$";s:22:"index.php?rest_route=/";s:24:"^index.php/wp-json/(.*)?";s:33:"index.php?rest_route=/$matches[1]";s:47:"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?category_name=$matches[1]&feed=$matches[2]";s:42:"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?category_name=$matches[1]&feed=$matches[2]";s:23:"category/(.+?)/embed/?$";s:46:"index.php?category_name=$matches[1]&embed=true";s:35:"category/(.+?)/page/?([0-9]{1,})/?$";s:53:"index.php?category_name=$matches[1]&paged=$matches[2]";s:17:"category/(.+?)/?$";s:35:"index.php?category_name=$matches[1]";s:44:"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?tag=$matches[1]&feed=$matches[2]";s:39:"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?tag=$matches[1]&feed=$matches[2]";s:20:"tag/([^/]+)/embed/?$";s:36:"index.php?tag=$matches[1]&embed=true";s:32:"tag/([^/]+)/page/?([0-9]{1,})/?$";s:43:"index.php?tag=$matches[1]&paged=$matches[2]";s:14:"tag/([^/]+)/?$";s:25:"index.php?tag=$matches[1]";s:45:"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?post_format=$matches[1]&feed=$matches[2]";s:40:"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?post_format=$matches[1]&feed=$matches[2]";s:21:"type/([^/]+)/embed/?$";s:44:"index.php?post_format=$matches[1]&embed=true";s:33:"type/([^/]+)/page/?([0-9]{1,})/?$";s:51:"index.php?post_format=$matches[1]&paged=$matches[2]";s:15:"type/([^/]+)/?$";s:33:"index.php?post_format=$matches[1]";s:48:".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$";s:18:"index.php?feed=old";s:20:".*wp-app\\.php(/.*)?$";s:19:"index.php?error=403";s:18:".*wp-register.php$";s:23:"index.php?register=true";s:32:"feed/(feed|rdf|rss|rss2|atom)/?$";s:27:"index.php?&feed=$matches[1]";s:27:"(feed|rdf|rss|rss2|atom)/?$";s:27:"index.php?&feed=$matches[1]";s:8:"embed/?$";s:21:"index.php?&embed=true";s:20:"page/?([0-9]{1,})/?$";s:28:"index.php?&paged=$matches[1]";s:27:"comment-page-([0-9]{1,})/?$";s:39:"index.php?&page_id=10&cpage=$matches[1]";s:41:"comments/feed/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?&feed=$matches[1]&withcomments=1";s:36:"comments/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?&feed=$matches[1]&withcomments=1";s:17:"comments/embed/?$";s:21:"index.php?&embed=true";s:44:"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:40:"index.php?s=$matches[1]&feed=$matches[2]";s:39:"search/(.+)/(feed|rdf|rss|rss2|atom)/?$";s:40:"index.php?s=$matches[1]&feed=$matches[2]";s:20:"search/(.+)/embed/?$";s:34:"index.php?s=$matches[1]&embed=true";s:32:"search/(.+)/page/?([0-9]{1,})/?$";s:41:"index.php?s=$matches[1]&paged=$matches[2]";s:14:"search/(.+)/?$";s:23:"index.php?s=$matches[1]";s:47:"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?author_name=$matches[1]&feed=$matches[2]";s:42:"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?author_name=$matches[1]&feed=$matches[2]";s:23:"author/([^/]+)/embed/?$";s:44:"index.php?author_name=$matches[1]&embed=true";s:35:"author/([^/]+)/page/?([0-9]{1,})/?$";s:51:"index.php?author_name=$matches[1]&paged=$matches[2]";s:17:"author/([^/]+)/?$";s:33:"index.php?author_name=$matches[1]";s:69:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$";s:80:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]";s:64:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$";s:80:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]";s:45:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$";s:74:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true";s:57:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$";s:81:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]";s:39:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$";s:63:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]";s:56:"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$";s:64:"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]";s:51:"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$";s:64:"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]";s:32:"([0-9]{4})/([0-9]{1,2})/embed/?$";s:58:"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true";s:44:"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$";s:65:"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]";s:26:"([0-9]{4})/([0-9]{1,2})/?$";s:47:"index.php?year=$matches[1]&monthnum=$matches[2]";s:43:"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?year=$matches[1]&feed=$matches[2]";s:38:"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?year=$matches[1]&feed=$matches[2]";s:19:"([0-9]{4})/embed/?$";s:37:"index.php?year=$matches[1]&embed=true";s:31:"([0-9]{4})/page/?([0-9]{1,})/?$";s:44:"index.php?year=$matches[1]&paged=$matches[2]";s:13:"([0-9]{4})/?$";s:26:"index.php?year=$matches[1]";s:27:".?.+?/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:37:".?.+?/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:57:".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:33:".?.+?/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:16:"(.?.+?)/embed/?$";s:41:"index.php?pagename=$matches[1]&embed=true";s:20:"(.?.+?)/trackback/?$";s:35:"index.php?pagename=$matches[1]&tb=1";s:40:"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?pagename=$matches[1]&feed=$matches[2]";s:35:"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?pagename=$matches[1]&feed=$matches[2]";s:28:"(.?.+?)/page/?([0-9]{1,})/?$";s:48:"index.php?pagename=$matches[1]&paged=$matches[2]";s:35:"(.?.+?)/comment-page-([0-9]{1,})/?$";s:48:"index.php?pagename=$matches[1]&cpage=$matches[2]";s:24:"(.?.+?)(?:/([0-9]+))?/?$";s:47:"index.php?pagename=$matches[1]&page=$matches[2]";s:27:"[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:37:"[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:57:"[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:"[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:"[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:33:"[^/]+/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:16:"([^/]+)/embed/?$";s:37:"index.php?name=$matches[1]&embed=true";s:20:"([^/]+)/trackback/?$";s:31:"index.php?name=$matches[1]&tb=1";s:40:"([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?name=$matches[1]&feed=$matches[2]";s:35:"([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?name=$matches[1]&feed=$matches[2]";s:28:"([^/]+)/page/?([0-9]{1,})/?$";s:44:"index.php?name=$matches[1]&paged=$matches[2]";s:35:"([^/]+)/comment-page-([0-9]{1,})/?$";s:44:"index.php?name=$matches[1]&cpage=$matches[2]";s:24:"([^/]+)(?:/([0-9]+))?/?$";s:43:"index.php?name=$matches[1]&page=$matches[2]";s:16:"[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:26:"[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:46:"[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:41:"[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:41:"[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:22:"[^/]+/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:3:{i:0;s:48:"capability-manager-enhanced/capsman-enhanced.php";i:1;s:58:"contact-form-7-to-database-extension/contact-form-7-db.php";i:2;s:36:"contact-form-7/wp-contact-form-7.php";}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '0', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', '', 'no'),
(40, 'template', 'chaos', 'yes'),
(41, 'stylesheet', 'chaos', 'yes'),
(42, 'comment_whitelist', '1', 'yes'),
(43, 'blacklist_keys', '', 'no'),
(44, 'comment_registration', '0', 'yes'),
(45, 'html_type', 'text/html', 'yes'),
(46, 'use_trackback', '0', 'yes'),
(47, 'default_role', 'subscriber', 'yes'),
(48, 'db_version', '38590', 'yes'),
(49, 'uploads_use_yearmonth_folders', '1', 'yes'),
(50, 'upload_path', '', 'yes'),
(51, 'blog_public', '1', 'yes'),
(52, 'default_link_category', '2', 'yes'),
(53, 'show_on_front', 'page', 'yes'),
(54, 'tag_base', '', 'yes'),
(55, 'show_avatars', '1', 'yes'),
(56, 'avatar_rating', 'G', 'yes'),
(57, 'upload_url_path', '', 'yes'),
(58, 'thumbnail_size_w', '150', 'yes'),
(59, 'thumbnail_size_h', '150', 'yes'),
(60, 'thumbnail_crop', '1', 'yes'),
(61, 'medium_size_w', '300', 'yes'),
(62, 'medium_size_h', '300', 'yes'),
(63, 'avatar_default', 'mystery', 'yes'),
(64, 'large_size_w', '1024', 'yes'),
(65, 'large_size_h', '1024', 'yes'),
(66, 'image_default_link_type', 'none', 'yes'),
(67, 'image_default_size', '', 'yes'),
(68, 'image_default_align', '', 'yes'),
(69, 'close_comments_for_old_posts', '0', 'yes'),
(70, 'close_comments_days_old', '14', 'yes'),
(71, 'thread_comments', '1', 'yes'),
(72, 'thread_comments_depth', '5', 'yes'),
(73, 'page_comments', '0', 'yes'),
(74, 'comments_per_page', '50', 'yes'),
(75, 'default_comments_page', 'newest', 'yes'),
(76, 'comment_order', 'asc', 'yes'),
(77, 'sticky_posts', 'a:0:{}', 'yes'),
(78, 'widget_categories', 'a:2:{i:2;a:4:{s:5:"title";s:0:"";s:5:"count";i:0;s:12:"hierarchical";i:0;s:8:"dropdown";i:0;}s:12:"_multiwidget";i:1;}', 'yes'),
(79, 'widget_text', 'a:0:{}', 'yes'),
(80, 'widget_rss', 'a:0:{}', 'yes'),
(81, 'uninstall_plugins', 'a:0:{}', 'no'),
(82, 'timezone_string', 'Europe/London', 'yes'),
(83, 'page_for_posts', '0', 'yes'),
(84, 'page_on_front', '10', 'yes'),
(85, 'default_post_format', '0', 'yes'),
(86, 'link_manager_enabled', '0', 'yes'),
(87, 'finished_splitting_shared_terms', '1', 'yes'),
(88, 'site_icon', '0', 'yes'),
(89, 'medium_large_size_w', '768', 'yes'),
(90, 'medium_large_size_h', '0', 'yes'),
(91, 'initial_db_version', '37965', 'yes'),
(92, 'wp_user_roles', 'a:6:{s:13:"administrator";a:2:{s:4:"name";s:13:"Administrator";s:12:"capabilities";a:62:{s:13:"switch_themes";b:1;s:11:"edit_themes";b:1;s:16:"activate_plugins";b:1;s:12:"edit_plugins";b:1;s:10:"edit_users";b:1;s:10:"edit_files";b:1;s:14:"manage_options";b:1;s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:6:"import";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:8:"level_10";b:1;s:7:"level_9";b:1;s:7:"level_8";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;s:12:"delete_users";b:1;s:12:"create_users";b:1;s:17:"unfiltered_upload";b:1;s:14:"edit_dashboard";b:1;s:14:"update_plugins";b:1;s:14:"delete_plugins";b:1;s:15:"install_plugins";b:1;s:13:"update_themes";b:1;s:14:"install_themes";b:1;s:11:"update_core";b:1;s:10:"list_users";b:1;s:12:"remove_users";b:1;s:13:"promote_users";b:1;s:18:"edit_theme_options";b:1;s:13:"delete_themes";b:1;s:6:"export";b:1;s:19:"manage_capabilities";b:1;}}s:6:"editor";a:2:{s:4:"name";s:6:"Editor";s:12:"capabilities";a:34:{s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;}}s:6:"author";a:2:{s:4:"name";s:6:"Author";s:12:"capabilities";a:10:{s:12:"upload_files";b:1;s:10:"edit_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:4:"read";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;s:22:"delete_published_posts";b:1;}}s:11:"contributor";a:2:{s:4:"name";s:11:"Contributor";s:12:"capabilities";a:5:{s:10:"edit_posts";b:1;s:4:"read";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;}}s:10:"subscriber";a:2:{s:4:"name";s:10:"Subscriber";s:12:"capabilities";a:2:{s:4:"read";b:1;s:7:"level_0";b:1;}}s:6:"member";a:2:{s:4:"name";s:6:"Member";s:12:"capabilities";a:34:{s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:13:"publish_posts";b:1;s:20:"edit_published_posts";b:1;s:18:"edit_private_posts";b:1;s:10:"edit_pages";b:1;s:17:"edit_others_pages";b:1;s:13:"publish_pages";b:1;s:20:"edit_published_pages";b:1;s:18:"edit_private_pages";b:1;s:17:"manage_categories";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:20:"delete_private_pages";b:1;s:18:"read_private_posts";b:1;s:18:"read_private_pages";b:1;s:16:"activate_plugins";b:1;s:9:"add_users";b:1;s:12:"create_users";b:1;s:14:"delete_plugins";b:1;s:13:"delete_themes";b:1;s:12:"delete_users";b:1;s:14:"edit_dashboard";b:1;s:10:"edit_files";b:1;s:12:"edit_plugins";b:1;s:18:"edit_theme_options";b:1;s:15:"install_plugins";b:1;s:19:"manage_capabilities";b:1;s:7:"level_0";b:1;}}}', 'yes'),
(93, 'WPLANG', 'en_GB', 'yes'),
(94, 'widget_search', 'a:2:{i:2;a:1:{s:5:"title";s:0:"";}s:12:"_multiwidget";i:1;}', 'yes'),
(95, 'widget_recent-posts', 'a:2:{i:2;a:2:{s:5:"title";s:0:"";s:6:"number";i:5;}s:12:"_multiwidget";i:1;}', 'yes'),
(96, 'widget_recent-comments', 'a:2:{i:2;a:2:{s:5:"title";s:0:"";s:6:"number";i:5;}s:12:"_multiwidget";i:1;}', 'yes'),
(97, 'widget_archives', 'a:2:{i:2;a:3:{s:5:"title";s:0:"";s:5:"count";i:0;s:8:"dropdown";i:0;}s:12:"_multiwidget";i:1;}', 'yes'),
(98, 'widget_meta', 'a:2:{i:2;a:1:{s:5:"title";s:0:"";}s:12:"_multiwidget";i:1;}', 'yes'),
(99, 'sidebars_widgets', 'a:3:{s:19:"wp_inactive_widgets";a:0:{}s:18:"orphaned_widgets_1";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}s:13:"array_version";i:3;}', 'yes'),
(100, 'widget_pages', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(101, 'widget_calendar', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(102, 'widget_tag_cloud', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(103, 'widget_nav_menu', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(104, 'cron', 'a:5:{i:1511504605;a:1:{s:30:"wp_scheduled_auto_draft_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1511513865;a:1:{s:25:"delete_expired_transients";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1511520526;a:3:{s:16:"wp_version_check";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:17:"wp_update_plugins";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:16:"wp_update_themes";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}}i:1511520541;a:1:{s:19:"wp_scheduled_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}s:7:"version";i:2;}', 'yes'),
(486, 'auto_core_update_notified', 'a:4:{s:4:"type";s:7:"success";s:5:"email";s:26:"info@chaosentertainment.in";s:7:"version";s:5:"4.6.8";s:9:"timestamp";i:1509461313;}', 'no'),
(245, 'CF7DBPlugin_IntegrateWithEnfoldThemForms', 'true', 'yes'),
(246, 'CF7DBPlugin_IntegrateWithCFormsII', 'true', 'yes'),
(247, 'CF7DBPlugin_IntegrateWithFormCraft', 'true', 'yes'),
(248, 'CF7DBPlugin_IntegrateWithVerySimpleContactForm', 'true', 'yes'),
(229, 'recently_activated', 'a:0:{}', 'yes'),
(3127, '_site_transient_timeout_theme_roots', '1511496268', 'no'),
(3128, '_site_transient_theme_roots', 'a:3:{s:5:"chaos";s:7:"/themes";s:15:"twentyseventeen";s:7:"/themes";s:13:"twentysixteen";s:7:"/themes";}', 'no'),
(228, 'wpcf7', 'a:2:{s:7:"version";s:3:"4.6";s:13:"bulk_validate";a:4:{s:9:"timestamp";d:1481117093;s:7:"version";s:3:"4.6";s:11:"count_valid";i:1;s:13:"count_invalid";i:0;}}', 'yes'),
(3114, 'db_upgraded', '', 'yes'),
(3116, '_site_transient_update_core', 'O:8:"stdClass":4:{s:7:"updates";a:1:{i:0;O:8:"stdClass":10:{s:8:"response";s:6:"latest";s:8:"download";s:63:"https://downloads.wordpress.org/release/en_GB/wordpress-4.9.zip";s:6:"locale";s:5:"en_GB";s:8:"packages";O:8:"stdClass":5:{s:4:"full";s:63:"https://downloads.wordpress.org/release/en_GB/wordpress-4.9.zip";s:10:"no_content";b:0;s:11:"new_bundled";b:0;s:7:"partial";b:0;s:8:"rollback";b:0;}s:7:"current";s:3:"4.9";s:7:"version";s:3:"4.9";s:11:"php_version";s:5:"5.2.4";s:13:"mysql_version";s:3:"5.0";s:11:"new_bundled";s:3:"4.7";s:15:"partial_version";s:0:"";}}s:12:"last_checked";i:1511494465;s:15:"version_checked";s:3:"4.9";s:12:"translations";a:0:{}}', 'no'),
(3118, 'can_compress_scripts', '0', 'no'),
(3085, '_transient_timeout_plugin_slugs', '1511442366', 'no'),
(3086, '_transient_plugin_slugs', 'a:5:{i:0;s:19:"akismet/akismet.php";i:1;s:48:"capability-manager-enhanced/capsman-enhanced.php";i:2;s:36:"contact-form-7/wp-contact-form-7.php";i:3;s:58:"contact-form-7-to-database-extension/contact-form-7-db.php";i:4;s:9:"hello.php";}', 'no'),
(3071, '_site_transient_timeout_browser_315117425c117d80648b71a24b9b1815', '1511869155', 'no'),
(3072, '_site_transient_browser_315117425c117d80648b71a24b9b1815', 'a:10:{s:4:"name";s:6:"Chrome";s:7:"version";s:12:"62.0.3202.94";s:8:"platform";s:7:"Windows";s:10:"update_url";s:29:"https://www.google.com/chrome";s:7:"img_src";s:43:"http://s.w.org/images/browsers/chrome.png?1";s:11:"img_src_ssl";s:44:"https://s.w.org/images/browsers/chrome.png?1";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;s:6:"mobile";b:0;}', 'no'),
(135, 'theme_mods_twentysixteen', 'a:2:{s:18:"nav_menu_locations";a:2:{s:7:"primary";i:2;s:7:"newmenu";i:3;}s:16:"sidebars_widgets";a:2:{s:4:"time";i:1481173239;s:4:"data";a:2:{s:19:"wp_inactive_widgets";a:0:{}s:9:"sidebar-1";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}}}}', 'yes'),
(136, 'current_theme', 'Chaos Entertainment', 'yes'),
(137, 'theme_mods_chaos', 'a:3:{i:0;b:0;s:18:"nav_menu_locations";a:2:{s:7:"primary";i:2;s:7:"newmenu";i:3;}s:18:"custom_css_post_id";i:-1;}', 'yes'),
(138, 'theme_switched', '', 'yes'),
(159, 'nav_menu_options', 'a:2:{i:0;b:0;s:8:"auto_add";a:0:{}}', 'yes'),
(232, 'CF7DBPlugin_NoSaveFields', '/.*wpcf7.*/,_wpnonce', 'yes'),
(233, 'CF7DBPlugin__version', '2.10.26', 'yes'),
(234, 'CF7DBPlugin__installed', '1', 'yes'),
(235, 'CF7DBPlugin_IntegrateWithCF7', 'true', 'yes'),
(236, 'CF7DBPlugin_GenerateSubmitTimeInCF7Email', 'false', 'yes'),
(237, 'CF7DBPlugin_IntegrateWithFSCF', 'true', 'yes'),
(238, 'CF7DBPlugin_IntegrateWithJetPackContactForm', 'true', 'yes'),
(239, 'CF7DBPlugin_IntegrateWithGravityForms', 'true', 'yes'),
(240, 'CF7DBPlugin_IntegrateWithFormidableForms', 'true', 'yes'),
(241, 'CF7DBPlugin_IntegrateWithWrContactForms', 'true', 'yes'),
(242, 'CF7DBPlugin_IntegrateWithQuform', 'true', 'yes'),
(243, 'CF7DBPlugin_IntegrateWithNinjaForms', 'true', 'yes'),
(244, 'CF7DBPlugin_IntegrateWithCalderaForms', 'true', 'yes'),
(249, 'CF7DBPlugin_IntegrateWithFMS', 'true', 'yes'),
(250, 'CF7DBPlugin_HideAdminPanelFromNonAdmins', 'true', 'yes'),
(251, 'CF7DBPlugin_IntegrateWithCF7SavePageTitle', 'false', 'yes'),
(252, 'CF7DBPlugin_IntegrateWithCF7SavePageUrl', 'false', 'yes'),
(253, 'CF7DBPlugin_SaveCookieData', 'false', 'yes'),
(254, 'CF7DBPlugin_UseDataTablesJS', 'true', 'yes'),
(255, 'CF7DBPlugin_Donated', 'false', 'yes'),
(256, 'CF7DBPlugin_HorizontalScroll', 'true', 'yes'),
(257, 'CF7DBPlugin_MaxRows', '100', 'yes'),
(258, 'CF7DBPlugin_SubmitDateTimeFormat', 'Y-m-d H:i:s P', 'yes'),
(259, 'CF7DBPlugin_ShowQuery', 'false', 'yes'),
(3129, '_site_transient_update_themes', 'O:8:"stdClass":4:{s:12:"last_checked";i:1511494475;s:7:"checked";a:3:{s:5:"chaos";s:5:"1.0.0";s:15:"twentyseventeen";s:3:"1.4";s:13:"twentysixteen";s:3:"1.3";}s:8:"response";a:1:{s:13:"twentysixteen";a:4:{s:5:"theme";s:13:"twentysixteen";s:11:"new_version";s:3:"1.4";s:3:"url";s:43:"https://wordpress.org/themes/twentysixteen/";s:7:"package";s:59:"https://downloads.wordpress.org/theme/twentysixteen.1.4.zip";}}s:12:"translations";a:0:{}}', 'no'),
(3130, '_site_transient_update_plugins', 'O:8:"stdClass":4:{s:12:"last_checked";i:1511494472;s:8:"response";a:2:{s:19:"akismet/akismet.php";O:8:"stdClass":11:{s:2:"id";s:21:"w.org/plugins/akismet";s:4:"slug";s:7:"akismet";s:6:"plugin";s:19:"akismet/akismet.php";s:11:"new_version";s:5:"4.0.1";s:3:"url";s:38:"https://wordpress.org/plugins/akismet/";s:7:"package";s:56:"https://downloads.wordpress.org/plugin/akismet.4.0.1.zip";s:5:"icons";a:3:{s:2:"1x";s:59:"https://ps.w.org/akismet/assets/icon-128x128.png?rev=969272";s:2:"2x";s:59:"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272";s:7:"default";s:59:"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272";}s:7:"banners";a:2:{s:2:"1x";s:61:"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904";s:7:"default";s:61:"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904";}s:11:"banners_rtl";a:0:{}s:6:"tested";s:3:"4.9";s:13:"compatibility";O:8:"stdClass":0:{}}s:36:"contact-form-7/wp-contact-form-7.php";O:8:"stdClass":11:{s:2:"id";s:28:"w.org/plugins/contact-form-7";s:4:"slug";s:14:"contact-form-7";s:6:"plugin";s:36:"contact-form-7/wp-contact-form-7.php";s:11:"new_version";s:5:"4.9.1";s:3:"url";s:45:"https://wordpress.org/plugins/contact-form-7/";s:7:"package";s:63:"https://downloads.wordpress.org/plugin/contact-form-7.4.9.1.zip";s:5:"icons";a:3:{s:2:"1x";s:66:"https://ps.w.org/contact-form-7/assets/icon-128x128.png?rev=984007";s:2:"2x";s:66:"https://ps.w.org/contact-form-7/assets/icon-256x256.png?rev=984007";s:7:"default";s:66:"https://ps.w.org/contact-form-7/assets/icon-256x256.png?rev=984007";}s:7:"banners";a:3:{s:2:"2x";s:69:"https://ps.w.org/contact-form-7/assets/banner-1544x500.png?rev=860901";s:2:"1x";s:68:"https://ps.w.org/contact-form-7/assets/banner-772x250.png?rev=880427";s:7:"default";s:69:"https://ps.w.org/contact-form-7/assets/banner-1544x500.png?rev=860901";}s:11:"banners_rtl";a:0:{}s:6:"tested";s:3:"4.9";s:13:"compatibility";O:8:"stdClass":0:{}}}s:12:"translations";a:0:{}s:9:"no_update";a:1:{s:48:"capability-manager-enhanced/capsman-enhanced.php";O:8:"stdClass":9:{s:2:"id";s:41:"w.org/plugins/capability-manager-enhanced";s:4:"slug";s:27:"capability-manager-enhanced";s:6:"plugin";s:48:"capability-manager-enhanced/capsman-enhanced.php";s:11:"new_version";s:5:"1.5.7";s:3:"url";s:58:"https://wordpress.org/plugins/capability-manager-enhanced/";s:7:"package";s:70:"https://downloads.wordpress.org/plugin/capability-manager-enhanced.zip";s:5:"icons";a:0:{}s:7:"banners";a:3:{s:2:"2x";s:82:"https://ps.w.org/capability-manager-enhanced/assets/banner-1544x500.png?rev=776273";s:2:"1x";s:81:"https://ps.w.org/capability-manager-enhanced/assets/banner-772x250.png?rev=776273";s:7:"default";s:82:"https://ps.w.org/capability-manager-enhanced/assets/banner-1544x500.png?rev=776273";}s:11:"banners_rtl";a:0:{}}}}', 'no'),
(3099, 'capsman_version', '', 'yes'),
(3109, 'widget_media_audio', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(3110, 'widget_media_image', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(3111, 'widget_media_gallery', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(3112, 'widget_media_video', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(3113, 'widget_custom_html', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `wp_postmeta`
--

CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(2, 4, '_edit_last', '1'),
(3, 4, '_wp_page_template', 'fifa-page.php'),
(4, 4, '_edit_lock', '1480314125:1'),
(5, 6, '_edit_last', '1'),
(6, 6, '_edit_lock', '1496385193:1'),
(7, 6, '_wp_page_template', 'lazer-page.php'),
(8, 8, '_edit_last', '1'),
(9, 8, '_edit_lock', '1480314181:1'),
(10, 8, '_wp_page_template', 'ps-page.php'),
(11, 10, '_edit_last', '1'),
(12, 10, '_wp_page_template', 'default'),
(13, 10, '_edit_lock', '1480314207:1'),
(14, 12, '_menu_item_type', 'post_type'),
(15, 12, '_menu_item_menu_item_parent', '0'),
(16, 12, '_menu_item_object_id', '10'),
(17, 12, '_menu_item_object', 'page'),
(18, 12, '_menu_item_target', ''),
(19, 12, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(20, 12, '_menu_item_xfn', ''),
(21, 12, '_menu_item_url', ''),
(42, 15, '_menu_item_menu_item_parent', '0'),
(147, 42, '_menu_item_target', ''),
(146, 42, '_menu_item_object', 'page'),
(145, 42, '_menu_item_object_id', '32'),
(144, 42, '_menu_item_menu_item_parent', '0'),
(143, 42, '_menu_item_type', 'post_type'),
(32, 14, '_menu_item_type', 'custom'),
(33, 14, '_menu_item_menu_item_parent', '0'),
(34, 14, '_menu_item_object_id', '14'),
(35, 14, '_menu_item_object', 'custom'),
(36, 14, '_menu_item_target', ''),
(37, 14, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(38, 14, '_menu_item_xfn', ''),
(39, 14, '_menu_item_url', '#about'),
(41, 15, '_menu_item_type', 'custom'),
(43, 15, '_menu_item_object_id', '15'),
(44, 15, '_menu_item_object', 'custom'),
(45, 15, '_menu_item_target', ''),
(46, 15, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(47, 15, '_menu_item_xfn', ''),
(48, 15, '_menu_item_url', '#fac'),
(50, 16, '_menu_item_type', 'custom'),
(51, 16, '_menu_item_menu_item_parent', '0'),
(52, 16, '_menu_item_object_id', '16'),
(53, 16, '_menu_item_object', 'custom'),
(54, 16, '_menu_item_target', ''),
(55, 16, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(56, 16, '_menu_item_xfn', ''),
(57, 16, '_menu_item_url', '#memb'),
(59, 17, '_menu_item_type', 'custom'),
(60, 17, '_menu_item_menu_item_parent', '0'),
(61, 17, '_menu_item_object_id', '17'),
(62, 17, '_menu_item_object', 'custom'),
(63, 17, '_menu_item_target', ''),
(64, 17, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(65, 17, '_menu_item_xfn', ''),
(66, 17, '_menu_item_url', '#score'),
(68, 18, '_menu_item_type', 'custom'),
(69, 18, '_menu_item_menu_item_parent', '0'),
(70, 18, '_menu_item_object_id', '18'),
(71, 18, '_menu_item_object', 'custom'),
(72, 18, '_menu_item_target', ''),
(73, 18, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(74, 18, '_menu_item_xfn', ''),
(75, 18, '_menu_item_url', '#contact'),
(77, 20, '_form', '<div class="form-group">\n[text* your-name class:form-control placeholder "Name"]\n</div>\n\n<div class="form-group">\n[email* your-email class:form-control placeholder "E-mail"]\n</div>\n\n<div class="form-group">\n[text* your-number class:form-control placeholder "Phone"]\n</div>\n<br><br>\n<button type="submit" class="btn btn-default">Submit</button>'),
(78, 20, '_mail', 'a:8:{s:7:"subject";s:36:"Chaos Entertainment "[your-subject]"";s:6:"sender";s:40:"[your-name] <info@chaosentertainment.in>";s:4:"body";s:189:"From: [your-name] <[your-email]>\nSubject: [your-subject]\n\nMessage Body:\n[your-message]\n\n--\nThis e-mail was sent from a contact form on Chaos Entertainment (http://www.chaosentertainment.in)";s:9:"recipient";s:15:"chaos@gmail.com";s:18:"additional_headers";s:22:"Reply-To: [your-email]";s:11:"attachments";s:0:"";s:8:"use_html";b:0;s:13:"exclude_blank";b:0;}'),
(79, 20, '_mail_2', 'a:9:{s:6:"active";b:0;s:7:"subject";s:36:"Chaos Entertainment "[your-subject]"";s:6:"sender";s:48:"Chaos Entertainment <info@chaosentertainment.in>";s:4:"body";s:131:"Message Body:\n[your-message]\n\n--\nThis e-mail was sent from a contact form on Chaos Entertainment (http://www.chaosentertainment.in)";s:9:"recipient";s:12:"[your-email]";s:18:"additional_headers";s:36:"Reply-To: info@chaosentertainment.in";s:11:"attachments";s:0:"";s:8:"use_html";b:0;s:13:"exclude_blank";b:0;}'),
(80, 20, '_messages', 'a:23:{s:12:"mail_sent_ok";s:45:"Thank you for your message. It has been sent.";s:12:"mail_sent_ng";s:71:"There was an error trying to send your message. Please try again later.";s:16:"validation_error";s:61:"One or more fields have an error. Please check and try again.";s:4:"spam";s:71:"There was an error trying to send your message. Please try again later.";s:12:"accept_terms";s:69:"You must accept the terms and conditions before sending your message.";s:16:"invalid_required";s:22:"The field is required.";s:16:"invalid_too_long";s:22:"The field is too long.";s:17:"invalid_too_short";s:23:"The field is too short.";s:12:"invalid_date";s:29:"The date format is incorrect.";s:14:"date_too_early";s:44:"The date is before the earliest one allowed.";s:13:"date_too_late";s:41:"The date is after the latest one allowed.";s:13:"upload_failed";s:46:"There was an unknown error uploading the file.";s:24:"upload_file_type_invalid";s:49:"You are not allowed to upload files of this type.";s:21:"upload_file_too_large";s:20:"The file is too big.";s:23:"upload_failed_php_error";s:38:"There was an error uploading the file.";s:14:"invalid_number";s:29:"The number format is invalid.";s:16:"number_too_small";s:47:"The number is smaller than the minimum allowed.";s:16:"number_too_large";s:46:"The number is larger than the maximum allowed.";s:23:"quiz_answer_not_correct";s:36:"The answer to the quiz is incorrect.";s:17:"captcha_not_match";s:31:"Your entered code is incorrect.";s:13:"invalid_email";s:38:"The e-mail address entered is invalid.";s:11:"invalid_url";s:19:"The URL is invalid.";s:11:"invalid_tel";s:32:"The telephone number is invalid.";}'),
(81, 20, '_additional_settings', ''),
(82, 20, '_locale', 'en_GB'),
(83, 21, '_menu_item_type', 'post_type'),
(84, 21, '_menu_item_menu_item_parent', '0'),
(85, 21, '_menu_item_object_id', '10'),
(86, 21, '_menu_item_object', 'page'),
(87, 21, '_menu_item_target', ''),
(88, 21, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(89, 21, '_menu_item_xfn', ''),
(90, 21, '_menu_item_url', ''),
(121, 26, '_edit_lock', '1491990350:1'),
(92, 22, '_menu_item_type', 'post_type'),
(93, 22, '_menu_item_menu_item_parent', '0'),
(94, 22, '_menu_item_object_id', '6'),
(95, 22, '_menu_item_object', 'page'),
(96, 22, '_menu_item_target', ''),
(97, 22, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(98, 22, '_menu_item_xfn', ''),
(99, 22, '_menu_item_url', ''),
(101, 23, '_menu_item_type', 'post_type'),
(102, 23, '_menu_item_menu_item_parent', '0'),
(103, 23, '_menu_item_object_id', '4'),
(104, 23, '_menu_item_object', 'page'),
(105, 23, '_menu_item_target', ''),
(106, 23, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(107, 23, '_menu_item_xfn', ''),
(108, 23, '_menu_item_url', ''),
(120, 26, '_wp_page_template', 'score-board.php'),
(110, 24, '_menu_item_type', 'post_type'),
(111, 24, '_menu_item_menu_item_parent', '0'),
(112, 24, '_menu_item_object_id', '8'),
(113, 24, '_menu_item_object', 'page'),
(114, 24, '_menu_item_target', ''),
(115, 24, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(116, 24, '_menu_item_xfn', ''),
(117, 24, '_menu_item_url', ''),
(119, 26, '_edit_last', '1'),
(122, 29, '_edit_last', '1'),
(123, 29, '_wp_page_template', 'fifa-page.php'),
(124, 29, '_edit_lock', '1492579334:1'),
(135, 35, '_wp_page_template', 'inc/football-print.php'),
(134, 35, '_edit_last', '1'),
(150, 42, '_menu_item_url', ''),
(149, 42, '_menu_item_xfn', ''),
(148, 42, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(131, 32, '_edit_last', '1'),
(132, 32, '_edit_lock', '1492581287:1'),
(133, 32, '_wp_page_template', 'score-board.php'),
(136, 35, '_edit_lock', '1492581999:1'),
(137, 37, '_edit_last', '1'),
(138, 37, '_wp_page_template', 'inc/gaming-print.php'),
(139, 37, '_edit_lock', '1492582160:1'),
(140, 39, '_edit_last', '1'),
(141, 39, '_wp_page_template', 'inc/lazertag_print.php'),
(142, 39, '_edit_lock', '1492585004:1'),
(152, 43, '_menu_item_type', 'custom'),
(153, 43, '_menu_item_menu_item_parent', '0'),
(154, 43, '_menu_item_object_id', '43'),
(155, 43, '_menu_item_object', 'custom'),
(156, 43, '_menu_item_target', ''),
(157, 43, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(158, 43, '_menu_item_xfn', ''),
(159, 43, '_menu_item_url', '#');

-- --------------------------------------------------------

--
-- Table structure for table `wp_posts`
--

CREATE TABLE `wp_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_posts`
--

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2016-11-25 10:48:45', '2016-11-25 10:48:45', 'Welcome to WordPress. This is your first post. Edit or delete it, then start writing!', 'Hello world!', '', 'publish', 'open', 'open', '', 'hello-world', '', '', '2016-11-25 10:48:45', '2016-11-25 10:48:45', '', 0, 'http://www.chaosentertainment.in/?p=1', 0, 'post', '', 1),
(43, 1, '2017-06-02 08:03:25', '2017-06-02 07:03:25', '', 'Screening', '', 'publish', 'closed', 'closed', '', 'screening', '', '', '2017-06-02 08:03:57', '2017-06-02 07:03:57', '', 0, 'http://www.chaosentertainment.in/?p=43', 6, 'nav_menu_item', '', 0),
(4, 1, '2016-11-28 06:23:37', '2016-11-28 06:23:37', '', 'Fifa', '', 'publish', 'closed', 'closed', '', 'fifa', '', '', '2017-04-19 06:57:19', '2017-04-19 05:57:19', '', 0, 'http://www.chaosentertainment.in/?page_id=4', 0, 'page', '', 0),
(5, 1, '2016-11-28 06:23:37', '2016-11-28 06:23:37', '', 'Fifa', '', 'inherit', 'closed', 'closed', '', '4-revision-v1', '', '', '2016-11-28 06:23:37', '2016-11-28 06:23:37', '', 4, 'http://www.chaosentertainment.in/2016/11/28/4-revision-v1/', 0, 'revision', '', 0),
(6, 1, '2016-11-28 06:24:43', '2016-11-28 06:24:43', '', 'Lazer', '', 'publish', 'closed', 'closed', '', 'lazer-page', '', '', '2017-06-02 07:35:03', '2017-06-02 06:35:03', '', 0, 'http://www.chaosentertainment.in/?page_id=6', 0, 'page', '', 0),
(7, 1, '2016-11-28 06:24:43', '2016-11-28 06:24:43', '', 'Lazer', '', 'inherit', 'closed', 'closed', '', '6-revision-v1', '', '', '2016-11-28 06:24:43', '2016-11-28 06:24:43', '', 6, 'http://www.chaosentertainment.in/2016/11/28/6-revision-v1/', 0, 'revision', '', 0),
(8, 1, '2016-11-28 06:24:59', '2016-11-28 06:24:59', '', 'Play Station', '', 'publish', 'closed', 'closed', '', 'play-station', '', '', '2016-11-28 06:24:59', '2016-11-28 06:24:59', '', 0, 'http://www.chaosentertainment.in/?page_id=8', 0, 'page', '', 0),
(9, 1, '2016-11-28 06:24:59', '2016-11-28 06:24:59', '', 'Play Station', '', 'inherit', 'closed', 'closed', '', '8-revision-v1', '', '', '2016-11-28 06:24:59', '2016-11-28 06:24:59', '', 8, 'http://www.chaosentertainment.in/2016/11/28/8-revision-v1/', 0, 'revision', '', 0),
(10, 1, '2016-11-28 06:25:44', '2016-11-28 06:25:44', '', 'Home', '', 'publish', 'closed', 'closed', '', 'home', '', '', '2016-11-28 06:25:44', '2016-11-28 06:25:44', '', 0, 'http://www.chaosentertainment.in/?page_id=10', 0, 'page', '', 0),
(11, 1, '2016-11-28 06:25:44', '2016-11-28 06:25:44', '', 'Home', '', 'inherit', 'closed', 'closed', '', '10-revision-v1', '', '', '2016-11-28 06:25:44', '2016-11-28 06:25:44', '', 10, 'http://www.chaosentertainment.in/2016/11/28/10-revision-v1/', 0, 'revision', '', 0),
(12, 1, '2016-11-28 06:27:02', '2016-11-28 06:27:02', ' ', '', '', 'publish', 'closed', 'closed', '', '12', '', '', '2017-06-02 07:53:44', '2017-06-02 06:53:44', '', 0, 'http://www.chaosentertainment.in/?p=12', 1, 'nav_menu_item', '', 0),
(42, 1, '2017-06-02 08:01:29', '2017-06-02 07:01:29', '', 'Tournament', '', 'publish', 'closed', 'closed', '', 'tournment', '', '', '2017-06-02 08:03:57', '2017-06-02 07:03:57', '', 0, 'http://www.chaosentertainment.in/?p=42', 5, 'nav_menu_item', '', 0),
(14, 1, '2016-11-28 06:27:02', '2016-11-28 06:27:02', '', 'ABOUT', '', 'publish', 'closed', 'closed', '', 'about-us', '', '', '2017-06-02 07:53:44', '2017-06-02 06:53:44', '', 0, 'http://www.chaosentertainment.in/?p=14', 2, 'nav_menu_item', '', 0),
(15, 1, '2016-11-28 06:31:45', '2016-11-28 06:31:45', '', 'FACILITIES', '', 'publish', 'closed', 'closed', '', 'facilities', '', '', '2017-06-02 07:53:44', '2017-06-02 06:53:44', '', 0, 'http://www.chaosentertainment.in/?p=15', 3, 'nav_menu_item', '', 0),
(16, 1, '2016-11-28 06:31:45', '2016-11-28 06:31:45', '', 'MEMBERSHIP', '', 'publish', 'closed', 'closed', '', 'membership', '', '', '2017-06-02 07:53:44', '2017-06-02 06:53:44', '', 0, 'http://www.chaosentertainment.in/?p=16', 4, 'nav_menu_item', '', 0),
(17, 1, '2016-11-28 06:31:45', '2016-11-28 06:31:45', '', 'WINNER', '', 'publish', 'closed', 'closed', '', 'winner', '', '', '2017-06-02 07:53:44', '2017-06-02 06:53:44', '', 0, 'http://www.chaosentertainment.in/?p=17', 5, 'nav_menu_item', '', 0),
(18, 1, '2016-11-28 06:31:45', '2016-11-28 06:31:45', '', 'CONTACT', '', 'publish', 'closed', 'closed', '', 'contact', '', '', '2017-06-02 07:53:44', '2017-06-02 06:53:44', '', 0, 'http://www.chaosentertainment.in/?p=18', 6, 'nav_menu_item', '', 0),
(20, 1, '2016-12-07 13:24:53', '2016-12-07 13:24:53', '<div class="form-group">\r\n[text* your-name class:form-control placeholder "Name"]\r\n</div>\r\n\r\n<div class="form-group">\r\n[email* your-email class:form-control placeholder "E-mail"]\r\n</div>\r\n\r\n<div class="form-group">\r\n[text* your-number class:form-control placeholder "Phone"]\r\n</div>\r\n<br><br>\r\n<button type="submit" class="btn btn-default">Submit</button>\nChaos Entertainment "[your-subject]"\n[your-name] <info@chaosentertainment.in>\nFrom: [your-name] <[your-email]>\r\nSubject: [your-subject]\r\n\r\nMessage Body:\r\n[your-message]\r\n\r\n--\r\nThis e-mail was sent from a contact form on Chaos Entertainment (http://www.chaosentertainment.in)\nchaos@gmail.com\nReply-To: [your-email]\n\n\n\n\nChaos Entertainment "[your-subject]"\nChaos Entertainment <info@chaosentertainment.in>\nMessage Body:\r\n[your-message]\r\n\r\n--\r\nThis e-mail was sent from a contact form on Chaos Entertainment (http://www.chaosentertainment.in)\n[your-email]\nReply-To: info@chaosentertainment.in\n\n\n\nThank you for your message. It has been sent.\nThere was an error trying to send your message. Please try again later.\nOne or more fields have an error. Please check and try again.\nThere was an error trying to send your message. Please try again later.\nYou must accept the terms and conditions before sending your message.\nThe field is required.\nThe field is too long.\nThe field is too short.\nThe date format is incorrect.\nThe date is before the earliest one allowed.\nThe date is after the latest one allowed.\nThere was an unknown error uploading the file.\nYou are not allowed to upload files of this type.\nThe file is too big.\nThere was an error uploading the file.\nThe number format is invalid.\nThe number is smaller than the minimum allowed.\nThe number is larger than the maximum allowed.\nThe answer to the quiz is incorrect.\nYour entered code is incorrect.\nThe e-mail address entered is invalid.\nThe URL is invalid.\nThe telephone number is invalid.', 'Contact Chaos', '', 'publish', 'closed', 'closed', '', 'contact-form-1', '', '', '2016-12-07 13:32:15', '2016-12-07 13:32:15', '', 0, 'http://www.chaosentertainment.in/?post_type=wpcf7_contact_form&#038;p=20', 0, 'wpcf7_contact_form', '', 0),
(21, 1, '2016-12-07 13:41:21', '2016-12-07 13:41:21', ' ', '', '', 'publish', 'closed', 'closed', '', 'chaos', '', '', '2017-06-02 08:03:57', '2017-06-02 07:03:57', '', 0, 'http://www.chaosentertainment.in/?p=21', 1, 'nav_menu_item', '', 0),
(22, 1, '2016-12-07 13:41:21', '2016-12-07 13:41:21', '', 'Laser Tag', '', 'publish', 'closed', 'closed', '', '22', '', '', '2017-06-02 08:03:57', '2017-06-02 07:03:57', '', 0, 'http://www.chaosentertainment.in/?p=22', 2, 'nav_menu_item', '', 0),
(23, 1, '2016-12-07 13:41:21', '2016-12-07 13:41:21', '', 'Futsal', '', 'publish', 'closed', 'closed', '', '23', '', '', '2017-06-02 08:03:57', '2017-06-02 07:03:57', '', 0, 'http://www.chaosentertainment.in/?p=23', 3, 'nav_menu_item', '', 0),
(24, 1, '2016-12-07 13:41:21', '2016-12-07 13:41:21', '', 'Gaming', '', 'publish', 'closed', 'closed', '', '24', '', '', '2017-06-02 08:03:57', '2017-06-02 07:03:57', '', 0, 'http://www.chaosentertainment.in/?p=24', 4, 'nav_menu_item', '', 0),
(26, 1, '2017-04-12 10:14:15', '2017-04-12 09:14:15', '', 'sb', '', 'publish', 'closed', 'closed', '', 'sb', '', '', '2017-04-12 10:14:15', '2017-04-12 09:14:15', '', 0, 'http://www.chaosentertainment.in/?page_id=26', 0, 'page', '', 0),
(27, 1, '2017-04-12 10:14:15', '2017-04-12 09:14:15', '', 'sb', '', 'inherit', 'closed', 'closed', '', '26-revision-v1', '', '', '2017-04-12 10:14:15', '2017-04-12 09:14:15', '', 26, 'http://www.chaosentertainment.in/2017/04/12/26-revision-v1/', 0, 'revision', '', 0),
(29, 1, '2017-04-19 06:22:30', '2017-04-19 05:22:30', '', 'Futsal', '', 'publish', 'closed', 'closed', '', 'futsal', '', '', '2017-04-19 06:23:42', '2017-04-19 05:23:42', '', 0, 'http://www.chaosentertainment.in/?page_id=29', 0, 'page', '', 0),
(30, 1, '2017-04-19 06:22:30', '2017-04-19 05:22:30', '', 'Futsal', '', 'inherit', 'closed', 'closed', '', '29-revision-v1', '', '', '2017-04-19 06:22:30', '2017-04-19 05:22:30', '', 29, 'http://www.chaosentertainment.in/2017/04/19/29-revision-v1/', 0, 'revision', '', 0),
(46, 1, '2017-11-21 11:39:15', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2017-11-21 11:39:15', '0000-00-00 00:00:00', '', 0, 'http://www.chaosentertainment.in/?p=46', 0, 'post', '', 0),
(32, 1, '2017-04-19 06:36:52', '2017-04-19 05:36:52', '', 'Tournment', '', 'publish', 'closed', 'closed', '', 'tournment', '', '', '2017-04-19 06:36:52', '2017-04-19 05:36:52', '', 0, 'http://www.chaosentertainment.in/?page_id=32', 0, 'page', '', 0),
(33, 1, '2017-04-19 06:36:52', '2017-04-19 05:36:52', '', 'Tournment', '', 'inherit', 'closed', 'closed', '', '32-revision-v1', '', '', '2017-04-19 06:36:52', '2017-04-19 05:36:52', '', 32, 'http://www.chaosentertainment.in/2017/04/19/32-revision-v1/', 0, 'revision', '', 0),
(35, 1, '2017-04-19 07:08:50', '2017-04-19 06:08:50', '', 'Football Print', '', 'publish', 'closed', 'closed', '', 'football-print', '', '', '2017-04-19 07:08:55', '2017-04-19 06:08:55', '', 0, 'http://www.chaosentertainment.in/?page_id=35', 0, 'page', '', 0),
(36, 1, '2017-04-19 07:08:50', '2017-04-19 06:08:50', '', 'Football Print', '', 'inherit', 'closed', 'closed', '', '35-revision-v1', '', '', '2017-04-19 07:08:50', '2017-04-19 06:08:50', '', 35, 'http://www.chaosentertainment.in/2017/04/19/35-revision-v1/', 0, 'revision', '', 0),
(37, 1, '2017-04-19 07:09:16', '2017-04-19 06:09:16', '', 'Gaming Print', '', 'publish', 'closed', 'closed', '', 'gaming-print', '', '', '2017-04-19 07:09:20', '2017-04-19 06:09:20', '', 0, 'http://www.chaosentertainment.in/?page_id=37', 0, 'page', '', 0),
(38, 1, '2017-04-19 07:09:16', '2017-04-19 06:09:16', '', 'Gaming Print', '', 'inherit', 'closed', 'closed', '', '37-revision-v1', '', '', '2017-04-19 07:09:16', '2017-04-19 06:09:16', '', 37, 'http://www.chaosentertainment.in/2017/04/19/37-revision-v1/', 0, 'revision', '', 0),
(39, 1, '2017-04-19 07:09:37', '2017-04-19 06:09:37', '', 'Lazertag Print', '', 'publish', 'closed', 'closed', '', 'lazertag-print', '', '', '2017-04-19 07:09:41', '2017-04-19 06:09:41', '', 0, 'http://www.chaosentertainment.in/?page_id=39', 0, 'page', '', 0),
(40, 1, '2017-04-19 07:09:37', '2017-04-19 06:09:37', '', 'Lazertag Print', '', 'inherit', 'closed', 'closed', '', '39-revision-v1', '', '', '2017-04-19 07:09:37', '2017-04-19 06:09:37', '', 39, 'http://www.chaosentertainment.in/2017/04/19/39-revision-v1/', 0, 'revision', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_termmeta`
--

CREATE TABLE `wp_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_terms`
--

CREATE TABLE `wp_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Uncategorised', 'uncategorised', 0),
(2, 'Menu', 'menu', 0),
(3, 'Side Menu', 'side-menu', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_relationships`
--

CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0),
(12, 2, 0),
(14, 2, 0),
(15, 2, 0),
(16, 2, 0),
(17, 2, 0),
(18, 2, 0),
(21, 3, 0),
(22, 3, 0),
(23, 3, 0),
(24, 3, 0),
(42, 3, 0),
(43, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_taxonomy`
--

CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 1),
(2, 2, 'nav_menu', '', 0, 6),
(3, 3, 'nav_menu', '', 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `wp_usermeta`
--

CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_usermeta`
--

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'admin'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'comment_shortcuts', 'false'),
(7, 1, 'admin_color', 'fresh'),
(8, 1, 'use_ssl', '0'),
(9, 1, 'show_admin_bar_front', 'true'),
(10, 1, 'wp_capabilities', 'a:1:{s:13:"administrator";b:1;}'),
(11, 1, 'wp_user_level', '10'),
(12, 1, 'dismissed_wp_pointers', ''),
(13, 1, 'show_welcome_panel', '0'),
(14, 1, 'session_tokens', 'a:4:{s:64:"f6e5ceab6fd3fb6d1ca06fac1f740d2b24edc2482096c785d1b6a5a848cf03a7";a:4:{s:10:"expiration";i:1511528718;s:2:"ip";s:3:"::1";s:2:"ua";s:113:"Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";s:5:"login";i:1511355918;}s:64:"5b252f77bd1fe3c02423f012dcc9db2abfc29c12164587f5dffc8b1301e67365";a:4:{s:10:"expiration";i:1511584230;s:2:"ip";s:3:"::1";s:2:"ua";s:113:"Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";s:5:"login";i:1511411430;}s:64:"0184e1b9eaf37d6af40571f18793861a68e61584019df394577b23505056a443";a:4:{s:10:"expiration";i:1511610967;s:2:"ip";s:3:"::1";s:2:"ua";s:113:"Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";s:5:"login";i:1511438167;}s:64:"1dcf3e352c8bab1ac3980a08c4316545cd9b7b83fc9150073784b927a420ccca";a:4:{s:10:"expiration";i:1511667278;s:2:"ip";s:3:"::1";s:2:"ua";s:113:"Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";s:5:"login";i:1511494478;}}'),
(15, 1, 'wp_dashboard_quick_press_last_post_id', '46'),
(16, 1, 'managenav-menuscolumnshidden', 'a:5:{i:0;s:11:"link-target";i:1;s:11:"css-classes";i:2;s:3:"xfn";i:3;s:11:"description";i:4;s:15:"title-attribute";}'),
(17, 1, 'metaboxhidden_nav-menus', 'a:1:{i:0;s:12:"add-post_tag";}'),
(18, 1, 'nav_menu_recently_edited', '3'),
(19, 1, 'closedpostboxes_dashboard', 'a:3:{i:0;s:19:"dashboard_right_now";i:1;s:18:"dashboard_activity";i:2;s:21:"dashboard_quick_press";}'),
(20, 1, 'metaboxhidden_dashboard', 'a:0:{}'),
(21, 1, 'wp_user-settings', 'mfold=o'),
(22, 1, 'wp_user-settings-time', '1511355913'),
(23, 2, 'nickname', 'sowmiya'),
(24, 2, 'first_name', ''),
(25, 2, 'last_name', ''),
(26, 2, 'description', ''),
(27, 2, 'rich_editing', 'true'),
(28, 2, 'comment_shortcuts', 'false'),
(29, 2, 'admin_color', 'fresh'),
(30, 2, 'use_ssl', '0'),
(31, 2, 'show_admin_bar_front', 'true'),
(32, 2, 'wp_capabilities', 'a:1:{s:6:"member";b:1;}'),
(33, 2, 'wp_user_level', '0'),
(34, 2, 'dismissed_wp_pointers', ''),
(35, 2, 'mobile', '7777777777'),
(36, 3, 'nickname', 'terer'),
(37, 3, 'first_name', ''),
(38, 3, 'last_name', ''),
(39, 3, 'description', ''),
(40, 3, 'rich_editing', 'true'),
(41, 3, 'comment_shortcuts', 'false'),
(42, 3, 'admin_color', 'fresh'),
(43, 3, 'use_ssl', '0'),
(44, 3, 'show_admin_bar_front', 'true'),
(45, 3, 'wp_capabilities', 'a:1:{s:6:"member";b:1;}'),
(46, 3, 'wp_user_level', '0'),
(47, 3, 'dismissed_wp_pointers', ''),
(48, 3, 'mobile', 't45345345'),
(49, 4, 'nickname', 'test1'),
(50, 4, 'first_name', ''),
(51, 4, 'last_name', ''),
(52, 4, 'description', ''),
(53, 4, 'rich_editing', 'true'),
(54, 4, 'comment_shortcuts', 'false'),
(55, 4, 'admin_color', 'fresh'),
(56, 4, 'use_ssl', '0'),
(57, 4, 'show_admin_bar_front', 'true'),
(58, 4, 'wp_capabilities', 'a:1:{s:6:"member";b:1;}'),
(59, 4, 'wp_user_level', '0'),
(60, 4, 'dismissed_wp_pointers', ''),
(61, 4, 'mobile', '1212312321'),
(62, 5, 'nickname', 'name'),
(63, 5, 'first_name', ''),
(64, 5, 'last_name', ''),
(65, 5, 'description', ''),
(66, 5, 'rich_editing', 'true'),
(67, 5, 'comment_shortcuts', 'false'),
(68, 5, 'admin_color', 'fresh'),
(69, 5, 'use_ssl', '0'),
(70, 5, 'show_admin_bar_front', 'true'),
(71, 5, 'wp_capabilities', 'a:1:{s:6:"member";b:1;}'),
(72, 5, 'wp_user_level', '0'),
(73, 5, 'dismissed_wp_pointers', ''),
(74, 5, 'mobile', '2323232323'),
(75, 6, 'nickname', 'test'),
(76, 6, 'first_name', ''),
(77, 6, 'last_name', ''),
(78, 6, 'description', ''),
(79, 6, 'rich_editing', 'true'),
(80, 6, 'syntax_highlighting', 'true'),
(81, 6, 'comment_shortcuts', 'false'),
(82, 6, 'admin_color', 'fresh'),
(83, 6, 'use_ssl', '0'),
(84, 6, 'show_admin_bar_front', 'true'),
(85, 6, 'locale', ''),
(86, 6, 'wp_capabilities', 'a:1:{s:6:"member";b:1;}'),
(87, 6, 'wp_user_level', '0'),
(88, 6, 'dismissed_wp_pointers', ''),
(89, 6, 'mobile', '1234345435'),
(90, 7, 'nickname', 'sample'),
(91, 7, 'first_name', ''),
(92, 7, 'last_name', ''),
(93, 7, 'description', ''),
(94, 7, 'rich_editing', 'true'),
(95, 7, 'syntax_highlighting', 'true'),
(96, 7, 'comment_shortcuts', 'false'),
(97, 7, 'admin_color', 'fresh'),
(98, 7, 'use_ssl', '0'),
(99, 7, 'show_admin_bar_front', 'true'),
(100, 7, 'locale', ''),
(101, 7, 'wp_capabilities', 'a:1:{s:6:"member";b:1;}'),
(102, 7, 'wp_user_level', '0'),
(103, 7, 'dismissed_wp_pointers', ''),
(104, 7, 'mobile', '3434324324'),
(105, 8, 'nickname', 'sowmi'),
(106, 8, 'first_name', ''),
(107, 8, 'last_name', ''),
(108, 8, 'description', ''),
(109, 8, 'rich_editing', 'true'),
(110, 8, 'syntax_highlighting', 'true'),
(111, 8, 'comment_shortcuts', 'false'),
(112, 8, 'admin_color', 'fresh'),
(113, 8, 'use_ssl', '0'),
(114, 8, 'show_admin_bar_front', 'true'),
(115, 8, 'locale', ''),
(116, 8, 'wp_capabilities', 'a:0:{}'),
(117, 8, 'wp_user_level', '0'),
(118, 8, 'dismissed_wp_pointers', ''),
(119, 8, 'mobile', '2832321732'),
(120, 9, 'nickname', 'sowmiya'),
(121, 9, 'first_name', ''),
(122, 9, 'last_name', ''),
(123, 9, 'description', ''),
(124, 9, 'rich_editing', 'true'),
(125, 9, 'syntax_highlighting', 'true'),
(126, 9, 'comment_shortcuts', 'false'),
(127, 9, 'admin_color', 'fresh'),
(128, 9, 'use_ssl', '0'),
(129, 9, 'show_admin_bar_front', 'true'),
(130, 9, 'locale', ''),
(131, 9, 'wp_capabilities', 'a:1:{s:6:"member";b:1;}'),
(132, 9, 'wp_user_level', '0'),
(133, 9, 'dismissed_wp_pointers', ''),
(134, 9, 'mobile', '2938123812'),
(135, 10, 'nickname', 'rerewr'),
(136, 10, 'first_name', ''),
(137, 10, 'last_name', ''),
(138, 10, 'description', ''),
(139, 10, 'rich_editing', 'true'),
(140, 10, 'syntax_highlighting', 'true'),
(141, 10, 'comment_shortcuts', 'false'),
(142, 10, 'admin_color', 'fresh'),
(143, 10, 'use_ssl', '0'),
(144, 10, 'show_admin_bar_front', 'true'),
(145, 10, 'locale', ''),
(146, 10, 'wp_capabilities', 'a:1:{s:6:"member";b:1;}'),
(147, 10, 'wp_user_level', '0'),
(148, 10, 'dismissed_wp_pointers', ''),
(149, 10, 'mobile', 'rewrewr'),
(150, 11, 'nickname', 'trt'),
(151, 11, 'first_name', ''),
(152, 11, 'last_name', ''),
(153, 11, 'description', ''),
(154, 11, 'rich_editing', 'true'),
(155, 11, 'syntax_highlighting', 'true'),
(156, 11, 'comment_shortcuts', 'false'),
(157, 11, 'admin_color', 'fresh'),
(158, 11, 'use_ssl', '0'),
(159, 11, 'show_admin_bar_front', 'true'),
(160, 11, 'locale', ''),
(161, 11, 'wp_capabilities', 'a:1:{s:6:"member";b:1;}'),
(162, 11, 'wp_user_level', '0'),
(163, 11, 'dismissed_wp_pointers', ''),
(164, 11, 'mobile', 'ryry'),
(165, 12, 'nickname', 'ytytry'),
(166, 12, 'first_name', ''),
(167, 12, 'last_name', ''),
(168, 12, 'description', ''),
(169, 12, 'rich_editing', 'true'),
(170, 12, 'syntax_highlighting', 'true'),
(171, 12, 'comment_shortcuts', 'false'),
(172, 12, 'admin_color', 'fresh'),
(173, 12, 'use_ssl', '0'),
(174, 12, 'show_admin_bar_front', 'true'),
(175, 12, 'locale', ''),
(176, 12, 'wp_capabilities', 'a:1:{s:6:"member";b:1;}'),
(177, 12, 'wp_user_level', '0'),
(178, 12, 'dismissed_wp_pointers', ''),
(179, 12, 'mobile', 'trytry'),
(180, 13, 'nickname', 'ewe'),
(181, 13, 'first_name', ''),
(182, 13, 'last_name', ''),
(183, 13, 'description', ''),
(184, 13, 'rich_editing', 'true'),
(185, 13, 'syntax_highlighting', 'true'),
(186, 13, 'comment_shortcuts', 'false'),
(187, 13, 'admin_color', 'fresh'),
(188, 13, 'use_ssl', '0'),
(189, 13, 'show_admin_bar_front', 'true'),
(190, 13, 'locale', ''),
(191, 13, 'wp_capabilities', 'a:1:{s:6:"member";b:1;}'),
(192, 13, 'wp_user_level', '0'),
(193, 13, 'dismissed_wp_pointers', ''),
(194, 13, 'mobile', 'trytrewewy'),
(195, 14, 'nickname', '65654'),
(196, 14, 'first_name', ''),
(197, 14, 'last_name', ''),
(198, 14, 'description', ''),
(199, 14, 'rich_editing', 'true'),
(200, 14, 'syntax_highlighting', 'true'),
(201, 14, 'comment_shortcuts', 'false'),
(202, 14, 'admin_color', 'fresh'),
(203, 14, 'use_ssl', '0'),
(204, 14, 'show_admin_bar_front', 'true'),
(205, 14, 'locale', ''),
(206, 14, 'wp_capabilities', 'a:1:{s:6:"member";b:1;}'),
(207, 14, 'wp_user_level', '0'),
(208, 14, 'dismissed_wp_pointers', ''),
(209, 14, 'mobile', '5656'),
(210, 2, 'syntax_highlighting', 'true'),
(211, 2, 'locale', ''),
(212, 2, 'dismissed_wp_pointers', '');

-- --------------------------------------------------------

--
-- Table structure for table `wp_users`
--

CREATE TABLE `wp_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'admin', '$P$Bddu/xw4AX4fL0V45tE53S3bAwTGU91', 'admin', 'info@chaosentertainment.in', '', '2016-11-25 10:48:45', '', 0, 'admin'),
(2, 'sowmiya', '$P$B9niaDHGfZ4tqF/6YlKGaYdL/UzQQu.', 'sowmiya', 'hs@gmail.com', '', '2017-11-23 10:14:20', '', 0, 'sowmiya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_cf7dbplugin_st`
--
ALTER TABLE `wp_cf7dbplugin_st`
  ADD PRIMARY KEY (`submit_time`);

--
-- Indexes for table `wp_cf7dbplugin_submits`
--
ALTER TABLE `wp_cf7dbplugin_submits`
  ADD KEY `submit_time_idx` (`submit_time`),
  ADD KEY `form_name_idx` (`form_name`),
  ADD KEY `field_name_idx` (`field_name`);

--
-- Indexes for table `wp_chaos_bill_princing`
--
ALTER TABLE `wp_chaos_bill_princing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_chaos_credits`
--
ALTER TABLE `wp_chaos_credits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_chaos_credits_points`
--
ALTER TABLE `wp_chaos_credits_points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_chaos_credit_notes`
--
ALTER TABLE `wp_chaos_credit_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_chaos_debit_notes`
--
ALTER TABLE `wp_chaos_debit_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_chaos_football_billing`
--
ALTER TABLE `wp_chaos_football_billing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_chaos_football_team`
--
ALTER TABLE `wp_chaos_football_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_chaos_football_team_relation`
--
ALTER TABLE `wp_chaos_football_team_relation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_chaos_gaming_billing`
--
ALTER TABLE `wp_chaos_gaming_billing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_chaos_gaming_billing_relation`
--
ALTER TABLE `wp_chaos_gaming_billing_relation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_chaos_lazertag_billing`
--
ALTER TABLE `wp_chaos_lazertag_billing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_chaos_members`
--
ALTER TABLE `wp_chaos_members`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `wp_chaos_setting`
--
ALTER TABLE `wp_chaos_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_chaos_system`
--
ALTER TABLE `wp_chaos_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_chaos_system_allocate`
--
ALTER TABLE `wp_chaos_system_allocate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_chaos_tournaments`
--
ALTER TABLE `wp_chaos_tournaments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_chaos_tournament_player_goal`
--
ALTER TABLE `wp_chaos_tournament_player_goal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_chaos_tournament_points`
--
ALTER TABLE `wp_chaos_tournament_points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_chaos_tournament_schedule`
--
ALTER TABLE `wp_chaos_tournament_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_chaos_tournament_teams`
--
ALTER TABLE `wp_chaos_tournament_teams`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `wp_chaos_utility`
--
ALTER TABLE `wp_chaos_utility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_chaos_utility_details`
--
ALTER TABLE `wp_chaos_utility_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_chaos_utility_setting`
--
ALTER TABLE `wp_chaos_utility_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_comments`
--
ALTER TABLE `wp_comments`
  ADD PRIMARY KEY (`comment_ID`),
  ADD KEY `comment_post_ID` (`comment_post_ID`),
  ADD KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  ADD KEY `comment_date_gmt` (`comment_date_gmt`),
  ADD KEY `comment_parent` (`comment_parent`),
  ADD KEY `comment_author_email` (`comment_author_email`(10));

--
-- Indexes for table `wp_links`
--
ALTER TABLE `wp_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `link_visible` (`link_visible`);

--
-- Indexes for table `wp_options`
--
ALTER TABLE `wp_options`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_name` (`option_name`);

--
-- Indexes for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_posts`
--
ALTER TABLE `wp_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- Indexes for table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_terms`
--
ALTER TABLE `wp_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Indexes for table `wp_term_relationships`
--
ALTER TABLE `wp_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Indexes for table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- Indexes for table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_chaos_bill_princing`
--
ALTER TABLE `wp_chaos_bill_princing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wp_chaos_credits`
--
ALTER TABLE `wp_chaos_credits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `wp_chaos_credits_points`
--
ALTER TABLE `wp_chaos_credits_points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wp_chaos_credit_notes`
--
ALTER TABLE `wp_chaos_credit_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wp_chaos_debit_notes`
--
ALTER TABLE `wp_chaos_debit_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wp_chaos_football_billing`
--
ALTER TABLE `wp_chaos_football_billing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `wp_chaos_football_team`
--
ALTER TABLE `wp_chaos_football_team`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `wp_chaos_football_team_relation`
--
ALTER TABLE `wp_chaos_football_team_relation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `wp_chaos_gaming_billing`
--
ALTER TABLE `wp_chaos_gaming_billing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `wp_chaos_gaming_billing_relation`
--
ALTER TABLE `wp_chaos_gaming_billing_relation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `wp_chaos_lazertag_billing`
--
ALTER TABLE `wp_chaos_lazertag_billing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `wp_chaos_members`
--
ALTER TABLE `wp_chaos_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wp_chaos_setting`
--
ALTER TABLE `wp_chaos_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `wp_chaos_system`
--
ALTER TABLE `wp_chaos_system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `wp_chaos_system_allocate`
--
ALTER TABLE `wp_chaos_system_allocate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `wp_chaos_tournaments`
--
ALTER TABLE `wp_chaos_tournaments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `wp_chaos_tournament_player_goal`
--
ALTER TABLE `wp_chaos_tournament_player_goal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;
--
-- AUTO_INCREMENT for table `wp_chaos_tournament_points`
--
ALTER TABLE `wp_chaos_tournament_points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `wp_chaos_tournament_schedule`
--
ALTER TABLE `wp_chaos_tournament_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `wp_chaos_tournament_teams`
--
ALTER TABLE `wp_chaos_tournament_teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `wp_chaos_utility`
--
ALTER TABLE `wp_chaos_utility`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `wp_chaos_utility_details`
--
ALTER TABLE `wp_chaos_utility_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `wp_chaos_utility_setting`
--
ALTER TABLE `wp_chaos_utility_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wp_comments`
--
ALTER TABLE `wp_comments`
  MODIFY `comment_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wp_links`
--
ALTER TABLE `wp_links`
  MODIFY `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wp_options`
--
ALTER TABLE `wp_options`
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3131;
--
-- AUTO_INCREMENT for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
--
-- AUTO_INCREMENT for table `wp_posts`
--
ALTER TABLE `wp_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wp_terms`
--
ALTER TABLE `wp_terms`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  MODIFY `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;
--
-- AUTO_INCREMENT for table `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
