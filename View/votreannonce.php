<?php

	require_once("header.php");

?>


<html>
  <body>

  <h1 style="center-align"> Postez votre annonce immediatement </h1>
 <p>  Par un soucis d'hygiene une annonce est mise en ligne seulement 48H au dela vous devriez peut etre penser a faire votre propre vaisselle. </p>

 <div class="form-style-3">
<form>
<fieldset><legend>Personal</legend>
<label for="prix"><span>Prix <span class="required">*</span></span><input type="text" class="input-field" name="prix" value="" /></label>
<label for="field2"><span>Email <span class="required">*</span></span><input type="email" class="input-field" name="field2" value="" /></label>
<label for="field3"><span>Phone <span class="required">*</span></span><input type="text" class="input-field" name="field3" value="" /></label>
<label for="field4"><span>Quantite de Vaisselle</span><select name="field4" class="select-field">
																				<option value="Grosse">Grosse</option>
																				<option value="Moyenne">Moyenne</option>
																				<option value="Petite">Petite</option>
</select></label>
</fieldset>
<fieldset><legend>Commentaire</legend>
<label for="field6"><span>Message <span class="required">*</span></span><textarea name="field6" class="textarea-field"></textarea></label>
<label><span>&nbsp;</span><input type="submit" value="Submit" /></label>
</fieldset>
</form>
</div>



	<form method="post" action="/Controller/controller_annonce_validation.php">

		<input type="text" placeholder="Prix (Maximum 13 euros)" name="id"><br>
		<input type="text" placeholder="Ville" name="id"><br>
		<input type="text" placeholder="Code Postal" name="id"><br>
		<input type="text" placeholder="Nom du quartier" name="id"><br>
		<input type="text" placeholder="Numero de telephone" name="id"><br>
		<input type="submit" value="Valider" class="connectionButton"><br>


	</form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap-3/js/bootstrap.min.js"></script>
  </body>
</html>

<?php

	require_once("footer.php");

?>
