# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.21)
# Database: emploidutemps_db
# Generation Time: 2018-06-11 21:20:18 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table annee_scolaire
# ------------------------------------------------------------

DROP TABLE IF EXISTS `annee_scolaire`;

CREATE TABLE `annee_scolaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `annee_scolaire` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `annee_scolaire` WRITE;
/*!40000 ALTER TABLE `annee_scolaire` DISABLE KEYS */;

INSERT INTO `annee_scolaire` (`id`, `annee_scolaire`)
VALUES
	(1,'2018'),
	(2,'2019'),
	(3,'2020');

/*!40000 ALTER TABLE `annee_scolaire` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table departement
# ------------------------------------------------------------

DROP TABLE IF EXISTS `departement`;

CREATE TABLE `departement` (
  `id_dep` int(11) NOT NULL AUTO_INCREMENT,
  `code_dep` text,
  `label_dep` text,
  `chef_dep` text,
  PRIMARY KEY (`id_dep`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table element
# ------------------------------------------------------------

DROP TABLE IF EXISTS `element`;

CREATE TABLE `element` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code_element` text,
  `label_element` text,
  `vh` int(11) NOT NULL,
  `ponderation` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `element` WRITE;
/*!40000 ALTER TABLE `element` DISABLE KEYS */;

INSERT INTO `element` (`id`, `code_element`, `label_element`, `vh`, `ponderation`)
VALUES
	(1,'1','Economie',5,7),
	(2,'2','Math',8,8);

/*!40000 ALTER TABLE `element` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table emploi_temps
# ------------------------------------------------------------

DROP TABLE IF EXISTS `emploi_temps`;

CREATE TABLE `emploi_temps` (
  `id_emploi_temps` int(11) NOT NULL AUTO_INCREMENT,
  `annee_scolaire` int(11) NOT NULL,
  `id_semestre` int(11) DEFAULT NULL,
  `id_niveau` int(11) DEFAULT NULL,
  `id_periode` int(11) DEFAULT NULL,
  `jour` int(11) DEFAULT NULL,
  `heure_deb` int(11) DEFAULT NULL,
  `heure_fin` int(11) DEFAULT NULL,
  `id_element` int(11) DEFAULT NULL,
  `id_salle` int(11) DEFAULT NULL,
  `id_professeur` int(11) DEFAULT NULL,
  `id_groupe` int(11) DEFAULT NULL,
  `etat_seance` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_emploi_temps`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `emploi_temps` WRITE;
/*!40000 ALTER TABLE `emploi_temps` DISABLE KEYS */;

INSERT INTO `emploi_temps` (`id_emploi_temps`, `annee_scolaire`, `id_semestre`, `id_niveau`, `id_periode`, `jour`, `heure_deb`, `heure_fin`, `id_element`, `id_salle`, `id_professeur`, `id_groupe`, `etat_seance`)
VALUES
	(1,2018,1,1,1,1,8,10,1,1,1,1,1),
	(2,2018,1,1,1,1,10,12,2,1,1,1,1),
	(3,2018,1,1,1,6,10,12,2,1,1,1,1);

/*!40000 ALTER TABLE `emploi_temps` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table etudient
# ------------------------------------------------------------

DROP TABLE IF EXISTS `etudient`;

CREATE TABLE `etudient` (
  `id_etud` int(11) NOT NULL AUTO_INCREMENT,
  `nom_etud` text,
  `prenom_etud` text,
  `annee_entree` int(11) NOT NULL,
  `filiere_etud` text,
  `niveau_etud` text,
  `status_etud` text,
  `sexe_etud` text,
  `observation` text,
  `tel_etud` text,
  `email_etud` text,
  `groupe_etud` text,
  PRIMARY KEY (`id_etud`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table filiere
# ------------------------------------------------------------

DROP TABLE IF EXISTS `filiere`;

CREATE TABLE `filiere` (
  `id_filiere` int(11) NOT NULL AUTO_INCREMENT,
  `code_filiere` text,
  `label_filiere` text,
  `coordinateur` text,
  PRIMARY KEY (`id_filiere`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `filiere` WRITE;
/*!40000 ALTER TABLE `filiere` DISABLE KEYS */;

INSERT INTO `filiere` (`id_filiere`, `code_filiere`, `label_filiere`, `coordinateur`)
VALUES
	(0,'STAT','Statistiques','Prof1'),
	(1,'FINA','Finance','Prof2');

/*!40000 ALTER TABLE `filiere` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table groupe
# ------------------------------------------------------------

DROP TABLE IF EXISTS `groupe`;

CREATE TABLE `groupe` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `label_groupe` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `groupe` WRITE;
/*!40000 ALTER TABLE `groupe` DISABLE KEYS */;

INSERT INTO `groupe` (`id`, `label_groupe`)
VALUES
	(1,'groupe 1'),
	(2,'groupe 2'),
	(3,'groupe 3');

/*!40000 ALTER TABLE `groupe` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table jours_ferier
# ------------------------------------------------------------

DROP TABLE IF EXISTS `jours_ferier`;

CREATE TABLE `jours_ferier` (
  `id_jours_ferier` int(11) NOT NULL AUTO_INCREMENT,
  `jour` date NOT NULL,
  PRIMARY KEY (`id_jours_ferier`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table module
# ------------------------------------------------------------

DROP TABLE IF EXISTS `module`;

CREATE TABLE `module` (
  `id_module` int(11) NOT NULL AUTO_INCREMENT,
  `code_module` text,
  `label_module` text,
  `respoensable_module` text NOT NULL,
  `coeficient` float NOT NULL,
  `id_deparetement` int(11) NOT NULL,
  PRIMARY KEY (`id_module`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table niveau
# ------------------------------------------------------------

DROP TABLE IF EXISTS `niveau`;

CREATE TABLE `niveau` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code_niveau` text,
  `label_niveau` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `niveau` WRITE;
/*!40000 ALTER TABLE `niveau` DISABLE KEYS */;

INSERT INTO `niveau` (`id`, `code_niveau`, `label_niveau`)
VALUES
	(1,'1','Premier année');

/*!40000 ALTER TABLE `niveau` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table periode
# ------------------------------------------------------------

DROP TABLE IF EXISTS `periode`;

CREATE TABLE `periode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code_periode` text,
  `label_periode` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `periode` WRITE;
/*!40000 ALTER TABLE `periode` DISABLE KEYS */;

INSERT INTO `periode` (`id`, `code_periode`, `label_periode`)
VALUES
	(1,'1','Période 1'),
	(2,'2','Période 2'),
	(3,'3','Période 3');

/*!40000 ALTER TABLE `periode` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table professeur
# ------------------------------------------------------------

DROP TABLE IF EXISTS `professeur`;

CREATE TABLE `professeur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_prof` text,
  `prenom_prof` text,
  `statut_prof` text,
  `tel_prof` text,
  `email_prof` text,
  `sexe_prof` text,
  `salaire_prof` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `professeur` WRITE;
/*!40000 ALTER TABLE `professeur` DISABLE KEYS */;

INSERT INTO `professeur` (`id`, `nom_prof`, `prenom_prof`, `statut_prof`, `tel_prof`, `email_prof`, `sexe_prof`, `salaire_prof`)
VALUES
	(1,'ZIAD','Hassan','1','08987987','zaid@test.com','M',0),
	(2,'Azizi','Safaa','1','06855487','azizi@test.com','F',0);

/*!40000 ALTER TABLE `professeur` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table salle
# ------------------------------------------------------------

DROP TABLE IF EXISTS `salle`;

CREATE TABLE `salle` (
  `id_salle` int(11) NOT NULL AUTO_INCREMENT,
  `nom_salle` text,
  `capacite` text,
  `type_salle` text NOT NULL,
  `etat` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_salle`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `salle` WRITE;
/*!40000 ALTER TABLE `salle` DISABLE KEYS */;

INSERT INTO `salle` (`id_salle`, `nom_salle`, `capacite`, `type_salle`, `etat`)
VALUES
	(1,'Salle 1','16','Cours',1),
	(2,'Salle 2','100','emphet',1),
	(3,'Salle 3','12','TP',1),
	(4,'Labo 1','12','laboratoire',1);

/*!40000 ALTER TABLE `salle` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table semestre
# ------------------------------------------------------------

DROP TABLE IF EXISTS `semestre`;

CREATE TABLE `semestre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code_semestre` text,
  `label_semestre` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `semestre` WRITE;
/*!40000 ALTER TABLE `semestre` DISABLE KEYS */;

INSERT INTO `semestre` (`id`, `code_semestre`, `label_semestre`)
VALUES
	(0,'S1','Semestre 1'),
	(1,'S2','Semestre 2'),
	(2,'S3','Semestre 3'),
	(3,'S4','Semestre 4'),
	(4,'S5','Semestre 5');

/*!40000 ALTER TABLE `semestre` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
