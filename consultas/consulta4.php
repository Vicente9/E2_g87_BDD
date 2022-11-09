<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

	$Dataso = $_POST["dato"];
	

 	$query = "SELECT DISTINCT Eventos.pais FROM Eventos, Tour Where Tour.nombre_tour = eventos.evento AND nombre_tour LIKE '%$Dataso%';";
	$result = $db -> prepare($query);
	$result -> execute();
	$paises = $result -> fetchAll();
  ?>

	<table>
    <tr>
      <th>Artista</th>
    </tr>
  <?php
	foreach ($paises as $paises) {
  		echo "<tr> <td>$paises[0]</td>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
