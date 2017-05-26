<?php

	require_once("header.php");

?>

  <body>


<div class=contenu style="text-align:center; background: #4CAF50;">
	<h1>Inscription</h1>
<form method="post" action="/Controller/controller_inscription.php">

	<input type="text" placeholder="Pseudo" name="id" pattern=".{5,}" required><br>
	<input type="password" placeholder="Mot de passe" name="mdp" pattern=".{5,}" required><br>
  <input type="email" placeholder="Email"  name="email" required><br>
	<input type="tel" placeholder="Tel"  name="telephone" required><br>


	<span style="color:white"> Sexe :
	 <input type="radio" name= "sexe" value="HOMME"> Homme
	 <input  type="radio" name="sexe" value="FEMME" > Femme <br> </span>
	<input type="text" placeholder="Ville"  name="ville" required><br>
	<input type="text" placeholder="Nom du quartier"  name="quartier" required><br> <br>

  <input class="buttonVaisselle" type="submit" value="Connexion" class="connectionButton"><br>


</form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="bootstrap-3/js/bootstrap.min.js"></script>
		</body>


<?php

require_once("footer.php");

?>
