<?php
session_start();
if(isset($_SESSION['codigo'])){
header("Location: empleados.php");
}
?>

<html lang="es">

      <head>
          <link rel="shortcut icon" href="imagenes/favicon.png" />
          <meta charset="utf-8">
          <title>Inicia Sesion</title>
          <link rel="stylesheet" type="text/css" href="estilos/style.css">
      </head>

  <body>
    <div id="contenido"><br><br><br>
        <div style="text-align:center;">
           <img id="imgsesion" src="imagenes/sesion.png">
        </div>
       
         <form method="post" action="Iniciar.php">
              <div class='centrardiv'><br>
                <label for="txtCodigo" id="lblcodigo">Usuario </label><br/>
                <input type="text" name="txtUsuario" id="txtcodigo" size="20" maxlength="20" required/> <br><br>
       
                <label for="txtPassword">Password</label><br/>
                <input type="password" name="txtContra" id="txtContra" size="20" maxlength="20" required /> <br><br>

                <input id="btnSesion" type="submit" name="btnenviar" value="Iniciar Sesión" required />
              </div>
        </form><br><br><br><br><br><br><br>
    </div>
  </body>

</html>
