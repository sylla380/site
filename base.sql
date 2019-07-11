-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 10 juil. 2019 à 10:58
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sitecv`
--

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

CREATE TABLE `competence` (
  `id_competence` int(3) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `niveau` int(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `competence`
--

INSERT INTO `competence` (`id_competence`, `nom`, `niveau`, `image`) VALUES
(2, 'CSS', 95, 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/CSS3_logo_and_wordmark.svg/1200px-CSS3_logo_and_wordmark.svg.png'),
(3, 'javascript', 80, 'https://www.spiria.com/sites/default/files/pictures/javascript_shield.png'),
(4, 'PHP', 80, 'https://wrpsolution.com/wp-content/uploads/2015/04/php-logo.png'),
(5, 'html', 95, 'https://banner2.kisspng.com/20180320/dde/kisspng-web-development-html-css3-canvas-element-web-desig-w3c-html5-logo-5ab0c840061922.801355261521535040025.jpg'),
(6, 'Bootstrap', 80, 'https://banner2.kisspng.com/20180615/zgt/kisspng-bootstrap-logo-css3-butta-5b2353942780f2.0412430015290418121618.jpg'),
(7, 'angular', 40, 'https://d2eip9sf3oo6c2.cloudfront.net/tags/images/000/000/300/full/angular2.png');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `reseau` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `email`, `tel`, `reseau`) VALUES
(1, 'webforce3@web.fr', '0101010101', 'webforce3@web.fr');

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE `experience` (
  `id_experience` int(3) NOT NULL,
  `experience` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `lieu` varchar(100) NOT NULL,
  `date_experience` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `experience`
--

INSERT INTO `experience` (`id_experience`, `experience`, `description`, `lieu`, `date_experience`) VALUES
(5, 'chauffeur VTC ', 'transport d\'usager', 'Paris ', '2016-02-03'),
(6, 'agent de fabrication', 'agent de fabrication au sein de l\'entreprise PSA', 'poissy', '2014-02-01'),
(7, 'agent electronique', 'agent electronique au sein de l\'entreprise &quot;Traffic&quot;', 'saint-denis', '2011-01-02'),
(8, 'stage Electrotechnique', 'stage en electrotechnique suite hotel ', 'saint-denis', '2011-01-20'),
(9, 'stage Electrotechnique', 'stage en electrotechnique au sein de l\'entreprise Alain Selema Electricite', 'Paris ', '2008-02-01');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id_formation` int(3) NOT NULL,
  `formation` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `lieu` varchar(100) NOT NULL,
  `date_formation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id_formation`, `formation`, `description`, `lieu`, `date_formation`) VALUES
(995, 'integrateur developpeur web', 'formation integrateur web 10 mois', 'pierrefitte', '2019-02-01'),
(996, 'integrateur', 'formation integrateur web 5 mois', 'pierrefitte sur seine', '2017-01-21'),
(997, 'Bac Pro Electrotechnique', 'bac pro electrotechnique d\'une 09periode de 2 ans', 'saint-denis', '2009-09-03');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id_membre` int(5) NOT NULL,
  `pseudo` varchar(15) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `sexe` varchar(30) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `cp` int(5) UNSIGNED ZEROFILL NOT NULL,
  `adresse` text NOT NULL,
  `statut` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `pseudo`, `mdp`, `nom`, `prenom`, `email`, `sexe`, `ville`, `cp`, `adresse`, `statut`) VALUES
(8, 'momo', '$2y$10$W1nKOAeIhLHJq3BhPKE.8OH98BPRZDaJynRvJAQgAGaF0sDWtHy3O', 'momo', 'momo', 'momo@momo.com', 'm', 'momo', 12345, 'momo', 1),
(9, 'popo', '$2y$10$DeEy04l7ZiVD/bk9CiJd6.Fu7Yq/lhRqp.KZtNDqj6t5vu/2G67E6', 'popo', 'popo', 'popo', 'f', 'popo', 12345, 'Rue de l\'ivrogne', 0),
(10, 'mom', '$2y$10$bvnN9KemeGNUsI7/qB1Uxu7cetlo499bUxGhiqFgv1MJvwB7xeSZu', 'polo', 'polo', '0', 'f', 'polo', 45612, 'polo', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `competence`
--
ALTER TABLE `competence`
  ADD PRIMARY KEY (`id_competence`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Index pour la table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id_experience`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id_formation`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_membre`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `competence`
--
ALTER TABLE `competence`
  MODIFY `id_competence` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `experience`
--
ALTER TABLE `experience`
  MODIFY `id_experience` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id_formation` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=998;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
