-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 18 Lis 2020, 10:58
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `GEDIA`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `masters`
--

CREATE TABLE `masters` (
  `id` int(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `surname` varchar(32) NOT NULL,
  `masterid` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `masters`
--

INSERT INTO `masters` (`id`, `username`, `password`, `name`, `surname`, `masterid`) VALUES
(1, 'pierwszy', 'tesd123', 'dasdas', 'asdasd', 2),
(2, 'asd', 'asd', 'zxcczx', 'zxc', 5),
(3, 'szymus', 'test123', 'szemon', 'czajsfdsd', 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `workers`
--

CREATE TABLE `workers` (
  `id` int(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `surname` varchar(32) NOT NULL,
  `isdone` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `workers`
--

INSERT INTO `workers` (`id`, `username`, `password`, `name`, `surname`, `isdone`) VALUES
(1, 'jacek', 'packa', 'jan', 'kowalski', 0),
(2, 'ania', 'bania', 'Anna', 'Mucha', 0),
(9, 'bnvcxbcx', 'xvcb', 'xcvbdrsf', 'sdfsdf', NULL),
(10, 'asda', 'sdasda', 'sdas', 'dasdasdasdasda', NULL),
(11, 'asdzxc', 'czxc', 'zxczxc', 'zxczxc', NULL),
(12, 'asdzxc', 'czxc', 'zxczxc', 'zxczxc', NULL),
(13, 'jakub', 'test123', 'jakub', 'ostrowski', NULL);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `masters`
--
ALTER TABLE `masters`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `masters`
--
ALTER TABLE `masters`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
