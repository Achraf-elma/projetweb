<?php

    require_once("header.php")

 ?>

<html>

	<body>
    <div  class=contenu style="text-align:center; background: #4CAF50;" >
		<h1>Connexion</h1>

    <form method="post" action="../Controller/controller_connexion.php">

			<input type="text" placeholder="Pseudo" name="id" required><br>
			<input type="password" placeholder="Mot de passe" name="mdp" required><br>
			<input class="buttonVaisselle" type="submit" value="Connexion" class="connectionButton">

		</form>

    <button class="buttonVaisselle" href="inscription.php"> Inscription </button>
  </div>
	</body>
</html>

<?php

         require_once("footer.php")
 ?>
