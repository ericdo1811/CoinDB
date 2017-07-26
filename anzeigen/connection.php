<?php

  $dbuser="root";
    $dbpw="";
    $dbhost ="127.0.0.1";
    $dbname="muenzen";
    
    try{
$handler = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpw);
$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
  echo $e->getMessage();
}

?>
