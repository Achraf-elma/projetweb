<?php


    $prix=!empty($_POST["prix	"]) ? $_POST['prix'] : NULL;
    $quantite=!empty($_POST["quantite"]) ? $_POST["quantite"] : NULL;
    $commentaire=!empty($_POST["message"]) ? $_POST["message"] : NULL;



		if (empty($prix) || empty($quantite) || empty($commentaire))
		{
			header("Location: ../erreur.php?message=Merci_de_complèter_tous_vos_champs");
		}
		elseif (9==0)
		{
			header("Location: ../erreur.php?message=Ce_pseudo_ou_ce_mail_est_déjà_associé_à_un_compte");
		}
		else
		{

			ajoutMembre($pseudo,$email, sha1(sha1($mdp)),$telephone,$sexe,$ville, $quartier);

			header("Location: ../validation.php?message=Votre_annonce_est_poste");
		}

 ?>
