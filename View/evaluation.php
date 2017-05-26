
    <div style="text-align:center;" >


    <form method="post" action="../Controller/controller_evaluation.php">

    <h3>  Donnez votre avis sur ce membre : </h3>
      <input type="radio" name= "note" value="POSITIVE"> Positif
      <input  type="radio" name="note" value="NEUTRE" > Neutre
      <input  type="radio" name="note" value="NEGATIF" > Négatif <br>

    <label for="commentaire">Commentaire</label><br>
   <textarea style="color:black;" name="commentaire" id="commentaire"></textarea> <br>
  <input type="hidden" name="pseudo" value=<?php echo $membre['pseudo']; ?> /> <br>

			<input  class="buttonVaisselle" type="submit" value="Notez " class="connectionButton"><br>

		</form>


  </div>
