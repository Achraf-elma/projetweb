<?php


		require_once("../Model/membre.php");
		$pseudo=$_POST['id'];
		$email=$_POST['email'];
		$mdp=$_POST['mdp'];
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$sexe=$_POST['sexe'];
     $image="."

    //ajoutMembre($pseudo,$email, sha1(sha1($mdp)),$nom,$prenom,$sexe, $image);
		ajoutMembre($pseudo, $email,$mdp, $nom, $prenom, $sexe, $image);
		//$verificationemail=existeEtudiant($id);


		/*if (empty($id) || empty($code) || empty($mdp))
		{
			header("Location: ../erreur.php?message=Merci_de_complèter_tous_vos_champs");
		}
		elseif (!is_null($verificationemail['email']))
		{
			header("Location: ../erreur.php?message=Ce_mail_est_déjà_associé_à_un_compte");
		}
		else if ($idpromo[0]!=1 AND $idpromo[0]!=2 AND $idpromo[0]!=3 AND $idpromo[0]!=4 AND $idpromo[0]!=5 AND $idpromo[0]!=6 AND $idpromo[0]!=7 AND $idpromo[0]!=8 AND $idpromo[0]!=9)
		{
			header("Location: ../erreur.php?message=Merci_de_renseigner_votre_promo");
		}
		else
		{
			ajoutEtudiant($id,sha1(sha1($mdp)),$nom,$prenom,$idpromo[0]);
			setcookie("id", $id, time()+(3600),"/");
			header("Location: ../validation.php?message=Inscription_réussie&lien=test");
		} */
?>
