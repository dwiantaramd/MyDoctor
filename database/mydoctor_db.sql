-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2020 at 03:46 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydoctor_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(10) NOT NULL,
  `hospital_id` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `doctor_id` int(10) NOT NULL,
  `appointment_date` date NOT NULL,
  `complaints` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `hospital_id`, `id`, `doctor_id`, `appointment_date`, `complaints`) VALUES
(3, 5, 2, 5, '2020-06-10', 'Mual-mual'),
(4, 1, 2, 2, '2020-04-29', 'Kulit kering'),
(5, 1, 3, 1, '2020-04-30', 'masalah pendengaran, telinga berdengung'),
(6, 2, 3, 3, '2020-08-17', '-');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(10) NOT NULL,
  `doc_name` varchar(128) NOT NULL,
  `specialist` varchar(128) NOT NULL,
  `doc_gender` varchar(128) NOT NULL,
  `doc_image` varchar(128) NOT NULL,
  `hospital_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `doc_name`, `specialist`, `doc_gender`, `doc_image`, `hospital_id`) VALUES
(1, 'Dr. Strange', 'THT', 'Male', 'drstrange.jpg', 1),
(2, 'Dr. Hannibal Lecter', 'Penyakit Kulit dan Kelamin', 'Male', 'drhannibal.jpg', 1),
(3, 'Dr. Aikenhead', 'Gizi', 'Female', 'docdefault.jpg', 2),
(5, 'Dr. Jonathan Crane', 'Penyakit Dalam', 'Male', 'docdefault.jpg', 5),
(6, 'Dr. John Watson', 'Penyakit Dalam', 'Male', 'docdefault.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hospital_id` int(10) NOT NULL,
  `hos_name` varchar(128) NOT NULL,
  `hos_address` varchar(128) NOT NULL,
  `hos_image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hospital_id`, `hos_name`, `hos_address`, `hos_image`) VALUES
(1, 'Arkham Asylum', 'Gotham City', 'hosdefault.jpg'),
(2, 'Bali International Medical Centre', 'Jalan By Pass Ngurah Rai No.100X, Bali', 'hosdefault.jpg'),
(3, 'Bintaro International Hospital', 'Jl. MH, Thamrin Blok B3/1', 'basichos2.jpg'),
(4, 'Global Doctor Jakarta Clinic', 'Jalan Patti Mura 15 Kebayoran Baru', 'basichos3.jpg'),
(5, 'Bio Medi Centre', 'Jl. Moh. Toha No.369, Ciseureuh, Kec. Regol, Kota Bandung', 'hosdefault.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `role` int(2) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `password`, `phone`, `role`, `image`) VALUES
(1, 'Admin 1 MyDoctor', 'admin1', 'admin1@mygmail.com', 'admin1', '0000-1111-2222', 1, 'default.jpg'),
(2, 'Tony Redgraves', 'dante', 'dante@gmail.com', '4321', '6666-6666-6666', 2, 'drstrange.jpg'),
(3, 'Nelo Angelo', 'vergil', 'vergil@gmail.com', '1234', '4204-2042-0420', 2, 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hospital_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hospital_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
