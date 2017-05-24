<?php

	require_once("header.php");

?>



    <body>
			<?php
					while($donnees = $answer->fetch())
					{
			  ?>
			 <?php echo $donnees['pseudo'];  ?>



					<?php
					}
					$answer->closeCursor();
					?>
    </body>



<?php

	require_once("footer.php");

?>
