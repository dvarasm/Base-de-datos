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
    <li role="presentation" class="active"><a href="agregar.php">Agregar</a></li>
    <li role="presentation" ><a href="id_equipo.php">ID de Equipo</a></li>
</ul>

</header>
<p>&nbsp; </p>


</body>
</html>

<html>
<body>
  <form align='center' action="procesa.php" method="post" name="datos">
    Rut:<input name="rut" type="text" id="rut_j" value="" /><br>
    Nombre:<input type="text" name="nombre" id="nombre_j" /><br>
    Apellido:<input type="text" name="apellido" id="apellido_j" /><br>
    Fecha de Nacimiento:<input type="text" name="fecha" id="fecha_nacimiento" /><br>
    Pais:<input type="text" name="pais" id="pais" /><br>
    Posicion:<input type="text" name="posicion" id="posicion" /><br>
    ID de equipo :<input type="text" name="id" id="id_equipo" /><br>
      <input type="submit" name="ok" id="ok" value="Agregar Jugador" />
  </form>
</body>
</html>
