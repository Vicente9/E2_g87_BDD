<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

	$Dataso = $_POST["dato"];
	

 	$query = "SELECT nombre_artistico, COUNT(nombre_artistico) AS conteo FROM Entradas_Cortesia GROUP BY nombre_artistico ORDER BY COUNT(nombre_artistico) DESC, nombre_artistico LIMIT 1;";
	$result = $db -> prepare($query);
	$result -> execute();
	$artistas = $result -> fetchAll();
  ?>

	<table>
    <tr>
      <th>Artista</th>
    </tr>
  <?php
	foreach ($artistas as $artista) {
  		echo "<tr> <td>$artista[0]</td> </tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
