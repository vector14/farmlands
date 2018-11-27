<?php


	$ID_PLANTA = $_GET['ID_PLANTA'];
	include("conexion.php");
$mysqli=conectar();		
	$sql = $mysqli->query("delete from muestrap where ID_PLANTA='$ID_PLANTA'");	
	echo "eliminado";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=consultar_muestrap.php'>";
		 

?>