<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
      <link rel="shortcut icon" href="imagenes/favicon.png" />  
  <link rel="stylesheet" type="text/css" href="estilos/style.css">
</head>
<body>
<?php
class ListarContactos
{
    public $contactos;

    public function generaTabla()
    {
        echo '<table>';
        echo '<tr>';
        echo '<th id="ID">C&oacute;digo  </th>';
    echo '<th id="AP">  Apellido Paterno</th>';
    echo '<th id="AM">  Apellido Materno</th>';
     echo '<th id="Nombre">  Nombre</th>';
        echo "<th id='celular'>Celular</th>";

    echo '<th>  </th>';
               
            echo '</tr>';
            foreach($this->contactos as $contacto){
                echo '<tr>';
                    echo '<td align="center">'.$contacto['id']. '</td>';
                    echo '<td align="center">'.$contacto['ApPaterno'].'</td>';
                    echo '<td align="center">'.$contacto['ApMaterno'].'</td>';
                    echo '<td align="center">'.$contacto['Nombre'].'</td>';
                    echo '<td align="center">'.$contacto['Celular'].'</td>';  
                   
                    echo '<td>
                     <a href="ver.php?id='.$contacto['id'].'"><img id="editarimg" src="imagenes/ver.png"></a>

                  <a href="Eliminar.php?id='.$contacto['id'].'"><img id="eliminarimg" src="imagenes/eliminar.png"></a>

                   <a href="Editar.php?id='.$contacto['id'].'"><img id="editarimg" src="imagenes/edit.png"></a>
                  
                  </td>';
                           
                 
                echo '</tr>';
            }
        echo '<table>';
    }
} 
?>

</body>
</html>
