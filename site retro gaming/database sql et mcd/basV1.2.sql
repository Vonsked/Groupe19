-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- G�n�r� le :  Mar 13 D�cembre 2016 � 18:09
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de donn�es :  `baseV1`
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLA-TE=utf8_unicode_ci;

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
    `prix_produit` decimal(15,3) NOT NULL,
    `stock_produit` int(11) NOT NULL,
    `img_produit` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
    `id_scategorie` int(11) NOT NULL,
    `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLA-TE=utf8_unicode_ci;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `design_produit`, `descrip_produit`, `prix_produit`, `stock_produit`, `img_produit`, `id_scategorie`, `id_categorie`) VALUES
(1, 'NES', 'Sortie en France en 1987, La NES est l''adaptation de la Famicom japonaise. Console 8-bit avec cartouche, elle permet alors de redonner une dynamique � l''industrie du jeu vid�o. La con-sole voit �galement na�tre les premiers �pisodes de s�ries mythiques comme Mario et Zelda qui contribuent grandement � son succ�s. Elle devient en 1990 la console la plus populaire de l''histoire du jeu vid�o.\r\n', '60.000', 4, 'NES_2.jpg', 1, 1),
(2, 'Super nintendo', 'Pour rivaliser avec la populaire Nintendo Entertainment System / Famicom, NEC lance la PC-Engine en 1987, et Sega suit avec sa Megadrive en 1988. Les deux syst�mes offrent des graphismes am�lior�s, ainsi qu''un son d�passant la 8-bit de Nintendo.\r\n', '129.000', 3, 'supernintendo-2.jpg', 1, 1),
(3, 'Game boy GB/GBC', 'C''est Gunpei Yokoi, employ� de Nintendo, qui cr�a cette console � la puissance comparable � celle de la NES (Famicom au Japon) mais avec un �cran monochrome, ceci afin de pouvoir vendre la console � bas prix.\r\nCette console reprend le principe de la ma-chine Microvision de 1979, con�ue par Jay Smith, une machine portable avec un �cran de pixels (contrairement aux Game and Watch de Gunpei Yokoi, qui utilisaient des dessins pr�d�finis), et des cartouches pour les diff�rents jeux (pas de cartouches pour les Game and Watch).\r\n', '29.000', 10, 'Game_Boy_Color-2.jpg', 1, 1),
(4, 'Game boy advance', 'La Game Boy Advance sort le 22 Juin 2001 en France. Pour la petite anecdote, nous devons l�originalit� de cette console � un designer fran�ais, Gwena�l Nicolas, qui lui a donn� une apparence de t�te de panda en travaillant notamment sur les courbes de l�objet : Nin-tendo �tait en recherche d�un design surprenant et novateur. A sa sortie, son processeur 32 bits l�a hiss�e au rang de la console portable la plus performante! \r\nPour ne rien g�cher, son autonomie est excellente : elle tient jusqu�� 10h! Elle est l�une des consoles les plus pris�es par les retro ga-mers car on y retrouve les grands classiques de la Super Nes. Apr�s 7 ans de vie, la Game Boy Advance passe le flambeau � la Nintendo DS en 2005.\r\n', '69.000', 8, 'Game_Boy_Advance-2.jpg', 1, 1),
(5, 'Nintendo 64', 'C''est en 1996 que sort en France la Nintendo 64. La console est en fait la r�-ponse de Nintendo face � la Saturn de Sega et au succ�s colossale de la Playstation. Sortie bien longtemps apr�s ses deux concurrentes, la console ne mise plus sur le 32-bit pour rivaliser mais bien 64-bit. En plus de l''absence de temps de chargement, la console comporte des titres de r�f�-rence comme Goldeneye ou encore Super Mario 64, qui porte la mascotte pour la premi�re fois en 3D dans un �pisode devenu culte.\r\n', '199.000', 3, 'nintendo_64.jpg', 1, 1),
(6, 'Gamecube', 'C''est en 2002 que sort en France la Nintendo Gamecube. C�l�bre pour son de-sign compact en forme de cube, la console, tr�s attendue, rivalise d�s sa sortie avec la Playstation 2 de Sony et la Xbox de Microsoft. Avec de nombreux titres exclusifs comme Rogue Squadron, Zelda ou encore Resident Evil, la Gamecube se dote rapidement d''un catalogue de qualit� gr�ce � des adaptations plus r�ussies les unes que les autres. A l''�poque, la console semble avoir un ni-veau jamais atteint en termes de graphismes, � tel point que nombre de joueurs se font surprendre en confondant le gameplay avec les cin�matiques des jeux.\r\n', '89.000', 8, 'gamecube2-.jpg', 1, 1),
(7, 'Master system', 'Sortie en 1987, Sega tente avec la Master System de concurrencer Nintendo et sa NES. Console 8 bit avec pour effigie le h�ros Alex Kidd, la console ne s''est vendu quasiment qu''en Europe et au Japon. Elle reste n�anmoins la console qui a ouvert les hostilit�s avec Nintendo dans le coeur de tous les fans de Sega.\r\n', '40.000', 15, 'mastersystem.png', 1, 2),
(8, 'Mega drive', 'Sortie en France en 1990, la Megadrive de Sega est une des premi�res consoles 16 bit de sa g�n�ration. A l''�poque, Sega frappe un grand coup car sa console sort un an avant la Super Nintendo avec une toute nouvelle mascotte qui enverra Alex Kidd � la retraite : Le h�risson Sonic. Avec la beaut� de ses graphismes et la vitesse du jeu Sonic, la Megadrive fait l''effet d''une bombe qui relancera alors le duel entre Sega et Nintendo.\r\n', '55.000', 6, 'megadrive.png', 1, 2),
(9, '32X', 'Le 32X est une extension de la Megadrive, console de jeu vid�o de quatri�me g�n�ration du constructeur japonais Sega.\r\n', '10.000', 2, 'sega-32x.jpg', 1, 2),
(10, 'Saturn', 'La Sega Saturn d�barque sur le march� europ�en en juillet 1995 avec 5 jeux. Parmi eux, Virtua Fighter, le premier jeu de combat en 3D � investir les consoles de salon. En concur-rence directe avec la premi�re Playstation, la Sega Saturn se distingue par la qualit� de son rendu sonore et sa gestion de la 2D. Elle a aussi de bonnes capacit�s c�t� 3D. La Playstation offre d�j� une vingtaine de jeux � son lancement, seulement un mois apr�s la date de sortie de la Sega Sat-urn...C�est en 1997 que prendra fin le duel entre les deux consoles avec le lancement par Sony du remarquable Final Fantasy VII sur Playstation. Sony aura sa revanche avec la c�l�bre Dreamcast d�s 1999.\r\n', '59.000', 4, 'Sega-Saturn.png', 1, 2),
(11, 'Dreamcast', 'Apr�s avoir essuy� quelques pl�tres avec la Saturn, Sega sort sa Dreamcast en Europe le 14 octobre 1999. Elle �quip�e d�un modem assez puissant pour offrir aux joueurs la pos-sibilit� de naviguer sur internet et, plus important encore, de jouer en r�seau. Malheureusement, le nombre de jeux dont le gameplay est �labor� en prenant en compte cette technologie est � l��poque tr�s restreint ; il est cependant ind�niable que Sega a ouvert le chemin aux jeux de r�les en ligne et a consid�rablement contribu� � l��volution du paysage du jeu vid�o. Les amateurs sa-luent la qualit� de la Dreamcast dont le prix d�acquisition �tait trois fois moins �lev� que celui de la Playstation 2.\r\n', '69.000', 6, 'Sega-Dreamcast.jpg', 1, 2),
(12, 'Game gear', 'Con�ue pour concurrencer la Game Boy, la Sega Game Gear arrive sur le mar-ch� fran�ais en juin 1991. D�un point de vue marketing, la firme Sega se montre offensive avec le slogan "Si vous jouez encore sur Game Boy, il est temps de grandir !".\r\n\r\nSouvent d�crite comme une Master System portable, elle �tait compatible avec les jeux de sa grande s�ur gr�ce � un adaptateur. Ses acqu�reurs avaient donc un large choix en mati�re de jeux. Malgr� cet avan-tage consid�rable, son principal atout se situe ailleurs : elle dispose d�un �cran couleur, au contraire de la Game Boy.\r\n', '90.000', 9, 'gamegear.png', 1, 2),
(13, 'Playstation', 'Sortie en France en 1995, la Playstation de Sony vient bousculer les 2 g�ants Nintendo et Sega avec sa nouvelle technologie 32 bit et un nouveau concept qui va quelque peu modifier la physionomie des jeux vid�os � venir : la carte m�moire.\r\n', '50.000', 2, 'playstation1.jpg', 1, 4),
(14, 'Playstation 2', 'Sortie en 2000, la Playstation 2 est avec 150 millions d''exemplaires la console la plus vendue de l''histoire du jeu vid�o. un succ�s qui portera malheureusement un coup fatal � SEGA sur le march� des consoles, dont la Dreamcast sortait quelques mois avant. Le lecteur DVD de la Playstation 2 n''y aura sans doute pas �t� pour rien.\r\nLa PlayStation 2 abr�g� officiellement PS2 est une console de jeux vid�o de sixi�me g�n�ration commercialis�e par Sony Computer En-tertainment, filiale de Sony. Elle est sortie le 4 mars 2000 au Japon, le 26 octobre 2000 en Am�-rique du Nord et le 24 novembre 2000 en Europe.', '30.000', 5, 'PlayStation2.png', 1, 4),
(15, 'Atari 2600', 'commercialis�e en France de 1981 � 1991.\r\nElle fut la seconde console de sa-lon � sortir en France, apr�s la Vid�opac de Philipps; Quelques hits qui firent son succ�s comme Space Invader, Pac-Man, Adventure�\r\n', '150.000', 3, 'atari2600.jpg', 1, 3),
(16, 'Atari 7800', 'commercialis�e en France de 1986 � 1992.\r\nPensez � vous procurer un c�ble d''alimentation si vous n''en poss�dez pas d�j� un.\r\nCette console �tait le premier syst�me de jeu d''Atari con�u par une soci�t� ext�rieure.\r\n', '280.000', 1, 'Atari-7800.jpg', 1, 3),
(17, 'Atari lynx', 'L''Atari Lynx fut la seule console portable d''Atari et la premi�re portable avec un �cran LCD couleur. Elle sortit en 1989, la m�me ann�e que la Game Boy (monochrome) de Nin-tendo.\r\n', '60.000', 10, 'atarilynx.jpg', 1, 3),
(18, 'Xbox', 'Sortie en 2001 aux Etats-unis et en 2002 en Europe, la Xbox marque l''av�nement d''un nouvel acteur incontournable du jeu vid�o : Microsoft. La console Xbox est malgr� la domina-tion de Sony un grand succ�s avec 24 millions de consoles � travers le monde. Elle est �quip�e d''un v�ritable syst�me d''exploitation, d''un disque dur ainsi que d''une carte r�seau ethernet qui avec le service Xbox live offrait la capacit� de jouer en ligne.\r\n', '49.000', 17, 'xbox.png', 1, 5);

-- --------------------------------------------------------

--
-- Structure de la table `sous_categorie`
--

CREATE TABLE `sous_categorie` (
    `id_scategorie` int(11) NOT NULL,
    `nom_scategorie` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
    `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLA-TE=utf8_unicode_ci;

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
-- Index pour les tables export�es
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
-- AUTO_INCREMENT pour les tables export�es
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
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `sous_categorie`
--
ALTER TABLE `sous_categorie`
  MODIFY `id_scategorie` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Contraintes pour les tables export�es
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
  ADD CONSTRAINT `FK_produit_id_scategorie` FOREIGN KEY (`id_scategorie`) REFER-ENCES `sous_categorie` (`id_scategorie`);

--
-- Contraintes pour la table `sous_categorie`
--
ALTER TABLE `sous_categorie`
  ADD CONSTRAINT `FK_sous_categorie_id_categorie` FOREIGN KEY (`id_categorie`) REF-ERENCES `categorie` (`id_categorie`);
