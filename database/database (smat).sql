-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Mar 2017 pada 06.26
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Trigger `categories`
--
DELIMITER $$
CREATE TRIGGER `WHEN_CREATE_CATEGORIES` AFTER INSERT ON `categories` FOR EACH ROW BEGIN
	INSERT INTO logs (description) VALUES ('Create new category successfully');
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `WHEN_DELETE_CATEGORIES` BEFORE DELETE ON `categories` FOR EACH ROW BEGIN
	INSERT INTO logs (categories) VALUES ('Delete category successfully');
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `WHEN_UPDATE_CATEGORIES` AFTER UPDATE ON `categories` FOR EACH ROW BEGIN
	INSERT INTO logs (description) VALUES ('Update category successfully');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `issue`
--

CREATE TABLE `issue` (
  `id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `vendor` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` double(16,0) NOT NULL,
  `total` double(16,0) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Trigger `issue`
--
DELIMITER $$
CREATE TRIGGER `WHEN_CREATE_ISSUE` AFTER INSERT ON `issue` FOR EACH ROW BEGIN
	UPDATE material_stock SET
    	material_stock.stock=material_stock.stock-NEW.stock
        WHERE material_stock.id=NEW.material_id;
        
  	INSERT INTO logs (description) VALUES ('Create new issue successfully');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `material`
--

CREATE TABLE `material` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Trigger `material`
--
DELIMITER $$
CREATE TRIGGER `WHEN_CREATE_MATERIAL` AFTER INSERT ON `material` FOR EACH ROW BEGIN
	INSERT INTO material_stock (id, stock) VALUES (NEW.id, '0');
    INSERT INTO logs (description) VALUES ('Create new material successfully');
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `WHEN_DELETE_MATERIAL` AFTER DELETE ON `material` FOR EACH ROW BEGIN
	DELETE FROM material_stock WHERE material_stock.id=OLD.id;
	INSERT INTO logs (description) VALUES ('Delete material successfully');
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `WHEN_UPDATE_MATERIAL` AFTER UPDATE ON `material` FOR EACH ROW BEGIN
	INSERT INTO logs (description) VALUES ('Update material successfully');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `material_stock`
--

CREATE TABLE `material_stock` (
  `id` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `receive`
--

CREATE TABLE `receive` (
  `id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `vendor` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` double(16,0) NOT NULL,
  `total` double(16,0) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Trigger `receive`
--
DELIMITER $$
CREATE TRIGGER `WHEN_CREATE_RECEIVE` AFTER INSERT ON `receive` FOR EACH ROW BEGIN
	UPDATE material_stock SET
    	material_stock.stock=material_stock.stock+NEW.stock
        WHERE material_stock.id=NEW.material_id;
	INSERT INTO logs (description) VALUES ('Create new receive is successfully');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit_name`
--

CREATE TABLE `unit_name` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Trigger `unit_name`
--
DELIMITER $$
CREATE TRIGGER `WHEN_CREATE_UNIT_NAME` AFTER INSERT ON `unit_name` FOR EACH ROW BEGIN
	INSERT INTO logs (descryption) VALUES ('Create new unit name successfully');
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `WHEN_DELETE_UNIT_NAME` BEFORE DELETE ON `unit_name` FOR EACH ROW BEGIN
	INSERT INTO logs (description) VALUES ('Delete unit name successfully');
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `WHEN_UPDATE_UNIT_NAME` AFTER UPDATE ON `unit_name` FOR EACH ROW BEGIN
	INSERT INTO logs (description) VALUES ('Update unit name successfully');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'administrator@admin.com', '2017-03-21 03:43:09', '2017-03-21 03:43:09');

--
-- Trigger `users`
--
DELIMITER $$
CREATE TRIGGER `WHEN_CREATE_USERS` AFTER INSERT ON `users` FOR EACH ROW BEGIN
	INSERT INTO logs (description) VALUES ('Create new user successfully ');
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `WHEN_DELETE_USERS` AFTER DELETE ON `users` FOR EACH ROW BEGIN
	INSERT INTO logs (description) VALUES ('Delete users successfully');
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `WHEN_UPDATE_USERS` AFTER UPDATE ON `users` FOR EACH ROW BEGIN
	INSERT INTO logs (description) VALUES ('Update users successfully');
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material_stock`
--
ALTER TABLE `material_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receive`
--
ALTER TABLE `receive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_name`
--
ALTER TABLE `unit_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `material_stock`
--
ALTER TABLE `material_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `receive`
--
ALTER TABLE `receive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `unit_name`
--
ALTER TABLE `unit_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
