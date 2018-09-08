<!doctype html>

<html lang="es">
<head>


	<link rel="shortcut icon" href="http://image.flaticon.com/icons/png/512/16/16839.png">
	
	<meta charset="UTF-8">
	<title>Base de Datos del Futbol Chileno</title>
	<link rel=StyleSheet  type="text/css" href="index.css">
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



</head>
<body>
<div class="container">
<header>
	<div class="page-header">
	<h1 style="color: #17D73D">Base de Datos del Futbol Chileno</h1>
	</div>
	


<ul class="nav nav-tabs">
    <li role="presentation" ><a href="inicio.php">Home</a></li>
    <li role="presentation" ><a href="equipo.php">Equipos</a></li>
    <li role="presentation" ><a href="jugador.php">Jugadores</a></li>
    <li role="presentation" class="active"><a href="agregar.php">Agregar Jugador</a></li>
</ul>

<p>&nbsp; </p>
<ul class="nav nav-tabs">
    <li role="presentation" ><a href="agregar.php">Agregar</a></li>
    <li role="presentation" class="active"><a href="id_equipo.php">ID de Equipo</a></li>
</ul>

</header>
<p>&nbsp; </p>


</body>
</html>

<?php //incluimos la conexión a la base de datos
include('conexion2.php');
$query = "select * from futbol.equipo";
$resultado = pg_query($conexion, $query) or die("Error en la Consulta SQL");
$numReg = pg_num_rows($resultado); 

if($numReg>0){
  echo "<table border='1' align='center'>
    <tr bgcolor='skyblue'>
    <th>ID de Equipo  </th>
    <th>Nombre de Equipo</th></tr>";
  while ($fila=pg_fetch_array($resultado)) {
    echo "<tr>"."<td>".$fila['id_equipo']."</td>";
    echo "<td>".$fila['nombre_e']."</td></tr>";
  }
    echo "</table>";
}
else{
    echo "No hay Registros";
}

?>