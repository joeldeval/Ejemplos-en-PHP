<?php
   // Obtiene datos de vista
    $Codigo = $_POST['txtUsuario'];
    $Password = $_POST['txtContra'];

if( ($Codigo == 100 && $Password == "joel") ||
     ($Codigo == 110 && $Password == "tonala")||
      ($Codigo==1 && $Password=="root")){
        session_start(); // Inició de Sesión
        $_SESSION["codigo"] = $Password;
        header("Location: empleados.php"); // Redirección a empleados
      }else{
        header("Location: Sesion.php"); // Redirección a acceder de nuevo
        }
?>

