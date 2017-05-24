<?php
/*
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
*/

function recupIdMembre($pseudo)
#Donnée: nom de la membre
#Resultat: int correspondant a l'idMembre de la membre dont le nom est en parametre
{
  require_once("pdo.php");
  $bd= connexion();

  $result = $bd->query("SELECT idmembre FROM membre WHERE pseudo ='".$pseudo."'");
  $idMembre=$result->fetch();
  echo $idMembre["idmembre"];
  return $idMembre["idmembre"];
}

	function verifMdp($pseudo)
	#Donnnée: Email de l'étudiant connecté
	#Résultat: Renvoie le mot de passe de l'étudiant
	{
			require_once("pdo.php");

				$bd = connexion();
				$req = $bd->prepare("SELECT mdp FROM membre WHERE pseudo='".$pseudo."'");
				$req->execute();
				$mdpBD=$req->fetch();
	 			$req->closeCursor();
				return $mdpBD;
	}

	function ajoutMembre($pseudo, $email,$pass_hache,$telephone,$sexe,$nomVille,$nomQuartier)
	#Donnée: Email (chaine de char) de l'étudiant, un mdp haché, nom(char) et prénom(char) de l'étudiant ainsi que sa promo (int = idPromo)
	#Post: ajoute l'étudiant à la base de données
	{


	   require_once("../Model/pdo.php");
		 require_once("../Model/quartier.php");
		 require_once("../Model/ville.php");

     $bd = connexion();

		// On creer la ville / quartier si besoin. ET on recupere leur id respectif
		 creerVilleIfNotExists($nomVille);
		 $idville = recupIdVille($nomVille);

		 creerQuartierIfNotExists($nomQuartier, $idville);
		 $idquartier = recupIdQuartier($nomQuartier, $idville);

  	$ajout = $bd->prepare( "INSERT INTO membre(pseudo, email, mdp, telephone, sexe, idville, idquartier) VALUES ('".$pseudo."','".$email."','".$pass_hache."','".$telephone."','".$sexe."', '$idville', '$idquartier')");
    $ajout->execute();

    $idmembre =recupIdMembre($pseudo);
    $ajout2 = $bd->prepare( "INSERT INTO profil(idmembre, positive, neutre, negatif, description) VALUES ('".$idmembre."',0,0,0, 'Aucune description')");
    $ajout2->execute();

	}

	function existeMail($email)
	#Donnée: email
	#Résultat: Renvoie le membre dont l'email est la chaine de char donnée en paramètre sinon renvoie un vide
	{
		require_once("pdo.php");
					$bd = connexion();
					$result = $bd->query("SELECT * FROM membre WHERE email='".$email."'");
					$etu=$result->fetch();
					$result->closeCursor();
					return $etu;
	}

	function existePseudo($pseudo)
 #Donnée: pseudo
 #Résultat: Renvoie le membre dont le pseudo est la chaine de char donnée en paramètre sinon renvoie un vide
 {
	 require_once("pdo.php");
				 $bd = connexion();
				 $result = $bd->query("SELECT * FROM membre WHERE pseudo='".$pseudo."'");
			 	 $etu=$result->fetch();
		 		 $result->closeCursor();
				 return $etu;
 }

 function dataMembre($pseudo)
 #Donnée: nom de la membre
 #Resultat: int correspondant a l'idMembre de la membre dont le nom est en parametre
 {
   require_once("pdo.php");
   $bd= connexion();

   $result = $bd->query("SELECT membre.idmembre,pseudo,email, telephone, nomVille, positive,neutre, negatif FROM membre, ville, profil WHERE ville.idville = membre.idville AND profil.idmembre = membre.idmembre AND pseudo ='".$pseudo."'");
   $Membre=$result->fetch();

   return $Membre;
 }


?>
