<?php

	require_once("Model/etudiant.php");
    echo "sf";
		$mail=$_POST['id'];
		$mdp=sha1(sha1($_POST['mdp']));

		$mdpBD=verifMdp($pseudo);


		if ($mdpBD['mdp_membre'] == $mdp)
		{
			setcookie("id", $mail, time()+(3600),"/");
			header("Location: ../validation.php?message=Vous_etes_bien_connecte&lien=test");
		}
		else
		{
			header("Location: ../erreur.php?message=Mot_de_passe_ou_pseudo_errone");
		}

?>
