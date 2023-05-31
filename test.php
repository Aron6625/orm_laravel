<?php

$host        = "host = localhost";
$port        = "port = 5432";
$dbname      = "dbname = manaco";
$credentials = "user = manaco password=manaco";

$con = pg_connect("$host $port $dbname $credentials");


$result = pg_query($con, 'SELECT * FROM materias');  

if($result && pg_fetch_all($result) !== false) {
  $output = pg_fetch_all($result);
}

print_r($output);
