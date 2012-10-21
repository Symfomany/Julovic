-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 19 Octobre 2012 à 08:52
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
  `administrateurs_id` int(30) NOT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `picture` varchar(40) DEFAULT NULL,
  `description` tinytext,
  `email` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `adresse` varchar(250) DEFAULT NULL,
  `ville` varchar(250) DEFAULT NULL,
  `zipcode` int(10) DEFAULT NULL,
  `tel` varchar(60) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `optin` tinyint(1) DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `date_auth` datetime DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT NULL,
  `accountNonLocked` tinyint(1) DEFAULT NULL,
  `accountNonExpired` tinyint(1) NOT NULL,
  `slug` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=235 ;

--
-- Contenu de la table `administrateurs`
--

INSERT INTO `administrateurs` (`id`, `administrateurs_id`, `firstname`, `lastname`, `picture`, `description`, `email`, `dob`, `adresse`, `ville`, `zipcode`, `tel`, `password`, `optin`, `ip`, `salt`, `token`, `updated_at`, `created_at`, `date_auth`, `enabled`, `accountNonLocked`, `accountNonExpired`, `slug`) VALUES
(233, 0, 'Julien', 'Boyer', NULL, NULL, 'zuzu38080@gmail.com', NULL, NULL, NULL, NULL, NULL, 'DoyyGmiLMlnw9r7KO/JHQFmEDTzVRsRKzJ3X0OeWe1QPjeP735IlUZycs0+OwE+gL/TLH8+XUR9svryMJfWZ4Q==', NULL, NULL, '496b112bde33b80a32cad8b9fcfef304', 'ceab71bcfe835a167a947afd7b81a8c70e8a1fbc', '2012-10-13 06:34:28', '2012-10-13 06:34:28', NULL, 1, 1, 1, 'boyer'),
(234, 0, 'Julien', 'Boyer', NULL, 'test alpha', 'jboyer@click-call.com', '1990-09-06', '69 Avenue Victor Hugo', 'Neuilly-sur-Seine', 93360, '0474272459', 'nSJJZuLZd4+t5/lISIFQskAZMbZuX39Pz2rVVNB+d+8jQVofpDzyF6DcBMduKe9hTzYGkl/AWpmhCHYMdSogIQ==', NULL, NULL, '4802ae2149fa47fdf902160f63398b3c', '1d0d09257d121befa9c7154c19e624eebb600d0d', '2012-10-15 17:20:33', '2012-10-13 06:34:28', NULL, 1, 1, 1, 'boyer-1');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `type` varchar(60) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `resume` text,
  `content` text,
  `tag` varchar(400) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `special` tinyint(4) DEFAULT NULL,
  `notes` int(11) DEFAULT NULL,
  `image_name` varchar(255) NOT NULL,
  `slug` varchar(120) DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `type`, `title`, `resume`, `content`, `tag`, `active`, `special`, `notes`, `image_name`, `slug`, `date_updated`, `date_created`) VALUES
(1, 1, NULL, 'Test A', 'Test ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest A', 'Test ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest <br><h1>Ici le titre</h1>ATest ATest ATest ATest ATest A', NULL, NULL, NULL, 15, '', 'test-a', '2012-10-18 22:46:59', '2012-10-18 19:37:16'),
(3, NULL, NULL, 'sdfsdf', 'dsfsdfds', 'fsdfsdfds', NULL, NULL, NULL, 21, '', 'sdfsdf', '2012-10-18 22:05:10', '2012-10-18 22:01:11');

-- --------------------------------------------------------

--
-- Structure de la table `articles_categories`
--

CREATE TABLE IF NOT EXISTS `articles_categories` (
  `articles_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `articles_categories`
--

INSERT INTO `articles_categories` (`articles_id`, `categories_id`) VALUES
(3, 1),
(3, 2),
(1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `root` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `lvl` int(11) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` text,
  `slug` varchar(120) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `lft`, `rgt`, `root`, `parent_id`, `lvl`, `title`, `description`, `slug`, `date_created`) VALUES
(1, 1, 2, 1, NULL, 0, 'Catégorie Alpha', 'Catégorie <b>Alpha </b>test alpha', 'categorie-alpha', '2012-10-18 19:36:19'),
(2, 1, 2, 2, NULL, 0, 'Category Beta', 'Test <b>Alpha </b>ok lol', 'category-beta', '2012-10-18 21:29:08'),
(3, 1, 2, 3, NULL, 0, 'rtgfgdfg', 'dfgfdgdfg', 'rtgfgdfg', '2012-10-18 22:48:48');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) DEFAULT NULL,
  `content` text,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `email`, `content`, `date_created`) VALUES
(7, 'test@free.fr', 'Nunc tincidunt <b>aliquet </b>elementum. Donec non orci <i>dolor,</i> quis fermentum<b> massa.</b>', '2012-10-13 06:34:28'),
(8, 'lala@free.fr', 'Praesent orci erat, hendrerit bibendum pretium quis, placerat at eros. Curabitur convallis  ', '2012-10-13 06:34:28'),
(9, 'erterte@free.fr', 'fsdfsdf', '2012-10-18 00:56:07'),
(10, 'rtyrty', 'rtyrtyutryt', '2012-10-18 00:57:42'),
(11, 'zerzerez', 'ezrezr', '2012-10-18 08:50:24'),
(12, 'azeazezae@free.fr', 'azezaezaez', '2012-10-18 08:51:04'),
(13, 'sdfsdfd@free.fr', 'sdfsdfs<b>dfsdfds</b>', '2012-10-18 08:52:19');

-- --------------------------------------------------------

--
-- Structure de la table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `links`
--

INSERT INTO `links` (`id`, `title`, `link`, `description`, `date_created`) VALUES
(14, 'Nunc tincidunt aliquet elementum. Donec non orci dolor, quis fermentum massa. ', 'http://www.free.fr', 'Praesent orci erat, hendrerit bibendum pretium quis, placerat at eros. Curabitur convallis scelerisque neque nec tincidunt. Aliquam ut quam at nulla consectetur hendrerit in et tortor. In nisl libero, hendrerit ', '2012-10-13 06:34:28'),
(15, 'Nunc tincidunt aliquet elementum. Donec non orci dolor, quis fermentum massa. ', 'http://www.free.fr', 'Praesent orci erat, hendrerit bibendum pretium quis, placerat at eros. Curabitur convallis scelerisque neque nec tincidunt. Aliquam ut quam at nulla consectetur hendrerit in et tortor. In nisl libero, hendrerit ', '2012-10-13 06:34:28');

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

CREATE TABLE IF NOT EXISTS `medias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `administrateur_id` int(11) NOT NULL,
  `article_id` int(11) DEFAULT NULL,
  `legend` varchar(120) DEFAULT NULL,
  `picture` varchar(150) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `medias`
--

INSERT INTO `medias` (`id`, `administrateur_id`, `article_id`, `legend`, `picture`, `state`, `date_created`, `date_updated`) VALUES
(2, 234, 33, NULL, NULL, 0, '2012-10-17 19:48:57', '2012-10-17 19:48:57'),
(3, 234, 34, NULL, NULL, 0, '2012-10-17 19:49:25', '2012-10-17 19:49:25'),
(4, 234, 35, 'dsfdsfsfgfsg', '308b527e208e667d9a86d85ead6dba31.jpeg', 1, '2012-10-17 19:55:12', '2012-10-17 21:35:07'),
(5, 233, 36, 'rtyutryrutyrtytrytyrt', 'a5d0b280cdc3541c3378ced79cac9fa2.jpeg', 1, '2012-10-18 01:06:29', '2012-10-18 01:06:29'),
(6, 233, NULL, 'retertert', '22df2b253f86d0fa6bd9f72cb608a4cb.jpeg', 0, '2012-10-18 01:17:07', '2012-10-18 01:17:07'),
(7, 233, 1, 'Photo 1', '7ee137156eb0535ad048bb27425cd9ce.jpeg', 1, '2012-10-18 19:37:16', '2012-10-18 22:46:59'),
(9, 233, 3, 'fsdfsdfsdf', 'a58a65dfb77ab3c0a19265311c88d94a.jpeg', 1, '2012-10-18 22:01:11', '2012-10-18 22:05:20');

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `resume` text,
  `content` text,
  `tag` varchar(300) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `pages`
--

INSERT INTO `pages` (`id`, `title`, `resume`, `content`, `tag`, `date_created`, `date_updated`) VALUES
(1, 'ezerzerez', '<span style="font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nulla nunc, adipiscing sed dictum nec, congue adipiscing libero. Cras euismod lobortis lectus, ornare pulvinar arcu scelerisque in. Vestibulum pretium arcu ultricies eros interdum commodo.&nbsp;</span><div><span style="font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify; "><i>Pellentesque nec purus in erat malesuada sollicitudin at et mauris. Nunc adipiscing, nulla venenatis tristique viverra, risus lectus tristique libero, eget ornare massa felis viverra velit.&nbsp;</i></span></div>', '<p style="text-align: justify; font-size: 11px; line-height: 14px; margin: 0px 0px 14px; padding: 0px; font-family: Arial, Helvetica, sans; ">Sed dolor eros, elementum vel semper non, luctus et leo. Ut neque quam, pharetra id condimentum ac, vehicula quis ante. Maecenas sed nulla a nisi molestie tristique. Nunc id lorem odio, ac rhoncus nunc. <b>Proin et mi ac urna commodo dictum sit amet iaculis</b> ante. Praesent porta quam at dui pellentesque ultrices. Donec id elit vitae arcu convallis pellentesque sit amet nec magna. Maecenas commodo felis sed nibh tincidunt eget dignissim metus sagittis. Duis dignissim volutpat luctus. <i>Fusce quam odio,</i> scelerisque vitae facilisis eu, aliquam ut metus. Ut non velit turpis, vitae porttitor dolor. Pellentesque euismod neque vel purus interdum lacinia. Fusce eget adipiscing ipsum. Nunc vitae scelerisque dui.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin: 0px 0px 14px; padding: 0px; font-family: Arial, Helvetica, sans; ">Curabitur a suscipit magna. <b>Fusce sit amet lectus</b> in enim condimentum ullamcorper at at dui. Donec congue felis ac nulla consectetur aliquam.&nbsp;</p><h3>Suspendisse rhoncus mauris porta quam pulvinar egestas.&nbsp;</h3><p style="text-align: justify; font-size: 11px; line-height: 14px; margin: 0px 0px 14px; padding: 0px; font-family: Arial, Helvetica, sans; ">Suspendisse potenti. Donec tellus augue, mollis ut lacinia quis, tincidunt vitae erat. Nunc ac molestie leo. Maecenas sem nisi, placerat non commodo quis, faucibus in odio. Pellentesque sed felis metus. Mauris venenatis metus in purus mollis ut convallis augue vulputate. Proin molestie lobortis gravida. Sed et est euismod risus convallis pretium.</p>', 'Bleu, Blanc', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `parametres`
--

CREATE TABLE IF NOT EXISTS `parametres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_site` varchar(120) DEFAULT NULL,
  `url_site` varchar(120) DEFAULT NULL,
  `administrateurs_id` int(11) DEFAULT NULL,
  `nom_admin` varchar(120) DEFAULT NULL,
  `email_admin` varchar(120) DEFAULT NULL,
  `adresse_admin` varchar(150) DEFAULT NULL,
  `ville_admin` varchar(150) DEFAULT NULL,
  `cp_admin` varchar(150) DEFAULT NULL,
  `tel_admin` varchar(120) DEFAULT NULL,
  `port_admin` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `parametres`
--

INSERT INTO `parametres` (`id`, `nom_site`, `url_site`, `administrateurs_id`, `nom_admin`, `email_admin`, `adresse_admin`, `ville_admin`, `cp_admin`, `tel_admin`, `port_admin`) VALUES
(2, 'Blog Test', 'http://www.bo.ju', NULL, 'Boyer', 'zuzu38080@gmail.com', '69 Avenue Victor Hugo', 'Neuilly-Plaisance', '93360', '0474272459', '0674585648');

-- --------------------------------------------------------

--
-- Structure de la table `referencement`
--

CREATE TABLE IF NOT EXISTS `referencement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `routing` varchar(30) NOT NULL,
  `title` varchar(300) NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `tag` varchar(300) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `tags`
--

INSERT INTO `tags` (`id`, `category_id`, `tag`, `date_created`) VALUES
(5, NULL, 'Alpha ', '2012-10-13 06:34:28'),
(6, NULL, 'Beta ', '2012-10-13 06:34:28'),
(7, NULL, 'Arceaux ', '2012-10-13 06:34:28'),
(8, NULL, 'Berceaux ', '2012-10-13 06:34:28');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
