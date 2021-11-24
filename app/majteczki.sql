-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Lis 2021, 20:45
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
-- Struktura tabeli dla tabeli `address`
--

CREATE TABLE `address` (
  `Country` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `City` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `Street` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `BuildingNumber/ApartmentNumber` varchar(45) COLLATE utf8_polish_ci DEFAULT NULL,
  `PostCode` varchar(45) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `images`
--

CREATE TABLE `images` (
  `ImageID` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `ProductID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `images`
--

INSERT INTO `images` (`ImageID`, `link`, `ProductID`) VALUES
(1, './assets/images/kobieta.svg', 1),
(2, './assets/images/mezczyzna.svg', 1),
(3, './assets/images/balkonetka.jpg', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  `Sizes` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `Description` text COLLATE utf8_polish_ci NOT NULL,
  `Category` varchar(255) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `product`
--

INSERT INTO `product` (`productID`, `Name`, `Price`, `Sizes`, `Description`, `Category`) VALUES
(1, 'Kobiece Majtki', '240', 'XXL', 'Majtki typu kalwin kelson', 'Majtki'),
(2, 'Balkonetka', '170', 'M', 'To jest balkonetka. Balkonetka jest biustonoszem damskim', 'Biustonosze');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `email` varchar(255) COLLATE utf8_polish_ci NOT NULL,
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

INSERT INTO `user` (`email`, `FirstName`, `LastName`, `PhoneNumber`, `Password`, `DateOfBirth`, `DateOfRegistration`, `DateOfLastLogin`, `AddressId`) VALUES
('mateuszblazkow1@gmail.com', NULL, NULL, NULL, '$2y$10$KR98N8N./XxZudICvv7tzeqaLLZr9NkZWF5qCIMdJXWfE0LjdhriW', NULL, '2021-11-23 06:44:17', NULL, NULL);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`ImageID`);

--
-- Indeksy dla tabeli `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `images`
--
ALTER TABLE `images`
  MODIFY `ImageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
