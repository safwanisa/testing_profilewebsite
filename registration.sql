-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2021 at 08:31 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNo` varchar(13) NOT NULL,
  `location` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `detail` varchar(10000) NOT NULL,
  `instagram` varchar(123) NOT NULL,
  `twitter` varchar(123) NOT NULL,
  `linkedin` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phoneNo`, `location`, `password`, `detail`, `instagram`, `twitter`, `linkedin`) VALUES
(15, 'diana', 'diana@gmail.com', '+0134101137', 'Cyberjaya', '26eedaba1a0a3b5ee6ba5707f33331ec', 'I\'m Diana and I\'m from Cyberjaya, Selangor.', '', '', ''),
(17, 'nazrul', 'nazrul@gmail.com', '+60171234567', 'Ipoh', '83fd13371ea69eed1f32dcd808fae041', 'My name is Nazrul Azril and I\'m from Ipoh, Perak', '', '', ''),
(18, 'safwan', 'safwanfathymdisa@gmail.com', '+60175287537', 'Perak', '48b502ca0a85914ee2f45748624effea', 'Studied Bachelor of Information Technology (Hons.) Intelligent System Engineering in University Teknologi MARA (UiTM),Shah Alam and graduated on January 2020. Familiar with web development during studying period using programming language such as PHP, JavaScript, AngularJS during internship, HTML with CSS, SQL and the use of GitHub. Exposed to video editing and using Adobe Photoshop. Actively seeking entry level opportunity to work in Information Technology and related field.', 'https://www.instagram.com/safwan.isa/', 'https://twitter.com/safwan_isa', 'https://www.linkedin.com/in/safwanfathymdisa'),
(19, 'nadia', 'nadia@gmail.com', '0175698859', 'Penang', 'cba22d39759e374f98548446dd609d72', 'I\'m Nadia and I\'m from Penang.', '', '', ''),
(20, 'badrul96', 'badrul@gmail.com', '0123456789', 'Manjung', '55b36ac7e5e6d66c25cb073b8f09c4c1', 'Badrul Kacak\r\n', '', '', ''),
(21, 'mirza', 'mirzamalik94@gmail.com', '0154874512', 'Penang', '2c48b970f380d43cd3444cd7bffd22ac', 'Mirza Malik kacak bergaya', 'instagram.com/mirzamalik', 'twitter.com/mirzamalik', 'linkedin.com/mirzamalik'),
(22, 'amin', 'amin@mail.com', '034645455', 'Ipoh', '38b2b4d9faa934b03e666a6219d94a95', '						Amin Ketum					', 'instagram.com/amin', 'https://twitter.com/amin', 'linkedin.com/amin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
