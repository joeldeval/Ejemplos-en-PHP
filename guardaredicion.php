<?php
session_start();
if(!isset($_SESSION['codigo'])){
header("Location: Sesion.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
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
          <div id="contenido">
               <fieldset>
                       <?php
                          echo "<center>Datos Ingresados con exito</center>";
                          require_once('conexion.php');
                          $id = $_POST['txtid'];
                          $Nombre = $_POST['txtNombre'];
                          $AP = $_POST['txtAP'];
                          $AM = $_POST['txtAM'];
                          $DOmicilio = $_POST['txtDireccion'];
                          $Telefono = $_POST['txtTelefono'];
                          $Celular = $_POST['txtCelular'];
                          $CP = $_POST['txtCP'];
                          $Email = $_POST['txtEmail'];

                          

                          echo "<label>Nombre: ".$Nombre."</label><br>";
                          echo "<label>Apellido Paterno: ".$AP."</label><br>";
                          echo "<label>Apellido Materno: ".$AM."</label><br>";
                          echo "<label>Dirección: ".$DOmicilio."</label><br>";
                          echo "<label>Telefono: ".$Telefono."</label><br>";
                          echo "<label>Celular: ".$Celular."</label><br>";
                          echo "<label>Código Postal: ".$CP."</label><br>";
                          echo "<label>Email: ".$Email."</label><br>";
                              
                              try
                                {
                                   $conexion = new Conexion();
                                   if(!$conexion->conectar())
                                     {
                                         throw new Exception($conexion->getError());
                                     }
                                    $sql = "UPDATE empleados SET  Nombre='$Nombre', ApPaterno='$AP', ApMaterno='$AM', Direccion='$DOmicilio', Telefono='$Telefono', CP='$CP', Mail='$Email', Celular='$Celular' where id=$id";
                                    $resultado = $conexion->mysqli->query($sql);
                                    $conexion->cerrar();
                                 }
                            catch(Exception $e)
                                 {
                                   echo $e;
                                 }
                                  echo "<br>";
                        ?>
                    <center>
                         <a href='empleados.php'><img id='regresar' src='imagenes/regresar.png'></a>
                    </center>
                    <br/><br/>
                  </fieldset>
              </div>
 </body>
</html>

