
<table>
		<thead>
			<tr>

				<th> Numero d'evaluation </th>
				<th> Note</th>
				<th> Commentaire</th>


			</tr>
		</thead>
	<tbody>

<?php
   require_once("Model/evaluation.php");
    $answer = recupEvalDuMembre($membre['pseudo']);
		while($donnees = $answer->fetch())
		{
  ?>
<tr>

			 <td> <?php echo $donnees['idevaluation'];  ?> </td>
		   <td> <?php echo $donnees["note"];  ?> </td>
			 <td> <?php echo $donnees["commentaire"]; ?> </td>


</tr>


		<?php
		}
		$answer->closeCursor();
		?>
	</tbody>
	</table>
 ?>
