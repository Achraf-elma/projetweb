<?php

	require_once("../Model/evaluation.php");
	require_once("../Model/membre.php");

		$note=$_POST['note'];
		$commentaire=$_POST['commentaire'];
    $pseudo = $_POST['pseudo'];
		$Eval=existeEval($_COOKIE[id], $pseudo);
		$id_evalue = recupIdMembre($pseudo);

		if (!isset($note))
		{
				header("Location: ../erreur?message=Précisez_une_note_svp");

		}
		elseif ($_COOKIE[id]==$id_evalue) {
			  header("Location: ../erreur?message=Vous_ne_pouvez_pas_donner_votre_avis_sur_vous_même");
		}
		elseif (!is_null($Eval['idmembre_juge'] ) ) {
			  header("Location: ../erreur?message=Vous_avez_déjà_noté_ce_membre");
		}
		else
		{
				ajoutEval($_COOKIE[id],$pseudo, $note,$commentaire);
			  header("Location: ../validation?message=Merci_pour_votre_avis");

		}

?>
