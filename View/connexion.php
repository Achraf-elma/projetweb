<?php

    require_once("header.php")

 ?>

<html>

	<body>
		 <a href="index.php"><img src="View/medias/polytech.jpg" height="100" class="logo"></a>

		<h1>Connexion</h1>

		<form method="post" action="/Controller/controller_connexion.php">

			<input type="text" placeholder="Pseudo" name="id"><br>
			<input type="password" placeholder="Mot de passe" name="mdp"><br>

			<input type="submit" value="Connexion" class="connectionButton"><br>

			<p>Cette page concerne les élèves de Polytech.</p>

		</form>


	</body>
</html>

<?php

         require_once("footer.php")
 ?>
