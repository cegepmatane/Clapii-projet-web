CREATE TABLE `achat` (
  `id` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `achat`
    ADD PRIMARY KEY (`id`);

ALTER TABLE `achat`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `achat`
    ADD CONSTRAINT `achat_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;