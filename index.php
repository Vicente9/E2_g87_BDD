<?php include('templates/header.html');   ?>

<body>
  <h1 align="center">Artistas, Hospedajes y Conciertos </h1>
  <p style="text-align:center;">En esta pagina obtendras toda la información de eventos de tus artistas favoritos</p>

  <br>

  <form action="consultas/consulta1.php" method="post">
      <h3>Listado de nombre y telefono de contacto de artistas</h3>
      <input type="submit" name="dato" value="Consultar">
  </form>
  <br>


  <form align="center" action="consultas/consulta2.php" method="post">
    <h3>Numero de entradas de cortesia que ha entregado un artista</h3>
    Nombre de Artista:
    <input type="text" name="nombre_artista">
    <br>
    <br/>
    <input type="submit" value="Consultar">
  </form>


  <form align="center" action="consultas/consulta3.php" method="post">
    <h3>Datos de ultimo tour de un artista</h3>
    Nombre de Artista:
    <input type="text" name="nombre_artista">
    <br>
    <br/>
    <input type="submit" value="Consultar">
  </form>


  <form align="center" action="consultas/consulta4.php" method="post">
    <h3>Paises que seran visitados en un tour</h3>
    Nombre del tour:
    <input type="text" name="nombre_artista">
    <br>
    <br/>
    <input type="submit" value="Consultar">
  </form>


  <form align="center" action="consultas/consulta5.php" method="post">
    <h3>Paises que seran visitados en un tour</h3>
    Nombre del Artista:
    <input type="text" name="nombre_artista">
    <br>
    <br/>
    <input type="submit" value="Consultar">
  </form>


  <form align="center" action="consultas/consulta6.php" method="post">
    <h3>Paises que seran visitados en un tour</h3>
    Nombre del Artista:
    <input type="text" name="nombre_artista">
    <br>
    <br/>
    <input type="submit" value="Consultar">
  </form>

  <form action="consultas/consulta7.php" method="post">
      <h3>Artista con que ha entregado mayor cantidad de entradas de cortesia</h3>
      <input type="submit" name="dato" value="Consultar">
  </form>
  <br>
  <br>
  <br>
  <br>
  <br>
</body>
</html>
