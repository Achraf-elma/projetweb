<?php

	require_once("header.php");

?>


<html>
  <body>

  <h1 style="center-align"> Postez votre annonce immediatement </h1>
 <p>  Par un soucis d'hygiene une annonce est mise en ligne seulement 48H au dela vous devriez peut etre penser a faire votre propre vaisselle. </p>

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
