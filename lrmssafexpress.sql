-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 15, 2020 at 12:53 PM
-- Server version: 5.5.64-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `dst_lrms_details_property_owners`
--

CREATE TABLE IF NOT EXISTS `dst_lrms_details_property_owners` (
  `id` int(11) NOT NULL,
  `dst_lrms_master_id` int(11) DEFAULT NULL,
  `dst_lrm_dtls_property_owner_id` int(11) DEFAULT NULL,
  `total_property_owner` int(11) DEFAULT NULL,
  `property_owner_name` varchar(100) DEFAULT NULL,
  `payee_name` varchar(100) DEFAULT NULL,
  `payee_pan` varchar(15) DEFAULT NULL,
  `payee_gstin` varchar(30) DEFAULT NULL,
  `prorperty_owner_occupation` varchar(100) DEFAULT NULL,
  `property_owner_address` varchar(100) DEFAULT NULL,
  `property_owner_district` varchar(100) DEFAULT NULL,
  `property_owner_state` varchar(100) DEFAULT NULL,
  `property_owner_postal_code` varchar(100) DEFAULT NULL,
  `property_owner_email` varchar(100) DEFAULT NULL,
  `property_owner_contact_no` varchar(20) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `last_updated_by` varchar(100) DEFAULT NULL,
  `last_update_date` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dst_lrms_masters`
--

CREATE TABLE IF NOT EXISTS `dst_lrms_masters` (
  `id` int(11) NOT NULL,
  `dst_lrms_master_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `branch_code` varchar(30) DEFAULT NULL,
  `branch_type` varchar(100) DEFAULT NULL,
  `branch_location` varchar(50) DEFAULT NULL,
  `branch_occupancy_date` date DEFAULT NULL,
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
  `safex_conectivity_route` varchar(100) DEFAULT NULL,
  `property_location` varchar(100) DEFAULT NULL,
  `nearest_airport` varchar(100) DEFAULT NULL,
  `nearest_railway_station` varchar(100) DEFAULT NULL,
  `premises_length` double(15,2) DEFAULT NULL,
  `premises_length_unit` varchar(50) DEFAULT NULL,
  `premises_breadth` double(15,2) DEFAULT NULL,
  `premises_breadth_unit` varchar(50) DEFAULT NULL,
  `premises_area` double(15,2) DEFAULT NULL,
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
  `operational_hours` double(15,2) DEFAULT NULL,
  `operational_timing_from` double(15,2) DEFAULT NULL,
  `operational_timing_to` double(15,2) DEFAULT NULL,
  `connectivity_telephone` varchar(100) DEFAULT NULL,
  `connectivity_isp` varchar(100) DEFAULT NULL,
  `surrounding_front` varchar(100) DEFAULT NULL,
  `surrounding_back` varchar(100) DEFAULT NULL,
  `surrounding_right` varchar(100) DEFAULT NULL,
  `surrounding_left` varchar(100) DEFAULT NULL,
  `near_by_competitors1` varchar(100) DEFAULT NULL,
  `near_by_competitors1_unit` varchar(50) DEFAULT NULL,
  `near_by_competitors2` varchar(100) DEFAULT NULL,
  `near_by_competitors2_unit` varchar(50) DEFAULT NULL,
  `near_by_competitors3` varchar(100) DEFAULT NULL,
  `near_by_competitors3_unit` varchar(50) DEFAULT NULL,
  `axis_bank_nearest_branch` varchar(100) DEFAULT NULL,
  `office_to_axis_bank_distance` varchar(100) DEFAULT NULL,
  `nearest_bank_other_than_axis` varchar(100) DEFAULT NULL,
  `nearest_atm` varchar(100) DEFAULT NULL,
  `distance_from_office_to_atm` varchar(100) DEFAULT NULL,
  `associate_name` varchar(100) DEFAULT NULL,
  `coordinator_name` varchar(100) DEFAULT NULL,
  `approved_by` varchar(100) DEFAULT NULL,
  `no_of_owner` varchar(10) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `created_datetime` datetime DEFAULT NULL,
  `last_updated_by` varchar(100) DEFAULT NULL,
  `last_update_date` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dst_lrms_masters`
--

INSERT INTO `dst_lrms_masters` (`id`, `dst_lrms_master_id`, `branch_id`, `branch_code`, `branch_type`, `branch_location`, `branch_occupancy_date`, `fact_sheet_date`, `address1`, `address2`, `address3`, `city`, `state`, `postal_code`, `office_tele_no`, `near_by_highway`, `dist_from_highway`, `safex_conectivity_route`, `property_location`, `nearest_airport`, `nearest_railway_station`, `premises_length`, `premises_length_unit`, `premises_breadth`, `premises_breadth_unit`, `premises_area`, `premises_height`, `premises_height_unit`, `platform_height`, `platform_height_unit`, `cantiliver_length`, `cantiliver_length_unit`, `flooring_type`, `flooring_type2`, `flooring_type3`, `flooring_type4`, `front_road_breadth`, `front_road_breadth_unit`, `operational_hours`, `operational_timing_from`, `operational_timing_to`, `connectivity_telephone`, `connectivity_isp`, `surrounding_front`, `surrounding_back`, `surrounding_right`, `surrounding_left`, `near_by_competitors1`, `near_by_competitors1_unit`, `near_by_competitors2`, `near_by_competitors2_unit`, `near_by_competitors3`, `near_by_competitors3_unit`, `axis_bank_nearest_branch`, `office_to_axis_bank_distance`, `nearest_bank_other_than_axis`, `nearest_atm`, `distance_from_office_to_atm`, `associate_name`, `coordinator_name`, `approved_by`, `no_of_owner`, `created_by`, `created_date`, `created_datetime`, `last_updated_by`, `last_update_date`, `updated_at`, `created_at`) VALUES
(1, NULL, NULL, 'we', NULL, 'fdfd', NULL, NULL, 'df', 'we', NULL, NULL, NULL, NULL, NULL, '34', 'we', NULL, NULL, NULL, NULL, 34.00, NULL, NULL, NULL, NULL, 3.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, '2020-01-12 16:45:00', '2020-01-12 16:45:00'),
(2, NULL, NULL, 'we', NULL, 'df', NULL, NULL, 'df', 'we', NULL, NULL, NULL, NULL, NULL, '34', 'we', NULL, NULL, NULL, NULL, 34.00, NULL, NULL, NULL, NULL, 23.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, '2020-01-12 16:48:05', '2020-01-12 16:48:05'),
(3, NULL, NULL, 'we', NULL, 'df', NULL, NULL, 'df', 'we', NULL, NULL, NULL, NULL, NULL, '34', 'we', NULL, NULL, NULL, NULL, 34.00, NULL, NULL, NULL, NULL, 23.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, '2020-01-12 17:23:48', '2020-01-12 17:23:48'),
(4, NULL, NULL, 'we', NULL, 'df', NULL, NULL, 'df', 'we', NULL, NULL, NULL, NULL, NULL, '34', 'we', NULL, NULL, NULL, NULL, 34.00, NULL, NULL, NULL, NULL, 23.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30', NULL, NULL, NULL, NULL, NULL, '2020-01-12 17:50:13', '2020-01-12 17:50:13'),
(5, NULL, NULL, 'wew', NULL, 'New Delhi', NULL, NULL, 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', NULL, NULL, NULL, NULL, NULL, 'sfd', 'sdf', NULL, NULL, NULL, NULL, 11.00, NULL, NULL, NULL, NULL, 111.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, '2020-01-13 02:31:44', '2020-01-13 02:31:44'),
(6, NULL, NULL, 'DLI10', NULL, 'DELHI-10', NULL, NULL, 'MAHIPALPUR', 'NEW DELHI', NULL, NULL, NULL, NULL, NULL, 'NH-48', '2KM', NULL, NULL, NULL, NULL, 100.00, NULL, NULL, NULL, NULL, 20.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, '2020-01-13 07:28:56', '2020-01-13 07:28:56'),
(7, NULL, NULL, 'asd', NULL, 'New Delhi', NULL, NULL, 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', NULL, NULL, NULL, NULL, NULL, 'asfd', '22', NULL, NULL, NULL, NULL, 34.00, NULL, NULL, NULL, NULL, 3.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, '2020-01-13 07:28:57', '2020-01-13 07:28:57'),
(8, NULL, NULL, 'we', NULL, 'df', NULL, NULL, 'sd', 'we', NULL, NULL, NULL, NULL, NULL, 'fgf', '34', NULL, NULL, NULL, NULL, 34.00, NULL, NULL, NULL, NULL, 23.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, '2020-01-13 13:34:20', '2020-01-13 13:34:20'),
(9, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:29', '2020-01-15 04:09:29'),
(10, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:31', '2020-01-15 04:09:31'),
(11, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:33', '2020-01-15 04:09:33'),
(12, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:34', '2020-01-15 04:09:34'),
(13, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:34', '2020-01-15 04:09:34'),
(14, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:35', '2020-01-15 04:09:35'),
(15, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:35', '2020-01-15 04:09:35'),
(16, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:37', '2020-01-15 04:09:37'),
(17, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:38', '2020-01-15 04:09:38'),
(18, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:38', '2020-01-15 04:09:38'),
(19, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:38', '2020-01-15 04:09:38'),
(20, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:38', '2020-01-15 04:09:38'),
(21, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:39', '2020-01-15 04:09:39'),
(22, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:39', '2020-01-15 04:09:39'),
(23, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:39', '2020-01-15 04:09:39'),
(24, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:39', '2020-01-15 04:09:39'),
(25, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:39', '2020-01-15 04:09:39'),
(26, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:40', '2020-01-15 04:09:40'),
(27, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:40', '2020-01-15 04:09:40'),
(28, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:41', '2020-01-15 04:09:41'),
(29, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:42', '2020-01-15 04:09:42'),
(30, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:49', '2020-01-15 04:09:49');

-- --------------------------------------------------------

--
-- Table structure for table `dst_lrm_dtls_pro_bank_dtls`
--

CREATE TABLE IF NOT EXISTS `dst_lrm_dtls_pro_bank_dtls` (
  `id` int(11) NOT NULL,
  `dst_lrms_master_id` int(11) DEFAULT NULL,
  `dst_lrm_dtls_prorperty_owner_id` int(11) DEFAULT NULL,
  `dst_lrm_dtls_pro_bank_dtl_id` int(11) DEFAULT NULL,
  `payee_name` varchar(100) DEFAULT NULL,
  `branch_name` varchar(100) DEFAULT NULL,
  `account_type` varchar(100) DEFAULT NULL,
  `bank_name` varchar(100) DEFAULT NULL,
  `account_no` varchar(20) DEFAULT NULL,
  `ifs_code` varchar(20) DEFAULT NULL,
  `activity_status` varchar(30) DEFAULT NULL,
  `created_by` varchar(30) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `last_updated_by` varchar(100) DEFAULT NULL,
  `last_update_date` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dst_lrm_dtls_pro_rental_dtls`
--

CREATE TABLE IF NOT EXISTS `dst_lrm_dtls_pro_rental_dtls` (
  `id` int(11) NOT NULL,
  `dst_lrms_master_id` int(11) DEFAULT NULL,
  `dst_lrm_dtls_prorperty_owner_id` int(11) DEFAULT NULL,
  `refundable_security_deposit` double(15,2) DEFAULT NULL,
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
  `created_by` varchar(100) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `last_updated_by` varchar(100) DEFAULT NULL,
  `last_update_date` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'LrmsAdmin', 'sales@digitalissystem.com', NULL, '$2y$10$E8mfhLZ0JY7AvBf56X/JkOXXc7eYK9qYYtpCMUXjPvJO4je5/RE.m', 'jjDQFArvoBTn5fYKDaPisJ1zHICJC2Hcgc8PX4zQIJlCjuoDkCCXn2JlF2jp', '2020-01-08 11:39:37', '2020-01-08 11:39:37'),
(2, 'Mayank', 'mayank@digitalissystem.com', NULL, '$2y$10$OvVzg1Gif6cq5g7CcZmZtOXbqX3O9G1QTeFzrKM8PEZCFAHrgbPLy', 'iXUDs3gE1dh4krEm6csC8Nqv2V9VOfJwLoJ2haCDuBpr9SX4XTMrBQ0BcjBW', '2020-01-09 04:42:30', '2020-01-09 04:42:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dst_lrms_details_property_owners`
--
ALTER TABLE `dst_lrms_details_property_owners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dst_lrms_masters`
--
ALTER TABLE `dst_lrms_masters`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dst_lrms_details_property_owners`
--
ALTER TABLE `dst_lrms_details_property_owners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dst_lrms_masters`
--
ALTER TABLE `dst_lrms_masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `dst_lrm_dtls_pro_bank_dtls`
--
ALTER TABLE `dst_lrm_dtls_pro_bank_dtls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dst_lrm_dtls_pro_rental_dtls`
--
ALTER TABLE `dst_lrm_dtls_pro_rental_dtls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
