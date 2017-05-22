<?php

	require_once("../Model/membre.php");

		$pseudo=$_POST['id'];
		$mdp=sha1(sha1($_POST['mdp']));

		$mdpBD=verifMdp($pseudo);


		if ($mdpBD['mdp'] == $mdp)
		{


			$idmembre = recupIdMembre($pseudo);
			global $cookie;
			$cookie = $idmembre;
			setcookie("id", $idmembre, time()+(3600),"/");
		  header("Location: ../validation.php?message=Vous_etes_bien_connecte&lien=test");
		}
		else
		{
			header("Location: ../erreur.php?message=Mot_de_passe_ou_pseudo_errone");
		}

?>
