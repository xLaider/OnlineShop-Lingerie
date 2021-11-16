-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Lis 2021, 23:26
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `majteczki`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `e-mail` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `FirstName` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `LastName` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `PhoneNumber` varchar(20) COLLATE utf8_polish_ci DEFAULT NULL,
  `Password` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `DateOfRegistration` datetime NOT NULL,
  `DateOfLastLogin` datetime DEFAULT NULL,
  `AddressId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`e-mail`, `FirstName`, `LastName`, `PhoneNumber`, `Password`, `DateOfBirth`, `DateOfRegistration`, `DateOfLastLogin`, `AddressId`) VALUES
('lokomotywatomek@wp.pl', 'Tomasz', 'Nowak', '123456789', 'qwerty123', '1999-06-21', '2021-11-16 23:18:23', '2021-11-16 23:18:23', NULL);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`e-mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
