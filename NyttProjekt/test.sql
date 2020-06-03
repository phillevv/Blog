-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 07 maj 2020 kl 10:03
-- Serverversion: 10.4.11-MariaDB
-- PHP-version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `test`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `author` varchar(55) NOT NULL,
  `title` varchar(55) NOT NULL,
  `text` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` varchar(55) NOT NULL,
  `time` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `content`
--

INSERT INTO `content` (`id`, `author`, `title`, `text`, `image`, `date`, `time`) VALUES
(42, 'Philip', 'Hejsan', 'Mitt första inlägg här då', '', '04-May', '18:30:12'),
(43, 'Philip', 'Efterrätt', 'Idag blir det Daimtårta till efterrätt', '', '04-May', '18:30:33'),
(44, 'Philip', 'Tacos', 'Imorgon blir det tacos till middag', '', '05-May', '12:49:18'),
(65, 'Philip', 'Nu funkar bilder', 'Lägg till bild', 'uploads/icon.png', '05-May', '13:45:42'),
(66, 'Philip', 'Hejsan alla', 'Nu går det att lägga till bilder enkelt', 'uploads/icon.jpg', '05-May', '13:46:24'),
(67, 'Philip', 'Kör baara', 'Kör bara', 'uploads/', '06-May', '14:48:53'),
(84, 'Frida', 'Hej bloggen', 'Idag är jag ute i solen', 'uploads/14479799_1240843675957613_7032596361846858247_n.jpg', '06-May', '15:43:42');

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(3, 'Philip', '$2y$10$hTy8rZWnunCmMt4jlRHwH.MO2tGVy7mKXezEJrLVWEjwmJhSfX9DW'),
(4, 'Frida', '$2y$10$kJ7RTpt1.lSe0MBZf5ss9eTMFbrnBXg9N6z0rrR2A5Mp8CdZ5v7RK'),
(5, 'Torres', '$2y$10$JgPpZVC5e2hmaF.BYkpyMe5vF4meQOh.BX3pOAii.yDHcSBpzrRKq'),
(10, 'Jonte', '$2y$10$xOFdYmkESN7wIA23LC5.veFMmkQihaRG9KeLwsXPtypZ8JieW93IO'),
(11, 'Marina', '$2y$10$dTdHcFndoQAnjQkoCRle4uA56El9OBrBkJc9aq1mY4DAJYE6hpNYm'),
(12, 'Stefan', '$2y$10$AU5x5M4j3.7Hk4M5P6d3LeHP7UCj2BUvj5PAA1jM1qaphcTSHaUK.'),
(25, 'Calle', '$2y$10$Dnr7AP5t92aKik6XrROb2O6Ks51uXpF9hgFVB3gXeImbpqD2zjb/q');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT för tabell `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
