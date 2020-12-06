-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 06, 2020 at 02:24 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pepiniere`
--
CREATE DATABASE IF NOT EXISTS `pepiniere` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `pepiniere`;

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `idProduitPanier` int NOT NULL AUTO_INCREMENT,
  `quantiteProduit` int NOT NULL,
  `idProduit` int NOT NULL,
  PRIMARY KEY (`idProduitPanier`),
  KEY `fk_foreign_id_produit` (`idProduit`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `idProduit` int NOT NULL AUTO_INCREMENT,
  `nomProduit` varchar(50) NOT NULL,
  `prixProduit` double(6,2) NOT NULL,
  `descriptionProduit` varchar(255) NOT NULL,
  `imageProduit` varchar(255) NOT NULL,
  `quantiteProduit` int NOT NULL,
  PRIMARY KEY (`idProduit`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`idProduit`, `nomProduit`, `prixProduit`, `descriptionProduit`, `imageProduit`, `quantiteProduit`) VALUES
(1, 'Pin rouge', 45.00, 'Le pin rouge, pin résineux ou pin de Norvège, est un arbre appartenant au genre Pinus et à la famille des Pinacées.', 'public\\images\\pin.jpg', 50),
(2, 'Mélèze', 35.00, 'Mélèze est un nom vernaculaire ambigu en français. On appelle « mélèze » divers arbres des régions tempérées de l\'hémisphère nord.', 'public\\images\\meleze.jpg', 30);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
