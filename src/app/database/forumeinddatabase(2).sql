-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 03 jul 2017 om 10:36
-- Serverversie: 10.1.16-MariaDB
-- PHP-versie: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forumeinddatabase`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `topic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `replies`
--

INSERT INTO `replies` (`id`, `content`, `created_at`, `updated_at`, `username`, `topic_id`) VALUES
(43, 'dit is een probeersel\r\n', '2017-07-02 21:27:19', NULL, 'hoi', 1),
(44, 'hoi', '2017-07-03 07:41:59', NULL, 'hoi', 1),
(45, 'html', '2017-07-03 08:17:16', NULL, 'hoi', 1),
(46, 'hoi', '2017-07-03 08:17:41', NULL, 'mike', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `themes`
--

CREATE TABLE `themes` (
  `id` int(11) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `themes`
--

INSERT INTO `themes` (`id`, `subject`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'HTML5', 'Thema HTML5', 0, '2017-06-26 08:32:26', NULL),
(2, 'php', 'Thema php', 0, '2017-06-26 08:32:26', NULL),
(3, 'Javascript', 'Dit thema gaat over javascript', 1, '2017-07-02 21:06:31', NULL),
(4, 'CSS', 'Dit thema gaat over CSS', 1, '2017-07-02 21:15:42', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `topics`
--

CREATE TABLE `topics` (
  `id` int(11) UNSIGNED NOT NULL,
  `subject` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `theme_id` int(11) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `topics`
--

INSERT INTO `topics` (`id`, `subject`, `description`, `created_at`, `updated_at`, `theme_id`, `username`) VALUES
(1, 'HTML5', 'Dit gaat over HTML', '2017-06-26 08:26:46', NULL, 1, '0'),
(2, 'PHP', 'dit thema gaat over php', '2017-07-02 20:27:14', NULL, 1, 'mike'),
(3, 'Javascript', 'dit thema gaat over javascript', '2017-07-02 21:04:16', NULL, 1, 'mike'),
(4, 'CSS', 'Dit thema gaat over css', '2017-07-02 21:14:46', NULL, 3, 'mike');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`, `updated_at`, `role`) VALUES
(34, 'hoi', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e', '', '2017-06-26 18:53:52', NULL, 0),
(35, 'hoi', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e', '', '2017-06-26 18:54:03', NULL, 0),
(36, 'qerqerkgqer', '8ee92fc32065cfc5b3bb0876a10373f2598ed8b4aa34adaa6bdac95fe5702067146dc24cf8314f78bcdceab59caa48c645622db0e6574ad84fee41b42f1f5772', 'fgbdmkwebf', '2017-06-26 18:54:18', NULL, 0),
(37, 'mike', 'a91d24d7eab7683bc73b857d42dfc48a9577c600ccb5e7d7adabab54eebc112232f3de2539208f22a560ad320d1f2cda5a5f1a127baf6bf871b0e282c2b85220', 'mike@gmail.com', '2017-06-26 19:01:27', NULL, 0),
(38, 'test', 'ee26b0dd4af7e749aa1a8ee3c10ae9923f618980772e473f8819a5d4940e0db27ac185f8a0e1d5f84f88bc887fd67b143732c304cc5fa9ad8e6f57f50028a8ff', 'test', '2017-06-28 08:50:42', NULL, 0),
(39, 'hoi', 'fdf5b3aad98b45b0eb24012ffd5118f9f7386c7602124ff0f7e98affb6740962ada12bdac634685897a8d65c5a8e14d76b4a959db8a825c15de62045dc167150', 'hoi', '2017-06-28 08:56:28', NULL, 0),
(40, 'hammaad', 'fdf5b3aad98b45b0eb24012ffd5118f9f7386c7602124ff0f7e98affb6740962ada12bdac634685897a8d65c5a8e14d76b4a959db8a825c15de62045dc167150', 'hammaad@gmail.com', '2017-06-30 11:54:34', NULL, 0),
(41, 'test', 'ee26b0dd4af7e749aa1a8ee3c10ae9923f618980772e473f8819a5d4940e0db27ac185f8a0e1d5f84f88bc887fd67b143732c304cc5fa9ad8e6f57f50028a8ff', 'test', '2017-06-30 19:12:19', NULL, 0),
(42, 'hoi', 'fdf5b3aad98b45b0eb24012ffd5118f9f7386c7602124ff0f7e98affb6740962ada12bdac634685897a8d65c5a8e14d76b4a959db8a825c15de62045dc167150', 'hoi', '2017-07-01 19:59:22', NULL, 1),
(43, 'mike', 'ff5d3dc9cd6dc79ad09c9e328e4630a04df8272c42cbff382369fc60ae17190c026f9d2c18dc3d51a2e3bb32d4a8760c7562444a8d535b9ec776dc347113d6c1', 'mike@gmail.com', '2017-07-02 21:31:45', NULL, 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT voor een tabel `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
