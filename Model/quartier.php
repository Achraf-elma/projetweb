<?php

function recupIdQuartier($nomQuartier)
#Donnée: nom de la quartier
#Resultat: int correspondant a l'idQuartier de la quartier dont le nom est en parametre
{
  require_once("pdo.php");
  $bd= connexion();

  $result = $bd->query("SELECT idquartier FROM quartier WHERE nomQuartier='".$nomQuartier."'");
  $idQuartier=$result->fetch();
  return $idQuartier;
}

function existeNomQuartier($nomQuartier)
#Donnée: nom Quartier
#Resultat Bool
#Vérifie que le nom Quartier est bien le nom d'une quartier existante
{
  require_once("pdo.php");
  $bd= connexion();

  $result = $bd->query("SELECT EXISTS (SELECT * FROM quartier WHERE nomQuartier='$nomQuartier') AS quartier_exists");
  $Quartier = $result->fetch();
  return $Quartier['quartier_exists'];
}

function creerQuartierIfNotExists($nomQuartier)
#Donnée: nom Quartier
#Resultat Creer un quartier si n'existe pas
{
  require_once("pdo.php");
  $bd= connexion();

  if(!existeNomQuartier($nomVille))
  {
  $ajout = $bd->prepare( "INSERT INTO quartier(nomQuartier) VALUES ('".$nomQuartier."')");
  $ajout->execute();
  }

?>
