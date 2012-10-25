-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 25 Octobre 2012 à 22:28
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=241 ;

--
-- Contenu de la table `administrateurs`
--

INSERT INTO `administrateurs` (`id`, `administrateurs_id`, `firstname`, `lastname`, `picture`, `description`, `email`, `dob`, `adresse`, `ville`, `zipcode`, `tel`, `password`, `optin`, `ip`, `salt`, `token`, `updated_at`, `created_at`, `date_auth`, `enabled`, `accountNonLocked`, `accountNonExpired`, `slug`) VALUES
(233, 0, 'Julien', 'Boyer', NULL, NULL, 'symfomany@gmail.com', NULL, NULL, NULL, NULL, NULL, 'DoyyGmiLMlnw9r7KO/JHQFmEDTzVRsRKzJ3X0OeWe1QPjeP735IlUZycs0+OwE+gL/TLH8+XUR9svryMJfWZ4Q==', NULL, NULL, '496b112bde33b80a32cad8b9fcfef304', 'ceab71bcfe835a167a947afd7b81a8c70e8a1fbc', '2012-10-13 06:34:28', '2012-10-13 06:34:28', NULL, 1, 1, 1, 'boyer'),
(234, 0, 'Julien', 'Boyer', NULL, 'test alpha', 'jboyer@gmail.com', '1990-09-06', '69 Avenue Victor Hugo', 'Neuilly-sur-Seine', 93360, '0474272459', 'nSJJZuLZd4+t5/lISIFQskAZMbZuX39Pz2rVVNB+d+8jQVofpDzyF6DcBMduKe9hTzYGkl/AWpmhCHYMdSogIQ==', NULL, NULL, '4802ae2149fa47fdf902160f63398b3c', '1d0d09257d121befa9c7154c19e624eebb600d0d', '2012-10-15 17:20:33', '2012-10-13 06:34:28', NULL, 1, 1, 1, 'boyer-1'),
(240, 0, 'Florent', 'Boybo', NULL, 'testi', 'flo@yahoo.fr', NULL, NULL, NULL, NULL, NULL, 'wb+hr84N7S8FJlTRb2Rqyg7DfEEXzp34unagIx5Cfoi13ucf2UBxI3T4gUkCxcHquD3TfbTq3MXbFPL37HjUKg==', NULL, NULL, '4cb9b4ec40568c19ecd96e67942dd2be', 'b4917a20fcb4af6e70449ce66f4616902a9e4cc76dd82ad933', '2012-10-25 16:00:50', '2012-10-25 16:00:50', NULL, 1, 1, 1, 'boybo');

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
  `active` tinyint(1) DEFAULT NULL,
  `special` tinyint(4) DEFAULT NULL,
  `notes` int(11) DEFAULT NULL,
  `image_name` varchar(255) NOT NULL,
  `position` int(11) DEFAULT NULL,
  `slug` varchar(120) DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `type`, `title`, `resume`, `content`, `tag`, `active`, `special`, `notes`, `image_name`, `position`, `slug`, `date_updated`, `date_created`) VALUES
(1, 1, NULL, 'Test A', 'Test ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest A', 'Test ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest ATest <br><h1>Ici le titre</h1>ATest ATest ATest ATest ATest A', NULL, 1, NULL, 15, '', 1, 'test-a', '2012-10-25 13:45:50', '2012-10-18 19:37:16'),
(3, NULL, NULL, 'sdfsdf', 'dsfsdfds', 'fsdfsdfds', NULL, 1, NULL, 21, '', 2, 'sdfsdf', '2012-10-25 13:45:50', '2012-10-18 22:01:11'),
(5, NULL, NULL, 'Test Alpha', 'Étant donné que Symfony2 et tous les bundles tiers configurent et récupèrent leurs services via le conteneur, vous pouvez facilement y accéder, ou même les utiliser dans vos propres services. Pour garder les choses simples, par défaut Symfony2 n''exige pas que les contrôleurs soient définis comme des services. Par ailleurs Symfony2 injecte l''ensemble du conteneur de services dans votre contrôleur. Par exemple, pour gérer le stockage des informations sur une session utilisateur, Symfony2 fournit un service&nbsp;session, auquel vous pouvez accéder de l''intérieur d''un contrôleur standard comme suit :', 'Adding context to the&nbsp;service container&nbsp;allows you to pass the current user or organization as dependencies to objects requiring a context in order to function. This post aims to show the ease of contextualizing your website with the Symfony2 Service Container, and will demonstrate how to:<ul><li>add context to the container</li><li>switch context for admin users</li><li>reference context in twig templates</li><li>implement context security</li></ul>', NULL, NULL, NULL, 22, '', 0, 'test-alpha', '2012-10-25 13:45:50', '2012-10-21 15:49:31'),
(6, NULL, NULL, 'Test Zedla', '<b>Symfony </b>ne fournissant pas cette fonction dans son framework, je vais vous montrer sa mise en place avec un listener. J’ai pour habitude d’avoir dans mes développements, un bundle Core qui me permet de centraliser les choses du mon projet.', 'Symfony ne fournissant pas cette fonction dans son framework, je vais vous montrer sa mise en place avec un listener. J’ai pour habitude d’avoir dans mes développements, un bundle Core qui me permet de centraliser les choses du mon projet.Nous allons commencer par définir un paramètre dans notre arbre de configuration. Cela nous permettra de le renseigner ensuite dans notre fichier config.yml se trouvant dans le dossier app/config. Voici le code se trouvant dans le fichier CoreBundle/DependencyInjection/configuration.php', NULL, NULL, NULL, 11, '', 2, 'test-zedla', '2012-10-25 11:55:53', '2012-10-21 15:54:19');

-- --------------------------------------------------------

--
-- Structure de la table `articles_categories`
--

CREATE TABLE IF NOT EXISTS `articles_categories` (
  `articles_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `position` int(11) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` text,
  `slug` varchar(120) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `lft`, `rgt`, `root`, `parent_id`, `lvl`, `position`, `title`, `description`, `slug`, `date_created`) VALUES
(1, 1, 8, 1, NULL, 0, NULL, 'fghfghfgh', 'gfhfghfgh', 'fghfghfgh', '2012-10-25 23:20:26'),
(2, 2, 7, 1, 1, 1, NULL, 'fghgfhfg', 'hfghf', 'fghgfhfg', '2012-10-25 23:20:43'),
(3, 3, 4, 1, 2, 2, NULL, 'rtyrty', 'rtyrutyrtyrty', 'rtyrty', '2012-10-25 23:20:57'),
(4, 1, 2, 4, NULL, 0, NULL, 'dfgdf', 'dfgdfgfdg', 'dfgdf', '2012-10-25 23:21:09'),
(5, 5, 6, 1, 2, 2, NULL, 'dfgdfgdf', 'gdfgdfgf', 'dfgdfgdf', '2012-10-25 23:21:25');

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
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `root` int(11) DEFAULT NULL,
  `lvl` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `position` int(11) NOT NULL,
  `link` varchar(250) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `description` text,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `links`
--

INSERT INTO `links` (`id`, `lft`, `rgt`, `title`, `root`, `lvl`, `parent_id`, `position`, `link`, `active`, `description`, `date_created`) VALUES
(21, 1, 4, 'sfddf', 21, 0, NULL, 0, 'http://www.free.fr', 1, 'fsdfdsffd', '2012-10-25 23:58:51'),
(22, 2, 3, 'zerzerzer', 21, 1, 21, 0, 'http://www.google.fr', 1, 'ertertretzrtretr', '2012-10-25 23:59:15');

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

CREATE TABLE IF NOT EXISTS `medias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `administrateur_id` int(11) NOT NULL,
  `article_id` int(11) DEFAULT NULL,
  `legend` varchar(120) DEFAULT NULL,
  `description` text NOT NULL,
  `picture` varchar(150) DEFAULT NULL,
  `extension` varchar(60) NOT NULL,
  `state` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `administrateurs_id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `message` text,
  `active` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `administrateurs_id` (`administrateurs_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `notifications`
--

INSERT INTO `notifications` (`id`, `administrateurs_id`, `title`, `message`, `active`, `date_created`) VALUES
(1, 233, 'sdfsdfs sdfsdf', 'gdf gdf<b>gdfg dbf</b>fdg', NULL, '2012-10-25 12:26:00'),
(2, 233, 'sdfsdfs dsdf dsf', 'ohbhr u riyrth igiugi hiugigfh &nbsp;dgoijofog<b>joif</b>dj goif', NULL, '2012-10-25 12:27:00'),
(3, 233, '', '&nbsp;tyry r try rty hhgiig hihig<b>hihif </b>hi', NULL, '2012-10-25 07:30:00'),
(4, 233, '', 'fd gdf<b>gd</b>fg fdgdf gdfgfdg fdg', NULL, '2012-10-25 13:45:00');

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
(1, 'ezerzerez', '<b>Lorem ipsum</b> dolor sit amet, consectetur adipiscing elit. Cras nulla nunc, adipiscing sed dictum nec, congue adipiscing libero. Cras euismod lobortis lectus, ornare pulvinar arcu scelerisque in. Vestibulum pretium arcu ultricies eros interdum commodo.&nbsp;<i>Pellentesque nec purus in erat malesuada sollicitudin at et mauris. Nunc adipiscing, nulla venenatis tristique viverra, risus lectus tristique libero, eget ornare massa felis viverra velit.&nbsp;</i>', '<span>Sed dolor eros, <b>elementum vel semper </b>non, luctus et leo. Ut neque quam, pharetra id condimentum ac, vehicula quis ante. Maecenas sed nulla a nisi molestie tristique. Nunc id lorem odio, ac rhoncus nunc. <b>Proin et mi ac urna commodo dictum sit amet iaculis</b> ante. Praesent porta quam at dui pellentesque ultrices. Donec id elit vitae arcu convallis pellentesque sit amet nec magna. Maecenas commodo felis sed nibh tincidunt eget dignissim metus sagittis. Duis dignissim volutpat luctus. <i>Fusce quam odio,</i> scelerisque vitae facilisis eu, aliquam ut metus. Ut non velit turpis, vitae porttitor dolor. Pellentesque euismod neque vel purus interdum lacinia. Fusce eget adipiscing ipsum. Nunc vitae scelerisque dui.</span><span>Curabitur a suscipit magna. <b>Fusce sit amet lectus</b> in enim condimentum ullamcorper at at dui. Donec congue felis ac nulla consectetur aliquam.&nbsp;</span>Suspendisse rhoncus mauris porta quam pulvinar egestas.&nbsp;Suspendisse potenti. Donec tellus augue, mollis ut lacinia quis, tincidunt vitae erat. Nunc ac molestie leo. Maecenas sem nisi, placerat non commodo quis, faucibus in odio. Pellentesque sed felis metus. Mauris venenatis metus in purus mollis ut convallis augue vulputate. Proin molestie lobortis gravida. Sed et est euismod risus convallis pretium.', 'Bleu, Blanc', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `parametres`
--

CREATE TABLE IF NOT EXISTS `parametres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_site` varchar(120) DEFAULT NULL,
  `url_site` varchar(120) DEFAULT NULL,
  `immatriculation` varchar(120) NOT NULL,
  `description_site` text NOT NULL,
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

INSERT INTO `parametres` (`id`, `nom_site`, `url_site`, `immatriculation`, `description_site`, `administrateurs_id`, `nom_admin`, `email_admin`, `adresse_admin`, `ville_admin`, `cp_admin`, `tel_admin`, `port_admin`) VALUES
(2, 'Blog Alpha', 'http://www.julien.ju', '054-586-988', 'retre<b>tret </b>khh &nbsp;<i>jkhjk &nbsp;</i>hfghf<b>ghfg</b>h hfjjgfh fghfghgfhg hgfh', NULL, 'Boyer', 'jboyer@gmail.com', '69 avenue victor hugo', 'Neuilly-Plaisance', '93600', '0145281368', '0674585648');

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
