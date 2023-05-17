<?php
// establece los datos de conexión
$host = "127.0.0.1";
$user = "carlos";
$password = "34353435";
$database = "manaco";
// crea una nueva conexión mysqli
$conn = mysqli_connect($host, $user, $password, $database);
// verifica si hay errores de conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}
$result = mysqli_query($conn, "SELECT *  FROM materias" );


//fetch the data from the database 

while ($row = mysqli_fetch_array($result)) {

print_r($row);
}
?>
