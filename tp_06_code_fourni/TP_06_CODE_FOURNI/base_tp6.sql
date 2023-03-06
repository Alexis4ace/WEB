BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS "tp_villes" (
	"id"	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	"nom"	varchar(80) NOT NULL,
	"code"	varchar(6) NOT NULL
);
CREATE TABLE IF NOT EXISTS "tp_auteurs" (
	"id"	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	"nom"	varchar(80) NOT NULL,
	"id_ville"	INTEGER DEFAULT NULL,
	FOREIGN KEY("id_ville") REFERENCES "tp_villes"("id")
);
CREATE TABLE IF NOT EXISTS "tp_articles" (
	"id"	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	"id_auteur"	INTEGER NOT NULL,
	"titre"	varchar(80) NOT NULL,
	"contenu"	TEXT NOT NULL,
	"date"	date DEFAULT NULL,
	FOREIGN KEY("id_auteur") REFERENCES "tp_auteurs"("id")
);
INSERT INTO "tp_villes" ("id","nom","code") VALUES (1,'Poitiers','86000'),
 (2,'Paris','75000'),
 (3,'Lyon','69000'),
 (4,'Lille','59000');
INSERT INTO "tp_auteurs" ("id","nom","id_ville") VALUES (1,'Gilles',1),
 (2,'Personne',NULL),
 (3,'Rita',1),
 (4,'Asterix',1),
 (5,'Lucky Luke',3),
 (6,'Jolly Jumper',3),
 (7,'Joe Dalton',2),
 (8,'Rantanplan',2);
INSERT INTO "tp_articles" ("id","id_auteur","titre","contenu","date") VALUES (1,1,'premier article de Gilles','contenu du premier article de Gilles	','1922-06-11'),
 (2,1,'Deuxième article de Gilles','contenu du 2me article de Gilles','2099-11-19'),
 (3,3,'algèbre pour cerveaux positroniques','Mise en évidence d''une faille dans l''application des 3 lois de la robotique','2010-03-10');
COMMIT;
