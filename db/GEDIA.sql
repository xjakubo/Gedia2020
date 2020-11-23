-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 23 Lis 2020, 12:01
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
-- Struktura tabeli dla tabeli `cards`
--

CREATE TABLE `cards` (
  `id` int(255) NOT NULL,
  `workerid` int(255) NOT NULL,
  `Dział Produkcji` tinyint(1) NOT NULL DEFAULT 0,
  `Dział Logistyki` tinyint(1) NOT NULL DEFAULT 0,
  `Dział Jakości` tinyint(1) NOT NULL DEFAULT 0,
  `BHP` tinyint(1) NOT NULL DEFAULT 0,
  `Dział Księgowości` tinyint(1) NOT NULL DEFAULT 0,
  `Dział Utrzymania Ruchu` tinyint(1) NOT NULL DEFAULT 0,
  `Biuro Zarządu` tinyint(1) NOT NULL DEFAULT 0,
  `Dział Informatyki IT` tinyint(1) NOT NULL DEFAULT 0,
  `Dział Kadr` tinyint(1) NOT NULL DEFAULT 0,
  `Dział Zakupów` tinyint(1) NOT NULL DEFAULT 0,
  `Notes` varchar(128) DEFAULT NULL,
  `isDone` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `cards`
--

INSERT INTO `cards` (`id`, `workerid`, `Dział Produkcji`, `Dział Logistyki`, `Dział Jakości`, `BHP`, `Dział Księgowości`, `Dział Utrzymania Ruchu`, `Biuro Zarządu`, `Dział Informatyki IT`, `Dział Kadr`, `Dział Zakupów`, `Notes`, `isDone`) VALUES
(1, 23, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, '', 0),
(2, 24, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, '', 0),
(3, 2137, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0),
(4, 6969, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0);

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
  `gediaid` int(11) NOT NULL,
  `retirementday` date NOT NULL,
  `isdone` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `workers`
--

INSERT INTO `workers` (`id`, `username`, `password`, `name`, `surname`, `gediaid`, `retirementday`, `isdone`) VALUES
(1, 'jacek', 'packa', 'jan', 'kowalski', 0, '2017-12-13', 0),
(2, 'ania', 'bania', 'Anna', 'Mucha', 0, '0000-00-00', 0),
(9, 'bnvcxbcx', 'xvcb', 'xcvbdrsf', 'sdfsdf', 0, '0000-00-00', 0),
(10, 'asda', 'sdasda', 'sdas', 'dasdasdasdasda', 0, '0000-00-00', 0),
(11, 'asdzxc', 'czxc', 'zxczxc', 'zxczxc', 0, '0000-00-00', 0),
(12, 'asdzxc', 'czxc', 'zxczxc', 'zxczxc', 0, '0000-00-00', 0),
(13, 'jakub', 'test123', 'jakub', 'ostrowski', 0, '0000-00-00', 0),
(14, 'jeremiasz', 'mazurkiewicz', 'jeremiasz', 'mazurkiewicz', 0, '0000-00-00', 0),
(15, 'jestem', 'jerem', 'kytas', 'jebany', 23, '2020-11-23', 0),
(17, 'wladimirxpompa', 'jebacdisa123', 'Jerremiasz', 'skurwysynmazurkiewicz', 2137, '2020-11-23', 0),
(18, 'jetemok', 'kochamciekamil123', 'Kamil', 'Miczynski', 6969, '2020-11-23', 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT dla tabeli `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `masters`
--
ALTER TABLE `masters`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
