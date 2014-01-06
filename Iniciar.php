<?php
   
    $Codigo = $_POST['txtUsuario'];
    $Password = $_POST['txtContra'];
if( ($Codigo == 100 && $Password == "joel") ||
     ($Codigo == 110 && $Password == "tonala")||
      ($Codigo==1 && $Password=="root")){
        session_start();
        $_SESSION["codigo"] = $Password;
        header("Location: empleados.php");
      }else{
        header("Location: Sesion.php");
        }
?>

