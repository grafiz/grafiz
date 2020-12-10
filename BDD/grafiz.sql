-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 07 déc. 2020 à 16:15
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `grafiz`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date_creation` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `pass`) VALUES
(0, 'grafiz', '$2y$10$S9APmgtBkBgiGHnZkrh24.bf/OwE5mOYApgHu/qRf7DSCbV6eZDZu');

-- --------------------------------------------------------

--
-- Structure de la table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `client` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `icon_path` varchar(255) NOT NULL,
  `imgs_path` text NOT NULL,
  `img_show` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `works`
--

INSERT INTO `works` (`id`, `categorie`, `nom`, `client`, `description`, `icon_path`, `imgs_path`, `img_show`) VALUES
(1, 'retouche', 'retouche de portrait', '', 'Utilisation des outils suivant :\r\n- outil fluidité\r\n- <strong class=\'has-text-weight-bold\'>retouche chromatique</strong>\r\n- modes de fusion\r\n- séparation des fréquences\r\n- actions', 'photoshop', 'Retouche/retouche-1.jpg', 'Retouche/retouche-1-show.jpg'),
(2, 'retouche', 'retouche de portrait', '', 'Utilisation des outils suivant :\r\n- outil fluidité\r\n- <strong class=\'has-text-weight-bold\'>retouche chromatique</strong>\r\n- modes de fusion\r\n- séparation des fréquences\r\n- actions', 'photoshop', 'Retouche/retouche-2.jpg', 'Retouche/retouche-2-show.jpg'),
(4, 'Print-Edition', 'catalogue \'MIM\'', '', 'création d\'un logo de mode et de son magazine, ainsi que la carte d\'invitation pour célébrer le lancement de ce dernier.\r\n\r\ntechniques :\r\n- <strong class=\'has-text-weight-bold\'>conception du logo</strong>\r\n- chemin de fer\r\n- style de paragraphes\r\n- gestion des gabarits\r\n- mise en page', 'illustrator, indesign', 'Print-Edition/magazine_de_mode/logo-MIM.png, Print-Edition/magazine_de_mode/catalogue-1.jpg, Print-Edition/magazine_de_mode/catalogue-2.jpg, Print-Edition/magazine_de_mode/catalogue-3.jpg, Print-Edition/magazine_de_mode/catalogue-4.jpg, Print-Edition/magazine_de_mode/catalogue-5.jpg, Print-Edition/magazine_de_mode/catalogue-6.jpg, Print-Edition/magazine_de_mode/catalogue-7.jpg, Print-Edition/magazine_de_mode/carte-invitation.jpg, Print-Edition/magazine_de_mode/catalogue-final.jpg', 'Print-Edition/magazine_de_mode/catalogue-show.jpg'),
(5, 'Print-Edition', 'pochette NWA', '', 'création d\'un disque musical et de sa pochette d\'un groupe de hip-hop américain\r\n\r\ntechniques :\r\n- <strong class=\'has-text-weight-bold\'>vectorisation</strong>\r\n- mise en page', 'illustrator, indesign', 'Print-Edition/NWA1.jpg, Print-Edition/NWA-final.jpg', 'Print-Edition/NWA-show.jpg'),
(6, 'Print-Edition', 'affiche Paris Jazz Festival', 'Mairie de Paris', 'création d\'une affiche pour le Paris Jazz Festival\r\n\r\ntechniques :\r\n- création <em class=\'has-text-weight-bold\'>vectoriel</em>\r\n- mise en page', 'illustrator, indesign', 'Print-Edition/festival-jazz.jpg', 'Print-Edition/festival-jazz-show.jpg'),
(7, 'Print-Edition', 'Michal Batory', '', 'création d\'un magazine sur l\'artiste Michal Batory\r\n\r\ntechniques :\r\n- <strong class=\'has-text-weight-bold\'>mise en page</strong>\r\n- style de paragraphe\r\n- masques', 'indesign', 'Print-Edition/michal_batory/michal-batory-show.jpg, Print-Edition/michal_batory/nouvbatory1.jpg, Print-Edition/michal_batory/nouvbatory2.jpg, Print-Edition/michal_batory/nouvbatory3.jpg, Print-Edition/michal_batory/nouvbatory4.png, Print-Edition/michal_batory/nouvbatory5.jpg', 'Print-Edition/michal_batory/michal-batory-show.jpg'),
(8, 'Print-Edition', 'cartes typographique', '', 'création d\'un jeux de cartes typographique présentant six familles de typographies (humanes, garaldes, didones, mécanes, linéales, incises) avec la représentation de chaque auteur\r\n\r\ntechniques :\r\n- <em class=\'has-text-weight-bold\'>vectorisation</em>\r\n- gestion des gabarits\r\n- mise en page\r\n- style de paragraphe', 'illustrator, indesign', 'Print-Edition/jeux_de_cartes/jeux-de-cartes-1.jpg, Print-Edition/jeux_de_cartes/jeux-de-cartes-2.png, Print-Edition/jeux_de_cartes/jeux-de-cartes-3.jpg, Print-Edition/jeux_de_cartes/jeux-de-cartes-4.jpg', 'Print-Edition/jeux_de_cartes/jeux-de-cartes-2-show.jpg'),
(9, 'Print-Edition', 'Claude monet', '', 'création d\'un magazine sur l\'artiste peintre Claude Monet\r\n\r\ntechniques :\r\n- mise en page\r\n- masque\r\n- grille de ligne de base\r\n- <strong class=\'has-text-weight-bold\'>style de paragraphe</strong>', 'photoshop, indesign', 'Print-Edition/claude-monet/claude-monet-show.gif, Print-Edition/claude-monet/claude-monet-5.jpg, Print-Edition/claude-monet/claude-monet-2.jpg, Print-Edition/claude-monet/claude-monet-3.jpg', 'Print-Edition/claude-monet/claude-monet-show.gif'),
(10, 'Packshot', 'packaging Durex', 'Durex', 'création de plusieurs packagings pour le lancement des nouveaux produits de la marque Durex\r\n\r\ntechniques :\r\n- création <strong class=\'has-text-weight-bold\'>vectorielle</strong>\r\n', 'illustrator', 'Packshot/durex/durex.jpg', 'Packshot/durex/durex-show.gif'),
(11, 'Packshot', 'packaging Faber-Castell', 'Faber-Castell', 'création d\'un packaging pour une annonce presse de la marque Faber-Castell\r\n\r\ntechniques :\r\n- <strong class=\'has-text-weight-bold\'>illustration</strong>\r\n- masque d\'écrêtage\r\n- tracé transparent\r\n- dégradé de couleurs\r\n- outil plume & formes géométriques\r\n- texte <em class=\'has-text-weight-bold\'>curviligne</em>', 'illustrator', 'Packshot/faber-castell.jpg', 'Packshot/faber-castell-show.gif'),
(12, 'Packshot', 'packaging cosmetique Redken', 'Redken', 'création d\'un packaging cosmétique pour la marque Redken\r\n\r\ntechniques :\r\n- <strong class=\'has-text-weight-bold\'>outil filet</strong>\r\n- dégradé de couleurs\r\n- masque', 'illustrator', 'Packshot/redken.jpg', 'Packshot/redken-show.jpg'),
(13, 'Web', 'maquette mobile Grafiz', '', 'création du wireframe et du prototype du site Grafiz\r\n- système de 12 colonnes (frameworks CSS)\r\n- symboles', 'photoshop, adobeXD', 'Web/prototype.jpg', 'Web/prototype-show.jpg'),
(14, 'Illustration', 'Linky joue le jeu', 'Enedis', 'création d\'illustrations pour une application jeux du groupe Enedis dans le but d\'en savoir d\'avantages sur les compteurs linky de manière amusante\r\n\r\ntechniques :\r\n- créations <strong class=\'has-text-weight-bold\'>vectorielles</strong>\r\n- masques\r\n- dégradés de couleurs', 'illustrator', 'Illustration/enedis/enedis-intro.jpg, Illustration/enedis/enedis-show.gif, Illustration/enedis/enedis1.jpg, Illustration/enedis/enedis2.jpg, Illustration/enedis/enedis3.jpg, Illustration/enedis/enedis4.jpg, Illustration/enedis/enedis5.jpg, Illustration/enedis/enedis6.jpg, Illustration/enedis/enedis7.jpg, Illustration/enedis/enedis8.jpg, Illustration/enedis/enedis9.jpg, Illustration/enedis/enedis10.jpg, Illustration/enedis/enedis11.jpg, Illustration/enedis/enedis12.jpg', 'Illustration/enedis/enedis-show.gif'),
(15, 'Illustration', 'cartographie', '', 'création d\'une carte routière \r\n\r\ntechniques :\r\n- masque d\'écrêtage\r\n- <strong class=\'has-text-weight-bold\'>tracé transparent</strong>\r\n- dégradé de couleurs\r\n- outil plume et formes géométriques\r\n- texte curviligne', 'illustrator', 'Illustration/cartographie/cartographie-margin-none.jpg', 'Illustration/cartographie/cartographie-show.jpg'),
(16, 'Illustration', 'Personnages', '', 'Illustration de personnages divers', 'photoshop', 'Illustration/personnages.png', 'Illustration/personnages-show.png'),
(17, 'Illustration', 'storyboard', '', 'storyboard pour la sortie d\'une nouvelle marque d\'éponge\r\n\r\ntechniques :\r\n- dessin traditionnel\r\n- <strong class=\'has-text-weight-bold\'>perspective</strong>', '', 'Illustration/story-board.jpg', 'Illustration/story-board-show.jpg'),
(18, 'Illustration', 'symboles vectorielles', '', 'création de symboles vectorielles \r\n\r\ntechniques :\r\n- dégradés de couleurs\r\n- masques\r\n- <strong class=\'has-text-weight-bold\'>outil filet</strong>\r\n- modes de fusion', 'illustrator', 'Illustration/symboles.jpg', 'Illustration/symboles-show.jpg'),
(19, 'Compositing', 'Compositing Heineken', '', 'photomontage à partir de différents éléments graphiques\r\n\r\ntechniques :\r\n- mode de fusion\r\n- réglages chromatique\r\n- <strong class=\'has-text-weight-bold\'>détourage</strong>', 'photoshop', 'Compositing/beer.jpg', 'Compositing/beer-show.jpg'),
(20, 'Compositing', 'Compositing Ice-tea', '', 'photomontage à partir de différents éléments graphiques\r\n\r\ntechniques :\r\n- mode de fusion\r\n- réglages chromatique\r\n- <strong class=\'has-text-weight-bold\'>détourage</strong>', 'photoshop', 'Compositing/ice-tea/ice-tea-show.gif, Compositing/ice-tea/ice-tea3.jpg', 'Compositing/ice-tea/ice-tea-show.gif'),
(21, 'Compositing', 'Compositing station', '', 'photomontage à partir de différents éléments graphiques\r\n\r\ntechniques :\r\n- mode de fusion\r\n- réglages chromatique\r\n- <em class=\'has-text-weight-bold\'>détourage</em>', 'photoshop', 'Compositing/station/station1.jpg, Compositing/station/station-final.jpg', 'Compositing/station/station-show.jpg'),
(22, 'Compositing', 'Compositing gallerie', '', 'photomontage à partir de différents éléments graphiques\r\n\r\ntechniques :\r\n- mode de fusion\r\n- réglages chromatique\r\n- détourage\r\n- <strong class=\'has-text-weight-bold\'>illustration</strong>', 'photoshop', 'Compositing/gallerie/gallerie-intro.jpg, Compositing/gallerie/gallerie-final3.jpg', 'Compositing/gallerie/gallerie-show.gif'),
(27, 'Branding', 'Boenouvo - identite visuelle', 'Boenouvo', 'Boenouvo est une agence de marketing opérationnel spécialisée dans la promotion de marques innovantes\r\n\r\n- création de la mascotte\r\n- création de la <strong class=\'has-text-weight-bold\'>charte graphique</strong>\r\n- cartes de visites\r\n- <em class=\'has-text-weight-bold\'>covering véhicule</em>\r\n- signature email\r\n- tampon\r\n- affiche', 'illustrator, photoshop, indesign', 'Branding/Boenouvo/covering/covering-show.jpg, Branding/Boenouvo/mascotte/croquis-1.jpg, Branding/Boenouvo/mascotte/croquis-2.jpg, Branding/Boenouvo/mascotte/mascotte-1.jpg, Branding/Boenouvo/mascotte/mascotte-2.jpg, Branding/Boenouvo/brain-juice-1.jpg, Branding/Boenouvo/brain-juice-2.jpg, Branding/Boenouvo/cartes_de_visites/carte-1.jpg, Branding/Boenouvo/cartes_de_visites/carte-2.jpg, Branding/Boenouvo/cartes_de_visites/carte-3.jpg, Branding/Boenouvo/cartes_de_visites/carte-4.jpg, Branding/Boenouvo/cartes_de_visites/carte-final-1.jpg, Branding/Boenouvo/cartes_de_visites/carte-final-2.jpg, Branding/Boenouvo/cartes_de_visites/carte.jpg, Branding/Boenouvo/covering/covering-1.jpg, Branding/Boenouvo/covering/covering-2.jpg, Branding/Boenouvo/tampon/tampon-final.jpg, Branding/Boenouvo/tampon/tampon-final2.jpg, Branding/Boenouvo/signature/signature-1.jpg, Branding/Boenouvo/signature/signature-2.jpg', 'Branding/Boenouvo/covering/covering-show.jpg'),
(30, 'Branding', 'Logotype aide a la personne', '', 'création d\'un logotype dans le domaine du service d\'aide à la personne', 'illustrator', 'Branding/SSR/service-sans-relache.png, Branding/SSR/service-sans-relache3.jpg', 'Branding/SSR/service-sans-relache-show.gif'),
(31, 'Branding', 'tampon Pachamama', 'Pachamama', 'Pachamama une société de commerce de gros (commerce interentreprises) alimentaire non spécialisé\r\n\r\n- création du tampon de l\'enseigne', 'illustrator', 'Branding/Tampon-pachamama1.png, Branding/Tampon-pachamama2.jpg', 'Branding/Tampon-pachamama-show.png'),
(32, 'Affiche', 'Affiche prevention', '', 'création d\'une affiche métaphorique de la conséquence dramatique lié au danger du tabac\r\ntechniques :\r\n- mode de fusion\r\n- filtres\r\n- <strong>illustration</strong>\r\n- compositing', 'photoshop', 'Affiche/affiche-prevention.jpg', 'Affiche/affiche-prevention-show.jpg'),
(33, 'Affiche', 'campagne sante', 'Ministère de la santé - INPES', 'création d\'une campagne publicitaire en teasing sur les conséquences néfaste du tabac. Le but étant d\'attirer l\'attention et la curiosité de l\'audience sur la première affiche pour ensuite révéler l\'objet de la campagne\r\n- <strong class=\'has-text-weight-bold\'>compositing</strong>\r\n- filtres\r\n- mode de fusion', 'photoshop', 'Affiche/campagne-sante.jpg', 'Affiche/campagne-sante-show.jpg'),
(34, 'Affiche', 'Heineken - Open your world ', 'Heineken', 'affiche publicitaire ', 'photoshop', 'Affiche/heineken.jpg', 'Affiche/heineken-show.jpg'),
(35, 'Affiche', 'Mondial du snowboard', 'région Rhône Alpes', '<em>affiche</em> pour le Mondial du SnowBoard ', 'photoshop', 'Affiche/mondial-snowboard.jpg', 'Affiche/mondial-snowboard-show.jpg'),
(36, 'Affiche', 'Violence contre les femmes', '', '<b>affiche</b> pour lutter envers la violence contre les femmes', 'photoshop', 'Affiche/violence/violence-contre-les-femmes.jpg', 'Affiche/violence/violence-contre-les-femmes-show.jpg'),
(37, 'Branding', 'Get Party Only', 'Get Party Only', 'Get Only Party</strong> une agence spécialisée dans la prestation Deejay et la création musicales ainsi que la location de matériels sono\r\n- conception des <strong class=\'has-text-weight-bold\'>Logos</strong>\r\n- cartes de visites', 'illustrator, photoshop', 'Branding/getpartyonly/get-show.gif, Branding/getpartyonly/get2.png, Branding/getpartyonly/get3.jpg, Branding/getpartyonly/get4.jpg, Branding/getpartyonly/get5.png, Branding/getpartyonly/get12.png, Branding/getpartyonly/get13.png, Branding/getpartyonly/get7.jpg, Branding/getpartyonly/get9.gif, Branding/getpartyonly/get10.jpg, Branding/getpartyonly/get11.jpg', 'Branding/getpartyonly/get-show.gif'),
(38, 'Branding', 'L\'Escale', 'L\'Escale', 'restaurant-Bar situé sur Paris\r\n- <strong class=\'has-text-weight-bold\'>création du logo</strong>\r\n- lettrage\r\n- <em class=\'has-text-weight-bold\'>illustration</em>', 'illustrator, photoshop', 'Branding/Lescale/lescale-show3.gif, Branding/Lescale/lescale1.png, Branding/Lescale/lescale2.png, Branding/Lescale/lescale3.jpg, Branding/Lescale/lescale4.jpg, Branding/Lescale/lescale5.png, Branding/Lescale/lescale6.jpg, Branding/Lescale/lescale7.jpg, Branding/Lescale/lescale8.jpg, Branding/Lescale/lescale9.jpg, Branding/Lescale/lescale10.jpg', 'Branding/Lescale/lescale-show3.gif'),
(39, 'Branding', 'Back & Fils', 'Back & Fils', '<b>Back et Fils</b> est une société de transports terrestres et transport par conduites\r\n- création du logo\r\n- illustration\r\n- <strong class=\'has-text-weight-bold\'>covering</strong>', 'illustrator', 'Branding/Back&fils/back1.jpg, Branding/Back&fils/back2.png, Branding/Back&fils/back3.png, Branding/Back&fils/back4-1.jpg, Branding/Back&fils/back5.jpg, Branding/Back&fils/back6.jpg', 'Branding/Back&fils/back1.jpg'),
(40, 'Branding', 'Just B natur', 'Just B natur', '<b>Just B natur</b> est une société spécialisée dans la vente e-commerce de produits cosmétiques bio et naturels\r\n- conception du <strong class=\'has-text-weight-bold\'>logotype</strong>\r\n- <em class=\'has-text-weight-bold\'>illustration</em>\r\n- vectorisation', 'illustrator', 'Branding/justBnatur/justB-show.gif, Branding/justBnatur/justB-0.png, Branding/justBnatur/justB-1.png, Branding/justBnatur/justB-2.png, Branding/justBnatur/justB-3.png, Branding/justBnatur/justB-4.png, Branding/justBnatur/justB-6.jpg', 'Branding/justBnatur/justB-show.gif'),
(41, 'Typographie', 'Lettrage', '', '- Photoshop\r\n- Lettrage\r\n- illustration\r\n- effets', 'Photoshop', 'Typographie/talent/typo-show.jpg, Typographie/talent/typo-1.jpg, Typographie/talent/typo-2.jpg', 'Typographie/talent/typo-show.gif'),
(42, 'Typographie', 'Lettrage', 'MacMo', 'création d\'un lettrage pour un artiste musical\r\n- illustrator\r\n- calligraphie\r\n', 'illustrator', 'Typographie/macMo/macMo-show.png, Typographie/macMo/macMo-1.gif, Typographie/macMo/macMo-3.png', 'Typographie/macMo/macMo-show.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
