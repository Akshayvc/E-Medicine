-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2016 at 04:47 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e-medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `uname` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `Password`) VALUES
('admin', 'tsitcse');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `msg`) VALUES
('pradeep', 'hangaraki77@gmail.com', 'good...');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE IF NOT EXISTS `medicine` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `medicine_name` varchar(50) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `cid` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `expdate` date NOT NULL,
  `batchno` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`pid`, `medicine_name`, `quantity`, `price`, `cid`, `image`, `expdate`, `batchno`) VALUES
(1, 'acetylsalicylic acid', '25', '13.5', 1, 'tabs/22112-38med.jpg', '2019-04-12', '1'),
(2, 'ibuprofen', '30', '15', 1, 'tabs/B8E.jpg', '2020-05-08', '1'),
(3, 'paracetamol', '20', '23.5', 1, 'tabs/259384,1266240151,2.jpg', '2018-07-05', '1'),
(4, 'codeine 30mg', '15', '38', 1, 'tabs/iStock_000009721089_Small.gif', '2019-04-13', '1'),
(5, 'morphine', '30', '20', 1, 'tabs/2681415971_bf21e273f5_o.0.0.jpg', '2017-08-12', '1'),
(6, 'amitriptyline10mg', '15', '22.5', 1, 'tabs/a79c9272c05d2f2949d65eac208baf04850aab9c.jpg', '2022-04-02', '1'),
(7, 'amitriptyline25mg', '20', '21', 1, 'tabs/redpills.jpg', '2018-02-08', '1'),
(8, 'cyclizine', '10', '9.5', 1, 'tabs/right_pharmacy2.jpg', '2018-11-10', '1'),
(9, 'dexamethasone2mg/5ML', '20', '52', 1, 'tabs/12.jpg', '2017-05-14', '1'),
(10, 'diazepam5mg/ml', '20', '75', 1, 'tabs/23906970.jpg', '2024-04-05', '1'),
(11, 'docusate sodium', '100', '52.5', 1, 'tabs/FI_Pharmacy_Pills.jpg', '2017-06-11', '1'),
(12, 'fluoxetine', '15', '30', 1, 'tabs/facebook-timeline-cover-photo-1221.jpg', '2017-12-09', '1'),
(13, 'haloperidol 5mg', '15', '10', 1, 'tabs/Medicine-1.jpg', '2016-05-13', '1'),
(14, 'hyoscine butylbromide', '25', '45', 1, 'tabs/HD19943.jpg', '2025-06-07', '1'),
(15, 'hyoscine hydrobromide400Mg', '30', '90', 1, 'tabs/4450435-Drugs-pharmacy-pills-syringe-thermometer-on-the-blue-background-Stock-Photo.jpg', '2017-05-19', '1'),
(16, 'lactulose', '10', '14.25', 1, 'tabs/stock-photo--colorful-capsules-and-pills-closeup-on-white-111288272.jpg', '2018-04-07', '1'),
(17, 'loperamide', '13', '12.5', 1, 'tabs/stock-photo-close-up-of-red-pills-and-water-on-a-high-key-background-with-sample-text-81078418.jpg', '2018-04-08', '1'),
(18, 'metoclopramide', '13', '15', 1, 'tabs/4450435-Drugs-pharmacy-pills-syringe-thermometer-on-the-blue-background-Stock-Photo.jpg', '2017-07-15', '1'),
(19, 'midazolam', '50', '65.25', 1, 'tabs/ampules-and-pill-pharmacy-thumb8476884.jpg', '2018-09-09', '1'),
(20, 'ondansetron', '25', '25.25', 1, 'tabs/Tablet-pills-medicine-facebook-cover-photos-1080x608.jpg', '2017-05-08', '1'),
(21, 'dexamethasone', '35', '23.24', 1, 'tabs/medicine-pills_00408310.jpg', '2017-05-19', '1'),
(22, 'Tgratol400mg', '25', '25', 1, 'tabs/nut_pills200_3.jpg', '2018-04-13', '1'),
(23, 'Crocine', '15', '10', 1, 'tabs/landscape-1450185816-g-adhd-medication-561094107.jpg', '2018-08-10', '1'),
(24, 'epinephrine', '12', '30', 1, 'tabs/stock-photo-hand-holding-remedy-medicine-118529671.jpg', '2017-05-15', '1'),
(25, 'hydrocortisone', '10', '105.5', 1, 'tabs/stock-photo-drug-in-yellow-capsule-on-white-table-and-blurred-background-with-different-medicament-in-blisters-187338221.jpg', '2017-04-06', '1'),
(26, 'prednisolone', '12', '13.24', 2, 'tabs/stock-photo-colorful-tablets-with-capsules-88204528.jpg', '2017-01-06', '2'),
(27, 'acetylcysteine', '100', '19.5', 2, 'tabs/HD18989.jpg', '2016-06-05', '2'),
(28, 'atropine 1mg', '100', '25', 2, 'tabs/ampules-and-pill-pharmacy-thumb8476884.jpg', '2017-04-05', '2'),
(29, 'naloxone400mg', '15', '45', 2, 'tabs/HD18989.jpg', '2016-08-05', '2'),
(30, 'penicillamine 250mg', '25', '25.25', 2, 'tabs/stock-photo-many-pills-and-tablets-isolated-on-white-background-86351161.jpg', '2018-04-07', '2'),
(31, 'potassium ferric hexacyanoâ€ferrate(II) â€ 2H2O(', '30', '65', 2, 'tabs/pharmacy66.jpg', '2016-10-09', '2'),
(32, 'deferoxamine500mg', '25', '35.24', 2, 'tabs/0511-0902-1117-3547_Medications_on_a_Shelf_in_a_Pharmacy_clipart_image.jpg.png', '2017-06-09', '2'),
(33, 'dimercaprol', '15', '36', 2, 'tabs/Tablet-pills-medicine-facebook-cover-photos-1080x608.jpg', '2018-09-06', '2'),
(34, 'fomepizole', '30', '17.25', 2, 'tabs/22112-38med.jpg', '2018-04-07', '2'),
(35, 'sodium calcium edetate', '30', '18', 2, 'tabs/HD19868.jpg', '2018-08-14', '2'),
(36, 'succimer100mg', '13', '32', 2, 'tabs/nut_pills200_3.jpg', '2016-06-17', '2'),
(37, 'carbamazepine100mg', '15', '18', 2, 'tabs/FI_Pharmacy_Pills.jpg', '2018-04-07', '2'),
(38, 'diazepam', '13', '16', 2, 'tabs/B8E.jpg', '2018-07-06', '2'),
(39, 'lorazepam', '15', '45', 2, 'tabs/stock-photo-insulin-syringe-and-different-medicament-in-on-white-and-blurred-bottles-and-ampules-background-187338158.jpg', '2019-07-19', '2'),
(40, 'magnesium sulfate', '25', '24.25', 2, 'tabs/stock-photo-hand-holding-remedy-medicine-118529671.jpg', '2017-04-08', '2'),
(41, 'phenobarbital', '25', '25.25', 2, 'tabs/New Division of Clinical Pharmacy jump pix.JPG', '2017-08-17', '2'),
(42, 'phenytoin', '20', '19.5', 2, 'tabs/stock-photo-pills-spilling-out-of-pill-bottle-and-syringe-isolated-on-white-with-sample-text-79108390.jpg', '2018-06-08', '2'),
(43, 'valproic acid (sodium valproate)', '22', '22.25', 2, 'tabs/259384,1266240151,2.jpg', '2018-08-17', '2'),
(44, 'ethosuximide', '40', '40.25', 2, 'tabs/redpills.jpg', '2018-06-08', '2'),
(45, 'valproic acid (sodium valproate)100mg', '45', '16.24', 2, 'tabs/HD18989.jpg', '2020-06-13', '2'),
(46, 'levamisole', '15', '45', 2, 'tabs/12.jpg', '2020-04-10', '2'),
(47, 'mebendazole100mg', '12', '25', 2, 'tabs/23906970.jpg', '2019-09-07', '2'),
(48, 'niclosamide500mg', '25', '45', 2, 'tabs/ext_020151113134850504.gif', '2019-08-14', '2'),
(49, 'praziquantel50mg', '25', '50', 2, 'tabs/0511-0902-1117-3547_Medications_on_a_Shelf_in_a_Pharmacy_clipart_image.jpg.png', '2016-02-13', '2'),
(50, 'pyrantel', '45', '33.25', 2, 'tabs/3729662-capsules-on-white-red-transparent-pills-Stock-Photo.jpg', '2018-07-05', '2'),
(51, 'albendazole', '50', '65.25', 3, 'tabs/a79c9272c05d2f2949d65eac208baf04850aab9c.jpg', '2018-07-06', '3'),
(52, 'dexamethasone', '15', '35.24', 3, 'tabs/12.jpg', '2018-04-06', '3'),
(53, 'midazolam', '20', '66', 3, 'tabs/ampules-and-pill-pharmacy-thumb8476884.jpg', '2018-09-09', '3'),
(54, 'phenobarbital', '30', '30', 3, 'tabs/New Division of Clinical Pharmacy jump pix.JPG', '2017-08-17', '3'),
(55, 'phenytoin', '30', '25', 3, 'tabs/stock-photo-pills-spilling-out-of-pill-bottle-and-syringe-isolated-on-white-with-sample-text-79108390.jpg', '2016-08-06', '3'),
(56, 'amoxicillin', '30', '50', 3, 'tabs/B8E.jpg', '2018-06-08', '3'),
(57, 'amoxicillin + clavulanic acid', '25', '35.24', 3, 'tabs/0511-0902-1117-3547_Medications_on_a_Shelf_in_a_Pharmacy_clipart_image.jpg.png', '2019-07-11', '3'),
(58, 'ampicillin', '30', '19.25', 3, 'tabs/259384,1266240151,2.jpg', '2019-08-08', '3'),
(59, 'cefalexin', '25', '82.24', 3, 'tabs/3d-medical-logo-hd-pictures-only-hd-wallpapers-hetf.jpg', '2018-04-07', '3'),
(60, 'cefazolin', '15', '85', 3, 'tabs/22112-38med.jpg', '2020-04-03', '3'),
(61, 'cefixime', '15', '23.5', 3, 'tabs/facebook-timeline-cover-photo-1221.jpg', '2018-04-07', '3'),
(62, 'ceftriaxone', '50', '103.5', 3, 'tabs/2681415971_bf21e273f5_o.0.0.jpg', '2016-04-06', '3'),
(63, 'cloxacillin', '50', '192.5', 3, 'tabs/43224_1_other_wallpapers_eat_your_medicine.jpg', '2016-04-14', '3'),
(64, 'phenoxymethylpenicillin', '30', '72.5', 3, 'tabs/pharmacy66.jpg', '2018-06-09', '3'),
(65, 'procaine benzylpenicillin*', '65', '69', 3, 'tabs/ext_020151113134850504.gif', '2019-04-12', '3'),
(66, 'ceftazidime', '20', '13.5', 3, 'tabs/HD19943.jpg', '2018-04-07', '3'),
(67, 'cefotaxime', '50', '103.24', 3, 'tabs/stock-vector-medicine-vector-seamless-pattern-colorful-tablets-with-capsules-vector-illustration-89701744.jpg', '2017-05-05', '3'),
(68, 'imipenem* + cilastatin*', '45', '79.25', 3, 'tabs/23906970.jpg', '2016-04-09', '3'),
(69, 'azithromycin', '45', '45', 3, 'tabs/landscape-1450185816-g-adhd-medication-561094107.jpg', '2018-04-06', '3'),
(70, 'chloramphenicol250mg', '50', '99', 3, 'tabs/iStock_000009721089_Small.gif', '2020-08-06', '3'),
(71, 'ciprofloxacin', '20', '65', 3, 'tabs/medicine-pills_00408310.jpg', '2018-04-07', '3'),
(72, 'clarithromycin', '25', '18', 3, 'tabs/Medicine-1.jpg', '2019-04-11', '3'),
(73, 'doxycycline', '100', '195.5', 3, 'tabs/nut_pills200_3.jpg', '2018-04-05', '3'),
(74, 'erythromycin', '45', '20', 3, 'tabs/23906970.jpg', '2019-04-11', '3'),
(75, 'gentamicin', '100', '95', 3, 'tabs/stock-photo--colorful-capsules-and-pills-closeup-on-white-111288272.jpg', '2016-04-17', '3'),
(76, 'albendazole', '60', '66', 4, 'tabs/a79c9272c05d2f2949d65eac208baf04850aab9c.jpg', '2018-07-06', '4'),
(77, 'dexamethasone', '15', '38', 4, 'tabs/12.jpg', '2018-04-06', '4'),
(78, 'phenytoin', '30', '30', 4, 'tabs/stock-photo-pills-spilling-out-of-pill-bottle-and-syringe-isolated-on-white-with-sample-text-79108390.jpg', '2018-08-06', '4'),
(79, 'cefalexin', '25', '83', 4, 'tabs/3d-medical-logo-hd-pictures-only-hd-wallpapers-hetf.jpg', '2018-04-07', '4'),
(80, 'cefixime', '15', '25', 4, 'tabs/facebook-timeline-cover-photo-1221.jpg', '2018-04-07', '4'),
(81, 'isoniazid + rifampicin', '45', '80', 4, 'tabs/0511-0902-1117-3547_Medications_on_a_Shelf_in_a_Pharmacy_clipart_image.jpg.png', '2018-11-10', '4'),
(82, 'rifabutin', '100', '99.5', 4, 'tabs/Tablet-pills-medicine-facebook-cover-photos-1080x608.jpg', '2019-12-13', '4'),
(83, 'rifampicin', '50', '50', 4, 'tabs/right_pharmacy2.jpg', '2017-06-01', '4'),
(84, 'rifapentine', '20', '33.5', 4, 'tabs/stock-photo-drug-in-yellow-capsule-on-white-table-and-blurred-background-with-different-medicament-in-blisters-187338221.jpg', '2018-04-07', '4'),
(85, 'streptomycin', '45', '25', 4, 'tabs/nut_pills200_3.jpg', '2019-04-04', '4'),
(86, 'amikacin', '65', '11', 4, 'tabs/New Division of Clinical Pharmacy jump pix.JPG', '2018-04-06', '4'),
(87, 'bedaquiline', '45', '25', 4, 'tabs/23906970.jpg', '2020-07-10', '4'),
(88, 'capreomycin', '30', '75.25', 4, 'tabs/259384,1266240151,2.jpg', '2019-04-05', '4'),
(89, 'cycloserine', '45', '35.24', 4, 'tabs/3729662-capsules-on-white-red-transparent-pills-Stock-Photo.jpg', '2021-04-02', '4'),
(90, 'ethionamide', '70', '122.5', 4, 'tabs/22112-38med.jpg', '2019-06-08', '4'),
(91, 'kanamycin', '30', '120', 4, 'tabs/12.jpg', '2017-08-11', '4'),
(92, 'linezolid', '30', '12.5', 4, 'tabs/4450435-Drugs-pharmacy-pills-syringe-thermometer-on-the-blue-background-Stock-Photo.jpg', '2019-07-11', '4'),
(93, 'pâ€aminosalicylic acid4g', '50', '180', 4, 'tabs/pharmacy-shelves-AJHD.jpg', '2019-06-08', '4'),
(94, 'amphotericin B', '20', '50', 4, 'tabs/HD19943.jpg', '2018-04-06', '4'),
(95, 'fluconazole50mg', '45', '16.4', 4, 'tabs/aboutpharmacy_clip_image001.jpg', '2019-06-07', '4'),
(96, 'flucytosine', '30', '55', 4, 'tabs/Medicine-1.jpg', '2019-04-12', '4'),
(97, 'griseofulvin', '60', '50', 4, 'tabs/iStock_000009721089_Small.gif', '2020-08-07', '4'),
(98, 'nystatin', '20', '15.5', 4, 'tabs/ext_020151113134850504.gif', '2019-07-11', '4'),
(99, 'aciclovir', '10', '20', 4, 'tabs/stock-photo-drug-in-yellow-capsule-on-white-table-and-blurred-background-with-different-medicament-in-blisters-187338221.jpg', '2019-04-03', '4'),
(100, 'lamivudine', '45', '100', 4, 'tabs/redpills.jpg', '2020-05-01', '4');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE IF NOT EXISTS `pharmacy` (
  `cid` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `flag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`cid`, `username`, `password`, `flag`) VALUES
('1', 'Medplus', 'Medplus123', 'Allow'),
('2', 'Appolo', 'Appolo123', 'Allow'),
('3', 'KAMEDICAL', 'KAMEDICAL', 'Allow'),
('4', 'Medidart', 'Medidart', 'Allow'),
('4', 'Drugpharma', 'pharma', 'Allow');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_registration`
--

CREATE TABLE IF NOT EXISTS `pharmacy_registration` (
  `ownername` varchar(100) NOT NULL,
  `lno` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `pharmacy_name` varchar(100) NOT NULL,
  `preg_date` date NOT NULL,
  `cid` int(30) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(100) NOT NULL,
  `mno` varchar(13) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pharmacy_registration`
--

INSERT INTO `pharmacy_registration` (`ownername`, `lno`, `Gender`, `pharmacy_name`, `preg_date`, `cid`, `email`, `Address`, `city`, `state`, `mno`) VALUES
('pradeep', 'Med02456', 'Male', 'Medplus', '2016-04-10', 1, 'med123@gmail.com', ' Opposite  Dommionos  Shop Toll Naka Dharwad', 'Dharwad', 'Karnataka', '7353432786'),
('Prasad', 'Appolo25654', 'Male', 'Appolo', '2016-04-04', 2, 'Appolo123@gmail.com', 'Near Bus Stop Hubli', 'Hubli', 'Karnataka', '9783840230'),
('pradeep', 'KAR024585', 'Male', 'Karnataka Medicals', '2016-04-24', 3, 'Karnatakamed@gmail.com', 'Opposite Old Bustand Dharwad-08', 'Dharwad', 'Karnataka', '9620342552'),
('karan', 'Drug02456', 'Male', 'Drug House', '2016-04-07', 4, 'drugp@gmail.com', 'Tikare Road line Bazar near maruti Temple Dharwad', 'Dharwad', 'Karnataka', '9880859745');
