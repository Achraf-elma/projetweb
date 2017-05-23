<?php

function recupIdQuartier($nomQuartier, $idville)
#Donnée: nom de la quartier
#Resultat: int correspondant a l'idQuartier de la quartier dont le nom est en parametre
{
  require_once("pdo.php");
  $bd= connexion();

  $result = $bd->query("SELECT idquartier FROM quartier WHERE nomQuartier='$nomQuartier' AND  idville=$idville");
  $idQuartier=$result->fetch();
  echo $idQuartier["idquartier"];
  return $idQuartier["idquartier"];
}

function existeNomQuartier($nomQuartier, $idville)
#Donnée: nom Quartier
#Resultat Bool
#Vérifie que le nom Quartier est bien le nom d'une quartier existante
{
  require_once("pdo.php");
  $bd= connexion();

  $result = $bd->query("SELECT EXISTS (SELECT * FROM quartier WHERE nomQuartier='$nomQuartier' AND  idville='$idville') AS quartier_exists");
  $Quartier = $result->fetch();
echo "ok2";
  return $Quartier['quartier_exists'];
}

function creerQuartierIfNotExists($nomQuartier, $idville)
#Donnée: nom Quartier
#Resultat Creer un quartier si n'existe pas
{
  require_once("pdo.php");
  $bd= connexion();

  if(!existeNomQuartier($nomQuartier, $idville))
  {
    echo "ok";
  $ajout = $bd->prepare( "INSERT INTO quartier(nomQuartier, idville) VALUES ('".$nomQuartier."', '".$idville."')");
  $ajout->execute();
  }

}
?>
