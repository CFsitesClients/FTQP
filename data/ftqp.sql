-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 01 Juillet 2015 à 15:40
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ftqp`
--

-- --------------------------------------------------------

--
-- Structure de la table `accueil`
--

CREATE TABLE IF NOT EXISTS `accueil` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `accueil`
--

INSERT INTO `accueil` (`id`, `message`) VALUES
(3, '&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Le centre de formation FTQP propose depuis le 26/03/1979 &amp;agrave; des demandeurs d&amp;#39;emploi peu qualifi&amp;eacute;s de plus de 18 ans (d&amp;eacute;tendeurs du CEB ou du CESI) deux formations qualifiantes dans le secteur de la construction : l&amp;#39;une en ma&amp;ccedil;onnerie et l&amp;#39;autre en plafonnage.&lt;/p&gt;\r\n\r\n&lt;p&gt;Le stagiaire en formation devra &amp;ecirc;tre capable d&amp;#39;atteindre deux niveaux de comp&amp;eacute;tences distincts :&lt;br /&gt;\r\n- Le niveau de base.&lt;br /&gt;\r\n- Le niveau de perfectionnement.&lt;br /&gt;\r\nLe stagiaire &amp;eacute;volue &amp;agrave; son rythme et dispose d&amp;#39;un d&amp;eacute;lai maximum de 2 ans (2080 heures max) au centre &amp;agrave; raison de 1040 heures de formation et 152 heures de stage en entreprise par an.&lt;br /&gt;\r\nUne mise &amp;agrave; l&amp;#39;emploi au terme de la formation finalise le processus d&amp;#39;insertion.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;FTQP ALTERNANCE : EMPLOI FORMATION.&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Pour la 2&amp;egrave;me ann&amp;eacute;e de formation, possibilit&amp;eacute; pour le(la) stagiaire &amp;acirc;g&amp;eacute; de 18 &amp;agrave; 25 ans d&amp;#39;entrer dans un syst&amp;egrave;me en alternance organis&amp;eacute; sur base de 1 jour de formation et guidance et 4 jours en entreprise sous contrat RAC (R&amp;eacute;gime Apprentissage Construction du Fonds de Formation de la Construction FFC/FVB.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&lt;img alt=&quot;&quot; src=&quot;http://localhost/FTQP/images/autres/ftqp01.jpg&quot; style=&quot;height:100px; width:150px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Avec le soutien de la Cocof, de Bruxelles-Formation, d&amp;#39;Actiris, du Fonds Social Europ&amp;eacute;en et du Fonds de Formation de la Construction :&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp; &amp;nbsp;&amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp;&lt;img alt=&quot;&quot; src=&quot;http://localhost/FTQP/images/partenaire/01.png&quot; style=&quot;height:89px; width:81px&quot; /&gt;&amp;nbsp; &amp;nbsp;&lt;img alt=&quot;&quot; src=&quot;http://localhost/FTQP/images/partenaire/02.jpg&quot; style=&quot;height:89px; width:127px&quot; /&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;img alt=&quot;&quot; src=&quot;http://localhost/FTQP/images/partenaire/03.png&quot; style=&quot;height:89px; width:89px&quot; /&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&lt;img alt=&quot;&quot; src=&quot;http://localhost/FTQP/images/partenaire/04.png&quot; style=&quot;height:89px; width:117px&quot; /&gt;&amp;nbsp;&amp;nbsp;&lt;img alt=&quot;&quot; src=&quot;http://localhost/FTQP/images/partenaire/05.png&quot; style=&quot;height:89px; width:89px&quot; /&gt;&amp;nbsp;&amp;nbsp;&lt;img alt=&quot;&quot; src=&quot;http://localhost/FTQP/images/partenaire/06.png&quot; style=&quot;height:89px; width:142px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Objectif de la formation qualifiante du ma&amp;ccedil;on et du plafonneur&lt;/p&gt;\r\n\r\n&lt;p&gt;Le stagiaire devra &amp;ecirc;tre capable d&amp;#39;atteindre deux niveaux de comp&amp;eacute;tences distincts : 1) le niveau de base; 2) le niveau de perfectionnement. Le stagiaire &amp;eacute;volue &amp;agrave; son rythme et dispose d&amp;#39;un d&amp;eacute;lai maximum de 2 ans (2080 heures) au centre &amp;agrave; raison de 1040 heures par an et 304 heures de stage en entreprise &amp;agrave; raison de 152 heures par an.&lt;br /&gt;\r\nLa formation se d&amp;eacute;roule du lundi au vendredi de 8h30 &amp;agrave; 16h00.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Le stagiaire devra &amp;ecirc;tre capable d&amp;#39;int&amp;eacute;grer les comp&amp;eacute;tences associ&amp;eacute;es aux activit&amp;eacute;s cl&amp;eacute;s du ma&amp;ccedil;on et du plafonneur au travers de la r&amp;eacute;alisation de modules successifs en atelier (apprentissage pratique) et aux cours g&amp;eacute;n&amp;eacute;raux (apprentissage th&amp;eacute;orique) sous la tutelle des formateurs.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Les stages en entreprise.&lt;br /&gt;\r\nNous int&amp;eacute;grons &amp;agrave; nos formations des stages en entreprise (non r&amp;eacute;mun&amp;eacute;r&amp;eacute;s pour le 1er stage d&amp;#39;immersion) de 152 heures (4 semaines) par niveau de formation.&lt;br /&gt;\r\n- Le premier stage consiste essentiellement en une premi&amp;egrave;re confrontation avec le milieu professionnel, il est centr&amp;eacute; sur le respect des r&amp;egrave;gles du monde de l&amp;#39;entreprise et sur la mise en pratique sur chantier des apprentissages r&amp;eacute;alis&amp;eacute;s dans nos ateliers. Stage d&amp;#39;immersion.&lt;br /&gt;\r\n- Le deuxi&amp;egrave;me stage a pour objectif d&amp;#39;&amp;ecirc;tre un tremplin vers l&amp;#39;emploi, une sorte de p&amp;eacute;riode d&amp;#39;essai avant la signature d&amp;#39;un contrat &amp;agrave; dur&amp;eacute;e ind&amp;eacute;termin&amp;eacute;e. Stage d&amp;#39;ach&amp;egrave;vement.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `aide`
--

CREATE TABLE IF NOT EXISTS `aide` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `aide`
--

INSERT INTO `aide` (`id`, `message`) VALUES
(1, '&lt;p&gt;Au cas par cas, pour chacun de nos stagiaires, nous vous assistons pour trouver les conditions d&amp;#39;engagement les plus avantageuses, et proposons de vous soutenir dans vos d&amp;eacute;marches administratives.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Apr&amp;egrave;s la formation FTQP, possibilit&amp;eacute; d&amp;#39;engagement imm&amp;eacute;diat.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Activa.&lt;/li&gt;\r\n	&lt;li&gt;CPE (convention premier emploi, r&amp;eacute;ductions ONSS&amp;nbsp;jusqu&amp;#39;&amp;agrave; 26 ans).&lt;/li&gt;\r\n	&lt;li&gt;Clause sociale.&lt;/li&gt;\r\n	&lt;li&gt;Prime de transition professionnelle.&lt;/li&gt;\r\n	&lt;li&gt;Contrat RAC (18 &amp;agrave; 25 ans) (cfr. FFC).&lt;/li&gt;\r\n	&lt;li&gt;F.P.I. (formation individuelle en entreprise de 1 &amp;agrave; 6&amp;nbsp;mois).&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Les jeunes issus de ces formations r&amp;eacute;pondent en g&amp;eacute;n&amp;eacute;ral aux conditions des clauses sociales.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Personne de contact :&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; Mme Delphine Scr&amp;egrave;ve &amp;nbsp;: 02/533.10.78&lt;/p&gt;\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `conditions`
--

CREATE TABLE IF NOT EXISTS `conditions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `conditions`
--

INSERT INTO `conditions` (`id`, `message`) VALUES
(1, '&lt;ul&gt;\r\n	&lt;li&gt;Avoir plus de 18 ans.&lt;/li&gt;\r\n	&lt;li&gt;Etre d&amp;eacute;tendeur d&amp;#39;un CEB ou d&amp;#39;un CESI ou le niveau &amp;eacute;quivalent.&lt;/li&gt;\r\n	&lt;li&gt;Etre inscrit comme demandeur d&amp;#39;emploi et titulaire du document A15.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `message`) VALUES
(1, '&lt;p&gt;Mr. Tahar ELHAMDAOUI, directeur :&lt;br /&gt;\r\nT&amp;eacute;l. : 02/533.10.76&lt;br /&gt;\r\nFax : 02/539.38.98&lt;br /&gt;\r\nGSM : 0477/455.188&lt;br /&gt;\r\nEmail : ftqp.elhamdaoui@hotmail.com&lt;br /&gt;\r\nSite : www.ftqp-isp.be&lt;/p&gt;\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `droit`
--

CREATE TABLE IF NOT EXISTS `droit` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lenom` varchar(45) DEFAULT NULL,
  `ladesc` varchar(255) DEFAULT NULL,
  `laperm` tinyint(3) unsigned DEFAULT '2',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `droit`
--

INSERT INTO `droit` (`id`, `lenom`, `ladesc`, `laperm`) VALUES
(1, 'Administrateur', 'Administrateur du site - Tous les droits.', 0),
(2, 'Modérateur', 'Modération du site - Vous pouvez désactiver un Utilisateur', 1),
(3, 'Utilisateur', 'Utilisateur du site', 2);

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lenom` char(25) DEFAULT NULL,
  `letype` char(3) DEFAULT NULL,
  `lepoids` int(10) unsigned DEFAULT NULL,
  `lahauteur` smallint(5) unsigned DEFAULT NULL,
  `lalargeur` smallint(5) unsigned DEFAULT NULL,
  `letitre` varchar(60) DEFAULT NULL,
  `ladesc` varchar(255) DEFAULT NULL,
  `utilisateur_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lenom_UNIQUE` (`lenom`),
  KEY `fk_photo_utilisateur1_idx` (`utilisateur_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Contenu de la table `photo`
--

INSERT INTO `photo` (`id`, `lenom`, `letype`, `lepoids`, `lahauteur`, `lalargeur`, `letitre`, `ladesc`, `utilisateur_id`) VALUES
(23, 'bengoqpn5rd9i5505bjj172hh', 'jpg', 551996, 1018, 1920, NULL, NULL, 1),
(24, 'fed11nfk1eqmgacbf4a6k2599', 'jpg', 500218, 1080, 1920, NULL, NULL, 1),
(25, 'b2d02m763kikejn2oi57arm7c', 'jpg', 1239454, 2400, 3600, NULL, NULL, 1),
(26, 'jmddo5r83dgoqa0pn0h77fnoq', 'png', 1812076, 575, 1506, NULL, NULL, 1),
(27, 'fr76iphrfkbhomg675nmlj2b1', 'jpg', 267666, 1200, 1920, NULL, NULL, 1),
(28, '0nm5hocl6m9c7fb4gj8652pe1', 'jpg', 549882, 1080, 1920, NULL, NULL, 1),
(30, 'h904cbhhl71oo4e1diokimmbe', 'jpg', 68656, 411, 600, NULL, NULL, 1),
(31, 'fca8r9l6crdc2i203pke4go61', 'jpg', 549882, 1080, 1920, NULL, NULL, 1),
(32, 'nhb67d7njh06pdd51587fej7k', 'jpg', 267666, 1200, 1920, NULL, NULL, 1),
(33, 'hqb1q7nhcb83dkq6jpb8qeqcq', 'jpg', 1239454, 2400, 3600, NULL, NULL, 1),
(34, 'hqfqgcnhoiqmaa1q1mlof93dd', 'png', 1812076, 575, 1506, NULL, NULL, 1),
(35, '8gfc72dh7qg29hk4j3cco2o49', 'jpg', 68656, 411, 600, NULL, NULL, 1),
(36, 'arlmg8pbrj50mmiao964jr7pj', 'jpg', 551996, 1018, 1920, NULL, NULL, 1),
(37, 'o72785gfm4d8kl8rbgafbar6m', 'jpg', 724040, 1080, 1920, NULL, NULL, 1),
(38, 'kco7da0d144qj04dh1r78i5ic', 'jpg', 13128, 168, 300, NULL, NULL, 1),
(39, '4nhkk6r14ffmn4gm18mlnh04j', 'jpg', 79089, 450, 1140, NULL, NULL, 1),
(40, '89ckg9q4ec4erklrkcn642fbn', 'jpg', 1239454, 2400, 3600, NULL, NULL, 1),
(41, 'q0e3m97nonhh649kn6nipelba', 'jpg', 378513, 1200, 1920, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `photo_has_rubrique`
--

CREATE TABLE IF NOT EXISTS `photo_has_rubrique` (
  `photo_id` int(10) unsigned NOT NULL,
  `rubrique_id` int(10) unsigned NOT NULL,
  KEY `fk_photo_has_rubrique_rubrique1_idx` (`rubrique_id`),
  KEY `fk_photo_has_rubrique_photo1_idx` (`photo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `photo_has_rubrique`
--

INSERT INTO `photo_has_rubrique` (`photo_id`, `rubrique_id`) VALUES
(23, 1),
(24, 1),
(30, 1),
(31, 1),
(32, 2),
(33, 2),
(34, 1),
(34, 2),
(35, 1),
(36, 1),
(36, 2),
(37, 2),
(38, 2),
(39, 2),
(41, 2);

-- --------------------------------------------------------

--
-- Structure de la table `rubrique`
--

CREATE TABLE IF NOT EXISTS `rubrique` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lintitule` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `rubrique`
--

INSERT INTO `rubrique` (`id`, `lintitule`) VALUES
(1, 'Centre'),
(2, 'Tous');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lelogin` varchar(45) DEFAULT NULL,
  `lemdp` varchar(45) DEFAULT NULL,
  `droit_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lelogin_UNIQUE` (`lelogin`),
  KEY `fk_utilisateur_droit_idx` (`droit_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `lelogin`, `lemdp`, `droit_id`) VALUES
(1, 'Admin', 'admin', 1),
(2, 'stagiaire', 'stagiaire', 2);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `fk_photo_utilisateur1` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `photo_has_rubrique`
--
ALTER TABLE `photo_has_rubrique`
  ADD CONSTRAINT `photo_has_rubrique_ibfk_1` FOREIGN KEY (`photo_id`) REFERENCES `photo` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `fk_utilisateur_droit` FOREIGN KEY (`droit_id`) REFERENCES `droit` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
