-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2025 at 08:53 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klust_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `email`, `created_at`) VALUES
(1, 'admin', 'admin123', 'admin@klust.edu.my', '2025-10-16 22:07:06');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `program` varchar(200) DEFAULT NULL,
  `STATUS` varchar(20) DEFAULT 'Pending',
  `application_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `student_name`, `email`, `phone`, `program`, `STATUS`, `application_date`, `created_at`) VALUES
(2, 'Fahad', 'any@eami.com', '+6011111111111111', 'Bachelor of Accountancy (Honours)', 'Pending', '2025-10-17', '2025-10-17 01:27:18'),
(3, 'Jubaer', 'jubaer@gmail.com', '+111111111111111', 'Bachelor in Software Engineering (Honours)', 'Pending', '2025-10-17', '2025-10-17 01:34:27');

-- --------------------------------------------------------

--
-- Table structure for table `campus_news`
--

CREATE TABLE `campus_news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `DATE` date NOT NULL,
  `STATUS` varchar(20) DEFAULT 'Draft',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campus_news`
--

INSERT INTO `campus_news` (`id`, `title`, `image_url`, `content`, `DATE`, `STATUS`, `created_at`) VALUES
(12, 'Sit laborum Esse a demo', 'https://klust.edu.my/wp-content/uploads/2025/10/Pic-5-685x388_c.jpg', 'Rem nihil est magni', '1980-06-05', 'Published', '2025-10-17 01:30:45');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(11) NOT NULL,
  `program_name` varchar(200) NOT NULL,
  `LEVEL` varchar(50) NOT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `program_name`, `LEVEL`, `duration`, `description`, `image_url`, `created_at`) VALUES
(1, 'Bachelor in Computer Science (Honours)', 'Undergraduate', '3 Years', 'Intakes: March, June/July & Sept/Oct\r\nMode of Study: Full Time\r\nDuration: 3 years\r\nCredits: 120', 'https://klust.edu.my/wp-content/uploads/2018/01/bachelor-of-computer-science-hons.jpg', '2025-10-16 22:36:39'),
(2, 'Bachelor in Software Engineering (Honours)', 'Undergraduate', '3 Years', '(R3/0612/6/0015)(07/29)(A 10578)\r\nIntakes: March, June/July & Sept/Oct\r\nMode of Study: Full Time\r\nDuration: 3 years\r\nCredits: 120', 'https://klust.edu.my/wp-content/uploads/2018/01/bachelor-of-software-engineering-hons.jpg', '2025-10-16 22:49:58'),
(3, 'Bachelor in Computer Science (Honours)', 'UNDERGRADUATE', '3 Years', '(R3/0613/6/0026)(08/28)(A 9432) Intakes: March, June/July & Sept/Oct Mode of Study: Full Time Duration: 3 years Credits: 120 Level of Study: Undergraduate Faculty: Faculty of Engineering, Science & Technology (FEST) Field of Study: Information Technology', 'https://klust.edu.my/wp-content/uploads/2018/01/bachelor-of-computer-science-hons.jpg', '2025-10-16 22:54:17'),
(4, 'Bachelor in Software Engineering (Honours)', 'UNDERGRADUATE', '3 Years', 'Software Engineering program focuses on designing, developing, and maintaining software systems. Students learn programming, software architecture, and project management skills.', 'https://klust.edu.my/wp-content/uploads/2018/01/bachelor-in-software-engineering-hons.jpg', '2025-10-16 22:54:17'),
(5, 'Bachelor of Accountancy (Honours)', 'UNDERGRADUATE', '3 Years', 'Accountancy program prepares students for careers in accounting, auditing, and financial management. Covers accounting principles, taxation, and financial reporting.', 'https://klust.edu.my/wp-content/uploads/2018/01/bachelor-of-accountancy-hons.jpg', '2025-10-16 22:54:17'),
(6, 'Bachelor of Agricultural Science (Plantation Management) (Honours)', 'UNDERGRADUATE', '3 Years', 'Agricultural Science program focuses on plantation management, crop production, and sustainable farming practices. Ideal for those interested in agriculture industry.', 'https://klust.edu.my/wp-content/uploads/2018/01/bachelor-of-agricultural-science-plantation-management-honours.jpg', '2025-10-16 22:54:17'),
(7, 'Bachelor of Arts (Hons) in English for Professional Communication', 'UNDERGRADUATE', '3 Years', 'English for Professional Communication program develops language skills for business and professional contexts. Focus on communication, writing, and presentation skills.', 'https://klust.edu.my/wp-content/uploads/2018/01/bachelor-of-arts-hons-in-english-for-professional-communication.jpg', '2025-10-16 22:54:17'),
(8, 'Bachelor of Arts (Hons) Teaching of English to Speakers of Other Languages (TESOL)', 'UNDERGRADUATE', '3 Years', 'TESOL program prepares graduates to teach English to non-native speakers. Covers language acquisition theories, teaching methodologies, and curriculum design.', 'https://klust.edu.my/wp-content/uploads/2018/01/bachelor-of-arts-hons-tesol.jpg', '2025-10-16 22:54:17'),
(9, 'Bachelor of Business Administration (Honours) in E-Commerce', 'UNDERGRADUATE', '3 Years', 'E-Commerce Business Administration program focuses on online business, digital marketing, and e-commerce platforms. Prepares students for digital business careers.', 'https://klust.edu.my/wp-content/uploads/2018/01/bachelor-of-business-administration-hons-in-e-commerce.jpg', '2025-10-16 22:54:17'),
(10, 'Bachelor of Business Administration (Hons)', 'UNDERGRADUATE', '3 Years', 'Business Administration program covers management, marketing, finance, and organizational behavior. Prepares graduates for leadership roles in various industries.', 'https://klust.edu.my/wp-content/uploads/2018/01/bachelor-of-business-administration-hons.jpg', '2025-10-16 22:54:17'),
(11, 'Bachelor of Civil Engineering with Honours', 'UNDERGRADUATE', '4 Years', 'Civil Engineering program covers structural design, construction management, and infrastructure development. MARA Loan Available. Prepares engineers for construction industry.', 'https://klust.edu.my/wp-content/uploads/2018/01/bachelor-of-civil-engineering-hons.jpg', '2025-10-16 22:54:17'),
(12, 'Diploma in IT @', 'Pre-University', '3 Year', 'Intakes: March, June/July & Sept/Oct Mode of Study: Full Time Duration: 3 years Credits: 120', 'https://klust.edu.my/wp-content/uploads/2018/01/bachelor-of-software-engineering-hons.jpg', '2025-10-17 01:32:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus_news`
--
ALTER TABLE `campus_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `campus_news`
--
ALTER TABLE `campus_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
