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
    <li role="presentation" class="active"><a href="equipo.php">Equipos</a></li>
    <li role="presentation" ><a href="jugador.php">Jugadores</a></li>
    <li role="presentation" ><a href="agregar_torneo.php">Agregar Torneo</a></li>
</ul>
<p>&nbsp; </p>
<p>&nbsp; </p>
</header>
<?php //incluimos la conexión a la base de datos
include('conexion2.php');
$query = "select * from futbol.equipo AS e, futbol.administra AS a, futbol.presidente AS p where e.id_equipo=a.id_equipo AND p.rut_p=a.rut_p";
$resultado = pg_query($conexion, $query) or die("Error en la Consulta SQL");
$numReg = pg_num_rows($resultado); 

if($numReg>0){
  echo "<table border='1' align='center'>
    <tr bgcolor='skyblue'>
    <th>Nombre de Equipo  </th>
    <th>Nombre de Entrenador</th>
    <th>Apellido de Entrenador</th>
    <th>Ciudad  </th>
    <th>Nombre Presidente</th>
    <th>Apellido Presidente  </th>
    <th>Año de Inicio de Mandato</th></tr>";
  while ($fila=pg_fetch_array($resultado)) {
    echo "<tr>"."<td>".$fila['nombre_e']."</td>";
    echo "<td>".$fila['nombre_entrenador']."</td>";
    echo "<td>".$fila['apellido_entrenador']."</td>";
    echo "<td>".$fila['ciudad']."</td>";
    echo "<td>".$fila['nombre_p']."</td>";
    echo "<td>".$fila['apellido_p']."</td>";
    echo "<td>".$fila['ano_inicio_periodo']."</td></tr>";
  }
    echo "</table>";
}
else{
    echo "No hay Registros";
}

?>

</body>
</html>