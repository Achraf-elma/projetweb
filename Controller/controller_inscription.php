<?php

		require_once("../Model/membre.php");


		// On recupere les donn2es du formualaire
		$pseudo= !empty($_POST["id"]) ? $_POST["id"] : NULL;
		$email=  !empty($_POST["email"]) ? $_POST["email"] : NULL;
		$mdp= !empty($_POST["mdp"]) ? $_POST["mdp"] : NULL;
		$nom= !empty($_POST["nom"]) ? $_POST["nom"] : NULL;
		$prenom= !empty($_POST["prenom"]) ? $_POST["prenom"] : NULL;
		$sexe= !empty($_POST["sexe"]) ? $_POST["sexe"] : NULL;
    $image=".";

    // On appelle les fonctions qui vont nous retourner un membre si le pseudo/mail est deja pris
		$existemail=existeMail($email);
		$existpseudo=existePseudo($pseudo);

		if (empty($nom) || empty($email) || empty($mdp) || empty($nom) || empty($prenom) || empty($sexe))
		{
			header("Location: ../erreur.php?message=Merci_de_complèter_tous_vos_champs");
		}
		elseif (!is_null($existemail['email']) || !is_null($existpseudo['pseudo']) )
		{
			header("Location: ../erreur.php?message=Ce_pseudo_ou_ce_mail_est_déjà_associé_à_un_compte");
		}
		else
		{
			ajoutMembre($pseudo,$email, sha1(sha1($mdp)),$nom,$prenom,$sexe, $image);
		  echo "vous etes inscrits";
			header("Location: ../validation.php?message=Inscription_réussie&lien=test");
		}

?>
