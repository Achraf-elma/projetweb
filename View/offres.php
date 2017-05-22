<?php

	require_once("header.php");

?>
<html>
  <body>


    <h1>  Liste des Vaisselles en attente de plongeur </h1>

<?php
		while($donnees = $answer->fetch())
		{
			echo "Offre numero" . $donnees['idoffre'];
		  echo "PRIX " . $donnees["prix"];
			echo $donnees["quantitevaisselle"];



		}
		$answer->closeCursor();


?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap-3/js/bootstrap.min.js"></script>
  </body>
</html>

<?php

	require_once("footer.php");

?>
