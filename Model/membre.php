<?php

	function verifMdp($pseudo)
	#Donnnée: Email de l'étudiant connecté
	#Résultat: Renvoie le mot de passe de l'étudiant
	{
			require_once("pdo.php");

				$bd = connexion();
				$req = $bd->prepare("SELECT mdp_membre FROM etudiant WHERE pseudo='".$pseudo."'");
				$req->execute();
				$mdpBD=$req->fetch();
	 			$req->closeCursor();
				return $mdpBD;
	}

	function ajoutMembre($pseudo, $email,$pass_hache, $nom, $prenom, $sexe, $image)
	#Donnée: Email (chaine de char) de l'étudiant, un mdp haché, nom(char) et prénom(char) de l'étudiant ainsi que sa promo (int = idPromo)
	#Post: ajoute l'étudiant à la base de données
	{
	   require_once("../Model/pdo.php");

        $bd = connexion();
        $ajout = $bd->prepare( "INSERT INTO membre(pseudo, email, mdp_membre, nom, prenom, sexe, image) VALUES ('".$pseudo."','".$email."','".$pass_hache."','".$nom."','".$prenom."','".$sexe."', '".$image."')");
        $ajout->execute();

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
