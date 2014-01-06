<?php
session_start();
if(!isset($_SESSION['codigo'])){
header("Location: Sesion.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Guardar</title>
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
     <div id="contenido"><br><br>
          <fieldset id="FieldsetGuardado" >
              <legend>DATOS</legend>
             <?php

             echo "<center>Datos Ingresados con exito</center>";
             require_once('conexion.php');
              /*laboral*/
             $Fecha = $_POST['txtFI'];
             $SS= $_POST['SS'];
             $NSS = $_POST['txtNSS'];
             $Puesto = $_POST['txtPuesto'];
             /*Personal*/
             $Nombre = $_POST['txtNombre'];
             $AP = $_POST['txtAP'];
             $AM = $_POST['txtAM'];
             $Sexo = $_POST['sexo'];
             $EstadoCivil = $_POST['EstadoCivil'];
             /*Nacimiento*/
             $FN = $_POST['txtFN'];
             $Pais = $_POST['txtPais'];
             $Estado = $_POST['txtEstado'];
             /*Empleado*/
             $Titulo = $_POST['txtTitulo'];
             $CURP = $_POST['txtCURP'];
             $RFC = $_POST['txtRFC'];
             $Telefono = $_POST['txtTelefono'];
             $Celular = $_POST['txtCelular'];
             $DOmicilio = $_POST['txtDireccion'];
             $Colonia = $_POST['txtColonia'];
             $CP = $_POST['txtCP'];
             $Email = $_POST['txtEmail'];
             


               echo "<label>NOMBRE: ".$Nombre."</label><br>";
               echo "<label>APELLIDO PATERNO: ".$AP."</label><br>";
               echo "<label>AAPELLIDO MATERNO: ".$AM."</label><br>";
               echo "<label>SEXO: ".$Sexo."</label><br>";
               echo "<label>FECHA DE NACIMIENTO: ".$FN."</label><br>";
               echo "<label>TELÉFONO: ".$Telefono."</label><br>";
               echo "<label>TELÉFONO MÓVIL: ".$Celular."</label><br>";
               echo "<label>DIRECCIÓN: ".$DOmicilio."</label><br>";
               echo "<label>COLONIA: ".$Colonia."</label><br>";
               echo "<label>CÓDIGO POSTAL: ".$CP."</label><br>";
               echo "<label>EMAIL: ".$Email."</label><br>";
               echo "<label>FECHA DE INGRESO: ".$Fecha."</label>";

                    try
                         {
                           $conexion = new Conexion();
                           if(!$conexion->conectar())
                              {
                                   throw new Exception($conexion->getError());
                              }
                       $sql = "INSERT INTO empleados (Nombre, ApPaterno, ApMaterno, Direccion, Telefono, CP, Mail, Celular, Ingreso, Seguro, NumSeguro, Puesto,
                        Sexo, EstadoCivil, FNacimiento, Pais, Estado, Titulo, Curp, RFC, Colonia)"."VALUES". "('$Nombre','$AP','$AM','$DOmicilio','$Telefono', 
                        '$CP', '$Email', '$Celular', '$Fecha', '$SS', '$NSS', '$Puesto', '$Sexo', '$EstadoCivil', '$FN', '$Pais', '$Estado', '$Titulo', '$CURP', '$RFC', '$Colonia')";
                       $resultado = $conexion->mysqli->query($sql);
                       $conexion->cerrar();
                         }
                           catch(Exception $e)
                         {
                             echo $e;
                         }
                 echo "<br>";
                 ?>    
  
                <a href="empleados.php"><img id="regresar" src="imagenes/regresar.png"></a>
                  <br/><br/>
                </fieldset><br><br>
     </div>
</body>


</html>
