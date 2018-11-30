<?php
include("conexion.php");
$mysqli = conectar();
$DOCUMENTO = $_GET['DOCUMENTO'];
$NOMBRE = $_GET['NOMBRE'];
$APELLIDO = $_GET['APELLIDO'];
$DIRECCION = $_GET['DIRECCION'];
$TELEFONO = $_GET['TELEFONO'];
$EDAD = $_GET['EDAD'];
$CIUDAD = $_GET['CIUDAD'];
$TIPO_DOCUMENTO = $_GET['TIPO_DOCUMENTO'];
$ENTIDAD_PROVENIENTE = $_GET['ENTIDAD_PROVENIENTE'];
$USUARIO = $_GET['USUARIO'];
$CLAVE = $_GET['CLAVE'];
$sql = $mysqli->query("INSERT INTO usuario (ID_USUARIO, USERNAME,PASSWORD,ROL, DOCUMENTO) VALUES (NULL, '$USUARIO', '$CLAVE', 'biologo', '$DOCUMENTO')");
if ($sql==1){
$sql = $mysqli->query("insert into biologo (DOCUMENTO,NOMBRE, APELLIDO,DIRECCION,TELEFONO,EDAD,CUIDAD,TIPO_DOCUMENTO,ENTIDAD_PROVENIENTE) values ('$DOCUMENTO', '$NOMBRE', '$APELLIDO',  '$DIRECCION','$TELEFONO','$EDAD','$CIUDAD','$TIPO_DOCUMENTO','$ENTIDAD_PROVENIENTE')");
}
 else {
    echo '<SCRIPT LANGUAGE="javascript">
    alert(" el bilogo no fue Registrado");
</SCRIPT>';    
}
?>	

<SCRIPT LANGUAGE="javascript">
    alert(" el biologo fue Registrado");
</SCRIPT> 
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_biologo.php">