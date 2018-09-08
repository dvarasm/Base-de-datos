<?php

$user = "UbdIk";
$password = "frijolito";
$dbname = "BDIk";
$port = "5432";
$host = "plop.inf.udec.cl";

$cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$password";

$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión ".pg_last_error());

?>

