#dado un artista entregue el numero de entradas de cortesia
<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  #Se obtiene el valor del input del usuario
  $nombre = ["nombre_artista"];

  #Se construye la consulta como un string
     $query = "SELECT count(nombre_artistico) AS veces FROM Entradas_cortesia WHERE nombre_artistico = $nombre;";

  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
    $result = $db -> prepare($query);
    $result -> execute();
    $respuesta = $result -> fetchAll();
  ?>

  <table>
    <tr>
      <th> veces </th>
    </tr>

      <?php
        echo "<h2>" . $respuesta . "</h2>";
      ?>

  </table>

<?php include('../templates/footer.html'); ?>
