<?php

	require_once("../Model/evaluation.php");

		$note=$_POST['note'];
		$commentaire=$_POST['commentaire'];
    $pseudo = $_POST['pseudo'];

    echo $pseudo;

		if (isset($note))
		{
			echo $_COOKIE[id];

			ajoutEval($_COOKIE[id],$pseudo, $note,$commentaire);
		  header("Location: ../validation.php?message=Merci_pour_votre_avis");
		}
		else
		{
			header("Location: ../erreur.php?message=Precisez_une_note_svp");
		}

?>
