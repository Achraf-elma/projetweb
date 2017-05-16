
<?php

	require_once("header.php");

?>
<html>
  <body>




    <div class ="divButton">

        <button class="buttonVaisselle" onclick="javascript:location.href='offres.php'" ><span>Je fais la vaisselle d'un de mes voisins </span></button>
        <button class="buttonVaisselle" href="votreannonce.php" ><span>Je cherche un voisin pour faire ma vaiselle</span></button>
    </div>
        <a class="buttonVaisselle" href="offres.php"> ahaha </a>
				<form method="POST" action="offres.php">
				<input type="submit" value="google" class="buttonVaisselle">
				<form action="www.yahoo.fr">
				<input type="submit" value="yahoo" class="flatButton">
				</form>
		</form>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap-3/js/bootstrap.min.js"></script>
  </body>
</html>

<?php

	require_once("footer.php");

?>
