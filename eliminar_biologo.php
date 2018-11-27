<?php


	$DOCUMENTO = $_GET['DOCUMENTO'];
	include("conexion.php");
$mysqli=conectar();	
	$sql = $mysqli->query("delete from biologo where DOCUMENTO='$DOCUMENTO'");	
	echo "eliminado";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=consultar_biologo.php'>";
		 

?>