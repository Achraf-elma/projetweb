<?php
echo "ok";


 function connexion(){
   use Herrera\Pdo\PdoServiceProvider;
   use Silex\Application;

 $app = new Application();
 $app->register(
     new PdoServiceProvider(),
     array(
         'pdo.dsn' => 'pdo_pgsql:dbname=d45kt38b1qptd2;host=ec2-184-73-236-170.compute-1.amazonaws.com',
         'pdo.username' => 'username', // optional
         'pdo.password' => 'password', // optional
         'pdo.options' => array( // optional
          //   PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"
         )
     )
 );

 $pdo = $app['pdo'];

 return pdo;
}
echo "ok2";
?>
