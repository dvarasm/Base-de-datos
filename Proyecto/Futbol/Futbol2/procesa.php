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
    <li role="presentation" ><a href="Jugador.php">Jugadores</a></li>
    <li role="presentation" class="active"><a href="agregar.php">Agregar Jugador</a></li>
</ul>

</header>


</body>
</html>
<?php
  include('conexion2.php');
$sql = "INSERT INTO futbol.jugador VALUES  ('".$_POST['rut']."','".$_POST['nombre']."','".$_POST['apellido']."','".$_POST['fecha']."','".$_POST['pais']."','".$_POST['posicion']."','".$_POST['id']."')";
                $result = pg_query($sql);
                if (! $result){
                               echo "La consulta SQL contiene errores.".pg_result_error();
                               exit();
                }else {echo "<center><font color='RED'>DATOS INSERTADOS CORRECTAMENTE</font><a></a&gt;'";
                }