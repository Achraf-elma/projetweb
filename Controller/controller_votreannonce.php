<?php

    require_once("../Model/offres.php");
    $prix=!empty($_POST["prix"]) ? $_POST['prix'] : NULL;
    $quantite=!empty($_POST["quantite"]) ? $_POST["quantite"] : NULL;
    $commentaire=!empty($_POST["message"]) ? $_POST["message"] : " ";



   $existeOffreDuMembre = OffreDuMembre($_COOKIE['id']);

    if (empty($prix) || !is_numeric($prix) )
		{
			header("Location: ../erreur.php?message=Merci_de_renseigner_un_prix_correct");
		}
    elseif ( !is_null($existeOffreDuMembre['idmembre']) )
    {

      header("Location: ../erreur.php?message=Vous_avez_deja_une_annonce_en_cours");
    }
		else
		{
      $id = $_COOKIE['id'];
			creerOffre($prix,$quantite,$id,$commentaire);
      header("Location: ../validation.php?message=Votre_annonce_est_poste?lien=offres.php");
		}

 ?>
