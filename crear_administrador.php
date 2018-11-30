<?php
include("conexion.php");
$mysqli = conectar();
$DOCUMENTO = $_GET['DOCUMENTO'];
$NOMBRE = $_GET['NOMBRE'];
$APELLIDO = $_GET['APELLIDO'];
$CIUDAD = $_GET['CIUDAD'];
$CORREO = $_GET['CORREO'];
$TELEFONO = $_GET['TELEFONO'];
$USUARIO = $_GET['USUARIO'];
$CLAVE = $_GET['CLAVE'];


$sql = $mysqli->query("INSERT INTO usuario (ID_USUARIO, USERNAME,PASSWORD,ROL, DOCUMENTO) VALUES (NULL, '$USUARIO', '$CLAVE', 'administrador', '$DOCUMENTO')");
if ($sql==1){
    $sql = $mysqli->query("insert into administrador (DOCUMENTO, NOMBRE, APELLIDO,CIUDAD,CORREO,TELEFONO) values ('$DOCUMENTO', '$NOMBRE', '$APELLIDO','$CIUDAD','$CORREO','$TELEFONO') ");

}
 else {
    echo '<SCRIPT LANGUAGE="javascript">
    alert(" el administrador no  fue Registrado");
</SCRIPT>';    
}
?>	

<SCRIPT LANGUAGE="javascript">
    alert(" el administrador fue Registrado");
</SCRIPT> 
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=consultar_administrador.php">
