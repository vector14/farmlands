<?php


	$ID_SUBASTA = $_GET['ID_SUBASTA'];
	include("conexion.php");
$mysqli=conectar();		
	$sql = $mysqli->query("delete from subasta where ID_SUBASTA='$ID_SUBASTA'");	
	echo "eliminado";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=consultar_subasta.php'>";
		 

?>