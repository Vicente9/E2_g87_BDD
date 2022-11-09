

<?php include('../templates/header.html');   ?>

<body>
<?php
  
  require("../config/conexion.php");

  
  $nombre = $_POST["nombre_artista"];

  
     $query = "SELECT hotel, COUNT(hotel) AS veces FROM Hospedaje_y_Traslado Where LOWER(nombre_artistico)=LOWER('$nombre') GROUP BY hotel;";

  
    $result = $db -> prepare($query);
    $result -> execute();
    $respuesta = $result -> fetchAll();
  ?>

  <table>
    <tr>
      <th> Nombre de Hotel </th>
    </tr>

      <?php
        
        foreach ($respuesta as $respuesta) {
            echo "<tr> <td>$respuesta[0]</td> </tr>";
        }
      ?>

  </table>












