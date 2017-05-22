<?php

    require_once("../Model/offres.php");
    $prix=!empty($_POST["prix"]) ? $_POST['prix'] : NULL;
    $quantite=!empty($_POST["quantite"]) ? $_POST["quantite"] : NULL;
    $commentaire=!empty($_POST["message"]) ? $_POST["message"] : " ";


     echo $prix;
     echo $quantite;
     echo $commentaire;
     echo $_COOKIE['id'];
		if (empty($prix) || empty($quantite) || empty($commentaire))
		{
			header("Location: ../erreur.php?message=Merci_de_complèter_tous_vos_champs");
		}
		else
		{
       $id = $_COOKIE['id'];
			creerOffre($prix,$quantiteVaisselle,$id,$commentaire);

		//	header("Location: ../validation.php?message=Votre_annonce_est_poste");
		}

 ?>
