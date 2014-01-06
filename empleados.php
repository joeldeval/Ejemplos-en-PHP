<?php
session_start();
if(!isset($_SESSION['codigo'])){
        header("Location: Sesion.php");
}
require_once('contacto.php');
require_once('listarContactos.php');

?>
<html>

  <head>
  <link rel="shortcut icon" href="imagenes/favicon.png" />
  <title>EMPLEADOS</title>
   <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="estilos/style.css">
  </head>

  <body>

     
       <?php
        echo "<label id=lblusu>Usuario: ".$_SESSION['codigo']."</label>
              <label id='lblsalir'>Salir</label> <a href='cerrarsesion.php'><img id='exitimg' src='imagenes/exit.png'></a>";
       ?>


     <div id="contenido">

        <label id='lblempleados'>EMPLEADOS</label>
        <a href="Nuevo.php"><img id="nuevo" src="imagenes/nuevoempleado.png"></a>
   
         
          <?php
            $modelo = new Contacto();
            $contactos = $modelo->encontrarTodos();
            $listar = new ListarContactos();
            $listar->contactos = $contactos;
            $listar->generaTabla();          
            ?>         
     
      </div>
</body>

</html>
