-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 29 Lip 2022, 09:56
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `tools`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tools`
--

CREATE TABLE `tools` (
  `id` int(11) NOT NULL,
  `dzial` varchar(255) NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `numer_narzedzia` varchar(255) NOT NULL,
  `numer_katalogowy` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `tools`
--

INSERT INTO `tools` (`id`, `dzial`, `nazwa`, `numer_narzedzia`, `numer_katalogowy`, `link`) VALUES
(7, '12', 'Redukcja C8/Weldon40', 'PO0006', 'C8-391.20-40 110', 'https://www.sandvik.coromant.com/pl-pl/search/products/adp_cor/rsym_cor/rsym_xd_cor?q=C8-391.20-40%20110&filter=%7B%22refiners%22:%7B%22TIBPAvailability%22:%5B%22Available%22%5D,%22IsTailorMade%22:%5B0%5D%7D,%22tableType%22:null,%22selectedColumns%22:null'),
(9, '12', 'Redukcja C8/C6', 'PO0001', 'C8-391.02-63 120A', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C8-391.02-63%20120A'),
(10, '12', 'Redukcja C8/C4', 'PO0002', 'C8-391.02-40 070B', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C8-391.02-40%20070B'),
(11, '12', 'Redukcja C8/C3', 'PO0003', 'C8-391.02-32 060A', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C8-391.02-32%20060A'),
(12, '12', 'Redukcja C6/C3', 'PO0004', 'C6-391.02-32 032', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C6-391.02-32%20032'),
(13, '12', 'Redukcja C8/C5', 'PO0005', 'C8-391.02-50 080A', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C8-391.02-50%20080A'),
(14, '12', 'Redukcja C8/Weldon25', 'PO0007', 'C8-391.20-25 080', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C8-391.20-25%20080'),
(15, '12', 'Redukcja C8/C5', 'PO0008', 'C8-391.02-50 080A', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C8-391.02-50%20080A'),
(16, '12', 'Redukcja C8/Weldon32', 'PO0009', 'C8-391.20-32 080', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C8-391.20-32%20080'),
(17, '12', 'Redukcja C8/Weldon20', 'PO0010', 'C8-391.20-20 070', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C8-391.20-20%20070'),
(18, '12', 'Oprawka pod glowice 40S', 'PO0011', 'C10-391.05-40 040M', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C10-391.05-40%20040M'),
(19, '12', 'Oprawka pod glowice 16mm', 'PO0012', 'AK155.8.C6.030.16', 'https://www.walter-tools.com/en-gb/search/pages/default.aspx/product/ak155.8.c6.030.16'),
(20, '12', 'Oprawka pod glowice 22', 'PO0013', 'C4-391.05C-22 025', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C4-391.05C-22%20025'),
(21, '12', 'Oprawka pod glowice 40S', 'PO0014', 'C8-391.05-40 060M', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C8-391.05-40%20060M'),
(22, '12', 'Oprawka C6/zaciskowa ER40', 'PO0015', 'C6-391.14-40 065', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C6-391.14-40%20065'),
(23, '12', 'Przedluzka C10/L140', 'PO0016', 'C10-391.01-100 140', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C10-391.01-100%20140'),
(24, '12', 'Przedluzka C10/L200', 'PO0017', 'C10-391.01-100 200', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C10-391.01-100%20200'),
(25, '12', 'Przedluzka C8/L100', 'PO0018', 'C8-391.01-80 100A', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C8-391.01-80%20100A'),
(26, '12', 'Przedluzka C10/L200', 'PO0019', 'C10-391.01-100 200', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C10-391.01-100%20200'),
(27, '12', 'Przedluzka C8/L200', 'PO0020', 'C8-391.01-80 200', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C8-391.01-80%20200'),
(28, '12', 'Przedluzka C3/L80', 'PO0021', 'C3-391.01-32 080A', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C3-391.01-32%20080A'),
(29, '12', 'Przedluzka C8/L200', 'PO0022', 'C8-391.01-80 200', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C8-391.01-80%20200'),
(30, '12', 'Przedluzka C5/L100', 'PO0023', 'C5-391.01-50 100A', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C5-391.01-50%20100A'),
(32, '12', 'Przedluzka C5/L80', 'PO0024', 'C5-391.01-50 080A', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C5-391.01-50%20080A'),
(33, '12', 'Przedluzka C5/L100', 'PO0025', 'C5-391.01-50 100A', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C5-391.01-50%20100A'),
(34, '12', 'Przedluzka C3/L80', 'PO0026', 'C3-391.01-32 080A', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C3-391.01-32%20080A'),
(35, '12', 'Przedluzka C6/L60', 'PO0027', 'C6-391.01-63 060', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C6-391.01-63%20060'),
(36, '12', 'Przedluzka C5/L50', 'PO0028', 'C5-391.01-50 050', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C5-391.01-50%20050'),
(37, '12', 'Przedluzka C10/L140', 'PO0029', 'C10-391.01-100 140', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C10-391.01-100%20140'),
(38, '12', 'Przedluzka C8/L100', 'PO0031', 'C8-391.01-80 100A', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C8-391.01-80%20100A'),
(39, '12', 'Przedluzka C8/L100', 'PO0032', 'C8-391.01-80 100A', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C8-391.01-80%20100A'),
(40, '12', 'Przedluzka C8/L125', 'PO0033', 'C8-391.01-80 125A', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C8-391.01-80%20125A'),
(41, '12', 'Przedluzka C4/L80', 'PO0034', 'C4-391.01-40 080A', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C4-391.01-40%20080A'),
(42, '12', 'Przedluzka C4/L80', 'PO0030', 'C4-391.01-40 080A', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C4-391.01-40%20080A'),
(43, '12', 'Redukcja C6/C5', 'PO0035', 'C6-391.02-50 080A', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C6-391.02-50%20080A'),
(44, '12', 'Redukcja C10/C8', 'PO0036', 'C10-391.02-80 100', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C10-391.02-80%20100'),
(45, '12', 'Redukcja C4/C3', 'PO0037', 'C4-391.02-32 055A', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C4-391.02-32%20055A'),
(46, '12', 'Redukcja C6/C4', 'PO0038', 'C6-391.02-40 080A', 'https://www.sandvik.coromant.com/pl-pl/products/pages/productdetails.aspx?c=C6-391.02-40%20080A'),
(49, '2', 'Wiertlo 21~21.4', 'PW0001', 'TPDB210-25-5', 'https://catalog.korloy.com/search.do'),
(50, '2', 'Wiertlo 75-80', 'PW0002', 'K4F758050-13', 'https://catalog.korloy.com/search.do'),
(51, '2', 'Wiertlo 32', 'PW0003', 'WPDC350 32-8', 'https://catalog.korloy.com/search.do'),
(52, '2', 'Wiertlo 39', 'PW0004', 'K5D39040-13', 'https://catalog.korloy.com/search.do'),
(53, '2', 'Wiertlo KOMET 43', 'PW0005', 'KUB Premium fi43.0/172/R', 'https://cuttingtools.ceratizit.com/pl/pl.html'),
(54, '2', 'Wiertlo 41', 'PW0006', 'K4D41040-13', 'https://catalog.korloy.com/search.do'),
(55, '2', 'Wiertlo 43', 'PW0007', 'K3D43040-15', 'https://catalog.korloy.com/search.do'),
(56, '2', 'Wiertlo 44.5', 'PW0008', 'K3D44540-15', 'https://catalog.korloy.com/search.do'),
(57, '2', 'Wiertlo 32', 'PW0009', 'TPDB260-32-5', 'https://catalog.korloy.com/search.do'),
(58, '2', 'Wiertlo 24', 'PW0010', 'K5D24032-09', 'https://catalog.korloy.com/search.do'),
(59, '2', 'Wiertlo 26', 'PW0011', 'K4D26032-09', 'https://catalog.korloy.com/search.do'),
(60, '2', 'Wiertlo 26~26.4', 'PW0012', 'TPDB260-32-8-P', 'https://catalog.korloy.com/search.do'),
(61, '2', 'Wiertlo 33', 'PW0013', 'SD525-33-165-40R7', 'https://www.secotools.com/article/p_03079596'),
(62, '2', 'Wiertlo 19~19.4', 'PW0014', 'TPDB190-25-5', 'https://catalog.korloy.com/search.do'),
(63, '2', 'Wiertlo 17.5-17.9', 'PW0015', 'TPDB175-20-5', 'https://catalog.korloy.com/search.do'),
(64, '2', 'Wiertlo 14~14.4', 'PW0016', 'TPDB140-16-5', 'https://catalog.korloy.com/search.do'),
(65, '2', 'Wiertlo KOMET 58', 'PW0017', 'KUB Quatron fi58.0/116/R', 'https://cuttingtools.ceratizit.com/pl/pl.html'),
(66, '2', 'Wiertlo KOMET 50.5-52', 'PW0018', 'KUB fi50.5-52 R48', 'https://cuttingtools.ceratizit.com/pl/pl.html'),
(67, '2', 'Wiertlo 58', 'PW0019', 'K4D58040-18', 'https://catalog.korloy.com/search.do'),
(68, '2', 'Wiertlo KOMET 65-71', 'PW0020', 'KUB Centron fi65-71  N-295', 'https://cuttingtools.ceratizit.com/pl/pl.html'),
(69, '2', 'Wiertlo 45', 'PW0021', 'K5D45040-15', 'https://catalog.korloy.com/search.do'),
(70, '2', 'Wiertlo 60', 'PW0022', 'K3D60040-18', 'https://catalog.korloy.com/search.do'),
(71, '2', 'Wiertlo 51.5', 'PW0023', 'K3D51540-18', 'https://catalog.korloy.com/search.do'),
(72, '2', 'Wiertlo 48', 'PW0024', 'K5D48040-15', 'https://catalog.korloy.com/search.do'),
(73, '2', 'Wiertlo 45', 'PW0025', 'K5D450-15', 'https://catalog.korloy.com/search.do'),
(74, '2', 'Wiertlo 61-65', 'PW0026', 'K2D616550-11', 'https://catalog.korloy.com/search.do'),
(75, '2', 'Wiertlo 32', 'PW0027', 'WPDC400-32-8', 'https://catalog.korloy.com/search.do'),
(76, '2', 'Wiertlo 58', 'PW0028', 'K3D58040-18', 'https://catalog.korloy.com/search.do'),
(77, '2', 'Wiertlo 43', 'PW0029', 'K5D43040-15', 'https://catalog.korloy.com/search.do'),
(78, '2', 'Wiertlo 32', 'PW0030', 'K4D32032-11', 'https://catalog.korloy.com/search.do'),
(79, '2', 'Wiertlo 50.5', 'PW0031', 'K4D50540-15', 'https://catalog.korloy.com/search.do'),
(80, '2', 'Wiertlo 45', 'PW0032', 'K5D45040-15', 'https://catalog.korloy.com/search.do'),
(81, '2', 'Wiertlo 50', 'PW0033', 'KD550040-15', 'https://catalog.korloy.com/search.do'),
(82, '2', 'Wiertlo KOMET 37.5', 'PW0034', 'KUB Quatron fi37.5/76/R', 'https://cuttingtools.ceratizit.com/pl/pl.html'),
(83, '2', 'Wiertlo 70-75', 'PW0035', 'K4D707550-13', 'https://catalog.korloy.com/search.do'),
(84, '2', 'Wiertlo 90-95', 'PW0036', 'K4D909550-15', 'https://catalog.korloy.com/search.do'),
(85, '2', 'Wiertlo 29.5', 'PW0037', 'K3D29532-09', 'https://catalog.korloy.com/search.do'),
(86, '2', 'Wiertlo 26.5', 'PW0038', 'K4D26532-09', 'https://catalog.korloy.com/search.do'),
(87, '2', 'Wiertlo 34', 'PW0039', 'K3D34032-11', 'https://catalog.korloy.com/search.do'),
(88, '2', 'Wiertlo 60', 'PW0040', 'K4D60040-18', 'https://catalog.korloy.com/search.do'),
(89, '2', 'Wiertlo 40', 'PW0041', 'K3D40040-13', 'https://catalog.korloy.com/search.do'),
(90, '2', 'Wiertlo 23', 'PW0042', 'K4D23025-07', 'https://catalog.korloy.com/search.do'),
(91, '2', 'Wiertlo 20', 'PW0043', 'K3D20025-07', 'https://catalog.korloy.com/search.do'),
(92, '2', 'Wiertlo 14', 'PW0044', 'K3D14020-05', 'https://catalog.korloy.com/search.do'),
(93, '2', 'Wiertlo 22', 'PW0045', 'K3D22025-07', 'https://catalog.korloy.com/search.do'),
(94, '2', 'Wiertlo 21', 'PW0046', 'K3D21025-07', 'https://catalog.korloy.com/search.do'),
(95, '2', 'Wiertlo 17.5', 'PW0047', 'K3D17525-06', 'https://catalog.korloy.com/search.do'),
(96, '2', 'Wiertlo 43', 'PW0048', 'K2D43040-15', 'https://catalog.korloy.com/search.do'),
(97, '2', 'Wiertlo 40', 'PW0049', 'K3D40040-13', 'https://catalog.korloy.com/search.do');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `tools`
--
ALTER TABLE `tools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
