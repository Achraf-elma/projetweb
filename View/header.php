<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>La Vaiselle du Voisin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./bootstrap-3/css/bootstrap.min.css" rel="stylesheet">
    <link href="./View/vaisselle.css" rel="stylesheet" !important>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <div class="banniere"> <a href="index" > <img src="./View/image/banniere.jpg" width="640" height="200"> </a> </div>

  </head>

  <header><!-- En-tête du site -->

  <ul class="topnav">

    <li><a class="active" href="index">Accueil</a></li>
    <li><a href="principe">Le principe</a></li>
    <li><a href="offres">Offre de Vaisselle</a></li>
    <li><a href="votreannonce">Postez une annonce</a></li>

   <?php
    if (!isset($_COOKIE['id']))
    {

      echo '<li class="right"><a href="inscription"> Inscription</a></li>
    <li class="right"><a href="connexion">Connexion</a></li>';
    }
    else {
      require_once("./Model/membre.php");
      $pseudo=recupPseudoMembre($_COOKIE['id']);
      echo '<li class="right"><a href="deconnexion">Deconnexion</a></li>';
      echo '<li class="right">';
      echo "<a href='profil?id=$pseudo'>Mon profil</a></li>";
    }
    ?>

  <!--  <li class="right"><a href="#about">Mon profil</a></li> -->
  </ul>
</header>
