<?php

	function verifMdp($pseudo)
	#Donnnée: Email de l'étudiant connecté
	#Résultat: Renvoie le mot de passe de l'étudiant
	{
			require_once("pdo.php");

				$bd = connexion();
				$req = $bd->prepare("SELECT mdp_membre FROM membre WHERE pseudo='".$pseudo."'");
				$req->execute();
				$mdpBD=$req->fetch();
	 			$req->closeCursor();
				return $mdpBD;
	}

	function ajoutMembre($pseudo, $email,$pass_hache,$telephone,$sexe,$nomVille, $nomQuartier)
	#Donnée: Email (chaine de char) de l'étudiant, un mdp haché, nom(char) et prénom(char) de l'étudiant ainsi que sa promo (int = idPromo)
	#Post: ajoute l'étudiant à la base de données
	{
		echo "done";

	   require_once("../Model/pdo.php");

		 require_once("../Model/quartier.php");
		 require_once("../Model/ville.php");
     $bd = connexion();

		// On creer la ville / quartier si besoin. ET on recupere leur id respectif
		 creerVilleIfNotExists($nomVille);
		 creerQuartierIfNotExists($nomQuartier);
/*		 
		 $idville = recupIdVille($nomVille));
		 $idquartier = recupIdQuartier($nomQuartier);

        $ajout = $bd->prepare( "INSERT INTO membre(pseudo, email, mdp_membre, telephone, sexe, ville, quartier) VALUES ('".$pseudo."','".$email."','".$pass_hache."','".$telephone."','".$prenom."','".$sexe."', '".$ville."', '".$quartier."')");
        $ajout->execute();
*/
	}

	function existeMail($email)
	#Donnée: email
	#Résultat: Renvoie l'étudiant dont l'email est la chaine de char donnée en paramètre sinon renvoie un vide
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
 #Résultat: Renvoie l'étudiant dont le pseudo est la chaine de char donnée en paramètre sinon renvoie un vide
 {
	 require_once("pdo.php");
				 $bd = connexion();
				 $result = $bd->query("SELECT * FROM membre WHERE pseudo='".$pseudo."'");
			 	 $etu=$result->fetch();
		 		 $result->closeCursor();
				 return $etu;
 }


?>
