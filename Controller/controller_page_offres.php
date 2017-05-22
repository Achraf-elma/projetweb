<?php



	if (isset($_COOKIE['id']))
	{
	 	require_once("Model/offres.php");

			$iD=$_COOKIE["id"];


			$answer=recupOffre();


			require_once("View/offres.php");

	}
	else
	{
		header("Location: connexion.php");
	}

?>
