<?php

	/* function verifMdp($pseudo)
	#Donnnée: pseudo de l'étudiant connecté
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
    */
echo "ajoutemembre1";
	function ajoutMembre($pseudo, $email,$pass_hache, $nom, $prenom, $sexe, $image)
	#Donnée: Email (chaine de char) de l'étudiant, un mdp haché, nom(char) et prénom(char) de l'étudiant ainsi que sa promo (int = idPromo)
	#Post: ajoute l'étudiant à la base de données
	{

		  echo "supers";
	   require_once("../Model/pdo.php");

			echo "ajoutemembre2";
        $bd = connexion();
				echo "ajoutemembre32";

        $ajout = $bd->prepare( "INSERT INTO membre(pseudo, email, mdp_membre, nom, prenom, sexe, image) VALUES ('".$pseudo."','".$email."','".$pass_hache."','".$nom."','".$prenom."','".$sexe."', '".$image."')");
        $ajout->execute();
			echo "done";
	}


?>
