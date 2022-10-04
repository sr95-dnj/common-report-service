-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2020 at 12:54 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipff2`
--

-- --------------------------------------------------------

--
-- Table structure for table `agencies`
--

CREATE TABLE `agencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `asset_masters`
--

CREATE TABLE `asset_masters` (
  `id` int(10) UNSIGNED NOT NULL,
  `asset_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asset_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_date` date DEFAULT NULL,
  `purchase_price` decimal(8,2) DEFAULT NULL,
  `package_no` int(10) UNSIGNED DEFAULT NULL,
  `asset_status` int(10) UNSIGNED DEFAULT NULL,
  `asset_sub_category` int(10) UNSIGNED DEFAULT NULL,
  `asset_location` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active and 0 = In-active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `asset_movements`
--

CREATE TABLE `asset_movements` (
  `id` int(10) UNSIGNED NOT NULL,
  `asset_id` int(10) UNSIGNED NOT NULL,
  `asset_location_id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL,
  `issue_date` date DEFAULT NULL,
  `close_date` date DEFAULT NULL,
  `issue_status` enum('Closed','Issue','Transfer','Disposed','Sold','Out Of Order') COLLATE utf8mb4_unicode_ci NOT NULL,
  `asset_status` enum('Good','Refurbished','Damage') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_persons`
--

CREATE TABLE `contact_persons` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active and 0 = In-active',
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `credit_masters`
--

CREATE TABLE `credit_masters` (
  `id` int(10) UNSIGNED NOT NULL,
  `credit_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active and 0 = In-active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `development_partners`
--

CREATE TABLE `development_partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `operation_act_id` int(11) NOT NULL,
  `devMt_partner_id` int(11) NOT NULL,
  `credit_amount_a_usd` double NOT NULL,
  `credit_amount_a_tk` double NOT NULL,
  `credit_amount_b_usd` double NOT NULL,
  `credit_amoun_b_tk` double NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active and 0 = In-active',
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `development_partners`
--

INSERT INTO `development_partners` (`id`, `operation_act_id`, `devMt_partner_id`, `credit_amount_a_usd`, `credit_amount_a_tk`, `credit_amount_b_usd`, `credit_amoun_b_tk`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 1, 5, 66999, 66, 6, 77, 1, '1', NULL, NULL, '2020-02-25 02:13:04', '2020-02-25 02:13:04'),
(5, 1, 4, 88, 88, 7, 88, 1, '1', NULL, NULL, '2020-02-25 02:13:04', '2020-02-25 02:13:04');

-- --------------------------------------------------------

--
-- Table structure for table `economy_code_infoes`
--

CREATE TABLE `economy_code_infoes` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_name_short_id` int(11) NOT NULL,
  `root_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eco_account_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eco_account_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_component` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active and 0 = In-active',
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grant_roles`
--

CREATE TABLE `grant_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `implementing_agencies`
--

CREATE TABLE `implementing_agencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `operation_act_id` int(11) NOT NULL,
  `imp_agencies_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active and 0 = In-active',
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `implementing_agencies`
--

INSERT INTO `implementing_agencies` (`id`, `operation_act_id`, `imp_agencies_id`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, '[1,5,6]', 1, '1', NULL, NULL, '2020-02-25 03:41:21', '2020-02-25 04:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `implementing_agencies2`
--

CREATE TABLE `implementing_agencies2` (
  `id` int(10) UNSIGNED NOT NULL,
  `agency_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agency_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_fax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active and 0 = In-active',
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `imp_agen_contact_persons`
--

CREATE TABLE `imp_agen_contact_persons` (
  `id` int(10) UNSIGNED NOT NULL,
  `implementing_agency_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_ministry` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active and 0 = In-active',
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_menus`
--

CREATE TABLE `main_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sl_no` int(11) DEFAULT NULL,
  `css_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_menus`
--

INSERT INTO `main_menus` (`id`, `menu_name`, `sl_no`, `css_class`, `route`, `menu_url`, `active`, `created_at`, `updated_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'Users', 2, NULL, NULL, NULL, 1, '2020-01-27 06:04:27', '2020-01-27 13:00:13', 1, 1, NULL),
(2, 'Dashboard', 1, NULL, NULL, NULL, 1, '2020-01-27 06:07:45', '2020-01-27 06:21:20', 1, 1, NULL),
(4, 'Setting', 3, NULL, NULL, NULL, 1, '2020-01-27 12:56:31', '2020-01-27 12:56:31', 1, NULL, NULL),
(5, 'User Roles', 4, NULL, NULL, NULL, 1, '2020-01-27 13:00:01', '2020-01-27 13:50:57', 1, 1, NULL),
(6, 'Project Information', 3, NULL, NULL, NULL, 1, '2020-02-18 21:39:47', '2020-02-18 21:39:47', 1, NULL, NULL),
(7, 'Procurement Management', 5, NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '2020-03-11 00:54:26', 1, 1, NULL);

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
(11, '2020_01_27_073016_create_main_menus_table', 2),
(12, '2020_01_27_073032_create_sub_menus_table', 2),
(13, '2020_01_27_075534_create_cache_table', 2),
(14, '2020_01_27_094413_create_roles_table', 3),
(15, '2020_01_27_094804_create_grant_roles_table', 3),
(16, '2020_01_27_095343_create_role_wise_menu_permissions_table', 3),
(17, '2020_02_17_113635_create_partner_tables_table', 4),
(18, '2020_02_18_044036_create_training_categories_table', 5),
(19, '2020_02_18_091255_create_agencies_table', 5),
(20, '2020_02_20_055711_create_training_cost_heads_table', 5),
(21, '2020_02_24_052831_create_project_documents_table', 5),
(22, '2020_02_23_094304_create_training_organizer_informations_table', 6),
(23, '2020_02_24_171228_create_project_components_table', 6),
(24, '2020_02_25_065506_create_development_partners_table', 7),
(25, '2020_02_25_085044_create_implementing_agencies_table', 8),
(27, '2020_02_25_113603_create_operation_activities_table', 9),
(29, '2020_03_10_060402_create_proc_method', 10),
(30, '2020_03_10_064931_create_proc_method_steps', 11),
(31, '2020_03_10_064941_create_proc_types', 11),
(32, '2020_03_10_064959_create_proc_units', 11),
(33, '2020_03_10_095815_create_proc_ecocode', 12),
(34, '2020_03_10_100454_create_proc_status', 12),
(35, '2020_03_10_101049_create_proc_contract_type', 12),
(36, '2020_03_10_102115_create_proc_supplier', 12),
(37, '2020_03_10_102632_create_proc_packages', 12),
(38, '2020_03_10_104948_create_proc_package_eco', 13),
(39, '2020_03_10_110135_create_proc_execution', 13),
(40, '2020_03_10_111839_create_proc_voucher', 13),
(41, '2020_03_10_111844_create_proc_voucher_detail', 13),
(42, '2020_03_02_085032_create_credit_masters_table', 14),
(43, '2020_03_03_055236_create_operation_act_development_partners_table', 14),
(44, '2020_03_03_063337_create_asset_masters_table', 14),
(45, '2020_03_03_115734_create_contact_persons_table', 14),
(46, '2020_03_04_041402_create_implementing_agencies_table', 14),
(47, '2020_03_04_041515_create_imp_agen_contact_persons_table', 14),
(48, '2020_03_04_115011_create_project_staff_informations_table', 14),
(49, '2020_03_05_090627_create_economy_code_infoes_table', 14),
(50, '2020_03_05_114130_create_voucher_types_table', 14),
(51, '2020_03_08_045302_create_project_budgets_table', 14),
(52, '2020_03_08_050737_create_sub_heads_table', 14),
(53, '2020_03_08_083021_create_salary_categories_table', 14),
(54, '2020_03_08_101257_create_outsource_staffs_table', 14),
(55, '2020_03_08_112711_create_yearly_project_budgets_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `operation_activities`
--

CREATE TABLE `operation_activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `operation_act_id` int(11) NOT NULL,
  `pro_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_start_date` date NOT NULL,
  `pro_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_end_date` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_objectives` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_pro_v` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adp_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_pro_v2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `non_adp_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_agreement_date` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agreement_ministry` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active and 0 = In-active',
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `operation_activities`
--

INSERT INTO `operation_activities` (`id`, `operation_act_id`, `pro_code`, `pro_start_date`, `pro_name`, `pro_end_date`, `pro_objectives`, `pro_location`, `total_pro_v`, `adp_code`, `total_pro_v2`, `non_adp_code`, `pro_agreement_date`, `agreement_ministry`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 1, '888', '2020-02-05', '8', '2020-02-05', '22222', 'u', '888', '88', '88', '88', '2020-02-05', '88', 1, '1', '1', NULL, '2020-02-26 01:13:25', '2020-02-26 02:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `operation_act_development_partners`
--

CREATE TABLE `operation_act_development_partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `operation_act_id` int(11) NOT NULL,
  `devMt_partner_id` int(11) NOT NULL,
  `credit_amount_a_usd` double NOT NULL,
  `credit_amount_a_tk` double NOT NULL,
  `credit_amount_b_usd` double NOT NULL,
  `credit_amoun_b_tk` double NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active and 0 = In-active',
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `outsource_staffs`
--

CREATE TABLE `outsource_staffs` (
  `id` int(10) UNSIGNED NOT NULL,
  `staff_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `join_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary_category` int(10) UNSIGNED DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partner_tables`
--

CREATE TABLE `partner_tables` (
  `id` int(10) UNSIGNED NOT NULL,
  `doner_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doner_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doner_type` int(11) NOT NULL,
  `in_short` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active and 0 = In-active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partner_tables`
--

INSERT INTO `partner_tables` (`id`, `doner_no`, `doner_name`, `doner_type`, `in_short`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(2, 'wer c c', 'dfsdf', 2, 'sdfsd', 1, NULL, '2020-02-17 23:24:20', 1, 1, NULL),
(3, 'ewrwer', 'dgfdf', 1, 'were', 1, '2020-02-17 10:50:51', '2020-02-17 10:50:51', 1, NULL, NULL),
(4, 'ewrwe', 'dgfdf', 1, 'were', 1, '2020-02-17 10:51:32', '2020-02-24 03:17:59', 1, 1, NULL),
(5, 'Bulbul Chandra', 'Chandra', 1, 'abcd', 1, '2020-02-17 10:57:39', '2020-02-24 23:19:33', 1, 1, NULL),
(6, 'xxx', 'xxx', 1, 'xxx', 1, '2020-02-24 23:36:27', '2020-02-24 23:36:27', 1, NULL, NULL),
(7, 'dd', 'd', 3, 'ddddd', 1, '2020-02-24 23:37:07', '2020-02-24 23:37:07', 1, NULL, NULL),
(8, 'bulbul  Chandra Sarker', 's', 1, 'sss', 1, '2020-02-24 23:37:37', '2020-02-25 00:27:07', 1, 1, NULL),
(9, '22', '222', 1, '3333', 1, '2020-03-03 01:49:21', '2020-03-03 01:49:21', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `procurement_steps`
--

CREATE TABLE `procurement_steps` (
  `id` int(11) NOT NULL,
  `method_name` varchar(100) NOT NULL,
  `step_no` int(11) DEFAULT NULL,
  `step_name` varchar(100) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `procurement_steps`
--

INSERT INTO `procurement_steps` (`id`, `method_name`, `step_no`, `step_name`, `is_active`) VALUES
(1, 'we', NULL, NULL, NULL),
(2, 'fnf', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `proc_contract_type`
--

CREATE TABLE `proc_contract_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proc_contract_type`
--

INSERT INTO `proc_contract_type` (`id`, `name`, `active`, `created_by`, `modified_by`, `created_at`, `updated_at`) VALUES
(1, 'ty', 1, 0, 0, NULL, NULL),
(2, 'io', 1, 0, 0, '2020-03-15 04:51:28', '2020-03-15 04:51:28'),
(3, 'afagag', 1, 0, 0, '2020-03-15 04:52:18', '2020-03-15 04:52:18'),
(4, 'sgs', NULL, 0, 0, '2020-03-15 05:11:20', '2020-03-15 05:11:20');

-- --------------------------------------------------------

--
-- Table structure for table `proc_ecocode`
--

CREATE TABLE `proc_ecocode` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_id` int(11) NOT NULL,
  `eco_head_id` int(11) NOT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proc_ecocode`
--

INSERT INTO `proc_ecocode` (`id`, `type_id`, `eco_head_id`, `active`, `created_by`, `modified_by`, `created_at`, `updated_at`) VALUES
(2, 1, 132123, NULL, 1, 1, '2020-03-16 05:53:17', '2020-03-16 05:56:18'),
(3, 2, 0, NULL, 1, 0, '2020-03-16 05:54:09', '2020-03-16 05:54:09'),
(4, 2, 3124124, NULL, 1, 0, '2020-03-16 05:55:19', '2020-03-16 05:55:19'),
(5, 1, 25212123, NULL, 1, 1, '2020-03-16 06:00:11', '2020-03-16 06:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `proc_execution`
--

CREATE TABLE `proc_execution` (
  `id` int(10) UNSIGNED NOT NULL,
  `package_id` int(11) NOT NULL,
  `operation_id` int(11) NOT NULL,
  `method_step_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `remarks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proc_execution_doc`
--

CREATE TABLE `proc_execution_doc` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proc_method`
--

CREATE TABLE `proc_method` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `market_approach` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proc_method`
--

INSERT INTO `proc_method` (`id`, `name`, `short_name`, `market_approach`, `active`, `created_by`, `modified_by`, `created_at`, `updated_at`) VALUES
(2, 'op', 'op', 'oppp', NULL, 0, 0, '2020-03-12 04:34:43', '2020-03-12 04:46:00'),
(6, 'jomuna', 'n', 'nm', 1, 0, 1, '2020-03-12 05:44:21', '2020-03-12 05:51:57'),
(7, 'podda', 'm', 'mk', 1, 1, 0, '2020-03-12 05:45:52', '2020-03-12 05:51:16');

-- --------------------------------------------------------

--
-- Table structure for table `proc_method_steps`
--

CREATE TABLE `proc_method_steps` (
  `id` int(10) UNSIGNED NOT NULL,
  `method_id` int(11) NOT NULL,
  `method_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proc_method_steps`
--

INSERT INTO `proc_method_steps` (`id`, `method_id`, `method_name`, `short_name`, `active`, `created_by`, `modified_by`, `created_at`, `updated_at`) VALUES
(17, 0, 'two', '133546', 0, 0, 0, '2020-03-11 06:16:05', '2020-03-12 01:14:22'),
(21, 0, 'one', 'ertwueryiwe', 1, 0, 0, '2020-03-12 00:53:14', '2020-03-12 01:12:32'),
(23, 7, 'three', 'oppo', 1, 0, 0, '2020-03-12 02:07:47', '2020-03-12 02:08:16'),
(24, 0, '6', 'sadfsdfsdf', 1, 1, 0, '2020-03-16 02:08:20', '2020-03-16 02:08:20');

-- --------------------------------------------------------

--
-- Table structure for table `proc_packages`
--

CREATE TABLE `proc_packages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operation_id` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `procurement_type` int(11) DEFAULT NULL,
  `beneficiary_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `estimated_price` int(11) DEFAULT NULL,
  `method_id` int(11) DEFAULT NULL,
  `status_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci,
  `archive` tinyint(1) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proc_packages`
--

INSERT INTO `proc_packages` (`id`, `name`, `package_number`, `operation_id`, `start_date`, `end_date`, `procurement_type`, `beneficiary_name`, `quantity`, `unit_id`, `estimated_price`, `method_id`, `status_id`, `contract_type`, `remarks`, `archive`, `created_by`, `modified_by`, `created_at`, `updated_at`) VALUES
(1, 'op', 'p-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(2, 'hjkhkj', 'pno-23424', NULL, '2020-02-02', '2020-02-12', 2, 'kh', 0, 1, 0, 6, '1', '1', 'k', 0, 1, NULL, '2020-03-19 02:41:05', '2020-03-19 02:41:05');

-- --------------------------------------------------------

--
-- Table structure for table `proc_package_eco`
--

CREATE TABLE `proc_package_eco` (
  `id` int(10) UNSIGNED NOT NULL,
  `package_id` int(11) NOT NULL,
  `eco_head_id` int(11) NOT NULL,
  `eco_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proc_revisions`
--

CREATE TABLE `proc_revisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revision_date` date NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `procurement_type` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `meeting_no` int(11) NOT NULL,
  `estimated_price` int(11) DEFAULT NULL,
  `method_id` int(11) DEFAULT NULL,
  `status_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proc_revisions`
--

INSERT INTO `proc_revisions` (`id`, `name`, `package_number`, `revision_date`, `start_date`, `end_date`, `procurement_type`, `quantity`, `meeting_no`, `estimated_price`, `method_id`, `status_id`, `contract_type`, `remarks`, `created_by`, `modified_by`, `created_at`, `updated_at`) VALUES
(1, 'op', 'p-01', '0000-00-00', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'hjkhkj', 'pno-23424', '0000-00-00', '2020-02-02', '2020-02-12', 2, 0, 0, 0, 6, '1', '1', 'k', 1, NULL, '2020-03-19 02:41:05', '2020-03-19 02:41:05');

-- --------------------------------------------------------

--
-- Table structure for table `proc_revision_doc`
--

CREATE TABLE `proc_revision_doc` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proc_revision_eco`
--

CREATE TABLE `proc_revision_eco` (
  `id` int(10) UNSIGNED NOT NULL,
  `package_id` int(11) NOT NULL,
  `eco_head_id` int(11) NOT NULL,
  `eco_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proc_status`
--

CREATE TABLE `proc_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proc_status`
--

INSERT INTO `proc_status` (`id`, `name`, `created_by`, `modified_by`, `created_at`, `updated_at`) VALUES
(1, 'faaf', 1, 0, '2020-03-16 06:35:55', '2020-03-16 06:35:55');

-- --------------------------------------------------------

--
-- Table structure for table `proc_supplier`
--

CREATE TABLE `proc_supplier` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proc_supplier`
--

INSERT INTO `proc_supplier` (`id`, `name`, `fax`, `office`, `phone`, `contact_person`, `contact_number`, `remarks`, `active`, `created_by`, `modified_by`, `created_at`, `updated_at`) VALUES
(1, 'yu', 'yui', 'yiyiu', '113', 'yiiu', '677', 'uoiio', 0, 1, 0, '2020-03-16 06:48:49', '2020-03-16 06:48:49');

-- --------------------------------------------------------

--
-- Table structure for table `proc_types`
--

CREATE TABLE `proc_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proc_types`
--

INSERT INTO `proc_types` (`id`, `name`, `active`, `created_by`, `modified_by`, `created_at`, `updated_at`) VALUES
(2, 'Mita test 2', 1, 1, 1, '2020-03-16 00:47:28', '2020-03-16 01:52:29'),
(3, 'pur 2 4', 1, 1, 1, '2020-03-16 00:53:20', '2020-03-16 01:55:34');

-- --------------------------------------------------------

--
-- Table structure for table `proc_units`
--

CREATE TABLE `proc_units` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proc_units`
--

INSERT INTO `proc_units` (`id`, `name`, `active`, `created_by`, `modified_by`, `created_at`, `updated_at`) VALUES
(1, 'we', 1, 1, 0, '2020-03-16 06:15:39', '2020-03-16 06:15:39'),
(2, 'podda', NULL, 1, 0, '2020-03-16 06:37:08', '2020-03-16 06:37:08');

-- --------------------------------------------------------

--
-- Table structure for table `proc_voucher`
--

CREATE TABLE `proc_voucher` (
  `id` int(10) UNSIGNED NOT NULL,
  `voucher_number` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operation_id` int(11) NOT NULL,
  `voucher_type_id` int(11) NOT NULL,
  `currency_code` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_rate` int(11) NOT NULL,
  `voucher_date` date NOT NULL,
  `narration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_post` tinyint(1) NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proc_voucher_detail`
--

CREATE TABLE `proc_voucher_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `voucher_id` int(11) NOT NULL,
  `eco_head_id` int(11) NOT NULL,
  `eco_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_code` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_rate` int(11) NOT NULL,
  `voucher_date` date NOT NULL,
  `reference` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_debit` int(11) NOT NULL,
  `transaction_credit` int(11) NOT NULL,
  `base_debit` int(11) NOT NULL,
  `base_credit` int(11) NOT NULL,
  `fund_source` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `loan_id` int(11) NOT NULL,
  `re_schedule_no` int(11) NOT NULL,
  `re_set_no` int(11) NOT NULL,
  `loan_details_id` int(11) NOT NULL,
  `installment_no` int(11) NOT NULL,
  `asset_id` int(11) NOT NULL,
  `asset_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training_id` int(11) NOT NULL,
  `participant_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_budgets`
--

CREATE TABLE `project_budgets` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_name_short_id` int(11) NOT NULL,
  `budget_date` date NOT NULL,
  `document_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload_file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active and 0 = In-active',
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_components`
--

CREATE TABLE `project_components` (
  `id` int(10) UNSIGNED NOT NULL,
  `operation_act_id` int(11) NOT NULL,
  `dept_partner_id` int(11) NOT NULL,
  `cost_usd` double NOT NULL,
  `cost_bdt` double NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active and 0 = In-active',
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_components`
--

INSERT INTO `project_components` (`id`, `operation_act_id`, `dept_partner_id`, `cost_usd`, `cost_bdt`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(8, 1, 4, 222, 3333, 1, '1', NULL, NULL, '2020-02-25 02:12:24', '2020-02-25 02:12:24'),
(9, 1, 3, 99, 88, 1, '1', NULL, NULL, '2020-02-25 02:12:24', '2020-02-25 02:12:24'),
(10, 1, 3, 33, 787, 1, '1', NULL, NULL, '2020-02-25 02:12:24', '2020-02-25 02:12:24');

-- --------------------------------------------------------

--
-- Table structure for table `project_documents`
--

CREATE TABLE `project_documents` (
  `id` int(10) UNSIGNED NOT NULL,
  `operation_act_id` int(11) NOT NULL,
  `document_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_documents`
--

INSERT INTO `project_documents` (`id`, `operation_act_id`, `document_name`, `document_file_name`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(47, 1, 'aaaaaaaaaa', '1582611846_4.jpeg', 1, '1', NULL, NULL, '2020-02-25 00:24:47', '2020-02-25 00:24:47'),
(48, 1, 'hhhhhhhhhh', '1582611872_4.jpeg', 1, '1', NULL, NULL, '2020-02-25 00:24:47', '2020-02-25 00:24:47'),
(49, 1, 'kkkkkkk', '1582611887_4.jpeg', 1, '1', NULL, NULL, '2020-02-25 00:24:47', '2020-02-25 00:24:47');

-- --------------------------------------------------------

--
-- Table structure for table `project_staff_informations`
--

CREATE TABLE `project_staff_informations` (
  `id` int(10) UNSIGNED NOT NULL,
  `project` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_join_date` date NOT NULL,
  `sap_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active and 0 = In-active',
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `role_description`, `active`, `created_at`, `updated_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'Admin', 'Admin', 1, '2020-01-27 02:24:32', NULL, 1, NULL, NULL),
(2, 'Supper', 'Supper', 1, '2020-01-27 09:39:55', '2020-01-27 09:39:55', 1, NULL, NULL),
(3, 'MD', 'MD', 1, '2020-01-27 09:46:51', '2020-01-27 09:46:51', 1, NULL, NULL),
(4, 'CEO', 'CEO', 1, '2020-01-27 09:49:29', '2020-02-24 03:17:14', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_wise_menu_permissions`
--

CREATE TABLE `role_wise_menu_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `submenu_id` int(10) UNSIGNED NOT NULL,
  `read` int(11) DEFAULT NULL,
  `save` int(11) DEFAULT NULL,
  `update` int(11) DEFAULT NULL,
  `delete` int(11) DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_wise_menu_permissions`
--

INSERT INTO `role_wise_menu_permissions` (`id`, `role_id`, `submenu_id`, `read`, `save`, `update`, `delete`, `active`, `created_at`, `updated_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(5, 1, 7, 1, 1, 0, 1, 1, '2020-01-27 13:04:58', '2020-02-24 23:13:55', 0, NULL, NULL),
(6, 1, 3, 1, 1, 1, 1, 1, '2020-01-27 13:04:58', '2020-03-04 02:07:33', 0, NULL, NULL),
(7, 1, 4, 1, 1, 0, 0, 1, '2020-01-27 13:04:58', '2020-02-24 23:14:35', 0, NULL, NULL),
(8, 1, 5, 1, 1, 0, 1, 1, '2020-01-27 13:04:58', '2020-02-19 05:23:28', 0, NULL, NULL),
(12, 4, 7, 1, 1, 1, 1, 1, '2020-01-27 14:54:47', '2020-02-18 04:44:21', 0, NULL, NULL),
(13, 4, 3, 1, 1, 1, 0, 1, '2020-01-27 14:54:47', '2020-02-18 04:44:21', 0, NULL, NULL),
(14, 4, 4, 0, 0, 0, 0, 1, '2020-01-27 14:54:47', '2020-02-18 04:44:21', 0, NULL, NULL),
(15, 4, 5, 0, 0, 0, 0, 1, '2020-01-27 14:54:47', '2020-02-18 04:44:21', 0, NULL, NULL),
(16, 1, 9, 1, 1, 1, 1, 1, '2020-02-18 22:01:30', '2020-02-18 22:01:30', 0, NULL, NULL),
(17, 1, 8, 1, 1, 1, 0, 1, '2020-02-18 22:01:31', '2020-02-25 00:26:54', 0, NULL, NULL),
(18, 1, 10, 1, 1, 1, 1, 1, '2020-03-04 02:06:57', '2020-03-04 02:06:57', 0, NULL, NULL),
(19, 1, 11, 1, 1, 1, 1, 1, '2020-03-04 02:10:25', '2020-03-04 02:10:25', 0, NULL, NULL),
(20, 1, 12, 1, 1, 1, 1, 1, '2020-03-04 23:26:35', '2020-03-04 23:26:35', 0, NULL, NULL),
(21, 1, 13, 1, 1, 1, 1, 1, '2020-03-04 23:26:35', '2020-03-04 23:26:35', 0, NULL, NULL),
(22, 1, 14, 1, 1, 1, 1, 1, '2020-03-09 23:49:43', '2020-03-09 23:49:43', 0, NULL, NULL),
(23, 1, 15, 1, 1, 1, 1, 1, '2020-03-09 23:49:43', '2020-03-09 23:49:43', 0, NULL, NULL),
(24, 1, 16, 1, 1, 1, 1, 1, '2020-03-09 23:49:43', '2020-03-09 23:49:43', 0, NULL, NULL),
(25, 1, 17, 1, 1, 1, 1, 1, '2020-03-09 23:49:43', '2020-03-09 23:49:43', 0, NULL, NULL),
(26, 1, 18, 1, 1, 1, 1, 1, '2020-03-11 00:46:45', '2020-03-11 00:46:45', 0, NULL, NULL),
(27, 1, 19, 1, 1, 1, 1, 1, '2020-03-11 00:46:45', '2020-03-11 00:46:45', 0, NULL, NULL),
(28, 1, 20, 1, 1, 1, 1, 1, '2020-03-11 00:46:45', '2020-03-11 00:46:45', 0, NULL, NULL),
(29, 1, 21, 1, 1, 1, 1, 1, '2020-03-11 00:46:45', '2020-03-11 00:46:45', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `salary_categories`
--

CREATE TABLE `salary_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gross` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_heads`
--

CREATE TABLE `sub_heads` (
  `id` int(10) UNSIGNED NOT NULL,
  `eco_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_menus`
--

CREATE TABLE `sub_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `submenu_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sl_no` int(11) DEFAULT NULL,
  `controller_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `css_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_menus`
--

INSERT INTO `sub_menus` (`id`, `menu_id`, `submenu_name`, `sl_no`, `controller_name`, `description`, `css_class`, `route`, `url`, `active`, `created_at`, `updated_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(3, 4, 'Main Menu', 1, '', 'Main Menu', 'web', '/menu/list', '/menu/list', 1, '2020-01-27 12:57:16', '2020-01-27 14:53:13', 1, 1, NULL),
(4, 4, 'Sub-Menu', 2, '', 'Sub-Menu', 'web', '/sub-menu/list', '/sub-menu/list', 1, '2020-01-27 12:58:35', '2020-01-27 14:39:39', 1, 1, NULL),
(5, 1, 'Role Type', 1, 'RoleController', 'Role Type', 'web', '/user/role', '/user/role', 1, '2020-01-27 13:01:37', '2020-02-19 05:20:31', 1, 1, NULL),
(7, 1, 'User List', 1, 'UserController', 'User List', 'account_balance', '/user/userList', '/user/userList', 1, '2020-01-27 13:04:31', '2020-02-19 05:19:15', 1, 1, NULL),
(8, 6, 'Development Partner', 1, 'PartnerTableController', 'Development Partner', 'web', '/project-info/dev-partner', '/project-info/dev-partner', 1, '2020-02-18 21:40:29', '2020-02-19 05:18:09', 1, 1, NULL),
(9, 6, 'Operation Activities', 2, '', 'Operation Activities', 'web', '/project-info/operation-act', '/project-info/operation-act', 1, '2020-02-18 21:42:36', '2020-02-18 21:42:36', 1, NULL, NULL),
(10, 7, 'Method', 1, '', 'Method', 'web', '/procurement/method', '/procurement/method', 1, '2020-03-03 23:52:27', '2020-03-11 01:00:30', 1, 1, NULL),
(11, 7, 'Method Steps', 2, '', 'Method Steps', 'web', '/procurement/method_steps', '/procurement/method_steps', 1, '2020-03-04 02:09:31', '2020-03-04 02:09:31', 1, NULL, NULL),
(12, 7, 'Type', 3, '', 'Type', 'web', '/procurement/type', '/procurement/type', 1, '2020-03-04 23:25:17', '2020-03-11 00:49:04', 1, 1, NULL),
(13, 7, 'Type Eco', 4, '', 'Type Eco', 'web', '/procurement/type_eco', '/procurement/type_eco', 1, '2020-03-04 23:26:14', '2020-03-11 00:48:58', 1, 1, NULL),
(14, 7, 'Status', 5, '', 'Status', 'web', '/procurement/status', '/procurement/status', 1, '2020-03-05 05:22:28', '2020-03-05 05:22:51', 1, 1, NULL),
(15, 7, 'Contract type', 6, '', 'Contract type', 'web', '/procurement/contract', '/procurement/contract', 1, '2020-03-05 05:23:35', '2020-03-11 00:33:50', 1, 1, NULL),
(16, 7, 'Unit Master', 7, '', 'Unit Master', 'web', '/procurement/unit_master', '/procurement/unit_master', 1, '2020-03-05 05:24:40', '2020-03-05 05:24:40', 1, NULL, NULL),
(17, 7, 'Supplier Information', 8, '', 'Supplier Information', 'web', '/procurement/supplier', '/procurement/supplier', 1, '2020-03-05 05:25:59', '2020-03-09 21:57:51', 1, 1, NULL),
(18, 7, 'Packages', 9, '', 'Packages', 'web', '/procurement/package', '/procurement/package', 1, '2020-03-11 00:41:40', '2020-03-11 00:49:37', 1, 1, NULL),
(19, 7, 'Package Revision', 10, '', 'Package Revision', 'web', '/procurement/package_revision', '/procurement/package_revision', 1, '2020-03-11 00:43:22', '2020-03-11 00:49:29', 1, 1, NULL),
(20, 7, 'Package Execution', 11, '', 'Package Execution', 'web', '/procurement/package_execution', '/procurement/package_execution', 1, '2020-03-11 00:45:14', '2020-03-11 00:49:25', 1, 1, NULL),
(21, 7, 'Voucher Entry', 12, '', 'Voucher Entry', 'web', '/procurement/voucher', '/procurement/voucher', 1, '2020-03-11 00:46:03', '2020-03-11 00:49:20', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `training_categories`
--

CREATE TABLE `training_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `training_cost_heads`
--

CREATE TABLE `training_cost_heads` (
  `id` int(10) UNSIGNED NOT NULL,
  `head_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `related_account` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `training_organizer_informations`
--

CREATE TABLE `training_organizer_informations` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_phone_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) DEFAULT NULL,
  `is_verified` tinyint(4) NOT NULL DEFAULT '1',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_name`, `email`, `password`, `role_id`, `is_verified`, `status`, `remember_token`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', NULL, 'admin@gmail.com', '$2y$10$649w.4nUZB53mOpZF2L6OOK7T/qtsPzFMSyUqTvTzDUxJZRy7qgrC', 1, 1, 'active', 'Kz7eNoFpAr', NULL, NULL, NULL, '2018-04-17 05:49:58', '2018-04-17 05:49:58', NULL),
(56, 'Bulbul', NULL, 'bulbul@gmail.com', '$2y$10$ccOZOCPaQWhLrHe.ujsFB.exVMZbINygZWV2gOcjSRZTbdJh9NVKu', 4, 1, 'active', NULL, 1, 1, NULL, '2020-01-27 14:14:22', '2020-01-27 14:50:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `voucher_types`
--

CREATE TABLE `voucher_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active and 0 = In-active',
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `yearly_project_budgets`
--

CREATE TABLE `yearly_project_budgets` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_name_short_id` int(11) NOT NULL,
  `budgeting_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `document_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload_file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active and 0 = In-active',
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agencies`
--
ALTER TABLE `agencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asset_masters`
--
ALTER TABLE `asset_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asset_movements`
--
ALTER TABLE `asset_movements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asset_movements_asset_id_foreign` (`asset_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD UNIQUE KEY `cache_key_unique` (`key`);

--
-- Indexes for table `contact_persons`
--
ALTER TABLE `contact_persons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credit_masters`
--
ALTER TABLE `credit_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `development_partners`
--
ALTER TABLE `development_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `economy_code_infoes`
--
ALTER TABLE `economy_code_infoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grant_roles`
--
ALTER TABLE `grant_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grant_roles_user_id_foreign` (`user_id`),
  ADD KEY `grant_roles_role_id_foreign` (`role_id`);

--
-- Indexes for table `implementing_agencies`
--
ALTER TABLE `implementing_agencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `implementing_agencies2`
--
ALTER TABLE `implementing_agencies2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imp_agen_contact_persons`
--
ALTER TABLE `imp_agen_contact_persons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_menus`
--
ALTER TABLE `main_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operation_activities`
--
ALTER TABLE `operation_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operation_act_development_partners`
--
ALTER TABLE `operation_act_development_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outsource_staffs`
--
ALTER TABLE `outsource_staffs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `outsource_staffs_salary_category_foreign` (`salary_category`);

--
-- Indexes for table `partner_tables`
--
ALTER TABLE `partner_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `procurement_steps`
--
ALTER TABLE `procurement_steps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proc_contract_type`
--
ALTER TABLE `proc_contract_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `proc_contract_type_name_unique` (`name`);

--
-- Indexes for table `proc_ecocode`
--
ALTER TABLE `proc_ecocode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proc_execution`
--
ALTER TABLE `proc_execution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proc_execution_doc`
--
ALTER TABLE `proc_execution_doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proc_method`
--
ALTER TABLE `proc_method`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `proc_method_method_name_unique` (`name`);

--
-- Indexes for table `proc_method_steps`
--
ALTER TABLE `proc_method_steps`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `proc_method_steps_method_name_unique` (`method_name`);

--
-- Indexes for table `proc_packages`
--
ALTER TABLE `proc_packages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `proc_packages_name_unique` (`name`);

--
-- Indexes for table `proc_package_eco`
--
ALTER TABLE `proc_package_eco`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proc_revisions`
--
ALTER TABLE `proc_revisions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `proc_packages_name_unique` (`name`);

--
-- Indexes for table `proc_revision_doc`
--
ALTER TABLE `proc_revision_doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proc_revision_eco`
--
ALTER TABLE `proc_revision_eco`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proc_status`
--
ALTER TABLE `proc_status`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `proc_status_name_unique` (`name`);

--
-- Indexes for table `proc_supplier`
--
ALTER TABLE `proc_supplier`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `proc_supplier_name_unique` (`name`);

--
-- Indexes for table `proc_types`
--
ALTER TABLE `proc_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `proc_types_name_unique` (`name`);

--
-- Indexes for table `proc_units`
--
ALTER TABLE `proc_units`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `proc_units_name_unique` (`name`);

--
-- Indexes for table `proc_voucher`
--
ALTER TABLE `proc_voucher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proc_voucher_detail`
--
ALTER TABLE `proc_voucher_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_budgets`
--
ALTER TABLE `project_budgets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_components`
--
ALTER TABLE `project_components`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_documents`
--
ALTER TABLE `project_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_staff_informations`
--
ALTER TABLE `project_staff_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_wise_menu_permissions`
--
ALTER TABLE `role_wise_menu_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary_categories`
--
ALTER TABLE `salary_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_heads`
--
ALTER TABLE `sub_heads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menus`
--
ALTER TABLE `sub_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_menus_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `training_categories`
--
ALTER TABLE `training_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_cost_heads`
--
ALTER TABLE `training_cost_heads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_organizer_informations`
--
ALTER TABLE `training_organizer_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_user_name_unique` (`user_name`);

--
-- Indexes for table `voucher_types`
--
ALTER TABLE `voucher_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yearly_project_budgets`
--
ALTER TABLE `yearly_project_budgets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agencies`
--
ALTER TABLE `agencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asset_masters`
--
ALTER TABLE `asset_masters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asset_movements`
--
ALTER TABLE `asset_movements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_persons`
--
ALTER TABLE `contact_persons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `credit_masters`
--
ALTER TABLE `credit_masters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `development_partners`
--
ALTER TABLE `development_partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `economy_code_infoes`
--
ALTER TABLE `economy_code_infoes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grant_roles`
--
ALTER TABLE `grant_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `implementing_agencies`
--
ALTER TABLE `implementing_agencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `implementing_agencies2`
--
ALTER TABLE `implementing_agencies2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `imp_agen_contact_persons`
--
ALTER TABLE `imp_agen_contact_persons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_menus`
--
ALTER TABLE `main_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `operation_activities`
--
ALTER TABLE `operation_activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `operation_act_development_partners`
--
ALTER TABLE `operation_act_development_partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `outsource_staffs`
--
ALTER TABLE `outsource_staffs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partner_tables`
--
ALTER TABLE `partner_tables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `procurement_steps`
--
ALTER TABLE `procurement_steps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `proc_contract_type`
--
ALTER TABLE `proc_contract_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `proc_ecocode`
--
ALTER TABLE `proc_ecocode`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `proc_execution`
--
ALTER TABLE `proc_execution`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proc_execution_doc`
--
ALTER TABLE `proc_execution_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proc_method`
--
ALTER TABLE `proc_method`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `proc_method_steps`
--
ALTER TABLE `proc_method_steps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `proc_packages`
--
ALTER TABLE `proc_packages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `proc_package_eco`
--
ALTER TABLE `proc_package_eco`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proc_revisions`
--
ALTER TABLE `proc_revisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `proc_revision_doc`
--
ALTER TABLE `proc_revision_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proc_revision_eco`
--
ALTER TABLE `proc_revision_eco`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proc_status`
--
ALTER TABLE `proc_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `proc_supplier`
--
ALTER TABLE `proc_supplier`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `proc_types`
--
ALTER TABLE `proc_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `proc_units`
--
ALTER TABLE `proc_units`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `proc_voucher`
--
ALTER TABLE `proc_voucher`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proc_voucher_detail`
--
ALTER TABLE `proc_voucher_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_budgets`
--
ALTER TABLE `project_budgets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_components`
--
ALTER TABLE `project_components`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `project_documents`
--
ALTER TABLE `project_documents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `project_staff_informations`
--
ALTER TABLE `project_staff_informations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_wise_menu_permissions`
--
ALTER TABLE `role_wise_menu_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `salary_categories`
--
ALTER TABLE `salary_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_heads`
--
ALTER TABLE `sub_heads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_menus`
--
ALTER TABLE `sub_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `training_categories`
--
ALTER TABLE `training_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `training_cost_heads`
--
ALTER TABLE `training_cost_heads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `training_organizer_informations`
--
ALTER TABLE `training_organizer_informations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `voucher_types`
--
ALTER TABLE `voucher_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `yearly_project_budgets`
--
ALTER TABLE `yearly_project_budgets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `asset_movements`
--
ALTER TABLE `asset_movements`
  ADD CONSTRAINT `asset_movements_asset_id_foreign` FOREIGN KEY (`asset_id`) REFERENCES `asset_masters` (`id`);

--
-- Constraints for table `grant_roles`
--
ALTER TABLE `grant_roles`
  ADD CONSTRAINT `grant_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `grant_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `outsource_staffs`
--
ALTER TABLE `outsource_staffs`
  ADD CONSTRAINT `outsource_staffs_salary_category_foreign` FOREIGN KEY (`salary_category`) REFERENCES `salary_categories` (`id`);

--
-- Constraints for table `sub_menus`
--
ALTER TABLE `sub_menus`
  ADD CONSTRAINT `sub_menus_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `main_menus` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
