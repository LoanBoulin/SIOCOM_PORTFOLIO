
# -----------------------------------------------------------------------------
#       TABLE : TYPEPOST
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TYPEPOST
 (
   TYP_ID int(11) NOT NULL  ,
   TYP_LIBELLE VARCHAR(50) NULL  
   , PRIMARY KEY (TYP_ID) 
 ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
 

# -----------------------------------------------------------------------------
#       TABLE : TYPEPROJET
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TYPEPROJET
 (
   TYP_ID int(11) NOT NULL  ,
   TYP_LIBELLE VARCHAR(50) NULL  
   , PRIMARY KEY (TYP_ID) 
 ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
 

# -----------------------------------------------------------------------------
#       TABLE : PROJETEQUIPE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PROJETEQUIPE
 (
   PRO_ID int(11) NOT NULL  ,
   GRO_ID int(11) NOT NULL  ,
   PRO_ID_DEFINIR int(11) NOT NULL  ,
   PRO_LIBELLE VARCHAR(50) NULL  
   , PRIMARY KEY (PRO_ID) 
 ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
 

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE PROJETEQUIPE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_PROJETEQUIPE_GROUPE
     ON PROJETEQUIPE (GRO_ID ASC);

CREATE  INDEX I_FK_PROJETEQUIPE_PROJETDEF
     ON PROJETEQUIPE (PRO_ID_DEFINIR ASC);




# -----------------------------------------------------------------------------
#       TABLE : POST
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS POST
 (
   POS_ID int(11) NOT NULL  ,
   TYP_ID int(11) NOT NULL  ,
   USE_ID int(11) NOT NULL  ,
   POS_ID_REPONDRE int(11) NOT NULL  ,
   POS_DATETIME DATETIME NULL  ,
   POS_DESC TEXT NULL  
   , PRIMARY KEY (POS_ID) 
 ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
 

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE POST
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_POST_TYPEPOST
     ON POST (TYP_ID ASC);

CREATE  INDEX I_FK_POST_USER
     ON POST (USE_ID ASC);

CREATE  INDEX I_FK_POST_POST
     ON POST (POS_ID_REPONDRE ASC);

# -----------------------------------------------------------------------------
#       TABLE : GRO_TYPE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS GRO_TYPE
 (
   GRO_ID int(11) NOT NULL  ,
   GRO_LIBELLE VARCHAR(50) NULL  
   , PRIMARY KEY (GRO_ID) 
 ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

# -----------------------------------------------------------------------------
#       TABLE : GROUPE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS GROUPE
 (
   GRO_ID int(11) NOT NULL  ,
   TYP_ID int(11) NOT NULL  ,
   GRO_LIBELLE VARCHAR(50) NULL  
   , PRIMARY KEY (GRO_ID) 
 ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE GROUPE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_GROUPE_TYPEGROUPE
     ON GROUPE (TYP_ID ASC);


# -----------------------------------------------------------------------------
#       TABLE : RESSOURCE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS RESSOURCE
 (
   RES_ID int(11) NOT NULL  ,
   RES_NOM VARCHAR(50) NULL  ,
   RES_LIEN TEXT NULL  
   , PRIMARY KEY (RES_ID) 
 ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
 

# -----------------------------------------------------------------------------
#       TABLE : PROJETDEF
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PROJETDEF
 (
   PRO_ID int(11) NOT NULL  ,
   PRO_DATEDEB DATE NULL  ,
   PRO_LIBELLE VARCHAR(50) NULL  ,
   PRO_DATEFIN DATE NULL  
   , PRIMARY KEY (PRO_ID) 
 ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
 

# -----------------------------------------------------------------------------
#       TABLE : ADRESSER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ADRESSER
 (
   PRO_ID int(11) NOT NULL  ,
   GRO_ID int(11) NOT NULL  
   , PRIMARY KEY (PRO_ID,GRO_ID) 
 ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
 

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE ADRESSER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_ADRESSER_PROJETDEF
     ON ADRESSER (PRO_ID ASC);

CREATE  INDEX I_FK_ADRESSER_GROUPE
     ON ADRESSER (GRO_ID ASC);

# -----------------------------------------------------------------------------
#       TABLE : REGROUPER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS REGROUPER
 (
   POS_ID int(11) NOT NULL  ,
   GRO_ID int(11) NOT NULL  
   , PRIMARY KEY (POS_ID,GRO_ID) 
 ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
 

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE REGROUPER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_REGROUPER_POST
     ON REGROUPER (POS_ID ASC);

CREATE  INDEX I_FK_REGROUPER_GROUPE
     ON REGROUPER (GRO_ID ASC);

# -----------------------------------------------------------------------------
#       TABLE : QUALIFIER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS QUALIFIER
 (
   PRO_ID int(11) NOT NULL  ,
   TYP_ID int(11) NOT NULL  
   , PRIMARY KEY (PRO_ID,TYP_ID) 
 ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
 

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE QUALIFIER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_QUALIFIER_PROJETDEF
     ON QUALIFIER (PRO_ID ASC);

CREATE  INDEX I_FK_QUALIFIER_TYPEPROJET
     ON QUALIFIER (TYP_ID ASC);

# -----------------------------------------------------------------------------
#       TABLE : ENCADRER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ENCADRER
 (
   USE_ID int(11) NOT NULL  ,
   PRO_ID int(11) NOT NULL  
   , PRIMARY KEY (USE_ID,PRO_ID) 
 ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
 

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE ENCADRER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_ENCADRER_ENSEIGNANT
     ON ENCADRER (USE_ID ASC);

CREATE  INDEX I_FK_ENCADRER_PROJETDEF
     ON ENCADRER (PRO_ID ASC);

# -----------------------------------------------------------------------------
#       TABLE : INTEGRER_RES
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS INTEGRER_RES
 (
   POS_ID int(11) NOT NULL  ,
   RES_ID int(11) NOT NULL  
   , PRIMARY KEY (POS_ID,RES_ID) 
 ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
 

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE INTEGRER_RES
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_INTEGRER_RES_POST
     ON INTEGRER_RES (POS_ID ASC);

CREATE  INDEX I_FK_INTEGRER_RES_RESSOURCE
     ON INTEGRER_RES (RES_ID ASC);

# -----------------------------------------------------------------------------
#       TABLE : APPARTENIR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS APPARTENIR
 (
   GRO_ID int(11) NOT NULL  ,
   USE_ID int(11) NOT NULL  
   , PRIMARY KEY (GRO_ID,USE_ID) 
 ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
 

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE APPARTENIR
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_APPARTENIR_GROUPE
     ON APPARTENIR (GRO_ID ASC);

CREATE  INDEX I_FK_APPARTENIR_USER
     ON APPARTENIR (USE_ID ASC);

# -----------------------------------------------------------------------------
#       TABLE : CONTENIR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CONTENIR
 (
   RES_ID int(11) NOT NULL  ,
   PRO_ID int(11) NOT NULL  
   , PRIMARY KEY (RES_ID,PRO_ID) 
 ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
 

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE CONTENIR
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_CONTENIR_RESSOURCE
     ON CONTENIR (RES_ID ASC);

CREATE  INDEX I_FK_CONTENIR_PROJETEQUIPE
     ON CONTENIR (PRO_ID ASC);

# -----------------------------------------------------------------------------
#       TABLE : DEFINIR_PRO
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS DEFINIR_PRO
 (
   PRO_ID int(11) NOT NULL  ,
   MAT_ID int(11) NOT NULL  
   , PRIMARY KEY (PRO_ID,MAT_ID) 
 ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
 

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE DEFINIR_PRO
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_DEFINIR_PRO_PROJETDEF
     ON DEFINIR_PRO (PRO_ID ASC);

CREATE  INDEX I_FK_DEFINIR_PRO_MATIERE
     ON DEFINIR_PRO (MAT_ID ASC);


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE PROJETEQUIPE 
  ADD FOREIGN KEY FK_PROJETEQUIPE_GROUPE (GRO_ID)
      REFERENCES GROUPE (GRO_ID) ;


ALTER TABLE PROJETEQUIPE 
  ADD FOREIGN KEY FK_PROJETEQUIPE_PROJETDEF (PRO_ID_DEFINIR)
      REFERENCES PROJETDEF (PRO_ID) ;


ALTER TABLE POST 
  ADD FOREIGN KEY FK_POST_TYPEPOST (TYP_ID)
      REFERENCES TYPEPOST (TYP_ID) ;


ALTER TABLE POST 
  ADD FOREIGN KEY FK_POST_USER (USE_ID)
      REFERENCES USER (id) ;


ALTER TABLE POST 
  ADD FOREIGN KEY FK_POST_POST (POS_ID_REPONDRE)
      REFERENCES POST (POS_ID) ;


ALTER TABLE GROUPE
  ADD FOREIGN KEY FK_GROUPE_TYPEGROUPE (TYP_ID)
      REFERENCES GRO_TYPE (GRO_ID) ;


ALTER TABLE ADRESSER 
  ADD FOREIGN KEY FK_ADRESSER_PROJETDEF (PRO_ID)
      REFERENCES PROJETDEF (PRO_ID) ;


ALTER TABLE ADRESSER 
  ADD FOREIGN KEY FK_ADRESSER_GROUPE (GRO_ID)
      REFERENCES GROUPE (GRO_ID) ;


ALTER TABLE REGROUPER 
  ADD FOREIGN KEY FK_REGROUPER_POST (POS_ID)
      REFERENCES POST (POS_ID) ;


ALTER TABLE REGROUPER 
  ADD FOREIGN KEY FK_REGROUPER_GROUPE (GRO_ID)
      REFERENCES GROUPE (GRO_ID) ;


ALTER TABLE QUALIFIER 
  ADD FOREIGN KEY FK_QUALIFIER_PROJETDEF (PRO_ID)
      REFERENCES PROJETDEF (PRO_ID) ;


ALTER TABLE QUALIFIER 
  ADD FOREIGN KEY FK_QUALIFIER_TYPEPROJET (TYP_ID)
      REFERENCES TYPEPROJET (TYP_ID) ;


ALTER TABLE ENCADRER 
  ADD FOREIGN KEY FK_ENCADRER_ENSEIGNANT (USE_ID)
      REFERENCES ENSEIGNANT (id) ;


ALTER TABLE ENCADRER 
  ADD FOREIGN KEY FK_ENCADRER_PROJETDEF (PRO_ID)
      REFERENCES PROJETDEF (PRO_ID) ;


ALTER TABLE INTEGRER_RES 
  ADD FOREIGN KEY FK_INTEGRER_RES_POST (POS_ID)
      REFERENCES POST (POS_ID) ;


ALTER TABLE INTEGRER_RES 
  ADD FOREIGN KEY FK_INTEGRER_RES_RESSOURCE (RES_ID)
      REFERENCES RESSOURCE (RES_ID) ;


ALTER TABLE APPARTENIR 
  ADD FOREIGN KEY FK_APPARTENIR_GROUPE (GRO_ID)
      REFERENCES GROUPE (GRO_ID) ;


ALTER TABLE APPARTENIR 
  ADD FOREIGN KEY FK_APPARTENIR_USER (USE_ID)
      REFERENCES USER (id) ;


ALTER TABLE CONTENIR 
  ADD FOREIGN KEY FK_CONTENIR_RESSOURCE (RES_ID)
      REFERENCES RESSOURCE (RES_ID) ;


ALTER TABLE CONTENIR 
  ADD FOREIGN KEY FK_CONTENIR_PROJETEQUIPE (PRO_ID)
      REFERENCES PROJETEQUIPE (PRO_ID) ;


ALTER TABLE DEFINIR_PRO 
  ADD FOREIGN KEY FK_DEFINIR_PRO_PROJETDEF (PRO_ID)
      REFERENCES PROJETDEF (PRO_ID) ;


ALTER TABLE DEFINIR_PRO 
  ADD FOREIGN KEY FK_DEFINIR_PRO_MATIERE (MAT_ID)
      REFERENCES MATIERE (id) ;

