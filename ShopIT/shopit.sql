-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 29 Lip 2022, 10:04
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
-- Baza danych: `shopit`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `opinions`
--

CREATE TABLE `opinions` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `opinion` varchar(255) NOT NULL,
  `stars` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `opinions`
--

INSERT INTO `opinions` (`id`, `name`, `opinion`, `stars`) VALUES
(2, 'ojciec', 'kozak Kajetan', 6),
(2, 'Kajetan', 'Very good Apple watch.', 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `price_ship` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `short_op` varchar(100) NOT NULL,
  `long_op` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `products`
--

INSERT INTO `products` (`id`, `title`, `image`, `price`, `price_ship`, `amount`, `short_op`, `long_op`) VALUES
(1, 'Macbook Pro 16', 'macbookpro16', 14299, 14349, 5, 'Insane laptop just take your mum credid card and pay for that. She does not need to know KID.', 'The Apple 16\" MacBook Pro features a 16\" Retina Display, a Magic Keyboard with a redesigned scissor mechanism, a six-speaker high-fidelity sound system, and an advanced thermal design. This MacBook Pro also features an AMD Radeon Pro 5600M graphics card, a 7nm mobile discrete GPU designed for pro users. With 8GB of HBM2 VRAM, pro users will be able to tackle GPU-intensive tasks with this MacBook Pro.'),
(2, 'Iphone 13 Pro', 'iphone13pro', 5199, 5249, 12, 'Ooo you are a girl in highschool? Without Iphone you are nobody!', 'The iPhone 13 Pro is smaller premium iPhone with a 6.1\" screen size and for the first time in an iPhone, it comes with a 120Hz ProMotion display for super smooth scrolling. The list of innovations includes a more capable triple camera setup, with a wide, ultra-wide and zoom cameras, as well as a LiDAR scanner.'),
(3, 'Apple Watch 7', 'applewatch', 3549, 3599, 32, 'Just a normal watch but with  Apple logo. Pay more!', 'Breaking news: Series 7 is the most durable Apple Watch ever built. Fundamental design changes were needed to achieve the vision of the larger Always-On Retina display. These same innovations also helped make the most crack‑resistant front crystal yet. Crack ResistantOur strongest front crystal ever.'),
(4, 'AirPods Pro', 'airpodspro', 1249, 1299, 53, 'Wireless headphones. Nothing more nothing less!', 'The AirPods Pro are the more premium version of Apple is standard AirPods. They feature two audio modes for filtering outside sounds, changeable ear tips, and the H1 processor. Gyroscopes in the earpieces enable users to move their head around within an audio space using a feature called Spatial Audio.');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
