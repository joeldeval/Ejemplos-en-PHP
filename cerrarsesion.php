<?php
session_start();
if(!isset($_SESSION['codigo'])){
        header("Location: Sesion.php");
}
session_destroy();
header("Location: Sesion.php");

?>
