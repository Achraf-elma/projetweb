<?php

		$id=$_POST['id'];
		$mdp=sha1(sha1($_POST['mdp']));
		//$mdpBD=verifMdp($id);




		//if ($mdpBD['mdp_etudiant'] == $mdp)
		//{
			setcookie("id", $id, time()+(3600),"/");
			//initEtudiant($mail);
			//header("Location: ../validation.php?message=Vous_etes_bien_connecte&lien=test");


		//}
		//else
		//{

			//header("Location: ../erreur.php?message=Mot_de_passe_ou_mail_errone");
		//}


?>
