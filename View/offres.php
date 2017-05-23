<?php

	require_once("header.php");

?>
<html>
  <body>


    <h1>  Liste des Vaisselles en attente de plongeur </h1>
<table class=tableau>
		<thead>
			<tr>
				<th > Vaisselles</th>
				<th> Numero </th>
				<th> Prix</th>
				<th> Quantite de Vaisselle </th>
				<th> Commentaire</th>

			</tr>
		</thead>


<?php
		while($donnees = $answer->fetch())
		{
  ?>
<tr>

			 <td> <?php echo "Offre numero" . $donnees['idoffre'];  ?> </td>
		   <td> <?php echo "PRIX " . $donnees["prix"]; ?> </td>
			 <td> <?php echo $donnees["quantitevaisselle"]; ?> </td>
			 <td> <?php echo $donnees["commentaire"]; ?>  </td>

</tr>

		}
		<?php
		$answer->closeCursor();
?>
	</table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap-3/js/bootstrap.min.js"></script>
  </body>
</html>

<?php

	require_once("footer.php");

?>
