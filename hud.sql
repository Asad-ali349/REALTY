-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2022 at 05:44 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hud`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounting_docs`
--

CREATE TABLE `accounting_docs` (
  `id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `doc_name` varchar(500) NOT NULL,
  `doc_url` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounting_docs`
--

INSERT INTO `accounting_docs` (`id`, `account_id`, `doc_name`, `doc_url`, `created_at`, `updated_at`) VALUES
(1, 5, 'docs', 'Bill_Images/623c811458d272022-03-24-15-32-52The-Metaverse-2.jpg', '2022-03-24 14:32:52', '2022-03-24 14:32:52'),
(2, 5, 'doc1 ', 'Bill_Images/623c8114db5912022-03-24-15-32-52girl23.png', '2022-03-24 14:32:52', '2022-03-24 14:32:52');

-- --------------------------------------------------------

--
-- Table structure for table `case_docs`
--

CREATE TABLE `case_docs` (
  `id` int(11) NOT NULL,
  `case_id` varchar(255) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `doc_url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case_docs`
--

INSERT INTO `case_docs` (`id`, `case_id`, `doc_name`, `doc_url`, `created_at`) VALUES
(1, '155', 'Document 1', 'Case_Docs/62372c22f07cd2022-03-20-14-29-067454.pdf', '2022-03-20 13:29:06'),
(2, '155', 'Document 2', 'Case_Docs/62372c230c0ce2022-03-20-14-29-0717086.pdf', '2022-03-20 13:29:07'),
(3, '155', 'Document 3', 'Case_Docs/62372c231af232022-03-20-14-29-0721006.pdf', '2022-03-20 13:29:07');

-- --------------------------------------------------------

--
-- Table structure for table `case_images`
--

CREATE TABLE `case_images` (
  `id` int(11) NOT NULL,
  `case_id` varchar(255) NOT NULL,
  `image_url` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case_images`
--

INSERT INTO `case_images` (`id`, `case_id`, `image_url`, `created_at`) VALUES
(1, '155', 'Case_Gallery/62372bfc1e2ee2022-03-20-14-28-288858.png', '2022-03-20 13:28:28'),
(2, '155', 'Case_Gallery/62372bfc3b1b62022-03-20-14-28-2811862.png', '2022-03-20 13:28:28'),
(3, '155', 'Case_Gallery/62372bfc47d0c2022-03-20-14-28-2812172.png', '2022-03-20 13:28:28'),
(4, '155', 'Case_Gallery/62372bfc63bea2022-03-20-14-28-2812926.png', '2022-03-20 13:28:28'),
(5, '155', 'Case_Gallery/62372bfc70e2a2022-03-20-14-28-2815700.png', '2022-03-20 13:28:28'),
(6, '155', 'Case_Gallery/62372bfc79c3a2022-03-20-14-28-2818146.png', '2022-03-20 13:28:28');

-- --------------------------------------------------------

--
-- Table structure for table `property_accounting`
--

CREATE TABLE `property_accounting` (
  `id` int(11) NOT NULL,
  `case_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `bill_image` varchar(300) NOT NULL,
  `memo` varchar(5000) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_accounting`
--

INSERT INTO `property_accounting` (`id`, `case_id`, `name`, `type`, `date`, `amount`, `bill_image`, `memo`, `vendor_id`, `created_at`, `updated_at`) VALUES
(3, 155, 'account', 3, '2022-03-02', '520.00', 'Bill_Images/623afc957ca242022-03-23-11-55-17WEB BANNER DESIGN.png', 'siuixk ndcho d', 12, '2022-03-23 10:55:17', '2022-03-23 10:55:17'),
(4, 155, 'asad', 3, '2022-03-10', '45.00', 'Bill_Images/623c79e1e99b22022-03-24-15-02-09screencapture-mobisoftinfotech-resources-blog-android-11-vs-android-10-2022-03-22-23_49_14.png', 'jknjkh', 12, '2022-03-24 14:02:10', '2022-03-24 14:02:10'),
(5, 155, 'new acc', 2, '2022-03-08', '600.00', '', 'i am new acc', 11, '2022-03-24 14:32:49', '2022-03-24 15:23:20');

-- --------------------------------------------------------

--
-- Table structure for table `property_case`
--

CREATE TABLE `property_case` (
  `id` int(11) NOT NULL,
  `case_id` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` int(11) NOT NULL,
  `county` varchar(255) NOT NULL,
  `price` varchar(250) NOT NULL,
  `bed` int(11) NOT NULL,
  `bath` varchar(255) NOT NULL,
  `bid_open_date` varchar(250) NOT NULL,
  `eligible_bidders` varchar(500) NOT NULL,
  `bid_submission_dealine` varchar(255) NOT NULL,
  `rooms` int(11) NOT NULL,
  `square_feet` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `house_type` varchar(255) NOT NULL,
  `number_of_stories` int(11) NOT NULL,
  `hoa_fees` varchar(255) NOT NULL,
  `revitalization_area` varchar(255) NOT NULL,
  `opportunity_zone` varchar(255) NOT NULL,
  `fema_flood_zone` varchar(255) NOT NULL,
  `lot_size` varchar(255) NOT NULL,
  `list_date` varchar(255) NOT NULL,
  `listing_period` varchar(500) NOT NULL,
  `period_deadline` varchar(500) NOT NULL,
  `list_price` varchar(255) NOT NULL,
  `fha_financing` varchar(255) NOT NULL,
  `k_eligible` varchar(255) NOT NULL,
  `parking` varchar(255) NOT NULL,
  `foundation_type` varchar(255) NOT NULL,
  `asset_company_name` varchar(255) NOT NULL,
  `asset_contact_name` varchar(255) NOT NULL,
  `asset_address` varchar(500) NOT NULL,
  `asset_phone_number` varchar(255) NOT NULL,
  `asset_fax` varchar(255) NOT NULL,
  `asset_email` varchar(255) NOT NULL,
  `asset_website` varchar(255) NOT NULL,
  `asset_additional_comments` varchar(1000) NOT NULL,
  `field_company_name` varchar(255) NOT NULL,
  `field_contact_name` varchar(255) NOT NULL,
  `field_address` varchar(500) NOT NULL,
  `field_phone_number` varchar(255) NOT NULL,
  `field_fax_number` varchar(255) NOT NULL,
  `field_email` varchar(255) NOT NULL,
  `field_website` varchar(255) NOT NULL,
  `field_comments` varchar(1000) NOT NULL,
  `listing_company_name` varchar(255) NOT NULL,
  `listing_contact_name` varchar(255) NOT NULL,
  `listing_address` varchar(500) NOT NULL,
  `listing_phone_number` varchar(255) NOT NULL,
  `listing_fax` varchar(255) NOT NULL,
  `listing_email` varchar(255) NOT NULL,
  `primary_image` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_case`
--

INSERT INTO `property_case` (`id`, `case_id`, `address`, `city`, `state`, `zip`, `county`, `price`, `bed`, `bath`, `bid_open_date`, `eligible_bidders`, `bid_submission_dealine`, `rooms`, `square_feet`, `year`, `house_type`, `number_of_stories`, `hoa_fees`, `revitalization_area`, `opportunity_zone`, `fema_flood_zone`, `lot_size`, `list_date`, `listing_period`, `period_deadline`, `list_price`, `fha_financing`, `k_eligible`, `parking`, `foundation_type`, `asset_company_name`, `asset_contact_name`, `asset_address`, `asset_phone_number`, `asset_fax`, `asset_email`, `asset_website`, `asset_additional_comments`, `field_company_name`, `field_contact_name`, `field_address`, `field_phone_number`, `field_fax_number`, `field_email`, `field_website`, `field_comments`, `listing_company_name`, `listing_contact_name`, `listing_address`, `listing_phone_number`, `listing_fax`, `listing_email`, `primary_image`, `created_at`) VALUES
(1, '155', 'streetaddress', 'city', '1', 100, 'Pakistan', '255', 11, '12', '2022-03-21', 'builders', '2022-03-21', 10, '55', 2000, 'own', 2, '2000', 'Yes', 'Yes', 'Yes', '22', '2022-03-29', '874651', '2022-04-04', '852', '7845120', 'No', 'yes', 'slab', 'Bonanza', 'asad', 'asasaaaaaaaaaa', '123456789', '4545454', 'asad@gmail.com', 'google.com', 'i am additional comment', 'aaaa', 'asad', 'address of field', '+929212345678', '4655446', 'asadking066@gmail.com', 'youtuble.com', 'i am a comment', 'Gul Ahamd', 'asad', 'address  of list', '+929212345678', '794123', 'asadking066@gmail.com', 'PrimaryImages/2022-03-20-14-27-47girl23.png', '2022-03-20 13:27:47');

-- --------------------------------------------------------

--
-- Table structure for table `property_state`
--

CREATE TABLE `property_state` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_state`
--

INSERT INTO `property_state` (`id`, `name`) VALUES
(1, 'AK'),
(2, 'AL'),
(3, 'AR'),
(4, 'AS'),
(5, 'AZ'),
(6, 'CA'),
(7, 'CO'),
(8, 'CT'),
(9, 'DC'),
(10, 'DE'),
(11, 'FL'),
(12, 'GA'),
(13, 'GU'),
(14, 'HI'),
(15, 'IA'),
(16, 'ID'),
(17, 'IL'),
(18, 'IN'),
(19, 'KS'),
(20, 'KY'),
(21, 'LA'),
(22, 'MA'),
(23, 'MD'),
(24, 'ME'),
(25, 'MI'),
(26, 'MN'),
(27, 'MO'),
(28, 'MP'),
(29, 'MS'),
(30, 'MT'),
(31, 'NC'),
(32, 'ND'),
(33, 'NE'),
(34, 'NH'),
(35, 'NJ'),
(36, 'NM'),
(37, 'NV'),
(38, 'NY'),
(39, 'OH'),
(40, 'OK'),
(41, 'OR'),
(42, 'PA'),
(43, 'PR'),
(44, 'RI'),
(45, 'SC'),
(46, 'SD'),
(47, 'TN'),
(48, 'TX'),
(49, 'UT'),
(50, 'VA'),
(51, 'VI'),
(52, 'VT'),
(53, 'WA'),
(54, 'WI'),
(55, 'WV'),
(56, 'WY');

-- --------------------------------------------------------

--
-- Table structure for table `service_type`
--

CREATE TABLE `service_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_type`
--

INSERT INTO `service_type` (`id`, `name`) VALUES
(1, 'Price Property'),
(2, 'Financing'),
(3, 'Repairs'),
(4, 'Appliances'),
(5, 'Permits'),
(6, 'Contractor');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `user_role_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `contact`, `street`, `city`, `state`, `zip`, `country`, `user_role_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'asad', 'asad@gmail.com', '100', '45454645543', 'street', 'city', 'sdsdsd', 454565, 'sdsdsdsd', 1, 1, '2022-03-12 15:41:43', '2022-03-14 13:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2022-03-12 15:40:32', '2022-03-12 15:40:32'),
(2, 'manager', '2022-03-12 15:40:32', '2022-03-12 15:40:32');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `memo` varchar(5000) NOT NULL,
  `type` int(11) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `email`, `phone`, `memo`, `type`, `street`, `city`, `state`, `zip`, `country`, `created_at`, `updated_at`) VALUES
(11, 'asad', 'asadking066@gmail.com', '+929212345678', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has surspecimen book. It has sur', 6, 'street', 'city@gmail.com', 'state', '52250', 'Pakistan', '2022-03-21 19:46:45', '2022-03-22 16:14:53'),
(12, 'asad', 'asadking066@gmail.com', '+929212345678', 'djslkjdskljdls', 6, 'street', 'city@gmail.com', 'state', '52250', 'Pakistan', '2022-03-21 19:47:16', '2022-03-21 19:47:16');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_docs`
--

CREATE TABLE `vendor_docs` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `doc_url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_docs`
--

INSERT INTO `vendor_docs` (`id`, `vendor_id`, `doc_name`, `doc_url`, `created_at`, `updated_at`) VALUES
(8, 11, 'doc3', 'vendor_docs/6239f4b22781d2022-03-22-17-09-22Cover Wattpad.jpg', '2022-03-22 16:09:22', '2022-03-22 16:09:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounting_docs`
--
ALTER TABLE `accounting_docs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `case_docs`
--
ALTER TABLE `case_docs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `case_id` (`case_id`);

--
-- Indexes for table `case_images`
--
ALTER TABLE `case_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `case_id` (`case_id`);

--
-- Indexes for table `property_accounting`
--
ALTER TABLE `property_accounting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vendor_id` (`vendor_id`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `property_case`
--
ALTER TABLE `property_case`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `case_id` (`case_id`);

--
-- Indexes for table `property_state`
--
ALTER TABLE `property_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_type`
--
ALTER TABLE `service_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_role_id` (`user_role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `vendor_docs`
--
ALTER TABLE `vendor_docs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vendor_id` (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounting_docs`
--
ALTER TABLE `accounting_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `case_docs`
--
ALTER TABLE `case_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `case_images`
--
ALTER TABLE `case_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `property_accounting`
--
ALTER TABLE `property_accounting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `property_case`
--
ALTER TABLE `property_case`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `property_state`
--
ALTER TABLE `property_state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `service_type`
--
ALTER TABLE `service_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `vendor_docs`
--
ALTER TABLE `vendor_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounting_docs`
--
ALTER TABLE `accounting_docs`
  ADD CONSTRAINT `accounting_docs_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `property_accounting` (`id`);

--
-- Constraints for table `case_docs`
--
ALTER TABLE `case_docs`
  ADD CONSTRAINT `case_docs_ibfk_1` FOREIGN KEY (`case_id`) REFERENCES `property_case` (`case_id`);

--
-- Constraints for table `case_images`
--
ALTER TABLE `case_images`
  ADD CONSTRAINT `case_images_ibfk_1` FOREIGN KEY (`case_id`) REFERENCES `property_case` (`case_id`);

--
-- Constraints for table `property_accounting`
--
ALTER TABLE `property_accounting`
  ADD CONSTRAINT `property_accounting_ibfk_1` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`),
  ADD CONSTRAINT `property_accounting_ibfk_2` FOREIGN KEY (`type`) REFERENCES `service_type` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`user_role_id`) REFERENCES `user_role` (`id`);

--
-- Constraints for table `vendors`
--
ALTER TABLE `vendors`
  ADD CONSTRAINT `vendors_ibfk_1` FOREIGN KEY (`type`) REFERENCES `service_type` (`id`);

--
-- Constraints for table `vendor_docs`
--
ALTER TABLE `vendor_docs`
  ADD CONSTRAINT `vendor_docs_ibfk_1` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
