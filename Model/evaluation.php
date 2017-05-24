<?php



	function ajoutEval($idmembre_juge, $idprofil_evalue, $note, $commentaire)
	#Donnée: Email (chaine de char) de l'étudiant, un mdp haché, nom(char) et prénom(char) de l'étudiant ainsi que sa promo (int = idPromo)
	#Post: ajoute l'étudiant à la base de données
	{


	   require_once("../Model/pdo.php");


     $bd = connexion();


  	$ajout = $bd->prepare( "INSERT INTO evaluation(idmembre_juge, idprofil_evalue, note, commentaire) VALUES ('".$idmembre_juge."','".$idprofil_evalue."','".$note."','".$commentaire."')");
    $ajout->execute();


	}

?>
