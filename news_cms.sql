-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2024 at 07:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `country` set('Uganda','East Africa','Others') NOT NULL,
  `subject` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `subscribe` set('True','False') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `country`, `subject`, `email`, `subscribe`) VALUES
(1, 'Jasper', '', 'Uganda', 'kkkk', '', ''),
(2, 'Jasper', '', 'Uganda', 'Uganda Prisons Service', '', ''),
(3, 'Jasper', 'Okabo', 'Uganda', 'hhhh', '', ''),
(4, '', '', 'Uganda', '', '', ''),
(5, 'Jasper', 'Okabo', 'Uganda', 'sww', '', ''),
(6, 'Jasper', 'Okabo', 'Uganda', 'Goods', 'jasperokabo@gmail.com', ''),
(7, 'Jasper', 'Okabo', 'Uganda', 'This is a very good avenue', 'jasperokabo@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `content` text DEFAULT NULL,
  `type` set('Education','Sports','Nature','Politics','Entertainment') DEFAULT NULL,
  `time` timestamp(6) NULL DEFAULT current_timestamp(6),
  `date` varchar(255) DEFAULT NULL,
  `photo` varchar(250) NOT NULL,
  `headline` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `content`, `type`, `time`, `date`, `photo`, `headline`) VALUES
(29, 'The 2027 Africa Cup of Nations will be jointly hosted by Kenya, Uganda and Tanzania, while Morocco will stage the 2025 edition, the Confederation of African Football (CAF) announced on Wednesday.\r\n\r\nMorocco last hosted the AFCON in 1988 and was chosen in 2015 but asked for the tournament to be postponed because of the Ebola virus, although CAF later decided to strip the north African nation of the hosting rights.\r\n\r\nWhile Morocco were hot favourites to host the 2025 edition of the premier African sport event, the shock last-minute withdrawal of Algeria from the 2027 race on Tuesday threw it wide open.\r\n\r\n\"This withdrawal can be explained by a new approach from the FAF (Algerian football federation)related to its strategy for developing football in Algeria,\" it said.\r\n\r\nThe Kenya-Uganda-Tanzania bid then got the nod from the CAF executive committee, taking the biennial tournament back to east Africa for the first time since Ethiopia staged the 1976 finals.\r\n\r\n\"I am very proud of Morocco,\" said CAF president Patrice Motsepe after naming the successful hosts in Cairo.\r\n\r\n\"Morocco\'s competing countries (for 2025 tournament) -- Algeria, Zambia and Nigeria-Benin -- announced their withdrawal, even if these countries still made their presentation,\" he said.\r\n\r\n\"The main reason is to support Morocco in its candidacy for the 2030 World Cup,\" jointly with Spain and Portugal, explained Motsepe.\r\n\r\nMorocco boast many world-class stadiums and have successfully hosted numerous African and world football tournaments.\r\n\r\nBut Kenya and Tanzania have only one international-standard venue each and Uganda none, which forced their national team to play 2023 Cup of Nations qualifiers at neutral venues.\r\n\r\n\"One of the key objectives is that the decision that was taken today (promotes) the development of infrastructure and stadiums (and) be a source of enthusiasm among young people,” said Motsep', 'Sports', '2024-10-08 14:34:06.659640', '2024-10-08', 'upload/sports_1728398046.jpeg', 'UGANDA IS SET TO HOST THE UPCOMING AFRICAN CUP OF NATION IN 2027'),
(30, 'That\'s why we are still living', 'Politics', '2024-10-08 16:58:49.765214', '2024-10-16', 'upload/3_1728406729.webp', 'In the End, there is still life'),
(31, 'It is understood that the break is for her to focus on maternal duties. During the concert, she revealed her baby bump, signaling that she is expecting.\r\n\r\nWith over 15 years of experience in the music industry, Sheebah is taking this break as she embarks on her journey into motherhood.\r\n\r\nWatch video here (Courtesy: Sanyuka TV)”', 'Entertainment', '2024-10-08 17:13:54.358609', '2024-10-08', 'upload/sheeba_1728407634.webp', 'Uganda is the new King of the jungle');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
