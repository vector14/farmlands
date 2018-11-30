<?php
include("conexion.php");
$mysqli = conectar();
$DOCUMENTO = $_GET['DOCUMENTO'];
$NOMBRE = $_GET['NOMBRE'];
$APELLIDO = $_GET['APELLIDO'];
$TIPO_DOCUMENTO = $_GET['TIPO_DOCUMENTO'];
$MUNICIPIO = $_GET['MUNICIPIO'];
$DEPARTAMENTO = $_GET['DEPARTAMENTO'];
$EDAD = $_GET['EDAD'];
$USUARIO = $_GET['USUARIO'];
$CLAVE = $_GET['CLAVE'];
$sql = $mysqli->query("INSERT INTO usuario (ID_USUARIO, USERNAME,PASSWORD,ROL, DOCUMENTO) VALUES (NULL, '$USUARIO', '$CLAVE', 'granjero', '$DOCUMENTO')");
if ($sql==1){

$sql = $mysqli->query("insert into granjero (DOCUMENTO, NOMBRE, APELLIDO,TIPO_DOCUMENTO,MUNICIPIO,DEPARTAMENTO,EDAD ) values ('$DOCUMENTO', '$NOMBRE', '$APELLIDO','$TIPO_DOCUMENTO','$MUNICIPIO','$DEPARTAMENTO','$EDAD' ) ");
 
}else {
    echo '<SCRIPT LANGUAGE="javascript">
    alert(" el granjero no fue Registrado");
</SCRIPT>';    
}
?>	
?>	

<SCRIPT LANGUAGE="javascript">
    alert(" el granjero fue Registrado");
</SCRIPT> 

<META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_granjero.php">