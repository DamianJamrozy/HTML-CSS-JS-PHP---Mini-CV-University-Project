-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 17 Sty 2021, 17:04
-- Wersja serwera: 10.4.13-MariaDB
-- Wersja PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `damjam`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `imie` varchar(255) NOT NULL,
  `nazwisko` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` int(9) NOT NULL,
  `login` varchar(255) NOT NULL,
  `haslo` varchar(255) NOT NULL,
  `rejestracja` int(10) NOT NULL,
  `logowanie` int(10) NOT NULL,
  `ip` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `imie`, `nazwisko`, `email`, `tel`, `login`, `haslo`, `rejestracja`, `logowanie`, `ip`) VALUES
(18, 'Damian', 'Jamrozy', 'damianjamrozy99@gmail.com', 536252245, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1610888968, 1610888968, '::1'),
(16, 'dfsd', 'fdsfds', 'feniks@fdfs.psdf', 424234324, 'login', 'd56b699830e77ba53855679cb1d252da', 1610827626, 1610827626, '::1');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uslugi`
--

CREATE TABLE `uslugi` (
  `id_uslugi` int(11) NOT NULL,
  `Aplikacja_mobilna` double NOT NULL,
  `Strona_internetowa` double NOT NULL,
  `Produkcja_filmowa` double NOT NULL,
  `Social_media` double NOT NULL,
  `Grafika_komputerowa` double NOT NULL,
  `cena` double NOT NULL,
  `status` text COLLATE utf8mb4_polish_ci NOT NULL,
  `Imie` text COLLATE utf8mb4_polish_ci NOT NULL,
  `Nazwisko` text COLLATE utf8mb4_polish_ci NOT NULL,
  `Tel` int(9) NOT NULL,
  `E_mail` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `uslugi`
--

INSERT INTO `uslugi` (`id_uslugi`, `Aplikacja_mobilna`, `Strona_internetowa`, `Produkcja_filmowa`, `Social_media`, `Grafika_komputerowa`, `cena`, `status`, `Imie`, `Nazwisko`, `Tel`, `E_mail`) VALUES
(9, 0, 1000, 800, 100, 150, 1742.5, 'Tworzenie', 'damian', 'jamrozy', 432423432, 'dsa@pl.soc'),
(12, 16500, 0, 0, 0, 1300, 16910, 'Oczekuje na kontakt', 'Jan', 'Kowalski', 555107689, 'poczta@onet.pl'),
(13, 0, 6450, 2600, 0, 450, 8550, 'Oczekuje na kontakt', 'Karol', 'Tester', 997998999, 'testowy@ur.edu.pl');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `uslugi`
--
ALTER TABLE `uslugi`
  ADD PRIMARY KEY (`id_uslugi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT dla tabeli `uslugi`
--
ALTER TABLE `uslugi`
  MODIFY `id_uslugi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
