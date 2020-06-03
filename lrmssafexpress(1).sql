-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2020 at 06:48 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dst_lrms_details_property_owners`
--

INSERT INTO `dst_lrms_details_property_owners` (`id`, `dst_lrms_master_id`, `dst_lrm_dtls_property_owner_id`, `total_property_owner`, `property_owner_name`, `payee_name`, `payee_pan`, `payee_gstin`, `prorperty_owner_occupation`, `property_owner_address`, `property_owner_district`, `property_owner_state`, `property_owner_postal_code`, `property_owner_email`, `property_owner_contact_no`, `created_by`, `created_date`, `last_updated_by`, `last_update_date`, `updated_at`, `created_at`) VALUES
(1, 35, NULL, NULL, '1st', '34', NULL, NULL, NULL, 'df', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 11:37:07', '2020-01-15 11:37:07'),
(2, 35, NULL, NULL, '2nd', 'er', NULL, NULL, NULL, 'er', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 11:37:51', '2020-01-15 11:37:51'),
(3, 35, NULL, NULL, '23', '23', NULL, NULL, NULL, '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 11:39:51', '2020-01-15 11:39:51'),
(4, 36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 14:58:19', '2020-01-15 14:58:19'),
(5, 36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 14:58:43', '2020-01-15 14:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `dst_lrms_dtls_monthly_rentals`
--

CREATE TABLE IF NOT EXISTS `dst_lrms_dtls_monthly_rentals` (
  `id` int(11) NOT NULL,
  `dst_lrms_master_id` int(11) NOT NULL,
  `total_month_rent` double(15,2) NOT NULL,
  `payment_system` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dst_lrms_dtls_monthly_rentals`
--

INSERT INTO `dst_lrms_dtls_monthly_rentals` (`id`, `dst_lrms_master_id`, `total_month_rent`, `payment_system`, `created_at`, `updated_at`) VALUES
(1, 51, 9000.00, 'NEFT', '2020-01-18 00:42:29', '2020-01-18 00:42:29');

-- --------------------------------------------------------

--
-- Table structure for table `dst_lrms_dtls_rental_renewals`
--

CREATE TABLE IF NOT EXISTS `dst_lrms_dtls_rental_renewals` (
  `id` int(11) NOT NULL,
  `dst_lrms_master_id` bigint(20) NOT NULL,
  `total_refundable_security_deposits` varchar(100) DEFAULT NULL,
  `total_advances` varchar(100) DEFAULT NULL,
  `total_month_rent` double(15,5) DEFAULT NULL,
  `payment_system` varchar(50) DEFAULT NULL,
  `agreement_period` varchar(100) DEFAULT NULL,
  `notice_period` varchar(100) DEFAULT NULL,
  `enhancement_clause` varchar(100) DEFAULT NULL,
  `newly_constructed_for_us` varchar(20) DEFAULT NULL,
  `last_tenant` varchar(100) DEFAULT NULL,
  `renewal_start` varchar(100) DEFAULT NULL,
  `no_of_increment_number` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dst_lrms_dtls_rental_renewals`
--

INSERT INTO `dst_lrms_dtls_rental_renewals` (`id`, `dst_lrms_master_id`, `total_refundable_security_deposits`, `total_advances`, `total_month_rent`, `payment_system`, `agreement_period`, `notice_period`, `enhancement_clause`, `newly_constructed_for_us`, `last_tenant`, `renewal_start`, `no_of_increment_number`, `created_at`, `updated_at`) VALUES
(1, 47, NULL, '18000', NULL, 'NEFT', '1', '1', '7', 'Yes', 'Previous', ' ', NULL, '2020-01-18 00:25:14', '2020-01-18 00:25:14'),
(2, 48, '27000', '18000', NULL, 'NEFT', '1', '1', '7', 'Yes', 'Previous', ' ', NULL, '2020-01-18 00:27:33', '2020-01-18 00:27:33'),
(3, 50, '27000', '18000', 9000.00000, 'NEFT', '1', '1', '7', 'Yes', 'Previous', ' ', 0, '2020-01-18 00:36:52', '2020-01-18 00:36:52'),
(4, 51, '27000', '18000', 9000.00000, 'NEFT', '1', '1', '7', 'Yes', 'Previous', ' ', 0, '2020-01-18 00:42:29', '2020-01-18 00:42:29');

-- --------------------------------------------------------

--
-- Table structure for table `dst_lrms_masters`
--

CREATE TABLE IF NOT EXISTS `dst_lrms_masters` (
  `id` int(11) NOT NULL,
  `dst_lrms_master_id` int(11) DEFAULT NULL,
  `region_code` varchar(10) DEFAULT NULL,
  `factsheet_code` varchar(20) DEFAULT NULL,
  `branch_id` varchar(50) DEFAULT NULL,
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
  `near_by_competitors1_dis` varchar(50) DEFAULT NULL,
  `near_by_competitors2` varchar(100) DEFAULT NULL,
  `near_by_competitors2_dis` varchar(50) DEFAULT NULL,
  `near_by_competitors3` varchar(100) DEFAULT NULL,
  `near_by_competitors3_dis` varchar(50) DEFAULT NULL,
  `axis_bank_nearest_branch` varchar(100) DEFAULT NULL,
  `office_to_axis_bank_distance` varchar(100) DEFAULT NULL,
  `nearest_bank_other_than_axis` varchar(100) DEFAULT NULL,
  `nearest_atm` varchar(100) DEFAULT NULL,
  `distance_from_office_to_atm` varchar(100) DEFAULT NULL,
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
  `agreement_period` varchar(100) DEFAULT NULL,
  `notice_period` varchar(100) DEFAULT NULL,
  `enhancement_clause` varchar(100) DEFAULT NULL,
  `newly_constructed_for_us` varchar(100) DEFAULT NULL,
  `last_tenant` varchar(100) DEFAULT NULL,
  `advance_deduction_wef_date` date DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `created_datetime` datetime DEFAULT NULL,
  `last_updated_by` varchar(100) DEFAULT NULL,
  `last_update_date` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dst_lrms_masters`
--

INSERT INTO `dst_lrms_masters` (`id`, `dst_lrms_master_id`, `region_code`, `factsheet_code`, `branch_id`, `branch_code`, `branch_type`, `branch_location`, `branch_occupancy_date`, `fact_sheet_date`, `address1`, `address2`, `address3`, `city`, `state`, `postal_code`, `office_tele_no`, `near_by_highway`, `dist_from_highway`, `safex_conectivity_route`, `property_location`, `nearest_airport`, `nearest_railway_station`, `premises_length`, `premises_length_unit`, `premises_breadth`, `premises_breadth_unit`, `premises_area`, `premises_height`, `premises_height_unit`, `platform_height`, `platform_height_unit`, `cantiliver_length`, `cantiliver_length_unit`, `flooring_type`, `flooring_type2`, `flooring_type3`, `flooring_type4`, `front_road_breadth`, `front_road_breadth_unit`, `operational_hours`, `operational_timing_from`, `operational_timing_to`, `connectivity_telephone`, `connectivity_isp`, `surrounding_front`, `surrounding_back`, `surrounding_right`, `surrounding_left`, `near_by_competitors1`, `near_by_competitors1_dis`, `near_by_competitors2`, `near_by_competitors2_dis`, `near_by_competitors3`, `near_by_competitors3_dis`, `axis_bank_nearest_branch`, `office_to_axis_bank_distance`, `nearest_bank_other_than_axis`, `nearest_atm`, `distance_from_office_to_atm`, `associate_name`, `cordinator_name`, `approved_by`, `no_of_owner`, `total_refundable_security_deposits`, `total_advances`, `total_month_rent`, `total_advance_deduction`, `advances_start_date`, `advances_end_date`, `payment_system`, `agreement_period`, `notice_period`, `enhancement_clause`, `newly_constructed_for_us`, `last_tenant`, `advance_deduction_wef_date`, `created_by`, `created_date`, `created_datetime`, `last_updated_by`, `last_update_date`, `updated_at`, `created_at`) VALUES
(1, NULL, 'APT', NULL, NULL, 'we', NULL, 'fdfd', NULL, NULL, 'df', 'we', NULL, NULL, NULL, NULL, NULL, '34', 'we', NULL, NULL, NULL, NULL, 34.00, NULL, NULL, NULL, NULL, 3.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-16 20:07:46', '2020-01-12 16:45:00'),
(2, NULL, NULL, NULL, NULL, 'we', NULL, 'df', NULL, NULL, 'df', 'we', NULL, NULL, NULL, NULL, NULL, '34', 'we', NULL, NULL, NULL, NULL, 34.00, NULL, NULL, NULL, NULL, 23.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-12 16:48:05', '2020-01-12 16:48:05'),
(3, NULL, NULL, NULL, NULL, 'we', NULL, 'df', NULL, NULL, 'df', 'we', NULL, NULL, NULL, NULL, NULL, '34', 'we', NULL, NULL, NULL, NULL, 34.00, NULL, NULL, NULL, NULL, 23.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-12 17:23:48', '2020-01-12 17:23:48'),
(4, NULL, NULL, NULL, NULL, 'we', NULL, 'df', NULL, NULL, 'df', 'we', NULL, NULL, NULL, NULL, NULL, '34', 'we', NULL, NULL, NULL, NULL, 34.00, NULL, NULL, NULL, NULL, 23.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-12 17:50:13', '2020-01-12 17:50:13'),
(5, NULL, NULL, NULL, NULL, 'wew', NULL, 'New Delhi', NULL, NULL, 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', NULL, NULL, NULL, NULL, NULL, 'sfd', 'sdf', NULL, NULL, NULL, NULL, 11.00, NULL, NULL, NULL, NULL, 111.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-13 02:31:44', '2020-01-13 02:31:44'),
(6, NULL, NULL, NULL, NULL, 'DLI10', NULL, 'DELHI-10', NULL, NULL, 'MAHIPALPUR', 'NEW DELHI', NULL, NULL, NULL, NULL, NULL, 'NH-48', '2KM', NULL, NULL, NULL, NULL, 100.00, NULL, NULL, NULL, NULL, 20.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-13 07:28:56', '2020-01-13 07:28:56'),
(7, NULL, NULL, NULL, NULL, 'asd', NULL, 'New Delhi', NULL, NULL, 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', NULL, NULL, NULL, NULL, NULL, 'asfd', '22', NULL, NULL, NULL, NULL, 34.00, NULL, NULL, NULL, NULL, 3.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-13 07:28:57', '2020-01-13 07:28:57'),
(8, NULL, NULL, NULL, NULL, 'we', NULL, 'df', NULL, NULL, 'sd', 'we', NULL, NULL, NULL, NULL, NULL, 'fgf', '34', NULL, NULL, NULL, NULL, 34.00, NULL, NULL, NULL, NULL, 23.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-13 13:34:20', '2020-01-13 13:34:20'),
(9, NULL, NULL, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:29', '2020-01-15 04:09:29'),
(10, NULL, NULL, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:31', '2020-01-15 04:09:31'),
(11, NULL, NULL, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:33', '2020-01-15 04:09:33'),
(12, NULL, NULL, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:34', '2020-01-15 04:09:34'),
(13, NULL, NULL, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:34', '2020-01-15 04:09:34'),
(14, NULL, NULL, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:35', '2020-01-15 04:09:35'),
(15, NULL, NULL, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:35', '2020-01-15 04:09:35'),
(16, NULL, NULL, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:37', '2020-01-15 04:09:37'),
(17, NULL, NULL, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:38', '2020-01-15 04:09:38'),
(18, NULL, NULL, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:38', '2020-01-15 04:09:38'),
(19, NULL, NULL, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:38', '2020-01-15 04:09:38'),
(20, NULL, NULL, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:38', '2020-01-15 04:09:38'),
(21, NULL, NULL, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:39', '2020-01-15 04:09:39'),
(22, NULL, NULL, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:39', '2020-01-15 04:09:39'),
(23, NULL, NULL, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:39', '2020-01-15 04:09:39'),
(24, NULL, NULL, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:39', '2020-01-15 04:09:39'),
(25, NULL, NULL, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:39', '2020-01-15 04:09:39'),
(26, NULL, NULL, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:40', '2020-01-15 04:09:40'),
(27, NULL, NULL, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:40', '2020-01-15 04:09:40'),
(28, NULL, NULL, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:41', '2020-01-15 04:09:41'),
(29, NULL, NULL, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:42', '2020-01-15 04:09:42'),
(30, NULL, NULL, NULL, NULL, 'er', 'we', 'New Delhi', NULL, '2020-01-10', 'Plot No.-78, EXT-2C', 'Nangloi, New Delhi', 'wer', NULL, 'wer', 110041, '09873834499', 'rwer', '2', 'ewr', 'ewr', 'wer', 'ewr', 32.00, 'Feet', 32.00, 'Feet', NULL, 32.00, 'Feet', 32.00, 'Feet', 23.00, 'Feet', 'Plain Cemented', NULL, NULL, NULL, 23.00, 'Feet', 5.00, 11.00, 16.00, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', '34', 'Feet', '23', 'Feet', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 04:09:49', '2020-01-15 04:09:49'),
(31, NULL, NULL, NULL, NULL, 'we', 'rtrtrt', 'df', NULL, '2020-01-10', 'df', 'we', 'ghg', NULL, 'dd', 343, '343', '34', '34', '34', '43', '34', '34', 34.00, 'Feet', 34.00, 'Feet', NULL, 23.00, 'Meter', 33.00, 'Feet', 34.00, 'Feet', 'RCC Flooring', NULL, NULL, NULL, 43.00, 'Feet', 34.00, 34.00, 34.00, '333', '34', 'df', 'df', 'df', 'df', 'df', 'Feet', 'df', 'Feet', 'df', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 10:46:17', '2020-01-15 10:46:17'),
(32, NULL, NULL, NULL, NULL, 'we', 'rtrtrt', 'df', NULL, '2020-01-10', 'df', 'we', 'ghg', NULL, 'dd', 343, '343', '34', '34', '34', '43', '34', '34', 34.00, 'Feet', 34.00, 'Feet', NULL, 23.00, 'Meter', 33.00, 'Feet', 34.00, 'Feet', 'RCC Flooring', NULL, NULL, NULL, 43.00, 'Feet', 34.00, 34.00, 34.00, '333', '34', 'df', 'df', 'df', 'df', 'df', 'Feet', 'df', 'Feet', 'df', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 10:46:23', '2020-01-15 10:46:23'),
(33, NULL, NULL, NULL, NULL, 'we', 'rtrtrt', 'df', NULL, '2020-01-10', 'df', 'we', 'ghg', NULL, 'dd', 343, '343', '34', '34', '34', '43', '34', '34', 34.00, 'Feet', 34.00, 'Feet', NULL, 23.00, 'Meter', 33.00, 'Feet', 34.00, 'Feet', 'RCC Flooring', NULL, NULL, NULL, 43.00, 'Feet', 34.00, 34.00, 34.00, '333', '34', 'df', 'df', 'df', 'df', 'df', 'Feet', 'df', 'Feet', 'df', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 10:46:33', '2020-01-15 10:46:33'),
(34, NULL, NULL, NULL, NULL, 'we', 'sd', 'df', NULL, '2020-01-09', 'sd', 'sd', 'sd', NULL, 'sd', 34, '34', '34', '34', '34', '34', '34', '34', 34.00, 'Feet', 34.00, 'Feet', NULL, 34.00, 'Feet', 34.00, 'Feet', NULL, NULL, 'Plain Cemented', NULL, NULL, NULL, 34.00, 'Feet', 34.00, 34.00, 34.00, '445', '45', 'front', 'back', 'right', 'left', 'dfd', '34', 'dfd', '34', '34', '34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 11:33:12', '2020-01-15 11:33:12'),
(35, NULL, NULL, NULL, NULL, 'Delhi', 'dsd', 'Delhi', NULL, '2020-01-08', 'df', 'we', 'delhi', NULL, 'delhi', 110070, '3434', 'sds', '43', 'sd', 'sd', 'sd', 'sd', 34.00, 'Feet', 34.00, 'Feet', NULL, 34.00, 'Feet', 34.00, 'Feet', NULL, NULL, 'Plain Cemented', NULL, NULL, NULL, 34.00, 'Feet', 34.00, 43.00, 34.00, '34', '34', 'front', 'back', 'right', 'left', 'ddfd', '34', 'df', '34', '34', '34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 11:36:00', '2020-01-15 11:36:00'),
(36, NULL, 'APT', NULL, NULL, 'we', 'rtrtrt', 'df', NULL, '2020-01-09', 'df', 'we', 'delhi', NULL, 'sd', 544, '45454', '34', '34', '454', '45', '45', '45', 45.00, 'Meter', 454.00, 'Meter', NULL, 45.00, 'Meter', 454.00, 'Meter', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 4454.00, 'Meter', 4545.00, 454.00, 45.00, '454', '45', '45', '54', '45', '45', '54', '45', '54', '54', '45', '54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-16 20:06:15', '2020-01-15 14:50:05'),
(37, NULL, NULL, NULL, NULL, 'DLI11', 'HBC', 'DELHI-11', NULL, '2020-01-08', 'Delhi', 'Delhi', 'delhi', NULL, 'delhi', 110070, '343', '34', '34', '454', '34', 'IGI', 'NDLS', 34.00, 'Feet', 33.00, 'Feet', NULL, 23.00, 'Feet', 34.00, 'Feet', NULL, NULL, 'Plain Cemented', NULL, NULL, NULL, 34.00, 'Feet', 8.00, 10.00, 6.00, '43545', 'ISP', 'front', 'back', 'right', 'left', 'ddfd', '34', '34', '54', '34', NULL, '3', '2', '2', '2', '2', '2', ' ', '2', '3', 27000.00, 18000.00, 9000.00, 2000.00, '2020-02-01', '2021-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-17 11:21:11', '2020-01-17 11:21:11'),
(38, NULL, 'DLI', 'DLI001', '10301031', 'DLI43', 'CLB', 'DELHI-43', NULL, '2020-01-17', 'Addr1', 'Addr2', 'Addr3', NULL, 'State', 110070, '3434', '34', '34', '454', '34', 'IGI', 'NDLS', 34.00, 'Feet', 34.00, 'Feet', NULL, 23.00, 'Feet', 33.00, 'Feet', NULL, NULL, 'Plain Cemented', NULL, NULL, NULL, 34.00, 'Feet', 34.00, 9.00, 6.00, '343', 'ISP', 'front', 'dfd', 'df', 'df', 'df', '34', 'df', '34', '343', NULL, '34', '34', '34', '34', '43', 'Associate', ' ', 'Approved', '3', 27000.00, 18000.00, 9000.00, 2000.00, '2020-01-17', '2021-01-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-17 11:43:20', '2020-01-17 11:43:20'),
(39, NULL, 'DLI', 'DLI002', '10301048', 'DLW510', 'CLB', 'DELHI SCS-510', '2020-01-31', '2020-01-01', 'Addr1', 'Delhi', 'Addr3', NULL, 'delhi', 110070, '343', '34', '34', '454', '34', 'IGI', 'NDLS', 34.00, 'Feet', 56.00, 'Feet', NULL, 23.00, 'Feet', 34.00, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 34.00, 'Inch', 9.00, 9.00, 6.00, '4545', 'ISP', 'front', 'back', 'right', 'left', 'compertitors1', '34', 'Competitors2', '34', 'competitors3', NULL, 'delhi', '34', '34', '43', '34', 'associate', ' ', 'approved', '3', 27000.00, 18000.00, 9000.00, 2000.00, NULL, NULL, 'NEFT', '1', '1', ' ', 'Yes', 'Previous', '2020-01-01', NULL, NULL, NULL, NULL, NULL, '2020-01-17 23:38:01', '2020-01-17 23:38:01'),
(40, NULL, 'DLI', 'DLI003', '10301031', 'DLI43', 'CLB', 'DELHI-43', '2020-01-31', '2020-01-01', 'Addr1', 'Delhi', 'Addr3', NULL, 'delhi', 110070, '343', '34', '34', '454', '34', 'IGI', 'NDLS', 34.00, 'Feet', 45.00, 'Feet', NULL, 23.00, 'Feet', 45.00, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 34.00, 'Feet', 34.00, 9.00, 6.00, '34343', 'ISP', 'front', 'back', 'right', 'left', 'compe1', '2', 'comp2', '2', 'comp3', '3', '3', '34', '34', '43', '34', 'dfdf', 'cordinator', 'approved', '3', 27000.00, 18000.00, 9000.00, 2000.00, NULL, NULL, 'NEFT', '1', '1', '7', 'Yes', 'Previous', '2020-01-03', NULL, NULL, NULL, NULL, NULL, '2020-01-18 00:01:07', '2020-01-18 00:01:07'),
(41, NULL, 'DLI', 'DLI003', '10301031', 'DLI43', 'CLB', 'DELHI-43', '2020-01-31', '2020-01-01', 'Addr1', 'Delhi', 'Addr3', NULL, 'delhi', 110070, '343', '34', '34', '454', '34', 'IGI', 'NDLS', 34.00, 'Feet', 45.00, 'Feet', NULL, 23.00, 'Feet', 45.00, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 34.00, 'Feet', 34.00, 9.00, 6.00, '34343', 'ISP', 'front', 'back', 'right', 'left', 'compe1', '2', 'comp2', '2', 'comp3', '3', '3', '34', '34', '43', '34', 'dfdf', 'cordinator', 'approved', '3', 27000.00, 18000.00, 9000.00, 2000.00, NULL, NULL, 'NEFT', '1', '1', '7', 'Yes', 'Previous', '2020-01-03', NULL, '2020-01-18', NULL, NULL, NULL, '2020-01-18 00:09:19', '2020-01-18 00:09:19'),
(42, NULL, 'DLI', 'DLI003', '10301031', 'DLI43', 'CLB', 'DELHI-43', '2020-01-31', '2020-01-01', 'Addr1', 'Delhi', 'Addr3', NULL, 'delhi', 110070, '343', '34', '34', '454', '34', 'IGI', 'NDLS', 34.00, 'Feet', 45.00, 'Feet', NULL, 23.00, 'Feet', 45.00, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 34.00, 'Feet', 34.00, 9.00, 6.00, '34343', 'ISP', 'front', 'back', 'right', 'left', 'compe1', '2', 'comp2', '2', 'comp3', '3', '3', '34', '34', '43', '34', 'dfdf', 'cordinator', 'approved', '3', 27000.00, 18000.00, 9000.00, 2000.00, NULL, NULL, 'NEFT', '1', '1', '7', 'Yes', 'Previous', '2020-01-03', NULL, '2020-01-18', NULL, NULL, NULL, '2020-01-18 00:11:24', '2020-01-18 00:11:24'),
(43, NULL, 'DLI', 'DLI003', '10301031', 'DLI43', 'CLB', 'DELHI-43', '2020-01-31', '2020-01-01', 'Addr1', 'Delhi', 'Addr3', NULL, 'delhi', 110070, '343', '34', '34', '454', '34', 'IGI', 'NDLS', 34.00, 'Feet', 45.00, 'Feet', NULL, 23.00, 'Feet', 45.00, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 34.00, 'Feet', 34.00, 9.00, 6.00, '34343', 'ISP', 'front', 'back', 'right', 'left', 'compe1', '2', 'comp2', '2', 'comp3', '3', '3', '34', '34', '43', '34', 'dfdf', 'cordinator', 'approved', '3', 27000.00, 18000.00, 9000.00, 2000.00, NULL, NULL, 'NEFT', '1', '1', '7', 'Yes', 'Previous', '2020-01-03', NULL, '2020-01-18', NULL, NULL, NULL, '2020-01-18 00:16:51', '2020-01-18 00:16:51'),
(44, NULL, 'DLI', 'DLI003', '10301031', 'DLI43', 'CLB', 'DELHI-43', '2020-01-31', '2020-01-01', 'Addr1', 'Delhi', 'Addr3', NULL, 'delhi', 110070, '343', '34', '34', '454', '34', 'IGI', 'NDLS', 34.00, 'Feet', 45.00, 'Feet', NULL, 23.00, 'Feet', 45.00, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 34.00, 'Feet', 34.00, 9.00, 6.00, '34343', 'ISP', 'front', 'back', 'right', 'left', 'compe1', '2', 'comp2', '2', 'comp3', '3', '3', '34', '34', '43', '34', 'dfdf', 'cordinator', 'approved', '3', 27000.00, 18000.00, 9000.00, 2000.00, NULL, NULL, 'NEFT', '1', '1', '7', 'Yes', 'Previous', '2020-01-03', NULL, '2020-01-18', NULL, NULL, NULL, '2020-01-18 00:20:32', '2020-01-18 00:20:32'),
(45, NULL, 'DLI', 'DLI003', '10301031', 'DLI43', 'CLB', 'DELHI-43', '2020-01-31', '2020-01-01', 'Addr1', 'Delhi', 'Addr3', NULL, 'delhi', 110070, '343', '34', '34', '454', '34', 'IGI', 'NDLS', 34.00, 'Feet', 45.00, 'Feet', NULL, 23.00, 'Feet', 45.00, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 34.00, 'Feet', 34.00, 9.00, 6.00, '34343', 'ISP', 'front', 'back', 'right', 'left', 'compe1', '2', 'comp2', '2', 'comp3', '3', '3', '34', '34', '43', '34', 'dfdf', 'cordinator', 'approved', '3', 27000.00, 18000.00, 9000.00, 2000.00, NULL, NULL, 'NEFT', '1', '1', '7', 'Yes', 'Previous', '2020-01-03', NULL, '2020-01-18', NULL, NULL, NULL, '2020-01-18 00:21:19', '2020-01-18 00:21:19'),
(46, NULL, 'DLI', 'DLI003', '10301031', 'DLI43', 'CLB', 'DELHI-43', '2020-01-31', '2020-01-01', 'Addr1', 'Delhi', 'Addr3', NULL, 'delhi', 110070, '343', '34', '34', '454', '34', 'IGI', 'NDLS', 34.00, 'Feet', 45.00, 'Feet', NULL, 23.00, 'Feet', 45.00, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 34.00, 'Feet', 34.00, 9.00, 6.00, '34343', 'ISP', 'front', 'back', 'right', 'left', 'compe1', '2', 'comp2', '2', 'comp3', '3', '3', '34', '34', '43', '34', 'dfdf', 'cordinator', 'approved', '3', 27000.00, 18000.00, 9000.00, 2000.00, NULL, NULL, 'NEFT', '1', '1', '7', 'Yes', 'Previous', '2020-01-03', NULL, '2020-01-18', NULL, NULL, NULL, '2020-01-18 00:24:35', '2020-01-18 00:24:35'),
(47, NULL, 'DLI', 'DLI003', '10301031', 'DLI43', 'CLB', 'DELHI-43', '2020-01-31', '2020-01-01', 'Addr1', 'Delhi', 'Addr3', NULL, 'delhi', 110070, '343', '34', '34', '454', '34', 'IGI', 'NDLS', 34.00, 'Feet', 45.00, 'Feet', NULL, 23.00, 'Feet', 45.00, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 34.00, 'Feet', 34.00, 9.00, 6.00, '34343', 'ISP', 'front', 'back', 'right', 'left', 'compe1', '2', 'comp2', '2', 'comp3', '3', '3', '34', '34', '43', '34', 'dfdf', 'cordinator', 'approved', '3', 27000.00, 18000.00, 9000.00, 2000.00, NULL, NULL, 'NEFT', '1', '1', '7', 'Yes', 'Previous', '2020-01-03', NULL, '2020-01-18', NULL, NULL, NULL, '2020-01-18 00:25:14', '2020-01-18 00:25:14'),
(48, NULL, 'DLI', 'DLI003', '10301031', 'DLI43', 'CLB', 'DELHI-43', '2020-01-31', '2020-01-01', 'Addr1', 'Delhi', 'Addr3', NULL, 'delhi', 110070, '343', '34', '34', '454', '34', 'IGI', 'NDLS', 34.00, 'Feet', 45.00, 'Feet', NULL, 23.00, 'Feet', 45.00, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 34.00, 'Feet', 34.00, 9.00, 6.00, '34343', 'ISP', 'front', 'back', 'right', 'left', 'compe1', '2', 'comp2', '2', 'comp3', '3', '3', '34', '34', '43', '34', 'dfdf', 'cordinator', 'approved', '3', 27000.00, 18000.00, 9000.00, 2000.00, NULL, NULL, 'NEFT', '1', '1', '7', 'Yes', 'Previous', '2020-01-03', NULL, '2020-01-18', NULL, NULL, NULL, '2020-01-18 00:27:33', '2020-01-18 00:27:33'),
(49, NULL, 'DLI', 'DLI003', '10301031', 'DLI43', 'CLB', 'DELHI-43', '2020-01-31', '2020-01-01', 'Addr1', 'Delhi', 'Addr3', NULL, 'delhi', 110070, '343', '34', '34', '454', '34', 'IGI', 'NDLS', 34.00, 'Feet', 45.00, 'Feet', NULL, 23.00, 'Feet', 45.00, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 34.00, 'Feet', 34.00, 9.00, 6.00, '34343', 'ISP', 'front', 'back', 'right', 'left', 'compe1', '2', 'comp2', '2', 'comp3', '3', '3', '34', '34', '43', '34', 'dfdf', 'cordinator', 'approved', '3', 27000.00, 18000.00, 9000.00, 2000.00, NULL, NULL, 'NEFT', '1', '1', '7', 'Yes', 'Previous', '2020-01-03', NULL, '2020-01-18', NULL, NULL, NULL, '2020-01-18 00:35:44', '2020-01-18 00:35:44'),
(50, NULL, 'DLI', 'DLI003', '10301031', 'DLI43', 'CLB', 'DELHI-43', '2020-01-31', '2020-01-01', 'Addr1', 'Delhi', 'Addr3', NULL, 'delhi', 110070, '343', '34', '34', '454', '34', 'IGI', 'NDLS', 34.00, 'Feet', 45.00, 'Feet', NULL, 23.00, 'Feet', 45.00, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 34.00, 'Feet', 34.00, 9.00, 6.00, '34343', 'ISP', 'front', 'back', 'right', 'left', 'compe1', '2', 'comp2', '2', 'comp3', '3', '3', '34', '34', '43', '34', 'dfdf', 'cordinator', 'approved', '3', 27000.00, 18000.00, 9000.00, 2000.00, NULL, NULL, 'NEFT', '1', '1', '7', 'Yes', 'Previous', '2020-01-03', NULL, '2020-01-18', NULL, NULL, NULL, '2020-01-18 00:36:52', '2020-01-18 00:36:52'),
(51, NULL, 'DLI', 'DLI003', '10301031', 'DLI43', 'CLB', 'DELHI-43', '2020-01-31', '2020-01-01', 'Addr1', 'Delhi', 'Addr3', NULL, 'delhi', 110070, '343', '34', '34', '454', '34', 'IGI', 'NDLS', 34.00, 'Feet', 45.00, 'Feet', NULL, 23.00, 'Feet', 45.00, 'Feet', NULL, NULL, 'Kota stone', NULL, NULL, NULL, 34.00, 'Feet', 34.00, 9.00, 6.00, '34343', 'ISP', 'front', 'back', 'right', 'left', 'compe1', '2', 'comp2', '2', 'comp3', '3', '3', '34', '34', '43', '34', 'dfdf', 'cordinator', 'approved', '3', 27000.00, 18000.00, 9000.00, 2000.00, NULL, NULL, 'NEFT', '1', '1', '7', 'Yes', 'Previous', '2020-01-03', NULL, '2020-01-18', NULL, NULL, NULL, '2020-01-18 00:42:29', '2020-01-18 00:42:29');

-- --------------------------------------------------------

--
-- Table structure for table `dst_lrm_branch_dtls`
--

CREATE TABLE IF NOT EXISTS `dst_lrm_branch_dtls` (
  `id` int(11) NOT NULL,
  `branch_id` varchar(50) DEFAULT NULL,
  `branch_code` varchar(100) DEFAULT NULL,
  `branch_type` varchar(100) DEFAULT NULL,
  `branch_name` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=910 DEFAULT CHARSET=latin1;

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
(909, '', 'LDH90', '', 'LUDHIANA-90', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dst_lrm_dtls_pro_bank_dtls`
--

INSERT INTO `dst_lrm_dtls_pro_bank_dtls` (`id`, `dst_lrms_master_id`, `dst_lrm_dtls_prorperty_owner_id`, `dst_lrm_dtls_pro_bank_dtl_id`, `payee_name`, `branch_name`, `account_type`, `bank_name`, `account_no`, `ifs_code`, `activity_status`, `created_by`, `created_date`, `last_updated_by`, `last_update_date`, `updated_at`, `created_at`) VALUES
(1, 35, 1, NULL, '34', '34', '34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 11:37:07', '2020-01-15 11:37:07'),
(2, 35, 2, NULL, '32', '23', '32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 11:37:51', '2020-01-15 11:37:51'),
(3, 36, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 14:58:19', '2020-01-15 14:58:19'),
(4, 36, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 14:58:43', '2020-01-15 14:58:43');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dst_lrm_dtls_pro_rental_dtls`
--

INSERT INTO `dst_lrm_dtls_pro_rental_dtls` (`id`, `dst_lrms_master_id`, `dst_lrm_dtls_prorperty_owner_id`, `refundable_security_deposit`, `advances`, `monthly_rent`, `advance_deduction`, `payment_system`, `agreement_period`, `notice_period`, `enhancement_clause`, `newly_constructed_for_us`, `last_tenant`, `special_remarks`, `activity_status`, `created_by`, `created_date`, `last_updated_by`, `last_update_date`, `updated_at`, `created_at`) VALUES
(1, 35, 1, 33.00, 34.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 11:37:07', '2020-01-15 11:37:07'),
(2, 35, 2, 23.00, 23.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 11:37:51', '2020-01-15 11:37:51'),
(3, 36, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 14:58:19', '2020-01-15 14:58:19'),
(4, 36, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 14:58:43', '2020-01-15 14:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `dst_region_masters`
--

CREATE TABLE IF NOT EXISTS `dst_region_masters` (
  `id` int(11) NOT NULL,
  `region_id` varchar(9) DEFAULT NULL,
  `region_code` varchar(8) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dst_region_masters`
--

INSERT INTO `dst_region_masters` (`id`, `region_id`, `region_code`, `name`) VALUES
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
-- Indexes for table `dst_lrms_masters`
--
ALTER TABLE `dst_lrms_masters`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `dst_lrms_dtls_monthly_rentals`
--
ALTER TABLE `dst_lrms_dtls_monthly_rentals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dst_lrms_dtls_rental_renewals`
--
ALTER TABLE `dst_lrms_dtls_rental_renewals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dst_lrms_masters`
--
ALTER TABLE `dst_lrms_masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `dst_lrm_branch_dtls`
--
ALTER TABLE `dst_lrm_branch_dtls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=910;
--
-- AUTO_INCREMENT for table `dst_lrm_dtls_pro_bank_dtls`
--
ALTER TABLE `dst_lrm_dtls_pro_bank_dtls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dst_lrm_dtls_pro_rental_dtls`
--
ALTER TABLE `dst_lrm_dtls_pro_rental_dtls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dst_region_masters`
--
ALTER TABLE `dst_region_masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
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
