-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Jeu 15 Décembre 2016 à 11:44
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `baseV1`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id_admin` int(11) NOT NULL,
  `pseudo_admin` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password_admin` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `nom_categorie` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom_categorie`) VALUES
(1, 'nintendo'),
(2, 'sega'),
(3, 'atari'),
(4, 'sony'),
(5, 'microsoft');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom_client` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prenom_client` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `civilite_client` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `adresse_client` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cp_client` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `ville_client` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `tel_client` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mail_client` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pseudo_client` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password_client` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commander`
--

CREATE TABLE `commander` (
  `qt` int(11) NOT NULL,
  `date_com` date NOT NULL,
  `id_produit` int(11) NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `design_produit` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `descrip_produit` text COLLATE utf8_unicode_ci NOT NULL,
  `prix_produit` decimal(11,0) NOT NULL,
  `stock_produit` int(11) NOT NULL,
  `img_produit` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_scategorie` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `design_produit`, `descrip_produit`, `prix_produit`, `stock_produit`, `img_produit`, `id_scategorie`, `id_categorie`) VALUES
(1, 'NES', 'Sortie en France en 1987, La NES est l''adaptation de la Famicom japonaise. Console 8-bit avec cartouche, elle permet alors de redonner une dynamique à l''industrie du jeu vidéo. La console voit également naître les premiers épisodes de séries mythiques comme Mario et Zelda qui contribuent grandement à son succès. Elle devient en 1990 la console la plus populaire de l''histoire du jeu vidéo.\r\n', '60', 4, 'NES_2.jpg', 1, 1),
(2, 'Super nintendo', 'Pour rivaliser avec la populaire Nintendo Entertainment System / Famicom, NEC lance la PC-Engine en 1987, et Sega suit avec sa Megadrive en 1988. Les deux systèmes offrent des graphismes améliorés, ainsi qu''un son dépassant la 8-bit de Nintendo.\r\n', '129', 3, 'supernintendo-2.jpg', 1, 1),
(3, 'Game boy GB/GBC', 'C''est Gunpei Yokoi, employé de Nintendo, qui créa cette console à la puissance comparable à celle de la NES (Famicom au Japon) mais avec un écran monochrome, ceci afin de pouvoir vendre la console à bas prix.\r\nCette console reprend le principe de la machine Microvision de 1979, conçue par Jay Smith, une machine portable avec un écran de pixels (contrairement aux Game and Watch de Gunpei Yokoi, qui utilisaient des dessins prédéfinis), et des cartouches pour les différents jeux (pas de cartouches pour les Game and Watch).\r\n', '29', 10, 'Game_Boy_Color-2.jpg', 1, 1),
(4, 'Game boy advance', 'La Game Boy Advance sort le 22 Juin 2001 en France. Pour la petite anecdote, nous devons l’originalité de cette console à un designer français, Gwenaël Nicolas, qui lui a donné une apparence de tête de panda en travaillant notamment sur les courbes de l’objet : Nintendo était en recherche d’un design surprenant et novateur. A sa sortie, son processeur 32 bits l’a hissée au rang de la console portable la plus performante! \r\nPour ne rien gâcher, son autonomie est excellente : elle tient jusqu’à 10h! Elle est l’une des consoles les plus prisées par les retro gamers car on y retrouve les grands classiques de la Super Nes. Après 7 ans de vie, la Game Boy Advance passe le flambeau à la Nintendo DS en 2005.\r\n', '69', 8, 'Game_Boy_Advance-2.jpg', 1, 1),
(5, 'Nintendo 64', 'C''est en 1996 que sort en France la Nintendo 64. La console est en fait la réponse de Nintendo face à la Saturn de Sega et au succès colossale de la Playstation. Sortie bien longtemps après ses deux concurrentes, la console ne mise plus sur le 32-bit pour rivaliser mais bien 64-bit. En plus de l''absence de temps de chargement, la console comporte des titres de référence comme Goldeneye ou encore Super Mario 64, qui porte la mascotte pour la première fois en 3D dans un épisode devenu culte.\r\n', '199', 3, 'nintendo_64.jpg', 1, 1),
(6, 'Gamecube', 'C''est en 2002 que sort en France la Nintendo Gamecube. Célèbre pour son design compact en forme de cube, la console, très attendue, rivalise dès sa sortie avec la Playstation 2 de Sony et la Xbox de Microsoft. Avec de nombreux titres exclusifs comme Rogue Squadron, Zelda ou encore Resident Evil, la Gamecube se dote rapidement d''un catalogue de qualité grâce à des adaptations plus réussies les unes que les autres. A l''époque, la console semble avoir un niveau jamais atteint en termes de graphismes, à tel point que nombre de joueurs se font surprendre en confondant le gameplay avec les cinématiques des jeux.\r\n', '89', 8, 'gamecube2-.jpg', 1, 1),
(7, 'Master system', 'Sortie en 1987, Sega tente avec la Master System de concurrencer Nintendo et sa NES. Console 8 bit avec pour effigie le héros Alex Kidd, la console ne s''est vendu quasiment qu''en Europe et au Japon. Elle reste néanmoins la console qui a ouvert les hostilités avec Nintendo dans le coeur de tous les fans de Sega.\r\n', '40', 15, 'mastersystem.png', 1, 2),
(8, 'Mega drive', 'Sortie en France en 1990, la Megadrive de Sega est une des premières consoles 16 bit de sa génération. A l''époque, Sega frappe un grand coup car sa console sort un an avant la Super Nintendo avec une toute nouvelle mascotte qui enverra Alex Kidd à la retraite : Le hérisson Sonic. Avec la beauté de ses graphismes et la vitesse du jeu Sonic, la Megadrive fait l''effet d''une bombe qui relancera alors le duel entre Sega et Nintendo.\r\n', '55', 6, 'megadrive.png', 1, 2),
(9, '32X', 'Le 32X est une extension de la Megadrive, console de jeu vidéo de quatrième génération du constructeur japonais Sega.\r\n', '10', 2, 'sega-32x.jpg', 1, 2),
(10, 'Saturn', 'La Sega Saturn débarque sur le marché européen en juillet 1995 avec 5 jeux. Parmi eux, Virtua Fighter, le premier jeu de combat en 3D à investir les consoles de salon. En concurrence directe avec la première Playstation, la Sega Saturn se distingue par la qualité de son rendu sonore et sa gestion de la 2D. Elle a aussi de bonnes capacités côté 3D. La Playstation offre déjà une vingtaine de jeux à son lancement, seulement un mois après la date de sortie de la Sega Saturn...C’est en 1997 que prendra fin le duel entre les deux consoles avec le lancement par Sony du remarquable Final Fantasy VII sur Playstation. Sony aura sa revanche avec la célèbre Dreamcast dès 1999.\r\n', '59', 4, 'Sega-Saturn.png', 1, 2),
(11, 'Dreamcast', 'Après avoir essuyé quelques plâtres avec la Saturn, Sega sort sa Dreamcast en Europe le 14 octobre 1999. Elle équipée d’un modem assez puissant pour offrir aux joueurs la possibilité de naviguer sur internet et, plus important encore, de jouer en réseau. Malheureusement, le nombre de jeux dont le gameplay est élaboré en prenant en compte cette technologie est à l’époque très restreint ; il est cependant indéniable que Sega a ouvert le chemin aux jeux de rôles en ligne et a considérablement contribué à l’évolution du paysage du jeu vidéo. Les amateurs saluent la qualité de la Dreamcast dont le prix d’acquisition était trois fois moins élevé que celui de la Playstation 2.\r\n', '69', 6, 'Sega-Dreamcast.jpg', 1, 2),
(12, 'Game gear', 'Conçue pour concurrencer la Game Boy, la Sega Game Gear arrive sur le marché français en juin 1991. D’un point de vue marketing, la firme Sega se montre offensive avec le slogan "Si vous jouez encore sur Game Boy, il est temps de grandir !".\r\n\r\nSouvent décrite comme une Master System portable, elle était compatible avec les jeux de sa grande sœur grâce à un adaptateur. Ses acquéreurs avaient donc un large choix en matière de jeux. Malgré cet avantage considérable, son principal atout se situe ailleurs : elle dispose d’un écran couleur, au contraire de la Game Boy.\r\n', '90', 9, 'gamegear.png', 1, 2),
(13, 'Playstation', 'Sortie en France en 1995, la Playstation de Sony vient bousculer les 2 géants Nintendo et Sega avec sa nouvelle technologie 32 bit et un nouveau concept qui va quelque peu modifier la physionomie des jeux vidéos à venir : la carte mémoire.\r\n', '50', 2, 'playstation1.jpg', 1, 4),
(14, 'Playstation 2', 'Sortie en 2000, la Playstation 2 est avec 150 millions d''exemplaires la console la plus vendue de l''histoire du jeu vidéo. un succès qui portera malheureusement un coup fatal à SEGA sur le marché des consoles, dont la Dreamcast sortait quelques mois avant. Le lecteur DVD de la Playstation 2 n''y aura sans doute pas été pour rien.\r\nLa PlayStation 2 abrégé officiellement PS2 est une console de jeux vidéo de sixième génération commercialisée par Sony Computer Entertainment, filiale de Sony. Elle est sortie le 4 mars 2000 au Japon, le 26 octobre 2000 en Amérique du Nord et le 24 novembre 2000 en Europe.', '30', 5, 'PlayStation2.png', 1, 4),
(15, 'Atari 2600', 'commercialisée en France de 1981 à 1991.\r\nElle fut la seconde console de salon à sortir en France, après la Vidéopac de Philipps; Quelques hits qui firent son succès comme Space Invader, Pac-Man, Adventure…\r\n', '150', 3, 'atari2600.jpg', 1, 3),
(16, 'Atari 7800', 'commercialisée en France de 1986 à 1992.\r\nPensez à vous procurer un câble d''alimentation si vous n''en possédez pas déjà un.\r\nCette console était le premier système de jeu d''Atari conçu par une société extérieure.\r\n', '280', 1, 'Atari-7800.jpg', 1, 3),
(17, 'Atari lynx', 'L''Atari Lynx fut la seule console portable d''Atari et la première portable avec un écran LCD couleur. Elle sortit en 1989, la même année que la Game Boy (monochrome) de Nintendo.\r\n', '60', 10, 'atarilynx.jpg', 1, 3),
(18, 'Xbox', 'Sortie en 2001 aux Etats-unis et en 2002 en Europe, la Xbox marque l''avènement d''un nouvel acteur incontournable du jeu vidéo : Microsoft. La console Xbox est malgré la domination de Sony un grand succès avec 24 millions de consoles à travers le monde. Elle est équipée d''un véritable système d''exploitation, d''un disque dur ainsi que d''une carte réseau ethernet qui avec le service Xbox live offrait la capacité de jouer en ligne.\r\n', '49', 17, 'xbox.png', 1, 5),
(19, 'Donkey Kong Jungle Beat', 'Editeur : Nintendo\r\nDéveloppeur : Nintendo\r\nGenre : Plates-formes\r\nAnnée de sortie : 2005\r\nEtat boite: Bon\r\nEtat cartouche/cd : Bon\r\nOccasion en boite sans notice, livré avec le Bongo DK, Version PAL française.\r\nCe jeu Donkey Kong Jungle Beat pour Gamecube est testé et vendu en parfait état de fonctionnement. ', '20', 5, 'Donkey-Kong-Jungle-Beat-Gamecube.jpg', 6, 1),
(20, 'Crazy Taxi', 'Etat cd/cartouche : Bon\r\nEtat boite : Bon\r\nOccasion en boite sans notice. \r\nCe jeu Crazy Taxi pour Gamecube est testé et vendu en parfait état de fonctionnement.\r\n', '15', 3, 'Crazy-Taxi-Gamecube.jpg', 6, 1),
(21, 'Tetris', 'Tetris sur Nes est le célèbre puzzle-game dans lequel vous devez empiler des briques afin de constituer des lignes qui s''effaceront au fur et à mesure de votre progression. La difficulté augmente au fil de votre avancée. Cette version de Bullet-proof Software propose de réaliser 25 lignes à chaque niveau de jeux. Lorsque les lignes sont faites, le joueur passe au niveau suivant et la chute des pièces s''accélèrent.', '7', 6, '15497475_1202719523114414_1239973860_n.jpg', 6, 1),
(22, 'GhostBusters', 'Editeur : SEGA\r\nDéveloppeur : Activision\r\nGenre : Action\r\nAnnÈe de sortie : 1987\r\nEtat : Bon\r\nVendu en boite, sans notice.\r\n\r\nGhostBusters sur Master System \r\nest un jeu adapté du célèbre film S.O.S. \r\nFantomes. L''équipe de chasseurs de fantomes\r\n que vous controlez est confrontée ‡ des formes\r\n d''activités paranormales. Armé de vos armes \r\nanti-fantomes vous devez libérer \r\nNew York de la racaille venue d''outre-tombe. ', '15', 8, 'master_system_9.jpg', 7, 2),
(23, 'Lemmings', 'Etat cd/cartouche : Bon\r\nEtat boite : Bon\r\nEtat notice : Bon\r\nOccasion en boite avec notice.\r\nCe jeu Lemmings pour Master System est testÈ\r\n et vendu en parfait état de fonctionnement.', '4', 2, 'Lemmings-Master-System.jpg', 7, 2),
(24, 'Sonic Spinball', 'Accompagné de son ami Tails, Sonic le hérisson bleu le plus rapide de la galaxie doit à nouveau affronter le Dr Robotnik dans Sonic Spinball sur Megadrive. Le quartier général ennemi est installé en haut d''un volcan, et le mécanisme qui le protège est similaire à celui d''un flipper. Mettez-vous en boule et escaladez le Mont Mobius pour libérer les animaux transformés en robots par votre pire ennemi.', '8', 25, 'sonic_spinball_2.jpg', 7, 2),
(25, 'Asteroids', 'Developer 	\r\nAtari\r\nThe Code Monkeys Ltd.\r\nPublisher 	\r\nAtari\r\nFranchises 	\r\nAsteroids\r\nGenre 	\r\nShoot ''Em Up\r\nEtat : bon\r\nJeux livré avec boite et notice\r\nJeu testÈ par nos soins et fonctionne parfaitement. \r\n', '13', 6, '1665759-asteroids_front.jpg', 8, 3),
(26, 'Pac-Man', 'Console: 	Atari 2600\r\nAuthor (released): 	Namco (1980)\r\nGenre: 	Action 	Mode: 	Multiplayer\r\nDesign: 	Toru Iwatani\r\nEtat : Restauré', '45', 3, 'obal_Atari2600.gif', 8, 3),
(27, 'The Empire Strikes Back', 'AnnÈe : 1982\r\nDéveloppeur : Rex Bradford\r\nEditeur : Parker Brothers\r\nNombre de joueurs : 1 - 2 (en alternance)\r\nEtat : Restauré\r\n', '32', 6, 'swtag_5200.jpg', 8, 3),
(28, 'Metal Gear Solid', 'Metal Gear Solid est un jeu d''infiltration sorti sur PlayStation. Dans cet opus, Solid Snake doit infiltrer Shadow Moses, une base militaire en Alaska, afin de sauver des otages.\r\n Le joueur trouve tout au long de l''aventure de nouvelles armes et nouveaux équipements tout en alternant dialogues, séquences d''infiltration et combats contre les boss. Le scénario hollywoodien allié à de nombreuses cinématiques en font un jeu très cinématographique.', '24', 7, '15497625_1202719526447747_1821975116_n.jpg', 9, 4),
(29, 'Dragon Ball Z', 'Dragon Ball Z : Budokai 3 sur PS2 plonge le joueur dans un jeu de combat nerveux tiré de l''univers du manga, de l''animé, des films et autres... En effet, retrouvez Goku et sa bande, toujours aussi musclés, mais également des persos tirés de l''univers GT et des longs-métrages. Grâce au mode histoire, revivez la saga Zeto, de l''arrivée de Raditz sur Terre jusqu''à la défaite de Majin Buu. De nombreux autres modes agrémentent le jeu pour des heures entières de kamehameha.', '4', 6, '15570921_1202719529781080_924488845_n.jpg', 9, 4),
(30, 'Harry Potter ', 'Harry Potter et la Chambre des Secrets est un jeu d''action/aventures sorti sur Playstation. Retrouvez Harry et ses amis dans ce titre inspiré des secondes aventures du petit sorcier. En bonus, participez à des matches de Quidditch.', '8', 2, '15571163_1202719539781079_475588882_n.jpg', 9, 4),
(31, 'Need for Speed Undergroun', 'Need for Speed Underground 2 sur Xbox est un jeu de courses faisant la part belle aux capots rutilants et autres phares bleutés au xénon. L''aspect frime a ici au moins autant d''importance que les résultats dans les courses. A vous de faire en sorte que votre caisse soit la plus belle et la plus rapide, dans des environnements urbains, à la recherche de rivaux.', '12', 3, '', 10, 5),
(32, 'Nos voisins les hommes', 'Nos voisins les hommes est un jeu d''action tiré du long métrage animé du même nom. Votre but ici est de mettre la ville sans dessus-dessous en formant une équipe de 2 en alternant entre les personnages : Riton, Verne, Zamy et Stella. Seul ou accompagné d''un ami, parcourez une trentaine de niveaux complètement loufoques avec des lieux inédits et une bonne dose de mini-jeux.', '25', 1, '', 10, 5),
(33, 'Star Wars', 'Star Wars : Knights Of The Old Republic sur Xbox est un jeu de rôle se déroulant 4 000 ans avant les épisodes relatés dans la saga cinématographique. Notre héros est le dernier espoir de l''Ordre Jedi pour sauver la République, alors que dans l''ombre se terre le terrible Seigneur Sith Malak, disciple de son défunt Maître Dark Revan. Côté Clair, ou Obscur, c''est à vous de choisir votre destinée', '32', 5, '', 10, 5);

-- --------------------------------------------------------

--
-- Structure de la table `sous_categorie`
--

CREATE TABLE `sous_categorie` (
  `id_scategorie` int(11) NOT NULL,
  `nom_scategorie` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `sous_categorie`
--

INSERT INTO `sous_categorie` (`id_scategorie`, `nom_scategorie`, `id_categorie`) VALUES
(1, 'console', 1),
(2, 'console', 2),
(3, 'console', 3),
(4, 'console', 4),
(5, 'console', 5),
(6, 'jeux', 1),
(7, 'jeux', 2),
(8, 'jeux', 3),
(9, 'jeux', 4),
(10, 'jeux', 5);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `commander`
--
ALTER TABLE `commander`
  ADD PRIMARY KEY (`id_produit`,`id_client`),
  ADD KEY `FK_commander_id_client` (`id_client`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `FK_produit_id_scategorie` (`id_scategorie`),
  ADD KEY `FK_produit_id_categorie` (`id_categorie`);

--
-- Index pour la table `sous_categorie`
--
ALTER TABLE `sous_categorie`
  ADD PRIMARY KEY (`id_scategorie`,`id_categorie`),
  ADD KEY `FK_sous_categorie_id_categorie` (`id_categorie`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT pour la table `sous_categorie`
--
ALTER TABLE `sous_categorie`
  MODIFY `id_scategorie` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commander`
--
ALTER TABLE `commander`
  ADD CONSTRAINT `FK_commander_id_client` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `FK_commander_id_produit` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_produit_id_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`),
  ADD CONSTRAINT `FK_produit_id_scategorie` FOREIGN KEY (`id_scategorie`) REFERENCES `sous_categorie` (`id_scategorie`);

--
-- Contraintes pour la table `sous_categorie`
--
ALTER TABLE `sous_categorie`
  ADD CONSTRAINT `FK_sous_categorie_id_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
