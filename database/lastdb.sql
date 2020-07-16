-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2020 at 08:28 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myfrag`
--

-- --------------------------------------------------------

--
-- Table structure for table `addons`
--

CREATE TABLE `addons` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `unique_identifier` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `version` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `activated` int(1) NOT NULL DEFAULT 1,
  `image` varchar(1000) COLLATE utf32_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `all_pages`
--

CREATE TABLE `all_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `all_pages`
--

INSERT INTO `all_pages` (`id`, `name`, `slug`, `details`, `active_status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Terms & Conditions', 'terms_condition', '<div class=\"row\" style=\"box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"col-md-12 col-sm-12\" style=\"box-sizing: border-box; position: relative; width: 950px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 100%; max-width: 100%;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h4 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.5rem;\">Summary:</h4><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Below is a brief summary of the salient provisions of the Privacy Policy of using this site, and does not constitute the full Terms & Conditions of use.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Using this site implies that you accept the Terms & Conditions and agree to be bound by them. If you do not agree to these terms, you must not use or access this site.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Use this site only for the purpose intended, and do not infringe on the rights of other persons while using this site. If we become aware of any abuse of the site, we may have to block access to the site, or to a specific user where applicable.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">These Terms & Conditions also refer to other documents such as the Terms & Conditions, Shipping Policy and Returns Policy. You are required to familiarize yourself with these documents as they govern your use of this site.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Where required, you must provide correct and accurate information, and ensure that it is up to date at all times.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">This site is owned and operated by Al Haramain Perfumes in the United Arab Emirates. Shipping of products to other countries may be available, but additional charges may apply.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">This site may not be available from time to time for maintenance or upgrades.</p></div></div></div><div class=\"row\" style=\"box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"col-md-12 col-sm-12\" style=\"box-sizing: border-box; position: relative; width: 950px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 100%; max-width: 100%;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Detailed Terms &amp; Conditions:</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Below is a brief summary of the salient provisions of the Terms & Conditions of using this site, and does not constitute the full Terms & Conditions of use.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Using this site implies that you accept the Terms & Conditions and agree to be bound by them. If you do not agree to these terms, you must not use or access this site.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Use this site only for the purpose intended, and do not infringe on the rights of other persons while using this site. If we become aware of any abuse of the site, we may have to block access to the site, or to a specific user where applicable.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">These Terms & Conditions also refer to other documents such as the Terms & Conditions, Shipping Policy and Returns Policy. You are required to familiarize yourself with these documents as they govern your use of this site.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Where required, you must provide correct and accurate information, and ensure that it is up to date at all times.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">This site is owned and operated by Al Haramain Perfumes in the United Arab Emirates. Shipping of products to other countries may be available, but additional charges may apply.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">This site may not be available from time to time for maintenance or upgrades.</p></div></div></div>', 1, 1, 1, '2020-05-22 02:44:34', '2020-05-22 02:44:34'),
(2, 'Privicy Policy', 'privacy_policy', '<div class=\"row\" style=\"box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"col-md-12 col-sm-12\" style=\"box-sizing: border-box; position: relative; width: 950px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 100%; max-width: 100%;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h4 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.5rem;\">Summary:</h4><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Below is a brief summary of the salient provisions of the Privacy Policy of using this site, and does not constitute the full Privacy Policy of use.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Using this site implies that you accept the Privacy Policy and agree to be bound by them. If you do not agree to these terms, you must not use or access this site.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Use this site only for the purpose intended, and do not infringe on the rights of other persons while using this site. If we become aware of any abuse of the site, we may have to block access to the site, or to a specific user where applicable.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">These Privacy Policy also refer to other documents such as the Privacy Policy, Shipping Policy and Returns Policy. You are required to familiarize yourself with these documents as they govern your use of this site.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Where required, you must provide correct and accurate information, and ensure that it is up to date at all times.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">This site is owned and operated by Al Haramain Perfumes in the United Arab Emirates. Shipping of products to other countries may be available, but additional charges may apply.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">This site may not be available from time to time for maintenance or upgrades.</p></div></div></div><div class=\"row\" style=\"box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"col-md-12 col-sm-12\" style=\"box-sizing: border-box; position: relative; width: 950px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 100%; max-width: 100%;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Detailed Terms &amp; Conditions:</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Below is a brief summary of the salient provisions of the Privacy Policy of using this site, and does not constitute the full Privacy Policy of use.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Using this site implies that you accept the Privacy Policy and agree to be bound by them. If you do not agree to these terms, you must not use or access this site.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Use this site only for the purpose intended, and do not infringe on the rights of other persons while using this site. If we become aware of any abuse of the site, we may have to block access to the site, or to a specific user where applicable.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">These Privacy Policy also refer to other documents such as the Privacy Policy, Shipping Policy and Returns Policy. You are required to familiarize yourself with these documents as they govern your use of this site.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Where required, you must provide correct and accurate information, and ensure that it is up to date at all times.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">This site is owned and operated by Al Haramain Perfumes in the United Arab Emirates. Shipping of products to other countries may be available, but additional charges may apply.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">This site may not be available from time to time for maintenance or upgrades.</p></div></div></div>', 1, 1, 1, '2020-05-22 02:44:34', '2020-05-22 02:44:34'),
(3, 'Shipping Policy ', 'shipping_policy', '<div class=\"row\" style=\"box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"col-md-12 col-sm-12\" style=\"box-sizing: border-box; position: relative; width: 950px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 100%; max-width: 100%;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h4 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.5rem;\">Overview:</h4><ul style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><li style=\"box-sizing: border-box; list-style: lower-alpha; padding-left: 10px;\">This Policy refers to how we process orders placed through shop.alharamainperfumes.com (the website / this site). By using shop.alharamainperfumes.com for the purposes of ordering goods from Al Haramain Perfumes, you agree to be bound by the provisions of this Policy.</li><li style=\"box-sizing: border-box; list-style: lower-alpha; padding-left: 10px;\">Please note that all orders placed on shop.alharamainperfumes.com will be shipped by Al Haramain Perfumes through the services of Al Haramain Perfumes’ selected shipping partner/s. There is no option for customers to select their own shipping providers.</li><li style=\"box-sizing: border-box; list-style: lower-alpha; padding-left: 10px;\">Upon successfully placing your order, a confirmation will be sent to your registered e-mail address and / or via SMS to your specified mobile number. By placing an order on this Site, you, the user, agree to such forms of communication. The order confirmation will include your order details, invoice amount and the order number. This is not an acceptance of your order, it is an acknowledgement that we have received your order. A dispatch notice / shipping confirmation will be sent to confirm that your order has been processed for shipment. You may be contacted prior to shipping to confirm your order details and / or for any clarification regarding your order.</li></ul></div></div></div><div class=\"row\" style=\"box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"col-md-12 col-sm-12\" style=\"box-sizing: border-box; position: relative; width: 950px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 100%; max-width: 100%;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Where we Deliver:</h3><ul style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><li style=\"box-sizing: border-box; list-style: lower-alpha; padding-left: 10px;\">This Policy refers to how we process orders placed through shop.alharamainperfumes.com (the website / this site). By using shop.alharamainperfumes.com for the purposes of ordering goods from Al Haramain Perfumes, you agree to be bound by the provisions of this Policy.</li><li style=\"box-sizing: border-box; list-style: lower-alpha; padding-left: 10px;\">Please note that all orders placed on shop.alharamainperfumes.com will be shipped by Al Haramain Perfumes through the services of Al Haramain Perfumes’ selected shipping partner/s. There is no option for customers to select their own shipping providers.</li><li style=\"box-sizing: border-box; list-style: lower-alpha; padding-left: 10px;\">Upon successfully placing your order, a confirmation will be sent to your registered e-mail address and / or via SMS to your specified mobile number. By placing an order on this Site, you, the user, agree to such forms of communication. The order confirmation will include your order details, invoice amount and the order number. This is not an acceptance of your order, it is an acknowledgement that we have received your order. A dispatch notice / shipping confirmation will be sent to confirm that your order has been processed for shipment. You may be contacted prior to shipping to confirm your order details and / or for any clarification regarding your order.</li></ul></div></div></div><div class=\"row\" style=\"box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"col-md-12 col-sm-12\" style=\"box-sizing: border-box; position: relative; width: 950px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 100%; max-width: 100%;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Delivery Times:</h3><ul style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><li style=\"box-sizing: border-box; list-style: lower-alpha; padding-left: 10px;\">This Policy refers to how we process orders placed through shop.alharamainperfumes.com (the website / this site). By using shop.alharamainperfumes.com for the purposes of ordering goods from Al Haramain Perfumes, you agree to be bound by the provisions of this Policy.</li><li style=\"box-sizing: border-box; list-style: lower-alpha; padding-left: 10px;\">Please note that all orders placed on shop.alharamainperfumes.com will be shipped by Al Haramain Perfumes through the services of Al Haramain Perfumes’ selected shipping partner/s. There is no option for customers to select their own shipping providers.</li><li style=\"box-sizing: border-box; list-style: lower-alpha; padding-left: 10px;\">Upon successfully placing your order, a confirmation will be sent to your registered e-mail address and / or via SMS to your specified mobile number. By placing an order on this Site, you, the user, agree to such forms of communication. The order confirmation will include your order details, invoice amount and the order number. This is not an acceptance of your order, it is an acknowledgement that we have received your order. A dispatch notice / shipping confirmation will be sent to confirm that your order has been processed for shipment. You may be contacted prior to shipping to confirm your order details and / or for any clarification regarding your order.</li></ul></div></div></div><div class=\"row\" style=\"box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"col-md-12 col-sm-12\" style=\"box-sizing: border-box; position: relative; width: 950px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 100%; max-width: 100%;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Shipping / Delivery Charges:</h3><ul style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><li style=\"box-sizing: border-box; list-style: lower-alpha; padding-left: 10px;\">This Policy refers to how we process orders placed through shop.alharamainperfumes.com (the website / this site). By using shop.alharamainperfumes.com for the purposes of ordering goods from Al Haramain Perfumes, you agree to be bound by the provisions of this Policy.</li><li style=\"box-sizing: border-box; list-style: lower-alpha; padding-left: 10px;\">Please note that all orders placed on shop.alharamainperfumes.com will be shipped by Al Haramain Perfumes through the services of Al Haramain Perfumes’ selected shipping partner/s. There is no option for customers to select their own shipping providers.</li><li style=\"box-sizing: border-box; list-style: lower-alpha; padding-left: 10px;\">Upon successfully placing your order, a confirmation will be sent to your registered e-mail address and / or via SMS to your specified mobile number. By placing an order on this Site, you, the user, agree to such forms of communication. The order confirmation will include your order details, invoice amount and the order number. This is not an acceptance of your order, it is an acknowledgement that we have received your order. A dispatch notice / shipping confirmation will be sent to confirm that your order has been processed for shipment. You may be contacted prior to shipping to confirm your order details and / or for any clarification regarding your order.</li></ul></div></div></div><br>', 1, 1, 1, '2020-05-22 02:44:34', '2020-05-22 02:44:34'),
(4, 'Return Refund Policy', 'refund_policy', '<div class=\"row\" style=\"box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"col-md-12 col-sm-12\" style=\"box-sizing: border-box; position: relative; width: 950px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 100%; max-width: 100%;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h4 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.5rem;\">Return Policy:</h4><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Below is a brief summary of the salient provisions of the Privacy Policy of using this site, and does not constitute the full Privacy Policy of use.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Using this site implies that you accept the Privacy Policy and agree to be bound by them. If you do not agree to these terms, you must not use or access this site.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Use this site only for the purpose intended, and do not infringe on the rights of other persons while using this site. If we become aware of any abuse of the site, we may have to block access to the site, or to a specific user where applicable.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">These Privacy Policy also refer to other documents such as the Privacy Policy, Shipping Policy and Returns Policy. You are required to familiarize yourself with these documents as they govern your use of this site.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Where required, you must provide correct and accurate information, and ensure that it is up to date at all times.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">This site is owned and operated by Al Haramain Perfumes in the United Arab Emirates. Shipping of products to other countries may be available, but additional charges may apply.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">This site may not be available from time to time for maintenance or upgrades.</p></div></div></div><div class=\"row\" style=\"box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"col-md-12 col-sm-12\" style=\"box-sizing: border-box; position: relative; width: 950px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 100%; max-width: 100%;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Refund Policy:</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Below is a brief summary of the salient provisions of the Privacy Policy of using this site, and does not constitute the full Privacy Policy of use.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Using this site implies that you accept the Privacy Policy and agree to be bound by them. If you do not agree to these terms, you must not use or access this site.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Use this site only for the purpose intended, and do not infringe on the rights of other persons while using this site. If we become aware of any abuse of the site, we may have to block access to the site, or to a specific user where applicable.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">These Privacy Policy also refer to other documents such as the Privacy Policy, Shipping Policy and Returns Policy. You are required to familiarize yourself with these documents as they govern your use of this site.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Where required, you must provide correct and accurate information, and ensure that it is up to date at all times.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">This site is owned and operated by Al Haramain Perfumes in the United Arab Emirates. Shipping of products to other countries may be available, but additional charges may apply.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">This site may not be available from time to time for maintenance or upgrades.</p></div></div></div><br>', 1, 1, 1, '2020-05-22 02:44:34', '2020-05-22 02:44:34'),
(5, 'Online Shopping', 'online_shopping', '<div class=\"col-md-12\" style=\"box-sizing: border-box; position: relative; width: 950px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 100%; max-width: 100%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">At Ulta Beauty, we have been visionaries since day one. Seeing possibilities is what we did when we first created All Things Beauty, All in One Place™ — a store experience that connected with how beauty lovers actually shopped. And it forever changed the game.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><img src=\"http://localhost/myfrag/public/website/img/about/1.jpg\" alt=\"\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 445px; margin-bottom: 20px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Store Growth</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Since opening our first store in 1990, Ulta Beauty has grown to become the largest U.S. beauty retailer and the premier beauty destination for cosmetics, fragrance, skin care products, hair care products and salon services.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><img src=\"http://localhost/myfrag/public/website/img/about/2.jpg\" alt=\"\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 445px; margin-bottom: 20px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Limitless Assortment</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">You will find more than 25,000 products from approximately 500 beauty brands across all categories and price points, including our private label Ulta Beauty Collection.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><img src=\"http://localhost/myfrag/public/website/img/about/3.jpg\" alt=\"\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 445px; margin-bottom: 20px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Store Growth</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Since opening our first store in 1990, Ulta Beauty has grown to become the largest U.S. beauty retailer and the premier beauty destination for cosmetics, fragrance, skin care products, hair care products and salon services.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><img src=\"http://localhost/myfrag/public/website/img/about/4.jpg\" alt=\"\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 445px; margin-bottom: 20px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Limitless Assortment</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">You will find more than 25,000 products from approximately 500 beauty brands across all categories and price points, including our private label Ulta Beauty Collection.</p></div></div><br>', 1, 1, 1, '2020-05-22 02:44:34', '2020-05-22 02:44:34');
INSERT INTO `all_pages` (`id`, `name`, `slug`, `details`, `active_status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(6, 'How To Shop', 'how_to_shop', '<div class=\"col-md-12\" style=\"box-sizing: border-box; position: relative; width: 950px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 100%; max-width: 100%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">At Ulta Beauty, we have been visionaries since day one. Seeing possibilities is what we did when we first created All Things Beauty, All in One Place™ — a store experience that connected with how beauty lovers actually shopped. And it forever changed the game.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h4 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.5rem;\">How Do I Create A shop.alharamainperfumes.com Account?</h4><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Click on ‘Log In’ link at the top right of the page on desktop. (You can find this in Mobile Menu on the top of the mobile site).</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Since opening our first store in 1990, Ulta Beauty has grown to become the largest U.S. beauty retailer and the premier beauty destination for cosmetics, fragrance, skin care products, hair care products and salon services.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h4 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.5rem;\">Why Do I Have To Verify My Phone Number?</h4><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Click on ‘Log In’ link at the top right of the page on desktop. (You can find this in Mobile Menu on the top of the mobile site).</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Since opening our first store in 1990, Ulta Beauty has grown to become the largest U.S. beauty retailer and the premier beauty destination for cosmetics, fragrance, skin care products, hair care products and salon services.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h4 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.5rem;\">Do You Have A Showroom? Where Is Your Store?</h4><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Click on ‘Log In’ link at the top right of the page on desktop. (You can find this in Mobile Menu on the top of the mobile site).</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Since opening our first store in 1990, Ulta Beauty has grown to become the largest U.S. beauty retailer and the premier beauty destination for cosmetics, fragrance, skin care products, hair care products and salon services.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><img src=\"http://localhost/myfrag/public/website/img/about/4.jpg\" alt=\"\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 445px; margin-bottom: 20px;\"><h4 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.5rem;\">Why Login And What Does It Mean??</h4><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Click on ‘Log In’ link at the top right of the page on desktop. (You can find this in Mobile Menu on the top of the mobile site).</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Since opening our first store in 1990, Ulta Beauty has grown to become the largest U.S. beauty retailer and the premier beauty destination for cosmetics, fragrance, skin care products, hair care products and salon services.</p></div></div><br>', 1, 1, 1, '2020-05-22 02:44:34', '2020-05-22 02:44:34'),
(7, 'About', 'about', '<div class=\"section_padding\" style=\"box-sizing: border-box; padding-top: 120px; padding-bottom: 120px; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"container\" style=\"box-sizing: border-box; width: 1140px; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; max-width: 1140px;\"><div class=\"row justify-content-center\" style=\"box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; -webkit-box-pack: center !important; justify-content: center !important;\"><div class=\"col-lg-10\" style=\"box-sizing: border-box; position: relative; width: 950px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 83.3333%; max-width: 83.3333%;\"><div class=\"row\" style=\"box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px;\"><div class=\"col-md-12\" style=\"box-sizing: border-box; position: relative; width: 950px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 100%; max-width: 100%;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">At Ulta Beauty, we have been visionaries since day one. Seeing possibilities is what we did when we first created All Things Beauty, All in One Place™ — a store experience that connected with how beauty lovers actually shopped. And it forever changed the game.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><img src=\"http://localhost/myfrag/public/website/img/about/1.jpg\" alt=\"\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 445px; margin-bottom: 20px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Store Growth</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Since opening our first store in 1990, Ulta Beauty has grown to become the largest U.S. beauty retailer and the premier beauty destination for cosmetics, fragrance, skin care products, hair care products and salon services.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><img src=\"http://localhost/myfrag/public/website/img/about/2.jpg\" alt=\"\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 445px; margin-bottom: 20px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Limitless Assortment</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">You will find more than 25,000 products from approximately 500 beauty brands across all categories and price points, including our private label Ulta Beauty Collection.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><img src=\"http://localhost/myfrag/public/website/img/about/3.jpg\" alt=\"\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 445px; margin-bottom: 20px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Store Growth</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Since opening our first store in 1990, Ulta Beauty has grown to become the largest U.S. beauty retailer and the premier beauty destination for cosmetics, fragrance, skin care products, hair care products and salon services.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><img src=\"http://localhost/myfrag/public/website/img/about/4.jpg\" alt=\"\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 445px; margin-bottom: 20px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Limitless Assortment</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">You will find more than 25,000 products from approximately 500 beauty brands across all categories and price points, including our private label Ulta Beauty Collection.</p></div></div></div></div></div></div></div><div class=\"section_padding gray-bg\" style=\"box-sizing: border-box; padding-top: 120px; padding-bottom: 120px; background: rgb(243, 243, 243); color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"container\" style=\"box-sizing: border-box; width: 1140px; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; max-width: 1140px;\"><div class=\"row justify-content-center\" style=\"box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; -webkit-box-pack: center !important; justify-content: center !important;\"><div class=\"col-lg-10\" style=\"box-sizing: border-box; position: relative; width: 950px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 83.3333%; max-width: 83.3333%;\"><div class=\"row\" style=\"box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px;\"><div class=\"col-md-12\" style=\"box-sizing: border-box; position: relative; width: 950px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 100%; max-width: 100%;\"><div class=\"section-title\" style=\"box-sizing: border-box; margin-bottom: 60px; position: relative;\"><h2 class=\"text-center mb-20\" style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 700; color: rgb(28, 28, 28); font-size: 42px; text-align: center !important;\">Our Guests</h2><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\"><strong style=\"box-sizing: border-box; font-weight: bolder;\">Pretty possibilities</strong>. Ulta Beauty is committed to offering our guests unrivaled ways to be beautiful in an environment that provides the thrill of exploration and the delight of discovery.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\"><strong style=\"box-sizing: border-box; font-weight: bolder;\">Look, shop, play—reward yourself!</strong><span>&nbsp;</span>With our free Ultamate Rewards loyalty program, guests sign up and earn points for every dollar spent on products, beauty services and at ulta.com—then put those points toward future in-store or online purchases. They also get exclusive offers, discounts and even a free birthday gift. It is our way of showing how beauty loves them back.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\">\n            <img src=\"http://localhost/myfrag/public/website/img/about/1.jpg\" alt=\"\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 445px; margin-bottom: 20px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Store Growth</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Since opening our first store in 1990, Ulta Beauty has grown to become the largest U.S. beauty retailer and the premier beauty destination for cosmetics, fragrance, skin care products, hair care products and salon services.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><img src=\"http://localhost/myfrag/public/website/img/about/2.jpg\" alt=\"\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 445px; margin-bottom: 20px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Limitless Assortment</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">You will find more than 25,000 products from approximately 500 beauty brands across all categories and price points, including our private label Ulta Beauty Collection.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><img src=\"http://localhost/myfrag/public/website/img/about/3.jpg\" alt=\"\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 445px; margin-bottom: 20px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Store Growth</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Since opening our first store in 1990, Ulta Beauty has grown to become the largest U.S. beauty retailer and the premier beauty destination for cosmetics, fragrance, skin care products, hair care products and salon services.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><img src=\"http://localhost/myfrag/public/website/img/about/4.jpg\" alt=\"\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 445px; margin-bottom: 20px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Limitless Assortment</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">You will find more than 25,000 products from approximately 500 beauty brands across all categories and price points, including our private label Ulta Beauty Collection.</p></div></div></div></div></div></div></div><br>', 1, 1, 1, '2020-05-22 02:44:34', '2020-05-22 02:44:34'),
(8, 'Charitable-Giving', 'charitable_giving', '<div class=\"col-md-12\" style=\"box-sizing: border-box; position: relative; width: 950px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 100%; max-width: 100%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(243, 243, 243); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"section-title\" style=\"box-sizing: border-box; margin-bottom: 60px; position: relative;\"><h2 class=\"text-center mb-20\" style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 700; color: rgb(28, 28, 28); font-size: 42px; text-align: center !important;\">Our Guests</h2><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\"><strong style=\"box-sizing: border-box; font-weight: bolder;\">Pretty possibilities</strong>. Ulta Beauty is committed to offering our guests unrivaled ways to be beautiful in an environment that provides the thrill of exploration and the delight of discovery.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\"><strong style=\"box-sizing: border-box; font-weight: bolder;\">Look, shop, play—reward yourself!</strong><span>&nbsp;</span>With our free Ultamate Rewards loyalty program, guests sign up and earn points for every dollar spent on products, beauty services and at ulta.com—then put those points toward future in-store or online purchases. They also get exclusive offers, discounts and even a free birthday gift. It\'s our way of showing how beauty loves them back.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(243, 243, 243); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><img src=\"http://localhost/myfrag/public/website/img/about/1.jpg\" alt=\"\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 445px; margin-bottom: 20px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Store Growth</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Since opening our first store in 1990, Ulta Beauty has grown to become the largest U.S. beauty retailer and the premier beauty destination for cosmetics, fragrance, skin care products, hair care products and salon services.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(243, 243, 243); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><img src=\"http://localhost/myfrag/public/website/img/about/2.jpg\" alt=\"\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 445px; margin-bottom: 20px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Limitless Assortment</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">You\'ll find more than 25,000 products from approximately 500 beauty brands across all categories and price points, including our private label Ulta Beauty Collection.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(243, 243, 243); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><img src=\"http://localhost/myfrag/public/website/img/about/3.jpg\" alt=\"\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 445px; margin-bottom: 20px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Store Growth</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Since opening our first store in 1990, Ulta Beauty has grown to become the largest U.S. beauty retailer and the premier beauty destination for cosmetics, fragrance, skin care products, hair care products and salon services.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(243, 243, 243); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><img src=\"http://localhost/myfrag/public/website/img/about/4.jpg\" alt=\"\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 445px; margin-bottom: 20px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Limitless Assortment</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">You\'ll find more than 25,000 products from approximately 500 beauty brands across all categories and price points, including our private label Ulta Beauty Collection.</p></div></div><br>', 1, 1, 1, '2020-05-22 02:44:34', '2020-05-22 03:21:45'),
(9, 'Online Community', 'online_community', '<div class=\"col-md-12\" style=\"box-sizing: border-box; position: relative; width: 950px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 100%; max-width: 100%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">At Ulta Beauty, we have been visionaries since day one. Seeing possibilities is what we did when we first created All Things Beauty, All in One Place™ — a store experience that connected with how beauty lovers actually shopped. And it forever changed the game.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><img src=\"http://localhost/myfrag/public/website/img/about/1.jpg\" alt=\"\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 445px; margin-bottom: 20px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Store Growth</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Since opening our first store in 1990, Ulta Beauty has grown to become the largest U.S. beauty retailer and the premier beauty destination for cosmetics, fragrance, skin care products, hair care products and salon services.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><img src=\"http://localhost/myfrag/public/website/img/about/2.jpg\" alt=\"\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 445px; margin-bottom: 20px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Limitless Assortment</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">You will find more than 25,000 products from approximately 500 beauty brands across all categories and price points, including our private label Ulta Beauty Collection.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><img src=\"http://localhost/myfrag/public/website/img/about/3.jpg\" alt=\"\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 445px; margin-bottom: 20px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Store Growth</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Since opening our first store in 1990, Ulta Beauty has grown to become the largest U.S. beauty retailer and the premier beauty destination for cosmetics, fragrance, skin care products, hair care products and salon services.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><img src=\"http://localhost/myfrag/public/website/img/about/4.jpg\" alt=\"\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 445px; margin-bottom: 20px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Limitless Assortment</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">You will find more than 25,000 products from approximately 500 beauty brands across all categories and price points, including our private label Ulta Beauty Collection.</p></div></div><br>', 1, 1, 1, '2020-05-22 02:44:34', '2020-05-22 02:44:34'),
(10, '100% Authentication', 'authentication', '<div class=\"row\" style=\"box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"col-md-12 col-sm-12\" style=\"box-sizing: border-box; position: relative; width: 950px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 100%; max-width: 100%;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h4 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.5rem;\">100% Authentication:</h4><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Below is a brief summary of the salient provisions of the Privacy Policy of using this site, and does not constitute the full Privacy Policy of use.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Using this site implies that you accept the Privacy Policy and agree to be bound by them. If you do not agree to these terms, you must not use or access this site.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Use this site only for the purpose intended, and do not infringe on the rights of other persons while using this site. If we become aware of any abuse of the site, we may have to block access to the site, or to a specific user where applicable.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">These Privacy Policy also refer to other documents such as the Privacy Policy, Shipping Policy and Returns Policy. You are required to familiarize yourself with these documents as they govern your use of this site.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Where required, you must provide correct and accurate information, and ensure that it is up to date at all times.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">This site is owned and operated by Al Haramain Perfumes in the United Arab Emirates. Shipping of products to other countries may be available, but additional charges may apply.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">This site may not be available from time to time for maintenance or upgrades.</p></div></div></div>', 1, 1, 1, '2020-05-22 02:44:34', '2020-05-22 02:44:34'),
(11, 'Reward Points Program', 'reward_points', '<div class=\"row\" style=\"box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"col-md-12 col-sm-12\" style=\"box-sizing: border-box; position: relative; width: 950px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 100%; max-width: 100%;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h4 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.5rem;\">Reward Points Program:</h4><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Below is a brief summary of the salient provisions of the Privacy Policy of using this site, and does not constitute the full Privacy Policy of use.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Using this site implies that you accept the Privacy Policy and agree to be bound by them. If you do not agree to these terms, you must not use or access this site.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Use this site only for the purpose intended, and do not infringe on the rights of other persons while using this site. If we become aware of any abuse of the site, we may have to block access to the site, or to a specific user where applicable.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">These Privacy Policy also refer to other documents such as the Privacy Policy, Shipping Policy and Returns Policy. You are required to familiarize yourself with these documents as they govern your use of this site.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Where required, you must provide correct and accurate information, and ensure that it is up to date at all times.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">This site is owned and operated by Al Haramain Perfumes in the United Arab Emirates. Shipping of products to other countries may be available, but additional charges may apply.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">This site may not be available from time to time for maintenance or upgrades.</p></div></div></div>', 1, 1, 1, '2020-05-22 02:44:34', '2020-05-22 03:09:08');
INSERT INTO `all_pages` (`id`, `name`, `slug`, `details`, `active_status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(12, 'Request Fragrance', 'fragrance', '<div class=\"col-md-12\" style=\"box-sizing: border-box; position: relative; width: 950px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 100%; max-width: 100%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">At Ulta Beauty, we have been visionaries since day one. Seeing possibilities is what we did when we first created All Things Beauty, All in One Place™ — a store experience that connected with how beauty lovers actually shopped. And it forever changed the game.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h4 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.5rem;\">How Do I Create A shop.alharamainperfumes.com Account?</h4><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Click on ‘Log In’ link at the top right of the page on desktop. (You can find this in Mobile Menu on the top of the mobile site).</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Since opening our first store in 1990, Ulta Beauty has grown to become the largest U.S. beauty retailer and the premier beauty destination for cosmetics, fragrance, skin care products, hair care products and salon services.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h4 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.5rem;\">Why Do I Have To Verify My Phone Number?</h4><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Click on ‘Log In’ link at the top right of the page on desktop. (You can find this in Mobile Menu on the top of the mobile site).</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Since opening our first store in 1990, Ulta Beauty has grown to become the largest U.S. beauty retailer and the premier beauty destination for cosmetics, fragrance, skin care products, hair care products and salon services.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h4 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.5rem;\">Do You Have A Showroom? Where Is Your Store?</h4><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Click on ‘Log In’ link at the top right of the page on desktop. (You can find this in Mobile Menu on the top of the mobile site).</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Since opening our first store in 1990, Ulta Beauty has grown to become the largest U.S. beauty retailer and the premier beauty destination for cosmetics, fragrance, skin care products, hair care products and salon services.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><img src=\"http://localhost/myfrag/public/website/img/about/4.jpg\" alt=\"\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 445px; margin-bottom: 20px;\"><h4 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.5rem;\">Why Login And What Does It Mean??</h4><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Click on ‘Log In’ link at the top right of the page on desktop. (You can find this in Mobile Menu on the top of the mobile site).</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Since opening our first store in 1990, Ulta Beauty has grown to become the largest U.S. beauty retailer and the premier beauty destination for cosmetics, fragrance, skin care products, hair care products and salon services.</p></div></div><br>', 1, 1, 1, '2020-05-22 02:44:34', '2020-05-22 02:44:34'),
(13, 'Subscription Agreement', 'subscription_agreement', '<div class=\"col-md-12\" style=\"box-sizing: border-box; position: relative; width: 950px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 100%; max-width: 100%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">At Ulta Beauty, we have been visionaries since day one. Seeing possibilities is what we did when we first created All Things Beauty, All in One Place™ — a store experience that connected with how beauty lovers actually shopped. And it forever changed the game.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Store Growth</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Since opening our first store in 1990, Ulta Beauty has grown to become the largest U.S. beauty retailer and the premier beauty destination for cosmetics, fragrance, skin care products, hair care products and salon services.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Limitless Assortment</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">You will find more than 25,000 products from approximately 500 beauty brands across all categories and price points, including our private label Ulta Beauty Collection.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Store Growth</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Since opening our first store in 1990, Ulta Beauty has grown to become the largest U.S. beauty retailer and the premier beauty destination for cosmetics, fragrance, skin care products, hair care products and salon services.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Limitless Assortment</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">You will find more than 25,000 products from approximately 500 beauty brands across all categories and price points, including our private label Ulta Beauty Collection.</p></div></div><br>', 1, 1, 1, '2020-05-22 02:44:34', '2020-05-22 02:44:34'),
(14, 'Accessibility', 'accessibility', '<div class=\"col-md-12\" style=\"box-sizing: border-box; position: relative; width: 950px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 100%; max-width: 100%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">At Ulta Beauty, we have been visionaries since day one. Seeing possibilities is what we did when we first created All Things Beauty, All in One Place™ — a store experience that connected with how beauty lovers actually shopped. And it forever changed the game.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Store Growth</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Since opening our first store in 1990, Ulta Beauty has grown to become the largest U.S. beauty retailer and the premier beauty destination for cosmetics, fragrance, skin care products, hair care products and salon services.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Limitless Assortment</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">You will find more than 25,000 products from approximately 500 beauty brands across all categories and price points, including our private label Ulta Beauty Collection.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Store Growth</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Since opening our first store in 1990, Ulta Beauty has grown to become the largest U.S. beauty retailer and the premier beauty destination for cosmetics, fragrance, skin care products, hair care products and salon services.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Limitless Assortment</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">You will find more than 25,000 products from approximately 500 beauty brands across all categories and price points, including our private label Ulta Beauty Collection.</p></div></div><br>', 1, 1, 1, '2020-05-22 02:44:34', '2020-05-22 02:44:34'),
(15, 'User Agreement', 'user_agreement', '<div class=\"col-md-12\" style=\"box-sizing: border-box; position: relative; width: 950px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 100%; max-width: 100%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">At Ulta Beauty, we have been visionaries since day one. Seeing possibilities is what we did when we first created All Things Beauty, All in One Place™ — a store experience that connected with how beauty lovers actually shopped. And it forever changed the game.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Store Growth</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Since opening our first store in 1990, Ulta Beauty has grown to become the largest U.S. beauty retailer and the premier beauty destination for cosmetics, fragrance, skin care products, hair care products and salon services.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Limitless Assortment</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">You will find more than 25,000 products from approximately 500 beauty brands across all categories and price points, including our private label Ulta Beauty Collection.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Store Growth</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Since opening our first store in 1990, Ulta Beauty has grown to become the largest U.S. beauty retailer and the premier beauty destination for cosmetics, fragrance, skin care products, hair care products and salon services.</p></div></div><div class=\"col-md-6 col-sm-6\" style=\"box-sizing: border-box; position: relative; width: 475px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h3 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 20px; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.75rem;\">Limitless Assortment</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">You will find more than 25,000 products from approximately 500 beauty brands across all categories and price points, including our private label Ulta Beauty Collection.</p></div></div>', 1, 1, 1, '2020-05-22 02:44:34', '2020-05-22 03:38:29');

-- --------------------------------------------------------

--
-- Table structure for table `ask_questions`
--

CREATE TABLE `ask_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ask_questions`
--

INSERT INTO `ask_questions` (`id`, `question_title`, `message`, `created_at`, `updated_at`) VALUES
(5, 'Type your question below. We\'ll find the best answers for you.', 'cdsccdc', '2020-06-04 05:21:08', '2020-06-04 05:21:08'),
(6, 'Type your question below. We\'ll find the best answers for you.', 'dewwedwd', '2020-06-04 05:23:18', '2020-06-04 05:23:18'),
(7, 'Type your question below. We\'ll find the best answers for you.', 'feferfefewfewf', '2020-06-04 05:24:57', '2020-06-04 05:24:57'),
(8, 'Type your question below. We\'ll find the best answers for you.', 'fefewfweff', '2020-06-04 05:26:56', '2020-06-04 05:26:56'),
(9, 'Type your question below. We\'ll find the best answers for you.', 'fefwefwfwe', '2020-06-04 05:29:56', '2020-06-04 05:29:56'),
(10, 'Type your question below. We\'ll find the best answers for you.', 'vdfsdvdsvvvds', '2020-06-04 05:30:20', '2020-06-04 05:30:20'),
(11, 'Type your question below. We\'ll find the best answers for you.', 'ferfefefe', '2020-06-04 05:31:07', '2020-06-04 05:31:07'),
(12, 'gregegerge', 'gegergef', '2020-06-04 05:31:21', '2020-06-04 05:31:21'),
(13, 'gregegerge', 'ewdsededwd', '2020-06-04 05:35:17', '2020-06-04 05:35:17'),
(14, 'ewfdewf', 'fefefef', '2020-06-04 05:36:09', '2020-06-04 05:36:09'),
(15, 'Type your question below. We\'ll find the best answers for you.', 'ertteefer', '2020-06-04 05:36:42', '2020-06-04 05:36:42'),
(16, 'Type your question below. We\'ll find the best answers for you.', 'xdsewfwefw', '2020-06-04 05:37:37', '2020-06-04 05:37:37'),
(17, 'Type your question below. We\'ll find the best answers for you.', 'geefefewr', '2020-06-04 05:39:20', '2020-06-04 05:39:20'),
(18, 'gregegerge', 'freerffr', '2020-06-04 05:42:52', '2020-06-04 05:42:52'),
(19, 'Type your question below. We\'ll find the best answers for you.', 'Type Your Question Below. We\'ll Find The Best Answers For You.Type Your Question Below. We\'ll Find The Best Answers For You.Type Your Question Below. We\'ll Find The Best Answers For You.Type ', '2020-06-04 09:15:20', '2020-06-04 09:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Size', '2020-02-24 05:55:07', '2020-02-24 05:55:07'),
(2, 'Fabric', '2020-02-24 05:55:13', '2020-02-24 05:55:13');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL DEFAULT 1,
  `published` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `photo`, `url`, `position`, `published`, `created_at`, `updated_at`) VALUES
(4, 'uploads/banners/banner.jpg', '#', 1, 1, '2019-03-12 05:58:23', '2020-06-04 04:14:37'),
(5, 'uploads/banners/banner.jpg', '#', 1, 1, '2019-03-12 05:58:41', '2019-03-12 05:58:57'),
(6, 'uploads/banners/banner.jpg', '#', 2, 1, '2019-03-12 05:58:52', '2020-06-04 04:17:14'),
(7, 'uploads/banners/banner.jpg', '#', 2, 1, '2019-05-26 05:16:38', '2019-05-26 05:17:34'),
(8, 'uploads/banners/banner.jpg', '#', 2, 1, '2019-06-11 05:00:06', '2019-06-11 05:00:27'),
(9, 'uploads/banners/banner.jpg', '#', 1, 1, '2019-06-11 05:00:15', '2019-06-11 05:00:29'),
(10, 'uploads/banners/banner.jpg', '#', 1, 1, '2019-06-11 05:00:24', '2020-06-04 04:16:59');

-- --------------------------------------------------------

--
-- Table structure for table `base_notes`
--

CREATE TABLE `base_notes` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `base_notes`
--

INSERT INTO `base_notes` (`id`, `category_id`, `name`, `image`, `banner_image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, '2', 'Base Acai berry', 'uploads/basenotes/pE4zyFzFJCx7P1NmmJDSQBnyEoIViWG4g5a9jwi8.jpeg', 'uploads/basenotes/pE4zyFzFJCx7P1NmmJDSQBnyEoIViWG4g5a9jwi8.jpeg', 'Description', 1, '2020-05-10 12:04:25', '2020-05-10 12:04:25'),
(3, '2', 'Base Karen', 'uploads/basenotes/N9WFyYZkRJDcyismnUwppTlazjnIjW2fdnhJtK4Y.jpeg', 'uploads/basenotes/N9WFyYZkRJDcyismnUwppTlazjnIjW2fdnhJtK4Y.jpeg', 'Description', 1, '2020-05-10 12:04:25', '2020-05-11 10:21:35'),
(4, '1', 'Base Tcai berry', 'uploads/basenotes/FlcTdiJJ1K7yNR2Ln0lTH9ZGuflDTuYv0kj3GHPB.jpeg', 'uploads/basenotes/FlcTdiJJ1K7yNR2Ln0lTH9ZGuflDTuYv0kj3GHPB.jpeg', 'Description', 1, '2020-05-10 12:04:25', '2020-05-10 12:04:25');

-- --------------------------------------------------------

--
-- Table structure for table `base_note_product`
--

CREATE TABLE `base_note_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `base_note_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `base_note_product`
--

INSERT INTO `base_note_product` (`id`, `product_id`, `base_note_id`, `created_at`, `updated_at`) VALUES
(5, 16, 2, '2020-05-10 12:48:22', '2020-05-10 12:48:22'),
(6, 16, 3, '2020-05-10 12:48:22', '2020-05-10 12:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `blend_subscriptions`
--

CREATE TABLE `blend_subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `my_blend` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscription` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `my_blend_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscription_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blend_subscriptions`
--

INSERT INTO `blend_subscriptions` (`id`, `my_blend`, `subscription`, `my_blend_url`, `subscription_url`, `created_at`, `updated_at`) VALUES
(8, 'uploads/blendsub/AJUfQqL3hvNiPeL5eBldslpB6Y8RSFSXhpkV5HFo.jpeg', 'uploads/blendsub/ig92MxypYMxHRARPclIhF35ueasIZnX2wDkgOU0T.jpeg', 'https://www.youtube.com/watch?v=QkOXi6b0hus', 'http://localhost/myfrag/admin/my-blend-subscription/', '2020-06-04 00:55:24', '2020-06-04 01:07:02');

-- --------------------------------------------------------

--
-- Table structure for table `bloggers`
--

CREATE TABLE `bloggers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_readers` int(11) DEFAULT NULL,
  `vlog_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_subscribes` int(11) DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bloggers`
--

INSERT INTO `bloggers` (`id`, `name`, `email`, `country`, `blog_link`, `no_of_readers`, `vlog_link`, `no_of_subscribes`, `facebook`, `twitter`, `pinterest`, `instagram`, `message`, `portfolio`, `file`, `active_status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Rayhan Mahmud', '1000157@daffodil.ac', 'Bangladesh', 'tjfghjfg', 22, 'jghjghj', 11, 'www.facebook.com', 'www.twitter.com', 'hgfhfg', 'fgghfg', 'fthfhg', NULL, NULL, 1, 1, 1, '2020-05-19 11:23:39', '2020-05-19 11:23:39'),
(2, 'Xandra Rodgers', 'fitigypucy@mailinator.net', 'Quo ut rerum molliti', 'Id in mollit aut cil', 0, 'Proident dolor quo', 0, 'Suscipit tenetur exp', 'Animi modi aut vero', 'Veniam harum dolore', 'Ex libero duis irure', 'Rerum consequatur p', NULL, NULL, 1, 1, 1, '2020-05-23 04:16:50', '2020-05-23 04:16:50');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_status` tinyint(4) NOT NULL COMMENT 'active=1,in-active=0',
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `title`, `slug`, `image`, `description`, `active_status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'vdvdf', 'vdvdf', 'uploads/blogs/post/WEEsXTSmuRHg2TQUFRBzzZYTROriSbPhvSmP2nmt.jpeg', 'ferferfefefefef', 1, 12, 12, '2020-06-02 12:49:06', '2020-06-02 12:49:06');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `active_status` tinyint(4) NOT NULL COMMENT 'active=1,in-active=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `category_name`, `created_by`, `updated_by`, `active_status`, `created_at`, `updated_at`) VALUES
(1, 'Perfume', 12, 12, 1, '2020-06-02 12:48:41', '2020-06-02 12:48:41');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_notify_post_by_mail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_notify_pcomment_by_mail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_comments`
--

INSERT INTO `blog_comments` (`id`, `blog_id`, `user_id`, `comments`, `name`, `email`, `url`, `is_notify_post_by_mail`, `is_notify_pcomment_by_mail`, `created_at`, `updated_at`) VALUES
(1, 1, 12, 'fefef', 'Abid hossain', 'sabid@gmail.com', 'http://localhost/damadami/bidder/wishlist-create', '1', '1', '2020-06-03 04:01:09', '2020-06-03 04:01:09');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `top` int(1) NOT NULL DEFAULT 0,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brands_activity` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `brands_parent_company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `logo`, `top`, `slug`, `meta_title`, `meta_description`, `country`, `brands_activity`, `brands_parent_company`, `about`, `website`, `created_at`, `updated_at`) VALUES
(4, 'Demo Brand', 'uploads/brands/zpTLbmKao5ffvjpnfCMdejcgvbUB9AiSfQD2VsPS.webp', 0, 'Demo-Brand-lrw1J', NULL, 'It Is Description It Is Description It Is Description It Is Description It Is Description', 'USA', 'Gadget Supplier', 'Disilva', 'It Is About It Is About It Is About It Is About It Is About It Is About It Is About', 'www.example.com', '2020-04-26 09:51:27', '2020-04-26 09:51:27'),
(5, 'Brand Two X', 'uploads/brands/ZrqEdZDYsBxTrbFxPcOVjjXX2rzRVmP4qwSbJiIT.jpeg', 0, 'Brand-Two-vGqlF', NULL, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'England', 'Garments Product', 'Addidas', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'www.demosite1.com', '2020-04-26 09:55:39', '2020-05-11 21:13:28'),
(6, 'Sigma', 'uploads/brands/ZrqEdZDYsBxTrbFxPcOVjjXX2rzRVmP4qwSbJiIT.jpeg', 0, 'Brand-Two-vGqlF', NULL, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'England', 'Garments Product', 'Addidas', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'www.demosite1.com', '2020-04-26 09:55:39', '2020-05-11 21:13:28'),
(7, 'Alpha', 'uploads/brands/zpTLbmKao5ffvjpnfCMdejcgvbUB9AiSfQD2VsPS.webp', 0, 'Demo-Brand-lrw1J', NULL, 'It Is Description It Is Description It Is Description It Is Description It Is Description', 'USA', 'Gadget Supplier', 'Disilva', 'It Is About It Is About It Is About It Is About It Is About It Is About It Is About', 'www.example.com', '2020-04-26 09:51:27', '2020-04-26 09:51:27');

-- --------------------------------------------------------

--
-- Table structure for table `business_settings`
--

CREATE TABLE `business_settings` (
  `id` int(11) NOT NULL,
  `type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `business_settings`
--

INSERT INTO `business_settings` (`id`, `type`, `value`, `created_at`, `updated_at`) VALUES
(1, 'home_default_currency', '1', '2018-10-16 01:35:52', '2019-01-28 01:26:53'),
(2, 'system_default_currency', '1', '2018-10-16 01:36:58', '2020-01-26 04:22:13'),
(3, 'currency_format', '1', '2018-10-17 03:01:59', '2018-10-17 03:01:59'),
(4, 'symbol_format', '1', '2018-10-17 03:01:59', '2019-01-20 02:10:55'),
(5, 'no_of_decimals', '3', '2018-10-17 03:01:59', '2020-03-04 00:57:16'),
(6, 'product_activation', '1', '2018-10-28 01:38:37', '2019-02-04 01:11:41'),
(7, 'vendor_system_activation', '1', '2018-10-28 07:44:16', '2019-02-04 01:11:38'),
(8, 'show_vendors', '1', '2018-10-28 07:44:47', '2019-02-04 01:11:13'),
(9, 'paypal_payment', '0', '2018-10-28 07:45:16', '2019-01-31 05:09:10'),
(10, 'stripe_payment', '0', '2018-10-28 07:45:47', '2018-11-14 01:51:51'),
(11, 'cash_payment', '1', '2018-10-28 07:46:05', '2019-01-24 03:40:18'),
(12, 'payumoney_payment', '0', '2018-10-28 07:46:27', '2019-03-05 05:41:36'),
(13, 'best_selling', '1', '2018-12-24 08:13:44', '2019-02-14 05:29:13'),
(14, 'paypal_sandbox', '0', '2019-01-16 12:44:18', '2019-01-16 12:44:18'),
(15, 'sslcommerz_sandbox', '1', '2019-01-16 12:44:18', '2019-03-14 00:07:26'),
(16, 'sslcommerz_payment', '0', '2019-01-24 09:39:07', '2019-01-29 06:13:46'),
(17, 'vendor_commission', '20', '2019-01-31 06:18:04', '2019-04-13 06:49:26'),
(18, 'verification_form', '[{\"type\":\"text\",\"label\":\"Your name\"},{\"type\":\"text\",\"label\":\"Shop name\"},{\"type\":\"text\",\"label\":\"Email\"},{\"type\":\"text\",\"label\":\"License No\"},{\"type\":\"text\",\"label\":\"Full Address\"},{\"type\":\"text\",\"label\":\"Phone Number\"},{\"type\":\"file\",\"label\":\"Tax Papers\"}]', '2019-02-03 11:36:58', '2019-02-16 06:14:42'),
(19, 'google_analytics', '0', '2019-02-06 12:22:35', '2019-02-06 12:22:35'),
(20, 'facebook_login', '1', '2019-02-07 12:51:59', '2019-02-08 19:41:15'),
(21, 'google_login', '1', '2019-02-07 12:52:10', '2019-02-08 19:41:14'),
(22, 'twitter_login', '1', '2019-02-07 12:52:20', '2019-02-08 02:32:56'),
(23, 'payumoney_payment', '1', '2019-03-05 11:38:17', '2019-03-05 11:38:17'),
(24, 'payumoney_sandbox', '1', '2019-03-05 11:38:17', '2019-03-05 05:39:18'),
(36, 'facebook_chat', '0', '2019-04-15 11:45:04', '2019-04-15 11:45:04'),
(37, 'email_verification', '0', '2019-04-30 07:30:07', '2019-04-30 07:30:07'),
(38, 'wallet_system', '0', '2019-05-19 08:05:44', '2019-05-19 02:11:57'),
(39, 'coupon_system', '0', '2019-06-11 09:46:18', '2019-06-11 09:46:18'),
(40, 'current_version', '2.2', '2019-06-11 09:46:18', '2019-06-11 09:46:18'),
(41, 'instamojo_payment', '0', '2019-07-06 09:58:03', '2019-07-06 09:58:03'),
(42, 'instamojo_sandbox', '1', '2019-07-06 09:58:43', '2019-07-06 09:58:43'),
(43, 'razorpay', '0', '2019-07-06 09:58:43', '2019-07-06 09:58:43'),
(44, 'paystack', '0', '2019-07-21 13:00:38', '2019-07-21 13:00:38'),
(45, 'pickup_point', '0', '2019-10-17 11:50:39', '2019-10-17 11:50:39'),
(46, 'maintenance_mode', '0', '2019-10-17 11:51:04', '2019-10-17 11:51:04'),
(47, 'voguepay', '0', '2019-10-17 11:51:24', '2019-10-17 11:51:24'),
(48, 'voguepay_sandbox', '0', '2019-10-17 11:51:38', '2019-10-17 11:51:38'),
(50, 'category_wise_commission', '0', '2020-01-21 07:22:47', '2020-01-21 07:22:47'),
(51, 'conversation_system', '1', '2020-01-21 07:23:21', '2020-01-21 07:23:21'),
(52, 'guest_checkout_active', '1', '2020-01-22 07:36:38', '2020-01-22 07:36:38'),
(53, 'facebook_pixel', '0', '2020-01-22 11:43:58', '2020-01-22 11:43:58'),
(54, 'linkedin_login', '1', '2019-02-07 12:52:20', '2019-02-08 02:32:56'),
(55, 'instagram_login', '1', '2019-02-07 12:52:20', '2019-02-08 02:32:56'),
(56, 'pinterest_login', '1', '2019-02-07 12:52:20', '2019-02-08 02:32:56');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `commision_rate` double(8,2) NOT NULL DEFAULT 0.00,
  `banner` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `featured` int(1) NOT NULL DEFAULT 0,
  `top` int(1) NOT NULL DEFAULT 0,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `commision_rate`, `banner`, `icon`, `featured`, `top`, `slug`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Demo category 1', 0.00, 'uploads/categories/banner/category-banner.jpg', 'uploads/categories/icon/KjJP9wuEZNL184XVUk3S7EiZ8NnBN99kiU4wdvp3.png', 1, 1, 'Demo-category-1', 'Demo category 1', NULL, '2019-08-06 12:06:58', '2019-08-06 06:06:58'),
(2, 'Demo category 2', 0.00, 'uploads/categories/banner/category-banner.jpg', 'uploads/categories/icon/h9XhWwI401u6sRoLITEk9SUMRAlWN8moGrpPfS6I.png', 1, 0, 'Demo-category-2', 'Demo category 2', NULL, '2019-08-06 12:06:58', '2019-08-06 06:06:58'),
(4, 'Accesories', 0.00, 'uploads/categories/banner/ZrZ2PccpKvI7CpxsDwav6f8UAEn24RlCzM8R5bAD.jpeg', 'uploads/categories/icon/ymZensA3XidNyVWGH2JHZjd3Ueq010CbfFoFWrZf.png', 1, 0, 'Accesories-JNvKk', 'Accesories products', 'Description', '2020-06-04 14:37:37', '2020-06-04 08:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'IndianRed', '#CD5C5C', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(2, 'LightCoral', '#F08080', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(3, 'Salmon', '#FA8072', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(4, 'DarkSalmon', '#E9967A', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(5, 'LightSalmon', '#FFA07A', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(6, 'Crimson', '#DC143C', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(7, 'Red', '#FF0000', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(8, 'FireBrick', '#B22222', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(9, 'DarkRed', '#8B0000', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(10, 'Pink', '#FFC0CB', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(11, 'LightPink', '#FFB6C1', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(12, 'HotPink', '#FF69B4', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(13, 'DeepPink', '#FF1493', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(14, 'MediumVioletRed', '#C71585', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(15, 'PaleVioletRed', '#DB7093', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(16, 'LightSalmon', '#FFA07A', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(17, 'Coral', '#FF7F50', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(18, 'Tomato', '#FF6347', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(19, 'OrangeRed', '#FF4500', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(20, 'DarkOrange', '#FF8C00', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(21, 'Orange', '#FFA500', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(22, 'Gold', '#FFD700', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(23, 'Yellow', '#FFFF00', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(24, 'LightYellow', '#FFFFE0', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(25, 'LemonChiffon', '#FFFACD', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(26, 'LightGoldenrodYellow', '#FAFAD2', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(27, 'PapayaWhip', '#FFEFD5', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(28, 'Moccasin', '#FFE4B5', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(29, 'PeachPuff', '#FFDAB9', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(30, 'PaleGoldenrod', '#EEE8AA', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(31, 'Khaki', '#F0E68C', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(32, 'DarkKhaki', '#BDB76B', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(33, 'Lavender', '#E6E6FA', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(34, 'Thistle', '#D8BFD8', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(35, 'Plum', '#DDA0DD', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(36, 'Violet', '#EE82EE', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(37, 'Orchid', '#DA70D6', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(38, 'Fuchsia', '#FF00FF', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(39, 'Magenta', '#FF00FF', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(40, 'MediumOrchid', '#BA55D3', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(41, 'MediumPurple', '#9370DB', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(42, 'Amethyst', '#9966CC', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(43, 'BlueViolet', '#8A2BE2', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(44, 'DarkViolet', '#9400D3', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(45, 'DarkOrchid', '#9932CC', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(46, 'DarkMagenta', '#8B008B', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(47, 'Purple', '#800080', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(48, 'Indigo', '#4B0082', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(49, 'SlateBlue', '#6A5ACD', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(50, 'DarkSlateBlue', '#483D8B', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(51, 'MediumSlateBlue', '#7B68EE', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(52, 'GreenYellow', '#ADFF2F', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(53, 'Chartreuse', '#7FFF00', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(54, 'LawnGreen', '#7CFC00', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(55, 'Lime', '#00FF00', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(56, 'LimeGreen', '#32CD32', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(57, 'PaleGreen', '#98FB98', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(58, 'LightGreen', '#90EE90', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(59, 'MediumSpringGreen', '#00FA9A', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(60, 'SpringGreen', '#00FF7F', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(61, 'MediumSeaGreen', '#3CB371', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(62, 'SeaGreen', '#2E8B57', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(63, 'ForestGreen', '#228B22', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(64, 'Green', '#008000', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(65, 'DarkGreen', '#006400', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(66, 'YellowGreen', '#9ACD32', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(67, 'OliveDrab', '#6B8E23', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(68, 'Olive', '#808000', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(69, 'DarkOliveGreen', '#556B2F', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(70, 'MediumAquamarine', '#66CDAA', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(71, 'DarkSeaGreen', '#8FBC8F', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(72, 'LightSeaGreen', '#20B2AA', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(73, 'DarkCyan', '#008B8B', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(74, 'Teal', '#008080', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(75, 'Aqua', '#00FFFF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(76, 'Cyan', '#00FFFF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(77, 'LightCyan', '#E0FFFF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(78, 'PaleTurquoise', '#AFEEEE', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(79, 'Aquamarine', '#7FFFD4', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(80, 'Turquoise', '#40E0D0', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(81, 'MediumTurquoise', '#48D1CC', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(82, 'DarkTurquoise', '#00CED1', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(83, 'CadetBlue', '#5F9EA0', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(84, 'SteelBlue', '#4682B4', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(85, 'LightSteelBlue', '#B0C4DE', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(86, 'PowderBlue', '#B0E0E6', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(87, 'LightBlue', '#ADD8E6', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(88, 'SkyBlue', '#87CEEB', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(89, 'LightSkyBlue', '#87CEFA', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(90, 'DeepSkyBlue', '#00BFFF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(91, 'DodgerBlue', '#1E90FF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(92, 'CornflowerBlue', '#6495ED', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(93, 'MediumSlateBlue', '#7B68EE', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(94, 'RoyalBlue', '#4169E1', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(95, 'Blue', '#0000FF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(96, 'MediumBlue', '#0000CD', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(97, 'DarkBlue', '#00008B', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(98, 'Navy', '#000080', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(99, 'MidnightBlue', '#191970', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(100, 'Cornsilk', '#FFF8DC', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(101, 'BlanchedAlmond', '#FFEBCD', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(102, 'Bisque', '#FFE4C4', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(103, 'NavajoWhite', '#FFDEAD', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(104, 'Wheat', '#F5DEB3', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(105, 'BurlyWood', '#DEB887', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(106, 'Tan', '#D2B48C', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(107, 'RosyBrown', '#BC8F8F', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(108, 'SandyBrown', '#F4A460', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(109, 'Goldenrod', '#DAA520', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(110, 'DarkGoldenrod', '#B8860B', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(111, 'Peru', '#CD853F', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(112, 'Chocolate', '#D2691E', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(113, 'SaddleBrown', '#8B4513', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(114, 'Sienna', '#A0522D', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(115, 'Brown', '#A52A2A', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(116, 'Maroon', '#800000', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(117, 'White', '#FFFFFF', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(118, 'Snow', '#FFFAFA', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(119, 'Honeydew', '#F0FFF0', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(120, 'MintCream', '#F5FFFA', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(121, 'Azure', '#F0FFFF', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(122, 'AliceBlue', '#F0F8FF', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(123, 'GhostWhite', '#F8F8FF', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(124, 'WhiteSmoke', '#F5F5F5', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(125, 'Seashell', '#FFF5EE', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(126, 'Beige', '#F5F5DC', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(127, 'OldLace', '#FDF5E6', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(128, 'FloralWhite', '#FFFAF0', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(129, 'Ivory', '#FFFFF0', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(130, 'AntiqueWhite', '#FAEBD7', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(131, 'Linen', '#FAF0E6', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(132, 'LavenderBlush', '#FFF0F5', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(133, 'MistyRose', '#FFE4E1', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(134, 'Gainsboro', '#DCDCDC', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(135, 'LightGrey', '#D3D3D3', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(136, 'Silver', '#C0C0C0', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(137, 'DarkGray', '#A9A9A9', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(138, 'Gray', '#808080', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(139, 'DimGray', '#696969', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(140, 'LightSlateGray', '#778899', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(141, 'SlateGray', '#708090', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(142, 'DarkSlateGray', '#2F4F4F', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(143, 'Black', '#000000', '2018-11-05 02:12:30', '2018-11-05 02:12:30');

-- --------------------------------------------------------

--
-- Table structure for table `comment_replies`
--

CREATE TABLE `comment_replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `comment_replies` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `compare_lists`
--

CREATE TABLE `compare_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `captcha` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `portfolio`, `file`, `captcha`, `active_status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'Moana Huffman', 'tiso@mailinator.net', 'Minim laborum id tem', 'Velit est laboriosa', NULL, NULL, 'dgfdgd', 1, 1, 1, '2020-05-19 13:06:11', '2020-05-19 13:06:11');

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `title` varchar(1000) COLLATE utf32_unicode_ci DEFAULT NULL,
  `sender_viewed` int(1) NOT NULL DEFAULT 1,
  `receiver_viewed` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `code` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Republic'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guinea'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Islands (Malvinas)'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France, Metropolitan'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesia'),
(76, 'TF', 'French Southern Territories'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GK', 'Guernsey'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'IM', 'Isle of Man'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic Republic of)'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JE', 'Jersey'),
(109, 'JM', 'Jamaica'),
(110, 'JP', 'Japan'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea, Democratic People\'s Republic of'),
(116, 'KR', 'Korea, Republic of'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People\'s Democratic Republic'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libyan Arab Jamahiriya'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macau'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'TY', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia, Federated States of'),
(144, 'MD', 'Moldova, Republic of'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'AN', 'Netherlands Antilles'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'MP', 'Northern Mariana Islands'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'RE', 'Reunion'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russian Federation'),
(183, 'RW', 'Rwanda'),
(184, 'KN', 'Saint Kitts and Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'VC', 'Saint Vincent and the Grenadines'),
(187, 'WS', 'Samoa'),
(188, 'SM', 'San Marino'),
(189, 'ST', 'Sao Tome and Principe'),
(190, 'SA', 'Saudi Arabia'),
(191, 'SN', 'Senegal'),
(192, 'RS', 'Serbia'),
(193, 'SC', 'Seychelles'),
(194, 'SL', 'Sierra Leone'),
(195, 'SG', 'Singapore'),
(196, 'SK', 'Slovakia'),
(197, 'SI', 'Slovenia'),
(198, 'SB', 'Solomon Islands'),
(199, 'SO', 'Somalia'),
(200, 'ZA', 'South Africa'),
(201, 'GS', 'South Georgia South Sandwich Islands'),
(202, 'SS', 'South Sudan'),
(203, 'ES', 'Spain'),
(204, 'LK', 'Sri Lanka'),
(205, 'SH', 'St. Helena'),
(206, 'PM', 'St. Pierre and Miquelon'),
(207, 'SD', 'Sudan'),
(208, 'SR', 'Suriname'),
(209, 'SJ', 'Svalbard and Jan Mayen Islands'),
(210, 'SZ', 'Swaziland'),
(211, 'SE', 'Sweden'),
(212, 'CH', 'Switzerland'),
(213, 'SY', 'Syrian Arab Republic'),
(214, 'TW', 'Taiwan'),
(215, 'TJ', 'Tajikistan'),
(216, 'TZ', 'Tanzania, United Republic of'),
(217, 'TH', 'Thailand'),
(218, 'TG', 'Togo'),
(219, 'TK', 'Tokelau'),
(220, 'TO', 'Tonga'),
(221, 'TT', 'Trinidad and Tobago'),
(222, 'TN', 'Tunisia'),
(223, 'TR', 'Turkey'),
(224, 'TM', 'Turkmenistan'),
(225, 'TC', 'Turks and Caicos Islands'),
(226, 'TV', 'Tuvalu'),
(227, 'UG', 'Uganda'),
(228, 'UA', 'Ukraine'),
(229, 'AE', 'United Arab Emirates'),
(230, 'GB', 'United Kingdom'),
(231, 'US', 'United States'),
(232, 'UM', 'United States minor outlying islands'),
(233, 'UY', 'Uruguay'),
(234, 'UZ', 'Uzbekistan'),
(235, 'VU', 'Vanuatu'),
(236, 'VA', 'Vatican City State'),
(237, 'VE', 'Venezuela'),
(238, 'VN', 'Vietnam'),
(239, 'VG', 'Virgin Islands (British)'),
(240, 'VI', 'Virgin Islands (U.S.)'),
(241, 'WF', 'Wallis and Futuna Islands'),
(242, 'EH', 'Western Sahara'),
(243, 'YE', 'Yemen'),
(244, 'ZR', 'Zaire'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe'),
(247, 'AF', 'Afghanistan'),
(248, 'AL', 'Albania'),
(249, 'DZ', 'Algeria'),
(250, 'DS', 'American Samoa'),
(251, 'AD', 'Andorra'),
(252, 'AO', 'Angola'),
(253, 'AI', 'Anguilla'),
(254, 'AQ', 'Antarctica'),
(255, 'AG', 'Antigua and Barbuda'),
(256, 'AR', 'Argentina'),
(257, 'AM', 'Armenia'),
(258, 'AW', 'Aruba'),
(259, 'AU', 'Australia'),
(260, 'AT', 'Austria'),
(261, 'AZ', 'Azerbaijan'),
(262, 'BS', 'Bahamas'),
(263, 'BH', 'Bahrain'),
(264, 'BD', 'Bangladesh'),
(265, 'BB', 'Barbados'),
(266, 'BY', 'Belarus'),
(267, 'BE', 'Belgium'),
(268, 'BZ', 'Belize'),
(269, 'BJ', 'Benin'),
(270, 'BM', 'Bermuda'),
(271, 'BT', 'Bhutan'),
(272, 'BO', 'Bolivia'),
(273, 'BA', 'Bosnia and Herzegovina'),
(274, 'BW', 'Botswana'),
(275, 'BV', 'Bouvet Island'),
(276, 'BR', 'Brazil'),
(277, 'IO', 'British Indian Ocean Territory'),
(278, 'BN', 'Brunei Darussalam'),
(279, 'BG', 'Bulgaria'),
(280, 'BF', 'Burkina Faso'),
(281, 'BI', 'Burundi'),
(282, 'KH', 'Cambodia'),
(283, 'CM', 'Cameroon'),
(284, 'CA', 'Canada'),
(285, 'CV', 'Cape Verde'),
(286, 'KY', 'Cayman Islands'),
(287, 'CF', 'Central African Republic'),
(288, 'TD', 'Chad'),
(289, 'CL', 'Chile'),
(290, 'CN', 'China'),
(291, 'CX', 'Christmas Island'),
(292, 'CC', 'Cocos (Keeling) Islands'),
(293, 'CO', 'Colombia'),
(294, 'KM', 'Comoros'),
(295, 'CG', 'Congo'),
(296, 'CK', 'Cook Islands');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8_unicode_ci NOT NULL,
  `discount` double(8,2) NOT NULL,
  `discount_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` int(15) NOT NULL,
  `end_date` int(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupon_usages`
--

CREATE TABLE `coupon_usages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `symbol` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `exchange_rate` double(10,5) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `code` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `symbol`, `exchange_rate`, `status`, `code`, `created_at`, `updated_at`) VALUES
(1, 'U.S. Dollar', '$', 1.00000, 1, 'USD', '2018-10-09 11:35:08', '2018-10-17 05:50:52'),
(2, 'Australian Dollar', '$', 1.28000, 1, 'AUD', '2018-10-09 11:35:08', '2019-02-04 05:51:55'),
(5, 'Brazilian Real', 'R$', 3.25000, 1, 'BRL', '2018-10-09 11:35:08', '2018-10-17 05:51:00'),
(6, 'Canadian Dollar', '$', 1.27000, 1, 'CAD', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(7, 'Czech Koruna', 'Kč', 20.65000, 1, 'CZK', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(8, 'Danish Krone', 'kr', 6.05000, 1, 'DKK', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(9, 'Euro', '€', 0.85000, 1, 'EUR', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(10, 'Hong Kong Dollar', '$', 7.83000, 1, 'HKD', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(11, 'Hungarian Forint', 'Ft', 255.24000, 1, 'HUF', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(12, 'Israeli New Sheqel', '₪', 3.48000, 1, 'ILS', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(13, 'Japanese Yen', '¥', 107.12000, 1, 'JPY', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(14, 'Malaysian Ringgit', 'RM', 3.91000, 1, 'MYR', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(15, 'Mexican Peso', '$', 18.72000, 1, 'MXN', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(16, 'Norwegian Krone', 'kr', 7.83000, 1, 'NOK', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(17, 'New Zealand Dollar', '$', 1.38000, 1, 'NZD', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(18, 'Philippine Peso', '₱', 52.26000, 1, 'PHP', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(19, 'Polish Zloty', 'zł', 3.39000, 1, 'PLN', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(20, 'Pound Sterling', '£', 0.72000, 1, 'GBP', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(21, 'Russian Ruble', 'руб', 55.93000, 1, 'RUB', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(22, 'Singapore Dollar', '$', 1.32000, 1, 'SGD', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(23, 'Swedish Krona', 'kr', 8.19000, 1, 'SEK', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(24, 'Swiss Franc', 'CHF', 0.94000, 1, 'CHF', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(26, 'Thai Baht', '฿', 31.39000, 1, 'THB', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(27, 'Taka', '৳', 84.00000, 1, 'BDT', '2018-10-09 11:35:08', '2018-12-02 05:16:13'),
(28, 'Indian Rupee', 'Rs', 68.45000, 1, 'Rupee', '2019-07-07 10:33:46', '2019-07-07 10:33:46');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 8, '2019-08-01 10:35:09', '2019-08-01 10:35:09'),
(5, 27, '2020-06-03 05:14:24', '2020-06-03 05:14:24');

-- --------------------------------------------------------

--
-- Table structure for table `distributors`
--

CREATE TABLE `distributors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avg_annual_sale` double DEFAULT NULL,
  `no_of_employee` int(11) DEFAULT NULL,
  `establishment_year` int(11) DEFAULT NULL,
  `distribution_area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_delarship` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `captcha` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `distributors`
--

INSERT INTO `distributors` (`id`, `email`, `contact_person`, `position`, `phone`, `company_name`, `postal_area`, `country`, `company_phone`, `company_email`, `avg_annual_sale`, `no_of_employee`, `establishment_year`, `distribution_area`, `current_delarship`, `captcha`, `active_status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'pice@mailinator.com', 'Rayhan', 'qupykakabu@mailinator.net', 'wehe@mailinator.com', 'komap@mailinator.com', 'bilocinycy@mailinator.com', 'nybopuwegi@mailinator.com', 'wenihobane@mailinator.com', 'xeboxafu@mailinator.com', 0, 0, 0, 'sotynip@mailinator.net', 'garabe@mailinator.com', 'gdfgd', 1, 1, 1, '2020-05-19 11:36:01', '2020-05-19 11:36:01'),
(2, 'qoheqiz@mailinator.net', 'zibehy@mailinator.net', 'nizeb@mailinator.com', 'quwacerug@mailinator.com', 'rokacum@mailinator.com', 'dyfavu@mailinator.net', 'joxu@mailinator.net', 'gynumim@mailinator.net', 'hurorybo@mailinator.com', 0, 0, 0, 'zoxinecek@mailinator.com', 'ryxoxusa@mailinator.com', 'hfgh', 1, 1, 1, '2020-05-23 04:17:35', '2020-05-23 04:17:35'),
(3, 'puhuvylil@mailinator.net', 'revenipol@mailinator.com', 'bedodeg@mailinator.net', 'selito@mailinator.com', 'bojivo@mailinator.com', 'kigu@mailinator.com', 'gozowujob@mailinator.com', 'rasolifag@mailinator.com', 'jokaqozak@mailinator.com', 0, 0, 0, 'jyxaposa@mailinator.net', 'baxom@mailinator.com', 'gdfg', 1, 1, 1, '2020-05-26 12:10:46', '2020-05-26 12:10:46');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_view` int(11) DEFAULT NULL,
  `active_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `description`, `category_id`, `image`, `number_of_view`, `active_status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Prof. Ramiro Gerlach', 'Iste aperiam ipsum voluptates nostrum occaecati modi voluptatem aut. Voluptates sunt quia et veniam. Pariatur ut corrupti occaecati qui. Doloremque similique quia sed qui quo.', 1, '/frontend/footer/faq.jpg', 6, 1, 1, 1, '2020-05-29 07:52:38', '2020-05-29 07:54:57'),
(2, 'Camden Tremblay I', 'Occaecati dolore at dolores facilis sunt qui odit. Molestiae veritatis ullam accusantium iste soluta. Magni ut dolorum sed nobis nesciunt. Quia eligendi sapiente est at molestiae omnis veritatis.', 2, '/frontend/footer/faq.jpg', 6, 1, 1, 1, '2020-05-29 07:52:38', '2020-06-03 07:25:56'),
(3, 'Benny Hoeger', 'Accusantium voluptate officia repellendus voluptas nulla quia. Labore et quia laudantium et sunt iure et. Sint voluptatem tenetur cum molestias. Ipsum aperiam eius incidunt porro autem placeat.', 3, '/frontend/footer/faq.jpg', 5, 1, 1, 1, '2020-05-29 07:52:38', '2020-05-29 07:52:38'),
(4, 'Dr. Joana Berge V', 'Saepe blanditiis perferendis ad asperiores quam quis. Eveniet et ex repudiandae molestiae consequuntur error.', 4, '/frontend/footer/faq.jpg', 5, 1, 1, 1, '2020-05-29 07:52:38', '2020-05-29 07:52:38'),
(5, 'Bridie Heathcote', 'Dolorem et et nam modi eveniet. Omnis illo qui qui. Nobis error quasi officiis quis rerum sit consectetur. Neque ad necessitatibus voluptatem corporis in aut.', 5, '/frontend/footer/faq.jpg', 5, 1, 1, 1, '2020-05-29 07:52:38', '2020-05-29 07:52:38'),
(6, 'Chaim Bartell', 'Dolorem facilis et necessitatibus facilis. Sapiente excepturi veniam velit distinctio rerum repudiandae. Aliquid eos repudiandae fugiat nisi delectus ducimus quis. Nemo eos id ut.', 6, '/frontend/footer/faq.jpg', 5, 1, 1, 1, '2020-05-29 07:52:38', '2020-05-29 07:52:38');

-- --------------------------------------------------------

--
-- Table structure for table `faq_categories`
--

CREATE TABLE `faq_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial` int(11) DEFAULT NULL,
  `active_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_categories`
--

INSERT INTO `faq_categories` (`id`, `name`, `serial`, `active_status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'General', 1, 1, 1, 1, '2020-05-26 11:24:51', '2020-05-29 00:51:34'),
(2, 'My Account', 2, 1, 1, 1, '2020-05-26 11:24:51', '2020-05-26 11:33:45'),
(3, 'Membership & Subscribing', 3, 1, 1, 1, '2020-05-26 11:24:51', '2020-05-26 11:24:51'),
(4, 'Billing & Payment', 4, 1, 1, 1, '2020-05-26 11:24:51', '2020-05-26 11:24:51'),
(5, 'Shipping & Tracking', 5, 1, 1, 1, '2020-05-26 11:24:51', '2020-05-26 11:24:51'),
(6, 'Returns', 6, 1, 1, 1, '2020-05-26 11:24:51', '2020-05-26 11:24:51');

-- --------------------------------------------------------

--
-- Table structure for table `faq_helpfuls`
--

CREATE TABLE `faq_helpfuls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `faq_id` int(11) DEFAULT NULL,
  `is_helpful` int(11) DEFAULT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` int(11) DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `about_source` int(11) DEFAULT NULL,
  `product_using_time` int(11) DEFAULT NULL,
  `interested_product` int(11) DEFAULT NULL,
  `other_source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_new_release` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suggest_product` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `overall_experience` int(11) DEFAULT NULL,
  `impressed_product` int(11) DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `captcha` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedback` int(11) DEFAULT NULL,
  `active_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `gender`, `nationality`, `phone`, `email`, `age`, `about_source`, `product_using_time`, `interested_product`, `other_source`, `about_new_release`, `suggest_product`, `overall_experience`, `impressed_product`, `message`, `captcha`, `feedback`, `active_status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Leah Medina', 0, 'Expedita ut ullam er', '+1 (524) 933-8645', 'seqatico@mailinator.com', 1, 3, 4, 4, 'Do neque in in commo', 'Quidem nihil ab pari', 'Animi deserunt poss', 1, 3, 'Adipisicing id vita', 'trtry', NULL, 1, 1, 1, '2020-05-22 04:28:19', '2020-05-22 04:28:19'),
(2, 'Selma Rojas', 1, 'Quis et perferendis', '+1 (665) 373-8007', 'xadevivu@mailinator.net', 2, 1, 5, 5, 'Est alias eiusmod l', 'Duis voluptatem dol', 'Nobis asperiores dol', 1, 2, 'Nemo Nam reiciendis', 'gfhfh', NULL, 1, 1, 1, '2020-05-22 04:53:36', '2020-05-22 04:53:36'),
(3, 'Signe Kidd', 0, 'Dolore accusantium l', '+1 (987) 308-8978', 'vijo@mailinator.com', 2, 4, 1, 3, 'Exercitation nulla q', 'Dicta asperiores eu', 'Ut amet dolore adip', 4, 5, 'Saepe est eum ullamc', 'gdfgd', NULL, 1, 1, 1, '2020-05-23 04:19:42', '2020-05-23 04:19:42');

-- --------------------------------------------------------

--
-- Table structure for table `first_sliders`
--

CREATE TABLE `first_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `third_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forth_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `first_sliders`
--

INSERT INTO `first_sliders` (`id`, `first_description`, `second_description`, `first_image`, `second_image`, `third_image`, `forth_image`, `is_active`, `created_at`, `updated_at`) VALUES
(6, 'First DescriptionFirst DescriptionFirst DescriptionFirst Description\r\nFirst DescriptionFirst DescriptionFirst DescriptionFirst DescriptionFirst DescriptionFirst DescriptionFirst DescriptionFirst DescriptionFirst DescriptionFirst DescriptionFirst DescriptionFirst Description', 'Second DescriptionSecond DescriptionSecond DescriptionSecond Description First DescriptionFirst DescriptionFirst DescriptionFirst DescriptionFirst DescriptionFirst DescriptionFirst DescriptionFirst DescriptionFirst DescriptionFirst DescriptionFirst DescriptionFirst Description', 'uploads/slider/first_slider/mfQdEckKXLV0GHWJ2ZnmHXATAFvsSXzlv1zB13hS.png', 'uploads/slider/first_slider/v2rOhcXhRkIGftbLtZfWdLYMCykycflvyIpAHYCX.png', 'uploads/slider/first_slider/1iQy63h8JaiG8YrFbIbyLMIvHkkdVlJkh8xgThTx.png', 'uploads/slider/first_slider/8oAb08Ia03zOQVbqnhulSKlvGYRAyRt2mioOEIqH.png', '1', '2020-06-04 03:42:14', '2020-06-04 04:29:08');

-- --------------------------------------------------------

--
-- Table structure for table `flash_deals`
--

CREATE TABLE `flash_deals` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_date` int(20) DEFAULT NULL,
  `end_date` int(20) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `featured` int(1) NOT NULL DEFAULT 0,
  `background_color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text_color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flash_deal_products`
--

CREATE TABLE `flash_deal_products` (
  `id` int(11) NOT NULL,
  `flash_deal_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `discount` double(8,2) DEFAULT 0.00,
  `discount_type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` int(11) NOT NULL,
  `frontend_color` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default',
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_login_background` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_login_sidebar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtube` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google_plus` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pinterest` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `snapchart` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tiktok` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subs_head` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subs_middle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subs_bottom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `frontend_color`, `logo`, `admin_logo`, `admin_login_background`, `admin_login_sidebar`, `favicon`, `site_name`, `address`, `description`, `phone`, `email`, `facebook`, `instagram`, `twitter`, `youtube`, `google_plus`, `linkedin`, `pinterest`, `snapchart`, `tiktok`, `subs_head`, `subs_middle`, `subs_bottom`, `created_at`, `updated_at`) VALUES
(1, '3', 'uploads/logo/hkSzY3JQR95ZM2xzBVKyVg5Yzy1i2ueXQSFDFA8j.png', 'uploads/admin_logo/wCgHrz0Q5QoL1yu4vdrNnQIr4uGuNL48CXfcxOuS.png', 'uploads/admin_login_background/mwSGBw5V7UcYJYZIHK3quGzfPoJFDrU457sdctZN.png', 'uploads/admin_login_sidebar/POZZJIyRh1iVjcvo1EFjQ9kqc8kDvj7cipra06rX.png', 'uploads/favicon/uHdGidSaRVzvPgDj6JFtntMqzJkwDk9659233jrb.png', 'myfragranceme', 'myfragranceme', 'Active eCommerce CMS is a Multi vendor system is such a platform to build a border less marketplace.', '01910077628', 'jmrashed@gmail.com', 'https://www.facebook.com', 'https://www.instagram.com', 'https://www.twitter.com', 'https://www.youtube.com', 'https://www.googleplus.com', 'https://www.linkedin.com', 'https://www.pinterest.com', 'https://www.snapchart.com', 'https://www.tiktok.com', 'Join with us. Subscribe to our mailing list', 'Be the first to know about our latest news , trends and offers straight your inbox.', 'We Will Never ever share your contact details with anyone', '2020-06-04 06:25:18', '2020-06-04 00:25:18');

-- --------------------------------------------------------

--
-- Table structure for table `header_tops`
--

CREATE TABLE `header_tops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `header_tops`
--

INSERT INTO `header_tops` (`id`, `name`, `title`, `details`, `active_status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Header Top', 'This is Title', '<div class=\"row\" style=\"box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"col-md-12 col-sm-12\" style=\"box-sizing: border-box; position: relative; width: 950px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 100%; max-width: 100%;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><h4 style=\"box-sizing: border-box; font-family: &quot;Nunito Sans&quot;, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; color: rgb(28, 28, 28); font-size: 1.5rem;\">Summary Details:</h4><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Below is a brief summary of the salient provisions of the Privacy Policy of using this site, and does not constitute the full Terms &amp; Conditions of use.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Using this site implies that you accept the Terms &amp; Conditions and agree to be bound by them. If you do not agree to these terms, you must not use or access this site.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Use this site only for the purpose intended, and do not infringe on the rights of other persons while using this site. If we become aware of any abuse of the site, we may have to block access to the site, or to a specific user where applicable.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">These Terms &amp; Conditions also refer to other documents such as the Terms &amp; Conditions, Shipping Policy and Returns Policy. You are required to familiarize yourself with these documents as they govern your use of this site.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Where required, you must provide correct and accurate information, and ensure that it is up to date at all times.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">This site is owned and operated by Al Haramain Perfumes in the United Arab Emirates. Shipping of products to other countries may be available, but additional charges may apply.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">This site may not be available from time to time for maintenance or upgrades.</p></div></div></div><div class=\"row\" style=\"box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"col-md-12 col-sm-12\" style=\"box-sizing: border-box; position: relative; width: 950px; min-height: 1px; padding-right: 15px; padding-left: 15px; -webkit-box-flex: 0; flex: 0 0 100%; max-width: 100%;\"><div class=\"single-about\" style=\"box-sizing: border-box; margin-bottom: 40px;\"><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Below is a brief summary of the salient provisions of the Terms &amp; Conditions of using this site, and does not constitute the full Terms &amp; Conditions of use.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Using this site implies that you accept the Terms &amp; Conditions and agree to be bound by them. If you do not agree to these terms, you must not use or access this site.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Use this site only for the purpose intended, and do not infringe on the rights of other persons while using this site. If we become aware of any abuse of the site, we may have to block access to the site, or to a specific user where applicable.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">These Terms &amp; Conditions also refer to other documents such as the Terms &amp; Conditions, Shipping Policy and Returns Policy. You are required to familiarize yourself with these documents as they govern your use of this site.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Where required, you must provide correct and accurate information, and ensure that it is up to date at all times.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">This site is owned and operated by Al Haramain Perfumes in the United Arab Emirates. Shipping of products to other countries may be available, but additional charges may apply.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 13px; font-size: 0.8125rem; font-weight: 400; line-height: 1.4rem; color: rgb(80, 80, 80); font-family: &quot;Nunito Sans&quot;, sans-serif;\">This site may not be available from time to time for maintenance or upgrades.</p></div></div></div>', 1, 1, 1, '2020-05-22 10:13:28', '2020-05-22 10:26:57');

-- --------------------------------------------------------

--
-- Table structure for table `home_categories`
--

CREATE TABLE `home_categories` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subsubcategories` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `home_categories`
--

INSERT INTO `home_categories` (`id`, `category_id`, `subsubcategories`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '[\"1\"]', 1, '2019-03-12 06:38:23', '2020-06-04 04:17:16'),
(2, 2, '[\"10\"]', 1, '2019-03-12 06:44:54', '2019-03-12 06:44:54');

-- --------------------------------------------------------

--
-- Table structure for table `ideas`
--

CREATE TABLE `ideas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` int(11) DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `about_source` int(11) DEFAULT NULL,
  `product_using_time` int(11) DEFAULT NULL,
  `interested_product` int(11) DEFAULT NULL,
  `other_source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_new_release` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suggest_product` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `overall_experience` int(11) DEFAULT NULL,
  `impressed_product` int(11) DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `captcha` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedback` int(11) DEFAULT NULL,
  `active_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ideas`
--

INSERT INTO `ideas` (`id`, `name`, `gender`, `nationality`, `phone`, `email`, `age`, `about_source`, `product_using_time`, `interested_product`, `other_source`, `about_new_release`, `suggest_product`, `overall_experience`, `impressed_product`, `message`, `captcha`, `feedback`, `active_status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Flavia Lancaster', 0, 'Facilis est sed quo', '+1 (258) 247-2413', 'wijafoto@mailinator.net', 1, NULL, 4, 3, 'Eum saepe est et num', 'Nisi sunt autem face', 'In at impedit place', 5, NULL, 'Nam quis eveniet ar', 'gfhfghfg', NULL, 1, 1, 1, '2020-05-19 12:06:47', '2020-05-19 12:06:47'),
(2, 'Gary Harrington', 0, 'Ipsam quis cillum si', '+1 (175) 867-7794', 'ricu@mailinator.net', 2, 2, 4, 1, 'Nesciunt similique', 'Fugit provident pr', 'Rerum id labore dol', 3, 3, 'Irure ut eligendi an', 'gfdgfd', NULL, 1, 1, 1, '2020-05-19 12:10:28', '2020-05-19 12:10:28'),
(3, 'Suki Hickman', 1, 'Aut omnis quod eos', '+1 (771) 321-7966', 'soxuha@mailinator.com', 3, 3, 5, 3, 'Cumque vero omnis au', 'Non eum proident ar', 'Qui quam omnis quam', 3, 4, 'Culpa illo ut accusa', 'hlkjhkjhl', NULL, 1, 1, 1, '2020-05-19 12:58:25', '2020-05-19 12:58:25'),
(4, 'Sloane Mcneil', 1, 'Dolore cum proident', '+1 (515) 957-8764', 'zazi@mailinator.com', 5, 3, 4, 2, 'Laborum culpa velit', 'Natus maxime ut labo', 'Repellendus Eum aut', 5, 5, 'Magni dolore soluta', 'gfhfghfg', NULL, 1, 1, 1, '2020-05-23 04:18:21', '2020-05-23 04:18:21');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `rtl` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`, `rtl`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', 0, '2019-01-20 12:13:20', '2019-01-20 12:13:20'),
(3, 'Bangla', 'bd', 0, '2019-02-17 06:35:37', '2019-02-18 06:49:51'),
(4, 'Arabic', 'sa', 1, '2019-04-28 18:34:12', '2019-04-28 18:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `conversation_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text COLLATE utf32_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `middle_notes`
--

CREATE TABLE `middle_notes` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `middle_notes`
--

INSERT INTO `middle_notes` (`id`, `category_id`, `name`, `image`, `banner_image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(29, '1', 'Mid Karen Vega', 'uploads/middlenotes/Ml5r5yJPwVmv0E2ykz5mMQ5uQKosQwWfsZEiax6S.jpeg', 'uploads/middlenotes/Ml5r5yJPwVmv0E2ykz5mMQ5uQKosQwWfsZEiax6S.jpeg', 'dasdasdas', 1, '2020-05-10 11:46:57', '2020-05-10 11:46:57'),
(30, '2', 'Mid Acai berry', 'uploads/middlenotes/pE4zyFzFJCx7P1NmmJDSQBnyEoIViWG4g5a9jwi8.jpeg', 'uploads/middlenotes/pE4zyFzFJCx7P1NmmJDSQBnyEoIViWG4g5a9jwi8.jpeg', 'Description', 1, '2020-05-10 11:46:57', '2020-05-10 11:46:57'),
(31, '3', 'Mid Karen Vega', 'uploads/middlenotes/N9WFyYZkRJDcyismnUwppTlazjnIjW2fdnhJtK4Y.jpeg', 'uploads/middlenotes/N9WFyYZkRJDcyismnUwppTlazjnIjW2fdnhJtK4Y.jpeg', 'Description', 1, '2020-05-10 11:46:57', '2020-05-10 11:46:57'),
(32, '2', 'Mid Tcai berry', 'uploads/middlenotes/FlcTdiJJ1K7yNR2Ln0lTH9ZGuflDTuYv0kj3GHPB.jpeg', 'uploads/middlenotes/FlcTdiJJ1K7yNR2Ln0lTH9ZGuflDTuYv0kj3GHPB.jpeg', 'Description', 1, '2020-05-10 11:46:57', '2020-05-10 11:46:57'),
(33, '1', 'Mid Alovere', 'uploads/middlenotes/plurBksBc3HswWEx0hyHsPJzCnOQ3r1l3H6J4hOV.jpeg', 'uploads/middlenotes/plurBksBc3HswWEx0hyHsPJzCnOQ3r1l3H6J4hOV.jpeg', 'deadasf adasda', 0, '2020-05-10 11:51:23', '2020-05-10 11:51:23'),
(35, '3', 'Chanel', 'uploads/middlenotes/gAkvKW7ugB3MDAI4QoHgLVDVxnaNCTvOGQVMLja3.jpeg', 'uploads/middlenotes/gAkvKW7ugB3MDAI4QoHgLVDVxnaNCTvOGQVMLja3.jpeg', 'dvdzvd dvsv aefva', 0, '2020-05-29 03:50:55', '2020-05-29 03:50:55'),
(36, '6', 'herbs', 'uploads/middlenotes/VtOdVgRHjnuiRWJKdFWfBk0wbVYG1tw9z7XPzzcb.jpeg', 'uploads/middlenotes/VtOdVgRHjnuiRWJKdFWfBk0wbVYG1tw9z7XPzzcb.jpeg', 'frfvrsg sfvrf', 0, '2020-05-29 03:51:26', '2020-05-29 03:51:26');

-- --------------------------------------------------------

--
-- Table structure for table `middle_note_product`
--

CREATE TABLE `middle_note_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `middle_note_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `middle_note_product`
--

INSERT INTO `middle_note_product` (`id`, `product_id`, `middle_note_id`, `created_at`, `updated_at`) VALUES
(4, 16, 29, '2020-05-10 12:48:22', '2020-05-10 12:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_05_05_160154_create_notes_table', 2),
(4, '2020_05_10_171056_create_top_notes_table', 3),
(5, '2020_05_10_171331_create_base_notes_table', 3),
(6, '2020_05_10_171359_create_middle_notes_table', 3),
(7, '2020_05_10_183744_create_base_note_product_table', 4),
(8, '2020_05_10_183811_create_middle_note_product_table', 4),
(9, '2020_05_10_183830_create_top_note_product_table', 4),
(10, '2020_05_19_142220_create_bloggers_table', 5),
(11, '2020_05_19_142929_create_contacts_table', 5),
(12, '2020_05_19_143107_create_distributors_table', 5),
(13, '2020_05_19_165514_create_ideas_table', 6),
(19, '2020_05_22_054033_create_all_pages_table', 7),
(20, '2020_05_22_095126_create_personal_requests_table', 8),
(21, '2020_05_22_101226_create_feedback_table', 9),
(22, '2020_05_22_153730_create_press_contacts_table', 10),
(23, '2020_05_22_160014_create_header_tops_table', 11),
(26, '2020_05_23_063114_create_press_lists_table', 12),
(28, '2020_05_23_063824_create_press_settings_table', 13),
(29, '2016_06_01_000001_create_oauth_auth_codes_table', 14),
(30, '2016_06_01_000002_create_oauth_access_tokens_table', 14),
(31, '2016_06_01_000003_create_oauth_refresh_tokens_table', 14),
(32, '2016_06_01_000004_create_oauth_clients_table', 14),
(33, '2016_06_01_000005_create_oauth_personal_access_clients_table', 14),
(36, '2020_05_26_151441_create_faq_categories_table', 15),
(37, '2020_05_28_180655_create_faqs_table', 16),
(38, '2020_05_29_081037_create_faq_helpfuls_table', 16),
(39, '2020_05_29_123211_create_recent_views_table', 16),
(41, '2020_05_29_135022_create_blog_categories_table', 17),
(42, '2020_05_29_151635_create_blogs_table', 17),
(44, '2020_05_30_105123_create_comment_replies_table', 17),
(45, '2020_06_02_085050_create_blend_subscriptions_table', 18),
(46, '2020_05_30_095559_create_blog_comments_table', 19),
(47, '2020_06_02_183112_create_compare_lists_table', 19),
(49, '2020_06_04_070115_create_first_sliders_table', 20),
(50, '2020_06_04_104100_create_ask_questions_table', 21);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `type`, `name`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 'Karen Vega', 'uploads/notes/Ml5r5yJPwVmv0E2ykz5mMQ5uQKosQwWfsZEiax6S.jpeg', 'dasdasdas', 0, '2020-05-06 12:07:56', '2020-05-06 12:07:56'),
(3, 2, 'Acai berry', 'uploads/notes/pE4zyFzFJCx7P1NmmJDSQBnyEoIViWG4g5a9jwi8.jpeg', 'Description', 0, '2020-05-06 12:10:31', '2020-05-06 12:10:31'),
(4, 1, 'Karen Vega', 'uploads/notes/N9WFyYZkRJDcyismnUwppTlazjnIjW2fdnhJtK4Y.jpeg', 'Description', 0, '2020-05-06 12:11:13', '2020-05-06 12:11:13'),
(5, 1, 'Tcai berry', 'uploads/notes/FlcTdiJJ1K7yNR2Ln0lTH9ZGuflDTuYv0kj3GHPB.jpeg', 'Description', 0, '2020-05-06 12:11:42', '2020-05-06 12:26:23');

-- --------------------------------------------------------

--
-- Table structure for table `notes_categories`
--

CREATE TABLE `notes_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `active_status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notes_categories`
--

INSERT INTO `notes_categories` (`id`, `name`, `image`, `description`, `active_status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'CITRUS SMELLS', 'uploads/notes_categories/1.jpeg', 'Fruity notes beyond citrus (which form a class of its own) have become so popular in recent years that they deserve a category of their own. Vegetable notes are more unusual, sometimes rendered through illusion: an example would be the turnip note that iris rhizome sometimes produces.\r\n\r\nAs a rule fruits and vegetables are resistant to distillation and extraction processes due to the very high percentage of water in their natural make-up, and they remain a reconstructed note in fragrances. Their effect ranges from the refreshing to the succulent, all the way to the musty and mysterious.\r\n\r\nFruits and vegetables provide a nuanced texture and a refreshing feel in fragrances. Fruits especially have been extremely popular in the floral fruity category in the 2000s, while peach and plum have been major components in classical perfumers\' \"bases\" (such as the famous Persicol) which produced many of the iconic fragrances of the first half of the 20th century.', 1, NULL, NULL, 1, 1),
(2, 'FRUITS, VEGETABLES AND NUTS ', 'uploads/notes_categories/2.jpeg', 'Fruity notes beyond citrus (which form a class of its own) have become so popular in recent years that they deserve a category of their own. Vegetable notes are more unusual, sometimes rendered through illusion: an example would be the turnip note that iris rhizome sometimes produces.\r\n\r\nAs a rule fruits and vegetables are resistant to distillation and extraction processes due to the very high percentage of water in their natural make-up, and they remain a reconstructed note in fragrances. Their effect ranges from the refreshing to the succulent, all the way to the musty and mysterious.\r\n\r\nFruits and vegetables provide a nuanced texture and a refreshing feel in fragrances. Fruits especially have been extremely popular in the floral fruity category in the 2000s, while peach and plum have been major components in classical perfumers\' \"bases\" (such as the famous Persicol) which produced many of the iconic fragrances of the first half of the 20th century.', 1, NULL, NULL, NULL, NULL),
(3, 'FLOWERS', 'uploads/notes_categories/3.jpeg', 'Fruity notes beyond citrus (which form a class of its own) have become so popular in recent years that they deserve a category of their own. Vegetable notes are more unusual, sometimes rendered through illusion: an example would be the turnip note that iris rhizome sometimes produces.\r\n\r\nAs a rule fruits and vegetables are resistant to distillation and extraction processes due to the very high percentage of water in their natural make-up, and they remain a reconstructed note in fragrances. Their effect ranges from the refreshing to the succulent, all the way to the musty and mysterious.\r\n\r\nFruits and vegetables provide a nuanced texture and a refreshing feel in fragrances. Fruits especially have been extremely popular in the floral fruity category in the 2000s, while peach and plum have been major components in classical perfumers\' \"bases\" (such as the famous Persicol) which produced many of the iconic fragrances of the first half of the 20th century.', 1, NULL, NULL, NULL, NULL),
(4, 'WHITE FLOWERS', 'uploads/notes_categories/4.jpeg', 'Fruity notes beyond citrus (which form a class of its own) have become so popular in recent years that they deserve a category of their own. Vegetable notes are more unusual, sometimes rendered through illusion: an example would be the turnip note that iris rhizome sometimes produces.\r\n\r\nAs a rule fruits and vegetables are resistant to distillation and extraction processes due to the very high percentage of water in their natural make-up, and they remain a reconstructed note in fragrances. Their effect ranges from the refreshing to the succulent, all the way to the musty and mysterious.\r\n\r\nFruits and vegetables provide a nuanced texture and a refreshing feel in fragrances. Fruits especially have been extremely popular in the floral fruity category in the 2000s, while peach and plum have been major components in classical perfumers\' \"bases\" (such as the famous Persicol) which produced many of the iconic fragrances of the first half of the 20th century.', 1, NULL, NULL, NULL, NULL),
(5, 'GREENS', 'uploads/notes_categories/5.jpeg', 'Fruity notes beyond citrus (which form a class of its own) have become so popular in recent years that they deserve a category of their own. Vegetable notes are more unusual, sometimes rendered through illusion: an example would be the turnip note that iris rhizome sometimes produces.\r\n\r\nAs a rule fruits and vegetables are resistant to distillation and extraction processes due to the very high percentage of water in their natural make-up, and they remain a reconstructed note in fragrances. Their effect ranges from the refreshing to the succulent, all the way to the musty and mysterious.\r\n\r\nFruits and vegetables provide a nuanced texture and a refreshing feel in fragrances. Fruits especially have been extremely popular in the floral fruity category in the 2000s, while peach and plum have been major components in classical perfumers\' \"bases\" (such as the famous Persicol) which produced many of the iconic fragrances of the first half of the 20th century.', 1, NULL, NULL, NULL, NULL),
(6, 'HERBS AND FOUGERES', 'uploads/notes_categories/6.jpeg', 'Fruity notes beyond citrus (which form a class of its own) have become so popular in recent years that they deserve a category of their own. Vegetable notes are more unusual, sometimes rendered through illusion: an example would be the turnip note that iris rhizome sometimes produces.\r\n\r\nAs a rule fruits and vegetables are resistant to distillation and extraction processes due to the very high percentage of water in their natural make-up, and they remain a reconstructed note in fragrances. Their effect ranges from the refreshing to the succulent, all the way to the musty and mysterious.\r\n\r\nFruits and vegetables provide a nuanced texture and a refreshing feel in fragrances. Fruits especially have been extremely popular in the floral fruity category in the 2000s, while peach and plum have been major components in classical perfumers\' \"bases\" (such as the famous Persicol) which produced many of the iconic fragrances of the first half of the 20th century.', 1, NULL, NULL, NULL, NULL),
(7, 'SPICES', 'uploads/notes_categories/7.jpeg', 'Fruity notes beyond citrus (which form a class of its own) have become so popular in recent years that they deserve a category of their own. Vegetable notes are more unusual, sometimes rendered through illusion: an example would be the turnip note that iris rhizome sometimes produces.\r\n\r\nAs a rule fruits and vegetables are resistant to distillation and extraction processes due to the very high percentage of water in their natural make-up, and they remain a reconstructed note in fragrances. Their effect ranges from the refreshing to the succulent, all the way to the musty and mysterious.\r\n\r\nFruits and vegetables provide a nuanced texture and a refreshing feel in fragrances. Fruits especially have been extremely popular in the floral fruity category in the 2000s, while peach and plum have been major components in classical perfumers\' \"bases\" (such as the famous Persicol) which produced many of the iconic fragrances of the first half of the 20th century.', 1, NULL, NULL, NULL, NULL),
(8, 'SWEETS AND GOURMAND SMELLS', 'uploads/notes_categories/8.jpeg', 'Fruity notes beyond citrus (which form a class of its own) have become so popular in recent years that they deserve a category of their own. Vegetable notes are more unusual, sometimes rendered through illusion: an example would be the turnip note that iris rhizome sometimes produces.\r\n\r\nAs a rule fruits and vegetables are resistant to distillation and extraction processes due to the very high percentage of water in their natural make-up, and they remain a reconstructed note in fragrances. Their effect ranges from the refreshing to the succulent, all the way to the musty and mysterious.\r\n\r\nFruits and vegetables provide a nuanced texture and a refreshing feel in fragrances. Fruits especially have been extremely popular in the floral fruity category in the 2000s, while peach and plum have been major components in classical perfumers\' \"bases\" (such as the famous Persicol) which produced many of the iconic fragrances of the first half of the 20th century.', 1, NULL, NULL, NULL, NULL),
(9, 'WOODS AND MOSSES', 'uploads/notes_categories/1.jpeg', 'Fruity notes beyond citrus (which form a class of its own) have become so popular in recent years that they deserve a category of their own. Vegetable notes are more unusual, sometimes rendered through illusion: an example would be the turnip note that iris rhizome sometimes produces.\r\n\r\nAs a rule fruits and vegetables are resistant to distillation and extraction processes due to the very high percentage of water in their natural make-up, and they remain a reconstructed note in fragrances. Their effect ranges from the refreshing to the succulent, all the way to the musty and mysterious.\r\n\r\nFruits and vegetables provide a nuanced texture and a refreshing feel in fragrances. Fruits especially have been extremely popular in the floral fruity category in the 2000s, while peach and plum have been major components in classical perfumers\' \"bases\" (such as the famous Persicol) which produced many of the iconic fragrances of the first half of the 20th century.', 1, NULL, NULL, NULL, NULL),
(10, 'RESINS AND BALSAMS', 'uploads/notes_categories/2.jpeg', 'Fruity notes beyond citrus (which form a class of its own) have become so popular in recent years that they deserve a category of their own. Vegetable notes are more unusual, sometimes rendered through illusion: an example would be the turnip note that iris rhizome sometimes produces.\r\n\r\nAs a rule fruits and vegetables are resistant to distillation and extraction processes due to the very high percentage of water in their natural make-up, and they remain a reconstructed note in fragrances. Their effect ranges from the refreshing to the succulent, all the way to the musty and mysterious.\r\n\r\nFruits and vegetables provide a nuanced texture and a refreshing feel in fragrances. Fruits especially have been extremely popular in the floral fruity category in the 2000s, while peach and plum have been major components in classical perfumers\' \"bases\" (such as the famous Persicol) which produced many of the iconic fragrances of the first half of the 20th century.', 1, NULL, NULL, NULL, NULL),
(11, 'MUSK', 'uploads/notes_categories/3.jpeg', 'Fruity notes beyond citrus (which form a class of its own) have become so popular in recent years that they deserve a category of their own. Vegetable notes are more unusual, sometimes rendered through illusion: an example would be the turnip note that iris rhizome sometimes produces.\r\n\r\nAs a rule fruits and vegetables are resistant to distillation and extraction processes due to the very high percentage of water in their natural make-up, and they remain a reconstructed note in fragrances. Their effect ranges from the refreshing to the succulent, all the way to the musty and mysterious.\r\n\r\nFruits and vegetables provide a nuanced texture and a refreshing feel in fragrances. Fruits especially have been extremely popular in the floral fruity category in the 2000s, while peach and plum have been major components in classical perfumers\' \"bases\" (such as the famous Persicol) which produced many of the iconic fragrances of the first half of the 20th century.', 1, NULL, NULL, NULL, NULL),
(12, 'AMBER', 'uploads/notes_categories/4.jpeg', 'Fruity notes beyond citrus (which form a class of its own) have become so popular in recent years that they deserve a category of their own. Vegetable notes are more unusual, sometimes rendered through illusion: an example would be the turnip note that iris rhizome sometimes produces.\r\n\r\nAs a rule fruits and vegetables are resistant to distillation and extraction processes due to the very high percentage of water in their natural make-up, and they remain a reconstructed note in fragrances. Their effect ranges from the refreshing to the succulent, all the way to the musty and mysterious.\r\n\r\nFruits and vegetables provide a nuanced texture and a refreshing feel in fragrances. Fruits especially have been extremely popular in the floral fruity category in the 2000s, while peach and plum have been major components in classical perfumers\' \"bases\" (such as the famous Persicol) which produced many of the iconic fragrances of the first half of the 20th century.', 1, NULL, NULL, NULL, NULL),
(13, 'ANIMALIC SMELLS', 'uploads/notes_categories/5.jpeg', 'Fruity notes beyond citrus (which form a class of its own) have become so popular in recent years that they deserve a category of their own. Vegetable notes are more unusual, sometimes rendered through illusion: an example would be the turnip note that iris rhizome sometimes produces.\r\n\r\nAs a rule fruits and vegetables are resistant to distillation and extraction processes due to the very high percentage of water in their natural make-up, and they remain a reconstructed note in fragrances. Their effect ranges from the refreshing to the succulent, all the way to the musty and mysterious.\r\n\r\nFruits and vegetables provide a nuanced texture and a refreshing feel in fragrances. Fruits especially have been extremely popular in the floral fruity category in the 2000s, while peach and plum have been major components in classical perfumers\' \"bases\" (such as the famous Persicol) which produced many of the iconic fragrances of the first half of the 20th century.', 1, NULL, NULL, NULL, NULL),
(14, 'BEVERAGES', 'uploads/notes_categories/6.jpeg', 'Fruity notes beyond citrus (which form a class of its own) have become so popular in recent years that they deserve a category of their own. Vegetable notes are more unusual, sometimes rendered through illusion: an example would be the turnip note that iris rhizome sometimes produces.\r\n\r\nAs a rule fruits and vegetables are resistant to distillation and extraction processes due to the very high percentage of water in their natural make-up, and they remain a reconstructed note in fragrances. Their effect ranges from the refreshing to the succulent, all the way to the musty and mysterious.\r\n\r\nFruits and vegetables provide a nuanced texture and a refreshing feel in fragrances. Fruits especially have been extremely popular in the floral fruity category in the 2000s, while peach and plum have been major components in classical perfumers\' \"bases\" (such as the famous Persicol) which produced many of the iconic fragrances of the first half of the 20th century.', 1, NULL, NULL, NULL, NULL),
(15, 'NATURAL AND SYNTHETIC', 'uploads/notes_categories/7.jpeg', 'Fruity notes beyond citrus (which form a class of its own) have become so popular in recent years that they deserve a category of their own. Vegetable notes are more unusual, sometimes rendered through illusion: an example would be the turnip note that iris rhizome sometimes produces.\r\n\r\nAs a rule fruits and vegetables are resistant to distillation and extraction processes due to the very high percentage of water in their natural make-up, and they remain a reconstructed note in fragrances. Their effect ranges from the refreshing to the succulent, all the way to the musty and mysterious.\r\n\r\nFruits and vegetables provide a nuanced texture and a refreshing feel in fragrances. Fruits especially have been extremely popular in the floral fruity category in the 2000s, while peach and plum have been major components in classical perfumers\' \"bases\" (such as the famous Persicol) which produced many of the iconic fragrances of the first half of the 20th century.', 1, NULL, NULL, NULL, NULL),
(16, 'POPULAR AND WEIRD', 'uploads/notes_categories/8.jpeg', 'Fruity notes beyond citrus (which form a class of its own) have become so popular in recent years that they deserve a category of their own. Vegetable notes are more unusual, sometimes rendered through illusion: an example would be the turnip note that iris rhizome sometimes produces.\r\n\r\nAs a rule fruits and vegetables are resistant to distillation and extraction processes due to the very high percentage of water in their natural make-up, and they remain a reconstructed note in fragrances. Their effect ranges from the refreshing to the succulent, all the way to the musty and mysterious.\r\n\r\nFruits and vegetables provide a nuanced texture and a refreshing feel in fragrances. Fruits especially have been extremely popular in the floral fruity category in the 2000s, while peach and plum have been major components in classical perfumers\' \"bases\" (such as the famous Persicol) which produced many of the iconic fragrances of the first half of the 20th century.', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('7af7d009f705503bc354a16169d255c4c55a89f7a22182f31661f451a4ea3f5f23d6bb1628f9ffae', 26, 1, 'MyApp', '[]', 0, '2020-05-24 05:51:34', '2020-05-24 05:51:34', '2021-05-24 11:51:34'),
('996df7f6bc9f082e74325d2dcab4cc2e4d514865bdb5df8a364cb251b727940953a879da5fbdc113', 26, 1, 'MyApp', '[]', 0, '2020-05-24 05:52:08', '2020-05-24 05:52:08', '2021-05-24 11:52:08');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'MyFragranceMe Personal Access Client', 'id8OQ98lsSMXgxik06aIvjDsBEcX2YbyX2pM37nv', 'http://localhost', 1, 0, 0, '2020-05-24 05:51:10', '2020-05-24 05:51:10'),
(2, NULL, 'MyFragranceMe Password Grant Client', 'rjV0wU9RzRqINHtnkaSjeUPcuFmcvJyxlR1lwa0w', 'http://localhost', 0, 1, 0, '2020-05-24 05:51:10', '2020-05-24 05:51:10');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-05-24 05:51:10', '2020-05-24 05:51:10');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `guest_id` int(11) DEFAULT NULL,
  `shipping_address` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_status` varchar(20) COLLATE utf8_unicode_ci DEFAULT 'unpaid',
  `payment_details` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `grand_total` double(8,2) DEFAULT NULL,
  `coupon_discount` double(8,2) NOT NULL DEFAULT 0.00,
  `code` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` int(20) NOT NULL,
  `viewed` int(1) NOT NULL DEFAULT 0,
  `delivery_viewed` int(1) NOT NULL DEFAULT 0,
  `payment_status_viewed` int(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `variation` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `tax` double(8,2) NOT NULL DEFAULT 0.00,
  `shipping_cost` double(8,2) NOT NULL DEFAULT 0.00,
  `quantity` int(11) DEFAULT NULL,
  `payment_status` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'unpaid',
  `delivery_status` varchar(20) COLLATE utf8_unicode_ci DEFAULT 'pending',
  `shipping_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pickup_point_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `amount` double(8,2) NOT NULL DEFAULT 0.00,
  `payment_details` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perfumes`
--

CREATE TABLE `perfumes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `education` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number_database` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `perfumes`
--

INSERT INTO `perfumes` (`id`, `name`, `img`, `position`, `company`, `education`, `website`, `about`, `number_database`, `created_at`, `updated_at`) VALUES
(1, 'Demosa', 'uploads/perfumes/ZybU0javJq44kthdbIiemHT4lJt5sMGBMJVFP40Z.jpeg', 'Fiirst', 'Samasung', 'BBA', 'www.demo11.com', 'This single route declaration creates multiple routes to handle a variety of actions on the resource. The generated controller will already have methods stubbed for each of these actions, including notes informing you of the HTTP verbs and URIs they handl', '0022554441', '2020-04-26 10:28:15', '2020-04-26 10:35:14'),
(2, 'Aemosa', 'uploads/perfumes/ZybU0javJq44kthdbIiemHT4lJt5sMGBMJVFP40Z.jpeg', 'Fiirst', 'Samasung', 'BBA', 'www.demo11.com', 'This single route declaration creates multiple routes to handle a variety of actions on the resource. The generated controller will already have methods stubbed for each of these actions, including notes informing you of the HTTP verbs and URIs they handl', '0022554441', '2020-04-26 10:28:15', '2020-04-26 10:35:14'),
(3, 'Bemosa', 'uploads/perfumes/ZybU0javJq44kthdbIiemHT4lJt5sMGBMJVFP40Z.jpeg', 'Fiirst', 'Samasung', 'BBA', 'www.demo11.com', 'This single route declaration creates multiple routes to handle a variety of actions on the resource. The generated controller will already have methods stubbed for each of these actions, including notes informing you of the HTTP verbs and URIs they handl', '0022554441', '2020-04-26 10:28:15', '2020-04-26 10:35:14'),
(4, 'Cemosa', 'uploads/perfumes/ZybU0javJq44kthdbIiemHT4lJt5sMGBMJVFP40Z.jpeg', 'Fiirst', 'Samasung', 'BBA', 'www.demo11.com', 'This single route declaration creates multiple routes to handle a variety of actions on the resource. The generated controller will already have methods stubbed for each of these actions, including notes informing you of the HTTP verbs and URIs they handl', '0022554441', '2020-04-26 10:28:15', '2020-04-26 10:35:14'),
(5, 'Damosa', 'uploads/perfumes/ZybU0javJq44kthdbIiemHT4lJt5sMGBMJVFP40Z.jpeg', 'Fiirst', 'Samasung', 'BBA', 'www.demo11.com', 'This single route declaration creates multiple routes to handle a variety of actions on the resource. The generated controller will already have methods stubbed for each of these actions, including notes informing you of the HTTP verbs and URIs they handl', '0022554441', '2020-04-26 10:28:15', '2020-04-26 10:35:14'),
(6, 'Axmosa', 'uploads/perfumes/ZybU0javJq44kthdbIiemHT4lJt5sMGBMJVFP40Z.jpeg', 'Fiirst', 'Samasung', 'BBA', 'www.demo11.com', 'This single route declaration creates multiple routes to handle a variety of actions on the resource. The generated controller will already have methods stubbed for each of these actions, including notes informing you of the HTTP verbs and URIs they handl', '0022554441', '2020-04-26 10:28:15', '2020-04-26 10:35:14'),
(7, 'Admosa', 'uploads/perfumes/ZybU0javJq44kthdbIiemHT4lJt5sMGBMJVFP40Z.jpeg', 'Fiirst', 'Samasung', 'BBA', 'www.demo11.com', 'This single route declaration creates multiple routes to handle a variety of actions on the resource. The generated controller will already have methods stubbed for each of these actions, including notes informing you of the HTTP verbs and URIs they handl', '0022554441', '2020-04-26 10:28:15', '2020-04-26 10:35:14'),
(8, 'Aemoda', 'uploads/perfumes/ZybU0javJq44kthdbIiemHT4lJt5sMGBMJVFP40Z.jpeg', 'Fiirst', 'Samasung', 'BBA', 'www.demo11.com', 'This single route declaration creates multiple routes to handle a variety of actions on the resource. The generated controller will already have methods stubbed for each of these actions, including notes informing you of the HTTP verbs and URIs they handl', '0022554441', '2020-04-26 10:28:15', '2020-04-26 10:35:14'),
(9, 'Bemdosa', 'uploads/perfumes/ZybU0javJq44kthdbIiemHT4lJt5sMGBMJVFP40Z.jpeg', 'Fiirst', 'Samasung', 'BBA', 'www.demo11.com', 'This single route declaration creates multiple routes to handle a variety of actions on the resource. The generated controller will already have methods stubbed for each of these actions, including notes informing you of the HTTP verbs and URIs they handl', '0022554441', '2020-04-26 10:28:15', '2020-04-26 10:35:14'),
(10, 'Bseosa', 'uploads/perfumes/ZybU0javJq44kthdbIiemHT4lJt5sMGBMJVFP40Z.jpeg', 'Fiirst', 'Samasung', 'BBA', 'www.demo11.com', 'This single route declaration creates multiple routes to handle a variety of actions on the resource. The generated controller will already have methods stubbed for each of these actions, including notes informing you of the HTTP verbs and URIs they handl', '0022554441', '2020-04-26 10:28:15', '2020-04-26 10:35:14');

-- --------------------------------------------------------

--
-- Table structure for table `personal_requests`
--

CREATE TABLE `personal_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` int(11) DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `about_source` int(11) DEFAULT NULL,
  `product_using_time` int(11) DEFAULT NULL,
  `interested_product` int(11) DEFAULT NULL,
  `other_source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_new_release` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suggest_product` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `overall_experience` int(11) DEFAULT NULL,
  `impressed_product` int(11) DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `captcha` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedback` int(11) DEFAULT NULL,
  `active_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_requests`
--

INSERT INTO `personal_requests` (`id`, `name`, `gender`, `nationality`, `phone`, `email`, `age`, `about_source`, `product_using_time`, `interested_product`, `other_source`, `about_new_release`, `suggest_product`, `overall_experience`, `impressed_product`, `message`, `captcha`, `feedback`, `active_status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Xandra Pruitt', 1, 'Dolor dolores nulla', '+1 (765) 791-8513', 'tisewuw@mailinator.net', 3, 3, 4, 5, 'Est sit in commodi', 'Illum do quos facer', 'Natus ratione placea', 4, 2, 'Culpa possimus irur', 'fgdfg', NULL, 1, 1, 1, '2020-05-22 04:07:35', '2020-05-22 04:07:35'),
(2, 'Thane Becker', 0, 'Sit nostrum ad iure', '+1 (845) 811-8374', 'tevywyxur@mailinator.com', 4, 4, 1, 4, 'Adipisicing minus pr', 'Vel inventore dolore', 'Ut pariatur Magna u', 5, 1, 'Quia id quis eiusmo', 'gdfgd', NULL, 1, 1, 1, '2020-05-23 04:19:09', '2020-05-23 04:19:09');

-- --------------------------------------------------------

--
-- Table structure for table `pickup_points`
--

CREATE TABLE `pickup_points` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `pick_up_status` int(1) DEFAULT NULL,
  `cash_on_pickup_status` int(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` int(11) NOT NULL,
  `name` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'support_policy', NULL, '2019-10-29 12:54:45', '2019-01-22 05:13:15'),
(2, 'return_policy', NULL, '2019-10-29 12:54:47', '2019-01-24 05:40:11'),
(4, 'seller_policy', NULL, '2019-10-29 12:54:49', '2019-02-04 17:50:15'),
(5, 'terms', 'gfhghfg gfhgfh fghfgh fgh gfh&nbsp;', '2020-05-21 14:03:11', '2020-05-21 08:03:11'),
(6, 'privacy_policy', NULL, '2019-10-29 12:54:54', '2019-10-28 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `press_contacts`
--

CREATE TABLE `press_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `press_contacts`
--

INSERT INTO `press_contacts` (`id`, `name`, `email`, `message`, `active_status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Rayhan Mahmud', '1000157@daffodil.ac', 'jhgjghj', 1, 1, 1, '2020-05-22 09:52:19', '2020-05-22 09:52:19'),
(2, 'Neville Dillon', 'jopew@mailinator.com', 'Ipsum tempore ad re', 1, 1, 1, '2020-05-23 00:51:22', '2020-05-23 00:51:22'),
(3, 'Irene Workman', 'ryweba@mailinator.com', 'Non excepteur recusa', 1, 1, 1, '2020-05-23 00:53:05', '2020-05-23 00:53:05'),
(4, 'Catherine Orr', 'wadaquk@mailinator.net', 'Est commodo irure el', 1, 1, 1, '2020-05-23 00:53:36', '2020-05-23 00:53:36'),
(5, 'hgfh', 'rayhan35@diit.info', 'gfh', 1, 1, 1, '2020-05-23 00:54:55', '2020-05-23 00:54:55'),
(6, 'Hannah Short', 'sutabehame@mailinator.net', 'Sit amet quasi expl', 1, 1, 1, '2020-05-23 00:56:32', '2020-05-23 00:56:32'),
(7, 'Mufutau Valentine', 'tyho@mailinator.com', 'Est expedita laboris', 1, 1, 1, '2020-05-23 00:57:25', '2020-05-23 00:57:25'),
(8, 'Yasir Wilcox', 'pajikoq@mailinator.net', 'Natus ut autem culpa', 1, 1, 1, '2020-05-23 00:58:12', '2020-05-23 00:58:12'),
(9, 'Kimberly Harding', 'xeqe@mailinator.net', 'Illum quos consecte', 1, 1, 1, '2020-05-23 00:58:29', '2020-05-23 00:58:29'),
(10, 'Ursa Ware', 'qawacas@mailinator.com', 'Eum illo qui iusto s', 1, 1, 1, '2020-05-23 00:58:53', '2020-05-23 00:58:53'),
(11, 'Denton Bates', 'sokof@mailinator.com', 'Impedit et iste mol', 1, 1, 1, '2020-05-23 00:59:43', '2020-05-23 00:59:43');

-- --------------------------------------------------------

--
-- Table structure for table `press_lists`
--

CREATE TABLE `press_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial_number` int(11) DEFAULT NULL,
  `active_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `press_settings`
--

CREATE TABLE `press_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_us_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_post` int(11) DEFAULT NULL,
  `active_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `press_settings`
--

INSERT INTO `press_settings` (`id`, `title`, `name`, `designation`, `company`, `email`, `profile`, `banner_image`, `about_us_image`, `number_of_post`, `active_status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Press Сontact', 'Naomi Shaw', 'PR + Partnerships', 'Fragrance', 'nshaw@scentbird.com', '/website/img/0e587d5e2a7bce48a2b25a193f9d59b8.jpg', '/website/img/51c925b81da4ac1f4c8e426c87367ca3.jpg', '/website/img/1c5c14d14c6e8d24cf27a6993654578f.jpg', 8, 1, 1, 1, '2020-05-23 03:54:15', '2020-05-23 04:10:09');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `added_by` varchar(6) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'admin',
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `photos` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumbnail_img` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `featured_img` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `flash_deal_img` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_provider` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_link` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tags` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_price` double(8,2) NOT NULL,
  `purchase_price` double(8,2) NOT NULL,
  `variant_product` int(1) NOT NULL DEFAULT 0,
  `attributes` varchar(1000) COLLATE utf8_unicode_ci NOT NULL DEFAULT '[]',
  `choice_options` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `colors` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `variations` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `todays_deal` int(11) NOT NULL DEFAULT 0,
  `published` int(11) NOT NULL DEFAULT 1,
  `featured` int(11) NOT NULL DEFAULT 0,
  `current_stock` int(10) NOT NULL DEFAULT 0,
  `unit` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount` double(8,2) DEFAULT NULL,
  `discount_type` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tax` double(8,2) DEFAULT NULL,
  `tax_type` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'flat_rate',
  `shipping_cost` double(8,2) DEFAULT 0.00,
  `num_of_sale` int(11) NOT NULL DEFAULT 0,
  `meta_title` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdf` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `rating` double(8,2) NOT NULL DEFAULT 0.00,
  `barcode` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `perfumer_id` int(11) DEFAULT NULL,
  `rebate` int(11) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `gender` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sample` tinyint(1) DEFAULT 0,
  `marketting` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subscription` tinyint(1) DEFAULT 0,
  `subcription_price` float DEFAULT NULL,
  `frag_family` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `frag_type` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `top_notes` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middle_notes` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `base_notes` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alcohol` int(11) DEFAULT NULL,
  `poduct_length` float DEFAULT NULL,
  `product_height` float DEFAULT NULL,
  `product_width` float NOT NULL,
  `pack_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uom` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `launch_date` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `added_by`, `user_id`, `category_id`, `subcategory_id`, `subsubcategory_id`, `brand_id`, `photos`, `thumbnail_img`, `featured_img`, `flash_deal_img`, `video_provider`, `video_link`, `tags`, `description`, `unit_price`, `purchase_price`, `variant_product`, `attributes`, `choice_options`, `colors`, `variations`, `todays_deal`, `published`, `featured`, `current_stock`, `unit`, `discount`, `discount_type`, `tax`, `tax_type`, `shipping_type`, `shipping_cost`, `num_of_sale`, `meta_title`, `meta_description`, `meta_img`, `pdf`, `slug`, `rating`, `barcode`, `perfumer_id`, `rebate`, `capacity`, `gender`, `sample`, `marketting`, `country`, `subscription`, `subcription_price`, `frag_family`, `frag_type`, `top_notes`, `middle_notes`, `base_notes`, `alcohol`, `poduct_length`, `product_height`, `product_width`, `pack_type`, `uom`, `status`, `launch_date`, `created_at`, `updated_at`) VALUES
(8, 'Perfumes Demo', 'admin', 12, 4, 3, 8, 4, '[\"uploads\\/products\\/photos\\/gLfnwcxUzDTzK3xSZDNcdIomur1jcvTxjURdqIID.png\",\"uploads\\/products\\/photos\\/4mlHugWXKup78MyDTsAZ5IkUw621ajzIXaO2wcYJ.png\",\"uploads\\/products\\/photos\\/dzzJRw0XA6iZvbDaBgmPcfr0U4hsGEfYw0y6gwkw.png\"]', 'uploads/products/thumbnail/Ed7Mh9Hbgo9ktfIfFjEr9td818bpIQi9dnq3FepL.png', 'uploads/products/featured/3RmwV9CKluz9D1J9jsrWQchoShymUmm1OLF7qURn.png', 'uploads/products/flash_deal/PDOJrlOiCspqR2w45Msj2rDkoNrrTAq31Qh1byFy.png', 'youtube', 'https://www.youtube.com/watch?v=sgqvUqt6gT0', 'jiii,jjji', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 899.00, 900.00, 0, '[]', '[]', '[\"#b02626\",\"#ff0000\"]', NULL, 0, 1, 0, 50, '50', 50.00, 'amount', NULL, NULL, 'flat_rate', 50.00, 0, 'Possimus sed adipis', 'Magna voluptas labor', NULL, '', 'Perfumes-Demo-MbhWs', 5.00, NULL, 1, 0, NULL, '0', 1, 'SFHDSFHJDSHFKJDS', 'anab', 1, 700, NULL, 'Placeat est est a', '[\"top,notes\"]', '[\"middle,notes\"]', '[\"base,nots\"]', NULL, 12, 10, 9, 'Pka', NULL, 1, '01/01/1998', '2020-05-03 10:06:49', '2020-05-11 13:17:37'),
(9, 'Second Product', 'admin', 12, 4, 4, 11, 5, '[\"uploads\\/products\\/photos\\/BGlLVDWyLPcjpkCFFzAnwFptNjIEcFdK9zLSmH2E.jpeg\",\"uploads\\/products\\/photos\\/qIrWTRnRWqx7Xp9C2iRwV5lRrMSB3E9O86mdo1wp.jpeg\"]', 'uploads/products/thumbnail/CXEdagc5ClTuKeoNV44UIKiRJjKSIqxrY1VqiKX4.png', 'uploads/products/featured/9Si2tJZ1hBjJgouhd8jBOQAW1cSEPJez6aD5IR0K.jpeg', 'uploads/products/flash_deal/YGpQTL9h4ReQveW2FhsP0pLUiSgfaLmDGuZ1mqXn.jpeg', 'youtube', 'https://www.youtube.com/watch?v=L5WWrGMsnpw', 'tag1,tag2', 'It is a long established fact that a reader will be distracted by the \r\nreadable content of a page when looking at its layout. The point of \r\nusing Lorem Ipsum is that it has a more-or-less normal distribution of \r\nletters, as opposed to using \'Content here, content here\', making it \r\nlook like readable English. Many desktop publishing packages and web \r\npage editors now use Lorem Ipsum as their default model text, and a \r\nsearch for \'lorem ipsum\' will uncover many web sites still in their \r\ninfancy. Various versions have evolved over the years, sometimes by \r\naccident, sometimes on purpose (injected humour and the like).Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 2500.00, 500.00, 0, '[]', '[]', '[\"#4de812\",\"#090606\"]', NULL, 0, 1, 0, 25, '12', 500.00, 'amount', NULL, NULL, 'flat_rate', 58.00, 0, 'Culpa ipsa explicab', 'Laborum Aut sed cul', NULL, NULL, 'Second-Product-osEfd', 3.00, '121212121212232323', 1, 1000, NULL, 'Male', 1, '2212121', 'China', 1, 2000, NULL, 'Placeat est est a', '[\"top,notes,hiiiie\"]', '[\"hai,hello,woww\"]', '[\"base,nnote,hello\"]', 73, 25, 20, 18, 'Packed', NULL, 1, '01/01/1998', '2020-05-03 10:12:59', '2020-06-03 07:27:20'),
(10, 'Almond Super Duper Product', 'admin', 12, 4, 4, 10, 5, '[\"uploads\\/products\\/photos\\/MUte2zA7mp2BNvqvSVB2xRAEUDE5zBax73gD5FBP.jpeg\",\"uploads\\/products\\/photos\\/41Ft7TCnd2omKV5TVWHVH0YBmcnF8WYhUQwzPKcE.png\"]', 'uploads/products/thumbnail/pZPRjtJ0CnI3o0KBphfYZtu09Hid7dmQHQV3FoCl.jpeg', 'uploads/products/featured/Jzdz0MQMe12FanyuYc5M92qJKqxbry0oViekAqPW.jpeg', 'uploads/products/flash_deal/BWe24T9kFsjLjJyitNMg8GMRykVPujm8qtH3bzOE.jpeg', 'youtube', 'https://www.youtube.com/watch?v=sgqvUqt6gT0', 'uuy,iuiuuiiu,ooo', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It \r\nhas roots in a piece of classical Latin literature from 45 BC, making it\r\n over 2000 years old. Richard McClintock, a Latin professor at \r\nHampden-Sydney College in Virginia, looked up one of the more obscure \r\nLatin words, consectetur, from a Lorem Ipsum passage, and going through \r\nthe cites of the word in classical literature, discovered the \r\nundoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 \r\nof \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by \r\nCicero, written in 45 BC. This book is a treatise on the theory of \r\nethics, very popular during the Renaissance. The first line of Lorem \r\nIpsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section \r\n1.10.32.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 1500.00, 1200.00, 0, '[]', '[]', '[]', NULL, 0, 1, 0, 15, '50', 20.00, 'amount', 0.00, 'amount', 'flat_rate', 58.00, 0, 'Mollitia et cupidata', 'Ea quibusdam aut nat', NULL, NULL, 'Third-Product-JMrhe', 4.00, '121212121212232323', 1, 455454, NULL, 'Male', 1, 'hhhsd dshdashdk uas dashdashdas', 'Thailand', 1, 1100, NULL, 'Fragrance Type', '[\"top,notes,hello\"]', '[\"hheee,base,boootrs\"]', '[\"base,noten,helo\"]', 10, 12, 14, 15, 'Packed', NULL, 1, '01/01/1998', '2020-05-03 10:31:27', '2020-06-03 06:33:59'),
(11, 'Nice Perfumes Demo', 'admin', 12, 4, 4, 10, 5, '[\"uploads\\/products\\/photos\\/MUte2zA7mp2BNvqvSVB2xRAEUDE5zBax73gD5FBP.jpeg\",\"uploads\\/products\\/photos\\/41Ft7TCnd2omKV5TVWHVH0YBmcnF8WYhUQwzPKcE.png\"]', 'uploads/products/thumbnail/pZPRjtJ0CnI3o0KBphfYZtu09Hid7dmQHQV3FoCl.jpeg', 'uploads/products/featured/Jzdz0MQMe12FanyuYc5M92qJKqxbry0oViekAqPW.jpeg', 'uploads/products/flash_deal/BWe24T9kFsjLjJyitNMg8GMRykVPujm8qtH3bzOE.jpeg', 'youtube', 'https://www.youtube.com/watch?v=sgqvUqt6gT0', 'uuy,iuiuuiiu,ooo', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It \r\nhas roots in a piece of classical Latin literature from 45 BC, making it\r\n over 2000 years old. Richard McClintock, a Latin professor at \r\nHampden-Sydney College in Virginia, looked up one of the more obscure \r\nLatin words, consectetur, from a Lorem Ipsum passage, and going through \r\nthe cites of the word in classical literature, discovered the \r\nundoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 \r\nof \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by \r\nCicero, written in 45 BC. This book is a treatise on the theory of \r\nethics, very popular during the Renaissance. The first line of Lorem \r\nIpsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section \r\n1.10.32.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 1500.00, 1200.00, 0, '[]', '[]', '[]', NULL, 0, 1, 0, 15, '50', 20.00, 'amount', 0.00, 'amount', 'flat_rate', 58.00, 0, 'Mollitia et cupidata', 'Ea quibusdam aut nat', NULL, NULL, 'Third-Product-JMrhe', 0.00, '121212121212232323', 1, 455454, NULL, 'Male', 1, 'hhhsd dshdashdk uas dashdashdas', 'Thailand', 1, 1100, NULL, 'Fragrance Type', '[\"top,notes,hello\"]', '[\"hheee,base,boootrs\"]', '[\"base,noten,helo\"]', 10, 12, 14, 15, 'Packed', NULL, 1, '01/01/1998', '2020-05-03 10:31:27', '2020-06-02 13:21:51'),
(12, 'Virigour Ciriminals For Men', 'admin', 12, 1, 4, 11, 5, '[\"uploads\\/products\\/photos\\/BGlLVDWyLPcjpkCFFzAnwFptNjIEcFdK9zLSmH2E.jpeg\",\"uploads\\/products\\/photos\\/qIrWTRnRWqx7Xp9C2iRwV5lRrMSB3E9O86mdo1wp.jpeg\"]', 'uploads/products/thumbnail/CXEdagc5ClTuKeoNV44UIKiRJjKSIqxrY1VqiKX4.png', 'uploads/products/featured/9Si2tJZ1hBjJgouhd8jBOQAW1cSEPJez6aD5IR0K.jpeg', 'uploads/products/flash_deal/YGpQTL9h4ReQveW2FhsP0pLUiSgfaLmDGuZ1mqXn.jpeg', 'youtube', 'https://www.youtube.com/watch?v=sgqvUqt6gT0', 'tag1,tag2', 'It is a long established fact that a reader will be distracted by the \r\nreadable content of a page when looking at its layout. The point of \r\nusing Lorem Ipsum is that it has a more-or-less normal distribution of \r\nletters, as opposed to using \'Content here, content here\', making it \r\nlook like readable English. Many desktop publishing packages and web \r\npage editors now use Lorem Ipsum as their default model text, and a \r\nsearch for \'lorem ipsum\' will uncover many web sites still in their \r\ninfancy. Various versions have evolved over the years, sometimes by \r\naccident, sometimes on purpose (injected humour and the like).Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 2500.00, 500.00, 0, '[]', '[]', '[\"#4de812\",\"#090606\"]', NULL, 0, 1, 0, 25, '12', 500.00, 'amount', NULL, NULL, 'flat_rate', 58.00, 0, 'Culpa ipsa explicab', 'Laborum Aut sed cul', NULL, NULL, 'Second-Product-osEfd', 0.00, '121212121212232323', 1, 1000, NULL, 'Male', 1, '2212121', 'China', 1, 2000, NULL, 'Placeat est est a', '[\"top,notes,hiiiie\"]', '[\"hai,hello,woww\"]', '[\"base,nnote,hello\"]', NULL, 25, 20, 18, 'Packed', NULL, 1, '01/01/1998', '2020-05-03 10:12:59', '2020-05-03 10:12:59'),
(13, 'Hwlllo', 'admin', 12, 1, 2, 4, 4, '[\"uploads\\/products\\/photos\\/XdigitMC5lM9s9zxyQSysClLrohKqfNnWe7MBGi8.png\",\"uploads\\/products\\/photos\\/U7kHelm3ufMJd2XfxtxfZ2KiVjmVV4DaMP7HcCgv.png\"]', 'uploads/products/thumbnail/ag1aZ4wvLU5sqmSMHCOqfENpvhF3wdsNmkdhDbK2.jpeg', 'uploads/products/featured/CRgq9SCai07OhIn4cZviTG8R1MN9RHFfIQorelwI.jpeg', 'uploads/products/flash_deal/uT3VPPs0eJACvKg7ZkDfuxWkRnjP6iTxO13NYsSA.png', 'youtube', 'https://www.youtube.com/watch?v=sgqvUqt6gT0', 'rere,rerer', 'svdsdsdfdsf', 12.00, 12.00, 0, '[]', '[]', '[\"#e71818\",\"#5b1616\"]', NULL, 0, 1, 0, 12, '12', 12.00, 'amount', NULL, NULL, 'flat_rate', 0.00, 0, 'Culpa ipsa explicab', 'vxvxvcxvx', 'uploads/products/meta/v07zGXkTjVr8UtXoDpCyup9oVLEFp4oKz8yVVRTA.jpeg', NULL, 'Hwlllo-InXYP', 0.00, 'erewrrewrew', 1, 12, NULL, 'Male', 0, '15', 'England', 1, 12, 'ewew', 'wewe', NULL, NULL, NULL, 12, 12, 10, 15, '12', NULL, 1, '01/01/1998', '2020-05-10 12:33:39', '2020-05-10 12:33:39'),
(16, 'Product Demo 22', 'admin', 12, 1, 2, 4, 4, '[\"uploads\\/products\\/photos\\/WwUKFxAm4YBFQ3Tro2QS1I9c94qhIbQEmVQVzmBM.jpeg\",\"uploads\\/products\\/photos\\/Nv7Uq2uR9LFL8zcx7IuNc6Y5R71QC6cItTmUDBvh.jpeg\",\"uploads\\/products\\/photos\\/lH2ofJoydvcJfukHw0atZr5k7dhKG448s0F5M43p.jpeg\",\"uploads\\/products\\/photos\\/FkSQpAesu1f4wJXl6AMmMIlZUSIVIa7jopi7M7Ee.jpeg\"]', 'uploads/products/thumbnail/VqXJ9DCaT50LqB1CPnEk05BM9RZ5vIakdGtLkkZS.jpeg', 'uploads/products/featured/XIaMckFG9kV4GJMdp5vCGPtkjLS7Oe9345otg9Aw.jpeg', 'uploads/products/flash_deal/GBVakgDxPNW6a51Apwj49Lr2XxFr6wpATKoda6Js.jpeg', 'youtube', 'https://www.youtube.com/watch?v=sgqvUqt6gT0', 'demo,product', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 2333.00, 232.00, 0, '[]', '[]', '[\"#f00000\",\"#022b38\"]', NULL, 0, 1, 0, 12, '2', 12.00, 'amount', NULL, NULL, 'flat_rate', 0.00, 0, '1212', 'ewwqqw', NULL, NULL, 'Product-Demo-22-NSxxK', 4.00, '23232323232323', 1, 0, NULL, 'Male', 0, '12', 'England', 1, 12, 'ewew', 'Placeat est est a', NULL, NULL, NULL, 12, 12, 22, 32, 'wer', NULL, 1, '01/01/1998', '2020-05-10 12:48:22', '2020-06-03 23:14:05');

-- --------------------------------------------------------

--
-- Table structure for table `product_stocks`
--

CREATE TABLE `product_stocks` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `variant` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `qty` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_top_note`
--

CREATE TABLE `product_top_note` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `top_note_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_top_note`
--

INSERT INTO `product_top_note` (`id`, `product_id`, `top_note_id`, `created_at`, `updated_at`) VALUES
(4, 16, 1, '2020-05-10 12:48:22', '2020-05-10 12:48:22'),
(5, 16, 2, '2020-05-10 12:48:22', '2020-05-10 12:48:22'),
(6, 16, 4, '2020-05-10 12:48:22', '2020-05-10 12:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `recent_views`
--

CREATE TABLE `recent_views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `faq_id` int(11) DEFAULT NULL,
  `active_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recent_views`
--

INSERT INTO `recent_views` (`id`, `user_id`, `faq_id`, `active_status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 12, 1, 1, NULL, '2020-05-29 13:54:57', '2020-05-29 07:54:57', '2020-05-29 07:54:57'),
(2, 12, 2, 1, NULL, '2020-06-03 13:25:56', '2020-06-03 07:25:56', '2020-06-03 07:25:56');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `summary` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rating` int(11) NOT NULL DEFAULT 0,
  `comment` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `viewed` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `user_id`, `name`, `summary`, `rating`, `comment`, `status`, `viewed`, `created_at`, `updated_at`) VALUES
(1, 8, 12, NULL, NULL, 1, 'hello ratings', 1, 0, '2020-05-03 16:35:47', '2020-05-11 13:17:37'),
(2, 9, 12, 'Abid hossain', 'Summary', 3, 'YOU\'RE REVIEWING:', 1, 0, '2020-06-03 05:11:48', '2020-06-03 07:27:20'),
(4, 10, 27, 'Abid hossain', 'Summary', 4, 'gjgjhgjkhjkh', 1, 0, '2020-06-03 06:33:59', '2020-06-03 06:33:59'),
(5, 16, 12, 'Abid hossain', 'Summary', 4, 'Customer Reviews', 1, 0, '2020-06-03 23:14:05', '2020-06-03 23:14:05');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'Manager', '[\"1\",\"2\",\"4\"]', '2018-10-10 04:39:47', '2018-10-10 04:51:37'),
(2, 'Accountant', '[\"2\",\"3\"]', '2018-10-10 04:52:09', '2018-10-10 04:52:09');

-- --------------------------------------------------------

--
-- Table structure for table `searches`
--

CREATE TABLE `searches` (
  `id` int(11) NOT NULL,
  `query` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `count` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `searches`
--

INSERT INTO `searches` (`id`, `query`, `count`, `created_at`, `updated_at`) VALUES
(2, 'dcs', 1, '2020-03-08 00:29:09', '2020-03-08 00:29:09'),
(3, 'das', 3, '2020-03-08 00:29:15', '2020-03-08 00:29:50');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `verification_status` int(1) NOT NULL DEFAULT 0,
  `verification_info` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `cash_on_delivery_status` int(1) NOT NULL DEFAULT 0,
  `sslcommerz_status` int(1) NOT NULL DEFAULT 0,
  `stripe_status` int(1) DEFAULT 0,
  `paypal_status` int(1) NOT NULL DEFAULT 0,
  `paypal_client_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paypal_client_secret` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ssl_store_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ssl_password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stripe_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stripe_secret` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instamojo_status` int(1) NOT NULL DEFAULT 0,
  `instamojo_api_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instamojo_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `razorpay_status` int(1) NOT NULL DEFAULT 0,
  `razorpay_api_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `razorpay_secret` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paystack_status` int(1) NOT NULL DEFAULT 0,
  `paystack_public_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paystack_secret_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `voguepay_status` int(1) NOT NULL DEFAULT 0,
  `voguepay_merchand_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_to_pay` double(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `user_id`, `verification_status`, `verification_info`, `cash_on_delivery_status`, `sslcommerz_status`, `stripe_status`, `paypal_status`, `paypal_client_id`, `paypal_client_secret`, `ssl_store_id`, `ssl_password`, `stripe_key`, `stripe_secret`, `instamojo_status`, `instamojo_api_key`, `instamojo_token`, `razorpay_status`, `razorpay_api_key`, `razorpay_secret`, `paystack_status`, `paystack_public_key`, `paystack_secret_key`, `voguepay_status`, `voguepay_merchand_id`, `admin_to_pay`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '[{\"type\":\"text\",\"label\":\"Name\",\"value\":\"Mr. Seller\"},{\"type\":\"select\",\"label\":\"Marital Status\",\"value\":\"Married\"},{\"type\":\"multi_select\",\"label\":\"Company\",\"value\":\"[\\\"Company\\\"]\"},{\"type\":\"select\",\"label\":\"Gender\",\"value\":\"Male\"},{\"type\":\"file\",\"label\":\"Image\",\"value\":\"uploads\\/verification_form\\/CRWqFifcbKqibNzllBhEyUSkV6m1viknGXMEhtiW.png\"}]', 1, 1, 1, 0, NULL, NULL, 'activ5c3c5dac9254d', 'activ5c3c5dac9254d@ssl', 'pk_test_CqAfBW85ZifDyuEOhGaD4ZbE', 'sk_test_mRRMmV4GnBJ4UT7qeLlDe5F8', 0, NULL, NULL, 0, NULL, NULL, 1, 'pk_test_855c5f39d8f662a5d63fabe25ead64fe21018f15', 'sk_test_1175e92519f88e9c665d0b980f53ff1cfffbbc38', 0, NULL, 78.40, '2018-10-07 04:42:57', '2020-04-21 11:19:45');

-- --------------------------------------------------------

--
-- Table structure for table `seller_withdraw_requests`
--

CREATE TABLE `seller_withdraw_requests` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `amount` double(8,2) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `viewed` int(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seo_settings`
--

CREATE TABLE `seo_settings` (
  `id` int(11) NOT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `revisit` int(11) NOT NULL,
  `sitemap_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `seo_settings`
--

INSERT INTO `seo_settings` (`id`, `keyword`, `author`, `revisit`, `sitemap_link`, `description`, `created_at`, `updated_at`) VALUES
(1, 'bootstrap,responsive,template,developer', 'MyFragmanceMe', 11, 'https://www.myfragmanceme.com', 'Multi vendor system is such a platform to build a border less marketplace both for physical and digital goods.', '2020-04-22 13:38:10', '2019-08-08 02:56:11');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sliders` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `pick_up_point_id` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `user_id`, `name`, `logo`, `sliders`, `address`, `facebook`, `google`, `twitter`, `youtube`, `slug`, `meta_title`, `meta_description`, `pick_up_point_id`, `created_at`, `updated_at`) VALUES
(1, 3, 'Demo Seller Shop', 'shop/logo/Gt1xw7vjTpMnwpADkGSilc35qrAfcw02kuZ36Jdn.png', '[\"uploads\\/shop\\/sliders\\/lToeKDeUyWcxy1HRs2yH37oBLyIwEwyPkqdyXBRO.jpeg\",\"uploads\\/shop\\/sliders\\/asDBJ3Bro1ijNaNnx3Hpnp6uq3n66ndyLczOJ0F6.jpeg\",\"uploads\\/shop\\/sliders\\/ltwUfHND4QP1K7bPFbuOC4i8v6zL9KHJKzex4zaX.jpeg\"]', 'House : Demo, Road : Demo, Section : Demo', 'www.facebook.com', 'www.google.com', 'www.twitter.com', 'www.youtube.com', 'Demo-Seller-Shop-1', 'Demo Seller Shop Title', 'Demo description', NULL, '2018-11-27 10:23:13', '2019-08-06 06:43:16');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `serial_no` int(11) DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `published` int(1) NOT NULL DEFAULT 1,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `short_description`, `serial_no`, `photo`, `published`, `link`, `created_at`, `updated_at`) VALUES
(14, 'Clothes', 'Short description Short descriptionShort descriptionShort descriptionShort description', 1, 'uploads/sliders/Bid5Ye2dnpNFbA554VMm7k2VmK5fRbTrzQbq8141.jpeg', 1, 'http://localhost/myfrag/admin/frontend_settings/home', '2020-05-29 01:12:30', '2020-05-29 01:12:30'),
(15, 'Italian shows brand new', 'Short description Short descriptionShort descriptionShort descriptionShort description', 2, 'uploads/sliders/SSRFeChNQh01mL0WWP8HEoQdZ7A0NVNm8tACoTR1.jpeg', 1, 'http://localhost/myfrag/admin/frontend_settings/home', '2020-05-29 01:12:49', '2020-05-29 01:12:49'),
(17, 'Italian shows brand new', 'Short description Short descriptionShort descriptionShort descriptionShort description', 3, 'uploads/sliders/touM1tSsIWoVanM9uCJ9sc4594j9xEl75WvCkFI7.jpeg', 1, 'http://localhost/myfrag/admin/frontend_settings/home', '2020-05-29 04:22:24', '2020-05-29 04:22:24');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'mohammad.abid.dev@gmail.com', '2020-06-02 18:44:36', '2020-06-02 18:44:36');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `category_id`, `slug`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Demo sub category 134', 2, 'Demo-sub-category-134', 'Demo sub category 134', '34', '2019-03-12 06:13:24', '2020-04-21 10:58:50'),
(2, 'Demo sub category 2', 1, 'Demo-sub-category-2', 'Demo sub category 2', NULL, '2019-03-12 06:13:44', '2019-08-06 06:07:14'),
(3, 'Demo sub category 3', 1, 'Demo-sub-category-3', 'Demo sub category 3', NULL, '2019-03-12 06:13:59', '2019-08-06 06:07:14'),
(4, 'Demo sub category 1', 2, 'Demo-sub-category-1', 'Demo sub category 1', NULL, '2019-03-12 06:18:25', '2019-08-06 06:07:14'),
(5, 'Demo sub category 2', 2, 'Demo-sub-category-2', 'Demo sub category 2', NULL, '2019-03-12 06:18:38', '2019-08-06 06:07:14'),
(6, 'Demo sub category 3', 2, 'Demo-sub-category-3', 'Demo sub category 3', NULL, '2019-03-12 06:18:51', '2019-08-06 06:07:14');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_categories`
--

CREATE TABLE `sub_sub_categories` (
  `id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_sub_categories`
--

INSERT INTO `sub_sub_categories` (`id`, `sub_category_id`, `name`, `slug`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Demo sub sub category', 'Demo-sub-sub-category', 'Demo sub sub category', NULL, '2019-03-12 06:19:49', '2019-08-06 06:07:19'),
(2, 1, 'Demo sub sub category 2', 'Demo-sub-sub-category-2', 'Demo sub sub category 2', NULL, '2019-03-12 06:20:23', '2019-08-06 06:07:19'),
(3, 1, 'Demo sub sub category 3', 'Demo-sub-sub-category-3', 'Demo sub sub category 3', NULL, '2019-03-12 06:20:43', '2019-08-06 06:07:19'),
(4, 2, 'Demo sub sub category 1', 'Demo-sub-sub-category-1', 'Demo sub sub category 1', NULL, '2019-03-12 06:21:28', '2019-08-06 06:07:19'),
(5, 2, 'Demo sub sub category 2', 'Demo-sub-sub-category-2', 'Demo sub sub category 2', NULL, '2019-03-12 06:21:40', '2019-08-06 06:07:19'),
(6, 2, 'Demo sub sub category 3', 'Demo-sub-sub-category-3', 'Demo sub sub category 3', NULL, '2019-03-12 06:21:56', '2019-08-06 06:07:19'),
(7, 3, 'Demo sub sub category 1', 'Demo-sub-sub-category-1', 'Demo sub sub category 1', NULL, '2019-03-12 06:23:31', '2019-08-06 06:07:19'),
(8, 3, 'Demo sub sub category 3', 'Demo-sub-sub-category-3', 'Demo sub sub category 3', NULL, '2019-03-12 06:23:48', '2019-08-06 06:07:19'),
(9, 3, 'Demo sub sub category 3', 'Demo-sub-sub-category-3', 'Demo sub sub category 3', NULL, '2019-03-12 06:24:01', '2019-08-06 06:07:19'),
(10, 4, 'Demo sub sub category 1', 'Demo-sub-sub-category-1', 'Demo sub sub category 1', NULL, '2019-03-12 06:24:37', '2019-08-06 06:07:19'),
(11, 4, 'Demo sub sub category 2', 'Demo-sub-sub-category-2', 'Demo sub sub category 2', NULL, '2019-03-12 06:25:14', '2019-08-06 06:07:19'),
(12, 4, 'Demo sub sub category', 'Demo-sub-sub-category', 'Demo sub sub category', NULL, '2019-03-12 06:25:25', '2019-08-06 06:07:19'),
(13, 5, 'Demo sub sub category 1', 'Demo-sub-sub-category-1', 'Demo sub sub category 1', NULL, '2019-03-12 06:25:58', '2019-08-06 06:07:19'),
(14, 6, 'Demo sub sub category 1', 'Demo-sub-sub-category-1', 'Demo sub sub category 1', NULL, '2019-03-12 06:26:16', '2019-08-06 06:07:19');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `code` int(6) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `files` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending',
  `viewed` int(1) NOT NULL DEFAULT 0,
  `client_viewed` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_replies`
--

CREATE TABLE `ticket_replies` (
  `id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reply` longtext COLLATE utf8_unicode_ci NOT NULL,
  `files` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `top_notes`
--

CREATE TABLE `top_notes` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `top_notes`
--

INSERT INTO `top_notes` (`id`, `category_id`, `name`, `image`, `banner_image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, '2', 'Karen Vega', 'uploads/topnotes/Ml5r5yJPwVmv0E2ykz5mMQ5uQKosQwWfsZEiax6S.jpeg', 'uploads/topnotes/Ml5r5yJPwVmv0E2ykz5mMQ5uQKosQwWfsZEiax6S.jpeg', 'dasdasdas', 1, '2020-05-10 11:26:22', '2020-05-10 11:26:22'),
(2, '2', 'Acai berry', 'uploads/topnotes/pE4zyFzFJCx7P1NmmJDSQBnyEoIViWG4g5a9jwi8.jpeg', 'uploads/topnotes/pE4zyFzFJCx7P1NmmJDSQBnyEoIViWG4g5a9jwi8.jpeg', 'Description', 1, '2020-05-10 11:26:22', '2020-05-10 11:26:22'),
(3, '1', 'Karen Vega', 'uploads/topnotes/N9WFyYZkRJDcyismnUwppTlazjnIjW2fdnhJtK4Y.jpeg', 'uploads/topnotes/N9WFyYZkRJDcyismnUwppTlazjnIjW2fdnhJtK4Y.jpeg', 'Description', 1, '2020-05-10 11:26:22', '2020-05-10 11:26:22'),
(4, '3', 'Tcai berry', 'uploads/topnotes/FlcTdiJJ1K7yNR2Ln0lTH9ZGuflDTuYv0kj3GHPB.jpeg', 'uploads/topnotes/FlcTdiJJ1K7yNR2Ln0lTH9ZGuflDTuYv0kj3GHPB.jpeg', 'Description', 1, '2020-05-10 11:26:22', '2020-05-10 11:26:22'),
(5, '2', 'Karen Vega', 'uploads/topnotes/Ml5r5yJPwVmv0E2ykz5mMQ5uQKosQwWfsZEiax6S.jpeg', 'uploads/topnotes/Ml5r5yJPwVmv0E2ykz5mMQ5uQKosQwWfsZEiax6S.jpeg', 'dasdasdas', 1, '2020-05-10 11:26:25', '2020-05-29 03:09:46'),
(6, '3', 'Acai berry', 'uploads/topnotes/pE4zyFzFJCx7P1NmmJDSQBnyEoIViWG4g5a9jwi8.jpeg', 'uploads/topnotes/pE4zyFzFJCx7P1NmmJDSQBnyEoIViWG4g5a9jwi8.jpeg', 'Description', 1, '2020-05-10 11:26:25', '2020-05-10 11:26:25'),
(7, '4', 'Karen Vega', 'uploads/topnotes/N9WFyYZkRJDcyismnUwppTlazjnIjW2fdnhJtK4Y.jpeg', 'uploads/topnotes/N9WFyYZkRJDcyismnUwppTlazjnIjW2fdnhJtK4Y.jpeg', 'Description', 1, '2020-05-10 11:26:25', '2020-05-10 11:26:25'),
(8, '4', 'Tcai berry', 'uploads/topnotes/FlcTdiJJ1K7yNR2Ln0lTH9ZGuflDTuYv0kj3GHPB.jpeg', 'uploads/topnotes/FlcTdiJJ1K7yNR2Ln0lTH9ZGuflDTuYv0kj3GHPB.jpeg', 'Description', 1, '2020-05-10 11:26:25', '2020-05-10 11:26:25'),
(9, '2', 'Karen Vega', 'uploads/topnotes/Ml5r5yJPwVmv0E2ykz5mMQ5uQKosQwWfsZEiax6S.jpeg', 'uploads/topnotes/Ml5r5yJPwVmv0E2ykz5mMQ5uQKosQwWfsZEiax6S.jpeg', 'dasdasdas', 1, '2020-05-10 11:26:25', '2020-05-29 03:09:46'),
(10, '2', 'Karen Vega', 'uploads/topnotes/Ml5r5yJPwVmv0E2ykz5mMQ5uQKosQwWfsZEiax6S.jpeg', 'uploads/topnotes/Ml5r5yJPwVmv0E2ykz5mMQ5uQKosQwWfsZEiax6S.jpeg', 'dasdasdas', 1, '2020-05-10 11:26:25', '2020-05-29 03:09:46'),
(11, '3', 'Acai berry', 'uploads/topnotes/pE4zyFzFJCx7P1NmmJDSQBnyEoIViWG4g5a9jwi8.jpeg', 'uploads/topnotes/pE4zyFzFJCx7P1NmmJDSQBnyEoIViWG4g5a9jwi8.jpeg', 'Description', 1, '2020-05-10 11:26:25', '2020-05-10 11:26:25'),
(12, '2', 'Acai berry', 'uploads/topnotes/pE4zyFzFJCx7P1NmmJDSQBnyEoIViWG4g5a9jwi8.jpeg', 'uploads/topnotes/pE4zyFzFJCx7P1NmmJDSQBnyEoIViWG4g5a9jwi8.jpeg', 'Description', 1, '2020-05-10 11:26:22', '2020-05-10 11:26:22'),
(13, '2', 'Karen Vega', 'uploads/topnotes/Ml5r5yJPwVmv0E2ykz5mMQ5uQKosQwWfsZEiax6S.jpeg', 'uploads/topnotes/Ml5r5yJPwVmv0E2ykz5mMQ5uQKosQwWfsZEiax6S.jpeg', 'dasdasdas', 1, '2020-05-10 11:26:25', '2020-05-29 03:09:46'),
(14, '2', 'Acai berry', 'uploads/topnotes/pE4zyFzFJCx7P1NmmJDSQBnyEoIViWG4g5a9jwi8.jpeg', 'uploads/topnotes/pE4zyFzFJCx7P1NmmJDSQBnyEoIViWG4g5a9jwi8.jpeg', 'Description', 1, '2020-05-10 11:26:22', '2020-05-10 11:26:22'),
(15, '4', 'Karen Vega', 'uploads/topnotes/N9WFyYZkRJDcyismnUwppTlazjnIjW2fdnhJtK4Y.jpeg', 'uploads/topnotes/N9WFyYZkRJDcyismnUwppTlazjnIjW2fdnhJtK4Y.jpeg', 'Description', 1, '2020-05-10 11:26:25', '2020-05-10 11:26:25'),
(16, '2', 'Karen Vega', 'uploads/topnotes/Ml5r5yJPwVmv0E2ykz5mMQ5uQKosQwWfsZEiax6S.jpeg', 'uploads/topnotes/Ml5r5yJPwVmv0E2ykz5mMQ5uQKosQwWfsZEiax6S.jpeg', 'dasdasdas', 1, '2020-05-10 11:26:22', '2020-05-10 11:26:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `referred_by` int(11) DEFAULT NULL,
  `provider_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_type` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'customer',
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar_original` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birth_date` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `balance` double(8,2) NOT NULL DEFAULT 0.00,
  `referral_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `newsletter` tinyint(1) NOT NULL DEFAULT 0,
  `notification` tinyint(1) NOT NULL DEFAULT 0,
  `sample` tinyint(1) NOT NULL DEFAULT 0,
  `public_profile` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `referred_by`, `provider_id`, `user_type`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `avatar`, `avatar_original`, `address`, `country`, `city`, `postal_code`, `phone`, `gender`, `birth_date`, `balance`, `referral_code`, `newsletter`, `notification`, `sample`, `public_profile`, `created_at`, `updated_at`) VALUES
(3, NULL, NULL, 'seller', 'Mr. Seller', 'seller@example.com', '2018-12-11 18:00:00', '$2y$10$eUKRlkmm2TAug75cfGQ4i.WoUbcJ2uVPqUlVkox.cv4CCyGEIMQEm', '1zoU4eQxnOC5yxRWLsTzMNBPpJuOvTk4g3GMUVYIrbGijiXHOfIlFq0wHrIn', 'https://lh3.googleusercontent.com/-7OnRtLyua5Q/AAAAAAAAAAI/AAAAAAAADRk/VqWKMl4f8CI/photo.jpg?sz=50', 'uploads/ucQhvfz4EQXNeTbN8Eif0Cpq5LnOwvg8t7qKNKVs.jpeg', 'Demo address', 'US', 'Demo city', '1234', NULL, NULL, '01/01/1998', 0.00, '3dLUoHsR1l', 0, 0, 0, 0, '2018-10-07 04:42:57', '2020-03-05 01:33:22'),
(8, NULL, NULL, 'customer', 'Mr. Customer', 'customer@example.com', '2018-12-11 18:00:00', '$2y$10$eUKRlkmm2TAug75cfGQ4i.WoUbcJ2uVPqUlVkox.cv4CCyGEIMQEm', '9ndcz5o7xgnuxctJIbvUQcP41QKmgnWCc7JDSnWdHOvipOP2AijpamCNafEe', 'https://lh3.googleusercontent.com/-7OnRtLyua5Q/AAAAAAAAAAI/AAAAAAAADRk/VqWKMl4f8CI/photo.jpg?sz=50', 'uploads/ucQhvfz4EQXNeTbN8Eif0Cpq5LnOwvg8t7qKNKVs.jpeg', 'Demo address', 'US', 'Demo city', '1234', NULL, NULL, '01/01/1998', 0.00, '8zJTyXTlTT', 0, 0, 0, 0, '2018-10-07 04:42:57', '2020-03-03 04:26:11'),
(12, NULL, NULL, 'admin', 'myfragranceme', 'jmrashed@gmail.com', '2020-04-12 00:04:38', '$2y$10$6oLmRrFm3xgI7Drd.PRv/u31zohaTnLhGnrp5J3jy3wlj0NksaWHa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01-01-1998', 0.00, NULL, 0, 0, 0, 0, '2020-04-12 00:47:38', '2020-04-12 00:47:38'),
(13, NULL, NULL, 'customer', 'Api test', 'api@demo.com', '2020-05-04 18:00:00', '$2y$10$xb4lhOGszEhaWDcsV7PKre/bpKsVXaRRcFowAuzlQmCDlRtuT2e/O', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, NULL, 0, 0, 0, 0, '2020-05-14 10:16:10', '2020-05-14 10:16:10'),
(14, NULL, NULL, 'customer', 'Pranta', 'pranr@demo.com', '2020-05-07 18:00:00', '$2y$10$De1hlJMQZ/UnWMit9FQNBuB80gFf81jMrzUWOPaSx8HoSfjkDCLK6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, NULL, 0, 0, 0, 0, '2020-05-14 10:19:48', '2020-05-14 10:19:48'),
(15, NULL, NULL, 'customer', 'john Deo', 'john@gmail.com', NULL, '$2y$10$svrXOu0vchzW4y.enCEJfuSKt2AdspiPqpbl/yui9XMxKjJ/CT8n.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, NULL, 0, 0, 0, 0, '2020-05-16 10:29:59', '2020-05-16 10:29:59'),
(16, NULL, NULL, 'customer', 'john Deo', 'john12@gmail.com', NULL, '$2y$10$CGigksdiABX3WUZgDV/jreo6oKoxcM6h4j2ppiJvTpyXknh08GKom', NULL, NULL, 'image/png', NULL, NULL, NULL, NULL, NULL, 'male', '0000-00-00 00:00:00', 0.00, NULL, 0, 0, 0, 0, '2020-05-16 11:33:21', '2020-05-16 11:33:21'),
(17, NULL, NULL, 'customer', 'Mr Customers', 'jhicusr@gmail.com', '2020-05-16 11:39:04', '$2y$10$5jum4U1gojUOATUlYmjUJ.FJBPGHbnrODiOtWoTux1hlSmKKBSRWG', NULL, NULL, 'image/png', NULL, NULL, NULL, NULL, NULL, 'male', '0000-00-00 00:00:00', 0.00, NULL, 0, 0, 0, 0, '2020-05-16 11:39:04', '2020-05-16 11:39:04'),
(18, NULL, NULL, 'customer', 'Api Name', 'api@infoio.com', '2020-05-19 09:01:36', '$2y$10$B.HVsLLlrkK/O1n3z2hyDun/iCJCpuv6fdtFFl/SbloX4yurLnmN.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', 0.00, NULL, 0, 0, 0, 0, '2020-05-19 09:01:37', '2020-05-19 09:01:37'),
(19, NULL, NULL, 'customer', 'Api Name', 'api2@infoio.com', '2020-05-19 09:05:48', '$2y$10$o1NfnAmOGP/EhgauqCBY9.gg8WSlXWkRsNsdtMuSZ2oGNm6L7av86', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', 0.00, NULL, 1, 1, 0, 0, '2020-05-19 09:05:48', '2020-05-19 09:05:48'),
(20, NULL, NULL, 'customer', 'Api Name', 'api3@infoio.com', '2020-05-19 09:10:15', '$2y$10$ddxcVHf.KOy3defobJTjN.3t847ZttkksN8iFkkfq6w/4cQpAS0Aa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7070-01-01 00:00:00', 0.00, NULL, 1, 1, 1, 1, '2020-05-19 09:10:15', '2020-05-19 09:10:15'),
(21, NULL, NULL, 'customer', 'Api Name', 'api31@infoio.com', '2020-05-19 09:10:50', '$2y$10$Ihubuyb7l.01gdw3yv0DEOenpCafYf1/pAqXHU1M0iBB4XIAMIw06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', 0.00, NULL, 1, 1, 1, 1, '2020-05-19 09:10:50', '2020-05-19 09:10:50'),
(22, NULL, NULL, 'customer', 'Api Name', 'api311@infoio.com', '2020-05-19 09:17:36', '$2y$10$RNCpjavY2h9NDS4r0X6qT.NVxcKR/YFNyuNbmKGweEbYgIIO/8Lgq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, NULL, 1, 1, 1, 1, '2020-05-19 09:17:36', '2020-05-19 09:17:36'),
(23, NULL, NULL, 'customer', 'Api Name', 'api3s@infoio.com', '2020-05-19 09:18:55', '$2y$10$8Ip7mASJVuHf7HSiKsNfgOC87gZMVNpn7aUevflU3guL6ic/CAT4K', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', 0.00, NULL, 1, 1, 1, 1, '2020-05-19 09:18:55', '2020-05-19 09:18:55'),
(24, NULL, NULL, 'customer', 'Api Name', 'api3s1@infoio.com', '2020-05-19 09:20:16', '$2y$10$OGJCLggfXfGD/kJXr.Pt6esfVUj3Eey0sSh/C9rHF0WXN9wv3FtNG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', 0.00, NULL, 1, 1, 1, 1, '2020-05-19 09:20:16', '2020-05-19 09:20:16'),
(25, NULL, NULL, 'customer', 'Tuusss Tuss', 'tus@gmail.com', '2020-05-24 05:47:04', '$2y$10$EHwAtKN.s5w/Ux9wTfVVD.rk6rbBeGJS2KMy4vQwFa3RcuC5IGxJG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '021514515', 'Male', '1995-03-12 00:00:00', 0.00, NULL, 1, 1, 1, 1, '2020-05-24 05:47:04', '2020-05-24 05:47:04'),
(26, NULL, NULL, 'customer', 'Tuusss Tuss', 'tus22@gmail.com', '2020-05-24 05:51:34', '$2y$10$.VeT0CSntR4wwIf1QMZPpO3Fgi7S5tZPzL1YELnrtBDvY1B6ThMMi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '021514515', 'Male', '1995-03-12 00:00:00', 0.00, NULL, 1, 1, 1, 1, '2020-05-24 05:51:34', '2020-05-24 05:51:34'),
(27, NULL, NULL, 'customer', 'Abid hossain', 'abid@gmail.com', '2020-06-03 05:06:24', '$2y$10$pD9x7yYB2GSzTL.6hHXyvuDieRIR39v0TdKv0eV0s0wRDPpQ5U0Dq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, NULL, 0, 0, 0, 0, '2020-06-03 05:14:24', '2020-06-03 05:14:24');

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `payment_method` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_details` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_pages`
--
ALTER TABLE `all_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ask_questions`
--
ALTER TABLE `ask_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `base_notes`
--
ALTER TABLE `base_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `base_note_product`
--
ALTER TABLE `base_note_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blend_subscriptions`
--
ALTER TABLE `blend_subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloggers`
--
ALTER TABLE `bloggers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_category_id_foreign` (`category_id`),
  ADD KEY `blogs_created_by_foreign` (`created_by`),
  ADD KEY `blogs_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_categories_created_by_foreign` (`created_by`),
  ADD KEY `blog_categories_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_comments_blog_id_foreign` (`blog_id`),
  ADD KEY `blog_comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_settings`
--
ALTER TABLE `business_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_replies`
--
ALTER TABLE `comment_replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_replies_user_id_foreign` (`user_id`),
  ADD KEY `comment_replies_comment_id_foreign` (`comment_id`);

--
-- Indexes for table `compare_lists`
--
ALTER TABLE `compare_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon_usages`
--
ALTER TABLE `coupon_usages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distributors`
--
ALTER TABLE `distributors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_categories`
--
ALTER TABLE `faq_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_helpfuls`
--
ALTER TABLE `faq_helpfuls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `first_sliders`
--
ALTER TABLE `first_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flash_deals`
--
ALTER TABLE `flash_deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flash_deal_products`
--
ALTER TABLE `flash_deal_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_tops`
--
ALTER TABLE `header_tops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_categories`
--
ALTER TABLE `home_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ideas`
--
ALTER TABLE `ideas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `middle_notes`
--
ALTER TABLE `middle_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `middle_note_product`
--
ALTER TABLE `middle_note_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes_categories`
--
ALTER TABLE `notes_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perfumes`
--
ALTER TABLE `perfumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_requests`
--
ALTER TABLE `personal_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pickup_points`
--
ALTER TABLE `pickup_points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `press_contacts`
--
ALTER TABLE `press_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `press_lists`
--
ALTER TABLE `press_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `press_settings`
--
ALTER TABLE `press_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_stocks`
--
ALTER TABLE `product_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_top_note`
--
ALTER TABLE `product_top_note`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recent_views`
--
ALTER TABLE `recent_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `searches`
--
ALTER TABLE `searches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_withdraw_requests`
--
ALTER TABLE `seller_withdraw_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_settings`
--
ALTER TABLE `seo_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category_id` (`category_id`);

--
-- Indexes for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sub_category_id` (`sub_category_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_replies`
--
ALTER TABLE `ticket_replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_notes`
--
ALTER TABLE `top_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addons`
--
ALTER TABLE `addons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `all_pages`
--
ALTER TABLE `all_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ask_questions`
--
ALTER TABLE `ask_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `base_notes`
--
ALTER TABLE `base_notes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `base_note_product`
--
ALTER TABLE `base_note_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blend_subscriptions`
--
ALTER TABLE `blend_subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bloggers`
--
ALTER TABLE `bloggers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `business_settings`
--
ALTER TABLE `business_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `comment_replies`
--
ALTER TABLE `comment_replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `compare_lists`
--
ALTER TABLE `compare_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=297;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupon_usages`
--
ALTER TABLE `coupon_usages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `distributors`
--
ALTER TABLE `distributors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faq_categories`
--
ALTER TABLE `faq_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faq_helpfuls`
--
ALTER TABLE `faq_helpfuls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `first_sliders`
--
ALTER TABLE `first_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `flash_deals`
--
ALTER TABLE `flash_deals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flash_deal_products`
--
ALTER TABLE `flash_deal_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header_tops`
--
ALTER TABLE `header_tops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_categories`
--
ALTER TABLE `home_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ideas`
--
ALTER TABLE `ideas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `middle_notes`
--
ALTER TABLE `middle_notes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `middle_note_product`
--
ALTER TABLE `middle_note_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notes_categories`
--
ALTER TABLE `notes_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perfumes`
--
ALTER TABLE `perfumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_requests`
--
ALTER TABLE `personal_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pickup_points`
--
ALTER TABLE `pickup_points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `press_contacts`
--
ALTER TABLE `press_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `press_lists`
--
ALTER TABLE `press_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `press_settings`
--
ALTER TABLE `press_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_stocks`
--
ALTER TABLE `product_stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_top_note`
--
ALTER TABLE `product_top_note`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `recent_views`
--
ALTER TABLE `recent_views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `searches`
--
ALTER TABLE `searches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seller_withdraw_requests`
--
ALTER TABLE `seller_withdraw_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_settings`
--
ALTER TABLE `seo_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_replies`
--
ALTER TABLE `ticket_replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `top_notes`
--
ALTER TABLE `top_notes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `blog_categories` (`id`),
  ADD CONSTRAINT `blogs_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `blogs_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD CONSTRAINT `blog_categories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `blog_categories_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD CONSTRAINT `blog_comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `comment_replies`
--
ALTER TABLE `comment_replies`
  ADD CONSTRAINT `comment_replies_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `blog_comments` (`id`),
  ADD CONSTRAINT `comment_replies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
