
    <div style="text-align:center;" >


    <form method="post" action="../Controller/controller_evaluation.php">

      AVIS SUR CE MEMBRE :
      <input type="radio" name= "note" value="POSITIVE"> Positif <br>
      <input  type="radio" name="note" value="NEUTRE" > Neutre <br>
      <input  type="radio" name="note" value="NEGATIF" > Négatif <br>

  <span>Commentaire</span><textarea name="commentaire" class="textarea-field"></textarea></label>
  <input type="hidden" name="pseudo" value=<?php echo $membre['pseudo']; ?> />

			<input  class="buttonVaisselle" type="submit" value="Notez " class="connectionButton"><br>

		</form>


  </div>
