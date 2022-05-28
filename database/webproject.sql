-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 28, 2022 at 11:33 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `questions_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `text` text NOT NULL,
  `topic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `questions_number`, `is_correct`, `text`, `topic`) VALUES
(1, 1, 1, '3 hundreds', 'place_value_year_3'),
(2, 1, 0, '30', 'place_value_year_3'),
(3, 1, 0, '3 tens', 'place_value_year_3'),
(4, 1, 0, '3 ones', 'place_value_year_3'),
(5, 2, 0, '7', 'place_value_year_3'),
(6, 2, 1, '7 tens', 'place_value_year_3'),
(7, 2, 0, '7 hundreds', 'place_value_year_3'),
(8, 2, 0, '70', 'place_value_year_3'),
(9, 3, 0, '5 tens', 'place_value_year_3'),
(10, 3, 0, '50', 'place_value_year_3'),
(11, 3, 1, '5 ones', 'place_value_year_3'),
(12, 3, 0, '5 hundreds', 'place_value_year_3'),
(13, 4, 0, '9', 'place_value_year_3'),
(14, 4, 0, '9 ones', 'place_value_year_3'),
(15, 4, 0, '9 hundreds', 'place_value_year_3'),
(16, 4, 1, '90', 'place_value_year_3'),
(17, 5, 1, '10', 'place_value_year_3'),
(18, 5, 0, '1 one', 'place_value_year_3'),
(19, 5, 0, '1 hundred', 'place_value_year_3'),
(20, 5, 0, '100', 'place_value_year_3'),
(21, 6, 0, '3 tenths', 'place_value_year_3'),
(22, 6, 0, '30', 'place_value_year_3'),
(23, 6, 0, '3 tens', 'place_value_year_3'),
(24, 6, 1, '3 ones', 'place_value_year_3'),
(25, 7, 1, '20', 'place_value_year_3'),
(26, 7, 0, '2 ones', 'place_value_year_3'),
(27, 7, 0, '2 hundreds', 'place_value_year_3'),
(28, 7, 0, '2 tenths', 'place_value_year_3'),
(29, 8, 0, '40', 'place_value_year_3'),
(30, 8, 0, '4 hundredths', 'place_value_year_3'),
(31, 8, 0, '4 tens', 'place_value_year_3'),
(32, 8, 1, '4 hundreds', 'place_value_year_3'),
(33, 9, 1, '20', 'place_value_year_3'),
(34, 9, 0, '2 ones', 'place_value_year_3'),
(35, 9, 0, '2 hundreds', 'place_value_year_3'),
(36, 9, 0, '2 tenths', 'place_value_year_3'),
(37, 10, 0, '5 ones', 'place_value_year_3'),
(38, 10, 0, '500', 'place_value_year_3'),
(39, 10, 0, '5 tenths', 'place_value_year_3'),
(40, 10, 1, '5 tens', 'place_value_year_3'),
(41, 1, 1, 'Yes. 345 < 432', 'comparing_numbers_year_3'),
(42, 1, 0, 'No. 345 = 432', 'comparing_numbers_year_3'),
(43, 1, 0, 'No. 345 > 432', 'comparing_numbers_year_3'),
(45, 2, 0, '843 < 284', 'comparing_numbers_year_3'),
(46, 2, 1, '843 > 284', 'comparing_numbers_year_3'),
(47, 2, 0, '843 = 284', 'comparing_numbers_year_3'),
(49, 3, 0, 'Yes. 765 > 981', 'comparing_numbers_year_3'),
(50, 3, 0, 'No. 765 = 981', 'comparing_numbers_year_3'),
(51, 3, 1, 'No. 765 < 981', 'comparing_numbers_year_3'),
(53, 4, 0, '39 = 43', 'comparing_numbers_year_3'),
(54, 4, 0, '39 > 43', 'comparing_numbers_year_3'),
(56, 4, 1, '39 < 43', 'comparing_numbers_year_3'),
(57, 5, 1, 'No 123 < 456', 'comparing_numbers_year_3'),
(58, 5, 0, 'Yes. 123 > 456', 'comparing_numbers_year_3'),
(59, 5, 0, 'No. 123 = 456', 'comparing_numbers_year_3'),
(61, 6, 0, '99 > 100', 'comparing_numbers_year_3'),
(62, 6, 0, '99 = 100', 'comparing_numbers_year_3'),
(63, 6, 1, '99 < 100', 'comparing_numbers_year_3'),
(65, 7, 1, 'Yes. 136 < 258', 'comparing_numbers_year_3'),
(66, 7, 0, 'No. 136 > 258', 'comparing_numbers_year_3'),
(67, 7, 0, 'No. 136 = 258', 'comparing_numbers_year_3'),
(69, 8, 0, '52 > 530', 'comparing_numbers_year_3'),
(70, 8, 0, '52 = 530', 'comparing_numbers_year_3'),
(72, 8, 1, '52 < 530', 'comparing_numbers_year_3'),
(73, 9, 1, 'No. 100 < 147', 'comparing_numbers_year_3'),
(74, 9, 0, 'Yes. 100 = 147', 'comparing_numbers_year_3'),
(75, 9, 0, 'No. 100 > 147', 'comparing_numbers_year_3'),
(77, 10, 0, '100.0 < 100', 'comparing_numbers_year_3'),
(78, 10, 0, '100.0 > 100', 'comparing_numbers_year_3'),
(80, 10, 1, '100.0 = 100', 'comparing_numbers_year_3'),
(81, 1, 1, '21', 'roman_numerals_year_4'),
(82, 1, 0, '19', 'roman_numerals_year_4'),
(83, 1, 0, '22', 'roman_numerals_year_4'),
(84, 1, 0, '11', 'roman_numerals_year_4'),
(85, 2, 0, 'CXXI', 'roman_numerals_year_4'),
(86, 2, 1, 'XCIX', 'roman_numerals_year_4'),
(87, 2, 0, 'IC', 'roman_numerals_year_4'),
(88, 2, 0, 'CXIX', 'roman_numerals_year_4'),
(89, 3, 0, '137', 'roman_numerals_year_4'),
(90, 3, 0, '83', 'roman_numerals_year_4'),
(91, 3, 1, '87', 'roman_numerals_year_4'),
(92, 3, 0, '133', 'roman_numerals_year_4'),
(93, 4, 0, 'LXXV', 'roman_numerals_year_4'),
(94, 4, 0, 'LIXXII', 'roman_numerals_year_4'),
(95, 4, 0, 'LXXII', 'roman_numerals_year_4'),
(96, 4, 1, 'LXXIII', 'roman_numerals_year_4'),
(97, 5, 1, '42', 'roman_numerals_year_4'),
(98, 5, 0, '62', 'roman_numerals_year_4'),
(99, 5, 0, '40', 'roman_numerals_year_4'),
(100, 5, 0, '72', 'roman_numerals_year_4'),
(101, 6, 0, 'Yes. The roman numeral for 3 is III', 'roman_numerals_year_4'),
(104, 6, 1, 'No. The valid roman numeral for 3 is IIV', 'roman_numerals_year_4'),
(105, 7, 1, 'XL', 'roman_numerals_year_4'),
(106, 7, 0, 'LX', 'roman_numerals_year_4'),
(107, 7, 0, 'XXXX', 'roman_numerals_year_4'),
(108, 7, 0, 'LC', 'roman_numerals_year_4'),
(109, 8, 0, '10', 'roman_numerals_year_4'),
(110, 8, 0, '50', 'roman_numerals_year_4'),
(111, 8, 0, '5', 'roman_numerals_year_4'),
(112, 8, 1, '100', 'roman_numerals_year_4'),
(113, 9, 1, 'No. The valid roman numeral for 15 is XV', 'roman_numerals_year_4'),
(114, 9, 0, 'Yes. The valid roman numeral for 15 is VVV', 'roman_numerals_year_4'),
(117, 10, 0, 'IIX', 'roman_numerals_year_4'),
(118, 10, 0, 'IXX', 'roman_numerals_year_4'),
(119, 10, 0, 'VIVI', 'roman_numerals_year_4'),
(120, 10, 1, 'XII', 'roman_numerals_year_4'),
(121, 1, 1, '1011', 'roman_numerals_year_5'),
(122, 1, 0, '111', 'roman_numerals_year_5'),
(123, 1, 0, '61', 'roman_numerals_year_5'),
(124, 1, 0, '1110', 'roman_numerals_year_5'),
(125, 2, 0, 'MMXIXI', 'roman_numerals_year_5'),
(126, 2, 1, 'MMXXII', 'roman_numerals_year_5'),
(127, 2, 0, 'MMXIXI', 'roman_numerals_year_5'),
(128, 2, 0, 'MMXXIIV', 'roman_numerals_year_5'),
(129, 3, 0, '1990', 'roman_numerals_year_5'),
(130, 3, 0, '1998', 'roman_numerals_year_5'),
(131, 3, 1, '1999', 'roman_numerals_year_5'),
(132, 3, 0, '990', 'roman_numerals_year_5'),
(133, 4, 0, 'MDCLCXXVII', 'roman_numerals_year_5'),
(134, 4, 0, 'MDCCLXXIIV', 'roman_numerals_year_5'),
(135, 4, 0, 'MCDCLXXVII', 'roman_numerals_year_5'),
(136, 4, 1, 'MDCCLXXVII', 'roman_numerals_year_5'),
(137, 5, 1, '501', 'roman_numerals_year_5'),
(138, 5, 0, '51', 'roman_numerals_year_5'),
(139, 5, 0, '510', 'roman_numerals_year_5'),
(140, 5, 0, '55', 'roman_numerals_year_5'),
(141, 6, 0, 'Yes. The roman numeral for 499 is ID', 'roman_numerals_year_5'),
(142, 6, 1, 'No. The valid roman numeral for 499 is CDXCIX', 'roman_numerals_year_5'),
(143, 7, 1, 'CD', 'roman_numerals_year_5'),
(144, 7, 0, 'CCCC', 'roman_numerals_year_5'),
(145, 7, 0, 'XXXX', 'roman_numerals_year_5'),
(146, 7, 0, 'VVVV', 'roman_numerals_year_5'),
(147, 8, 0, '10', 'roman_numerals_year_5'),
(148, 8, 0, '50', 'roman_numerals_year_5'),
(149, 8, 0, '5', 'roman_numerals_year_5'),
(150, 8, 1, '100', 'roman_numerals_year_5'),
(151, 9, 1, 'No. The valid roman numeral for 990 is CMXC', 'roman_numerals_year_5'),
(152, 9, 0, 'Yes. The valid roman numeral for 990 is XM', 'roman_numerals_year_5'),
(153, 10, 0, 'CCM', 'roman_numerals_year_5'),
(154, 10, 0, 'CMC', 'roman_numerals_year_5'),
(155, 10, 0, 'CCCCCCCCCCCC', 'roman_numerals_year_5'),
(156, 10, 1, 'MCC', 'roman_numerals_year_5');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `questions_number` int(11) NOT NULL,
  `text` text NOT NULL,
  `topic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `questions_number`, `text`, `topic`) VALUES
(1, 1, 'What is the place value of 3 in 392?', 'place_value_year_3'),
(2, 2, 'What is the place value of 7 in 372?', 'place_value_year_3'),
(3, 3, 'What is the place value of 5 in 425?', 'place_value_year_3'),
(4, 4, 'What is the place value of 9 in 290?', 'place_value_year_3'),
(5, 5, 'What is the place value of 1 in 210?', 'place_value_year_3'),
(6, 6, 'What is the place value of 3 in 93?', 'place_value_year_3'),
(7, 7, 'What is the place value of 2 in 928?', 'place_value_year_3'),
(8, 8, 'What is the place value of 4 in 432?', 'place_value_year_3'),
(9, 9, 'What is the place value of 6 in 46?', 'place_value_year_3'),
(10, 10, 'What is the place value of 5 in 452?', 'place_value_year_3'),
(11, 1, '345 < 432. Is this correct?', 'comparing_numbers_year_3'),
(12, 2, 'Compare the following numbers. 843 & 284.', 'comparing_numbers_year_3'),
(13, 3, '765 > 981. Is this correct?', 'comparing_numbers_year_3'),
(14, 4, 'Compare the following numbers. 39 & 43.', 'comparing_numbers_year_3'),
(15, 5, '123 > 456. Is this correct?', 'comparing_numbers_year_3'),
(16, 6, 'Compare the following numbers. 99 & 100.', 'comparing_numbers_year_3'),
(17, 7, '136 < 258. Is this correct?', 'comparing_numbers_year_3'),
(18, 8, 'Compare the following numbers. 52 & 530.', 'comparing_numbers_year_3'),
(19, 9, '100 = 147. Is this correct?', 'comparing_numbers_year_3'),
(20, 10, 'Compare the following numbers. 100.0 & 100.', 'comparing_numbers_year_3'),
(21, 1, 'What is the roman numeral XXI as a number?', 'roman_numerals_year_4'),
(22, 2, 'What is the number 99 as a roman numeral?', 'roman_numerals_year_4'),
(23, 3, 'What is the roman numeral LXXXVII as a number?', 'roman_numerals_year_4'),
(24, 4, 'What is the number 73 as a roman numeral?', 'roman_numerals_year_4'),
(25, 5, 'What is the roman numeral XLII as a number?', 'roman_numerals_year_4'),
(26, 6, 'Is the roman numeral III valid?', 'roman_numerals_year_4'),
(27, 7, 'What is the number 40 as a roman numeral?', 'roman_numerals_year_4'),
(28, 8, 'What is the roman numeral C as a number?', 'roman_numerals_year_4'),
(29, 9, 'Is the roman numeral VVV valid?', 'roman_numerals_year_4'),
(30, 10, 'What is the number 12 as a roman numeral?', 'roman_numerals_year_4'),
(31, 1, 'What is the roman numeral MXI as a number?', 'roman_numerals_year_5'),
(32, 2, 'What is the number 2022 as a roman numeral?', 'roman_numerals_year_5'),
(33, 3, 'What is the roman numeral MCMXCIX as a number?', 'roman_numerals_year_5'),
(34, 4, 'What is the number 1777 as a roman numeral?', 'roman_numerals_year_5'),
(35, 5, 'What is the roman numeral DI as a number?', 'roman_numerals_year_5'),
(36, 6, 'Is the roman numeral ID valid?', 'roman_numerals_year_5'),
(37, 7, 'What is the number 400 as a roman numeral?', 'roman_numerals_year_5'),
(38, 8, 'What is the roman numeral C as a number?', 'roman_numerals_year_5'),
(39, 9, 'Is the roman numeral XM valid?', 'roman_numerals_year_5'),
(40, 10, 'What is the number 1200 as a roman numeral?', 'roman_numerals_year_5'),
(41, 1, 'What is 1000 more than 438?', 'more_than_less_than_year_4'),
(42, 2, 'What is 1000 less than 2000?', 'more_than_less_than_year_4'),
(43, 3, 'What is 1000 more than 1432?', 'more_than_less_than_year_4'),
(44, 4, 'What is 1000 less than 7432?', 'more_than_less_than_year_4'),
(45, 5, 'What is 1000 more than 11329?', 'more_than_less_than_year_4'),
(46, 6, 'What is 1000 less than 5438?', 'more_than_less_than_year_4'),
(47, 7, 'What is 1000 more than 928?', 'more_than_less_than_year_4'),
(48, 8, 'What is 1000 less than 4329?', 'more_than_less_than_year_4'),
(49, 9, 'What is 1000 more than 764?', 'more_than_less_than_year_4'),
(50, 10, 'What is 1000 less than 394?', 'more_than_less_than_year_4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(1, 'Liam Richardson', 'liam.richardson@gmail.com', 'lmrtrax', '$2y$10$NUknzzYj45u61/OYD9yPbuWz3VKLzTWAA59SKu7u.OQ.hWJzX3tbu');

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
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
