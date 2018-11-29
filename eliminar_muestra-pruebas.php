<?php


	$ID_MUESTRA = $_GET['ID_MUESTRA'];
	include("conexion.php");
$mysqli=conectar();		
	$sql = $mysqli->query("delete from muestra_prueba where ID_MUESTRA='$ID_MUESTRA'");	
	echo "eliminado";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=consultar_muestra-pruebas.php'>";
		 

?>