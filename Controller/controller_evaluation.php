<?php

	require_once("../Model/evaluation.php");

		$note=$_POST['note'];
		$commentaire=$_POST['commentaire'];




		if (isset($note))
		{
			echo $_COOKIE[id];
			echo $_GET[id];
			ajoutEval($_COOKIE[id],$_GET[id], $note,$commentaire);
		  //header("Location: ../validation.php?message=Merci_pour_votre_avis");
		}
		else
		{
			header("Location: ../erreur.php?message=Mot_de_passe_ou_pseudo_errone");
		}

?>
