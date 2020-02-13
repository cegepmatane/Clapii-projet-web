SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `casting` (
  `id` int(11) NOT NULL,
  `Nom` int(11) NOT NULL,
  `Prenom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `casting_film` (
  `id_film` int(11) NOT NULL,
  `id_casting` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom_categorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `categorie_film` (
  `id_film` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `date_sortie` date NOT NULL,
  `synopsis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `film` (`id`, `titre`, `date_sortie`, `synopsis`) VALUES
(1, 'Film test', '2020-01-27', 'Ce film est un test pour établir la connexion entre l\'affichage client (page web) et le serveur.'),
(2, 'Sonic the Test', '2020-02-14', 'SANIC'),
(3, 'Fast and Furious 69', '2069-04-20', 'Maintenant avec 100% moins de rapide, et 600% plus de dangereux, bienvenue dans l&#39;espace. YADESVOITUREMAGIQUE'),
(4, 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', '2020-01-22', 'BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB'),
(5, 'Nom modifié', '2020-01-01', 'Synopsis changé'),
(6, 'Matrix', '2333-02-02', 'Synopsis du film test'),
(11, 'Filtre film', '2000-01-01', 'Test des PHP filters'),
(12, 'Forest gump', '2020-01-01', 'Maman disait toujours la vie c&#39;est comme une boite de chocolat on ne sait jamais sur quoi on va tomber.');

ALTER TABLE `casting`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `casting_film`
  ADD KEY `id_film` (`id_film`),
  ADD KEY `id_casting` (`id_casting`);

ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `categorie_film`
    ADD KEY `id_film` (`id_film`),
    ADD KEY `id_categorie` (`id_categorie`);

ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `casting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

ALTER TABLE `casting_film`
    ADD CONSTRAINT `Casting_Film_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT `Casting_Film_ibfk_2` FOREIGN KEY (`id_casting`) REFERENCES `casting` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

ALTER TABLE `categorie_film`
    ADD CONSTRAINT `Casting_Film_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT `Casting_Film_ibfk_2` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
