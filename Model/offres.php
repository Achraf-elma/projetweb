<?php

function recupOffre(){
  #Données: idquestion, identifiant de la question(ou groupe de proposition)
  #Resultats: Permet de récuperer toutes les informations de la table de reponse concernant la question passée en parametre.
  require_once("pdo.php");
  $bd= connexion();
  $answer = $bd->query("SELECT * FROM offre");
  return $answer;
}
function creerOffre(){
  #Donnée: Email (chaine de char) de l'étudiant, un mdp haché, nom(char) et prénom(char) de l'étudiant ainsi que sa promo (int = idPromo)
  #Post: ajoute l'étudiant à la base de données
     require_once("../Model/pdo.php");
    $bd = connexion();
    $ajout = $bd->prepare( "INSERT INTO offre(idoffre, pseudo, ville, quartier, prix, quantiteVaisselle) VALUES ('".$pseudo."','".$email."','".$pass_hache."','".$nom."','".$prenom."','".$sexe."', '".$image."')");
    $ajout->execute();

  }
function modifieReponse($nouveauLibelle,$idRep,$idQuestion){
  #Données: nouveau Libelle un string, idRep l'identifiant de la reponse et idQuestion l'identifiant de la question (ou groupe)
  #Resultats : Modifie la base de donnée. Permet de modifier le libellé de la reponse par le nouveau libellé passé en parametre
  require_once("pdo.php");
  $bd= connexion();

  $bd->exec("UPDATE reponse SET libelle_rep ='".$nouveauLibelle."' WHERE idQuestion ='".$idQuestion."'  AND idR ='".$idRep."'");

}

?>