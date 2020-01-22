<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insertar datos de PHP</title>
  </head>
    <?php
    require ("datos_conexion.php");
    $conexion = mysqli_connect($DB_HOTS,$DB_USER,$DB_PASS);
    mysqli_select_db($conexion,$DB_NAME) or die ("No se pudo conectar a la base de datos.");

    if (mysqli_connect_errno()) {
      echo "Falló la conexión a la base de datos.";
      exit();
    }
    mysqli_set_charset($conexion,"utf8");

    $consulta = "INSERT INTO datos (SECCION,NOMBREARTICULO,PRECIO,FECHA,IMPORTADO,PAISDEORIGEN) VALUES ('DEPORTES','RAQUETA GARNDE','345.50','2020-01-22 10:34:23','0','CANADÁ')";

    $resultado =mysqli_query($conexion,$consulta);

    mysqli_close($conexion);
     ?>
  <body>

  </body>
</html>
