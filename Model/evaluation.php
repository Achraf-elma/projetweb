<?php



	function ajoutEval($idmembre_juge, $pseudo, $note, $commentaire)
	#Post: ajoute l'évaluation a la bdd
	{
		require_once("../Model/pdo.php");
		$bd = connexion();
    require_once("../Model/membre.php");
     $idprofil_evalue = recupIdMembre($pseudo);

  	$ajout = $bd->prepare( "INSERT INTO evaluation(idmembre_juge, idmembre_evalue,note, commentaire) VALUES ('".$idmembre_juge."','".$idprofil_evalue."','".$note."','".$commentaire."')");
    $ajout->execute();

    switch ($note) {
        case 'POSITIVE':
        $bd->exec("UPDATE profil SET positive = positive + 1 WHERE idmembre ='". $idprofil_evalue ."' ");
        break;

        case 'NEUTRE':
        $bd->exec("UPDATE profil SET neutre = neutre + 1 WHERE idmembre ='". $idprofil_evalue ."' ");
        break;

        case 'NEGATIF':
        $bd->exec("UPDATE profil SET negatif = negatif + 1 WHERE idmembre ='". $idprofil_evalue ."' ");
        break;
    }

	}


	function existeEval($idmembre_juge, $pseudo)
 #Donnée: pseudo
 #Résultat: Renvoie le membre dont le pseudo est la chaine de char donnée en paramètre sinon renvoie un vide
 {
	 require_once("../Model/pdo.php");
				 $bd = connexion();

				 require_once("../Model/membre.php");
		      $idprofil_evalue = recupIdMembre($pseudo);
				 $result = $bd->query("SELECT * FROM evaluation WHERE idmembre_juge='".$idmembre_juge."' AND idmembre_evalue='".$idprofil_evalue."'");

				 $etu=$result->fetch();
		 		 $result->closeCursor();
				 return $etu;
 }


 function recupEvalDuMembre($pseudo){
   #Resultats: Permet de récuperer toutes les evaluations du membre 
   require_once("Model/pdo.php");

   $bd= connexion();
	 require_once("Model/membre.php");
		$idprofil_evalue = recupIdMembre($pseudo);
   $answer = $bd->query("SELECT * FROM evaluation WHERE idmembre_evalue = '$idprofil_evalue';  ");
   return $answer;
 }

?>
