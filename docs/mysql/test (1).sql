-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Sam 13 Octobre 2012 à 06:26
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
(234, 0, 'Julien', 'Boyer', NULL, NULL, 'jboyer@click-call.com', NULL, NULL, NULL, NULL, NULL, 'B6NLfUWnFqU7OBhhb6bfaCdNtDsTI4R2sn7BdlQG0hxlGCic2LtsHoOFImVlzE2gLLbp1d7O6jnetG6daC1fNg==', NULL, NULL, '4802ae2149fa47fdf902160f63398b3c', '1d0d09257d121befa9c7154c19e624eebb600d0d', '2012-10-13 06:34:28', '2012-10-13 06:34:28', NULL, 1, 1, 1, 'boyer-1');

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
  `slug` varchar(120) DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `type`, `title`, `resume`, `content`, `tag`, `active`, `special`, `notes`, `slug`, `date_updated`, `date_created`) VALUES
(28, 13, 'post', 'Test Alpha de Article', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet mi risus. Sed eget quam neque. Curabitur suscipit ornare justo vel pretium. Praesent orci erat, hendrerit bibendum pretium quis, placerat at eros. Curabitur convallis scelerisque neque nec tincidunt. Aliquam ut quam at nulla consectetur hendrerit in et tortor. In nisl libero, hendrerit et egestas at, porttitor quis libero. Mauris convallis, augue sed consectetur malesuada, sapien nibh sodales mauris, vel adipiscing lorem eros ac risus. Nullam ac leo sed nulla molestie luctus.', 'Mauris non purus molestie risus volutpat adipiscing id quis est. Suspendisse consequat ullamcorper ullamcorper. Nulla porttitor placerat turpis a egestas. Morbi a eros tempor purus volutpat accumsan non tristique tortor. Suspendisse sapien mauris, accumsan sed aliquet eu, congue quis ligula. Phasellus et eros in ante laoreet luctus. Aliquam erat dui, scelerisque id scelerisque sit amet, consectetur ut neque. Maecenas felis enim, aliquam sed rhoncus vel, porttitor ac lectus. Ut facilisis ipsum vel neque lobortis posuere. Duis condimentum massa et neque commodo sed dapibus sem semper. Curabitur nibh enim, volutpat ac dictum rutrum, consequat quis ipsum. Mauris ac purus dui.\r\n                        Donec eget mi non justo rhoncus aliquam. Suspendisse pretium sollicitudin dui eget porta. Nunc tincidunt aliquet elementum. Donec non orci dolor, quis fermentum massa. Quisque id magna a nunc ornare iaculis non nec neque. In hac habitasse platea dictumst. Sed suscipit massa nec libero elementum consectetur. Phasellus nec risus magna. Nullam interdum fringilla purus id consequat.', 'alpha,arceaux,arcade', 1, 1, 14, 'test-alpha-de-article', '2012-10-13 06:34:28', '2012-10-13 06:34:28'),
(29, 12, 'page', 'Test Beta de article2', 'Duis sit amet mi risus. Sed eget quam neque. Curabitur suscipit ornare justo vel pretium.<b> Praesent orci</b> erat, hendrerit bibendum pretium quis, placerat at eros. Curabitur convallis scelerisque neque nec <i>tincidunt</i>. Aliquam ut quam at nulla consectetur hendrerit in et tortor. In nisl libero, hendrerit et egestas at, porttitor quis libero. <b>Mauris convallis</b>, augue sed consectetur malesuada, sapien nibh sodales mauris, vel adipiscing lorem eros ac risus.&nbsp;<div><i>Nullam ac leo sed nulla molestie luctus.</i></div>', 'Suspendisse pretium sollicitudin dui eget porta. Nunc tincidunt aliquet elementum.&nbsp;<div><ul><li>Donec non orci dolor, quis fermentum massa.&nbsp;</li><li>Quisque id magna a nunc ornare iaculis non nec neque.&nbsp;</li><li>In hac habitasse platea dictumst.&nbsp;</li></ul></div><div>Sed suscipit massa nec libero <strike>elementum</strike> consectetur.</div><div>&nbsp;Phasellus nec risus magna. Nullam interdum fringilla purus id consequat.</div>', 'beta,bebe,berceaux,bobos', 1, 1, 41, 'test-beta-de-article2', '2012-10-13 07:15:31', '2012-10-13 06:34:28');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `description` text,
  `slug` varchar(120) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `slug`, `date_created`) VALUES
(12, 'Test Alpha de category', 'Mauris non purus molestie risus volutpat adipiscing id quis est. Suspendisse consequat ullamcorper ullamcorper. Nulla porttitor placerat turpis a egestas. Morbi a eros tempor purus volutpat accumsan non tristique tortor. Suspendisse sapien mauris, accumsan sed aliquet eu, congue quis ligula. Phasellus et eros in ante laoreet luctus. Aliquam erat dui, scelerisque id scelerisque sit amet, consectetur ut neque. Maecenas felis enim, aliquam sed rhoncus vel, porttitor ac lectus. Ut facilisis ipsum vel neque lobortis posuere. Duis condimentum massa et neque commodo sed dapibus sem semper. Curabitur nibh enim, volutpat ac dictum rutrum, consequat quis ipsum. Mauris ac purus dui.\r\n                        Donec eget mi non justo rhoncus aliquam. Suspendisse pretium sollicitudin dui eget porta. Nunc tincidunt aliquet elementum. Donec non orci dolor, quis fermentum massa. Quisque id magna a nunc ornare iaculis non nec neque. In hac habitasse platea dictumst. Sed suscipit massa nec libero elementum consectetur. Phasellus nec risus magna. Nullam interdum fringilla purus id consequat.', 'test-alpha-de-category', '2012-10-13 06:34:28'),
(13, 'Test Beta de category', 'Ullamcorper ullamcorper. Nulla porttitor placerat turpis a egestas. Morbi a eros tempor purus volutpat accumsan non tristique tortor. Suspendisse sapien mauris, accumsan sed aliquet eu, congue quis ligula. Phasellus et eros in ante laoreet luctus. Aliquam erat dui, scelerisque id scelerisque sit amet, consectetur ut neque. Maecenas felis enim, aliquam sed rhoncus vel, porttitor ac lectus. Ut facilisis ipsum vel neque lobortis posuere. Duis condimentum massa et neque commodo sed dapibus sem semper. Curabitur nibh enim, volutpat ac dictum rutrum, consequat quis ipsum. Mauris ac purus dui.\r\n                        Donec eget mi non justo rhoncus aliquam. Suspendisse pretium sollicitudin dui eget porta. Nunc tincidunt aliquet elementum. Donec non orci dolor, quis fermentum massa. Quisque id magna a nunc ornare iaculis non nec neque. In hac habitasse platea dictumst. Sed suscipit massa nec libero elementum consectetur. Phasellus nec risus magna. Nullam interdum fringilla purus id consequat.', 'test-beta-de-category', '2012-10-13 06:34:28');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `email`, `content`, `date_created`) VALUES
(7, 'test@free.fr', 'Nunc tincidunt aliquet elementum. Donec non orci dolor, quis fermentum massa. ', '2012-10-13 06:34:28'),
(8, 'lala@free.fr', 'Praesent orci erat, hendrerit bibendum pretium quis, placerat at eros. Curabitur convallis  ', '2012-10-13 06:34:28');

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
  `legend` varchar(120) DEFAULT NULL,
  `picture` varchar(150) DEFAULT NULL,
  `state` int(11) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=155 ;

--
-- Contenu de la table `medias`
--

INSERT INTO `medias` (`id`, `administrateur_id`, `legend`, `picture`, `state`, `date_created`, `date_updated`) VALUES
(152, 234, 'sqdqsdqsd', NULL, 0, '2012-10-13 08:21:38', '2012-10-13 08:21:38'),
(153, 234, 'fsdfsdf', NULL, 0, '2012-10-13 08:24:02', '2012-10-13 08:24:02'),
(154, 234, 'dssdfds', NULL, 0, '2012-10-13 08:25:29', '2012-10-13 08:25:29');

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
  `other_id` int(11) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6689 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
