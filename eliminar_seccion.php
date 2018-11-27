<?php


	$ID_SECCION = $_GET['ID_SECCION'];
	include("conexion.php");
	$mysqli=conectar();		
	$sql = $mysqli->query("delete from seccion_de_cultivo  where ID_SECCION ='$ID_SECCION' ");	
	echo "eliminado";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=consultar_seccion_de_cultivo.php'>";
		 

?>