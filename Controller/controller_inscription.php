<?php


		require_once("../Model/membre.php");
		$pseudo= !empty($_POST["id"]) ? $_POST["id"] : NULL;
		$email=  !empty($_POST["email"]) ? $_POST["email"] : NULL;
		$mdp= !empty($_POST["mdp"]) ? $_POST["mdp"] : NULL;
		$nom= !empty($_POST["nom"]) ? $_POST["nom"] : NULL;
		$prenom= !empty($_POST["prenom"]) ? $_POST["prenom"] : NULL;
		$sexe= !empty($_POST["sexe"]) ? $_POST["sexe"] : NULL;
    $image=".";


    //ajoutMembre($pseudo,$email, sha1(sha1($mdp)),$nom,$prenom,$sexe, $image);

		//$verificationemail=existeEtudiant($id);


		if (empty($nom))
		{
			header("Location: ../erreur.php?message=Merci_de_complèter_tous_vos_champs");
		}
		/*
		elseif (!is_null($verificationemail['email']))
		{
			header("Location: ../erreur.php?message=Ce_mail_est_déjà_associé_à_un_compte");
		}
		else if ($idpromo[0]!=1 AND $idpromo[0]!=2 AND $idpromo[0]!=3 AND $idpromo[0]!=4 AND $idpromo[0]!=5 AND $idpromo[0]!=6 AND $idpromo[0]!=7 AND $idpromo[0]!=8 AND $idpromo[0]!=9)
		{
			header("Location: ../erreur.php?message=Merci_de_renseigner_votre_promo");
		} */
		else
		{
			ajoutMembre($pseudo,$email, sha1(sha1($mdp)),$nom,$prenom,$sexe, $image);
		//ajoutMembre($pseudo, $email,$mdp, $nom, $prenom, $sexe, $image);
		echo "vous etes inscrits";
			header("Location: ../validation.php?message=Inscription_réussie&lien=test");
		}
?>
