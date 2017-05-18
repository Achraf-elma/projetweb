<?php

function connexion(){

 $host = "ec2-184-73-236-170.compute-1.amazonaws.com";
 $dbname = "d45kt38b1qptd2";
 $user = "kjkoobypuqkyls";
 $psw = "efda74dc519f256390b7ff5edada82bab39005467f833909383fb5d9bd15dcb3"

  $dbconn = pg_connect("host=ec2-184-73-236-170.compute-1.amazonaws.com dbname=d45kt38b1qptd2 user=kjkoobypuqkyls password=efda74dc519f256390b7ff5edada82bab39005467f833909383fb5d9bd15dcb3")
      or die('Connexion impossible : ' . pg_last_error());

   return $dbconn;
}


?>
