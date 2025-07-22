-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2025 at 05:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'Admin', 'admin@example.com', '$2y$10$2YrV/HsrllX2ClxEaYsqx.pvr/NufWokxS.gwQCEdU11HXNxz7q7O', 'admin', '2025-01-12 14:49:48');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `name`, `email`, `phone`, `message`) VALUES
(12, 'Khushi Kumari', 'soni.khushi0612@gmail.com', '07870845618', 'The website user friendly interface made it easy for me to find the perfect institute . Thankyou!'),
(13, 'Jividha Shah', 'jivi@gmail.com', '8521992020', 'The search filters are intuitive and allowed me to narrow down my options efficiently');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `area_name` text NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `district_name` varchar(255) NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `landmark` text DEFAULT NULL,
  `block_name` varchar(255) DEFAULT NULL,
  `batch` enum('home tuitions','coaching institutes','competitive exam institutes','career counsellors','online tutorials','IIT-JEE/IIT-JAM/NEET/GATE','CCA/CA/LAW/IAS') DEFAULT NULL,
  `avatar` varchar(512) DEFAULT NULL,
  `role` enum('admin','user') DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `approve` varchar(20) NOT NULL,
  `admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `area_name`, `pincode`, `district_name`, `state_name`, `email`, `contact_number`, `landmark`, `block_name`, `batch`, `avatar`, `role`, `created_at`, `approve`, `admin_id`) VALUES
(24, 'Achievers Tutorials', 'Chakaram road near st maris church Buddha colony boring road patna bihar', '800001', 'Patna', 'Bihar', 'acheiverstutorials638@gmail.com', '7020081645', 'Buddha colony', 'Patna', 'IIT-JEE/IIT-JAM/NEET/GATE', 'image.jpg', 'user', '2025-01-23 14:59:01', 'approved', NULL),
(25, 'Ambition Coaching', 'guruhatta patna city near aditya vision near of awami coop bank', '800008', 'Patna City', 'Bihar', 'ambitionheadoffice@gmail.com', '07870845618', 'Guruhatta Patna City', 'patna city', 'coaching institutes', 'ambition.jpg', 'user', '2025-01-23 15:20:46', 'approved', NULL),
(26, 'Gyanpunj Classes', 'Indira nagar road number 2 postal park patna ', '800001', 'Patna', 'Bihar', 'gpclassespatna@gmail.com', '9262222022', 'Indira nagar road', 'Patna', 'IIT-JEE/IIT-JAM/NEET/GATE', 'gyam.jpg', 'user', '2025-01-23 15:24:31', 'approved', NULL),
(27, 'Gyanam Coaching Centre', 'Buddha colony road Sri Krishna Nagar Buddha Colony patna', '800001', 'Patna', 'Bihar', 'gyanamcentre@gmail.com', '9304511981', 'Buddha colony road', 'Patna', 'coaching institutes', 'gyanam.jpg', 'user', '2025-01-23 15:31:13', 'approved', NULL),
(28, 'Khan Global Studies', '2nd floor boring road above Shree Hari Jewellers next to GV Mall crossing chauraha Patna ', '800001', 'Patna', 'Bihar', 'khanglobalstudies@gmail.com', '8757354880', 'Boring Road', 'Patna', 'competitive exam institutes', 'khan.jpg', 'user', '2025-01-23 15:35:18', 'approved', NULL),
(29, 'Divya Coaching Classes', 'Chakaram Sumitra Devi Path Buddha colony patna', '800001', 'Patna', 'Bihar', 'divyaclasses@gmail.com', '9508883495', 'Buddha Colony', 'Patna', 'coaching institutes', 'divya.jpg', 'user', '2025-01-23 15:37:16', 'approved', NULL),
(30, 'Sai Coaching Classes', 'J478 Q66 RP Complex police check post Boring road above Bank Of India near SK Puri Anandpuri Patna', '800001', 'Patna', 'Bihar', 'saimalaeducation@gmail.com', '9835893566', 'Boring Canal Road', 'Patna', 'coaching institutes', 'sai.jpg', 'user', '2025-01-23 15:41:47', 'approved', NULL),
(31, 'Vidya Junction Classes', 'kaimashikoh Patna City Bijli Office', '800008', 'Patna City', 'Bihar', 'vidyajunctionclasses123@gmail.com', '7717703940', 'Hajiganj', 'patna sadar', 'coaching institutes', 'vidya.jpg', 'user', '2025-01-23 15:45:33', 'approved', NULL),
(32, 'Vidyamandir Classes', 'Main Bailey road west of Ishan International Girls School near Gola Road more', '800001', 'Patna', 'Bihar', 'support@vidyamandir.com', '9199426875', 'Gola Road More', 'Patna', 'IIT-JEE/IIT-JAM/NEET/GATE', 'vmc.jpg', 'user', '2025-01-23 15:49:19', 'approved', NULL),
(33, 'Target Point', 'Near Gauri Shankar Mandir Gaighat Gulzarbagh Patna', '800007', 'Patna', 'Bihar', 'targetpointpatna@gmail.com', '8210205533', 'Gaighat', 'patna sadar', 'IIT-JEE/IIT-JAM/NEET/GATE', 'target.jpg', 'user', '2025-01-23 15:54:33', 'approved', NULL),
(34, 'Apna Coaching Center', 'Jay Prakash Nagar Rajeev Nagar Patna ', '800025', 'Patna', 'Bihar', 'apnaformula@gmail.com', '7903168633', 'Rajeev nagar', 'Patna', 'coaching institutes', 'apna.jpg', 'user', '2025-01-23 15:56:46', 'approved', NULL),
(35, 'Gravity Classes', 'Rajeev nagar main road Indrapuri Keshri nagar Patna', '800024', 'Patna', 'Bihar', 'npaliwai@gmail.com', '9625752770', 'Rajeev nagar', 'Patna', 'coaching institutes', 'gravity.jpg', 'user', '2025-01-23 15:58:41', 'approved', NULL),
(38, 'Gulshan Home Tuition', 'Near Khel Parisar Mohan Nagar Gewalbigha Gaya Bihar', '823001', 'Gaya', 'Bihar', 'gulshanhometuition@gmail.com', '8434116196', 'Gewalibigha', 'Gaya', 'home tuitions', 'home3.jpg', 'user', '2025-01-23 16:09:51', 'approved', NULL),
(39, 'Vanshika Home Tuition', 'Gola Road lane number 8 near Gyan Niketan School Shri Krishna Puram Patna', '801503', 'Patna', 'Bihar', 'info@vanshikahometuition.com', '8539079601', 'Gola Road More', 'Patna', 'home tuitions', 'home2.jpg', 'user', '2025-01-23 16:16:14', 'approved', NULL),
(40, 'Prakash Home Tuition', 'Boring Road near bhagwan kunz apartment north Shri Krishna Puri Patna', '800001', 'Patna', 'Bihar', 'Info@prakashtuition.com', '9973161837', 'Patna', 'Patna', 'home tuitions', 'home1.jpg', 'user', '2025-01-23 16:18:26', 'approved', NULL),
(41, 'Josephs Home Tuition', 'Digha Ashiana Road near Hospital near Bharat Petroleum More XTTI Digha Ghat Patna', '800011', 'Patna', 'Bihar', 'josephshometuition@gmail.com', '7484082313', 'Patna', 'Patna', 'home tuitions', 'home4.jpg', 'user', '2025-01-23 16:23:31', 'approved', NULL),
(43, 'Tagore Educons', 'Boring rd opposite AN College near roti restaurant north sri krishna puri patna', '800013', 'Patna', 'Bihar', 'tagireeducon@gmail.com', '9835922300', 'Sri Krishna Puri', 'Patna', 'career counsellors', 'cc.jpg', 'user', '2025-01-23 16:28:52', 'approved', NULL),
(44, 'IMS Education', 'G6 B Block Patna supermarket frazer road Patna ', '800001', 'Patna', 'Bihar', 'imsbschool@gmail.com', '9341058993', 'Frazer Road', 'Patna', 'career counsellors', 'ims.jpg', 'user', '2025-01-24 05:15:57', 'approved', NULL),
(45, 'Dreams Eduserv', '3rd Floor Gangotri Complex Nageshwar Colony Kidwaipuri Patna', '800001', 'Patna', 'Bihar', 'dreamsedu@gmail.com', '9708372222', 'Patna', 'Patna', 'IIT-JEE/IIT-JAM/NEET/GATE', 'reans.jpg', 'user', '2025-01-24 05:19:00', 'approved', NULL),
(46, 'Professional Academy', '3rd Floor between Karlo Murti Showroom and PC Jewellers Dheeraj Complex Boring road SK Puri Patna', '800001', 'Patna', 'Bihar', 'info@professionalacademy.com', '9304815212', 'Patna', 'Patna', 'CCA/CA/LAW/IAS', 'clat.jpg', 'user', '2025-01-24 05:21:35', 'approved', NULL),
(47, 'George School ', '6th Grand Plaza 6005 Frazer Road opposite Bank Of Baroda ATM Lodipur Patna', '800001', 'Patna', 'Bihar', 'gscesdh@gmail.com', '6292285506', 'Lodipur Patna', 'Patna', 'competitive exam institutes', 'gsce.jpg', 'user', '2025-01-24 05:28:59', 'approved', NULL),
(48, 'Vijeta Competitive Campus', 'Road number 23 East Buddha Colony SK Puri Patna', '800001', 'Patna', 'Bihar', 'vijetacampus818@gmail.com', '8051880518', 'SK Puri Patna', 'Patna', 'competitive exam institutes', 'bank.jpg', 'user', '2025-01-24 05:33:32', 'approved', NULL),
(50, 'Career Power', 'Petrolpump Pandey Building road number 2 opposite RK Avenue Rajendra Nagar Patna ', '800016', 'Patna', 'Bihar', 'careerpower@gmail.com', '9853123001', 'Rajendra Nagar', 'Patna', 'competitive exam institutes', 'adda.jpg', 'user', '2025-01-24 05:42:17', 'approved', NULL),
(52, 'Anand Physics', 'Home number L24 pit colony vidya puri kankarbagh patna ', '800016', 'Patna', 'Bihar', 'anandphy@gmail.com', '7301523021', 'Patna', 'Patna', 'IIT-JEE/IIT-JAM/NEET/GATE', 'anand.jpg', 'user', '2025-01-24 05:46:06', 'approved', NULL),
(60, 'Universal Home Tuition', 'House no 28 Kasturba Path North SK Puri Boring Road Patna', '800001', 'Patna', 'Bihar', 'universal@gmail.com', '9801515707', 'Boring Canal Road', 'Patna', 'home tuitions', '1.jpg', 'user', '2025-02-11 06:47:42', 'approved', 0),
(68, ' PW Vidyapeeth', 'Gandhi maidan ', '800001', 'Patna', 'Bihar', 'vidyapeeth@gmail.com', '9471002445', 'Patna', 'Patna', 'competitive exam institutes', 'WhatsApp Image 2025-03-02 at 09.57.04_98c62c88.jpg', 'user', '2025-03-02 04:28:00', '', 0),
(69, 'Samarthya Classes', 'Bailey road near saguna more pillar number 8 ', '800001', 'Patna', 'Bihar', 'Samarthyaclasses@gmail.com', '7209580111', 'Bailey road ', 'Patna', 'IIT-JEE/IIT-JAM/NEET/GATE', 'WhatsApp Image 2025-03-02 at 10.14.27_54230734.jpg', 'user', '2025-03-02 04:49:03', '', NULL),
(70, 'jividha', 'guruhatta patna city near aditya vision', '800008', 'Patna City', 'Bihar', 'soni.khushi0612@gmail.com', '07870845618', 'patna city', 'Gaya', 'online tutorials', 'WhatsApp Image 2025-03-02 at 09.57.04_98c62c88.jpg', 'user', '2025-03-02 05:05:18', 'approved', 0),
(71, 'Khushi Kumari', 'guruhatta patna city near aditya vision', '800008', 'Patna City', 'Bihar', 'sni.khushi0612@gmail.com', '07870845618', 'Patna', 'Patna', 'career counsellors', 'WhatsApp Image 2025-03-02 at 10.14.27_54230734.jpg', 'user', '2025-03-02 09:04:35', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
