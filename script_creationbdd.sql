
CREATE TABLE ville(
	idville SERIAL NOT NULL,
	nomVille VARCHAR(50),
	CONSTRAINT ville_PK PRIMARY KEY(idville)
);

CREATE TABLE quartier(
	idquartier SERIAL NOT NULL,
	nomQuartier VARCHAR(50),
	idville INTEGER,
	CONSTRAINT quartier_PK PRIMARY KEY(idquartier),
	CONSTRAINT quartier_OF_ville_FK FOREIGN KEY(idville) REFERENCES ville(idville)
);

CREATE TABLE membre(
	idmembre SERIAL NOT NULL,
	pseudo VARCHAR(30) NOT NULL,
	email VARCHAR NOT NULL,
	mdp VARCHAR NOT NULL,
	telephone VARCHAR,
  sexe VARCHAR(15) CHECK(sexe IN('HOMME','FEMME')),
	idville INTEGER,
	idquartier INTEGER,
	image VARCHAR, -- Lien image
	CONSTRAINT membre_PK PRIMARY KEY(idmembre),
	CONSTRAINT membre_of_ville_fk_FK FOREIGN KEY(idville) REFERENCES ville(idville),
	CONSTRAINT membre_of_quartier_fk_FK FOREIGN KEY(idquartier) REFERENCES quartier(idquartier)
);

CREATE TABLE offre(
	idoffre SERIAL NOT NULL,
	prix REAL,
	quantiteVaisselle VARCHAR CHECK(quantiteVaisselle IN('Grosse','Moyenne', 'Petit')),
	idmembre INTEGER,
	commentaire VARCHAR,
	date_publication timestamptz,
	CONSTRAINT offre_PK PRIMARY KEY(idoffre),
	CONSTRAINT offre_OF_membre_FK FOREIGN KEY(idmembre) REFERENCES membre(idmembre)
);


CREATE TABLE profil(
	idprofil SERIAL NOT NULL,
	idmembre INTEGER,
	positive INTEGER DEFAULT 0,
	neutre INTEGER DEFAULT 0,
	negatif INTEGER DEFAULT 0,
	description VARCHAR,
	CONSTRAINT profil_PK PRIMARY KEY(idprofil),
	CONSTRAINT profil_OF_membre_FK FOREIGN KEY(idmembre) REFERENCES membre(idmembre)
);

CREATE TABLE evaluation(
	idevaluation SERIAL NOT NULL,
	idmembre_juge INTEGER,
	idmembre_evalue INTEGER,
	note VARCHAR(50) CHECK(note IN('POSITIVE','NEUTRE','NEGATIF')),
	commentaire VARCHAR,
	CONSTRAINT evaluation_PK PRIMARY KEY(idevaluation),
	CONSTRAINT evaluation_OF_membre_FK FOREIGN KEY(idmembre_juge) REFERENCES membre(idmembre),
	CONSTRAINT evaluation_OF_membre2_FK FOREIGN KEY(idmembre_evalue) REFERENCES membre(idmembre)
);
