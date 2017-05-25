<?php

	require_once("header.php");

?>
<html>
  <body>

<div  style="overflow-x:auto;" class=contenu>
    <h1>  Liste des Vaisselles en attente de plongeur </h1>


<table>
		<thead>
			<tr>

				<th> Numero d'offre </th>
				<th> Prix</th>
				<th> Quantite de Vaisselle </th>
				<th> Commentaire</th>
				<th>Ville</th>
				<th>Quartier</th>
				<th>Intéressé ?</th>
		<?php
    if($_COOKIE['id'] =='0'){
			echo "<th> Supprimer </th>";
		}
     ?>

			</tr>
		</thead>
	<tbody>

<?php
		while($donnees = $answer->fetch())
		{
  ?>
<tr>

			 <td> <?php echo $donnees['idoffre'];  ?> </td>
		   <td> <?php echo $donnees["prix"] . " €";  ?> </td>
			 <td> <?php echo $donnees["quantitevaisselle"]; ?> </td>
			 <td> <?php echo $donnees["commentaire"]; ?>  </td>
			 <td> <?php echo $donnees["nomville"]; ?>  </td>
			 <td> <?php echo $donnees["nomquartier"]; ?>  </td>
			 <td> <?php echo 'Contactez <a href="../profil.php?id=' .$donnees["pseudo"] . '">' .$donnees["pseudo"] ."</a>"; ?>  </td>

	 <?php  if($_COOKIE['id'] == '0') {
		 echo ' <td> <a href="supprime.php?id=' .$donnees["pseudo"] . '" onclick="return confirm("Etes-vous sûr de supprimer?");> X </a> </td>';
	 }?>



</tr>


		<?php
		}
		$answer->closeCursor();
		?>
	</tbody>
	</table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap-3/js/bootstrap.min.js"></script>


</div>
  </body>
</html>

<?php

	require_once("footer.php");

?>
