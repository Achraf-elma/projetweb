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
  #Resultats: Permet de récuperer toutes les informations de la table de offre
  require_once("pdo.php");

  $bd= connexion();
  $answer = $bd->query("SELECT idoffre,prix, quantiteVaisselle,commentaire, pseudo, nomVille , nomQuartier FROM offre, quartier, membre, ville WHERE membre.idville = ville.idville AND membre.idquartier = quartier.idquartier AND offre.idmembre = membre.idmembre;  ");
  return $answer;
}

function recupOffreDuMembre($pseudo){
  #Resultats: Permet de récuperer toutes les informations de la table de offre concernant le membre passé en parametre.
  require_once("pdo.php");
  $bd= connexion();
  $answer = $bd->query("SELECT idoffre,prix, quantiteVaisselle,commentaire, pseudo, nomVille , nomQuartier FROM offre, quartier, membre, ville WHERE membre.idville = ville.idville AND membre.idquartier = quartier.idquartier AND offre.idmembre = membre.idmembre AND pseudo = '$pseudo';  ");
  return $answer;
}


function supprimeOffreDuMembre($idmembre){
  #Données: idmembre
  #Resultats: Permet de récuperer toutes les informations de la table de offre concernant le membre passé en parametre.
  require_once("pdo.php");
  $bd= connexion();
  $bd->exec(" DELETE FROM OFFRE WHERE idmembre = '$idmembre' ;");

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
       #Post: retourne l'offre de vaisselle du membre sinon renvoie vide

       require_once("../Model/pdo.php");

          $bd = connexion();

       $result = $bd->query("SELECT * FROM offre WHERE idmembre='".$idmembre."'");
           $offre=$result->fetch();
         $result->closeCursor();
          return $offre;
     }


?>
