-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 06:10 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_show`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(5) NOT NULL,
  `question_number` int(10) NOT NULL,
  `is_correct` int(1) NOT NULL DEFAULT '0',
  `choice` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `choice`) VALUES
(1, 1, 0, 'Pete Townsend - The Who'),
(2, 1, 0, 'Jimmy Buffett & the Coral Refer Band'),
(3, 1, 1, 'Lindsey Buckingham - Fleetwood Mac'),
(4, 1, 0, 'Robert Plant - Led Zeppelin'),
(5, 1, 0, 'Glenn Fry - The Eagles'),
(6, 2, 0, 'John Lennons wife'),
(7, 2, 0, 'Paul McCartneys wife'),
(8, 2, 1, 'George Harrisons wife'),
(9, 2, 0, 'Ringo Stars wife'),
(10, 2, 0, 'His own wife'),
(11, 3, 0, 'Acropolis Steak House'),
(12, 3, 0, 'Casa Diablo'),
(13, 3, 0, 'Kit Kat Klub'),
(14, 3, 0, 'Marys Club'),
(15, 3, 0, 'Dancing Bare'),
(16, 4, 0, 'Abbey Road'),
(17, 4, 0, 'Rubber Soul'),
(18, 4, 0, 'Beatles For Sale'),
(19, 4, 1, 'Let It Be'),
(20, 4, 0, 'The White Album');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `question`) VALUES
(1, 'Who wrote the theme song \"Holiday Road\" for the movie \"Vacation\"?'),
(2, 'Eric Clapton wrote the song \"Layla\" for:'),
(3, 'Kurt Cobain met Courtney Love while she was performing at which Portland Oregon Strip Club?'),
(4, 'Which of the following Beatles albums was made into a movie?');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `password`, `reg_date`) VALUES
(12, 'Scott', 'Altom', 's.altom@comcast.net', 'e8e9edb972c61a361947d8dd7e6a5a71b576fa983e13bd9c0aa9cbb363ae6a13', '2019-06-15'),
(13, 'Scott', 'Scott', 'scott@hotmail.com', 'e8e9edb972c61a361947d8dd7e6a5a71b576fa983e13bd9c0aa9cbb363ae6a13', '2019-06-17'),
(14, 'Jimmy', 'John', 'jimmy@johns.com', 'b9bdbf1b2c215d7b98b524e7ce12197da5444061758fe61e1aac4d40b0645d9ea1d7e8cedaaa0cd2a6dc6973524a24181fadb5a7708b41312b4af4f1defca561', '0000-00-00'),
(15, 'clark', 'college', 'clark@clark.edu', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e', '0000-00-00'),
(16, 'Sam', 'Malone', 'sam@cheers.com', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e', '0000-00-00'),
(17, 'Dan', 'The Man', 'dan@gmail.com', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e', '0000-00-00'),
(18, 'Bob', 'Newheart', 'bob@bob.com', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e', '0000-00-00'),
(19, 'Jimmy', 'Buffett', 'jimmy@buffett.com', '49f87cfc0e90670639ec3caa77e643c01c0aaf36230c254b712affb8573a12888d4eaaffce1d684dca02bc91efd99b5318d48f2b9fc78a6d03e1987564e13a25', '0000-00-00'),
(20, 'Kerri', 'Altom', 'kerri@gmail.com', '49f87cfc0e90670639ec3caa77e643c01c0aaf36230c254b712affb8573a12888d4eaaffce1d684dca02bc91efd99b5318d48f2b9fc78a6d03e1987564e13a25', '0000-00-00'),
(21, 'Homer ', 'Simpson', 'homer@gmail.com', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e', '0000-00-00'),
(22, 'Bart', 'Simpson', 'bart@gmail.com', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e', '0000-00-00'),
(23, 'Fred', 'Flintstone', 'Fred@gmail.com', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e', '0000-00-00'),
(24, 'Tara', 'Baines', 'Tara@gmail.com', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e', '0000-00-00'),
(25, 'Kelly', 'Altom', 'kelly@gmail.com', '49f87cfc0e90670639ec3caa77e643c01c0aaf36230c254b712affb8573a12888d4eaaffce1d684dca02bc91efd99b5318d48f2b9fc78a6d03e1987564e13a25', '0000-00-00'),
(26, 'Rita', 'Sleight', 'Rita@gmail.com', '49f87cfc0e90670639ec3caa77e643c01c0aaf36230c254b712affb8573a12888d4eaaffce1d684dca02bc91efd99b5318d48f2b9fc78a6d03e1987564e13a25', '0000-00-00'),
(27, 'Rita', 'Sleight', 'Rita@gmail.com', '49f87cfc0e90670639ec3caa77e643c01c0aaf36230c254b712affb8573a12888d4eaaffce1d684dca02bc91efd99b5318d48f2b9fc78a6d03e1987564e13a25', '0000-00-00'),
(28, 'Allan', 'LaBarre', 'BigAl@gmail.com', '49f87cfc0e90670639ec3caa77e643c01c0aaf36230c254b712affb8573a12888d4eaaffce1d684dca02bc91efd99b5318d48f2b9fc78a6d03e1987564e13a25', '0000-00-00'),
(29, 'Dave', 'Sogorelli', 'dave@gmail.com', '49f87cfc0e90670639ec3caa77e643c01c0aaf36230c254b712affb8573a12888d4eaaffce1d684dca02bc91efd99b5318d48f2b9fc78a6d03e1987564e13a25', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions` ADD FULLTEXT KEY `question` (`question`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
