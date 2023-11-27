-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 07:27 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_film`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(12) NOT NULL,
  `foto` text NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `foto`, `judul`, `deskripsi`) VALUES
(13, 'assets/images/black-widow.jpeg', 'BLACK WIDOW', 'Black Widow adalah film superhero Amerika yang dirilis pada tahun 2021 dan merupakan bagian dari Marvel Cinematic Universe (MCU). Berikut adalah sinopsis singkat dari film tersebut:\r\n\r\nNatasha Romanoff, yang dikenal sebagai Black Widow, dihadapkan pada masa lalunya yang kelam ketika seorang musuh misterius bernama Taskmaster muncul. Untuk menghadapi ancaman ini, Natasha harus kembali ke tempat-tempat yang pernah dia tinggalkan, termasuk Budapest, di mana dia memiliki sejarah yang rumit dengan sesama agen S.H.I.E.L.D., Clint Barton (Hawkeye).\r\n\r\nDalam perjalanan kembali ke masa lalunya, Natasha bertemu dengan Yelena Belova, seorang rekan agen hitam yang juga melalui pelatihan spesialis dan dianggap sebagai \"adik\" dalam program Red Room yang sama. Bersama-sama, mereka mengungkap konspirasi yang lebih besar yang terkait dengan program pembunuh berbahaya yang mencuci otak yang melibatkan banyak perempuan muda.\r\n\r\nFilm ini menggali lebih dalam pada karakter Natasha Romanoff dan memberikan pandangan mendalam tentang perjuangannya, hubungan keluarganya yang rusak, dan upaya untuk menebus masa lalunya. Seiring dengan tindakan spektakuler dan elemen khas film superhero MCU, \"Black Widow\" mengeksplorasi tema keluarga, pengorbanan, dan identitas yang menciptakan sebuah cerita yang kuat di dalam dunia yang sudah akrab dengan para penggemarnya.');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(12) NOT NULL,
  `id_user` int(12) NOT NULL,
  `id_film` int(12) NOT NULL,
  `komentar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `suka`
--

CREATE TABLE `suka` (
  `id` int(12) NOT NULL,
  `id_user` int(12) NOT NULL,
  `id_film` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `unsuka`
--

CREATE TABLE `unsuka` (
  `id` int(12) NOT NULL,
  `id_user` int(12) NOT NULL,
  `id_film` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `role` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `role`, `nama`, `email`, `password`) VALUES
(12, 'admin', 'Skrrtzz', 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `watchlist`
--

CREATE TABLE `watchlist` (
  `id` int(12) NOT NULL,
  `id_user` int(12) NOT NULL,
  `id_film` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film to komen` (`id_film`),
  ADD KEY `user to komen` (`id_user`);

--
-- Indexes for table `suka`
--
ALTER TABLE `suka`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_film` (`id_film`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `unsuka`
--
ALTER TABLE `unsuka`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_film` (`id_film`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `watchlist`
--
ALTER TABLE `watchlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_film` (`id_film`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `suka`
--
ALTER TABLE `suka`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `unsuka`
--
ALTER TABLE `unsuka`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `watchlist`
--
ALTER TABLE `watchlist`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `film to komen` FOREIGN KEY (`id_film`) REFERENCES `film` (`id`),
  ADD CONSTRAINT `user to komen` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `suka`
--
ALTER TABLE `suka`
  ADD CONSTRAINT `suka_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id`),
  ADD CONSTRAINT `suka_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `unsuka`
--
ALTER TABLE `unsuka`
  ADD CONSTRAINT `unsuka_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `unsuka_ibfk_2` FOREIGN KEY (`id_film`) REFERENCES `film` (`id`);

--
-- Constraints for table `watchlist`
--
ALTER TABLE `watchlist`
  ADD CONSTRAINT `watchlist_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id`),
  ADD CONSTRAINT `watchlist_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
