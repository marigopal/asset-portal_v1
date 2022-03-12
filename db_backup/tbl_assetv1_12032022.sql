-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2022 at 05:53 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tbl_assetv1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_uid` varchar(64) NOT NULL,
  `category_name` varchar(150) NOT NULL,
  `category_prefix` varchar(100) NOT NULL,
  `type` bigint(20) NOT NULL,
  `category_imagename` varchar(100) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_uid`, `category_name`, `category_prefix`, `type`, `category_imagename`, `is_deleted`) VALUES
('CATE_6225eda367c32', 'Laptop', 'LAP', 4, '', 0),
('CATE_6225f3f4d9ade', 'Desktop', 'DES', 4, '', 0),
('CATE_6225f4033dd22', 'Mouse', 'MOU', 4, '', 0),
('CATE_6225f4277a6c6', 'Keyboard', 'KBD', 5, '', 0),
('CATE_6225f51493690', 'Keayboard and Mouse Combo', 'KBM', 5, '', 0),
('CATE_6225f6dd2b1b5', 'Laptup', 'LAPTO', 4, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE `tbl_company` (
  `company_uid` varchar(64) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_imagename` varchar(100) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`company_uid`, `company_name`, `company_imagename`, `is_deleted`) VALUES
('COMP_6225e30970f9d', 'Pactron', '', 1),
('COMP_6225e3121c1b3', 'Personiv', '', 0),
('COMP_6225e345d561f', 'Pactron', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_component`
--

CREATE TABLE `tbl_component` (
  `component_uid` varchar(64) NOT NULL,
  `asset_tag` varchar(100) NOT NULL,
  `assettag_number` bigint(20) NOT NULL,
  `warranty` bigint(20) NOT NULL,
  `inv_uid` varchar(64) NOT NULL,
  `category` varchar(64) NOT NULL,
  `manufacturer` varchar(64) NOT NULL,
  `model` varchar(64) NOT NULL,
  `model_no` varchar(64) NOT NULL,
  `serialno` varchar(100) NOT NULL,
  `remarks` varchar(200) NOT NULL,
  `location` varchar(64) NOT NULL,
  `status_id` varchar(64) NOT NULL,
  `asset_assign` varchar(64) NOT NULL,
  `assigned_user` varchar(64) NOT NULL DEFAULT '0',
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_component`
--

INSERT INTO `tbl_component` (`component_uid`, `asset_tag`, `assettag_number`, `warranty`, `inv_uid`, `category`, `manufacturer`, `model`, `model_no`, `serialno`, `remarks`, `location`, `status_id`, `asset_assign`, `assigned_user`, `is_deleted`) VALUES
('COMP_622ccdaf6300e', 'DES0000001', 1, 36, 'INV_622ccdaf625d6', 'CATE_6225f3f4d9ade', 'MANU_6225e240a7dca', 'MODL_6226eaff621e3', 'MODLNO_6226f690d4fde', '1556SW', '', 'LOC_6225e2fa4f742', 'STS_6226dd403f9ac', '', '0', 0),
('COMP_622cce9e60fd7', 'KBM0000001', 1, 36, 'INV_622ccdaf625d6', 'CATE_6225f51493690', 'MANU_6225e240a7dca', 'MODL_6226eaff621e3', '0', '12', '', 'LOC_6225e2b555451', 'STS_6226dd403f9ac', '', '0', 0),
('COMP_622cce9e618b2', 'KBM0000002', 2, 36, 'INV_622ccdaf625d6', 'CATE_6225f51493690', 'MANU_6225e240a7dca', 'MODL_6226eaff621e3', '0', '13', '', 'LOC_6225e2b555451', 'STS_6226dd403f9ac', '', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_countries`
--

CREATE TABLE `tbl_countries` (
  `countries_uid` bigint(20) NOT NULL,
  `countries_code` varchar(5) NOT NULL,
  `countries_name` varchar(100) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_countries`
--

INSERT INTO `tbl_countries` (`countries_uid`, `countries_code`, `countries_name`, `is_deleted`) VALUES
(1, 'AD', 'Andorra', 0),
(2, 'AE', 'United Arab Emirates', 0),
(3, 'AF', 'Afghanistan', 0),
(4, 'AG', 'Antigua and Barbuda', 0),
(5, 'AI', 'Anguilla', 0),
(6, 'AL', 'Albania', 0),
(7, 'AM', 'Armenia', 0),
(8, 'AN', 'Netherlands Antilles', 0),
(9, 'AO', 'Angola', 0),
(10, 'AQ', 'Antarctica', 0),
(11, 'AR', 'Argentina', 0),
(12, 'AT', 'Austria', 0),
(13, 'AU', 'Australia', 0),
(14, 'AW', 'Aruba', 0),
(15, 'AZ', 'Azerbaijan', 0),
(16, 'BA', 'Bosnia and Herzegovina', 0),
(17, 'BB', 'Barbados', 0),
(18, 'BD', 'Bangladesh', 0),
(19, 'BE', 'Belgium', 0),
(20, 'BF', 'Burkina Faso', 0),
(21, 'BG', 'Bulgaria', 0),
(22, 'BH', 'Bahrain', 0),
(23, 'BI', 'Burundi', 0),
(24, 'BJ', 'Benin', 0),
(25, 'BM', 'Bermuda', 0),
(26, 'BN', 'Brunei Darussalam', 0),
(27, 'BO', 'Bolivia', 0),
(28, 'BR', 'Brazil', 0),
(29, 'BS', 'Bahamas', 0),
(30, 'BT', 'Bhutan', 0),
(31, 'BV', 'Bouvet Island', 0),
(32, 'BW', 'Botswana', 0),
(33, 'BY', 'Belarus', 0),
(34, 'BZ', 'Belize', 0),
(35, 'CA', 'Canada', 0),
(36, 'CC', 'Cocos (Keeling) Islands', 0),
(37, 'CD', 'Democratic Republic of the Congo', 0),
(38, 'CF', 'Central African Republic', 0),
(39, 'CG', 'Republic of Congo', 0),
(40, 'CH', 'Switzerland', 0),
(41, 'CI', 'Ivory Coast', 0),
(42, 'CK', 'Cook Islands', 0),
(43, 'CL', 'Chile', 0),
(44, 'CM', 'Cameroon', 0),
(45, 'CN', 'China', 0),
(46, 'CO', 'Colombia', 0),
(47, 'CR', 'Costa Rica', 0),
(48, 'CU', 'Cuba', 0),
(49, 'CV', 'Cape Verde', 0),
(50, 'CX', 'Christmas Island', 0),
(51, 'CY', 'Cyprus', 0),
(52, 'CZ', 'Czech Republic', 0),
(53, 'DE', 'Germany', 0),
(54, 'DJ', 'Djibouti', 0),
(55, 'DK', 'Denmark', 0),
(56, 'DM', 'Dominica', 0),
(57, 'DO', 'Dominican Republic', 0),
(58, 'DS', 'American Samoa', 0),
(59, 'DZ', 'Algeria', 0),
(60, 'EC', 'Ecuador', 0),
(61, 'EE', 'Estonia', 0),
(62, 'EG', 'Egypt', 0),
(63, 'EH', 'Western Sahara', 0),
(64, 'ER', 'Eritrea', 0),
(65, 'ES', 'Spain', 0),
(66, 'ET', 'Ethiopia', 0),
(67, 'FI', 'Finland', 0),
(68, 'FJ', 'Fiji', 0),
(69, 'FK', 'Falkland Islands (Malvinas)', 0),
(70, 'FM', 'Micronesia, Federated States of', 0),
(71, 'FO', 'Faroe Islands', 0),
(72, 'FR', 'France', 0),
(73, 'FX', 'France, Metropolitan', 0),
(74, 'GA', 'Gabon', 0),
(75, 'GB', 'United Kingdom', 0),
(76, 'GD', 'Grenada', 0),
(77, 'GE', 'Georgia', 0),
(78, 'GF', 'French Guiana', 0),
(79, 'GH', 'Ghana', 0),
(80, 'GI', 'Gibraltar', 0),
(81, 'GK', 'Guernsey', 0),
(82, 'GL', 'Greenland', 0),
(83, 'GM', 'Gambia', 0),
(84, 'GN', 'Guinea', 0),
(85, 'GP', 'Guadeloupe', 0),
(86, 'GQ', 'Equatorial Guinea', 0),
(87, 'GR', 'Greece', 0),
(88, 'GS', 'South Georgia South Sandwich Islands', 0),
(89, 'GT', 'Guatemala', 0),
(90, 'GU', 'Guam', 0),
(91, 'GW', 'Guinea-Bissau', 0),
(92, 'GY', 'Guyana', 0),
(93, 'HK', 'Hong Kong', 0),
(94, 'HM', 'Heard and Mc Donald Islands', 0),
(95, 'HN', 'Honduras', 0),
(96, 'HR', 'Croatia (Hrvatska)', 0),
(97, 'HT', 'Haiti', 0),
(98, 'HU', 'Hungary', 0),
(99, 'ID', 'Indonesia', 0),
(100, 'IE', 'Ireland', 0),
(101, 'IL', 'Israel', 0),
(102, 'IM', 'Isle of Man', 0),
(103, 'IN', 'India', 0),
(104, 'IO', 'British Indian Ocean Territory', 0),
(105, 'IQ', 'Iraq', 0),
(106, 'IR', 'Iran (Islamic Republic of)', 0),
(107, 'IS', 'Iceland', 0),
(108, 'IT', 'Italy', 0),
(109, 'JE', 'Jersey', 0),
(110, 'JM', 'Jamaica', 0),
(111, 'JO', 'Jordan', 0),
(112, 'JP', 'Japan', 0),
(113, 'KE', 'Kenya', 0),
(114, 'KG', 'Kyrgyzstan', 0),
(115, 'KH', 'Cambodia', 0),
(116, 'KI', 'Kiribati', 0),
(117, 'KM', 'Comoros', 0),
(118, 'KN', 'Saint Kitts and Nevis', 0),
(119, 'KP', 'Korea, Democratic People\'s Republic of', 0),
(120, 'KR', 'Korea, Republic of', 0),
(121, 'KW', 'Kuwait', 0),
(122, 'KY', 'Cayman Islands', 0),
(123, 'KZ', 'Kazakhstan', 0),
(124, 'LA', 'Lao People\'s Democratic Republic', 0),
(125, 'LB', 'Lebanon', 0),
(126, 'LC', 'Saint Lucia', 0),
(127, 'LI', 'Liechtenstein', 0),
(128, 'LK', 'Sri Lanka', 0),
(129, 'LR', 'Liberia', 0),
(130, 'LS', 'Lesotho', 0),
(131, 'LT', 'Lithuania', 0),
(132, 'LU', 'Luxembourg', 0),
(133, 'LV', 'Latvia', 0),
(134, 'LY', 'Libyan Arab Jamahiriya', 0),
(135, 'MA', 'Morocco', 0),
(136, 'MC', 'Monaco', 0),
(137, 'MD', 'Moldova, Republic of', 0),
(138, 'ME', 'Montenegro', 0),
(139, 'MG', 'Madagascar', 0),
(140, 'MH', 'Marshall Islands', 0),
(141, 'MK', 'North Macedonia', 0),
(142, 'ML', 'Mali', 0),
(143, 'MM', 'Myanmar', 0),
(144, 'MN', 'Mongolia', 0),
(145, 'MO', 'Macau', 0),
(146, 'MP', 'Northern Mariana Islands', 0),
(147, 'MQ', 'Martinique', 0),
(148, 'MR', 'Mauritania', 0),
(149, 'MS', 'Montserrat', 0),
(150, 'MT', 'Malta', 0),
(151, 'MU', 'Mauritius', 0),
(152, 'MV', 'Maldives', 0),
(153, 'MW', 'Malawi', 0),
(154, 'MX', 'Mexico', 0),
(155, 'MY', 'Malaysia', 0),
(156, 'MZ', 'Mozambique', 0),
(157, 'NA', 'Namibia', 0),
(158, 'NC', 'New Caledonia', 0),
(159, 'NE', 'Niger', 0),
(160, 'NF', 'Norfolk Island', 0),
(161, 'NG', 'Nigeria', 0),
(162, 'NI', 'Nicaragua', 0),
(163, 'NL', 'Netherlands', 0),
(164, 'NO', 'Norway', 0),
(165, 'NP', 'Nepal', 0),
(166, 'NR', 'Nauru', 0),
(167, 'NU', 'Niue', 0),
(168, 'NZ', 'New Zealand', 0),
(169, 'OM', 'Oman', 0),
(170, 'PA', 'Panama', 0),
(171, 'PE', 'Peru', 0),
(172, 'PF', 'French Polynesia', 0),
(173, 'PG', 'Papua New Guinea', 0),
(174, 'PH', 'Philippines', 0),
(175, 'PK', 'Pakistan', 0),
(176, 'PL', 'Poland', 0),
(177, 'PM', 'St. Pierre and Miquelon', 0),
(178, 'PN', 'Pitcairn', 0),
(179, 'PR', 'Puerto Rico', 0),
(180, 'PS', 'Palestine', 0),
(181, 'PT', 'Portugal', 0),
(182, 'PW', 'Palau', 0),
(183, 'PY', 'Paraguay', 0),
(184, 'QA', 'Qatar', 0),
(185, 'RE', 'Reunion', 0),
(186, 'RO', 'Romania', 0),
(187, 'RS', 'Serbia', 0),
(188, 'RU', 'Russian Federation', 0),
(189, 'RW', 'Rwanda', 0),
(190, 'SA', 'Saudi Arabia', 0),
(191, 'SB', 'Solomon Islands', 0),
(192, 'SC', 'Seychelles', 0),
(193, 'SD', 'Sudan', 0),
(194, 'SE', 'Sweden', 0),
(195, 'SG', 'Singapore', 0),
(196, 'SH', 'St. Helena', 0),
(197, 'SI', 'Slovenia', 0),
(198, 'SJ', 'Svalbard and Jan Mayen Islands', 0),
(199, 'SK', 'Slovakia', 0),
(200, 'SL', 'Sierra Leone', 0),
(201, 'SM', 'San Marino', 0),
(202, 'SN', 'Senegal', 0),
(203, 'SO', 'Somalia', 0),
(204, 'SR', 'Suriname', 0),
(205, 'SS', 'South Sudan', 0),
(206, 'ST', 'Sao Tome and Principe', 0),
(207, 'SV', 'El Salvador', 0),
(208, 'SY', 'Syrian Arab Republic', 0),
(209, 'SZ', 'Swaziland', 0),
(210, 'TC', 'Turks and Caicos Islands', 0),
(211, 'TD', 'Chad', 0),
(212, 'TF', 'French Southern Territories', 0),
(213, 'TG', 'Togo', 0),
(214, 'TH', 'Thailand', 0),
(215, 'TJ', 'Tajikistan', 0),
(216, 'TK', 'Tokelau', 0),
(217, 'TM', 'Turkmenistan', 0),
(218, 'TN', 'Tunisia', 0),
(219, 'TO', 'Tonga', 0),
(220, 'TP', 'East Timor', 0),
(221, 'TR', 'Turkey', 0),
(222, 'TT', 'Trinidad and Tobago', 0),
(223, 'TV', 'Tuvalu', 0),
(224, 'TW', 'Taiwan', 0),
(225, 'TY', 'Mayotte', 0),
(226, 'TZ', 'Tanzania, United Republic of', 0),
(227, 'UA', 'Ukraine', 0),
(228, 'UG', 'Uganda', 0),
(229, 'UM', 'United States minor outlying islands', 0),
(230, 'US', 'United States', 0),
(231, 'UY', 'Uruguay', 0),
(232, 'UZ', 'Uzbekistan', 0),
(233, 'VA', 'Vatican City State', 0),
(234, 'VC', 'Saint Vincent and the Grenadines', 0),
(235, 'VE', 'Venezuela', 0),
(236, 'VG', 'Virgin Islands (British)', 0),
(237, 'VI', 'Virgin Islands (U.S.)', 0),
(238, 'VN', 'Vietnam', 0),
(239, 'VU', 'Vanuatu', 0),
(240, 'WF', 'Wallis and Futuna Islands', 0),
(241, 'WS', 'Samoa', 0),
(242, 'XK', 'Kosovo', 0),
(243, 'YE', 'Yemen', 0),
(244, 'ZA', 'South Africa', 0),
(245, 'ZM', 'Zambia', 0),
(246, 'ZW', 'Zimbabwe', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_import_users`
--

CREATE TABLE `tbl_import_users` (
  `users_uid` varchar(64) NOT NULL,
  `emp_id` varchar(64) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` bigint(20) NOT NULL,
  `is_firstlogin` int(11) NOT NULL DEFAULT 0,
  `user_access` bigint(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `invoice_uid` varchar(64) NOT NULL,
  `invoice_date` date NOT NULL,
  `invoice_no` varchar(50) NOT NULL,
  `supplier` varchar(64) NOT NULL,
  `purchase_date` date NOT NULL,
  `purchase_no` varchar(50) NOT NULL,
  `purchase_cost` varchar(50) NOT NULL,
  `inv_filename` varchar(100) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_invoice`
--

INSERT INTO `tbl_invoice` (`invoice_uid`, `invoice_date`, `invoice_no`, `supplier`, `purchase_date`, `purchase_no`, `purchase_cost`, `inv_filename`, `is_deleted`) VALUES
('INV_622ccdaf625d6', '2022-02-10', 'IN001', 'SUPP_6225e2908f628', '2022-02-10', 'PO001', '1200', '622ccdeb784d3.pdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ldapconnect`
--

CREATE TABLE `tbl_ldapconnect` (
  `ldap_uid` bigint(20) NOT NULL,
  `ldap_srvr` varchar(100) NOT NULL,
  `domain_name` varchar(100) NOT NULL,
  `bind_dn` varchar(100) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_locations`
--

CREATE TABLE `tbl_locations` (
  `location_uid` varchar(64) NOT NULL,
  `location_name` varchar(100) NOT NULL,
  `manager` varchar(100) NOT NULL,
  `addressline1` varchar(150) NOT NULL,
  `addressline2` varchar(150) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `countries` varchar(64) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `location_image` varchar(100) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_locations`
--

INSERT INTO `tbl_locations` (`location_uid`, `location_name`, `manager`, `addressline1`, `addressline2`, `city`, `state`, `countries`, `zipcode`, `location_image`, `is_deleted`) VALUES
('LOC_6225e2ab0a596', 'Coimbatore', '', '', '', '', '', '', '', '', 1),
('LOC_6225e2b555451', 'Tripur', '', '', '', '', '', '', '', '', 0),
('LOC_6225e2fa4f742', 'Coimbatore', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufacturers`
--

CREATE TABLE `tbl_manufacturers` (
  `manufacturers_uid` varchar(64) NOT NULL,
  `manufacturers_name` varchar(150) NOT NULL,
  `manufacturers_url` varchar(150) NOT NULL,
  `manufacturers_supporturl` varchar(200) NOT NULL,
  `manufacturers_supportphone` varchar(20) NOT NULL,
  `manufacturers_supportemail` varchar(50) NOT NULL,
  `manufacturers_image` varchar(50) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_manufacturers`
--

INSERT INTO `tbl_manufacturers` (`manufacturers_uid`, `manufacturers_name`, `manufacturers_url`, `manufacturers_supporturl`, `manufacturers_supportphone`, `manufacturers_supportemail`, `manufacturers_image`, `is_deleted`) VALUES
('MANU_6225e22452137', 'Dell', '', '', '', '', '', 1),
('MANU_6225e22cdd1e8', 'HP', '', '', '', '', '', 0),
('MANU_6225e240a7dca', 'Dell', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_modelno`
--

CREATE TABLE `tbl_modelno` (
  `modelno_uid` varchar(64) NOT NULL,
  `model_name` varchar(64) NOT NULL,
  `model_number` varchar(100) NOT NULL,
  `modelno_image` varchar(100) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_modelno`
--

INSERT INTO `tbl_modelno` (`modelno_uid`, `model_name`, `model_number`, `modelno_image`, `is_deleted`) VALUES
('MODLNO_6226f690d4fde', 'MODL_6226eaff621e3', '5600-1', '', 0),
('MODLNO_622704ef8f0cf', 'MODL_6226eaff621e3', '6500--1', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_modelno_logs`
--

CREATE TABLE `tbl_modelno_logs` (
  `modelnologs_uid` bigint(20) NOT NULL,
  `done_on` datetime NOT NULL,
  `done_by` varchar(64) NOT NULL,
  `modelno_id` varchar(64) NOT NULL,
  `action` varchar(50) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_modelno_logs`
--

INSERT INTO `tbl_modelno_logs` (`modelnologs_uid`, `done_on`, `done_by`, `modelno_id`, `action`, `remarks`, `is_deleted`) VALUES
(1, '2022-03-08 11:54:16', 'M2JXNzJyWHlsY0F5dzlLV3J2azYvZz09', 'MODLNO_6226f690d4fde', 'Create', '', 0),
(2, '2022-03-08 11:54:24', 'M2JXNzJyWHlsY0F5dzlLV3J2azYvZz09', 'MODLNO_6226f690d4fde', 'Update', '', 0),
(3, '2022-03-08 11:55:15', 'M2JXNzJyWHlsY0F5dzlLV3J2azYvZz09', 'MODLNO_6226f690d4fde', 'Delete', '', 0),
(4, '2022-03-08 12:55:35', 'M2JXNzJyWHlsY0F5dzlLV3J2azYvZz09', 'MODLNO_622704ef8f0cf', 'Create', '', 0),
(5, '2022-03-08 12:56:45', 'M2JXNzJyWHlsY0F5dzlLV3J2azYvZz09', 'MODLNO_622704ef8f0cf', 'Update', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_models`
--

CREATE TABLE `tbl_models` (
  `models_uid` varchar(64) NOT NULL,
  `models_name` varchar(100) NOT NULL,
  `models_image` varchar(100) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_models`
--

INSERT INTO `tbl_models` (`models_uid`, `models_name`, `models_image`, `is_deleted`) VALUES
('MODL_6225dfc9d893e', 'Latitude', '', 1),
('MODL_6225e017f25ee', 'Vostro', '', 1),
('MODL_6225e0383d1fb', 'Vostro - new', '', 0),
('MODL_6226eaff621e3', 'Precision', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_models_logs`
--

CREATE TABLE `tbl_models_logs` (
  `modelslogs_uid` bigint(20) NOT NULL,
  `done_on` datetime NOT NULL,
  `done_by` varchar(64) NOT NULL,
  `model_id` varchar(64) NOT NULL,
  `action` varchar(50) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_models_logs`
--

INSERT INTO `tbl_models_logs` (`modelslogs_uid`, `done_on`, `done_by`, `model_id`, `action`, `remarks`, `is_deleted`) VALUES
(1, '2022-03-08 11:04:55', 'M2JXNzJyWHlsY0F5dzlLV3J2azYvZz09', 'MODL_6226eaff621e3', 'Create', '', 0),
(2, '2022-03-08 11:05:08', 'M2JXNzJyWHlsY0F5dzlLV3J2azYvZz09', 'MODL_6225e0383d1fb', 'Update', '', 0),
(3, '2022-03-08 11:21:20', 'M2JXNzJyWHlsY0F5dzlLV3J2azYvZz09', 'MODL_6225dfc9d893e', 'Delete', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `status_uid` varchar(64) NOT NULL,
  `seq_id` int(11) NOT NULL,
  `status_name` varchar(100) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`status_uid`, `seq_id`, `status_name`, `is_deleted`) VALUES
('STS_6226dd403f9ac', 0, 'In Store', 0),
('STS_6226dd53dfc00', 0, 'Ready to Deploy - new', 1),
('STS_62272cc760811', 0, 'Scrap', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status_logs`
--

CREATE TABLE `tbl_status_logs` (
  `statuslogs_uid` bigint(20) NOT NULL,
  `done_on` datetime NOT NULL,
  `done_by` varchar(64) NOT NULL,
  `status_id` varchar(64) NOT NULL,
  `action` varchar(50) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_status_logs`
--

INSERT INTO `tbl_status_logs` (`statuslogs_uid`, `done_on`, `done_by`, `status_id`, `action`, `remarks`, `is_deleted`) VALUES
(1, '2022-03-08 10:06:16', 'M2JXNzJyWHlsY0F5dzlLV3J2azYvZz09', 'STS_6226dd403f9ac', 'Create', '', 0),
(2, '2022-03-08 10:06:35', 'M2JXNzJyWHlsY0F5dzlLV3J2azYvZz09', 'STS_6226dd53dfc00', 'Create', '', 0),
(3, '2022-03-08 10:06:44', 'M2JXNzJyWHlsY0F5dzlLV3J2azYvZz09', 'STS_6226dd53dfc00', 'Update', '', 0),
(4, '2022-03-08 10:08:35', 'M2JXNzJyWHlsY0F5dzlLV3J2azYvZz09', 'STS_6226dd53dfc00', 'Delete', '', 0),
(5, '2022-03-08 15:45:35', 'M2JXNzJyWHlsY0F5dzlLV3J2azYvZz09', 'STS_62272cc760811', 'Create', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `supplier_uid` varchar(64) NOT NULL,
  `supplier_name` varchar(500) NOT NULL,
  `supplier_address1` varchar(100) NOT NULL,
  `supplier_address2` varchar(100) NOT NULL,
  `supplier_city` varchar(100) NOT NULL,
  `supplier_state` varchar(100) NOT NULL,
  `supplier_country` bigint(20) NOT NULL,
  `supplier_zipcode` varchar(10) NOT NULL,
  `supplier_contactname` varchar(100) NOT NULL,
  `supplier_phone` varchar(100) NOT NULL,
  `supplier_fax` varchar(100) NOT NULL,
  `supplier_email` varchar(100) NOT NULL,
  `supplier_url` varchar(100) NOT NULL,
  `supplier_notes` varchar(200) NOT NULL,
  `supplier_imagename` varchar(100) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`supplier_uid`, `supplier_name`, `supplier_address1`, `supplier_address2`, `supplier_city`, `supplier_state`, `supplier_country`, `supplier_zipcode`, `supplier_contactname`, `supplier_phone`, `supplier_fax`, `supplier_email`, `supplier_url`, `supplier_notes`, `supplier_imagename`, `is_deleted`) VALUES
('SUPP_6225e24fc4d13', 'IT Hub', '1', '2', '3', '4', 103, '5', '6', '7', '8', '9', '10', '11', '', 0),
('SUPP_6225e2908f628', 'Bats', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `type_uid` bigint(20) NOT NULL,
  `type_name` varchar(100) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`type_uid`, `type_name`, `is_deleted`) VALUES
(1, 'License', 0),
(2, 'Consumable', 0),
(3, 'Component', 0),
(4, 'Asset', 0),
(5, 'Accessory', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_useraccess`
--

CREATE TABLE `tbl_useraccess` (
  `usraccess_uid` bigint(20) NOT NULL,
  `access_name` varchar(100) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_useraccess`
--

INSERT INTO `tbl_useraccess` (`usraccess_uid`, `access_name`, `is_deleted`) VALUES
(1, 'Super_Admin', 0),
(2, 'All_users', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `users_uid` varchar(64) NOT NULL,
  `emp_id` varchar(64) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` bigint(20) NOT NULL,
  `is_firstlogin` int(11) NOT NULL DEFAULT 0,
  `user_access` bigint(20) NOT NULL DEFAULT 2,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`users_uid`, `emp_id`, `firstname`, `lastname`, `username`, `password`, `mobile_no`, `email_address`, `address1`, `address2`, `city`, `country`, `is_firstlogin`, `user_access`, `is_deleted`) VALUES
('622447053ad48', 'Webadmin', 'web', 'admin', 'webadmin', 'SlFuUnJsSkVhUm9zSFpDcWZZaFI1QT09', '', '', '', '', '', 0, 0, 1, 0),
('6226dab09228b', 'PI0543', 'Mariappan', 'Gopal', 'marigopal', 'anpaWFY1MHJ4c2tNcFRsdndVL0U5dz09', '', '', '', '', '', 0, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users_log`
--

CREATE TABLE `tbl_users_log` (
  `userslogs_uid` bigint(20) NOT NULL,
  `done_on` datetime NOT NULL,
  `done_by` varchar(64) NOT NULL,
  `action` varchar(50) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `is_deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users_log`
--

INSERT INTO `tbl_users_log` (`userslogs_uid`, `done_on`, `done_by`, `action`, `user_id`, `remarks`, `is_deleted`) VALUES
(1, '2022-03-08 09:55:20', 'M2JXNzJyWHlsY0F5dzlLV3J2azYvZz09', 'Create', '6226dab09228b', '', 0),
(2, '2022-03-08 11:22:59', 'M2JXNzJyWHlsY0F5dzlLV3J2azYvZz09', 'Update', '6226dab09228b', '', 0),
(3, '2022-03-08 11:23:16', 'M2JXNzJyWHlsY0F5dzlLV3J2azYvZz09', 'Delete', '6226dab09228b', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD UNIQUE KEY `category_uid` (`category_uid`);

--
-- Indexes for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD UNIQUE KEY `company_uid` (`company_uid`);

--
-- Indexes for table `tbl_component`
--
ALTER TABLE `tbl_component`
  ADD UNIQUE KEY `component_uid` (`component_uid`);

--
-- Indexes for table `tbl_countries`
--
ALTER TABLE `tbl_countries`
  ADD PRIMARY KEY (`countries_uid`);

--
-- Indexes for table `tbl_import_users`
--
ALTER TABLE `tbl_import_users`
  ADD UNIQUE KEY `users_uid` (`users_uid`),
  ADD KEY `User_Access` (`user_access`);

--
-- Indexes for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD UNIQUE KEY `invoice_uid` (`invoice_uid`);

--
-- Indexes for table `tbl_ldapconnect`
--
ALTER TABLE `tbl_ldapconnect`
  ADD PRIMARY KEY (`ldap_uid`);

--
-- Indexes for table `tbl_locations`
--
ALTER TABLE `tbl_locations`
  ADD UNIQUE KEY `location_uid` (`location_uid`);

--
-- Indexes for table `tbl_manufacturers`
--
ALTER TABLE `tbl_manufacturers`
  ADD UNIQUE KEY `manufacturers_uid` (`manufacturers_uid`);

--
-- Indexes for table `tbl_modelno`
--
ALTER TABLE `tbl_modelno`
  ADD UNIQUE KEY `modelno_uid` (`modelno_uid`);

--
-- Indexes for table `tbl_modelno_logs`
--
ALTER TABLE `tbl_modelno_logs`
  ADD PRIMARY KEY (`modelnologs_uid`);

--
-- Indexes for table `tbl_models`
--
ALTER TABLE `tbl_models`
  ADD UNIQUE KEY `models_uid` (`models_uid`);

--
-- Indexes for table `tbl_models_logs`
--
ALTER TABLE `tbl_models_logs`
  ADD PRIMARY KEY (`modelslogs_uid`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD UNIQUE KEY `status_uid` (`status_uid`);

--
-- Indexes for table `tbl_status_logs`
--
ALTER TABLE `tbl_status_logs`
  ADD PRIMARY KEY (`statuslogs_uid`);

--
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD UNIQUE KEY `supplier_uid` (`supplier_uid`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`type_uid`);

--
-- Indexes for table `tbl_useraccess`
--
ALTER TABLE `tbl_useraccess`
  ADD PRIMARY KEY (`usraccess_uid`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD UNIQUE KEY `users_uid` (`users_uid`),
  ADD KEY `User_Access` (`user_access`);

--
-- Indexes for table `tbl_users_log`
--
ALTER TABLE `tbl_users_log`
  ADD PRIMARY KEY (`userslogs_uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_countries`
--
ALTER TABLE `tbl_countries`
  MODIFY `countries_uid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `tbl_ldapconnect`
--
ALTER TABLE `tbl_ldapconnect`
  MODIFY `ldap_uid` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_modelno_logs`
--
ALTER TABLE `tbl_modelno_logs`
  MODIFY `modelnologs_uid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_models_logs`
--
ALTER TABLE `tbl_models_logs`
  MODIFY `modelslogs_uid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_status_logs`
--
ALTER TABLE `tbl_status_logs`
  MODIFY `statuslogs_uid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `type_uid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_useraccess`
--
ALTER TABLE `tbl_useraccess`
  MODIFY `usraccess_uid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_users_log`
--
ALTER TABLE `tbl_users_log`
  MODIFY `userslogs_uid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
