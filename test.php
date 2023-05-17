<?php

$host        = "host = postgresql";
$port        = "port = 5432";
$dbname      = "dbname = perfectly_spoken";
$credentials = "user = perfectly_spoken password=perfectly_spoken";

$con = pg_connect("$host $port $dbname $credentials");


$result = pg_query($con, 'SELECT * FROM materias');  

if($result && pg_fetch_all($result) !== false) {
  $output = pg_fetch_all($result);
}

print_r($output);
