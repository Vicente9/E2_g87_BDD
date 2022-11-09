

<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

	$artista = $_POST["nombre_artista"];
	

 	$query = "SELECT * FROM Tour WHERE (nombre_tour) IN (SELECT evento FROM Eventos Where evento=Tour.nombre_tour AND LOWER(nombre_artistico) = LOWER('$artista') ORDER BY fecha_termino DESC LIMIT 1);";
	$result = $db -> prepare($query);
	$result -> execute();
	$paises = $result -> fetchAll();
  ?>

	<table>
    <tr>
      <th>Nombre Tour</th>
      <th>Fecha Inicio</th>
      <th>Fecha Termino</th>

    </tr>
  <?php
	foreach ($paises as $paises) {
  		echo "<tr> <td>$paises[0]</td> <td>$paises[1]</td> <td>$paises[2]</td>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
