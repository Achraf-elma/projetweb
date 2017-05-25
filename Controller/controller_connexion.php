<?php

	require_once("../Model/membre.php");

		$pseudo=$_POST['id'];
		$mdp=sha1(sha1($_POST['mdp']));

		$mdpBD=verifMdp($pseudo);


		if ($mdpBD['mdp'] == $mdp)
		{


			$idmembre = recupIdMembre($pseudo);

		       if($pseudo === "Admin") {
						 setcookie("id", "admin", time()+(3600),"/");
						 header("Location: ../validation.php?message=Vous_êtes_bien_connecté_en_tant_que_Admin");
					 }
					 else {
						 setcookie("id", $idmembre, time()+(3600),"/");
						 header("Location: ../validation.php?message=Vous_êtes_bien_connecté");
					 }

		}
		else
		{
			header("Location: ../erreur.php?message=Mot_de_passe_ou_pseudo_errone");
		}

?>
