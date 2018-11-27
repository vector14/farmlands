<?php


	$ID_GRANJA = $_GET['ID_GRANJA'];
	include("conexion.php");
	$mysqli=conectar();		
	$sql = $mysqli->query("delete from  granja where ID_GRANJA='$ID_GRANJA'");	
	echo "eliminado";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=consultar_granja.php'>";
		 

?>