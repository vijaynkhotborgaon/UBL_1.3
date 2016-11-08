-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2016 at 08:29 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dwf_ub`
--

-- --------------------------------------------------------

--
-- Table structure for table `camdetails`
--

CREATE TABLE IF NOT EXISTS `camdetails` (
`cam_id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `tel_no` varchar(256) NOT NULL,
  `alternate_no` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camdetails`
--

INSERT INTO `camdetails` (`cam_id`, `name`, `email`, `tel_no`, `alternate_no`) VALUES
(14, 'chethan', 'vijaynkhot@gmail.com', '767676786', '876786786786'),
(15, 'vijay', 'khotvijayn@gmail.com', '987876767', '9876767');

-- --------------------------------------------------------

--
-- Table structure for table `cams`
--

CREATE TABLE IF NOT EXISTS `cams` (
`cam_id` int(11) NOT NULL,
  `cam_name` varchar(256) NOT NULL,
  `cam_pword` varchar(256) NOT NULL,
  `cam_published` tinyint(1) NOT NULL,
  `modified_on` datetime NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cams`
--

INSERT INTO `cams` (`cam_id`, `cam_name`, `cam_pword`, `cam_published`, `modified_on`, `created_on`) VALUES
(14, 'chethan', 'c0e48adc07e3485370f8892ba538f3d6', 1, '2015-07-21 11:17:30', '2015-07-10 12:14:20'),
(15, 'vijay', 'c0e48adc07e3485370f8892ba538f3d6', 1, '2016-01-05 11:43:14', '2016-01-05 11:43:14');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
`company_id` int(11) NOT NULL,
  `lead_id` bigint(21) NOT NULL,
  `clogo` varchar(256) NOT NULL,
  `clogo_big` varchar(256) NOT NULL,
  `cceo` varchar(256) NOT NULL,
  `cemployees` varchar(256) NOT NULL,
  `industry_id` int(11) NOT NULL,
  `cdescription` text NOT NULL,
  `cam_id` int(11) NOT NULL,
  `unique_url` varchar(256) NOT NULL,
  `modidied_on` datetime NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `lead_id`, `clogo`, `clogo_big`, `cceo`, `cemployees`, `industry_id`, `cdescription`, `cam_id`, `unique_url`, `modidied_on`, `created_on`) VALUES
(40, 70, 'images/company/small/UB_ub-white-logo.png', '', 'vijay malhya', '2000', 5, 'airline business', 0, '0b3b504584b456deb7a92b25c380f725', '2015-08-24 12:21:23', '2015-07-07 11:59:24'),
(41, 72, 'images/company/small/wipro_906087_1551132101825615_312839238703094361_o.jpg', 'images/company/big/wipro_906087_1551132101825615_312839238703094361_o.jpg', 'vijju', '68900', 8, 'hhjhjjhj', 0, '7ab5c6b3bc914090b386225cf75dd6c8', '2015-08-13 11:18:27', '2015-08-13 11:18:27');

-- --------------------------------------------------------

--
-- Table structure for table `company_contract`
--

CREATE TABLE IF NOT EXISTS `company_contract` (
`id` int(11) NOT NULL,
  `lead_id` int(11) NOT NULL,
  `fromdate` varchar(256) NOT NULL,
  `tilldate` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_contract`
--

INSERT INTO `company_contract` (`id`, `lead_id`, `fromdate`, `tilldate`) VALUES
(34, 70, '09-07-2015', '13-04-2017'),
(35, 71, '01-07-2015', '30-06-2016'),
(36, 72, '14-08-2015', '30-09-2015'),
(37, 73, '30-03-2016', '27-05-2016');

-- --------------------------------------------------------

--
-- Table structure for table `company_industry`
--

CREATE TABLE IF NOT EXISTS `company_industry` (
`industry_id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_industry`
--

INSERT INTO `company_industry` (`industry_id`, `name`) VALUES
(1, 'Agriculture'),
(2, 'Accounting'),
(3, 'Advertising'),
(4, 'Aerospace'),
(5, 'Airline'),
(6, 'Automotive'),
(7, 'Banking'),
(8, 'Broadcasting'),
(9, 'Brokerage'),
(10, 'Biotechnology'),
(11, 'Call Centre'),
(12, 'Computer'),
(13, 'Consulting'),
(14, 'Consumer Products'),
(15, 'Cosmetics'),
(16, 'Defence'),
(17, 'Education'),
(18, 'Electronics'),
(19, 'Energy'),
(20, 'Entertainment & Leisure'),
(21, 'Financial Services'),
(22, 'Health Care'),
(23, 'Internet Publishing'),
(24, 'Investment Banking'),
(25, 'Legal'),
(26, 'Manufacturing'),
(27, 'Motion Picture & Video'),
(28, 'Music'),
(29, 'Newspaper Publishers'),
(30, 'Pharmaceuticals'),
(31, 'Real Estate'),
(32, 'Retail & Wholesale'),
(33, 'Software'),
(34, 'Sports'),
(35, 'Technology'),
(36, 'Telecommunications'),
(37, 'Television'),
(38, 'Transportation'),
(39, 'Venture Capital'),
(41, 'Beverage'),
(42, 'other');

-- --------------------------------------------------------

--
-- Table structure for table `company_lead`
--

CREATE TABLE IF NOT EXISTS `company_lead` (
`lead_id` bigint(21) NOT NULL,
  `cname` varchar(256) NOT NULL,
  `caddress` text NOT NULL,
  `cperson` varchar(256) NOT NULL,
  `cemail` varchar(256) NOT NULL,
  `cphone` varchar(256) NOT NULL,
  `cdesignation` varchar(256) NOT NULL,
  `ts_id` int(11) NOT NULL,
  `cam_id` int(11) NOT NULL,
  `status` int(3) NOT NULL,
  `modified_on` datetime NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_lead`
--

INSERT INTO `company_lead` (`lead_id`, `cname`, `caddress`, `cperson`, `cemail`, `cphone`, `cdesignation`, `ts_id`, `cam_id`, `status`, `modified_on`, `created_on`) VALUES
(70, 'UB', 'Bangalore', 'vijay', 'gfgf@gmail.com', '7788665544', 'HR', 22, 14, 1, '2015-07-07 11:57:39', '2015-07-07 11:57:39'),
(71, 'PPPHRM', 'Indiranagar', 'Anup', 'Anup@gmail.com', '123456789', 'Owner', 22, 14, 0, '2015-07-11 13:12:02', '2015-07-11 13:12:02'),
(72, 'wipro', 'bangalore', 'some1', 'vijaynkhot@gmail.com', '7676767676', 'hr', 22, 14, 1, '2015-08-13 11:14:27', '2015-08-13 11:14:27'),
(73, 'xvxf', 'jkjb', 'jhbb', 'khotvijayn@gmail.com', '767676767', 'hr', 22, 14, 0, '2016-03-28 17:14:55', '2016-03-28 17:14:55');

-- --------------------------------------------------------

--
-- Table structure for table `company_lead_mail`
--

CREATE TABLE IF NOT EXISTS `company_lead_mail` (
`id` bigint(21) NOT NULL,
  `lead_id` bigint(21) NOT NULL,
  `senddate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_lead_mail`
--

INSERT INTO `company_lead_mail` (`id`, `lead_id`, `senddate`) VALUES
(1, 6, '2015-01-14 20:02:43'),
(2, 15, '2015-01-18 22:17:24'),
(3, 15, '2015-01-18 22:18:41'),
(4, 15, '2015-01-18 22:19:14'),
(5, 15, '2015-01-18 22:24:31'),
(6, 15, '2015-01-18 22:26:21'),
(7, 16, '2015-01-19 01:23:32'),
(8, 17, '2015-01-19 03:49:10'),
(9, 10, '2015-01-19 05:53:15'),
(10, 10, '2015-01-19 05:56:32'),
(11, 8, '2015-01-19 06:30:46'),
(12, 8, '2015-01-19 06:34:14');

-- --------------------------------------------------------

--
-- Table structure for table `company_spoc`
--

CREATE TABLE IF NOT EXISTS `company_spoc` (
`spoc_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `designation` varchar(256) NOT NULL,
  `uname` varchar(256) NOT NULL,
  `pword` varchar(256) NOT NULL,
  `fpword` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_spoc`
--

INSERT INTO `company_spoc` (`spoc_id`, `company_id`, `name`, `email`, `phone`, `designation`, `uname`, `pword`, `fpword`) VALUES
(1, 3, 'Sujith', 'ssujith31@gmail.com', '+919686553971', 'Web Developer', 'company41', 'ecb97ffafc1798cd2f67fcbc37226761', 'zxczxc'),
(2, 3, 'Sujith S', 'ssujith31@gmail.com', '+919686553971', 'Web Developer', 'company42', 'ecb97ffafc1798cd2f67fcbc37226761', 'zxczxc'),
(3, 3, 'Test', 'test@company4.com', '+919686553971', 'HR', 'company43', 'ecb97ffafc1798cd2f67fcbc37226761', 'zxczxc'),
(4, 2, 'test12', 'ssujith31@gmail.com', '+919686553971', 'Web Developer', 'company3', 'ecb97ffafc1798cd2f67fcbc37226761', 'zxczxc'),
(5, 1, 'Sujith', 'ssujith31@gmail.com', '+919686553971', 'Web Developer', 'company1', 'ecb97ffafc1798cd2f67fcbc37226761', 'zxczxc'),
(6, 4, 'Sujith', 'ssujith31@gmail.com', '+919686553971', 'Web Developer', 'company51', 'ecb97ffafc1798cd2f67fcbc37226761', 'zxczxc'),
(7, 4, 'Kumar Swamy', 'ssujith31@gmail.com', '+919686553971', 'Senior Designer', 'company52', 'ecb97ffafc1798cd2f67fcbc37226761', 'zxczxc'),
(13, 5, 'Person1', 'person1@company5.com', '+919686553971', 'Manager', 'company5', 'ecb97ffafc1798cd2f67fcbc37226761', 'zxczxc'),
(14, 6, 'Vijay', 'vijay@archon.com', '08044112233', 'HR Head', 'vijaya', 'db8834197077287186e8c7524ca43d6f', 'vijaya'),
(15, 6, 'Nikhila', 'nikhila@gmail.com', '08011223344', 'HR Executive', 'nikhila', '9804c8d40072c5bb05f2248bd6caa71d', 'nikhila'),
(18, 7, 'Person1', 'ssujith38@yahoo.in', '+919686553971', 'Manager', 'company61', 'ecb97ffafc1798cd2f67fcbc37226761', 'zxczxc'),
(19, 7, 'Person2', 'ssujith31@gmail.com', '+919686553971', 'HR', 'Company62', 'ecb97ffafc1798cd2f67fcbc37226761', 'zxczxc'),
(20, 8, 'Aravind', 'arvind.kolaki@gmail.com', '08041234567', 'HR SPOC', 'ak1234', 'bc9be5bb0291dbc10dc1689c30cf0fe1', 'ak1234'),
(21, 9, 'Reddy', 'vijaynkhot@gmail.com', '7766554433', 'HR', 'vijayn39', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(22, 10, 'Person1', 'ssujith31@gmail.com', '+919686553971', 'Web Developer', 'company101', 'ecb97ffafc1798cd2f67fcbc37226761', 'zxczxc'),
(23, 10, 'Person2', 'person2@company5.com', '+919686553971', 'HR', 'company102', 'ecb97ffafc1798cd2f67fcbc37226761', 'zxczxc'),
(24, 11, 'pritam', 'khotvijayn@gmail.com', '8877669900', '8877996644', 'vijayn', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(25, 12, 'Vikash', 'vijaynkhot@gmail.com', '6677554488', 'HR', 'vijaynkhot', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(26, 13, 'Kiran', 'khotvijayn@gmail.com', '8877223344', 'HR', 'vkhot', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(27, 14, 'Aravind', 'arvind.kolaki@gmail.com', '08041234567', 'HR Manager', 'arvindk', '0720eed0bfd20d692ebcce935a83b851', 'arvindk123'),
(28, 14, 'Pankaj', 'pankaj@gmail.com', '0801234567', 'Secondary SPOC', 'pankaj', 'e5ba3e50387ab86792a8704556b238a8', 'pankaj123'),
(29, 15, 'Ankit', 'vijaynkhot@gmail.com', '776611233454', 'HR', 'vkhot39', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(30, 16, 'rajiv', 'khotvijayn@gmail.com', '8877223355', 'HR', 'vijaynkhot39', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(31, 17, 'Shahid', 'khotvijayn@gmail.com', '8877662211', 'HR', 'shahid', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(32, 18, 'Sonal', 'vijaynkhot@gmail.com', '6677553388', 'HR', 'mobinius', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(33, 19, 'kiranrao', 'vijaynkhot@gmail.com', '8877661122', 'HR', 'denorat', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(34, 20, 'jayram', 'vijaynkhot@gmail.com', '8877223382', 'HR', 'jayram', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(35, 21, 'Rahil', 'vijaynkhot@gmail.com', '7788665548', 'HR', 'xonax', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(36, 22, 'Vikash', 'vijaynkhot@gmail.com', '8877112267', 'HR', 'zerox', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(37, 23, 'arjit', 'vijaynkhot@gmail.com', '8812343443', 'HR', 'namo', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(38, 24, 'Sujith', 'ssujith31@gmail.com', '+919686553971', 'Web Developer', 'company1231', 'ecb97ffafc1798cd2f67fcbc37226761', 'zxczxc'),
(39, 24, 'Test1234', 'ssujith31@gmail.com', '+919686553971', 'Senior Designer', 'company1234', 'ecb97ffafc1798cd2f67fcbc37226761', 'zxczxc'),
(40, 25, 'Sujith', 'ssujith31@gmail.com', '+919686553971', 'Web Developer', 'company12341', 'ecb97ffafc1798cd2f67fcbc37226761', 'zxczxc'),
(41, 25, 'Sujith S', 'ssujith31@gmail.com', '+919686553971', 'Senior Designer', 'company12342', 'ecb97ffafc1798cd2f67fcbc37226761', 'zxczxc'),
(42, 26, 'jivan', 'vijaynkhot@gmail.com', '881234224', '661234096', 'toyato', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(43, 27, 'deepak', 'vijaynkhot@gmail.com', '8812309534', 'HR', 'xoax', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(44, 28, 'jeevan', 'vijaynkhot@gmail.com', '7766112345', 'HR', 'zinc', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(45, 29, 'sonal', 'vijaynkhot@gmail.com', '7723431209', '6651428345', 'taxo', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(46, 30, 'Aravind', 'arvind.kolaki@gmail.com', '08044112233', 'MD', 'akolaki', '8524642290ce7c383ceec7e336d556a5', 'akolaki123'),
(47, 31, 'Narayan', 'vijaynkhot@gmail.com', '7234568768', 'HR', 'etos', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(48, 32, 'ammy', 'vijaynkhot@gmail.com', '456876543', 'HR', 'alex', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(49, 33, 'rayhod', 'vijaynkhot39@gmail.com', '456754311111', 'HR', 'xiomi', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(50, 34, 'rao', 'vijaynkhot@gmail.com', '65434566543', 'HR', 'netset', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(51, 35, 'sujith', 'ssujith31@gmail.com', '+919686553971', 'MD', 'company71', 'ecb97ffafc1798cd2f67fcbc37226761', 'zxczxc'),
(52, 35, 'Sujith S', 'ssujith31@gmail.com', '+919686553971', 'Senior Designer', 'company72', 'ecb97ffafc1798cd2f67fcbc37226761', 'zxczxc'),
(53, 35, 'Suijth', 'ssujith31@gmail.com', '+919686553971', 'Senior Web Developer', 'company73', 'ecb97ffafc1798cd2f67fcbc37226761', 'zxczxc'),
(54, 36, 'Nutan', 'vijaynkhot@gmail.com', '7654345676', 'HR', 'razex', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(55, 37, 'remo', 'vijaynkhot@gmail.com', '76543456', 'HR', 'addex', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(56, 38, 'amar', 'vijaynkhot@gmail.com', '6543234534', 'HR', 'amazon', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(57, 39, 'mahesh', 'vijaynkhot@gmail.com', '764323456', '8765434567', 'itextech', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(58, 4, 'vijay patil', 'vijaynkhot@gmail.com', '876543456', 'hr', 'ajit', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(59, 5, 'arati', 'khotvijayn@gmail.com', '76543456', 'hr', 'arati', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(60, 6, 'vijay', 'khotvijayn@gmail.com', '76543687654', 'hr', 'vijay', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(61, 7, 'babu', 'vijaynkhot@gmail.com', '7654323456', 'hr', 'sagar', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(62, 8, 'erty', 'vijaynkhot@gmail.com', '7654345678', 'jhgfds', 'raju', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(63, 9, 'ytrrt', 'vijaynkhot@gmail.com', '45676543456', 'hr', 'raj', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(64, 10, 'hgf', 'vijaynkhot@gmail.com', '8765', 'hr', 'vij', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(65, 11, 'Person1', 'ssujith31@gmail.com', '9686553971', 'Manager', 'vash', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(66, 12, 'uyt', 'vijaynkhot@gmail.com', '765434567', 'hr', 'pravin', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(67, 13, 'kjhg', 'vijaynkhot@gmail.com', '7654356', 'hr', 'maha', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(68, 14, 'devanand', 'khotvijayn@gmail.com', '8861223320', 'HR', 'anup', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(69, 15, '', '', '', '', 'domees', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(70, 16, 'rajuuu', 'khotvijayn@gmail.com', '765432', 'hr', 'demo2', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(71, 17, 'hgf', 'vijaynkhot@gmail.com', '6543234567', 'hr', 'arjun', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(72, 18, 'olaa', 'khotvijayn@gmail.com', '7654346787654', 'hr', 'oligo', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(73, 19, 'uytr', 'khotvijayn@gmail.com', '6543234567', 'hr', 'ada', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(74, 20, 'bfd', 'khotvijayn@gmail.com', '7654346787654', 'hr', 'daamo', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(75, 21, 'demo2', 'khotvijayn@gmail.com', '876543456', 'hr', 'demo111', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(76, 21, 'M N Puttuswamy', 'm.n.puttuswamy@gmail.com', '08044112233', 'MD', 'mrf', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(77, 22, 'test', 'vijaynkhot@gmail.com', '456787654', 'hr', 'info111', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(78, 23, 'vijjju', 'vijaynkhot@gmail.com', '6543234567', 'hr', 'fizza', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(79, 24, 'dhoom', 'vijaynkhot@gmail.com', '65432345', 'hr', 'dhoom', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(80, 25, 'krish', 'vijaynkhot@gmail.com', '654567', 'hr', 'krish', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(81, 26, 'nokia', 'vijaynkhot@gmail.com', '56787654', 'hr', 'nokia', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(82, 27, 'viju', 'vijaynkhot@gmail.com', '67897654', 'hr', 'herohonda', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(83, 28, 'vijay', 'vijaynkhot@gmail.com', '76543456', 'HR', 'sony111', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(84, 29, 'vi', 'vijaynkhot@gmail.com', '56787654', 'HR', 'pizza', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(85, 30, 'king', 'vijaynkhot@gmail.com', '7654345678', 'hr', 'kingfish', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(86, 31, 'Leon', 'vijaynkhot@gmail.com', '4567654', 'hr', 'zano', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(87, 32, 'vijay', 'vijaynkhot39@gmail.com', '8765434567', 'hr', 'codac', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(88, 33, 'vijay', 'vijaynkhot@gmail.com', '7654567', 'hr', 'comp111', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(89, 34, 'deno', 'vijaynkhot@gmail.com', '7654567', 'hr', 'vrushabh', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(90, 35, 'vijay rao', 'vijaynkhot@gmail.com', '7654345678', 'hr', 'softonic', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(91, 35, 'Sachin Rao', 'vijaynkhot@gmail.com', '8765434567', 'hr', 'archon', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(92, 36, 'malhya', 'vijaynkhot@gmail.com', '678766890', 'HR', 'ubsystem', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(93, 37, 'narayan', 'vijaynkhot@gmail.com', '6798765', 'hr', 'wipro', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(94, 38, 'zarir', 'vijaynkhot@gmail.com', '7654567', 'HR', 'wipro111', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(95, 39, 'mallhya', 'vijaynkhot@gmail.com', '989898986565', 'HR', 'UB_big', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(96, 40, 'vijay', 'gfgf@gmail.com', '7788665544', 'HR', 'ub_vijay', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(97, 41, 'mallhya', 'khotvijayn@gmail.com', '7466476743', 'HR', 'ubl_vijay', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39'),
(98, 41, 'some1', 'vijaynkhot@gmail.com', '7676767676', 'hr', 'wipro1111', 'c0e48adc07e3485370f8892ba538f3d6', 'vijayn39');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE IF NOT EXISTS `complaints` (
`complaint_id` bigint(21) NOT NULL,
  `ticket` varchar(256) NOT NULL,
  `company_id` int(11) NOT NULL,
  `cam_id` int(11) NOT NULL,
  `ts_id` int(11) NOT NULL,
  `complaint_user_id` bigint(21) NOT NULL,
  `Name_emp` varchar(255) NOT NULL,
  `complaint_department` varchar(255) NOT NULL,
  `fraud_dept` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `emp_mail` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `dep_id` int(11) NOT NULL,
  `detail` text NOT NULL,
  `upload` varchar(256) NOT NULL,
  `status` int(2) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`complaint_id`, `ticket`, `company_id`, `cam_id`, `ts_id`, `complaint_user_id`, `Name_emp`, `complaint_department`, `fraud_dept`, `location`, `emp_mail`, `cat_id`, `dep_id`, `detail`, `upload`, `status`, `created_on`) VALUES
(1, 'TKT40_00001', 40, 0, 22, 0, 'Anonymous', 'Anonymous', 'IT', 'Anonymous', 'Anonymous', 3, 0, 'When did this start or happen (date & time), how frequently is this \r\nhappening, is this still ongoing? Is it happening within working hours?\r\nWhy is this happening? â€“ what has caused this? What are the \r\nconsequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or \r\nhas someone else told you about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '1_906087_1551132101825615_312839238703094361_o.jpg', 2, '2015-07-17 15:56:37'),
(2, 'TKT40_00002', 40, 0, 22, 0, 'vijay khot', 'IT', 'Finance', 'bangalore', 'vi@gmail.com', 1, 0, 'What is the issue?\r\nWho is involved and how and why?\r\nWhere is this happening? â€“ is it widespread throughout UBL or just at a \r\nparticular location?\r\nWhen did this start or happen (date & time), how frequently is this \r\nhappening, is this still ongoing? Is it happening within working hours?\r\nWhy is this happening? â€“ what has caused this? What are the \r\nconsequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or \r\nhas someone else told you about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '2_545420_485976461423527_1329632349_n.jpg', 2, '2015-07-17 15:59:09'),
(3, 'TKT40_00003', 40, 0, 22, 0, 'avadhut', 'IT', 'finance', 'bangalore', 'vi@gmail.com', 1, 0, 'aused this? What are the consequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or \r\nhas someone else told you about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '3_10356769_666337390115507_2587335551917739638_n000_001.jpg', 2, '2015-07-17 16:19:48'),
(4, 'TKT40_00004', 40, 0, 22, 0, 'arjun', 'it', 'financial', 'bangalore', 'vi@gmail.com', 1, 0, 'What is the issue?\r\nWho is involved and how and why?\r\nWhere is this happening? â€“ is it widespread throughout UBL or just at a \r\nparticular location?\r\nWhen did this start or happen (date & time), how frequently is this \r\nhappening, is this still ongoing? Is it happening within working hours?\r\nWhy is this happening? â€“ what has caused this? What are the \r\nconsequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or \r\nhas someone else told you about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '4_1779268_219151748288615_1206535492_n.jpg', 2, '2015-07-17 16:32:22'),
(5, 'TKT40_00005', 40, 0, 22, 0, 'ashutosh', 'IT', 'financial', 'bangalore', 'vi@gmail.com', 1, 0, 'What is the issue?\r\nWho is involved and how and why?\r\nWhere is this happening? â€“ is it widespread throughout UBL or just at a \r\nparticular location?\r\nWhen did this start or happen (date & time), how frequently is this \r\nhappening, is this still ongoing? Is it happening within working hours?\r\nWhy is this happening? â€“ what has caused this? What are the \r\nconsequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or \r\nhas someone else told you about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '5_968803_486658034750111_1996547297_n.jpg', 2, '2015-07-17 16:38:06'),
(6, 'TKT40_00006', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'uyty', '', 2, '2015-07-20 14:21:33'),
(7, 'TKT40_00007', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'When did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working hours?\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '', 2, '2015-07-20 17:59:31'),
(8, 'TKT40_00008', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'Who is involved and how and why?\r\nWhere is this happening? â€“ is it widespread throughout UBL or just at a particular location?\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working hours?\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '', 2, '2015-07-20 18:06:38'),
(9, 'TKT40_00009', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'What is the issue?\r\nWho is involved and how and why?\r\nWhere is this happening? â€“ is it widespread throughout UBL or just at a particular location?\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working hours?\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '', 2, '2015-07-20 18:10:15'),
(10, 'TKT40_00010', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'What is the issue?\r\nWho is involved and how and why?\r\nWhere is this happening? â€“ is it widespread throughout UBL or just at a particular location?\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working hours?\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '', 2, '2015-07-20 18:18:32'),
(11, 'TKT40_00011', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'What is the issue?\r\nWho is involved and how and why?\r\nWhere is this happening? â€“ is it widespread throughout UBL or just at a particular location?\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working hours?\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '', 2, '2015-07-20 18:19:52'),
(12, 'TKT40_00012', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, '1) What is the issue?\r\n2) Who is involved and how and why?\r\n3) Where is this happening? â€“ is it widespread throughout UBL or just at a particular location?\r\n4) When did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working hours?\r\n5) Why is this happening? â€“ what has caused this? What are the consequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '', 0, '2015-07-20 18:22:46'),
(13, 'TKT40_00013', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'i have document on the flower and that is because of tha satisfaction area:\r\n\r\n1 )What is the issue?\r\n2) Who is involved and how and why?\r\n3)When did this start or happen (date & time), how frequently is this happening, is \r\nthis still ongoing? Is it happening within working hours?\r\n\r\nMy Resolutions:\r\n1)What is the scale of the damage or loss due to this issue?\r\n2)Has this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '', 0, '2015-07-20 18:31:32'),
(14, 'TKT40_00014', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'What is the issue? Who is involved and how and \r\nwhy?Where is this happening? â€“ is it widespre\r\nad throughout UBL or just at a particular location?When did this stjxahsjknj\r\nart or happen (date &', '', 0, '2015-07-20 18:33:26'),
(15, 'TKT40_00015', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'What is the issue?\r\nWho is involved and how and why?\r\nWhere is this happening? â€“ is it widespread throughout UBL or just at a particular location?\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working hours?\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '', 0, '2015-07-20 20:59:33'),
(16, 'TKT40_00016', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'What is the issue?\r\nWho is involved and how and why?\r\nWhere is this happening? â€“ is it widespread throughout UBL or just at a particular location?\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working hours?\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '', 0, '2015-07-20 21:00:47'),
(17, 'TKT40_00017', 40, 0, 22, 0, 'vijay khot', 'IT', 'IT', 'bangalore', 'vi@gmail.com', 10, 0, 'ho is involved and how and why?\r\nWhere is this happening? â€“ is it widespread throughout UBL or just at a particular location?\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working hours?\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '17_zipped.zip', 1, '2015-07-20 21:08:04'),
(18, 'TKT40_00018', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'Where is this happening? â€“ is it widespread throughout UBL or just at a particular location?\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working hours?\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '18_11nano1.jpg', 1, '2015-07-20 21:13:15'),
(20, 'TKT40_00020', 40, 0, 22, 0, 'rahul', 'IT', 'finance', 'bangalore', 'vi@gmail.com', 1, 0, 'Where is this happening? â€“ is it widespread throughout UBL or just at a particular location?\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working hours?\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '20_906087_1551132101825615_312839238703094361_o.jpg', 2, '2015-07-21 10:03:33'),
(21, 'TKT40_00021', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'hbvv', '', 0, '2015-07-21 11:36:11'),
(22, 'TKT40_00022', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'hbjhb', '', 0, '2015-07-21 11:41:09'),
(23, 'TKT40_00023', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'n nm nm', '', 0, '2015-07-21 11:41:27'),
(24, 'TKT40_00024', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'jhbbh', '', 0, '2015-07-21 11:46:06'),
(25, 'TKT40_00025', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'hgvghf', '', 0, '2015-07-21 11:51:02'),
(26, 'TKT40_00026', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'bb bn bn', '', 0, '2015-07-21 11:51:13'),
(27, 'TKT40_00027', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'n nb  n', '', 0, '2015-07-21 11:56:33'),
(28, 'TKT40_00028', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'bn  b', '', 0, '2015-07-21 12:05:21'),
(29, 'TKT40_00029', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'bbbnnb', '29_545420_485976461423527_1329632349_n.jpg', 0, '2015-07-21 12:07:25'),
(30, 'TKT40_00030', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'nbnnbnb', '', 0, '2015-07-21 12:08:53'),
(31, 'TKT40_00031', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'nbnnbnb', '', 0, '2015-07-21 12:19:45'),
(32, 'TKT40_00032', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'vbv', '32_906087_1551132101825615_312839238703094361_o.jpg', 0, '2015-07-21 12:42:15'),
(33, 'TKT40_00032', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'hjbjhbhbhj', '', 0, '2015-07-21 13:32:16'),
(34, 'TKT40_00033', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'hgvhvvghv\r\n this happening? â€“ is it widespread throughout UBL or just at a particular location?\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working hours?\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '34_906087_1551132101825615_312839238703094361_o.jpg', 0, '2015-07-21 13:40:13'),
(35, 'TKT40_00034', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'nkjnnjknknk', '', 0, '2015-07-21 13:50:24'),
(36, 'TKT40_00035', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'jknknj', '', 0, '2015-07-21 14:01:50'),
(37, 'TKT40_00036', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'kjnkjnkjn', '37_11nano1.jpg', 0, '2015-07-21 14:02:02'),
(38, 'TKT40_00037', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'jhbjhbhjb', '38_11nano1.jpg', 0, '2015-07-21 14:20:32'),
(39, 'TKT40_00038', 40, 0, 22, 0, 'prakash', 'IT', 'financial', 'bangalore', 'vi@gmail.com', 1, 0, 'What is the issue?\r\nWho is involved and how and why?\r\nWhere is this happening? â€“ is it widespread throughout UBL or just at a particular location?\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working hours?\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '39_zipped.zip', 0, '2015-07-21 16:43:19'),
(40, 'TKT40_00039', 40, 0, 22, 0, 'Anonymous', 'Anonymous', 'it', 'Anonymous', 'Anonymous', 1, 0, 'What is the issue?\r\nWho is involved and how and why?\r\nWhere is this happening? â€“ is it widespread throughout UBL or just at a particular location?\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working hours?\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '40_zipped.zip', 0, '2015-07-21 16:45:20'),
(41, 'TKT40_00040', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'i m vijay.\r\nmy name is asdah.\r\nthis jashd jhah aa ajhdashdashjhd jadashd asbdasgd gasdjah kjasjhdjh jajashjhd \r\nsahdhasb hjsdash sdashd jhasdhsa hasdasdga asdhb\r\nsabdasbhdas asdabs dsadhasbd asdghjabd dasjdasbd asdasbd sandbsa djhsabhdbasd jasbdhjasb jhsabhdbsababd hdsbdhabads\r\njsbdasb sadjhsa sajdhjash\r\n\r\nasdbasbj\r\nthank u..\r\nvijay', '41_zipped.zip', 0, '2015-07-21 17:00:55'),
(42, 'TKT40_00041', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'he issue?\r\nWho is involved and how and why?\r\nWhere is this happening? â€“ is it widespread throughout UBL or just at a particular location?\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working hours?\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '42_zipped.zip', 0, '2015-07-21 17:14:47'),
(43, 'TKT40_00042', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'What is the issue?\r\nWho is involved and how and why?\r\nWhere is this happening? â€“ is it widespread throughout UBL or just at a particular location?\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working hours?\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '', 0, '2015-07-21 17:27:47'),
(44, 'TKT40_00043', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'What is the issue?\r\nWho is involved and how and why?\r\nWhere is this happening? â€“ is it widespread throughout UBL or just at a particular location?\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working hours?\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '', 0, '2015-07-21 17:30:14'),
(45, 'TKT40_00044', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'What is the issue?\r\nWho is involved and how and why?\r\nWhere is this happening? â€“ is it widespread throughout UBL or just at a particular location?\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working hours?\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '45_zipped.zip', 0, '2015-07-21 17:41:47'),
(46, 'TKT40_00045', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '', 0, '2015-08-02 20:18:51'),
(47, 'TKT40_00046', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '', 0, '2015-08-02 20:39:25'),
(48, 'TKT40_00047', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '48_545420_485976461423527_1329632349_n.jpg', 0, '2015-08-02 22:46:51'),
(49, 'TKT40_00048', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'ening? â€“ what has caused this? What are the consequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '', 0, '2015-08-04 13:15:36'),
(50, 'TKT40_00049', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'it directly yourself or has someone else told you about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '50_545420_485976461423527_1329632349_n.jpg', 0, '2015-08-04 13:19:41'),
(51, 'TKT40_00050', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'it directly yourself or has someone else told you about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '51_545420_485976461423527_1329632349_n.jpg', 0, '2015-08-04 13:21:25'),
(52, 'TKT40_00051', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'ppen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working hours?\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?\r\nAre you involved in this incident in any way? If so, how?', '52_545420_485976461423527_1329632349_n.jpg', 0, '2015-08-04 13:26:48'),
(53, 'TKT40_00052', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'Where is this happening? â€“ is it widespread throughout UBL or just at a particular location?  <br />\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working hours?  <br />\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?  <br />\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?  <br />\r\nWhat is the scale of the damage or loss due to this issue?  <br />\r\nHas this been reported before? To whom? What action was taken?  <br />\r\nAre you involved in this incident in any way? If so, how?', '53_545420_485976461423527_1329632349_n.jpg', 0, '2015-08-04 13:55:58'),
(54, 'TKT40_00053', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 's happening? â€“ is it widespread throughout UBL or just at a particular location?  <br />\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working hours?  <br />\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?  <br />\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?  <br />\r\nWhat is the scale of the damage or loss due to this issue?  <br />\r\nHas this been reported before? To whom? What action was taken?  <br />\r\nAre you involved in this incident in any way? If so, how?', '54_545420_485976461423527_1329632349_n.jpg', 0, '2015-08-04 14:01:48'),
(55, 'TKT40_00054', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'ened? Have you seen it directly yourself or has someone else told you about this issue?<br />\r\nWhat is the scale of the damage or loss due to this issue?<br />\r\nHas this been reported before? To whom? What action was taken?<br />\r\nAre you involved in this incident in any way? If so, ho', '', 0, '2015-08-11 12:31:11'),
(102, 'TKT40_00101', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'Where is this happening? â€“ is it widespread<br />\r\nthroughout UBL or just at a particular location?<br />\r\nWhen did this start or happen (date & time), how<br />\r\nfrequently is this happening, is this still<br />\r\nongoing? Is it happening within working hours?<br />\r\nWhy is this happening? â€“ what has caused this?<br />\r\nWhat are the consequences of this?<br />\r\nHow do you know this has happened? Have you seen<br />\r\nit directly yourself or has someone else told you<br />\r\nabout this issue?<br />\r\nWhat is the scale of the damage or loss due to<br />\r\nthis issue?<br />\r\nHas this been reported before? To whom? What<br />\r\naction was taken?', '', 0, '2015-08-17 18:31:22'),
(103, 'TKT40_00102', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, '<br />\r\n    What is the issue?<br />\r\n    Who is involved and how and why?<br />\r\n    Where is this happening? â€“ is it widespread<br />\r\nthroughout UBL or just at a particular location?<br />\r\n    When did this start or happen (date & time),<br />\r\nhow frequently is this happening, is this still<br />\r\nongoing? Is it happening within working hours?<br />\r\n    Why is this happening? â€“ what has caused this?<br />\r\nWhat are the consequences of this?<br />\r\n    How do you know this has happened? Have you<br />\r\nseen it directly yourself or has someone else told<br />\r\nyou about this issue?<br />\r\n    What is the scale of the damage or loss due to<br />\r\nthis issue?<br />\r\n    Has this been reported before? To whom? What<br />\r\naction was taken?<br />\r\n', '', 0, '2015-08-17 18:41:01'),
(104, 'TKT40_00103', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'What is the issue?<br />\r\n    Who is involved<br />\r\nand how and why?<br />\r\n    Where is this<br />\r\nhappening? â€“ is it<br />\r\nwidespread<br />\r\nthroughout UBL or<br />\r\njust at a particular<br />\r\nlocation?<br />\r\n    When did this<br />\r\nstart or happen<br />\r\n(date & time), how<br />\r\nfrequently is this<br />\r\nhappening, is this<br />\r\nstill ongoing? Is it<br />\r\nhappening within<br />\r\nworking hours?<br />\r\n    Why is this<br />\r\nhappening? â€“ what<br />\r\nhas caused this?<br />\r\nWhat are the<br />\r\nconsequences of<br />\r\nthis?<br />\r\n    How do you know<br />\r\nthis has happened?<br />\r\nHave you seen it<br />\r\ndirectly yourself or<br />\r\nhas someone else<br />\r\ntold you about this<br />\r\nissue?<br />\r\n    What is the<br />\r\nscale of the damage<br />\r\nor loss due to this<br />\r\nissue?<br />\r\n    Has this been<br />\r\nreported before? To<br />\r\nwhom? What action<br />\r\nwas taken?<br />\r\n', '', 0, '2015-08-17 18:46:38'),
(105, 'TKT40_00104', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'What is the issue?<br />\r\n    Who is involved and how and why?<br />\r\n    Where is this happening? â€“ is it widespread throughout UBL or just at a particular location?<br />\r\n    When did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working hours?<br />\r\n    Why is this happening? â€“ what has caused this? What are the consequences of this?<br />\r\n    How do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?<br />\r\n    What is the scale of the damage or loss due to this issue?<br />\r\n    Has this been reported before? To whom? What action was taken?<br />\r\n', '', 0, '2015-08-17 18:48:05'),
(106, 'TKT40_00105', 40, 0, 22, 0, 'vijju', 'jh', 'hjb', 'hjh', 'vijay@gmail.com', 1, 0, '<br />\r\n    What is the issue?<br />\r\n    Who is involved and how and why?<br />\r\n    Where is this happening? â€“ is it widespread throughout UBL or just at a particular location?<br />\r\n    When did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working hours?<br />\r\n    Why is this happening? â€“ what has caused this? What are the consequences of this?<br />\r\n    How do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?<br />\r\n    What is the scale of the damage or loss due to this issue?<br />\r\n    Has this been reported before? To whom? What action was taken?<br />\r\n', '', 0, '2015-08-17 18:50:57'),
(107, 'TKT40_00106', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'What is the issue?<br />\r\nWho is involved and how and why?<br />\r\nWhere is this happening? â€“ is it widespread throughout UBL or just at a particular location?<br />\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working hours?<br />\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?<br />\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?<br />\r\nWhat is the scale of the damage or loss due to this issue?<br />\r\nHas this been reported before? To whom? What action was taken?', '', 0, '2015-08-17 22:37:22'),
(108, 'TKT40_00107', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'hgghjg', '108_545420_485976461423527_1329632349_n.jpg', 0, '2015-08-26 11:36:07'),
(109, 'TKT40_00108', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'hgghjg', '109_545420_485976461423527_1329632349_n.jpg', 0, '2015-08-26 11:37:43'),
(110, 'TKT40_00109', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'e is this happening? â€“ is it widespread throughout UBL or just at a particular location?<br />\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working <br />\r\nhours?<br />\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?<br />\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?<br />\r\nWhat is the scale of the damage or loss due to this issue?<br />\r\nHas this been reported before? To whom? What action wa', '', 2, '2015-08-31 15:27:12'),
(111, 'TKT40_00110', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'e is this happening? â€“ is it widespread throughout UBL or just at a particular location?<br />\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working <br />\r\nhours?<br />\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?<br />\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?<br />\r\nWhat is the scale of the damage or loss due to this issue?<br />\r\nHas this been reported before? To whom? What action wa', '', 0, '2015-08-31 15:29:03'),
(112, 'TKT40_00111', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'e is this happening? â€“ is it widespread throughout UBL or just at a particular location?<br />\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working <br />\r\nhours?<br />\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?<br />\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?<br />\r\nWhat is the scale of the damage or loss due to this issue?<br />\r\nHas this been reported before? To whom? What action wa', '', 0, '2015-08-31 15:29:42'),
(113, 'TKT40_00112', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'e is this happening? â€“ is it widespread throughout UBL or just at a particular location?<br />\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working <br />\r\nhours?<br />\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?<br />\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?<br />\r\nWhat is the scale of the damage or loss due to this issue?<br />\r\nHas this been reported before? To whom? What action wa', '', 0, '2015-08-31 15:30:19'),
(114, 'TKT40_00113', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'e is this happening? â€“ is it widespread throughout UBL or just at a particular location?<br />\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working <br />\r\nhours?<br />\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?<br />\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?<br />\r\nWhat is the scale of the damage or loss due to this issue?<br />\r\nHas this been reported before? To whom? What action wa', '', 2, '2015-08-31 15:31:51'),
(115, 'TKT40_00114', 40, 0, 22, 0, 'jhbh', 'hbb', 'hbhb', 'bb', 'bhbb', 1, 0, 'hbhbhb', '', 0, '2015-08-31 16:36:14'),
(116, 'TKT40_00115', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'hjvhjvhvhv', '', 0, '2015-08-31 16:44:40'),
(117, 'TKT40_00116', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'hjbjhbhjb', '', 0, '2015-08-31 16:45:37'),
(118, 'TKT40_00117', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'ggvghv', '', 0, '2015-09-01 10:47:30'),
(119, 'TKT40_00118', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'hjkhjkh', '', 3, '2015-09-01 11:22:17'),
(120, 'TKT40_00119', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'jdbfhjdsf hjbhgg', '', 3, '2015-09-01 11:23:54'),
(121, 'TKT40_00120', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'hdsgucgdshu', '', 2, '2015-09-02 16:28:07'),
(122, 'TKT40_00121', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'hdsgucgdshu', '', 2, '2015-09-02 16:32:43'),
(123, 'TKT40_00122', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'hdsgucgdshuxkjcn', '', 3, '2015-09-02 16:33:05'),
(124, 'TKT40_00123', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'jhvjhgv', '', 3, '2015-09-03 21:29:05'),
(125, 'TKT40_00124', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 's the issue?<br />\r\nWho is involved and how and why?<br />\r\nWhere is this happening? â€“ is it widespread throughout the company or just at a particular location?<br />\r\nWhen did this start or happen(date & time), how frequently is this happening, is this still ongoing? Is it happening within working <br />\r\nhours?<br />\r\nWhy is this happening? â€“ what has caused this? Wh', '', 3, '2015-09-09 11:55:13'),
(126, 'TKT40_00125', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 's the issue?<br />\r\nWho is involved and how and why?<br />\r\nWhere is this happening? â€“ is it widespread throughout the company or just at a particular location?<br />\r\nWhen did this start or happen(date & time), how frequently is this happening, is this still ongoing? Is it happening within working <br />\r\nhours?<br />\r\nWhy is this happening? â€“ what has caused this? Wh', '', 3, '2015-09-09 12:00:41'),
(127, 'TKT40_00080', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'What is the issue?<br />\r\nWho is involved and how and why?', '127_Cbc-logo.png', 0, '2015-09-24 10:23:07'),
(128, 'TKT40_00081', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 's caused this? What are the consequences of this?<br />\r\nHow do you know this has happened? Hav', 'TKT40_00081_download.jpg', 0, '2015-09-24 10:42:54'),
(129, 'TKT40_00082', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'Has this been reported before? To whom? What action was taken?', 'TKT40_00082_Cbc-logo.png', 0, '2015-09-24 10:48:18'),
(130, 'TKT40_00083', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'Has this been reported before? To whom? What action was taken?', 'TKT40_00083_2mb video[3].mp4', 0, '2015-09-24 10:52:07'),
(131, 'TKT40_00084', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working hours?<br />\r\nWhy is this happening? What has caused this? What are the consequences of this?<br />\r\nHow do you know this has happened? ', 'TKT40_00084_2mb video[3].mp4', 0, '2015-09-25 10:01:49'),
(132, 'TKT40_00085', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'are logging in a genuine case and NOT misusing this portal to malign, victimize, retaliate or take revenge on any UBL employee. Any employee, who registers a case with mala fide intentions and which<br />\r\nis subsequently found to be false will be subject to strict disciplinary action as per the UBL disciplinary framework.<br />\r\nAlthough UBL accepts anonymously reported cases, it encourages itâ€™s employees to disclose their identity while registering the case and assures them of confidentiality and protection as per the<br />\r\nSPEAKUP POLICY as this will help conduct the investigations more accurately and objectively.<br />\r\nYour personal details are safe with us. Even if you disclose your identity while registering your case, we will keep your identity confidential and only report the case details to UBL*. In case UBL<br />\r\nrequests for more', 'TKT40_00085_Cbc-logo.png', 2, '2015-09-28 17:33:37'),
(133, 'TKT40_00086', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, '1) Please make sure that you are logging in a genuine case and NOT misusing this portal to malign, victimize, retaliate or take <br />\r\nrevenge on any UBL employee. Any employee, who registers a case with mala fide intentions and which is subsequently found <br />\r\nto be false will be subject to strict disciplinary action as per the UBL disciplinary framework.<br />\r\nAlthough UBL accepts anonymously reported cases, it encourages itâ€™s employees to disclose their identity while registering the <br />\r\ncase and assures them of confidentiality and protection as per the SPEAKUP POLICY as this will help conduct the investigations <br />\r\nmore accurately and objectively.<br />\r\n2) Your personal details are safe with us. Even if you disclose your identity while registering your case, we will keep your identity <br />\r\nconfidential and only repor', '', 0, '2015-09-30 16:12:21'),
(134, 'TKT40_00087', 40, 0, 22, 0, 'vijay', 'It', 'IT', 'bangalore', 'vi@gmail.com', 8, 0, 'test case 1', '', 0, '2015-11-12 13:59:57'),
(135, 'TKT40_00088', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'ggfgf', '', 0, '2015-11-12 15:22:26'),
(136, 'TKT40_00089', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'ggfgf', '', 0, '2015-11-12 15:25:02'),
(137, 'TKT40_00090', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'ggfgfhjghg', '', 0, '2015-11-12 15:26:21'),
(138, 'TKT40_00091', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'test 1', '', 0, '2016-01-05 11:49:14'),
(139, 'TKT40_00092', 40, 0, 22, 0, 'vijay', 'IT', 'IT', 'bangalore', 'khotvijayn@gmail.com', 1, 0, 'test 2', '', 0, '2016-01-05 12:10:05'),
(140, 'TKT40_00093', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'ddd', 'TKT40_00093_flow.docx', 2, '2016-03-24 11:01:05'),
(141, 'TKT40_00094', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'rrrrrreeeeee', 'TKT40_00094_TKT40_00002_Salary Issue.pdf.pdf', 2, '2016-03-24 11:42:06'),
(142, 'TKT40_00095', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'cvg', '', 0, '2016-03-28 16:25:32'),
(143, 'TKT40_00096', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'cvg', '', 0, '2016-03-28 16:28:16'),
(144, 'TKT40_00097', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'cvg', '', 0, '2016-03-28 16:59:06'),
(145, 'TKT40_00098', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'cvgsdsd', '', 0, '2016-03-28 17:38:30'),
(146, 'TKT40_00099', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'cvgsdsd', '', 0, '2016-03-28 17:39:50'),
(147, 'TKT40_00100', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'sm', '', 0, '2016-04-18 15:42:32'),
(148, 'TKT40_00101', 40, 0, 22, 0, 'Anonymous', 'Anonymous', '', 'Anonymous', 'Anonymous', 1, 0, 'sm', '', 0, '2016-04-18 15:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `complaints_reply`
--

CREATE TABLE IF NOT EXISTS `complaints_reply` (
`id` bigint(21) NOT NULL,
  `complaint_id` bigint(21) NOT NULL,
  `user_id` bigint(21) NOT NULL,
  `cam_id` bigint(21) NOT NULL,
  `ts_id` bigint(21) NOT NULL,
  `spoc_id` bigint(21) NOT NULL,
  `status` int(2) NOT NULL,
  `msg` text NOT NULL,
  `attachment` varchar(256) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=212 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints_reply`
--

INSERT INTO `complaints_reply` (`id`, `complaint_id`, `user_id`, `cam_id`, `ts_id`, `spoc_id`, `status`, `msg`, `attachment`, `created_on`) VALUES
(146, 17, 0, 14, 0, 0, 6, 'Hi vijay khot \r\n\r\nsend more details\r\n\r\nthank you...', '', '2015-07-20 21:08:36'),
(147, 0, 100, 0, 0, 0, 6, 'hi..\r\n\r\nhere is file attached...\r\n\r\nthank you..', '_545420_485976461423527_1329632349_n.jpg', '2015-07-20 21:09:52'),
(148, 9, 0, 0, 0, 96, 1, '', '', '2015-07-20 21:10:40'),
(149, 9, 0, 0, 0, 96, 1, '', '', '2015-07-20 21:12:11'),
(150, 18, 0, 0, 0, 96, 1, '', '', '2015-07-20 21:13:31'),
(151, 19, 0, 0, 0, 96, 1, '', '', '2015-07-20 21:15:18'),
(152, 19, 0, 14, 0, 0, 6, 'Hi rakesh \r\n\r\nhello,,\r\n\r\nsend more details..\r\nthank you...', '', '2015-07-20 21:16:20'),
(153, 19, 100, 0, 0, 0, 6, 'here attached...', '19_545420_485976461423527_1329632349_n.jpg', '2015-07-20 21:16:34'),
(154, 19, 0, 0, 0, 96, 1, '', '', '2015-07-20 21:17:32'),
(155, 17, 0, 0, 0, 96, 1, '', '', '2015-07-20 21:18:12'),
(156, 19, 0, 0, 0, 96, 2, '', '', '2015-07-20 23:59:45'),
(157, 18, 0, 0, 0, 96, 1, 'want  more details on this complaint..', '', '2015-07-21 09:53:42'),
(158, 20, 0, 0, 0, 96, 1, 'required more details for further investigation.\r\nplease provide more details Accordingly.', '', '2015-07-21 10:04:31'),
(159, 20, 0, 14, 0, 0, 6, 'Hi rahul \r\n\r\nCan you please provide more details of your complaint.\r\nit is necessory for further investigation.\r\n\r\nthank you.', '', '2015-07-21 10:13:06'),
(160, 20, 100, 0, 0, 0, 6, 'here is details...\r\ni m Attaching picture that i have taken in this departmen t.', '20_1779268_219151748288615_1206535492_n.jpg', '2015-07-21 10:13:50'),
(163, 20, 0, 0, 0, 96, 2, '', '', '2015-07-21 13:12:30'),
(164, 17, 0, 14, 0, 0, 6, 'Hi vijay khot \r\n\r\nplease provide more details for this compalint...\r\n\r\nthank you.', '', '2015-07-25 11:40:02'),
(165, 39, 0, 14, 0, 0, 6, 'Hi prakash \r\nwant more details..', '', '2015-08-05 18:03:00'),
(166, 56, 0, 0, 0, 96, 2, '', '', '2015-08-14 12:25:00'),
(167, 39, 0, 14, 0, 0, 6, 'Hi prakash \r\nsend more..\r\n', '', '2015-08-17 16:55:42'),
(168, 39, 0, 14, 0, 0, 6, 'Hi prakash \r\nsend more..\r\n', '', '2015-08-17 16:56:32'),
(169, 106, 0, 14, 0, 0, 6, 'Hi vijju \r\n\r\n    What is the issue?\r\n    Who is involved and how and why?\r\n    Where is this happening? â€“ is it widespread throughout UBL or just at a particular location?\r\n    When did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working hours?\r\n    Why is this happening? â€“ what has caused this? What are the consequences of this?\r\n    How do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?\r\n    What is the scale of the damage or loss due to this issue?\r\n    Has this been reported before? To whom? What action was taken?\r\n\r\n', '', '2015-08-17 18:52:22'),
(170, 106, 0, 0, 0, 96, 0, 'What is the issue?\r\nWho is involved and how and why?\r\nWhere is this happening? â€“ is it widespread throughout UBL or just at a particular location?\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is \r\nit happening within working hours?\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told \r\nyou about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?', '', '2015-08-17 22:22:27'),
(171, 106, 0, 0, 0, 96, 0, 'What is the issue?\r\nWho is involved and how and why?\r\nWhere is this happening? â€“ is it widespread throughout UBL or just at a particular location?\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is \r\nit happening within working hours?\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told \r\nyou about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?', '', '2015-08-17 22:29:38'),
(172, 107, 0, 0, 0, 96, 0, 'hat is the issue?\r\nWho is involved and how and why?\r\nWhere is this happening? â€“ is it widespread throughout UBL or just at a particular location?\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is \r\nit happening within working hours?\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told \r\nyou about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?', '', '2015-08-17 22:37:55'),
(173, 107, 0, 0, 0, 96, 0, 'What is the issue?\r\nWho is involved and how and why?\r\nWhere is this happening? â€“ is it widespread throughout UBL or just at a particular location?\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is \r\nit happening within working hours?\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told \r\nyou about this issue?\r\nWhat is the scale of the damage or loss due to this issue?\r\nHas this been reported before? To whom? What action was taken?', '', '2015-08-17 22:53:34'),
(174, 107, 0, 0, 0, 96, 0, 'What is the issue?<br />\r\nWho is involved and how and why?<br />\r\nWhere is this happening? â€“ is it widespread throughout UBL or just at a particular location?<br />\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is <br />\r\nit happening within working hours?<br />\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?<br />\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told <br />\r\nyou about this issue?<br />\r\nWhat is the scale of the damage or loss due to this issue?<br />\r\nHas this been reported before? To whom? What action was taken?', '', '2015-08-17 22:57:53'),
(175, 106, 0, 14, 0, 0, 6, 'Hi vijju ,<br />\r\nshghjs<br />\r\nsjhdsh', '', '2015-08-17 23:07:39'),
(176, 106, 0, 14, 0, 0, 6, 'Hi vijju ,<br />\r\nWhat is the issue?<br />\r\nWho is involved and how and why?<br />\r\nWhere is this happening? â€“ is it widespread throughout UBL or just at a particular location?<br />\r\nWhen did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working hours?<br />\r\nWhy is this happening? â€“ what has caused this? What are the consequences of this?<br />\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?<br />\r\nWhat is the scale of the damage or loss due to this issue?<br />\r\nHas this been reported before? To whom? What action was taken?', '', '2015-08-17 23:08:16'),
(177, 106, 0, 14, 0, 0, 6, 'Hi vijju ,<br />\r\nhjsgda sdgas sagdyusagd sadgyuasd sadyuasg dsafdysa jhdgyusag<br />\r\ndsayugdahs sagdsa dsagdyusadsadgsauyd dyusagyudgas dashgdyuas sagdyusag<br />\r\ndhsaydgas dsagdyusgad sdsuahdu<br />\r\ntahnk u..', '', '2015-08-17 23:13:18'),
(178, 106, 100, 0, 0, 0, 6, 'hello,<br />\r\nHow do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?<br />\r\nWhat is the scale of the damage or loss due to this issue?<br />\r\nHas this been reported before? To whom? What action was taken', '', '2015-08-17 23:13:50'),
(179, 106, 0, 14, 0, 0, 6, 'Hi vijju <br />\r\ndjshiud<br />\r\nsdisjioj', '', '2015-08-18 10:22:13'),
(180, 124, 0, 0, 0, 96, 3, '', '', '2015-09-08 12:49:53'),
(181, 123, 0, 0, 0, 96, 3, '', '', '2015-09-08 12:50:52'),
(182, 122, 0, 0, 0, 96, 0, '', '', '2015-09-09 11:46:13'),
(183, 122, 0, 0, 0, 96, 2, '', '', '2015-09-09 11:46:23'),
(184, 121, 0, 0, 0, 96, 2, '', '', '2015-09-09 11:47:20'),
(185, 126, 0, 0, 0, 96, 3, '', '', '2015-09-09 13:02:19'),
(186, 125, 0, 0, 0, 96, 3, '', '', '2015-09-09 13:02:35'),
(187, 120, 0, 0, 0, 96, 3, '', '', '2015-09-09 13:02:51'),
(188, 119, 0, 0, 0, 96, 3, '', '', '2015-09-09 13:15:21'),
(189, 1, 0, 0, 0, 96, 2, '', '', '2015-09-09 16:49:15'),
(190, 2, 0, 0, 0, 96, 2, '', '', '2015-09-09 16:49:29'),
(191, 3, 0, 0, 0, 96, 2, '', '', '2015-09-09 16:49:42'),
(192, 4, 0, 0, 0, 96, 2, '', '', '2015-09-09 16:49:53'),
(193, 5, 0, 0, 0, 96, 2, '', '', '2015-09-09 16:50:03'),
(194, 6, 0, 0, 0, 96, 2, '', '', '2015-09-09 16:50:12'),
(195, 7, 0, 0, 0, 96, 2, '', '', '2015-09-09 16:50:22'),
(196, 8, 0, 0, 0, 96, 2, '', '', '2015-09-09 16:50:31'),
(197, 9, 0, 0, 0, 96, 2, '', '', '2015-09-09 16:50:45'),
(198, 10, 0, 0, 0, 96, 2, '', '', '2015-09-09 16:50:55'),
(199, 11, 0, 0, 0, 96, 2, '', '', '2015-09-09 16:51:04'),
(200, 110, 0, 0, 0, 96, 2, '', '', '2015-09-11 10:48:24'),
(201, 114, 0, 0, 0, 96, 2, '', '', '2015-09-11 10:49:04'),
(202, 106, 0, 14, 0, 0, 6, 'Hi vijju,<br />\r\n<br />\r\ndetails', '', '2015-09-16 11:39:06'),
(203, 132, 0, 0, 0, 96, 2, '', '', '2015-09-28 17:34:19'),
(204, 133, 0, 0, 0, 96, 0, 'require more', '', '2015-09-30 16:30:41'),
(205, 133, 0, 0, 0, 96, 0, 'test', '', '2015-09-30 17:06:21'),
(206, 134, 0, 0, 0, 96, 0, 'details required..', '', '2015-11-12 14:05:49'),
(207, 138, 0, 0, 0, 96, 0, 'want more details..', '', '2016-01-05 11:49:38'),
(208, 139, 0, 0, 0, 96, 0, 'more details required...', '', '2016-01-05 12:11:21'),
(209, 139, 0, 14, 0, 0, 6, 'Hi vijay [ Edit Your Mail Here ]<br />\r\n<br />\r\nwe need more dtails..', '', '2016-01-05 12:13:08'),
(210, 140, 0, 0, 0, 96, 2, '', '', '2016-03-24 11:01:27'),
(211, 141, 0, 0, 0, 96, 2, '', '', '2016-03-24 11:42:44');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_category`
--

CREATE TABLE IF NOT EXISTS `complaint_category` (
`cat_id` int(11) NOT NULL,
  `category` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint_category`
--

INSERT INTO `complaint_category` (`cat_id`, `category`) VALUES
(1, 'Financial irregularities'),
(2, 'Misconduct/ Inappropriate behavior, including sexual harassment and workplace bullying'),
(3, 'Conflicts of interest'),
(4, 'Environment, health, safety issues'),
(5, 'Improper use of company resources'),
(6, 'Insider trading'),
(7, 'Disclosure of confidential information'),
(8, 'Dishonesty and theft'),
(9, 'Discrimination on grounds of gender, race, religion, etc'),
(10, 'Drug abuse'),
(11, 'Alcohol abuse and use of alcohol in violation of Company policy'),
(12, 'Possession of a weapon at the workplace'),
(13, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_department`
--

CREATE TABLE IF NOT EXISTS `complaint_department` (
`dep_id` int(11) NOT NULL,
  `department` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint_department`
--

INSERT INTO `complaint_department` (`dep_id`, `department`) VALUES
(1, 'Sales'),
(2, 'Marketing'),
(3, 'R&D'),
(4, 'Purchase'),
(5, 'Operations'),
(6, 'HR'),
(7, 'Administration'),
(8, 'Facilities'),
(9, 'Supply Chain'),
(10, 'Materials'),
(11, 'Engineering'),
(12, 'Legal'),
(13, 'Corporate'),
(14, 'Business Excellence'),
(15, 'Finance'),
(16, 'Accounting'),
(17, 'Logistics'),
(18, 'Advertising'),
(19, 'Product'),
(20, 'Management'),
(21, 'Corporate'),
(22, 'Strategy'),
(23, 'CEO/MD'),
(24, 'COO'),
(25, 'Customer Service'),
(26, 'Network');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_user`
--

CREATE TABLE IF NOT EXISTS `complaint_user` (
`complaint_user_id` bigint(21) NOT NULL,
  `username` varchar(256) NOT NULL,
  `pword` varchar(256) NOT NULL,
  `status` int(2) NOT NULL,
  `modified_on` datetime NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint_user`
--

INSERT INTO `complaint_user` (`complaint_user_id`, `username`, `pword`, `status`, `modified_on`, `created_on`) VALUES
(1, 'user1', 'ecb97ffafc1798cd2f67fcbc37226761', 1, '2015-01-08 15:12:39', '2015-01-08 15:12:39'),
(2, 'user2', 'ecb97ffafc1798cd2f67fcbc37226761', 1, '2015-01-08 16:53:42', '2015-01-08 16:53:42'),
(3, 'user3', 'ecb97ffafc1798cd2f67fcbc37226761', 1, '2015-01-08 17:18:46', '2015-01-08 17:18:46'),
(4, 'user4', 'ecb97ffafc1798cd2f67fcbc37226761', 1, '2015-01-08 17:20:44', '2015-01-08 17:20:44'),
(5, 'SachinTendulkar', '9c182baae5f199a97e907712e0a60141', 1, '2015-01-15 06:18:57', '2015-01-15 06:18:57'),
(6, 'aravind.kolaki', '97c698c62ff53ccd758108f79c2ddf80', 1, '2015-01-15 06:22:48', '2015-01-15 06:22:48'),
(7, 'Dhoni123', '81848772a1d6a5f193a982ce643f06e1', 1, '2015-01-15 06:41:30', '2015-01-15 06:41:30'),
(8, 'vijayn39', 'c0e48adc07e3485370f8892ba538f3d6', 1, '2015-01-16 23:09:31', '2015-01-16 23:09:31'),
(9, 'vijaynk', 'bc0acf849e3b05fa3e5c4a05b8bf6959', 1, '2015-01-17 00:03:49', '2015-01-17 00:03:49'),
(10, 'V8ap91ov', 'ecb97ffafc1798cd2f67fcbc37226761', 1, '2015-01-18 04:34:06', '2015-01-18 04:34:06'),
(11, '84a7oIBh', 'ecb97ffafc1798cd2f67fcbc37226761', 1, '2015-01-18 04:41:13', '2015-01-18 04:41:13'),
(12, '3KR14MKV', 'ecb97ffafc1798cd2f67fcbc37226761', 1, '2015-01-18 05:36:24', '2015-01-18 05:36:24'),
(13, '948VjYtz', 'ecb97ffafc1798cd2f67fcbc37226761', 1, '2015-01-18 05:37:12', '2015-01-18 05:37:12'),
(14, '4v93hZUb', 'ecb97ffafc1798cd2f67fcbc37226761', 1, '2015-01-17 17:45:13', '2015-01-17 17:45:13'),
(15, 'pSN6F21S', 'c0e48adc07e3485370f8892ba538f3d6', 1, '2015-01-18 00:27:55', '2015-01-18 00:27:55'),
(16, '16BYOx5e', 'c0e48adc07e3485370f8892ba538f3d6', 1, '2015-01-18 23:07:08', '2015-01-18 23:07:08'),
(17, 'O939yqME', 'c0e48adc07e3485370f8892ba538f3d6', 1, '2015-01-19 01:30:50', '2015-01-19 01:30:50'),
(18, 'K311LYMB', 'c0e48adc07e3485370f8892ba538f3d6', 1, '2015-01-19 03:55:08', '2015-01-19 03:55:08'),
(19, 'hV798OTn', '482c811da5d5b4bc6d497ffa98491e38', 1, '2015-01-19 06:42:29', '2015-01-19 06:42:29'),
(20, '267gglkT', 'f30aa7a662c728b7407c54ae6bfd27d1', 1, '2015-01-19 07:53:54', '2015-01-19 07:53:54'),
(21, '2hT2BWv2', 'c0e48adc07e3485370f8892ba538f3d6', 1, '2015-01-20 03:30:58', '2015-01-20 03:30:58'),
(22, 'Q424LfDV', 'c0e48adc07e3485370f8892ba538f3d6', 1, '2015-01-20 04:03:11', '2015-01-20 04:03:11'),
(23, '2Us8wgT7', 'c0e48adc07e3485370f8892ba538f3d6', 1, '2015-01-20 22:21:41', '2015-01-20 22:21:41'),
(24, 'm9X6Lt7d', 'c0e48adc07e3485370f8892ba538f3d6', 1, '2015-01-20 23:34:10', '2015-01-20 23:34:10'),
(25, '837HEUQo', 'ecb97ffafc1798cd2f67fcbc37226761', 1, '2015-01-22 04:16:44', '2015-01-22 04:16:44'),
(26, '2Iqp3r1K', 'c0e48adc07e3485370f8892ba538f3d6', 1, '2015-01-22 04:21:29', '2015-01-22 04:21:29'),
(27, '623cDycP', 'c0e48adc07e3485370f8892ba538f3d6', 1, '2015-01-22 04:24:18', '2015-01-22 04:24:18'),
(28, '4P69hETD', 'c0e48adc07e3485370f8892ba538f3d6', 1, '2015-01-23 00:23:23', '2015-01-23 00:23:23'),
(29, '5HW7A2fW', '4bc48e00300464d2670958ab3c8982ea', 1, '2015-01-26 00:20:31', '2015-01-26 00:20:31'),
(30, '39JU9Dft', '4bc48e00300464d2670958ab3c8982ea', 1, '2015-01-26 00:36:23', '2015-01-26 00:36:23'),
(31, '258kmFch', 'c0e48adc07e3485370f8892ba538f3d6', 1, '2015-01-29 22:40:43', '2015-01-29 22:40:43'),
(32, '82p6NiQV', 'c0e48adc07e3485370f8892ba538f3d6', 1, '2015-01-30 22:31:08', '2015-01-30 22:31:08'),
(33, 'G72sm7gK', 'c0e48adc07e3485370f8892ba538f3d6', 1, '2015-01-30 23:34:44', '2015-01-30 23:34:44'),
(34, '175gVcEQ', 'c0e48adc07e3485370f8892ba538f3d6', 1, '2015-02-04 21:50:28', '2015-02-04 21:50:28'),
(35, '2w3fw4CU', 'ecb97ffafc1798cd2f67fcbc37226761', 1, '2015-02-14 14:31:33', '2015-02-14 14:31:33'),
(36, 'DP5Nm7W5', 'c0e48adc07e3485370f8892ba538f3d6', 1, '2015-05-14 15:56:44', '2015-05-14 15:56:44'),
(37, 'c7WuB75G', 'c0e48adc07e3485370f8892ba538f3d6', 1, '2015-05-15 10:23:37', '2015-05-15 10:23:37'),
(38, '9x65SELS', 'c0e48adc07e3485370f8892ba538f3d6', 1, '2015-05-16 11:55:19', '2015-05-16 11:55:19'),
(39, '', 'd41d8cd98f00b204e9800998ecf8427e', 1, '2015-06-15 11:13:58', '2015-06-15 11:13:58'),
(40, '', 'd41d8cd98f00b204e9800998ecf8427e', 1, '2015-06-15 11:17:20', '2015-06-15 11:17:20'),
(41, '', '', 1, '2015-06-15 11:28:23', '2015-06-15 11:28:23'),
(42, '', '', 1, '2015-06-15 11:32:38', '2015-06-15 11:32:38'),
(43, '', '', 1, '2015-06-15 11:33:03', '2015-06-15 11:33:03');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE IF NOT EXISTS `counter` (
`count_no` int(11) NOT NULL,
  `count` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`count_no`, `count`) VALUES
(1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `ts`
--

CREATE TABLE IF NOT EXISTS `ts` (
`ts_id` int(11) NOT NULL,
  `ts_name` varchar(256) NOT NULL,
  `ts_pword` varchar(256) NOT NULL,
  `ts_published` tinyint(1) NOT NULL,
  `modified_on` datetime NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ts`
--

INSERT INTO `ts` (`ts_id`, `ts_name`, `ts_pword`, `ts_published`, `modified_on`, `created_on`) VALUES
(22, 'pratap', 'c2dcc12b42980f98e78a25592c4a602a', 1, '2015-05-15 10:00:58', '2015-05-15 10:00:58');

-- --------------------------------------------------------

--
-- Table structure for table `tsdetails`
--

CREATE TABLE IF NOT EXISTS `tsdetails` (
`ts_id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `tel_no` varchar(256) NOT NULL,
  `alternate_no` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tsdetails`
--

INSERT INTO `tsdetails` (`ts_id`, `name`, `email`, `tel_no`, `alternate_no`) VALUES
(22, 'pratap', 'vijaynkhot@gmail.com', '76543456', '765434567');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE IF NOT EXISTS `userdetails` (
`user_id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`user_id`, `name`, `email`, `phone`) VALUES
(1, 'Admin', 'info@thehrmpractitioners.com', '+9145666454');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `user_pword` varchar(256) NOT NULL,
  `user_priority` int(4) NOT NULL,
  `user_parent` int(4) NOT NULL,
  `user_published` tinyint(1) NOT NULL,
  `modified_on` datetime NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pword`, `user_priority`, `user_parent`, `user_published`, `modified_on`, `created_on`) VALUES
(1, 'admin', 'c0e48adc07e3485370f8892ba538f3d6', 1, 0, 1, '2015-01-15 03:16:17', '2014-12-16 19:52:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camdetails`
--
ALTER TABLE `camdetails`
 ADD PRIMARY KEY (`cam_id`);

--
-- Indexes for table `cams`
--
ALTER TABLE `cams`
 ADD PRIMARY KEY (`cam_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
 ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `company_contract`
--
ALTER TABLE `company_contract`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_industry`
--
ALTER TABLE `company_industry`
 ADD PRIMARY KEY (`industry_id`);

--
-- Indexes for table `company_lead`
--
ALTER TABLE `company_lead`
 ADD PRIMARY KEY (`lead_id`);

--
-- Indexes for table `company_lead_mail`
--
ALTER TABLE `company_lead_mail`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_spoc`
--
ALTER TABLE `company_spoc`
 ADD PRIMARY KEY (`spoc_id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
 ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `complaints_reply`
--
ALTER TABLE `complaints_reply`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint_category`
--
ALTER TABLE `complaint_category`
 ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `complaint_department`
--
ALTER TABLE `complaint_department`
 ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `complaint_user`
--
ALTER TABLE `complaint_user`
 ADD PRIMARY KEY (`complaint_user_id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
 ADD PRIMARY KEY (`count_no`);

--
-- Indexes for table `ts`
--
ALTER TABLE `ts`
 ADD PRIMARY KEY (`ts_id`);

--
-- Indexes for table `tsdetails`
--
ALTER TABLE `tsdetails`
 ADD PRIMARY KEY (`ts_id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camdetails`
--
ALTER TABLE `camdetails`
MODIFY `cam_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `cams`
--
ALTER TABLE `cams`
MODIFY `cam_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `company_contract`
--
ALTER TABLE `company_contract`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `company_industry`
--
ALTER TABLE `company_industry`
MODIFY `industry_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `company_lead`
--
ALTER TABLE `company_lead`
MODIFY `lead_id` bigint(21) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `company_lead_mail`
--
ALTER TABLE `company_lead_mail`
MODIFY `id` bigint(21) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `company_spoc`
--
ALTER TABLE `company_spoc`
MODIFY `spoc_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
MODIFY `complaint_id` bigint(21) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=149;
--
-- AUTO_INCREMENT for table `complaints_reply`
--
ALTER TABLE `complaints_reply`
MODIFY `id` bigint(21) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=212;
--
-- AUTO_INCREMENT for table `complaint_category`
--
ALTER TABLE `complaint_category`
MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `complaint_department`
--
ALTER TABLE `complaint_department`
MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `complaint_user`
--
ALTER TABLE `complaint_user`
MODIFY `complaint_user_id` bigint(21) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
MODIFY `count_no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ts`
--
ALTER TABLE `ts`
MODIFY `ts_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tsdetails`
--
ALTER TABLE `tsdetails`
MODIFY `ts_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
