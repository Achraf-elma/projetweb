
    <div style="text-align:center;" >

  <?php echo $membre['pseudo'];
  $ps = $membre['pseudo']; ?>
    <form method="post" <?php echo "action='../Controller/controller_evaluation.php?id=$ps'">  ?>

      AVIS SUR CE MEMBRE :
      <input type="radio" name= "note" value="Positif"> Positif
      <input  type="radio" name="note" value="Neutre" > Neutre <br>
      <input  type="radio" name="note" value="Negatif" > Négatif <br>

  <span>Commentaire</span><textarea name="message" class="textarea-field"></textarea></label>

			<input  class="buttonVaisselle" type="submit" value="Notez " class="connectionButton"><br>

		</form>


  </div>
