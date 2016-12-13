#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: client
#------------------------------------------------------------

CREATE TABLE client(
        id_client       int (11) Auto_increment  NOT NULL ,
        nom_client      Varchar (50) NOT NULL ,
        prenom_client   Varchar (50) NOT NULL ,
        civilite_client Varchar (3) NOT NULL ,
        adresse_client  Varchar (50) NOT NULL ,
        cp_client       Varchar (5) NOT NULL ,
        ville_client    Varchar (35) NOT NULL ,
        tel_client      Varchar (10) NOT NULL ,
        mail_client     Varchar (50) NOT NULL ,
        pseudo_client   Varchar (50) NOT NULL ,
        password_client Varchar (50) NOT NULL ,
        PRIMARY KEY (id_client )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: administrateur
#------------------------------------------------------------

CREATE TABLE administrateur(
        id_admin       int (11) Auto_increment  NOT NULL ,
        pseudo_admin   Varchar (25) NOT NULL ,
        password_admin Varchar (25) NOT NULL ,
        PRIMARY KEY (id_admin )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: categorie
#------------------------------------------------------------

CREATE TABLE categorie(
        id_categorie  int (11) Auto_increment  NOT NULL ,
        nom_categorie Varchar (25) NOT NULL ,
        PRIMARY KEY (id_categorie )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: sous-categorie
#------------------------------------------------------------

CREATE TABLE sous_categorie(
        id_scategorie  int (11) Auto_increment  NOT NULL ,
        nom_scategorie Varchar (25) NOT NULL ,
        id_categorie   Int NOT NULL ,
        PRIMARY KEY (id_scategorie ,id_categorie )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: produit
#------------------------------------------------------------

CREATE TABLE produit(
        id_produit      int (11) Auto_increment  NOT NULL ,
        design_produit  Varchar (25) NOT NULL ,
        descrip_produit Text NOT NULL ,
        prix_produit    DECIMAL (15,3)  NOT NULL ,
        stock_produit   Int NOT NULL ,
        img_produit     Varchar (50) NOT NULL ,
        id_scategorie   Int NOT NULL ,
        id_categorie    Int NOT NULL ,
        PRIMARY KEY (id_produit )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: commander
#------------------------------------------------------------

CREATE TABLE commander(
        qt         Int NOT NULL ,
        date_com   Date NOT NULL ,
        id_produit Int NOT NULL ,
        id_client  Int NOT NULL ,
        PRIMARY KEY (id_produit ,id_client )
)ENGINE=InnoDB;

ALTER TABLE sous_categorie ADD CONSTRAINT FK_sous_categorie_id_categorie FOREIGN KEY (id_categorie) REFERENCES categorie(id_categorie);
ALTER TABLE produit ADD CONSTRAINT FK_produit_id_scategorie FOREIGN KEY (id_scategorie) REFERENCES sous_categorie(id_scategorie);
ALTER TABLE produit ADD CONSTRAINT FK_produit_id_categorie FOREIGN KEY (id_categorie) REFERENCES categorie(id_categorie);
ALTER TABLE commander ADD CONSTRAINT FK_commander_id_produit FOREIGN KEY (id_produit) REFERENCES produit(id_produit);
ALTER TABLE commander ADD CONSTRAINT FK_commander_id_client FOREIGN KEY (id_client) REFERENCES client(id_client);
