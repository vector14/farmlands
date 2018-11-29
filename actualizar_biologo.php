<?php
session_start();
include("conexion.php");
$mysqli = conectar();
$DOCUMENTO = $_POST['documento'];
$NOMBRE = $_POST['nombre'];
$APELLIDO = $_POST['apellido'];
$DIRECCION = $_POST['direccion'];
$TELEFONO = $_POST['telefono'];
$EDAD = $_POST['edad'];
$CIUDAD = $_POST['ciudad'];
$TIPO_DOCUMENTO = $_POST['tipo_documento'];
$ENTIDAD_PROVENIENTE = $_POST['entidad_proviniente'];


$sql = $mysqli->query("UPDATE biologo SET NOMBRE = '$NOMBRE', APELLIDO = '$APELLIDO', DIRECCION = '$DIRECCION', TELEFONO = '$TELEFONO', EDAD = '$EDAD', CUIDAD = '$CIUDAD', TIPO_DOCUMENTO = '$TIPO_DOCUMENTO', ENTIDAD_PROVENIENTE = '$ENTIDAD_PROVENIENTE' WHERE DOCUMENTO = '$DOCUMENTO'");

?>	

<SCRIPT LANGUAGE="javascript">
    alert(" el BIOLOGO fue ACTUALIZADO");
</SCRIPT> 
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_biologo.php">
