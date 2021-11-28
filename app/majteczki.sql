-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Lis 2021, 22:17
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
  `AddressId` int(11) NOT NULL,
  `Country` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `City` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `Street` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `BuildingNumber/ApartmentNumber` varchar(45) COLLATE utf8_polish_ci DEFAULT NULL,
  `PostCode` varchar(45) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `address`
--

INSERT INTO `address` (`AddressId`, `Country`, `City`, `Street`, `BuildingNumber/ApartmentNumber`, `PostCode`) VALUES
(1, 'Polska', 'Warszawa', 'Rębkowska', '11', '03-375'),
(2, 'Polska', 'Krzyś', 'Sienkiewicza', '10', '42-400');

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
-- Struktura tabeli dla tabeli `orderproduct`
--

CREATE TABLE `orderproduct` (
  `OrderProductId` int(11) NOT NULL,
  `Quantity` tinyint(4) NOT NULL,
  `Size` varchar(45) COLLATE utf8mb4_general_nopad_ci NOT NULL,
  `ProductId` int(11) NOT NULL,
  `OrderNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_nopad_ci;

--
-- Zrzut danych tabeli `orderproduct`
--

INSERT INTO `orderproduct` (`OrderProductId`, `Quantity`, `Size`, `ProductId`, `OrderNumber`) VALUES
(1, 2, '', 1, 1),
(2, 4, '', 2, 1),
(3, 5, '', 1, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orders`
--

CREATE TABLE `orders` (
  `OrderNumber` int(11) NOT NULL,
  `DateOfOrder` date NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_nopad_ci;

--
-- Zrzut danych tabeli `orders`
--

INSERT INTO `orders` (`OrderNumber`, `DateOfOrder`, `Status`, `email`) VALUES
(1, '2021-11-28', 0, 'ewa@wp.pl'),
(2, '2021-11-15', 1, 'ewa@wp.pl');

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
('mateuszblazkow1@gmail.com', NULL, NULL, NULL, '$2y$10$KR98N8N./XxZudICvv7tzeqaLLZr9NkZWF5qCIMdJXWfE0LjdhriW', NULL, '2021-11-23 06:44:17', NULL, NULL),
('ewa@wp.pl', NULL, NULL, NULL, '$2y$10$s7.htAjjqgWP1zYvr6BrReJxVl0ZrHPuuuBU//IrkYoLnskWcU9Q.', NULL, '2021-11-24 11:30:21', NULL, 2);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`AddressId`);

--
-- Indeksy dla tabeli `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`ImageID`);

--
-- Indeksy dla tabeli `orderproduct`
--
ALTER TABLE `orderproduct`
  ADD PRIMARY KEY (`OrderProductId`);

--
-- Indeksy dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderNumber`);

--
-- Indeksy dla tabeli `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `address`
--
ALTER TABLE `address`
  MODIFY `AddressId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `images`
--
ALTER TABLE `images`
  MODIFY `ImageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `orderproduct`
--
ALTER TABLE `orderproduct`
  MODIFY `OrderProductId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
