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
    <li role="presentation" class="active"><a href="jugador.php">Jugadores</a></li>
    <li role="presentation" ><a href="agregar.php">Agregar Jugador</a></li>
    
</ul>
<p>&nbsp; </p>
<ul class="nav nav-tabs">
    <li role="presentation" ><a href="audax.php">Audax Italiano</a></li>
    <li role="presentation" ><a href="cobresal.php">Cobresal</a></li>
    <li role="presentation" ><a href="colocolo.php">Colo Colo</a></li>
    <li role="presentation" ><a href="antofagasta.php">Deportes Antofagasta</a></li>
    <li role="presentation" ><a href="iquique.php">Deportes Iquique</a></li>
    <li role="presentation" ><a href="temuco.php">Deportes Temuco</a></li>
    <li role="presentation" class="active"><a href="everton.php">Everton</a></li>
    <li role="presentation" ><a href="huachipato.php">Huachipato</a></li>
    <li role="presentation" ><a href="ohiggins.php">O'Higgins</a></li>
    <li role="presentation" ><a href="palestino.php">Palestino</a></li>
    <li role="presentation" ><a href="sanluis.php">San Luis</a></li>
    <li role="presentation" ><a href="santiagowanderers.php">Santiago Wanderers</a></li>
    <li role="presentation" ><a href="unionespanola.php">Unión Española</a></li>
    <li role="presentation" ><a href="udec.php">Universidad de Concepción</a></li>
    <li role="presentation" ><a href="ucatolica.php">Universidad Católica</a></li>
    <li role="presentation" ><a href="udechile.php">Universidad de Chile</a></li>
</ul>

<p>&nbsp; </p>

<ul class="nav nav-tabs">
    <li role="presentation" ><a href="everton.php">Jugadores</a></li>
    <li role="presentation" class="active"><a href="estadistica7.php">Estadística Jugadores</a></li>
    <li role="presentation" ><a href="seleccion7.php">Seleccion Nacional</a></li>
    <li role="presentation" ><a href="sancion7.php">Sanciones</a></li>
</ul>

<p>&nbsp; </p>
</header>
<?php //incluimos la conexión a la base de datos
include('conexion2.php');
$query = "select * from futbol.estadistica_j AS e, futbol.jugador AS j where e.id_equipo=7 AND e.rut_j=j.rut_j";
$resultado = pg_query($conexion, $query) or die("Error en la Consulta SQL");
$numReg = pg_num_rows($resultado); 

if($numReg>0){
  echo "<table border='1' align='center'>
    <tr bgcolor='skyblue'>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Posicion</th>
    <th>Partidos Jugados</th>
    <th>Goles</th>
    <th>Tarjetas Amarillas</th>
    <th>Tarjetas Rojas</th></tr>";
  while ($fila=pg_fetch_array($resultado)) {
    echo "<tr>"."<td>".$fila['nombre_j']."</td>";
    echo "<td>".$fila['apellido_j']."</td>";
    echo "<td>".$fila['posicion']."</td>";
    echo "<td>".$fila['cantidad_partidos_club']."</td>";
    echo "<td>".$fila['goles']."</td>";
    echo "<td>".$fila['tarjeta_a']."</td>";
    echo "<td>".$fila['tarjeta_r']."</td></tr>";
  }
    echo "</table>";
}
else{
    echo "No hay Registros";
}

?>

</body>
</html>