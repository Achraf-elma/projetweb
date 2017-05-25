<?php

	require_once("../Model/evaluation.php");

		$note=$_POST['note'];
		$commentaire=$_POST['commentaire'];
    $pseudo = $_POST['pseudo'];

		if (isset($note))
		{
			echo $_COOKIE[id];
   echo $_COOKIE[id];
	 echo $pseudo;
	 echo $note;
	 echo $commentaire;
			ajoutEval($_COOKIE[id],$pseudo, $note,$commentaire);
		 // header("Location: ../validation.php?message=Merci_pour_votre_avis");
		}
		else
		{
			header("Location: ../erreur.php?message=Precisez_une_note_svp");
		}

?>
