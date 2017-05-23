<?php

	require_once("header.php");

?>
<html>
  <body>
<div style="text-align:center;">
<form method="post" action="/Controller/controller_inscription.php">

	<input type="text" placeholder="Pseudo" name="id" pattern=".{5,}" required><br>
	<input type="password" placeholder="Mot de passe" name="mdp" pattern=".{5,}" required><br>
  <input type="email" placeholder="Email"  name="email" required><br>
	<input type="tel" placeholder="Tel"  name="telephone" required><br>


	 Sexe :
	 <input type="radio" name= "sexe" value="HOMME"> Homme
	 <input  type="radio" name="sexe" value="FEMME" > Femme <br>
	<input type="text" placeholder="Ville"  name="ville" required><br>
	<input type="text" placeholder="Nom du quartier"  name="quartier" required><br>

  <input type="submit" value="Connexion" class="connectionButton"><br>


</form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="bootstrap-3/js/bootstrap.min.js"></script>
		</body>
</html>

<?php

require_once("footer.php");

?>
