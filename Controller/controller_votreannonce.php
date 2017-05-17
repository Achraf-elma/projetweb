<?php

		$ville=$_POST['Ville'];
		$quartier=$_POST['Quartier'];
		$telephone=$_POST['telephone'];
    $prix=$_POST['prix'];
    $Quantite=$_POST['Quantite'];
    $mess=$_POST['message'];

    if (empty($ville) || empty($quartier) || empty($mdp))
		{
			header("Location: ../erreur.php?message=Merci_de_complèter_tous_vos_champs");
		}
 ?>
