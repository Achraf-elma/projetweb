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

<p>  Offre en cours : </p>
 <?php include_once("offreencours.php"); ?>

</body>

<?php

	require_once("footer.php");

?>
