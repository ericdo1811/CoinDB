<?php

  $dbuser="root";
    $dbpw="";
    $dbhost ="127.0.0.1";
    $dbname="muenzen";
    
    try{
$handler = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpw);
    } catch(PDOException $e) {
  echo $e->getMessage();
}
?>
