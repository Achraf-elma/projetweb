<?php

	require_once("header.php");

?>
<html>
  <body>
<form method="post" action="/Controller/controller_inscription.php">

	<input type="text" placeholder="Pseudo" name="id" pattern="[A-Za-z0-9]{5}" required ><br>
	<input type="password" placeholder="Mot de passe" name="mdp" required><br>
  <input type="text" placeholder="Email"  name="email" required><br>
	 <input type="text" placeholder="Nom"  name="nom" required><br>
	 <input type="text" placeholder="Prenom"  name="prenom" required><br>

	 Sexe :
	 <input type="radio" name= "sexe" value="HOMME"> Homme
				<input  type="radio" name="sexe" value="FEMME" > Femme
  <input type="submit" value="Connexion" class="connectionButton"><br>


</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="bootstrap-3/js/bootstrap.min.js"></script>
		</body>
</html>

<?php

require_once("footer.php");

?>
