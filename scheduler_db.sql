-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20221125.2e001c186a
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 04:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scheduler_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(30) NOT NULL,
  `patient_id` int(30) NOT NULL,
  `date_sched` datetime NOT NULL,
  `ailment` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_id`, `date_sched`, `ailment`, `status`, `date_created`) VALUES
(8, 7, '2021-09-09 08:35:00', '', 0, '2021-09-02 23:08:04'),
(17, 16, '2022-09-17 08:12:00', 'masakit ang likod', 1, '2022-09-14 05:13:18'),
(18, 17, '2022-09-30 08:45:00', 'fds', 1, '2022-09-30 20:45:53'),
(19, 18, '2022-10-12 09:33:00', 'aasd', 2, '2022-10-02 21:33:11'),
(20, 19, '2022-10-04 09:17:00', 'sd', 1, '2022-10-03 17:18:15');

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE `form1` (
  `ID` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Birthday` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `CivilStatus` varchar(255) NOT NULL,
  `Religion` varchar(255) NOT NULL,
  `BirthOrder` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `HouseNo` varchar(255) NOT NULL,
  `Barangay` varchar(255) NOT NULL,
  `TownCity` varchar(255) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `MobileNumber` varchar(255) NOT NULL,
  `EmailAddres` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form1`
--

INSERT INTO `form1` (`ID`, `FullName`, `Birthday`, `Gender`, `CivilStatus`, `Religion`, `BirthOrder`, `Address`, `HouseNo`, `Barangay`, `TownCity`, `Province`, `MobileNumber`, `EmailAddres`) VALUES
(1, 'testname', 'test_bday', 'test_gender', 'test_civil_status', 'test_religion', 'test_birthorder', 'testaddress', 'test_house_No', 'test_barangay', 'test_town', 'test_province', 'test_mb', 'test_email'),
(2, 'testname', 'test_bday', 'test_gender', 'test_civil_status', 'test_religion', 'test_birthorder', 'testaddress', 'test_house_No', 'test_barangay', 'test_town', 'test_province', 'test_mb', 'test_email'),
(3, 'myname', 'December 08, 2000', 'MALE', 'SINGLE', 'ROMAN CATHOLIC', 'Tuy, Batangas', '', '000', 'LUNA', 'TUY', 'BATANGAS', '09123456789', 'johnhenry.liwag@g.batstate-u.edu.ph'),
(5, 'john', 'december', 'MALE', 'SINGLE', 'INC', 'SECOND', 'LUNA', '000', 'LUNA', 'TUY', 'BATANGAS', '09123456789', 'johnhenryliwag12@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `LoginID` int(11) NOT NULL,
  `Form1Status` int(11) NOT NULL,
  `Form2Status` int(11) NOT NULL,
  `Form3Status` int(11) NOT NULL,
  `Form4Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`LoginID`, `Form1Status`, `Form2Status`, `Form3Status`, `Form4Status`) VALUES
(1, 0, 0, 0, 0),
(12, 0, 0, 0, 0),
(14, 0, 0, 0, 0),
(15, 0, 0, 0, 0),
(18, 0, 0, 0, 0),
(19, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `img` blob NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 'Jaesleen', 'Vivas', 'jaesleenb.vivas@g.batstate-u.edu.ph', '$2y$10$SalJZ/LURquSmG4ABBrxgOX7GXAkBVSYecUg8fxWLBXxE4VgJgUom', '', 1),
(12, 'King Patrick', 'Torreliza', 'ktorreliza94@gmail.com', '$2y$10$1/Gbilp18j1JmoKLFEgKJe.tJ34RkOi0bVPq9eZqJN4i9k.5M0Dv2', '', 1),
(14, 'King', 'Torreliza', 'kingpatrick.torreliza@g.batstate-u.edu.ph', '$2y$10$bk0OuZTLhnLsLHDnUt7MxuTdUgSQn9T4o/RohbRp0gy2L3w.ywStO', '', 1),
(15, 'John', 'Liwag', 'johnhenryliwag@gmail.com', '$2y$10$sK82.A3JBanPdeFOK5gc/OCGsasmDgqx2CBXNuiVpX2k8UC8M8SP2', '', 0),
(18, 'Henry', 'Liwag', '[value-4]', '[value-5]', 0x5b76616c75652d365d, 0),
(19, 'John Henry', 'Liwag', 'johnhenry.liwag@g.batstate-u.edu.ph', '$2y$10$kDJy58RRfgTyB5/JxbP50eUI0os36K2JvyF35EdEcMCS6QWBUvb1u', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(107, 693901437, 627910790, 'hi'),
(108, 693901437, 627910790, 'https://www.youtube.com/watch?v=P6n8tw5cz9w'),
(109, 1454853193, 1235113998, 'hjgj'),
(110, 1103116787, 1454853193, 'asd'),
(111, 1103116787, 1454853193, 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `patient_list`
--

CREATE TABLE `patient_list` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_list`
--

INSERT INTO `patient_list` (`id`, `name`, `date_created`) VALUES
(16, 'King Patrick Torreliza', '2022-09-14 05:13:18'),
(17, 'asdasdas', '2022-09-30 20:45:53'),
(18, 'asdasdas', '2022-10-02 21:33:11'),
(19, 'King Patrick Torreliza', '2022-10-03 17:18:15');

-- --------------------------------------------------------

--
-- Table structure for table `patient_meta`
--

CREATE TABLE `patient_meta` (
  `patient_id` int(30) NOT NULL,
  `meta_field` text DEFAULT NULL,
  `meta_value` text DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_meta`
--

INSERT INTO `patient_meta` (`patient_id`, `meta_field`, `meta_value`, `date_created`) VALUES
(16, 'id', '17', '2022-09-14 05:14:01'),
(16, 'patient_id', '16', '2022-09-14 05:14:01'),
(16, 'name', 'King Patrick Torreliza', '2022-09-14 05:14:01'),
(16, 'email', 'ktorreliza94@gmail.com', '2022-09-14 05:14:01'),
(16, 'contact', '123123', '2022-09-14 05:14:01'),
(16, 'gender', 'Male', '2022-09-14 05:14:01'),
(16, 'dob', '2020-03-18', '2022-09-14 05:14:01'),
(16, 'address', 'nasugbu batangas\r\nlapu-lapu st.', '2022-09-14 05:14:01'),
(17, 'id', '18', '2022-10-02 21:35:39'),
(17, 'patient_id', '17', '2022-10-02 21:35:39'),
(17, 'name', 'asdasdas', '2022-10-02 21:35:39'),
(17, 'email', 'asdasd@gmail.com', '2022-10-02 21:35:39'),
(17, 'contact', 'asdas', '2022-10-02 21:35:39'),
(17, 'gender', 'Male', '2022-10-02 21:35:39'),
(17, 'dob', '2003-07-30', '2022-10-02 21:35:39'),
(17, 'address', 'asd', '2022-10-02 21:35:39'),
(18, 'id', '19', '2022-10-03 17:18:57'),
(18, 'patient_id', '18', '2022-10-03 17:18:57'),
(18, 'name', 'King Patrick Torreliza', '2022-10-03 17:18:57'),
(18, 'email', 'asdsa@gmail.com', '2022-10-03 17:18:57'),
(18, 'contact', 'asd', '2022-10-03 17:18:57'),
(18, 'gender', 'Male', '2022-10-03 17:18:57'),
(18, 'dob', '2022-10-11', '2022-10-03 17:18:57'),
(18, 'address', 'asdsa', '2022-10-03 17:18:57'),
(19, 'id', '20', '2022-10-17 22:43:20'),
(19, 'patient_id', '19', '2022-10-17 22:43:20'),
(19, 'name', 'King Patrick Torreliza', '2022-10-17 22:43:20'),
(19, 'email', 'ktorreliza94@gmail.com', '2022-10-17 22:43:20'),
(19, 'contact', '09057741129', '2022-10-17 22:43:20'),
(19, 'gender', 'Male', '2022-10-17 22:43:20'),
(19, 'dob', '2012-07-06', '2022-10-17 22:43:20'),
(19, 'address', 'lapu-lapu', '2022-10-17 22:43:20');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_settings`
--

CREATE TABLE `schedule_settings` (
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL,
  `date_create` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule_settings`
--

INSERT INTO `schedule_settings` (`meta_field`, `meta_value`, `date_create`) VALUES
('day_schedule', 'Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', '2022-10-19 19:46:07'),
('morning_schedule', '08:00,11:00', '2022-10-19 19:46:07'),
('afternoon_schedule', '13:00,16:00', '2022-10-19 19:46:07');

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'MOODICATION'),
(6, 'short_name', 'MOODICATION'),
(11, 'logo', 'uploads/1664681460_1b1ae92f-8091-465c-ae69-8a28e7a43a1d.png'),
(13, 'user_avatar', 'uploads/user_avatar.jpg'),
(14, 'cover', 'uploads/1666689720_bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 694521929, 'king', 'torreliza', 'ktorreliza94@gmail.com', '202cb962ac59075b964b07152d234b70', '1662633361bg.jpg', 'Active now'),
(2, 1469120992, 'asd', 'dasd', 'wawa123@gmail.com', '202cb962ac59075b964b07152d234b70', '1662633398ethereum-x-dragon-ball-5k-ia.jpg', 'Active now'),
(3, 1454853193, 'King', 'Torreliza', 'ktorreliza@gmail.com', '202cb962ac59075b964b07152d234b70', '1663599916307102084_746005359795736_9007858174503650012_n.jpg', 'Offline now'),
(4, 1103116787, 'King', 'Torreliza', 'wawa@gmail.com', '202cb962ac59075b964b07152d234b70', '1663607683pic4.png', 'Offline now'),
(5, 1235113998, 'Emman', 'Limboc', 'emmanuel.limboc@g.batstate-u.edu.ph', '72c20defcb6ccabcdb69470beec8c1e3', '1663610152living-on-the-edge-y7.jpg', 'Offline now');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `avatar`, `last_login`, `type`, `date_added`, `date_updated`) VALUES
(1, 'Adminstrator', 'Admin', 'admin', '0192023a7bbd73250516f069df18b500', 'uploads/1624240500_avatar.png', NULL, 1, '2021-01-20 14:02:37', '2021-06-21 09:55:07'),
(7, 'KING PATRICK', 'TORRELIZA', 'keng', '9ee0dbe0d3def99ad74a92a1a1f25e10', NULL, NULL, 0, '2022-08-19 03:03:26', NULL),
(8, 'nen', 'nen', 'nene', '87f86d8f857c0a73b5885e1d15a121ae', 'uploads/1660992060_bg.jpg', NULL, 0, '2022-08-20 18:41:26', '2022-08-20 18:42:06'),
(9, 'jm', 'ganda', 'jm', '202cb962ac59075b964b07152d234b70', 'uploads/1664717820_kb000 us std kb.jpg', NULL, 0, '2022-10-02 21:37:12', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form1`
--
ALTER TABLE `form1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`LoginID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `patient_list`
--
ALTER TABLE `patient_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_meta`
--
ALTER TABLE `patient_meta`
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `form1`
--
ALTER TABLE `form1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `LoginID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `patient_list`
--
ALTER TABLE `patient_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `patient_meta`
--
ALTER TABLE `patient_meta`
  ADD CONSTRAINT `patient_meta_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient_list` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
