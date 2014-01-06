<?php
session_start();
if(!isset($_SESSION['codigo'])){
header("Location: Sesion.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>ELIMINAR</title>
     <link rel="shortcut icon" href="imagenes/favicon.png" />
     <meta charset="utf-8">    

     <link rel="stylesheet" type="text/css" href="estilos/style.css">
  </head>

  <body>
        <div id="cabecera">
                <?php
                 echo "<label id=lblusu>Usuario: ".$_SESSION['codigo']."</label>
                 <label id='lblsalir'>Salir</label> <a href='cerrarsesion.php'><img id='exitimg' src='imagenes/exit.png'></a>";
                ?>
      </div>
      
        <div id="contenido"><br><br>   <br/><br/>
          <fieldset>
 
    
                   <?php
                      if (isset($_GET['id'])) 
                      {
                       require_once("conexion.php");
                        $conexion = new Conexion();
                        $conexion->conectar();
                        $id=$_GET['id'];
                        $sql = "DELETE FROM empleados WHERE id='".$id."'";
                        $resultado = $conexion->mysqli->query($sql);
                        $conexion->cerrar();
                       echo "<center><Label>Contacto eliminado con éxito</Label></center>   <br/><br/>";
                      }
                   ?>

            
                <center>
                  <a href="empleados.php"><img id="regresar" src="imagenes/regresar.png"></a>
                </center>   <br/><br/>
           </fieldset><br>   <br/><br/>   <br/><br/>
      </div>
</body>


</html>
