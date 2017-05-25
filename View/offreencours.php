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



			</tr>
		</thead>
	<tbody>

<?php
   require_once("Model/offres.php");
    $answer = recupOffreDuMembre($membre['pseudo']);
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

</tr>


		<?php
		}
		$answer->closeCursor();
		?>
	</tbody>
	</table>
