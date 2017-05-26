<?php

	require_once("header.php");

?>

    <body>

<div class="profil contenu">
 <h1> Profil de <?php echo $membre['pseudo']; ?> </h1>




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


<h3> Description </h3>
<p>
Habite à <?php echo $membre['nomville']; ?> <br>
A propos de moi : <br> "<?php echo $membre['description']; ?> " <

</p>

<h3> Evaluation </h3>
Avis : Positif : <?php echo $membre['positive']; ?>  Neutre : <?php echo $membre['neutre']; ?>  Négatif : <?php echo $membre['negatif']; ?> <br>
<?php echo $membre['pseudo']; ?>



<?php
if (isset($_COOKIE['id']))
{
   include_once("evaluation.php");
}
else
{
	echo "Connectez-vous pour laisser un avis";
}
 ?>





<h3>  Offre en cours : </h3>
 <?php include_once("offreencours.php"); ?>


<h3>  Liste des Commentaires laissés : </h3>
<?php include_once("commentaire.php"); ?>

</div>
</body>

<?php

	require_once("footer.php");

?>
