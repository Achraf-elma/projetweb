<?php
echo "ok";


 function connexion(){
 echo "on est dans la fonction";
        try {
          $dbopts = parse_url(getenv('postgres://kjkoobypuqkyls:efda74dc519f256390b7ff5edada82bab39005467f833909383fb5d9bd15dcb3@ec2-184-73-236-170.compute-1.amazonaws.com:5432/d45kt38b1qptd2'));
          $app->register(new Herreraecho "ok";\Pdo\PdoServiceProvider(),
                         array(
                             'pdo.dsn' => 'pgsql:dbname='.ltrim($dbopts["path"],'/').';host='.$dbopts["host"] . ';port=' . $dbopts["port"],
                             'pdo.username' => $dbopts["user"],
                             'pdo.password' => $dbopts["pass"]
                         )
        }
        catch(Exception $e)
        {
            die('<br> Echec lors de la connexion la BD :'.$e->getMessage());
        }

       return ($dbopts);

}
echo "ok2";
?>
