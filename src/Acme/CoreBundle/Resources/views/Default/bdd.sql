-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Ven 03 Avril 2015 à 00:23
-- Version du serveur :  5.5.38
-- Version de PHP :  5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `ProjecTeam`
--

-- --------------------------------------------------------

--
-- Structure de la table `contactentreprise`
--

CREATE TABLE `contactentreprise` (
`id` int(11) NOT NULL,
  `remarque` longtext COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updatedAt` datetime NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Contenu de la table `contactentreprise`
--

INSERT INTO `contactentreprise` (`id`, `remarque`, `nom`, `image_name`, `updatedAt`, `email`) VALUES
(9, 'test', 'Junior Isep', '7.jpg', '2015-04-02 21:12:55', ''),
(10, 'test 2', 'ISEP', 'image004.jpg', '2015-04-02 21:13:06', '');

-- --------------------------------------------------------

--
-- Structure de la table `feedback`
--

CREATE TABLE `feedback` (
`id` int(11) NOT NULL,
  `remarque` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `feedback`
--

INSERT INTO `feedback` (`id`, `remarque`, `email`) VALUES
(1, 'Test 1', 'alexandre');

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

CREATE TABLE `fos_user` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'user', 'user', 'user@example.com', 'user@example.com', 1, '1tkrkd1bi76s4g0w8w4s04c0ks4kgog', 'FcNChCSS32XJydBsDwF3bVvpaQnydKkjzdX/bnyYBjt4azMXpWi1apMgvhL575YXaZGtZquION/eTgU6hvoDOA==', '2015-04-02 23:26:27', 0, 0, NULL, 'S9nqfLmsFRIoVXbrmjwCem9lkIsxND3fNGzki11Gtbc', '2015-03-29 17:59:15', 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL),
(2, 'alex', 'alex', 'alex@exemple.com', 'alex@exemple.com', 1, 'bn6o836roz4sowwc8wwoogkoosos8ow', 'WWgekByb9KP3LyZfugUc7s27M75fgihDTnf9XJJQopLGXapo5PVB3HPmeceCVpL/Lzfd3FxjiRoPBfx9YGgeEw==', '2015-03-29 18:44:33', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
`id` int(11) NOT NULL,
  `remarque` longtext COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `modif`
--

CREATE TABLE `modif` (
`id` int(11) NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `endroit` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Contenu de la table `modif`
--

INSERT INTO `modif` (`id`, `content`, `endroit`) VALUES
(1, 'test FAQ', 'Accueil - Sponsor'),
(2, 'test description', 'Accueil - Inscription'),
(9, 'test Accueil', 'Accueil - Contact'),
(10, 'test feedback', 'Accueil - Junior ISEP'),
(11, 'test inscription', 'Description - Inscription'),
(12, 'test contact', 'Description - Sponsor'),
(13, 'test contact entreprise', 'Description - Partagez'),
(14, 'test sponsor', 'Lien vidéo'),
(15, '<header>\r\n										<h2>Description</h2>\r\n										<p>PROJECTeam est le premier évenement inter-ecole organisé par la JuniorISEP dans ses nouveaux locaux à Issy-les-moulineaux</p>\r\n									</header>', 'Description'),
(16, '', 'Sponsor'),
(17, '', 'FAQ'),
(18, '', 'FAQ');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `contactentreprise`
--
ALTER TABLE `contactentreprise`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fos_user`
--
ALTER TABLE `fos_user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`), ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `modif`
--
ALTER TABLE `modif`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `contactentreprise`
--
ALTER TABLE `contactentreprise`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `feedback`
--
ALTER TABLE `feedback`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `fos_user`
--
ALTER TABLE `fos_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `modif`
--
ALTER TABLE `modif`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;