SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

DROP DATABASE IF EXISTS Portfolio;
CREATE DATABASE Portfolio;

DROP TABLE IF EXISTS Creation;
CREATE TABLE Creation(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	Titre VARCHAR(100),
	Image VARCHAR(100),
	Description VARCHAR(255),
	Categorie VARCHAR(25)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO Creation (Titre, Image, Description, Categorie) VALUES
('Affiche CANOPE','Crea/Affiche_CANOPE.jpg','Affiche Concours Etudiant pour un événement CANOPE','PRINT'),
('CV','Crea/CV.jpg','Mon nouveau CV','PRINT'),
('Lettre de Motivation','Crea/Lettre_Motivation.jpg','Ma nouvelle lettre de motivation','PRINT'),
('Logo','Crea/Logo.jpg','Travail sur mon logo avec ses différentes déclinaisons','PRINT'),
('MoodBoard','Crea/MoodBoard.jpg',"Travail de groupe sur la réalisation d'un moodboard",'PRINT'),
('Photo de Choppe','Crea/Photo_Beer.jpg','Essai Photographique','VIDEO'),
('Projet Tuteuré','Crea/Ptut.png',"Création d'un site de Tatouage pour notre Projet Tuteuré Encre Marine Tattoo" ,'WEB'),
('Affiche Sainte-Marie','Crea/Affiche_SAINTE-MARIE.jpg',"Affiche concours étudiant pour l'hôpital Sainte-Marie",'PRINT');