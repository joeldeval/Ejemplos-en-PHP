<?php
session_start();
if(!isset($_SESSION['codigo'])){
header("Location: Sesion.php");
}
?>
<html>
  <head>
     <title>Nuevo</title>
     <link rel="shortcut icon" href="imagenes/favicon.png" />
     <meta charset="utf-8">    
     <link rel="stylesheet" type="text/css" href="estilos/div.css">
     <link rel="stylesheet" type="text/css" href="estilos/style.css">
     <script type="text/javascript" src="suma.js"></script>
     <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script type="text/javascript">
  $(document).ready(function(){
$('#datepicker').datepicker({
maxDate: '0d'
});
});
</script>
<script type="text/javascript">
  $(document).ready(function(){
$('#datepicker2').datepicker({
 changeMonth: true,
changeYear: true
});
});
</script>
<script type="text/javascript">
  jQuery(function($){
      $.datepicker.regional['es'] = {
            closeText: 'Cerrar',
            prevText: '&#x3c;Ant',
            nextText: 'Sig&#x3e;',
            currentText: 'Hoy',
            monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
            'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
            monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
            'Jul','Ago','Sep','Oct','Nov','Dic'],
            dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
            dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
            dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
            weekHeader: 'Sm',
            dateFormat: 'dd/mm/yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''};
      $.datepicker.setDefaults($.datepicker.regional['es']);
});   
</script>
<script>
  $(document).ready(function(){
    $( "#datepicker2" ).datepicker();
    $( "#datepicker2" ).datepicker( "option", "showAnim", "slide");
  });
  </script>
  <script>
  $(document).ready(function(){
    $( "#datepicker" ).datepicker();
    $( "#datepicker" ).datepicker( "option", "showAnim", "drop");
  });
  </script>
<script>

$(function() {
$( "#datepicker" ).datepicker();
$( "#datepicker" ).datepicker("option", "dateFormat", "yy-mm-dd");
});

</script>
<script>

$(function() {
$( "#datepicker2" ).datepicker();
$( "#datepicker2" ).datepicker("option", "dateFormat", "yy-mm-dd");
});
</script>
  </head>
  <body>

  
       <?php
        echo "<label id=lblusu>Usuario: ".$_SESSION['codigo']."</label>
              <label id='lblsalir'>Salir</label> <a href='cerrarsesion.php'><img id='exitimg' src='imagenes/exit.png'></a>";
       ?>
    
  <div id="contenido"><br/>
     
 <div id="divN">
       <form method="post" action="Guardado.php">

       <fieldset>
        <legend id="H1Laboral">Laboral</legend><br/>
       
        <label for="txtFI" id="lblFI">Fecha de Ingreso</label>
        
       <input type="text" id="datepicker" name="txtFI" value="" readonly="readonly" required><br/><br/>
       
        <label id="lblsocial">Seguridad Social</label>
        <select id="seguridad" name="SS" required>
                <option selected="selected">IMSS</option>
                <option>SEGURO POPULAR</option>
                <option>ISSTE</option>
                <option>Otro</option>
        </select><br/><br/>

        <label for="numero" id="lblNumero">N&uacute;mero De SS</label>
        <input type="text" name="txtNSS" id="txtNSS" size="20" maxlength="11" onkeyUp="return ValNumero(this);" required> 11 dígitos<br/><br/>

        <label id="lblPuesto">Puesto</label>
        <input type="text" name="txtPuesto" id="txtPuesto" size="20" maxlength="100" required><br/><br/>
       </fieldset><br><br>


       <fieldset id='FieldsetNuevo'><legend>Personal</legend>
       <label for="txtNombre" id="lblNombre">Nombre</label>
       <input type="text" id="txtNombre" name="txtNombre" value="" maxlength="50" required ><br/><br/>

       <label for="txtAP" id="lblAP">Apellido Paterno</label>
       <input type="text" id="txtAP" name="txtAP" value="" maxlength="50" required ><br/><br/>
 
       <label for="txtAM" id="lblAM">Apellido Materno</label>
       <input type="text" id="txtAM" name="txtAM" value="" maxlength="50" required ><br/><br/>


       <label id="lblSexo">Sexo</label><br>

       <input type="radio" name="sexo" id="sexoMa" value="Masculino" checked="checked" />
       Hombre
       <input type="radio" name="sexo" id="sexoF" value="Femenino"/>
       Mujer<br/><br/>

        <label id="lblEC">Estado Civil</label>
        <select id="estadoCivil" name="EstadoCivil">
                <option selected="selected">Soltero</option>
                <option>Casado</option>
                <option>Viudo</option>
                <option>Uni&oacute;n Libre</option>
        </select><br/><br/>
</fieldset><br><br>

     <fieldset>
           <legend id="H1Nacimiento" >Nacimiento</legend><br/>

            <label for="txtFI" id="lblFI">Fecha de Nacimiento</label>
       <input type="text" id="datepicker2" name="txtFN" value="" readonly="readonly" required><br/><br/>

            <label id="lblPais">Pais</label>
           <select id="selectPais" name="txtPais" readonly="readonly" required>
              <option value="ZW">México</option>

           </select><br/><br/>

           <label id="lblPais">Estado</label>
           <select id="selectPais" name="txtEstado" readonly="readonly" required>
               <option value="Aguascalientes">Aguascalientes</option>
  <option value="Baja California ">Baja California </option>
  <option value="Baja California Sur ">Baja California Sur </option>
  <option value="Campeche ">Campeche </option>
  <option value="Chiapas ">Chiapas </option>
  <option value="Chihuahua ">Chihuahua </option>
  <option value="Coahuila ">Coahuila </option>
  <option value="Colima ">Colima </option>
  <option value="Distrito Federal">Distrito Federal</option>
  <option value="Durango ">Durango </option>
  <option value="Estado de México ">Estado de México </option>
  <option value="Guanajuato ">Guanajuato </option>
  <option value="Guerrero ">Guerrero </option>
  <option value="Hidalgo ">Hidalgo </option>
  <option value="Jalisco ">Jalisco </option>
  <option value="Michoacán ">Michoacán </option>
  <option value="Morelos ">Morelos </option>
  <option value="Nayarit ">Nayarit </option>
  <option value="Nuevo León ">Nuevo León </option>
  <option value="Oaxaca ">Oaxaca </option>
  <option value="Puebla ">Puebla </option>
  <option value="Querétaro ">Querétaro </option>
  <option value="Quintana Roo ">Quintana Roo </option>
  <option value="San Luis Potosí ">San Luis Potosí </option>
  <option value="Sinaloa ">Sinaloa </option>
  <option value="Sonora ">Sonora </option>
  <option value="Tabasco ">Tabasco </option>
  <option value="Tamaulipas ">Tamaulipas </option>
  <option value="Tlaxcala ">Tlaxcala </option>
  <option value="Veracruz ">Veracruz </option>
  <option value="Yucatán ">Yucatán </option>
  <option value="Zacatecas">Zacatecas</option>
           </select><br/><br/>

          
     </fieldset>

<br/><br/><br/>


  <fieldset><legend>Contacto</legend>

        <label id="lblTitulo">T&iacute;tulo</label>
        <input type="text" name="txtTitulo" id="txtTitulo" size="20" maxlength="100"><br/><br/>

        <label id="lblCURP">CURP</label>
        <input type="text" name="txtCURP" id="textoCURP" size="20" maxlength="18" required> 18 dígitos<br/><br/>

        <label id="lblRFC">RFC</label>
        <input type="text" name="txtRFC" id="textoRFC" size="20" maxlength="13" required> 13 dígitos<br/><br/>

        <label for="txtTelefono" id="lblTelefono">Teléfono Local</label>
       <input type="text" id="txtTelefono" name="txtTelefono" maxlength="8" onkeyUp="return ValNumero(this);"  required> 8 dígitos<br/><br/>

       <label for="txtCelular" id="lblCelular">Celular</label>
       <input type="text" id="txtCelular" name="txtCelular" maxlength="10" onkeyUp="return ValNumero(this);" required> 10 dígitos<br/><br/>

       <label for="txtDireccion" id="lblDomicilio">Domicilio</label>
       <input type="text" id="txtDireccion" name="txtDireccion" value="" maxlength="100" required><br/><br/>

       <label id="lblColonia">Colonia</label>
        <input type="text" name="txtColonia" id="textoColonia" size="20" maxlength="100" required><br/><br/>


       <label for="txtCP" id="lblCP">C&oacute;digo Postal</label>
       <input type="text" id="txtCP" name="txtCP" maxlength="5" onkeyUp="return ValNumero(this);" value="" required> 5 dígitos<br/><br/>

       <label for="txtEmail" id="lblEmail">Correo Electrónico</label>
       <input type="text" id="txtEmail" name="txtEmail" value="" maxlength="100" required><br/><br/>

       <br/>
<center>
  <a href="empleados.php"><img id="regresar" src="imagenes/regresar.png"></a>
       <input type="submit" id="guardar" name="guardar" value="Guardar">
</center>
    
      </form>
     </fieldset><br>
     </div>
   </div>

</body>
</html>
