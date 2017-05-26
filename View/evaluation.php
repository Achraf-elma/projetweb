
    <div style="text-align:center;" >


    <form method="post" action="../Controller/controller_evaluation.php">

      Donnez votre avis sur ce membre : <br>
      <input type="radio" name= "note" value="POSITIVE"> Positif
      <input  type="radio" name="note" value="NEUTRE" > Neutre
      <input  type="radio" name="note" value="NEGATIF" > Négatif

    <label for="commentaire">Commentaire</label><br/>
   <textarea name="commentaire" id="commentaire"></textarea> <br>
  <input type="hidden" name="pseudo" value=<?php echo $membre['pseudo']; ?> />

			<input  class="buttonVaisselle" type="submit" value="Notez " class="connectionButton"><br>

		</form>


  </div>
