-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2020 at 10:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lrmssafexpress`
--

-- --------------------------------------------------------

--
-- Table structure for table `dst_branch_area_master`
--

CREATE TABLE `dst_branch_area_master` (
  `id` int(11) NOT NULL,
  `area_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dst_branch_area_master`
--

INSERT INTO `dst_branch_area_master` (`id`, `area_name`) VALUES
(1, 'AGARTALA'),
(2, 'AGRA'),
(3, 'AHMEDABAD'),
(4, 'AHMEDABAD CITY'),
(5, 'AHMEDNAGAR'),
(6, 'AIZWAL'),
(7, 'ALLAHABAD'),
(8, 'ALWAR'),
(9, 'AMBALA'),
(10, 'AMBALA CITY'),
(11, 'AMRITSAR'),
(12, 'ANDHRA PRADESH CENTRAL'),
(13, 'ANDHRA PRADESH EAST'),
(14, 'ANDHRA PRADESH WEST'),
(15, 'AURANGABAD'),
(16, 'BADDI'),
(17, 'BANGALORE'),
(18, 'BANGALORE CITY'),
(19, 'BANGALORE DELIVERY'),
(20, 'BANGALORE SCS'),
(21, 'BANGALORE SOUTH'),
(22, 'BAREILLY'),
(23, 'BARODA'),
(24, 'BAWAL'),
(25, 'BHAGALPUR'),
(26, 'BHATINDA'),
(27, 'BHIWADI'),
(28, 'BHIWANDI'),
(29, 'BHOPAL'),
(30, 'BHUBANESHWAR'),
(31, 'BIHAR CENTRAL'),
(32, 'BIHAR EAST'),
(33, 'BIHAR NORTH'),
(34, 'BIHAR SOUTH'),
(35, 'BINOLA'),
(36, 'BONGAIGAON'),
(37, 'CALICUT'),
(38, 'CHANDIGARH'),
(39, 'CHANDWAJI'),
(40, 'CHENNAI'),
(41, 'CHENNAI CENTRAL'),
(42, 'CHENNAI NORTH'),
(43, 'CHENNAI SCS'),
(44, 'CHENNAI SOUTH'),
(45, 'CHENNAI WEST'),
(46, 'CHHATTISGARH CENTRAL'),
(47, 'COCHIN'),
(48, 'COIMBATORE'),
(49, 'CORPORATE OFFICE'),
(50, 'CUTTACK'),
(51, 'DADRA AND NAGAR HAVELI'),
(52, 'DADRI'),
(53, 'DAMAN'),
(54, 'DEHRADUN'),
(55, 'DELHI'),
(56, 'DELHI CENTRAL'),
(57, 'DELHI EAST'),
(58, 'DELHI NCR HUB'),
(59, 'DELHI NORTH'),
(60, 'DELHI SAM'),
(61, 'DELHI SCS'),
(62, 'DELHI SOUTH'),
(63, 'DELHI WEST'),
(64, 'DHANBAD'),
(65, 'DHULE HUB'),
(66, 'DIMAPUR'),
(67, 'DL RELAXO'),
(68, 'DOMBIVLI'),
(69, 'ERODE'),
(70, 'FARIDABAD'),
(71, 'FARRUKHNAGAR'),
(72, 'GHAZIABAD'),
(73, 'GORAKHPUR'),
(74, 'GREATER JAIPUR'),
(75, 'GREATER MUMBAI'),
(76, 'GREATER MUMBAI CITY'),
(77, 'GREATER NOIDA'),
(78, 'GUJARAT CENTRAL'),
(79, 'GUJARAT EAST'),
(80, 'GUJARAT SOUTH'),
(81, 'GUJARAT WEST'),
(82, 'GURGAON'),
(83, 'GUWAHATI'),
(84, 'GUWAHATI CITY'),
(85, 'GWALIOR'),
(86, 'HARIDWAR'),
(87, 'HARYANA NORTH'),
(88, 'HARYANA SOUTH'),
(89, 'HARYANA SOUTH HUB'),
(90, 'HARYANA WEST'),
(91, 'HOSHIARPUR'),
(92, 'HOSUR'),
(93, 'HOWRAH'),
(94, 'HP CENTRAL'),
(95, 'HR BENETTON'),
(96, 'HR TATA MOTOR'),
(97, 'HUBLI'),
(98, 'HYDERABAD'),
(99, 'HYDERABAD CITY'),
(100, 'HYDERABAD HITEC CITY'),
(101, 'HYDERABAD NORTH'),
(102, 'IMPHAL'),
(103, 'INDORE'),
(104, 'INDORE CITY'),
(105, 'ITANAGAR'),
(106, 'J&K CENTRAL'),
(107, 'JABALPUR'),
(108, 'JAIPUR'),
(109, 'JAIPUR CITY'),
(110, 'JALANDHAR'),
(111, 'JAMMU'),
(112, 'JAMNAGAR'),
(113, 'JAMSHEDPUR'),
(114, 'JHARKHAND CENTRAL'),
(115, 'JODHPUR'),
(116, 'JORHAT'),
(117, 'KA HIMALYA'),
(118, 'KANPUR'),
(119, 'KANPUR CITY'),
(120, 'KARNATAKA'),
(121, 'KARNATAKA CENTRAL'),
(122, 'KARNATAKA NORTH'),
(123, 'KARNATAKA SOUTH'),
(124, 'KARNATAKA WEST'),
(125, 'KERALA CENTRAL'),
(126, 'KERALA SOUTH'),
(127, 'KHARAGPUR'),
(128, 'KOLHAPUR'),
(129, 'KOLKATA'),
(130, 'KOLKATA CITY'),
(131, 'KOLKATA DANKUNI'),
(132, 'KOLKATA OUTBOUND'),
(133, 'KOLKATA SCS'),
(134, 'KOLKATA SOUTH'),
(135, 'KOLLAM'),
(136, 'LUCKNOW'),
(137, 'LUDHIANA'),
(138, 'MADURAI'),
(139, 'MAHARASHTRA CENTRAL'),
(140, 'MAHARASHTRA EAST'),
(141, 'MAHARASHTRA SOUTH'),
(142, 'MAHARASHTRA SOUTH EAST'),
(143, 'MANESAR'),
(144, 'MANGALORE'),
(145, 'MAUNATH BHANJAN'),
(146, 'MEERUT'),
(147, 'MH MAHINDRA'),
(148, 'MH SYSKA'),
(149, 'MOHALI'),
(150, 'MP CENTRAL'),
(151, 'MP EAST'),
(152, 'MP SOUTH'),
(153, 'MU GODREJ'),
(154, 'MU POLYCAB'),
(155, 'MU SCHAEFFLER'),
(156, 'MUMBAI CENTRAL'),
(157, 'MUMBAI CITY'),
(158, 'MUMBAI CITY SOUTH'),
(159, 'MUMBAI SCS'),
(160, 'MUZAFFARPUR'),
(161, 'MYSORE'),
(162, 'NAGPUR'),
(163, 'NAGPUR BUTIBORI'),
(164, 'NAGPUR CITY'),
(165, 'NASIK'),
(166, 'NAVI MUMBAI'),
(167, 'NCR HUB'),
(168, 'NCR LOGISTICS PARK'),
(169, 'NCR SCS'),
(170, 'NEEMRANA'),
(171, 'NELAMANGALA'),
(172, 'NOIDA'),
(173, 'NOIDA SCS'),
(174, 'NORTH-EAST NORTH'),
(175, 'NORTH-EAST SOUTH'),
(176, 'ORISSA CENTRAL'),
(177, 'PALGHAR'),
(178, 'PANJIM'),
(179, 'PATAUDI BILASPUR'),
(180, 'PATNA'),
(181, 'PATNA CITY'),
(182, 'PHALTAN'),
(183, 'PITHAMPUR'),
(184, 'PONDICHERRY'),
(185, 'PUNE'),
(186, 'PUNE CHAKAN'),
(187, 'PUNE CITY'),
(188, 'PUNE RANJANGAON'),
(189, 'PUNE SCS'),
(190, 'PUNE TATHAWADE'),
(191, 'PUNE VADGAON'),
(192, 'PUNJAB NORTH'),
(193, 'PUNJAB SOUTH'),
(194, 'RAIPUR'),
(195, 'RAJASTHAN NORTH'),
(196, 'RAJASTHAN SOUTH'),
(197, 'RAJKOT'),
(198, 'RANCHI'),
(199, 'RJ HERO MOTOCORP'),
(200, 'RJ MAHINDRA'),
(201, 'RUDRAPUR'),
(202, 'SAHIBABAD'),
(203, 'SALEM'),
(204, 'SALEM CITY'),
(205, 'SAMBALPUR'),
(206, 'SANAND'),
(207, 'SANGANER'),
(208, 'SECUNDERABAD'),
(209, 'SIKKIM - WB NORTH'),
(210, 'SILCHAR'),
(211, 'SILIGURI'),
(212, 'SOLAPUR'),
(213, 'SONEPAT'),
(214, 'SOUTH ONE'),
(215, 'SRI CITY'),
(216, 'SRINAGAR'),
(217, 'SRIPERUMBUDUR'),
(218, 'SURAT'),
(219, 'TAMIL NADU CENTRAL'),
(220, 'TAMIL NADU EAST'),
(221, 'TAMIL NADU SOUTH'),
(222, 'TAURU'),
(223, 'TELENGANA CENTRAL'),
(224, 'TELENGANA EAST'),
(225, 'TELENGANA WEST'),
(226, 'THANE'),
(227, 'TINSUKIA'),
(228, 'TIRUPUR'),
(229, 'TIRUVALLUR'),
(230, 'TN PRICOL'),
(231, 'TN TIDC'),
(232, 'TRICHY'),
(233, 'TRIVENDRUM'),
(234, 'UDAIPUR'),
(235, 'UNA'),
(236, 'UP EAST'),
(237, 'UP MANKIND'),
(238, 'UP SAMSUNG'),
(239, 'UP SOUTH EAST'),
(240, 'UP SOUTH WEST'),
(241, 'UP WEST'),
(242, 'UP WEST HUB'),
(243, 'UP WEST NORTH'),
(244, 'UTTARAKHAND'),
(245, 'UTTARAKHAND CENTRAL'),
(246, 'UTTARAKHAND EAST'),
(247, 'UTTARAKHAND WEST'),
(248, 'VAPI'),
(249, 'VARANASI'),
(250, 'VASAI'),
(251, 'VIJAYAWADA'),
(252, 'VISHAKHAPATNAM'),
(253, 'WB CENTRAL'),
(254, 'WB SOUTH'),
(255, 'WB TATA MOTOR'),
(256, 'WHITEFIELD'),
(257, 'ZIRAKPUR');

-- --------------------------------------------------------

--
-- Table structure for table `dst_city_masters`
--

CREATE TABLE `dst_city_masters` (
  `id` int(11) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dst_city_masters`
--

INSERT INTO `dst_city_masters` (`id`, `city`) VALUES
(1, 'ABOHAR'),
(2, 'ABU ROAD'),
(3, 'AGARTALA'),
(4, 'AGRA'),
(5, 'AHMEDABAD'),
(6, 'AHMEDNAGAR'),
(7, 'AIZWAL'),
(8, 'AJMER'),
(9, 'AKBARPUR'),
(10, 'AKOLA'),
(11, 'ALIGARH'),
(12, 'ALLAHABAD'),
(13, 'ALLEPPEY'),
(14, 'ALWAR'),
(15, 'AMBALA'),
(16, 'AMBERNATH'),
(17, 'AMBIKAPUR'),
(18, 'AMBUR'),
(19, 'AMRAVATI'),
(20, 'AMRITSAR'),
(21, 'AMROHA'),
(22, 'ANAND'),
(23, 'ANANTAPUR'),
(24, 'ANANTNAG'),
(25, 'ANGUL'),
(26, 'ANKLESHWAR'),
(27, 'ARA'),
(28, 'ARAMBAGH'),
(29, 'ASANSOL'),
(30, 'ATTIBELE'),
(31, 'AURANGABAD'),
(32, 'AURANGABAD (BIHAR)'),
(33, 'AZAMGARH'),
(34, 'BADDI'),
(35, 'BAGALKOT'),
(36, 'BAGHPAT '),
(37, 'BAGNAN'),
(38, 'BAHADURGARH'),
(39, 'BAHARAGORA'),
(40, 'BALASORE'),
(41, 'BALLABHGARH'),
(42, 'BALLIA'),
(43, 'BALOTRA'),
(44, 'BANGALORE'),
(45, 'BANKURA'),
(46, 'BANSWARA'),
(47, 'BARABANKI'),
(48, 'BARAMATI'),
(49, 'BARASAT'),
(50, 'BAREILLY'),
(51, 'BARNALA'),
(52, 'BARODA'),
(53, 'BARPETA'),
(54, 'BARWALA'),
(55, 'BASTI'),
(56, 'BATALA'),
(57, 'BAWAL'),
(58, 'BEGUSARAI'),
(59, 'BELGAUM'),
(60, 'BELLARY'),
(61, 'BERHAMPUR'),
(62, 'BETTIAH'),
(63, 'BETUL'),
(64, 'BHADOHI'),
(65, 'BHADRAK'),
(66, 'BHAGALPUR'),
(67, 'BHAGWANPUR'),
(68, 'BHANDARA'),
(69, 'BHARATPUR'),
(70, 'BHARUCH'),
(71, 'BHATINDA'),
(72, 'BHAVNAGAR'),
(73, 'BHILAI'),
(74, 'BHILWARA'),
(75, 'BHIWADI'),
(76, 'BHIWANDI'),
(77, 'BHIWANI'),
(78, 'BHOPAL'),
(79, 'BHUBANESHWAR'),
(80, 'BHUJ'),
(81, 'BIDAR'),
(82, 'BIHAR SHARIF'),
(83, 'BIJNOR'),
(84, 'BIKANER'),
(85, 'BILASPUR'),
(86, 'BILASPUR (HP)'),
(87, 'BILIMORA'),
(88, 'BINA'),
(89, 'BINNAGURI'),
(90, 'BODI'),
(91, 'BOKARO'),
(92, 'BOLPUR'),
(93, 'BONGAIGAON'),
(94, 'BUDAUN'),
(95, 'BULANDSHAHR'),
(96, 'BURDWAN'),
(97, 'BURHANPUR'),
(98, 'BUXAR'),
(99, 'CALICUT'),
(100, 'CHAKAN'),
(101, 'CHAMPA'),
(102, 'CHANDAULI'),
(103, 'CHANDAUSI'),
(104, 'CHANDERI'),
(105, 'CHANDIGARH'),
(106, 'CHANDRAPUR'),
(107, 'CHANDWAJI'),
(108, 'CHARKHI DADRI'),
(109, 'CHATRAL'),
(110, 'CHENNAI'),
(111, 'CHHAPRA'),
(112, 'CHHATARPUR'),
(113, 'CHHINDWARA'),
(114, 'CHIPLUN'),
(115, 'CHIRALA'),
(116, 'CHITRADURGA'),
(117, 'CHITRAKOOT'),
(118, 'CHITTOOR'),
(119, 'CHITTORGARH'),
(120, 'CHOMU'),
(121, 'CIPLUN'),
(122, 'COCHIN'),
(123, 'COIMBATORE'),
(124, 'COOCH BEHAR'),
(125, 'COONOOR'),
(126, 'CUDDALORE'),
(127, 'CUDDAPAH'),
(128, 'CUMBUM'),
(129, 'CUTTACK'),
(130, 'DADRA AND NAGAR HAVELI'),
(131, 'DADRI'),
(132, 'DAHEJ'),
(133, 'DALTONGANJ'),
(134, 'DAMAN'),
(135, 'DAMOH'),
(136, 'DARBHANGA'),
(137, 'DARJEELING'),
(138, 'DAUSA'),
(139, 'DAVANGERE'),
(140, 'DEHRADUN'),
(141, 'DELHI'),
(142, 'DEOBAND'),
(143, 'DEOGHAR'),
(144, 'DEORIA'),
(145, 'DEVANGRE'),
(146, 'DEWAS'),
(147, 'DEWAS TEKRI'),
(148, 'DHANBAD'),
(149, 'DHARWAD'),
(150, 'DHUBRI'),
(151, 'DHULE'),
(152, 'DHULIYAN'),
(153, 'DIBRUGARH'),
(154, 'DIMAPUR'),
(155, 'DINDIGUL'),
(156, 'DODDABALLAPUR'),
(157, 'DOMBIVLI'),
(158, 'DURGAPUR'),
(159, 'ELURU'),
(160, 'ERODE'),
(161, 'ETAH'),
(162, 'ETAWAH'),
(163, 'FAIZABAD'),
(164, 'FALTA'),
(165, 'FARIDABAD'),
(166, 'FARIDKOT'),
(167, 'FARRUKHNAGAR'),
(168, 'FIROZABAD'),
(169, 'FIROZPUR'),
(170, 'GAJRAULA'),
(171, 'GANDHIDHAM'),
(172, 'GANGTOK'),
(173, 'GAYA'),
(174, 'GHAZIABAD'),
(175, 'GHAZIPUR'),
(176, 'GOLAGHAT'),
(177, 'GONDAL'),
(178, 'GONDIA'),
(179, 'GORAKHPUR'),
(180, 'GREATER NOIDA'),
(181, 'GULBARGA'),
(182, 'GUNTUR'),
(183, 'GURUGRAM'),
(184, 'GUWAHATI'),
(185, 'GWALIOR'),
(186, 'HAJIPUR'),
(187, 'HALDIA'),
(188, 'HALDWANI'),
(189, 'HALOL'),
(190, 'HAMIRPUR'),
(191, 'HANUMANGARH'),
(192, 'HAPUR'),
(193, 'HARIDWAR'),
(194, 'HAROHALLI'),
(195, 'HASSAN'),
(196, 'HATHRAS'),
(197, 'HAZARIBAGH'),
(198, 'HIMMATNAGAR'),
(199, 'HISSAR'),
(200, 'HOSHANGABAD'),
(201, 'HOSHIARPUR'),
(202, 'HOSPET'),
(203, 'HOSUR'),
(204, 'HOWRAH'),
(205, 'HUBLI'),
(206, 'HYDERABAD'),
(207, 'ICHALKARANJI'),
(208, 'IDUKKI'),
(209, 'IGATPURI'),
(210, 'IMPHAL'),
(211, 'INDORE'),
(212, 'ISLAMPUR'),
(213, 'ITANAGAR'),
(214, 'JABALPUR'),
(215, 'JAGDALPUR'),
(216, 'JAIGAON'),
(217, 'JAIPUR'),
(218, 'JAISALMER'),
(219, 'JALANDHAR'),
(220, 'JALESAR'),
(221, 'JALGAON'),
(222, 'JALNA'),
(223, 'JAMMU'),
(224, 'JAMNAGAR'),
(225, 'JAMSHEDPUR'),
(226, 'JAUNPUR'),
(227, 'JETPUR'),
(228, 'JHABUA'),
(229, 'JHAGADIA'),
(230, 'JHAJJAR'),
(231, 'JHALAWAR'),
(232, 'JHANSI'),
(233, 'JHARSUGUDA'),
(234, 'JIND'),
(235, 'JODHPUR'),
(236, 'JORETHANG'),
(237, 'JORHAT'),
(238, 'JUNAGARH'),
(239, 'KADI'),
(240, 'KAITHAL'),
(241, 'KAKINADA'),
(242, 'KALA AMB'),
(243, 'KALIMPONG'),
(244, 'KALYANI'),
(245, 'KANCHIPURAM'),
(246, 'KANGRA'),
(247, 'KANNAUJ'),
(248, 'KANNUR'),
(249, 'KANPUR'),
(250, 'KAPURTHALA'),
(251, 'KARAD'),
(252, 'KARIMGANJ'),
(253, 'KARIMNAGAR'),
(254, 'KARNAL'),
(255, 'KARUR'),
(256, 'KARWAR'),
(257, 'KASHIPUR'),
(258, 'KATHUA'),
(259, 'KATIHAR'),
(260, 'KATNI'),
(261, 'KENDUJHAR'),
(262, 'KHALILABAD'),
(263, 'KHAMMAM'),
(264, 'KHANDWA'),
(265, 'KHARAGPUR'),
(266, 'KHARGONE'),
(267, 'KHED SHIVAPUR'),
(268, 'KHEDA'),
(269, 'KHURJA'),
(270, 'KIM'),
(271, 'KISHANGARH'),
(272, 'KOLAR'),
(273, 'KOLHAPUR'),
(274, 'KOLKATA'),
(275, 'KOLKATA'),
(276, 'KOLLAM'),
(277, 'KORAPUT'),
(278, 'KORBA'),
(279, 'KOSI KALAN'),
(280, 'KOTA'),
(281, 'KOTDWAR'),
(282, 'KOTHUR'),
(283, 'KOTPUTLI'),
(284, 'KOTTAYAM'),
(285, 'KULLU'),
(286, 'KUMBAKONAM'),
(287, 'KURKUMBH'),
(288, 'KURNOOL'),
(289, 'LAKESHWARI'),
(290, 'LAKHIMPUR'),
(291, 'LALITPUR'),
(292, 'LATUR'),
(293, 'LEH'),
(294, 'LONAVLA'),
(295, 'LONI'),
(296, 'LONI KALBHOR'),
(297, 'LUCKNOW'),
(298, 'LUDHIANA'),
(299, 'MACHHIWARA'),
(300, 'MADHAV NAGAR'),
(301, 'MADURAI'),
(302, 'MAHAD'),
(303, 'MAHBOOBNAGAR'),
(304, 'MAHESHWAR'),
(305, 'MAHOBA'),
(306, 'MAHUVA'),
(307, 'MALANPUR'),
(308, 'MALAPPURAM'),
(309, 'MALDA'),
(310, 'MALEGAON'),
(311, 'MALERKOTLA'),
(312, 'MALUR'),
(313, 'MANDI'),
(314, 'MANDI GOBINDGARH'),
(315, 'MANDIDEEP'),
(316, 'MANDSAUR'),
(317, 'MANDVI'),
(318, 'MANDYA'),
(319, 'MANESAR'),
(320, 'MANGALORE'),
(321, 'MANKAPUR'),
(322, 'MATHURA'),
(323, 'MAUNATH BHANJAN'),
(324, 'MEERUT'),
(325, 'MEHSANA'),
(326, 'MIDNAPORE'),
(327, 'MIRZAPUR'),
(328, 'MODINAGAR'),
(329, 'MOGA'),
(330, 'MOHALI'),
(331, 'MORADABAD'),
(332, 'MORENA'),
(333, 'MORVI'),
(334, 'MOTIHARI'),
(335, 'MUKTSAR'),
(336, 'MUMBAI'),
(337, 'MURBAD'),
(338, 'MURSHIDABAD'),
(339, 'MUSSOORIE'),
(340, 'MUZAFFAR NAGAR'),
(341, 'MUZAFFARPUR'),
(342, 'MYSORE'),
(343, 'NABHA'),
(344, 'NADIAD'),
(345, 'NAGAON'),
(346, 'NAGAUR'),
(347, 'NAGDA'),
(348, 'NAGERCOIL'),
(349, 'NAGPUR'),
(350, 'NAINITAL'),
(351, 'NALGONDA'),
(352, 'NANDED'),
(353, 'NANJANGUD'),
(354, 'NARNAUL'),
(355, 'NARSAPURA'),
(356, 'NASIK'),
(357, 'NAVI MUMBAI'),
(358, 'NAVSARI'),
(359, 'NAWANSHAHR'),
(360, 'NEEMRANA'),
(361, 'NEEMUCH'),
(362, 'NELAMANGALA'),
(363, 'NELLORE'),
(364, 'NEW DELHI'),
(365, 'NIZAMABAD'),
(366, 'NOIDA'),
(367, 'ONGOLE'),
(368, 'OOTY'),
(369, 'PALAKKAD'),
(370, 'PALASA'),
(371, 'PALGHAR'),
(372, 'PALI'),
(373, 'PALWAL'),
(374, 'PANCHKULA'),
(375, 'PANIPAT'),
(376, 'PANJIM'),
(377, 'PANRUTI'),
(378, 'PAONTA SAHIB'),
(379, 'PARAVADA'),
(380, 'PARWANOO'),
(381, 'PATANCHERU'),
(382, 'PATAUDI'),
(383, 'PATHANAMTHITTA'),
(384, 'PATHANKOT'),
(385, 'PATIALA'),
(386, 'PATNA'),
(387, 'PERUNDURAI'),
(388, 'PHAGWARA'),
(389, 'PHALTAN'),
(390, 'PILANI'),
(391, 'PILKHUWA'),
(392, 'PITHAMPUR'),
(393, 'POLLACHI'),
(394, 'PONDICHERRY'),
(395, 'POR'),
(396, 'PORBANDAR'),
(397, 'PORT BLAIR'),
(398, 'PRATAPGARH'),
(399, 'PUNE'),
(400, 'PURI'),
(401, 'PURNIA'),
(402, 'RAI BARELI'),
(403, 'RAICHUR'),
(404, 'RAIGARH'),
(405, 'RAIPUR'),
(406, 'RAJAHMUNDRY'),
(407, 'RAJAPALAYAM'),
(408, 'RAJKOT'),
(409, 'RAJNANDGAON'),
(410, 'RAJOURI'),
(411, 'RAJPURA'),
(412, 'RAMAGUNDAM'),
(413, 'RAMANAGARA'),
(414, 'RAMGARH'),
(415, 'RAMPUR'),
(416, 'RANCHI'),
(417, 'RANGPOO'),
(418, 'RANIPET'),
(419, 'RANJANGAON'),
(420, 'RATANGARH'),
(421, 'RATLAM'),
(422, 'RAXAUL'),
(423, 'RAYAGADA'),
(424, 'RENUKOOT'),
(425, 'REWA'),
(426, 'REWARI'),
(427, 'RISHIKESH'),
(428, 'ROHTAK'),
(429, 'ROORKEE'),
(430, 'ROPAR'),
(431, 'ROURKELA'),
(432, 'RUDRAPUR'),
(433, 'SAGAR'),
(434, 'SAHARANPUR'),
(435, 'SAHARSA'),
(436, 'SAHIBABAD'),
(437, 'SALEM'),
(438, 'SAMASTIPUR'),
(439, 'SAMBA'),
(440, 'SAMBALPUR'),
(441, 'SANAND'),
(442, 'SANGALI'),
(443, 'SANGAMNER'),
(444, 'SANGANER'),
(445, 'SANGAREDDY'),
(446, 'SANGRUR'),
(447, 'SARDARSHAHAR'),
(448, 'SATARA'),
(449, 'SATNA'),
(450, 'SAWAI MADHOPUR'),
(451, 'SECUNDERABAD'),
(452, 'SEHORE'),
(453, 'SHAHAPUR'),
(454, 'SHAHJAHANPUR'),
(455, 'SHAMLI'),
(456, 'SHANTIPUR'),
(457, 'SHAPAR'),
(458, 'SHIKOHABAD'),
(459, 'SHILLONG'),
(460, 'SHIMLA'),
(461, 'SHIMOGA'),
(462, 'SHIRWAL'),
(463, 'SHIVPURI'),
(464, 'SIHOR'),
(465, 'SIKAR'),
(466, 'SILCHAR'),
(467, 'SILIGURI'),
(468, 'SINGRAULI'),
(469, 'SINNAR'),
(470, 'SIRSA'),
(471, 'SITAMARHI'),
(472, 'SITAPUR'),
(473, 'SITARGANJ'),
(474, 'SIVAKASI'),
(475, 'SIVASAGAR'),
(476, 'SIWAN'),
(477, 'SOLAN'),
(478, 'SOLAPUR'),
(479, 'SONEPAT'),
(480, 'SOPORE'),
(481, 'SRI CITY'),
(482, 'SRI GANGANAGAR'),
(483, 'SRIKAKULAM'),
(484, 'SRINAGAR'),
(485, 'SRIPERUMBUDUR'),
(486, 'SULTANPUR'),
(487, 'SURAT'),
(488, 'SURENDRANAGAR'),
(489, 'TALASARI'),
(490, 'TANDA'),
(491, 'TANUKU'),
(492, 'TAURU'),
(493, 'TEZPUR'),
(494, 'THANJAVUR'),
(495, 'THRISSUR'),
(496, 'TIKAMGARH'),
(497, 'TINSUKIA'),
(498, 'TIPTUR'),
(499, 'TIRUCHENGODE'),
(500, 'TIRUNELVELI'),
(501, 'TIRUPATI'),
(502, 'TIRUPUR'),
(503, 'TIRUVALLUR'),
(504, 'TIRUVANNAMALAI'),
(505, 'TONK'),
(506, 'TRICHY'),
(507, 'TRIVENDRUM'),
(508, 'TUMKUR'),
(509, 'TUTICORIN'),
(510, 'UDAIPUR'),
(511, 'UDHAMPUR'),
(512, 'UDIPI'),
(513, 'UJJAIN'),
(514, 'ULHASNAGAR'),
(515, 'UNA'),
(516, 'UNJHA'),
(517, 'UNNAO'),
(518, 'VANASTHALI'),
(519, 'VAPI'),
(520, 'VARANASI'),
(521, 'VASAI'),
(522, 'VELLORE'),
(523, 'VIJAYAPURA'),
(524, 'VIJAYAWADA'),
(525, 'VISHAKHAPATNAM'),
(526, 'VITHALAPUR'),
(527, 'VIZIANAGARAM'),
(528, 'WADA'),
(529, 'WARANGAL'),
(530, 'WARDHA'),
(531, 'WAYAND'),
(532, 'YADGIR'),
(533, 'YAMUNANAGAR'),
(534, 'YAVATMAL'),
(535, 'YELHANKA'),
(536, 'ZAHIRABAD'),
(537, 'ZIRAKPUR'),
(538, 'New Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `dst_lrms_bank_masters`
--

CREATE TABLE `dst_lrms_bank_masters` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dst_lrms_bank_masters`
--

INSERT INTO `dst_lrms_bank_masters` (`id`, `bank_name`) VALUES
(1, 'ALLAHABAD BANK'),
(2, 'ANDHRA BANK'),
(3, 'BANK OF BARODA'),
(4, 'BANK OF INDIA'),
(5, 'BANK OF MAHARASTRA'),
(6, 'CANARA BANK'),
(7, 'CENTRAL BANK OF INDIA'),
(8, 'CORPORATION BANK'),
(9, 'DENA BANK'),
(10, 'INDIAN BANK'),
(11, 'STATE BANK OF INDIA'),
(12, 'INDIAN OVERSEAS BANK'),
(13, 'ORIENTAL BANK OF COMMERCE'),
(14, 'PUNJAB NATIONAL BANK'),
(15, 'SYNDICATE BANK'),
(16, 'UNION BANK OF INDIA'),
(17, 'UNITED BANK OF INDIA'),
(18, 'PUNJAB AND SINDH BANK'),
(19, 'UCO BANK'),
(20, 'VIJAYA BANK'),
(21, 'AXIS BANK LIMITED'),
(22, 'BANDHAN BANK LIMITED'),
(23, 'DCB BANK LIMITED'),
(24, 'FEDERAL BANK LIMITED'),
(25, 'HDFC BANK LIMITED'),
(26, 'ICICI BANK LIMITED'),
(27, 'INDUSIND BANK LIMITED'),
(28, 'IDFC BANK LIMITED'),
(29, 'KOTAK MAHINDRA BANK LIMITED'),
(30, 'RBL BANK LIMITED'),
(31, 'YES BANK LIMITED'),
(32, 'LAXMI VILAS BANK LIMITED'),
(33, 'KARUR VYSYA BANK LIMITED'),
(34, 'CITY UNION BANK LIMITED'),
(35, 'DHANLAXMI BANK LIMITED'),
(36, 'KARNATAKA BANK LIMITED'),
(37, 'NAINITAL BANK LIMITED'),
(38, 'SOUTH INDIAN BANK LIMITED'),
(39, 'JAMMU AND KASHMIR BANK  LIMITED'),
(42, 'ABC BANK'),
(43, 'XYZ BANK'),
(44, 'ICICI BANK LIMITED'),
(45, 'ICICI BANK LIMITED'),
(46, 'MNC BANK');

-- --------------------------------------------------------

--
-- Table structure for table `dst_lrms_details_property_owners`
--

CREATE TABLE `dst_lrms_details_property_owners` (
  `id` int(11) NOT NULL,
  `dst_lrms_master_id` int(11) DEFAULT NULL,
  `factsheet_code` varchar(30) DEFAULT NULL,
  `dst_lrm_dtls_property_owner_id` int(11) DEFAULT NULL,
  `total_property_owner` int(11) DEFAULT NULL,
  `property_owner_name` varchar(100) DEFAULT NULL,
  `supplier_no` varchar(50) DEFAULT NULL,
  `payee_name` varchar(100) DEFAULT NULL,
  `payee_pan` varchar(15) DEFAULT NULL,
  `payee_gstin` varchar(30) DEFAULT NULL,
  `payee_tds` varchar(10) DEFAULT NULL,
  `property_owner_occupation` varchar(100) DEFAULT NULL,
  `property_owner_address` varchar(100) DEFAULT NULL,
  `property_owner_district` varchar(100) DEFAULT NULL,
  `property_owner_state` varchar(100) DEFAULT NULL,
  `property_owner_postal_code` varchar(100) DEFAULT NULL,
  `property_owner_email` varchar(100) DEFAULT NULL,
  `property_owner_contact_no` varchar(20) DEFAULT NULL,
  `owner_cancelled_cheque_copy` varchar(200) DEFAULT NULL,
  `owner_pan_card_copy` varchar(200) DEFAULT NULL,
  `owner_aadhaar_card_copy` varchar(200) DEFAULT NULL,
  `status` tinyint(3) NOT NULL DEFAULT 1 COMMENT '1=Active,0=Inactive',
  `created_by` varchar(100) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `last_updated_by` varchar(100) DEFAULT NULL,
  `last_update_date` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dst_lrms_details_property_owners`
--

INSERT INTO `dst_lrms_details_property_owners` (`id`, `dst_lrms_master_id`, `factsheet_code`, `dst_lrm_dtls_property_owner_id`, `total_property_owner`, `property_owner_name`, `supplier_no`, `payee_name`, `payee_pan`, `payee_gstin`, `payee_tds`, `property_owner_occupation`, `property_owner_address`, `property_owner_district`, `property_owner_state`, `property_owner_postal_code`, `property_owner_email`, `property_owner_contact_no`, `owner_cancelled_cheque_copy`, `owner_pan_card_copy`, `owner_aadhaar_card_copy`, `status`, `created_by`, `created_date`, `last_updated_by`, `last_update_date`, `updated_at`, `created_at`) VALUES
(1, 1, NULL, NULL, NULL, 'MOHAN', '12345', 'MOH', 'BJQPK3677P', 'gf4fgdg', NULL, '', 'PATNA KANKARBAGH', 'AGARTALA', '0', '842001', 'mohan@gmail.com', '7982384254', '1580755704_smsmgtlogo.jpg', '1580755704_Downloadable-PDF-Button-PNG-Images.png', '1580755704_smsmgtlogo.jpg', 1, NULL, NULL, NULL, NULL, '2020-02-04 23:35:29', '2020-02-03 13:18:24'),
(2, 1, NULL, NULL, NULL, 'SOHAN', '12346', 'SOHAN', 'BJQPK3677P', 'fgfghfg', NULL, 'BUSINESS', 'DANAPUR', 'AGARTALA', '0', '842002', 'sohan@gmail.com', '5667566789', '1580817163_flower.jpg', '1580817163_flower.jpg', '1580817163_flower.jpg', 1, NULL, NULL, NULL, NULL, '2020-02-04 23:35:42', '2020-02-03 13:23:17'),
(3, 2, NULL, NULL, NULL, 'FIRST', '12347', 'SDS', 'BJQPK3677P', 'GHGHGH', NULL, '', 'SD', 'AGARTALA', '0', '110070', 'test@gmail.com', '7323232323', '1580923925_maxresdefault.jpg', '1580923925_PAN_Card.jpg', '1580923925_aadhar-card1.jpg', 1, NULL, NULL, NULL, NULL, '2020-02-05 12:02:05', '2020-02-04 00:31:47'),
(4, 11, 'DEL006', NULL, NULL, 'Mohan', '12345', 'Mohan Kumar', 'BJQPK3677P', '13HGGHG', NULL, NULL, 'Sultanpur', ' ', ' ', '110070', 'mohan@gmail.com', '7982384234', ' ', ' ', ' ', 1, NULL, NULL, NULL, NULL, '2020-02-10 12:37:40', '2020-02-10 12:37:40'),
(5, 11, 'DEL006', NULL, NULL, 'Sohan', '6565', 'Sohan', 'BJQPL3677P', 'ghjghjghj', NULL, NULL, 'hjg', ' ', ' ', '110070', 'sohan@gmail.com', '7982384253', ' ', ' ', ' ', 1, NULL, NULL, NULL, NULL, '2020-02-10 12:41:24', '2020-02-10 12:41:24'),
(6, 13, 'DEL010', NULL, NULL, 'Mahesh', '4343', 'Mahesh', 'BJQPK3677P', 'fgfgf', NULL, NULL, 'Sultanpuri', ' ', ' ', '110070', 'test@gmail.com', '545454545', ' ', ' ', ' ', 1, NULL, NULL, NULL, NULL, '2020-02-10 13:46:40', '2020-02-10 13:46:40'),
(7, 13, 'DEL010', NULL, NULL, 'Suresh', '6756', 'Suresh', 'BJQPK3677P', 'DFD', NULL, NULL, 'Ghitorni', ' ', ' ', '110070', 'suresh@gmail.com', '4645645645', ' ', ' ', ' ', 1, NULL, NULL, NULL, NULL, '2020-02-10 13:49:24', '2020-02-10 13:49:24'),
(8, 14, 'DEL011', NULL, NULL, 'MAYANK', '12345678', 'MAYANK', ' ', 'asdasdc', NULL, NULL, 'CHIRAG', ' ', ' ', '110054', 'mayank.jaiswal@digitalissystem.com', '9555532855', '1581406903_unnamed (1).png', '1581406903_unnamed 600_200.png', '1581406903_unnamed 600_200.png', 1, NULL, NULL, NULL, NULL, '2020-02-11 02:11:43', '2020-02-11 02:11:43'),
(9, 15, 'DEL012', NULL, NULL, 'prashant', NULL, 'prashant', 'afqpv03675l', '07', NULL, NULL, 'vasant kunj', ' ', ' ', '110070', 'prashant@gmail.com', '9873834455', '1581415327_Sample-Cancelled-Cheques-SBI.png', '1581415327_index.jpg', '1581415327_1bc1f5d58d8f71f3beca8075feed11e5.png', 1, NULL, NULL, NULL, NULL, '2020-02-11 04:32:07', '2020-02-11 04:32:07'),
(10, 16, 'UTP001', NULL, NULL, 'Safiya Begum', '321', 'safiya', 'BJQPK3677P', '06AZYPK3969P1Z3', '10%', NULL, 'h.no 100 seelam pur', ' ', ' ', '110031', 'sam@gmail.com', '100100100100', '1581775996_check.jpg', '1581775996_pancard.jpg', '1581775996_aadhaar.jpg', 0, NULL, NULL, NULL, NULL, '2020-02-16 15:56:21', '2020-02-15 08:43:16'),
(11, 16, 'UTP001', NULL, NULL, 'Abdul', '321', 'abdul', 'BJQPK3677P', '07BFYPC7011R1ZS', '10%', NULL, 'g100 seelampur', ' ', ' ', '110031', 'abdul@gmail.com', '66666666666', '1581776250_check.jpg', '1581776250_pancard.jpg', '1581776250_aadhaar.jpg', 1, NULL, NULL, NULL, NULL, '2020-02-15 08:47:30', '2020-02-15 08:47:30'),
(12, 16, 'UTP001', NULL, NULL, 'AK', NULL, 'AK', 'BJQPK3677P', 'SDADAFDSDS', '10%', NULL, 'DELHI', ' ', ' ', '110070', 'test@gmail.com', '798238255', ' ', ' ', ' ', 1, NULL, NULL, NULL, NULL, '2020-02-16 07:01:07', '2020-02-16 07:01:07'),
(13, 16, 'UTP001', NULL, NULL, 'AK', '2323', 'AK', 'BJQPK3677P', 'FDFDFG', '10%', NULL, 'DELHI', ' ', ' ', '110070', 'test@gmail.com', '6756756756', '1581858070_PAN_Card.jpg', '1581858070_PAN_Card2.jpg', '1581858070_aadhar-card1.jpg', 1, NULL, NULL, NULL, NULL, '2020-02-16 07:31:10', '2020-02-16 07:31:10'),
(14, 17, 'DEL013', NULL, NULL, 'viraT', '123', 'virat kohli', 'BJQPK3677P', '06AZYPK3969P1Z3', '10%', NULL, 'bandra', ' ', ' ', '700100', 'kohli@yahoo.com', '25252525', '1581883799_check.jpg', '1581883799_pancard.jpg', '1581883799_aadhaar.jpg', 1, NULL, NULL, NULL, NULL, '2020-02-16 14:39:59', '2020-02-16 14:39:59'),
(15, 18, 'UTP002', NULL, NULL, 'sachn', '1321', 'sachin', 'BJQPK3677P', '37AADCB2230M2ZR', '10%', NULL, 'saidpur', ' ', ' ', '233304', 'sachin@yahoo.com', '7897897899', '1581918154_check.jpg', '1581918154_pancard.jpg', '1581918154_aadhaar.jpg', 1, NULL, NULL, NULL, NULL, '2020-02-17 00:12:34', '2020-02-17 00:12:34'),
(16, 19, 'DEL014', NULL, NULL, 'RAHUL', '5456465', 'RAHUL', 'BJQPK3677P', '37AADCB2230M2ZR', '10%', 'BUSINESS', 'VEENA ENCLAVE', 'AGARTALA', '0', '110070', 'ram@yahoo.com', '88888888', '1581968036_check.jpg', '1581968036_pancard.jpg', '1581968036_aadhaar.jpg', 1, NULL, NULL, NULL, NULL, '2020-02-18 12:33:09', '2020-02-17 14:03:56'),
(17, 20, 'RAJ001', NULL, NULL, 'Rahul', '898', 'rahul', 'BJQPK3677P', '06AZYPK3969P1Z3', '10%', 'FORMING', 'jaipur', 'JAIPUR', 'RAJASTHAN', '100100', 'rahul@gmail.com', '2525252525', '1582049747_check.jpg', '1582049747_pancard.jpg', '1582049747_aadhaar.jpg', 1, NULL, NULL, NULL, NULL, '2020-02-18 12:45:47', '2020-02-18 12:45:47'),
(18, 21, 'DEL015', NULL, NULL, 'mayank', '43', 'mayank', 'DKFPK3012P', '06AZYPK3969P1Z3', '10%', 'JOB', 'chira delhi', 'DELHI', 'DELHI', '111334', 'mayank@digitalissystem.com', '1234567890', '1582098996_image4.png', '1582098996_image2.png', '1582098996_image3.png', 1, NULL, NULL, NULL, NULL, '2020-02-19 02:26:36', '2020-02-19 02:26:36'),
(19, 21, 'DEL015', NULL, NULL, 'bhushan', '1233', 'bhushan', 'DKFPK3012P', '06AZYPK3969P1Z3', '10%', 'SERVICE', 'nangloiN', 'DELHI', 'DELHI', '110041', 'bhushan@gmail.com', '8989898989898', '1582099183_image3.png', '1582099183_image2.png', '1582099183_image4.png', 1, NULL, NULL, NULL, NULL, '2020-02-19 02:29:43', '2020-02-19 02:29:43'),
(20, 21, 'DEL015', NULL, NULL, 'ramesh', '1234', 'ramesh', 'AKZPP7692H', '06AZYPK3969P1Z3', '10%', 'JOB', 'kirti nagar', 'DELHI', 'DELHI', '110041', 'sfsfsfsdfs@mayank.com', '424324234234', '1582099448_image4.png', '1582099448_image2.png', '1582099448_image4.png', 1, NULL, NULL, NULL, NULL, '2020-02-19 02:34:08', '2020-02-19 02:34:08'),
(21, 22, 'HAR001', NULL, NULL, 'ANKIT', ' ', 'ANKIT SHARMA', 'AMFPK7654R', '08AMHYG5987H1ZF', '10', 'FARMER', 'RZF123, GALI NO12, KKKKKKKKKKKKKKKKFFFFFFFFFFFFFFFFFFFFFFFFFFWWWWWWWWWWWWWWWW,', 'ALWAR', '0', '110045', 'P@P.COM', '987654321', '1582105033_Sample-Cancelled-Cheques-SBI.png', '1582105033_Pan4.png', '1582105033_AADHAAR.jpg', 1, NULL, NULL, NULL, NULL, '2020-02-22 05:49:30', '2020-02-19 04:07:13'),
(22, 22, 'HAR001', NULL, NULL, 'RAHUL', ' ', 'RAHUL SINGHANIA', 'AMSOK7654R', ' ', '0', '', 'STREET NO98', 'DELHI', 'DELHI', '110037', 'Y@YAHOO.COM', '3R22252525', ' ', ' ', ' ', 1, NULL, NULL, NULL, NULL, '2020-02-19 04:34:31', '2020-02-19 04:17:55'),
(23, 24, 'UTP003', NULL, NULL, 'moma', '123', 'mona', 'BJQPK3677P', '06AZYPK3969P1Z3', '10%', 'FORMING', 'loha mandi', 'AGRA', 'UTTAR PRADESH', '110010', 'mona@gmail.com', '23545554', '1582401795_check.jpg', '1582401795_aadhaar.jpg', '1582401795_pancard.jpg', 1, NULL, NULL, NULL, NULL, '2020-02-22 14:33:15', '2020-02-22 14:33:15'),
(24, 24, 'UTP003', NULL, NULL, 'DINESH', '111', 'MUKESH', 'BJQPK3677P', '06AZYPK3969P1Z3', '10%', NULL, '10,AKBAR ROAD', ' ', ' ', '111111', 'admin@admin.com', '25252525', '1582402647_check.jpg', '1582402647_aadhaar.jpg', '1582402647_pancard.jpg', 1, NULL, NULL, NULL, NULL, '2020-02-22 14:47:27', '2020-02-22 14:47:27'),
(25, 25, 'GUJ001', NULL, NULL, 'RANU', '7471', 'RANU', ' ', ' ', '10%', 'JOB', '78ASAM', 'AGARTALA', '0', '787878', 'RANU@GMAIL.COM', '13463225', '1582403483_check.jpg', '1582403483_pancard.jpg', '1582403483_aadhaar.jpg', 1, NULL, NULL, NULL, NULL, '2020-03-15 10:11:25', '2020-02-22 15:01:23'),
(26, 25, 'GUJ001', NULL, NULL, 'MONU', '123', 'MONU', 'BJQPK3677P', '06AZYPK3969P1Z3', '10%', NULL, 'ASAM', ' ', ' ', '110011', 'monu@gmail.com', '09089900', '1582403836_check.jpg', '1582403836_pancard.jpg', '1582403836_aadhaar.jpg', 1, NULL, NULL, NULL, NULL, '2020-02-22 15:07:16', '2020-02-22 15:07:16'),
(27, 26, 'BJO003', NULL, NULL, 'Rahul', '898', 'rahul', 'BJQPK3677P', '06AZYPK3969P1Z3', '10%', 'JOB', 'A22', 'AMBALA', 'Karnataka', '110010', 'amit@gmail.com', '2525252525', '1582528090_check.jpg', '1582528090_pancard.jpg', '1582528090_aadhaar.jpg', 1, NULL, NULL, NULL, NULL, '2020-02-24 01:38:10', '2020-02-24 01:38:10'),
(28, 27, 'RAJ002', NULL, NULL, 'Dinesh', '555', 'guddu', 'BJQPK3677P', '06AZYPK3969P1Z3', '10%', 'JOB', 'dausa', 'DAUSA', 'RAJASTHAN', '900009', 'dinesh.pal@digitalissystem.com', '12332123', '1582554810_check.jpg', '1582554810_pancard.jpg', '1582554810_aadhaar.jpg', 1, NULL, NULL, NULL, NULL, '2020-02-24 09:03:30', '2020-02-24 09:03:30'),
(29, 27, 'RAJ002', NULL, NULL, 'MEENA', '898', 'SONIYA', 'BJQPK3677P', '06AZYPK3969P1Z3', '10%', NULL, 'SEC-23 FBD', ' ', ' ', '110041', 'ram@yahoo.com', '2525252525', '1582555524_check.jpg', '1582555524_pancard.jpg', '1582555524_aadhaar.jpg', 1, NULL, NULL, NULL, NULL, '2020-02-24 09:15:24', '2020-02-24 09:15:24'),
(30, 27, 'RAJ002', NULL, NULL, 'VINAY', '898', 'VINAY', 'BJQPK3677P', '06AZYPK3969P1Z3', '10%', NULL, 'VEENA ENCLAVE', ' ', ' ', '110010', 'admin@admin.com', '25252525', '1582555640_check.jpg', '1582555640_pancard.jpg', '1582555640_aadhaar.jpg', 1, NULL, NULL, NULL, NULL, '2020-02-24 09:17:20', '2020-02-24 09:17:20'),
(31, 28, 'DEL016', NULL, NULL, 'diensh', '123', 'dinesh', 'AKZPP7692H', '06AZYPK3969P1Z3', '10%', 'JOB', 'A-21', 'DELHI', 'DELHI', '110041', 'dinesh.pal@digitalissystem.com', '1234234234', '1582571787_check.jpg', '1582571787_pancard.jpg', '1582571787_aadhaar.jpg', 1, NULL, NULL, NULL, NULL, '2020-02-24 13:46:27', '2020-02-24 13:46:27'),
(32, 28, 'DEL016', NULL, NULL, 'RAMESH', '123', 'RAMESH', 'BJQPK3677P', '06AZYPK3969P1Z3', '10%', NULL, '10,AKBAR ROAD', ' ', ' ', '110010', 'admin@admin.com', '25252525', '1582572059_check.jpg', '1582572059_pancard.jpg', '1582572059_aadhaar.jpg', 1, NULL, NULL, NULL, NULL, '2020-02-24 13:50:59', '2020-02-24 13:50:59'),
(33, 28, 'DEL016', NULL, NULL, 'RAHUL', '675675', '656756', 'BJQPK3677P', '37AADCB2230M2ZR', '10%', NULL, 'VEENA ENCLAVE', ' ', ' ', '110070', 'dinesh.pal@digitalissystem.com', '25252525', ' ', ' ', ' ', 1, NULL, NULL, NULL, NULL, '2020-02-24 14:41:12', '2020-02-24 14:41:12'),
(34, 28, 'DEL016', NULL, NULL, 'VINAY', '675', 'GHFGF', 'BJQPK3677P', '06AZYPK3969P1Z3', '10%', NULL, 'VEENA ENCLAVE', ' ', ' ', '110001', 'ram@yahoo.com', '67567', ' ', ' ', ' ', 1, NULL, NULL, NULL, NULL, '2020-02-24 14:42:38', '2020-02-24 14:42:38'),
(35, 29, 'CRP001', NULL, NULL, 'ddd', '898', 'ddd', 'BJQPK3677P', '06AZYPK3969P1Z3', '10%', 'JOB', 'A22', 'DELHI', 'DELHI', '110010', 'dinesh@gmail.com', '345345345', '1582576445_check.jpg', '1582576445_pancard.jpg', '1582576445_aadhaar.jpg', 0, NULL, NULL, NULL, NULL, '2020-02-28 00:42:01', '2020-02-24 15:04:05'),
(36, 30, 'MHG001', NULL, NULL, 'RAHUL SINGHANIA', ' ', 'RAHUL SINGHANIA', 'AMKJH7654R', '07AMJHY9876T1ZF', '10%', 'OWN BUSINESS', 'F-88, STREET NO.21, RAJ NAGAR, SADH NAGAR, PALAM COLONY,', 'AGARTALA', '0', '123456', 'P@P.COM', '987654321', '1582871976_PAN COPY.jpg', '1582871976_PAN COPY.jpg', '1582871976_AADHAAR.jpg', 1, NULL, NULL, NULL, NULL, '2020-02-28 02:05:49', '2020-02-28 01:09:36'),
(37, 30, 'MHG001', NULL, NULL, 'AMIT SACHDEVA', NULL, 'AMIT SACHDEVA', 'AMKJH7654R', '09AMKJH7654R1ZF', '10%', 'FARMER', 'Y-98, PASCHIM MARG', 'New Delhi', 'DELHI', '110037', 'Q@WER.COM', '1234567890', '1582872250_PAN COPY.jpg', '1582872250_PAN COPY.jpg', '1582872250_AADHAAR.jpg', 1, NULL, NULL, NULL, NULL, '2020-02-28 01:14:10', '2020-02-28 01:14:10'),
(38, 32, 'JKH001', NULL, NULL, 'rahul sharma', NULL, 'rahul sharma', 'QWEPO9876T', '32AQZPD6788P1ZP', '10%', 'FARMER', 'f-98, street no.2', 'JAMMU', 'JAMMU AND KASHMIR', '123432', 'pawan@yahoo.com', '9876543210', '1584260624_Warehouse Image.jpg', ' ', '1584260624_Warehouse Image.jpg', 1, NULL, NULL, NULL, NULL, '2020-03-15 02:53:44', '2020-03-15 02:53:44'),
(39, 32, 'JKH001', NULL, NULL, 'amit', NULL, 'amit', 'KJHGF8765T', '32AQZPD6788P1ZP', '10%', 'JOB', 'h54', 'JAMMU', 'JAMMU AND KASHMIR', '123212', 'p@p.com', '987654321', '1584261081_Warehouse Image.jpg', ' ', '1584261081_Warehouse Image.jpg', 1, NULL, NULL, NULL, NULL, '2020-03-15 03:01:21', '2020-03-15 03:01:21'),
(40, NULL, ' ', NULL, NULL, 'RAJ', '5456465', 'RAJU', 'BJQPK3677P', '', '10%', NULL, 'HNO 8978', ' ', ' ', '111111', 'raju@gmail.com', '44444444', ' ', ' ', ' ', 1, NULL, NULL, NULL, NULL, '2020-03-15 10:14:02', '2020-03-15 10:14:02'),
(41, NULL, ' ', NULL, NULL, 'SEEMA', '999', 'SEEMA SINGH', 'BJQPK3677P', '', '10%', NULL, 'POKHRA', ' ', ' ', '110040', 'seema@yahoo.com', '258258', '1584267446_check.jpg', '1584267446_pancard.jpg', '1584267446_aadhaar.jpg', 1, NULL, NULL, NULL, NULL, '2020-03-15 10:17:26', '2020-03-15 10:17:26'),
(42, NULL, ' ', NULL, NULL, 'SEEMA', '999', 'SEEMA SINGH', 'BJQPK3677P', '', '10%', NULL, 'POKHRA', ' ', ' ', '110040', 'seema@yahoo.com', '258258', ' ', ' ', ' ', 1, NULL, NULL, NULL, NULL, '2020-03-15 10:18:18', '2020-03-15 10:18:18'),
(43, NULL, ' ', NULL, NULL, 'DONALD TRUMP', '123', 'TRUMPH', 'BJQPK3677P', '', '10%', NULL, 'PRESIDENT HOUESE', ' ', ' ', '110041', 'trumph@gmail.com', '25582582', ' ', ' ', ' ', 1, NULL, NULL, NULL, NULL, '2020-03-15 11:41:02', '2020-03-15 11:41:02'),
(44, NULL, ' ', NULL, NULL, 'RAHUL', '898', 'RAHUL', '', '', '10%', NULL, 'SEC-23 FBD', ' ', ' ', '110041', 'dinesh@gmail.com', '252525525', ' ', ' ', ' ', 1, NULL, NULL, NULL, NULL, '2020-03-16 08:24:16', '2020-03-16 08:24:16'),
(45, 33, 'UTP004', NULL, NULL, 'JHON', '123', 'JHON', ' ', ' ', '10%', 'FORMING', 'Z-200 INDRA NAGAR', 'AGARTALA', '0', '233600', 'JHON@GMAIL.COM', '052022222', ' ', ' ', ' ', 1, NULL, NULL, NULL, NULL, '2020-03-17 05:29:11', '2020-03-16 10:00:40'),
(46, 33, 'UTP004', NULL, NULL, 'alex', '123', 'alex', 'BJQPK3677P', '07BFYPC7011R1ZS', '10%', 'FORMING', '100  indra nagar', 'LUCKNOW', 'UTTAR PRADESH', '233500', 'alex@gmail.com', '05202222222', ' ', ' ', ' ', 1, NULL, NULL, NULL, NULL, '2020-03-16 10:07:42', '2020-03-16 10:07:42'),
(47, 35, 'DEL017', NULL, NULL, 'ap singh', '123', 'ap', '', 'GSTIN', '10%', 'JOB', '220 uttam nagar', 'DELHI', 'DELHI', '100041', 'ap@gmail.com', '7777777777', ' ', ' ', ' ', 1, NULL, NULL, NULL, NULL, '2020-03-18 07:24:37', '2020-03-18 07:24:37');

-- --------------------------------------------------------

--
-- Table structure for table `dst_lrms_dtls_documents`
--

CREATE TABLE `dst_lrms_dtls_documents` (
  `id` int(11) NOT NULL,
  `dst_lrms_master_id` int(11) NOT NULL,
  `factsheet_code` varchar(30) DEFAULT NULL,
  `dst_lrm_dtls_prorperty_owner_id` int(11) NOT NULL DEFAULT 0,
  `doc_type` tinyint(3) DEFAULT NULL COMMENT '0=Premises,1=Cancelled Cheque, 2=PAN Card, 3=Aadhaar Card, 4=Inactive',
  `attachement` text DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dst_lrms_dtls_documents`
--

INSERT INTO `dst_lrms_dtls_documents` (`id`, `dst_lrms_master_id`, `factsheet_code`, `dst_lrm_dtls_prorperty_owner_id`, `doc_type`, `attachement`, `created_by`, `created_date`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 0, 0, '1580755299_smsmgtlogo.jpg', NULL, NULL, '2020-02-03 13:11:39', '2020-02-03 13:11:39'),
(2, 1, NULL, 1, 1, '1580755704_smsmgtlogo.jpg', NULL, NULL, '2020-02-03 13:18:24', '2020-02-03 13:18:24'),
(3, 1, NULL, 1, 2, '1580755704_Downloadable-PDF-Button-PNG-Images.png', NULL, NULL, '2020-02-03 13:18:24', '2020-02-03 13:18:24'),
(4, 1, NULL, 1, 3, '1580755704_smsmgtlogo.jpg', NULL, NULL, '2020-02-03 13:18:24', '2020-02-03 13:18:24'),
(5, 1, NULL, 2, 1, '1580755997_smsmgtlogo.jpg', NULL, NULL, '2020-02-03 13:23:17', '2020-02-03 13:23:17'),
(6, 1, NULL, 2, 2, '1580755997_rsz_oswal_logo-page-001.jpg', NULL, NULL, '2020-02-03 13:23:17', '2020-02-03 13:23:17'),
(7, 1, NULL, 2, 3, '1580755997_Downloadable-PDF-Button-PNG-Images.png', NULL, NULL, '2020-02-03 13:23:17', '2020-02-03 13:23:17'),
(8, 2, NULL, 3, 1, ' ', NULL, NULL, '2020-02-04 00:31:47', '2020-02-04 00:31:47'),
(9, 2, NULL, 3, 2, ' ', NULL, NULL, '2020-02-04 00:31:47', '2020-02-04 00:31:47'),
(10, 2, NULL, 3, 3, ' ', NULL, NULL, '2020-02-04 00:31:47', '2020-02-04 00:31:47'),
(11, 14, NULL, 0, 0, '1581406672_unnamed.png', NULL, NULL, '2020-02-11 02:07:52', '2020-02-11 02:07:52'),
(12, 14, 'DEL011', 8, 1, '1581406903_unnamed (1).png', NULL, NULL, '2020-02-11 02:11:43', '2020-02-11 02:11:43'),
(13, 14, 'DEL011', 8, 2, '1581406903_unnamed 600_200.png', NULL, NULL, '2020-02-11 02:11:43', '2020-02-11 02:11:43'),
(14, 14, 'DEL011', 8, 3, '1581406903_unnamed 600_200.png', NULL, NULL, '2020-02-11 02:11:43', '2020-02-11 02:11:43'),
(15, 15, NULL, 0, 0, '1581412915_IMG-20191126-WA0011.jpg', NULL, NULL, '2020-02-11 03:51:55', '2020-02-11 03:51:55'),
(16, 15, 'DEL012', 9, 1, '1581415327_Sample-Cancelled-Cheques-SBI.png', NULL, NULL, '2020-02-11 04:32:07', '2020-02-11 04:32:07'),
(17, 15, 'DEL012', 9, 2, '1581415327_index.jpg', NULL, NULL, '2020-02-11 04:32:07', '2020-02-11 04:32:07'),
(18, 15, 'DEL012', 9, 3, '1581415327_1bc1f5d58d8f71f3beca8075feed11e5.png', NULL, NULL, '2020-02-11 04:32:07', '2020-02-11 04:32:07'),
(19, 16, NULL, 0, 0, '1581775302_1-2199.jpg', NULL, NULL, '2020-02-15 08:31:42', '2020-02-15 08:31:42'),
(20, 16, 'UTP001', 10, 1, '1581775996_check.jpg', NULL, NULL, '2020-02-15 08:43:16', '2020-02-15 08:43:16'),
(21, 16, 'UTP001', 10, 2, '1581775996_pancard.jpg', NULL, NULL, '2020-02-15 08:43:16', '2020-02-15 08:43:16'),
(22, 16, 'UTP001', 10, 3, '1581775996_aadhaar.jpg', NULL, NULL, '2020-02-15 08:43:16', '2020-02-15 08:43:16'),
(23, 16, 'UTP001', 11, 1, '1581776250_check.jpg', NULL, NULL, '2020-02-15 08:47:30', '2020-02-15 08:47:30'),
(24, 16, 'UTP001', 11, 2, '1581776250_pancard.jpg', NULL, NULL, '2020-02-15 08:47:30', '2020-02-15 08:47:30'),
(25, 16, 'UTP001', 11, 3, '1581776250_aadhaar.jpg', NULL, NULL, '2020-02-15 08:47:30', '2020-02-15 08:47:30'),
(26, 16, 'UTP001', 12, 1, ' ', NULL, NULL, '2020-02-16 07:01:07', '2020-02-16 07:01:07'),
(27, 16, 'UTP001', 12, 2, ' ', NULL, NULL, '2020-02-16 07:01:07', '2020-02-16 07:01:07'),
(28, 16, 'UTP001', 12, 3, ' ', NULL, NULL, '2020-02-16 07:01:07', '2020-02-16 07:01:07'),
(29, 16, 'UTP001', 13, 1, '1581858070_PAN_Card.jpg', NULL, NULL, '2020-02-16 07:31:10', '2020-02-16 07:31:10'),
(30, 16, 'UTP001', 13, 2, '1581858070_PAN_Card2.jpg', NULL, NULL, '2020-02-16 07:31:10', '2020-02-16 07:31:10'),
(31, 16, 'UTP001', 13, 3, '1581858070_aadhar-card1.jpg', NULL, NULL, '2020-02-16 07:31:10', '2020-02-16 07:31:10'),
(32, 17, NULL, 0, 0, '1581883586_1-2199.jpg', NULL, NULL, '2020-02-16 14:36:26', '2020-02-16 14:36:26'),
(33, 17, 'DEL013', 14, 1, '1581883799_check.jpg', NULL, NULL, '2020-02-16 14:39:59', '2020-02-16 14:39:59'),
(34, 17, 'DEL013', 14, 2, '1581883799_pancard.jpg', NULL, NULL, '2020-02-16 14:39:59', '2020-02-16 14:39:59'),
(35, 17, 'DEL013', 14, 3, '1581883799_aadhaar.jpg', NULL, NULL, '2020-02-16 14:39:59', '2020-02-16 14:39:59'),
(36, 18, NULL, 0, 0, '1581917928_1-2199.jpg', NULL, NULL, '2020-02-17 00:08:49', '2020-02-17 00:08:49'),
(37, 18, 'UTP002', 15, 1, '1581918154_check.jpg', NULL, NULL, '2020-02-17 00:12:34', '2020-02-17 00:12:34'),
(38, 18, 'UTP002', 15, 2, '1581918154_pancard.jpg', NULL, NULL, '2020-02-17 00:12:34', '2020-02-17 00:12:34'),
(39, 18, 'UTP002', 15, 3, '1581918154_aadhaar.jpg', NULL, NULL, '2020-02-17 00:12:34', '2020-02-17 00:12:34'),
(40, 19, NULL, 0, 0, '1581967807_1-2199.jpg', NULL, NULL, '2020-02-17 14:00:07', '2020-02-17 14:00:07'),
(41, 19, 'DEL014', 16, 1, '1581968036_check.jpg', NULL, NULL, '2020-02-17 14:03:56', '2020-02-17 14:03:56'),
(42, 19, 'DEL014', 16, 2, '1581968036_pancard.jpg', NULL, NULL, '2020-02-17 14:03:56', '2020-02-17 14:03:56'),
(43, 19, 'DEL014', 16, 3, '1581968036_aadhaar.jpg', NULL, NULL, '2020-02-17 14:03:56', '2020-02-17 14:03:56'),
(44, 20, NULL, 0, 0, '1582049589_bird1.jpg', NULL, NULL, '2020-02-18 12:43:09', '2020-02-18 12:43:09'),
(45, 20, 'RAJ001', 17, 1, '1582049747_check.jpg', NULL, NULL, '2020-02-18 12:45:47', '2020-02-18 12:45:47'),
(46, 20, 'RAJ001', 17, 2, '1582049747_pancard.jpg', NULL, NULL, '2020-02-18 12:45:47', '2020-02-18 12:45:47'),
(47, 20, 'RAJ001', 17, 3, '1582049747_aadhaar.jpg', NULL, NULL, '2020-02-18 12:45:47', '2020-02-18 12:45:47'),
(48, 21, NULL, 0, 0, '1582098526_Screenshot from 2018-07-24 18-50-58.png', NULL, NULL, '2020-02-19 02:18:46', '2020-02-19 02:18:46'),
(49, 21, 'DEL015', 18, 1, '1582098996_image4.png', NULL, NULL, '2020-02-19 02:26:36', '2020-02-19 02:26:36'),
(50, 21, 'DEL015', 18, 2, '1582098996_image2.png', NULL, NULL, '2020-02-19 02:26:36', '2020-02-19 02:26:36'),
(51, 21, 'DEL015', 18, 3, '1582098996_image3.png', NULL, NULL, '2020-02-19 02:26:36', '2020-02-19 02:26:36'),
(52, 21, 'DEL015', 19, 1, '1582099183_image3.png', NULL, NULL, '2020-02-19 02:29:43', '2020-02-19 02:29:43'),
(53, 21, 'DEL015', 19, 2, '1582099183_image2.png', NULL, NULL, '2020-02-19 02:29:43', '2020-02-19 02:29:43'),
(54, 21, 'DEL015', 19, 3, '1582099183_image4.png', NULL, NULL, '2020-02-19 02:29:43', '2020-02-19 02:29:43'),
(55, 21, 'DEL015', 20, 1, '1582099448_image4.png', NULL, NULL, '2020-02-19 02:34:08', '2020-02-19 02:34:08'),
(56, 21, 'DEL015', 20, 2, '1582099448_image2.png', NULL, NULL, '2020-02-19 02:34:08', '2020-02-19 02:34:08'),
(57, 21, 'DEL015', 20, 3, '1582099448_image4.png', NULL, NULL, '2020-02-19 02:34:08', '2020-02-19 02:34:08'),
(58, 22, NULL, 0, 0, '1582104478_Sample-Cancelled-Cheques-SBI.png', NULL, NULL, '2020-02-19 03:57:58', '2020-02-19 03:57:58'),
(59, 22, 'HAR001', 21, 1, '1582105033_Sample-Cancelled-Cheques-SBI.png', NULL, NULL, '2020-02-19 04:07:13', '2020-02-19 04:07:13'),
(60, 22, 'HAR001', 21, 2, '1582105033_Pan4.png', NULL, NULL, '2020-02-19 04:07:13', '2020-02-19 04:07:13'),
(61, 22, 'HAR001', 21, 3, '1582105033_AADHAAR.jpg', NULL, NULL, '2020-02-19 04:07:13', '2020-02-19 04:07:13'),
(62, 23, NULL, 0, 0, '1582400564_1-2199.jpg', NULL, NULL, '2020-02-22 14:12:44', '2020-02-22 14:12:44'),
(63, 24, NULL, 0, 0, '1582401578_1-2199.jpg', NULL, NULL, '2020-02-22 14:29:38', '2020-02-22 14:29:38'),
(64, 24, 'UTP003', 23, 1, '1582401795_check.jpg', NULL, NULL, '2020-02-22 14:33:15', '2020-02-22 14:33:15'),
(65, 24, 'UTP003', 23, 2, '1582401795_aadhaar.jpg', NULL, NULL, '2020-02-22 14:33:15', '2020-02-22 14:33:15'),
(66, 24, 'UTP003', 23, 3, '1582401795_pancard.jpg', NULL, NULL, '2020-02-22 14:33:15', '2020-02-22 14:33:15'),
(67, 25, NULL, 0, 0, '1582403281_bird1.jpg', NULL, NULL, '2020-02-22 14:58:01', '2020-02-22 14:58:01'),
(68, 25, 'GUJ001', 25, 1, '1582403483_check.jpg', NULL, NULL, '2020-02-22 15:01:23', '2020-02-22 15:01:23'),
(69, 25, 'GUJ001', 25, 2, '1582403483_pancard.jpg', NULL, NULL, '2020-02-22 15:01:23', '2020-02-22 15:01:23'),
(70, 25, 'GUJ001', 25, 3, '1582403483_aadhaar.jpg', NULL, NULL, '2020-02-22 15:01:23', '2020-02-22 15:01:23'),
(71, 25, 'GUJ001', 26, 1, '1582403836_check.jpg', NULL, NULL, '2020-02-22 15:07:16', '2020-02-22 15:07:16'),
(72, 25, 'GUJ001', 26, 2, '1582403836_pancard.jpg', NULL, NULL, '2020-02-22 15:07:16', '2020-02-22 15:07:16'),
(73, 25, 'GUJ001', 26, 3, '1582403836_aadhaar.jpg', NULL, NULL, '2020-02-22 15:07:16', '2020-02-22 15:07:16'),
(74, 26, NULL, 0, 0, '1582527171_office.jpg', NULL, NULL, '2020-02-24 01:22:51', '2020-02-24 01:22:51'),
(75, 26, 'BJO003', 27, 1, '1582528090_check.jpg', NULL, NULL, '2020-02-24 01:38:10', '2020-02-24 01:38:10'),
(76, 26, 'BJO003', 27, 2, '1582528090_pancard.jpg', NULL, NULL, '2020-02-24 01:38:10', '2020-02-24 01:38:10'),
(77, 26, 'BJO003', 27, 3, '1582528090_aadhaar.jpg', NULL, NULL, '2020-02-24 01:38:10', '2020-02-24 01:38:10'),
(78, 27, NULL, 0, 0, '1582554639_office.jpg', NULL, NULL, '2020-02-24 09:00:39', '2020-02-24 09:00:39'),
(79, 27, 'RAJ002', 28, 1, '1582554810_check.jpg', NULL, NULL, '2020-02-24 09:03:30', '2020-02-24 09:03:30'),
(80, 27, 'RAJ002', 28, 2, '1582554810_pancard.jpg', NULL, NULL, '2020-02-24 09:03:30', '2020-02-24 09:03:30'),
(81, 27, 'RAJ002', 28, 3, '1582554810_aadhaar.jpg', NULL, NULL, '2020-02-24 09:03:30', '2020-02-24 09:03:30'),
(82, 27, 'RAJ002', 29, 1, '1582555524_check.jpg', NULL, NULL, '2020-02-24 09:15:24', '2020-02-24 09:15:24'),
(83, 27, 'RAJ002', 29, 2, '1582555524_pancard.jpg', NULL, NULL, '2020-02-24 09:15:24', '2020-02-24 09:15:24'),
(84, 27, 'RAJ002', 29, 3, '1582555524_aadhaar.jpg', NULL, NULL, '2020-02-24 09:15:24', '2020-02-24 09:15:24'),
(85, 27, 'RAJ002', 30, 1, '1582555640_check.jpg', NULL, NULL, '2020-02-24 09:17:20', '2020-02-24 09:17:20'),
(86, 27, 'RAJ002', 30, 2, '1582555640_pancard.jpg', NULL, NULL, '2020-02-24 09:17:20', '2020-02-24 09:17:20'),
(87, 27, 'RAJ002', 30, 3, '1582555640_aadhaar.jpg', NULL, NULL, '2020-02-24 09:17:20', '2020-02-24 09:17:20'),
(88, 28, NULL, 0, 0, '1582571280_office.jpg', NULL, NULL, '2020-02-24 13:38:00', '2020-02-24 13:38:00'),
(89, 28, 'DEL016', 31, 1, '1582571787_check.jpg', NULL, NULL, '2020-02-24 13:46:27', '2020-02-24 13:46:27'),
(90, 28, 'DEL016', 31, 2, '1582571787_pancard.jpg', NULL, NULL, '2020-02-24 13:46:27', '2020-02-24 13:46:27'),
(91, 28, 'DEL016', 31, 3, '1582571787_aadhaar.jpg', NULL, NULL, '2020-02-24 13:46:27', '2020-02-24 13:46:27'),
(92, 28, 'DEL016', 32, 1, '1582572059_check.jpg', NULL, NULL, '2020-02-24 13:50:59', '2020-02-24 13:50:59'),
(93, 28, 'DEL016', 32, 2, '1582572059_pancard.jpg', NULL, NULL, '2020-02-24 13:50:59', '2020-02-24 13:50:59'),
(94, 28, 'DEL016', 32, 3, '1582572059_aadhaar.jpg', NULL, NULL, '2020-02-24 13:50:59', '2020-02-24 13:50:59'),
(95, 29, NULL, 0, 0, '1582576332_office.jpg', NULL, NULL, '2020-02-24 15:02:12', '2020-02-24 15:02:12'),
(96, 29, 'CRP001', 35, 1, '1582576445_check.jpg', NULL, NULL, '2020-02-24 15:04:05', '2020-02-24 15:04:05'),
(97, 29, 'CRP001', 35, 2, '1582576445_pancard.jpg', NULL, NULL, '2020-02-24 15:04:05', '2020-02-24 15:04:05'),
(98, 29, 'CRP001', 35, 3, '1582576445_aadhaar.jpg', NULL, NULL, '2020-02-24 15:04:05', '2020-02-24 15:04:05'),
(99, 30, NULL, 0, 0, '1582871554_PAN COPY.jpg', NULL, NULL, '2020-02-28 01:02:34', '2020-02-28 01:02:34'),
(100, 30, 'MHG001', 36, 1, '1582871976_PAN COPY.jpg', NULL, NULL, '2020-02-28 01:09:36', '2020-02-28 01:09:36'),
(101, 30, 'MHG001', 36, 2, '1582871976_PAN COPY.jpg', NULL, NULL, '2020-02-28 01:09:36', '2020-02-28 01:09:36'),
(102, 30, 'MHG001', 36, 3, '1582871976_AADHAAR.jpg', NULL, NULL, '2020-02-28 01:09:36', '2020-02-28 01:09:36'),
(103, 30, 'MHG001', 37, 1, '1582872250_PAN COPY.jpg', NULL, NULL, '2020-02-28 01:14:10', '2020-02-28 01:14:10'),
(104, 30, 'MHG001', 37, 2, '1582872250_PAN COPY.jpg', NULL, NULL, '2020-02-28 01:14:10', '2020-02-28 01:14:10'),
(105, 30, 'MHG001', 37, 3, '1582872250_AADHAAR.jpg', NULL, NULL, '2020-02-28 01:14:10', '2020-02-28 01:14:10'),
(106, 32, 'JKH001', 38, 1, '1584260624_Warehouse Image.jpg', NULL, NULL, '2020-03-15 02:53:44', '2020-03-15 02:53:44'),
(107, 32, 'JKH001', 38, 3, '1584260624_Warehouse Image.jpg', NULL, NULL, '2020-03-15 02:53:44', '2020-03-15 02:53:44'),
(108, 32, 'JKH001', 39, 1, '1584261081_Warehouse Image.jpg', NULL, NULL, '2020-03-15 03:01:21', '2020-03-15 03:01:21'),
(109, 32, 'JKH001', 39, 3, '1584261081_Warehouse Image.jpg', NULL, NULL, '2020-03-15 03:01:21', '2020-03-15 03:01:21'),
(110, 35, NULL, 0, 0, '1584515466_office.jpg', NULL, NULL, '2020-03-18 07:11:06', '2020-03-18 07:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `dst_lrms_dtls_monthly_rentals`
--

CREATE TABLE `dst_lrms_dtls_monthly_rentals` (
  `id` int(11) NOT NULL,
  `dst_lrms_master_id` int(11) NOT NULL,
  `total_month_rent` double(15,2) NOT NULL,
  `payment_system` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dst_lrms_dtls_monthly_rentals`
--

INSERT INTO `dst_lrms_dtls_monthly_rentals` (`id`, `dst_lrms_master_id`, `total_month_rent`, `payment_system`, `created_at`, `updated_at`) VALUES
(1, 1, 9000.00, 'CURRENT MONTH BASIS', '2020-02-03 13:11:39', '2020-02-03 13:11:39'),
(2, 2, 9000.00, 'CURRENT MONTH BASIS', '2020-02-04 00:30:03', '2020-02-04 00:30:03'),
(3, 5, 9000.00, 'CURRENT MONTH BASIS', '2020-02-05 22:30:09', '2020-02-05 22:30:09'),
(4, 6, 9000.00, 'CURRENT MONTH BASIS', '2020-02-05 22:30:54', '2020-02-05 22:30:54'),
(5, 7, 9000.00, 'CURRENT MONTH BASIS', '2020-02-06 00:27:14', '2020-02-06 00:27:14'),
(6, 8, 9000.00, 'CURRENT MONTH BASIS', '2020-02-06 00:46:27', '2020-02-06 00:46:27');

-- --------------------------------------------------------

--
-- Table structure for table `dst_lrms_dtls_rental_renewals`
--

CREATE TABLE `dst_lrms_dtls_rental_renewals` (
  `id` int(11) NOT NULL,
  `dst_lrms_master_id` bigint(20) NOT NULL,
  `factsheet_code` varchar(20) NOT NULL,
  `unique_code` varchar(20) NOT NULL,
  `branch_location` varchar(100) NOT NULL,
  `supplier_no` varchar(200) NOT NULL,
  `name_of_landlord` varchar(100) NOT NULL,
  `premises_area` varchar(100) NOT NULL,
  `advances_balance_from` double(15,2) NOT NULL DEFAULT 0.00,
  `advance_deduction_if_any` varchar(100) NOT NULL,
  `present_rent` double(15,2) NOT NULL,
  `revised_rent` double(15,2) NOT NULL,
  `monthly_increase` double(15,2) NOT NULL,
  `branch_occupancy_date` date NOT NULL,
  `rental_past_history` text NOT NULL,
  `action_taken` text NOT NULL,
  `total_refundable_security_deposits` varchar(100) DEFAULT NULL,
  `total_advances` varchar(100) DEFAULT NULL,
  `total_month_rent` double(15,5) DEFAULT NULL,
  `payment_system` varchar(50) DEFAULT NULL,
  `agreement_period_start` date DEFAULT NULL,
  `agreement_period_end` date DEFAULT NULL,
  `notice_period` varchar(100) DEFAULT NULL,
  `enhancement_clause` varchar(100) DEFAULT NULL,
  `newly_constructed_for_us` varchar(20) DEFAULT NULL,
  `last_tenant` varchar(100) DEFAULT NULL,
  `renewal_start` varchar(100) DEFAULT NULL,
  `no_of_increment_number` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dst_lrms_dtls_rental_renewals`
--

INSERT INTO `dst_lrms_dtls_rental_renewals` (`id`, `dst_lrms_master_id`, `factsheet_code`, `unique_code`, `branch_location`, `supplier_no`, `name_of_landlord`, `premises_area`, `advances_balance_from`, `advance_deduction_if_any`, `present_rent`, `revised_rent`, `monthly_increase`, `branch_occupancy_date`, `rental_past_history`, `action_taken`, `total_refundable_security_deposits`, `total_advances`, `total_month_rent`, `payment_system`, `agreement_period_start`, `agreement_period_end`, `notice_period`, `enhancement_clause`, `newly_constructed_for_us`, `last_tenant`, `renewal_start`, `no_of_increment_number`, `created_at`, `updated_at`) VALUES
(1, 1, '', '', '', '', '', '', 0.00, '', 0.00, 0.00, 0.00, '0000-00-00', '', '', '27000', '18000', 9000.00000, 'CURRENT MONTH BASIS', '2020-02-01', '2021-07-15', '1 Month', '10', 'Yes', 'Not Known', ' ', 0, '2020-02-03 13:11:39', '2020-02-03 13:11:39'),
(2, 2, '', '', '', '', '', '', 0.00, '', 0.00, 0.00, 0.00, '0000-00-00', '', '', '27000', '18000', 9000.00000, 'CURRENT MONTH BASIS', '2020-02-04', '2021-02-22', '1 Month', '10', 'Yes', 'sds', ' ', 0, '2020-02-04 00:30:03', '2020-02-04 00:30:03'),
(3, 2, 'DEL001', 'KRL001', 'DELHI CENTRAL-15', '12347', 'first', '47.18 Sq.Feet', 0.00, 'no', 9000.00, 12000.00, 3000.00, '2020-02-29', 'jhjhh', 'kjhjkhkjh', NULL, NULL, NULL, 'CURRENT MONTH BASIS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-04 20:20:08', '2020-02-04 20:20:08'),
(4, 2, 'DEL001', 'KRL001', 'DELHI CENTRAL-15', '12347', 'first', '47.18 Sq.Feet', 0.00, 'no', 9000.00, 12000.00, 3000.00, '2020-02-29', 'jhjhh', 'kjhjkhkjh', NULL, NULL, NULL, 'CURRENT MONTH BASIS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-04 20:25:48', '2020-02-04 20:25:48'),
(5, 2, 'DEL001', 'KRL001', 'DELHI CENTRAL-15', '12347', 'first', '47.18 Sq.Feet', 0.00, 'no', 9000.00, 12000.00, 3000.00, '2020-02-29', 'jhjhh', 'kjhjkhkjh', NULL, NULL, NULL, 'CURRENT MONTH BASIS', '2020-02-01', '2021-11-18', NULL, NULL, NULL, NULL, NULL, 2, '2020-02-04 21:55:41', '2020-02-04 21:55:41'),
(6, 17, 'DEL013', 'DEL013-1', 'DELHI CENTRAL-15', ' ', ' ', ' ', 0.00, ' ', 10000.00, 12000.00, 2000.00, '2019-02-17', ' ', ' ', NULL, NULL, NULL, 'CURRENT MONTH BASIS', '2020-02-17', '2021-02-17', NULL, NULL, NULL, NULL, NULL, 1, '2020-02-16 15:22:25', '2020-02-16 15:22:25'),
(7, 19, 'DEL014', 'DEL014-1', 'DELHI CENTRAL-15', ' ', ' ', ' ', 0.00, ' ', 20000.00, 24000.00, 4000.00, '2020-02-28', ' ', ' ', NULL, NULL, NULL, 'CURRENT MONTH BASIS', '2021-11-26', '2025-02-28', NULL, NULL, NULL, NULL, NULL, 1, '2020-02-17 17:20:24', '2020-02-17 17:20:24'),
(8, 19, 'DEL014', 'DEL014-2', 'DELHI CENTRAL-15', ' ', ' ', ' ', 0.00, ' ', 20000.00, 25000.00, 5000.00, '2020-02-28', ' ', ' ', NULL, NULL, NULL, 'CURRENT MONTH BASIS', '2021-11-26', '2022-01-13', NULL, NULL, NULL, NULL, NULL, 2, '2020-02-18 04:49:54', '2020-02-18 04:49:54'),
(9, 19, 'DEL014', 'DEL014-3', 'DELHI CENTRAL-15', ' ', ' ', ' ', 0.00, ' ', 20000.00, 25000.00, 5000.00, '2020-02-28', ' ', ' ', NULL, NULL, NULL, 'CURRENT MONTH BASIS', '2021-11-26', '2022-11-30', NULL, NULL, NULL, NULL, NULL, 3, '2020-02-18 05:06:01', '2020-02-18 05:06:01'),
(10, 19, 'DEL014', 'DEL014-4', 'DELHI CENTRAL-15', ' ', ' ', ' ', 0.00, ' ', 20000.00, 25000.00, 5000.00, '2020-02-28', ' ', ' ', NULL, NULL, NULL, 'CURRENT MONTH BASIS', '2021-11-26', '2022-02-18', NULL, NULL, NULL, NULL, NULL, 4, '2020-02-18 12:03:49', '2020-02-18 12:03:49');

-- --------------------------------------------------------

--
-- Table structure for table `dst_lrms_factsheet_agreement_documents`
--

CREATE TABLE `dst_lrms_factsheet_agreement_documents` (
  `id` int(11) NOT NULL,
  `dst_lrms_master_id` int(11) DEFAULT NULL,
  `factsheet_type` varchar(50) NOT NULL,
  `document_path` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dst_lrms_factsheet_agreement_documents`
--

INSERT INTO `dst_lrms_factsheet_agreement_documents` (`id`, `dst_lrms_master_id`, `factsheet_type`, `document_path`, `created_at`, `updated_at`) VALUES
(7, NULL, 'Unsigned Factsheet', 'public/uploads/signed_unsigned_factsheet/bg4.jpg', '2020-02-14', '2020-02-14'),
(8, NULL, 'Signed Factsheet', 'public/uploads/signed_unsigned_factsheet/bird1.jpg', '2020-02-14', '2020-02-14'),
(9, NULL, 'Unsigned Factsheet', 'public/uploads/signed_unsigned_factsheet/check.jpg', '2020-02-14', '2020-02-14'),
(10, 17, 'Signed', 'public/uploads/signed_unsigned_factsheet/gate5.jpeg', '2020-02-14', '2020-02-14'),
(11, 22, 'Unsigned', 'public/uploads/signed_unsigned_factsheet/Chennai-19.doc', '2020-02-19', '2020-02-19'),
(12, 22, 'Unsigned', 'public/uploads/signed_unsigned_factsheet/123.pdf', '2020-02-19', '2020-02-19'),
(13, 22, 'Unsigned', 'public/uploads/signed_unsigned_factsheet/123.pdf', '2020-02-19', '2020-02-19'),
(14, 22, 'Signed', 'public/uploads/signed_unsigned_factsheet/123.pdf', '2020-02-19', '2020-02-19'),
(15, 22, 'Unsigned', 'public/uploads/signed_unsigned_factsheet/lease_agreement (4).pdf', '2020-02-21', '2020-02-21'),
(16, 22, 'Unsigned', 'public/uploads/signed_unsigned_factsheet/lease_agreement (4).pdf', '2020-02-21', '2020-02-21'),
(17, 22, 'Unsigned', 'public/uploads/signed_unsigned_factsheet/lease_agreement (4).pdf', '2020-02-21', '2020-02-21'),
(18, 22, 'Signed', 'public/uploads/signed_unsigned_factsheet/lease_agreement (4).pdf', '2020-02-21', '2020-02-21'),
(19, 22, 'Signed', 'public/uploads/signed_unsigned_factsheet/lease_agreement (3).pdf', '2020-02-21', '2020-02-21'),
(20, 22, 'Signed', 'public/uploads/signed_unsigned_factsheet/lease_agreement (3).pdf', '2020-02-21', '2020-02-21'),
(21, 22, 'Signed', 'public/uploads/signed_unsigned_factsheet/lease_agreement (5).pdf', '2020-02-21', '2020-02-21'),
(22, 22, 'Signed', 'public/uploads/signed_unsigned_factsheet/lease_agreement (4).pdf', '2020-02-21', '2020-02-21'),
(23, 22, 'Signed', 'public/uploads/signed_unsigned_factsheet/lease_agreement (4).pdf', '2020-02-21', '2020-02-21'),
(24, 22, 'Signed', 'public/uploads/signed_unsigned_factsheet/lease_agreement (4).pdf', '2020-02-21', '2020-02-21'),
(25, 22, 'Signed', 'public/uploads/signed_unsigned_factsheet/lease_agreement (3).pdf', '2020-02-21', '2020-02-21'),
(26, 22, 'Signed', 'public/uploads/signed_unsigned_factsheet/lease_agreement (4).pdf', '2020-02-21', '2020-02-21'),
(27, 22, 'Signed', 'public/uploads/signed_unsigned_factsheet/lease_agreement (5).pdf', '2020-02-22', '2020-02-22'),
(28, 22, 'Signed', 'public/uploads/signed_unsigned_factsheet/lease_agreement (4).pdf', '2020-02-22', '2020-02-22'),
(29, 22, 'Unsigned', 'public/uploads/signed_unsigned_factsheet/lease_agreement (5).pdf', '2020-02-22', '2020-02-22'),
(30, 29, 'Signed', 'public/uploads/signed_unsigned_factsheet/A17_FlightPlan.pdf', '2020-02-28', '2020-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `dst_lrms_masters`
--

CREATE TABLE `dst_lrms_masters` (
  `id` int(11) NOT NULL,
  `dst_lrms_master_id` int(11) DEFAULT NULL,
  `region_code` varchar(10) DEFAULT NULL,
  `factsheet_code` varchar(20) DEFAULT NULL,
  `unique_renewal_code` varchar(50) DEFAULT NULL,
  `branch_id` varchar(50) DEFAULT NULL,
  `branch_code` varchar(30) DEFAULT NULL,
  `branch_type` varchar(100) DEFAULT NULL,
  `branch_location` varchar(50) DEFAULT NULL,
  `branch_occupancy_date` date DEFAULT NULL,
  `inactive_date` date DEFAULT NULL,
  `vacation_date` date DEFAULT NULL,
  `fact_sheet_date` date DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `address3` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `postal_code` int(10) DEFAULT NULL,
  `office_tele_no` varchar(100) DEFAULT NULL,
  `near_by_highway` varchar(100) DEFAULT NULL,
  `dist_from_highway` varchar(30) DEFAULT NULL,
  `dist_from_highway_unit` varchar(20) DEFAULT NULL,
  `safex_conectivity_route` varchar(100) DEFAULT NULL,
  `property_location` varchar(100) DEFAULT NULL,
  `nearest_airport` varchar(100) DEFAULT NULL,
  `nearest_railway_station` varchar(100) DEFAULT NULL,
  `premises_length` double(15,2) DEFAULT NULL,
  `premises_length_unit` varchar(50) DEFAULT NULL,
  `premises_breadth` double(15,2) DEFAULT NULL,
  `premises_breadth_unit` varchar(50) DEFAULT NULL,
  `premises_area` double(15,2) DEFAULT NULL,
  `premises_area_unit` varchar(30) DEFAULT NULL,
  `premises_height` double(15,2) DEFAULT NULL,
  `premises_height_unit` varchar(50) DEFAULT NULL,
  `platform_height` double(15,2) DEFAULT NULL,
  `platform_height_unit` varchar(50) DEFAULT NULL,
  `cantiliver_length` double(15,2) DEFAULT NULL,
  `cantiliver_length_unit` varchar(50) DEFAULT NULL,
  `flooring_type` varchar(100) DEFAULT NULL,
  `flooring_type2` varchar(100) DEFAULT NULL,
  `flooring_type3` varchar(100) DEFAULT NULL,
  `flooring_type4` varchar(100) DEFAULT NULL,
  `front_road_breadth` double(15,2) DEFAULT NULL,
  `front_road_breadth_unit` varchar(50) DEFAULT NULL,
  `operational_hours` varchar(20) DEFAULT NULL,
  `operational_timing_from` varchar(50) DEFAULT NULL,
  `operational_timing_to` varchar(50) DEFAULT NULL,
  `connectivity_telephone` varchar(100) DEFAULT NULL,
  `connectivity_mobile` varchar(15) DEFAULT NULL,
  `connectivity_isp` varchar(100) DEFAULT NULL,
  `surrounding_front` varchar(100) DEFAULT NULL,
  `surrounding_back` varchar(100) DEFAULT NULL,
  `surrounding_right` varchar(100) DEFAULT NULL,
  `surrounding_left` varchar(100) DEFAULT NULL,
  `near_by_competitors1` varchar(100) DEFAULT NULL,
  `near_by_competitors1_dis` varchar(50) DEFAULT NULL,
  `near_by_competitors1_dis_unit` varchar(20) DEFAULT NULL,
  `near_by_competitors2` varchar(100) DEFAULT NULL,
  `near_by_competitors2_dis` varchar(50) DEFAULT NULL,
  `near_by_competitors2_dis_unit` varchar(20) DEFAULT NULL,
  `near_by_competitors3` varchar(100) DEFAULT NULL,
  `near_by_competitors3_dis` varchar(50) DEFAULT NULL,
  `near_by_competitors3_dis_unit` varchar(20) DEFAULT NULL,
  `axis_bank_nearest_branch` varchar(100) DEFAULT NULL,
  `office_to_axis_bank_distance` varchar(100) DEFAULT NULL,
  `office_to_axis_bank_distance_unit` varchar(20) DEFAULT NULL,
  `nearest_bank_other_than_axis` varchar(100) DEFAULT NULL,
  `nearest_atm` varchar(100) DEFAULT NULL,
  `distance_from_office_to_atm` varchar(100) DEFAULT NULL,
  `distance_from_office_to_atm_unit` varchar(20) DEFAULT NULL,
  `associate_name` varchar(100) DEFAULT NULL,
  `cordinator_name` varchar(100) DEFAULT NULL,
  `approved_by` varchar(100) DEFAULT NULL,
  `no_of_owner` varchar(10) DEFAULT NULL,
  `total_refundable_security_deposits` double(15,2) DEFAULT NULL,
  `total_advances` double(15,2) DEFAULT NULL,
  `total_month_rent` double(15,2) DEFAULT NULL,
  `total_advance_deduction` double(15,2) DEFAULT NULL,
  `advances_start_date` date DEFAULT NULL,
  `advances_end_date` date DEFAULT NULL,
  `payment_system` varchar(100) DEFAULT NULL,
  `payment_method` varchar(100) DEFAULT NULL,
  `agreement_period_start` date DEFAULT NULL,
  `agreement_period_end` date DEFAULT NULL,
  `notice_period` varchar(100) DEFAULT NULL,
  `enhancement_clause` varchar(100) DEFAULT NULL,
  `newly_constructed_for_us` varchar(100) DEFAULT NULL,
  `last_tenant` varchar(100) DEFAULT NULL,
  `advance_deduction_wef_date` date DEFAULT NULL,
  `factsheet_premises_photos` text DEFAULT NULL,
  `no_of_renewal` int(11) NOT NULL DEFAULT 0,
  `revised_rent` double(15,2) NOT NULL DEFAULT 0.00,
  `monthly_increase` double(15,2) NOT NULL DEFAULT 0.00,
  `action_taken` mediumtext DEFAULT NULL,
  `rental_past_history` mediumtext DEFAULT NULL,
  `comment` mediumtext DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 1,
  `created_by` varchar(100) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `created_datetime` datetime DEFAULT NULL,
  `last_updated_by` varchar(100) DEFAULT NULL,
  `last_update_date` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dst_lrms_masters`
--

INSERT INTO `dst_lrms_masters` (`id`, `dst_lrms_master_id`, `region_code`, `factsheet_code`, `unique_renewal_code`, `branch_id`, `branch_code`, `branch_type`, `branch_location`, `branch_occupancy_date`, `inactive_date`, `vacation_date`, `fact_sheet_date`, `address1`, `address2`, `address3`, `city`, `state`, `postal_code`, `office_tele_no`, `near_by_highway`, `dist_from_highway`, `dist_from_highway_unit`, `safex_conectivity_route`, `property_location`, `nearest_airport`, `nearest_railway_station`, `premises_length`, `premises_length_unit`, `premises_breadth`, `premises_breadth_unit`, `premises_area`, `premises_area_unit`, `premises_height`, `premises_height_unit`, `platform_height`, `platform_height_unit`, `cantiliver_length`, `cantiliver_length_unit`, `flooring_type`, `flooring_type2`, `flooring_type3`, `flooring_type4`, `front_road_breadth`, `front_road_breadth_unit`, `operational_hours`, `operational_timing_from`, `operational_timing_to`, `connectivity_telephone`, `connectivity_mobile`, `connectivity_isp`, `surrounding_front`, `surrounding_back`, `surrounding_right`, `surrounding_left`, `near_by_competitors1`, `near_by_competitors1_dis`, `near_by_competitors1_dis_unit`, `near_by_competitors2`, `near_by_competitors2_dis`, `near_by_competitors2_dis_unit`, `near_by_competitors3`, `near_by_competitors3_dis`, `near_by_competitors3_dis_unit`, `axis_bank_nearest_branch`, `office_to_axis_bank_distance`, `office_to_axis_bank_distance_unit`, `nearest_bank_other_than_axis`, `nearest_atm`, `distance_from_office_to_atm`, `distance_from_office_to_atm_unit`, `associate_name`, `cordinator_name`, `approved_by`, `no_of_owner`, `total_refundable_security_deposits`, `total_advances`, `total_month_rent`, `total_advance_deduction`, `advances_start_date`, `advances_end_date`, `payment_system`, `payment_method`, `agreement_period_start`, `agreement_period_end`, `notice_period`, `enhancement_clause`, `newly_constructed_for_us`, `last_tenant`, `advance_deduction_wef_date`, `factsheet_premises_photos`, `no_of_renewal`, `revised_rent`, `monthly_increase`, `action_taken`, `rental_past_history`, `comment`, `status`, `created_by`, `created_date`, `created_datetime`, `last_updated_by`, `last_update_date`, `updated_at`, `created_at`) VALUES
(1, NULL, 'BJO', 'BJO001', NULL, '10201103', 'PIL12', 'CLB', 'PILKHUWA-12', '2020-02-29', NULL, NULL, '2020-02-01', 'PATNA', 'KANKAR BAGH', 'DANAPUR', 'AGARTALA', ' ', 840002, ' ', 'NH', '5', 'KM', 'BUS', 'GFDFGDG', 'PATNA', 'PNBE', 5.60, 'Feet', 6.70, 'Feet', 36.21, 'Sq.Feet', 6.70, 'Feet', 7.80, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 5.20, 'Feet', '12 Hrs.', '00:00', '19:00', 'Yes', '7982384254', 'ISP', 'FRONT', 'BACK', 'RIGHT', 'LEFT', 'COMP1', '5', 'Feet', 'COMP2', '4', 'Feet', 'COMP3', '2', 'KM', 'PATLIPUTRA', '5', 'KM', 'SBI', 'PNB', '2', 'KM', 'ASSOCIATE', 'CORDINATOR', 'APPROVED', '2', 27000.00, 18000.00, 9000.00, 2000.00, NULL, NULL, 'CURRENT MONTH BASIS', NULL, '2020-02-01', '2021-07-15', '1 Month', '10', 'Yes', 'NOT KNOWN', '2020-02-05', '1580828560_safex.JPG', 0, 0.00, 0.00, NULL, NULL, NULL, 0, NULL, '2020-02-03', NULL, NULL, NULL, '2020-02-16 19:03:56', '2020-02-03 13:11:39'),
(2, NULL, 'DEL', 'DEL001', NULL, '10301011', 'DLC15', 'IBC', 'DELHI CENTRAL-15', '2020-02-29', NULL, NULL, '2020-02-04', 'KISHANGADH', 'VASANTKUNJ', 'CAR MARKET', 'AGARTALA', ' ', 110070, ' ', 'DSDSD', '5', 'KM', 'SAFEXPRESS CONNECTIVITY ROUTE', 'SAFEXPRESS CONNECTIVITY ROUTE', 'IGI', 'NDLS', 6.70, 'Feet', 7.20, 'Feet', 47.18, 'Sq.Feet', 0.00, 'Feet', 3.00, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 3.00, 'Feet', '6 Hrs.', '00:00', '17:30', 'Yes', 'Idea', 'SDSD', 'SD', 'SD', 'SD', 'SD', 'SD', '5', 'Feet', 'DF', '4', 'Feet', 'DF', '3', 'KM', 'SD', '4', 'KM', 'SD', 'SD', '3', 'KM', 'SD', 'SD2', 'SD2', '1', 27000.00, 18000.00, 9000.00, 2000.00, NULL, NULL, 'CURRENT MONTH BASIS', NULL, '2020-02-04', '2021-02-22', '1 Month', '10', 'Yes', 'SDS', '2020-02-13', '1580828475_safex.JPG', 2, 0.00, 0.00, NULL, NULL, NULL, 0, NULL, '2020-02-04', NULL, NULL, NULL, '2020-02-16 19:01:41', '2020-02-04 00:30:03'),
(3, NULL, 'DEL', 'DEL001', 'DEL001-01', '10301011', 'DLC15', 'IBC', 'DELHI CENTRAL-15', '2020-02-29', NULL, NULL, '2020-02-04', 'KISHANGADH', 'VASANTKUNJ', 'CAR MARKET', 'ABOHAR', '0', 110070, ' ', 'DSDSD', '5', 'KM', 'SAFEXPRESS CONNECTIVITY ROUTE', 'SAFEXPRESS CONNECTIVITY ROUTE', 'IGI', 'NDLS', 6.70, 'Feet', 7.20, 'Feet', 47.18, 'Sq.Feet', 0.00, 'Feet', 3.00, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 3.00, 'Feet', '6 Hrs.', '00:00', '00:00', 'Yes', 'Airtel', 'SDSD', 'SD', 'SD', 'SD', 'SD', 'SD', '5', 'Feet', 'DF', '4', 'Feet', 'DF', '3', 'KM', 'SD', '4', 'KM', 'SD', 'SD', '3', 'KM', 'SD', 'SD2', 'SD2', '1', 27000.00, 18000.00, 9000.00, 2000.00, NULL, NULL, 'CURRENT MONTH BASIS', NULL, '2020-02-01', '2020-12-17', '1 Month', '10', 'Yes', 'SDS', NULL, NULL, 3, 12000.00, 3000.00, 'lAST INCREASED IN SEP-18 FROM 10 TO 12 (12%) I.E. 100\r\nBEFORE THAT increased in Sep-17 from 140400 to 151632 ( 8%) i.e. 11232 \r\nbefore that increase in Sep-15 from 130000 to 140400 i.e. 10400 (8%) hike, \r\nbefore that increase in Oct14 from 122698 to 130000 i.e. 7302 (6%) hike,', 'lAST INCREASED IN SEP-18 FROM 10 TO 12 (12%) I.E. 100\r\nBEFORE THAT increased in Sep-17 from 140400 to 151632 ( 8%) i.e. 11232 \r\nbefore that increase in Sep-15 from 130000 to 140400 i.e. 10400 (8%) hike, \r\nbefore that increase in Oct14 from 122698 to 130000 i.e. 7302 (6%) hike,', 'lAST INCREASED IN SEP-18 FROM 10 TO 12 (12%) I.E. 100\r\nBEFORE THAT increased in Sep-17 from 140400 to 151632 ( 8%) i.e. 11232 \r\nbefore that increase in Sep-15 from 130000 to 140400 i.e. 10400 (8%) hike, \r\nbefore that increase in Oct14 from 122698 to 130000 i.e. 7302 (6%) hike,', 1, 'ankit@gmail.com', '2020-02-06', NULL, NULL, NULL, '2020-03-23 07:06:58', '2020-02-05 22:25:58'),
(5, NULL, 'DEL', 'DEL001', 'DEL001-01', '10301011', 'DLC15', 'IBC', 'DELHI CENTRAL-15', '2020-02-29', NULL, NULL, '2020-02-04', 'KISHANGADH', 'VASANTKUNJ', 'CAR MARKET', 'ABOHAR', '0', 110070, ' ', 'DSDSD', '5', 'KM', 'SAFEXPRESS CONNECTIVITY ROUTE', 'SAFEXPRESS CONNECTIVITY ROUTE', 'IGI', 'NDLS', 6.70, 'Feet', 7.20, 'Feet', 47.18, 'Sq.Feet', 0.00, 'Feet', 3.00, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 3.00, 'Feet', '6 Hrs.', '00:00', '00:00', 'Yes', 'Airtel', 'SDSD', 'SD', 'SD', 'SD', 'SD', 'SD', '5', 'Feet', 'DF', '4', 'Feet', 'DF', '3', 'KM', 'SD', '4', 'KM', 'SD', 'SD', '3', 'KM', 'SD', 'SD2', 'SD2', '1', 27000.00, 18000.00, 9000.00, 2000.00, NULL, NULL, 'CURRENT MONTH BASIS', NULL, '2020-02-01', '2020-12-17', '1 Month', '10', 'Yes', 'SDS', NULL, NULL, 3, 12000.00, 3000.00, 'lAST INCREASED IN SEP-18 FROM 10 TO 12 (12%) I.E. 100\r\nBEFORE THAT increased in Sep-17 from 140400 to 151632 ( 8%) i.e. 11232 \r\nbefore that increase in Sep-15 from 130000 to 140400 i.e. 10400 (8%) hike, \r\nbefore that increase in Oct14 from 122698 to 130000 i.e. 7302 (6%) hike,', 'lAST INCREASED IN SEP-18 FROM 10 TO 12 (12%) I.E. 100\r\nBEFORE THAT increased in Sep-17 from 140400 to 151632 ( 8%) i.e. 11232 \r\nbefore that increase in Sep-15 from 130000 to 140400 i.e. 10400 (8%) hike, \r\nbefore that increase in Oct14 from 122698 to 130000 i.e. 7302 (6%) hike,', 'lAST INCREASED IN SEP-18 FROM 10 TO 12 (12%) I.E. 100\r\nBEFORE THAT increased in Sep-17 from 140400 to 151632 ( 8%) i.e. 11232 \r\nbefore that increase in Sep-15 from 130000 to 140400 i.e. 10400 (8%) hike, \r\nbefore that increase in Oct14 from 122698 to 130000 i.e. 7302 (6%) hike,', 0, NULL, '2020-02-06', NULL, NULL, NULL, '2020-02-16 19:02:00', '2020-02-05 22:30:09'),
(6, NULL, 'DEL', 'DEL001', 'DEL001-01', '10301011', 'DLC15', 'IBC', 'DELHI CENTRAL-15', '2020-02-29', NULL, NULL, '2020-02-04', 'KISHANGADH', 'VASANTKUNJ', 'CAR MARKET', 'ABOHAR', '0', 110070, ' ', 'DSDSD', '5', 'KM', 'SAFEXPRESS CONNECTIVITY ROUTE', 'SAFEXPRESS CONNECTIVITY ROUTE', 'IGI', 'NDLS', 6.70, 'Feet', 7.20, 'Feet', 47.18, 'Sq.Feet', 0.00, 'Feet', 3.00, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 3.00, 'Feet', '6 Hrs.', '00:00', '00:00', 'Yes', 'Airtel', 'SDSD', 'SD', 'SD', 'SD', 'SD', 'SD', '5', 'Feet', 'DF', '4', 'Feet', 'DF', '3', 'KM', 'SD', '4', 'KM', 'SD', 'SD', '3', 'KM', 'SD', 'SD2', 'SD2', '1', 27000.00, 18000.00, 9000.00, 2000.00, NULL, NULL, 'CURRENT MONTH BASIS', NULL, '2020-02-01', '2020-12-17', '1 Month', '10', 'Yes', 'SDS', NULL, NULL, 3, 12000.00, 3000.00, 'lAST INCREASED IN SEP-18 FROM 10 TO 12 (12%) I.E. 100\r\nBEFORE THAT increased in Sep-17 from 140400 to 151632 ( 8%) i.e. 11232 \r\nbefore that increase in Sep-15 from 130000 to 140400 i.e. 10400 (8%) hike, \r\nbefore that increase in Oct14 from 122698 to 130000 i.e. 7302 (6%) hike,', 'lAST INCREASED IN SEP-18 FROM 10 TO 12 (12%) I.E. 100\r\nBEFORE THAT increased in Sep-17 from 140400 to 151632 ( 8%) i.e. 11232 \r\nbefore that increase in Sep-15 from 130000 to 140400 i.e. 10400 (8%) hike, \r\nbefore that increase in Oct14 from 122698 to 130000 i.e. 7302 (6%) hike,', 'lAST INCREASED IN SEP-18 FROM 10 TO 12 (12%) I.E. 100\r\nBEFORE THAT increased in Sep-17 from 140400 to 151632 ( 8%) i.e. 11232 \r\nbefore that increase in Sep-15 from 130000 to 140400 i.e. 10400 (8%) hike, \r\nbefore that increase in Oct14 from 122698 to 130000 i.e. 7302 (6%) hike,', 0, NULL, '2020-02-06', NULL, NULL, NULL, '2020-02-16 19:03:09', '2020-02-05 22:30:54'),
(7, NULL, 'BJO', 'BJO001', ' ', '10201103', 'PIL12', 'CLB', 'PILKHUWA-12', '2020-02-29', NULL, NULL, '2020-02-01', 'PATNA', 'KANKAR BAGH', 'DANAPUR', 'ABOHAR', '0', 840002, ' ', 'NH', '5', 'KM', 'BUS', 'GFDFGDG', 'PATNA', 'PNBE', 5.60, 'Feet', 6.70, 'Feet', 36.21, 'Sq.Feet', 6.70, 'Feet', 7.80, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 5.20, 'Feet', '12 Hrs.', '00:00', '00:00', 'Yes', 'Airtel', 'ISP', 'FRONT', 'BACK', 'RIGHT', 'LEFT', 'COMP1', '5', 'Feet', 'COMP2', '4', 'Feet', 'COMP3', '2', 'KM', 'PATLIPUTRA', '5', 'KM', 'SBI', 'PNB', '2', 'KM', 'ASSOCIATE', 'CORDINATOR', 'APPROVED', '2', 27000.00, 18000.00, 9000.00, 2000.00, NULL, NULL, 'CURRENT MONTH BASIS', NULL, '2020-02-06', '2020-02-07', '1 Month', '10', 'Yes', 'NOT KNOWN', NULL, NULL, 1, 20000.00, 11000.00, 'lAST INCREASED IN SEP-18 FROM 10 TO 12 (12%) I.E. 100\r\nBEFORE THAT increased in Sep-17 from 140400 to 151632 ( 8%) i.e. 11232', 'c) Considering that waiver ,  Rental was increased last year by 8% as Lessor also got Premises repairs work done', 'c) Considering that waiver ,  Rental was increased last year by 8% as Lessor also got Premises repairs work done. This year too he has demanded 8% but we have clearly denied for that percentage & Lessor on our request has now revised his invoices with  5% hike  & is agreed for renewed period of 1 year. Lessor has already provided his no dues for financial year MARCH 19', 1, NULL, '2020-02-06', NULL, NULL, NULL, '2020-02-06 00:27:14', '2020-02-06 00:27:14'),
(8, NULL, 'DEL', 'DEL001', ' ', '10301011', 'DLC15', 'IBC', 'DELHI CENTRAL-15', '2020-02-29', NULL, NULL, '2020-02-04', 'KISHANGADH', 'VASANTKUNJ', 'CAR MARKET', 'ABOHAR', '0', 110070, ' ', 'DSDSD', '5', 'KM', 'SAFEXPRESS CONNECTIVITY ROUTE', 'SAFEXPRESS CONNECTIVITY ROUTE', 'IGI', 'NDLS', 6.70, 'Feet', 7.20, 'Feet', 47.18, 'Sq.Feet', 0.00, 'Feet', 3.00, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 3.00, 'Feet', '6 Hrs.', '00:00', '00:00', 'Yes', 'Airtel', 'SDSD', 'SD', 'SD', 'SD', 'SD', 'SD', '5', 'Feet', 'DF', '4', 'Feet', 'DF', '3', 'KM', 'SD', '4', 'KM', 'SD', 'SD', '3', 'KM', 'SD', 'SD2', 'SD2', '1', 27000.00, 18000.00, 9000.00, 2000.00, NULL, NULL, 'CURRENT MONTH BASIS', NULL, '2020-02-06', '2021-04-15', '1 Month', '10', 'Yes', 'SDS', NULL, NULL, 3, 16000.00, 7000.00, 'c) Considering that waiver ,  Rental was increased last year by 8% as Lessor also got Premises repairs work done', 'c) Considering that waiver ,  Rental was increased last year by 8% as Lessor also got Premises repairs work done', 'c) Considering that waiver ,  Rental was increased last year by 8% as Lessor also got Premises repairs work done', 1, NULL, '2020-02-06', NULL, NULL, NULL, '2020-02-06 00:46:27', '2020-02-06 00:46:27'),
(9, NULL, 'DEL', 'DEL006', NULL, ' ', 'DLC351', 'RSC', 'DELHI CENTRAL-351', '2020-02-29', NULL, NULL, '2020-02-10', 'CHHATARPUR', 'VASANT KUNJ', 'CAR MARKET', 'DELHI', 'DELHI', 110070, ' ', 'N.H', '5', 'KM', 'Safexpress', 'EAST', 'IGI', 'NDLS', 6.70, 'Feet', 7.20, 'Feet', 47.18, 'Sq.Feet', 5.00, 'Feet', 6.00, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 2.00, 'Feet', '12 Hrs.', '00:00', '00:00', 'Yes', 'Airtel', 'ISP', 'FRONT', 'BACK', 'RIGHT', 'LEFT', 'COMPETITOR1', '5', 'KM', 'Competitor2', '3', 'KM', 'Competitor', '2', 'KM', 'Big Bazar Vasant kunj', '2', 'KM', 'ICICI', 'SBI', '500', 'Meter', 'ASSOCIATE', 'CORDINATOR', 'APPROVED', '2', 27000.00, 18000.00, 9000.00, 2000.00, NULL, NULL, 'CURRENT MONTH BASIS', NULL, '2020-02-10', '2021-02-27', '1 Month', '10', 'Yes', 'Not Known', '2020-03-04', '', 0, 0.00, 0.00, NULL, NULL, NULL, 0, NULL, '2020-02-10', NULL, NULL, NULL, '2020-02-16 19:02:33', '2020-02-10 12:29:24'),
(10, NULL, 'DEL', 'DEL006', NULL, ' ', 'DLC351', 'RSC', 'DELHI CENTRAL-351', '2020-02-29', NULL, NULL, '2020-02-10', 'CHHATARPUR', 'VASANT KUNJ', 'CAR MARKET', 'DELHI', 'DELHI', 110070, ' ', 'N.H', '5', 'KM', 'Safexpress', 'EAST', 'IGI', 'NDLS', 6.70, 'Feet', 7.20, 'Feet', 47.18, 'Sq.Feet', 5.00, 'Feet', 6.00, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 2.00, 'Feet', '12 Hrs.', '00:00', '00:00', 'Yes', 'Airtel', 'ISP', 'FRONT', 'BACK', 'RIGHT', 'LEFT', 'COMPETITOR1', '5', 'KM', 'Competitor2', '3', 'KM', 'Competitor', '2', 'KM', 'Big Bazar Vasant kunj', '2', 'KM', 'ICICI', 'SBI', '500', 'Meter', 'ASSOCIATE', 'CORDINATOR', 'APPROVED', '2', 27000.00, 18000.00, 9000.00, 2000.00, NULL, NULL, 'CURRENT MONTH BASIS', NULL, '2020-02-10', '2021-02-27', '1 Month', '10', 'Yes', 'Not Known', '2020-03-04', '', 0, 0.00, 0.00, NULL, NULL, NULL, 0, NULL, '2020-02-10', NULL, NULL, NULL, '2020-02-16 19:02:11', '2020-02-10 12:30:47'),
(11, NULL, 'DEL', 'DEL006', NULL, ' ', 'DLC351', 'RSC', 'DELHI CENTRAL-351', '2020-02-29', NULL, NULL, '2020-02-10', 'CHHATARPUR', 'VASANT KUNJ', 'CAR MARKET', 'DELHI', 'DELHI', 110070, ' ', 'N.H', '5', 'KM', 'Safexpress', 'EAST', 'IGI', 'NDLS', 6.70, 'Feet', 7.20, 'Feet', 47.18, 'Sq.Feet', 5.00, 'Feet', 6.00, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 2.00, 'Feet', '12 Hrs.', '00:00', '00:00', 'Yes', 'Airtel', 'ISP', 'FRONT', 'BACK', 'RIGHT', 'LEFT', 'COMPETITOR1', '5', 'KM', 'Competitor2', '3', 'KM', 'Competitor', '2', 'KM', 'Big Bazar Vasant kunj', '2', 'KM', 'ICICI', 'SBI', '500', 'Meter', 'ASSOCIATE', 'CORDINATOR', 'APPROVED', '2', 27000.00, 18000.00, 9000.00, 2000.00, NULL, NULL, 'CURRENT MONTH BASIS', NULL, '2020-02-10', '2021-02-27', '1 Month', '10', 'Yes', 'Not Known', '2020-03-04', '', 0, 0.00, 0.00, NULL, NULL, NULL, 1, NULL, '2020-02-10', NULL, NULL, NULL, '2020-02-10 12:33:14', '2020-02-10 12:33:14'),
(12, NULL, 'DEL', 'DEL009', NULL, '10301011', 'DLC15', 'IBC', 'DELHI CENTRAL-15', '2020-02-29', NULL, NULL, '2020-02-06', 'KISHAN GADH', 'VASANT KUNJ', 'CAR MARKET', 'DELHI', 'DELHI', 110070, '5354354', 'NH 21', '2', 'KM', 'Safexpress', 'NORTH', 'IGI', 'NEW DELHI', 6.50, 'Feet', 7.20, 'Feet', 45.99, 'Sq.Feet', 6.00, 'Feet', 7.00, 'Feet', NULL, NULL, 'Plain Cemented', NULL, NULL, NULL, 30.00, 'Feet', '9 Hrs.', '00:00', '00:00', 'Yes', 'Airtel', 'ISP', 'FRONT', 'BACK', 'RIGHT', 'LEFT', 'COMPETITORS1', '5', 'KM', 'competotors2', '4', 'KM', 'competotors3', '1.5', 'KM', 'Big Bazar', '2', 'KM', 'ICICI', 'SBI', '500', 'Meter', 'ASSOCIATE', 'CORDINATOR', 'APPROVED', '2', 27000.00, 18000.00, 9000.00, 2000.00, NULL, NULL, 'CURRENT MONTH BASIS', NULL, '2020-02-10', '2021-03-31', '1 Month', '10', 'Yes', 'Not Known', '2020-02-29', '', 0, 0.00, 0.00, NULL, NULL, NULL, 1, NULL, '2020-02-10', NULL, NULL, NULL, '2020-02-10 12:59:56', '2020-02-10 12:59:56'),
(13, NULL, 'DEL', 'DEL010', NULL, '10301002', 'DLC351', 'RSC', 'DELHI CENTRAL-351', '2020-02-29', NULL, NULL, '2020-02-11', 'KISHANGADH', 'VASANTKUNJ', 'CAR MARKET', 'DELHI', 'DELHI', 110070, '242424', 'NH21', '5', 'KM', 'Safexpress connectivity Route', 'SAFEXPRESS CONNECTIVITY ROUTE', 'IGI', 'NDLS', 6.70, 'Feet', 7.80, 'Feet', 50.47, 'Sq.Feet', 2.30, 'Feet', 5.60, 'Feet', NULL, NULL, 'Plain Cemented', NULL, NULL, NULL, 500.00, 'Meter', '9 Hrs.', '06:00', '18:00', 'Yes', 'Airtel', 'SDSD', 'FRONT', 'BACK', 'RIGHT', 'LEFT', 'COMPETITORS', '5', 'KM', 'competotors2', '4', 'KM', 'Competitors3', '6', 'KM', 'Big Bazar', '2', 'KM', 'HDFC', 'SBI', '500', 'Meter', 'SD', 'SD', 'SD', '2', 27000.00, 18000.00, 9000.00, 2000.00, NULL, NULL, 'CURRENT MONTH BASIS', NULL, '2020-02-11', '2021-04-20', '1 Month', '10', 'Yes', 'Not', '2020-02-29', '', 0, 0.00, 0.00, NULL, NULL, NULL, 1, NULL, '2020-02-10', NULL, NULL, NULL, '2020-02-10 13:36:57', '2020-02-10 13:36:57'),
(14, NULL, 'DEL', 'DEL011', NULL, '10302011', 'DLI06', 'CLB', 'DELHI-06', '2020-02-10', NULL, NULL, '2020-02-04', '840', 'CHIRAG DELHI', 'DELHI', 'DELHI', 'DELHI', 110007, '9555532855', 'NH5', '50.0', 'KM', 'LANE', 'SOUTN', 'IGI', 'NEW DEHLI', 22.00, 'Feet', 188.00, 'Feet', 4136.00, 'Sq.Inch', 20.20, 'Meter', 10.00, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 10.00, 'Feet', '12 Hrs.', '10:00', '22:00', 'Yes', 'Airtel', 'ACL', 'LANE', 'LANE', 'LANE', 'LANE', 'DTDC', '1.0', 'KM', ' ', '0.0', 'KM', ' ', '0.0', 'KM', 'chirag', '10.0', 'KM', 'hdfc', 'HDFC', '2.0', 'KM', 'MAYANK', 'MAYANK', 'MAYANK', '1', 54000.00, 1000000.00, 50000.00, 4000.00, NULL, NULL, 'NEXT MONTH BASIS', NULL, '2020-02-10', '2020-02-03', '1 Month', '11', 'Yes', 'Mayank', '2020-02-03', '1581406672_unnamed.png', 0, 0.00, 0.00, NULL, NULL, NULL, 1, NULL, '2020-02-11', NULL, NULL, NULL, '2020-02-11 02:07:52', '2020-02-11 02:07:52'),
(15, NULL, 'DEL', 'DEL012', NULL, '10301029', 'DLC353', 'RSC', 'DELHI CENTRAL-353', '2020-02-11', NULL, NULL, '2020-02-11', 'A21', 'MAHIPAL PUR', 'DELHI', 'AGARTALA', ' ', 111111, ' ', 'NH8', '10.0', 'KM', 'DELHI JAIPUR', 'EAST', 'IGI', 'NEW DELHI', 10.00, 'Feet', 40.00, 'Feet', 400.00, 'Sq.Feet', 12.00, 'Feet', 2.00, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 10.00, 'Feet', '3 Hrs.', '00:00', '00:00', 'Yes', 'Airtel', 'SIFI', 'ROAD', 'ADARSH PROPRTY', 'HOTEL', 'RAM HOUSE', 'GATI', '1.0', 'Feet', 'DHL', '1.0', 'Feet', '', '0.0', 'KM', 'MAHIPAL PUR', '3.0', 'KM', 'HDFC', 'AXIX', '2', 'KM', 'RAM', 'ANKUR', 'PAWAN', '2', 50000.00, 20000.00, 10000.00, 2000.00, NULL, NULL, 'CURRENT MONTH BASIS', NULL, '2020-03-01', '2019-02-11', '1 Month', '10', 'Yes', 'ASD', '2020-04-01', '1581412915_IMG-20191126-WA0011.jpg', 0, 0.00, 0.00, NULL, NULL, NULL, 1, NULL, '2020-02-11', NULL, NULL, NULL, '2020-02-11 04:32:42', '2020-02-11 03:51:55'),
(16, NULL, 'UTP', 'UTP001', NULL, '10901005', 'AGR15', 'IBC', 'AGRA-15', '2019-02-15', NULL, NULL, '2019-02-14', 'GF-12', 'MEGHDOOT BUILDING', 'NEHRU PLACE', 'AGARTALA', ' ', 110019, ' ', 'NH-1', '10.0', 'KM', 'DND EWAY', 'EAST', 'IGI', 'NEW  DELHI', 1000.00, 'Feet', 100.00, 'Feet', 100000.00, 'Sq.Feet', 60.00, 'Feet', 6.00, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 60.00, 'Feet', '3 Hrs.', '00:00', '00:00', 'Yes', 'Airtel', 'TIKONA', 'MODI TOWER', 'BAJAJ HOUSE', 'EXPRESS BUILDING', 'SKYLARK BUILDING', 'FIRST FLIGHT', '0.0', 'Feet', 'DTDC', '20.0', 'Feet', 'FEDX', '30.0', 'KM', 'NEHRU PLACE', '2.0', 'KM', 'CORPORATION BANK', 'PNB', '10', 'Feet', 'DINESH', 'RAHUL', 'RAESH', '4', 100000.00, 108000.00, 100000.00, 4000.00, NULL, NULL, 'CURRENT MONTH BASIS', NULL, '2019-02-15', '2020-03-15', '1 Month', '2', 'Yes', 'AGRAWAL', '2019-02-15', '1581775302_1-2199.jpg', 0, 0.00, 0.00, NULL, NULL, NULL, 1, NULL, '2020-02-15', NULL, NULL, NULL, '2020-02-16 14:31:59', '2020-02-15 08:31:42'),
(17, NULL, 'DEL', 'DEL013', NULL, '10301011', 'DLC15', 'IBC', 'DELHI CENTRAL-15', '2019-02-17', NULL, NULL, '2019-02-15', 'I-220', 'PEERA GARI', 'DELHI', 'AGARTALA', ' ', 110040, ' ', 'NH-500', '10.0', 'KM', 'BY ROAD', 'EAST', 'IGI', 'NEW', 10.00, 'Feet', 10.00, 'Feet', 100.00, 'Sq.Feet', 10.00, 'Feet', 10.00, 'Feet', NULL, NULL, 'Plain Cemented', NULL, NULL, NULL, 10.00, 'Feet', '3 Hrs.', '00:00', '00:00', 'Yes', 'Airtel', 'TIKONA', 'BAJAJ  HOUSE', 'ENGG COLLEGE', 'SKYLARK BUILDING', 'MEDICAL COLLEGE', 'BLUE DART', '0.0', 'Feet', 'DTDC', '10.0', 'Feet', 'FEDX', '10.0', 'KM', 'PEERA GARI', '1', 'KM', 'SBI', 'PNB', '1', 'KM', 'DINESH', 'RAHUL', 'SANJAY', '1', 20000.00, 44000.00, 10000.00, 2000.00, NULL, NULL, 'CURRENT MONTH BASIS', NULL, '2019-02-17', '2020-02-16', '1 Month', '10', 'Yes', 'DIGITALLY SYSTEM', '2019-03-17', '1581883586_1-2199.jpg', 1, 0.00, 0.00, NULL, NULL, NULL, 1, NULL, '2020-02-16', NULL, NULL, NULL, '2020-02-16 15:34:03', '2020-02-16 14:36:26'),
(18, NULL, 'UTP', 'UTP002', NULL, '10927003', 'VAR13', 'CLB', 'VARANASI-13', '2020-02-17', NULL, NULL, '2020-02-16', 'H.NO 154', 'BAIJOO NAGAR', 'SAIDPUR', 'AGARTALA', ' ', 233304, ' ', 'NH-98', '10.0', 'KM', 'BY HIGHWAY', 'SOUTH', 'BABATPUR', 'VARANASI', 100.00, 'Feet', 30.00, 'Feet', 3000.00, 'Sq.Feet', 20.00, 'Feet', 10.00, 'Feet', NULL, NULL, 'Plain Cemented', NULL, NULL, NULL, 30.00, 'Feet', '3 Hrs.', '00:00', '00:00', 'Yes', 'Airtel', 'JIO', 'BHU', 'IIT', 'UNIVERSITY', 'MEDICAL COLLEGE', 'FIRST FLIGHT', '1.0', 'Feet', 'DTDC', '2.0', 'Feet', 'FEDX', '3.0', 'KM', 'SADAR BAZAR', '1.0', 'KM', 'ICICI', 'SBI', '5', 'KM', 'RAMESH', 'DINESH', 'DINESH', '1', 6000.00, 108000.00, 4000.00, 4000.00, NULL, NULL, 'CURRENT MONTH BASIS', NULL, '2020-02-17', '2021-02-17', '1 Month', '5', 'Yes', 'TOWN NATIONAL INTER COLLEGE', '2020-02-17', '1581917928_1-2199.jpg', 0, 0.00, 0.00, NULL, NULL, NULL, 1, NULL, '2020-02-17', NULL, NULL, NULL, '2020-02-17 01:09:11', '2020-02-17 00:08:49'),
(19, NULL, 'DEL', 'DEL014', NULL, '10301011', 'DLC15', 'IBC', 'DELHI CENTRAL-15', '2020-02-28', NULL, NULL, '2020-02-18', '840, CHIRAG DELHI', 'DELHI', 'DELHI', 'DELHI', 'DELHI', 110041, '544556', 'NH41', '5', 'KM', 'by Road', 'WEST', 'DELHI', 'DELHI', 5.60, 'Feet', 7.20, 'Feet', 39.42, 'Sq.Feet', 6.70, 'Feet', 7.30, 'Feet', NULL, NULL, 'Plain Cemented', NULL, NULL, NULL, 4.50, 'Feet', '9 Hrs.', '08:00', '15:00', 'Yes', 'Airtel', 'TIKONA', 'MACD', 'MODI TOWER', 'EXPRESS BUILDING', 'BMCH', 'BLUE DART', '5', 'KM', 'dtdc', '4', 'KM', 'Fedx', '3', 'KM', 'dumdum axix bank', '4', 'KM', 'ICICI', 'PNB', '5', 'KM', 'RAMESH', 'DINESH', 'GAURAV', '1', 270000.00, 90000.00, 20000.00, 4000.00, NULL, NULL, 'CURRENT MONTH BASIS', NULL, '2020-02-18', '2021-11-25', '1 Month', '10', 'Yes', 'govind  and sons', '2020-02-20', '1581967807_1-2199.jpg', 4, 0.00, 0.00, NULL, NULL, NULL, 1, NULL, '2020-02-17', NULL, NULL, NULL, '2020-02-18 12:03:49', '2020-02-17 14:00:07'),
(20, NULL, 'RAJ', 'RAJ001', NULL, '10901005', 'AGR15', 'IBC', 'AGRA-15', '2020-02-19', NULL, NULL, '2020-02-18', 'JAIPUR', 'JAIPUR HOUE', 'JAIPUR', 'RAJAHMUNDRY', 'HARYANA', 540021, '25252525', 'NH41', '10.0', 'KM', 'by Road', 'WEST', 'BABATPUR', 'NEW DELHI', 10.00, 'Feet', 10.00, 'Feet', 100.00, 'Sq.Feet', 10.00, 'Feet', 10.00, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 10.00, 'Feet', '3 Hrs.', '00:00', '00:00', 'Yes', 'Airtel', 'TIKONA', 'BAJAJ  HOUSE', 'BAJAJ HOUSE', 'EXPRESS BUILDING', 'MEDICAL COLLEGE', 'BLUE DART', '1.0', 'KM', 'dtdc', '20.0', 'KM', 'Fedx', '30.0', 'KM', 'south  delhi', '10.0', 'KM', 'Corporation bank', 'PNB', '10', 'KM', 'MUKESH', 'RAHUL', 'RAESH', '1', 10000.00, 24000.00, 2000.00, 1000.00, NULL, NULL, 'NEXT MONTH BASIS', NULL, '2020-02-18', '2022-02-19', '1 Month', '5', 'Yes', 'Digitally System', '2022-02-19', '1582049589_bird1.jpg', 0, 0.00, 0.00, NULL, NULL, NULL, 1, NULL, '2020-02-18', NULL, NULL, NULL, '2020-02-18 12:43:09', '2020-02-18 12:43:09'),
(21, NULL, 'DEL', 'DEL015', NULL, '10301011', 'DLC15', 'IBC', 'DELHI CENTRAL-15', '2020-02-19', NULL, NULL, '2020-02-19', 'DELHI', 'DELHI', 'DELHI', 'AGARTALA', ' ', 110065, ' ', 'NH3', '5.0', 'KM', 'HIGHWAY', 'WEST', 'IGI', 'NEW DELHI', 45.00, 'Feet', 30.00, 'Feet', 1350.00, 'Sq.Feet', 35.00, 'Feet', 40.00, 'Feet', NULL, NULL, 'Trimix Floor', NULL, NULL, NULL, 10.00, 'Feet', '3 Hrs.', '00:00', '00:00', 'Yes', 'Airtel', 'AIRTEL', 'LANE', 'LANE', 'ROAD', 'ROAD`', 'BLUE DART', '4.00', 'Feet', 'DTCT', '5.00', 'Feet', '', '0.0', 'KM', '5.00', '3.00', 'KM', 'SBI', 'KOTAK', '4.00', 'KM', 'MAYANK', 'ORASHANT', 'BHUSHAN', '5', 50000.00, 100000.00, 15000.00, 5000.00, NULL, NULL, 'CURRENT MONTH BASIS', NULL, '2020-02-19', '2020-02-04', '3 MONTH', ' ', 'Yes', 'NONE', '2020-02-25', '1582098526_Screenshot from 2018-07-24 18-50-58.png', 0, 0.00, 0.00, NULL, NULL, NULL, 1, NULL, '2020-02-19', NULL, NULL, NULL, '2020-02-19 03:42:23', '2020-02-19 02:18:46'),
(22, NULL, 'HAR', 'HAR001', NULL, '10901003', 'AGR13', 'IBC', 'AGRA-13', '2020-02-20', NULL, NULL, '2020-02-10', 'MAIN ROAD', 'NH-3', 'MAIN CITY', 'ALIGARH', ' ', 110045, ' ', 'NH2', '2.3', 'KM', 'DELHI NAGPUR', 'EAST', 'AGRA', 'AGRA', 11.50, 'Feet', 10.00, 'Feet', 114.17, 'Sq.Feet', 12.00, 'Feet', 4.00, 'Feet', NULL, NULL, 'Plain Cemented', NULL, NULL, NULL, 13.00, 'Feet', '24 Hrs.', '00:00', '00:00', 'Yes', 'MTNL', 'SIFY', 'ROAD', 'GARDEN', 'OFFICE', 'ROAD', 'GATI', '2.0', 'Feet', 'OM CARRING', '3.0', 'Feet', 'FEDEX', '1.1', 'KM', 'AGRA CITY', '2.5', 'KM', '', '', ' ', 'KM', 'RAHUL', 'MANISH', 'AJAY SHARMA', '2', 20000.00, 10000.00, 5000.00, 1000.00, NULL, NULL, 'CURRENT MONTH BASIS', NULL, '2020-03-01', '2023-02-28', '1 MONTH', '10%', 'Yes', '', '2020-03-01', '1582104478_Sample-Cancelled-Cheques-SBI.png', 0, 0.00, 0.00, NULL, NULL, NULL, 1, NULL, '2020-02-19', NULL, NULL, NULL, '2020-02-22 05:49:55', '2020-02-19 03:57:58'),
(23, NULL, 'APT', 'APT001', NULL, '10901012', 'AGR02', 'CLB', 'AGRA-02', '2020-02-23', NULL, NULL, '2020-02-22', 'X-100', 'BHOPAL', 'BHOPAL', 'BHOPAL', 'MADHYA PRADESH', 110011, ' ', 'NH12', '10.0', 'KM', 'BY FOOT', 'WEST', 'BHOPAL', 'BHOPAL', 10.00, 'Feet', 10.00, 'Feet', 100.00, 'Sq.Feet', 10.00, 'Feet', 10.00, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 10.00, 'Feet', '3 Hrs.', '00:00', '00:00', 'Yes', 'Airtel', 'TIKONA', 'MACD', 'DINESH', 'DINESH', 'RAJA  HOUSE', 'BLUE DART', '10.0', 'Feet', 'DTDC', '10.0', 'Feet', 'FEDX', '10.0', 'KM', 'MAIN ROAD', '10.0', 'KM', 'HDFC', 'PNB', '500', 'KM', 'MUKESH', 'RAHUL', 'RAESH', '2', 10000.00, 20000.00, 5000.00, 1000.00, NULL, NULL, 'CURRENT MONTH BASIS', 'RTGS', '2020-02-23', '2021-02-23', '1 MONTH', '2', 'Yes', 'GOVIND  AND SONS', '2020-02-23', '1582400564_1-2199.jpg', 0, 0.00, 0.00, NULL, NULL, NULL, 1, NULL, '2020-02-22', NULL, NULL, NULL, '2020-03-15 11:41:58', '2020-02-22 14:12:44'),
(24, NULL, 'UTP', 'UTP003', NULL, '10901005', 'AGR15', 'IBC', 'AGRA-15', '2020-02-23', NULL, NULL, '2020-02-22', 'LOHA MANDI', 'AGRA', 'AGRA', 'AGRA', 'UTTAR PRADESH', 110010, '434353534', 'NH41', '10.0', 'KM', 'By foot', 'WEST', 'LUCKNOW', 'NEW DELHI', 10.00, 'Feet', 10.00, 'Feet', 100.00, 'Sq.Feet', 10.00, 'Feet', 10.00, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 1.00, 'Feet', '3 Hrs.', '00:00', '00:00', 'Yes', 'Airtel', 'TIKONA', 'RAM', 'AIIMS', 'BOB', 'UMESH', 'FIRST FLIGHT', '10.0', 'KM', 'none', '0.0', 'KM', 'Fedx', '10.0', 'KM', 'loha mandi', '10.0', 'KM', 'Syndicate bank', 'PNB', '4', 'KM', '', '', '', '2', 10000.00, 20000.00, 5000.00, 500.00, NULL, NULL, 'CURRENT MONTH BASIS', 'RTGS', '2020-02-23', '2021-02-23', '1 Month', '5', 'Yes', 'govind  and sons', '2020-02-23', '1582401578_1-2199.jpg', 0, 0.00, 0.00, NULL, NULL, NULL, 1, NULL, '2020-02-22', NULL, NULL, NULL, '2020-02-22 14:29:38', '2020-02-22 14:29:38'),
(25, NULL, 'GUJ', 'GUJ001', NULL, '30102003', 'GHT13', 'CLB', 'GUWAHATI-13', '2020-02-23', NULL, NULL, '2020-02-23', '78', 'GOHATI', 'ASAM', 'ASANSOL', 'ASSAM', 808080, '000000000', 'NH-1000', '10', 'KM', 'by road', 'WEST', 'LUCKNOW', 'NEW DELHI', 10.00, 'Feet', 10.00, 'Feet', 100.00, 'Sq.Feet', 10.00, 'Feet', 10.00, 'Feet', NULL, NULL, 'Trimix Floor', NULL, NULL, NULL, 10.00, 'Feet', '3 Hrs.', '00:00', '00:00', 'Yes', 'Airtel', 'TIKONA', 'MACD', 'AIIMS', 'EXPRESS BUILDING', 'BMCH', 'FIRST FLIGHT', '01.0', 'KM', 'dtdc', '10.0', 'KM', 'Fedx', '10.0', 'KM', 'asam', '10.0', 'KM', 'Andhra Bank', 'SBI', '500', 'Meter', 'MUKESH', 'RAHUL', 'RAESH', '2', 20000.00, 40000.00, 2000.00, 100.00, NULL, NULL, 'CURRENT MONTH BASIS', 'EFT', '2020-02-23', '2021-02-23', '1 Month', '12%', 'Yes', 'govind  and sons', '2021-02-23', '1582403281_bird1.jpg', 0, 0.00, 0.00, NULL, NULL, NULL, 1, NULL, '2020-02-22', NULL, NULL, NULL, '2020-02-22 14:58:01', '2020-02-22 14:58:01'),
(26, NULL, 'BJO', 'BJO003', NULL, '30601002', 'AGT12', 'CLB', 'AGARTLA-12', '2020-02-24', NULL, NULL, '2020-02-24', 'BHERA', 'BHAWAN', 'KURLA', 'AMBIKAPUR', 'GUJARAT', 744104, '1212121212', 'NH-200', '10.0', 'KM', 'by Road', 'EAST', 'IGI', 'NEW  DELHI', 10.00, 'Feet', 10.00, 'Feet', 100.00, 'Sq.Feet', 10.00, 'Feet', 10.00, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 10.00, 'Feet', '24 Hrs.', '00:00', '00:00', 'Yes', 'Airtel', 'TIKONA', '', '', '', '', '', '0.0', 'KM', ' ', '0.0', 'KM', ' ', '0.0', 'KM', 'axix bank', '10.0', 'KM', 'Syndicate bank', 'PNB', '5', 'KM', 'MUKESH', 'RAHUL', 'RAESH', '1', 10000.00, 5000.00, 2000.00, 200.00, NULL, NULL, 'CURRENT MONTH BASIS', NULL, '2020-02-24', '2021-02-24', '1 Month', '5', 'Yes', 'govind  and sons', '2020-02-24', '1582527171_office.jpg', 0, 0.00, 0.00, NULL, NULL, NULL, 1, NULL, '2020-02-24', NULL, NULL, NULL, '2020-02-24 01:22:51', '2020-02-24 01:22:51'),
(27, NULL, 'RAJ', 'RAJ002', NULL, '10806004', 'JPC14', 'CLB', 'JAIPUR CITY-14', '2020-02-24', NULL, NULL, '2020-02-24', '12 ,', 'HAWA MAHAL', 'JAIPUR', 'JAIPUR', 'RAJASTHAN', 300300, ' ', 'JAIPUR HIGHWAY', '10.0', 'KM', 'DELHI JAIPUR', 'NORTH EAST', 'JAIPUR', 'JAIPUR', 10.00, 'Feet', 10.00, 'Feet', 100.00, 'Sq.Feet', 10.00, 'Feet', 10.00, 'Feet', NULL, NULL, 'RCC Flooring', NULL, NULL, NULL, 10.00, 'Feet', '24 Hrs.', '00:00', '00:00', 'Yes', 'Airtel', 'TIKONA', 'MACD', 'DINESH', 'DINESH', 'RAJA  HOUSE', 'FIRST FLIGHT', '10.0', 'Feet', 'DTDC', '10.0', 'Feet', 'FEDX', '10.0', 'KM', 'BANK STRRET', '10.0', 'KM', 'CORPORATION BANK', 'PNB', '10', 'KM', 'DINESH', 'RAMESH', 'GAURAV', '1', 10000.00, 24000.00, 2000.00, 1000.00, NULL, NULL, 'NEXT MONTH BASIS', NULL, '2020-02-24', '2021-02-24', '2 MONTH', '12%', 'Yes', 'DTDC', '2020-02-24', '1582554639_office.jpg', 0, 0.00, 0.00, NULL, NULL, NULL, 1, NULL, '2020-02-24', NULL, NULL, NULL, '2020-03-01 21:28:14', '2020-02-24 09:00:39'),
(28, NULL, 'DEL', 'DEL016', NULL, '10301011', 'DLC15', 'IBC', 'DELHI CENTRAL-15', '2020-02-25', NULL, NULL, '2020-02-25', 'A-21', 'EXT 1A', 'NANGLOI', 'DELHI', 'DELHI', 110041, '12365412', 'NH-100', '10.0', 'KM', 'by road', 'WEST', 'IGI', 'NEW DELHI', 10.00, 'Feet', 10.00, 'Feet', 100.00, 'Sq.Feet', 10.00, 'Feet', 10.00, 'Feet', NULL, NULL, 'Plain Cemented', NULL, NULL, NULL, 10.00, 'Feet', '24 Hrs.', '00:00', '00:00', 'Yes', 'Airtel', 'ACL', 'RAM', 'SHYMA', 'GANESH', 'MAHESH', 'GATI', '10.0', 'KM', 'none', '0.0', 'KM', 'none', '0.0', 'KM', 'punjabi basti', '10.0', 'KM', 'pnb', 'SBI', '1', 'KM', '', '', '', '4', 10000.00, 20000.00, 5000.00, 1000.00, NULL, NULL, 'CURRENT MONTH BASIS', NULL, '2020-02-25', '2021-02-25', '1 Month', '10', 'Yes', 'dinesh', '2020-02-25', '1582571280_office.jpg', 0, 0.00, 0.00, NULL, NULL, NULL, 1, NULL, '2020-02-24', NULL, NULL, NULL, '2020-02-24 20:08:57', '2020-02-24 13:38:00'),
(29, NULL, 'CRP', 'CRP001', NULL, '40303001', 'CCH11', 'HBC', 'COCHIN-11', '2020-02-25', NULL, NULL, '2020-02-25', '840, CHIRAG DELHI', 'DELHI', 'DELHI', 'DELHI', 'DELHI', 110041, '5345353', 'NH-200', '10.0', 'KM', 'By  Lane', 'NORTH EAST', 'IGI', 'NEW  DELHI', 10.00, 'Feet', 10.00, 'Feet', 100.00, 'Sq.Feet', 10.00, 'Feet', 10.00, 'Feet', NULL, NULL, 'Plain Cemented', NULL, NULL, NULL, 10.00, 'Feet', '24 Hrs.', '00:00', '00:00', 'Yes', 'Airtel', 'TIKONA', 'MACD', 'DINESH', 'DINESH', 'RAJA  HOUSE', 'BLUE DART', '10.0', 'KM', 'dtdc', '10.0', 'KM', 'Fedx', '10.0', 'KM', 'nangloi', '1', 'KM', 'Syndicate bank', 'SBI', '5', 'KM', 'MUKESH', 'RAHUL', 'RAESH', '5', 20000.00, 50000.00, 6000.00, 2000.00, NULL, NULL, 'CURRENT MONTH BASIS', NULL, '2020-02-25', '2021-02-25', '1 Month', '5', 'Yes', 'Digitally System', '2020-02-25', '1582576332_office.jpg', 0, 0.00, 0.00, NULL, NULL, NULL, 1, NULL, '2020-02-24', NULL, NULL, NULL, '2020-02-25 21:45:26', '2020-02-24 15:02:12'),
(30, NULL, 'MHG', 'MHG001', NULL, '20510008', 'NGC11', 'HBC', 'NAGPUR CITY-11', '2020-03-01', NULL, NULL, '2020-02-28', 'STATION ROAD', 'NATIONAL HIGHWAY 29', 'PARK STREET', 'NAGPUR', 'DELHI', 123456, ' ', '29', '2.4', 'KM', 'DELHI-CHENNAI', 'WEST', 'NAGPUR', 'NASIK', 12.30, 'Feet', 10.50, 'Feet', 127.60, 'Sq.Feet', 12.00, 'Feet', 4.00, 'Feet', NULL, NULL, 'Plain Cemented', NULL, NULL, NULL, 11.00, 'Feet', '24 Hrs.', '00:00', '00:00', 'Yes', 'Idea', 'SIFY', 'GATI', 'RESIDENCE', 'ROAD', 'ROAD', 'ABD', '2', 'Feet', 'INDEX', '3', 'Feet', 'FEDEX', '4.5', 'KM', 'NAGPUR CITY', '2', 'KM', 'HDFC', 'HDFC', '3', 'KM', 'PRASANT VERMA', 'RAMESH', 'DAHUYA', '3', 100000.00, 50000.00, 25000.00, 5000.00, NULL, NULL, 'NEXT MONTH BASIS', NULL, '2020-03-01', '2023-02-28', '2 MONTH', '20', 'Yes', '', '2020-03-01', '1582885030_office.jpg', 0, 0.00, 0.00, NULL, NULL, NULL, 1, NULL, '2020-02-28', NULL, NULL, NULL, '2020-03-06 02:54:09', '2020-02-28 01:02:34'),
(31, NULL, 'KRL', 'KRL001', NULL, '40303001', 'CCH11', 'HBC', 'COCHIN-11', '2020-04-01', NULL, NULL, '2020-03-15', 'ROAD NO 56', 'MAIN MARKET', 'ERNAKULAM', 'COCHIN', 'KERALA', 638001, ' ', 'NH 48', '1.3', 'KM', 'delhi agra chennai', 'EAST FACING', 'KOZIKHODE', 'ERNAKULAM', 12.00, 'Feet', 10.00, 'Feet', 120.00, 'Sq.Feet', 30.00, 'Feet', 10.00, 'Feet', NULL, NULL, 'Trimix Floor', NULL, NULL, NULL, 60.00, 'Feet', '3 Hrs.', '00:00', '00:00', 'Yes', 'Airtel', 'SIFY', 'ROAD', 'OFFICE', 'BUILDING', 'PARK', 'FEDEX', '2.1', 'KM', 'gati', '2', 'KM', 'dhl', '1', 'KM', 'main market cochin', '3', 'KM', 'hdfc', 'SBI', '1', 'KM', 'DINESH KUMAR', 'RAJIV JAIN', 'AJAY SHARMA', '2', 50000.00, 40000.00, 10000.00, 5000.00, NULL, NULL, 'CURRENT MONTH BASIS', NULL, '2020-04-01', '2023-03-31', '3 Month', '10', 'Yes', 'RAM', '2020-04-01', '', 0, 0.00, 0.00, NULL, NULL, NULL, 1, NULL, '2020-03-15', NULL, NULL, NULL, '2020-03-15 02:24:54', '2020-03-15 02:24:54'),
(32, NULL, 'JKH', 'JKH001', NULL, '10601001', 'JMU11', 'HBC', 'JAMMU-11', '2020-03-15', NULL, NULL, '2020-03-15', 'H-98', 'ROAD 9', 'CITY CENTRE', 'JAMMU', 'JAMMU AND KASHMIR', 123432, ' ', 'NH87', '3', 'KM', 'DELHI AGRA', 'MAIN CITY', 'JAMMU', 'UDHAMPUR', 20.00, 'Feet', 10.00, 'Feet', 200.00, 'Sq.Feet', 12.00, 'Feet', 4.00, 'Feet', NULL, NULL, 'Plain Cemented', NULL, NULL, NULL, 10.00, 'Feet', '24 Hrs.', '00:00', '00:00', 'Yes', 'Airtel', 'SIFY', 'ROAD', 'PARK', 'OPEN', 'OFFICE', 'GATI', '1', 'Feet', 'FEDEX', '2', 'Feet', 'DHL', '1.5', 'KM', 'MAIN CITY', '2', 'KM', 'HDFC', 'YES BANK', '2', 'KM', 'RAM', 'SOHAN', 'MOHAN', '2', 200000.00, 100000.00, 50000.00, 10000.00, NULL, NULL, 'CURRENT MONTH BASIS', NULL, '2020-04-01', '2023-03-31', '2 MONTH', '10', 'Yes', 'VACANT', '2020-04-01', '', 0, 0.00, 0.00, NULL, NULL, NULL, 1, NULL, '2020-03-15', NULL, NULL, NULL, '2020-03-15 10:09:21', '2020-03-15 02:46:33'),
(33, NULL, 'UTP', 'UTP004', NULL, '10914015', 'LKW02', 'CLB', 'LUCKNOW-02', '2020-03-16', NULL, NULL, '2020-03-16', 'G-11', 'ROAD NO 2', 'INDRA NAGAR', 'LUCKNOW', 'UTTAR PRADESH', 233306, '051025252525', 'NH-200', '10.0', 'KM', 'lucknow expressway', 'EAST', 'LUCKNOW', 'LUCKNOW', 10.00, 'Feet', 10.00, 'Feet', 100.00, 'Sq.Feet', 10.00, 'Feet', 6.00, 'Feet', NULL, NULL, 'Plain Cemented', NULL, NULL, NULL, 20.00, 'Feet', '24 Hrs.', '00:00', '00:00', 'Yes', 'Airtel', 'EXCITEL', 'RAOD', 'OFFICE', 'FIELD', 'ROAD', 'GATI', '1.0', 'KM', 'dtdc', '2.0', 'KM', 'Fedx', '3.0', 'KM', 'main market indra nagar', '5.0', 'KM', 'union bank', 'SBI', '5', 'KM', 'AMAR', 'AKBAR', 'RAHIM', '2', 20000.00, 50000.00, 6000.00, 2000.00, NULL, NULL, 'CURRENT MONTH BASIS', NULL, '2020-03-16', '2021-03-16', '1 Month', '10', 'Yes', 'gati cargo', '2020-03-16', '', 0, 0.00, 0.00, NULL, NULL, NULL, 1, NULL, '2020-03-16', NULL, NULL, NULL, '2020-03-16 08:47:31', '2020-03-16 08:47:31'),
(34, NULL, 'BJO', 'BJO004', NULL, '10901010', 'AGR17', 'HBA', 'AGRA-17', '2020-03-31', NULL, NULL, '2020-03-18', 'DELHI', 'CHHATARPUR', 'DELHI', 'DELHI', 'DELHI', 110070, ' ', '56', '675', 'KM', '576', '675', 'IGI', 'NDLS', 7.00, 'Feet', 9.00, 'Feet', 63.00, 'Sq.Feet', 8.00, 'Feet', 9.00, 'Feet', NULL, NULL, 'Plain Cemented', NULL, NULL, NULL, 9.00, 'Feet', '3 Hrs.', '00:00', '00:00', 'Yes', 'Airtel', 'GF', 'HG', 'GFDG', 'GFD', 'GFD', 'DF', '6', 'KM', 'fhg', '6', 'KM', 'fgfghf', '6', 'KM', 'dgfhfdg', 'gfgd', 'KM', 'jhg', 'GFG', '7', 'KM', 'F', 'DFSF', 'DSDF', '1', 400000.00, 7000.00, 2000.00, 700.00, NULL, NULL, 'CURRENT MONTH BASIS', NULL, '2020-03-18', '2020-12-23', '1 Month', '10', 'Yes', 'cfhgf', '2020-03-20', '', 0, 0.00, 0.00, NULL, NULL, NULL, 1, NULL, '2020-03-18', NULL, NULL, NULL, '2020-03-17 21:03:02', '2020-03-17 21:03:02'),
(35, NULL, 'DEL', 'DEL017', NULL, '10301015', 'DLN18', 'CLB', 'DELHI NORTH-18', '2020-03-18', NULL, NULL, '2020-03-18', '256,ROAD NO 12', 'UTTAM NAGAR', 'DELHI', 'DELHI', 'DELHI', 110072, '011254258258', 'NH-45', '1', 'KM', 'by road', 'SOUTH', 'IGI', 'NEW DELHI', 10.00, 'Feet', 10.10, 'Feet', 100.83, 'Sq.Feet', 10.00, 'Feet', 5.00, 'Feet', NULL, NULL, 'Plain Cemented', NULL, NULL, NULL, 20.00, 'Feet', '24 Hrs.', '00:00', '00:00', 'Yes', 'Airtel', 'ACL', 'ROAD', 'OFFICE', 'ROAD', 'OFFICE', 'GATI', '10.0', 'KM', 'dtdc', '01.0', 'KM', 'Fedx', '10.0', 'KM', 'old street', '1', 'KM', 'HDFC', 'SBI', '5', 'KM', 'MUKESH', 'RAHUL', 'RAESH', '1', 10000.00, 20000.00, 5000.00, 1000.00, NULL, NULL, 'CURRENT MONTH BASIS', NULL, '2020-03-18', '2021-03-18', '1 Month', '10', 'Yes', 'Digitally System', '2020-03-18', '1584515466_office.jpg', 0, 0.00, 0.00, NULL, NULL, NULL, 1, NULL, '2020-03-18', NULL, NULL, NULL, '2020-03-18 07:11:06', '2020-03-18 07:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `dst_lrms_rent_agreements`
--

CREATE TABLE `dst_lrms_rent_agreements` (
  `id` int(11) NOT NULL,
  `dst_lrms_master_id` int(11) DEFAULT NULL,
  `factsheet_code` varchar(30) DEFAULT NULL,
  `lease_agreement_start_date` date DEFAULT NULL,
  `lease_agreement_end_date` date DEFAULT NULL,
  `premises_address` varchar(100) DEFAULT NULL,
  `premises_state` varchar(100) DEFAULT NULL,
  `premises_pin_code` varchar(10) DEFAULT NULL,
  `premises_area` varchar(10) DEFAULT NULL,
  `premises_area_unit` varchar(30) DEFAULT NULL,
  `lease_period` varchar(50) DEFAULT NULL,
  `increment_rate` varchar(50) DEFAULT NULL,
  `monthly_rent` double(15,2) DEFAULT NULL,
  `monthly_rent_in_words` varchar(255) DEFAULT NULL,
  `lease_total_amount` double(15,2) DEFAULT NULL,
  `total_refundable_security_deposits` double(15,2) DEFAULT NULL,
  `notice_period` varchar(20) DEFAULT NULL,
  `no_of_owner` varchar(10) DEFAULT NULL,
  `name_of_owner` varchar(100) DEFAULT NULL,
  `owner_full_address` text DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `last_updated_by` varchar(50) DEFAULT NULL,
  `last_update_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dst_lrms_rent_agreements`
--

INSERT INTO `dst_lrms_rent_agreements` (`id`, `dst_lrms_master_id`, `factsheet_code`, `lease_agreement_start_date`, `lease_agreement_end_date`, `premises_address`, `premises_state`, `premises_pin_code`, `premises_area`, `premises_area_unit`, `lease_period`, `increment_rate`, `monthly_rent`, `monthly_rent_in_words`, `lease_total_amount`, `total_refundable_security_deposits`, `notice_period`, `no_of_owner`, `name_of_owner`, `owner_full_address`, `created_by`, `created_date`, `last_updated_by`, `last_update_date`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '2020-02-01', '2021-07-15', 'PATNAKANKAR BAGHDANAPUR', 'BIHAR', '840002', '36.21', 'Sq.Feet', '17', '10', 9000.00, NULL, 153000.00, 27000.00, '1 Month', '2', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-03 13:11:39', '2020-02-03 13:11:39'),
(2, 2, NULL, '2020-02-04', '2021-02-22', 'KISHANGADHVASANTKUNJCAR MARKET', 'DELHI', '110070', '47.18', 'Sq.Feet', '12', '10', 9000.00, NULL, 108000.00, 27000.00, '1 Month', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-04 00:30:03', '2020-02-04 00:30:03'),
(3, 6, NULL, '2020-02-01', '2020-12-17', 'KISHANGADHVASANTKUNJCAR MARKET', '0', '110070', '47.18', 'Sq.Feet', '10', '10', 9000.00, NULL, 90000.00, 27000.00, '1 Month', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-05 22:30:54', '2020-02-05 22:30:54'),
(4, 7, NULL, '2020-02-06', '2020-02-07', 'PATNAKANKAR BAGHDANAPUR', '0', '840002', '36.21', 'Sq.Feet', '0', '10', 20000.00, NULL, 0.00, 27000.00, '1 Month', '2', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-06 06:10:51', '2020-02-06 00:27:14'),
(5, 8, NULL, '2020-02-06', '2021-04-15', 'KISHANGADHVASANTKUNJCAR MARKET', '0', '110070', '47.18', 'Sq.Feet', '14', '10', 16000.00, NULL, 224000.00, 27000.00, '1 Month', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-06 00:46:27', '2020-02-06 00:46:27'),
(6, 11, NULL, '2020-02-10', '2021-02-27', 'CHHATARPURVASANT KUNJCAR MARKET', 'DELHI', '110070', '47.18', 'Sq.Feet', '12', '10', 9000.00, NULL, 108000.00, 27000.00, '1 Month', '2', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-10 12:33:14', '2020-02-10 12:33:14'),
(7, 12, 'DEL009', '2020-02-10', '2021-03-31', 'KISHAN GADHVASANT KUNJCAR MARKET', 'DELHI', '110070', '45.99', 'Sq.Feet', '13', '10', 9000.00, NULL, 117000.00, 27000.00, '1 Month', '2', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-10 12:59:56', '2020-02-10 12:59:56'),
(8, 13, 'DEL010', '2020-02-11', '2021-04-20', 'KISHANGADHVASANTKUNJCAR MARKET', 'DELHI', '110070', '50.47', 'Sq.Feet', '14', '10', 9000.00, NULL, 126000.00, 27000.00, '1 Month', '2', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-10 13:36:57', '2020-02-10 13:36:57'),
(9, 14, 'DEL011', '2020-02-10', '2020-02-03', '840CHIRAG DELHIDELHI', 'DELHI', '110007', '4136.00', 'Sq.Inch', '0', '11', 50000.00, NULL, 0.00, 54000.00, '1 Month', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-11 02:07:52', '2020-02-11 02:07:52'),
(10, 15, 'DEL012', '2020-03-01', '2019-02-11', 'A21MAHIPAL PURDELHI', 'DELHI', '111111', '400.00', 'Sq.Feet', '12', '10', 10000.00, NULL, 120000.00, 50000.00, '1 Month', '3', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-11 03:51:55', '2020-02-11 03:51:55'),
(11, 16, 'UTP001', '2019-02-15', '2020-03-15', 'GF-12MEGHDOOT BUILDINGNEHRU PLACE', 'DELHI', '110019', '100000.00', 'Sq.Feet', '13', '2', 10000.00, NULL, 130000.00, 100000.00, '1 Month', '2', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-15 08:31:42', '2020-02-15 08:31:42'),
(12, 17, 'DEL013', '2019-02-17', '2020-02-16', 'I-220PEERA GARIDELHI', 'DELHI', '110040', '100.00', 'Sq.Feet', '11', '10', 10000.00, NULL, 110000.00, 20000.00, '1 Month', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-16 14:36:26', '2020-02-16 14:36:26'),
(13, 18, 'UTP002', '2020-02-17', '2021-02-17', 'H.NO 154BAIJOO NAGARSAIDPUR', 'UTTAR PRADESH', '233304', '3000.00', 'Sq.Feet', '12', '5', 4000.00, NULL, 48000.00, 6000.00, '1 Month', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-17 00:08:49', '2020-02-17 00:08:49'),
(14, 19, 'DEL014', '2020-02-18', '2021-11-25', '840, CHIRAG DELHIDELHIDELHI', 'DELHI', '110041', '39.42', 'Sq.Feet', '21', '10', 20000.00, NULL, 420000.00, 270000.00, '1 Month', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-17 14:00:07', '2020-02-17 14:00:07'),
(15, 20, 'RAJ001', '2020-02-18', '2022-02-19', 'JAIPURJAIPUR HOUEJAIPUR', 'HARYANA', '540021', '100.00', 'Sq.Feet', '24', '5', 2000.00, NULL, 48000.00, 10000.00, '1 Month', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-18 12:43:09', '2020-02-18 12:43:09'),
(16, 21, 'DEL015', '2020-02-19', '2020-02-26', 'DELHIDELHIDELHI', 'DELHI', '110065', '1350.00', 'Sq.Feet', '0', ' ', 15000.00, NULL, 0.00, 50000.00, '3 Month', '5', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-19 02:18:46', '2020-02-19 02:18:46'),
(17, 22, 'HAR001', '2020-03-01', '2023-02-28', 'MAIN ROADNH-3MAIN CITY', 'UTTAR PRADESH', '110045', '114.17', 'Sq.Feet', '35', '10', 5000.00, NULL, 175000.00, 20000.00, '1 Month', '2', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-19 03:57:58', '2020-02-19 03:57:58'),
(18, 23, 'APT001', '2020-02-23', '2021-02-23', 'X-100BHOPALBHOPAL', 'MADHYA PRADESH', '110011', '100.00', 'Sq.Feet', '12', '2', 5000.00, NULL, 60000.00, 10000.00, '1 Month', '2', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-22 14:12:44', '2020-02-22 14:12:44'),
(19, 24, 'UTP003', '2020-02-23', '2021-02-23', 'LOHA MANDIAGRAAGRA', 'UTTAR PRADESH', '110010', '100.00', 'Sq.Feet', '12', '5', 5000.00, NULL, 60000.00, 10000.00, '1 Month', '2', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-22 14:29:38', '2020-02-22 14:29:38'),
(20, 25, 'GUJ001', '2020-02-23', '2021-02-23', '78GOHATIASAM', 'ASSAM', '808080', '100.00', 'Sq.Feet', '12', '12%', 2000.00, NULL, 24000.00, 20000.00, '1 Month', '2', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-22 14:58:01', '2020-02-22 14:58:01'),
(21, 26, 'BJO003', '2020-02-24', '2021-02-24', 'BHERABHAWANKURLA', 'GUJARAT', '744104', '100.00', 'Sq.Feet', '12', '5', 2000.00, NULL, 24000.00, 10000.00, '1 Month', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-24 01:22:51', '2020-02-24 01:22:51'),
(22, 27, 'RAJ002', '2020-02-24', '2021-02-24', '12 ,HAWA MAHALJAIPUR', 'RAJASTHAN', '300300', '100.00', 'Sq.Feet', '12', '12%', 2000.00, NULL, 24000.00, 10000.00, '2 Month', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-24 09:00:39', '2020-02-24 09:00:39'),
(23, 28, 'DEL016', '2020-02-25', '2021-02-25', 'A-21EXT 1ANANGLOI', 'DELHI', '110041', '100.00', 'Sq.Feet', '12', '10', 5000.00, NULL, 60000.00, 10000.00, '1 Month', '2', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-24 13:38:00', '2020-02-24 13:38:00'),
(24, 29, 'CRP001', '2020-02-25', '2021-02-25', '840, CHIRAG DELHIDELHIDELHI', 'DELHI', '110041', '100.00', 'Sq.Feet', '12', '5', 6000.00, NULL, 72000.00, 20000.00, '1 Month', '2', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-24 15:02:12', '2020-02-24 15:02:12'),
(25, 30, 'MHG001', '2020-03-01', '2023-02-28', 'STATION ROADNATIONAL HIGHWAY 29PARK STREET', 'MAHARASHTRA', '123456', '127.60', 'Sq.Feet', '35', '20', 25000.00, NULL, 875000.00, 100000.00, '2 Month', '2', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-28 01:02:34', '2020-02-28 01:02:34'),
(26, 31, 'KRL001', '2020-04-01', '2023-03-31', 'ROAD NO 56MAIN MARKETERNAKULAM', 'KERALA', '638001', '120.00', 'Sq.Feet', '35', '10', 10000.00, NULL, 350000.00, 50000.00, '3 Month', '2', NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-15 02:24:54', '2020-03-15 02:24:54'),
(27, 32, 'JKH001', '2020-04-01', '2023-03-31', 'H-98 ROAD 9 CITY CENTRE', 'JAMMU AND KASHMIR', '123432', '200.00', 'Sq.Feet', '35', '10', 50000.00, NULL, 1750000.00, 200000.00, '2 Month', '2', NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-15 20:24:11', '2020-03-15 02:46:33'),
(28, 33, 'UTP004', '2020-03-16', '2021-03-16', 'G-11 ROAD NO 2 INDRA NAGAR', 'UTTAR PRADESH', '233306', '100.00', 'Sq.Feet', '12', '10', 6000.00, NULL, 72000.00, 20000.00, '1 Month', '2', NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-16 08:47:31', '2020-03-16 08:47:31'),
(29, 34, 'BJO004', '2020-03-18', '2020-12-23', 'DELHI CHHATARPUR DELHI', 'DELHI', '110070', '63.00', 'Sq.Feet', '9', '10', 2000.00, NULL, 18000.00, 400000.00, '1 Month', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-17 21:03:02', '2020-03-17 21:03:02'),
(30, 35, 'DEL017', '2020-03-18', '2021-03-18', '256,ROAD NO 12 UTTAM NAGAR DELHI', 'DELHI', '110072', '100.83', 'Sq.Feet', '12', '10', 5000.00, NULL, 60000.00, 10000.00, '1 Month', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-18 07:11:06', '2020-03-18 07:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `dst_lrms_state_masters`
--

CREATE TABLE `dst_lrms_state_masters` (
  `id` int(11) NOT NULL,
  `state_name` varchar(100) DEFAULT NULL,
  `gst_state_code` varchar(20) DEFAULT NULL,
  `state_gst_reg_no` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dst_lrms_state_masters`
--

INSERT INTO `dst_lrms_state_masters` (`id`, `state_name`, `gst_state_code`, `state_gst_reg_no`) VALUES
(1, 'ANDAMAN AND NICOBAR ISLANDS', '35', NULL),
(2, 'ANDHRA PRADESH', '28', NULL),
(3, 'ANDHRA PRADESH(New)', '37', NULL),
(4, 'ARUNACHAL PRADESH', '12', NULL),
(5, 'ASSAM', '18', NULL),
(6, 'BIHAR', '10', NULL),
(7, 'CHANDIGARH', '04', NULL),
(8, 'CHATTISGARH', '22', NULL),
(9, 'DADRA AND NAGAR HAVELI', '26', NULL),
(10, 'DAMAN AND DIU', '25', NULL),
(11, 'DELHI', '07', NULL),
(12, 'NEW DELHI', NULL, NULL),
(13, 'GOA', '30', NULL),
(14, 'GUJARAT', '24', NULL),
(15, 'HARYANA', '06', NULL),
(16, 'HIMACHAL PRADESH', '02', NULL),
(17, 'JAMMU AND KASHMIR', '01', NULL),
(18, 'JHARKHAND', '20', NULL),
(19, 'Karnataka', '29', NULL),
(20, 'KERALA', '32', NULL),
(21, 'LAKSHWADEEP', '31', NULL),
(22, 'MADHYA PRADESH', '23', NULL),
(23, 'MAHARASHTRA', '27', NULL),
(24, 'MANIPUR', '14', NULL),
(25, 'MEGHLAYA', '17', NULL),
(26, 'MIZORAM', '15', NULL),
(27, 'NAGALAND', '13', NULL),
(28, 'Orissa', '21', NULL),
(29, 'PUDUCHERRY', '34', NULL),
(30, 'PUNJAB', '03', NULL),
(31, 'RAJASTHAN', '08', NULL),
(32, 'SIKKIM', '11', NULL),
(33, 'TAMIL NADU', '33', NULL),
(34, 'TELANGANA', '36', NULL),
(35, 'TRIPURA', '16', NULL),
(36, 'UTTAR PRADESH', '09', NULL),
(37, 'UTTARAKHAND', '05', NULL),
(38, 'WEST BENGAL', '19', NULL),
(39, 'Laddakh', NULL, NULL),
(40, 'new state', NULL, NULL),
(41, 'NEW STATE2', NULL, NULL),
(42, 'NEW STATE3', NULL, NULL),
(43, 'NEW STATE4', NULL, NULL),
(44, 'NEW STATE5', NULL, NULL),
(45, '', NULL, NULL),
(46, 'NEW STATE6', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dst_lrm_branch_dtls`
--

CREATE TABLE `dst_lrm_branch_dtls` (
  `id` int(11) NOT NULL,
  `branch_id` varchar(50) DEFAULT NULL,
  `branch_code` varchar(100) DEFAULT NULL,
  `branch_type` varchar(100) DEFAULT NULL,
  `branch_name` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dst_lrm_branch_dtls`
--

INSERT INTO `dst_lrm_branch_dtls` (`id`, `branch_id`, `branch_code`, `branch_type`, `branch_name`, `created`) VALUES
(2, '10301041', 'DLW504', 'CLB', 'DELHI SCS-504', '0000-00-00 00:00:00'),
(3, '10301042', 'DLW505', 'CLB', 'DELHI SCS-505', '0000-00-00 00:00:00'),
(4, '10301043', 'DLW506', 'LBC', 'DELHI SCS-506', '0000-00-00 00:00:00'),
(5, '10301044', 'DLW57', 'CLB', 'DELHI-57', '0000-00-00 00:00:00'),
(6, '10301045', 'DLW507', 'LBC', 'DELHI SCS-507', '0000-00-00 00:00:00'),
(7, '10301046', 'DLW508', 'LBC', 'DELHI SCS-508', '0000-00-00 00:00:00'),
(8, '10301047', 'DLW509', 'CLB', 'DELHI SCS-509', '0000-00-00 00:00:00'),
(9, '10301048', 'DLW510', 'CLB', 'DELHI SCS-510', '0000-00-00 00:00:00'),
(10, '10301050', 'DLW512', 'LBC', 'DELHI SCS-512', '0000-00-00 00:00:00'),
(11, '10301054', 'DLW516', 'CLB', 'DELHI SCS-516', '0000-00-00 00:00:00'),
(12, '10301055', 'DLW517', 'CLB', 'DELHI SCS-517', '0000-00-00 00:00:00'),
(13, '10301056', 'DLW518', 'CLB', 'DELHI SCS-518', '0000-00-00 00:00:00'),
(14, '10301057', 'DLW519', 'CLB', 'DELHI SCS-519', '0000-00-00 00:00:00'),
(15, '10301058', 'DLW520', 'LBC', 'DELHI SCS-520', '0000-00-00 00:00:00'),
(16, '10301059', 'DLW521', 'CLB', 'DELHI SCS-521', '0000-00-00 00:00:00'),
(17, '10301060', 'DLW522', 'CLB', 'DELHI SCS-522', '0000-00-00 00:00:00'),
(18, '10301061', 'DLW523', 'CLB', 'DELHI SCS-523', '0000-00-00 00:00:00'),
(19, '10301062', 'DLW524', 'CLB', 'DELHI SCS-524', '0000-00-00 00:00:00'),
(20, '10406001', 'GRG11', 'HBC', 'GURGAON-11', '0000-00-00 00:00:00'),
(21, '10406003', 'GRG801', 'FMC', 'GURGAON-801', '0000-00-00 00:00:00'),
(22, '10406006', 'GRG16', 'HBA', 'GURGAON-16', '0000-00-00 00:00:00'),
(23, '10406007', 'GRG17', 'CLB', 'GURGAON-17', '0000-00-00 00:00:00'),
(24, '10406009', 'GRG18', 'HBA', 'GURGAON-18', '0000-00-00 00:00:00'),
(25, '10406008', 'GRG19', 'CLB', 'GURGAON-19', '0000-00-00 00:00:00'),
(26, '10406010', 'GRG901', 'PCB', 'GURGAON-901', '0000-00-00 00:00:00'),
(27, '10909001', 'GZB11', 'HBC', 'GHAZIABAD-11', '0000-00-00 00:00:00'),
(28, '10909002', 'SHB12', 'IBC', 'SAHIBABAD-12', '0000-00-00 00:00:00'),
(29, '10909003', 'GZB14', 'IBC', 'GHAZIABAD-14', '0000-00-00 00:00:00'),
(30, '10909004', 'GZB902', 'PCB', 'GHAZIABAD-902', '0000-00-00 00:00:00'),
(31, '10909005', 'GZB16', 'CLB', 'GHAZIABAD-16', '0000-00-00 00:00:00'),
(32, '10909013', 'GZB20', 'CLB', 'GHAZIABAD-20', '0000-00-00 00:00:00'),
(33, '10909008', 'GZW53', 'CLB', 'GHAZIABAD-53', '0000-00-00 00:00:00'),
(34, '40102004', 'HYC13', 'HBA', 'HYDERABAD CITY-13', '0000-00-00 00:00:00'),
(35, '40102009', 'HHC13', 'IBC', 'HYDERABAD HITEC CITY-13', '0000-00-00 00:00:00'),
(36, '40102010', 'HYC16', 'HBA', 'HYDERABAD CITY-16', '0000-00-00 00:00:00'),
(37, '40102011', 'SEC14', 'IBC', 'SECUNDERABAD-14', '0000-00-00 00:00:00'),
(38, '40102012', 'SEC15', 'IBC', 'SECUNDERABAD-15', '0000-00-00 00:00:00'),
(39, '40102015', 'HYD501', 'CLB', 'HYDERABAD-501', '0000-00-00 00:00:00'),
(40, '40102022', 'HYD504', 'LBC', 'HYDERABAD-504', '0000-00-00 00:00:00'),
(41, '40102016', 'HYD505', 'CLB', 'HYDERABAD-505', '0000-00-00 00:00:00'),
(42, '40102019', 'HYD509', 'CLB', 'HYDERABAD-509', '0000-00-00 00:00:00'),
(43, '20311001', 'MSN01', 'ARM', 'MEHSANA-01', '0000-00-00 00:00:00'),
(44, '10809001', 'NEE11', 'HBC', 'NEEMRANA-11', '0000-00-00 00:00:00'),
(45, '10708001', 'PTL01', 'ARM', 'PATIALA-01', '0000-00-00 00:00:00'),
(46, '40102005', 'HHC12', 'IBC', 'HYDERABAD HITEC CITY-12', '0000-00-00 00:00:00'),
(47, '10913007', 'KNP17', 'IBC', 'KANPUR-17', '0000-00-00 00:00:00'),
(48, '10913008', 'KNP19', 'IBC', 'KANPUR-19', '0000-00-00 00:00:00'),
(49, '10913010', 'KNP22', 'CLB', 'KANPUR-22', '0000-00-00 00:00:00'),
(50, '10913011', 'KNP23', 'CLB', 'KANPUR-23', '0000-00-00 00:00:00'),
(51, '10705001', 'LDH11', 'HBC', 'LUDHIANA-11', '0000-00-00 00:00:00'),
(52, '10705002', 'LDH12', 'IBC', 'LUDHIANA-12', '0000-00-00 00:00:00'),
(53, '10705004', 'LDH14', 'HBA', 'LUDHIANA-14', '0000-00-00 00:00:00'),
(54, '10705007', 'LDH17', 'HBA', 'LUDHIANA-17', '0000-00-00 00:00:00'),
(55, '10705008', 'LDH18', 'CLB', 'LUDHIANA-18', '0000-00-00 00:00:00'),
(56, '10705010', 'LDH901', 'PCB', 'LUDHIANA-901', '0000-00-00 00:00:00'),
(57, '10705011', 'LDH501', 'LBC', 'LUDHIANA-501', '0000-00-00 00:00:00'),
(58, '10705012', 'LDH502', 'CLB', 'LUDHIANA-502', '0000-00-00 00:00:00'),
(59, '10705013', 'LDH503', 'LBC', 'LUDHIANA-503', '0000-00-00 00:00:00'),
(60, '10705016', 'LDH505', 'CLB', 'LUDHIANA-505', '0000-00-00 00:00:00'),
(61, '10705017', 'LDW56', 'CLB', 'LUDHIANA-56', '0000-00-00 00:00:00'),
(62, '10914001', 'LKW11', 'HBC', 'LUCKNOW-11', '0000-00-00 00:00:00'),
(63, '10914002', 'LKW12', 'CLB', 'LUCKNOW-12', '0000-00-00 00:00:00'),
(64, '10914004', 'LKW14', 'CLB', 'LUCKNOW-14', '0000-00-00 00:00:00'),
(65, '40502001', 'MAD11', 'HBC', 'CHENNAI-11', '0000-00-00 00:00:00'),
(66, '40502002', 'MAD12', 'CLB', 'CHENNAI-12', '0000-00-00 00:00:00'),
(67, '40502003', 'MAD13', 'IBC', 'CHENNAI-13', '0000-00-00 00:00:00'),
(68, '40502005', 'TVR12', 'IBC', 'TIRUVALLUR-12', '0000-00-00 00:00:00'),
(69, '40502007', 'CNS16', 'IBC', 'CHENNAI SOUTH-16', '0000-00-00 00:00:00'),
(70, '40502008', 'CNS12', 'IBC', 'CHENNAI SOUTH-12', '0000-00-00 00:00:00'),
(71, '40502010', 'MAD21', 'CLB', 'CHENNAI-21', '0000-00-00 00:00:00'),
(72, '40502014', 'CNS13', 'IBC', 'CHENNAI SOUTH-13', '0000-00-00 00:00:00'),
(73, '40502019', 'MAD31', 'IBC', 'CHENNAI-31', '0000-00-00 00:00:00'),
(74, '40502022', 'MAD34', 'CLB', 'CHENNAI-34', '0000-00-00 00:00:00'),
(75, '40502023', 'TVR902', 'PCB', 'TIRUVALLUR-902', '0000-00-00 00:00:00'),
(76, '40502024', 'TVR18', 'IBC', 'TIRUVALLUR-18', '0000-00-00 00:00:00'),
(77, '40502030', 'SPD16', 'IBC', 'SRIPERUMBUDUR-16', '0000-00-00 00:00:00'),
(78, '40502028', 'MAD501', 'CLB', 'CHENNAI SCS-501', '0000-00-00 00:00:00'),
(79, '40502032', 'MAD506', 'CLB', 'CHENNAI SCS-506', '0000-00-00 00:00:00'),
(80, '40502034', 'MAD509', 'LBC', 'CHENNAI SCS-509', '0000-00-00 00:00:00'),
(81, '40502040', 'MAD511', 'LBC', 'CHENNAI SCS-511', '0000-00-00 00:00:00'),
(82, '10922013', 'NDA11', 'HBC', 'NOIDA-11', '0000-00-00 00:00:00'),
(83, '10922014', 'NDA12', 'IBC', 'NOIDA-12', '0000-00-00 00:00:00'),
(84, '10922015', 'NDA14', 'HBA', 'NOIDA-14', '0000-00-00 00:00:00'),
(85, '10922016', 'GND12', 'CLB', 'GREATER NOIDA-12', '0000-00-00 00:00:00'),
(86, '10922017', 'NDA16', 'IBC', 'NOIDA-16', '0000-00-00 00:00:00'),
(87, '10922021', 'GND14', 'HBA', 'GREATER NOIDA-14', '0000-00-00 00:00:00'),
(88, '10922003', 'NDA502', 'LBC', 'NOIDA SCS-502', '0000-00-00 00:00:00'),
(89, '10922004', 'NDW54', 'CLB', 'NOIDA-54', '0000-00-00 00:00:00'),
(90, '20512016', 'PUN501', 'LBC', 'PUNE SCS-501', '0000-00-00 00:00:00'),
(91, '20512017', 'PUN502', 'LBC', 'PUNE SCS-502', '0000-00-00 00:00:00'),
(92, '20512028', 'PUN503', 'LBC', 'PUNE SCS-503', '0000-00-00 00:00:00'),
(93, '20512029', 'PUN504', 'LBC', 'PUNE SCS-504', '0000-00-00 00:00:00'),
(94, '40102006', 'HYC14', 'IBC', 'HYDERABAD CITY-14', '0000-00-00 00:00:00'),
(95, '40102007', 'SEC13', 'IBC', 'SECUNDERABAD-13', '0000-00-00 00:00:00'),
(96, '40102008', 'HYD18', 'CLB', 'HYDERABAD-18', '0000-00-00 00:00:00'),
(97, '30707001', 'MRS01', 'ARM', 'MURSHIDABAD-01', '0000-00-00 00:00:00'),
(98, '10918001', 'MRT11', 'HBC', 'MEERUT-11', '0000-00-00 00:00:00'),
(99, '40207001', 'MSR11', 'HBC', 'MYSORE-11', '0000-00-00 00:00:00'),
(100, '10921001', 'MZN01', 'ARM', 'MUZAFFAR NAGAR-01', '0000-00-00 00:00:00'),
(101, '30202001', 'MZP11', 'HBC', 'MUZAFFARPUR-11', '0000-00-00 00:00:00'),
(102, '20511002', 'NAS13', 'HBA', 'NASIK-13', '0000-00-00 00:00:00'),
(103, '20511004', 'NAS14', 'HBA', 'NASIK-14', '0000-00-00 00:00:00'),
(104, '10503001', 'PAR01', 'ARM', 'PARWANOO-01', '0000-00-00 00:00:00'),
(105, '20406003', 'PMP13', 'HBA', 'PITHAMPUR-13', '0000-00-00 00:00:00'),
(106, '10409001', 'PNP01', 'ARM', 'PANIPAT-01', '0000-00-00 00:00:00'),
(107, '10923001', 'RBL01', 'ARM', 'RAI BARELI-01', '0000-00-00 00:00:00'),
(108, '11005001', 'RDA11', 'HBC', 'RUDRAPUR-11', '0000-00-00 00:00:00'),
(109, '40105001', 'RJM01', 'ARM', 'RAJAHMUNDRY-01', '0000-00-00 00:00:00'),
(110, '30305001', 'RNC11', 'HBC', 'RANCHI-11', '0000-00-00 00:00:00'),
(111, '40511001', 'RNI01', 'ARM', 'RANIPET-01', '0000-00-00 00:00:00'),
(112, '30305002', 'RNC501', 'CLB', 'RANCHI-501', '0000-00-00 00:00:00'),
(113, '11004001', 'RRK01', 'ARM', 'ROORKEE-01', '0000-00-00 00:00:00'),
(114, '10705003', 'LDH13', 'HBA', 'LUDHIANA-13', '0000-00-00 00:00:00'),
(115, '20404005', 'IDR15', 'IBC', 'INDORE-15', '0000-00-00 00:00:00'),
(116, '10705009', 'LDH19', 'HBA', 'LUDHIANA-19', '0000-00-00 00:00:00'),
(117, '10914005', 'LKW16', 'IBC', 'LUCKNOW-16', '0000-00-00 00:00:00'),
(118, '10914006', 'LKW502', 'CLB', 'LUCKNOW-502', '0000-00-00 00:00:00'),
(119, '10914007', 'LKW504', 'LBC', 'LUCKNOW-504', '0000-00-00 00:00:00'),
(120, '10914008', 'LKW505', 'LBC', 'LUCKNOW-505', '0000-00-00 00:00:00'),
(121, '10914009', 'LKW506', 'CLB', 'LUCKNOW-506', '0000-00-00 00:00:00'),
(122, '10914010', 'LKW57', 'CLB', 'LUCKNOW-57', '0000-00-00 00:00:00'),
(123, '40502011', 'CNS17', 'HBA', 'CHENNAI SOUTH-17', '0000-00-00 00:00:00'),
(124, '40502016', 'SPD17', 'HBA', 'SRIPERUMBUDUR-17', '0000-00-00 00:00:00'),
(125, '40502017', 'TVR15', 'IBC', 'TIRUVALLUR-15', '0000-00-00 00:00:00'),
(126, '40502018', 'MAD30', 'CLB', 'CHENNAI-30', '0000-00-00 00:00:00'),
(127, '40502021', 'MAD33', 'CLB', 'CHENNAI-33', '0000-00-00 00:00:00'),
(128, '40502038', 'CNS14', 'HBA', 'CHENNAI SOUTH-14', '0000-00-00 00:00:00'),
(129, '40502039', 'SPD15', 'HBA', 'SRIPERUMBUDUR-15', '0000-00-00 00:00:00'),
(130, '40502037', 'MAD43', 'CLB', 'CHENNAI-43', '0000-00-00 00:00:00'),
(131, '40502027', 'MAD51', 'CLB', 'CHENNAI-51', '0000-00-00 00:00:00'),
(132, '20510007', 'NGP17', 'CLB', 'NAGPUR-17', '0000-00-00 00:00:00'),
(133, '20512007', 'PUN17', 'CLB', 'PUNE-17', '0000-00-00 00:00:00'),
(134, '20406001', 'PMP11', 'HBC', 'PITHAMPUR-11', '0000-00-00 00:00:00'),
(135, '40108001', 'VHP11', 'HBC', 'VISHAKHAPATNAM-11', '0000-00-00 00:00:00'),
(136, '40109001', 'RGM01', 'ARM', 'RAMAGUNDAM-01', '0000-00-00 00:00:00'),
(137, '40110001', 'KRL01', 'ARM', 'KURNOOL-01', '0000-00-00 00:00:00'),
(138, '20509002', 'BBY12', 'CLB', 'MUMBAI-12', '0000-00-00 00:00:00'),
(139, '10704002', 'JAL12', 'IBC', 'JALANDHAR-12', '0000-00-00 00:00:00'),
(140, '10505002', 'UNA12', 'HBA', 'UNA-12', '0000-00-00 00:00:00'),
(141, '10301066', 'DLW802', 'FMC', 'DELHI WEST-802', '0000-00-00 00:00:00'),
(142, '20301042', 'AMD41', 'CLB', 'AHMEDABAD-41', '0000-00-00 00:00:00'),
(143, '40120001', 'KDP01', 'ARM', 'CUDDAPAH-01', '0000-00-00 00:00:00'),
(144, '10301067', 'CRP04', 'CLB', 'CORPORATE-04', '0000-00-00 00:00:00'),
(145, '10406012', 'GRG501', 'LBC', 'GURGAON-501', '0000-00-00 00:00:00'),
(146, '10406013', 'GRG502', 'CLB', 'GURGAON-502', '0000-00-00 00:00:00'),
(147, '10406014', 'GRG503', 'CLB', 'GURGAON-503', '0000-00-00 00:00:00'),
(148, '10406017', 'GRG506', 'CLB', 'GURGAON-506', '0000-00-00 00:00:00'),
(149, '10406018', 'GRG507', 'CLB', 'GURGAON-507', '0000-00-00 00:00:00'),
(150, '10406019', 'GRG508', 'LBC', 'GURGAON-508', '0000-00-00 00:00:00'),
(151, '10406020', 'GRG509', 'LBC', 'GURGAON-509', '0000-00-00 00:00:00'),
(152, '10406022', 'GRG511', 'CLB', 'GURGAON-511', '0000-00-00 00:00:00'),
(153, '40201049', 'BLW68', 'CLB', 'BANGALORE-68', '0000-00-00 00:00:00'),
(154, '20509047', 'BBY28', 'CLB', 'MUMBAI-28', '0000-00-00 00:00:00'),
(155, '31201001', 'IMP11', 'HBC', 'IMPHAL-11', '0000-00-00 00:00:00'),
(156, '10914012', 'LKW507', 'CLB', 'LUCKNOW-507', '0000-00-00 00:00:00'),
(157, '40401009', 'PON13', 'HBA', 'PONDICHERRY-13', '0000-00-00 00:00:00'),
(158, '20509049', 'BBY49', 'CLB', 'MUMBAI-49', '0000-00-00 00:00:00'),
(159, '10501012', 'BDI22', 'HBA', 'BADDI-22', '0000-00-00 00:00:00'),
(160, '10301070', 'NCR11', 'HBC', 'NCR-11', '0000-00-00 00:00:00'),
(161, '40512005', 'SLM14', 'CLB', 'SALEM-14', '0000-00-00 00:00:00'),
(162, '20512033', 'PUN21', 'CLB', 'PUNE-21', '0000-00-00 00:00:00'),
(163, '20304013', 'BAR26', 'CLB', 'BARODA-26', '0000-00-00 00:00:00'),
(164, '20509052', 'BBW65', 'CLB', 'MUMBAI-65', '0000-00-00 00:00:00'),
(165, '20509053', 'BBW66', 'CLB', 'MUMBAI-66', '0000-00-00 00:00:00'),
(166, '20509054', 'BBW67', 'CLB', 'MUMBAI-67', '0000-00-00 00:00:00'),
(167, '20509055', 'BBW68', 'CLB', 'MUMBAI-68', '0000-00-00 00:00:00'),
(168, '20509056', 'BBW69', 'CLB', 'MUMBAI-69', '0000-00-00 00:00:00'),
(169, '40506003', 'HOS13', 'HBA', 'HOSUR-13', '0000-00-00 00:00:00'),
(170, '20510011', 'NGC13', 'HBA', 'NAGPUR CITY-13', '0000-00-00 00:00:00'),
(171, '10501011', 'BDI21', 'HBA', 'BADDI-21', '0000-00-00 00:00:00'),
(172, '30204001', 'RXL01', 'ARM', 'RAXAUL-01', '0000-00-00 00:00:00'),
(173, '20301048', 'AMD37', 'CLB', 'AHMEDABAD-37', '0000-00-00 00:00:00'),
(174, '40502048', 'MAD17', 'CLB', 'CHENNAI-17', '0000-00-00 00:00:00'),
(175, '11005004', 'RDA14', 'HBA', 'RUDRAPUR-14', '0000-00-00 00:00:00'),
(176, '10301033', 'DLN356', 'RSC', 'DELHI NORTH-356', '0000-00-00 00:00:00'),
(177, '10301034', 'DLN355', 'RSC', 'DELHI NORTH-355', '0000-00-00 00:00:00'),
(178, '30107001', 'BGN11', 'HBC', 'BONGAIGAON-11', '0000-00-00 00:00:00'),
(179, '20410001', 'STN01', 'ARM', 'SATNA-01', '0000-00-00 00:00:00'),
(180, '10922025', 'NDA505', 'LBC', 'NOIDA SCS-505', '0000-00-00 00:00:00'),
(181, '40303006', 'CCH13', 'IBC', 'COCHIN-13', '0000-00-00 00:00:00'),
(182, '40303007', 'CCH14', 'HBA', 'COCHIN-14', '0000-00-00 00:00:00'),
(183, '10301036', 'DLW22', 'HBA', 'DELHI WEST-22', '0000-00-00 00:00:00'),
(184, '20301043', 'AMD352', 'RSC', 'AHMEDABAD-352', '0000-00-00 00:00:00'),
(185, '20301044', 'AMD35', 'CLB', 'AHMEDABAD-35', '0000-00-00 00:00:00'),
(186, '31101001', 'RGP01', 'ARM', 'RANGPOO-01', '0000-00-00 00:00:00'),
(187, '10202001', 'ZKP11', 'HBC', 'ZIRAKPUR-11', '0000-00-00 00:00:00'),
(188, '10401005', 'AML15', 'CLB', 'AMBALA-15', '0000-00-00 00:00:00'),
(189, '20306001', 'BTU01', 'ARM', 'BHUJ-01', '0000-00-00 00:00:00'),
(190, '20308001', 'GON11', 'CLB', 'GONDAL-11', '0000-00-00 00:00:00'),
(191, '10406023', 'GRG514', 'CLB', 'GURGAON-514', '0000-00-00 00:00:00'),
(192, '10705018', 'LDH22', 'IBC', 'LUDHIANA-22', '0000-00-00 00:00:00'),
(193, '20301046', 'AMD36', 'CLB', 'AHMEDABAD-36', '0000-00-00 00:00:00'),
(194, '20301028', 'AMD503', 'CLB', 'AHMEDABAD-503', '0000-00-00 00:00:00'),
(195, '20509033', 'BBW54', 'CLB', 'MUMBAI-54', '0000-00-00 00:00:00'),
(196, '30505001', 'RKL01', 'ARM', 'ROURKELA-01', '0000-00-00 00:00:00'),
(197, '20313001', 'RKT11', 'HBC', 'RAJKOT-11', '0000-00-00 00:00:00'),
(198, '20408001', 'RWA01', 'ARM', 'REWA-01', '0000-00-00 00:00:00'),
(199, '20404001', 'IDR11', 'HBC', 'INDORE-11', '0000-00-00 00:00:00'),
(200, '20404006', 'IDR16', 'IBC', 'INDORE-16', '0000-00-00 00:00:00'),
(201, '20404007', 'IDR17', 'IBC', 'INDORE-17', '0000-00-00 00:00:00'),
(202, '20404008', 'IDR18', 'HBA', 'INDORE-18', '0000-00-00 00:00:00'),
(203, '10806001', 'JPR11', 'HBC', 'JAIPUR-11', '0000-00-00 00:00:00'),
(204, '10806004', 'JPC14', 'CLB', 'JAIPUR CITY-14', '0000-00-00 00:00:00'),
(205, '10806005', 'JPC15', 'IBC', 'JAIPUR CITY-15', '0000-00-00 00:00:00'),
(206, '10806006', 'SER12', 'IBC', 'SANGANER-12', '0000-00-00 00:00:00'),
(207, '10806007', 'JPC16', 'HBA', 'JAIPUR CITY-16', '0000-00-00 00:00:00'),
(208, '10806009', 'JPC901', 'PCB', 'JAIPUR CITY-901', '0000-00-00 00:00:00'),
(209, '10806019', 'JPC18', 'IBC', 'JAIPUR CITY-18', '0000-00-00 00:00:00'),
(210, '10806013', 'SER13', 'IBC', 'SANGANER-13', '0000-00-00 00:00:00'),
(211, '10806008', 'JPR501', 'CLB', 'JAIPUR-501', '0000-00-00 00:00:00'),
(212, '10806011', 'JPR504', 'CLB', 'JAIPUR-504', '0000-00-00 00:00:00'),
(213, '10806017', 'JPR506', 'CLB', 'JAIPUR-506', '0000-00-00 00:00:00'),
(214, '10806018', 'JPW58', 'CLB', 'JAIPUR-58', '0000-00-00 00:00:00'),
(215, '10806010', 'JPR507', 'CLB', 'JAIPUR-507', '0000-00-00 00:00:00'),
(216, '30304001', 'JSP11', 'HBC', 'JAMSHEDPUR-11', '0000-00-00 00:00:00'),
(217, '30304003', 'JSP501', 'LBC', 'JAMSHEDPUR-501', '0000-00-00 00:00:00'),
(218, '30304004', 'JSW52', 'CLB', 'JAMSHEDPUR-52', '0000-00-00 00:00:00'),
(219, '30304005', 'JSW53', 'CLB', 'JAMSHEDPUR-53', '0000-00-00 00:00:00'),
(220, '10913004', 'KNP14', 'HBA', 'KANPUR-14', '0000-00-00 00:00:00'),
(221, '10913005', 'KNP15', 'IBC', 'KANPUR-15', '0000-00-00 00:00:00'),
(222, '10913006', 'KNP16', 'IBC', 'KANPUR-16', '0000-00-00 00:00:00'),
(223, '10101001', 'CRP903', 'PCB', 'CORPORATE-903', '0000-00-00 00:00:00'),
(224, '40502036', 'MAD510', 'LBC', 'CHENNAI SCS-510', '0000-00-00 00:00:00'),
(225, '10909010', 'GZB503', 'CLB', 'GHAZIABAD-503', '0000-00-00 00:00:00'),
(226, '40502029', 'MAD502', 'LBC', 'CHENNAI SCS-502', '0000-00-00 00:00:00'),
(227, '20509028', 'BBY41', 'CLB', 'MUMBAI-41', '0000-00-00 00:00:00'),
(228, '40503004', 'CMB15', 'IBC', 'COIMBATORE-15', '0000-00-00 00:00:00'),
(229, '20401002', 'BHO12', 'HBA', 'BHOPAL-12', '0000-00-00 00:00:00'),
(230, '20301035', 'AMD513', 'CLB', 'AHMEDABAD-513', '0000-00-00 00:00:00'),
(231, '20509038', 'BBW59', 'CLB', 'MUMBAI-59', '0000-00-00 00:00:00'),
(232, '20404003', 'IDR13', 'IBC', 'INDORE-13', '0000-00-00 00:00:00'),
(233, '40502004', 'SPD14', 'IBC', 'SRIPERUMBUDUR-14', '0000-00-00 00:00:00'),
(234, '30503001', 'BHU501', 'CLB', 'BHUBANESHWAR-501', '0000-00-00 00:00:00'),
(235, '20512032', 'PUN39', 'CLB', 'PUNE-39', '0000-00-00 00:00:00'),
(236, '10909015', 'GZB504', 'CLB', 'GHAZIABAD-504', '0000-00-00 00:00:00'),
(237, '10909012', 'SHB902', 'PCB', 'SAHIBABAD-902', '0000-00-00 00:00:00'),
(238, '20304012', 'BAR51', 'CLB', 'BARODA-51', '0000-00-00 00:00:00'),
(239, '10909014', 'GZB501', 'CLB', 'GHAZIABAD-501', '0000-00-00 00:00:00'),
(240, '20401005', 'BHO16', 'CLB', 'BHOPAL-16', '0000-00-00 00:00:00'),
(241, '30703018', 'CAW52', 'CLB', 'CALCUTTA-52', '0000-00-00 00:00:00'),
(242, '30703020', 'CAL503', 'CLB', 'KOLKATA SCS-503', '0000-00-00 00:00:00'),
(243, '20301034', 'AMD512', 'CLB', 'AHMEDABAD-512', '0000-00-00 00:00:00'),
(244, '20512025', 'PUN35', 'CLB', 'PUNE-35', '0000-00-00 00:00:00'),
(245, '20511005', 'NAS15', 'HBA', 'NASIK-15', '0000-00-00 00:00:00'),
(246, '10201007', 'CHD17', 'CLB', 'CHANDIGARH-17', '0000-00-00 00:00:00'),
(247, '20301026', 'AMD511', 'CLB', 'AHMEDABAD-511', '0000-00-00 00:00:00'),
(248, '40502046', 'MAD49', 'CLB', 'CHENNAI-49', '0000-00-00 00:00:00'),
(249, '20509031', 'BBW52', 'CLB', 'MUMBAI-52', '0000-00-00 00:00:00'),
(250, '10922018', 'NDA17', 'IBC', 'NOIDA-17', '0000-00-00 00:00:00'),
(251, '10920002', 'MRB12', 'CLB', 'MORADABAD-12', '0000-00-00 00:00:00'),
(252, '40502047', 'MAD48', 'CLB', 'CHENNAI-48', '0000-00-00 00:00:00'),
(253, '20509034', 'BBW55', 'CLB', 'MUMBAI-55', '0000-00-00 00:00:00'),
(254, '40506002', 'HOS12', 'HBA', 'HOSUR-12', '0000-00-00 00:00:00'),
(255, '11001001', 'DEH501', 'CLB', 'DEHRADUN-501', '0000-00-00 00:00:00'),
(256, '40503006', 'CMB18', 'CLB', 'COIMBATORE-18', '0000-00-00 00:00:00'),
(257, '30703025', 'CAL509', 'CLB', 'KOLKATA SCS-509', '0000-00-00 00:00:00'),
(258, '10201012', 'CHD503', 'CLB', 'CHANDIGARH-503', '0000-00-00 00:00:00'),
(259, '10806015', 'JPR503', 'CLB', 'JAIPUR-503', '0000-00-00 00:00:00'),
(260, '20301045', 'AMD26', 'CLB', 'AHMEDABAD-26', '0000-00-00 00:00:00'),
(261, '10913003', 'KNP13', 'IBC', 'KANPUR-13', '0000-00-00 00:00:00'),
(262, '10922026', 'NDA23', 'HBA', 'NOIDA-23', '0000-00-00 00:00:00'),
(263, '20509048', 'BBY47', 'CLB', 'MUMBAI-47', '0000-00-00 00:00:00'),
(264, '20509009', 'BBY19', 'CLB', 'MUMBAI-19', '0000-00-00 00:00:00'),
(265, '10202006', 'ZKP901', 'PCB', 'ZIRAKPUR-901', '0000-00-00 00:00:00'),
(266, '11005003', 'RDA12', 'HBA', 'RUDRAPUR-12', '0000-00-00 00:00:00'),
(267, '10705019', 'LDH401', 'IBO', 'LUDHIANA-401', '0000-00-00 00:00:00'),
(268, '10101002', 'CRP902', 'PCB', 'CORPORATE-902', '0000-00-00 00:00:00'),
(269, '10301063', 'DLI08', 'CLB', 'DELHI-08', '0000-00-00 00:00:00'),
(270, '20301006', 'AMD16', 'IBC', 'AHMEDABAD-16', '0000-00-00 00:00:00'),
(271, '20301007', 'AMD351', 'RSC', 'AHMEDABAD-351', '0000-00-00 00:00:00'),
(272, '20301009', 'AMD19', 'HBA', 'AHMEDABAD-19', '0000-00-00 00:00:00'),
(273, '20301010', 'AMD20', 'IBC', 'AHMEDABAD-20', '0000-00-00 00:00:00'),
(274, '20301011', 'AMD901', 'PCB', 'AHMEDABAD-901', '0000-00-00 00:00:00'),
(275, '20301012', 'AMD22', 'IBC', 'AHMEDABAD-22', '0000-00-00 00:00:00'),
(276, '20301013', 'AMD902', 'PCB', 'AHMEDABAD-902', '0000-00-00 00:00:00'),
(277, '20301015', 'AMD25', 'IBC', 'AHMEDABAD-25', '0000-00-00 00:00:00'),
(278, '20301016', 'AMD27', 'IBC', 'AHMEDABAD-27', '0000-00-00 00:00:00'),
(279, '20301017', 'AMD903', 'PCB', 'AHMEDABAD-903', '0000-00-00 00:00:00'),
(280, '20301019', 'AMD401', 'IBO', 'AHMEDABAD-401', '0000-00-00 00:00:00'),
(281, '20301020', 'AMD31', 'CLB', 'AHMEDABAD-31', '0000-00-00 00:00:00'),
(282, '20301022', 'AMD34', 'CLB', 'AHMEDABAD-34', '0000-00-00 00:00:00'),
(283, '10401001', 'AML11', 'HBC', 'AMBALA-11', '0000-00-00 00:00:00'),
(284, '10401002', 'AML401', 'IBO', 'AMBALA-401', '0000-00-00 00:00:00'),
(285, '10401003', 'AML13', 'CLB', 'AMBALA-13', '0000-00-00 00:00:00'),
(286, '10401004', 'AML14', 'CLB', 'AMBALA-14', '0000-00-00 00:00:00'),
(287, '10401006', 'AML17', 'CLB', 'AMBALA-17', '0000-00-00 00:00:00'),
(288, '20302001', 'ANA01', 'ARM', 'ANAND-01', '0000-00-00 00:00:00'),
(289, '40308001', 'TRS01', 'ARM', 'THRISSUR-01', '0000-00-00 00:00:00'),
(290, '20504001', 'ARD11', 'HBC', 'AURANGABAD-11', '0000-00-00 00:00:00'),
(291, '20504003', 'ARD14', 'HBA', 'AURANGABAD-14', '0000-00-00 00:00:00'),
(292, '30701001', 'ASA01', 'ARM', 'ASANSOL-01', '0000-00-00 00:00:00'),
(293, '20504005', 'ARD16', 'HBA', 'AURANGABAD-16', '0000-00-00 00:00:00'),
(294, '20504006', 'ARD901', 'PCB', 'AURANGABAD-901', '0000-00-00 00:00:00'),
(295, '10701001', 'ASR11', 'HBC', 'AMRITSAR-11', '0000-00-00 00:00:00'),
(296, '20503001', 'AVI01', 'ARM', 'AMRAVATI-01', '0000-00-00 00:00:00'),
(297, '30301001', 'BGA11', 'CLB', 'BAHARAGORA-11', '0000-00-00 00:00:00'),
(298, '10403001', 'BGH01', 'CLB', 'BALLABHGARH', '0000-00-00 00:00:00'),
(299, '30201001', 'BGP11', 'HBC', 'BHAGALPUR-11', '0000-00-00 00:00:00'),
(300, '10905001', 'BHA01', 'ARM', 'BHADOHI-01', '0000-00-00 00:00:00'),
(301, '10402001', 'BHD01', 'ARM', 'BAHADURGARH-01', '0000-00-00 00:00:00'),
(302, '10804001', 'BHI11', 'HBC', 'BHIWADI-11', '0000-00-00 00:00:00'),
(303, '20401001', 'BHO11', 'HBC', 'BHOPAL-11', '0000-00-00 00:00:00'),
(304, '20401003', 'BHO14', 'HBA', 'BHOPAL-14', '0000-00-00 00:00:00'),
(305, '10702001', 'BHT11', 'HBC', 'BHATINDA-11', '0000-00-00 00:00:00'),
(306, '30503003', 'BHU11', 'HBC', 'BHUBANESHWAR-11', '0000-00-00 00:00:00'),
(307, '30502001', 'BMR01', 'ARM', 'BERHAMPUR-01', '0000-00-00 00:00:00'),
(308, '20505001', 'BMT01', 'ARM', 'BARAMATI-01', '0000-00-00 00:00:00'),
(309, '30302001', 'BOK01', 'ARM', 'BOKARO-01', '0000-00-00 00:00:00'),
(310, '20401006', 'BHO501', 'CLB', 'BHOPAL-501', '0000-00-00 00:00:00'),
(311, '20401008', 'BOW53', 'CLB', 'BHOPAL-53', '0000-00-00 00:00:00'),
(312, '10904001', 'BRL11', 'HBC', 'BAREILLY-11', '0000-00-00 00:00:00'),
(313, '10404001', 'BWN01', 'ARM', 'BHIWANI-01', '0000-00-00 00:00:00'),
(314, '10803001', 'BWR01', 'ARM', 'BHILWARA-01', '0000-00-00 00:00:00'),
(315, '30101001', 'DBG01', 'ARM', 'DIBRUGARH-01', '0000-00-00 00:00:00'),
(316, '20402001', 'DEW01', 'ARM', 'DEWAS-01', '0000-00-00 00:00:00'),
(317, '30303001', 'DNB11', 'HBC', 'DHANBAD-11', '0000-00-00 00:00:00'),
(318, '40505001', 'ERD11', 'HBC', 'ERODE-11', '0000-00-00 00:00:00'),
(319, '10907001', 'FZB01', 'ARM', 'FIROZABAD-01', '0000-00-00 00:00:00'),
(320, '20307001', 'GDM01', 'ARM', 'GANDHIDHAM-01', '0000-00-00 00:00:00'),
(321, '30102001', 'GHT11', 'HBC', 'GUWAHATI-11', '0000-00-00 00:00:00'),
(322, '30102002', 'GHT12', 'HBA', 'GUWAHATI-12', '0000-00-00 00:00:00'),
(323, '30102003', 'GHT13', 'CLB', 'GUWAHATI-13', '0000-00-00 00:00:00'),
(324, '30102006', 'GHT14', 'CLB', 'GUWAHATI-14', '0000-00-00 00:00:00'),
(325, '30102008', 'GHT15', 'CLB', 'GUWAHATI-15', '0000-00-00 00:00:00'),
(326, '30102009', 'GHT16', 'HBA', 'GUWAHATI-16', '0000-00-00 00:00:00'),
(327, '30102007', 'GHT503', 'LBC', 'GUWAHATI-503', '0000-00-00 00:00:00'),
(328, '10908001', 'GJR01', 'ARM', 'GAJRAULA-01', '0000-00-00 00:00:00'),
(329, '10910001', 'GOR11', 'HBC', 'GORAKHPUR-11', '0000-00-00 00:00:00'),
(330, '40101001', 'GUN01', 'ARM', 'GUNTUR-01', '0000-00-00 00:00:00'),
(331, '20403001', 'GWL11', 'HBC', 'GWALIOR-11', '0000-00-00 00:00:00'),
(332, '10911001', 'HAT01', 'ARM', 'HATHRAS-01', '0000-00-00 00:00:00'),
(333, '40205002', 'HBU11', 'HBC', 'HUBLI-11', '0000-00-00 00:00:00'),
(334, '40204001', 'HPT01', 'ARM', 'HOSPET-01', '0000-00-00 00:00:00'),
(335, '11002001', 'HRD11', 'HBC', 'HARIDWAR-11', '0000-00-00 00:00:00'),
(336, '11002002', 'HRD12', 'HBA', 'HARIDWAR-12', '0000-00-00 00:00:00'),
(337, '10703001', 'HSP11', 'HBC', 'HOSHIARPUR-11', '0000-00-00 00:00:00'),
(338, '30801001', 'ITA11', 'HBC', 'ITANAGAR-11', '0000-00-00 00:00:00'),
(339, '20405001', 'JAB11', 'HBC', 'JABALPUR-11', '0000-00-00 00:00:00'),
(340, '10704001', 'JAL11', 'HBC', 'JALANDHAR-11', '0000-00-00 00:00:00'),
(341, '10704003', 'JAL13', 'HBA', 'JALANDHAR-13', '0000-00-00 00:00:00'),
(342, '20309001', 'JAM11', 'HBC', 'JAMNAGAR-11', '0000-00-00 00:00:00'),
(343, '10912001', 'JHA01', 'ARM', 'JHANSI-01', '0000-00-00 00:00:00'),
(344, '20506001', 'JLG01', 'ARM', 'JALGAON-01', '0000-00-00 00:00:00'),
(345, '20507001', 'JLN01', 'ARM', 'JALNA-01', '0000-00-00 00:00:00'),
(346, '10601001', 'JMU11', 'HBC', 'JAMMU-11', '0000-00-00 00:00:00'),
(347, '30103001', 'JOR11', 'HBC', 'JORHAT-11', '0000-00-00 00:00:00'),
(348, '20310001', 'JNG01', 'ARM', 'JUNAGARH-01', '0000-00-00 00:00:00'),
(349, '40507001', 'KAR01', 'ARM', 'KARUR-01', '0000-00-00 00:00:00'),
(350, '20508001', 'KLH11', 'HBC', 'KOLHAPUR-11', '0000-00-00 00:00:00'),
(351, '10408001', 'KNL01', 'ARM', 'KARNAL-01', '0000-00-00 00:00:00'),
(352, '40309001', 'TRV11', 'HBC', 'TRIVENDRUM-11', '0000-00-00 00:00:00'),
(353, '10913012', 'KNP51', 'CLB', 'KANPUR-51', '0000-00-00 00:00:00'),
(354, '40305001', 'KOL11', 'HBC', 'KOLLAM-11', '0000-00-00 00:00:00'),
(355, '10808001', 'KOT01', 'ARM', 'KOTA-01', '0000-00-00 00:00:00'),
(356, '40307001', 'PKD01', 'ARM', 'PALAKKAD-01', '0000-00-00 00:00:00'),
(357, '10706001', 'MAL01', 'ARM', 'MALERKOTLA-01', '0000-00-00 00:00:00'),
(358, '10917001', 'MBN11', 'HBC', 'MAUNATH BHANJAN-11', '0000-00-00 00:00:00'),
(359, '40508001', 'MDU11', 'HBC', 'MADURAI-11', '0000-00-00 00:00:00'),
(360, '30706001', 'MLD01', 'ARM', 'MALDA-01', '0000-00-00 00:00:00'),
(361, '40206001', 'MLR11', 'HBC', 'MANGALORE-11', '0000-00-00 00:00:00'),
(362, '20312001', 'MOB01', 'ARM', 'MORVI-01', '0000-00-00 00:00:00'),
(363, '20304001', 'BAR11', 'HBC', 'BARODA-11', '0000-00-00 00:00:00'),
(364, '20304002', 'HLL01', 'ARM', 'HALOL-01', '0000-00-00 00:00:00'),
(365, '20304003', 'BAR14', 'IBC', 'BARODA-14', '0000-00-00 00:00:00'),
(366, '20304007', 'BAR18', 'IBC', 'BARODA-18', '0000-00-00 00:00:00'),
(367, '20304009', 'BAR20', 'CLB', 'BARODA-20', '0000-00-00 00:00:00'),
(368, '20304010', 'BAR22', 'CLB', 'BARODA-22', '0000-00-00 00:00:00'),
(369, '20304011', 'BAR23', 'CLB', 'BARODA-23', '0000-00-00 00:00:00'),
(370, '20509032', 'BBW53', 'CLB', 'MUMBAI-53', '0000-00-00 00:00:00'),
(371, '20509037', 'BBW58', 'CLB', 'MUMBAI-58', '0000-00-00 00:00:00'),
(372, '20509039', 'BBW60', 'CLB', 'MUMBAI-60', '0000-00-00 00:00:00'),
(373, '20509040', 'BBW61', 'CLB', 'MUMBAI-61', '0000-00-00 00:00:00'),
(374, '20509042', 'BBW62', 'CLB', 'MUMBAI-62', '0000-00-00 00:00:00'),
(375, '20509001', 'BBY11', 'HBC', 'GREATER MUMBAI-11', '0000-00-00 00:00:00'),
(376, '20509003', 'BBY13', 'CLB', 'MUMBAI-13', '0000-00-00 00:00:00'),
(377, '20509004', 'BBY14', 'CLB', 'MUMBAI-14', '0000-00-00 00:00:00'),
(378, '20509005', 'BBY15', 'CLB', 'MUMBAI-15', '0000-00-00 00:00:00'),
(379, '20509006', 'BBY16', 'CLB', 'MUMBAI-16', '0000-00-00 00:00:00'),
(380, '20509007', 'BBY17', 'CLB', 'MUMBAI-17', '0000-00-00 00:00:00'),
(381, '20509010', 'BBY20', 'CLB', 'MUMBAI-20', '0000-00-00 00:00:00'),
(382, '20509011', 'BBY21', 'CLB', 'MUMBAI-21', '0000-00-00 00:00:00'),
(383, '20509012', 'BBY22', 'CLB', 'MUMBAI-22', '0000-00-00 00:00:00'),
(384, '20509013', 'BBY23', 'CLB', 'MUMBAI-23', '0000-00-00 00:00:00'),
(385, '20509014', 'BBY24', 'CLB', 'MUMBAI-24', '0000-00-00 00:00:00'),
(386, '20509015', 'BBY25', 'CLB', 'MUMBAI-25', '0000-00-00 00:00:00'),
(387, '20509017', 'BBY27', 'CLB', 'MUMBAI-27', '0000-00-00 00:00:00'),
(388, '20509020', 'BBY32', 'CLB', 'MUMBAI-32', '0000-00-00 00:00:00'),
(389, '20509022', 'BBY34', 'CLB', 'MUMBAI-34', '0000-00-00 00:00:00'),
(390, '20509023', 'BBY36', 'CLB', 'MUMBAI-36', '0000-00-00 00:00:00'),
(391, '20509024', 'BBY37', 'CLB', 'MUMBAI-37', '0000-00-00 00:00:00'),
(392, '20509025', 'BBY38', 'CLB', 'MUMBAI-38', '0000-00-00 00:00:00'),
(393, '20509026', 'BBY39', 'CLB', 'MUMBAI-39', '0000-00-00 00:00:00'),
(394, '10301064', 'DLW400', 'IBO', 'DELHI WEST-400', '0000-00-00 00:00:00'),
(395, '10301065', 'DLN351', 'RSC', 'DELHI NORTH-351', '0000-00-00 00:00:00'),
(396, '10413001', 'BAW11', 'HBC', 'BAWAL-11', '0000-00-00 00:00:00'),
(397, '20509045', 'BBW64', 'CLB', 'MUMBAI-64', '0000-00-00 00:00:00'),
(398, '40502045', 'MAD42', 'CLB', 'CHENNAI-42', '0000-00-00 00:00:00'),
(399, '40502043', 'TVR19', 'IBC', 'TIRUVALLUR-19', '0000-00-00 00:00:00'),
(400, '31001001', 'DMP11', 'HBC', 'DIMAPUR-11', '0000-00-00 00:00:00'),
(401, '10922022', 'GND20', 'HBA', 'GREATER NOIDA-20', '0000-00-00 00:00:00'),
(402, '40502041', 'MAD45', 'CLB', 'CHENNAI-45', '0000-00-00 00:00:00'),
(403, '10901009', 'AGW53', 'CLB', 'AGRA-53', '0000-00-00 00:00:00'),
(404, '10901008', 'AGR501', 'LBC', 'AGRA-501', '0000-00-00 00:00:00'),
(405, '10806016', 'JPW55', 'CLB', 'JAIPUR-55', '0000-00-00 00:00:00'),
(406, '10705015', 'LDH504', 'CLB', 'LUDHIANA-504', '0000-00-00 00:00:00'),
(407, '10705014', 'LDH21', 'HBA', 'LUDHIANA-21', '0000-00-00 00:00:00'),
(408, '40502026', 'MAD400', 'IBO', 'CHENNAI-400', '0000-00-00 00:00:00'),
(409, '40201031', 'BLC400', 'IBO', 'BANGALORE CITY-400', '0000-00-00 00:00:00'),
(410, '20318001', 'MHD01', 'ARM', 'MAHAD-01', '0000-00-00 00:00:00'),
(411, '10501013', 'BDI23', 'HBA', 'BADDI-23', '0000-00-00 00:00:00'),
(412, '11005002', 'RDA13', 'HBA', 'RUDRAPUR-13', '0000-00-00 00:00:00'),
(413, '20510010', 'NGP20', 'HBA', 'NAGPUR-20', '0000-00-00 00:00:00'),
(414, '40102024', 'HYD27', 'CLB', 'HYDERABAD-27', '0000-00-00 00:00:00'),
(415, '10903001', 'AHB11', 'HBC', 'ALLAHABAD-11', '0000-00-00 00:00:00'),
(416, '40501001', 'ABR01', 'ARM', 'AMBUR-01', '0000-00-00 00:00:00'),
(417, '20501001', 'ADN11', 'HBC', 'AHMEDNAGAR-11', '0000-00-00 00:00:00'),
(418, '10902001', 'AGH01', 'ARM', 'ALIGARH-01', '0000-00-00 00:00:00'),
(419, '10901002', 'AGR401', 'IBO', 'AGRA-401', '0000-00-00 00:00:00'),
(420, '10901003', 'AGR13', 'IBC', 'AGRA-13', '0000-00-00 00:00:00'),
(421, '10901004', 'AGR14', 'IBC', 'AGRA-14', '0000-00-00 00:00:00'),
(422, '10901005', 'AGR15', 'IBC', 'AGRA-15', '0000-00-00 00:00:00'),
(423, '10901006', 'AGR16', 'HBA', 'AGRA-16', '0000-00-00 00:00:00'),
(424, '30601001', 'AGT11', 'HBC', 'AGARTALA-11', '0000-00-00 00:00:00'),
(425, '20301023', 'AMD501', 'CLB', 'AHMEDABAD-501', '0000-00-00 00:00:00'),
(426, '20301027', 'AMD502', 'LBC', 'AHMEDABAD-502', '0000-00-00 00:00:00'),
(427, '20301029', 'AMD504', 'CLB', 'AHMEDABAD-504', '0000-00-00 00:00:00'),
(428, '20301031', 'AMD507', 'LBC', 'AHMEDABAD-507', '0000-00-00 00:00:00'),
(429, '20301038', 'AMD516', 'CLB', 'AHMEDABAD-516', '0000-00-00 00:00:00'),
(430, '20301039', 'AMD517', 'LBC', 'AHMEDABAD-517', '0000-00-00 00:00:00'),
(431, '10801001', 'AJM01', 'ARM', 'AJMER-01', '0000-00-00 00:00:00'),
(432, '20502001', 'AKL01', 'ARM', 'AKOLA-01', '0000-00-00 00:00:00'),
(433, '10802001', 'ALR11', 'HBC', 'ALWAR-11', '0000-00-00 00:00:00'),
(434, '20301001', 'AMD11', 'HBC', 'AHMEDABAD-11', '0000-00-00 00:00:00'),
(435, '20301002', 'AMD12', 'IBC', 'AHMEDABAD-12', '0000-00-00 00:00:00'),
(436, '20301003', 'GDN01', 'ARM', 'GANDHINAGAR-01', '0000-00-00 00:00:00'),
(437, '20301004', 'AMD14', 'HBA', 'AHMEDABAD-14', '0000-00-00 00:00:00'),
(438, '10922006', 'NDA504', 'LBC', 'NOIDA SCS-504', '0000-00-00 00:00:00'),
(439, '10922007', 'NDW57', 'CLB', 'NOIDA-57', '0000-00-00 00:00:00'),
(440, '10922008', 'NDW58', 'CLB', 'NOIDA-58', '0000-00-00 00:00:00'),
(441, '10922010', 'NDW60', 'CLB', 'NOIDA-60', '0000-00-00 00:00:00'),
(442, '10922011', 'NDW61', 'CLB', 'NOIDA-61', '0000-00-00 00:00:00'),
(443, '10922012', 'NDW62', 'CLB', 'NOIDA-62', '0000-00-00 00:00:00'),
(444, '20510002', 'NGP12', 'IBC', 'NAGPUR-12', '0000-00-00 00:00:00'),
(445, '20510003', 'NGP13', 'CLB', 'NAGPUR-13', '0000-00-00 00:00:00'),
(446, '20510005', 'NGP15', 'IBC', 'NAGPUR-15', '0000-00-00 00:00:00'),
(447, '20510006', 'NGP903', 'PCB', 'NAGPUR-903', '0000-00-00 00:00:00'),
(448, '20510008', 'NGC11', 'HBC', 'NAGPUR CITY-11', '0000-00-00 00:00:00'),
(449, '20201002', 'PJI12', 'IBC', 'PANJIM-12', '0000-00-00 00:00:00'),
(450, '20201003', 'PJI14', 'HBA', 'PANJIM-14', '0000-00-00 00:00:00'),
(451, '20201006', 'PJI07', 'CLB', 'PANJIM-07', '0000-00-00 00:00:00'),
(452, '20201007', 'PJI08', 'CLB', 'PANJIM-08', '0000-00-00 00:00:00'),
(453, '20201008', 'PJI20', 'CLB', 'PANJIM-20', '0000-00-00 00:00:00'),
(454, '20201009', 'PJI501', 'LBC', 'PANJIM-501', '0000-00-00 00:00:00'),
(455, '20201010', 'PJI502', 'CLB', 'PANJIM-502', '0000-00-00 00:00:00'),
(456, '40510001', 'POL01', 'ARM', 'POLLACHI-01', '0000-00-00 00:00:00'),
(457, '40401001', 'PON11', 'HBC', 'PONDICHERRY-11', '0000-00-00 00:00:00'),
(458, '40401002', 'PON12', 'HBA', 'PONDICHERRY-12', '0000-00-00 00:00:00'),
(459, '40401003', 'PON14', 'CLB', 'PONDICHERRY-14', '0000-00-00 00:00:00'),
(460, '40401005', 'PON16', 'HBA', 'PONDICHERRY-16', '0000-00-00 00:00:00'),
(461, '40401008', 'PON19', 'HBA', 'PONDICHERRY-19', '0000-00-00 00:00:00'),
(462, '20512001', 'PUN11', 'HBC', 'PUNE-11', '0000-00-00 00:00:00'),
(463, '20512002', 'PUT12', 'IBC', 'PUNE TATHAWADE-12', '0000-00-00 00:00:00'),
(464, '20512003', 'PUT13', 'IBC', 'PUNE TATHAWADE-13', '0000-00-00 00:00:00'),
(465, '20512004', 'PUN14', 'HBA', 'PUNE-14', '0000-00-00 00:00:00'),
(466, '20512005', 'PUN15', 'HBA', 'PUNE-15', '0000-00-00 00:00:00'),
(467, '20512006', 'PUT14', 'HBA', 'PUNE TATHAWADE-14', '0000-00-00 00:00:00'),
(468, '20512009', 'PUN20', 'CLB', 'PUNE-20', '0000-00-00 00:00:00'),
(469, '20512010', 'PUN22', 'CLB', 'PUNE-22', '0000-00-00 00:00:00'),
(470, '20512012', 'PUN24', 'CLB', 'PUNE-24', '0000-00-00 00:00:00'),
(471, '20512014', 'PUN26', 'CLB', 'PUNE-26', '0000-00-00 00:00:00'),
(472, '20512018', 'PUN28', 'CLB', 'PUNE-28', '0000-00-00 00:00:00'),
(473, '20512019', 'PUN30', 'CLB', 'PUNE-30', '0000-00-00 00:00:00'),
(474, '20512022', 'PUN32', 'CLB', 'PUNE-32', '0000-00-00 00:00:00'),
(475, '20512024', 'PUN34', 'CLB', 'PUNE-34', '0000-00-00 00:00:00'),
(476, '20317001', 'VAP11', 'HBC', 'VAPI-11', '0000-00-00 00:00:00'),
(477, '20317002', 'DNH12', 'HBA', 'DADRA AND NAGAR HAVELI-12', '0000-00-00 00:00:00'),
(478, '20317003', 'DMN13', 'IBC', 'DAMAN-13', '0000-00-00 00:00:00'),
(479, '20317004', 'DMN12', 'HBA', 'DAMAN-12', '0000-00-00 00:00:00'),
(480, '20317005', 'VAP15', 'CLB', 'VAPI-15', '0000-00-00 00:00:00'),
(481, '20317007', 'VAP17', 'IBC', 'VAPI-17', '0000-00-00 00:00:00'),
(482, '20317009', 'DNH13', 'IBC', 'DADRA AND NAGAR HAVELI-13', '0000-00-00 00:00:00'),
(483, '30203002', 'PTN13', 'CLB', 'PATNA-13', '0000-00-00 00:00:00'),
(484, '30203003', 'PTN14', 'HBA', 'PATNA-14', '0000-00-00 00:00:00'),
(485, '30203004', 'PTN501', 'CLB', 'PATNA-501', '0000-00-00 00:00:00'),
(486, '30203005', 'PTN502', 'LBC', 'PATNA-502', '0000-00-00 00:00:00'),
(487, '30203006', 'PTN503', 'LBC', 'PATNA-503', '0000-00-00 00:00:00'),
(488, '30203007', 'PTN504', 'CLB', 'PATNA-504', '0000-00-00 00:00:00'),
(489, '20314001', 'SAP01', 'CLB', 'SHAPAR', '0000-00-00 00:00:00'),
(490, '30506001', 'SBP11', 'HBC', 'SAMBALPUR-11', '0000-00-00 00:00:00'),
(491, '30708001', 'SDQ01', 'ARM', 'SHANTIPUR-01', '0000-00-00 00:00:00'),
(492, '40512001', 'SLM11', 'HBC', 'SALEM-11', '0000-00-00 00:00:00'),
(493, '40512002', 'SLM12', 'CLB', 'SALEM-12', '0000-00-00 00:00:00'),
(494, '10504001', 'SLN01', 'ARM', 'SOLAN-01', '0000-00-00 00:00:00'),
(495, '30104001', 'SLR11', 'HBC', 'SILCHAR-11', '0000-00-00 00:00:00'),
(496, '10602001', 'SRI11', 'HBC', 'SRINAGAR-11', '0000-00-00 00:00:00'),
(497, '40516001', 'TKN01', 'ARM', 'TUTICORIN-01', '0000-00-00 00:00:00'),
(498, '40306001', 'KTY01', 'ARM', 'KOTTAYAM-01', '0000-00-00 00:00:00'),
(499, '40302001', 'CLT11', 'HBC', 'CALICUT-11', '0000-00-00 00:00:00'),
(500, '20317011', 'VAW51', 'CLB', 'VAPI-51', '0000-00-00 00:00:00'),
(501, '40108002', 'VHP12', 'CLB', 'VISHAKHAPATNAM-12', '0000-00-00 00:00:00'),
(502, '10101003', 'CRP904', 'PCB', 'CORPORATE-904', '0000-00-00 00:00:00'),
(503, '40201055', 'WFD22', 'HBA', 'WHITEFIELD-22', '0000-00-00 00:00:00'),
(504, '40201050', 'NML15', 'HBA', 'NELAMANGALA-15', '0000-00-00 00:00:00'),
(505, '40201051', 'BLS903', 'PCB', 'BANGALORE SOUTH-903', '0000-00-00 00:00:00'),
(506, '40102023', 'HYD503', 'CLB', 'HYDERABAD-503', '0000-00-00 00:00:00'),
(507, '40102021', 'HYD502', 'CLB', 'HYDERABAD-502', '0000-00-00 00:00:00'),
(508, '40102018', 'HYD508', 'CLB', 'HYDERABAD-508', '0000-00-00 00:00:00'),
(509, '40102013', 'HYD23', 'CLB', 'HYDERABAD-23', '0000-00-00 00:00:00'),
(510, '40102002', 'SEC12', 'IBC', 'SECUNDERABAD-12', '0000-00-00 00:00:00'),
(511, '30703028', 'KKS14', 'IBC', 'KOLKATA SOUTH-14', '0000-00-00 00:00:00'),
(512, '30703015', 'KKC17', 'HBA', 'KOLKATA CITY-17', '0000-00-00 00:00:00'),
(513, '20512015', 'PUN27', 'CLB', 'PUNE-27', '0000-00-00 00:00:00'),
(514, '20512021', 'MHS001', 'SAM', 'MH MAHINDRA', '0000-00-00 00:00:00'),
(515, '20510004', 'NGP902', 'PCB', 'NAGPUR-902', '0000-00-00 00:00:00'),
(516, '20509019', 'BBY31', 'CLB', 'MUMBAI-31', '0000-00-00 00:00:00'),
(517, '20404004', 'IDR14', 'CLB', 'INDORE-14', '0000-00-00 00:00:00'),
(518, '20301014', 'AMD24', 'CLB', 'AHMEDABAD-24', '0000-00-00 00:00:00'),
(519, '20201004', 'PJI15', 'HBA', 'PANJIM-15', '0000-00-00 00:00:00'),
(520, '20404010', 'IDR19', 'HBA', 'INDORE-19', '0000-00-00 00:00:00'),
(521, '20404011', 'IDR21', 'HBA', 'INDORE-21', '0000-00-00 00:00:00'),
(522, '40512004', 'SLM13', 'CLB', 'SALEM-13', '0000-00-00 00:00:00'),
(523, '20404012', 'IDR20', 'HBA', 'INDORE-20', '0000-00-00 00:00:00'),
(524, '10203001', 'MOH11', 'HBC', 'MOHALI-11', '0000-00-00 00:00:00'),
(525, '40502049', 'TVR16', 'IBC', 'TIRUVALLUR-16', '0000-00-00 00:00:00'),
(526, '10202002', 'ZKPEX', 'CLB', 'ZIRAKPUR-EX', '0000-00-00 00:00:00'),
(527, '10202003', 'ZKP12', 'HBA', 'ZIRAKPUR-12', '0000-00-00 00:00:00'),
(528, '10202004', 'ZKP13', 'IBC', 'ZIRAKPUR-13', '0000-00-00 00:00:00'),
(529, '10202005', 'ZKP14', 'IBC', 'ZIRAKPUR-14', '0000-00-00 00:00:00'),
(530, '40502025', 'MAD901', 'PCB', 'CHENNAI-901', '0000-00-00 00:00:00'),
(531, '20301025', 'AMD508', 'CLB', 'AHMEDABAD-508', '0000-00-00 00:00:00'),
(532, '20404009', 'XIDR', 'CLB', 'XINDORE-51', '0000-00-00 00:00:00'),
(533, '11001003', 'DEH503', 'CLB', 'DEHRADUN-503', '0000-00-00 00:00:00'),
(534, '30703035', 'CAL36', 'CLB', 'CALCUTTA-36', '0000-00-00 00:00:00'),
(535, '10914011', 'LKW17', 'IBC', 'LUCKNOW-17', '0000-00-00 00:00:00'),
(536, '10901007', 'AGW51', 'CLB', 'AGRA-51', '0000-00-00 00:00:00'),
(537, '20301030', 'AMD506', 'CLB', 'AHMEDABAD-506', '0000-00-00 00:00:00'),
(538, '10201013', 'CHD504', 'CLB', 'CHANDIGARH-504', '0000-00-00 00:00:00'),
(539, '10806014', 'JPR502', 'CLB', 'JAIPUR-502', '0000-00-00 00:00:00'),
(540, '30102005', 'GHT502', 'LBC', 'GUWAHATI-502', '0000-00-00 00:00:00'),
(541, '10922027', 'NDA24', 'CLB', 'NOIDA-24', '0000-00-00 00:00:00'),
(542, '40107001', 'VWR02', 'CLB', 'VIJAYAWADA-02', '0000-00-00 00:00:00'),
(543, '20512011', 'PUN23', 'CLB', 'PUNE-23', '0000-00-00 00:00:00'),
(544, '30709001', 'SGU11', 'HBC', 'SILIGURI-11', '0000-00-00 00:00:00'),
(545, '10810001', 'SIK01', 'ARM', 'SIKAR-01', '0000-00-00 00:00:00'),
(546, '20514001', 'SIN01', 'ARM', 'SINNAR-01', '0000-00-00 00:00:00'),
(547, '30401001', 'SLG01', 'ARM', 'SHILLONG-01', '0000-00-00 00:00:00'),
(548, '10411001', 'SNP11', 'HBC', 'SONEPAT-11', '0000-00-00 00:00:00'),
(549, '20315001', 'SRT11', 'HBC', 'SURAT-11', '0000-00-00 00:00:00'),
(550, '20315002', 'SRT12', 'IBC', 'SURAT-12', '0000-00-00 00:00:00'),
(551, '20315003', 'SRT13', 'HBA', 'SURAT-13', '0000-00-00 00:00:00'),
(552, '40513001', 'SVA01', 'ARM', 'SIVAKASI-01', '0000-00-00 00:00:00'),
(553, '40106001', 'TIR01', 'ARM', 'TIRUPATI-01', '0000-00-00 00:00:00'),
(554, '40208001', 'UDP01', 'ARM', 'UDIPI-01', '0000-00-00 00:00:00'),
(555, '20409001', 'UJA01', 'ARM', 'UJJAIN-01', '0000-00-00 00:00:00'),
(556, '10927001', 'VAR11', 'HBC', 'VARANASI-11', '0000-00-00 00:00:00'),
(557, '40107002', 'VWR11', 'HBC', 'VIJAYAWADA-11', '0000-00-00 00:00:00'),
(558, '10412001', 'YNR01', 'ARM', 'YAMUNANAGAR-01', '0000-00-00 00:00:00'),
(559, '20516001', 'SNG01', 'ARM', 'SANGALI-01', '0000-00-00 00:00:00'),
(560, '40201053', 'BLR46', 'CLB', 'BANGALORE-46', '0000-00-00 00:00:00'),
(561, '20301047', 'AMD400', 'IBO', 'AHMEDABAD-400', '0000-00-00 00:00:00'),
(562, '20301032', 'AMD509', 'CLB', 'AHMEDABAD-509', '0000-00-00 00:00:00'),
(563, '10909007', 'GZB502', 'CLB', 'GHAZIABAD-502', '0000-00-00 00:00:00'),
(564, '30709002', 'SGU12', 'HBA', 'SILIGURI-12', '0000-00-00 00:00:00'),
(565, '40102003', 'HYD13', 'CLB', 'HYDERABAD-13', '0000-00-00 00:00:00'),
(566, '30203009', 'PTN506', 'LBC', 'PATNA-506', '0000-00-00 00:00:00'),
(567, '10201015', 'CHD506', 'CLB', 'CHANDIGARH-506', '0000-00-00 00:00:00'),
(568, '20304005', 'BAR16', 'HBA', 'BARODA-16', '0000-00-00 00:00:00'),
(569, '40502006', 'MAD16', 'CLB', 'CHENNAI-16', '0000-00-00 00:00:00'),
(570, '30503002', 'BHU502', 'CLB', 'BHUBANESHWAR-502', '0000-00-00 00:00:00'),
(571, '10704005', 'JAL15', 'IBC', 'JALANDHAR-15', '0000-00-00 00:00:00'),
(572, '10914014', 'LKW501', 'CLB', 'LUCKNOW-501', '0000-00-00 00:00:00'),
(573, '40303009', 'CCW54', 'CLB', 'COCHIN-54', '0000-00-00 00:00:00'),
(574, '40303010', 'CCH505', 'CLB', 'COCHIN-505', '0000-00-00 00:00:00'),
(575, '30709003', 'SGU13', 'IBC', 'SILIGURI-13', '0000-00-00 00:00:00'),
(576, '10405002', 'FRD13', 'HBA', 'FARIDABAD-13', '0000-00-00 00:00:00'),
(577, '30703036', 'KKO13', 'HBA', 'KOLKATA OUTBOUND-13', '0000-00-00 00:00:00'),
(578, '10922927', 'NDA506', 'LBC', 'NOIDA SCS-506', '0000-00-00 00:00:00'),
(579, '30703039', 'CAL519', 'CLB', 'KOLKATA SCS-519', '0000-00-00 00:00:00'),
(580, '30703040', 'CAL520', 'CLB', 'KOLKATA SCS-520', '0000-00-00 00:00:00'),
(581, '10806020', 'JPW60', 'CLB', 'JAIPUR-60', '0000-00-00 00:00:00'),
(582, '20510012', 'NGP22', 'HBA', 'NAGPUR-22', '0000-00-00 00:00:00'),
(583, '20509029', 'BBY42', 'CLB', 'MUMBAI-42', '0000-00-00 00:00:00'),
(584, '20509044', 'BBY45', 'CLB', 'MUMBAI-45', '0000-00-00 00:00:00'),
(585, '10501001', 'BDI11', 'HBC', 'BADDI-11', '0000-00-00 00:00:00'),
(586, '10501002', 'BDI12', 'IBC', 'BADDI-12', '0000-00-00 00:00:00'),
(587, '10501003', 'BDI13', 'HBA', 'BADDI-13', '0000-00-00 00:00:00'),
(588, '10501004', 'BDI14', 'HBA', 'BADDI-14', '0000-00-00 00:00:00'),
(589, '10501005', 'BDI15', 'CLB', 'BADDI-15', '0000-00-00 00:00:00'),
(590, '10501006', 'BDI16', 'CLB', 'BADDI-16', '0000-00-00 00:00:00'),
(591, '10501007', 'BDI17', 'IBC', 'BADDI-17', '0000-00-00 00:00:00'),
(592, '10501010', 'BDI20', 'CLB', 'BADDI-20', '0000-00-00 00:00:00'),
(593, '40201001', 'BLR11', 'HBC', 'BANGALORE-11', '0000-00-00 00:00:00'),
(594, '40201002', 'WFD12', 'HBA', 'WHITEFIELD-12', '0000-00-00 00:00:00'),
(595, '40201003', 'WFD13', 'IBC', 'WHITEFIELD-13', '0000-00-00 00:00:00'),
(596, '40201005', 'NML12', 'IBC', 'NELAMANGALA-12', '0000-00-00 00:00:00'),
(597, '40201006', 'BLC16', 'IBC', 'BANGALORE CITY-16', '0000-00-00 00:00:00'),
(598, '40201007', 'BLS13', 'HBA', 'BANGALORE SOUTH-13', '0000-00-00 00:00:00'),
(599, '40201009', 'BLC19', 'IBC', 'BANGALORE CITY-19', '0000-00-00 00:00:00'),
(600, '40201010', 'BLC15', 'HBA', 'BANGALORE CITY-15', '0000-00-00 00:00:00'),
(601, '40201011', 'BLC12', 'HBA', 'BANGALORE CITY-12', '0000-00-00 00:00:00'),
(602, '40201012', 'BLC17', 'IBC', 'BANGALORE CITY-17', '0000-00-00 00:00:00'),
(603, '40201013', 'WFD14', 'HBA', 'WHITEFIELD-14', '0000-00-00 00:00:00'),
(604, '40201014', 'WFD901', 'PCB', 'WHITEFIELD-901', '0000-00-00 00:00:00'),
(605, '40201016', 'BLC14', 'HBA', 'BANGALORE CITY-14', '0000-00-00 00:00:00'),
(606, '40201017', 'BLS12', 'IBC', 'BANGALORE SOUTH-12', '0000-00-00 00:00:00'),
(607, '40201018', 'WFD16', 'HBA', 'WHITEFIELD-16', '0000-00-00 00:00:00'),
(608, '40201019', 'WFD17', 'HBA', 'WHITEFIELD-17', '0000-00-00 00:00:00'),
(609, '40201020', 'WFD18', 'HBA', 'WHITEFIELD-18', '0000-00-00 00:00:00'),
(610, '40201024', 'NML13', 'IBC', 'NELAMANGALA-13', '0000-00-00 00:00:00'),
(611, '40201025', 'NML14', 'IBC', 'NELAMANGALA-14', '0000-00-00 00:00:00'),
(612, '40201028', 'BLS16', 'HBA', 'BANGALORE SOUTH-16', '0000-00-00 00:00:00'),
(613, '40201029', 'BLS901', 'CLB', 'BANGALORE SOUTH-901', '0000-00-00 00:00:00'),
(614, '40201043', 'WFD902', 'PCB', 'WHITEFIELD-902', '0000-00-00 00:00:00'),
(615, '40201045', 'BLC351', 'RSC', 'BANGALORE CITY-351', '0000-00-00 00:00:00'),
(616, '40201046', 'NML11', 'HBC', 'NELAMANGALA-11', '0000-00-00 00:00:00'),
(617, '40201026', 'BLR501', 'LBC', 'BANGALORE SCS-501', '0000-00-00 00:00:00'),
(618, '40201027', 'BLR502', 'LBC', 'BANGALORE SCS-502', '0000-00-00 00:00:00'),
(619, '40201030', 'BLR503', 'LBC', 'BANGALORE SCS-503', '0000-00-00 00:00:00'),
(620, '40201032', 'BLR504', 'LBC', 'BANGALORE SCS-504', '0000-00-00 00:00:00'),
(621, '40201034', 'BLR506', 'LBC', 'BANGALORE SCS-506', '0000-00-00 00:00:00'),
(622, '40201036', 'BLR507', 'LBC', 'BANGALORE SCS-507', '0000-00-00 00:00:00'),
(623, '40201037', 'WFD23', 'HBA', 'WHITEFIELD-23', '0000-00-00 00:00:00'),
(624, '40201035', 'BLR509', 'CLB', 'BANGALORE SCS-509', '0000-00-00 00:00:00'),
(625, '40201039', 'BLR510', 'LBC', 'BANGALORE SCS-510', '0000-00-00 00:00:00'),
(626, '40201040', 'BLR512', 'CLB', 'BANGALORE SCS-512', '0000-00-00 00:00:00'),
(627, '40201044', 'BLR513', 'CLB', 'BANGALORE SCS-513', '0000-00-00 00:00:00'),
(628, '30703001', 'CAL11', 'HBC', 'CALCUTTA-11', '0000-00-00 00:00:00'),
(629, '30703002', 'KKC12', 'IBC', 'KOLKATA CITY-12', '0000-00-00 00:00:00'),
(630, '30703004', 'KKS12', 'IBC', 'KOLKATA SOUTH-12', '0000-00-00 00:00:00'),
(631, '30703005', 'KKC401', 'IBO', 'KOLKATA CITY-401', '0000-00-00 00:00:00'),
(632, '30703006', 'CAL16', 'CLB', 'CALCUTTA-16', '0000-00-00 00:00:00'),
(633, '30703007', 'KKC14', 'IBC', 'KOLKATA CITY-14', '0000-00-00 00:00:00'),
(634, '30703008', 'KKS13', 'IBC', 'KOLKATA SOUTH-13', '0000-00-00 00:00:00'),
(635, '30703009', 'KKC15', 'IBC', 'KOLKATA CITY-15', '0000-00-00 00:00:00'),
(636, '30703010', 'HRH901', 'PCB', 'HOWRAH-901', '0000-00-00 00:00:00'),
(637, '30703014', 'HRH801', 'FMC', 'HOWRAH-801', '0000-00-00 00:00:00'),
(638, '30703016', 'KKO12', 'IBC', 'KOLKATA OUTBOUND-12', '0000-00-00 00:00:00'),
(639, '30703017', 'CAL501', 'LBC', 'KOLKATA SCS-501', '0000-00-00 00:00:00'),
(640, '30703019', 'CAL502', 'CLB', 'KOLKATA SCS-502', '0000-00-00 00:00:00'),
(641, '30703021', 'CAL505', 'LBC', 'KOLKATA SCS-505', '0000-00-00 00:00:00'),
(642, '30703026', 'CAL510', 'CLB', 'KOLKATA SCS-510', '0000-00-00 00:00:00'),
(643, '30703027', 'CAL511', 'CLB', 'KOLKATA SCS-511', '0000-00-00 00:00:00'),
(644, '30703030', 'CAL512', 'LBC', 'KOLKATA SCS-512', '0000-00-00 00:00:00'),
(645, '30703032', 'CAL514', 'LBC', 'KOLKATA SCS-514', '0000-00-00 00:00:00'),
(646, '30703033', 'CAL515', 'CLB', 'KOLKATA SCS-515', '0000-00-00 00:00:00'),
(647, '30703034', 'CAL516', 'CLB', 'KOLKATA SCS-516', '0000-00-00 00:00:00'),
(648, '40303001', 'CCH11', 'HBC', 'COCHIN-11', '0000-00-00 00:00:00'),
(649, '40303003', 'CCH501', 'CLB', 'COCHIN-501', '0000-00-00 00:00:00'),
(650, '40303004', 'CCH502', 'CLB', 'COCHIN-502', '0000-00-00 00:00:00'),
(651, '40303005', 'CCH503', 'CLB', 'COCHIN-503', '0000-00-00 00:00:00'),
(652, '10201001', 'CHD11', 'HBC', 'CHANDIGARH-11', '0000-00-00 00:00:00'),
(653, '10201002', 'CHD12', 'IBC', 'CHANDIGARH-12', '0000-00-00 00:00:00'),
(654, '10201003', 'CHD13', 'HBA', 'CHANDIGARH-13', '0000-00-00 00:00:00'),
(655, '10201004', 'CHD14', 'HBA', 'CHANDIGARH-14', '0000-00-00 00:00:00'),
(656, '10201005', 'CHD15', 'HBA', 'CHANDIGARH-15', '0000-00-00 00:00:00'),
(657, '10201008', 'CHD18', 'CLB', 'CHANDIGARH-18', '0000-00-00 00:00:00'),
(658, '10201010', 'CHD501', 'CLB', 'CHANDIGARH-501', '0000-00-00 00:00:00'),
(659, '10201016', 'CHW57', 'CLB', 'CHANDIGARH-57', '0000-00-00 00:00:00'),
(660, '40301001', 'APE01', 'ARM', 'ALLEPPEY-01', '0000-00-00 00:00:00'),
(661, '40503001', 'CMB11', 'HBC', 'COIMBATORE-11', '0000-00-00 00:00:00'),
(662, '40503003', 'CMB14', 'IBC', 'COIMBATORE-14', '0000-00-00 00:00:00'),
(663, '40503005', 'CMB16', 'IBC', 'COIMBATORE-16', '0000-00-00 00:00:00'),
(664, '40503007', 'CMB19', 'IBC', 'COIMBATORE-19', '0000-00-00 00:00:00'),
(665, '40503008', 'CMB21', 'CLB', 'COIMBATORE-21', '0000-00-00 00:00:00'),
(666, '10101004', 'CRP901', 'PCB', 'CORPORATE-901', '0000-00-00 00:00:00'),
(667, '10301001', 'DLI11', 'HBC', 'DELHI-11', '0000-00-00 00:00:00'),
(668, '10301002', 'DLC351', 'RSC', 'DELHI CENTRAL-351', '0000-00-00 00:00:00'),
(669, '10301003', 'DLN13', 'CLB', 'DELHI NORTH-13', '0000-00-00 00:00:00'),
(670, '10301005', 'DLS12', 'CLB', 'DELHI SOUTH-12', '0000-00-00 00:00:00'),
(671, '10301006', 'DLW12', 'IBC', 'DELHI WEST-12', '0000-00-00 00:00:00'),
(672, '10301007', 'DLC401', 'IBO', 'DELHI CENTRAL-401', '0000-00-00 00:00:00'),
(673, '10301008', 'DLS15', 'HBA', 'DELHI SOUTH-15', '0000-00-00 00:00:00'),
(674, '10301010', 'DLN15', 'IBC', 'DELHI NORTH-15', '0000-00-00 00:00:00'),
(675, '10301011', 'DLC15', 'IBC', 'DELHI CENTRAL-15', '0000-00-00 00:00:00'),
(676, '10301012', 'DLW801', 'FMC', 'DELHI WEST-801', '0000-00-00 00:00:00'),
(677, '10301015', 'DLN18', 'CLB', 'DELHI NORTH-18', '0000-00-00 00:00:00'),
(678, '10301017', 'DLE352', 'RSC', 'DELHI EAST-352', '0000-00-00 00:00:00'),
(679, '10301018', 'DLW14', 'IBC', 'DELHI WEST-14', '0000-00-00 00:00:00'),
(680, '10301020', 'DLE401', 'IBO', 'DELHI EAST-401', '0000-00-00 00:00:00'),
(681, '10301022', 'DLC352', 'RSC', 'DELHI CENTRAL-352', '0000-00-00 00:00:00'),
(682, '10301024', 'DLW401', 'IBO', 'DELHI WEST-401', '0000-00-00 00:00:00'),
(683, '10301025', 'DLS901', 'PCB', 'DELHI SOUTH-901', '0000-00-00 00:00:00'),
(684, '10301026', 'DLW352', 'RSC', 'DELHI WEST-352', '0000-00-00 00:00:00'),
(685, '10301028', 'DLN11', 'HBC', 'DELHI NORTH-11', '0000-00-00 00:00:00'),
(686, '10301029', 'DLC353', 'RSC', 'DELHI CENTRAL-353', '0000-00-00 00:00:00'),
(687, '10301030', 'DLN21', 'CLB', 'DELHI NORTH-21', '0000-00-00 00:00:00'),
(688, '10301031', 'DLI43', 'CLB', 'DELHI-43', '0000-00-00 00:00:00'),
(689, '10301035', 'DLW20', 'IBC', 'DELHI WEST-20', '0000-00-00 00:00:00'),
(690, '10301039', 'DLW502', 'CLB', 'DELHI SCS-502', '0000-00-00 00:00:00'),
(691, '10406011', 'GRG802', 'FMC', 'GURGAON-802', '0000-00-00 00:00:00'),
(692, '20103001', 'RPR11', 'HBC', 'RAIPUR-11', '0000-00-00 00:00:00'),
(693, '20101001', 'BLN01', 'ARM', 'BHILAI-01', '0000-00-00 00:00:00'),
(694, '20102001', 'BLP01', 'ARM', 'BILASPUR (CG)-01', '0000-00-00 00:00:00'),
(695, '30703037', 'KKC400', 'IBO', 'KOLKATA CITY-400', '0000-00-00 00:00:00'),
(696, '40102028', 'HHC400', 'IBO', 'HYDERABAD HITEC CITY-400', '0000-00-00 00:00:00'),
(697, '40102026', 'HYD510', 'CLB', 'HYDERABAD-510', '0000-00-00 00:00:00');
INSERT INTO `dst_lrm_branch_dtls` (`id`, `branch_id`, `branch_code`, `branch_type`, `branch_name`, `created`) VALUES
(698, '10927003', 'VAR13', 'CLB', 'VARANASI-13', '0000-00-00 00:00:00'),
(699, '40502050', 'MAD512', 'LBC', 'CHENNAI SCS-512', '0000-00-00 00:00:00'),
(700, '10406025', 'GRG512', 'LBC', 'GURGAON-512', '0000-00-00 00:00:00'),
(701, '10922928', 'NDA28', 'HBA', 'NOIDA-28', '0000-00-00 00:00:00'),
(702, '30503004', 'BHU12', 'HBA', 'BHUBANESHWAR-12', '0000-00-00 00:00:00'),
(703, '40108003', 'VHP13', 'CLB', 'VISHAKHAPATNAM-13', '0000-00-00 00:00:00'),
(704, '10909019', 'GZW61', 'CLB', 'GHAZIABAD-61', '0000-00-00 00:00:00'),
(705, '10909016', 'GZB505', 'CLB', 'GHAZIABAD-505', '0000-00-00 00:00:00'),
(706, '10909017', 'GZW59', 'CLB', 'GHAZIABAD-59', '0000-00-00 00:00:00'),
(707, '10909020', 'GZW62', 'CLB', 'GHAZIABAD-62', '0000-00-00 00:00:00'),
(708, '10909021', 'GZW63', 'CLB', 'GHAZIABAD-63', '0000-00-00 00:00:00'),
(709, '10922929', 'NDA50', 'CLB', 'NOIDA-50', '0000-00-00 00:00:00'),
(710, '20421001', 'JAB12', 'CLB', 'JABALPUR-12', '0000-00-00 00:00:00'),
(711, '20404013', 'IDR902', 'PCB', 'INDORE-902', '0000-00-00 00:00:00'),
(712, '10806021', 'JPR21', 'CLB', 'JAIPUR-21', '0000-00-00 00:00:00'),
(713, '20404014', 'IDR503', 'CLB', 'INDORE-503', '0000-00-00 00:00:00'),
(714, '20404015', 'IDR504', 'CLB', 'INDORE-504', '0000-00-00 00:00:00'),
(715, '20404016', 'IDR505', 'LBC', 'INDORE-505', '0000-00-00 00:00:00'),
(716, '20510013', 'NGPEX', 'CLB', 'NAGPUR-EX', '0000-00-00 00:00:00'),
(717, '10406026', 'GRG513', 'CLB', 'GURGAON-513', '0000-00-00 00:00:00'),
(718, '10909022', 'GZB21', 'IBC', 'GHAZIABAD-21', '0000-00-00 00:00:00'),
(719, '40102029', 'HYC11', 'HBC', 'HYDERABAD CITY-11', '0000-00-00 00:00:00'),
(720, '40102025', 'HYD26', 'IBC', 'HYDERABAD-26', '0000-00-00 00:00:00'),
(721, '11001005', 'DEH12', 'CLB', 'DEHRADUN-12', '0000-00-00 00:00:00'),
(722, '40201060', 'BLR516', 'CLB', 'BANGALORE SCS-516', '0000-00-00 00:00:00'),
(723, '11002003', 'HRD13', 'IBC', 'HARIDWAR-13', '0000-00-00 00:00:00'),
(724, '11001006', 'DEH13', 'HBA', 'DEHRADUN-13', '0000-00-00 00:00:00'),
(725, '20301049', 'AHW69', 'CLB', 'AHMEDABAD-69', '0000-00-00 00:00:00'),
(726, '20510015', 'NGP501', 'LBC', 'NAGPUR-501', '0000-00-00 00:00:00'),
(727, '20510016', 'NGW52', 'CLB', 'NAGPUR-52', '0000-00-00 00:00:00'),
(728, '20510017', 'NGW53', 'CLB', 'NAGPUR-53', '0000-00-00 00:00:00'),
(729, '40207002', 'MSR12', 'HBA', 'MYSORE-12', '0000-00-00 00:00:00'),
(730, '40207003', 'MSR13', 'CLB', 'MYSORE-13', '0000-00-00 00:00:00'),
(731, '20404018', 'IDR502', 'CLB', 'INDORE-502', '0000-00-00 00:00:00'),
(732, '30503005', 'BHU503', 'CLB', 'BHUBANESHWAR-503', '0000-00-00 00:00:00'),
(733, '40201059', 'BLS902', 'PCB', 'BANGALORE SOUTH-902', '0000-00-00 00:00:00'),
(734, '40512006', 'SLC15', 'IBC', 'SALEM CITY-15', '0000-00-00 00:00:00'),
(735, '20509057', 'BBW51', 'CLB', 'MUMBAI-51', '0000-00-00 00:00:00'),
(736, '20510014', 'NGP905', 'PCB', 'NAGPUR-905', '0000-00-00 00:00:00'),
(737, '20103003', 'RPR13', 'CLB', 'RAIPUR-13', '0000-00-00 00:00:00'),
(738, '20103004', 'RPR501', 'LBC', 'RAIPUR-501', '0000-00-00 00:00:00'),
(739, '20103005', 'RPR503', 'CLB', 'RAIPUR-503', '0000-00-00 00:00:00'),
(740, '20103006', 'RPR504', 'CLB', 'RAIPUR-504', '0000-00-00 00:00:00'),
(741, '20103007', 'RPR505', 'CLB', 'RAIPUR-505', '0000-00-00 00:00:00'),
(742, '10918002', 'MRT12', 'IBC', 'MEERUT-12', '0000-00-00 00:00:00'),
(743, '10918003', 'MRT13', 'IBC', 'MEERUT-13', '0000-00-00 00:00:00'),
(744, '20102002', 'KRB01', 'ARM', 'KORBA-01', '0000-00-00 00:00:00'),
(745, '40102030', 'HYC17', 'HBA', 'HYDERABAD CITY-17', '0000-00-00 00:00:00'),
(746, '40303012', 'CCH506', 'CLB', 'COCHIN-506', '0000-00-00 00:00:00'),
(747, '30503006', 'BHU504', 'CLB', 'BHUBANESHWAR-504', '0000-00-00 00:00:00'),
(748, '30503007', 'BHU505', 'LBC', 'BHUBANESHWAR-505', '0000-00-00 00:00:00'),
(749, '30503009', 'BHU507', 'LBC', 'BHUBANESHWAR-507', '0000-00-00 00:00:00'),
(750, '30503010', 'BHU508', 'CLB', 'BHUBANESHWAR-508', '0000-00-00 00:00:00'),
(751, '30503011', 'BHU509', 'CLB', 'BHUBANESHWAR-509', '0000-00-00 00:00:00'),
(752, '30503012', 'BHW60', 'CLB', 'BHUBANESHWAR-60', '0000-00-00 00:00:00'),
(753, '20509058', 'BBY48', 'CLB', 'MUMBAI-48', '0000-00-00 00:00:00'),
(754, '10415003', 'PWL01', 'ARM', 'PALWAL-01', '0000-00-00 00:00:00'),
(755, '30800001', 'GNK01', 'ARM', 'GANGTOK-01', '0000-00-00 00:00:00'),
(756, '10903002', 'AHB12', 'HBA', 'ALLAHABAD-12', '0000-00-00 00:00:00'),
(757, '11005006', 'RDA15', 'IBC', 'RUDRAPUR-15', '0000-00-00 00:00:00'),
(758, '10705021', 'LDH24', 'CLB', 'LUDHIANA-24', '0000-00-00 00:00:00'),
(759, '30304006', 'JSW54', 'CLB', 'JAMSHEDPUR-54', '0000-00-00 00:00:00'),
(760, '40303013', 'CCH16', 'HBA', 'COCHIN-16', '0000-00-00 00:00:00'),
(761, '40503010', 'CMB501', 'CLB', 'COIMBATORE-501', '0000-00-00 00:00:00'),
(762, '10922930', 'NDA13', 'CLB', 'NOIDA-13', '0000-00-00 00:00:00'),
(763, '10202007', 'ZKP16', 'HBA', 'ZIRAKPUR-16', '0000-00-00 00:00:00'),
(764, '40102031', 'HYD512', 'CLB', 'HYDERABAD-512', '0000-00-00 00:00:00'),
(765, '10406028', 'GRW62', 'CLB', 'GURGAON-62', '0000-00-00 00:00:00'),
(766, '11005052', 'RDA502', 'CLB', 'RUDRAPUR-502', '0000-00-00 00:00:00'),
(767, '20404019', 'IDW56', 'CLB', 'INDORE-56', '0000-00-00 00:00:00'),
(768, '10202008', 'ZKP502', 'CLB', 'ZIRAKPUR-502', '0000-00-00 00:00:00'),
(769, '30102011', 'GHT400', 'IBO', 'GUWAHATI-400', '0000-00-00 00:00:00'),
(770, '20103008', 'RPR14', 'HBA', 'RAIPUR-14', '0000-00-00 00:00:00'),
(771, '20404020', 'IDR23', 'IBC', 'INDORE-23', '0000-00-00 00:00:00'),
(772, '40506006', 'HOS501', 'LBC', 'HOSUR-501', '0000-00-00 00:00:00'),
(773, '30709004', 'SGW51', 'CLB', 'SILIGURI-51', '0000-00-00 00:00:00'),
(774, '20510019', 'NGC400', 'IBO', 'NAGPUR CITY-400', '0000-00-00 00:00:00'),
(775, '40503011', 'CMB20', 'CLB', 'COIMBATORE-20', '0000-00-00 00:00:00'),
(776, '20304014', 'BAR13', 'IBC', 'BARODA-13', '0000-00-00 00:00:00'),
(777, '40502052', 'MAD505', 'LBC', 'CHENNAI SCS-505', '0000-00-00 00:00:00'),
(778, '20511006', 'NAS18', 'HBA', 'NASIK-18', '0000-00-00 00:00:00'),
(779, '20421002', 'JAB13', 'HBA', 'JABALPUR-13', '0000-00-00 00:00:00'),
(780, '10901010', 'AGR17', 'HBA', 'AGRA-17', '0000-00-00 00:00:00'),
(781, '20504007', 'ARD18', 'HBA', 'AURANGABAD-18', '0000-00-00 00:00:00'),
(782, '30709005', 'SGU14', 'CLB', 'SILIGURI-14', '0000-00-00 00:00:00'),
(783, '30709006', 'SGU15', 'CLB', 'SILIGURI-15', '0000-00-00 00:00:00'),
(784, '10501015', 'BDW52', 'CLB', 'BADDI-52', '0000-00-00 00:00:00'),
(785, '10501014', 'BDI501', 'CLB', 'BADDI-501', '0000-00-00 00:00:00'),
(786, '10101101', 'GRT01', 'IBO', 'GREENTRUCK-01', '0000-00-00 00:00:00'),
(787, '20404022', 'IDR507', 'CLB', 'INDORE-507', '0000-00-00 00:00:00'),
(788, '10909023', 'GZW64', 'CLB', 'GHAZIABAD-64', '0000-00-00 00:00:00'),
(789, '40309002', 'TRV13', 'HBA', 'TRIVENDRUM-13', '0000-00-00 00:00:00'),
(790, '10901011', 'AGR351', 'RSC', 'AGRA-351', '0000-00-00 00:00:00'),
(791, '40207101', 'HAS01', 'ARM', 'HASSAN-01', '0000-00-00 00:00:00'),
(792, '20406004', 'PMP801', 'FMC', 'PITHAMPUR-801', '0000-00-00 00:00:00'),
(793, '10804002', 'BHI12', 'HBA', 'BHIWADI-12', '0000-00-00 00:00:00'),
(794, '40309003', 'TRV12', 'HBA', 'TRIVENDRUM-12', '0000-00-00 00:00:00'),
(795, '40401011', 'PON21', 'CLB', 'PONDICHERRY-21', '0000-00-00 00:00:00'),
(796, '10705022', 'LDH02', 'CLB', 'LUDHIANA-02', '0000-00-00 00:00:00'),
(797, '10201017', 'CHD02', 'CLB', 'CHANDIGARH-02', '0000-00-00 00:00:00'),
(798, '10704007', 'JAL02', 'CLB', 'JALANDHAR-02', '0000-00-00 00:00:00'),
(799, '30703041', 'WBS001', 'SAM', 'WB TATA MOTOR', '0000-00-00 00:00:00'),
(800, '10901012', 'AGR02', 'CLB', 'AGRA-02', '0000-00-00 00:00:00'),
(801, '10405003', 'FRD02', 'CLB', 'FARIDABAD-02', '0000-00-00 00:00:00'),
(802, '10918005', 'MRT02', 'CLB', 'MEERUT-02', '0000-00-00 00:00:00'),
(803, '10909024', 'GZB02', 'CLB', 'GHAZIABAD-02', '0000-00-00 00:00:00'),
(804, '10914015', 'LKW02', 'CLB', 'LUCKNOW-02', '0000-00-00 00:00:00'),
(805, '30703042', 'CAL02', 'CLB', 'CALCUTTA-02', '0000-00-00 00:00:00'),
(806, '30703043', 'CAL03', 'CLB', 'CALCUTTA-03', '0000-00-00 00:00:00'),
(807, '20513010', 'PHN11', 'HBC', 'PHALTAN-11', '0000-00-00 00:00:00'),
(808, '20513020', 'BDR01', 'ARM', 'BHANDARA-01', '0000-00-00 00:00:00'),
(809, '40401012', 'PON22', 'CLB', 'PONDICHERRY-22', '0000-00-00 00:00:00'),
(810, '30102012', 'GHT504', 'LBC', 'GUWAHATI-504', '0000-00-00 00:00:00'),
(811, '11005054', 'RDA17', 'HBA', 'RUDRAPUR-17', '0000-00-00 00:00:00'),
(812, '20406006', 'PMP802', 'FMC', 'PITHAMPUR-802', '0000-00-00 00:00:00'),
(813, '30703044', 'CAL31', 'CLB', 'CALCUTTA-31', '0000-00-00 00:00:00'),
(814, '10406029', 'GRG401', 'CLB', 'GURGAON-401', '0000-00-00 00:00:00'),
(815, '10406030', 'GRG402', 'CLB', 'GURGAON-402', '0000-00-00 00:00:00'),
(816, '10302012', 'DLWB2C', 'CLB', 'DELHI WEST-B2C', '0000-00-00 00:00:00'),
(817, '10701002', 'ASR901', 'PCB', 'AMRITSAR-901', '0000-00-00 00:00:00'),
(818, '30601002', 'AGT12', 'CLB', 'AGARTLA-12', '0000-00-00 00:00:00'),
(819, '20509060', 'BBCB2C', 'CLB', 'MUMBAI CITY-B2C', '0000-00-00 00:00:00'),
(820, '20509061', 'BBY402', 'CLB', 'MUMBAI-402', '0000-00-00 00:00:00'),
(821, '20509063', 'BBY404', 'CLB', 'MUMBAI-404', '0000-00-00 00:00:00'),
(822, '20301053', 'AMD90', 'CLB', 'AHMEDABAD-90', '0000-00-00 00:00:00'),
(823, '20301052', 'AMD402', 'CLB', 'AHMEDABAD-402', '0000-00-00 00:00:00'),
(824, '40514002', 'TRP12', 'HBA', 'TIRUPUR-12', '0000-00-00 00:00:00'),
(825, '10302001', 'DLI02', 'CLB', 'DELHI-02', '0000-00-00 00:00:00'),
(826, '40502057', 'MAD02', 'CLB', 'CHENNAI-02', '0000-00-00 00:00:00'),
(827, '30304007', 'JSP13', 'HBA', 'JAMSHEDPUR-13', '0000-00-00 00:00:00'),
(828, '40201065', 'BLR03', 'CLB', 'BANGALORE-03', '0000-00-00 00:00:00'),
(829, '10201103', 'PIL12', 'CLB', 'PILKHUWA-12', '0000-00-00 00:00:00'),
(830, '10406031', 'GRG90', 'CLB', 'GURGAON-90', '0000-00-00 00:00:00'),
(831, '40206101', 'SMG01', 'ARM', 'SHIMOGA-01', '0000-00-00 00:00:00'),
(832, '40105101', 'WRL01', 'ARM', 'WARANGAL-01', '0000-00-00 00:00:00'),
(833, '40509010', 'TVL01', 'ARM', 'TIRUNELVELI-01', '0000-00-00 00:00:00'),
(834, '10906101', 'BNK01', 'ARM', 'BARABANKI-01', '0000-00-00 00:00:00'),
(835, '40508002', 'MDU12', 'HBA', 'MADURAI-12', '0000-00-00 00:00:00'),
(836, '10903003', 'AHB13', 'HBA', 'ALLAHABAD-13', '0000-00-00 00:00:00'),
(837, '30703045', 'KKS801', 'FMC', 'KOLKATA SOUTH-801', '0000-00-00 00:00:00'),
(838, '10202010', 'ZKP17', 'HBA', 'ZIRAKPUR-17', '0000-00-00 00:00:00'),
(839, '10506001', 'MND01', 'ARM', 'MANDI-01', '0000-00-00 00:00:00'),
(840, '10505003', 'UNA13', 'IBC', 'UNA-13', '0000-00-00 00:00:00'),
(841, '11005053', 'RDA16', 'HBA', 'RUDRAPUR-16', '0000-00-00 00:00:00'),
(842, '40502055', 'MAD515', 'LBC', 'CHENNAI SCS-515', '0000-00-00 00:00:00'),
(843, '40502056', 'MAD517', 'CLB', 'CHENNAI SCS-517', '0000-00-00 00:00:00'),
(844, '40201063', 'BLR519', 'CLB', 'BANGALORE SCS-519', '0000-00-00 00:00:00'),
(845, '30709007', 'SGW52', 'CLB', 'SILIGURI-52', '0000-00-00 00:00:00'),
(846, '20401009', 'BHO02', 'CLB', 'BHOPAL-02', '0000-00-00 00:00:00'),
(847, '20317012', 'VAP02', 'CLB', 'VAPI-02', '0000-00-00 00:00:00'),
(848, '20304015', 'BAR02', 'CLB', 'BARODA-02', '0000-00-00 00:00:00'),
(849, '20315005', 'SRT02', 'CLB', 'SURAT-02', '0000-00-00 00:00:00'),
(850, '20301050', 'AMD02', 'CLB', 'AHMEDABAD-02', '0000-00-00 00:00:00'),
(851, '20406005', 'PMP02', 'CLB', 'PITHAMPUR-02', '0000-00-00 00:00:00'),
(852, '30503013', 'BHU13', 'CLB', 'BHUBANESHWAR-13', '0000-00-00 00:00:00'),
(853, '10302004', 'DLI05', 'CLB', 'DELHI-05', '0000-00-00 00:00:00'),
(854, '40102032', 'HYD02', 'CLB', 'HYDERABAD-02', '0000-00-00 00:00:00'),
(855, '30204010', 'HJP01', 'ARM', 'HAJIPUR-01', '0000-00-00 00:00:00'),
(856, '10202009', 'ZKP501', 'CLB', 'ZIRAKPUR-501', '0000-00-00 00:00:00'),
(857, '10406101', 'MNR11', 'HBC', 'MANESAR-11', '0000-00-00 00:00:00'),
(858, '20511008', 'NAS16', 'HBA', 'NASIK-16', '0000-00-00 00:00:00'),
(859, '10302011', 'DLI06', 'CLB', 'DELHI-06', '0000-00-00 00:00:00'),
(860, '20512039', 'TEST', 'CLB', 'TEST', '0000-00-00 00:00:00'),
(861, '10806025', 'JPR90', 'CLB', 'JAIPUR-90', '0000-00-00 00:00:00'),
(862, '10806024', 'JPR401', 'CLB', 'JAIPUR-401', '0000-00-00 00:00:00'),
(863, '10909025', 'GZB401', 'CLB', 'GHAZIABAD-401', '0000-00-00 00:00:00'),
(864, '40401010', 'PON20', 'HBA', 'PONDICHERRY-20', '0000-00-00 00:00:00'),
(865, '20404021', 'IDR506', 'CLB', 'INDORE-506', '0000-00-00 00:00:00'),
(866, '40503012', 'CMB17', 'IBC', 'COIMBATORE-17', '0000-00-00 00:00:00'),
(867, '10101009', 'CRP12', 'CLB', 'CORPORATE-12', '0000-00-00 00:00:00'),
(868, '10203003', 'MOH13', 'HBA', 'MOHALI-13', '0000-00-00 00:00:00'),
(869, '20401010', 'BHO17', 'CLB', 'BHOPAL-17', '0000-00-00 00:00:00'),
(870, '20102101', 'RAI01', 'ARM', 'RAIGARH-01', '0000-00-00 00:00:00'),
(871, '10302006', 'DLS401', 'IBO', 'DELHI SOUTH-401', '0000-00-00 00:00:00'),
(872, '10302007', 'DLI402', 'CLB', 'DELHI-402', '0000-00-00 00:00:00'),
(873, '10302008', 'DLI403', 'CLB', 'DELHI-403', '0000-00-00 00:00:00'),
(874, '10302009', 'DLW1B2C', 'CLB', 'Delhi West1-B2C', '0000-00-00 00:00:00'),
(875, '10804003', 'BHI13', 'IBC', 'BHIWADI-13', '0000-00-00 00:00:00'),
(876, '20313002', 'RKT12', 'CLB', 'RAJKOT-12', '0000-00-00 00:00:00'),
(877, '40107003', 'VWR12', 'CLB', 'VIJAYAWADA-12', '0000-00-00 00:00:00'),
(878, '20519101', 'SWL01', 'ARM', 'SHIRWAL-01', '0000-00-00 00:00:00'),
(879, '10710001', 'ROP01', 'ARM', 'ROPAR-01', '0000-00-00 00:00:00'),
(880, '10201101', 'MGG01', 'ARM', 'MANDI GOBINGARH-01', '0000-00-00 00:00:00'),
(881, '1021002', 'MGG11', 'CLB', 'MANDI GOBINDGARH-11', '0000-00-00 00:00:00'),
(882, '2052001', 'CDP01', 'ARM', 'CHANDRAPUR-01', '0000-00-00 00:00:00'),
(883, '10922932', 'NDA401', 'CLB', 'NOIDA-401', '0000-00-00 00:00:00'),
(884, '30205001', 'GYA01', 'ARM', 'GAYA-01', '0000-00-00 00:00:00'),
(885, '20511007', 'NAS02', 'CLB', 'NASIK-02', '0000-00-00 00:00:00'),
(886, '20512035', 'PUN02', 'CLB', 'PUNE-02', '0000-00-00 00:00:00'),
(887, '20512036', 'PUN03', 'CLB', 'PUNE-03', '0000-00-00 00:00:00'),
(888, '20512037', 'PUN04', 'CLB', 'PUNE-04', '0000-00-00 00:00:00'),
(889, '10302003', 'DLI04', 'CLB', 'DELHI-04', '0000-00-00 00:00:00'),
(890, '20504009', 'ARD02', 'CLB', 'AURANGABAD-02', '0000-00-00 00:00:00'),
(891, '10101007', 'CRP15', 'CLB', 'CORPORATE-15', '0000-00-00 00:00:00'),
(892, '10101008', 'CRP11', 'IBO', 'CORPORATE-11', '0000-00-00 00:00:00'),
(893, '20103009', 'RPR15', 'CLB', 'RAIPUR-15', '0000-00-00 00:00:00'),
(894, '40512008', 'SLM02', 'CLB', 'SALEM-02', '0000-00-00 00:00:00'),
(895, '40502063', 'MAD90', 'CLB', 'CHENNAI-90', '0000-00-00 00:00:00'),
(896, '10705023', 'LDH400', 'CLB', 'LUDHIANA-400', '0000-00-00 00:00:00'),
(897, '10705024', 'LDH1B2C', 'CLB', 'LUDHIANA1-B2C', '0000-00-00 00:00:00'),
(898, '10901013', 'AMD1B2C', 'CLB', 'AGRA1-B2C', '0000-00-00 00:00:00'),
(899, '10704009', 'JAL401', 'CLB', 'JALANDHAR-401', '0000-00-00 00:00:00'),
(900, '20404024', 'IDR401', 'CLB', 'INDORE-401', '0000-00-00 00:00:00'),
(901, '40303014', 'CCH401', 'CLB', 'COCHIN-401', '0000-00-00 00:00:00'),
(902, '11001008', 'DEH401', 'CLB', 'DEHRADUN-401', '0000-00-00 00:00:00'),
(903, '40201072', 'BLR400', 'CLB', 'BANGALORE-400', '0000-00-00 00:00:00'),
(904, '40201073', 'BLR401', 'CLB', 'BANGALORE-401', '0000-00-00 00:00:00'),
(905, '40201074', 'BLR402', 'CLB', 'BANGALORE-402', '0000-00-00 00:00:00'),
(906, '40201075', 'BLR403', 'CLB', 'BANGALORE-403', '0000-00-00 00:00:00'),
(907, '20103010', 'RPR02', 'CLB', 'RAIPUR-02', '0000-00-00 00:00:00'),
(908, '10909027', 'GZB400', 'CLB', 'GHAZIABAD-400', '0000-00-00 00:00:00'),
(909, '', 'LDH90', '', 'LUDHIANA-90', '0000-00-00 00:00:00'),
(910, '42425425535', 'LADDAKH', 'HBA', 'NANGLOI', NULL),
(911, 'DFSFF', 'SFSFS', 'FSDFSD', 'SFSDF', NULL),
(912, 'DLI23', 'DELHI30', 'CLB', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dst_lrm_dtls_pro_bank_dtls`
--

CREATE TABLE `dst_lrm_dtls_pro_bank_dtls` (
  `id` int(11) NOT NULL,
  `dst_lrms_master_id` int(11) DEFAULT NULL,
  `factsheet_code` varchar(30) DEFAULT NULL,
  `dst_lrm_dtls_prorperty_owner_id` int(11) DEFAULT NULL,
  `dst_lrm_dtls_pro_bank_dtl_id` int(11) DEFAULT NULL,
  `payee_name` varchar(100) DEFAULT NULL,
  `branch_name` varchar(100) DEFAULT NULL,
  `account_type` varchar(100) DEFAULT NULL,
  `bank_name` varchar(100) DEFAULT NULL,
  `bank_address` varchar(100) DEFAULT NULL,
  `micr_code` varchar(50) DEFAULT NULL,
  `account_no` varchar(20) DEFAULT NULL,
  `ifsc_code` varchar(20) DEFAULT NULL,
  `activity_status` varchar(30) DEFAULT NULL,
  `status` tinyint(3) NOT NULL DEFAULT 1 COMMENT '1=Active,0=Inactive',
  `created_by` varchar(30) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `last_updated_by` varchar(100) DEFAULT NULL,
  `last_update_date` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dst_lrm_dtls_pro_bank_dtls`
--

INSERT INTO `dst_lrm_dtls_pro_bank_dtls` (`id`, `dst_lrms_master_id`, `factsheet_code`, `dst_lrm_dtls_prorperty_owner_id`, `dst_lrm_dtls_pro_bank_dtl_id`, `payee_name`, `branch_name`, `account_type`, `bank_name`, `bank_address`, `micr_code`, `account_no`, `ifsc_code`, `activity_status`, `status`, `created_by`, `created_date`, `last_updated_by`, `last_update_date`, `updated_at`, `created_at`) VALUES
(1, 1, NULL, 1, NULL, 'MOH', 'AXIS BANK', 'Savings Account', 'AXIS BANK KANKARBAGH', NULL, NULL, '3435354466565', 'SHH45', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-03 23:48:06', '2020-02-03 13:18:24'),
(2, 1, NULL, 2, NULL, 'SOHAN', 'DANAPUR', 'Savings Account', 'SBI', NULL, NULL, '65465465', 'sssssss', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-04 06:24:34', '2020-02-03 13:23:17'),
(3, 2, NULL, 3, NULL, 'SDS', 'SD', 'Savings Account', 'SDS', NULL, NULL, '32323', 'as22', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-05 12:02:05', '2020-02-04 00:31:47'),
(4, 11, 'DEL006', 4, NULL, 'Mohan Kumar', 'Sultanpur', 'Savings Account', 'AXIS BANk', NULL, NULL, '12687687687', 'AXIS56', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-10 12:37:40', '2020-02-10 12:37:40'),
(5, 11, 'DEL006', 5, NULL, 'Sohan', 'Suhjkhjhjh', 'Savings Account', 'hgfhghjg', NULL, NULL, '7657', 'ghghjghj', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-10 12:41:24', '2020-02-10 12:41:24'),
(6, 13, 'DEL010', 6, NULL, 'Mahesh', 'chhatrpur', 'Current Account', 'fhg', NULL, NULL, '6556', 'hgh', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-10 13:46:40', '2020-02-10 13:46:40'),
(7, 13, 'DEL010', 7, NULL, 'Second', 'Sultanpur', 'Current Account', 'Sultanpur', NULL, NULL, '5675675', 'hjgh', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-10 13:49:24', '2020-02-10 13:49:24'),
(8, 14, 'DEL011', 8, NULL, 'MAYANK', 'CHIRYAG', 'Current Account', 'SBI', NULL, NULL, '1234567890', 'SBI00124', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-11 02:11:43', '2020-02-11 02:11:43'),
(9, 15, 'DEL012', 9, NULL, 'prashant', 'vasant kunj', 'saving', 'icici', NULL, NULL, '000701623345', 'icic0000007', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-11 04:32:07', '2020-02-11 04:32:07'),
(10, 16, 'UTP001', 10, NULL, 'safiya', 'Seelampur', 'Savings Account', 'sbi', NULL, NULL, '909090909290', 'sbi90909', NULL, 0, NULL, NULL, NULL, NULL, '2020-02-16 15:56:21', '2020-02-15 08:43:16'),
(11, 16, 'UTP001', 11, NULL, 'abdul', 'seelampur', 'Escrow', 'HDFC', NULL, NULL, '3232323233', 'gorakh12121', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-15 08:47:30', '2020-02-15 08:47:30'),
(12, 16, 'UTP001', 12, NULL, 'Ak', 'SBI', 'Savings Account', 'SBI', NULL, NULL, '123565689', 'FDGFD', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-16 07:01:07', '2020-02-16 07:01:07'),
(13, 16, 'UTP001', 13, NULL, 'Ak', 'ICICI', 'Savings Account', 'ICICI', NULL, NULL, '67567567', 'GFGF', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-16 07:31:10', '2020-02-16 07:31:10'),
(14, 17, 'DEL013', 14, NULL, 'virat kohli', 'bandra', 'Savings Account', 'dena bank', NULL, NULL, '456456456456456', 'mum1234566', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-16 14:39:59', '2020-02-16 14:39:59'),
(15, 18, 'UTP002', 15, NULL, 'sachin', 'saidpur', 'Savings Account', 'vijaya bank', NULL, NULL, '7897897899', 'vijaya8787878', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-17 00:12:34', '2020-02-17 00:12:34'),
(16, 19, 'DEL014', 16, NULL, 'RAHUL', 'NANGLOI', 'SAVINGS ACCOUNT', 'ICICI BANK', NULL, NULL, '564564654', 'ICIC0000007', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-18 12:33:09', '2020-02-17 14:03:56'),
(17, 20, 'RAJ001', 17, NULL, 'rahul', 'jaipur', 'Savings Account', 'sbi', NULL, NULL, '7878787887887', 'sbi87767878', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-18 12:45:47', '2020-02-18 12:45:47'),
(18, 21, 'DEL015', 18, NULL, 'mayank', 'chirag delhi', 'Current Account', 'SBI', NULL, NULL, '110000655455', 'sbi6567878', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-19 02:26:36', '2020-02-19 02:26:36'),
(19, 21, 'DEL015', 19, NULL, 'bhushan', 'nangloi', 'Current Account', 'sbi', NULL, NULL, '786776778778', 'sbi6567878', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-19 02:29:43', '2020-02-19 02:29:43'),
(20, 21, 'DEL015', 20, NULL, 'fsdfsdfsd', 'dsfsdfsdf', 'Savings Account', 'sfsfsdf', NULL, NULL, '35353535345345', 'sfsdf34535345', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-19 02:34:08', '2020-02-19 02:34:08'),
(21, 22, 'HAR001', 21, NULL, 'ANKIT SHARMA', 'VASANT KUNJ', 'SAVINGS ACCOUNT', 'AXIS BANK LTD.', NULL, NULL, '11901010010765', 'UTIB0000119', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-22 05:49:30', '2020-02-19 04:07:13'),
(22, 22, 'HAR001', 22, NULL, 'RAHUL SINGHANIA', 'VASANT KUNJ', 'SAVINGS ACCOUNT', 'YES BANK', NULL, NULL, '123456789099876', 'POIUYT567889', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-19 04:34:31', '2020-02-19 04:17:55'),
(23, 24, 'UTP003', 23, NULL, 'mona', 'loha mandi', 'Current Account', 'icici', NULL, NULL, '12545788', 'synb0123456', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-22 14:33:15', '2020-02-22 14:33:15'),
(24, 24, 'UTP003', 24, NULL, 'yadav', 'sonipat', 'Current Account', 'icici bank', NULL, NULL, '90141452541', 'synb0123456', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-22 14:47:27', '2020-02-22 14:47:27'),
(25, 25, 'GUJ001', 25, NULL, 'RANU', 'BASANT VIHAR', 'CURRENT ACCOUNT', 'SYB BANK', NULL, NULL, '09988989', 'SYNB0987651', NULL, 1, NULL, NULL, NULL, NULL, '2020-03-15 10:11:25', '2020-02-22 15:01:23'),
(26, 25, 'GUJ001', 26, NULL, 'monu', 'assam', 'Savings Account', 'sbi', NULL, NULL, '9877666', 'sbib0987654', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-22 15:07:16', '2020-02-22 15:07:16'),
(27, 26, 'BJO003', 27, NULL, 'rahul', 'nangloi', 'Savings Account', 'SYNDICATE BANK', NULL, NULL, '3232323233', 'synb0123456', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-24 01:38:10', '2020-02-24 01:38:10'),
(28, 27, 'RAJ002', 28, NULL, 'Dinesh', 'Nangoi', 'Savings Account', 'SYNDICATE BANK', NULL, NULL, '925252582525', 'synb0123654', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-24 09:03:30', '2020-02-24 09:03:30'),
(29, 27, 'RAJ002', 29, NULL, 'meena', 'nangloi', 'Savings Account', 'SYNDICATE BANK', NULL, NULL, '3232323233', 'SYN8787888998', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-24 09:15:24', '2020-02-24 09:15:24'),
(30, 27, 'RAJ002', 30, NULL, 'rahul', 'nangloi', 'Current Account', 'SYNDICATE BANK', NULL, NULL, '3232323233', 'SYN8787888998', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-24 09:17:20', '2020-02-24 09:17:20'),
(31, 28, 'DEL016', 31, NULL, 'dinesh', 'nangloi', 'Savings Account', 'syndicate  bank', NULL, NULL, '123456677', 'synb0123456', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-24 13:46:27', '2020-02-24 13:46:27'),
(32, 28, 'DEL016', 32, NULL, 'ramesh', 'nangloi', 'Current Account', 'SYNDICATE BANK', NULL, NULL, '112442', 'synb0123456', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-24 13:50:59', '2020-02-24 13:50:59'),
(33, 28, 'DEL016', 33, NULL, 'rahul', 'nangloi', 'Savings Account', 'SYNDICATE BANK', NULL, NULL, '3232323233', 'icic0000007', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-24 14:41:12', '2020-02-24 14:41:12'),
(34, 28, 'DEL016', 34, NULL, 'Mukesh', 'Nangoi', 'Savings Account', 'Honululu bank', NULL, NULL, NULL, 'SYN8787888998', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-24 14:42:38', '2020-02-24 14:42:38'),
(35, 29, 'CRP001', 35, NULL, 'ddd', 'nangloi', 'Current Account', 'SYNDICATE BANK', NULL, NULL, '34345345', 'synb0123456', NULL, 0, NULL, NULL, NULL, NULL, '2020-02-28 00:42:01', '2020-02-24 15:04:05'),
(36, 30, 'MHG001', 36, NULL, 'RAHUL SINGHANIA', 'KALWAR ROAD', 'SAVINGS ACCOUNT', 'YES BANK', NULL, NULL, '123456789097864', 'UTIB0000119', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-28 02:05:49', '2020-02-28 01:09:36'),
(37, 30, 'MHG001', 37, NULL, 'AMIT SACHDEVA', 'MAIN STREET', 'Savings Account', 'ICICI BANK', NULL, NULL, '1234', 'OIUY0REWQS9', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-28 01:14:10', '2020-02-28 01:14:10'),
(38, 32, 'JKH001', 38, NULL, 'rahul sharma', 'lodhi road', 'Savings Account', 'hdfc bank', NULL, NULL, '1234567890', 'utib0000119', NULL, 1, NULL, NULL, NULL, NULL, '2020-03-15 02:53:44', '2020-03-15 02:53:44'),
(39, 32, 'JKH001', 39, NULL, 'amit sharma', 'central branch', 'Savings Account', 'yes bank', NULL, NULL, '0000987654', 'utib0000987', NULL, 1, NULL, NULL, NULL, NULL, '2020-03-15 03:01:21', '2020-03-15 03:01:21'),
(40, NULL, ' ', 40, NULL, 'raju', 'nangloi', 'Savings Account', 'SYNDICATE BANK', NULL, NULL, '3232323233', 'SYN8787888998', NULL, 1, NULL, NULL, NULL, NULL, '2020-03-15 10:14:02', '2020-03-15 10:14:02'),
(41, NULL, ' ', 41, NULL, 'seema singh', 'nangloi', 'Savings Account', 'SYNDICATE BANK', NULL, NULL, '90141452541', 'SYN8787888998', NULL, 1, NULL, NULL, NULL, NULL, '2020-03-15 10:17:26', '2020-03-15 10:17:26'),
(42, NULL, ' ', 42, NULL, 'seema singh', 'nangloi', 'Savings Account', 'SYNDICATE BANK', NULL, NULL, '90141452541', 'SYN8787888998', NULL, 1, NULL, NULL, NULL, NULL, '2020-03-15 10:18:18', '2020-03-15 10:18:18'),
(43, NULL, ' ', 43, NULL, 'trumph', 'rajeev chowk', 'Current Account', 'icici', NULL, NULL, '110041', 'SYN8787888998', NULL, 1, NULL, NULL, NULL, NULL, '2020-03-15 11:41:02', '2020-03-15 11:41:02'),
(44, NULL, ' ', 44, NULL, 'rahul', 'nangloi', 'Current Account', 'HDFC', NULL, NULL, '1452542', 'SYN8787888998', NULL, 1, NULL, NULL, NULL, NULL, '2020-03-16 08:24:16', '2020-03-16 08:24:16'),
(45, 33, 'UTP004', 45, NULL, 'JHON', 'INDRA NAGAR', 'SAVINGS ACCOUNT', 'ICICI BANK', '220 indra nagar', NULL, '2525225552', 'ICIC0000007', NULL, 1, NULL, NULL, NULL, NULL, '2020-03-17 05:29:11', '2020-03-16 10:00:40'),
(46, 33, 'UTP004', 46, NULL, 'alex', 'gomti nagar', 'Savings Account', 'SYNDICATE BANK', '500,gomati nagar', '2525225', '3232323233', 'ICIC0000007', NULL, 1, NULL, NULL, NULL, NULL, '2020-03-16 10:07:42', '2020-03-16 10:07:42'),
(47, 35, 'DEL017', 47, NULL, 'ap singh', 'uttam nagar', 'Savings Account', 'sbi', 'uttam nagar', '2525225', '2525252525', 'icic0000007', NULL, 1, NULL, NULL, NULL, NULL, '2020-03-18 07:24:37', '2020-03-18 07:24:37');

-- --------------------------------------------------------

--
-- Table structure for table `dst_lrm_dtls_pro_rental_dtls`
--

CREATE TABLE `dst_lrm_dtls_pro_rental_dtls` (
  `id` int(11) NOT NULL,
  `dst_lrms_master_id` int(11) DEFAULT NULL,
  `factsheet_code` varchar(30) DEFAULT NULL,
  `dst_lrm_dtls_prorperty_owner_id` int(11) DEFAULT NULL,
  `refundable_security_deposit` double(15,2) DEFAULT 0.00,
  `advances` double(15,2) DEFAULT NULL,
  `monthly_rent` double(15,2) DEFAULT NULL,
  `advance_deduction` double(15,2) DEFAULT NULL,
  `payment_system` varchar(100) DEFAULT NULL,
  `agreement_period` varchar(30) DEFAULT NULL,
  `notice_period` varchar(30) DEFAULT NULL,
  `enhancement_clause` varchar(100) DEFAULT NULL,
  `newly_constructed_for_us` varchar(100) DEFAULT NULL,
  `last_tenant` varchar(100) DEFAULT NULL,
  `special_remarks` varchar(100) DEFAULT NULL,
  `activity_status` varchar(100) DEFAULT NULL,
  `status` tinyint(3) NOT NULL DEFAULT 1 COMMENT '1=ACTIVE,0=INACTIVE',
  `created_by` varchar(100) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `last_updated_by` varchar(100) DEFAULT NULL,
  `last_update_date` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dst_lrm_dtls_pro_rental_dtls`
--

INSERT INTO `dst_lrm_dtls_pro_rental_dtls` (`id`, `dst_lrms_master_id`, `factsheet_code`, `dst_lrm_dtls_prorperty_owner_id`, `refundable_security_deposit`, `advances`, `monthly_rent`, `advance_deduction`, `payment_system`, `agreement_period`, `notice_period`, `enhancement_clause`, `newly_constructed_for_us`, `last_tenant`, `special_remarks`, `activity_status`, `status`, `created_by`, `created_date`, `last_updated_by`, `last_update_date`, `updated_at`, `created_at`) VALUES
(1, 1, NULL, 1, 27000.00, 0.00, 5000.00, 2000.00, 'CURRENT MONTH BASIS', NULL, NULL, '10', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2020-02-03 23:48:06', '2020-02-03 13:18:24'),
(2, 1, NULL, 2, 27000.00, 18000.00, 4000.00, 2000.00, 'CURRENT MONTH BASIS', NULL, NULL, '10', NULL, NULL, 'remarks..', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-04 06:24:34', '2020-02-03 13:23:17'),
(3, 2, NULL, 3, 27000.00, 0.00, 9000.00, 2000.00, 'CURRENT MONTH BASIS', NULL, NULL, '10', NULL, NULL, 'sdsd', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-05 12:02:05', '2020-02-04 00:31:47'),
(4, 11, 'DEL006', 4, 13500.00, NULL, 5000.00, 1000.00, 'CURRENT MONTH BASIS', NULL, NULL, '10', NULL, NULL, 'Fisrts Owner', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-10 12:37:40', '2020-02-10 12:37:40'),
(5, 11, 'DEL006', 5, 13500.00, NULL, 4000.00, 1000.00, 'CURRENT MONTH BASIS', NULL, NULL, '10', NULL, NULL, 'second owner', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-10 12:41:24', '2020-02-10 12:41:24'),
(6, 13, 'DEL010', 6, 13500.00, NULL, 5000.00, 1000.00, 'CURRENT MONTH BASIS', NULL, NULL, '10', NULL, NULL, 'first', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-10 13:46:40', '2020-02-10 13:46:40'),
(7, 13, 'DEL010', 7, 13500.00, NULL, 4000.00, 1000.00, 'CURRENT MONTH BASIS', NULL, NULL, '10', NULL, NULL, 'Second', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-10 13:49:24', '2020-02-10 13:49:24'),
(8, 14, 'DEL011', 8, 50000.00, NULL, 15000.00, 50000.00, 'CURRENT MONTH BASIS', NULL, NULL, '11', NULL, NULL, 'NOBE', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-11 02:11:43', '2020-02-11 02:11:43'),
(9, 15, 'DEL012', 9, 15000.00, NULL, 0.00, 2000.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2020-02-11 04:32:07', '2020-02-11 04:32:07'),
(10, 16, 'UTP001', 10, 30000.00, 54000.00, 6000.00, 2000.00, NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, 0, NULL, NULL, NULL, NULL, '2020-02-16 15:56:21', '2020-02-15 08:43:16'),
(11, 16, 'UTP001', 11, 50000.00, 54000.00, 3000.00, 2000.00, NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-15 08:47:30', '2020-02-15 08:47:30'),
(12, 16, 'UTP001', 12, 20000.00, NULL, 20000.00, 10000.00, NULL, NULL, NULL, NULL, NULL, NULL, 'New Owner', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-16 07:01:07', '2020-02-16 07:01:07'),
(13, 16, 'UTP001', 13, 20000.00, NULL, 60000.00, 30000.00, NULL, NULL, NULL, NULL, NULL, NULL, 'New Owner', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-16 07:31:10', '2020-02-16 07:31:10'),
(14, 17, 'DEL013', 14, 20000.00, 44000.00, 10000.00, 2000.00, NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-16 14:39:59', '2020-02-16 14:39:59'),
(15, 18, 'UTP002', 15, 60000.00, 108000.00, 4000.00, 4000.00, NULL, NULL, NULL, NULL, NULL, NULL, 'only advances', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-17 00:12:34', '2020-02-17 00:12:34'),
(16, 19, 'DEL014', 16, 50000.00, 50000.00, 9000.00, 4000.00, NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-18 12:33:09', '2020-02-17 14:03:56'),
(17, 20, 'RAJ001', 17, 10000.00, 24000.00, 2000.00, 2000.00, NULL, NULL, NULL, NULL, NULL, NULL, 'No', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-18 12:45:47', '2020-02-18 12:45:47'),
(18, 21, 'DEL015', 18, 50000.00, 100000.00, 5000.00, 2000.00, NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-19 02:26:36', '2020-02-19 02:26:36'),
(19, 21, 'DEL015', 19, 35000.00, 50000.00, 4000.00, 2000.00, NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-19 02:29:43', '2020-02-19 02:29:43'),
(20, 21, 'DEL015', 20, 10000.00, 20000.00, 2000.00, 2000.00, NULL, NULL, NULL, NULL, NULL, NULL, 'dfsdfds', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-19 02:34:08', '2020-02-19 02:34:08'),
(21, 22, 'HAR001', 21, 10000.00, 5000.00, 2500.00, 500.00, NULL, NULL, NULL, NULL, NULL, NULL, '1ST OWNER', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-22 05:49:30', '2020-02-19 04:07:13'),
(22, 22, 'HAR001', 22, 10000.00, 5000.00, 2500.00, 500.00, NULL, NULL, NULL, NULL, NULL, NULL, '2ND OWNER', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-19 04:34:31', '2020-02-19 04:17:55'),
(23, 24, 'UTP003', 23, 5000.00, 5000.00, 3000.00, 300.00, NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-22 14:33:15', '2020-02-22 14:33:15'),
(24, 24, 'UTP003', 24, 1500.00, NULL, 2000.00, 200.00, NULL, NULL, NULL, NULL, NULL, NULL, 'No', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-22 14:47:27', '2020-02-22 14:47:27'),
(25, 25, 'GUJ001', 25, 10000.00, 15000.00, 1000.00, 1000.00, NULL, NULL, NULL, NULL, NULL, NULL, 'only advances', NULL, 1, NULL, NULL, NULL, NULL, '2020-03-15 10:11:25', '2020-02-22 15:01:23'),
(26, 25, 'GUJ001', 26, 5000.00, NULL, 1000.00, 2000.00, NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-22 15:07:16', '2020-02-22 15:07:16'),
(27, 26, 'BJO003', 27, 10000.00, 1000.00, 1000.00, 200.00, NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-24 01:38:10', '2020-02-24 01:38:10'),
(28, 27, 'RAJ002', 28, 10000.00, 20000.00, 2000.00, 500.00, NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-24 09:03:30', '2020-02-24 09:03:30'),
(29, 27, 'RAJ002', 29, 0.00, NULL, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-24 09:15:24', '2020-02-24 09:15:24'),
(30, 27, 'RAJ002', 30, 10000.00, NULL, 0.00, 2000.00, NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-24 09:17:20', '2020-02-24 09:17:20'),
(31, 28, 'DEL016', 31, 5000.00, 10000.00, 3000.00, 1000.00, NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-24 13:46:27', '2020-02-24 13:46:27'),
(32, 28, 'DEL016', 32, 10000.00, NULL, 2000.00, 1000.00, NULL, NULL, NULL, NULL, NULL, NULL, 'No', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-24 13:50:59', '2020-02-24 13:50:59'),
(33, 28, 'DEL016', 33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2020-02-24 14:41:12', '2020-02-24 14:41:12'),
(34, 28, 'DEL016', 34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2020-02-24 14:42:38', '2020-02-24 14:42:38'),
(35, 29, 'CRP001', 35, 10000.00, 50000.00, 3000.00, 1500.00, NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, 0, NULL, NULL, NULL, NULL, '2020-02-28 00:42:01', '2020-02-24 15:04:05'),
(36, 30, 'MHG001', 36, 50000.00, 25000.00, 12500.00, 2500.00, NULL, NULL, NULL, NULL, NULL, NULL, 'START DEDUCTION TILL ZERO', NULL, 1, NULL, NULL, NULL, NULL, '2020-02-28 02:05:49', '2020-02-28 01:09:36'),
(37, 30, 'MHG001', 37, 50000.00, 25000.00, 12500.00, 2500.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2020-02-28 01:14:10', '2020-02-28 01:14:10'),
(38, 32, 'JKH001', 38, 25000.00, 20000.00, 5000.00, 1000.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2020-03-15 02:53:44', '2020-03-15 02:53:44'),
(39, 32, 'JKH001', 39, 25000.00, 10000.00, 45000.00, 4000.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2020-03-15 03:01:21', '2020-03-15 03:01:21'),
(40, NULL, ' ', 40, 10000.00, NULL, 3000.00, 1000.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2020-03-15 10:14:02', '2020-03-15 10:14:02'),
(41, NULL, ' ', 41, 10000.00, NULL, 3000.00, 1000.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2020-03-15 10:17:26', '2020-03-15 10:17:26'),
(42, NULL, ' ', 42, 10000.00, NULL, 3000.00, 1000.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2020-03-15 10:18:18', '2020-03-15 10:18:18'),
(43, NULL, ' ', 43, 5000.00, NULL, 3000.00, 1000.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2020-03-15 11:41:02', '2020-03-15 11:41:02'),
(44, NULL, ' ', 44, 5000.00, NULL, 3000.00, 1000.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2020-03-16 08:24:16', '2020-03-16 08:24:16'),
(45, 33, 'UTP004', 45, 10000.00, 25000.00, 3000.00, 1000.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2020-03-17 05:29:11', '2020-03-16 10:00:40'),
(46, 33, 'UTP004', 46, 10000.00, 25000.00, 3000.00, 1000.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2020-03-16 10:07:42', '2020-03-16 10:07:42'),
(47, 35, 'DEL017', 47, 10000.00, 20000.00, 5000.00, 1000.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2020-03-18 07:24:37', '2020-03-18 07:24:37');

-- --------------------------------------------------------

--
-- Table structure for table `dst_region_masters`
--

CREATE TABLE `dst_region_masters` (
  `id` int(11) NOT NULL,
  `region_id` varchar(9) DEFAULT NULL,
  `region_code` varchar(8) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dst_region_masters`
--

INSERT INTO `dst_region_masters` (`id`, `region_id`, `region_code`, `name`) VALUES
(1, '1', 'APT', 'ANDHRA PRADESH & TELANGANA'),
(2, '2', 'BJO', 'BIHAR, JHARKHAND & ORISSA'),
(3, '3', 'CRP', 'CORPORATE'),
(4, '4', 'DEL', 'DELHI'),
(5, '5', 'GUJ', 'GUJARAT'),
(6, '6', 'HAR', 'HARYANA'),
(7, '7', 'JKH', 'J & K AND HIMACHAL PRADESH'),
(8, '8', 'KNH', 'KARNATAKA & HOSUR'),
(9, '9', 'KRL', 'KERALA'),
(10, '10', 'MPC', 'MADHYA PRADESH & CHHATTISGARH '),
(11, '11', 'MHG', 'MAHARASHTRA & GOA [Excluding Mum'),
(12, '12', 'MUM', 'MUMBAI'),
(13, '13', 'NRE', 'NORTH EAST'),
(14, '14', 'PNC', 'PUNJAB & CHANDIGARH'),
(15, '15', 'RAJ', 'RAJASTHAN'),
(16, '16', 'TNP', 'TAMILNADU & PUDUCHERRY [Excludin'),
(17, '17', 'UTP', 'UTTAR PRADESH'),
(18, '18', 'UTK', 'UTTARAKHAND'),
(19, '19', 'WBS', 'WEST BENGAL & SIKKIM ');

-- --------------------------------------------------------

--
-- Table structure for table `dst_region_masters_v1`
--

CREATE TABLE `dst_region_masters_v1` (
  `id` int(11) NOT NULL,
  `region_id` varchar(9) DEFAULT NULL,
  `region_code` varchar(8) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dst_region_masters_v1`
--

INSERT INTO `dst_region_masters_v1` (`id`, `region_id`, `region_code`, `name`) VALUES
(2, '1', 'APT', 'ANDHRA PRADESH - TELANGANA'),
(3, '2', 'BJO', 'BIHAR - JHARKHAND - ORISSA'),
(4, '3', 'DLI', 'DELHI'),
(5, '4', 'GJT', 'GUJARAT'),
(6, '5', 'HRN', 'HARYANA'),
(7, '6', 'JKH', 'JAMMU KASHMIR - HIMACHAL PRADESH'),
(8, '7', 'KTK', 'KARNATAKA'),
(9, '8', 'KRL', 'KERALA'),
(10, '9', 'MPC', 'MADHYA PRADESH - CHHATTISGARH '),
(11, '10', 'MHG', 'MAHARASHTRA - GOA'),
(12, '11', 'MUM', 'MUMBAI'),
(13, '12', 'NRE', 'NORTH EAST'),
(14, '13', 'PBC', 'PUNJAB - CHANDIGARH'),
(15, '14', 'RJN', 'RAJASTHAN'),
(16, '15', 'TNP', 'TAMILNADU - PUDUCHERRY'),
(17, '16', 'TRH', 'TRANSHIPMENT HUB'),
(18, '17', 'UPR', 'UTTAR PRADESH '),
(19, '18', 'UKH', 'UTTARAKHAND'),
(20, '19', 'WBS', 'WEST BENGAL - SIKKIM '),
(21, '20', 'CO', 'CORPORATE OFFICE');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(1, 'admin'),
(2, 'fieldstaff');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` tinyint(3) NOT NULL DEFAULT 2 COMMENT '1=admin.2=fieldstaff',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'LrmsAdmin', 'sales@digitalissystem.com', NULL, '$2y$10$E8mfhLZ0JY7AvBf56X/JkOXXc7eYK9qYYtpCMUXjPvJO4je5/RE.m', 1, '1rZrfRMsZxo0MISignqe3M7EUPOLy6WavbJnCwMZVtOT4A89RplWRIy0xgMK', '2020-01-08 11:39:37', '2020-01-08 11:39:37'),
(2, 'Mayank', 'mayank@digitalissystem.com', NULL, '$2y$10$OvVzg1Gif6cq5g7CcZmZtOXbqX3O9G1QTeFzrKM8PEZCFAHrgbPLy', 1, 'QPI068k8RN54adefLRxRzBOzzzYJdSOk7dsm8wAj1Ln5zhVdMDJIV58rzYdy', '2020-01-09 04:42:30', '2020-01-09 04:42:30'),
(3, 'arvind', 'arvind@digitalissystem.com', NULL, '$2y$10$e6uxqw8snIrfSxYOioivDOXADeAMYN84m4NXtHv.sMnkxPsoGjin2', 1, NULL, '2020-01-21 10:03:11', '2020-01-21 10:03:11'),
(4, 'admin', 'admin@gmail.com', NULL, '$2y$10$OTESYPWWj3K3OeNd8jTWiexaNYQBV.idTkpOF8zHXqfeH2oVB.X6O', 0, NULL, '2020-01-30 13:06:03', '2020-01-30 13:06:03'),
(7, 'ankit', 'ankit@gmail.com', NULL, '$2y$10$BsKiLcGvuWQNMvC5qgOnneh7J1ZYpjSaLtyxshRBzdrxm0eXvLMp6', 2, NULL, '2020-03-03 02:34:38', '2020-03-03 02:34:38'),
(9, 'Dinesh', 'dinesh.pal@digitalissystem.com', NULL, '$2y$10$Cti/EB8nAvsXd5wA1r4HZunYGFnLBmk1KKJDtn1rVT7GWaudGTAlm', 1, NULL, '2020-03-18 06:43:50', '2020-03-18 06:43:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dst_branch_area_master`
--
ALTER TABLE `dst_branch_area_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dst_city_masters`
--
ALTER TABLE `dst_city_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dst_lrms_bank_masters`
--
ALTER TABLE `dst_lrms_bank_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dst_lrms_details_property_owners`
--
ALTER TABLE `dst_lrms_details_property_owners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dst_lrms_dtls_documents`
--
ALTER TABLE `dst_lrms_dtls_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dst_lrms_dtls_monthly_rentals`
--
ALTER TABLE `dst_lrms_dtls_monthly_rentals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dst_lrms_dtls_rental_renewals`
--
ALTER TABLE `dst_lrms_dtls_rental_renewals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dst_lrms_factsheet_agreement_documents`
--
ALTER TABLE `dst_lrms_factsheet_agreement_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dst_lrms_masters`
--
ALTER TABLE `dst_lrms_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dst_lrms_rent_agreements`
--
ALTER TABLE `dst_lrms_rent_agreements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dst_lrms_state_masters`
--
ALTER TABLE `dst_lrms_state_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dst_lrm_branch_dtls`
--
ALTER TABLE `dst_lrm_branch_dtls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `dst_lrm_dtls_pro_bank_dtls`
--
ALTER TABLE `dst_lrm_dtls_pro_bank_dtls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dst_lrm_dtls_pro_rental_dtls`
--
ALTER TABLE `dst_lrm_dtls_pro_rental_dtls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dst_region_masters`
--
ALTER TABLE `dst_region_masters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `dst_region_masters_v1`
--
ALTER TABLE `dst_region_masters_v1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dst_branch_area_master`
--
ALTER TABLE `dst_branch_area_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;

--
-- AUTO_INCREMENT for table `dst_city_masters`
--
ALTER TABLE `dst_city_masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=539;

--
-- AUTO_INCREMENT for table `dst_lrms_bank_masters`
--
ALTER TABLE `dst_lrms_bank_masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `dst_lrms_details_property_owners`
--
ALTER TABLE `dst_lrms_details_property_owners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `dst_lrms_dtls_documents`
--
ALTER TABLE `dst_lrms_dtls_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `dst_lrms_dtls_monthly_rentals`
--
ALTER TABLE `dst_lrms_dtls_monthly_rentals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dst_lrms_dtls_rental_renewals`
--
ALTER TABLE `dst_lrms_dtls_rental_renewals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dst_lrms_factsheet_agreement_documents`
--
ALTER TABLE `dst_lrms_factsheet_agreement_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `dst_lrms_masters`
--
ALTER TABLE `dst_lrms_masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `dst_lrms_rent_agreements`
--
ALTER TABLE `dst_lrms_rent_agreements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `dst_lrms_state_masters`
--
ALTER TABLE `dst_lrms_state_masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `dst_lrm_branch_dtls`
--
ALTER TABLE `dst_lrm_branch_dtls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=913;

--
-- AUTO_INCREMENT for table `dst_lrm_dtls_pro_bank_dtls`
--
ALTER TABLE `dst_lrm_dtls_pro_bank_dtls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `dst_lrm_dtls_pro_rental_dtls`
--
ALTER TABLE `dst_lrm_dtls_pro_rental_dtls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `dst_region_masters`
--
ALTER TABLE `dst_region_masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `dst_region_masters_v1`
--
ALTER TABLE `dst_region_masters_v1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
