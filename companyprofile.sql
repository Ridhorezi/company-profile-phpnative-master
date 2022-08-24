-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 12:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `companyprofile`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Administrator', '25d55ad283aa400af464c76d713c07ad'),
(2, 'Ridho Suhaebi Arrowi', '25d55ad283aa400af464c76d713c07ad'),
(3, 'vickry', '25d55ad283aa400af464c76d713c07ad'),
(4, 'bagas', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `halaman`
--

CREATE TABLE `halaman` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kutipan` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `halaman`
--

INSERT INTO `halaman` (`id`, `judul`, `kutipan`, `isi`, `tgl_isi`) VALUES
(6, 'Judul 3', 'Kutipan 3', '<p>Isi 3</p>', '2022-05-10 02:13:53'),
(8, 'The coding world awaits you', 'Learn programming anywhere <br> and anytime !', '<p><img src=\"../gambar/image_home.jpg\" data-filename=\"image_home.jpg\" class=\"note-float-left\" style=\"float: left; width: 50%; border-radius: 15px; padding: 10px;\">\r\n<br>\r\nEveryone’s talking about coding, but where do you start? This path will give you an introduction to the world of code and basic concepts. By the end, you’ll know whether Data Science, Computer Science or Web Development is right for you.<br></p><p>The GBVR COURSES skill path is your portal to a coding career, We teach you the basics so you’re writing code, thinking like a programmer, and ready to start your career in no time.<br></p><p>You’ll learn:\r\n\r\nFoundations of the coding trifecta: Web Development, Computer Science, and Data Science\r\nHow to write your first lines of code in the most popular languages\r\nThe roadmap to your new profession.</p> \r\n<p>\r\nWith us you will get tutors who are experienced in their fields, apart from that now learning does not have to be from class, you can learn through learning videos and wherever and whenever, we also provide special classes for those of you who want to get support 7x24 hours from us.</p> \r\n<p>\r\n<br><br><br><br><br>\r\n\r\n\r\n\r\n\r\n</p>', '2022-05-27 02:49:13'),
(19, 'Online Courses', 'You Will Need This', '<p></p><div style=\"text-align: center;\"><p style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">In embracing enthusiasts from all over Indonesia, the Gbvr Course is now </span><span style=\"font-size: 1rem;\">adding online learning methods. Where previously we have held Remote Online Classes (Private) whose enthusiasts are not only from Indonesia, but also from Indonesian people who live from various countries such as Egypt, the Netherlands, America, and many more. Gbvr Course presents a new Online Class learning method, namely ONLINE CONFERENCE CLASS. The advantages of the Online Conference Class are:   1. Still able to interact with participants and trainers via video  2. If there is an error while studying, the Trainer can directly handle it via Remote.  3. Can learn from anywhere such as Home, Office or Cafe.  4. The duration is the same as the Regular  5. Time can be held Weekend / Weekday.  6. Class will run with Minimum 4 participants  7. Get the Hardcopy Module.Get a Digital Certificate.  8. And for sure, the cost is very affordable :)</span><br></p><p style=\"text-align: center;\"><img src=\"../gambar/9fc3d7152ba9336a670e36d0ed79bc43.jpg\" style=\"width: 21%; border-radius: 5px;\"><span style=\"font-size: 1rem; text-align: center;\"><br></span></p><p style=\"text-align: left;\"></p></div>', '2022-06-06 03:14:44'),
(118, 'test', 'test ya', '<p>buat test<br></p>', '2022-06-07 06:07:12');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `judul`, `isi`, `tgl_isi`) VALUES
(1, 'Gbvr Courses.', '<p><span style=\"font-size: 14px;\">Komplek Ruko Taman Kota Blok H No. 6, RT.012/RW.016, Bekasi Jaya, Kec. Bekasi Timur,. Kota Bks, Jawa Barat 17112<br></span><br><p><span style=\"font-size: 14px;\">﻿</span></p><p></p></p>', '2022-05-20 16:13:07'),
(2, 'About', '<p><span style=\"font-size: 14px;\">We are GBVR COURSES, </span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">Creating competent graduates is not our job </span><span style=\"font-size: 14px;\">but our fashion.</span><span style=\"font-size: 14px;\"></span><span style=\"font-size: 14px;\"></span></p>', '2022-05-13 09:53:03'),
(3, 'Contact', '<p>Email: ridho@xeranta.com</p><p>Whatsapp: 6281383538907<br><p></p></p>', '2022-05-20 16:15:07'),
(18, 'Sosial', '<p align=\"left\"><a href=\"https://instagram.com/dho.s.a_18/\" target=\"_blank\">Instagram    </a><a href=\"https://twitter.com/dhosa18\" target=\"_blank\">Twitter</a></p><p align=\"left\"><a href=\"https://www.linkedin.com/in/ridho-suhaebi-arrowi-963148230/\" target=\"_blank\">Linkedin</a>       <a href=\"https://www.youtube.com/c/WebProgrammingUNPAS\" target=\"_blank\">Youtube</a></p><p><br><br><br></p>', '2022-06-03 07:33:42');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `status` text NOT NULL,
  `token_ganti_password` text DEFAULT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `email`, `nama_lengkap`, `password`, `status`, `token_ganti_password`, `tgl_isi`) VALUES
(3, 'ridhorezi1212@gmail.com', 'Ridho Suhaebi Arrowi', '25d55ad283aa400af464c76d713c07ad', '1', 'd1f491a404d6854880943e5c3cd9ca25', '2022-03-28 08:50:28'),
(5, 'resa@mail.com', 'resa ', '25d55ad283aa400af464c76d713c07ad', 'aff1621254f7c1be92f64550478c56e6', NULL, '2022-04-09 12:34:03'),
(6, 'vickry@gmail.com', 'Vickry Aries Budiman', '25d55ad283aa400af464c76d713c07ad', '1', NULL, '2022-04-15 14:05:21'),
(16, 'usergbvr@gmail.com', 'usergbvr', '25d55ad283aa400af464c76d713c07ad', '15d4e891d784977cacbfcbb00c48f133', NULL, '2022-06-08 09:49:36');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `nama`, `foto`, `isi`, `tgl_isi`) VALUES
(1, 'Bukalapak', 'partners_1648800439_buka.jpg', 'Bukalapak', '2022-04-01 08:07:19'),
(2, 'Intel', 'partners_1648800335_intel.png', 'Intel', '2022-04-05 03:08:33'),
(3, 'Tesla', 'partners_1648799814_tesla.png', '<p>Tesla</p>', '2022-04-01 07:56:54'),
(4, 'Meta', 'partners_1648799740_meta.jpg', 'Meta', '2022-04-01 07:55:40'),
(5, 'Goto', 'partners_1648799635_gt.png', 'Goto', '2022-06-07 16:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE `tutors` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`id`, `nama`, `foto`, `isi`, `tgl_isi`) VALUES
(4, 'Sandhika Galih', 'tutors_1648797309_sandhika_image.jpg', '<p>Lecturer of Informatics Engineering Dept. at Pasundan University, Bandung - Indonesia.<br>Currently teaching Web Design and Web Programming.<br>Also doing research in Web Technology, Multimedia, Cognitive Science and UI/UX Design.<br>Create and maintain a YouTube Channel called WebProgrammingUNPAS for web design and web programming tutorials.<br></p>', '2022-04-05 05:25:03'),
(5, 'Eriko Darmawan Handoyo', 'tutors_1648797285_eriko.jpg', '<p><span style=\"font-size: 1rem;\">I have been a lecturer since 2005 at Maranatha Christian University. Teaching is my hobby because it improves my skills and can help many people. I made a youtube channel containing some playlists (especially those related to Flutter) are you guys ready to have fun with flutter, wait for me in the Gbvr course class</span><br></p>', '2022-04-08 07:55:33'),
(6, 'Yuma Soerianto', 'tutors_1648797211_yuma.jpg', '<p>I am an Apple Worldwide Developers Conference (WWDC) scholarship/Swift Student Challenge winner in 2017, 2018, 2019, 2020 and 2021. At ten years old, I was the youngest scholarship winner at WWDC17.&nbsp;I also regularly speak at international conferences. In my free time, I teach coding on my YouTube channel and Gbvr Course, Anyone Can Code.<br></p>', '2022-04-08 08:01:52'),
(7, 'Fakihza Mukhlish', 'tutors_1649136373_kang_pukis.jpg', '<p>I am an Experienced Researcher with a demonstrated history of working in the higher education industry. Skilled in Research, Distributed Control System (DCS), Matlab, English, and Programmable Logic Controller (PLC). Strong research professional with a Master of Science (M.Sc.) degree focusing on Instrumentation and Control Engineering from the Bandung Institute of Technology and a PhD focusing on Swarm Robotics from The University of New South Wales.&nbsp;<span style=\"font-size: 1rem;\">Now I teach at the Gbvr Course, with me you will understand programming logic and a good learning flow</span></p>', '2022-04-08 08:08:40'),
(8, 'Eko Kurniawan Khannedy', 'tutors_1649136556_programer_zaman_now.jpg', '<p><span style=\"color: rgba(0, 0, 0, 0.9); font-family: -apple-system, system-ui, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Fira Sans\", Ubuntu, Oxygen, \"Oxygen Sans\", Cantarell, \"Droid Sans\", \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Lucida Grande\", Helvetica, Arial, sans-serif;\">Technical Architect at Blibli.com</span><br></p>', '2022-06-06 03:35:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tutors`
--
ALTER TABLE `tutors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
