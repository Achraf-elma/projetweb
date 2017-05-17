<!DOCTYPE HTML>

<?php

    require_once("header.php")

 ?>

<html>
	<head>
		<title>Page de connexion</title>
		<link rel="stylesheet" href="View/login.css">
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	</head>
	<body>
		 <a href="index.php"><img src="View/medias/polytech.jpg" height="100" class="logo"></a>

		<h1 class="title">Formulaire RIASEC</h1>

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
