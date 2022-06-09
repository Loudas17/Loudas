-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220608.c947f28e00
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 09 juin 2022 à 01:42
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `errazi`
--

-- --------------------------------------------------------

--
-- Structure de la table `malade`
--

CREATE TABLE `malade` (
  `NDossier` varchar(255) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `Date_de_naissance` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `wilaya` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `num_tel` int(10) NOT NULL,
  `type_inj` varchar(30) NOT NULL,
  `dose` int(11) NOT NULL,
  `date_prise` date NOT NULL,
  `date_prochaine` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `malade`
--

INSERT INTO `malade` (`NDossier`, `nom`, `prenom`, `Date_de_naissance`, `age`, `sexe`, `wilaya`, `adress`, `num_tel`, `type_inj`, `dose`, `date_prise`, `date_prochaine`) VALUES
('20', 'labidi', 'Saleh', '20/03/1974', '48', 'Homme', 'El Tarf', 'cité 1000 LGTS AADL', 773629867, 'Modécate', 50, '2022-05-28', '2022-06-27'),
('17', 'madjbour', 'rania', '20/12/1990', '32', 'Femme', 'Annaba', 'EL Bouni', 555768432, 'Xeplion', 100, '2022-05-05', '2022-06-04'),
('22', 'Bencheiheb', 'Oualid', '10/02/1982', '40', 'Homme', 'Tébessa', 'cité eldjorf', 664337234, 'Xeplion', 125, '2022-05-14', '2022-06-13'),
('13', 'chabbi', 'nabila', '05/12/1989', '32', 'Femme', 'Annaba', 'rue ibn khalboun', 515223373, 'Xeplion', 25, '2022-05-01', '2022-05-31'),
('44', 'mebarki', 'sana', '15/11/1988', '34', 'Femme', 'Annaba', 'cité les caroubiers', 634567299, 'Haldol Décanoas', 50, '2022-06-01', '2022-06-30'),
('35', 'chouchen', 'asma', '04/O5/1965', '57', 'Femme', 'Annaba', 'cité des orangers', 559442310, 'Haldol Décanoas', 125, '2022-06-04', '2022-07-03'),
('40', 'deradji', 'mohamed', '20/04/1960', '62', 'Homme', 'Guelma', 'cité 60 coopérative', 544987459, 'Xeplion', 150, '2022-05-28', '2022-06-27'),
('66', 'Saouli', 'chahrazed', '21/09/1964', '57', 'Femme', 'El Tarf', 'ain alem', 661227011, 'Xeplion', 25, '2022-05-15', '2022-06-14'),
('04', 'haouasse', 'ouarda', '25/04/1963', '59', 'Femme', 'Annaba', 'cité 800 logement chaiba', 552971841, 'Xeplion', 100, '2022-05-09', '2022-06-08'),
('33', 'talhi', 'nacer', '30/10/1980', '42', 'Homme', 'Tébessa', 'cité Copemad', 762338991, 'Modécate', 150, '2022-05-04', '2022-06-03'),
('19', 'khalfa', 'khadidja', '28/02/1945', '77', 'Femme', 'Tébessa', 'cité larbi tebessi', 566443005, 'Xeplion', 150, '2022-06-01', '2022-07-01'),
('30', 'lekhrissi', 'anissa', '05/01/1986', '36', 'Femme', 'Souk Ahras', 'cité chaabani', 770120011, 'Haldol Décanoas', 75, '2022-05-21', '2022-06-20'),
('27', 'suissi', 'lamine', '06/02/1988', '34', 'Homme', 'Souk Ahras', 'cité soualhia abdelwahab', 622844807, 'Xeplion', 50, '2022-05-25', '2022-06-24'),
('39', 'bnine', 'salima', '10/03/1960', '62', 'Femme', 'El Oued', 'cité 400 logement', 553683915, 'Modécate', 100, '2022-05-27', '2022-06-26'),
('01', 'meftah', 'nadir', '14/02/1968', '54', 'Homme', 'El Tarf', 'Ain elassel', 777991845, 'Modécate', 75, '2022-05-29', '2022-06-28');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



