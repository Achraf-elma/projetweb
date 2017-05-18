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
	function ajoutMembre($pseudo, $email,$pass_hache, $nom, $prenom, $sexe, $image)
	#Donnée: Email (chaine de char) de l'étudiant, un mdp haché, nom(char) et prénom(char) de l'étudiant ainsi que sa promo (int = idPromo)
	#Post: ajoute l'étudiant à la base de données
	{
	      require_once("pdo.php");
        $bd = connexion();
        $ajout = $bd->prepare( "INSERT INTO etudiant (pseudo, email, mdp_membre, nom, prenom, sexe, image) VALUES ('".$pseudo."','".$email."','".$pass_hache."','".$nom."','".$prenom."','".$sexe."', '".$image."')");
        $ajout->execute();
        pg_close($bd);
	}


?>
