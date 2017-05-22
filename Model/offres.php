<?php
/*
CREATE TABLE offre(
  idoffre SERIAL NOT NULL,
  prix REAL,
  quantiteVaisselle VARCHAR CHECK(quantiteVaisselle IN('Grosse','Moyenne', 'Petit')),
  idmembre INTEGER,
  commentaire VARCHAR,
  date_publication timestamptz,
  CONSTRAINT offre_PK PRIMARY KEY(idoffre),
  CONSTRAINT offre_OF_membre_FK FOREIGN KEY(idmembre) REFERENCES membre(idmembre)
);
 */


function recupOffre(){
  #Données: idquestion, identifiant de la question(ou groupe de proposition)
  #Resultats: Permet de récuperer toutes les informations de la table de reponse concernant la question passée en parametre.
  require_once("pdo.php");
  $bd= connexion();
  $answer = $bd->query("SELECT * FROM offre");
  return $answer;
}

function recupDateActuelle()
{
  require_once("pdo.php");
  $bd= connexion();

  $result = $bd->query("SELECT CURRENT_TIMESTAMP;");
  $temps=$result->fetch();
  return $temps;
}
function creerOffre($prix,$quantiteVaisselle, $idmembre,$commentaire){
  #Donnée: ensemble de donnees pour creer l'offre
  #Post: ajoute l'offre à la base de données
     require_once("../Model/pdo.php");
    $bd = connexion();

   $ajout = $bd->prepare( "INSERT INTO offre(prix, quantiteVaisselle, idmembre, commentaire, date_publication) VALUES ('".$prix."','".$quantiteVaisselle."','".$idmembre."','".$commentaire."',now())");
   $ajout->execute();

  }


  function OffreDuMembre($idmembre){
    #Donnée: id membre
    #Post: retourne l'offre de vaisselle du membre
       require_once("../Model/pdo.php");
      $bd = connexion();

     $offre = $bd->query( "SELECT * FROM offre WHERE idmembre ='".$idmembre."' "):
     return $offre;

    }

  /*
function modifieReponse($nouveauLibelle,$idRep,$idQuestion){
  #Données: nouveau Libelle un string, idRep l'identifiant de la reponse et idQuestion l'identifiant de la question (ou groupe)
  #Resultats : Modifie la base de donnée. Permet de modifier le libellé de la reponse par le nouveau libellé passé en parametre
  require_once("pdo.php");
  $bd= connexion();

  $bd->exec("UPDATE reponse SET libelle_rep ='".$nouveauLibelle."' WHERE idQuestion ='".$idQuestion."'  AND idR ='".$idRep."'");

}
 */

?>
