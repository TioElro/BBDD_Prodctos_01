<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario de Registro.</title>
  <style>
  h1{
    text-align: center;
    color: #00F;
    border-bottom: dotted #0000FF;
    width: 50%;
    margin: auto;
  }

  table{
    border: 1px solid;
    padding: 20px 50px;
    margin-top: 50px;
  }

  body{
    background-color: #FFC;
  }

  </style>
  </head>
  <body>
    <h1>Registro de Artículos</h1>
    <form name="form1" action="Insertar_Registros.php" method="GET">
      <table border="0" align="center">
        <tr>
          <td>Sección Artículo</td>
          <td><label for="seccion"></label>
          <input type="text" name="seccion" id="seccion"></td>
        </tr>
        <tr>
          <td>Nombre de Artículo</td>
          <td><label for="nombre"></label>
          <input type="text" name="nombre" id="nombre"></td>
        </tr>
        <tr>
          <td>Precio del Artículo</td>
          <td><label for="Precio"></label>
          <input type="number" name="precio" id="precio"></td>
        </tr>
        <tr>
          <td>Fecha de ingreso</td>
          <td><label for="Fecha"></label>
          <input type="date" name="precio" id="precio"></td>
        </tr>
        <tr>
          <td>País de Origen</td>
          <td><label for="pais_origen"></label>
          <input type="text" name="pais_origen" id="pais_origen"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="center" ><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
          <td align="center" ><input type="submit" name="borrar" id="borrar" value="Borrar"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
