-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Jún 18. 06:08
-- Kiszolgáló verziója: 10.4.18-MariaDB
-- PHP verzió: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `fodinhome`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `aloldalak`
--

CREATE TABLE `aloldalak` (
`al_oldalak_id` int(255) NOT NULL,
  `al_oldalak_1` longtext COLLATE utf8mb4_bin NOT NULL,
  `al_oldalak_2` longtext COLLATE utf8mb4_bin NOT NULL,
  `al_oldalak_en_1` longtext COLLATE utf8mb4_bin NOT NULL,
  `al_oldalak_en_2` longtext COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `navmenu`
--

CREATE TABLE `navmenu` (
`nav_id` int(255) NOT NULL,
  `elnevezes` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `elnevezes_en` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- A tábla adatainak kiíratása `navmenu`
--

INSERT INTO `navmenu` (`nav_id`, `elnevezes`, `elnevezes_en`) VALUES
(1, 'Home', 'Home'),
(2, 'Például', 'Example');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `oldalak`
--

CREATE TABLE `oldalak` (
`oldalak_id` int(255) NOT NULL,
  `oldalak_szoveg_1` longtext COLLATE utf8mb4_bin NOT NULL,
  `oldalak_szoveg_2` longtext COLLATE utf8mb4_bin NOT NULL,
  `oldalak_szoveg_3` longtext COLLATE utf8mb4_bin NOT NULL,
  `oldalak_szoveg_4` longtext COLLATE utf8mb4_bin NOT NULL,
  `oldalak_szoveg_5` longtext COLLATE utf8mb4_bin NOT NULL,
  `oldalak_szoveg_en_1` longtext COLLATE utf8mb4_bin NOT NULL,
  `oldalak_szoveg_en_2` longtext COLLATE utf8mb4_bin NOT NULL,
  `oldalak_szoveg_en_3` longtext COLLATE utf8mb4_bin NOT NULL,
  `oldalak_szoveg_en_4` longtext COLLATE utf8mb4_bin NOT NULL,
  `oldalak_szoveg_en_5` longtext COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
`user_id` int(11) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `joining_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `joining_date`) VALUES
(2, 'Tomi', 'dobiasz.tamas@gmail.com', '$2y$10$EBbXUzB1IWcbcWWTiHRwVeN4tRXoyzXnSAagk1nIU9IubdwCh6t3S', '2019-10-23 12:20:17'),
(8, 'Totya', 'fekete.totya@gmail.com', '$2y$10$rNobAtJ39ygh7HrD7jd86OJx7IdeQderRY0Wbv32X0bb1brjUeen2', '2020-02-15 19:20:57'),
(9, 'Nagy Valaki', 'valaki@gmail.com', '$2y$10$KIJrjTZWG3AWypBY9OWApOnn7xrhDWixEiDLCVRMXPZrZUTVPZasu', '2021-05-17 19:13:02'),
(10, 'Nyero Jeno', 'juci.duci@freemail.hu', '$2y$10$CITg0SVBh44nBV0djcmljupTENHdl3OP7GVUrNLPiilSqlvND9v4y', '2021-05-17 19:13:49');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `aloldalak`
--
ALTER TABLE `aloldalak`
  ADD PRIMARY KEY (`al_oldalak_id`);

--
-- A tábla indexei `navmenu`
--
ALTER TABLE `navmenu`
  ADD PRIMARY KEY (`nav_id`);

--
-- A tábla indexei `oldalak`
--
ALTER TABLE `oldalak`
  ADD PRIMARY KEY (`oldalak_id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `aloldalak`
--
ALTER TABLE `aloldalak`
  MODIFY `al_oldalak_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `navmenu`
--
ALTER TABLE `navmenu`
  MODIFY `nav_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT a táblához `oldalak`
--
ALTER TABLE `oldalak`
  MODIFY `oldalak_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

