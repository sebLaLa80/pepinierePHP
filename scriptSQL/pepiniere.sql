SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE pepiniere
USE pepiniere

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

DROP TABLE IF EXISTS panier;

CREATE TABLE IF NOT EXISTS panier (
  idProduitPanier int NOT NULL AUTO_INCREMENT,
  quantiteProduit int NOT NULL,
  idProduit int NOT NULL,
  PRIMARY KEY (idProduitPanier),
  KEY fk_foreign_id_produit (idProduit)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS produits;
CREATE TABLE IF NOT EXISTS produits (
  idProduit int NOT NULL AUTO_INCREMENT,
  nomProduit varchar(50) NOT NULL,
  prixProduit double(6,2) NOT NULL,
  descriptionProduit varchar(255) NOT NULL,
  imageProduit varchar(255) NOT NULL,
  quantiteProduit int NOT NULL,
  PRIMARY KEY (idProduit)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO produits (idProduit, nomProduit, prixProduit, descriptionProduit, imageProduit, quantiteProduit) VALUES
(1, 'Pin rouge', 45.00, 'Le pin rouge, pin résineux ou pin de Norvège, est un arbre appartenant au genre Pinus et à la famille des Pinacées.', 'public\\images\\pin.jpg', 47),
(2, 'Mélèze', 35.00, 'Mélèze est un nom vernaculaire ambigu en français. On appelle « mélèze » divers arbres des régions tempérées de l\'hémisphère nord.', 'public\\images\\meleze.jpg', 32),
(3, 'Sac de chaux', 10.00, 'La chaux hydraulique blanche naturelle pure NHL 3,5 permet la réalisation de mortiers traditionnels, particulièrement appréciés pour la restauration et la réhabilitation de bâtiments anciens. Elle peut aussi être employée pour les travaux neufs, pure ou b', 'public\\images\\chaux.jpg', 10),
(4, 'Pelle', 25.00, 'Pelle profonde pour ramasser aisément les produits absorbants, les grains et les graines en vrac.', '	\r\npublic\\images\\pelle.jpg', 20),
(5, 'Sac', 5.00, 'Sac pour résidus de jardin.', 'public\\images\\sac.jpg', 199);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
