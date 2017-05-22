<?php

	require_once("header.php");

?>


<html>
    <link href="./View/formulaire.css" rel="stylesheet" !important>
  <body>
		<div class="container">
		  <form id="contact" action="/Controller/controller_votreannonce.php" method="post">

		    <h3>Postez votre annonce</h3>
		    <h4>Par un soucis d'hygiene une annonce est mise en ligne seulement 48H au dela vous devriez peut etre penser a faire votre propre vaisselle.</h4>

		
		 </fieldset>
		  <fieldset><legend>Annonce</legend>
			  <label for="Prix"><span>Prix *</span>
			  <input type="text" class="input-field" name="prix" required></label>

			 	<label for="Quantite"><span>Quantite de Vaisselle </span><select name="quantite" class="select-field">
									 			 																				<option value="Grosse">Grosse</option>
									 			 																				<option value="Moyenne">Moyenne</option>
									 			 																				<option value="Petite">Petite</option>
																															   </select>
				</label>
							<fieldset>
				  <label for="message"><span>Commentaire</span><textarea name="message" class="textarea-field"></textarea></label>																								 			 </select>
	         		</fieldset>


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
