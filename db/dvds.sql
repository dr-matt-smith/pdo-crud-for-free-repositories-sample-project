-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Feb 15, 2017 at 12:08 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `evote`
--

-- --------------------------------------------------------

--
-- Table structure for table `dvds`
--

CREATE TABLE `dvds` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `category` text NOT NULL,
  `price` float NOT NULL,
  `voteAverage` int(11) NOT NULL,
  `numVotes` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dvds`
--

INSERT INTO `dvds` (`id`, `title`, `category`, `price`, `voteAverage`, `numVotes`) VALUES
(1, 'Jaws', 'horror', 9.99, 5, 4),
(2, 'Batman', 'comedy', 5.99, 2, 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dvds`
--
ALTER TABLE `dvds`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dvds`
--
ALTER TABLE `dvds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;