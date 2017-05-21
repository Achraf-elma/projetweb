<?php

function recupIdVille($nomVille)
#Donnée: nom de la ville
#Resultat: int correspondant a l'idVille de la ville dont le nom est en parametre
{
  require_once("pdo.php");
  $bd= connexion();

  $result = $bd->query("SELECT idville FROM ville WHERE nomVille='".$nomVille."'");
  $idVille=$result->fetch();
  return $idVille["idville"];
}

function existeNomVille($nomVille)
#Donnée: nom Ville
#Resultat Bool
#Vérifie que le nom Ville est bien le nom d'une ville existante
{
  require_once("pdo.php");
  $bd= connexion();

  $result = $bd->query("SELECT EXISTS (SELECT * FROM ville WHERE nomVille='$nomVille') AS ville_exists");
  $Ville = $result->fetch();
  return $Ville['ville_exists'];
}

function creerVilleIfNotExists($nomVille)
#Donnée: nom Ville
#Resultat Creer un ville si n'existe pas
{
  require_once("pdo.php");
  $bd= connexion();

  if(!existeNomVille($nomVille))
  {
  $ajout = $bd->prepare( "INSERT INTO ville(nomVille) VALUES ('".$nomVille."')");
  $ajout->execute();
  }

}
?>
