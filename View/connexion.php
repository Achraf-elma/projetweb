<?php

    require_once("header.php")

 ?>

<html>

	<body>
		<h1>Connexion</h1>

    <form method="post" action="../Controller/controller_connexion.php">

			<input type="text" placeholder="Pseudo" name="id" required><br>
			<input type="password" placeholder="Mot de passe" name="mdp" required><br>
			<input type="submit" value="Connexion" class="connectionButton"><br>

		</form>

    <button class="buttonVaisselle" href="inscription"> Inscription </button>
	</body>
</html>

<?php

         require_once("footer.php")
 ?>
