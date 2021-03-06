-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 29 août 2017 à 13:36
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `site_cv`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_competences`
--

CREATE TABLE `t_competences` (
  `id_competence` int(11) NOT NULL,
  `competence` varchar(45) NOT NULL,
  `niveau` int(3) NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_competences`
--

INSERT INTO `t_competences` (`id_competence`, `competence`, `niveau`, `utilisateur_id`) VALUES
(3, 'HTML5', 85, 1),
(5, 'CSS3', 75, 1),
(7, 'PHP7', 60, 1),
(8, 'MySql', 55, 1),
(9, 'WordPress', 45, 1),
(10, 'Angular', 14, 1);


-- --------------------------------------------------------

--
-- Structure de la table `t_experiences`
--

CREATE TABLE `t_experiences` (
  `id_experience` int(11) NOT NULL,
  `experience` varchar(45) NOT NULL,
  `sous_titre_e` varchar(45) DEFAULT NULL,
  `dates_e` varchar(45) NOT NULL,
  `description_e` text NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_experiences`
--

INSERT INTO `t_experiences` (`id_experience`, `experience`, `sous_titre_e`, `dates_e`, `description_e`, `utilisateur_id`) VALUES
(165, 'stage', 'stage', '2017-07-22', '<p>pppppp</p>\r\n', 1),
(166, 'stage', 'grey consulting', '2017-07-06', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_formations`
--

CREATE TABLE `t_formations` (
  `id_formation` int(11) NOT NULL,
  `formation` varchar(45) NOT NULL,
  `sous_titre_f` varchar(45) DEFAULT NULL,
  `dates_f` varchar(45) NOT NULL,
  `description_f` text NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_formations`
--

INSERT INTO `t_formations` (`id_formation`, `formation`, `sous_titre_f`, `dates_f`, `description_f`, `utilisateur_id`) VALUES
(3, 'ùkl^ùkolùm55', 'ùlmk*ùkl', '2017-07-14', '<p>&ugrave;kl&ugrave;klmk&ugrave;</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_intertitres`
--

CREATE TABLE `t_intertitres` (
  `id_intertitre` int(11) NOT NULL,
  `intertitre_1` varchar(45) NOT NULL,
  `intertitre_2` varchar(45) NOT NULL,
  `intertitre_3` varchar(45) NOT NULL,
  `intertitre_4` varchar(45) DEFAULT NULL,
  `intertitre_5` varchar(45) DEFAULT NULL,
  `intertitre_6` varchar(45) DEFAULT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_loisirs`
--

CREATE TABLE `t_loisirs` (
  `id_loisir` int(11) NOT NULL,
  `loisir` varchar(45) NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_loisirs`
--

INSERT INTO `t_loisirs` (`id_loisir`, `loisir`, `utilisateur_id`) VALUES
(1, 'jeux videos11', 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_realisations`
--

CREATE TABLE `t_realisations` (
  `id_realisation` int(11) NOT NULL,
  `realisation` varchar(45) NOT NULL,
  `photo` varchar(45) DEFAULT NULL,
  `dates_r` varchar(45) NOT NULL,
  `description_r` text NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_realisations`
--

INSERT INTO `t_realisations` (`id_realisation`, `realisation`, `photo`, `dates_r`, `description_r`, `utilisateur_id`) VALUES
(102, 'fghjkl99', '1486502770_In_Love.png', '2017-07-08', '<p>uj,n</p>\r\n', 1),
(103, 'fghjkl', '1486502770_In_Love.png', '2017-07-08', '<p>uj,n</p>\r\n', 1),
(104, 'fghjkl', '1486502770_In_Love.png', '2017-07-08', '<p>uj,n</p>\r\n', 1),
(105, 'fghjkl', '1486502770_In_Love.png', '2017-07-08', '<p>uj,n</p>\r\n', 1),
(106, 'test', '1488217264_Black_Home.png', '2017-07-06', '<p>test</p>\r\n', 1),
(107, 'spider-man21', '27_spidermanf.gif', '2017-07-12', '<p>Peter Parker</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_titres_cv`
--

CREATE TABLE `t_titres_cv` (
  `id_titre_cv` int(11) NOT NULL,
  `titre_cv` text NOT NULL,
  `accroche` text NOT NULL,
  `logo` varchar(25) NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_titres_cv`
--

INSERT INTO `t_titres_cv` (`id_titre_cv`, `titre_cv`, `accroche`, `logo`, `utilisateur_id`) VALUES
(1, 'Développeur Intégrateur Web Junior', 'Recherche de stage ', 'Le PoleS', 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_utilisateurs`
--

CREATE TABLE `t_utilisateurs` (
  `id_utilisateur` int(15) NOT NULL COMMENT 'identifiant utilisateur',
  `prenom` varchar(25) NOT NULL COMMENT 'prenom user ',
  `nom` varchar(25) NOT NULL COMMENT 'nom user',
  `email` varchar(25) NOT NULL COMMENT 'email user',
  `telephone` varchar(20) NOT NULL COMMENT 'telephone user',
  `mdp` varchar(15) NOT NULL COMMENT 'mot de passe',
  `pseudo` varchar(15) NOT NULL COMMENT 'pseudo user',
  `avatar` varchar(15) NOT NULL COMMENT 'image ou icone avatar',
  `age` int(5) NOT NULL COMMENT 'age user',
  `date_naissance` date NOT NULL COMMENT 'date de naissance ',
  `sexe` enum('Femme','Homme') NOT NULL COMMENT 'sexe user',
  `etat_civil` enum('M.','Mme') NOT NULL COMMENT 'etat civil user',
  `statut_marital` enum('Marié','Divorcé','Célébataire') NOT NULL,
  `adresse` text NOT NULL,
  `code_postal` int(5) NOT NULL,
  `ville` varchar(25) NOT NULL,
  `pays` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_utilisateurs`
--

INSERT INTO `t_utilisateurs` (`id_utilisateur`, `prenom`, `nom`, `email`, `telephone`, `mdp`, `pseudo`, `avatar`, `age`, `date_naissance`, `sexe`, `etat_civil`, `statut_marital`, `adresse`, `code_postal`, `ville`, `pays`) VALUES
(1, 'Omar', 'HAMZI', 'omarhamzi40@gmail.com', '06.38.01.24.98', '123456', 'Maroox', '', 37, '1980-03-09', 'Homme', 'M.', 'Célébataire', '43 avenue du Président Wilson', 93210, 'La Plaine Saint-denis', 'France');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `t_competences`
--
ALTER TABLE `t_competences`
  ADD PRIMARY KEY (`id_competence`);

--
-- Index pour la table `t_experiences`
--
ALTER TABLE `t_experiences`
  ADD PRIMARY KEY (`id_experience`);

--
-- Index pour la table `t_formations`
--
ALTER TABLE `t_formations`
  ADD PRIMARY KEY (`id_formation`);

--
-- Index pour la table `t_intertitres`
--
ALTER TABLE `t_intertitres`
  ADD PRIMARY KEY (`id_intertitre`);

--
-- Index pour la table `t_loisirs`
--
ALTER TABLE `t_loisirs`
  ADD PRIMARY KEY (`id_loisir`);

--
-- Index pour la table `t_realisations`
--
ALTER TABLE `t_realisations`
  ADD PRIMARY KEY (`id_realisation`);

--
-- Index pour la table `t_titres_cv`
--
ALTER TABLE `t_titres_cv`
  ADD PRIMARY KEY (`id_titre_cv`);

--
-- Index pour la table `t_utilisateurs`
--
ALTER TABLE `t_utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `t_competences`
--
ALTER TABLE `t_competences`
  MODIFY `id_competence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `t_experiences`
--
ALTER TABLE `t_experiences`
  MODIFY `id_experience` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;
--
-- AUTO_INCREMENT pour la table `t_formations`
--
ALTER TABLE `t_formations`
  MODIFY `id_formation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `t_intertitres`
--
ALTER TABLE `t_intertitres`
  MODIFY `id_intertitre` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `t_loisirs`
--
ALTER TABLE `t_loisirs`
  MODIFY `id_loisir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `t_realisations`
--
ALTER TABLE `t_realisations`
  MODIFY `id_realisation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT pour la table `t_titres_cv`
--
ALTER TABLE `t_titres_cv`
  MODIFY `id_titre_cv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `t_utilisateurs`
--
ALTER TABLE `t_utilisateurs`
  MODIFY `id_utilisateur` int(15) NOT NULL AUTO_INCREMENT COMMENT 'identifiant utilisateur', AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
