<?php
echo "ok";

require('vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;

// Register the Postgres database add-on
$dbopts = parse_url(getenv('DATABASE_URL'));
$app->register(new Herrera\Pdo\PdoServiceProvider(),
  array(
    'pdo.dsn' => 'pgsql:dbname='.ltrim($dbopts["path"],'/').';host='.$dbopts["host"],
    'pdo.port' => $dbopts["port"],
    'pdo.username' => $dbopts["user"],
    'pdo.password' => $dbopts["pass"]
  )
);
 echo $dbopts["user"];



if($dbopts) {
  $qry = $dbopts->prepare("select pseudo from membre;");
  $qry->execute();

  $noms = $qry->fetchAll();
  print_r($noms);
}


?>
