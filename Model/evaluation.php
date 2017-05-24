<?php



	function ajoutEval($idmembre_juge, $pseudo, $note, $commentaire)
	#Donnée: Email (chaine de char) de l'étudiant, un mdp haché, nom(char) et prénom(char) de l'étudiant ainsi que sa promo (int = idPromo)
	#Post: ajoute l'étudiant à la base de données
	{
		require_once("../Model/pdo.php");
		$bd = connexion();
    require_once("../Model/membre.php");
     $idprofil_evalue = recupIdMembre($pseudo);
		 echo $idprofil_evalue;




  	$ajout = $bd->prepare( "INSERT INTO evaluation(idmembre_juge, idprofil_evalue, commentaire) VALUES ('".$idmembre_juge."','".$idprofil_evalue."','".$commentaire."')");
    $ajout->execute();

    switch ($note) {
        case 'Positif':
        $bd->exec("UPDATE profil SET positive = positive + 1 WHERE idmembre ='". $idprofil_evalue ."' ");
        break;

        case 'Neutre':
        $bd->exec("UPDATE profil SET neutre = neutre + 1 WHERE idmembre ='". $idprofil_evalue ."' ");      break;
        break;

        case 'Negatif':
        $bd->exec("UPDATE profil SET negatif = negatif + 1 WHERE idmembre ='". $idprofil_evalue ."' ");
        break;
    }

	}

?>
