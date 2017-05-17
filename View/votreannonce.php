<?php

	require_once("header.php");

?>


<html>
    <link href="./View/formulaire.css" rel="stylesheet" !important>
  <body>
		<div class="container">
		  <form id="contact" action="" method="post">

		    <h3>Postez votre annonce</h3>
		    <h4>Par un soucis d'hygiene une annonce est mise en ligne seulement 48H au dela vous devriez peut etre penser a faire votre propre vaisselle.</h4>

		  <fieldset><legend>Information Personnelle</legend>

 			 <label for="Ville"> <span>Ville *</span> <input type="text" class="input-field" name="Telephone" value="" /></label>
 			 <label for="Quartier"><span>Nom du Quartier *</span> <input type="text" class="input-field" name="Quartier" value="" /></label>
 			 <label for="Telephone"><span>Telephone * </span><input type="text" class="input-field" name="Telephone" value="" /></label>

		 </fieldset>
		  <fieldset><legend>Annonce</legend>
			  <label for="Prix"><span>Prix *</span><input type="text" class="input-field" name="prix" value="" /></label>

			 	<label for="Quantite"><span>Quantite de Vaisselle </span> <br> <select name="Quantite" class="select-field">
									 			 																				<option value="Grosse">Grosse</option>
									 			 																				<option value="Moyenne">Moyenne</option>
									 			 																				<option value="Petite">Petite</option>
																													 			 </select>
			 </label>


 			 </fieldset>
		    <fieldset>
		      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Publier</button>
		    </fieldset>

		  </form>
		</div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap-3/js/bootstrap.min.js"></script>
  </body>
</html>

<?php

	require_once("footer.php");

?>
