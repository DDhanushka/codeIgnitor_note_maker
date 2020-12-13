-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 13, 2020 at 05:56 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `body` text NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `slug`, `body`, `dateTime`) VALUES
(2, '  What is bootstrap', 'what-is-bootstrap', 'Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development. It contains CSS- and JavaScript-based design templates for typography, forms, buttons, navigation, and other interface components.', '2020-12-12 22:41:59'),
(3, '  Welcome to CodeIgniter4', 'welcome-to-codeigniter4', 'CodeIgniter is an Application Development Framework - a toolkit - for people who build web sites using PHP. Its goal is to enable you to develop projects much faster than you could if you were writing code from scratch, by providing a rich set of libraries for commonly needed tasks, as well as a simple interface and logical structure to access these libraries. CodeIgniter lets you creatively focus on your project by minimizing the amount of code needed for a given task.\r\n\r\nWhere possible, CodeIgniter has been kept as flexible as possible, allowing you to work in the way you want, not being forced into working any certain way. The framework can have core parts easily extended or completely replaced to make the system work the way you need it to. In short, CodeIgniter is the malleable framework that tries to provide the tools you need while staying out of the way.', '2020-08-04 05:30:57'),
(18, ' MVC Assignment [Deadline: Friday, 31 July 2020]', 'mvc-assignment-deadline-friday-31-july-2020', 'Write a simple application using Codeignitor and Bootstrap. The\r\napplication should include CRUD operations and produce 1 report using\r\ndata saved in the database. Suitable database table(s) shall be created\r\nindependently using PhPMyAdmin etc. A short report not exceeding 5\r\npages need to be submitted containing the following: (description of the\r\nimplementation details, lessons learnt, problems encountered and how\r\nthey were resolved and small screenshots of each of the 5 functions\r\nimplemented). Its is necessary to use appropriate coding standards used\r\nin your code. Note: the report should be in pdf format. include the source\r\ncode together with the report in a zip file with the name should be\r\nCI_yourIndexNo.zip', '2020-07-29 04:42:10'),
(38, 'Famous Lorem Ipsum text', 'famous-lorem-ipsum-text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sollicitudin, nulla in semper tincidunt, mauris quam consectetur turpis, quis mollis dui felis sit amet odio. Nunc non laoreet diam. Aenean in diam maximus, tristique lectus in, aliquam odio. Fusce nulla magna, pellentesque nec porttitor non, venenatis sed tellus. Nullam vitae felis at erat vehicula commodo. In et tristique justo. Proin non vestibulum lorem, ut tincidunt leo. Quisque tincidunt, dolor non aliquam ullamcorper, nisl tellus ornare erat, sed ullamcorper dolor nisi sed sapien. Etiam ac sollicitudin metus, eu sollicitudin lacus. Nulla mauris nisl, luctus eget augue vel, consectetur sagittis urna. Nulla erat nunc, maximus suscipit nisi quis, congue venenatis lorem. Curabitur tristique arcu id quam ultrices, sit amet facilisis nibh varius. Nunc vestibulum tellus magna, at interdum felis egestas sit amet. Fusce pellentesque, risus nec lobortis rutrum, lorem quam luctus magna, ut dignissim tellus neque vitae dui. Interdum et malesuada fames ac ante ipsum primis in faucibus.', '2020-07-29 04:43:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
