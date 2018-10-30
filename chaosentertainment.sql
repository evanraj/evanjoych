-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2018 at 11:39 AM
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
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_chaos_credits_points`
--

INSERT INTO `wp_chaos_credits_points` (`id`, `member_id`, `credit_points`, `key_value`, `key_id`, `date`, `created_at`, `modified_at`, `active`) VALUES
(1, 14, 240, 'foot_ball', 1, '2017-12-15', '2017-12-15 14:48:50', '2017-12-15 14:48:50', 1),
(2, 14, 280, 'lazertag_bill', 1, '2017-12-15', '2017-12-15 14:50:51', '2017-12-15 14:50:51', 1),
(3, 14, 120, 'gaming_bill', 1, '2017-12-15', '2017-12-15 14:56:36', '2017-12-15 14:56:36', 1),
(4, 14, 400, 'credit_notes', 1, '2017-12-15', '2017-12-15 14:58:01', '2017-12-15 14:58:01', 1),
(5, 14, 200, 'redeem_table', 1, '2017-12-15', '2017-12-15 15:00:15', '2017-12-15 15:00:15', 1),
(6, 13, 25620, 'gaming_bill', 2, '2018-03-24', '2018-03-24 12:27:02', '2018-03-24 12:27:02', 1),
(7, 13, 10000, 'redeem_table', 0, '2018-03-24', '2018-03-24 12:27:37', '2018-03-24 12:27:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_chaos_credit_notes`
--

CREATE TABLE `wp_chaos_credit_notes` (
  `id` int(11) NOT NULL,
  `member_id` varchar(100) NOT NULL,
  `points` int(11) NOT NULL DEFAULT '0',
  `details` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_chaos_credit_notes`
--

INSERT INTO `wp_chaos_credit_notes` (`id`, `member_id`, `points`, `details`, `date`, `created_at`, `modified_at`, `active`) VALUES
(1, '14', 400, 'test', '2017-12-15', '2017-12-15 14:58:01', '2017-12-15 14:58:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_chaos_debit_notes`
--

CREATE TABLE `wp_chaos_debit_notes` (
  `id` int(11) NOT NULL,
  `member_id` varchar(100) NOT NULL,
  `points` int(11) NOT NULL DEFAULT '0',
  `details` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '1'
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
  `ft_credit_points` int(11) NOT NULL DEFAULT '0',
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

INSERT INTO `wp_chaos_football_billing` (`id`, `member_id`, `ft_bill_no`, `ft_bill_date`, `ft_bill_time`, `ft_member_name`, `ft_member_phone_number`, `ft_membership_no`, `ft_date`, `ft_no_of_hours`, `ft_no_of_member`, `ft_amount_value`, `ft_total`, `ft_credit_points`, `ft_vat`, `ft_vat_value`, `ft_member_discount`, `ft_member_discount_value`, `ft_discount`, `ft_discount_value`, `ft_football_bill`, `created_at`, `modified_at`, `was_bulid`, `active`) VALUES
(1, 0, 'INV1', '2017-12-15', '14:47:00', 'evan', '123234324', '', '2017-12-15 14:47:51', 89, '', '2000.00', '178000.00', 0, '2.00', '3560.00', '10.00', '0.00', '12.00', '21787.20', '159773.00', '2017-12-15 14:44:43', '2018-03-23 10:01:43', 1, 1),
(2, 13, 'INV2', '0000-00-00', '00:00:00', 'sowmiya', '1232324242', 'CH17515638427', '0000-00-00 00:00:00', 0, '', '0.00', '0.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2017-12-15 17:13:03', '2018-03-24 12:25:15', 0, 1);

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
  `gaming_credit_points` int(11) NOT NULL DEFAULT '0',
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

INSERT INTO `wp_chaos_gaming_billing` (`id`, `member_id`, `gaming_bill_no`, `game_date`, `game_time`, `gaming_member_name`, `gaming_member_phone_number`, `gaming_membership_no`, `gaming_date`, `gaming_sub_total`, `gaming_credit_points`, `gaming_vat`, `gaming_vat_val`, `gaming_member_discount`, `gaming_member_discount_value`, `gaming_discount`, `gaming_discount_value`, `gaming_bill`, `created_at`, `modified_at`, `was_bulid`, `active`) VALUES
(1, 0, 'INV1', '2017-12-15', '14:55:00', 'evan', '123234324', 'CH17687784157', '2017-12-15 14:55:49', '3000.00', 120, '2', '60.00', '10.00', '306.00', '0.00', '0.00', '2754.00', '2017-12-15 14:56:07', '2017-12-15 14:56:36', 1, 1),
(2, 13, 'INV2', '2018-03-24', '12:26:00', 'sowmiya', '1232324242', 'CH17515638427', '2018-03-24 12:26:39', '640500.00', 25620, '2', '12810.00', '10.00', '0.00', '6.00', '39198.60', '614112.00', '2018-03-06 18:19:16', '2018-03-24 12:27:02', 1, 1);

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
(1, 1, 2, '00 : 03', 1, '750.00', 750.00, '2017-12-15 14:56:37', '2017-12-15 14:56:37', 1),
(2, 1, 1, '00 : 04', 3, '750.00', 2250.00, '2017-12-15 14:56:37', '2017-12-15 14:56:37', 1),
(3, 2, 4, '426 : 07', 427, '750.00', 320250.00, '2018-03-24 12:27:02', '2018-03-24 12:27:02', 1),
(4, 2, 4, '426 : 07', 427, '750.00', 320250.00, '2018-03-24 12:27:02', '2018-03-24 12:27:02', 1);

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
  `lazertag_credit_points` int(11) NOT NULL DEFAULT '0',
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

INSERT INTO `wp_chaos_lazertag_billing` (`id`, `member_id`, `lazertag_bill_no`, `lazer_date`, `lazertag_member_name`, `lazertag_member_phone_number`, `lazertag_membership_no`, `lazertag_date`, `lazer_time`, `gametype`, `lazertag_players`, `lazertag_hours`, `lazertag_amount`, `lazertag_total`, `lazertag_credit_points`, `lazertag_vat`, `lazertag_vat_value`, `lazertag_member_discount`, `lazertag_member_discount_value`, `lazertag_discount`, `lazertag_discount_value`, `lazertag_bill`, `created_at`, `modified_at`, `was_bulid`, `active`) VALUES
(1, 0, 'INV1', '2017-12-15', 'evan', '123234324', 'CH17687784157', '2017-12-15 14:50:09', '14:50:00', 'hours', '1', '14', '500.00', '7000.00', 280, '2', '140.00', '10.00', '714.00', '0.00', '0.00', '6426.00', '2017-12-15 14:27:12', '2017-12-15 14:50:51', 1, 1),
(2, 0, 'INV2', '0000-00-00', '', '', '', '0000-00-00 00:00:00', '00:00:00', '', '0', '0', '0.00', '0.00', 0, '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2017-12-15 17:19:39', '2017-12-15 17:19:41', 0, 1);

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
(1, 13, 'CH17515638427', 'sowmiya', '1232324242', 25620, 10000, 15620, '2017-12-15 14:21:01', '2018-03-24 12:27:37', 1),
(2, 14, 'CH17687784157', 'Evan', '123234324', 1040, 200, 840, '2017-12-15 14:45:35', '2017-12-15 15:00:15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_chaos_redeem_points`
--

CREATE TABLE `wp_chaos_redeem_points` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `redeemed_point` int(11) NOT NULL,
  `balance_point` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_chaos_redeem_points`
--

INSERT INTO `wp_chaos_redeem_points` (`id`, `member_id`, `redeemed_point`, `balance_point`, `created_at`, `modified_at`, `active`) VALUES
(1, 14, 200, 1040, '2017-12-15 15:00:15', '2017-12-15 15:00:15', 1);

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
(1, 'lazertag_head_week', '1000', '2017-12-15 14:28:59', '2017-12-15 14:28:59', 1),
(2, 'lazertag_head_weekend', '1000', '2017-12-15 14:28:59', '2017-12-15 14:28:59', 1),
(3, 'lazertag_hour_week', '500', '2017-12-15 14:28:59', '2017-12-15 14:50:06', 1),
(4, 'lazertag_hour_weekend', '1000', '2017-12-15 14:28:59', '2017-12-15 14:29:17', 1),
(5, 'lazertag_vat_cst', '2', '2017-12-15 14:28:59', '2017-12-15 14:28:59', 1),
(6, 'lazertag_happayhours', '1', '2017-12-15 14:28:59', '2017-12-15 14:28:59', 1),
(7, 'lazertag_happyhours_pricing', '01:30-15:00-2000', '2017-12-15 14:28:59', '2017-12-15 14:29:17', 0),
(8, 'lazertag_happyhours_pricing', '01:30-15:00-2000', '2017-12-15 14:29:17', '2017-12-15 14:50:06', 0),
(9, 'football_hour_week', '2000', '2017-12-15 14:47:42', '2017-12-15 14:47:42', 1),
(10, 'football_hour_weekend', '3000', '2017-12-15 14:47:42', '2017-12-15 14:47:42', 1),
(11, 'football_vat_cst', '2.0', '2017-12-15 14:47:42', '2018-03-06 17:34:57', 1),
(12, 'football_session_logic', '1', '2017-12-15 14:47:42', '2017-12-15 14:47:42', 1),
(13, 'football_session_pricing', '04:00-08:00-1500', '2017-12-15 14:47:42', '2018-03-06 17:34:45', 0),
(14, 'lazertag_happyhours_pricing', '01:30-15:00-2000', '2017-12-15 14:50:06', '2017-12-15 14:50:06', 1),
(15, 'gaming_head_week', '750', '2017-12-15 14:52:33', '2017-12-15 14:52:33', 1),
(16, 'gaming_head_weekend', '1000', '2017-12-15 14:52:33', '2017-12-15 14:52:33', 1),
(17, 'gaming_vat_cst', '2', '2017-12-15 14:52:33', '2017-12-15 14:52:33', 1),
(18, 'football_session_pricing', '04:00-08:00-1500', '2018-03-06 17:34:45', '2018-03-06 17:34:52', 0),
(19, 'football_session_pricing', '04:00-08:00-1500', '2018-03-06 17:34:52', '2018-03-06 17:34:57', 0),
(20, 'football_session_pricing', '04:00-08:00-1500', '2018-03-06 17:34:57', '2018-03-06 17:34:57', 1);

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
(1, 'xbox', '2', '2017-12-15 14:51:19', '2017-12-15 14:51:19', 1),
(2, 'pc', '1', '2017-12-15 14:51:27', '2017-12-15 14:51:27', 1),
(3, 'ps4', '1', '2017-12-15 14:51:35', '2017-12-15 14:51:35', 1),
(4, '7675', '3', '2018-03-24 12:26:16', '2018-03-24 12:26:16', 1),
(5, '68', '1', '2018-03-24 12:26:31', '2018-03-24 12:26:31', 1),
(6, '76', '2', '2018-03-24 12:26:31', '2018-03-24 12:26:31', 1),
(7, '68', '3', '2018-03-24 12:26:31', '2018-03-24 12:26:31', 1),
(8, '686', '1', '2018-03-24 12:26:31', '2018-03-24 12:26:31', 1),
(9, '86868', '2', '2018-03-24 12:26:31', '2018-03-24 12:26:31', 1),
(10, '688', '2', '2018-03-24 12:26:31', '2018-03-24 12:26:31', 1);

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
(1, 1, 3, '2017-12-15 14:51:48', '2017-12-15 14:55:49', 0, '2017-12-15 14:51:48', '2017-12-15 14:56:37', 1),
(2, 1, 1, '2017-12-15 14:51:57', '2017-12-15 14:55:49', 0, '2017-12-15 14:51:57', '2017-12-15 14:56:37', 1),
(3, 0, 3, '2018-03-06 18:19:30', '0000-00-00 00:00:00', 1, '2018-03-06 18:19:30', '2018-03-06 18:19:30', 1),
(4, 2, 2, '2018-03-06 18:19:35', '2018-03-24 12:26:39', 0, '2018-03-06 18:19:35', '2018-03-24 12:27:02', 1);

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
(1, 'current bill', 'sowmiya@gmail.com', '', 'done', '0000-00-00 00:00:00', 'm', '2', '2018-04-15', '5', '2017-12-15 14:54:21', '2018-03-06 18:47:09', 1);

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
(1, 1, 'postponed', '2017-12-16 00:00:00', '2017-12-15 14:55:32', '2017-12-15 14:55:32', 1),
(2, 1, 'cancelled', '0000-00-00 00:00:00', '2017-12-15 14:55:40', '2017-12-15 14:55:40', 1),
(3, 1, 'done', '0000-00-00 00:00:00', '2018-03-06 18:47:09', '2018-03-06 18:47:09', 1);

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
(1, 'current bill', 'sowmiya@gmail.com', '2017-12-15 14:53:35', '2017-12-15 14:53:35', 1),
(2, 'waterbill', 'sowmiya@gmail.com', '2017-12-15 14:53:40', '2017-12-15 14:53:40', 1),
(3, 'netbill', 'sowmiya@gmail.com', '2017-12-15 14:53:49', '2017-12-15 14:53:49', 1);

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
(1, 'siteurl', 'http://localhost/evanjoych', 'yes'),
(2, 'home', 'http://localhost/evanjoych', 'yes'),
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
(104, 'cron', 'a:5:{i:1521881865;a:1:{s:25:"delete_expired_transients";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1521888526;a:3:{s:16:"wp_version_check";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:17:"wp_update_plugins";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:16:"wp_update_themes";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}}i:1521888541;a:1:{s:19:"wp_scheduled_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1521959005;a:1:{s:30:"wp_scheduled_auto_draft_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}s:7:"version";i:2;}', 'yes'),
(486, 'auto_core_update_notified', 'a:4:{s:4:"type";s:7:"success";s:5:"email";s:26:"info@chaosentertainment.in";s:7:"version";s:5:"4.6.8";s:9:"timestamp";i:1509461313;}', 'no'),
(245, 'CF7DBPlugin_IntegrateWithEnfoldThemForms', 'true', 'yes'),
(246, 'CF7DBPlugin_IntegrateWithCFormsII', 'true', 'yes'),
(247, 'CF7DBPlugin_IntegrateWithFormCraft', 'true', 'yes'),
(248, 'CF7DBPlugin_IntegrateWithVerySimpleContactForm', 'true', 'yes'),
(229, 'recently_activated', 'a:0:{}', 'yes'),
(228, 'wpcf7', 'a:2:{s:7:"version";s:3:"4.6";s:13:"bulk_validate";a:4:{s:9:"timestamp";d:1481117093;s:7:"version";s:3:"4.6";s:11:"count_valid";i:1;s:13:"count_invalid";i:0;}}', 'yes'),
(3114, 'db_upgraded', '', 'yes'),
(3118, 'can_compress_scripts', '0', 'no'),
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
(3134, 'fresh_site', '0', 'yes'),
(3320, '_site_transient_update_themes', 'O:8:"stdClass":4:{s:12:"last_checked";i:1521874257;s:7:"checked";a:3:{s:5:"chaos";s:5:"1.0.0";s:15:"twentyseventeen";s:3:"1.4";s:13:"twentysixteen";s:3:"1.4";}s:8:"response";a:0:{}s:12:"translations";a:0:{}}', 'no'),
(3328, '_site_transient_timeout_theme_roots', '1521876056', 'no'),
(3329, '_site_transient_theme_roots', 'a:3:{s:5:"chaos";s:7:"/themes";s:15:"twentyseventeen";s:7:"/themes";s:13:"twentysixteen";s:7:"/themes";}', 'no'),
(3301, '_site_transient_timeout_browser_56b529b7dc2c591fc7e2844c2dc739ff', '1521876205', 'no'),
(3302, '_site_transient_browser_56b529b7dc2c591fc7e2844c2dc739ff', 'a:10:{s:4:"name";s:6:"Chrome";s:7:"version";s:13:"64.0.3282.186";s:8:"platform";s:7:"Windows";s:10:"update_url";s:29:"https://www.google.com/chrome";s:7:"img_src";s:43:"http://s.w.org/images/browsers/chrome.png?1";s:11:"img_src_ssl";s:44:"https://s.w.org/images/browsers/chrome.png?1";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;s:6:"mobile";b:0;}', 'no'),
(3316, '_site_transient_update_core', 'O:8:"stdClass":4:{s:7:"updates";a:1:{i:0;O:8:"stdClass":10:{s:8:"response";s:6:"latest";s:8:"download";s:65:"https://downloads.wordpress.org/release/en_GB/wordpress-4.9.4.zip";s:6:"locale";s:5:"en_GB";s:8:"packages";O:8:"stdClass":5:{s:4:"full";s:65:"https://downloads.wordpress.org/release/en_GB/wordpress-4.9.4.zip";s:10:"no_content";b:0;s:11:"new_bundled";b:0;s:7:"partial";b:0;s:8:"rollback";b:0;}s:7:"current";s:5:"4.9.4";s:7:"version";s:5:"4.9.4";s:11:"php_version";s:5:"5.2.4";s:13:"mysql_version";s:3:"5.0";s:11:"new_bundled";s:3:"4.7";s:15:"partial_version";s:0:"";}}s:12:"last_checked";i:1521874252;s:15:"version_checked";s:5:"4.9.4";s:12:"translations";a:0:{}}', 'no'),
(3332, '_site_transient_browser_f486628b8b3cd381d361bdc25237d08d', 'a:10:{s:4:"name";s:6:"Chrome";s:7:"version";s:13:"65.0.3325.181";s:8:"platform";s:7:"Windows";s:10:"update_url";s:29:"https://www.google.com/chrome";s:7:"img_src";s:43:"http://s.w.org/images/browsers/chrome.png?1";s:11:"img_src_ssl";s:44:"https://s.w.org/images/browsers/chrome.png?1";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;s:6:"mobile";b:0;}', 'no'),
(3333, '_site_transient_timeout_available_translations', '1521885932', 'no');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(3334, '_site_transient_available_translations', 'a:113:{s:2:"af";a:8:{s:8:"language";s:2:"af";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-02-06 13:56:09";s:12:"english_name";s:9:"Afrikaans";s:11:"native_name";s:9:"Afrikaans";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.9.4/af.zip";s:3:"iso";a:2:{i:1;s:2:"af";i:2;s:3:"afr";}s:7:"strings";a:1:{s:8:"continue";s:10:"Gaan voort";}}s:2:"ar";a:8:{s:8:"language";s:2:"ar";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-09 18:16:41";s:12:"english_name";s:6:"Arabic";s:11:"native_name";s:14:"العربية";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.9.4/ar.zip";s:3:"iso";a:2:{i:1;s:2:"ar";i:2;s:3:"ara";}s:7:"strings";a:1:{s:8:"continue";s:16:"المتابعة";}}s:3:"ary";a:8:{s:8:"language";s:3:"ary";s:7:"version";s:5:"4.7.7";s:7:"updated";s:19:"2017-01-26 15:42:35";s:12:"english_name";s:15:"Moroccan Arabic";s:11:"native_name";s:31:"العربية المغربية";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7.7/ary.zip";s:3:"iso";a:2:{i:1;s:2:"ar";i:3;s:3:"ary";}s:7:"strings";a:1:{s:8:"continue";s:16:"المتابعة";}}s:2:"as";a:8:{s:8:"language";s:2:"as";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-11-22 18:59:07";s:12:"english_name";s:8:"Assamese";s:11:"native_name";s:21:"অসমীয়া";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/as.zip";s:3:"iso";a:3:{i:1;s:2:"as";i:2;s:3:"asm";i:3;s:3:"asm";}s:7:"strings";a:1:{s:8:"continue";s:0:"";}}s:3:"azb";a:8:{s:8:"language";s:3:"azb";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-09-12 20:34:31";s:12:"english_name";s:17:"South Azerbaijani";s:11:"native_name";s:29:"گؤنئی آذربایجان";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7.2/azb.zip";s:3:"iso";a:2:{i:1;s:2:"az";i:3;s:3:"azb";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continue";}}s:2:"az";a:8:{s:8:"language";s:2:"az";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-11-06 00:09:27";s:12:"english_name";s:11:"Azerbaijani";s:11:"native_name";s:16:"Azərbaycan dili";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/az.zip";s:3:"iso";a:2:{i:1;s:2:"az";i:2;s:3:"aze";}s:7:"strings";a:1:{s:8:"continue";s:5:"Davam";}}s:3:"bel";a:8:{s:8:"language";s:3:"bel";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-01-25 21:29:53";s:12:"english_name";s:10:"Belarusian";s:11:"native_name";s:29:"Беларуская мова";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.9.4/bel.zip";s:3:"iso";a:2:{i:1;s:2:"be";i:2;s:3:"bel";}s:7:"strings";a:1:{s:8:"continue";s:20:"Працягнуць";}}s:5:"bg_BG";a:8:{s:8:"language";s:5:"bg_BG";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-22 13:41:14";s:12:"english_name";s:9:"Bulgarian";s:11:"native_name";s:18:"Български";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/bg_BG.zip";s:3:"iso";a:2:{i:1;s:2:"bg";i:2;s:3:"bul";}s:7:"strings";a:1:{s:8:"continue";s:12:"Напред";}}s:5:"bn_BD";a:8:{s:8:"language";s:5:"bn_BD";s:7:"version";s:5:"4.8.5";s:7:"updated";s:19:"2017-10-01 12:57:10";s:12:"english_name";s:7:"Bengali";s:11:"native_name";s:15:"বাংলা";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.8.5/bn_BD.zip";s:3:"iso";a:1:{i:1;s:2:"bn";}s:7:"strings";a:1:{s:8:"continue";s:23:"এগিয়ে চল.";}}s:2:"bo";a:8:{s:8:"language";s:2:"bo";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-22 03:44:52";s:12:"english_name";s:7:"Tibetan";s:11:"native_name";s:21:"བོད་ཡིག";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.9.4/bo.zip";s:3:"iso";a:2:{i:1;s:2:"bo";i:2;s:3:"tib";}s:7:"strings";a:1:{s:8:"continue";s:24:"མུ་མཐུད།";}}s:5:"bs_BA";a:8:{s:8:"language";s:5:"bs_BA";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-09-04 20:20:28";s:12:"english_name";s:7:"Bosnian";s:11:"native_name";s:8:"Bosanski";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/bs_BA.zip";s:3:"iso";a:2:{i:1;s:2:"bs";i:2;s:3:"bos";}s:7:"strings";a:1:{s:8:"continue";s:7:"Nastavi";}}s:2:"ca";a:8:{s:8:"language";s:2:"ca";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-09 20:33:12";s:12:"english_name";s:7:"Catalan";s:11:"native_name";s:7:"Català";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.9.4/ca.zip";s:3:"iso";a:2:{i:1;s:2:"ca";i:2;s:3:"cat";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continua";}}s:3:"ceb";a:8:{s:8:"language";s:3:"ceb";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-03-02 17:25:51";s:12:"english_name";s:7:"Cebuano";s:11:"native_name";s:7:"Cebuano";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7.2/ceb.zip";s:3:"iso";a:2:{i:2;s:3:"ceb";i:3;s:3:"ceb";}s:7:"strings";a:1:{s:8:"continue";s:7:"Padayun";}}s:5:"cs_CZ";a:8:{s:8:"language";s:5:"cs_CZ";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-21 07:01:05";s:12:"english_name";s:5:"Czech";s:11:"native_name";s:9:"Čeština";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/cs_CZ.zip";s:3:"iso";a:2:{i:1;s:2:"cs";i:2;s:3:"ces";}s:7:"strings";a:1:{s:8:"continue";s:11:"Pokračovat";}}s:2:"cy";a:8:{s:8:"language";s:2:"cy";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-11 09:40:36";s:12:"english_name";s:5:"Welsh";s:11:"native_name";s:7:"Cymraeg";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.9.4/cy.zip";s:3:"iso";a:2:{i:1;s:2:"cy";i:2;s:3:"cym";}s:7:"strings";a:1:{s:8:"continue";s:6:"Parhau";}}s:5:"da_DK";a:8:{s:8:"language";s:5:"da_DK";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-19 17:34:31";s:12:"english_name";s:6:"Danish";s:11:"native_name";s:5:"Dansk";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/da_DK.zip";s:3:"iso";a:2:{i:1;s:2:"da";i:2;s:3:"dan";}s:7:"strings";a:1:{s:8:"continue";s:8:"Fortsæt";}}s:5:"de_CH";a:8:{s:8:"language";s:5:"de_CH";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-02-12 10:10:36";s:12:"english_name";s:20:"German (Switzerland)";s:11:"native_name";s:17:"Deutsch (Schweiz)";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/de_CH.zip";s:3:"iso";a:1:{i:1;s:2:"de";}s:7:"strings";a:1:{s:8:"continue";s:6:"Weiter";}}s:5:"de_DE";a:8:{s:8:"language";s:5:"de_DE";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-18 12:08:30";s:12:"english_name";s:6:"German";s:11:"native_name";s:7:"Deutsch";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/de_DE.zip";s:3:"iso";a:1:{i:1;s:2:"de";}s:7:"strings";a:1:{s:8:"continue";s:6:"Weiter";}}s:14:"de_CH_informal";a:8:{s:8:"language";s:14:"de_CH_informal";s:7:"version";s:5:"4.9.2";s:7:"updated";s:19:"2017-11-22 15:43:53";s:12:"english_name";s:30:"German (Switzerland, Informal)";s:11:"native_name";s:21:"Deutsch (Schweiz, Du)";s:7:"package";s:73:"https://downloads.wordpress.org/translation/core/4.9.2/de_CH_informal.zip";s:3:"iso";a:1:{i:1;s:2:"de";}s:7:"strings";a:1:{s:8:"continue";s:6:"Weiter";}}s:12:"de_DE_formal";a:8:{s:8:"language";s:12:"de_DE_formal";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-18 12:08:55";s:12:"english_name";s:15:"German (Formal)";s:11:"native_name";s:13:"Deutsch (Sie)";s:7:"package";s:71:"https://downloads.wordpress.org/translation/core/4.9.4/de_DE_formal.zip";s:3:"iso";a:1:{i:1;s:2:"de";}s:7:"strings";a:1:{s:8:"continue";s:6:"Weiter";}}s:3:"dzo";a:8:{s:8:"language";s:3:"dzo";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-06-29 08:59:03";s:12:"english_name";s:8:"Dzongkha";s:11:"native_name";s:18:"རྫོང་ཁ";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7.2/dzo.zip";s:3:"iso";a:2:{i:1;s:2:"dz";i:2;s:3:"dzo";}s:7:"strings";a:1:{s:8:"continue";s:0:"";}}s:2:"el";a:8:{s:8:"language";s:2:"el";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-12 12:57:07";s:12:"english_name";s:5:"Greek";s:11:"native_name";s:16:"Ελληνικά";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.9.4/el.zip";s:3:"iso";a:2:{i:1;s:2:"el";i:2;s:3:"ell";}s:7:"strings";a:1:{s:8:"continue";s:16:"Συνέχεια";}}s:5:"en_GB";a:8:{s:8:"language";s:5:"en_GB";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-09 08:59:25";s:12:"english_name";s:12:"English (UK)";s:11:"native_name";s:12:"English (UK)";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/en_GB.zip";s:3:"iso";a:3:{i:1;s:2:"en";i:2;s:3:"eng";i:3;s:3:"eng";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continue";}}s:5:"en_NZ";a:8:{s:8:"language";s:5:"en_NZ";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-15 20:17:27";s:12:"english_name";s:21:"English (New Zealand)";s:11:"native_name";s:21:"English (New Zealand)";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/en_NZ.zip";s:3:"iso";a:3:{i:1;s:2:"en";i:2;s:3:"eng";i:3;s:3:"eng";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continue";}}s:5:"en_AU";a:8:{s:8:"language";s:5:"en_AU";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-17 05:20:05";s:12:"english_name";s:19:"English (Australia)";s:11:"native_name";s:19:"English (Australia)";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/en_AU.zip";s:3:"iso";a:3:{i:1;s:2:"en";i:2;s:3:"eng";i:3;s:3:"eng";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continue";}}s:5:"en_ZA";a:8:{s:8:"language";s:5:"en_ZA";s:7:"version";s:5:"4.9.2";s:7:"updated";s:19:"2017-11-15 09:54:30";s:12:"english_name";s:22:"English (South Africa)";s:11:"native_name";s:22:"English (South Africa)";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.2/en_ZA.zip";s:3:"iso";a:3:{i:1;s:2:"en";i:2;s:3:"eng";i:3;s:3:"eng";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continue";}}s:5:"en_CA";a:8:{s:8:"language";s:5:"en_CA";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-01-24 19:13:22";s:12:"english_name";s:16:"English (Canada)";s:11:"native_name";s:16:"English (Canada)";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/en_CA.zip";s:3:"iso";a:3:{i:1;s:2:"en";i:2;s:3:"eng";i:3;s:3:"eng";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continue";}}s:2:"eo";a:8:{s:8:"language";s:2:"eo";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-18 17:06:15";s:12:"english_name";s:9:"Esperanto";s:11:"native_name";s:9:"Esperanto";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.9.4/eo.zip";s:3:"iso";a:2:{i:1;s:2:"eo";i:2;s:3:"epo";}s:7:"strings";a:1:{s:8:"continue";s:8:"Daŭrigi";}}s:5:"es_ES";a:8:{s:8:"language";s:5:"es_ES";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-09 16:21:50";s:12:"english_name";s:15:"Spanish (Spain)";s:11:"native_name";s:8:"Español";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/es_ES.zip";s:3:"iso";a:3:{i:1;s:2:"es";i:2;s:3:"spa";i:3;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_CO";a:8:{s:8:"language";s:5:"es_CO";s:7:"version";s:5:"4.9.2";s:7:"updated";s:19:"2017-11-15 23:17:08";s:12:"english_name";s:18:"Spanish (Colombia)";s:11:"native_name";s:20:"Español de Colombia";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.2/es_CO.zip";s:3:"iso";a:3:{i:1;s:2:"es";i:2;s:3:"spa";i:3;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_GT";a:8:{s:8:"language";s:5:"es_GT";s:7:"version";s:5:"4.9.2";s:7:"updated";s:19:"2017-11-15 15:03:42";s:12:"english_name";s:19:"Spanish (Guatemala)";s:11:"native_name";s:21:"Español de Guatemala";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.2/es_GT.zip";s:3:"iso";a:3:{i:1;s:2:"es";i:2;s:3:"spa";i:3;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_MX";a:8:{s:8:"language";s:5:"es_MX";s:7:"version";s:5:"4.8.5";s:7:"updated";s:19:"2017-07-31 15:12:02";s:12:"english_name";s:16:"Spanish (Mexico)";s:11:"native_name";s:19:"Español de México";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.8.5/es_MX.zip";s:3:"iso";a:3:{i:1;s:2:"es";i:2;s:3:"spa";i:3;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_CR";a:8:{s:8:"language";s:5:"es_CR";s:7:"version";s:5:"4.8.3";s:7:"updated";s:19:"2017-10-01 17:54:52";s:12:"english_name";s:20:"Spanish (Costa Rica)";s:11:"native_name";s:22:"Español de Costa Rica";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.8.3/es_CR.zip";s:3:"iso";a:3:{i:1;s:2:"es";i:2;s:3:"spa";i:3;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_PE";a:8:{s:8:"language";s:5:"es_PE";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-09-09 09:36:22";s:12:"english_name";s:14:"Spanish (Peru)";s:11:"native_name";s:17:"Español de Perú";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/es_PE.zip";s:3:"iso";a:3:{i:1;s:2:"es";i:2;s:3:"spa";i:3;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_CL";a:8:{s:8:"language";s:5:"es_CL";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-11-28 20:09:49";s:12:"english_name";s:15:"Spanish (Chile)";s:11:"native_name";s:17:"Español de Chile";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/es_CL.zip";s:3:"iso";a:3:{i:1;s:2:"es";i:2;s:3:"spa";i:3;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_VE";a:8:{s:8:"language";s:5:"es_VE";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-02-23 18:34:33";s:12:"english_name";s:19:"Spanish (Venezuela)";s:11:"native_name";s:21:"Español de Venezuela";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/es_VE.zip";s:3:"iso";a:3:{i:1;s:2:"es";i:2;s:3:"spa";i:3;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_AR";a:8:{s:8:"language";s:5:"es_AR";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-02-27 05:22:44";s:12:"english_name";s:19:"Spanish (Argentina)";s:11:"native_name";s:21:"Español de Argentina";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/es_AR.zip";s:3:"iso";a:3:{i:1;s:2:"es";i:2;s:3:"spa";i:3;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:2:"et";a:8:{s:8:"language";s:2:"et";s:7:"version";s:5:"4.9.2";s:7:"updated";s:19:"2017-11-19 14:11:29";s:12:"english_name";s:8:"Estonian";s:11:"native_name";s:5:"Eesti";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.9.2/et.zip";s:3:"iso";a:2:{i:1;s:2:"et";i:2;s:3:"est";}s:7:"strings";a:1:{s:8:"continue";s:6:"Jätka";}}s:2:"eu";a:8:{s:8:"language";s:2:"eu";s:7:"version";s:5:"4.9.2";s:7:"updated";s:19:"2017-12-09 21:12:23";s:12:"english_name";s:6:"Basque";s:11:"native_name";s:7:"Euskara";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.9.2/eu.zip";s:3:"iso";a:2:{i:1;s:2:"eu";i:2;s:3:"eus";}s:7:"strings";a:1:{s:8:"continue";s:8:"Jarraitu";}}s:5:"fa_IR";a:8:{s:8:"language";s:5:"fa_IR";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-11 06:05:10";s:12:"english_name";s:7:"Persian";s:11:"native_name";s:10:"فارسی";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/fa_IR.zip";s:3:"iso";a:2:{i:1;s:2:"fa";i:2;s:3:"fas";}s:7:"strings";a:1:{s:8:"continue";s:10:"ادامه";}}s:2:"fi";a:8:{s:8:"language";s:2:"fi";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-02-12 17:00:17";s:12:"english_name";s:7:"Finnish";s:11:"native_name";s:5:"Suomi";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.9.4/fi.zip";s:3:"iso";a:2:{i:1;s:2:"fi";i:2;s:3:"fin";}s:7:"strings";a:1:{s:8:"continue";s:5:"Jatka";}}s:5:"fr_CA";a:8:{s:8:"language";s:5:"fr_CA";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-09 17:11:16";s:12:"english_name";s:15:"French (Canada)";s:11:"native_name";s:19:"Français du Canada";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/fr_CA.zip";s:3:"iso";a:2:{i:1;s:2:"fr";i:2;s:3:"fra";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuer";}}s:5:"fr_BE";a:8:{s:8:"language";s:5:"fr_BE";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-01-31 11:16:06";s:12:"english_name";s:16:"French (Belgium)";s:11:"native_name";s:21:"Français de Belgique";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/fr_BE.zip";s:3:"iso";a:2:{i:1;s:2:"fr";i:2;s:3:"fra";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuer";}}s:5:"fr_FR";a:8:{s:8:"language";s:5:"fr_FR";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-21 22:04:16";s:12:"english_name";s:15:"French (France)";s:11:"native_name";s:9:"Français";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/fr_FR.zip";s:3:"iso";a:1:{i:1;s:2:"fr";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuer";}}s:3:"fur";a:8:{s:8:"language";s:3:"fur";s:7:"version";s:5:"4.8.5";s:7:"updated";s:19:"2018-01-29 17:32:35";s:12:"english_name";s:8:"Friulian";s:11:"native_name";s:8:"Friulian";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.8.5/fur.zip";s:3:"iso";a:2:{i:2;s:3:"fur";i:3;s:3:"fur";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continue";}}s:2:"gd";a:8:{s:8:"language";s:2:"gd";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-08-23 17:41:37";s:12:"english_name";s:15:"Scottish Gaelic";s:11:"native_name";s:9:"Gàidhlig";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/gd.zip";s:3:"iso";a:3:{i:1;s:2:"gd";i:2;s:3:"gla";i:3;s:3:"gla";}s:7:"strings";a:1:{s:8:"continue";s:15:"Lean air adhart";}}s:5:"gl_ES";a:8:{s:8:"language";s:5:"gl_ES";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-10 18:19:59";s:12:"english_name";s:8:"Galician";s:11:"native_name";s:6:"Galego";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/gl_ES.zip";s:3:"iso";a:2:{i:1;s:2:"gl";i:2;s:3:"glg";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:2:"gu";a:8:{s:8:"language";s:2:"gu";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-02-14 06:16:04";s:12:"english_name";s:8:"Gujarati";s:11:"native_name";s:21:"ગુજરાતી";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.9.4/gu.zip";s:3:"iso";a:2:{i:1;s:2:"gu";i:2;s:3:"guj";}s:7:"strings";a:1:{s:8:"continue";s:31:"ચાલુ રાખવું";}}s:3:"haz";a:8:{s:8:"language";s:3:"haz";s:7:"version";s:5:"4.4.2";s:7:"updated";s:19:"2015-12-05 00:59:09";s:12:"english_name";s:8:"Hazaragi";s:11:"native_name";s:15:"هزاره گی";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.4.2/haz.zip";s:3:"iso";a:1:{i:3;s:3:"haz";}s:7:"strings";a:1:{s:8:"continue";s:10:"ادامه";}}s:5:"he_IL";a:8:{s:8:"language";s:5:"he_IL";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-02-12 09:39:31";s:12:"english_name";s:6:"Hebrew";s:11:"native_name";s:16:"עִבְרִית";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/he_IL.zip";s:3:"iso";a:1:{i:1;s:2:"he";}s:7:"strings";a:1:{s:8:"continue";s:8:"המשך";}}s:5:"hi_IN";a:8:{s:8:"language";s:5:"hi_IN";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-13 12:30:42";s:12:"english_name";s:5:"Hindi";s:11:"native_name";s:18:"हिन्दी";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/hi_IN.zip";s:3:"iso";a:2:{i:1;s:2:"hi";i:2;s:3:"hin";}s:7:"strings";a:1:{s:8:"continue";s:12:"जारी";}}s:2:"hr";a:8:{s:8:"language";s:2:"hr";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-09 15:33:49";s:12:"english_name";s:8:"Croatian";s:11:"native_name";s:8:"Hrvatski";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.9.4/hr.zip";s:3:"iso";a:2:{i:1;s:2:"hr";i:2;s:3:"hrv";}s:7:"strings";a:1:{s:8:"continue";s:7:"Nastavi";}}s:5:"hu_HU";a:8:{s:8:"language";s:5:"hu_HU";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-01-29 19:54:36";s:12:"english_name";s:9:"Hungarian";s:11:"native_name";s:6:"Magyar";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/hu_HU.zip";s:3:"iso";a:2:{i:1;s:2:"hu";i:2;s:3:"hun";}s:7:"strings";a:1:{s:8:"continue";s:10:"Folytatás";}}s:2:"hy";a:8:{s:8:"language";s:2:"hy";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-12-03 16:21:10";s:12:"english_name";s:8:"Armenian";s:11:"native_name";s:14:"Հայերեն";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/hy.zip";s:3:"iso";a:2:{i:1;s:2:"hy";i:2;s:3:"hye";}s:7:"strings";a:1:{s:8:"continue";s:20:"Շարունակել";}}s:5:"id_ID";a:8:{s:8:"language";s:5:"id_ID";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-02-28 12:42:14";s:12:"english_name";s:10:"Indonesian";s:11:"native_name";s:16:"Bahasa Indonesia";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/id_ID.zip";s:3:"iso";a:2:{i:1;s:2:"id";i:2;s:3:"ind";}s:7:"strings";a:1:{s:8:"continue";s:9:"Lanjutkan";}}s:5:"is_IS";a:8:{s:8:"language";s:5:"is_IS";s:7:"version";s:5:"4.7.7";s:7:"updated";s:19:"2017-04-13 13:55:54";s:12:"english_name";s:9:"Icelandic";s:11:"native_name";s:9:"Íslenska";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.7/is_IS.zip";s:3:"iso";a:2:{i:1;s:2:"is";i:2;s:3:"isl";}s:7:"strings";a:1:{s:8:"continue";s:6:"Áfram";}}s:5:"it_IT";a:8:{s:8:"language";s:5:"it_IT";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-09 08:18:46";s:12:"english_name";s:7:"Italian";s:11:"native_name";s:8:"Italiano";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/it_IT.zip";s:3:"iso";a:2:{i:1;s:2:"it";i:2;s:3:"ita";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continua";}}s:2:"ja";a:8:{s:8:"language";s:2:"ja";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-16 18:46:39";s:12:"english_name";s:8:"Japanese";s:11:"native_name";s:9:"日本語";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.9.4/ja.zip";s:3:"iso";a:1:{i:1;s:2:"ja";}s:7:"strings";a:1:{s:8:"continue";s:9:"続ける";}}s:5:"jv_ID";a:8:{s:8:"language";s:5:"jv_ID";s:7:"version";s:5:"4.9.2";s:7:"updated";s:19:"2017-11-14 11:47:57";s:12:"english_name";s:8:"Javanese";s:11:"native_name";s:9:"Basa Jawa";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.2/jv_ID.zip";s:3:"iso";a:2:{i:1;s:2:"jv";i:2;s:3:"jav";}s:7:"strings";a:1:{s:8:"continue";s:9:"Nerusaké";}}s:5:"ka_GE";a:8:{s:8:"language";s:5:"ka_GE";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-02-08 06:01:48";s:12:"english_name";s:8:"Georgian";s:11:"native_name";s:21:"ქართული";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/ka_GE.zip";s:3:"iso";a:2:{i:1;s:2:"ka";i:2;s:3:"kat";}s:7:"strings";a:1:{s:8:"continue";s:30:"გაგრძელება";}}s:3:"kab";a:8:{s:8:"language";s:3:"kab";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-22 22:24:38";s:12:"english_name";s:6:"Kabyle";s:11:"native_name";s:9:"Taqbaylit";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.9.4/kab.zip";s:3:"iso";a:2:{i:2;s:3:"kab";i:3;s:3:"kab";}s:7:"strings";a:1:{s:8:"continue";s:6:"Kemmel";}}s:2:"kk";a:8:{s:8:"language";s:2:"kk";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-12 08:08:32";s:12:"english_name";s:6:"Kazakh";s:11:"native_name";s:19:"Қазақ тілі";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.9.4/kk.zip";s:3:"iso";a:2:{i:1;s:2:"kk";i:2;s:3:"kaz";}s:7:"strings";a:1:{s:8:"continue";s:20:"Жалғастыру";}}s:2:"km";a:8:{s:8:"language";s:2:"km";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-12-07 02:07:59";s:12:"english_name";s:5:"Khmer";s:11:"native_name";s:27:"ភាសាខ្មែរ";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/km.zip";s:3:"iso";a:2:{i:1;s:2:"km";i:2;s:3:"khm";}s:7:"strings";a:1:{s:8:"continue";s:12:"បន្ត";}}s:5:"ko_KR";a:8:{s:8:"language";s:5:"ko_KR";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-15 02:27:09";s:12:"english_name";s:6:"Korean";s:11:"native_name";s:9:"한국어";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/ko_KR.zip";s:3:"iso";a:2:{i:1;s:2:"ko";i:2;s:3:"kor";}s:7:"strings";a:1:{s:8:"continue";s:6:"계속";}}s:3:"ckb";a:8:{s:8:"language";s:3:"ckb";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:48:25";s:12:"english_name";s:16:"Kurdish (Sorani)";s:11:"native_name";s:13:"كوردی‎";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7.2/ckb.zip";s:3:"iso";a:2:{i:1;s:2:"ku";i:3;s:3:"ckb";}s:7:"strings";a:1:{s:8:"continue";s:30:"به‌رده‌وام به‌";}}s:2:"lo";a:8:{s:8:"language";s:2:"lo";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-11-12 09:59:23";s:12:"english_name";s:3:"Lao";s:11:"native_name";s:21:"ພາສາລາວ";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/lo.zip";s:3:"iso";a:2:{i:1;s:2:"lo";i:2;s:3:"lao";}s:7:"strings";a:1:{s:8:"continue";s:18:"ຕໍ່​ໄປ";}}s:5:"lt_LT";a:8:{s:8:"language";s:5:"lt_LT";s:7:"version";s:5:"4.9.2";s:7:"updated";s:19:"2017-11-15 19:40:23";s:12:"english_name";s:10:"Lithuanian";s:11:"native_name";s:15:"Lietuvių kalba";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.2/lt_LT.zip";s:3:"iso";a:2:{i:1;s:2:"lt";i:2;s:3:"lit";}s:7:"strings";a:1:{s:8:"continue";s:6:"Tęsti";}}s:2:"lv";a:8:{s:8:"language";s:2:"lv";s:7:"version";s:5:"4.7.7";s:7:"updated";s:19:"2017-03-17 20:40:40";s:12:"english_name";s:7:"Latvian";s:11:"native_name";s:16:"Latviešu valoda";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.7/lv.zip";s:3:"iso";a:2:{i:1;s:2:"lv";i:2;s:3:"lav";}s:7:"strings";a:1:{s:8:"continue";s:9:"Turpināt";}}s:5:"mk_MK";a:8:{s:8:"language";s:5:"mk_MK";s:7:"version";s:5:"4.7.7";s:7:"updated";s:19:"2017-01-26 15:54:41";s:12:"english_name";s:10:"Macedonian";s:11:"native_name";s:31:"Македонски јазик";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.7/mk_MK.zip";s:3:"iso";a:2:{i:1;s:2:"mk";i:2;s:3:"mkd";}s:7:"strings";a:1:{s:8:"continue";s:16:"Продолжи";}}s:5:"ml_IN";a:8:{s:8:"language";s:5:"ml_IN";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-27 03:43:32";s:12:"english_name";s:9:"Malayalam";s:11:"native_name";s:18:"മലയാളം";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/ml_IN.zip";s:3:"iso";a:2:{i:1;s:2:"ml";i:2;s:3:"mal";}s:7:"strings";a:1:{s:8:"continue";s:18:"തുടരുക";}}s:2:"mn";a:8:{s:8:"language";s:2:"mn";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-12 07:29:35";s:12:"english_name";s:9:"Mongolian";s:11:"native_name";s:12:"Монгол";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/mn.zip";s:3:"iso";a:2:{i:1;s:2:"mn";i:2;s:3:"mon";}s:7:"strings";a:1:{s:8:"continue";s:24:"Үргэлжлүүлэх";}}s:2:"mr";a:8:{s:8:"language";s:2:"mr";s:7:"version";s:5:"4.8.5";s:7:"updated";s:19:"2018-02-13 07:38:55";s:12:"english_name";s:7:"Marathi";s:11:"native_name";s:15:"मराठी";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.8.5/mr.zip";s:3:"iso";a:2:{i:1;s:2:"mr";i:2;s:3:"mar";}s:7:"strings";a:1:{s:8:"continue";s:25:"सुरु ठेवा";}}s:5:"ms_MY";a:8:{s:8:"language";s:5:"ms_MY";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-02-28 10:55:13";s:12:"english_name";s:5:"Malay";s:11:"native_name";s:13:"Bahasa Melayu";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/ms_MY.zip";s:3:"iso";a:2:{i:1;s:2:"ms";i:2;s:3:"msa";}s:7:"strings";a:1:{s:8:"continue";s:8:"Teruskan";}}s:5:"my_MM";a:8:{s:8:"language";s:5:"my_MM";s:7:"version";s:6:"4.1.20";s:7:"updated";s:19:"2015-03-26 15:57:42";s:12:"english_name";s:17:"Myanmar (Burmese)";s:11:"native_name";s:15:"ဗမာစာ";s:7:"package";s:65:"https://downloads.wordpress.org/translation/core/4.1.20/my_MM.zip";s:3:"iso";a:2:{i:1;s:2:"my";i:2;s:3:"mya";}s:7:"strings";a:1:{s:8:"continue";s:54:"ဆက်လက်လုပ်ဆောင်ပါ။";}}s:5:"nb_NO";a:8:{s:8:"language";s:5:"nb_NO";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-02 11:50:29";s:12:"english_name";s:19:"Norwegian (Bokmål)";s:11:"native_name";s:13:"Norsk bokmål";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/nb_NO.zip";s:3:"iso";a:2:{i:1;s:2:"nb";i:2;s:3:"nob";}s:7:"strings";a:1:{s:8:"continue";s:8:"Fortsett";}}s:5:"ne_NP";a:8:{s:8:"language";s:5:"ne_NP";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-19 05:29:03";s:12:"english_name";s:6:"Nepali";s:11:"native_name";s:18:"नेपाली";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/ne_NP.zip";s:3:"iso";a:2:{i:1;s:2:"ne";i:2;s:3:"nep";}s:7:"strings";a:1:{s:8:"continue";s:43:"जारी राख्नुहोस्";}}s:5:"nl_BE";a:8:{s:8:"language";s:5:"nl_BE";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-23 12:42:00";s:12:"english_name";s:15:"Dutch (Belgium)";s:11:"native_name";s:20:"Nederlands (België)";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/nl_BE.zip";s:3:"iso";a:2:{i:1;s:2:"nl";i:2;s:3:"nld";}s:7:"strings";a:1:{s:8:"continue";s:8:"Doorgaan";}}s:12:"nl_NL_formal";a:8:{s:8:"language";s:12:"nl_NL_formal";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-09 07:20:23";s:12:"english_name";s:14:"Dutch (Formal)";s:11:"native_name";s:20:"Nederlands (Formeel)";s:7:"package";s:71:"https://downloads.wordpress.org/translation/core/4.9.4/nl_NL_formal.zip";s:3:"iso";a:2:{i:1;s:2:"nl";i:2;s:3:"nld";}s:7:"strings";a:1:{s:8:"continue";s:8:"Doorgaan";}}s:5:"nl_NL";a:8:{s:8:"language";s:5:"nl_NL";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-23 10:18:52";s:12:"english_name";s:5:"Dutch";s:11:"native_name";s:10:"Nederlands";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/nl_NL.zip";s:3:"iso";a:2:{i:1;s:2:"nl";i:2;s:3:"nld";}s:7:"strings";a:1:{s:8:"continue";s:8:"Doorgaan";}}s:5:"nn_NO";a:8:{s:8:"language";s:5:"nn_NO";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-22 09:27:50";s:12:"english_name";s:19:"Norwegian (Nynorsk)";s:11:"native_name";s:13:"Norsk nynorsk";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/nn_NO.zip";s:3:"iso";a:2:{i:1;s:2:"nn";i:2;s:3:"nno";}s:7:"strings";a:1:{s:8:"continue";s:9:"Hald fram";}}s:3:"oci";a:8:{s:8:"language";s:3:"oci";s:7:"version";s:5:"4.8.3";s:7:"updated";s:19:"2017-08-25 10:03:08";s:12:"english_name";s:7:"Occitan";s:11:"native_name";s:7:"Occitan";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.8.3/oci.zip";s:3:"iso";a:2:{i:1;s:2:"oc";i:2;s:3:"oci";}s:7:"strings";a:1:{s:8:"continue";s:9:"Contunhar";}}s:5:"pa_IN";a:8:{s:8:"language";s:5:"pa_IN";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-16 05:19:43";s:12:"english_name";s:7:"Punjabi";s:11:"native_name";s:18:"ਪੰਜਾਬੀ";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/pa_IN.zip";s:3:"iso";a:2:{i:1;s:2:"pa";i:2;s:3:"pan";}s:7:"strings";a:1:{s:8:"continue";s:25:"ਜਾਰੀ ਰੱਖੋ";}}s:5:"pl_PL";a:8:{s:8:"language";s:5:"pl_PL";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-09 08:32:20";s:12:"english_name";s:6:"Polish";s:11:"native_name";s:6:"Polski";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/pl_PL.zip";s:3:"iso";a:2:{i:1;s:2:"pl";i:2;s:3:"pol";}s:7:"strings";a:1:{s:8:"continue";s:9:"Kontynuuj";}}s:2:"ps";a:8:{s:8:"language";s:2:"ps";s:7:"version";s:6:"4.1.20";s:7:"updated";s:19:"2015-03-29 22:19:48";s:12:"english_name";s:6:"Pashto";s:11:"native_name";s:8:"پښتو";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.1.20/ps.zip";s:3:"iso";a:2:{i:1;s:2:"ps";i:2;s:3:"pus";}s:7:"strings";a:1:{s:8:"continue";s:19:"دوام ورکړه";}}s:5:"pt_PT";a:8:{s:8:"language";s:5:"pt_PT";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-09 09:37:35";s:12:"english_name";s:21:"Portuguese (Portugal)";s:11:"native_name";s:10:"Português";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/pt_PT.zip";s:3:"iso";a:1:{i:1;s:2:"pt";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"pt_BR";a:8:{s:8:"language";s:5:"pt_BR";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-22 18:30:41";s:12:"english_name";s:19:"Portuguese (Brazil)";s:11:"native_name";s:20:"Português do Brasil";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/pt_BR.zip";s:3:"iso";a:2:{i:1;s:2:"pt";i:2;s:3:"por";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:10:"pt_PT_ao90";a:8:{s:8:"language";s:10:"pt_PT_ao90";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-09 09:30:48";s:12:"english_name";s:27:"Portuguese (Portugal, AO90)";s:11:"native_name";s:17:"Português (AO90)";s:7:"package";s:69:"https://downloads.wordpress.org/translation/core/4.9.4/pt_PT_ao90.zip";s:3:"iso";a:1:{i:1;s:2:"pt";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:3:"rhg";a:8:{s:8:"language";s:3:"rhg";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-03-16 13:03:18";s:12:"english_name";s:8:"Rohingya";s:11:"native_name";s:8:"Ruáinga";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7.2/rhg.zip";s:3:"iso";a:1:{i:3;s:3:"rhg";}s:7:"strings";a:1:{s:8:"continue";s:0:"";}}s:5:"ro_RO";a:8:{s:8:"language";s:5:"ro_RO";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-09 12:09:47";s:12:"english_name";s:8:"Romanian";s:11:"native_name";s:8:"Română";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/ro_RO.zip";s:3:"iso";a:2:{i:1;s:2:"ro";i:2;s:3:"ron";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuă";}}s:5:"ru_RU";a:8:{s:8:"language";s:5:"ru_RU";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-22 15:56:45";s:12:"english_name";s:7:"Russian";s:11:"native_name";s:14:"Русский";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/ru_RU.zip";s:3:"iso";a:2:{i:1;s:2:"ru";i:2;s:3:"rus";}s:7:"strings";a:1:{s:8:"continue";s:20:"Продолжить";}}s:3:"sah";a:8:{s:8:"language";s:3:"sah";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-21 02:06:41";s:12:"english_name";s:5:"Sakha";s:11:"native_name";s:14:"Сахалыы";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7.2/sah.zip";s:3:"iso";a:2:{i:2;s:3:"sah";i:3;s:3:"sah";}s:7:"strings";a:1:{s:8:"continue";s:12:"Салҕаа";}}s:5:"si_LK";a:8:{s:8:"language";s:5:"si_LK";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-11-12 06:00:52";s:12:"english_name";s:7:"Sinhala";s:11:"native_name";s:15:"සිංහල";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/si_LK.zip";s:3:"iso";a:2:{i:1;s:2:"si";i:2;s:3:"sin";}s:7:"strings";a:1:{s:8:"continue";s:44:"දිගටම කරගෙන යන්න";}}s:5:"sk_SK";a:8:{s:8:"language";s:5:"sk_SK";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-22 08:50:10";s:12:"english_name";s:6:"Slovak";s:11:"native_name";s:11:"Slovenčina";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/sk_SK.zip";s:3:"iso";a:2:{i:1;s:2:"sk";i:2;s:3:"slk";}s:7:"strings";a:1:{s:8:"continue";s:12:"Pokračovať";}}s:5:"sl_SI";a:8:{s:8:"language";s:5:"sl_SI";s:7:"version";s:5:"4.9.2";s:7:"updated";s:19:"2018-01-04 13:33:13";s:12:"english_name";s:9:"Slovenian";s:11:"native_name";s:13:"Slovenščina";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.2/sl_SI.zip";s:3:"iso";a:2:{i:1;s:2:"sl";i:2;s:3:"slv";}s:7:"strings";a:1:{s:8:"continue";s:8:"Nadaljuj";}}s:2:"sq";a:8:{s:8:"language";s:2:"sq";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-09 09:59:50";s:12:"english_name";s:8:"Albanian";s:11:"native_name";s:5:"Shqip";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.9.4/sq.zip";s:3:"iso";a:2:{i:1;s:2:"sq";i:2;s:3:"sqi";}s:7:"strings";a:1:{s:8:"continue";s:6:"Vazhdo";}}s:5:"sr_RS";a:8:{s:8:"language";s:5:"sr_RS";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-02-05 20:37:27";s:12:"english_name";s:7:"Serbian";s:11:"native_name";s:23:"Српски језик";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/sr_RS.zip";s:3:"iso";a:2:{i:1;s:2:"sr";i:2;s:3:"srp";}s:7:"strings";a:1:{s:8:"continue";s:14:"Настави";}}s:5:"sv_SE";a:8:{s:8:"language";s:5:"sv_SE";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-09 12:42:33";s:12:"english_name";s:7:"Swedish";s:11:"native_name";s:7:"Svenska";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/sv_SE.zip";s:3:"iso";a:2:{i:1;s:2:"sv";i:2;s:3:"swe";}s:7:"strings";a:1:{s:8:"continue";s:9:"Fortsätt";}}s:3:"szl";a:8:{s:8:"language";s:3:"szl";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-09-24 19:58:14";s:12:"english_name";s:8:"Silesian";s:11:"native_name";s:17:"Ślōnskŏ gŏdka";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7.2/szl.zip";s:3:"iso";a:1:{i:3;s:3:"szl";}s:7:"strings";a:1:{s:8:"continue";s:13:"Kōntynuować";}}s:5:"ta_IN";a:8:{s:8:"language";s:5:"ta_IN";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-27 03:22:47";s:12:"english_name";s:5:"Tamil";s:11:"native_name";s:15:"தமிழ்";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/ta_IN.zip";s:3:"iso";a:2:{i:1;s:2:"ta";i:2;s:3:"tam";}s:7:"strings";a:1:{s:8:"continue";s:24:"தொடரவும்";}}s:2:"te";a:8:{s:8:"language";s:2:"te";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:47:39";s:12:"english_name";s:6:"Telugu";s:11:"native_name";s:18:"తెలుగు";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/te.zip";s:3:"iso";a:2:{i:1;s:2:"te";i:2;s:3:"tel";}s:7:"strings";a:1:{s:8:"continue";s:30:"కొనసాగించు";}}s:2:"th";a:8:{s:8:"language";s:2:"th";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-02 17:08:41";s:12:"english_name";s:4:"Thai";s:11:"native_name";s:9:"ไทย";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.9.4/th.zip";s:3:"iso";a:2:{i:1;s:2:"th";i:2;s:3:"tha";}s:7:"strings";a:1:{s:8:"continue";s:15:"ต่อไป";}}s:2:"tl";a:8:{s:8:"language";s:2:"tl";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-12-30 02:38:08";s:12:"english_name";s:7:"Tagalog";s:11:"native_name";s:7:"Tagalog";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/tl.zip";s:3:"iso";a:2:{i:1;s:2:"tl";i:2;s:3:"tgl";}s:7:"strings";a:1:{s:8:"continue";s:10:"Magpatuloy";}}s:5:"tr_TR";a:8:{s:8:"language";s:5:"tr_TR";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-14 15:26:30";s:12:"english_name";s:7:"Turkish";s:11:"native_name";s:8:"Türkçe";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/tr_TR.zip";s:3:"iso";a:2:{i:1;s:2:"tr";i:2;s:3:"tur";}s:7:"strings";a:1:{s:8:"continue";s:5:"Devam";}}s:5:"tt_RU";a:8:{s:8:"language";s:5:"tt_RU";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-11-20 20:20:50";s:12:"english_name";s:5:"Tatar";s:11:"native_name";s:19:"Татар теле";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/tt_RU.zip";s:3:"iso";a:2:{i:1;s:2:"tt";i:2;s:3:"tat";}s:7:"strings";a:1:{s:8:"continue";s:17:"дәвам итү";}}s:3:"tah";a:8:{s:8:"language";s:3:"tah";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-03-06 18:39:39";s:12:"english_name";s:8:"Tahitian";s:11:"native_name";s:10:"Reo Tahiti";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7.2/tah.zip";s:3:"iso";a:3:{i:1;s:2:"ty";i:2;s:3:"tah";i:3;s:3:"tah";}s:7:"strings";a:1:{s:8:"continue";s:0:"";}}s:5:"ug_CN";a:8:{s:8:"language";s:5:"ug_CN";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-12-05 09:23:39";s:12:"english_name";s:6:"Uighur";s:11:"native_name";s:9:"Uyƣurqə";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/ug_CN.zip";s:3:"iso";a:2:{i:1;s:2:"ug";i:2;s:3:"uig";}s:7:"strings";a:1:{s:8:"continue";s:26:"داۋاملاشتۇرۇش";}}s:2:"uk";a:8:{s:8:"language";s:2:"uk";s:7:"version";s:5:"4.8.3";s:7:"updated";s:19:"2017-11-02 17:05:02";s:12:"english_name";s:9:"Ukrainian";s:11:"native_name";s:20:"Українська";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.8.3/uk.zip";s:3:"iso";a:2:{i:1;s:2:"uk";i:2;s:3:"ukr";}s:7:"strings";a:1:{s:8:"continue";s:20:"Продовжити";}}s:2:"ur";a:8:{s:8:"language";s:2:"ur";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-13 08:24:25";s:12:"english_name";s:4:"Urdu";s:11:"native_name";s:8:"اردو";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.9.4/ur.zip";s:3:"iso";a:2:{i:1;s:2:"ur";i:2;s:3:"urd";}s:7:"strings";a:1:{s:8:"continue";s:19:"جاری رکھیں";}}s:5:"uz_UZ";a:8:{s:8:"language";s:5:"uz_UZ";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-09 10:37:43";s:12:"english_name";s:5:"Uzbek";s:11:"native_name";s:11:"O‘zbekcha";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/uz_UZ.zip";s:3:"iso";a:2:{i:1;s:2:"uz";i:2;s:3:"uzb";}s:7:"strings";a:1:{s:8:"continue";s:11:"Davom etish";}}s:2:"vi";a:8:{s:8:"language";s:2:"vi";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-03-19 14:34:44";s:12:"english_name";s:10:"Vietnamese";s:11:"native_name";s:14:"Tiếng Việt";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.9.4/vi.zip";s:3:"iso";a:2:{i:1;s:2:"vi";i:2;s:3:"vie";}s:7:"strings";a:1:{s:8:"continue";s:12:"Tiếp tục";}}s:5:"zh_HK";a:8:{s:8:"language";s:5:"zh_HK";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-02-06 17:26:08";s:12:"english_name";s:19:"Chinese (Hong Kong)";s:11:"native_name";s:16:"香港中文版	";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/zh_HK.zip";s:3:"iso";a:2:{i:1;s:2:"zh";i:2;s:3:"zho";}s:7:"strings";a:1:{s:8:"continue";s:6:"繼續";}}s:5:"zh_CN";a:8:{s:8:"language";s:5:"zh_CN";s:7:"version";s:5:"4.9.2";s:7:"updated";s:19:"2017-11-17 22:20:52";s:12:"english_name";s:15:"Chinese (China)";s:11:"native_name";s:12:"简体中文";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.2/zh_CN.zip";s:3:"iso";a:2:{i:1;s:2:"zh";i:2;s:3:"zho";}s:7:"strings";a:1:{s:8:"continue";s:6:"继续";}}s:5:"zh_TW";a:8:{s:8:"language";s:5:"zh_TW";s:7:"version";s:5:"4.9.4";s:7:"updated";s:19:"2018-02-13 02:41:15";s:12:"english_name";s:16:"Chinese (Taiwan)";s:11:"native_name";s:12:"繁體中文";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.9.4/zh_TW.zip";s:3:"iso";a:2:{i:1;s:2:"zh";i:2;s:3:"zho";}s:7:"strings";a:1:{s:8:"continue";s:6:"繼續";}}}', 'no'),
(3331, '_site_transient_timeout_browser_f486628b8b3cd381d361bdc25237d08d', '1522479067', 'no'),
(3330, '_site_transient_update_plugins', 'O:8:"stdClass":5:{s:12:"last_checked";i:1521874259;s:7:"checked";a:5:{s:19:"akismet/akismet.php";s:3:"3.2";s:48:"capability-manager-enhanced/capsman-enhanced.php";s:5:"1.5.7";s:36:"contact-form-7/wp-contact-form-7.php";s:3:"4.6";s:58:"contact-form-7-to-database-extension/contact-form-7-db.php";s:7:"2.10.26";s:9:"hello.php";s:3:"1.6";}s:8:"response";a:2:{s:19:"akismet/akismet.php";O:8:"stdClass":11:{s:2:"id";s:21:"w.org/plugins/akismet";s:4:"slug";s:7:"akismet";s:6:"plugin";s:19:"akismet/akismet.php";s:11:"new_version";s:5:"4.0.3";s:3:"url";s:38:"https://wordpress.org/plugins/akismet/";s:7:"package";s:56:"https://downloads.wordpress.org/plugin/akismet.4.0.3.zip";s:5:"icons";a:3:{s:2:"1x";s:59:"https://ps.w.org/akismet/assets/icon-128x128.png?rev=969272";s:2:"2x";s:59:"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272";s:7:"default";s:59:"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272";}s:7:"banners";a:2:{s:2:"1x";s:61:"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904";s:7:"default";s:61:"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904";}s:11:"banners_rtl";a:0:{}s:6:"tested";s:5:"4.9.4";s:13:"compatibility";O:8:"stdClass":0:{}}s:36:"contact-form-7/wp-contact-form-7.php";O:8:"stdClass":11:{s:2:"id";s:28:"w.org/plugins/contact-form-7";s:4:"slug";s:14:"contact-form-7";s:6:"plugin";s:36:"contact-form-7/wp-contact-form-7.php";s:11:"new_version";s:5:"5.0.1";s:3:"url";s:45:"https://wordpress.org/plugins/contact-form-7/";s:7:"package";s:63:"https://downloads.wordpress.org/plugin/contact-form-7.5.0.1.zip";s:5:"icons";a:3:{s:2:"1x";s:66:"https://ps.w.org/contact-form-7/assets/icon-128x128.png?rev=984007";s:2:"2x";s:66:"https://ps.w.org/contact-form-7/assets/icon-256x256.png?rev=984007";s:7:"default";s:66:"https://ps.w.org/contact-form-7/assets/icon-256x256.png?rev=984007";}s:7:"banners";a:3:{s:2:"2x";s:69:"https://ps.w.org/contact-form-7/assets/banner-1544x500.png?rev=860901";s:2:"1x";s:68:"https://ps.w.org/contact-form-7/assets/banner-772x250.png?rev=880427";s:7:"default";s:69:"https://ps.w.org/contact-form-7/assets/banner-1544x500.png?rev=860901";}s:11:"banners_rtl";a:0:{}s:6:"tested";s:5:"4.9.4";s:13:"compatibility";O:8:"stdClass":0:{}}}s:12:"translations";a:0:{}s:9:"no_update";a:2:{s:48:"capability-manager-enhanced/capsman-enhanced.php";O:8:"stdClass":9:{s:2:"id";s:41:"w.org/plugins/capability-manager-enhanced";s:4:"slug";s:27:"capability-manager-enhanced";s:6:"plugin";s:48:"capability-manager-enhanced/capsman-enhanced.php";s:11:"new_version";s:5:"1.5.7";s:3:"url";s:58:"https://wordpress.org/plugins/capability-manager-enhanced/";s:7:"package";s:70:"https://downloads.wordpress.org/plugin/capability-manager-enhanced.zip";s:5:"icons";a:0:{}s:7:"banners";a:3:{s:2:"2x";s:82:"https://ps.w.org/capability-manager-enhanced/assets/banner-1544x500.png?rev=776273";s:2:"1x";s:81:"https://ps.w.org/capability-manager-enhanced/assets/banner-772x250.png?rev=776273";s:7:"default";s:82:"https://ps.w.org/capability-manager-enhanced/assets/banner-1544x500.png?rev=776273";}s:11:"banners_rtl";a:0:{}}s:9:"hello.php";O:8:"stdClass":9:{s:2:"id";s:25:"w.org/plugins/hello-dolly";s:4:"slug";s:11:"hello-dolly";s:6:"plugin";s:9:"hello.php";s:11:"new_version";s:3:"1.6";s:3:"url";s:42:"https://wordpress.org/plugins/hello-dolly/";s:7:"package";s:58:"https://downloads.wordpress.org/plugin/hello-dolly.1.6.zip";s:5:"icons";a:3:{s:2:"1x";s:63:"https://ps.w.org/hello-dolly/assets/icon-128x128.jpg?rev=969907";s:2:"2x";s:63:"https://ps.w.org/hello-dolly/assets/icon-256x256.jpg?rev=969907";s:7:"default";s:63:"https://ps.w.org/hello-dolly/assets/icon-256x256.jpg?rev=969907";}s:7:"banners";a:2:{s:2:"1x";s:65:"https://ps.w.org/hello-dolly/assets/banner-772x250.png?rev=478342";s:7:"default";s:65:"https://ps.w.org/hello-dolly/assets/banner-772x250.png?rev=478342";}s:11:"banners_rtl";a:0:{}}}}', 'no'),
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
(159, 43, '_menu_item_url', '#'),
(161, 47, '_edit_last', '1'),
(162, 47, '_wp_page_template', 'login-page.php'),
(163, 47, '_edit_lock', '1511508344:1'),
(174, 67, '_edit_last', '1'),
(175, 67, '_wp_page_template', 'membership-account.php'),
(176, 67, '_edit_lock', '1512039837:1'),
(183, 71, '_edit_last', '1'),
(184, 71, '_wp_page_template', 'redeem-history-page.php'),
(185, 71, '_edit_lock', '1512040160:1');

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
(32, 1, '2017-04-19 06:36:52', '2017-04-19 05:36:52', '', 'Tournment', '', 'publish', 'closed', 'closed', '', 'tournment', '', '', '2017-04-19 06:36:52', '2017-04-19 05:36:52', '', 0, 'http://www.chaosentertainment.in/?page_id=32', 0, 'page', '', 0),
(33, 1, '2017-04-19 06:36:52', '2017-04-19 05:36:52', '', 'Tournment', '', 'inherit', 'closed', 'closed', '', '32-revision-v1', '', '', '2017-04-19 06:36:52', '2017-04-19 05:36:52', '', 32, 'http://www.chaosentertainment.in/2017/04/19/32-revision-v1/', 0, 'revision', '', 0),
(35, 1, '2017-04-19 07:08:50', '2017-04-19 06:08:50', '', 'Football Print', '', 'publish', 'closed', 'closed', '', 'football-print', '', '', '2017-04-19 07:08:55', '2017-04-19 06:08:55', '', 0, 'http://www.chaosentertainment.in/?page_id=35', 0, 'page', '', 0),
(36, 1, '2017-04-19 07:08:50', '2017-04-19 06:08:50', '', 'Football Print', '', 'inherit', 'closed', 'closed', '', '35-revision-v1', '', '', '2017-04-19 07:08:50', '2017-04-19 06:08:50', '', 35, 'http://www.chaosentertainment.in/2017/04/19/35-revision-v1/', 0, 'revision', '', 0),
(37, 1, '2017-04-19 07:09:16', '2017-04-19 06:09:16', '', 'Gaming Print', '', 'publish', 'closed', 'closed', '', 'gaming-print', '', '', '2017-04-19 07:09:20', '2017-04-19 06:09:20', '', 0, 'http://www.chaosentertainment.in/?page_id=37', 0, 'page', '', 0),
(38, 1, '2017-04-19 07:09:16', '2017-04-19 06:09:16', '', 'Gaming Print', '', 'inherit', 'closed', 'closed', '', '37-revision-v1', '', '', '2017-04-19 07:09:16', '2017-04-19 06:09:16', '', 37, 'http://www.chaosentertainment.in/2017/04/19/37-revision-v1/', 0, 'revision', '', 0),
(39, 1, '2017-04-19 07:09:37', '2017-04-19 06:09:37', '', 'Lazertag Print', '', 'publish', 'closed', 'closed', '', 'lazertag-print', '', '', '2017-04-19 07:09:41', '2017-04-19 06:09:41', '', 0, 'http://www.chaosentertainment.in/?page_id=39', 0, 'page', '', 0),
(40, 1, '2017-04-19 07:09:37', '2017-04-19 06:09:37', '', 'Lazertag Print', '', 'inherit', 'closed', 'closed', '', '39-revision-v1', '', '', '2017-04-19 07:09:37', '2017-04-19 06:09:37', '', 39, 'http://www.chaosentertainment.in/2017/04/19/39-revision-v1/', 0, 'revision', '', 0),
(47, 1, '2017-11-24 07:27:52', '2017-11-24 07:27:52', '', 'login', '', 'publish', 'closed', 'closed', '', 'login', '', '', '2017-11-24 07:27:52', '2017-11-24 07:27:52', '', 0, 'http://localhost/evanjoych/?page_id=47', 0, 'page', '', 0),
(48, 1, '2017-11-24 07:27:52', '2017-11-24 07:27:52', '', 'login', '', 'inherit', 'closed', 'closed', '', '47-revision-v1', '', '', '2017-11-24 07:27:52', '2017-11-24 07:27:52', '', 47, 'http://localhost/evanjoych/47-revision-v1/', 0, 'revision', '', 0),
(67, 1, '2017-11-30 10:58:58', '2017-11-30 10:58:58', '', 'membership account', '', 'publish', 'closed', 'closed', '', 'membership-account', '', '', '2017-11-30 11:06:08', '2017-11-30 11:06:08', '', 0, 'http://localhost/evanjoych/?page_id=67', 0, 'page', '', 0),
(68, 1, '2017-11-30 10:58:58', '2017-11-30 10:58:58', '', 'membership account', '', 'inherit', 'closed', 'closed', '', '67-revision-v1', '', '', '2017-11-30 10:58:58', '2017-11-30 10:58:58', '', 67, 'http://localhost/evanjoych/67-revision-v1/', 0, 'revision', '', 0),
(71, 1, '2017-11-30 11:08:46', '2017-11-30 11:08:46', '', 'redeem history', '', 'publish', 'closed', 'closed', '', 'redeem-history', '', '', '2017-11-30 11:08:46', '2017-11-30 11:08:46', '', 0, 'http://localhost/evanjoych/?page_id=71', 0, 'page', '', 0),
(72, 1, '2017-11-30 11:08:46', '2017-11-30 11:08:46', '', 'redeem history', '', 'inherit', 'closed', 'closed', '', '71-revision-v1', '', '', '2017-11-30 11:08:46', '2017-11-30 11:08:46', '', 71, 'http://localhost/evanjoych/71-revision-v1/', 0, 'revision', '', 0);

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
(237, 13, 'dismissed_wp_pointers', ''),
(238, 14, 'dismissed_wp_pointers', ''),
(228, 10, 'dismissed_wp_pointers', ''),
(229, 11, 'dismissed_wp_pointers', ''),
(242, 1, 'session_tokens', 'a:4:{s:64:"1acdf2f750df6b1882817b3a1aedbc6794def1201b077e898a0bc5b260554fa8";a:4:{s:10:"expiration";i:1521952250;s:2:"ip";s:3:"::1";s:2:"ua";s:114:"Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36";s:5:"login";i:1521779450;}s:64:"ecff05b92db0facd7a341240988278e9bbdfb12b7c122af179971b556870ec44";a:4:{s:10:"expiration";i:1521952251;s:2:"ip";s:3:"::1";s:2:"ua";s:114:"Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36";s:5:"login";i:1521779451;}s:64:"fd73c0488cef5a256911d9512139e1eec85f6b5de9543ec84e7ffd8c9e491da6";a:4:{s:10:"expiration";i:1521952251;s:2:"ip";s:3:"::1";s:2:"ua";s:114:"Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36";s:5:"login";i:1521779451;}s:64:"f43b05892389af63e4a5219f135b6bbb5a036a731a2b1f5ae184236c4a0f4840";a:4:{s:10:"expiration";i:1522047066;s:2:"ip";s:3:"::1";s:2:"ua";s:114:"Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36";s:5:"login";i:1521874266;}}'),
(215, 3, 'syntax_highlighting', 'true'),
(216, 3, 'locale', ''),
(218, 4, 'syntax_highlighting', 'true'),
(217, 3, 'dismissed_wp_pointers', ''),
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
(36, 3, 'nickname', 'evan'),
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
(48, 3, 'mobile', '213243432'),
(49, 4, 'nickname', 'ranga'),
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
(61, 4, 'mobile', '232132134'),
(62, 5, 'nickname', 'seegan'),
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
(74, 5, 'mobile', '3432432434'),
(75, 6, 'nickname', 'mary'),
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
(89, 6, 'mobile', 'e34324324'),
(90, 7, 'nickname', 'hamsa'),
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
(104, 7, 'mobile', '7777777777'),
(105, 8, 'nickname', 'agalya'),
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
(116, 8, 'wp_capabilities', 'a:1:{s:6:"member";b:1;}'),
(117, 8, 'wp_user_level', '0'),
(118, 8, 'dismissed_wp_pointers', ''),
(119, 8, 'mobile', '23232321'),
(120, 9, 'nickname', 'rahul'),
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
(134, 9, 'mobile', '3432432432'),
(135, 10, 'nickname', 'samplee'),
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
(146, 10, 'wp_capabilities', 'a:0:{}'),
(147, 10, 'wp_user_level', '0'),
(148, 10, 'dismissed_wp_pointers', ''),
(149, 10, 'mobile', '2343243243'),
(150, 11, 'nickname', 'fgfdg'),
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
(164, 11, 'mobile', '5435435435'),
(165, 12, 'nickname', 'tester'),
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
(179, 12, 'mobile', '2321321321'),
(180, 13, 'nickname', 'sowmiya'),
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
(194, 13, 'mobile', '1232324242'),
(195, 14, 'nickname', 'evan'),
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
(209, 14, 'mobile', '123234324'),
(210, 2, 'syntax_highlighting', 'true'),
(211, 2, 'locale', ''),
(212, 2, 'dismissed_wp_pointers', ''),
(219, 4, 'locale', ''),
(220, 4, 'dismissed_wp_pointers', ''),
(221, 5, 'syntax_highlighting', 'true'),
(222, 5, 'locale', ''),
(223, 5, 'dismissed_wp_pointers', ''),
(224, 6, 'dismissed_wp_pointers', ''),
(225, 7, 'dismissed_wp_pointers', ''),
(226, 8, 'dismissed_wp_pointers', ''),
(227, 9, 'dismissed_wp_pointers', ''),
(230, 12, 'dismissed_wp_pointers', '');

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
(14, 'evan', '$P$BEh8Yxzcwl.gWDLWaa6y8roqCAA0UJ0', 'evan', 'evan@gmail.com', '', '2017-12-15 09:15:35', '', 0, 'evan'),
(13, 'sowmiya', '$P$B0YrbTxabS9ykONHhK1TMmf0Ocvasq0', 'sowmiya', 'sowmiya1@gmail.com', '', '2017-12-15 08:51:01', '', 0, 'sowmiya');

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
-- Indexes for table `wp_chaos_redeem_points`
--
ALTER TABLE `wp_chaos_redeem_points`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wp_chaos_credits`
--
ALTER TABLE `wp_chaos_credits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wp_chaos_credits_points`
--
ALTER TABLE `wp_chaos_credits_points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `wp_chaos_credit_notes`
--
ALTER TABLE `wp_chaos_credit_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wp_chaos_debit_notes`
--
ALTER TABLE `wp_chaos_debit_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wp_chaos_football_billing`
--
ALTER TABLE `wp_chaos_football_billing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `wp_chaos_football_team`
--
ALTER TABLE `wp_chaos_football_team`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wp_chaos_football_team_relation`
--
ALTER TABLE `wp_chaos_football_team_relation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wp_chaos_gaming_billing`
--
ALTER TABLE `wp_chaos_gaming_billing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `wp_chaos_gaming_billing_relation`
--
ALTER TABLE `wp_chaos_gaming_billing_relation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `wp_chaos_lazertag_billing`
--
ALTER TABLE `wp_chaos_lazertag_billing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `wp_chaos_members`
--
ALTER TABLE `wp_chaos_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `wp_chaos_redeem_points`
--
ALTER TABLE `wp_chaos_redeem_points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wp_chaos_setting`
--
ALTER TABLE `wp_chaos_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `wp_chaos_system`
--
ALTER TABLE `wp_chaos_system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `wp_chaos_system_allocate`
--
ALTER TABLE `wp_chaos_system_allocate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `wp_chaos_tournaments`
--
ALTER TABLE `wp_chaos_tournaments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wp_chaos_tournament_player_goal`
--
ALTER TABLE `wp_chaos_tournament_player_goal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wp_chaos_tournament_points`
--
ALTER TABLE `wp_chaos_tournament_points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wp_chaos_tournament_schedule`
--
ALTER TABLE `wp_chaos_tournament_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wp_chaos_tournament_teams`
--
ALTER TABLE `wp_chaos_tournament_teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wp_chaos_utility`
--
ALTER TABLE `wp_chaos_utility`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wp_chaos_utility_details`
--
ALTER TABLE `wp_chaos_utility_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `wp_chaos_utility_setting`
--
ALTER TABLE `wp_chaos_utility_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3335;
--
-- AUTO_INCREMENT for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;
--
-- AUTO_INCREMENT for table `wp_posts`
--
ALTER TABLE `wp_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
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
  MODIFY `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;
--
-- AUTO_INCREMENT for table `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
