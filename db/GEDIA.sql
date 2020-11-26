-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 26 Lis 2020, 10:22
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
(10, 123, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0),
(11, 124, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0),
(12, 4545, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, NULL, 0);

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
(4, 'kierownik1', 'haslo', 'Anna', 'Mucha', 6),
(5, 'kierownik2', 'haslo', 'Beata', 'Kozidrak', 8),
(6, 'kierownik3', 'haslo', 'Jacek', 'Morgala', 10);

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
(24, 'pracownik1', 'haslo1', 'Jan', 'Kowalski', 123, '2020-11-26', 0),
(25, 'pracownik2', 'haslo', 'Jan', 'Nowak', 124, '2020-11-26', 0),
(26, 'pracownik3', 'haslo', 'Jacek', 'Kowalski', 4545, '2020-11-26', 0);

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `masters`
--
ALTER TABLE `masters`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
