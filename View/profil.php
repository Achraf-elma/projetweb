<?php

	require_once("header.php");

?>

    <body>


 <h1> Profil de <?php echo $membre['pseudo']; ?> </h1>
<div class=profil>


      <p> Habite à <?php echo $membre['nomville']; ?> </p>

       <script type="text/javascript" src="./View/afficher_cacher_div.js"></script>
    <span class="bouton" id="bouton_texte" onclick="javascript:afficher_cacher('texte');">Afficher le texte</span>
    <div style="text-align:center; width:10%;" id="texte" class="texte">
        <?php echo $membre["telephone"]; ?>
    </div>
    <script type="text/javascript">
    //<!--
        afficher_cacher('texte');
    //-->
    </script>

<h3> Evaluation </h3>
Avis : Positive : <?php echo $membre['positive']; ?>  Neutre : <?php echo $membre['neutre']; ?>  Négatif : <?php echo $membre['negatif']; ?> 
<?php require_once("evaluation") ?>

<p>  Offre en cours : </p>
 <?php require_once("offreencours.php"); ?>

</body>

<?php

	require_once("footer.php");

?>
