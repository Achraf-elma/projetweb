<?php

	require_once("header.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Afficher / Cacher une boite div en javascript</title>

    <script type="text/javascript" src="./View/afficher_cacher_div.js"></script>
    </head>
    <body>
    <span class="bouton" id="bouton_texte" onclick="javascript:afficher_cacher('texte');">Afficher le texte</span>
    <div id="texte" class="texte">
        0651293170
    </div>
    <script type="text/javascript">
    //<!--
        afficher_cacher('texte');
    //-->
    </script>
    </body>
</html>



<?php

	require_once("footer.php");

?>
