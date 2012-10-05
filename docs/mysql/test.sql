-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 05 Octobre 2012 à 20:04
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateurs`
--

CREATE TABLE IF NOT EXISTS `administrateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `picture` varchar(40) DEFAULT NULL,
  `description` tinytext,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `optin` tinyint(1) DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `date_auth` datetime DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL,
  `accountNonLocked` tinyint(1) NOT NULL,
  `accountNonExpired` tinyint(1) NOT NULL,
  `slug` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=218 ;

--
-- Contenu de la table `administrateurs`
--

INSERT INTO `administrateurs` (`id`, `firstname`, `lastname`, `picture`, `description`, `email`, `password`, `optin`, `ip`, `salt`, `token`, `updated_at`, `created_at`, `date_auth`, `enabled`, `accountNonLocked`, `accountNonExpired`, `slug`) VALUES
(217, 'Julien', 'Boyer', NULL, NULL, 'toto@gmail.com', 'pKIxrrFgN0ER0YUwMfTi5n5/NHIqxTB2KxbKA+XJC0QHIEzkej6nvaYcKE/O8M71a3e3Qs9h8Jgi8h1ZFwDAYQ==', 0, NULL, '48f2b027c5a62f4523417731e0b0705b', '1d0d09257d121befa9c7154c19e624eebb600d0d', '2012-09-16 23:49:30', '2012-09-16 23:49:30', NULL, 1, 1, 1, 'boyer-boyer');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `type` varchar(60) NOT NULL,
  `resume` text NOT NULL,
  `content` text NOT NULL,
  `tag` varchar(400) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `special` tinyint(4) NOT NULL,
  `notes` int(11) NOT NULL,
  `date_created` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

CREATE TABLE IF NOT EXISTS `medias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `offer_id` int(11) DEFAULT NULL,
  `restaurant_id` int(11) DEFAULT NULL,
  `legend` varchar(120) DEFAULT NULL,
  `picture` varchar(150) DEFAULT NULL,
  `state` int(11) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `offers_id` (`offer_id`),
  KEY `restaurant_id` (`restaurant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=148 ;

--
-- Contenu de la table `medias`
--

INSERT INTO `medias` (`id`, `offer_id`, `restaurant_id`, `legend`, `picture`, `state`, `date_created`, `date_updated`) VALUES
(145, NULL, 927, 'Photo 1', '1ed97440ef6ebb99cdfcdc882813cae2.jpg', 1, '2012-09-16 23:49:31', '2012-09-16 23:49:31'),
(146, NULL, 927, 'Photo 2', '7eda9ac54ce2be6de1f1a772afe2bc1b.jpg', 2, '2012-09-16 23:49:31', '2012-09-16 23:49:31'),
(147, NULL, 927, 'Photo 3', '7esdfsdfdsfdsfdsfsdsdfd.jpg', 0, '2012-09-16 23:49:31', '2012-09-16 23:49:31');

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `tag` varchar(300) NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_id` int(11) DEFAULT '0',
  `gender` tinyint(1) DEFAULT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `description` tinytext,
  `email` varchar(255) DEFAULT NULL,
  `tel` varchar(12) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `optin` tinyint(1) DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `don` float DEFAULT NULL,
  `q1` text,
  `q2` text,
  `q3` text,
  `q4` text,
  `picture` varchar(120) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `date_auth` datetime DEFAULT NULL,
  `counter_updated` tinyint(1) DEFAULT NULL,
  `counter_failed` int(11) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `accountNonLocked` tinyint(1) NOT NULL,
  `accountNonExpired` tinyint(1) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `fid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cities_id` (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6689 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `city_id`, `gender`, `firstname`, `lastname`, `description`, `email`, `tel`, `password`, `dob`, `optin`, `ip`, `salt`, `token`, `don`, `q1`, `q2`, `q3`, `q4`, `picture`, `updated_at`, `created_at`, `date_auth`, `counter_updated`, `counter_failed`, `enabled`, `accountNonLocked`, `accountNonExpired`, `slug`, `fid`) VALUES
(6680, NULL, 1, 'Larah', 'Boyer', NULL, 'jboyer@click-call.com', NULL, 'V0nuIrDLjME0FZaaLe4WIeuXSEkbJlTfBzht3EbRC8AbY+AILxabRdRMPvbucUvmwKwNPk2Lmvb82c7c/ReOrg==', NULL, 0, NULL, 'b345099150f14fcfb0584e63e7d279ed', '1d0d09257d121befa9c7154c19e624eebb600d0d', 0, NULL, NULL, NULL, NULL, NULL, '2012-09-16 23:49:31', '2012-09-16 23:49:31', NULL, 0, 0, 1, 1, 1, 'larah', NULL),
(6681, NULL, 1, 'Mathilde', 'Tastevin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non metus sapien. Etiam convallis est eu ligula venenatis fringilla. Nullam id arcu ipsum. Vestibulum non nisl ac elit tincidunt fermentum in at dolor. Donec id libero turpis, sit amet sodales', 'dfe8ad470f01daeb3310ca3ea8ba96e011d512d5', '0674585648', 'o4YaOxA6f+QjItPCUeFwx4HVI8JozfXlRMgGPgkkVf17FCQatq/D/v2Y9OvzIiEwJhtLTR2RZoQphkgwIiO4lA==', '2004-05-24', 0, '192.168.5.65', 'b44de730b82cc84c74de0a08a1689412', '2e9001a74f0df0e00f9f2c24f2a473df8252c207', 0, 'Salut ça va?', 'Bien et toi?', 'Oui merci et toi?', 'Okay?', 'b2d2f8c946d8561768d575698ab0fe43.jpg', '2012-09-16 23:49:31', '2012-09-16 23:49:31', '2004-05-24 00:00:00', 0, 0, 1, 1, 1, 'mathilde', NULL),
(6682, NULL, 1, 'Rodrigue', 'Katashe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non metus sapien. Etiam convallis est eu ligula venenatis fringilla. Nullam id arcu ipsum. Vestibulum non nisl ac elit tincidunt fermentum in at dolor. Donec id libero turpis, sit amet sodales', 'cdb5e3fa9cb49695aed87f97646962ce34dc2e9a', '0674585648', '2hWAsN+AeO3C5qTfAmkfLBJxFF4XoywdgsDW62CJwmIPps+q/n0H3Ln+uf0BcuMIZ14pB014QiTx9CF/TYja6w==', '2007-05-14', 0, '192.168.5.65', 'bd083f08a75aa85030ff64eb557f9f25', '2e9001a74f0df0e00f9f2c24f2a473df8252c207', 0, 'Salut ça va?', 'Bien et toi?', 'Oui merci et toi?', 'Okay?', 'b2d2f8c946d8561768d575698ab0fe43.jpg', '2012-09-16 23:49:31', '2012-09-16 23:49:31', '2007-05-14 00:00:00', 0, 0, 1, 1, 1, 'rodrigue', NULL),
(6683, NULL, 0, 'Ludovic', 'Vasse', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non metus sapien. Etiam convallis est eu ligula venenatis fringilla. Nullam id arcu ipsum. Vestibulum non nisl ac elit tincidunt fermentum in at dolor. Donec id libero turpis, sit amet sodales', 'b3b19755fc0863b83e7d1ecae7d72efcebd95b98', '0674585648', 'j3c5ail7/ChYK5ayI1faV4b9luhOMolPtjmWCh/82OdV1Ygpd8IvyKDxRPfsYgaxGDNSzRVwUKfo5vQBw+3wyw==', '1996-02-15', 0, '192.168.5.65', '3b1d200f9397ba873f017a101cebe2e5', '2e9001a74f0df0e00f9f2c24f2a473df8252c207', 0, 'Salut ça va?', 'Bien et toi?', 'Oui merci et toi?', 'Okay?', 'b2d2f8c946d8561768d575698ab0fe43.jpg', '2012-09-16 23:49:31', '2012-09-16 23:49:31', '1996-02-15 00:00:00', 0, 0, 1, 1, 1, 'ludovic', NULL),
(6684, NULL, 1, 'Kevin', 'Marais', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non metus sapien. Etiam convallis est eu ligula venenatis fringilla. Nullam id arcu ipsum. Vestibulum non nisl ac elit tincidunt fermentum in at dolor. Donec id libero turpis, sit amet sodales', '953336c8de81f983c4bd6d077ef3e020bc5efcd2', '0674585648', 'jXD61PEmOqmLAoudmvq/aMRDixsKmWBXA977Lul3eDJzaouzQ2H+pJRumkQS9G/Q5T7s9R1Mc5nysZV5zU5fsA==', '1995-05-26', 0, '192.168.5.65', '8de8ac58db0e7eadc361390c5b2debb2', '2e9001a74f0df0e00f9f2c24f2a473df8252c207', 0, 'Salut ça va?', 'Bien et toi?', 'Oui merci et toi?', 'Okay?', 'b2d2f8c946d8561768d575698ab0fe43.jpg', '2012-09-16 23:49:31', '2012-09-16 23:49:31', '1995-05-26 00:00:00', 0, 0, 1, 1, 1, 'kevin', NULL),
(6685, NULL, 1, 'Emilie', 'Plasse', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non metus sapien. Etiam convallis est eu ligula venenatis fringilla. Nullam id arcu ipsum. Vestibulum non nisl ac elit tincidunt fermentum in at dolor. Donec id libero turpis, sit amet sodales', 'bec8ed6c84760a5642d3fa67e115efb17324ffa5', '0674585648', '2ohcjAynx8QZw5v7+b7zeWNoyRMa62xxtCepltTlZuJ7SLlgKVsM6IEZtiH/+uTIEY4VF5wgn7MhexluuXynhQ==', '2006-02-26', 0, '192.168.5.65', '06efa99a5b856577d954504e66a4d8f6', '2e9001a74f0df0e00f9f2c24f2a473df8252c207', 0, 'Salut ça va?', 'Bien et toi?', 'Oui merci et toi?', 'Okay?', 'b2d2f8c946d8561768d575698ab0fe43.jpg', '2012-09-16 23:49:31', '2012-09-16 23:49:31', '2006-02-26 00:00:00', 0, 0, 1, 1, 1, 'emilie', NULL),
(6686, NULL, 0, 'Betty', 'Charpentier', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non metus sapien. Etiam convallis est eu ligula venenatis fringilla. Nullam id arcu ipsum. Vestibulum non nisl ac elit tincidunt fermentum in at dolor. Donec id libero turpis, sit amet sodales', '14ab6ff27a12c0c2388ea4eb4d9ca584533d6b43', '0674585648', 'DqGHRvyCMh6Sdy2kKc8o+6Vtw6HxFVEHSgETSllKEg/4+srCWWeiZzKVBGRMWRGlz2kZNJ7P312MtnMkaJC0Fw==', '2012-08-06', 0, '192.168.5.65', '44b3d5d05399c06e17a6a0bfb2d7b62f', '2e9001a74f0df0e00f9f2c24f2a473df8252c207', 0, 'Salut ça va?', 'Bien et toi?', 'Oui merci et toi?', 'Okay?', 'b2d2f8c946d8561768d575698ab0fe43.jpg', '2012-09-16 23:49:32', '2012-09-16 23:49:32', '2012-08-06 00:00:00', 0, 0, 1, 1, 1, 'betty', NULL),
(6687, NULL, 1, 'Emilie', 'Katashe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non metus sapien. Etiam convallis est eu ligula venenatis fringilla. Nullam id arcu ipsum. Vestibulum non nisl ac elit tincidunt fermentum in at dolor. Donec id libero turpis, sit amet sodales', '1257faa6a506f38b56e539dc0637688db4804fed', '0674585648', 'He6/Nocp8Fr7LhRj6do+CXQ2FYJnQt+E/Ag/IyVdNDL/w67xVeXsjZj25RHQzw5K00juS+uWM18+yHccRjG6uQ==', '1995-02-13', 0, '192.168.5.65', '8b88f8b33b24c2ca9a301e47e8013817', '2e9001a74f0df0e00f9f2c24f2a473df8252c207', 0, 'Salut ça va?', 'Bien et toi?', 'Oui merci et toi?', 'Okay?', 'b2d2f8c946d8561768d575698ab0fe43.jpg', '2012-09-16 23:49:32', '2012-09-16 23:49:32', '1995-02-13 00:00:00', 0, 0, 1, 1, 1, 'emilie-1', NULL),
(6688, NULL, 0, 'Audile', 'Charpentier', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non metus sapien. Etiam convallis est eu ligula venenatis fringilla. Nullam id arcu ipsum. Vestibulum non nisl ac elit tincidunt fermentum in at dolor. Donec id libero turpis, sit amet sodales', '8643c7aafdb2aa78084d4b996669184dd99cd198', '0674585648', '9ID6Pa7hiWB5peWnfqWw8wg51f/DF1EV7prbm9i6kkPlmZv9nsqpaIAh4xwNkfe5taIotw5fbIM7m1Zj1ZdEkA==', '2005-04-12', 0, '192.168.5.65', '674fd3952beb7bcc8672d4aa33e5bd44', '2e9001a74f0df0e00f9f2c24f2a473df8252c207', 0, 'Salut ça va?', 'Bien et toi?', 'Oui merci et toi?', 'Okay?', 'b2d2f8c946d8561768d575698ab0fe43.jpg', '2012-09-16 23:49:32', '2012-09-16 23:49:32', '2005-04-12 00:00:00', 0, 0, 1, 1, 1, 'audile', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
