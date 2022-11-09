

<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

	$artista = $_POST["nombre_artista"];
	

 	$query = "SELECT * FROM Eventos WHERE (evento) IN (SELECT nombre_tour FROM Tour Where evento=Tour.nombre_tour AND LOWER(nombre_artistico) = LOWER('$artista') ORDER BY fecha_termino DESC LIMIT 1);";
	$result = $db -> prepare($query);
	$result -> execute();
	$paises = $result -> fetchAll();
  ?>

	<table>
    <tr>
      <th>Eventos del Tour</th>
      <th>Lugar</th>
      <th>Artista</th>
      <th>Ciudad</th>
      <th>Pais</th>
      <th>Fecha Evento</th>
      <th>Productora</th>

    </tr>
  <?php
	foreach ($paises as $paises) {
  		echo "<tr> <td>$paises[0]</td> <td>$paises[1]</td> <td>$paises[2]</td> <td>$paises[3]</td> <td>$paises[4]</td> <td>$paises[5]</td> <td>$paises[6]</td>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
