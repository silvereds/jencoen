-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 30 juil. 2019 à 15:55
-- Version du serveur :  10.1.24-MariaDB
-- Version de PHP :  7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `electronic`
--

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `blog_title` text NOT NULL,
  `blog_body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`id_blog`, `id_prod`, `blog_title`, `blog_body`) VALUES
(8, 14, 'blog title', '<b>'),
(9, 16, 'blog title', '<b>');

-- --------------------------------------------------------

--
-- Structure de la table `cathegorie`
--

CREATE TABLE `cathegorie` (
  `id_cath` int(10) NOT NULL,
  `nom_cath` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cathegorie`
--

INSERT INTO `cathegorie` (`id_cath`, `nom_cath`, `description`) VALUES
(42, 'Appareils Numeriques', 'module des appareils electroniques de la firme'),
(43, 'vestimentaire', ''),
(44, 'nutrition', 'nutrition  ici la stock destinÃ© Ã  lq nutrition');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id_client` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `nom_prenom` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `id_ville` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id_client`, `pseudo`, `email`, `pwd`, `nom_prenom`, `telephone`, `id_ville`, `adresse`) VALUES
(1, 'silvere', 'tchofsilvere@gmail.com', 'ce1bd8a664d0e6557f9b8037030619e5661a6eb6', 'tchoffo djousse', '699197658', 3, 'afam mabÃ©');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_com` int(11) NOT NULL,
  `ids_articles` varchar(255) NOT NULL,
  `order_note` varchar(255) NOT NULL,
  `other_adresse` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_com`, `ids_articles`, `order_note`, `other_adresse`) VALUES
(1, '14.1', 'ma commande doit etre livre au plus tard samedi', 0),
(2, '20.1', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `com_client`
--

CREATE TABLE `com_client` (
  `id_client` int(10) UNSIGNED NOT NULL,
  `id_com` int(10) UNSIGNED NOT NULL,
  `date_com` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `com_client`
--

INSERT INTO `com_client` (`id_client`, `id_com`, `date_com`) VALUES
(1, 1, '2019-07-25'),
(1, 2, '2019-07-25');

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `id_facture` int(11) NOT NULL,
  `id_mode` int(11) NOT NULL,
  `montant_total` double NOT NULL,
  `id_com` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `facture`
--

INSERT INTO `facture` (`id_facture`, `id_mode`, `montant_total`, `id_com`) VALUES
(1, 2, 20293.75, 1),
(2, 2, 26725, 2);

-- --------------------------------------------------------

--
-- Structure de la table `message_user`
--

CREATE TABLE `message_user` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `objet` text NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `mode`
--

CREATE TABLE `mode` (
  `id_mode` int(10) UNSIGNED NOT NULL,
  `mode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mode`
--

INSERT INTO `mode` (`id_mode`, `mode`) VALUES
(0, 'Orange Monney'),
(1, 'Mtn Mobile Monney'),
(2, 'PAYEMENT A DOMICILE');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_prod` int(10) UNSIGNED NOT NULL,
  `id_cath` int(10) UNSIGNED NOT NULL,
  `nom_prod` varchar(255) NOT NULL,
  `prix_HT` double NOT NULL,
  `qte` int(11) NOT NULL,
  `fichier_media` varchar(255) NOT NULL,
  `descriptions` text NOT NULL,
  `im1` varchar(255) NOT NULL,
  `im2` varchar(255) NOT NULL,
  `im3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table produit';

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_prod`, `id_cath`, `nom_prod`, `prix_HT`, `qte`, `fichier_media`, `descriptions`, `im1`, `im2`, `im3`) VALUES
(12, 42, 'yashika', 70000, 5, 'banner_slider5.jpg', 'yashika l\'appareil photo 3d de pointe avec des prises d\'image de hautes dÃ©finitions', '', '', ''),
(13, 42, 'samsung pc', 24500, 2, 'banner_slider2.jpg', 'samsung pc haute definition', '', '', ''),
(14, 42, 'ecran plat HD', 18375, 7, 'img2021.jpg', 'Ecran plat loren ipsun dollorEcran plat loren ipsun dollorEcran plat loren ipsun dollorEcran plat loren ipsun dollorEcran plat loren ipsun dollor', '', '', ''),
(15, 42, 'telephone itel 1505', 24500, 5, 'banner_02.jpg', 'telephone itel 15005 loren ipsun dolor oren ipsun dolor oren ipsun dolor\r\noren ipsun dolor oren ipsun dolor oren ipsun dolor oren ipsun dolor oren ipsun dolor oren ipsun dolor', '', '', ''),
(17, 42, 'toshiba', 24500, 5, 'img2067.jpg', 'toshiba toshiba loren ipsun dollor loren ipsun dollor loren ipsun dollor \r\nloren ipsun dollor loren ipsun dollor loren ipsun dollor loren ipsun dollor loren ipsun dollor loren ipsun dollor loren ipsun dollor loren ipsun dollor\r\nloren ipsun dollor loren ipsun dollor loren ipsun dollor', '', '', ''),
(20, 43, 't-shirt', 24500, 5, '8.jpg', 't-shirt loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum \r\nloren ipsum\r\nloren ipsum', '', '', ''),
(21, 43, 'par -dessus', 20825, 5, '4.jpg', 'par dessus  loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum \r\nloren ipsum\r\nloren ipsum', '', '', ''),
(27, 43, 'ranger\'s', 8400, 5, 'prod.jpg', 'sdsdsdsdsdsdsdsdsdsdsd\r\nkhyjhjhdf\r\nfkkjdkjfkdfd', 'prod-2.jpg', 'prod-3.jpg', 'prod-4.jpg'),
(28, 43, 'pull', 4000, 3, '13.jpg', 'pull loren ipsun ', '12.jpg', '14.jpg', '15.jpg'),
(29, 44, 'hamburger', 2000, 4, 'img2042.jpg', 'hambuger loren ipsun dollor', 'img2040.jpg', 'img20149.jpg', 'img20150.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `prod_com`
--

CREATE TABLE `prod_com` (
  `id_prod` int(10) UNSIGNED NOT NULL,
  `id_com` int(10) UNSIGNED NOT NULL,
  `prix_u` double NOT NULL,
  `qte` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE `promotion` (
  `id_prod` int(11) NOT NULL,
  `taux` float NOT NULL,
  `ancien_prix` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id_prod`, `taux`, `ancien_prix`) VALUES
(12, 50, 140000),
(14, 25, 24500),
(27, 30, 12000),
(21, 15, 24500);

-- --------------------------------------------------------

--
-- Structure de la table `quartier`
--

CREATE TABLE `quartier` (
  `id_quartier` int(11) NOT NULL,
  `id_ville` int(11) NOT NULL,
  `nom_quartier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `quartier`
--

INSERT INTO `quartier` (`id_quartier`, `id_ville`, `nom_quartier`) VALUES
(1, 1, 'bastos');

-- --------------------------------------------------------

--
-- Structure de la table `review`
--

CREATE TABLE `review` (
  `id_prod` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avis` text NOT NULL,
  `date_avis` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `review`
--

INSERT INTO `review` (`id_prod`, `nom`, `email`, `avis`, `date_avis`) VALUES
(17, 'silvere', 'tchofsilvere@gmail.com', 'diminuer in peu', '2019-07-08'),
(17, 'silvere', 'tchofsilvere@gmail.com', 'trop chere', '2019-07-08'),
(17, 'silvere', 'tchofsilvere@gmail.com', 'trop cool', '2019-07-08'),
(12, 'gunter', 'gunter@yaho.fr', 'loren ipsun dollors loren ipsun dollors  loren ipsun dollors  loren ipsun dollors  loren ipsun dollors  loren ipsun dollors  loren ipsun dollors  loren ipsun dollors  loren ipsun dollors  loren ipsun dollors  loren ipsun dollors  loren ipsun dollors', '2019-07-08'),
(12, 'gunter', 'gunter@yaho.fr', 'tres mignon cet article', '2019-07-08'),
(13, 'gunter', 'zaaguegunter@yahoo.com', 'prix trop moin cher', '2019-07-08'),
(13, 'silvere', 'tchofsilvere@gmail.com', 'votre produit est chere', '2019-07-11'),
(14, 'siewe wembapou', 'siewe@gmail.com', 'cette article je peut trouver le vert', '2019-07-21'),
(14, 'gunter', 'gunter@yaho.fr', 'sdsdsdsd', '2019-07-21'),
(14, 'gunter', 'gunter@yaho.fr', 'sdsdsds', '2019-07-21'),
(14, 'silvere', 'tchofsilvere@gmail.com', 'non tu ments', '2019-07-21'),
(13, 'silverds', 'silvereds@yaho.fr', 'je cherche la version ameliorer de ce produit', '2019-07-21'),
(20, 'silvere', 'siewe@gmail.com', 'bonjour ici', '2019-07-22'),
(14, 'carine', 'carine@gmail.com', 'waouh', '2019-07-23'),
(17, 'carine', 'carine@gmail.com', 'bonjour', '2019-07-24');

-- --------------------------------------------------------

--
-- Structure de la table `secondadresse`
--

CREATE TABLE `secondadresse` (
  `id_client` int(11) NOT NULL,
  `NomClient` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `adresseClient` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tabledesadmin`
--

CREATE TABLE `tabledesadmin` (
  `id_ville` int(11) NOT NULL,
  `nom_directeur` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `telephone` bigint(20) NOT NULL,
  `login_admin` varchar(255) NOT NULL DEFAULT 'silvere',
  `id_admin` int(11) NOT NULL,
  `description_firme` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tabledesadmin`
--

INSERT INTO `tabledesadmin` (`id_ville`, `nom_directeur`, `pwd`, `telephone`, `login_admin`, `id_admin`, `description_firme`) VALUES
(2, 'gunter', '9a83071608ea670babc6022ae6ee57bc', 658987845, 'gunter zaague', 3, ''),
(5, 'tchoffo', 'ce1bd8a664d0e6557f9b8037030619e5661a6eb6', 653593448, 'silvere djousse', 6, '');

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE `villes` (
  `id_ville` int(11) NOT NULL,
  `nom_ville` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `villes`
--

INSERT INTO `villes` (`id_ville`, `nom_ville`) VALUES
(1, 'yaounde'),
(2, 'douala'),
(3, 'kribi'),
(5, 'dschang'),
(6, 'baffoussam'),
(7, 'buea'),
(8, 'maroua'),
(9, 'ngaoundÃ©rÃ©'),
(10, 'bertoua'),
(11, 'bamenda');

-- --------------------------------------------------------

--
-- Structure de la table `wishlist`
--

CREATE TABLE `wishlist` (
  `id_client` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Index pour la table `cathegorie`
--
ALTER TABLE `cathegorie`
  ADD KEY `id_cath` (`id_cath`),
  ADD KEY `id_cath_2` (`id_cath`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_com`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`id_facture`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_prod`);

--
-- Index pour la table `prod_com`
--
ALTER TABLE `prod_com`
  ADD PRIMARY KEY (`id_prod`);

--
-- Index pour la table `quartier`
--
ALTER TABLE `quartier`
  ADD PRIMARY KEY (`id_quartier`);

--
-- Index pour la table `tabledesadmin`
--
ALTER TABLE `tabledesadmin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`id_ville`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `cathegorie`
--
ALTER TABLE `cathegorie`
  MODIFY `id_cath` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_com` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `id_facture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_prod` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT pour la table `quartier`
--
ALTER TABLE `quartier`
  MODIFY `id_quartier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `tabledesadmin`
--
ALTER TABLE `tabledesadmin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `villes`
--
ALTER TABLE `villes`
  MODIFY `id_ville` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
